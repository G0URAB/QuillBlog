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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ClassConstFetch.php */
class __TwigTemplate_cb4c48514e33128694b883cc9924bd55337e792e5c6de24d2dd01e395be76899 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ClassConstFetch.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Identifier;
use PhpParser\\Node\\Name;

class ClassConstFetch extends Expr
{
    /** @var Name|Expr Class name */
    public \$class;
    /** @var Identifier|Error Constant name */
    public \$name;

    /**
     * Constructs a class const fetch node.
     *
     * @param Name|Expr               \$class      Class name
     * @param string|Identifier|Error \$name       Constant name
     * @param array                   \$attributes Additional attributes
     */
    public function __construct(\$class, \$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name'];
    }
    
    public function getType() : string {
        return 'Expr_ClassConstFetch';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ClassConstFetch.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Identifier;
use PhpParser\\Node\\Name;

class ClassConstFetch extends Expr
{
    /** @var Name|Expr Class name */
    public \$class;
    /** @var Identifier|Error Constant name */
    public \$name;

    /**
     * Constructs a class const fetch node.
     *
     * @param Name|Expr               \$class      Class name
     * @param string|Identifier|Error \$name       Constant name
     * @param array                   \$attributes Additional attributes
     */
    public function __construct(\$class, \$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name'];
    }
    
    public function getType() : string {
        return 'Expr_ClassConstFetch';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ClassConstFetch.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\ClassConstFetch.php");
    }
}
