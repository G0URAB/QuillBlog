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

/* @app/var/cache/dev/pools/dS5rNYipbY/T/F/1uCLH0esNzbIY4MDnjFQ */
class __TwigTemplate_671b2ca85721ad6da10bc55e4cc993735b869227327c776ee40552d305ed8666 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/var/cache/dev/pools/dS5rNYipbY/T/F/1uCLH0esNzbIY4MDnjFQ"));

        // line 1
        echo "<?php //%255BSymfony%255CComponent%255CHttpKernel%255CKernel%2523setAnnotatedClassCache%255D%255B1%255D

return [PHP_INT_MAX, []];
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/var/cache/dev/pools/dS5rNYipbY/T/F/1uCLH0esNzbIY4MDnjFQ";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php //%255BSymfony%255CComponent%255CHttpKernel%255CKernel%2523setAnnotatedClassCache%255D%255B1%255D

return [PHP_INT_MAX, []];
", "@app/var/cache/dev/pools/dS5rNYipbY/T/F/1uCLH0esNzbIY4MDnjFQ", "C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev\\pools\\dS5rNYipbY\\T\\F\\1uCLH0esNzbIY4MDnjFQ");
    }
}