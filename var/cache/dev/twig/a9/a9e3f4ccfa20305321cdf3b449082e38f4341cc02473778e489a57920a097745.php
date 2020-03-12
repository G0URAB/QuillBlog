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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/StaticProxyConstructor.php */
class __TwigTemplate_708c3a57d502ea1a123e6b6bccf07201b92ec9b167cf3ec13b94fda39e236096 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/StaticProxyConstructor.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use ReflectionClass;

/**
 * The `staticProxyConstructor` implementation for an access interceptor scope localizer proxy
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class StaticProxyConstructor extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass \$originalClass
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(ReflectionClass \$originalClass)
    {
        parent::__construct('staticProxyConstructor', [], static::FLAG_PUBLIC | static::FLAG_STATIC);

        \$localizedObject = new ParameterGenerator('localizedObject');
        \$prefix          = new ParameterGenerator('prefixInterceptors');
        \$suffix          = new ParameterGenerator('suffixInterceptors');

        \$localizedObject->setType(\$originalClass->getName());
        \$prefix->setDefaultValue([]);
        \$suffix->setDefaultValue([]);
        \$prefix->setType('array');
        \$suffix->setType('array');

        \$this->setParameter(\$localizedObject);
        \$this->setParameter(\$prefix);
        \$this->setParameter(\$suffix);
        \$this->setReturnType(\$originalClass->getName());

        \$this->setDocBlock(
            \"Constructor to setup interceptors\\n\\n\"
            . \"@param \\\\\" . \$originalClass->getName() . \" \\\$localizedObject\\n\"
            . \"@param \\\\Closure[] \\\$prefixInterceptors method interceptors to be used before method logic\\n\"
            . \"@param \\\\Closure[] \\\$suffixInterceptors method interceptors to be used before method logic\\n\\n\"
            . '@return self'
        );
        \$this->setBody(
            'static \$reflection;' . \"\\n\\n\"
            . '\$reflection = \$reflection ?: \$reflection = new \\ReflectionClass(__CLASS__);' . \"\\n\"
            . '\$instance   = \$reflection->newInstanceWithoutConstructor();' . \"\\n\\n\"
            . '\$instance->bindProxyProperties(\$localizedObject, \$prefixInterceptors, \$suffixInterceptors);' . \"\\n\\n\"
            . 'return \$instance;'
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/StaticProxyConstructor.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use ReflectionClass;

/**
 * The `staticProxyConstructor` implementation for an access interceptor scope localizer proxy
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class StaticProxyConstructor extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass \$originalClass
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(ReflectionClass \$originalClass)
    {
        parent::__construct('staticProxyConstructor', [], static::FLAG_PUBLIC | static::FLAG_STATIC);

        \$localizedObject = new ParameterGenerator('localizedObject');
        \$prefix          = new ParameterGenerator('prefixInterceptors');
        \$suffix          = new ParameterGenerator('suffixInterceptors');

        \$localizedObject->setType(\$originalClass->getName());
        \$prefix->setDefaultValue([]);
        \$suffix->setDefaultValue([]);
        \$prefix->setType('array');
        \$suffix->setType('array');

        \$this->setParameter(\$localizedObject);
        \$this->setParameter(\$prefix);
        \$this->setParameter(\$suffix);
        \$this->setReturnType(\$originalClass->getName());

        \$this->setDocBlock(
            \"Constructor to setup interceptors\\n\\n\"
            . \"@param \\\\\" . \$originalClass->getName() . \" \\\$localizedObject\\n\"
            . \"@param \\\\Closure[] \\\$prefixInterceptors method interceptors to be used before method logic\\n\"
            . \"@param \\\\Closure[] \\\$suffixInterceptors method interceptors to be used before method logic\\n\\n\"
            . '@return self'
        );
        \$this->setBody(
            'static \$reflection;' . \"\\n\\n\"
            . '\$reflection = \$reflection ?: \$reflection = new \\ReflectionClass(__CLASS__);' . \"\\n\"
            . '\$instance   = \$reflection->newInstanceWithoutConstructor();' . \"\\n\\n\"
            . '\$instance->bindProxyProperties(\$localizedObject, \$prefixInterceptors, \$suffixInterceptors);' . \"\\n\\n\"
            . 'return \$instance;'
        );
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/StaticProxyConstructor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\StaticProxyConstructor.php");
    }
}
