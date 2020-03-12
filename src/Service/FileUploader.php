<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    private $blogTargetDirectory;

    public function __construct($blogTargetDirectory)
    {
        $this->blogTargetDirectory = $blogTargetDirectory;
    }

    //Upload picture from quill
    public function upload_fromQuill(UploadedFile $file)
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
        // $fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
        $fileName = $safeFilename.".".$file->guessExtension();

        try {
            $file->move($this->getBlogTargetDirectory(), $fileName);
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
        }

        return $fileName;
    }

    //Upload picture from create blog form
    public function upload_blog_main_pic(UploadedFile $file,$id)
    {
        $fileName = "blog_main_picture_{$id}.{$file->guessExtension()}";

        try {
            $file->move($this->getBlogTargetDirectory(), $fileName);
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
        }
        return $fileName;
    }


    public function getBlogTargetDirectory()
    {
        return $this->blogTargetDirectory;
    }
}