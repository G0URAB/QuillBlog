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

/* @app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/RuntimePublicReflectionProperty.php */
class __TwigTemplate_3bffa28df1e606013387acb0fdfc9646ebb4add663a78f2740f638493e1f4307 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/RuntimePublicReflectionProperty.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Reflection;

use Doctrine\\Common\\Proxy\\Proxy;
use ReflectionProperty;

/**
 * PHP Runtime Reflection Public Property - special overrides for public properties.
 */
class RuntimePublicReflectionProperty extends ReflectionProperty
{
    /**
     * {@inheritDoc}
     *
     * Checks is the value actually exist before fetching it.
     * This is to avoid calling `__get` on the provided \$object if it
     * is a {@see \\Doctrine\\Common\\Proxy\\Proxy}.
     */
    public function getValue(\$object = null)
    {
        \$name = \$this->getName();

        if (\$object instanceof Proxy && ! \$object->__isInitialized()) {
            \$originalInitializer = \$object->__getInitializer();
            \$object->__setInitializer(null);
            \$val = \$object->\$name ?? null;
            \$object->__setInitializer(\$originalInitializer);

            return \$val;
        }

        return isset(\$object->\$name) ? parent::getValue(\$object) : null;
    }

    /**
     * {@inheritDoc}
     *
     * Avoids triggering lazy loading via `__set` if the provided object
     * is a {@see \\Doctrine\\Common\\Proxy\\Proxy}.
     *
     * @link https://bugs.php.net/bug.php?id=63463
     */
    public function setValue(\$object, \$value = null)
    {
        if (! (\$object instanceof Proxy && ! \$object->__isInitialized())) {
            parent::setValue(\$object, \$value);

            return;
        }

        \$originalInitializer = \$object->__getInitializer();
        \$object->__setInitializer(null);
        parent::setValue(\$object, \$value);
        \$object->__setInitializer(\$originalInitializer);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/RuntimePublicReflectionProperty.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Reflection;

use Doctrine\\Common\\Proxy\\Proxy;
use ReflectionProperty;

/**
 * PHP Runtime Reflection Public Property - special overrides for public properties.
 */
class RuntimePublicReflectionProperty extends ReflectionProperty
{
    /**
     * {@inheritDoc}
     *
     * Checks is the value actually exist before fetching it.
     * This is to avoid calling `__get` on the provided \$object if it
     * is a {@see \\Doctrine\\Common\\Proxy\\Proxy}.
     */
    public function getValue(\$object = null)
    {
        \$name = \$this->getName();

        if (\$object instanceof Proxy && ! \$object->__isInitialized()) {
            \$originalInitializer = \$object->__getInitializer();
            \$object->__setInitializer(null);
            \$val = \$object->\$name ?? null;
            \$object->__setInitializer(\$originalInitializer);

            return \$val;
        }

        return isset(\$object->\$name) ? parent::getValue(\$object) : null;
    }

    /**
     * {@inheritDoc}
     *
     * Avoids triggering lazy loading via `__set` if the provided object
     * is a {@see \\Doctrine\\Common\\Proxy\\Proxy}.
     *
     * @link https://bugs.php.net/bug.php?id=63463
     */
    public function setValue(\$object, \$value = null)
    {
        if (! (\$object instanceof Proxy && ! \$object->__isInitialized())) {
            parent::setValue(\$object, \$value);

            return;
        }

        \$originalInitializer = \$object->__getInitializer();
        \$object->__setInitializer(null);
        parent::setValue(\$object, \$value);
        \$object->__setInitializer(\$originalInitializer);
    }
}
", "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/RuntimePublicReflectionProperty.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\reflection\\lib\\Doctrine\\Common\\Reflection\\RuntimePublicReflectionProperty.php");
    }
}
