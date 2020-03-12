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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php */
class __TwigTemplate_a10b3c5cb7dfb9541a6e0b450789a52d2d2259a67829a161eded34c08121f25e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Command;

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function count;
use function sprintf;

/**
 * The UpToDateCommand class outputs if your database is up to date or if there are new migrations
 * that need to be executed.
 */
class UpToDateCommand extends AbstractCommand
{
    /** @var string */
    protected static \$defaultName = 'migrations:up-to-date';

    protected function configure() : void
    {
        \$this
            ->setAliases(['up-to-date'])
            ->setDescription('Tells you if your schema is up-to-date.')
            ->addOption('fail-on-unregistered', 'u', InputOption::VALUE_NONE, 'Whether to fail when there are unregistered extra migrations found')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command tells you if your schema is up-to-date:

    <info>%command.full_name%</info>
EOT
            );

        parent::configure();
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        \$migrations          = count(\$this->migrationRepository->getMigrations());
        \$migratedVersions    = count(\$this->migrationRepository->getMigratedVersions());
        \$availableMigrations = \$migrations - \$migratedVersions;

        if (\$availableMigrations === 0) {
            \$output->writeln('<comment>Up-to-date! No migrations to execute.</comment>');

            return 0;
        }

        if (\$availableMigrations > 0) {
            \$output->writeln(sprintf(
                '<error>Out-of-date! %u migration%s available to execute.</error>',
                \$availableMigrations,
                \$availableMigrations > 1 ? 's are' : ' is'
            ));

            return 1;
        }

        // negative number means that there are unregistered migrations in the database

        \$extraMigrations = -\$availableMigrations;
        \$output->writeln(sprintf(
            '<error>You have %1\$u previously executed migration%3\$s in the database that %2\$s registered migration%3\$s.</error>',
            \$extraMigrations,
            \$extraMigrations > 1 ? 'are not' : 'is not a',
            \$extraMigrations > 1 ? 's' : ''
        ));

        return \$input->getOption('fail-on-unregistered') === true ? 2 : 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Command;

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function count;
use function sprintf;

/**
 * The UpToDateCommand class outputs if your database is up to date or if there are new migrations
 * that need to be executed.
 */
class UpToDateCommand extends AbstractCommand
{
    /** @var string */
    protected static \$defaultName = 'migrations:up-to-date';

    protected function configure() : void
    {
        \$this
            ->setAliases(['up-to-date'])
            ->setDescription('Tells you if your schema is up-to-date.')
            ->addOption('fail-on-unregistered', 'u', InputOption::VALUE_NONE, 'Whether to fail when there are unregistered extra migrations found')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command tells you if your schema is up-to-date:

    <info>%command.full_name%</info>
EOT
            );

        parent::configure();
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        \$migrations          = count(\$this->migrationRepository->getMigrations());
        \$migratedVersions    = count(\$this->migrationRepository->getMigratedVersions());
        \$availableMigrations = \$migrations - \$migratedVersions;

        if (\$availableMigrations === 0) {
            \$output->writeln('<comment>Up-to-date! No migrations to execute.</comment>');

            return 0;
        }

        if (\$availableMigrations > 0) {
            \$output->writeln(sprintf(
                '<error>Out-of-date! %u migration%s available to execute.</error>',
                \$availableMigrations,
                \$availableMigrations > 1 ? 's are' : ' is'
            ));

            return 1;
        }

        // negative number means that there are unregistered migrations in the database

        \$extraMigrations = -\$availableMigrations;
        \$output->writeln(sprintf(
            '<error>You have %1\$u previously executed migration%3\$s in the database that %2\$s registered migration%3\$s.</error>',
            \$extraMigrations,
            \$extraMigrations > 1 ? 'are not' : 'is not a',
            \$extraMigrations > 1 ? 's' : ''
        ));

        return \$input->getOption('fail-on-unregistered') === true ? 2 : 0;
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand.php");
    }
}
