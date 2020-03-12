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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/BooleanStringFormatter.php */
class __TwigTemplate_8febb7a65813235693215c52f665186fcd7b30114bcacc2f2d99f3bbf2c04d32 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/BooleanStringFormatter.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools;

use function strtolower;

/**
 * The BooleanStringFormatter class is responsible for formatting a string boolean representation to a PHP boolean value.
 * It is used in the XmlConfiguration class to convert the string XML boolean value to a PHP boolean value.
 *
 * @internal
 *
 * @see Doctrine\\Migrations\\Configuration\\XmlConfiguration
 */
class BooleanStringFormatter
{
    public static function toBoolean(string \$value, bool \$default) : bool
    {
        switch (strtolower(\$value)) {
            case 'true':
                return true;
            case '1':
                return true;
            case 'false':
                return false;
            case '0':
                return false;
            default:
                return \$default;
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/BooleanStringFormatter.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools;

use function strtolower;

/**
 * The BooleanStringFormatter class is responsible for formatting a string boolean representation to a PHP boolean value.
 * It is used in the XmlConfiguration class to convert the string XML boolean value to a PHP boolean value.
 *
 * @internal
 *
 * @see Doctrine\\Migrations\\Configuration\\XmlConfiguration
 */
class BooleanStringFormatter
{
    public static function toBoolean(string \$value, bool \$default) : bool
    {
        switch (strtolower(\$value)) {
            case 'true':
                return true;
            case '1':
                return true;
            case 'false':
                return false;
            case '0':
                return false;
            default:
                return \$default;
        }
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/BooleanStringFormatter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\BooleanStringFormatter.php");
    }
}
