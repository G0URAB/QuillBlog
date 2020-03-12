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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php */
class __TwigTemplate_0317c771cc3c12e343956df4f7650c308a40f3681aa4f180ee14dcd4f3b242a6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence;

use Doctrine\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Persistence\\Mapping\\ClassMetadataFactory;
use function interface_exists;

/**
 * Contract for a Doctrine persistence layer ObjectManager class to implement.
 */
interface ObjectManager
{
    /**
     * Finds an object by its identifier.
     *
     * This is just a convenient shortcut for getRepository(\$className)->find(\$id).
     *
     * @param string \$className The class name of the object to find.
     * @param mixed  \$id        The identity of the object to find.
     *
     * @return object|null The found object.
     */
    public function find(\$className, \$id);

    /**
     * Tells the ObjectManager to make an instance managed and persistent.
     *
     * The object will be entered into the database as a result of the flush operation.
     *
     * NOTE: The persist operation always considers objects that are not yet known to
     * this ObjectManager as NEW. Do not pass detached objects to the persist operation.
     *
     * @param object \$object The instance to make managed and persistent.
     *
     * @return void
     */
    public function persist(\$object);

    /**
     * Removes an object instance.
     *
     * A removed object will be removed from the database as a result of the flush operation.
     *
     * @param object \$object The object instance to remove.
     *
     * @return void
     */
    public function remove(\$object);

    /**
     * Merges the state of a detached object into the persistence context
     * of this ObjectManager and returns the managed copy of the object.
     * The object passed to merge will not become associated/managed with this ObjectManager.
     *
     * @deprecated Merge operation is deprecated and will be removed in Persistence 2.0.
     *             Merging should be part of the business domain of an application rather than
     *             a generic operation of ObjectManager.
     *
     * @param object \$object
     *
     * @return object
     */
    public function merge(\$object);

    /**
     * Clears the ObjectManager. All objects that are currently managed
     * by this ObjectManager become detached.
     *
     * @param string|null \$objectName if given, only objects of this type will get detached.
     *
     * @return void
     */
    public function clear(\$objectName = null);

    /**
     * Detaches an object from the ObjectManager, causing a managed object to
     * become detached. Unflushed changes made to the object if any
     * (including removal of the object), will not be synchronized to the database.
     * Objects which previously referenced the detached object will continue to
     * reference it.
     *
     * @deprecated Detach operation is deprecated and will be removed in Persistence 2.0. Please use
     *             {@see ObjectManager::clear()} instead.
     *
     * @param object \$object The object to detach.
     *
     * @return void
     */
    public function detach(\$object);

    /**
     * Refreshes the persistent state of an object from the database,
     * overriding any local changes that have not yet been persisted.
     *
     * @param object \$object The object to refresh.
     *
     * @return void
     */
    public function refresh(\$object);

    /**
     * Flushes all changes to objects that have been queued up to now to the database.
     * This effectively synchronizes the in-memory state of managed objects with the
     * database.
     *
     * @return void
     */
    public function flush();

    /**
     * Gets the repository for a class.
     *
     * @param string \$className
     *
     * @return ObjectRepository
     */
    public function getRepository(\$className);

    /**
     * Returns the ClassMetadata descriptor for a class.
     *
     * The class name must be the fully-qualified class name without a leading backslash
     * (as it is returned by get_class(\$obj)).
     *
     * @param string \$className
     *
     * @return ClassMetadata
     */
    public function getClassMetadata(\$className);

    /**
     * Gets the metadata factory used to gather the metadata of classes.
     *
     * @return ClassMetadataFactory
     */
    public function getMetadataFactory();

    /**
     * Helper method to initialize a lazy loading proxy or persistent collection.
     *
     * This method is a no-op for other objects.
     *
     * @param object \$obj
     *
     * @return void
     */
    public function initializeObject(\$obj);

    /**
     * Checks if the object is part of the current UnitOfWork and therefore managed.
     *
     * @param object \$object
     *
     * @return bool
     */
    public function contains(\$object);
}

