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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUseAdaptation.php */
class __TwigTemplate_b62e8aab246a7d506a2549adad2cac27f2db3bbf41561e0065dcebb09299f307 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUseAdaptation.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

abstract class TraitUseAdaptation extends Node\\Stmt
{
    /** @var Node\\Name|null Trait name */
    public \$trait;
    /** @var Node\\Identifier Method name */
    public \$method;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUseAdaptation.php";
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

abstract class TraitUseAdaptation extends Node\\Stmt
{
    /** @var Node\\Name|null Trait name */
    public \$trait;
    /** @var Node\\Identifier Method name */
    public \$method;
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TraitUseAdaptation.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\TraitUseAdaptation.php");
    }
}
