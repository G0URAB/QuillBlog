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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationDirectoryHelper.php */
class __TwigTemplate_2e555b912805341963b73c26d1ab8b5f683ab8be2afc4ee9f4cd7ee338f57048 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationDirectoryHelper.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Helper;

use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Tools\\Console\\Exception\\DirectoryDoesNotExist;
use const DIRECTORY_SEPARATOR;
use function assert;
use function date;
use function file_exists;
use function getcwd;
use function mkdir;
use function rtrim;

/**
 * The MigrationDirectoryHelper class is responsible for returning the directory that migrations are stored in.
 *
 * @internal
 */
class MigrationDirectoryHelper
{
    /** @var Configuration */
    private \$configuration;

    public function __construct(Configuration \$configuration)
    {
        \$this->configuration = \$configuration;
    }

    /**
     * @throws DirectoryDoesNotExist
     */
    public function getMigrationDirectory() : string
    {
        \$dir = \$this->configuration->getMigrationsDirectory();
        \$dir = \$dir ?? getcwd();

        assert(\$dir !== false, 'Unable to determine current working directory.');

        \$dir = rtrim(\$dir, '/');

        if (! file_exists(\$dir)) {
            throw DirectoryDoesNotExist::new(\$dir);
        }

        if (\$this->configuration->areMigrationsOrganizedByYear()) {
            \$dir .= \$this->appendDir(date('Y'));
        }

        if (\$this->configuration->areMigrationsOrganizedByYearAndMonth()) {
            \$dir .= \$this->appendDir(date('m'));
        }

        \$this->createDirIfNotExists(\$dir);

        return \$dir;
    }

    private function appendDir(string \$dir) : string
    {
        return DIRECTORY_SEPARATOR . \$dir;
    }

    private function createDirIfNotExists(string \$dir) : void
    {
        if (file_exists(\$dir)) {
            return;
        }

        mkdir(\$dir, 0755, true);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationDirectoryHelper.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Helper;

use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Tools\\Console\\Exception\\DirectoryDoesNotExist;
use const DIRECTORY_SEPARATOR;
use function assert;
use function date;
use function file_exists;
use function getcwd;
use function mkdir;
use function rtrim;

/**
 * The MigrationDirectoryHelper class is responsible for returning the directory that migrations are stored in.
 *
 * @internal
 */
class MigrationDirectoryHelper
{
    /** @var Configuration */
    private \$configuration;

    public function __construct(Configuration \$configuration)
    {
        \$this->configuration = \$configuration;
    }

    /**
     * @throws DirectoryDoesNotExist
     */
    public function getMigrationDirectory() : string
    {
        \$dir = \$this->configuration->getMigrationsDirectory();
        \$dir = \$dir ?? getcwd();

        assert(\$dir !== false, 'Unable to determine current working directory.');

        \$dir = rtrim(\$dir, '/');

        if (! file_exists(\$dir)) {
            throw DirectoryDoesNotExist::new(\$dir);
        }

        if (\$this->configuration->areMigrationsOrganizedByYear()) {
            \$dir .= \$this->appendDir(date('Y'));
        }

        if (\$this->configuration->areMigrationsOrganizedByYearAndMonth()) {
            \$dir .= \$this->appendDir(date('m'));
        }

        \$this->createDirIfNotExists(\$dir);

        return \$dir;
    }

    private function appendDir(string \$dir) : string
    {
        return DIRECTORY_SEPARATOR . \$dir;
    }

    private function createDirIfNotExists(string \$dir) : void
    {
        if (file_exists(\$dir)) {
            return;
        }

        mkdir(\$dir, 0755, true);
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/MigrationDirectoryHelper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Helper\\MigrationDirectoryHelper.php");
    }
}
