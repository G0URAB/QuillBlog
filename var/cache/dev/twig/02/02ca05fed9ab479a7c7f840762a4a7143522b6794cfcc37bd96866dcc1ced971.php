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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Exception/DuplicateMigrationVersion.php */
class __TwigTemplate_8600e40233570e5ed914ae160aac5aa098e5a4547942a6bf64e90f21522be1c8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Exception/DuplicateMigrationVersion.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Exception;

use RuntimeException;
use function sprintf;

final class DuplicateMigrationVersion extends RuntimeException implements MigrationException
{
    public static function new(string \$version, string \$class) : self
    {
        return new self(
            sprintf(
                'Migration version %s already registered with class %s',
                \$version,
                \$class
            ),
            7
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Exception/DuplicateMigrationVersion.php";
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

final class DuplicateMigrationVersion extends RuntimeException implements MigrationException
{
    public static function new(string \$version, string \$class) : self
    {
        return new self(
            sprintf(
                'Migration version %s already registered with class %s',
                \$version,
                \$class
            ),
            7
        );
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Exception/DuplicateMigrationVersion.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Exception\\DuplicateMigrationVersion.php");
    }
}
