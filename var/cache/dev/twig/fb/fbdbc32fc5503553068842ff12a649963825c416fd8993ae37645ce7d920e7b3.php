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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Cast/Double.php */
class __TwigTemplate_f2041e449234b7e3fafcb9bcc0de608a9a0c3f3ff29365fc06f638c010ad8fa0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Cast/Double.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr\\Cast;

use PhpParser\\Node\\Expr\\Cast;

class Double extends Cast
{
    // For use in \"kind\" attribute
    const KIND_DOUBLE = 1; // \"double\" syntax
    const KIND_FLOAT = 2;  // \"float\" syntax
    const KIND_REAL = 3; // \"real\" syntax

    public function getType() : string {
        return 'Expr_Cast_Double';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Cast/Double.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr\\Cast;

use PhpParser\\Node\\Expr\\Cast;

class Double extends Cast
{
    // For use in \"kind\" attribute
    const KIND_DOUBLE = 1; // \"double\" syntax
    const KIND_FLOAT = 2;  // \"float\" syntax
    const KIND_REAL = 3; // \"real\" syntax

    public function getType() : string {
        return 'Expr_Cast_Double';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Cast/Double.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\Cast\\Double.php");
    }
}
