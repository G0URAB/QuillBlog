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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ManagerRegistry.php */
class __TwigTemplate_23739aff5c21e7a0a28fa59acf03223725737dcdaf2864d3d745efd7e9834818 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ManagerRegistry.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence;

use function interface_exists;

/**
 * Contract covering object managers for a Doctrine persistence layer ManagerRegistry class to implement.
 */
interface ManagerRegistry extends ConnectionRegistry
{
    /**
     * Gets the default object manager name.
     *
     * @return string The default object manager name.
     */
    public function getDefaultManagerName();

    /**
     * Gets a named object manager.
     *
     * @param string \$name The object manager name (null for the default one).
     *
     * @return ObjectManager
     */
    public function getManager(\$name = null);

    /**
     * Gets an array of all registered object managers.
     *
     * @return ObjectManager[] An array of ObjectManager instances
     */
    public function getManagers();

    /**
     * Resets a named object manager.
     *
     * This method is useful when an object manager has been closed
     * because of a rollbacked transaction AND when you think that
     * it makes sense to get a new one to replace the closed one.
     *
     * Be warned that you will get a brand new object manager as
     * the existing one is not useable anymore. This means that any
     * other object with a dependency on this object manager will
     * hold an obsolete reference. You can inject the registry instead
     * to avoid this problem.
     *
     * @param string|null \$name The object manager name (null for the default one).
     *
     * @return ObjectManager
     */
    public function resetManager(\$name = null);

    /**
     * Resolves a registered namespace alias to the full namespace.
     *
     * This method looks for the alias in all registered object managers.
     *
     * @param string \$alias The alias.
     *
     * @return string The full namespace.
     */
    public function getAliasNamespace(\$alias);

    /**
     * Gets all object manager names.
     *
     * @return string[] An array of object manager names.
     */
    public function getManagerNames();

    /**
     * Gets the ObjectRepository for a persistent object.
     *
     * @param string \$persistentObject      The name of the persistent object.
     * @param string \$persistentManagerName The object manager name (null for the default one).
     *
     * @return ObjectRepository
     */
    public function getRepository(\$persistentObject, \$persistentManagerName = null);

    /**
     * Gets the object manager associated with a given class.
     *
     * @param string \$class A persistent object class name.
     *
     * @return ObjectManager|null
     */
    public function getManagerForClass(\$class);
}

interface_exists(\\Doctrine\\Common\\Persistence\\ManagerRegistry::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ManagerRegistry.php";
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
 * Contract covering object managers for a Doctrine persistence layer ManagerRegistry class to implement.
 */
interface ManagerRegistry extends ConnectionRegistry
{
    /**
     * Gets the default object manager name.
     *
     * @return string The default object manager name.
     */
    public function getDefaultManagerName();

    /**
     * Gets a named object manager.
     *
     * @param string \$name The object manager name (null for the default one).
     *
     * @return ObjectManager
     */
    public function getManager(\$name = null);

    /**
     * Gets an array of all registered object managers.
     *
     * @return ObjectManager[] An array of ObjectManager instances
     */
    public function getManagers();

    /**
     * Resets a named object manager.
     *
     * This method is useful when an object manager has been closed
     * because of a rollbacked transaction AND when you think that
     * it makes sense to get a new one to replace the closed one.
     *
     * Be warned that you will get a brand new object manager as
     * the existing one is not useable anymore. This means that any
     * other object with a dependency on this object manager will
     * hold an obsolete reference. You can inject the registry instead
     * to avoid this problem.
     *
     * @param string|null \$name The object manager name (null for the default one).
     *
     * @return ObjectManager
     */
    public function resetManager(\$name = null);

    /**
     * Resolves a registered namespace alias to the full namespace.
     *
     * This method looks for the alias in all registered object managers.
     *
     * @param string \$alias The alias.
     *
     * @return string The full namespace.
     */
    public function getAliasNamespace(\$alias);

    /**
     * Gets all object manager names.
     *
     * @return string[] An array of object manager names.
     */
    public function getManagerNames();

    /**
     * Gets the ObjectRepository for a persistent object.
     *
     * @param string \$persistentObject      The name of the persistent object.
     * @param string \$persistentManagerName The object manager name (null for the default one).
     *
     * @return ObjectRepository
     */
    public function getRepository(\$persistentObject, \$persistentManagerName = null);

    /**
     * Gets the object manager associated with a given class.
     *
     * @param string \$class A persistent object class name.
     *
     * @return ObjectManager|null
     */
    public function getManagerForClass(\$class);
}

interface_exists(\\Doctrine\\Common\\Persistence\\ManagerRegistry::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ManagerRegistry.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ManagerRegistry.php");
    }
}
