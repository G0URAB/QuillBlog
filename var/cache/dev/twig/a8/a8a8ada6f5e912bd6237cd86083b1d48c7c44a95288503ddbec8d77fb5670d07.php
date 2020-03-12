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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/AbstractManagerRegistry.php */
class __TwigTemplate_fc6c8983ecf90810a4c1bdbaa6ebadf23daeda839dda298cea69e3f5e0a181d9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/AbstractManagerRegistry.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence;

use InvalidArgumentException;
use ReflectionClass;
use function class_exists;
use function explode;
use function interface_exists;
use function sprintf;
use function strpos;

/**
 * Abstract implementation of the ManagerRegistry contract.
 */
abstract class AbstractManagerRegistry implements ManagerRegistry
{
    /** @var string */
    private \$name;

    /** @var string[] */
    private \$connections;

    /** @var string[] */
    private \$managers;

    /** @var string */
    private \$defaultConnection;

    /** @var string */
    private \$defaultManager;

    /** @var string */
    private \$proxyInterfaceName;

    /**
     * @param string   \$name
     * @param string[] \$connections
     * @param string[] \$managers
     * @param string   \$defaultConnection
     * @param string   \$defaultManager
     * @param string   \$proxyInterfaceName
     */
    public function __construct(\$name, array \$connections, array \$managers, \$defaultConnection, \$defaultManager, \$proxyInterfaceName)
    {
        \$this->name               = \$name;
        \$this->connections        = \$connections;
        \$this->managers           = \$managers;
        \$this->defaultConnection  = \$defaultConnection;
        \$this->defaultManager     = \$defaultManager;
        \$this->proxyInterfaceName = \$proxyInterfaceName;
    }

    /**
     * Fetches/creates the given services.
     *
     * A service in this context is connection or a manager instance.
     *
     * @param string \$name The name of the service.
     *
     * @return ObjectManager The instance of the given service.
     */
    abstract protected function getService(\$name);

    /**
     * Resets the given services.
     *
     * A service in this context is connection or a manager instance.
     *
     * @param string \$name The name of the service.
     *
     * @return void
     */
    abstract protected function resetService(\$name);

