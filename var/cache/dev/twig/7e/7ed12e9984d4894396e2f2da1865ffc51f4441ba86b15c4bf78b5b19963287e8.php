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

/* @app/vendor/symfony/stopwatch/StopwatchPeriod.php */
class __TwigTemplate_0379b06e4c0f3ac228a16eae1c425583cdb261b5f24f4a82a45578023b60f5ce extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/stopwatch/StopwatchPeriod.php"));

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
 * Represents an Period for an Event.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StopwatchPeriod
{
    private \$start;
    private \$end;
    private \$memory;

    /**
     * @param int|float \$start         The relative time of the start of the period (in milliseconds)
     * @param int|float \$end           The relative time of the end of the period (in milliseconds)
     * @param bool      \$morePrecision If true, time is stored as float to keep the original microsecond precision
     */
    public function __construct(\$start, \$end, bool \$morePrecision = false)
    {
        \$this->start = \$morePrecision ? (float) \$start : (int) \$start;
        \$this->end = \$morePrecision ? (float) \$end : (int) \$end;
        \$this->memory = memory_get_usage(true);
    }

    /**
     * Gets the relative time of the start of the period.
     *
     * @return int|float The time (in milliseconds)
     */
    public function getStartTime()
    {
        return \$this->start;
    }

    /**
     * Gets the relative time of the end of the period.
     *
     * @return int|float The time (in milliseconds)
     */
    public function getEndTime()
    {
        return \$this->end;
    }

    /**
     * Gets the time spent in this period.
     *
     * @return int|float The period duration (in milliseconds)
     */
    public function getDuration()
    {
        return \$this->end - \$this->start;
    }

    /**
     * Gets the memory usage.
     *
     * @return int The memory usage (in bytes)
     */
    public function getMemory()
    {
        return \$this->memory;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/stopwatch/StopwatchPeriod.php";
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
 * Represents an Period for an Event.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StopwatchPeriod
{
    private \$start;
    private \$end;
    private \$memory;

    /**
     * @param int|float \$start         The relative time of the start of the period (in milliseconds)
     * @param int|float \$end           The relative time of the end of the period (in milliseconds)
     * @param bool      \$morePrecision If true, time is stored as float to keep the original microsecond precision
     */
    public function __construct(\$start, \$end, bool \$morePrecision = false)
    {
        \$this->start = \$morePrecision ? (float) \$start : (int) \$start;
        \$this->end = \$morePrecision ? (float) \$end : (int) \$end;
        \$this->memory = memory_get_usage(true);
    }

    /**
     * Gets the relative time of the start of the period.
     *
     * @return int|float The time (in milliseconds)
     */
    public function getStartTime()
    {
        return \$this->start;
    }

    /**
     * Gets the relative time of the end of the period.
     *
     * @return int|float The time (in milliseconds)
     */
    public function getEndTime()
    {
        return \$this->end;
    }

    /**
     * Gets the time spent in this period.
     *
     * @return int|float The period duration (in milliseconds)
     */
    public function getDuration()
    {
        return \$this->end - \$this->start;
    }

    /**
     * Gets the memory usage.
     *
     * @return int The memory usage (in bytes)
     */
    public function getMemory()
    {
        return \$this->memory;
    }
}
", "@app/vendor/symfony/stopwatch/StopwatchPeriod.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\stopwatch\\StopwatchPeriod.php");
    }
}
