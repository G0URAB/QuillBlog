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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/PropertyFetch.php */
class __TwigTemplate_9a0fbec00d18d92c70148bf228f50b6dae4fdb9a653e8f3233adde3767b1b61d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/PropertyFetch.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Identifier;

class PropertyFetch extends Expr
{
    /** @var Expr Variable holding object */
    public \$var;
    /** @var Identifier|Expr Property name */
    public \$name;

    /**
     * Constructs a function call node.
     *
     * @param Expr                   \$var        Variable holding object
     * @param string|Identifier|Expr \$name       Property name
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(Expr \$var, \$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
    }

    public function getSubNodeNames() : array {
        return ['var', 'name'];
    }
    
    public function getType() : string {
        return 'Expr_PropertyFetch';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/PropertyFetch.php";
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

class PropertyFetch extends Expr
{
    /** @var Expr Variable holding object */
    public \$var;
    /** @var Identifier|Expr Property name */
    public \$name;

    /**
     * Constructs a function call node.
     *
     * @param Expr                   \$var        Variable holding object
     * @param string|Identifier|Expr \$name       Property name
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(Expr \$var, \$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
    }

    public function getSubNodeNames() : array {
        return ['var', 'name'];
    }
    
    public function getType() : string {
        return 'Expr_PropertyFetch';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/PropertyFetch.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\PropertyFetch.php");
    }
}
