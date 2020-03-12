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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Event/LifecycleEventArgs.php */
class __TwigTemplate_6cef1cfa02544e569a3cb42c9d57b1ddb1341093b993f2ebe5e978170231b751 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Event/LifecycleEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\Persistence\\ObjectManager;
use function class_exists;

/**
 * Lifecycle Events are triggered by the UnitOfWork during lifecycle transitions
 * of entities.
 */
class LifecycleEventArgs extends EventArgs
{
    /** @var ObjectManager */
    private \$objectManager;

    /** @var object */
    private \$object;

    /**
     * @param object \$object
     */
    public function __construct(\$object, ObjectManager \$objectManager)
    {
        \$this->object        = \$object;
        \$this->objectManager = \$objectManager;
    }

    /**
     * Retrieves the associated entity.
     *
     * @deprecated
     *
     * @return object
     */
    public function getEntity()
    {
        return \$this->object;
    }

    /**
     * Retrieves the associated object.
     *
     * @return object
     */
    public function getObject()
    {
        return \$this->object;
    }

    /**
     * Retrieves the associated ObjectManager.
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return \$this->objectManager;
    }
}

class_exists(\\Doctrine\\Common\\Persistence\\Event\\LifecycleEventArgs::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Event/LifecycleEventArgs.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Persistence\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\Persistence\\ObjectManager;
use function class_exists;

/**
 * Lifecycle Events are triggered by the UnitOfWork during lifecycle transitions
 * of entities.
 */
class LifecycleEventArgs extends EventArgs
{
    /** @var ObjectManager */
    private \$objectManager;

    /** @var object */
    private \$object;

    /**
     * @param object \$object
     */
    public function __construct(\$object, ObjectManager \$objectManager)
    {
        \$this->object        = \$object;
        \$this->objectManager = \$objectManager;
    }

    /**
     * Retrieves the associated entity.
     *
     * @deprecated
     *
     * @return object
     */
    public function getEntity()
    {
        return \$this->object;
    }

    /**
     * Retrieves the associated object.
     *
     * @return object
     */
    public function getObject()
    {
        return \$this->object;
    }

    /**
     * Retrieves the associated ObjectManager.
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return \$this->objectManager;
    }
}

class_exists(\\Doctrine\\Common\\Persistence\\Event\\LifecycleEventArgs::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Event/LifecycleEventArgs.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Event\\LifecycleEventArgs.php");
    }
}
