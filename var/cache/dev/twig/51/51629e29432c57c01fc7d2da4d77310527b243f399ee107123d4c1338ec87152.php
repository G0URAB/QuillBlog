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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Event/MigrationsEventArgs.php */
class __TwigTemplate_db9d449bb27466aa7b625d45382196e93a794ab1d4ad7f4b45a862e63dde11d7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Event/MigrationsEventArgs.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\DBAL\\Connection;
use Doctrine\\Migrations\\Configuration\\Configuration;

/**
 * The MigrationEventsArgs class is passed to events not related to a single migration version.
 */
class MigrationsEventArgs extends EventArgs
{
    /** @var Configuration */
    private \$config;

    /** @var string */
    private \$direction;

    /** @var bool */
    private \$dryRun;

    public function __construct(Configuration \$config, string \$direction, bool \$dryRun)
    {
        \$this->config    = \$config;
        \$this->direction = \$direction;
        \$this->dryRun    = \$dryRun;
    }

    public function getConfiguration() : Configuration
    {
        return \$this->config;
    }

    public function getConnection() : Connection
    {
        return \$this->config->getConnection();
    }

    public function getDirection() : string
    {
        return \$this->direction;
    }

    public function isDryRun() : bool
    {
        return \$this->dryRun;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Event/MigrationsEventArgs.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\DBAL\\Connection;
use Doctrine\\Migrations\\Configuration\\Configuration;

/**
 * The MigrationEventsArgs class is passed to events not related to a single migration version.
 */
class MigrationsEventArgs extends EventArgs
{
    /** @var Configuration */
    private \$config;

    /** @var string */
    private \$direction;

    /** @var bool */
    private \$dryRun;

    public function __construct(Configuration \$config, string \$direction, bool \$dryRun)
    {
        \$this->config    = \$config;
        \$this->direction = \$direction;
        \$this->dryRun    = \$dryRun;
    }

    public function getConfiguration() : Configuration
    {
        return \$this->config;
    }

    public function getConnection() : Connection
    {
        return \$this->config->getConnection();
    }

    public function getDirection() : string
    {
        return \$this->direction;
    }

    public function isDryRun() : bool
    {
        return \$this->dryRun;
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Event/MigrationsEventArgs.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Event\\MigrationsEventArgs.php");
    }
}
