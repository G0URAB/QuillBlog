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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Exception/MigrationsNamespaceRequired.php */
class __TwigTemplate_cb1b88bc4833cfcf1cbfcfb4001ec6c8eaac8834b81047d8ad43b63f18928d3c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Exception/MigrationsNamespaceRequired.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Exception;

use LogicException;

final class MigrationsNamespaceRequired extends LogicException implements ConfigurationException
{
    public static function new() : self
    {
        return new self(
            'Migrations namespace must be configured in order to use Doctrine migrations.',
            2
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Exception/MigrationsNamespaceRequired.php";
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

use LogicException;

final class MigrationsNamespaceRequired extends LogicException implements ConfigurationException
{
    public static function new() : self
    {
        return new self(
            'Migrations namespace must be configured in order to use Doctrine migrations.',
            2
        );
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Exception/MigrationsNamespaceRequired.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\Exception\\MigrationsNamespaceRequired.php");
    }
}
