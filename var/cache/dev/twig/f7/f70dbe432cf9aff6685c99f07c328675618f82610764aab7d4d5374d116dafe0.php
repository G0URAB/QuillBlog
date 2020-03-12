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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticPropertyFetch.php */
class __TwigTemplate_34a785433f00f3934b6679dbe962bf15f0340e68eb73d8cb8b7d082c55e514cc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticPropertyFetch.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\VarLikeIdentifier;

class StaticPropertyFetch extends Expr
{
    /** @var Name|Expr Class name */
    public \$class;
    /** @var VarLikeIdentifier|Expr Property name */
    public \$name;

    /**
     * Constructs a static property fetch node.
     *
     * @param Name|Expr                     \$class      Class name
     * @param string|VarLikeIdentifier|Expr \$name       Property name
     * @param array                         \$attributes Additional attributes
     */
    public function __construct(\$class, \$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->name = \\is_string(\$name) ? new VarLikeIdentifier(\$name) : \$name;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name'];
    }
    
    public function getType() : string {
        return 'Expr_StaticPropertyFetch';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticPropertyFetch.php";
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
use PhpParser\\Node\\Name;
use PhpParser\\Node\\VarLikeIdentifier;

class StaticPropertyFetch extends Expr
{
    /** @var Name|Expr Class name */
    public \$class;
    /** @var VarLikeIdentifier|Expr Property name */
    public \$name;

    /**
     * Constructs a static property fetch node.
     *
     * @param Name|Expr                     \$class      Class name
     * @param string|VarLikeIdentifier|Expr \$name       Property name
     * @param array                         \$attributes Additional attributes
     */
    public function __construct(\$class, \$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->name = \\is_string(\$name) ? new VarLikeIdentifier(\$name) : \$name;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name'];
    }
    
    public function getType() : string {
        return 'Expr_StaticPropertyFetch';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticPropertyFetch.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\StaticPropertyFetch.php");
    }
}
