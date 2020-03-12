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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/FileQueryWriter.php */
class __TwigTemplate_ea8a94ef33b2cbb9e26b04aa4651f0db6f1687b3360421649836f426568ca959 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/FileQueryWriter.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use DateTimeImmutable;
use DateTimeInterface;
use Doctrine\\Migrations\\Generator\\FileBuilder;
use function file_put_contents;
use function is_dir;
use function sprintf;

/**
 * The FileQueryWriter class is responsible for writing migration SQL queries to a file on disk.
 *
 * @internal
 */
final class FileQueryWriter implements QueryWriter
{
    /** @var OutputWriter|null */
    private \$outputWriter;

    /** @var FileBuilder */
    private \$migrationFileBuilder;

    public function __construct(
        OutputWriter \$outputWriter,
        FileBuilder \$migrationFileBuilder
    ) {
        \$this->outputWriter         = \$outputWriter;
        \$this->migrationFileBuilder = \$migrationFileBuilder;
    }

    /**
     * @param mixed[] \$queriesByVersion
     */
    public function write(
        string \$path,
        string \$direction,
        array \$queriesByVersion,
        ?DateTimeInterface \$now = null
    ) : bool {
        \$now = \$now ?? new DateTimeImmutable();

        \$string = \$this->migrationFileBuilder
            ->buildMigrationFile(\$queriesByVersion, \$direction, \$now);

        \$path = \$this->buildMigrationFilePath(\$path, \$now);

        if (\$this->outputWriter !== null) {
            \$this->outputWriter->write(
                \"\\n\" . sprintf('Writing migration file to \"<info>%s</info>\"', \$path)
            );
        }

        return file_put_contents(\$path, \$string) !== false;
    }

    private function buildMigrationFilePath(string \$path, DateTimeInterface \$now) : string
    {
        if (is_dir(\$path)) {
            \$path  = realpath(\$path);
            \$path .= '/doctrine_migration_' . \$now->format('YmdHis') . '.sql';
        }

        return \$path;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/FileQueryWriter.php";
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

use DateTimeImmutable;
use DateTimeInterface;
use Doctrine\\Migrations\\Generator\\FileBuilder;
use function file_put_contents;
use function is_dir;
use function sprintf;

/**
 * The FileQueryWriter class is responsible for writing migration SQL queries to a file on disk.
 *
 * @internal
 */
final class FileQueryWriter implements QueryWriter
{
    /** @var OutputWriter|null */
    private \$outputWriter;

    /** @var FileBuilder */
    private \$migrationFileBuilder;

    public function __construct(
        OutputWriter \$outputWriter,
        FileBuilder \$migrationFileBuilder
    ) {
        \$this->outputWriter         = \$outputWriter;
        \$this->migrationFileBuilder = \$migrationFileBuilder;
    }

    /**
     * @param mixed[] \$queriesByVersion
     */
    public function write(
        string \$path,
        string \$direction,
        array \$queriesByVersion,
        ?DateTimeInterface \$now = null
    ) : bool {
        \$now = \$now ?? new DateTimeImmutable();

        \$string = \$this->migrationFileBuilder
            ->buildMigrationFile(\$queriesByVersion, \$direction, \$now);

        \$path = \$this->buildMigrationFilePath(\$path, \$now);

        if (\$this->outputWriter !== null) {
            \$this->outputWriter->write(
                \"\\n\" . sprintf('Writing migration file to \"<info>%s</info>\"', \$path)
            );
        }

        return file_put_contents(\$path, \$string) !== false;
    }

    private function buildMigrationFilePath(string \$path, DateTimeInterface \$now) : string
    {
        if (is_dir(\$path)) {
            \$path  = realpath(\$path);
            \$path .= '/doctrine_migration_' . \$now->format('YmdHis') . '.sql';
        }

        return \$path;
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/FileQueryWriter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\FileQueryWriter.php");
    }
}
