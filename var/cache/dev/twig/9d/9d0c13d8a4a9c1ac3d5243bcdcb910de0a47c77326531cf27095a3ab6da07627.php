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

/* @app/vendor/psr/log/Psr/Log/AbstractLogger.php */
class __TwigTemplate_b0ed3cb27f47209de8f9b0472f01dd0c8e5f123b0f0cf5c84d31459057bee3f5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/psr/log/Psr/Log/AbstractLogger.php"));

        // line 1
        echo "<?php

namespace Psr\\Log;

/**
 * This is a simple Logger implementation that other Loggers can inherit from.
 *
 * It simply delegates all log-level-specific methods to the `log` method to
 * reduce boilerplate code that a simple Logger that does the same thing with
 * messages regardless of the error level has to implement.
 */
abstract class AbstractLogger implements LoggerInterface
{
    /**
     * System is unusable.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function emergency(\$message, array \$context = array())
    {
        \$this->log(LogLevel::EMERGENCY, \$message, \$context);
    }

    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function alert(\$message, array \$context = array())
    {
        \$this->log(LogLevel::ALERT, \$message, \$context);
    }

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function critical(\$message, array \$context = array())
    {
        \$this->log(LogLevel::CRITICAL, \$message, \$context);
    }

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function error(\$message, array \$context = array())
    {
        \$this->log(LogLevel::ERROR, \$message, \$context);
    }

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function warning(\$message, array \$context = array())
    {
        \$this->log(LogLevel::WARNING, \$message, \$context);
    }

    /**
     * Normal but significant events.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function notice(\$message, array \$context = array())
    {
        \$this->log(LogLevel::NOTICE, \$message, \$context);
    }

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function info(\$message, array \$context = array())
    {
        \$this->log(LogLevel::INFO, \$message, \$context);
    }

    /**
     * Detailed debug information.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function debug(\$message, array \$context = array())
    {
        \$this->log(LogLevel::DEBUG, \$message, \$context);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/psr/log/Psr/Log/AbstractLogger.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Psr\\Log;

/**
 * This is a simple Logger implementation that other Loggers can inherit from.
 *
 * It simply delegates all log-level-specific methods to the `log` method to
 * reduce boilerplate code that a simple Logger that does the same thing with
 * messages regardless of the error level has to implement.
 */
abstract class AbstractLogger implements LoggerInterface
{
    /**
     * System is unusable.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function emergency(\$message, array \$context = array())
    {
        \$this->log(LogLevel::EMERGENCY, \$message, \$context);
    }

    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function alert(\$message, array \$context = array())
    {
        \$this->log(LogLevel::ALERT, \$message, \$context);
    }

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function critical(\$message, array \$context = array())
    {
        \$this->log(LogLevel::CRITICAL, \$message, \$context);
    }

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function error(\$message, array \$context = array())
    {
        \$this->log(LogLevel::ERROR, \$message, \$context);
    }

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function warning(\$message, array \$context = array())
    {
        \$this->log(LogLevel::WARNING, \$message, \$context);
    }

    /**
     * Normal but significant events.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function notice(\$message, array \$context = array())
    {
        \$this->log(LogLevel::NOTICE, \$message, \$context);
    }

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function info(\$message, array \$context = array())
    {
        \$this->log(LogLevel::INFO, \$message, \$context);
    }

    /**
     * Detailed debug information.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function debug(\$message, array \$context = array())
    {
        \$this->log(LogLevel::DEBUG, \$message, \$context);
    }
}
", "@app/vendor/psr/log/Psr/Log/AbstractLogger.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\psr\\log\\Psr\\Log\\AbstractLogger.php");
    }
}
