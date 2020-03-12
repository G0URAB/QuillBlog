<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog/blogs.html.twig */
class __TwigTemplate_64bd5fbe47bdd8e1e797bcaefe3c33aa9b44938610b18914b5d68ab6c0dc4835 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blogs.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Blogs</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
        integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\">
</head>

<body class=\"bg-dark\">

    <div class=\"blog-create-sidebar\">
        <!-- Form for blog meta-data -->
        <div class=\"box bootstrap-iso\">
            <form id=\"blog_form\" enctype=\"multipart/form-data\" action=\"javascript:void(0)\">
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"basic-addon1\">Blog Name</span>
                    </div>
                    <input type=\"text\" name=\"blog_name\" class=\"form-control\" placeholder=\"Enter name of blog\"
                        aria-label=\"blog_name\" aria-describedby=\"basic-addon1\">
                </div>
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"basic-addon2\">Published On</span>
                    </div>
                    <input type=\"date\" name=\"blog_date\" class=\"form-control\" placeholder=\"\" aria-label=\"blog_date\"
                        aria-describedby=\"basic-addon2\">
                </div>
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"basic-addon3\">Reading Time</span>
                    </div>
                    <input type=\"text\" name=\"blog_reading_time\" class=\"form-control\" placeholder=\"20 mins\"
                        aria-label=\"blog_reading_time\" aria-describedby=\"basic-addon3\">
                </div>
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"basic-addon3\">Author</span>
                    </div>
                    <input type=\"text\" name=\"blog_author\" class=\"form-control\" placeholder=\"Author\"
                        aria-label=\"blog_author\" aria-describedby=\"basic-addon3\">
                </div>
                <div class=\"form-group\">
                    <label for=\"blog_picture\">Blog Picture</label>
                    <input type=\"file\" class=\"form-control\" name=\"blog_picture\" />
                </div>

                <button id=\"upload-blog-button\" class=\"btn btn-dark mt-2\">Upload Blog</button>
                <button id=\"cancel-upload-blog-button\" class=\"btn btn-dark mt-2\">Cancel</button>
            </form>
        </div>
    </div>

    <div class=\"container mt-5 w-75 h-75\">
        <h1 class=\"text-light float-left\">Blogs</h1>

        <!-- Add blog button -->
        <div class=\"btn btn-primary float-right\" id=\"add_blog_btn\">
            Add a new blog
        </div>
        <div style=\"clear: both;\"></div>
        <hr>

        <div class=\"row col-12\">
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) || array_key_exists("blogs", $context) ? $context["blogs"] : (function () { throw new RuntimeError('Variable "blogs" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 70
            echo "            <div class=\"blog-container bg-secondary col-lg-5 col-md-4 mr-4 ml-4 mt-4\">
                <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blogartikel", ["id" => twig_get_attribute($this->env, $this->source, $context["blog"], "getId", [], "method", false, false, false, 71)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getPicture", [], "method", false, false, false, 71), "html", null, true);
            echo "\"
                        alt=\"\"></a>

                <!-- Edit Blog div -->
                <div id=\"edit_blog_div_";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getId", [], "method", false, false, false, 75), "html", null, true);
            echo "\" 
                    style=\"position:absolute; z-index:1000;display:none; margin-top:-5%;background-color: darkslategrey; margin-left:4%\">

                    <form id=\"edit_blog_form_";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getId", [], "method", false, false, false, 78), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" action=\"blog/ajax\"
                        method=\"POST\">
                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"basic-addon1\">Blog Name</span>
                            </div>
                            <input type=\"text\" name=\"blog_name\" class=\"form-control\" aria-label=\"blog_name\"
                                aria-describedby=\"basic-addon1\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getTitle", [], "method", false, false, false, 85), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"basic-addon2\">Published On</span>
                            </div>
                            <input type=\"text\" name=\"blog_date\" class=\"form-control\"
                                value=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getDate", [], "method", false, false, false, 92), "d-M-Y"), "html", null, true);
            echo "\" aria-label=\"blog_date\"
                                aria-describedby=\"basic-addon2\" placeholder=\"date-Month-Year\" required>
                        </div>
                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"basic-addon3\">Reading Time</span>
                            </div>
                            <input type=\"text\" name=\"blog_reading_time\" class=\"form-control\"
                                value=\"";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getReadingTime", [], "method", false, false, false, 100), "html", null, true);
            echo "\" aria-label=\"blog_reading_time\"
                                aria-describedby=\"basic-addon3\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"file\" class=\"form-control\" name=\"blog_picture\" />
                        </div>

                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"basic-addon3\">Author</span>
                            </div>
                            <input type=\"text\" name=\"blog_author\" class=\"form-control\"
                                value=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getAuthor", [], "method", false, false, false, 112), "html", null, true);
            echo "\" aria-label=\"blog_author\"
                                aria-describedby=\"basic-addon3\">
                        </div>

                        <input type=\"hidden\" name=\"blog_id\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getId", [], "method", false, false, false, 116), "html", null, true);
            echo "\">
                        <input name=\"edit_blog_button_save\" type=\"submit\" class=\"btn btn-success mt-2\" value=\"Save\">
                        <input type=\"button\" class=\"btn btn-dark mt-2\" value=\"Cancel\"
                            onclick='document.getElementById(\"edit_blog_div_";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getId", [], "method", false, false, false, 119), "html", null, true);
            echo "\").style.display=\"none\"'>
                        <input name=\"edit_blog_button_delete\" type=\"button\" class=\"btn btn-danger mt-2\" value=\"Delete\"
                            onclick=\"if(confirm('Do you really want to delete this blog?')){
                                            this.form.submit();
                                        }   
                                        else 
                                            return false\">
                    </form>
                </div>

                <span class=\"title\">";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getTitle", [], "any", false, false, false, 129), "html", null, true);
            echo "</span>
                <button class=\"btn btn-info\" id=\"edit_blog_button_";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getId", [], "method", false, false, false, 130), "html", null, true);
            echo "\" style=\"float:right;\" onclick='document.getElementById(\"edit_blog_div_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getId", [], "method", false, false, false, 130), "html", null, true);
            echo "\").style.display=\"flex\";
                                     document.getElementById(\"edit_blog_form_";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getId", [], "method", false, false, false, 131), "html", null, true);
            echo "\").reset();'>Modify /
                    Edit</button>
                <hr>
                <div class=\"date\"> Published on ";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getDate", [], "any", false, false, false, 134), "html", null, true);
            echo "</div>
                <div class=\"reading_time\">Reading time: ";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getReadingTime", [], "any", false, false, false, 135), "html", null, true);
            echo "</div>
                <div style=\"clear: both;\"></div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "        </div>
    </div>

    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/blogs.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "blog/blogs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 143,  243 => 142,  238 => 139,  228 => 135,  224 => 134,  218 => 131,  212 => 130,  208 => 129,  195 => 119,  189 => 116,  182 => 112,  167 => 100,  156 => 92,  146 => 85,  136 => 78,  130 => 75,  120 => 71,  117 => 70,  113 => 69,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Blogs</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
        integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{asset('css/blog.css')}}\">
