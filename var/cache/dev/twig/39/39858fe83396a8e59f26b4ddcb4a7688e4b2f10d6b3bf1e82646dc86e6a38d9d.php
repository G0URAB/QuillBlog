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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/TypeRegistry.php */
class __TwigTemplate_0ad5d545f3dcfbed21ed0c8af4178a1385304c82c7981d30549a0cc3f8cab130 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/TypeRegistry.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\DBAL\\Types;

use Doctrine\\DBAL\\DBALException;
use function array_search;
use function in_array;

/**
 * The type registry is responsible for holding a map of all known DBAL types.
 * The types are stored using the flyweight pattern so that one type only exists as exactly one instance.
 *
 * @internal TypeRegistry exists for forward compatibility, its API should not be considered stable.
 */
final class TypeRegistry
{
    /** @var array<string, Type> Map of type names and their corresponding flyweight objects. */
    private \$instances = [];

    /**
     * Finds a type by the given name.
     *
     * @throws DBALException
     */
    public function get(string \$name) : Type
    {
        if (! isset(\$this->instances[\$name])) {
            throw DBALException::unknownColumnType(\$name);
        }

        return \$this->instances[\$name];
    }

    /**
     * Finds a name for the given type.
     *
     * @throws DBALException
     */
    public function lookupName(Type \$type) : string
    {
        \$name = \$this->findTypeName(\$type);

        if (\$name === null) {
            throw DBALException::typeNotRegistered(\$type);
        }

        return \$name;
    }

    /**
     * Checks if there is a type of the given name.
     */
    public function has(string \$name) : bool
    {
        return isset(\$this->instances[\$name]);
    }

    /**
     * Registers a custom type to the type map.
     *
     * @throws DBALException
     */
    public function register(string \$name, Type \$type) : void
    {
        if (isset(\$this->instances[\$name])) {
            throw DBALException::typeExists(\$name);
        }

        if (\$this->findTypeName(\$type) !== null) {
            throw DBALException::typeAlreadyRegistered(\$type);
        }

        \$this->instances[\$name] = \$type;
    }

    /**
     * Overrides an already defined type to use a different implementation.
     *
     * @throws DBALException
     */
    public function override(string \$name, Type \$type) : void
    {
        if (! isset(\$this->instances[\$name])) {
            throw DBALException::typeNotFound(\$name);
        }

        if (! in_array(\$this->findTypeName(\$type), [\$name, null], true)) {
            throw DBALException::typeAlreadyRegistered(\$type);
        }

        \$this->instances[\$name] = \$type;
    }

    /**
     * Gets the map of all registered types and their corresponding type instances.
     *
     * @internal
     *
     * @return array<string, Type>
     */
    public function getMap() : array
    {
        return \$this->instances;
    }

    private function findTypeName(Type \$type) : ?string
    {
        \$name = array_search(\$type, \$this->instances, true);

        if (\$name === false) {
            return null;
        }

        return \$name;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/TypeRegistry.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\DBAL\\Types;

use Doctrine\\DBAL\\DBALException;
use function array_search;
use function in_array;

/**
 * The type registry is responsible for holding a map of all known DBAL types.
 * The types are stored using the flyweight pattern so that one type only exists as exactly one instance.
 *
 * @internal TypeRegistry exists for forward compatibility, its API should not be considered stable.
 */
final class TypeRegistry
{
    /** @var array<string, Type> Map of type names and their corresponding flyweight objects. */
    private \$instances = [];

    /**
     * Finds a type by the given name.
     *
     * @throws DBALException
     */
    public function get(string \$name) : Type
    {
        if (! isset(\$this->instances[\$name])) {
            throw DBALException::unknownColumnType(\$name);
        }

        return \$this->instances[\$name];
    }

    /**
     * Finds a name for the given type.
     *
     * @throws DBALException
     */
    public function lookupName(Type \$type) : string
    {
        \$name = \$this->findTypeName(\$type);

        if (\$name === null) {
            throw DBALException::typeNotRegistered(\$type);
        }

        return \$name;
    }

    /**
     * Checks if there is a type of the given name.
     */
    public function has(string \$name) : bool
    {
        return isset(\$this->instances[\$name]);
    }

    /**
     * Registers a custom type to the type map.
     *
     * @throws DBALException
     */
    public function register(string \$name, Type \$type) : void
    {
        if (isset(\$this->instances[\$name])) {
            throw DBALException::typeExists(\$name);
        }

        if (\$this->findTypeName(\$type) !== null) {
            throw DBALException::typeAlreadyRegistered(\$type);
        }

        \$this->instances[\$name] = \$type;
    }

    /**
     * Overrides an already defined type to use a different implementation.
     *
     * @throws DBALException
     */
    public function override(string \$name, Type \$type) : void
    {
        if (! isset(\$this->instances[\$name])) {
            throw DBALException::typeNotFound(\$name);
        }

        if (! in_array(\$this->findTypeName(\$type), [\$name, null], true)) {
            throw DBALException::typeAlreadyRegistered(\$type);
        }

        \$this->instances[\$name] = \$type;
    }

    /**
     * Gets the map of all registered types and their corresponding type instances.
     *
     * @internal
     *
     * @return array<string, Type>
     */
    public function getMap() : array
    {
        return \$this->instances;
    }

    private function findTypeName(Type \$type) : ?string
    {
        \$name = array_search(\$type, \$this->instances, true);

        if (\$name === false) {
            return null;
        }

        return \$name;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/TypeRegistry.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Types\\TypeRegistry.php");
    }
}
