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

/* @app/vendor/symfony/stopwatch/Section.php */
class __TwigTemplate_04fac50e3de454c6ce43c8292b5775ee485ed375d0c1d352ec12f2db2bd2e09a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/stopwatch/Section.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Stopwatch;

/**
 * Stopwatch section.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Section
{
    /**
     * @var StopwatchEvent[]
     */
    private \$events = [];

    /**
     * @var float|null
     */
    private \$origin;

    /**
     * @var bool
     */
    private \$morePrecision;

    /**
     * @var string
     */
    private \$id;

    /**
     * @var Section[]
     */
    private \$children = [];

    /**
     * @param float|null \$origin        Set the origin of the events in this section, use null to set their origin to their start time
     * @param bool       \$morePrecision If true, time is stored as float to keep the original microsecond precision
     */
    public function __construct(float \$origin = null, bool \$morePrecision = false)
    {
        \$this->origin = \$origin;
        \$this->morePrecision = \$morePrecision;
    }

    /**
     * Returns the child section.
     *
     * @return self|null The child section or null when none found
     */
    public function get(string \$id)
    {
        foreach (\$this->children as \$child) {
            if (\$id === \$child->getId()) {
                return \$child;
            }
        }

        return null;
    }

    /**
     * Creates or re-opens a child section.
     *
     * @param string|null \$id Null to create a new section, the identifier to re-open an existing one
     *
     * @return self
     */
    public function open(?string \$id)
    {
        if (null === \$id || null === \$session = \$this->get(\$id)) {
            \$session = \$this->children[] = new self(microtime(true) * 1000, \$this->morePrecision);
        }

        return \$session;
    }

    /**
     * @return string The identifier of the section
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Sets the session identifier.
     *
     * @return \$this
     */
    public function setId(string \$id)
    {
        \$this->id = \$id;

        return \$this;
    }

    /**
     * Starts an event.
     *
     * @return StopwatchEvent The event
     */
    public function startEvent(string \$name, ?string \$category)
    {
        if (!isset(\$this->events[\$name])) {
            \$this->events[\$name] = new StopwatchEvent(\$this->origin ?: microtime(true) * 1000, \$category, \$this->morePrecision);
        }

        return \$this->events[\$name]->start();
    }

    /**
     * Checks if the event was started.
     *
     * @return bool
     */
    public function isEventStarted(string \$name)
    {
        return isset(\$this->events[\$name]) && \$this->events[\$name]->isStarted();
    }

    /**
     * Stops an event.
     *
     * @return StopwatchEvent The event
     *
     * @throws \\LogicException When the event has not been started
     */
    public function stopEvent(string \$name)
    {
        if (!isset(\$this->events[\$name])) {
            throw new \\LogicException(sprintf('Event \"%s\" is not started.', \$name));
        }

        return \$this->events[\$name]->stop();
    }

    /**
     * Stops then restarts an event.
     *
     * @return StopwatchEvent The event
     *
     * @throws \\LogicException When the event has not been started
     */
    public function lap(string \$name)
    {
        return \$this->stopEvent(\$name)->start();
    }

    /**
     * Returns a specific event by name.
     *
     * @return StopwatchEvent The event
     *
     * @throws \\LogicException When the event is not known
     */
    public function getEvent(string \$name)
    {
        if (!isset(\$this->events[\$name])) {
            throw new \\LogicException(sprintf('Event \"%s\" is not known.', \$name));
        }

        return \$this->events[\$name];
    }

    /**
     * Returns the events from this section.
     *
     * @return StopwatchEvent[] An array of StopwatchEvent instances
     */
    public function getEvents()
    {
        return \$this->events;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/stopwatch/Section.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Stopwatch;

/**
 * Stopwatch section.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Section
{
    /**
     * @var StopwatchEvent[]
     */
    private \$events = [];

    /**
     * @var float|null
     */
    private \$origin;

    /**
     * @var bool
     */
    private \$morePrecision;

    /**
     * @var string
     */
    private \$id;

    /**
     * @var Section[]
     */
    private \$children = [];

    /**
     * @param float|null \$origin        Set the origin of the events in this section, use null to set their origin to their start time
     * @param bool       \$morePrecision If true, time is stored as float to keep the original microsecond precision
     */
    public function __construct(float \$origin = null, bool \$morePrecision = false)
    {
        \$this->origin = \$origin;
        \$this->morePrecision = \$morePrecision;
    }

    /**
     * Returns the child section.
     *
     * @return self|null The child section or null when none found
     */
    public function get(string \$id)
    {
        foreach (\$this->children as \$child) {
            if (\$id === \$child->getId()) {
                return \$child;
            }
        }

        return null;
    }

    /**
     * Creates or re-opens a child section.
     *
     * @param string|null \$id Null to create a new section, the identifier to re-open an existing one
     *
     * @return self
     */
    public function open(?string \$id)
    {
        if (null === \$id || null === \$session = \$this->get(\$id)) {
            \$session = \$this->children[] = new self(microtime(true) * 1000, \$this->morePrecision);
        }

        return \$session;
    }

    /**
     * @return string The identifier of the section
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Sets the session identifier.
     *
     * @return \$this
     */
    public function setId(string \$id)
    {
        \$this->id = \$id;

        return \$this;
    }

    /**
     * Starts an event.
     *
     * @return StopwatchEvent The event
     */
    public function startEvent(string \$name, ?string \$category)
    {
        if (!isset(\$this->events[\$name])) {
            \$this->events[\$name] = new StopwatchEvent(\$this->origin ?: microtime(true) * 1000, \$category, \$this->morePrecision);
        }

        return \$this->events[\$name]->start();
    }

    /**
     * Checks if the event was started.
     *
     * @return bool
     */
    public function isEventStarted(string \$name)
    {
        return isset(\$this->events[\$name]) && \$this->events[\$name]->isStarted();
    }

    /**
     * Stops an event.
     *
     * @return StopwatchEvent The event
     *
     * @throws \\LogicException When the event has not been started
     */
    public function stopEvent(string \$name)
    {
        if (!isset(\$this->events[\$name])) {
            throw new \\LogicException(sprintf('Event \"%s\" is not started.', \$name));
        }

        return \$this->events[\$name]->stop();
    }

    /**
     * Stops then restarts an event.
     *
     * @return StopwatchEvent The event
     *
     * @throws \\LogicException When the event has not been started
     */
    public function lap(string \$name)
    {
        return \$this->stopEvent(\$name)->start();
    }

    /**
     * Returns a specific event by name.
     *
     * @return StopwatchEvent The event
     *
     * @throws \\LogicException When the event is not known
     */
    public function getEvent(string \$name)
    {
        if (!isset(\$this->events[\$name])) {
            throw new \\LogicException(sprintf('Event \"%s\" is not known.', \$name));
        }

        return \$this->events[\$name];
    }

    /**
     * Returns the events from this section.
     *
     * @return StopwatchEvent[] An array of StopwatchEvent instances
     */
    public function getEvents()
    {
        return \$this->events;
    }
}
", "@app/vendor/symfony/stopwatch/Section.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\stopwatch\\Section.php");
    }
}
