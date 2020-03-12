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

/* @app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/InstantiatorInterface.php */
class __TwigTemplate_184e364f75bee24d5a6673fd0d3d34f582bb7b58c0ce474210d393b6909d12e7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/InstantiatorInterface.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Instantiator;

use Doctrine\\Instantiator\\Exception\\ExceptionInterface;

/**
 * Instantiator provides utility methods to build objects without invoking their constructors
 */
interface InstantiatorInterface
{
    /**
     * @param string \$className
     *
     * @return object
     *
     * @throws ExceptionInterface
     */
    public function instantiate(\$className);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/InstantiatorInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Instantiator;

use Doctrine\\Instantiator\\Exception\\ExceptionInterface;

/**
 * Instantiator provides utility methods to build objects without invoking their constructors
 */
interface InstantiatorInterface
{
    /**
     * @param string \$className
     *
     * @return object
     *
     * @throws ExceptionInterface
     */
    public function instantiate(\$className);
}
", "@app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/InstantiatorInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\instantiator\\src\\Doctrine\\Instantiator\\InstantiatorInterface.php");
    }
}
