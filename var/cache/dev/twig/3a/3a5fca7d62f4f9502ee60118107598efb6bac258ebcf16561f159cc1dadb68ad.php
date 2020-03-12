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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileLocator.php */
class __TwigTemplate_7cf7a037a0f595277bad80b45ac7ab7bde742fed4226172d60554699f6e0434e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileLocator.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence\\Mapping\\Driver;

use function interface_exists;

/**
 * Locates the file that contains the metadata information for a given class name.
 *
 * This behavior is independent of the actual content of the file. It just detects
 * the file which is responsible for the given class name.
 */
interface FileLocator
{
    /**
     * Locates mapping file for the given class name.
     *
     * @param string \$className
     *
     * @return string
     */
    public function findMappingFile(\$className);

    /**
     * Gets all class names that are found with this file locator.
     *
     * @param string \$globalBasename Passed to allow excluding the basename.
     *
     * @return string[]
     */
    public function getAllClassNames(\$globalBasename);

    /**
     * Checks if a file can be found for this class name.
     *
     * @param string \$className
     *
     * @return bool
     */
    public function fileExists(\$className);

    /**
     * Gets all the paths that this file locator looks for mapping files.
     *
     * @return string[]
     */
    public function getPaths();

    /**
     * Gets the file extension that mapping files are suffixed with.
     *
     * @return string
     */
    public function getFileExtension();
}

interface_exists(\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\FileLocator::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileLocator.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Persistence\\Mapping\\Driver;

use function interface_exists;

/**
 * Locates the file that contains the metadata information for a given class name.
 *
 * This behavior is independent of the actual content of the file. It just detects
 * the file which is responsible for the given class name.
 */
interface FileLocator
{
    /**
     * Locates mapping file for the given class name.
     *
     * @param string \$className
     *
     * @return string
     */
    public function findMappingFile(\$className);

    /**
     * Gets all class names that are found with this file locator.
     *
     * @param string \$globalBasename Passed to allow excluding the basename.
     *
     * @return string[]
     */
    public function getAllClassNames(\$globalBasename);

    /**
     * Checks if a file can be found for this class name.
     *
     * @param string \$className
     *
     * @return bool
     */
    public function fileExists(\$className);

    /**
     * Gets all the paths that this file locator looks for mapping files.
     *
     * @return string[]
     */
    public function getPaths();

    /**
     * Gets the file extension that mapping files are suffixed with.
     *
     * @return string
     */
    public function getFileExtension();
}

interface_exists(\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\FileLocator::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileLocator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\FileLocator.php");
    }
}
