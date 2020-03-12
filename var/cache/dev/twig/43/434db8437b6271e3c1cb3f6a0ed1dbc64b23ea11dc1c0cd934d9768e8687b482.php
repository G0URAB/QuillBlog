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

/* @app/vendor/doctrine/collections/docs/en/lazy-collections.rst */
class __TwigTemplate_0c83efca1bb4fe836287ed15cc94fa99181384a31c88164624b65e7f7e50ae84 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/collections/docs/en/lazy-collections.rst"));

        // line 1
        echo "Lazy Collections
================

To create a lazy collection you can extend the
``Doctrine\\Common\\Collections\\AbstractLazyCollection`` class
and define the ``doInitialize`` method. Here is an example where
we lazily query the database for a collection of user records:

.. code-block:: php
    use Doctrine\\DBAL\\Connection;

    class UsersLazyCollection extends AbstractLazyCollection
    {
        /** @var Connection */
        private \$connection;

        public function __construct(Connection \$connection)
        {
            \$this->connection = \$connection;
        }

        protected function doInitialize() : void
        {
            \$this->collection = \$this->connection->fetchAll('SELECT * FROM users');
        }
    }
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/collections/docs/en/lazy-collections.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Lazy Collections
================

To create a lazy collection you can extend the
``Doctrine\\Common\\Collections\\AbstractLazyCollection`` class
and define the ``doInitialize`` method. Here is an example where
we lazily query the database for a collection of user records:

.. code-block:: php
    use Doctrine\\DBAL\\Connection;

    class UsersLazyCollection extends AbstractLazyCollection
    {
        /** @var Connection */
        private \$connection;

        public function __construct(Connection \$connection)
        {
            \$this->connection = \$connection;
        }

        protected function doInitialize() : void
        {
            \$this->collection = \$this->connection->fetchAll('SELECT * FROM users');
        }
    }
", "@app/vendor/doctrine/collections/docs/en/lazy-collections.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\collections\\docs\\en\\lazy-collections.rst");
    }
}
