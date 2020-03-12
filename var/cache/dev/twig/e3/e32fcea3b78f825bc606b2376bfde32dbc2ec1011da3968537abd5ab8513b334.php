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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassLike.php */
class __TwigTemplate_d594e01bd6a3123482797494b6de7b95c946f81081483e2823e0ae8d137bf87d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassLike.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

/**
 * @property Node\\Name \$namespacedName Namespaced name (if using NameResolver)
 */
abstract class ClassLike extends Node\\Stmt
{
    /** @var Node\\Identifier|null Name */
    public \$name;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * @return TraitUse[]
     */
    public function getTraitUses() : array {
        \$traitUses = [];
        foreach (\$this->stmts as \$stmt) {
            if (\$stmt instanceof TraitUse) {
                \$traitUses[] = \$stmt;
            }
        }
        return \$traitUses;
    }

    /**
     * @return ClassConst[]
     */
    public function getConstants() : array {
        \$constants = [];
        foreach (\$this->stmts as \$stmt) {
            if (\$stmt instanceof ClassConst) {
                \$constants[] = \$stmt;
            }
        }
        return \$constants;
    }

    /**
     * @return Property[]
     */
    public function getProperties() : array {
        \$properties = [];
        foreach (\$this->stmts as \$stmt) {
            if (\$stmt instanceof Property) {
                \$properties[] = \$stmt;
            }
        }
        return \$properties;
    }

    /**
     * Gets all methods defined directly in this class/interface/trait
     *
     * @return ClassMethod[]
     */
    public function getMethods() : array {
        \$methods = [];
        foreach (\$this->stmts as \$stmt) {
            if (\$stmt instanceof ClassMethod) {
                \$methods[] = \$stmt;
            }
        }
        return \$methods;
    }

    /**
     * Gets method with the given name defined directly in this class/interface/trait.
     *
     * @param string \$name Name of the method (compared case-insensitively)
     *
     * @return ClassMethod|null Method node or null if the method does not exist
     */
    public function getMethod(string \$name) {
        \$lowerName = strtolower(\$name);
        foreach (\$this->stmts as \$stmt) {
            if (\$stmt instanceof ClassMethod && \$lowerName === \$stmt->name->toLowerString()) {
                return \$stmt;
            }
        }
        return null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassLike.php";
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

/**
 * @property Node\\Name \$namespacedName Namespaced name (if using NameResolver)
 */
abstract class ClassLike extends Node\\Stmt
{
    /** @var Node\\Identifier|null Name */
    public \$name;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * @return TraitUse[]
     */
    public function getTraitUses() : array {
        \$traitUses = [];
        foreach (\$this->stmts as \$stmt) {
            if (\$stmt instanceof TraitUse) {
                \$traitUses[] = \$stmt;
            }
        }
        return \$traitUses;
    }

    /**
     * @return ClassConst[]
     */
    public function getConstants() : array {
        \$constants = [];
        foreach (\$this->stmts as \$stmt) {
            if (\$stmt instanceof ClassConst) {
                \$constants[] = \$stmt;
            }
        }
        return \$constants;
    }

    /**
     * @return Property[]
     */
    public function getProperties() : array {
        \$properties = [];
        foreach (\$this->stmts as \$stmt) {
            if (\$stmt instanceof Property) {
                \$properties[] = \$stmt;
            }
        }
        return \$properties;
    }

    /**
     * Gets all methods defined directly in this class/interface/trait
     *
     * @return ClassMethod[]
     */
    public function getMethods() : array {
        \$methods = [];
        foreach (\$this->stmts as \$stmt) {
            if (\$stmt instanceof ClassMethod) {
                \$methods[] = \$stmt;
            }
        }
        return \$methods;
    }

    /**
     * Gets method with the given name defined directly in this class/interface/trait.
     *
     * @param string \$name Name of the method (compared case-insensitively)
     *
     * @return ClassMethod|null Method node or null if the method does not exist
     */
    public function getMethod(string \$name) {
        \$lowerName = strtolower(\$name);
        foreach (\$this->stmts as \$stmt) {
            if (\$stmt instanceof ClassMethod && \$lowerName === \$stmt->name->toLowerString()) {
                return \$stmt;
            }
        }
        return null;
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/ClassLike.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\ClassLike.php");
    }
}
