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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Property.php */
class __TwigTemplate_0e2fe5becfa350841ef70801f41ac210dff814318ea09f2f6cdf4928061d3713 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Property.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;
use PhpParser\\Node\\Identifier;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\NullableType;
use PhpParser\\Node\\UnionType;

class Property extends Node\\Stmt
{
    /** @var int Modifiers */
    public \$flags;
    /** @var PropertyProperty[] Properties */
    public \$props;
    /** @var null|Identifier|Name|NullableType|UnionType Type declaration */
    public \$type;

    /**
     * Constructs a class property list node.
     *
     * @param int                                                \$flags      Modifiers
     * @param PropertyProperty[]                                 \$props      Properties
     * @param array                                              \$attributes Additional attributes
     * @param null|string|Identifier|Name|NullableType|UnionType \$type       Type declaration
     */
    public function __construct(int \$flags, array \$props, array \$attributes = [], \$type = null) {
        \$this->attributes = \$attributes;
        \$this->flags = \$flags;
        \$this->props = \$props;
        \$this->type = \\is_string(\$type) ? new Identifier(\$type) : \$type;
    }

    public function getSubNodeNames() : array {
        return ['flags', 'type', 'props'];
    }

    /**
     * Whether the property is explicitly or implicitly public.
     *
     * @return bool
     */
    public function isPublic() : bool {
        return (\$this->flags & Class_::MODIFIER_PUBLIC) !== 0
            || (\$this->flags & Class_::VISIBILITY_MODIFIER_MASK) === 0;
    }

    /**
     * Whether the property is protected.
     *
     * @return bool
     */
    public function isProtected() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PROTECTED);
    }

    /**
     * Whether the property is private.
     *
     * @return bool
     */
    public function isPrivate() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PRIVATE);
    }

    /**
     * Whether the property is static.
     *
     * @return bool
     */
    public function isStatic() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_STATIC);
    }

    public function getType() : string {
        return 'Stmt_Property';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Property.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;
use PhpParser\\Node\\Identifier;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\NullableType;
use PhpParser\\Node\\UnionType;

class Property extends Node\\Stmt
{
    /** @var int Modifiers */
    public \$flags;
    /** @var PropertyProperty[] Properties */
    public \$props;
    /** @var null|Identifier|Name|NullableType|UnionType Type declaration */
    public \$type;

    /**
     * Constructs a class property list node.
     *
     * @param int                                                \$flags      Modifiers
     * @param PropertyProperty[]                                 \$props      Properties
     * @param array                                              \$attributes Additional attributes
     * @param null|string|Identifier|Name|NullableType|UnionType \$type       Type declaration
     */
    public function __construct(int \$flags, array \$props, array \$attributes = [], \$type = null) {
        \$this->attributes = \$attributes;
        \$this->flags = \$flags;
        \$this->props = \$props;
        \$this->type = \\is_string(\$type) ? new Identifier(\$type) : \$type;
    }

    public function getSubNodeNames() : array {
        return ['flags', 'type', 'props'];
    }

    /**
     * Whether the property is explicitly or implicitly public.
     *
     * @return bool
     */
    public function isPublic() : bool {
        return (\$this->flags & Class_::MODIFIER_PUBLIC) !== 0
            || (\$this->flags & Class_::VISIBILITY_MODIFIER_MASK) === 0;
    }

    /**
     * Whether the property is protected.
     *
     * @return bool
     */
    public function isProtected() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PROTECTED);
    }

    /**
     * Whether the property is private.
     *
     * @return bool
     */
    public function isPrivate() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PRIVATE);
    }

    /**
     * Whether the property is static.
     *
     * @return bool
     */
    public function isStatic() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_STATIC);
    }

    public function getType() : string {
        return 'Stmt_Property';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Property.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\Property.php");
    }
}
