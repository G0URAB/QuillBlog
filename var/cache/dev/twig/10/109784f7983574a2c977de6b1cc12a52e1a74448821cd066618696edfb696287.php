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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodSuffixInterceptor.php */
class __TwigTemplate_9b475e62a1e5a5fd8d4adb2c72ff471ec1431a8dd4fbf0296e3db3933b588b43 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodSuffixInterceptor.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator;

use Closure;
use ProxyManager\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Implementation for {@see \\ProxyManager\\Proxy\\AccessInterceptorInterface::setMethodSuffixInterceptor}
 * for access interceptor objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class SetMethodSuffixInterceptor extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param PropertyGenerator \$suffixInterceptor
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(PropertyGenerator \$suffixInterceptor)
    {
        parent::__construct('setMethodSuffixInterceptor');

        \$interceptor = new ParameterGenerator('suffixInterceptor');

        \$interceptor->setType(Closure::class);
        \$interceptor->setDefaultValue(null);
        \$this->setParameter(new ParameterGenerator('methodName', 'string'));
        \$this->setParameter(\$interceptor);
        \$this->setBody('\$this->' . \$suffixInterceptor->getName() . '[\$methodName] = \$suffixInterceptor;');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodSuffixInterceptor.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator;

use Closure;
use ProxyManager\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Implementation for {@see \\ProxyManager\\Proxy\\AccessInterceptorInterface::setMethodSuffixInterceptor}
 * for access interceptor objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class SetMethodSuffixInterceptor extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param PropertyGenerator \$suffixInterceptor
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(PropertyGenerator \$suffixInterceptor)
    {
        parent::__construct('setMethodSuffixInterceptor');

        \$interceptor = new ParameterGenerator('suffixInterceptor');

        \$interceptor->setType(Closure::class);
        \$interceptor->setDefaultValue(null);
        \$this->setParameter(new ParameterGenerator('methodName', 'string'));
        \$this->setParameter(\$interceptor);
        \$this->setBody('\$this->' . \$suffixInterceptor->getName() . '[\$methodName] = \$suffixInterceptor;');
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptor/MethodGenerator/SetMethodSuffixInterceptor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator\\SetMethodSuffixInterceptor.php");
    }
}
