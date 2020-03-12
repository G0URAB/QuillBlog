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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassConst.php */
class __TwigTemplate_2c6f339f2620a20c2e1db0fe3ec1c33ec9f04cb674d51d082d36467c9b2317b7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassConst.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class ClassConst extends Node\\Stmt
{
    /** @var int Modifiers */
    public \$flags;
    /** @var Node\\Const_[] Constant declarations */
    public \$consts;

    /**
     * Constructs a class const list node.
     *
     * @param Node\\Const_[] \$consts     Constant declarations
     * @param int           \$flags      Modifiers
     * @param array         \$attributes Additional attributes
     */
    public function __construct(array \$consts, int \$flags = 0, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->flags = \$flags;
        \$this->consts = \$consts;
    }

    public function getSubNodeNames() : array {
        return ['flags', 'consts'];
    }

    /**
     * Whether constant is explicitly or implicitly public.
     *
     * @return bool
     */
    public function isPublic() : bool {
        return (\$this->flags & Class_::MODIFIER_PUBLIC) !== 0
            || (\$this->flags & Class_::VISIBILITY_MODIFIER_MASK) === 0;
    }

    /**
     * Whether constant is protected.
     *
     * @return bool
     */
    public function isProtected() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PROTECTED);
    }

    /**
     * Whether constant is private.
     *
     * @return bool
     */
    public function isPrivate() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PRIVATE);
    }
    
    public function getType() : string {
        return 'Stmt_ClassConst';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassConst.php";
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

class ClassConst extends Node\\Stmt
{
    /** @var int Modifiers */
    public \$flags;
    /** @var Node\\Const_[] Constant declarations */
    public \$consts;

    /**
     * Constructs a class const list node.
     *
     * @param Node\\Const_[] \$consts     Constant declarations
     * @param int           \$flags      Modifiers
     * @param array         \$attributes Additional attributes
     */
    public function __construct(array \$consts, int \$flags = 0, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->flags = \$flags;
        \$this->consts = \$consts;
    }

    public function getSubNodeNames() : array {
        return ['flags', 'consts'];
    }

    /**
     * Whether constant is explicitly or implicitly public.
     *
     * @return bool
     */
    public function isPublic() : bool {
        return (\$this->flags & Class_::MODIFIER_PUBLIC) !== 0
            || (\$this->flags & Class_::VISIBILITY_MODIFIER_MASK) === 0;
    }

    /**
     * Whether constant is protected.
     *
     * @return bool
     */
    public function isProtected() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PROTECTED);
    }

    /**
     * Whether constant is private.
     *
     * @return bool
     */
    public function isPrivate() : bool {
        return (bool) (\$this->flags & Class_::MODIFIER_PRIVATE);
    }
    
    public function getType() : string {
        return 'Stmt_ClassConst';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassConst.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\ClassConst.php");
    }
}
