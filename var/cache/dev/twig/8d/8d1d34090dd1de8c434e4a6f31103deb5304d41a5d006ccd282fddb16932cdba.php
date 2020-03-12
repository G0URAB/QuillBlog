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

/* @app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ClassFinderInterface.php */
class __TwigTemplate_e2e075b32f3d7081f040709bed5d0396de3701fd0685fea96c643672d84d1b29 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ClassFinderInterface.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Reflection;

/**
 * Finds a class in a PSR-0 structure.
 */
interface ClassFinderInterface
{
    /**
     * Finds a class.
     *
     * @param string \$class The name of the class.
     *
     * @return string|null The name of the class or NULL if not found.
     */
    public function findFile(\$class);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ClassFinderInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Reflection;

/**
 * Finds a class in a PSR-0 structure.
 */
interface ClassFinderInterface
{
    /**
     * Finds a class.
     *
     * @param string \$class The name of the class.
     *
     * @return string|null The name of the class or NULL if not found.
     */
    public function findFile(\$class);
}
", "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ClassFinderInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\reflection\\lib\\Doctrine\\Common\\Reflection\\ClassFinderInterface.php");
    }
}