interface_exists(\\Doctrine\\Common\\Persistence\\ObjectManager::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Persistence;

use Doctrine\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Persistence\\Mapping\\ClassMetadataFactory;
use function interface_exists;

/**
 * Contract for a Doctrine persistence layer ObjectManager class to implement.
 */
interface ObjectManager
{
    /**
     * Finds an object by its identifier.
     *
     * This is just a convenient shortcut for getRepository(\$className)->find(\$id).
     *
     * @param string \$className The class name of the object to find.
     * @param mixed  \$id        The identity of the object to find.
     *
     * @return object|null The found object.
     */
    public function find(\$className, \$id);

    /**
     * Tells the ObjectManager to make an instance managed and persistent.
     *
     * The object will be entered into the database as a result of the flush operation.
     *
     * NOTE: The persist operation always considers objects that are not yet known to
     * this ObjectManager as NEW. Do not pass detached objects to the persist operation.
     *
     * @param object \$object The instance to make managed and persistent.
     *
     * @return void
     */
    public function persist(\$object);

    /**
     * Removes an object instance.
     *
     * A removed object will be removed from the database as a result of the flush operation.
     *
     * @param object \$object The object instance to remove.
     *
     * @return void
     */
    public function remove(\$object);

    /**
     * Merges the state of a detached object into the persistence context
     * of this ObjectManager and returns the managed copy of the object.
     * The object passed to merge will not become associated/managed with this ObjectManager.
     *
     * @deprecated Merge operation is deprecated and will be removed in Persistence 2.0.
     *             Merging should be part of the business domain of an application rather than
     *             a generic operation of ObjectManager.
     *
     * @param object \$object
     *
     * @return object
     */
    public function merge(\$object);

    /**
     * Clears the ObjectManager. All objects that are currently managed
     * by this ObjectManager become detached.
     *
     * @param string|null \$objectName if given, only objects of this type will get detached.
     *
     * @return void
     */
    public function clear(\$objectName = null);

    /**
     * Detaches an object from the ObjectManager, causing a managed object to
     * become detached. Unflushed changes made to the object if any
     * (including removal of the object), will not be synchronized to the database.
     * Objects which previously referenced the detached object will continue to
     * reference it.
     *
     * @deprecated Detach operation is deprecated and will be removed in Persistence 2.0. Please use
     *             {@see ObjectManager::clear()} instead.
     *
     * @param object \$object The object to detach.
     *
     * @return void
     */
    public function detach(\$object);

    /**
     * Refreshes the persistent state of an object from the database,
     * overriding any local changes that have not yet been persisted.
     *
     * @param object \$object The object to refresh.
     *
     * @return void
     */
    public function refresh(\$object);

    /**
     * Flushes all changes to objects that have been queued up to now to the database.
     * This effectively synchronizes the in-memory state of managed objects with the
     * database.
     *
     * @return void
     */
    public function flush();

    /**
     * Gets the repository for a class.
     *
     * @param string \$className
     *
     * @return ObjectRepository
     */
    public function getRepository(\$className);

    /**
     * Returns the ClassMetadata descriptor for a class.
     *
     * The class name must be the fully-qualified class name without a leading backslash
     * (as it is returned by get_class(\$obj)).
     *
     * @param string \$className
     *
     * @return ClassMetadata
     */
    public function getClassMetadata(\$className);

    /**
     * Gets the metadata factory used to gather the metadata of classes.
     *
     * @return ClassMetadataFactory
     */
    public function getMetadataFactory();

    /**
     * Helper method to initialize a lazy loading proxy or persistent collection.
     *
     * This method is a no-op for other objects.
     *
     * @param object \$obj
     *
     * @return void
     */
    public function initializeObject(\$obj);

    /**
     * Checks if the object is part of the current UnitOfWork and therefore managed.
     *
     * @param object \$object
     *
     * @return bool
     */
    public function contains(\$object);
}

interface_exists(\\Doctrine\\Common\\Persistence\\ObjectManager::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectManager.php");
    }
}
