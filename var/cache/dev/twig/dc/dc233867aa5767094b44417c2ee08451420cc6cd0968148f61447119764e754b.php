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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/StaticProxyConstructor.php */
class __TwigTemplate_303a756d841d6eaa6e312f3efe626ebb8a7215f2747b80dbd229d49a27148c25 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/StaticProxyConstructor.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ProxyManager\\ProxyGenerator\\Util\\UnsetPropertiesGenerator;
use ReflectionClass;
use Zend\\Code\\Generator\\ParameterGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * The `staticProxyConstructor` implementation for access interceptor value holders
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class StaticProxyConstructor extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass   \$originalClass
     * @param PropertyGenerator \$valueHolder
     * @param PropertyGenerator \$prefixInterceptors
     * @param PropertyGenerator \$suffixInterceptors
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$valueHolder,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors
    ) {
        parent::__construct('staticProxyConstructor', [], static::FLAG_PUBLIC | static::FLAG_STATIC);

        \$prefix = new ParameterGenerator('prefixInterceptors');
        \$suffix = new ParameterGenerator('suffixInterceptors');

        \$prefix->setDefaultValue([]);
        \$suffix->setDefaultValue([]);
        \$prefix->setType('array');
        \$suffix->setType('array');

        \$this->setParameter(new ParameterGenerator('wrappedObject'));
        \$this->setParameter(\$prefix);
        \$this->setParameter(\$suffix);
        \$this->setReturnType(\$originalClass->getName());

        \$this->setDocBlock(
            \"Constructor to setup interceptors\\n\\n\"
            . \"@param \\\\\" . \$originalClass->getName() . \" \\\$wrappedObject\\n\"
            . \"@param \\\\Closure[] \\\$prefixInterceptors method interceptors to be used before method logic\\n\"
            . \"@param \\\\Closure[] \\\$suffixInterceptors method interceptors to be used before method logic\\n\\n\"
            . '@return self'
        );

        \$this->setBody(
            'static \$reflection;' . \"\\n\\n\"
            . '\$reflection = \$reflection ?? \$reflection = new \\ReflectionClass(__CLASS__);' . \"\\n\"
            . '\$instance = \$reflection->newInstanceWithoutConstructor();' . \"\\n\\n\"
            . UnsetPropertiesGenerator::generateSnippet(Properties::fromReflectionClass(\$originalClass), 'instance')
            . '\$instance->' . \$valueHolder->getName() . \" = \\\$wrappedObject;\\n\"
            . '\$instance->' . \$prefixInterceptors->getName() . \" = \\\$prefixInterceptors;\\n\"
            . '\$instance->' . \$suffixInterceptors->getName() . \" = \\\$suffixInterceptors;\\n\\n\"
            . 'return \$instance;'
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/StaticProxyConstructor.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ProxyManager\\ProxyGenerator\\Util\\UnsetPropertiesGenerator;
use ReflectionClass;
use Zend\\Code\\Generator\\ParameterGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * The `staticProxyConstructor` implementation for access interceptor value holders
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class StaticProxyConstructor extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass   \$originalClass
     * @param PropertyGenerator \$valueHolder
     * @param PropertyGenerator \$prefixInterceptors
     * @param PropertyGenerator \$suffixInterceptors
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$valueHolder,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors
    ) {
        parent::__construct('staticProxyConstructor', [], static::FLAG_PUBLIC | static::FLAG_STATIC);

        \$prefix = new ParameterGenerator('prefixInterceptors');
        \$suffix = new ParameterGenerator('suffixInterceptors');

        \$prefix->setDefaultValue([]);
        \$suffix->setDefaultValue([]);
        \$prefix->setType('array');
        \$suffix->setType('array');

        \$this->setParameter(new ParameterGenerator('wrappedObject'));
        \$this->setParameter(\$prefix);
        \$this->setParameter(\$suffix);
        \$this->setReturnType(\$originalClass->getName());

        \$this->setDocBlock(
            \"Constructor to setup interceptors\\n\\n\"
            . \"@param \\\\\" . \$originalClass->getName() . \" \\\$wrappedObject\\n\"
            . \"@param \\\\Closure[] \\\$prefixInterceptors method interceptors to be used before method logic\\n\"
            . \"@param \\\\Closure[] \\\$suffixInterceptors method interceptors to be used before method logic\\n\\n\"
            . '@return self'
        );

        \$this->setBody(
            'static \$reflection;' . \"\\n\\n\"
            . '\$reflection = \$reflection ?? \$reflection = new \\ReflectionClass(__CLASS__);' . \"\\n\"
            . '\$instance = \$reflection->newInstanceWithoutConstructor();' . \"\\n\\n\"
            . UnsetPropertiesGenerator::generateSnippet(Properties::fromReflectionClass(\$originalClass), 'instance')
            . '\$instance->' . \$valueHolder->getName() . \" = \\\$wrappedObject;\\n\"
            . '\$instance->' . \$prefixInterceptors->getName() . \" = \\\$prefixInterceptors;\\n\"
            . '\$instance->' . \$suffixInterceptors->getName() . \" = \\\$suffixInterceptors;\\n\\n\"
            . 'return \$instance;'
        );
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/StaticProxyConstructor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\StaticProxyConstructor.php");
    }
}
