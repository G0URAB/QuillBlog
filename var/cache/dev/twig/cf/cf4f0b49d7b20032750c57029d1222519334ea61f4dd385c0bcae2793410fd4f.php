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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/ClassMetadataFactory.php */
class __TwigTemplate_b27bb4775fdcdebdd90b076ffef90671acf708a1a4268373b0e22a0b7870ec23 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/ClassMetadataFactory.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence\\Mapping;

use function interface_exists;

/**
 * Contract for a Doctrine persistence layer ClassMetadata class to implement.
 */
interface ClassMetadataFactory
{
    /**
     * Forces the factory to load the metadata of all classes known to the underlying
     * mapping driver.
     *
     * @return ClassMetadata[] The ClassMetadata instances of all mapped classes.
     */
    public function getAllMetadata();

    /**
     * Gets the class metadata descriptor for a class.
     *
     * @param string \$className The name of the class.
     *
     * @return ClassMetadata
     */
    public function getMetadataFor(\$className);

    /**
     * Checks whether the factory has the metadata for a class loaded already.
     *
     * @param string \$className
     *
     * @return bool TRUE if the metadata of the class in question is already loaded, FALSE otherwise.
     */
    public function hasMetadataFor(\$className);

    /**
     * Sets the metadata descriptor for a specific class.
     *
     * @param string        \$className
     * @param ClassMetadata \$class
     */
    public function setMetadataFor(\$className, \$class);

    /**
     * Returns whether the class with the specified name should have its metadata loaded.
     * This is only the case if it is either mapped directly or as a MappedSuperclass.
     *
     * @param string \$className
     *
     * @return bool
     */
    public function isTransient(\$className);
}

interface_exists(\\Doctrine\\Common\\Persistence\\Mapping\\ClassMetadataFactory::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/ClassMetadataFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Persistence\\Mapping;

use function interface_exists;

/**
 * Contract for a Doctrine persistence layer ClassMetadata class to implement.
 */
interface ClassMetadataFactory
{
    /**
     * Forces the factory to load the metadata of all classes known to the underlying
     * mapping driver.
     *
     * @return ClassMetadata[] The ClassMetadata instances of all mapped classes.
     */
    public function getAllMetadata();

    /**
     * Gets the class metadata descriptor for a class.
     *
     * @param string \$className The name of the class.
     *
     * @return ClassMetadata
     */
    public function getMetadataFor(\$className);

    /**
     * Checks whether the factory has the metadata for a class loaded already.
     *
     * @param string \$className
     *
     * @return bool TRUE if the metadata of the class in question is already loaded, FALSE otherwise.
     */
    public function hasMetadataFor(\$className);

    /**
     * Sets the metadata descriptor for a specific class.
     *
     * @param string        \$className
     * @param ClassMetadata \$class
     */
    public function setMetadataFor(\$className, \$class);

    /**
     * Returns whether the class with the specified name should have its metadata loaded.
     * This is only the case if it is either mapped directly or as a MappedSuperclass.
     *
     * @param string \$className
     *
     * @return bool
     */
    public function isTransient(\$className);
}

interface_exists(\\Doctrine\\Common\\Persistence\\Mapping\\ClassMetadataFactory::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/ClassMetadataFactory.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\ClassMetadataFactory.php");
    }
}
