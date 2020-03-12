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

/* @app/vendor/doctrine/event-manager/lib/Doctrine/Common/EventArgs.php */
class __TwigTemplate_61450c574fbfe8afe1abfbec55fa7fd93eb793349cc51cd9fd0f0330eb9b38b2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/event-manager/lib/Doctrine/Common/EventArgs.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Common;

/**
 * EventArgs is the base class for classes containing event data.
 *
 * This class contains no event data. It is used by events that do not pass state
 * information to an event handler when an event is raised. The single empty EventArgs
 * instance can be obtained through {@link getEmptyInstance}.
 */
class EventArgs
{
    /**
     * Single instance of EventArgs.
     *
     * @var EventArgs
     */
    private static \$_emptyEventArgsInstance;

    /**
     * Gets the single, empty and immutable EventArgs instance.
     *
     * This instance will be used when events are dispatched without any parameter,
     * like this: EventManager::dispatchEvent('eventname');
     *
     * The benefit from this is that only one empty instance is instantiated and shared
     * (otherwise there would be instances for every dispatched in the abovementioned form).
     *
     * @link https://msdn.microsoft.com/en-us/library/system.eventargs.aspx
     * @see EventManager::dispatchEvent
     *
     * @return EventArgs
     */
    public static function getEmptyInstance()
    {
        if (! self::\$_emptyEventArgsInstance) {
            self::\$_emptyEventArgsInstance = new EventArgs();
        }

        return self::\$_emptyEventArgsInstance;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/event-manager/lib/Doctrine/Common/EventArgs.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Common;

/**
 * EventArgs is the base class for classes containing event data.
 *
 * This class contains no event data. It is used by events that do not pass state
 * information to an event handler when an event is raised. The single empty EventArgs
 * instance can be obtained through {@link getEmptyInstance}.
 */
class EventArgs
{
    /**
     * Single instance of EventArgs.
     *
     * @var EventArgs
     */
    private static \$_emptyEventArgsInstance;

    /**
     * Gets the single, empty and immutable EventArgs instance.
     *
     * This instance will be used when events are dispatched without any parameter,
     * like this: EventManager::dispatchEvent('eventname');
     *
     * The benefit from this is that only one empty instance is instantiated and shared
     * (otherwise there would be instances for every dispatched in the abovementioned form).
     *
     * @link https://msdn.microsoft.com/en-us/library/system.eventargs.aspx
     * @see EventManager::dispatchEvent
     *
     * @return EventArgs
     */
    public static function getEmptyInstance()
    {
        if (! self::\$_emptyEventArgsInstance) {
            self::\$_emptyEventArgsInstance = new EventArgs();
        }

        return self::\$_emptyEventArgsInstance;
    }
}
", "@app/vendor/doctrine/event-manager/lib/Doctrine/Common/EventArgs.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventArgs.php");
    }
}
