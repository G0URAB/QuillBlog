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

/* @app/vendor/doctrine/doctrine-bundle/Dbal/SchemaAssetsFilterManager.php */
class __TwigTemplate_b9a9e710c6caec0d31081dbaa8d5334e57c7ea265944d8efbd21798d7ec21dd3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/Dbal/SchemaAssetsFilterManager.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Dbal;

/**
 * Manages schema filters passed to Connection::setSchemaAssetsFilter()
 */
class SchemaAssetsFilterManager
{
    /** @var callable[] */
    private \$schemaAssetFilters;

    /**
     * @param callable[] \$schemaAssetFilters
     */
    public function __construct(array \$schemaAssetFilters)
    {
        \$this->schemaAssetFilters = \$schemaAssetFilters;
    }

    public function __invoke(\$assetName) : bool
    {
        foreach (\$this->schemaAssetFilters as \$schemaAssetFilter) {
            if (\$schemaAssetFilter(\$assetName) === false) {
                return false;
            }
        }

        return true;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/Dbal/SchemaAssetsFilterManager.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Dbal;

/**
 * Manages schema filters passed to Connection::setSchemaAssetsFilter()
 */
class SchemaAssetsFilterManager
{
    /** @var callable[] */
    private \$schemaAssetFilters;

    /**
     * @param callable[] \$schemaAssetFilters
     */
    public function __construct(array \$schemaAssetFilters)
    {
        \$this->schemaAssetFilters = \$schemaAssetFilters;
    }

    public function __invoke(\$assetName) : bool
    {
        foreach (\$this->schemaAssetFilters as \$schemaAssetFilter) {
            if (\$schemaAssetFilter(\$assetName) === false) {
                return false;
            }
        }

        return true;
    }
}
", "@app/vendor/doctrine/doctrine-bundle/Dbal/SchemaAssetsFilterManager.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\Dbal\\SchemaAssetsFilterManager.php");
    }
}
