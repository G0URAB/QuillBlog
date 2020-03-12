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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/StaticReflectionService.php */
class __TwigTemplate_ef8a36ebd488c69eb65af7c571a067b948e3edf873d426e960fa8c51cc8871f9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/StaticReflectionService.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence\\Mapping;

use function class_exists;
use function strpos;
use function strrev;
use function strrpos;
use function substr;

/**
 * PHP Runtime Reflection Service.
 */
class StaticReflectionService implements ReflectionService
{
    /**
     * {@inheritDoc}
     */
    public function getParentClasses(\$class)
    {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    public function getClassShortName(\$className)
    {
        if (strpos(\$className, '\\\\') !== false) {
            \$className = substr(\$className, strrpos(\$className, '\\\\') + 1);
        }

        return \$className;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassNamespace(\$className)
    {
        \$namespace = '';
        if (strpos(\$className, '\\\\') !== false) {
            \$namespace = strrev(substr(strrev(\$className), strpos(strrev(\$className), '\\\\') + 1));
        }

        return \$namespace;
    }

    /**
     * {@inheritDoc}
     */
    public function getClass(\$class)
    {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getAccessibleProperty(\$class, \$property)
    {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function hasPublicMethod(\$class, \$method)
    {
        return true;
    }
}

class_exists(\\Doctrine\\Common\\Persistence\\Mapping\\StaticReflectionService::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/StaticReflectionService.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Persistence\\Mapping;

use function class_exists;
use function strpos;
use function strrev;
use function strrpos;
use function substr;

/**
 * PHP Runtime Reflection Service.
 */
class StaticReflectionService implements ReflectionService
{
    /**
     * {@inheritDoc}
     */
    public function getParentClasses(\$class)
    {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    public function getClassShortName(\$className)
    {
        if (strpos(\$className, '\\\\') !== false) {
            \$className = substr(\$className, strrpos(\$className, '\\\\') + 1);
        }

        return \$className;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassNamespace(\$className)
    {
        \$namespace = '';
        if (strpos(\$className, '\\\\') !== false) {
            \$namespace = strrev(substr(strrev(\$className), strpos(strrev(\$className), '\\\\') + 1));
        }

        return \$namespace;
    }

    /**
     * {@inheritDoc}
     */
    public function getClass(\$class)
    {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getAccessibleProperty(\$class, \$property)
    {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function hasPublicMethod(\$class, \$method)
    {
        return true;
    }
}

class_exists(\\Doctrine\\Common\\Persistence\\Mapping\\StaticReflectionService::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/StaticReflectionService.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\StaticReflectionService.php");
    }
}
