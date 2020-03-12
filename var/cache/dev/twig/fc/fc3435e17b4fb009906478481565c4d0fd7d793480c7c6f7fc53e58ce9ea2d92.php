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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/ParameterFormatterInterface.php */
class __TwigTemplate_ea5109b19ced4d83d174e887e055f3a75692828ceed1f8a0f1e3013e4188f142 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/ParameterFormatterInterface.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

/**
 * The ParameterFormatterInterface defines the interface for formatting SQL query parameters to a string
 * for display output.
 *
 * @internal
 *
 * @see Doctrine\\Migrations\\ParameterFormatter
 */
interface ParameterFormatterInterface
{
    /**
     * @param mixed[] \$params
     * @param mixed[] \$types
     */
    public function formatParameters(array \$params, array \$types) : string;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/ParameterFormatterInterface.php";
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

/**
 * The ParameterFormatterInterface defines the interface for formatting SQL query parameters to a string
 * for display output.
 *
 * @internal
 *
 * @see Doctrine\\Migrations\\ParameterFormatter
 */
interface ParameterFormatterInterface
{
    /**
     * @param mixed[] \$params
     * @param mixed[] \$types
     */
    public function formatParameters(array \$params, array \$types) : string;
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/ParameterFormatterInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\ParameterFormatterInterface.php");
    }
}
