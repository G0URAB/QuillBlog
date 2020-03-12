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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/ExecutorInterface.php */
class __TwigTemplate_6afde37b2f2939ab1146758be022e0cdbb4f497aeda4b644da210ed802ac26c4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/ExecutorInterface.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Version;

use Doctrine\\Migrations\\AbstractMigration;
use Doctrine\\Migrations\\MigratorConfiguration;

/**
 * The ExecutorInterface defines the interface used for adding sql for a migration and executing that sql.
 *
 * @internal
 */
interface ExecutorInterface
{
    /**
     * @param mixed[] \$params
     * @param mixed[] \$types
     */
    public function addSql(string \$sql, array \$params = [], array \$types = []) : void;

    public function execute(
        Version \$version,
        AbstractMigration \$migration,
        string \$direction,
        ?MigratorConfiguration \$migratorConfiguration = null
    ) : ExecutionResult;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/ExecutorInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Version;

use Doctrine\\Migrations\\AbstractMigration;
use Doctrine\\Migrations\\MigratorConfiguration;

/**
 * The ExecutorInterface defines the interface used for adding sql for a migration and executing that sql.
 *
 * @internal
 */
interface ExecutorInterface
{
    /**
     * @param mixed[] \$params
     * @param mixed[] \$types
     */
    public function addSql(string \$sql, array \$params = [], array \$types = []) : void;

    public function execute(
        Version \$version,
        AbstractMigration \$migration,
        string \$direction,
        ?MigratorConfiguration \$migratorConfiguration = null
    ) : ExecutionResult;
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/ExecutorInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Version\\ExecutorInterface.php");
    }
}
