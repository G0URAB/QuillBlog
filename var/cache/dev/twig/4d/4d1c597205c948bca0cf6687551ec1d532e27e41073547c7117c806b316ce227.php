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

/* @app/vendor/symfony/console/EventListener/ErrorListener.php */
class __TwigTemplate_6210e7932f14b2de96bfc94860e91dffad1b10a795f1fa259835a7702c64f749 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/EventListener/ErrorListener.php"));

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

namespace Symfony\\Component\\Console\\EventListener;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleErrorEvent;
use Symfony\\Component\\Console\\Event\\ConsoleEvent;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

/**
 * @author James Halsall <james.t.halsall@googlemail.com>
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class ErrorListener implements EventSubscriberInterface
{
    private \$logger;

    public function __construct(LoggerInterface \$logger = null)
    {
        \$this->logger = \$logger;
    }

    public function onConsoleError(ConsoleErrorEvent \$event)
    {
        if (null === \$this->logger) {
            return;
        }

        \$error = \$event->getError();

        if (!\$inputString = \$this->getInputString(\$event)) {
            \$this->logger->error('An error occurred while using the console. Message: \"{message}\"', ['exception' => \$error, 'message' => \$error->getMessage()]);

            return;
        }

        \$this->logger->error('Error thrown while running command \"{command}\". Message: \"{message}\"', ['exception' => \$error, 'command' => \$inputString, 'message' => \$error->getMessage()]);
    }

    public function onConsoleTerminate(ConsoleTerminateEvent \$event)
    {
        if (null === \$this->logger) {
            return;
        }

        \$exitCode = \$event->getExitCode();

        if (0 === \$exitCode) {
            return;
        }

        if (!\$inputString = \$this->getInputString(\$event)) {
            \$this->logger->debug('The console exited with code \"{code}\"', ['code' => \$exitCode]);

            return;
        }

        \$this->logger->debug('Command \"{command}\" exited with code \"{code}\"', ['command' => \$inputString, 'code' => \$exitCode]);
    }

    public static function getSubscribedEvents()
    {
        return [
            ConsoleEvents::ERROR => ['onConsoleError', -128],
            ConsoleEvents::TERMINATE => ['onConsoleTerminate', -128],
        ];
    }

    private static function getInputString(ConsoleEvent \$event): ?string
    {
        \$commandName = \$event->getCommand() ? \$event->getCommand()->getName() : null;
        \$input = \$event->getInput();

        if (method_exists(\$input, '__toString')) {
            if (\$commandName) {
                return str_replace([\"'\$commandName'\", \"\\\"\$commandName\\\"\"], \$commandName, (string) \$input);
            }

            return (string) \$input;
        }

        return \$commandName;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/EventListener/ErrorListener.php";
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

namespace Symfony\\Component\\Console\\EventListener;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleErrorEvent;
use Symfony\\Component\\Console\\Event\\ConsoleEvent;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

/**
 * @author James Halsall <james.t.halsall@googlemail.com>
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class ErrorListener implements EventSubscriberInterface
{
    private \$logger;

    public function __construct(LoggerInterface \$logger = null)
    {
        \$this->logger = \$logger;
    }

    public function onConsoleError(ConsoleErrorEvent \$event)
    {
        if (null === \$this->logger) {
            return;
        }

        \$error = \$event->getError();

        if (!\$inputString = \$this->getInputString(\$event)) {
            \$this->logger->error('An error occurred while using the console. Message: \"{message}\"', ['exception' => \$error, 'message' => \$error->getMessage()]);

            return;
        }

        \$this->logger->error('Error thrown while running command \"{command}\". Message: \"{message}\"', ['exception' => \$error, 'command' => \$inputString, 'message' => \$error->getMessage()]);
    }

    public function onConsoleTerminate(ConsoleTerminateEvent \$event)
    {
        if (null === \$this->logger) {
            return;
        }

        \$exitCode = \$event->getExitCode();

        if (0 === \$exitCode) {
            return;
        }

        if (!\$inputString = \$this->getInputString(\$event)) {
            \$this->logger->debug('The console exited with code \"{code}\"', ['code' => \$exitCode]);

            return;
        }

        \$this->logger->debug('Command \"{command}\" exited with code \"{code}\"', ['command' => \$inputString, 'code' => \$exitCode]);
    }

    public static function getSubscribedEvents()
    {
        return [
            ConsoleEvents::ERROR => ['onConsoleError', -128],
            ConsoleEvents::TERMINATE => ['onConsoleTerminate', -128],
        ];
    }

    private static function getInputString(ConsoleEvent \$event): ?string
    {
        \$commandName = \$event->getCommand() ? \$event->getCommand()->getName() : null;
        \$input = \$event->getInput();

        if (method_exists(\$input, '__toString')) {
            if (\$commandName) {
                return str_replace([\"'\$commandName'\", \"\\\"\$commandName\\\"\"], \$commandName, (string) \$input);
            }

            return (string) \$input;
        }

        return \$commandName;
    }
}
", "@app/vendor/symfony/console/EventListener/ErrorListener.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\EventListener\\ErrorListener.php");
    }
}
