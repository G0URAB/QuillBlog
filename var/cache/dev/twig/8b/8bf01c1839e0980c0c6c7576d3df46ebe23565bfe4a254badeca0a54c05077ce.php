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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Autoloader/Autoloader.php */
class __TwigTemplate_c3ac82f8e9d7fe7fd7d08fbc0ede23921a55051cb8c08a603e9f6e28e6265d8f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Autoloader/Autoloader.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Autoloader;

use ProxyManager\\FileLocator\\FileLocatorInterface;
use ProxyManager\\Inflector\\ClassNameInflectorInterface;

/**
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class Autoloader implements AutoloaderInterface
{
    /**
     * @var \\ProxyManager\\FileLocator\\FileLocatorInterface
     */
    protected \$fileLocator;

    /**
     * @var \\ProxyManager\\Inflector\\ClassNameInflectorInterface
     */
    protected \$classNameInflector;

    /**
     * @param \\ProxyManager\\FileLocator\\FileLocatorInterface      \$fileLocator
     * @param \\ProxyManager\\Inflector\\ClassNameInflectorInterface \$classNameInflector
     */
    public function __construct(FileLocatorInterface \$fileLocator, ClassNameInflectorInterface \$classNameInflector)
    {
        \$this->fileLocator        = \$fileLocator;
        \$this->classNameInflector = \$classNameInflector;
    }

    /**
     * {@inheritDoc}
     */
    public function __invoke(string \$className) : bool
    {
        if (class_exists(\$className, false) || ! \$this->classNameInflector->isProxyClassName(\$className)) {
            return false;
        }

        \$file = \$this->fileLocator->getProxyFileName(\$className);

        if (! file_exists(\$file)) {
            return false;
        }

        /* @noinspection PhpIncludeInspection */
        /* @noinspection UsingInclusionOnceReturnValueInspection */
        return (bool) require_once \$file;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Autoloader/Autoloader.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Autoloader;

use ProxyManager\\FileLocator\\FileLocatorInterface;
use ProxyManager\\Inflector\\ClassNameInflectorInterface;

/**
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class Autoloader implements AutoloaderInterface
{
    /**
     * @var \\ProxyManager\\FileLocator\\FileLocatorInterface
     */
    protected \$fileLocator;

    /**
     * @var \\ProxyManager\\Inflector\\ClassNameInflectorInterface
     */
    protected \$classNameInflector;

    /**
     * @param \\ProxyManager\\FileLocator\\FileLocatorInterface      \$fileLocator
     * @param \\ProxyManager\\Inflector\\ClassNameInflectorInterface \$classNameInflector
     */
    public function __construct(FileLocatorInterface \$fileLocator, ClassNameInflectorInterface \$classNameInflector)
    {
        \$this->fileLocator        = \$fileLocator;
        \$this->classNameInflector = \$classNameInflector;
    }

    /**
     * {@inheritDoc}
     */
    public function __invoke(string \$className) : bool
    {
        if (class_exists(\$className, false) || ! \$this->classNameInflector->isProxyClassName(\$className)) {
            return false;
        }

        \$file = \$this->fileLocator->getProxyFileName(\$className);

        if (! file_exists(\$file)) {
            return false;
        }

        /* @noinspection PhpIncludeInspection */
        /* @noinspection UsingInclusionOnceReturnValueInspection */
        return (bool) require_once \$file;
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Autoloader/Autoloader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Autoloader\\Autoloader.php");
    }
}
