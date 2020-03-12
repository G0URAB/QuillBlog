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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/FileLocator/FileLocatorInterface.php */
class __TwigTemplate_87d5cc1575c49d3457eb2086521202b1cd208b2b044c4d514ecdf689918bfe0e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/FileLocator/FileLocatorInterface.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\FileLocator;

/**
 * Basic autoloader utilities required to work with proxy files
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface FileLocatorInterface
{
    /**
     * Retrieves the file name for the given proxy
     */
    public function getProxyFileName(string \$className) : string;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/FileLocator/FileLocatorInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\FileLocator;

/**
 * Basic autoloader utilities required to work with proxy files
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface FileLocatorInterface
{
    /**
     * Retrieves the file name for the given proxy
     */
    public function getProxyFileName(string \$className) : string;
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/FileLocator/FileLocatorInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\FileLocator\\FileLocatorInterface.php");
    }
}
