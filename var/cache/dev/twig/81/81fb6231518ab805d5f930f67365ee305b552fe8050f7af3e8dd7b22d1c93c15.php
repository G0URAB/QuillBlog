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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUseAdaptation/Alias.php */
class __TwigTemplate_56eb4afbff67e5c061a6281ffec47f09bba18efcb42667391b8eedfb4ac3f603 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUseAdaptation/Alias.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt\\TraitUseAdaptation;

use PhpParser\\Node;

class Alias extends Node\\Stmt\\TraitUseAdaptation
{
    /** @var null|int New modifier */
    public \$newModifier;
    /** @var null|Node\\Identifier New name */
    public \$newName;

    /**
     * Constructs a trait use precedence adaptation node.
     *
     * @param null|Node\\Name              \$trait       Trait name
     * @param string|Node\\Identifier      \$method      Method name
     * @param null|int                    \$newModifier New modifier
     * @param null|string|Node\\Identifier \$newName     New name
     * @param array                       \$attributes  Additional attributes
     */
    public function __construct(\$trait, \$method, \$newModifier, \$newName, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->trait = \$trait;
        \$this->method = \\is_string(\$method) ? new Node\\Identifier(\$method) : \$method;
        \$this->newModifier = \$newModifier;
        \$this->newName = \\is_string(\$newName) ? new Node\\Identifier(\$newName) : \$newName;
    }

    public function getSubNodeNames() : array {
        return ['trait', 'method', 'newModifier', 'newName'];
    }
    
    public function getType() : string {
        return 'Stmt_TraitUseAdaptation_Alias';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUseAdaptation/Alias.php";
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

class Alias extends Node\\Stmt\\TraitUseAdaptation
{
    /** @var null|int New modifier */
    public \$newModifier;
    /** @var null|Node\\Identifier New name */
    public \$newName;

    /**
     * Constructs a trait use precedence adaptation node.
     *
     * @param null|Node\\Name              \$trait       Trait name
     * @param string|Node\\Identifier      \$method      Method name
     * @param null|int                    \$newModifier New modifier
     * @param null|string|Node\\Identifier \$newName     New name
     * @param array                       \$attributes  Additional attributes
     */
    public function __construct(\$trait, \$method, \$newModifier, \$newName, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->trait = \$trait;
        \$this->method = \\is_string(\$method) ? new Node\\Identifier(\$method) : \$method;
        \$this->newModifier = \$newModifier;
        \$this->newName = \\is_string(\$newName) ? new Node\\Identifier(\$newName) : \$newName;
    }

    public function getSubNodeNames() : array {
        return ['trait', 'method', 'newModifier', 'newName'];
    }
    
    public function getType() : string {
        return 'Stmt_TraitUseAdaptation_Alias';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUseAdaptation/Alias.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\TraitUseAdaptation\\Alias.php");
    }
}
