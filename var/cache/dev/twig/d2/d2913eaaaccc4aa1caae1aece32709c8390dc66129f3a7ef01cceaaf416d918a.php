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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php */
class __TwigTemplate_88dc9b95393b9761a24bf125e134fb443a93ef5b4ab9a7f69069a2628653e3d3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Command;

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use function sprintf;

/**
 * The LatestCommand class is responsible for outputting what your latest version is.
 */
class LatestCommand extends AbstractCommand
{
    /** @var string */
    protected static \$defaultName = 'migrations:latest';

    protected function configure() : void
    {
        \$this
            ->setAliases(['latest'])
            ->setDescription('Outputs the latest version number');

        parent::configure();
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        \$latestVersion = \$this->migrationRepository->getLatestVersion();
        \$version       = \$this->migrationRepository->getVersion(\$latestVersion);
        \$description   = \$version->getMigration()->getDescription();

        \$output->writeln(sprintf(
            '<info>%s</info>%s',
            \$latestVersion,
            \$description !== '' ? ' - ' . \$description : ''
        ));

        return 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php";
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
 * The LatestCommand class is responsible for outputting what your latest version is.
 */
class LatestCommand extends AbstractCommand
{
    /** @var string */
    protected static \$defaultName = 'migrations:latest';

    protected function configure() : void
    {
        \$this
            ->setAliases(['latest'])
            ->setDescription('Outputs the latest version number');

        parent::configure();
    }

    public function execute(InputInterface \$input, OutputInterface \$output) : ?int
    {
        \$latestVersion = \$this->migrationRepository->getLatestVersion();
        \$version       = \$this->migrationRepository->getVersion(\$latestVersion);
        \$description   = \$version->getMigration()->getDescription();

        \$output->writeln(sprintf(
            '<info>%s</info>%s',
            \$latestVersion,
            \$description !== '' ? ' - ' . \$description : ''
        ));

        return 0;
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand.php");
    }
}
