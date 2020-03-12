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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Interface_.php */
class __TwigTemplate_7b5e1bc6f47da287610345b029ea485cb6c0d71e518fb4fa37292140727bd7d0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Interface_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class Interface_ extends ClassLike
{
    /** @var Node\\Name[] Extended interfaces */
    public \$extends;

    /**
     * Constructs a class node.
     *
     * @param string|Node\\Identifier \$name Name
     * @param array  \$subNodes   Array of the following optional subnodes:
     *                           'extends' => array(): Name of extended interfaces
     *                           'stmts'   => array(): Statements
     * @param array  \$attributes Additional attributes
     */
    public function __construct(\$name, array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \\is_string(\$name) ? new Node\\Identifier(\$name) : \$name;
        \$this->extends = \$subNodes['extends'] ?? [];
        \$this->stmts = \$subNodes['stmts'] ?? [];
    }

    public function getSubNodeNames() : array {
        return ['name', 'extends', 'stmts'];
    }

    public function getType() : string {
        return 'Stmt_Interface';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Interface_.php";
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

class Interface_ extends ClassLike
{
    /** @var Node\\Name[] Extended interfaces */
    public \$extends;

    /**
     * Constructs a class node.
     *
     * @param string|Node\\Identifier \$name Name
     * @param array  \$subNodes   Array of the following optional subnodes:
     *                           'extends' => array(): Name of extended interfaces
     *                           'stmts'   => array(): Statements
     * @param array  \$attributes Additional attributes
     */
    public function __construct(\$name, array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \\is_string(\$name) ? new Node\\Identifier(\$name) : \$name;
        \$this->extends = \$subNodes['extends'] ?? [];
        \$this->stmts = \$subNodes['stmts'] ?? [];
    }

    public function getSubNodeNames() : array {
        return ['name', 'extends', 'stmts'];
    }

    public function getType() : string {
        return 'Stmt_Interface';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Interface_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\Interface_.php");
    }
}
