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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Class_.php */
class __TwigTemplate_7e17d8988b3c05ecabf8f50121444106a016439a20ff2d56f8bc868938582da6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Class_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Error;
use PhpParser\\Node;

class Class_ extends ClassLike
{
    const MODIFIER_PUBLIC    =  1;
    const MODIFIER_PROTECTED =  2;
    const MODIFIER_PRIVATE   =  4;
    const MODIFIER_STATIC    =  8;
    const MODIFIER_ABSTRACT  = 16;
    const MODIFIER_FINAL     = 32;

    const VISIBILITY_MODIFIER_MASK = 7; // 1 | 2 | 4

    /** @var int Type */
    public \$flags;
    /** @var null|Node\\Name Name of extended class */
    public \$extends;
    /** @var Node\\Name[] Names of implemented interfaces */
    public \$implements;

    /**
     * Constructs a class node.
     *
     * @param string|Node\\Identifier|null \$name Name
     * @param array       \$subNodes   Array of the following optional subnodes:
     *                                'flags'      => 0      : Flags
     *                                'extends'    => null   : Name of extended class
     *                                'implements' => array(): Names of implemented interfaces
     *                                'stmts'      => array(): Statements
     * @param array       \$attributes Additional attributes
     */
    public function __construct(\$name, array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->flags = \$subNodes['flags'] ?? \$subNodes['type'] ?? 0;
        \$this->name = \\is_string(\$name) ? new Node\\Identifier(\$name) : \$name;
        \$this->extends = \$subNodes['extends'] ?? null;
        \$this->implements = \$subNodes['implements'] ?? [];
        \$this->stmts = \$subNodes['stmts'] ?? [];
    }

    public function getSubNodeNames() : array {
        return ['flags', 'name', 'extends', 'implements', 'stmts'];
    }

    /**
     * Whether the class is explicitly abstract.
     *
     * @return bool
     */
    public function isAbstract() : bool {
        return (bool) (\$this->flags & self::MODIFIER_ABSTRACT);
    }

    /**
     * Whether the class is final.
     *
     * @return bool
     */
    public function isFinal() : bool {
        return (bool) (\$this->flags & self::MODIFIER_FINAL);
    }

    /**
     * Whether the class is anonymous.
     *
     * @return bool
     */
    public function isAnonymous() : bool {
        return null === \$this->name;
    }

    /**
     * @internal
     */
    public static function verifyModifier(\$a, \$b) {
        if (\$a & self::VISIBILITY_MODIFIER_MASK && \$b & self::VISIBILITY_MODIFIER_MASK) {
            throw new Error('Multiple access type modifiers are not allowed');
        }

        if (\$a & self::MODIFIER_ABSTRACT && \$b & self::MODIFIER_ABSTRACT) {
            throw new Error('Multiple abstract modifiers are not allowed');
        }

        if (\$a & self::MODIFIER_STATIC && \$b & self::MODIFIER_STATIC) {
            throw new Error('Multiple static modifiers are not allowed');
        }

        if (\$a & self::MODIFIER_FINAL && \$b & self::MODIFIER_FINAL) {
            throw new Error('Multiple final modifiers are not allowed');
        }

        if (\$a & 48 && \$b & 48) {
            throw new Error('Cannot use the final modifier on an abstract class member');
        }
    }

    public function getType() : string {
        return 'Stmt_Class';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Class_.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Error;
use PhpParser\\Node;

class Class_ extends ClassLike
{
    const MODIFIER_PUBLIC    =  1;
    const MODIFIER_PROTECTED =  2;
    const MODIFIER_PRIVATE   =  4;
    const MODIFIER_STATIC    =  8;
    const MODIFIER_ABSTRACT  = 16;
    const MODIFIER_FINAL     = 32;

    const VISIBILITY_MODIFIER_MASK = 7; // 1 | 2 | 4

    /** @var int Type */
    public \$flags;
    /** @var null|Node\\Name Name of extended class */
    public \$extends;
    /** @var Node\\Name[] Names of implemented interfaces */
    public \$implements;

    /**
     * Constructs a class node.
     *
     * @param string|Node\\Identifier|null \$name Name
     * @param array       \$subNodes   Array of the following optional subnodes:
     *                                'flags'      => 0      : Flags
     *                                'extends'    => null   : Name of extended class
     *                                'implements' => array(): Names of implemented interfaces
     *                                'stmts'      => array(): Statements
     * @param array       \$attributes Additional attributes
     */
    public function __construct(\$name, array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->flags = \$subNodes['flags'] ?? \$subNodes['type'] ?? 0;
        \$this->name = \\is_string(\$name) ? new Node\\Identifier(\$name) : \$name;
        \$this->extends = \$subNodes['extends'] ?? null;
        \$this->implements = \$subNodes['implements'] ?? [];
        \$this->stmts = \$subNodes['stmts'] ?? [];
    }

    public function getSubNodeNames() : array {
        return ['flags', 'name', 'extends', 'implements', 'stmts'];
    }

    /**
     * Whether the class is explicitly abstract.
     *
     * @return bool
     */
    public function isAbstract() : bool {
        return (bool) (\$this->flags & self::MODIFIER_ABSTRACT);
    }

    /**
     * Whether the class is final.
     *
     * @return bool
     */
    public function isFinal() : bool {
        return (bool) (\$this->flags & self::MODIFIER_FINAL);
    }

    /**
     * Whether the class is anonymous.
     *
     * @return bool
     */
    public function isAnonymous() : bool {
        return null === \$this->name;
    }

    /**
     * @internal
     */
    public static function verifyModifier(\$a, \$b) {
        if (\$a & self::VISIBILITY_MODIFIER_MASK && \$b & self::VISIBILITY_MODIFIER_MASK) {
            throw new Error('Multiple access type modifiers are not allowed');
        }

        if (\$a & self::MODIFIER_ABSTRACT && \$b & self::MODIFIER_ABSTRACT) {
            throw new Error('Multiple abstract modifiers are not allowed');
        }

        if (\$a & self::MODIFIER_STATIC && \$b & self::MODIFIER_STATIC) {
            throw new Error('Multiple static modifiers are not allowed');
        }

        if (\$a & self::MODIFIER_FINAL && \$b & self::MODIFIER_FINAL) {
            throw new Error('Multiple final modifiers are not allowed');
        }

        if (\$a & 48 && \$b & 48) {
            throw new Error('Cannot use the final modifier on an abstract class member');
        }
    }

    public function getType() : string {
        return 'Stmt_Class';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Class_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\Class_.php");
    }
}
