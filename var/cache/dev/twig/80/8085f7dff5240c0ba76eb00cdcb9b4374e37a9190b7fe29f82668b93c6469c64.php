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

/* @app/vendor/doctrine/orm/docs/en/sidebar.rst */
class __TwigTemplate_d340342ab0507a7ea7bdd1ef1120d9ce09dcf40fb8f0ae7c104476495d367e19 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/docs/en/sidebar.rst"));

        // line 1
        echo ".. toc::

   .. tocheader:: Tutorials

   .. toctree::
      :depth: 3

      tutorials/getting-started
      tutorials/getting-started-database
      tutorials/getting-started-models
      tutorials/working-with-indexed-associations
      tutorials/extra-lazy-associations
      tutorials/composite-primary-keys
      tutorials/ordered-associations
      tutorials/override-field-association-mappings-in-subclasses
      tutorials/pagination
      tutorials/embeddables

.. toc::

   .. tocheader:: Reference

   .. toctree::
      :depth: 3

      reference/architecture
      reference/configuration
      reference/faq
      reference/basic-mapping
      reference/association-mapping
      reference/inheritance-mapping
      reference/working-with-objects
      reference/working-with-associations
      reference/events
      reference/unitofwork
      reference/unitofwork-associations
      reference/transactions-and-concurrency
      reference/batch-processing
      reference/dql-doctrine-query-language
      reference/query-builder
      reference/native-sql
      reference/change-tracking-policies
      reference/partial-objects
      reference/xml-mapping
      reference/yaml-mapping
      reference/annotations-reference
      reference/php-mapping
      reference/caching
      reference/improving-performance
      reference/tools
      reference/metadata-drivers
      reference/best-practices
      reference/limitations-and-known-issues
      tutorials/pagination
      reference/filters
      reference/namingstrategy
      reference/advanced-configuration
      reference/second-level-cache
      reference/security

.. toc::

   .. tocheader:: Cookbook

   .. toctree::
      :depth: 3

      cookbook/aggregate-fields
      cookbook/custom-mapping-types
      cookbook/decorator-pattern
      cookbook/dql-custom-walkers
      cookbook/dql-user-defined-functions
      cookbook/implementing-arrayaccess-for-domain-objects
      cookbook/implementing-the-notify-changetracking-policy
      cookbook/implementing-wakeup-or-clone
      cookbook/resolve-target-entity-listener
      cookbook/sql-table-prefixes
      cookbook/strategy-cookbook-introduction
      cookbook/validation-of-entities
      cookbook/working-with-datetime
      cookbook/mysql-enums
      cookbook/advanced-field-value-conversion-using-custom-mapping-types
      cookbook/entities-in-session
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/docs/en/sidebar.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".. toc::

   .. tocheader:: Tutorials

   .. toctree::
      :depth: 3

      tutorials/getting-started
      tutorials/getting-started-database
      tutorials/getting-started-models
      tutorials/working-with-indexed-associations
      tutorials/extra-lazy-associations
      tutorials/composite-primary-keys
      tutorials/ordered-associations
      tutorials/override-field-association-mappings-in-subclasses
      tutorials/pagination
      tutorials/embeddables

.. toc::

   .. tocheader:: Reference

   .. toctree::
      :depth: 3

      reference/architecture
      reference/configuration
      reference/faq
      reference/basic-mapping
      reference/association-mapping
      reference/inheritance-mapping
      reference/working-with-objects
      reference/working-with-associations
      reference/events
      reference/unitofwork
      reference/unitofwork-associations
      reference/transactions-and-concurrency
      reference/batch-processing
      reference/dql-doctrine-query-language
      reference/query-builder
      reference/native-sql
      reference/change-tracking-policies
      reference/partial-objects
      reference/xml-mapping
      reference/yaml-mapping
      reference/annotations-reference
      reference/php-mapping
      reference/caching
      reference/improving-performance
      reference/tools
      reference/metadata-drivers
      reference/best-practices
      reference/limitations-and-known-issues
      tutorials/pagination
      reference/filters
      reference/namingstrategy
      reference/advanced-configuration
      reference/second-level-cache
      reference/security

.. toc::

   .. tocheader:: Cookbook

   .. toctree::
      :depth: 3

      cookbook/aggregate-fields
      cookbook/custom-mapping-types
      cookbook/decorator-pattern
      cookbook/dql-custom-walkers
      cookbook/dql-user-defined-functions
      cookbook/implementing-arrayaccess-for-domain-objects
      cookbook/implementing-the-notify-changetracking-policy
      cookbook/implementing-wakeup-or-clone
      cookbook/resolve-target-entity-listener
      cookbook/sql-table-prefixes
      cookbook/strategy-cookbook-introduction
      cookbook/validation-of-entities
      cookbook/working-with-datetime
      cookbook/mysql-enums
      cookbook/advanced-field-value-conversion-using-custom-mapping-types
      cookbook/entities-in-session
", "@app/vendor/doctrine/orm/docs/en/sidebar.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\docs\\en\\sidebar.rst");
    }
}
