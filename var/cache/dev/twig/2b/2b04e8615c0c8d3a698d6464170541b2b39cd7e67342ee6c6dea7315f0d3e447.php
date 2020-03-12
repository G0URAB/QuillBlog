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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/RecursiveRegexFinder.php */
class __TwigTemplate_1239965dc71659841b19e600482cb1a5fa473521b3eefcc1650972feff1845ee extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/RecursiveRegexFinder.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Finder;

use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RegexIterator;
use const DIRECTORY_SEPARATOR;
use function sprintf;

/**
 * The RecursiveRegexFinder class recursively searches the given directory for migrations.
 */
final class RecursiveRegexFinder extends Finder implements MigrationDeepFinder
{
    /**
     * @return string[]
     */
    public function findMigrations(string \$directory, ?string \$namespace = null) : array
    {
        \$dir = \$this->getRealPath(\$directory);

        return \$this->loadMigrations(
            \$this->getMatches(\$this->createIterator(\$dir)),
            \$namespace
        );
    }

    private function createIterator(string \$dir) : RegexIterator
    {
        return new RegexIterator(
            new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator(\$dir, FilesystemIterator::SKIP_DOTS | FilesystemIterator::FOLLOW_SYMLINKS),
                RecursiveIteratorIterator::LEAVES_ONLY
            ),
            \$this->getPattern(),
            RegexIterator::GET_MATCH
        );
    }

    private function getPattern() : string
    {
        return sprintf(
            '#^.+\\\\%sVersion[^\\\\%s]{1,255}\\\\.php\$#i',
            DIRECTORY_SEPARATOR,
            DIRECTORY_SEPARATOR
        );
    }

    /**
     * @return string[]
     */
    private function getMatches(RegexIterator \$iteratorFilesMatch) : array
    {
        \$files = [];
        foreach (\$iteratorFilesMatch as \$file) {
            \$files[] = \$file[0];
        }

        return \$files;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/RecursiveRegexFinder.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Finder;

use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RegexIterator;
use const DIRECTORY_SEPARATOR;
use function sprintf;

/**
 * The RecursiveRegexFinder class recursively searches the given directory for migrations.
 */
final class RecursiveRegexFinder extends Finder implements MigrationDeepFinder
{
    /**
     * @return string[]
     */
    public function findMigrations(string \$directory, ?string \$namespace = null) : array
    {
        \$dir = \$this->getRealPath(\$directory);

        return \$this->loadMigrations(
            \$this->getMatches(\$this->createIterator(\$dir)),
            \$namespace
        );
    }

    private function createIterator(string \$dir) : RegexIterator
    {
        return new RegexIterator(
            new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator(\$dir, FilesystemIterator::SKIP_DOTS | FilesystemIterator::FOLLOW_SYMLINKS),
                RecursiveIteratorIterator::LEAVES_ONLY
            ),
            \$this->getPattern(),
            RegexIterator::GET_MATCH
        );
    }

    private function getPattern() : string
    {
        return sprintf(
            '#^.+\\\\%sVersion[^\\\\%s]{1,255}\\\\.php\$#i',
            DIRECTORY_SEPARATOR,
            DIRECTORY_SEPARATOR
        );
    }

    /**
     * @return string[]
     */
    private function getMatches(RegexIterator \$iteratorFilesMatch) : array
    {
        \$files = [];
        foreach (\$iteratorFilesMatch as \$file) {
            \$files[] = \$file[0];
        }

        return \$files;
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/RecursiveRegexFinder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Finder\\RecursiveRegexFinder.php");
    }
}
