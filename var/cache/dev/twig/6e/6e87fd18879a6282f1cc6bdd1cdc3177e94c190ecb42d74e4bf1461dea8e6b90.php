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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/AbstractBaseFactory.php */
class __TwigTemplate_ea2feb1bd44a7c380e6b4cd4df0c1291d1759432587606cb91dd39fa272b692c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/AbstractBaseFactory.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Factory;

use ProxyManager\\Configuration;
use ProxyManager\\Generator\\ClassGenerator;
use ProxyManager\\ProxyGenerator\\ProxyGeneratorInterface;
use ProxyManager\\Signature\\Exception\\InvalidSignatureException;
use ProxyManager\\Signature\\Exception\\MissingSignatureException;
use ProxyManager\\Version;
use ReflectionClass;

/**
 * Base factory common logic
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
abstract class AbstractBaseFactory
{
    /**
     * @var \\ProxyManager\\Configuration
     */
    protected \$configuration;

    /**
     * Cached checked class names
     *
     * @var string[]
     */
    private \$checkedClasses = [];

    /**
     * @param \\ProxyManager\\Configuration \$configuration
     */
    public function __construct(Configuration \$configuration = null)
    {
        \$this->configuration = \$configuration ?: new Configuration();
    }

    /**
     * Generate a proxy from a class name
     *
     * @param string  \$className
     * @param mixed[] \$proxyOptions
     *
     * @throws InvalidSignatureException
     * @throws MissingSignatureException
     * @throws \\OutOfBoundsException
     */
    protected function generateProxy(string \$className, array \$proxyOptions = []) : string
    {
        if (\\array_key_exists(\$className, \$this->checkedClasses)) {
            return \$this->checkedClasses[\$className];
        }

        \$proxyParameters = [
            'className'           => \$className,
            'factory'             => get_class(\$this),
            'proxyManagerVersion' => Version::getVersion(),
            'proxyOptions'        => \$proxyOptions,
        ];
        \$proxyClassName  = \$this
            ->configuration
            ->getClassNameInflector()
            ->getProxyClassName(\$className, \$proxyParameters);

        if (! class_exists(\$proxyClassName)) {
            \$this->generateProxyClass(
                \$proxyClassName,
                \$className,
                \$proxyParameters,
                \$proxyOptions
            );
        }

        \$this
            ->configuration
            ->getSignatureChecker()
            ->checkSignature(new ReflectionClass(\$proxyClassName), \$proxyParameters);

        return \$this->checkedClasses[\$className] = \$proxyClassName;
    }

    abstract protected function getGenerator() : ProxyGeneratorInterface;

    /**
     * Generates the provided `\$proxyClassName` from the given `\$className` and `\$proxyParameters`
     *
     * @param string  \$proxyClassName
     * @param string  \$className
     * @param array   \$proxyParameters
     * @param mixed[] \$proxyOptions
     */
    private function generateProxyClass(
        string \$proxyClassName,
        string \$className,
        array \$proxyParameters,
        array \$proxyOptions = []
    ) : void {
        \$className = \$this->configuration->getClassNameInflector()->getUserClassName(\$className);
        \$phpClass  = new ClassGenerator(\$proxyClassName);

        \$this->getGenerator()->generate(new ReflectionClass(\$className), \$phpClass, \$proxyOptions);

        \$phpClass = \$this->configuration->getClassSignatureGenerator()->addSignature(\$phpClass, \$proxyParameters);

        \$this->configuration->getGeneratorStrategy()->generate(\$phpClass, \$proxyOptions);

        \$autoloader = \$this->configuration->getProxyAutoloader();

        \$autoloader(\$proxyClassName);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/AbstractBaseFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Factory;

use ProxyManager\\Configuration;
use ProxyManager\\Generator\\ClassGenerator;
use ProxyManager\\ProxyGenerator\\ProxyGeneratorInterface;
use ProxyManager\\Signature\\Exception\\InvalidSignatureException;
use ProxyManager\\Signature\\Exception\\MissingSignatureException;
use ProxyManager\\Version;
use ReflectionClass;

/**
 * Base factory common logic
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
abstract class AbstractBaseFactory
{
    /**
     * @var \\ProxyManager\\Configuration
     */
    protected \$configuration;

    /**
     * Cached checked class names
     *
     * @var string[]
     */
    private \$checkedClasses = [];

    /**
     * @param \\ProxyManager\\Configuration \$configuration
     */
    public function __construct(Configuration \$configuration = null)
    {
        \$this->configuration = \$configuration ?: new Configuration();
    }

    /**
     * Generate a proxy from a class name
     *
     * @param string  \$className
     * @param mixed[] \$proxyOptions
     *
     * @throws InvalidSignatureException
     * @throws MissingSignatureException
     * @throws \\OutOfBoundsException
     */
    protected function generateProxy(string \$className, array \$proxyOptions = []) : string
    {
        if (\\array_key_exists(\$className, \$this->checkedClasses)) {
            return \$this->checkedClasses[\$className];
        }

        \$proxyParameters = [
            'className'           => \$className,
            'factory'             => get_class(\$this),
            'proxyManagerVersion' => Version::getVersion(),
            'proxyOptions'        => \$proxyOptions,
        ];
        \$proxyClassName  = \$this
            ->configuration
            ->getClassNameInflector()
            ->getProxyClassName(\$className, \$proxyParameters);

        if (! class_exists(\$proxyClassName)) {
            \$this->generateProxyClass(
                \$proxyClassName,
                \$className,
                \$proxyParameters,
                \$proxyOptions
            );
        }

        \$this
            ->configuration
            ->getSignatureChecker()
            ->checkSignature(new ReflectionClass(\$proxyClassName), \$proxyParameters);

        return \$this->checkedClasses[\$className] = \$proxyClassName;
    }

    abstract protected function getGenerator() : ProxyGeneratorInterface;

    /**
     * Generates the provided `\$proxyClassName` from the given `\$className` and `\$proxyParameters`
     *
     * @param string  \$proxyClassName
     * @param string  \$className
     * @param array   \$proxyParameters
     * @param mixed[] \$proxyOptions
     */
    private function generateProxyClass(
        string \$proxyClassName,
        string \$className,
        array \$proxyParameters,
        array \$proxyOptions = []
    ) : void {
        \$className = \$this->configuration->getClassNameInflector()->getUserClassName(\$className);
        \$phpClass  = new ClassGenerator(\$proxyClassName);

        \$this->getGenerator()->generate(new ReflectionClass(\$className), \$phpClass, \$proxyOptions);

        \$phpClass = \$this->configuration->getClassSignatureGenerator()->addSignature(\$phpClass, \$proxyParameters);

        \$this->configuration->getGeneratorStrategy()->generate(\$phpClass, \$proxyOptions);

        \$autoloader = \$this->configuration->getProxyAutoloader();

        \$autoloader(\$proxyClassName);
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/AbstractBaseFactory.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Factory\\AbstractBaseFactory.php");
    }
}
