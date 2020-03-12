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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Events.php */
class __TwigTemplate_99bb2bacef7d3addc4c2b549ef231d6418d57927e00ab4874db89504afbbb708 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Events.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

/**
 * The Events class contains constants for event names that a user can subscribe to.
 */
final class Events
{
    public const onMigrationsMigrating        = 'onMigrationsMigrating';
    public const onMigrationsMigrated         = 'onMigrationsMigrated';
    public const onMigrationsVersionExecuting = 'onMigrationsVersionExecuting';
    public const onMigrationsVersionExecuted  = 'onMigrationsVersionExecuted';
    public const onMigrationsVersionSkipped   = 'onMigrationsVersionSkipped';
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Events.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

/**
 * The Events class contains constants for event names that a user can subscribe to.
 */
final class Events
{
    public const onMigrationsMigrating        = 'onMigrationsMigrating';
    public const onMigrationsMigrated         = 'onMigrationsMigrated';
    public const onMigrationsVersionExecuting = 'onMigrationsVersionExecuting';
    public const onMigrationsVersionExecuted  = 'onMigrationsVersionExecuted';
    public const onMigrationsVersionSkipped   = 'onMigrationsVersionSkipped';
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Events.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Events.php");
    }
}
