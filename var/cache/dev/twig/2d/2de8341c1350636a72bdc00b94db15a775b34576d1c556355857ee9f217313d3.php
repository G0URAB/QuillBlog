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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObject/AdapterInterface.php */
class __TwigTemplate_438ca77d068c34922f1c541001f095cc0c3471ec402dec4a5342d9bf62055a6a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObject/AdapterInterface.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Factory\\RemoteObject;

/**
 * Remote Object adapter interface
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
interface AdapterInterface
{
    /**
     * Call remote object
     *
     * @param string \$wrappedClass
     * @param string \$method
     * @param array  \$params
     */
    public function call(string \$wrappedClass, string \$method, array \$params = []);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObject/AdapterInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Factory\\RemoteObject;

/**
 * Remote Object adapter interface
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
interface AdapterInterface
{
    /**
     * Call remote object
     *
     * @param string \$wrappedClass
     * @param string \$method
     * @param array  \$params
     */
    public function call(string \$wrappedClass, string \$method, array \$params = []);
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObject/AdapterInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Factory\\RemoteObject\\AdapterInterface.php");
    }
}
