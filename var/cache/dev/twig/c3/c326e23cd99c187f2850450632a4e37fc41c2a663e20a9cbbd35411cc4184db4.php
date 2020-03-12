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

/* @app/var/cache/dev/twig/9b/9b70e714d60a138d0e322bf3095969076030a007bab8d1fbaeabf3392a8aef77.php */
class __TwigTemplate_309e1db7d756b29952f83deb78547f1e2364c0a37848c55a48de6725732d91c3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/var/cache/dev/twig/9b/9b70e714d60a138d0e322bf3095969076030a007bab8d1fbaeabf3392a8aef77.php"));

        // line 1
        echo "<?php

use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Extension\\SandboxExtension;
use Twig\\Markup;
use Twig\\Sandbox\\SecurityError;
use Twig\\Sandbox\\SecurityNotAllowedTagError;
use Twig\\Sandbox\\SecurityNotAllowedFilterError;
use Twig\\Sandbox\\SecurityNotAllowedFunctionError;
use Twig\\Source;
use Twig\\Template;

/* blog/index.html.twig */
class __TwigTemplate_3d7e15bafd621318fad399f957235415f98938fa361a9c7ea3b9aac2f22cdaf7 extends Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"blog/index.html.twig\"));

        // line 1
        echo \"<!DOCTYPE html>
<html lang=\\\"en\\\">

<head>
    <meta charset=\\\"UTF-8\\\">
    <meta name=\\\"viewport\\\" content=\\\"width=device-width, initial-scale=1.0\\\">
    <title>Blogs</title>
    <link rel=\\\"stylesheet\\\" href=\\\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\\\"
        integrity=\\\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\\\" crossorigin=\\\"anonymous\\\">
</head>

<body class=\\\"bg-dark\\\">
    <div class=\\\"container mt-5\\\">
        <div class=\\\"row col-12\\\">
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
        </div>
    </div>
</body>

</html>\";
        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"blog/index.html.twig\";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<!DOCTYPE html>
<html lang=\\\"en\\\">

<head>
    <meta charset=\\\"UTF-8\\\">
    <meta name=\\\"viewport\\\" content=\\\"width=device-width, initial-scale=1.0\\\">
    <title>Blogs</title>
    <link rel=\\\"stylesheet\\\" href=\\\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\\\"
        integrity=\\\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\\\" crossorigin=\\\"anonymous\\\">
</head>

<body class=\\\"bg-dark\\\">
    <div class=\\\"container mt-5\\\">
        <div class=\\\"row col-12\\\">
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
        </div>
    </div>
</body>

</html>\", \"blog/index.html.twig\", \"C:\\\\wamp64\\\\www\\\\QuillBlog\\\\templates\\\\blog\\\\index.html.twig\");
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/var/cache/dev/twig/9b/9b70e714d60a138d0e322bf3095969076030a007bab8d1fbaeabf3392a8aef77.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Extension\\SandboxExtension;
use Twig\\Markup;
use Twig\\Sandbox\\SecurityError;
use Twig\\Sandbox\\SecurityNotAllowedTagError;
use Twig\\Sandbox\\SecurityNotAllowedFilterError;
use Twig\\Sandbox\\SecurityNotAllowedFunctionError;
use Twig\\Source;
use Twig\\Template;

/* blog/index.html.twig */
class __TwigTemplate_3d7e15bafd621318fad399f957235415f98938fa361a9c7ea3b9aac2f22cdaf7 extends Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"blog/index.html.twig\"));

        // line 1
        echo \"<!DOCTYPE html>
<html lang=\\\"en\\\">

<head>
    <meta charset=\\\"UTF-8\\\">
    <meta name=\\\"viewport\\\" content=\\\"width=device-width, initial-scale=1.0\\\">
    <title>Blogs</title>
    <link rel=\\\"stylesheet\\\" href=\\\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\\\"
        integrity=\\\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\\\" crossorigin=\\\"anonymous\\\">
</head>

<body class=\\\"bg-dark\\\">
    <div class=\\\"container mt-5\\\">
        <div class=\\\"row col-12\\\">
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
        </div>
    </div>
</body>

</html>\";
        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"blog/index.html.twig\";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<!DOCTYPE html>
<html lang=\\\"en\\\">

<head>
    <meta charset=\\\"UTF-8\\\">
    <meta name=\\\"viewport\\\" content=\\\"width=device-width, initial-scale=1.0\\\">
    <title>Blogs</title>
    <link rel=\\\"stylesheet\\\" href=\\\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\\\"
        integrity=\\\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\\\" crossorigin=\\\"anonymous\\\">
</head>

<body class=\\\"bg-dark\\\">
    <div class=\\\"container mt-5\\\">
        <div class=\\\"row col-12\\\">
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
            <div class=\\\"col-3\\\">
                Test
            </div>
        </div>
    </div>
</body>

</html>\", \"blog/index.html.twig\", \"C:\\\\wamp64\\\\www\\\\QuillBlog\\\\templates\\\\blog\\\\index.html.twig\");
    }
}
", "@app/var/cache/dev/twig/9b/9b70e714d60a138d0e322bf3095969076030a007bab8d1fbaeabf3392a8aef77.php", "C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev\\twig\\9b\\9b70e714d60a138d0e322bf3095969076030a007bab8d1fbaeabf3392a8aef77.php");
    }
}
