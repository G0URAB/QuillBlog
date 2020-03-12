<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Repository\BlogRepository;
use App\Service\FileUploader;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog")
     */
    public function index()
    {
        $blogs = $this->getDoctrine()->getRepository(Blog::class)
            ->findAll();

        return $this->render('blog/blogs.html.twig', [
            'blogs' => $blogs
        ]);
    }


    /**
     * @Route("/blogartikel/{id?}", name="blogartikel")
     */
    public function blogartikel(Request $request)
    {
        $blog = $this->getDoctrine()->getRepository(Blog::class)
            ->find($request->get('id'));

        return $this->render('blog/blogartikel.html.twig', [
            'blog' => $blog
        ]);
    }

    /**
     *  @Route("/blog/ajax", name="blogartikel_ajax")
     */
    public function store(Request $request, FileUploader $uploader, SessionInterface $session, BlogRepository $blogRepository)
    {
        if ($request->isXMLHttpRequest()) {

            if (isset($_POST['type'])) {

                if ($request->request->get("type") == "upload_blog") {

                    $title = $request->request->get("blog_name");
                    $author = $request->request->get("blog_author");
                    $date = $request->request->get("blog_date") == "" ?
                        "" : date_create($request->request->get("blog_date"));
                    $reading_time = $request->request->get("blog_reading_time") == "" ?
                        "" : $request->request->get("blog_reading_time");

                    if ($title == "")
                        return new JsonResponse(['status' => false, 'msg' => "Please write a title"]);
                    if ($date == "")
                        return new JsonResponse(['status' => false, 'msg' => "Please provide a date"]);
                    if ($reading_time == "")
                        return new JsonResponse(['status' => false, 'msg' => "Please provide a reading time"]);
                    if ($author == "")
                        return new JsonResponse(['status' => false, 'msg' => "Please provide an author"]);

                    $blog = new Blog();
                    $em = $this->getDoctrine()->getManager();
                    $blog->setTitle($title);
                    if ($date != "")
                        $blog->setDate(date_format($date, "j-M-Y"));
                    $blog->setReadingTime($reading_time);
                    $blog->setAuthor($author);


                    //Upload blog picture $request->files->get('image');
                    if (($request->files->get("blog_picture")) != null) {
                        try {
                            $new_blog_id = ($blogRepository->findLastRecord())[0]->getId() + 1;
                            $new_file_name = $uploader->upload_blog_main_pic($request->files->get("blog_picture"), $new_blog_id);
                            $blog->setPicture($new_file_name);
                        } catch (Exception $e) {
                            $new_blog_id = 1;
                            $new_file_name = $uploader->upload_blog_main_pic($request->files->get("blog_picture"), $new_blog_id);
                            $blog->setPicture($new_file_name);
                        }
                    }
                    //Save tp blog table
                    $em->persist($blog);
                    $em->flush();

                    return new JsonResponse(['status' => true, 'msg' => "Success!!"]);
                }

                //quill insert
                if ($_POST['type'] == 'insert_delta') {

                    $id = $_POST['id'];
                    $delta = $_POST['content'];
                    $em = $this->getDoctrine()->getManager();
                    $blog = $em->getRepository(Blog::class)->find($id);
                    $blog->setDelta($delta);
                    $em->persist($blog);
                    $em->flush();

                    //This section is for deleting images

                    /**
                     * $new_image_array extracts images from current
                     * brand new delta.
                     */
                    $new_image_array = [];
                    $json_array = json_decode($delta);
                    foreach ($json_array->ops as $child_ops) {
                        if (isset($child_ops->insert->image))
                            array_push($new_image_array, $child_ops->insert->image);
                    }
                    //print_r($image_array);

                    /**$_POST['files'] is an array which gets filled by 
                     * ImageHandler in frontend, when user clicks on image 
                     * upload button.
                     */
                    if (isset($_POST['files'])) {
                        for ($i = 0; $i < sizeof($_POST['files']); $i++) {
                            $delete_image = true;
                            foreach ($new_image_array as $image) {
                                if (strpos($image, $_POST['files'][$i]) !== false)
                                    $delete_image = false;
                            }
                            if ($delete_image) {
                                $url = $this->urlPackage->getUrl($_POST['files'][$i]);
                                unlink($_SERVER['DOCUMENT_ROOT'] . "\\images\\" . $_POST['files'][$i]);
                            }
                        }
                    }

                    /**
                     * $old_image_array extracts images from old delta.
                     */
                    $old_image_array = [];
                    if ($session->get('old_delta') !== null) {
                        $json_array = json_decode($session->get('old_delta'));
                        foreach ($json_array->ops as $child_ops) {
                            if (isset($child_ops->insert->image))
                                array_push($old_image_array, $child_ops->insert->image);
                        }

                        foreach ($old_image_array as $old_image) {
                            $delete_image = true;
                            foreach ($new_image_array as $new_image) {
                                if ($new_image == $old_image)
                                    $delete_image = false;
                            }
                            if ($delete_image) {
                                $url = $this->urlPackage->getUrl(str_replace("http://127.0.0.1:8080/images/", '', $old_image));
                                unlink($_SERVER['DOCUMENT_ROOT'] . "\\images\\" .
                                    str_replace("http://127.0.0.1:8000/images/", '', $old_image));
                            }
                        }
                    }

                    return new JsonResponse(array("status" => "Blog Updated"));
                } else if ($_POST['type'] == 'delete') {
                    for ($i = 0; $i < sizeof($_POST['files']); $i++) {
                        if (file_exists($this->urlPackage->getUrl($_POST['files'][$i])))
                            unlink($this->urlPackage->getUrl($_POST['files'][$i]));
                    }
                }
            }

            if (isset($_FILES['image'])) {

                $image = $request->files->get('image');

                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $fileName = $safeFilename . "." . $image->guessExtension();
                //dd($fileName);

                $url = $this->urlPackage->getUrl($fileName);
                if ($uploader->upload_fromQuill($image))
                    return new JsonResponse(array("status" => "Image upload success", "url" => $url));
                else
                    return new JsonResponse(array("status" => "Image upload failed"));
            }
        }

        //Main Blog page
        //Edit Blog Meta data
        if ($request->request->get("edit_blog_button_save")) {
            $blog = $this->getDoctrine()->getRepository(Blog::class)
                ->find($request->request->get("blog_id"));
            $blog->setTitle($request->request->get("blog_name"));
            $blog->setDate(date_format(date_create($request->request->get("blog_date")), "j-M-Y"));
            $blog->setReadingTime($request->request->get("blog_reading_time"));
            $blog->setAuthor($request->request->get("blog_author"));

            //check if new picture
            if ($request->files->get("blog_picture") != null) {
                //if the new pic not equal to old pic in database then delete 
                if ($request->files->get("blog_picture")->getClientOriginalName() != $blog->getBigPicture())
                    unlink($_SERVER['DOCUMENT_ROOT'] . "\\images\\" . $blog->getBigPicture());
                //upload the new pic with current blog_id
                $new_file_name = $uploader->upload_blog_main_pic($request->files->get("blog_picture"), $request->request->get("blog_id"));
                $blog->setPicture($new_file_name);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($blog);
            $em->flush();

            return $this->redirectToRoute("blog");
        }

        //Delete record
        if ($request->request->get("edit_blog_button_save") == null) {
            $blog = $this->getDoctrine()->getRepository(Blog::class)
                ->find($request->request->get("blog_id"));
            $em = $this->getDoctrine()->getManager();
            $em->remove($blog);
            $em->flush();
            return $this->redirectToRoute("blog");
        }

        return new Response('Invalid request', 400);
    }
}
