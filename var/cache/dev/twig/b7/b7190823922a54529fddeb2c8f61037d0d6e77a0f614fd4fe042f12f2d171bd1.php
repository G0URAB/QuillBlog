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

/* @app/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php */
class __TwigTemplate_e3dab59e26519c63c34db8b4780a3ecb5fcfbb04d5f5ceac732bf2b92b6823ab extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Query\\Filter\\SQLFilter;

/**
 * Configurator for an EntityManager
 */
class ManagerConfigurator
{
    /** @var string[] */
    private \$enabledFilters = [];

    /** @var array<string,array<string,string>> */
    private \$filtersParameters = [];

    /**
     * @param string[]                           \$enabledFilters
     * @param array<string,array<string,string>> \$filtersParameters
     */
    public function __construct(array \$enabledFilters, array \$filtersParameters)
    {
        \$this->enabledFilters    = \$enabledFilters;
        \$this->filtersParameters = \$filtersParameters;
    }

    /**
     * Create a connection by name.
     */
    public function configure(EntityManagerInterface \$entityManager)
    {
        \$this->enableFilters(\$entityManager);
    }

    /**
     * Enables filters for a given entity manager
     */
    private function enableFilters(EntityManagerInterface \$entityManager) : void
    {
        if (empty(\$this->enabledFilters)) {
            return;
        }

        \$filterCollection = \$entityManager->getFilters();
        foreach (\$this->enabledFilters as \$filter) {
            \$filterObject = \$filterCollection->enable(\$filter);
            if (\$filterObject === null) {
                continue;
            }

            \$this->setFilterParameters(\$filter, \$filterObject);
        }
    }

    /**
     * Sets default parameters for a given filter
     */
    private function setFilterParameters(string \$name, SQLFilter \$filter) : void
    {
        if (empty(\$this->filtersParameters[\$name])) {
            return;
        }

        \$parameters = \$this->filtersParameters[\$name];
        foreach (\$parameters as \$paramName => \$paramValue) {
            \$filter->setParameter(\$paramName, \$paramValue);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Query\\Filter\\SQLFilter;

/**
 * Configurator for an EntityManager
 */
class ManagerConfigurator
{
    /** @var string[] */
    private \$enabledFilters = [];

    /** @var array<string,array<string,string>> */
    private \$filtersParameters = [];

    /**
     * @param string[]                           \$enabledFilters
     * @param array<string,array<string,string>> \$filtersParameters
     */
    public function __construct(array \$enabledFilters, array \$filtersParameters)
    {
        \$this->enabledFilters    = \$enabledFilters;
        \$this->filtersParameters = \$filtersParameters;
    }

    /**
     * Create a connection by name.
     */
    public function configure(EntityManagerInterface \$entityManager)
    {
        \$this->enableFilters(\$entityManager);
    }

    /**
     * Enables filters for a given entity manager
     */
    private function enableFilters(EntityManagerInterface \$entityManager) : void
    {
        if (empty(\$this->enabledFilters)) {
            return;
        }

        \$filterCollection = \$entityManager->getFilters();
        foreach (\$this->enabledFilters as \$filter) {
            \$filterObject = \$filterCollection->enable(\$filter);
            if (\$filterObject === null) {
                continue;
            }

            \$this->setFilterParameters(\$filter, \$filterObject);
        }
    }

    /**
     * Sets default parameters for a given filter
     */
    private function setFilterParameters(string \$name, SQLFilter \$filter) : void
    {
        if (empty(\$this->filtersParameters[\$name])) {
            return;
        }

        \$parameters = \$this->filtersParameters[\$name];
        foreach (\$parameters as \$paramName => \$paramValue) {
            \$filter->setParameter(\$paramName, \$paramValue);
        }
    }
}
", "@app/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\ManagerConfigurator.php");
    }
}
