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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/BinaryOp/Mul.php */
class __TwigTemplate_725caa4cbc211c50adcabe6f5d489f203b3827f5122fd0606de1b1c7555a5076 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/BinaryOp/Mul.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr\\BinaryOp;

use PhpParser\\Node\\Expr\\BinaryOp;

class Mul extends BinaryOp
{
    public function getOperatorSigil() : string {
        return '*';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_Mul';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/BinaryOp/Mul.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr\\BinaryOp;

use PhpParser\\Node\\Expr\\BinaryOp;

class Mul extends BinaryOp
{
    public function getOperatorSigil() : string {
        return '*';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_Mul';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/BinaryOp/Mul.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\BinaryOp\\Mul.php");
    }
}
