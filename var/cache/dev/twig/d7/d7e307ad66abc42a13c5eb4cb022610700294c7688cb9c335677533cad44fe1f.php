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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Const_.php */
class __TwigTemplate_7ef3e1185fee00b2080096e6bea3c5df1e072ab3b67ec056aa81730aee790902 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Const_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

/**
 * @property Name \$namespacedName Namespaced name (for class constants, if using NameResolver)
 */
class Const_ extends NodeAbstract
{
    /** @var Identifier Name */
    public \$name;
    /** @var Expr Value */
    public \$value;

    /**
     * Constructs a const node for use in class const and const statements.
     *
     * @param string|Identifier \$name       Name
     * @param Expr              \$value      Value
     * @param array             \$attributes Additional attributes
     */
    public function __construct(\$name, Expr \$value, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['name', 'value'];
    }
    
    public function getType() : string {
        return 'Const';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Const_.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

/**
 * @property Name \$namespacedName Namespaced name (for class constants, if using NameResolver)
 */
class Const_ extends NodeAbstract
{
    /** @var Identifier Name */
    public \$name;
    /** @var Expr Value */
    public \$value;

    /**
     * Constructs a const node for use in class const and const statements.
     *
     * @param string|Identifier \$name       Name
     * @param Expr              \$value      Value
     * @param array             \$attributes Additional attributes
     */
    public function __construct(\$name, Expr \$value, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['name', 'value'];
    }
    
    public function getType() : string {
        return 'Const';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Const_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Const_.php");
    }
}
