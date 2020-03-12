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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/DNumber.php */
class __TwigTemplate_dc6c9c0a4c4c1c4ff00a2eca144d7ae12087ec1437699258f46c9aacc4f16eb8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/DNumber.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Scalar;

use PhpParser\\Node\\Scalar;

class DNumber extends Scalar
{
    /** @var float Number value */
    public \$value;

    /**
     * Constructs a float number scalar node.
     *
     * @param float \$value      Value of the number
     * @param array \$attributes Additional attributes
     */
    public function __construct(float \$value, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['value'];
    }

    /**
     * @internal
     *
     * Parses a DNUMBER token like PHP would.
     *
     * @param string \$str A string number
     *
     * @return float The parsed number
     */
    public static function parse(string \$str) : float {
        \$str = str_replace('_', '', \$str);

        // if string contains any of .eE just cast it to float
        if (false !== strpbrk(\$str, '.eE')) {
            return (float) \$str;
        }

        // otherwise it's an integer notation that overflowed into a float
        // if it starts with 0 it's one of the special integer notations
        if ('0' === \$str[0]) {
            // hex
            if ('x' === \$str[1] || 'X' === \$str[1]) {
                return hexdec(\$str);
            }

            // bin
            if ('b' === \$str[1] || 'B' === \$str[1]) {
                return bindec(\$str);
            }

            // oct
            // substr(\$str, 0, strcspn(\$str, '89')) cuts the string at the first invalid digit (8 or 9)
            // so that only the digits before that are used
            return octdec(substr(\$str, 0, strcspn(\$str, '89')));
        }

        // dec
        return (float) \$str;
    }
    
    public function getType() : string {
        return 'Scalar_DNumber';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/DNumber.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Scalar;

use PhpParser\\Node\\Scalar;

class DNumber extends Scalar
{
    /** @var float Number value */
    public \$value;

    /**
     * Constructs a float number scalar node.
     *
     * @param float \$value      Value of the number
     * @param array \$attributes Additional attributes
     */
    public function __construct(float \$value, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['value'];
    }

    /**
     * @internal
     *
     * Parses a DNUMBER token like PHP would.
     *
     * @param string \$str A string number
     *
     * @return float The parsed number
     */
    public static function parse(string \$str) : float {
        \$str = str_replace('_', '', \$str);

        // if string contains any of .eE just cast it to float
        if (false !== strpbrk(\$str, '.eE')) {
            return (float) \$str;
        }

        // otherwise it's an integer notation that overflowed into a float
        // if it starts with 0 it's one of the special integer notations
        if ('0' === \$str[0]) {
            // hex
            if ('x' === \$str[1] || 'X' === \$str[1]) {
                return hexdec(\$str);
            }

            // bin
            if ('b' === \$str[1] || 'B' === \$str[1]) {
                return bindec(\$str);
            }

            // oct
            // substr(\$str, 0, strcspn(\$str, '89')) cuts the string at the first invalid digit (8 or 9)
            // so that only the digits before that are used
            return octdec(substr(\$str, 0, strcspn(\$str, '89')));
        }

        // dec
        return (float) \$str;
    }
    
    public function getType() : string {
        return 'Scalar_DNumber';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/DNumber.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Scalar\\DNumber.php");
    }
}
