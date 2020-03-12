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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Exception/ParameterIncompatibleWithFinder.php */
class __TwigTemplate_d3a78ce29c9eb42df9239813ad8b404e9cea038cad222e1635ee23339a504412 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Exception/ParameterIncompatibleWithFinder.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Exception;

use Doctrine\\Migrations\\Finder\\MigrationFinder;
use LogicException;
use function get_class;
use function sprintf;

final class ParameterIncompatibleWithFinder extends LogicException implements ConfigurationException
{
    public static function new(string \$configurationParameterName, MigrationFinder \$finder) : self
    {
        return new self(
            sprintf(
                'Configuration-parameter \"%s\" cannot be used with finder of type \"%s\"',
                \$configurationParameterName,
                get_class(\$finder)
            ),
            9
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Exception/ParameterIncompatibleWithFinder.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Exception;

use Doctrine\\Migrations\\Finder\\MigrationFinder;
use LogicException;
use function get_class;
use function sprintf;

final class ParameterIncompatibleWithFinder extends LogicException implements ConfigurationException
{
    public static function new(string \$configurationParameterName, MigrationFinder \$finder) : self
    {
        return new self(
            sprintf(
                'Configuration-parameter \"%s\" cannot be used with finder of type \"%s\"',
                \$configurationParameterName,
                get_class(\$finder)
            ),
            9
        );
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Exception/ParameterIncompatibleWithFinder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\Exception\\ParameterIncompatibleWithFinder.php");
    }
}
