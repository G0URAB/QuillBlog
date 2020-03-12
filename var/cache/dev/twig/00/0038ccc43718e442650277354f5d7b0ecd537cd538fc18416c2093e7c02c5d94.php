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

/* @app/vendor/doctrine/cache/UPGRADE.md */
class __TwigTemplate_e395ae813493710a9e3b75977db26c220a840f67e2c2effa302c77665a19c183 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/cache/UPGRADE.md"));

        // line 1
        echo "# Upgrade to 1.4

## Minor BC Break: `Doctrine\\Common\\Cache\\FileCache#\$extension` is now `private`.

If you need to override the value of `Doctrine\\Common\\Cache\\FileCache#\$extension`, then use the
second parameter of `Doctrine\\Common\\Cache\\FileCache#__construct()` instead of overriding
the property in your own implementation.

## Minor BC Break: file based caches paths changed

`Doctrine\\Common\\Cache\\FileCache`, `Doctrine\\Common\\Cache\\PhpFileCache` and
`Doctrine\\Common\\Cache\\FilesystemCache` are using a different cache paths structure.

If you rely on warmed up caches for deployments, consider that caches generated
with `doctrine/cache` `<1.4` are not compatible with the new directory structure,
and will be ignored.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/cache/UPGRADE.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Upgrade to 1.4

## Minor BC Break: `Doctrine\\Common\\Cache\\FileCache#\$extension` is now `private`.

If you need to override the value of `Doctrine\\Common\\Cache\\FileCache#\$extension`, then use the
second parameter of `Doctrine\\Common\\Cache\\FileCache#__construct()` instead of overriding
the property in your own implementation.

## Minor BC Break: file based caches paths changed

`Doctrine\\Common\\Cache\\FileCache`, `Doctrine\\Common\\Cache\\PhpFileCache` and
`Doctrine\\Common\\Cache\\FilesystemCache` are using a different cache paths structure.

If you rely on warmed up caches for deployments, consider that caches generated
with `doctrine/cache` `<1.4` are not compatible with the new directory structure,
and will be ignored.
", "@app/vendor/doctrine/cache/UPGRADE.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\cache\\UPGRADE.md");
    }
}
