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

/* @app/vendor/psr/log/Psr/Log/LoggerInterface.php */
class __TwigTemplate_93855f5c219d285cd69e4a5245edb725b7d9dd3ea4391198dcbdb2589eeeae65 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/psr/log/Psr/Log/LoggerInterface.php"));

        // line 1
        echo "<?php

namespace Psr\\Log;

/**
 * Describes a logger instance.
 *
 * The message MUST be a string or object implementing __toString().
 *
 * The message MAY contain placeholders in the form: {foo} where foo
 * will be replaced by the context data in key \"foo\".
 *
 * The context array can contain arbitrary data. The only assumption that
 * can be made by implementors is that if an Exception instance is given
 * to produce a stack trace, it MUST be in a key named \"exception\".
 *
 * See https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md
 * for the full interface specification.
 */
interface LoggerInterface
{
    /**
     * System is unusable.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function emergency(\$message, array \$context = array());

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
    public function alert(\$message, array \$context = array());

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
    public function critical(\$message, array \$context = array());

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function error(\$message, array \$context = array());

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
    public function warning(\$message, array \$context = array());

    /**
     * Normal but significant events.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function notice(\$message, array \$context = array());

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
    public function info(\$message, array \$context = array());

    /**
     * Detailed debug information.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function debug(\$message, array \$context = array());

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed  \$level
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     *
     * @throws \\Psr\\Log\\InvalidArgumentException
     */
    public function log(\$level, \$message, array \$context = array());
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/psr/log/Psr/Log/LoggerInterface.php";
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
 * Describes a logger instance.
 *
 * The message MUST be a string or object implementing __toString().
 *
 * The message MAY contain placeholders in the form: {foo} where foo
 * will be replaced by the context data in key \"foo\".
 *
 * The context array can contain arbitrary data. The only assumption that
 * can be made by implementors is that if an Exception instance is given
 * to produce a stack trace, it MUST be in a key named \"exception\".
 *
 * See https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md
 * for the full interface specification.
 */
interface LoggerInterface
{
    /**
     * System is unusable.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function emergency(\$message, array \$context = array());

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
    public function alert(\$message, array \$context = array());

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
    public function critical(\$message, array \$context = array());

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function error(\$message, array \$context = array());

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
    public function warning(\$message, array \$context = array());

    /**
     * Normal but significant events.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function notice(\$message, array \$context = array());

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
    public function info(\$message, array \$context = array());

    /**
     * Detailed debug information.
     *
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     */
    public function debug(\$message, array \$context = array());

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed  \$level
     * @param string \$message
     * @param array  \$context
     *
     * @return void
     *
     * @throws \\Psr\\Log\\InvalidArgumentException
     */
    public function log(\$level, \$message, array \$context = array());
}
", "@app/vendor/psr/log/Psr/Log/LoggerInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\psr\\log\\Psr\\Log\\LoggerInterface.php");
    }
}
