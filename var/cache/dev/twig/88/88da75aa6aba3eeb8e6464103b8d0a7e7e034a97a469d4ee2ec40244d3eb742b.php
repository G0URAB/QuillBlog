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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/ReflectionService.php */
class __TwigTemplate_bc8cf2b1bfe62b5c5b853d72340f890036dca7eff1fd7cbcc88145f600d5270d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/ReflectionService.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence\\Mapping;

use ReflectionClass;
use ReflectionProperty;
use function interface_exists;

/**
 * Very simple reflection service abstraction.
 *
 * This is required inside metadata layers that may require either
 * static or runtime reflection.
 */
interface ReflectionService
{
    /**
     * Returns an array of the parent classes (not interfaces) for the given class.
     *
     * @param string \$class
     *
     * @return string[]
     *
     * @throws MappingException
     */
    public function getParentClasses(\$class);

    /**
     * Returns the shortname of a class.
     *
     * @param string \$class
     *
     * @return string
     */
    public function getClassShortName(\$class);

    /**
     * @param string \$class
     *
     * @return string
     */
    public function getClassNamespace(\$class);

    /**
     * Returns a reflection class instance or null.
     *
     * @param string \$class
     *
     * @return ReflectionClass|null
     */
    public function getClass(\$class);

    /**
     * Returns an accessible property (setAccessible(true)) or null.
     *
     * @param string \$class
     * @param string \$property
     *
     * @return ReflectionProperty|null
     */
    public function getAccessibleProperty(\$class, \$property);

    /**
     * Checks if the class have a public method with the given name.
     *
     * @param mixed \$class
     * @param mixed \$method
     *
     * @return bool
     */
    public function hasPublicMethod(\$class, \$method);
}

interface_exists(\\Doctrine\\Common\\Persistence\\Mapping\\ReflectionService::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/ReflectionService.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Persistence\\Mapping;

use ReflectionClass;
use ReflectionProperty;
use function interface_exists;

/**
 * Very simple reflection service abstraction.
 *
 * This is required inside metadata layers that may require either
 * static or runtime reflection.
 */
interface ReflectionService
{
    /**
     * Returns an array of the parent classes (not interfaces) for the given class.
     *
     * @param string \$class
     *
     * @return string[]
     *
     * @throws MappingException
     */
    public function getParentClasses(\$class);

    /**
     * Returns the shortname of a class.
     *
     * @param string \$class
     *
     * @return string
     */
    public function getClassShortName(\$class);

    /**
     * @param string \$class
     *
     * @return string
     */
    public function getClassNamespace(\$class);

    /**
     * Returns a reflection class instance or null.
     *
     * @param string \$class
     *
     * @return ReflectionClass|null
     */
    public function getClass(\$class);

    /**
     * Returns an accessible property (setAccessible(true)) or null.
     *
     * @param string \$class
     * @param string \$property
     *
     * @return ReflectionProperty|null
     */
    public function getAccessibleProperty(\$class, \$property);

    /**
     * Checks if the class have a public method with the given name.
     *
     * @param mixed \$class
     * @param mixed \$method
     *
     * @return bool
     */
    public function hasPublicMethod(\$class, \$method);
}

interface_exists(\\Doctrine\\Common\\Persistence\\Mapping\\ReflectionService::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/ReflectionService.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\ReflectionService.php");
    }
}
