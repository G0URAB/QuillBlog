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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php */
class __TwigTemplate_ba3415e91e3fffc8261a803bb50ed9724ad9d14472c82527e28a0e73a332fcb5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence\\Mapping\\Driver;

use Doctrine\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Persistence\\Mapping\\MappingException;
use function array_keys;
use function class_exists;
use function interface_exists;
use function spl_object_hash;
use function strpos;

/**
 * The DriverChain allows you to add multiple other mapping drivers for
 * certain namespaces.
 */
class MappingDriverChain implements MappingDriver
{
    /**
     * The default driver.
     *
     * @var MappingDriver|null
     */
    private \$defaultDriver;

    /** @var MappingDriver[] */
    private \$drivers = [];

    /**
     * Gets the default driver.
     *
     * @return MappingDriver|null
     */
    public function getDefaultDriver()
    {
        return \$this->defaultDriver;
    }

    /**
     * Set the default driver.
     *
     * @return void
     */
    public function setDefaultDriver(MappingDriver \$driver)
    {
        \$this->defaultDriver = \$driver;
    }

    /**
     * Adds a nested driver.
     *
     * @param string \$namespace
     *
     * @return void
     */
    public function addDriver(MappingDriver \$nestedDriver, \$namespace)
    {
        \$this->drivers[\$namespace] = \$nestedDriver;
    }

    /**
     * Gets the array of nested drivers.
     *
     * @return MappingDriver[] \$drivers
     */
    public function getDrivers()
    {
        return \$this->drivers;
    }

    /**
     * {@inheritDoc}
     */
    public function loadMetadataForClass(\$className, ClassMetadata \$metadata)
    {
        /** @var MappingDriver \$driver */
        foreach (\$this->drivers as \$namespace => \$driver) {
            if (strpos(\$className, \$namespace) === 0) {
                \$driver->loadMetadataForClass(\$className, \$metadata);

                return;
            }
        }

        if (\$this->defaultDriver !== null) {
            \$this->defaultDriver->loadMetadataForClass(\$className, \$metadata);

            return;
        }

        throw MappingException::classNotFoundInNamespaces(\$className, array_keys(\$this->drivers));
    }

    /**
     * {@inheritDoc}
     */
    public function getAllClassNames()
    {
        \$classNames    = [];
        \$driverClasses = [];

        /** @var MappingDriver \$driver */
        foreach (\$this->drivers as \$namespace => \$driver) {
            \$oid = spl_object_hash(\$driver);

            if (! isset(\$driverClasses[\$oid])) {
                \$driverClasses[\$oid] = \$driver->getAllClassNames();
            }

            foreach (\$driverClasses[\$oid] as \$className) {
                if (strpos(\$className, \$namespace) !== 0) {
                    continue;
                }

                \$classNames[\$className] = true;
            }
        }

        if (\$this->defaultDriver !== null) {
            foreach (\$this->defaultDriver->getAllClassNames() as \$className) {
                \$classNames[\$className] = true;
            }
        }

        return array_keys(\$classNames);
    }

    /**
     * {@inheritDoc}
     */
    public function isTransient(\$className)
    {
        /** @var MappingDriver \$driver */
        foreach (\$this->drivers as \$namespace => \$driver) {
            if (strpos(\$className, \$namespace) === 0) {
                return \$driver->isTransient(\$className);
            }
        }

        if (\$this->defaultDriver !== null) {
            return \$this->defaultDriver->isTransient(\$className);
        }

        return true;
    }
}

class_exists(\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain::class);
interface_exists(ClassMetadata::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Persistence\\Mapping\\Driver;

use Doctrine\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Persistence\\Mapping\\MappingException;
use function array_keys;
use function class_exists;
use function interface_exists;
use function spl_object_hash;
use function strpos;

/**
 * The DriverChain allows you to add multiple other mapping drivers for
 * certain namespaces.
 */
class MappingDriverChain implements MappingDriver
{
    /**
     * The default driver.
     *
     * @var MappingDriver|null
     */
    private \$defaultDriver;

    /** @var MappingDriver[] */
    private \$drivers = [];

    /**
     * Gets the default driver.
     *
     * @return MappingDriver|null
     */
    public function getDefaultDriver()
    {
        return \$this->defaultDriver;
    }

    /**
     * Set the default driver.
     *
     * @return void
     */
    public function setDefaultDriver(MappingDriver \$driver)
    {
        \$this->defaultDriver = \$driver;
    }

    /**
     * Adds a nested driver.
     *
     * @param string \$namespace
     *
     * @return void
     */
    public function addDriver(MappingDriver \$nestedDriver, \$namespace)
    {
        \$this->drivers[\$namespace] = \$nestedDriver;
    }

    /**
     * Gets the array of nested drivers.
     *
     * @return MappingDriver[] \$drivers
     */
    public function getDrivers()
    {
        return \$this->drivers;
    }

    /**
     * {@inheritDoc}
     */
    public function loadMetadataForClass(\$className, ClassMetadata \$metadata)
    {
        /** @var MappingDriver \$driver */
        foreach (\$this->drivers as \$namespace => \$driver) {
            if (strpos(\$className, \$namespace) === 0) {
                \$driver->loadMetadataForClass(\$className, \$metadata);

                return;
            }
        }

        if (\$this->defaultDriver !== null) {
            \$this->defaultDriver->loadMetadataForClass(\$className, \$metadata);

            return;
        }

        throw MappingException::classNotFoundInNamespaces(\$className, array_keys(\$this->drivers));
    }

    /**
     * {@inheritDoc}
     */
    public function getAllClassNames()
    {
        \$classNames    = [];
        \$driverClasses = [];

        /** @var MappingDriver \$driver */
        foreach (\$this->drivers as \$namespace => \$driver) {
            \$oid = spl_object_hash(\$driver);

            if (! isset(\$driverClasses[\$oid])) {
                \$driverClasses[\$oid] = \$driver->getAllClassNames();
            }

            foreach (\$driverClasses[\$oid] as \$className) {
                if (strpos(\$className, \$namespace) !== 0) {
                    continue;
                }

                \$classNames[\$className] = true;
            }
        }

        if (\$this->defaultDriver !== null) {
            foreach (\$this->defaultDriver->getAllClassNames() as \$className) {
                \$classNames[\$className] = true;
            }
        }

        return array_keys(\$classNames);
    }

    /**
     * {@inheritDoc}
     */
    public function isTransient(\$className)
    {
        /** @var MappingDriver \$driver */
        foreach (\$this->drivers as \$namespace => \$driver) {
            if (strpos(\$className, \$namespace) === 0) {
                return \$driver->isTransient(\$className);
            }
        }

        if (\$this->defaultDriver !== null) {
            return \$this->defaultDriver->isTransient(\$className);
        }

        return true;
    }
}

class_exists(\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain::class);
interface_exists(ClassMetadata::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain.php");
    }
}
