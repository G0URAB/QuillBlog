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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/RuntimeReflectionService.php */
class __TwigTemplate_6d00eb709238ae79c2468062af220779d4de7158a02992ee83f5a2eda791207e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/RuntimeReflectionService.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence\\Mapping;

use Doctrine\\Common\\Reflection\\RuntimePublicReflectionProperty;
use Doctrine\\Common\\Reflection\\TypedNoDefaultReflectionProperty;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use ReflectionProperty;
use function array_key_exists;
use function class_exists;
use function class_parents;
use function phpversion;
use function version_compare;

/**
 * PHP Runtime Reflection Service.
 */
class RuntimeReflectionService implements ReflectionService
{
    /** @var bool */
    private \$supportsTypedPropertiesWorkaround;

    public function __construct()
    {
        \$this->supportsTypedPropertiesWorkaround = version_compare((string) phpversion(), '7.4.0') >= 0;
    }

    /**
     * {@inheritDoc}
     */
    public function getParentClasses(\$class)
    {
        if (! class_exists(\$class)) {
            throw MappingException::nonExistingClass(\$class);
        }

        return class_parents(\$class);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassShortName(\$class)
    {
        \$reflectionClass = new ReflectionClass(\$class);

        return \$reflectionClass->getShortName();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassNamespace(\$class)
    {
        \$reflectionClass = new ReflectionClass(\$class);

        return \$reflectionClass->getNamespaceName();
    }

    /**
     * {@inheritDoc}
     */
    public function getClass(\$class)
    {
        return new ReflectionClass(\$class);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccessibleProperty(\$class, \$property)
    {
        \$reflectionProperty = new ReflectionProperty(\$class, \$property);

        if (\$reflectionProperty->isPublic()) {
            \$reflectionProperty = new RuntimePublicReflectionProperty(\$class, \$property);
        } elseif (\$this->supportsTypedPropertiesWorkaround && ! array_key_exists(\$property, \$this->getClass(\$class)->getDefaultProperties())) {
            \$reflectionProperty = new TypedNoDefaultReflectionProperty(\$class, \$property);
        }

        \$reflectionProperty->setAccessible(true);

        return \$reflectionProperty;
    }

    /**
     * {@inheritDoc}
     */
    public function hasPublicMethod(\$class, \$method)
    {
        try {
            \$reflectionMethod = new ReflectionMethod(\$class, \$method);
        } catch (ReflectionException \$e) {
            return false;
        }

        return \$reflectionMethod->isPublic();
    }
}

class_exists(\\Doctrine\\Common\\Persistence\\Mapping\\RuntimeReflectionService::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/RuntimeReflectionService.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Persistence\\Mapping;

use Doctrine\\Common\\Reflection\\RuntimePublicReflectionProperty;
use Doctrine\\Common\\Reflection\\TypedNoDefaultReflectionProperty;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use ReflectionProperty;
use function array_key_exists;
use function class_exists;
use function class_parents;
use function phpversion;
use function version_compare;

/**
 * PHP Runtime Reflection Service.
 */
class RuntimeReflectionService implements ReflectionService
{
    /** @var bool */
    private \$supportsTypedPropertiesWorkaround;

    public function __construct()
    {
        \$this->supportsTypedPropertiesWorkaround = version_compare((string) phpversion(), '7.4.0') >= 0;
    }

    /**
     * {@inheritDoc}
     */
    public function getParentClasses(\$class)
    {
        if (! class_exists(\$class)) {
            throw MappingException::nonExistingClass(\$class);
        }

        return class_parents(\$class);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassShortName(\$class)
    {
        \$reflectionClass = new ReflectionClass(\$class);

        return \$reflectionClass->getShortName();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassNamespace(\$class)
    {
        \$reflectionClass = new ReflectionClass(\$class);

        return \$reflectionClass->getNamespaceName();
    }

    /**
     * {@inheritDoc}
     */
    public function getClass(\$class)
    {
        return new ReflectionClass(\$class);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccessibleProperty(\$class, \$property)
    {
        \$reflectionProperty = new ReflectionProperty(\$class, \$property);

        if (\$reflectionProperty->isPublic()) {
            \$reflectionProperty = new RuntimePublicReflectionProperty(\$class, \$property);
        } elseif (\$this->supportsTypedPropertiesWorkaround && ! array_key_exists(\$property, \$this->getClass(\$class)->getDefaultProperties())) {
            \$reflectionProperty = new TypedNoDefaultReflectionProperty(\$class, \$property);
        }

        \$reflectionProperty->setAccessible(true);

        return \$reflectionProperty;
    }

    /**
     * {@inheritDoc}
     */
    public function hasPublicMethod(\$class, \$method)
    {
        try {
            \$reflectionMethod = new ReflectionMethod(\$class, \$method);
        } catch (ReflectionException \$e) {
            return false;
        }

        return \$reflectionMethod->isPublic();
    }
}

class_exists(\\Doctrine\\Common\\Persistence\\Mapping\\RuntimeReflectionService::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/RuntimeReflectionService.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\RuntimeReflectionService.php");
    }
}
