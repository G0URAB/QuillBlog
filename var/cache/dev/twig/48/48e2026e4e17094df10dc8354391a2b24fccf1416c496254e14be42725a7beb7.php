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

/* @app/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsDiffDoctrineCommand.php */
class __TwigTemplate_d1c4dcd7ad857fdedeb3b9237e58984f97b0b951c3bacdbac8233764bb1280b3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsDiffDoctrineCommand.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\MigrationsBundle\\Command;

use Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand;
use InvalidArgumentException;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use function assert;

/**
 * Command for generate migration classes by comparing your current database schema
 * to your mapping information.
 */
class MigrationsDiffDoctrineCommand extends DiffCommand
{
    /** @var string */
    protected static \$defaultName = 'doctrine:migrations:diff';

    protected function configure() : void
    {
        parent::configure();

        \$this
            ->addOption('db', null, InputOption::VALUE_REQUIRED, 'The database connection to use for this command.')
            ->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command.')
            ->addOption('shard', null, InputOption::VALUE_REQUIRED, 'The shard connection to use for this command.');
    }

    public function initialize(InputInterface \$input, OutputInterface \$output) : void
    {
        /** @var Application \$application */
        \$application = \$this->getApplication();

        Helper\\DoctrineCommandHelper::setApplicationHelper(\$application, \$input);

        \$configuration = \$this->getMigrationConfiguration(\$input, \$output);
        \$container     = \$application->getKernel()->getContainer();
        assert(\$container instanceof ContainerInterface);
        DoctrineCommand::configureMigrations(\$container, \$configuration);

        parent::initialize(\$input, \$output);
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        // EM and DB options cannot be set at same time
        if (\$input->getOption('em') !== null && \$input->getOption('db') !== null) {
            throw new InvalidArgumentException('Cannot set both \"em\" and \"db\" for command execution.');
        }

        return parent::execute(\$input, \$output);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsDiffDoctrineCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\MigrationsBundle\\Command;

use Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand;
use InvalidArgumentException;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use function assert;

/**
 * Command for generate migration classes by comparing your current database schema
 * to your mapping information.
 */
class MigrationsDiffDoctrineCommand extends DiffCommand
{
    /** @var string */
    protected static \$defaultName = 'doctrine:migrations:diff';

    protected function configure() : void
    {
        parent::configure();

        \$this
            ->addOption('db', null, InputOption::VALUE_REQUIRED, 'The database connection to use for this command.')
            ->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command.')
            ->addOption('shard', null, InputOption::VALUE_REQUIRED, 'The shard connection to use for this command.');
    }

    public function initialize(InputInterface \$input, OutputInterface \$output) : void
    {
        /** @var Application \$application */
        \$application = \$this->getApplication();

        Helper\\DoctrineCommandHelper::setApplicationHelper(\$application, \$input);

        \$configuration = \$this->getMigrationConfiguration(\$input, \$output);
        \$container     = \$application->getKernel()->getContainer();
        assert(\$container instanceof ContainerInterface);
        DoctrineCommand::configureMigrations(\$container, \$configuration);

        parent::initialize(\$input, \$output);
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        // EM and DB options cannot be set at same time
        if (\$input->getOption('em') !== null && \$input->getOption('db') !== null) {
            throw new InvalidArgumentException('Cannot set both \"em\" and \"db\" for command execution.');
        }

        return parent::execute(\$input, \$output);
    }
}
", "@app/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsDiffDoctrineCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsDiffDoctrineCommand.php");
    }
}
