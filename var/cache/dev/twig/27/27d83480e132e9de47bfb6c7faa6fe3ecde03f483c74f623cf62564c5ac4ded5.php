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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Exception/MigrationNotConvertibleToSql.php */
class __TwigTemplate_84483d08e2c6c949c5b2bc373efdb13b17e892376aeb37258f86a454d9299d29 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Exception/MigrationNotConvertibleToSql.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Exception;

use RuntimeException;
use function sprintf;

final class MigrationNotConvertibleToSql extends RuntimeException implements MigrationException
{
    public static function new(string \$migrationClass) : self
    {
        return new self(
            sprintf(
                'Migration class \"%s\" contains a prepared statement. Unfortunately there is no cross platform way '
                . 'of outputing it as an sql string. Do you want to write a PR for it?',
                \$migrationClass
            )
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Exception/MigrationNotConvertibleToSql.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Exception;

use RuntimeException;
use function sprintf;

final class MigrationNotConvertibleToSql extends RuntimeException implements MigrationException
{
    public static function new(string \$migrationClass) : self
    {
        return new self(
            sprintf(
                'Migration class \"%s\" contains a prepared statement. Unfortunately there is no cross platform way '
                . 'of outputing it as an sql string. Do you want to write a PR for it?',
                \$migrationClass
            )
        );
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Exception/MigrationNotConvertibleToSql.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Exception\\MigrationNotConvertibleToSql.php");
    }
}
