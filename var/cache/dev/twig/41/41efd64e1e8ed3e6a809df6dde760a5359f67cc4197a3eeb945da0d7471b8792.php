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

/* @app/vendor/symfony/error-handler/Resources/views/error.html.php */
class __TwigTemplate_52b5d8aadf1f2916135722ee4ef623f80638e5fee95966a63953171bcdc11b26 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/Resources/views/error.html.php"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"<?= \$this->charset; ?>\" />
    <meta name=\"robots\" content=\"noindex,nofollow,noarchive\" />
    <title>An Error Occurred: <?= \$statusText; ?></title>
    <style><?= \$this->include('assets/css/error.css'); ?></style>
</head>
<body>
<div class=\"container\">
    <h1>Oops! An Error Occurred</h1>
    <h2>The server returned a \"<?= \$statusCode; ?> <?= \$statusText; ?>\".</h2>

    <p>
        Something is broken. Please let us know what you were doing when this error occurred.
        We will fix it as soon as possible. Sorry for any inconvenience caused.
    </p>
</div>
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/Resources/views/error.html.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"<?= \$this->charset; ?>\" />
    <meta name=\"robots\" content=\"noindex,nofollow,noarchive\" />
    <title>An Error Occurred: <?= \$statusText; ?></title>
    <style><?= \$this->include('assets/css/error.css'); ?></style>
</head>
<body>
<div class=\"container\">
    <h1>Oops! An Error Occurred</h1>
    <h2>The server returned a \"<?= \$statusCode; ?> <?= \$statusText; ?>\".</h2>

    <p>
        Something is broken. Please let us know what you were doing when this error occurred.
        We will fix it as soon as possible. Sorry for any inconvenience caused.
    </p>
</div>
</body>
</html>
", "@app/vendor/symfony/error-handler/Resources/views/error.html.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\Resources\\views\\error.html.php");
    }
}
