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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUseAdaptation/Precedence.php */
class __TwigTemplate_a1d70aa6995902ffbf8d9e16b0e8978932b65cafe7415d9d7dc80fe53931e2ea extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUseAdaptation/Precedence.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt\\TraitUseAdaptation;

use PhpParser\\Node;

class Precedence extends Node\\Stmt\\TraitUseAdaptation
{
    /** @var Node\\Name[] Overwritten traits */
    public \$insteadof;

    /**
     * Constructs a trait use precedence adaptation node.
     *
     * @param Node\\Name              \$trait       Trait name
     * @param string|Node\\Identifier \$method      Method name
     * @param Node\\Name[]            \$insteadof   Overwritten traits
     * @param array                  \$attributes  Additional attributes
     */
    public function __construct(Node\\Name \$trait, \$method, array \$insteadof, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->trait = \$trait;
        \$this->method = \\is_string(\$method) ? new Node\\Identifier(\$method) : \$method;
        \$this->insteadof = \$insteadof;
    }

    public function getSubNodeNames() : array {
        return ['trait', 'method', 'insteadof'];
    }
    
    public function getType() : string {
        return 'Stmt_TraitUseAdaptation_Precedence';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUseAdaptation/Precedence.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt\\TraitUseAdaptation;

use PhpParser\\Node;

class Precedence extends Node\\Stmt\\TraitUseAdaptation
{
    /** @var Node\\Name[] Overwritten traits */
    public \$insteadof;

    /**
     * Constructs a trait use precedence adaptation node.
     *
     * @param Node\\Name              \$trait       Trait name
     * @param string|Node\\Identifier \$method      Method name
     * @param Node\\Name[]            \$insteadof   Overwritten traits
     * @param array                  \$attributes  Additional attributes
     */
    public function __construct(Node\\Name \$trait, \$method, array \$insteadof, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->trait = \$trait;
        \$this->method = \\is_string(\$method) ? new Node\\Identifier(\$method) : \$method;
        \$this->insteadof = \$insteadof;
    }

    public function getSubNodeNames() : array {
        return ['trait', 'method', 'insteadof'];
    }
    
    public function getType() : string {
        return 'Stmt_TraitUseAdaptation_Precedence';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUseAdaptation/Precedence.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\TraitUseAdaptation\\Precedence.php");
    }
}
