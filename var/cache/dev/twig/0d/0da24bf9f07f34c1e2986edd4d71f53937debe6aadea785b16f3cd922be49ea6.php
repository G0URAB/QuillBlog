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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Param.php */
class __TwigTemplate_90e82cca394c45e51a99be65caa30070de35df63495c772a343d56eb8a47bc9f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Param.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

class Param extends NodeAbstract
{
    /** @var null|Identifier|Name|NullableType|UnionType Type declaration */
    public \$type;
    /** @var bool Whether parameter is passed by reference */
    public \$byRef;
    /** @var bool Whether this is a variadic argument */
    public \$variadic;
    /** @var Expr\\Variable|Expr\\Error Parameter variable */
    public \$var;
    /** @var null|Expr Default value */
    public \$default;

    /**
     * Constructs a parameter node.
     *
     * @param Expr\\Variable|Expr\\Error                           \$var        Parameter variable
     * @param null|Expr                                          \$default    Default value
     * @param null|string|Identifier|Name|NullableType|UnionType \$type       Type declaration
     * @param bool                                               \$byRef      Whether is passed by reference
     * @param bool                                               \$variadic   Whether this is a variadic argument
     * @param array                                              \$attributes Additional attributes
     */
    public function __construct(
        \$var, Expr \$default = null, \$type = null,
        bool \$byRef = false, bool \$variadic = false, array \$attributes = []
    ) {
        \$this->attributes = \$attributes;
        \$this->type = \\is_string(\$type) ? new Identifier(\$type) : \$type;
        \$this->byRef = \$byRef;
        \$this->variadic = \$variadic;
        \$this->var = \$var;
        \$this->default = \$default;
    }

    public function getSubNodeNames() : array {
        return ['type', 'byRef', 'variadic', 'var', 'default'];
    }

    public function getType() : string {
        return 'Param';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Param.php";
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

class Param extends NodeAbstract
{
    /** @var null|Identifier|Name|NullableType|UnionType Type declaration */
    public \$type;
    /** @var bool Whether parameter is passed by reference */
    public \$byRef;
    /** @var bool Whether this is a variadic argument */
    public \$variadic;
    /** @var Expr\\Variable|Expr\\Error Parameter variable */
    public \$var;
    /** @var null|Expr Default value */
    public \$default;

    /**
     * Constructs a parameter node.
     *
     * @param Expr\\Variable|Expr\\Error                           \$var        Parameter variable
     * @param null|Expr                                          \$default    Default value
     * @param null|string|Identifier|Name|NullableType|UnionType \$type       Type declaration
     * @param bool                                               \$byRef      Whether is passed by reference
     * @param bool                                               \$variadic   Whether this is a variadic argument
     * @param array                                              \$attributes Additional attributes
     */
    public function __construct(
        \$var, Expr \$default = null, \$type = null,
        bool \$byRef = false, bool \$variadic = false, array \$attributes = []
    ) {
        \$this->attributes = \$attributes;
        \$this->type = \\is_string(\$type) ? new Identifier(\$type) : \$type;
        \$this->byRef = \$byRef;
        \$this->variadic = \$variadic;
        \$this->var = \$var;
        \$this->default = \$default;
    }

    public function getSubNodeNames() : array {
        return ['type', 'byRef', 'variadic', 'var', 'default'];
    }

    public function getType() : string {
        return 'Param';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Param.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Param.php");
    }
}
