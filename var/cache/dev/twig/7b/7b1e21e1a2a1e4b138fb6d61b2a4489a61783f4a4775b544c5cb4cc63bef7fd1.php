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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/EventDispatcher.php */
class __TwigTemplate_3524a9e828f57e23ca8f5f630d9d4458e1cb789ccfa2a3c643f3cc431d632351 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/EventDispatcher.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\Common\\EventArgs;
use Doctrine\\Common\\EventManager;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Event\\MigrationsEventArgs;
use Doctrine\\Migrations\\Event\\MigrationsVersionEventArgs;
use Doctrine\\Migrations\\Version\\Version;

/**
 * The EventDispatcher class is responsible for dispatching events internally that a user can listen for.
 *
 * @internal
 */
final class EventDispatcher
{
    /** @var Configuration */
    private \$configuration;

    /** @var EventManager */
    private \$eventManager;

    public function __construct(Configuration \$configuration, EventManager \$eventManager)
    {
        \$this->configuration = \$configuration;
        \$this->eventManager  = \$eventManager;
    }

    public function dispatchMigrationEvent(string \$eventName, string \$direction, bool \$dryRun) : void
    {
        \$event = \$this->createMigrationEventArgs(\$direction, \$dryRun);

        \$this->dispatchEvent(\$eventName, \$event);
    }

    public function dispatchVersionEvent(
        Version \$version,
        string \$eventName,
        string \$direction,
        bool \$dryRun
    ) : void {
        \$event = \$this->createMigrationsVersionEventArgs(
            \$version,
            \$direction,
            \$dryRun
        );

        \$this->dispatchEvent(\$eventName, \$event);
    }

    public function dispatchEvent(string \$eventName, ?EventArgs \$args = null) : void
    {
        \$this->eventManager->dispatchEvent(\$eventName, \$args);
    }

    private function createMigrationEventArgs(string \$direction, bool \$dryRun) : MigrationsEventArgs
    {
        return new MigrationsEventArgs(\$this->configuration, \$direction, \$dryRun);
    }

    private function createMigrationsVersionEventArgs(
        Version \$version,
        string \$direction,
        bool \$dryRun
    ) : MigrationsVersionEventArgs {
        return new MigrationsVersionEventArgs(
            \$version,
            \$this->configuration,
            \$direction,
            \$dryRun
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/EventDispatcher.php";
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

use Doctrine\\Common\\EventArgs;
use Doctrine\\Common\\EventManager;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Event\\MigrationsEventArgs;
use Doctrine\\Migrations\\Event\\MigrationsVersionEventArgs;
use Doctrine\\Migrations\\Version\\Version;

/**
 * The EventDispatcher class is responsible for dispatching events internally that a user can listen for.
 *
 * @internal
 */
final class EventDispatcher
{
    /** @var Configuration */
    private \$configuration;

    /** @var EventManager */
    private \$eventManager;

    public function __construct(Configuration \$configuration, EventManager \$eventManager)
    {
        \$this->configuration = \$configuration;
        \$this->eventManager  = \$eventManager;
    }

    public function dispatchMigrationEvent(string \$eventName, string \$direction, bool \$dryRun) : void
    {
        \$event = \$this->createMigrationEventArgs(\$direction, \$dryRun);

        \$this->dispatchEvent(\$eventName, \$event);
    }

    public function dispatchVersionEvent(
        Version \$version,
        string \$eventName,
        string \$direction,
        bool \$dryRun
    ) : void {
        \$event = \$this->createMigrationsVersionEventArgs(
            \$version,
            \$direction,
            \$dryRun
        );

        \$this->dispatchEvent(\$eventName, \$event);
    }

    public function dispatchEvent(string \$eventName, ?EventArgs \$args = null) : void
    {
        \$this->eventManager->dispatchEvent(\$eventName, \$args);
    }

    private function createMigrationEventArgs(string \$direction, bool \$dryRun) : MigrationsEventArgs
    {
        return new MigrationsEventArgs(\$this->configuration, \$direction, \$dryRun);
    }

    private function createMigrationsVersionEventArgs(
        Version \$version,
        string \$direction,
        bool \$dryRun
    ) : MigrationsVersionEventArgs {
        return new MigrationsVersionEventArgs(
            \$version,
            \$this->configuration,
            \$direction,
            \$dryRun
        );
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/EventDispatcher.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\EventDispatcher.php");
    }
}
