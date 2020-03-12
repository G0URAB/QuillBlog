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

/* blog/index.html.twig */
class __TwigTemplate_344491f03a0b76e3a3b47f059b196e5817782f5f45e0242bdb68497e29dc27a4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

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
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) || array_key_exists("blogs", $context) ? $context["blogs"] : (function () { throw new RuntimeError('Variable "blogs" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 63
            echo "                <div class=\"blog-container bg-secondary col-lg-4 col-md-6\">
                    <a href=\"#\"><img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getPicture", [], "method", false, false, false, 64), "html", null, true);
            echo "\" alt=\"\"></a>
                    <span class=\"title\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getTitle", [], "any", false, false, false, 65), "html", null, true);
            echo "</span>
                    <hr>
                    <div class=\"date\"> Published on ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getDate", [], "any", false, false, false, 67), "html", null, true);
            echo "</div>
                    <div class=\"reading_time\">Reading time: ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "getReadingTime", [], "any", false, false, false, 68), "html", null, true);
            echo "</div>
                    <div style=\"clear: both;\"></div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </div>
    </div>

    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/blogs.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 76,  142 => 75,  137 => 72,  127 => 68,  123 => 67,  118 => 65,  113 => 64,  110 => 63,  106 => 62,  51 => 10,  40 => 1,);
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
                <div class=\"blog-container bg-secondary col-lg-4 col-md-6\">
                    <a href=\"#\"><img src=\"{{asset('images/')}}{{blog.getPicture()}}\" alt=\"\"></a>
                    <span class=\"title\">{{blog.getTitle}}</span>
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

</html>", "blog/index.html.twig", "C:\\wamp64\\www\\QuillBlog\\templates\\blog\\index.html.twig");
    }
}
