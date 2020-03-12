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

/* @app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ReflectionProviderInterface.php */
class __TwigTemplate_5608484d674a08809fd0deff63936bc37d17e63087507e23c903164a9a89fcf2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ReflectionProviderInterface.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Reflection;

use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;

interface ReflectionProviderInterface
{
    /**
     * Gets the ReflectionClass equivalent for this class.
     *
     * @return ReflectionClass
     */
    public function getReflectionClass();

    /**
     * Gets the ReflectionMethod equivalent for this class.
     *
     * @param string \$name
     *
     * @return ReflectionMethod
     */
    public function getReflectionMethod(\$name);

    /**
     * Gets the ReflectionProperty equivalent for this class.
     *
     * @param string \$name
     *
     * @return ReflectionProperty
     */
    public function getReflectionProperty(\$name);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ReflectionProviderInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Reflection;

use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;

interface ReflectionProviderInterface
{
    /**
     * Gets the ReflectionClass equivalent for this class.
     *
     * @return ReflectionClass
     */
    public function getReflectionClass();

    /**
     * Gets the ReflectionMethod equivalent for this class.
     *
     * @param string \$name
     *
     * @return ReflectionMethod
     */
    public function getReflectionMethod(\$name);

    /**
     * Gets the ReflectionProperty equivalent for this class.
     *
     * @param string \$name
     *
     * @return ReflectionProperty
     */
    public function getReflectionProperty(\$name);
}
", "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ReflectionProviderInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\reflection\\lib\\Doctrine\\Common\\Reflection\\ReflectionProviderInterface.php");
    }
}
