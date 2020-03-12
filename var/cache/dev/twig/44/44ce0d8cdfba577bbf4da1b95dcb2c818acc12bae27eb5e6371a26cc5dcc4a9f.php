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

/* @app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/TypedNoDefaultReflectionProperty.php */
class __TwigTemplate_3008ea9b62c8afe5c4505c30ab9542abd3607f572eb41f02aae367fa198a873e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/TypedNoDefaultReflectionProperty.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Reflection;

use ReflectionProperty;

/**
 * PHP Typed No Default Reflection Property - special override for typed properties without a default value.
 */
class TypedNoDefaultReflectionProperty extends ReflectionProperty
{
    /**
     * {@inheritDoc}
     *
     * Checks that a typed property is initialized before accessing its value.
     * This is neccessary to avoid PHP error \"Error: Typed property must not be accessed before initialization\".
     * Should be used only for reflecting typed properties without a default value.
     */
    public function getValue(\$object = null)
    {
        return \$object !== null && \$this->isInitialized(\$object) ? parent::getValue(\$object) : null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/TypedNoDefaultReflectionProperty.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Reflection;

use ReflectionProperty;

/**
 * PHP Typed No Default Reflection Property - special override for typed properties without a default value.
 */
class TypedNoDefaultReflectionProperty extends ReflectionProperty
{
    /**
     * {@inheritDoc}
     *
     * Checks that a typed property is initialized before accessing its value.
     * This is neccessary to avoid PHP error \"Error: Typed property must not be accessed before initialization\".
     * Should be used only for reflecting typed properties without a default value.
     */
    public function getValue(\$object = null)
    {
        return \$object !== null && \$this->isInitialized(\$object) ? parent::getValue(\$object) : null;
    }
}
", "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/TypedNoDefaultReflectionProperty.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\reflection\\lib\\Doctrine\\Common\\Reflection\\TypedNoDefaultReflectionProperty.php");
    }
}
