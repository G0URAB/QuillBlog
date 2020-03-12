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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Event/OnClearEventArgs.php */
class __TwigTemplate_4d3fc03eff0ae01c6b4988c3fc333ee8e1559db3b1b7d58518037e13b2456aa5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Event/OnClearEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\Persistence\\ObjectManager;
use function class_exists;

/**
 * Provides event arguments for the onClear event.
 */
class OnClearEventArgs extends EventArgs
{
    /** @var ObjectManager */
    private \$objectManager;

    /** @var string|null */
    private \$entityClass;

    /**
     * @param ObjectManager \$objectManager The object manager.
     * @param string|null   \$entityClass   The optional entity class.
     */
    public function __construct(\$objectManager, \$entityClass = null)
    {
        \$this->objectManager = \$objectManager;
        \$this->entityClass   = \$entityClass;
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

    /**
     * Returns the name of the entity class that is cleared, or null if all are cleared.
     *
     * @return string|null
     */
    public function getEntityClass()
    {
        return \$this->entityClass;
    }

    /**
     * Returns whether this event clears all entities.
     *
     * @return bool
     */
    public function clearsAllEntities()
    {
        return \$this->entityClass === null;
    }
}

class_exists(\\Doctrine\\Common\\Persistence\\Event\\OnClearEventArgs::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Event/OnClearEventArgs.php";
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
 * Provides event arguments for the onClear event.
 */
class OnClearEventArgs extends EventArgs
{
    /** @var ObjectManager */
    private \$objectManager;

    /** @var string|null */
    private \$entityClass;

    /**
     * @param ObjectManager \$objectManager The object manager.
     * @param string|null   \$entityClass   The optional entity class.
     */
    public function __construct(\$objectManager, \$entityClass = null)
    {
        \$this->objectManager = \$objectManager;
        \$this->entityClass   = \$entityClass;
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

    /**
     * Returns the name of the entity class that is cleared, or null if all are cleared.
     *
     * @return string|null
     */
    public function getEntityClass()
    {
        return \$this->entityClass;
    }

    /**
     * Returns whether this event clears all entities.
     *
     * @return bool
     */
    public function clearsAllEntities()
    {
        return \$this->entityClass === null;
    }
}

class_exists(\\Doctrine\\Common\\Persistence\\Event\\OnClearEventArgs::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/Event/OnClearEventArgs.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Event\\OnClearEventArgs.php");
    }
}
