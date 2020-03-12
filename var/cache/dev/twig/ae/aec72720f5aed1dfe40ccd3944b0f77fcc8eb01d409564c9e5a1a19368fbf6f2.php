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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUse.php */
class __TwigTemplate_66325c06879f8702decaed753344752d4b3f7ed21d6ccbfabb33db7523217bb9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUse.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class TraitUse extends Node\\Stmt
{
    /** @var Node\\Name[] Traits */
    public \$traits;
    /** @var TraitUseAdaptation[] Adaptations */
    public \$adaptations;

    /**
     * Constructs a trait use node.
     *
     * @param Node\\Name[]          \$traits      Traits
     * @param TraitUseAdaptation[] \$adaptations Adaptations
     * @param array                \$attributes  Additional attributes
     */
    public function __construct(array \$traits, array \$adaptations = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->traits = \$traits;
        \$this->adaptations = \$adaptations;
    }

    public function getSubNodeNames() : array {
        return ['traits', 'adaptations'];
    }
    
    public function getType() : string {
        return 'Stmt_TraitUse';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUse.php";
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

class TraitUse extends Node\\Stmt
{
    /** @var Node\\Name[] Traits */
    public \$traits;
    /** @var TraitUseAdaptation[] Adaptations */
    public \$adaptations;

    /**
     * Constructs a trait use node.
     *
     * @param Node\\Name[]          \$traits      Traits
     * @param TraitUseAdaptation[] \$adaptations Adaptations
     * @param array                \$attributes  Additional attributes
     */
    public function __construct(array \$traits, array \$adaptations = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->traits = \$traits;
        \$this->adaptations = \$adaptations;
    }

    public function getSubNodeNames() : array {
        return ['traits', 'adaptations'];
    }
    
    public function getType() : string {
        return 'Stmt_TraitUse';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUse.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\TraitUse.php");
    }
}
