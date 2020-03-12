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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/RollupCommand.php */
class __TwigTemplate_80c82b35f0739535adfe67ffd88dc8a20efcbf87397627f7ecd7a3c932e9990b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/RollupCommand.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Command;

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function sprintf;

/**
 * The RollupCommand class is responsible for deleting all previously executed migrations from the versions table
 * and marking the freshly dumped schema migration (that was created with DumpSchemaCommand) as migrated.
 */
class RollupCommand extends AbstractCommand
{
    /** @var string */
    protected static \$defaultName = 'migrations:rollup';

    protected function configure() : void
    {
        parent::configure();

        \$this
            ->setAliases(['rollup'])
            ->setDescription('Rollup migrations by deleting all tracked versions and insert the one version that exists.')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command rolls up migrations by deleting all tracked versions and
inserts the one version that exists that was created with the <info>migrations:dump-schema</info> command.

    <info>%command.full_name%</info>

To dump your schema to a migration version you can use the <info>migrations:dump-schema</info> command.
EOT
            );
    }

    public function execute(
        InputInterface \$input,
        OutputInterface \$output
    ) : ?int {
        \$version = \$this->dependencyFactory
            ->getRollup()->rollup();

        \$output->writeln(sprintf(
            'Rolled up migrations to version <info>%s</info>',
            \$version->getVersion()
        ));

        return 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/RollupCommand.php";
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
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function sprintf;

/**
 * The RollupCommand class is responsible for deleting all previously executed migrations from the versions table
 * and marking the freshly dumped schema migration (that was created with DumpSchemaCommand) as migrated.
 */
class RollupCommand extends AbstractCommand
{
    /** @var string */
    protected static \$defaultName = 'migrations:rollup';

    protected function configure() : void
    {
        parent::configure();

        \$this
            ->setAliases(['rollup'])
            ->setDescription('Rollup migrations by deleting all tracked versions and insert the one version that exists.')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command rolls up migrations by deleting all tracked versions and
inserts the one version that exists that was created with the <info>migrations:dump-schema</info> command.

    <info>%command.full_name%</info>

To dump your schema to a migration version you can use the <info>migrations:dump-schema</info> command.
EOT
            );
    }

    public function execute(
        InputInterface \$input,
        OutputInterface \$output
    ) : ?int {
        \$version = \$this->dependencyFactory
            ->getRollup()->rollup();

        \$output->writeln(sprintf(
            'Rolled up migrations to version <info>%s</info>',
            \$version->getVersion()
        ));

        return 0;
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/RollupCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand.php");
    }
}
