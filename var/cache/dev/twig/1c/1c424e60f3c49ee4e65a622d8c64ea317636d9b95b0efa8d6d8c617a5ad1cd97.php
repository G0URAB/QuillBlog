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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ConnectionRegistry.php */
class __TwigTemplate_f7d1349210af8a597fc02cb406f314c86e7ddd81f38c9341211be563f40886ba extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ConnectionRegistry.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence;

use function interface_exists;

/**
 * Contract covering connection for a Doctrine persistence layer ManagerRegistry class to implement.
 */
interface ConnectionRegistry
{
    /**
     * Gets the default connection name.
     *
     * @return string The default connection name.
     */
    public function getDefaultConnectionName();

    /**
     * Gets the named connection.
     *
     * @param string \$name The connection name (null for the default one).
     *
     * @return object
     */
    public function getConnection(\$name = null);

    /**
     * Gets an array of all registered connections.
     *
     * @return object[] An array of Connection instances.
     */
    public function getConnections();

    /**
     * Gets all connection names.
     *
     * @return string[] An array of connection names.
     */
    public function getConnectionNames();
}

interface_exists(\\Doctrine\\Common\\Persistence\\ConnectionRegistry::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ConnectionRegistry.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Persistence;

use function interface_exists;

/**
 * Contract covering connection for a Doctrine persistence layer ManagerRegistry class to implement.
 */
interface ConnectionRegistry
{
    /**
     * Gets the default connection name.
     *
     * @return string The default connection name.
     */
    public function getDefaultConnectionName();

    /**
     * Gets the named connection.
     *
     * @param string \$name The connection name (null for the default one).
     *
     * @return object
     */
    public function getConnection(\$name = null);

    /**
     * Gets an array of all registered connections.
     *
     * @return object[] An array of Connection instances.
     */
    public function getConnections();

    /**
     * Gets all connection names.
     *
     * @return string[] An array of connection names.
     */
    public function getConnectionNames();
}

interface_exists(\\Doctrine\\Common\\Persistence\\ConnectionRegistry::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ConnectionRegistry.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ConnectionRegistry.php");
    }
}
