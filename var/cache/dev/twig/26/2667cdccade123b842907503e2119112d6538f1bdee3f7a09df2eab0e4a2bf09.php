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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/EncapsedStringPart.php */
class __TwigTemplate_5c336a92ce35ee00a292cdd54caef5e90309e0b77369706fb591aa285cfc5a33 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/EncapsedStringPart.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Scalar;

use PhpParser\\Node\\Scalar;

class EncapsedStringPart extends Scalar
{
    /** @var string String value */
    public \$value;

    /**
     * Constructs a node representing a string part of an encapsed string.
     *
     * @param string \$value      String value
     * @param array  \$attributes Additional attributes
     */
    public function __construct(string \$value, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['value'];
    }
    
    public function getType() : string {
        return 'Scalar_EncapsedStringPart';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/EncapsedStringPart.php";
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

class EncapsedStringPart extends Scalar
{
    /** @var string String value */
    public \$value;

    /**
     * Constructs a node representing a string part of an encapsed string.
     *
     * @param string \$value      String value
     * @param array  \$attributes Additional attributes
     */
    public function __construct(string \$value, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['value'];
    }
    
    public function getType() : string {
        return 'Scalar_EncapsedStringPart';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/EncapsedStringPart.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Scalar\\EncapsedStringPart.php");
    }
}
