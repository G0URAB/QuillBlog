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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php */
class __TwigTemplate_dae8735fe8bf902d596e56c0ff442780c2664708cca7997693818eed03808a92 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence\\Mapping\\Driver;

use Doctrine\\Persistence\\Mapping\\ClassMetadata;
use function interface_exists;

/**
 * Contract for metadata drivers.
 */
interface MappingDriver
{
    /**
     * Loads the metadata for the specified class into the provided container.
     *
     * @param string \$className
     *
     * @return void
     */
    public function loadMetadataForClass(\$className, ClassMetadata \$metadata);

    /**
     * Gets the names of all mapped classes known to this driver.
     *
     * @return string[] The names of all mapped classes known to this driver.
     */
    public function getAllClassNames();

    /**
     * Returns whether the class with the specified name should have its metadata loaded.
     * This is only the case if it is either mapped as an Entity or a MappedSuperclass.
     *
     * @param string \$className
     *
     * @return bool
     */
    public function isTransient(\$className);
}

interface_exists(\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriver::class);
interface_exists(ClassMetadata::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php";
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
use function interface_exists;

/**
 * Contract for metadata drivers.
 */
interface MappingDriver
{
    /**
     * Loads the metadata for the specified class into the provided container.
     *
     * @param string \$className
     *
     * @return void
     */
    public function loadMetadataForClass(\$className, ClassMetadata \$metadata);

    /**
     * Gets the names of all mapped classes known to this driver.
     *
     * @return string[] The names of all mapped classes known to this driver.
     */
    public function getAllClassNames();

    /**
     * Returns whether the class with the specified name should have its metadata loaded.
     * This is only the case if it is either mapped as an Entity or a MappedSuperclass.
     *
     * @param string \$className
     *
     * @return bool
     */
    public function isTransient(\$className);
}

interface_exists(\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriver::class);
interface_exists(ClassMetadata::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\MappingDriver.php");
    }
}
