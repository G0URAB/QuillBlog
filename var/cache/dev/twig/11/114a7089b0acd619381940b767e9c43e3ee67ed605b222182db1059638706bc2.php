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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/UseUse.php */
class __TwigTemplate_4c4e7065b12758033afba81d384d3d9c2aec54f660848bac2b5fba0bd279933c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/UseUse.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;
use PhpParser\\Node\\Identifier;

class UseUse extends Node\\Stmt
{
    /** @var int One of the Stmt\\Use_::TYPE_* constants. Will only differ from TYPE_UNKNOWN for mixed group uses */
    public \$type;
    /** @var Node\\Name Namespace, class, function or constant to alias */
    public \$name;
    /** @var Identifier|null Alias */
    public \$alias;

    /**
     * Constructs an alias (use) node.
     *
     * @param Node\\Name              \$name       Namespace/Class to alias
     * @param null|string|Identifier \$alias      Alias
     * @param int                    \$type       Type of the use element (for mixed group use only)
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(Node\\Name \$name, \$alias = null, int \$type = Use_::TYPE_UNKNOWN, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->type = \$type;
        \$this->name = \$name;
        \$this->alias = \\is_string(\$alias) ? new Identifier(\$alias) : \$alias;
    }

    public function getSubNodeNames() : array {
        return ['type', 'name', 'alias'];
    }

    /**
     * Get alias. If not explicitly given this is the last component of the used name.
     *
     * @return Identifier
     */
    public function getAlias() : Identifier {
        if (null !== \$this->alias) {
            return \$this->alias;
        }

        return new Identifier(\$this->name->getLast());
    }
    
    public function getType() : string {
        return 'Stmt_UseUse';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/UseUse.php";
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

class UseUse extends Node\\Stmt
{
    /** @var int One of the Stmt\\Use_::TYPE_* constants. Will only differ from TYPE_UNKNOWN for mixed group uses */
    public \$type;
    /** @var Node\\Name Namespace, class, function or constant to alias */
    public \$name;
    /** @var Identifier|null Alias */
    public \$alias;

    /**
     * Constructs an alias (use) node.
     *
     * @param Node\\Name              \$name       Namespace/Class to alias
     * @param null|string|Identifier \$alias      Alias
     * @param int                    \$type       Type of the use element (for mixed group use only)
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(Node\\Name \$name, \$alias = null, int \$type = Use_::TYPE_UNKNOWN, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->type = \$type;
        \$this->name = \$name;
        \$this->alias = \\is_string(\$alias) ? new Identifier(\$alias) : \$alias;
    }

    public function getSubNodeNames() : array {
        return ['type', 'name', 'alias'];
    }

    /**
     * Get alias. If not explicitly given this is the last component of the used name.
     *
     * @return Identifier
     */
    public function getAlias() : Identifier {
        if (null !== \$this->alias) {
            return \$this->alias;
        }

        return new Identifier(\$this->name->getLast());
    }
    
    public function getType() : string {
        return 'Stmt_UseUse';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/UseUse.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\UseUse.php");
    }
}
