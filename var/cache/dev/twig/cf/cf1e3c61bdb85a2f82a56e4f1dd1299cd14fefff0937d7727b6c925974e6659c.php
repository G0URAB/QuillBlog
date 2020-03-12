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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/SchemaDiffProviderInterface.php */
class __TwigTemplate_168e3b979a8761cf76e99508a9a6cbf98c0b2569299e28f981cfd5e94a6d7724 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/SchemaDiffProviderInterface.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Provider;

use Doctrine\\DBAL\\Schema\\Schema;

/**
 * The SchemaDiffProviderInterface defines the interface used to provide the from and to schemas and to produce
 * the SQL queries needed to migrate.
 *
 * @internal
 */
interface SchemaDiffProviderInterface
{
    public function createFromSchema() : Schema;

    public function createToSchema(Schema \$fromSchema) : Schema;

    /** @return string[] */
    public function getSqlDiffToMigrate(Schema \$fromSchema, Schema \$toSchema) : array;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/SchemaDiffProviderInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Provider;

use Doctrine\\DBAL\\Schema\\Schema;

/**
 * The SchemaDiffProviderInterface defines the interface used to provide the from and to schemas and to produce
 * the SQL queries needed to migrate.
 *
 * @internal
 */
interface SchemaDiffProviderInterface
{
    public function createFromSchema() : Schema;

    public function createToSchema(Schema \$fromSchema) : Schema;

    /** @return string[] */
    public function getSqlDiffToMigrate(Schema \$fromSchema, Schema \$toSchema) : array;
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/SchemaDiffProviderInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Provider\\SchemaDiffProviderInterface.php");
    }
}
