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

/* @app/vendor/symfony/stopwatch/StopwatchEvent.php */
class __TwigTemplate_14da4136b3367e4b39e920c42a099db86b20c87b290ca35fd801f2091c3f5a78 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/stopwatch/StopwatchEvent.php"));

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
 * Represents an Event managed by Stopwatch.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StopwatchEvent
{
    /**
     * @var StopwatchPeriod[]
     */
    private \$periods = [];

    /**
     * @var float
     */
    private \$origin;

    /**
     * @var string
     */
    private \$category;

    /**
     * @var bool
     */
    private \$morePrecision;

    /**
     * @var float[]
     */
    private \$started = [];

    /**
     * @param float       \$origin        The origin time in milliseconds
     * @param string|null \$category      The event category or null to use the default
     * @param bool        \$morePrecision If true, time is stored as float to keep the original microsecond precision
     *
     * @throws \\InvalidArgumentException When the raw time is not valid
     */
    public function __construct(float \$origin, string \$category = null, bool \$morePrecision = false)
    {
        \$this->origin = \$this->formatTime(\$origin);
        \$this->category = \\is_string(\$category) ? \$category : 'default';
        \$this->morePrecision = \$morePrecision;
    }

    /**
     * Gets the category.
     *
     * @return string The category
     */
    public function getCategory()
    {
        return \$this->category;
    }

    /**
     * Gets the origin.
     *
     * @return float The origin in milliseconds
     */
    public function getOrigin()
    {
        return \$this->origin;
    }

    /**
     * Starts a new event period.
     *
     * @return \$this
     */
    public function start()
    {
        \$this->started[] = \$this->getNow();

        return \$this;
    }

    /**
     * Stops the last started event period.
     *
     * @return \$this
     *
     * @throws \\LogicException When stop() is called without a matching call to start()
     */
    public function stop()
    {
        if (!\\count(\$this->started)) {
            throw new \\LogicException('stop() called but start() has not been called before.');
        }

        \$this->periods[] = new StopwatchPeriod(array_pop(\$this->started), \$this->getNow(), \$this->morePrecision);

        return \$this;
    }

    /**
     * Checks if the event was started.
     *
     * @return bool
     */
    public function isStarted()
    {
        return !empty(\$this->started);
    }

    /**
     * Stops the current period and then starts a new one.
     *
     * @return \$this
     */
    public function lap()
    {
        return \$this->stop()->start();
    }

    /**
     * Stops all non already stopped periods.
     */
    public function ensureStopped()
    {
        while (\\count(\$this->started)) {
            \$this->stop();
        }
    }

    /**
     * Gets all event periods.
     *
     * @return StopwatchPeriod[] An array of StopwatchPeriod instances
     */
    public function getPeriods()
    {
        return \$this->periods;
    }

    /**
     * Gets the relative time of the start of the first period.
     *
     * @return int|float The time (in milliseconds)
     */
    public function getStartTime()
    {
        if (isset(\$this->periods[0])) {
            return \$this->periods[0]->getStartTime();
        }

        if (\$this->started) {
            return \$this->started[0];
        }

        return 0;
    }

    /**
     * Gets the relative time of the end of the last period.
     *
     * @return int|float The time (in milliseconds)
     */
    public function getEndTime()
    {
        \$count = \\count(\$this->periods);

        return \$count ? \$this->periods[\$count - 1]->getEndTime() : 0;
    }

    /**
     * Gets the duration of the events (including all periods).
     *
     * @return int|float The duration (in milliseconds)
     */
    public function getDuration()
    {
        \$periods = \$this->periods;
        \$left = \\count(\$this->started);

        for (\$i = \$left - 1; \$i >= 0; --\$i) {
            \$periods[] = new StopwatchPeriod(\$this->started[\$i], \$this->getNow(), \$this->morePrecision);
        }

        \$total = 0;
        foreach (\$periods as \$period) {
            \$total += \$period->getDuration();
        }

        return \$total;
    }

    /**
     * Gets the max memory usage of all periods.
     *
     * @return int The memory usage (in bytes)
     */
    public function getMemory()
    {
        \$memory = 0;
        foreach (\$this->periods as \$period) {
            if (\$period->getMemory() > \$memory) {
                \$memory = \$period->getMemory();
            }
        }

        return \$memory;
    }

    /**
     * Return the current time relative to origin.
     *
     * @return float Time in ms
     */
    protected function getNow()
    {
        return \$this->formatTime(microtime(true) * 1000 - \$this->origin);
    }

    /**
     * Formats a time.
     *
     * @throws \\InvalidArgumentException When the raw time is not valid
     */
    private function formatTime(float \$time): float
    {
        return round(\$time, 1);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s: %.2F MiB - %d ms', \$this->getCategory(), \$this->getMemory() / 1024 / 1024, \$this->getDuration());
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/stopwatch/StopwatchEvent.php";
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
 * Represents an Event managed by Stopwatch.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StopwatchEvent
{
    /**
     * @var StopwatchPeriod[]
     */
    private \$periods = [];

    /**
     * @var float
     */
    private \$origin;

    /**
     * @var string
     */
    private \$category;

    /**
     * @var bool
     */
    private \$morePrecision;

    /**
     * @var float[]
     */
    private \$started = [];

    /**
     * @param float       \$origin        The origin time in milliseconds
     * @param string|null \$category      The event category or null to use the default
     * @param bool        \$morePrecision If true, time is stored as float to keep the original microsecond precision
     *
     * @throws \\InvalidArgumentException When the raw time is not valid
     */
    public function __construct(float \$origin, string \$category = null, bool \$morePrecision = false)
    {
        \$this->origin = \$this->formatTime(\$origin);
        \$this->category = \\is_string(\$category) ? \$category : 'default';
        \$this->morePrecision = \$morePrecision;
    }

    /**
     * Gets the category.
     *
     * @return string The category
     */
    public function getCategory()
    {
        return \$this->category;
    }

    /**
     * Gets the origin.
     *
     * @return float The origin in milliseconds
     */
    public function getOrigin()
    {
        return \$this->origin;
    }

    /**
     * Starts a new event period.
     *
     * @return \$this
     */
    public function start()
    {
        \$this->started[] = \$this->getNow();

        return \$this;
    }

    /**
     * Stops the last started event period.
     *
     * @return \$this
     *
     * @throws \\LogicException When stop() is called without a matching call to start()
     */
    public function stop()
    {
        if (!\\count(\$this->started)) {
            throw new \\LogicException('stop() called but start() has not been called before.');
        }

        \$this->periods[] = new StopwatchPeriod(array_pop(\$this->started), \$this->getNow(), \$this->morePrecision);

        return \$this;
    }

    /**
     * Checks if the event was started.
     *
     * @return bool
     */
    public function isStarted()
    {
        return !empty(\$this->started);
    }

    /**
     * Stops the current period and then starts a new one.
     *
     * @return \$this
     */
    public function lap()
    {
        return \$this->stop()->start();
    }

    /**
     * Stops all non already stopped periods.
     */
    public function ensureStopped()
    {
        while (\\count(\$this->started)) {
            \$this->stop();
        }
    }

    /**
     * Gets all event periods.
     *
     * @return StopwatchPeriod[] An array of StopwatchPeriod instances
     */
    public function getPeriods()
    {
        return \$this->periods;
    }

    /**
     * Gets the relative time of the start of the first period.
     *
     * @return int|float The time (in milliseconds)
     */
    public function getStartTime()
    {
        if (isset(\$this->periods[0])) {
            return \$this->periods[0]->getStartTime();
        }

        if (\$this->started) {
            return \$this->started[0];
        }

        return 0;
    }

    /**
     * Gets the relative time of the end of the last period.
     *
     * @return int|float The time (in milliseconds)
     */
    public function getEndTime()
    {
        \$count = \\count(\$this->periods);

        return \$count ? \$this->periods[\$count - 1]->getEndTime() : 0;
    }

    /**
     * Gets the duration of the events (including all periods).
     *
     * @return int|float The duration (in milliseconds)
     */
    public function getDuration()
    {
        \$periods = \$this->periods;
        \$left = \\count(\$this->started);

        for (\$i = \$left - 1; \$i >= 0; --\$i) {
            \$periods[] = new StopwatchPeriod(\$this->started[\$i], \$this->getNow(), \$this->morePrecision);
        }

        \$total = 0;
        foreach (\$periods as \$period) {
            \$total += \$period->getDuration();
        }

        return \$total;
    }

    /**
     * Gets the max memory usage of all periods.
     *
     * @return int The memory usage (in bytes)
     */
    public function getMemory()
    {
        \$memory = 0;
        foreach (\$this->periods as \$period) {
            if (\$period->getMemory() > \$memory) {
                \$memory = \$period->getMemory();
            }
        }

        return \$memory;
    }

    /**
     * Return the current time relative to origin.
     *
     * @return float Time in ms
     */
    protected function getNow()
    {
        return \$this->formatTime(microtime(true) * 1000 - \$this->origin);
    }

    /**
     * Formats a time.
     *
     * @throws \\InvalidArgumentException When the raw time is not valid
     */
    private function formatTime(float \$time): float
    {
        return round(\$time, 1);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s: %.2F MiB - %d ms', \$this->getCategory(), \$this->getMemory() / 1024 / 1024, \$this->getDuration());
    }
}
", "@app/vendor/symfony/stopwatch/StopwatchEvent.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\stopwatch\\StopwatchEvent.php");
    }
}
