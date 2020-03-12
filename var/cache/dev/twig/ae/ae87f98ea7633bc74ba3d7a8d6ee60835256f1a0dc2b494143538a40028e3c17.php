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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/UniqueIdentifierGenerator.php */
class __TwigTemplate_f978264f3c2043757f4b0b6090a9ccdf35b915f73763d9bb52d84c8ee1353602 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/UniqueIdentifierGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Generator\\Util;

/**
 * Utility class capable of generating unique
 * valid class/property/method identifiers
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
abstract class UniqueIdentifierGenerator
{
    const VALID_IDENTIFIER_FORMAT = '/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]+\$/';
    const DEFAULT_IDENTIFIER = 'g';

    /**
     * Generates a valid unique identifier from the given name
     */
    public static function getIdentifier(string \$name) : string
    {
        return str_replace(
            '.',
            '',
            uniqid(
                preg_match(static::VALID_IDENTIFIER_FORMAT, \$name)
                ? \$name
                : static::DEFAULT_IDENTIFIER,
                true
            )
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/UniqueIdentifierGenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Generator\\Util;

/**
 * Utility class capable of generating unique
 * valid class/property/method identifiers
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
abstract class UniqueIdentifierGenerator
{
    const VALID_IDENTIFIER_FORMAT = '/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]+\$/';
    const DEFAULT_IDENTIFIER = 'g';

    /**
     * Generates a valid unique identifier from the given name
     */
    public static function getIdentifier(string \$name) : string
    {
        return str_replace(
            '.',
            '',
            uniqid(
                preg_match(static::VALID_IDENTIFIER_FORMAT, \$name)
                ? \$name
                : static::DEFAULT_IDENTIFIER,
                true
            )
        );
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/UniqueIdentifierGenerator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Generator\\Util\\UniqueIdentifierGenerator.php");
    }
}