</head>

<body class=\"bg-dark\">

    <div class=\"blog-create-sidebar\">
        <!-- Form for blog meta-data -->
        <div class=\"box bootstrap-iso\">
            <form id=\"blog_form\" enctype=\"multipart/form-data\" action=\"javascript:void(0)\">
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"basic-addon1\">Blog Name</span>
                    </div>
                    <input type=\"text\" name=\"blog_name\" class=\"form-control\" placeholder=\"Enter name of blog\"
                        aria-label=\"blog_name\" aria-describedby=\"basic-addon1\">
                </div>
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"basic-addon2\">Published On</span>
                    </div>
                    <input type=\"date\" name=\"blog_date\" class=\"form-control\" placeholder=\"\" aria-label=\"blog_date\"
                        aria-describedby=\"basic-addon2\">
                </div>
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"basic-addon3\">Reading Time</span>
                    </div>
                    <input type=\"text\" name=\"blog_reading_time\" class=\"form-control\" placeholder=\"20 mins\"
                        aria-label=\"blog_reading_time\" aria-describedby=\"basic-addon3\">
                </div>
                <div class=\"input-group mb-3\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"basic-addon3\">Author</span>
                    </div>
                    <input type=\"text\" name=\"blog_author\" class=\"form-control\" placeholder=\"Author\"
                        aria-label=\"blog_author\" aria-describedby=\"basic-addon3\">
                </div>
                <div class=\"form-group\">
                    <label for=\"blog_picture\">Blog Picture</label>
                    <input type=\"file\" class=\"form-control\" name=\"blog_picture\" />
                </div>

                <button id=\"upload-blog-button\" class=\"btn btn-dark mt-2\">Upload Blog</button>
                <button id=\"cancel-upload-blog-button\" class=\"btn btn-dark mt-2\">Cancel</button>
            </form>
        </div>
    </div>

    <div class=\"container mt-5 w-75 h-75\">
        <h1 class=\"text-light float-left\">Blogs</h1>

        <!-- Add blog button -->
        <div class=\"btn btn-primary float-right\" id=\"add_blog_btn\">
            Add a new blog
        </div>
        <div style=\"clear: both;\"></div>
        <hr>

        <div class=\"row col-12\">
            {% for blog in blogs %}
            <div class=\"blog-container bg-secondary col-lg-5 col-md-4 mr-4 ml-4 mt-4\">
                <a href=\"{{path('blogartikel',{id:blog.getId()})}}\"><img src=\"{{asset('images/')}}{{blog.getPicture()}}\"
                        alt=\"\"></a>

                <!-- Edit Blog div -->
                <div id=\"edit_blog_div_{{blog.getId()}}\" 
                    style=\"position:absolute; z-index:1000;display:none; margin-top:-5%;background-color: darkslategrey; margin-left:4%\">

                    <form id=\"edit_blog_form_{{blog.getId()}}\" enctype=\"multipart/form-data\" action=\"blog/ajax\"
                        method=\"POST\">
                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"basic-addon1\">Blog Name</span>
                            </div>
                            <input type=\"text\" name=\"blog_name\" class=\"form-control\" aria-label=\"blog_name\"
                                aria-describedby=\"basic-addon1\" value=\"{{blog.getTitle()}}\">
                        </div>
                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"basic-addon2\">Published On</span>
                            </div>
                            <input type=\"text\" name=\"blog_date\" class=\"form-control\"
                                value=\"{{blog.getDate()|date(\"d-M-Y\")}}\" aria-label=\"blog_date\"
                                aria-describedby=\"basic-addon2\" placeholder=\"date-Month-Year\" required>
                        </div>
                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"basic-addon3\">Reading Time</span>
                            </div>
                            <input type=\"text\" name=\"blog_reading_time\" class=\"form-control\"
                                value=\"{{blog.getReadingTime()}}\" aria-label=\"blog_reading_time\"
                                aria-describedby=\"basic-addon3\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"file\" class=\"form-control\" name=\"blog_picture\" />
                        </div>

                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"basic-addon3\">Author</span>
                            </div>
                            <input type=\"text\" name=\"blog_author\" class=\"form-control\"
                                value=\"{{blog.getAuthor()}}\" aria-label=\"blog_author\"
                                aria-describedby=\"basic-addon3\">
                        </div>

                        <input type=\"hidden\" name=\"blog_id\" value=\"{{blog.getId()}}\">
                        <input name=\"edit_blog_button_save\" type=\"submit\" class=\"btn btn-success mt-2\" value=\"Save\">
                        <input type=\"button\" class=\"btn btn-dark mt-2\" value=\"Cancel\"
                            onclick='document.getElementById(\"edit_blog_div_{{blog.getId()}}\").style.display=\"none\"'>
                        <input name=\"edit_blog_button_delete\" type=\"button\" class=\"btn btn-danger mt-2\" value=\"Delete\"
                            onclick=\"if(confirm('Do you really want to delete this blog?')){
                                            this.form.submit();
                                        }   
                                        else 
                                            return false\">
                    </form>
                </div>

                <span class=\"title\">{{blog.getTitle}}</span>
                <button class=\"btn btn-info\" id=\"edit_blog_button_{{blog.getId()}}\" style=\"float:right;\" onclick='document.getElementById(\"edit_blog_div_{{blog.getId()}}\").style.display=\"flex\";
                                     document.getElementById(\"edit_blog_form_{{blog.getId()}}\").reset();'>Modify /
                    Edit</button>
                <hr>
                <div class=\"date\"> Published on {{ blog.getDate }}</div>
                <div class=\"reading_time\">Reading time: {{ blog.getReadingTime }}</div>
                <div style=\"clear: both;\"></div>
            </div>
            {% endfor %}
        </div>
    </div>

    <script src=\"{{asset('js/jquery-3.3.1.min.js')}}\"></script>
    <script src=\"{{asset('js/blogs.js')}}\"></script>
</body>

</html>", "blog/blogs.html.twig", "C:\\wamp64\\www\\QuillBlog\\templates\\blog\\blogs.html.twig");
    }
}
