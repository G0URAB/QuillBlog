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

/* @app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/ExceptionInterface.php */
class __TwigTemplate_19a4a711b802df74cfd6b57887178802ca1046d9c064e065e619d6ad6e832670 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/ExceptionInterface.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Instantiator\\Exception;

use Throwable;

/**
 * Base exception marker interface for the instantiator component
 */
interface ExceptionInterface extends Throwable
{
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/ExceptionInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Instantiator\\Exception;

use Throwable;

/**
 * Base exception marker interface for the instantiator component
 */
interface ExceptionInterface extends Throwable
{
}
", "@app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/ExceptionInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\instantiator\\src\\Doctrine\\Instantiator\\Exception\\ExceptionInterface.php");
    }
}
