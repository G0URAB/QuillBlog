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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Arg.php */
class __TwigTemplate_bec85a9d7f4983bba1c61a2a272b9ea3fec317ca040287b5a8e856c07a3bbf78 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Arg.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

class Arg extends NodeAbstract
{
    /** @var Expr Value to pass */
    public \$value;
    /** @var bool Whether to pass by ref */
    public \$byRef;
    /** @var bool Whether to unpack the argument */
    public \$unpack;

    /**
     * Constructs a function call argument node.
     *
     * @param Expr  \$value      Value to pass
     * @param bool  \$byRef      Whether to pass by ref
     * @param bool  \$unpack     Whether to unpack the argument
     * @param array \$attributes Additional attributes
     */
    public function __construct(Expr \$value, bool \$byRef = false, bool \$unpack = false, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->value = \$value;
        \$this->byRef = \$byRef;
        \$this->unpack = \$unpack;
    }

    public function getSubNodeNames() : array {
        return ['value', 'byRef', 'unpack'];
    }
    
    public function getType() : string {
        return 'Arg';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Arg.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

class Arg extends NodeAbstract
{
    /** @var Expr Value to pass */
    public \$value;
    /** @var bool Whether to pass by ref */
    public \$byRef;
    /** @var bool Whether to unpack the argument */
    public \$unpack;

    /**
     * Constructs a function call argument node.
     *
     * @param Expr  \$value      Value to pass
     * @param bool  \$byRef      Whether to pass by ref
     * @param bool  \$unpack     Whether to unpack the argument
     * @param array \$attributes Additional attributes
     */
    public function __construct(Expr \$value, bool \$byRef = false, bool \$unpack = false, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->value = \$value;
        \$this->byRef = \$byRef;
        \$this->unpack = \$unpack;
    }

    public function getSubNodeNames() : array {
        return ['value', 'byRef', 'unpack'];
    }
    
    public function getType() : string {
        return 'Arg';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Arg.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Arg.php");
    }
}
