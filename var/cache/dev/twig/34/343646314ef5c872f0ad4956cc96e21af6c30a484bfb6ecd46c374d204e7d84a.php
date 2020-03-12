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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Autoloader/AutoloaderInterface.php */
class __TwigTemplate_dfc25ae37620e5be25f534f20947a0cb99cad1c759b8bc049de1cd2ea6b55c5f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Autoloader/AutoloaderInterface.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Autoloader;

/**
 * Basic autoloader utilities required to work with proxy files
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface AutoloaderInterface
{
    /**
     * Callback to allow the object to be handled as autoloader - tries to autoload the given class name
     *
     * @param string \$className
     */
    public function __invoke(string \$className) : bool;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Autoloader/AutoloaderInterface.php";
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

/**
 * Basic autoloader utilities required to work with proxy files
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface AutoloaderInterface
{
    /**
     * Callback to allow the object to be handled as autoloader - tries to autoload the given class name
     *
     * @param string \$className
     */
    public function __invoke(string \$className) : bool;
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Autoloader/AutoloaderInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Autoloader\\AutoloaderInterface.php");
    }
}
