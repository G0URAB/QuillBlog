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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObject/Adapter/Soap.php */
class __TwigTemplate_377744e19aecd274ce4a5302118c44b0fc2f351ba19ccab4ffea436964dfdfee extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObject/Adapter/Soap.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Factory\\RemoteObject\\Adapter;

/**
 * Remote Object SOAP adapter
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
class Soap extends BaseAdapter
{
    /**
     * {@inheritDoc}
     */
    protected function getServiceName(string \$wrappedClass, string \$method) : string
    {
        return \$method;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObject/Adapter/Soap.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Factory\\RemoteObject\\Adapter;

/**
 * Remote Object SOAP adapter
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
class Soap extends BaseAdapter
{
    /**
     * {@inheritDoc}
     */
    protected function getServiceName(string \$wrappedClass, string \$method) : string
    {
        return \$method;
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/RemoteObject/Adapter/Soap.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Factory\\RemoteObject\\Adapter\\Soap.php");
    }
}
