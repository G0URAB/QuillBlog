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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUseAdaptation.php */
class __TwigTemplate_4bc164eeb8afa42d588a747854439981217ccaef0625f70364e4ca1a76fd5bd3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUseAdaptation.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser\\Builder;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;
use PhpParser\\Node\\Stmt;

class TraitUseAdaptation implements Builder
{
    const TYPE_UNDEFINED  = 0;
    const TYPE_ALIAS      = 1;
    const TYPE_PRECEDENCE = 2;

    /** @var int Type of building adaptation */
    protected \$type;

    protected \$trait;
    protected \$method;

    protected \$modifier = null;
    protected \$alias = null;

    protected \$insteadof = [];

    /**
     * Creates a trait use adaptation builder.
     *
     * @param Node\\Name|string|null  \$trait  Name of adaptated trait
     * @param Node\\Identifier|string \$method Name of adaptated method
     */
    public function __construct(\$trait, \$method) {
        \$this->type = self::TYPE_UNDEFINED;

        \$this->trait = is_null(\$trait)? null: BuilderHelpers::normalizeName(\$trait);
        \$this->method = BuilderHelpers::normalizeIdentifier(\$method);
    }

    /**
     * Sets alias of method.
     *
     * @param Node\\Identifier|string \$alias Alias for adaptated method
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function as(\$alias) {
        if (\$this->type === self::TYPE_UNDEFINED) {
            \$this->type = self::TYPE_ALIAS;
        }

        if (\$this->type !== self::TYPE_ALIAS) {
            throw new \\LogicException('Cannot set alias for not alias adaptation buider');
        }

        \$this->alias = \$alias;
        return \$this;
    }

    /**
     * Sets adaptated method public.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePublic() {
        \$this->setModifier(Stmt\\Class_::MODIFIER_PUBLIC);
        return \$this;
    }

    /**
     * Sets adaptated method protected.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeProtected() {
        \$this->setModifier(Stmt\\Class_::MODIFIER_PROTECTED);
        return \$this;
    }

    /**
     * Sets adaptated method private.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePrivate() {
        \$this->setModifier(Stmt\\Class_::MODIFIER_PRIVATE);
        return \$this;
    }

    /**
     * Adds overwritten traits.
     *
     * @param Node\\Name|string ...\$traits Traits for overwrite
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function insteadof(...\$traits) {
        if (\$this->type === self::TYPE_UNDEFINED) {
            if (is_null(\$this->trait)) {
                throw new \\LogicException('Precedence adaptation must have trait');
            }

            \$this->type = self::TYPE_PRECEDENCE;
        }

        if (\$this->type !== self::TYPE_PRECEDENCE) {
            throw new \\LogicException('Cannot add overwritten traits for not precedence adaptation buider');
        }

        foreach (\$traits as \$trait) {
            \$this->insteadof[] = BuilderHelpers::normalizeName(\$trait);
        }

        return \$this;
    }

    protected function setModifier(int \$modifier) {
        if (\$this->type === self::TYPE_UNDEFINED) {
            \$this->type = self::TYPE_ALIAS;
        }

        if (\$this->type !== self::TYPE_ALIAS) {
            throw new \\LogicException('Cannot set access modifier for not alias adaptation buider');
        }

        if (is_null(\$this->modifier)) {
            \$this->modifier = \$modifier;
        } else {
            throw new \\LogicException('Multiple access type modifiers are not allowed');
        }
    }

    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : Node {
        switch (\$this->type) {
            case self::TYPE_ALIAS:
                return new Stmt\\TraitUseAdaptation\\Alias(\$this->trait, \$this->method, \$this->modifier, \$this->alias);
            case self::TYPE_PRECEDENCE:
                return new Stmt\\TraitUseAdaptation\\Precedence(\$this->trait, \$this->method, \$this->insteadof);
            default:
                throw new \\LogicException('Type of adaptation is not defined');
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUseAdaptation.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser\\Builder;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;
use PhpParser\\Node\\Stmt;

class TraitUseAdaptation implements Builder
{
    const TYPE_UNDEFINED  = 0;
    const TYPE_ALIAS      = 1;
    const TYPE_PRECEDENCE = 2;

    /** @var int Type of building adaptation */
    protected \$type;

    protected \$trait;
    protected \$method;

    protected \$modifier = null;
    protected \$alias = null;

    protected \$insteadof = [];

    /**
     * Creates a trait use adaptation builder.
     *
     * @param Node\\Name|string|null  \$trait  Name of adaptated trait
     * @param Node\\Identifier|string \$method Name of adaptated method
     */
    public function __construct(\$trait, \$method) {
        \$this->type = self::TYPE_UNDEFINED;

        \$this->trait = is_null(\$trait)? null: BuilderHelpers::normalizeName(\$trait);
        \$this->method = BuilderHelpers::normalizeIdentifier(\$method);
    }

    /**
     * Sets alias of method.
     *
     * @param Node\\Identifier|string \$alias Alias for adaptated method
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function as(\$alias) {
        if (\$this->type === self::TYPE_UNDEFINED) {
            \$this->type = self::TYPE_ALIAS;
        }

        if (\$this->type !== self::TYPE_ALIAS) {
            throw new \\LogicException('Cannot set alias for not alias adaptation buider');
        }

        \$this->alias = \$alias;
        return \$this;
    }

    /**
     * Sets adaptated method public.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePublic() {
        \$this->setModifier(Stmt\\Class_::MODIFIER_PUBLIC);
        return \$this;
    }

    /**
     * Sets adaptated method protected.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeProtected() {
        \$this->setModifier(Stmt\\Class_::MODIFIER_PROTECTED);
        return \$this;
    }

    /**
     * Sets adaptated method private.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makePrivate() {
        \$this->setModifier(Stmt\\Class_::MODIFIER_PRIVATE);
        return \$this;
    }

    /**
     * Adds overwritten traits.
     *
     * @param Node\\Name|string ...\$traits Traits for overwrite
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function insteadof(...\$traits) {
        if (\$this->type === self::TYPE_UNDEFINED) {
            if (is_null(\$this->trait)) {
                throw new \\LogicException('Precedence adaptation must have trait');
            }

            \$this->type = self::TYPE_PRECEDENCE;
        }

        if (\$this->type !== self::TYPE_PRECEDENCE) {
            throw new \\LogicException('Cannot add overwritten traits for not precedence adaptation buider');
        }

        foreach (\$traits as \$trait) {
            \$this->insteadof[] = BuilderHelpers::normalizeName(\$trait);
        }

        return \$this;
    }

    protected function setModifier(int \$modifier) {
        if (\$this->type === self::TYPE_UNDEFINED) {
            \$this->type = self::TYPE_ALIAS;
        }

        if (\$this->type !== self::TYPE_ALIAS) {
            throw new \\LogicException('Cannot set access modifier for not alias adaptation buider');
        }

        if (is_null(\$this->modifier)) {
            \$this->modifier = \$modifier;
        } else {
            throw new \\LogicException('Multiple access type modifiers are not allowed');
        }
    }

    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : Node {
        switch (\$this->type) {
            case self::TYPE_ALIAS:
                return new Stmt\\TraitUseAdaptation\\Alias(\$this->trait, \$this->method, \$this->modifier, \$this->alias);
            case self::TYPE_PRECEDENCE:
                return new Stmt\\TraitUseAdaptation\\Precedence(\$this->trait, \$this->method, \$this->insteadof);
            default:
                throw new \\LogicException('Type of adaptation is not defined');
        }
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/TraitUseAdaptation.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Builder\\TraitUseAdaptation.php");
    }
}
