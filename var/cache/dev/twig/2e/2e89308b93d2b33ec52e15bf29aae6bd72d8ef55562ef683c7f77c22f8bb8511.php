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

/* blog/blogartikel.html.twig */
class __TwigTemplate_09130c5287b086f38b431907997e82de7e249b514cc63eed3ec78ff3f391a966 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blogartikel.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Blog Artikel</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
        integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            margin: 0px;
            padding: 0px
        }
    </style>
</head>

<body class=\"bg-dark\">

    <div class=\"container mt-5 h-100\">

        <!-- picture -->
        <div class=\"col-12 h-50\">
            <img style=\"height:100%; width: 100%;\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 27, $this->source); })()), "getPicture", [], "any", false, false, false, 27), "html", null, true);
        echo "\" alt=\"\">
        </div>

        <!-- Title -->
        <div class=\"container mt-5 text-light col-6 text-center\">
            <h1>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 32, $this->source); })()), "getTitle", [], "method", false, false, false, 32), "html", null, true);
        echo "</h1>
        </div>

        <!-- Author and date -->
        <div class=\"mt-4 border border-primary col-4 p-4 container text-center rounded-pill\">
            <span class=\"text-light font-weight-bold\">From ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 37, $this->source); })()), "getAuthor", [], "method", false, false, false, 37), "html", null, true);
        echo " </span> <br>
            <span class=\"text-light\">Published on :";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 38, $this->source); })()), "getDate", [], "method", false, false, false, 38), "html", null, true);
        echo " </span>
        </div>

        <!-- Quill -->
        <div  id=\"delta\" data-is-delta=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 42, $this->source); })()), "getDelta", [], "method", false, false, false, 42), "html", null, true);
        echo "\" class=\"h-auto mb-4 col-12 container text-white\">

            ";
        // line 44
        echo twig_include($this->env, $context, "@includes/quill.php");
        echo "
            ";
        // line 45
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 45, $this->source); })()), "getDelta", [], "method", false, false, false, 45))) {
            // line 46
            echo "            <script>
                var blog_id = \"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 47, $this->source); })()), "getId", [], "method", false, false, false, 47), "html", null, true);
            echo "\";
                var artikel = \$('#delta').data('isDelta');
                quill.setContents(artikel);
            </script>
            ";
        } else {
            // line 52
            echo "            <script>var blog_id = \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 52, $this->source); })()), "getId", [], "method", false, false, false, 52), "html", null, true);
            echo "\";</script>
            ";
        }
        // line 54
        echo "
        </div>

    </div>

</body>

</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "blog/blogartikel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 54,  118 => 52,  110 => 47,  107 => 46,  105 => 45,  101 => 44,  96 => 42,  89 => 38,  85 => 37,  77 => 32,  68 => 27,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Blog Artikel</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
        integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            margin: 0px;
            padding: 0px
        }
    </style>
</head>

<body class=\"bg-dark\">

    <div class=\"container mt-5 h-100\">

        <!-- picture -->
        <div class=\"col-12 h-50\">
            <img style=\"height:100%; width: 100%;\" src=\"{{asset('images/')}}{{blog.getPicture}}\" alt=\"\">
        </div>

        <!-- Title -->
        <div class=\"container mt-5 text-light col-6 text-center\">
            <h1>{{blog.getTitle()}}</h1>
        </div>

        <!-- Author and date -->
        <div class=\"mt-4 border border-primary col-4 p-4 container text-center rounded-pill\">
            <span class=\"text-light font-weight-bold\">From {{blog.getAuthor()}} </span> <br>
            <span class=\"text-light\">Published on :{{blog.getDate()}} </span>
        </div>

        <!-- Quill -->
        <div  id=\"delta\" data-is-delta=\"{{ blog.getDelta() }}\" class=\"h-auto mb-4 col-12 container text-white\">

            {{ include('@includes/quill.php') }}
            {% if blog.getDelta() is not empty %}
            <script>
                var blog_id = \"{{ blog.getId() }}\";
                var artikel = \$('#delta').data('isDelta');
                quill.setContents(artikel);
            </script>
            {% else %}
            <script>var blog_id = \"{{ blog.getId() }}\";</script>
            {% endif %}

        </div>

    </div>

</body>

</html>", "blog/blogartikel.html.twig", "C:\\wamp64\\www\\QuillBlog\\templates\\blog\\blogartikel.html.twig");
    }
}
