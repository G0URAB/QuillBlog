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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/FileBuilder.php */
class __TwigTemplate_34f7467da22434f405a825b99e5ea6c64544bc3daea7f05595dc2f02a8ef27a8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/FileBuilder.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Generator;

use DateTimeInterface;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\Migrations\\Version\\Direction;
use function sprintf;

/**
 * The FileBuilder class is responsible for building a migration SQL file from an array of queries per version.
 *
 * @internal
 */
final class FileBuilder
{
    /** @var AbstractPlatform */
    private \$platform;

    /** @var string */
    private \$tableName;

    /** @var string */
    private \$columnName;

    /** @var string */
    private \$executedAtColumnName;

    public function __construct(
        AbstractPlatform \$platform,
        string \$tableName,
        string \$columnName,
        string \$executedAtColumnName
    ) {
        \$this->platform             = \$platform;
        \$this->tableName            = \$tableName;
        \$this->columnName           = \$columnName;
        \$this->executedAtColumnName = \$executedAtColumnName;
    }

    /** @param string[][] \$queriesByVersion */
    public function buildMigrationFile(
        array \$queriesByVersion,
        string \$direction,
        DateTimeInterface \$now
    ) : string {
        \$string = sprintf(\"-- Doctrine Migration File Generated on %s\\n\", \$now->format('Y-m-d H:i:s'));

        foreach (\$queriesByVersion as \$version => \$queries) {
            \$version = (string) \$version;

            \$string .= \"\\n-- Version \" . \$version . \"\\n\";

            foreach (\$queries as \$query) {
                \$string .= \$query . \";\\n\";
            }

            \$string .= \$this->getVersionUpdateQuery(\$version, \$direction);
        }

        return \$string;
    }

    private function getVersionUpdateQuery(string \$version, string \$direction) : string
    {
        if (\$direction === Direction::DOWN) {
            return sprintf(
                \"DELETE FROM %s WHERE %s = '%s';\\n\",
                \$this->tableName,
                \$this->columnName,
                \$version
            );
        }

        return sprintf(
            \"INSERT INTO %s (%s, %s) VALUES ('%s', %s);\\n\",
            \$this->tableName,
            \$this->columnName,
            \$this->executedAtColumnName,
            \$version,
            \$this->platform->getCurrentTimestampSQL()
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/FileBuilder.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Generator;

use DateTimeInterface;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\Migrations\\Version\\Direction;
use function sprintf;

/**
 * The FileBuilder class is responsible for building a migration SQL file from an array of queries per version.
 *
 * @internal
 */
final class FileBuilder
{
    /** @var AbstractPlatform */
    private \$platform;

    /** @var string */
    private \$tableName;

    /** @var string */
    private \$columnName;

    /** @var string */
    private \$executedAtColumnName;

    public function __construct(
        AbstractPlatform \$platform,
        string \$tableName,
        string \$columnName,
        string \$executedAtColumnName
    ) {
        \$this->platform             = \$platform;
        \$this->tableName            = \$tableName;
        \$this->columnName           = \$columnName;
        \$this->executedAtColumnName = \$executedAtColumnName;
    }

    /** @param string[][] \$queriesByVersion */
    public function buildMigrationFile(
        array \$queriesByVersion,
        string \$direction,
        DateTimeInterface \$now
    ) : string {
        \$string = sprintf(\"-- Doctrine Migration File Generated on %s\\n\", \$now->format('Y-m-d H:i:s'));

        foreach (\$queriesByVersion as \$version => \$queries) {
            \$version = (string) \$version;

            \$string .= \"\\n-- Version \" . \$version . \"\\n\";

            foreach (\$queries as \$query) {
                \$string .= \$query . \";\\n\";
            }

            \$string .= \$this->getVersionUpdateQuery(\$version, \$direction);
        }

        return \$string;
    }

    private function getVersionUpdateQuery(string \$version, string \$direction) : string
    {
        if (\$direction === Direction::DOWN) {
            return sprintf(
                \"DELETE FROM %s WHERE %s = '%s';\\n\",
                \$this->tableName,
                \$this->columnName,
                \$version
            );
        }

        return sprintf(
            \"INSERT INTO %s (%s, %s) VALUES ('%s', %s);\\n\",
            \$this->tableName,
            \$this->columnName,
            \$this->executedAtColumnName,
            \$version,
            \$this->platform->getCurrentTimestampSQL()
        );
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/FileBuilder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Generator\\FileBuilder.php");
    }
}
