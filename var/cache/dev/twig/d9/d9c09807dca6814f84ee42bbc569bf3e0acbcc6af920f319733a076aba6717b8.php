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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Exception/UnknownConfigurationValue.php */
class __TwigTemplate_47d40ac42ba57fc116a1c228959c489adecb4489ead1fde8cada82a586aa5d4f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Exception/UnknownConfigurationValue.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Exception;

use LogicException;
use function sprintf;
use function var_export;

final class UnknownConfigurationValue extends LogicException implements ConfigurationException
{
    /**
     * @param mixed \$value
     */
    public static function new(string \$key, \$value) : self
    {
        return new self(
            sprintf(
                'Unknown %s for configuration \"%s\".',
                var_export(\$value, true),
                \$key
            ),
            10
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Exception/UnknownConfigurationValue.php";
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
use function sprintf;
use function var_export;

final class UnknownConfigurationValue extends LogicException implements ConfigurationException
{
    /**
     * @param mixed \$value
     */
    public static function new(string \$key, \$value) : self
    {
        return new self(
            sprintf(
                'Unknown %s for configuration \"%s\".',
                var_export(\$value, true),
                \$key
            ),
            10
        );
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Exception/UnknownConfigurationValue.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\Exception\\UnknownConfigurationValue.php");
    }
}