    /**
     * Gets the name of the registry.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection(\$name = null)
    {
        if (\$name === null) {
            \$name = \$this->defaultConnection;
        }

        if (! isset(\$this->connections[\$name])) {
            throw new InvalidArgumentException(sprintf('Doctrine %s Connection named \"%s\" does not exist.', \$this->name, \$name));
        }

        return \$this->getService(\$this->connections[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function getConnectionNames()
    {
        return \$this->connections;
    }

    /**
     * {@inheritdoc}
     */
    public function getConnections()
    {
        \$connections = [];
        foreach (\$this->connections as \$name => \$id) {
            \$connections[\$name] = \$this->getService(\$id);
        }

        return \$connections;
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultConnectionName()
    {
        return \$this->defaultConnection;
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultManagerName()
    {
        return \$this->defaultManager;
    }

    /**
     * {@inheritdoc}
     *
     * @throws InvalidArgumentException
     */
    public function getManager(\$name = null)
    {
        if (\$name === null) {
            \$name = \$this->defaultManager;
        }

        if (! isset(\$this->managers[\$name])) {
            throw new InvalidArgumentException(sprintf('Doctrine %s Manager named \"%s\" does not exist.', \$this->name, \$name));
        }

        return \$this->getService(\$this->managers[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function getManagerForClass(\$class)
    {
        // Check for namespace alias
        if (strpos(\$class, ':') !== false) {
            [\$namespaceAlias, \$simpleClassName] = explode(':', \$class, 2);
            \$class                              = \$this->getAliasNamespace(\$namespaceAlias) . '\\\\' . \$simpleClassName;
        }

        \$proxyClass = new ReflectionClass(\$class);

        if (\$proxyClass->implementsInterface(\$this->proxyInterfaceName)) {
            \$parentClass = \$proxyClass->getParentClass();

            if (! \$parentClass) {
                return null;
            }

            \$class = \$parentClass->getName();
        }

        foreach (\$this->managers as \$id) {
            \$manager = \$this->getService(\$id);

            if (! \$manager->getMetadataFactory()->isTransient(\$class)) {
                return \$manager;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getManagerNames()
    {
        return \$this->managers;
    }

    /**
     * {@inheritdoc}
     */
    public function getManagers()
    {
        \$dms = [];
        foreach (\$this->managers as \$name => \$id) {
            \$dms[\$name] = \$this->getService(\$id);
        }

        return \$dms;
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository(\$persistentObjectName, \$persistentManagerName = null)
    {
        return \$this
            ->selectManager(\$persistentObjectName, \$persistentManagerName)
            ->getRepository(\$persistentObjectName);
    }

    /**
     * {@inheritdoc}
     */
    public function resetManager(\$name = null)
    {
        if (\$name === null) {
            \$name = \$this->defaultManager;
        }

        if (! isset(\$this->managers[\$name])) {
            throw new InvalidArgumentException(sprintf('Doctrine %s Manager named \"%s\" does not exist.', \$this->name, \$name));
        }

        // force the creation of a new document manager
        // if the current one is closed
        \$this->resetService(\$this->managers[\$name]);

        return \$this->getManager(\$name);
    }

    private function selectManager(string \$persistentObjectName, ?string \$persistentManagerName = null) : ObjectManager
    {
        if (\$persistentManagerName !== null) {
            return \$this->getManager(\$persistentManagerName);
        }

        return \$this->getManagerForClass(\$persistentObjectName) ?? \$this->getManager();
    }
}

class_exists(\\Doctrine\\Common\\Persistence\\AbstractManagerRegistry::class);
interface_exists(ObjectManager::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/AbstractManagerRegistry.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Persistence;

use InvalidArgumentException;
use ReflectionClass;
use function class_exists;
use function explode;
use function interface_exists;
use function sprintf;
use function strpos;

/**
 * Abstract implementation of the ManagerRegistry contract.
 */
abstract class AbstractManagerRegistry implements ManagerRegistry
{
    /** @var string */
    private \$name;

    /** @var string[] */
    private \$connections;

    /** @var string[] */
    private \$managers;

    /** @var string */
    private \$defaultConnection;

    /** @var string */
    private \$defaultManager;

    /** @var string */
    private \$proxyInterfaceName;

    /**
     * @param string   \$name
     * @param string[] \$connections
     * @param string[] \$managers
     * @param string   \$defaultConnection
     * @param string   \$defaultManager
     * @param string   \$proxyInterfaceName
     */
    public function __construct(\$name, array \$connections, array \$managers, \$defaultConnection, \$defaultManager, \$proxyInterfaceName)
    {
        \$this->name               = \$name;
        \$this->connections        = \$connections;
        \$this->managers           = \$managers;
        \$this->defaultConnection  = \$defaultConnection;
        \$this->defaultManager     = \$defaultManager;
        \$this->proxyInterfaceName = \$proxyInterfaceName;
    }

    /**
     * Fetches/creates the given services.
     *
     * A service in this context is connection or a manager instance.
     *
     * @param string \$name The name of the service.
     *
     * @return ObjectManager The instance of the given service.
     */
    abstract protected function getService(\$name);

    /**
     * Resets the given services.
     *
     * A service in this context is connection or a manager instance.
     *
     * @param string \$name The name of the service.
     *
     * @return void
     */
    abstract protected function resetService(\$name);

    /**
     * Gets the name of the registry.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection(\$name = null)
    {
        if (\$name === null) {
            \$name = \$this->defaultConnection;
        }

        if (! isset(\$this->connections[\$name])) {
            throw new InvalidArgumentException(sprintf('Doctrine %s Connection named \"%s\" does not exist.', \$this->name, \$name));
        }

        return \$this->getService(\$this->connections[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function getConnectionNames()
    {
        return \$this->connections;
    }

    /**
     * {@inheritdoc}
     */
    public function getConnections()
    {
        \$connections = [];
        foreach (\$this->connections as \$name => \$id) {
            \$connections[\$name] = \$this->getService(\$id);
        }

        return \$connections;
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultConnectionName()
    {
        return \$this->defaultConnection;
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultManagerName()
    {
        return \$this->defaultManager;
    }

    /**
     * {@inheritdoc}
     *
     * @throws InvalidArgumentException
     */
    public function getManager(\$name = null)
    {
        if (\$name === null) {
            \$name = \$this->defaultManager;
        }

        if (! isset(\$this->managers[\$name])) {
            throw new InvalidArgumentException(sprintf('Doctrine %s Manager named \"%s\" does not exist.', \$this->name, \$name));
        }

        return \$this->getService(\$this->managers[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function getManagerForClass(\$class)
    {
        // Check for namespace alias
        if (strpos(\$class, ':') !== false) {
            [\$namespaceAlias, \$simpleClassName] = explode(':', \$class, 2);
            \$class                              = \$this->getAliasNamespace(\$namespaceAlias) . '\\\\' . \$simpleClassName;
        }

        \$proxyClass = new ReflectionClass(\$class);

        if (\$proxyClass->implementsInterface(\$this->proxyInterfaceName)) {
            \$parentClass = \$proxyClass->getParentClass();

            if (! \$parentClass) {
                return null;
            }

            \$class = \$parentClass->getName();
        }

        foreach (\$this->managers as \$id) {
            \$manager = \$this->getService(\$id);

            if (! \$manager->getMetadataFactory()->isTransient(\$class)) {
                return \$manager;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getManagerNames()
    {
        return \$this->managers;
    }

    /**
     * {@inheritdoc}
     */
    public function getManagers()
    {
        \$dms = [];
        foreach (\$this->managers as \$name => \$id) {
            \$dms[\$name] = \$this->getService(\$id);
        }

        return \$dms;
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository(\$persistentObjectName, \$persistentManagerName = null)
    {
        return \$this
            ->selectManager(\$persistentObjectName, \$persistentManagerName)
            ->getRepository(\$persistentObjectName);
    }

    /**
     * {@inheritdoc}
     */
    public function resetManager(\$name = null)
    {
        if (\$name === null) {
            \$name = \$this->defaultManager;
        }

        if (! isset(\$this->managers[\$name])) {
            throw new InvalidArgumentException(sprintf('Doctrine %s Manager named \"%s\" does not exist.', \$this->name, \$name));
        }

        // force the creation of a new document manager
        // if the current one is closed
        \$this->resetService(\$this->managers[\$name]);

        return \$this->getManager(\$name);
    }

    private function selectManager(string \$persistentObjectName, ?string \$persistentManagerName = null) : ObjectManager
    {
        if (\$persistentManagerName !== null) {
            return \$this->getManager(\$persistentManagerName);
        }

        return \$this->getManagerForClass(\$persistentObjectName) ?? \$this->getManager();
    }
}

class_exists(\\Doctrine\\Common\\Persistence\\AbstractManagerRegistry::class);
interface_exists(ObjectManager::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/AbstractManagerRegistry.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\AbstractManagerRegistry.php");
    }
}
