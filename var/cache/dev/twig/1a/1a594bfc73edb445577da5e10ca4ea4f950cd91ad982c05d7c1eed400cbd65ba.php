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

/* @app/var/cache/dev/url_generating_routes.php.meta */
class __TwigTemplate_975e1c42613ba0b218a5fdc91203830010b61c129cee849da50a14ae37ef509a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/var/cache/dev/url_generating_routes.php.meta"));

        // line 1
        echo "a:12:{i:0;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:56:\"C:\\wamp64\\www\\QuillBlog\\config\\routes\\dev\\framework.yaml\";}i:1;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:91:\"C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\routing\\errors.xml\";}i:2;O:46:\"Symfony\\Component\\Config\\Resource\\GlobResource\":6:{s:54:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000prefix\";s:30:\"C:\\wamp64\\www\\QuillBlog\\config\";s:55:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000pattern\";s:34:\"/{routes}/dev/*.{php,xml,yaml,yml}\";s:57:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000recursive\";b:0;s:52:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000hash\";s:32:\"01ff7e6dc58644a91963f5da340acca4\";s:60:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000forExclusion\";b:0;s:64:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000excludedPrefixes\";a:0:{}}i:3;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:54:\"C:\\wamp64\\www\\QuillBlog\\config\\routes\\annotations.yaml\";}i:4;O:51:\"Symfony\\Component\\Config\\Resource\\DirectoryResource\":2:{s:61:\"\000Symfony\\Component\\Config\\Resource\\DirectoryResource\000resource\";s:38:\"C:\\wamp64\\www\\QuillBlog\\src\\Controller\";s:60:\"\000Symfony\\Component\\Config\\Resource\\DirectoryResource\000pattern\";s:8:\"/\\.php\$/\";}i:5;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:57:\"C:\\wamp64\\www\\QuillBlog\\src\\Controller\\BlogController.php\";}i:6;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:38:\"C:\\wamp64\\www\\QuillBlog\\src\\Kernel.php\";}i:7;O:46:\"Symfony\\Component\\Config\\Resource\\GlobResource\":6:{s:54:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000prefix\";s:30:\"C:\\wamp64\\www\\QuillBlog\\config\";s:55:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000pattern\";s:30:\"/{routes}/*.{php,xml,yaml,yml}\";s:57:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000recursive\";b:0;s:52:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000hash\";s:32:\"2f7c97aca672e4141a201c68d15a5eb4\";s:60:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000forExclusion\";b:0;s:64:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000excludedPrefixes\";a:0:{}}i:8;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:42:\"C:\\wamp64\\www\\QuillBlog\\config\\routes.yaml\";}i:9;O:46:\"Symfony\\Component\\Config\\Resource\\GlobResource\":6:{s:54:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000prefix\";s:30:\"C:\\wamp64\\www\\QuillBlog\\config\";s:55:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000pattern\";s:28:\"/{routes}.{php,xml,yaml,yml}\";s:57:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000recursive\";b:0;s:52:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000hash\";s:32:\"6904422cb3b406a7dc6f578d2293a5d5\";s:60:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000forExclusion\";b:0;s:64:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000excludedPrefixes\";a:0:{}}i:10;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:61:\"C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Kernel.php\";}i:11;O:72:\"Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResource\":1:{s:84:\"\000Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResource\000parameters\";a:0:{}}}";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/var/cache/dev/url_generating_routes.php.meta";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("a:12:{i:0;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:56:\"C:\\wamp64\\www\\QuillBlog\\config\\routes\\dev\\framework.yaml\";}i:1;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:91:\"C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\routing\\errors.xml\";}i:2;O:46:\"Symfony\\Component\\Config\\Resource\\GlobResource\":6:{s:54:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000prefix\";s:30:\"C:\\wamp64\\www\\QuillBlog\\config\";s:55:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000pattern\";s:34:\"/{routes}/dev/*.{php,xml,yaml,yml}\";s:57:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000recursive\";b:0;s:52:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000hash\";s:32:\"01ff7e6dc58644a91963f5da340acca4\";s:60:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000forExclusion\";b:0;s:64:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000excludedPrefixes\";a:0:{}}i:3;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:54:\"C:\\wamp64\\www\\QuillBlog\\config\\routes\\annotations.yaml\";}i:4;O:51:\"Symfony\\Component\\Config\\Resource\\DirectoryResource\":2:{s:61:\"\000Symfony\\Component\\Config\\Resource\\DirectoryResource\000resource\";s:38:\"C:\\wamp64\\www\\QuillBlog\\src\\Controller\";s:60:\"\000Symfony\\Component\\Config\\Resource\\DirectoryResource\000pattern\";s:8:\"/\\.php\$/\";}i:5;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:57:\"C:\\wamp64\\www\\QuillBlog\\src\\Controller\\BlogController.php\";}i:6;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:38:\"C:\\wamp64\\www\\QuillBlog\\src\\Kernel.php\";}i:7;O:46:\"Symfony\\Component\\Config\\Resource\\GlobResource\":6:{s:54:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000prefix\";s:30:\"C:\\wamp64\\www\\QuillBlog\\config\";s:55:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000pattern\";s:30:\"/{routes}/*.{php,xml,yaml,yml}\";s:57:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000recursive\";b:0;s:52:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000hash\";s:32:\"2f7c97aca672e4141a201c68d15a5eb4\";s:60:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000forExclusion\";b:0;s:64:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000excludedPrefixes\";a:0:{}}i:8;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:42:\"C:\\wamp64\\www\\QuillBlog\\config\\routes.yaml\";}i:9;O:46:\"Symfony\\Component\\Config\\Resource\\GlobResource\":6:{s:54:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000prefix\";s:30:\"C:\\wamp64\\www\\QuillBlog\\config\";s:55:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000pattern\";s:28:\"/{routes}.{php,xml,yaml,yml}\";s:57:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000recursive\";b:0;s:52:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000hash\";s:32:\"6904422cb3b406a7dc6f578d2293a5d5\";s:60:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000forExclusion\";b:0;s:64:\"\000Symfony\\Component\\Config\\Resource\\GlobResource\000excludedPrefixes\";a:0:{}}i:10;O:46:\"Symfony\\Component\\Config\\Resource\\FileResource\":1:{s:56:\"\000Symfony\\Component\\Config\\Resource\\FileResource\000resource\";s:61:\"C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Kernel.php\";}i:11;O:72:\"Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResource\":1:{s:84:\"\000Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResource\000parameters\";a:0:{}}}", "@app/var/cache/dev/url_generating_routes.php.meta", "C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev\\url_generating_routes.php.meta");
    }
}
