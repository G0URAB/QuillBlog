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

/* @app/vendor/doctrine/migrations/docs/en/reference/integrations.rst */
class __TwigTemplate_9a7d9b2cc20a1b45d2feadbe823c65ace03424ec2d1abd38b5fcbf0ec2590fa4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/docs/en/reference/integrations.rst"));

        // line 1
        echo "Integrations
============

If you are using a framework, you can use one of the pre-existing integrations
built by the community.

  * `Symfony <https://packagist.org/packages/doctrine/doctrine-migrations-bundle>`_
  * `Zend <https://packagist.org/packages/doctrine/doctrine-orm-module>`_
  * `Laravel <https://packagist.org/packages/laravel-doctrine/migrations>`_
  * `Silex <https://packagist.org/packages/kurl/silex-doctrine-migrations-provider>`_
  * `Silex <https://packagist.org/packages/dbtlr/silex-doctrine-migrations>`_
  * `Nette <https://packagist.org/packages/nettrine/migrations>`_

Don't hesitate to make a `Pull Request <https://github.com/doctrine/migrations>`_
if you want to add your integration to this list.

:ref:`Next Chapter: Custom Integration <custom-integration>`
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/docs/en/reference/integrations.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Integrations
============

If you are using a framework, you can use one of the pre-existing integrations
built by the community.

  * `Symfony <https://packagist.org/packages/doctrine/doctrine-migrations-bundle>`_
  * `Zend <https://packagist.org/packages/doctrine/doctrine-orm-module>`_
  * `Laravel <https://packagist.org/packages/laravel-doctrine/migrations>`_
  * `Silex <https://packagist.org/packages/kurl/silex-doctrine-migrations-provider>`_
  * `Silex <https://packagist.org/packages/dbtlr/silex-doctrine-migrations>`_
  * `Nette <https://packagist.org/packages/nettrine/migrations>`_

Don't hesitate to make a `Pull Request <https://github.com/doctrine/migrations>`_
if you want to add your integration to this list.

:ref:`Next Chapter: Custom Integration <custom-integration>`
", "@app/vendor/doctrine/migrations/docs/en/reference/integrations.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\docs\\en\\reference\\integrations.rst");
    }
}
