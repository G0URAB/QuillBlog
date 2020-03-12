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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Use_.php */
class __TwigTemplate_1202575c116ba12d5d8b1806ecee01f85cbf98098f2cf2ee9a224e1da18e57a6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Use_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node\\Stmt;

class Use_ extends Stmt
{
    /**
     * Unknown type. Both Stmt\\Use_ / Stmt\\GroupUse and Stmt\\UseUse have a \$type property, one of them will always be
     * TYPE_UNKNOWN while the other has one of the three other possible types. For normal use statements the type on the
     * Stmt\\UseUse is unknown. It's only the other way around for mixed group use declarations.
     */
    const TYPE_UNKNOWN = 0;
    /** Class or namespace import */
    const TYPE_NORMAL = 1;
    /** Function import */
    const TYPE_FUNCTION = 2;
    /** Constant import */
    const TYPE_CONSTANT = 3;

    /** @var int Type of alias */
    public \$type;
    /** @var UseUse[] Aliases */
    public \$uses;

    /**
     * Constructs an alias (use) list node.
     *
     * @param UseUse[] \$uses       Aliases
     * @param int      \$type       Type of alias
     * @param array    \$attributes Additional attributes
     */
    public function __construct(array \$uses, int \$type = self::TYPE_NORMAL, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->type = \$type;
        \$this->uses = \$uses;
    }

    public function getSubNodeNames() : array {
        return ['type', 'uses'];
    }
    
    public function getType() : string {
        return 'Stmt_Use';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Use_.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node\\Stmt;

class Use_ extends Stmt
{
    /**
     * Unknown type. Both Stmt\\Use_ / Stmt\\GroupUse and Stmt\\UseUse have a \$type property, one of them will always be
     * TYPE_UNKNOWN while the other has one of the three other possible types. For normal use statements the type on the
     * Stmt\\UseUse is unknown. It's only the other way around for mixed group use declarations.
     */
    const TYPE_UNKNOWN = 0;
    /** Class or namespace import */
    const TYPE_NORMAL = 1;
    /** Function import */
    const TYPE_FUNCTION = 2;
    /** Constant import */
    const TYPE_CONSTANT = 3;

    /** @var int Type of alias */
    public \$type;
    /** @var UseUse[] Aliases */
    public \$uses;

    /**
     * Constructs an alias (use) list node.
     *
     * @param UseUse[] \$uses       Aliases
     * @param int      \$type       Type of alias
     * @param array    \$attributes Additional attributes
     */
    public function __construct(array \$uses, int \$type = self::TYPE_NORMAL, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->type = \$type;
        \$this->uses = \$uses;
    }

    public function getSubNodeNames() : array {
        return ['type', 'uses'];
    }
    
    public function getType() : string {
        return 'Stmt_Use';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Use_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\Use_.php");
    }
}
