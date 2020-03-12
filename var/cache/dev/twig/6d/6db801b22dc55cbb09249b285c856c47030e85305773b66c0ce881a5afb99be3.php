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

/* @app/vendor/symfony/console/Helper/ProcessHelper.php */
class __TwigTemplate_26aba888d9cf107e64f014bab543bde15a13f765139087fffa413042c993c554 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Helper/ProcessHelper.php"));

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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Process\\Exception\\ProcessFailedException;
use Symfony\\Component\\Process\\Process;

/**
 * The ProcessHelper class provides helpers to run external processes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class ProcessHelper extends Helper
{
    /**
     * Runs an external process.
     *
     * @param array|Process \$cmd      An instance of Process or an array of the command and arguments
     * @param callable|null \$callback A PHP callback to run whenever there is some
     *                                output available on STDOUT or STDERR
     *
     * @return Process The process that ran
     */
    public function run(OutputInterface \$output, \$cmd, string \$error = null, callable \$callback = null, int \$verbosity = OutputInterface::VERBOSITY_VERY_VERBOSE): Process
    {
        if (\$output instanceof ConsoleOutputInterface) {
            \$output = \$output->getErrorOutput();
        }

        \$formatter = \$this->getHelperSet()->get('debug_formatter');

        if (\$cmd instanceof Process) {
            \$cmd = [\$cmd];
        }

        if (!\\is_array(\$cmd)) {
            throw new \\TypeError(sprintf('The \"command\" argument of \"%s()\" must be an array or a \"%s\" instance, \"%s\" given.', __METHOD__, Process::class, \\is_object(\$cmd) ? \\get_class(\$cmd) : \\gettype(\$cmd)));
        }

        if (\\is_string(\$cmd[0] ?? null)) {
            \$process = new Process(\$cmd);
            \$cmd = [];
        } elseif ((\$cmd[0] ?? null) instanceof Process) {
            \$process = \$cmd[0];
            unset(\$cmd[0]);
        } else {
            throw new \\InvalidArgumentException(sprintf('Invalid command provided to \"%s()\": the command should be an array whose first element is either the path to the binary to run or a \"Process\" object.', __METHOD__));
        }

        if (\$verbosity <= \$output->getVerbosity()) {
            \$output->write(\$formatter->start(spl_object_hash(\$process), \$this->escapeString(\$process->getCommandLine())));
        }

        if (\$output->isDebug()) {
            \$callback = \$this->wrapCallback(\$output, \$process, \$callback);
        }

        \$process->run(\$callback, \$cmd);

        if (\$verbosity <= \$output->getVerbosity()) {
            \$message = \$process->isSuccessful() ? 'Command ran successfully' : sprintf('%s Command did not run successfully', \$process->getExitCode());
            \$output->write(\$formatter->stop(spl_object_hash(\$process), \$message, \$process->isSuccessful()));
        }

        if (!\$process->isSuccessful() && null !== \$error) {
            \$output->writeln(sprintf('<error>%s</error>', \$this->escapeString(\$error)));
        }

        return \$process;
    }

    /**
     * Runs the process.
     *
     * This is identical to run() except that an exception is thrown if the process
     * exits with a non-zero exit code.
     *
     * @param string|Process \$cmd      An instance of Process or a command to run
     * @param callable|null  \$callback A PHP callback to run whenever there is some
     *                                 output available on STDOUT or STDERR
     *
     * @return Process The process that ran
     *
     * @throws ProcessFailedException
     *
     * @see run()
     */
    public function mustRun(OutputInterface \$output, \$cmd, string \$error = null, callable \$callback = null): Process
    {
        \$process = \$this->run(\$output, \$cmd, \$error, \$callback);

        if (!\$process->isSuccessful()) {
            throw new ProcessFailedException(\$process);
        }

        return \$process;
    }

    /**
     * Wraps a Process callback to add debugging output.
     */
    public function wrapCallback(OutputInterface \$output, Process \$process, callable \$callback = null): callable
    {
        if (\$output instanceof ConsoleOutputInterface) {
            \$output = \$output->getErrorOutput();
        }

        \$formatter = \$this->getHelperSet()->get('debug_formatter');

        return function (\$type, \$buffer) use (\$output, \$process, \$callback, \$formatter) {
            \$output->write(\$formatter->progress(spl_object_hash(\$process), \$this->escapeString(\$buffer), Process::ERR === \$type));

            if (null !== \$callback) {
                \$callback(\$type, \$buffer);
            }
        };
    }

    private function escapeString(string \$str): string
    {
        return str_replace('<', '\\\\<', \$str);
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'process';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Helper/ProcessHelper.php";
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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Process\\Exception\\ProcessFailedException;
use Symfony\\Component\\Process\\Process;

/**
 * The ProcessHelper class provides helpers to run external processes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class ProcessHelper extends Helper
{
    /**
     * Runs an external process.
     *
     * @param array|Process \$cmd      An instance of Process or an array of the command and arguments
     * @param callable|null \$callback A PHP callback to run whenever there is some
     *                                output available on STDOUT or STDERR
     *
     * @return Process The process that ran
     */
    public function run(OutputInterface \$output, \$cmd, string \$error = null, callable \$callback = null, int \$verbosity = OutputInterface::VERBOSITY_VERY_VERBOSE): Process
    {
        if (\$output instanceof ConsoleOutputInterface) {
            \$output = \$output->getErrorOutput();
        }

        \$formatter = \$this->getHelperSet()->get('debug_formatter');

        if (\$cmd instanceof Process) {
            \$cmd = [\$cmd];
        }

        if (!\\is_array(\$cmd)) {
            throw new \\TypeError(sprintf('The \"command\" argument of \"%s()\" must be an array or a \"%s\" instance, \"%s\" given.', __METHOD__, Process::class, \\is_object(\$cmd) ? \\get_class(\$cmd) : \\gettype(\$cmd)));
        }

        if (\\is_string(\$cmd[0] ?? null)) {
            \$process = new Process(\$cmd);
            \$cmd = [];
        } elseif ((\$cmd[0] ?? null) instanceof Process) {
            \$process = \$cmd[0];
            unset(\$cmd[0]);
        } else {
            throw new \\InvalidArgumentException(sprintf('Invalid command provided to \"%s()\": the command should be an array whose first element is either the path to the binary to run or a \"Process\" object.', __METHOD__));
        }

        if (\$verbosity <= \$output->getVerbosity()) {
            \$output->write(\$formatter->start(spl_object_hash(\$process), \$this->escapeString(\$process->getCommandLine())));
        }

        if (\$output->isDebug()) {
            \$callback = \$this->wrapCallback(\$output, \$process, \$callback);
        }

        \$process->run(\$callback, \$cmd);

        if (\$verbosity <= \$output->getVerbosity()) {
            \$message = \$process->isSuccessful() ? 'Command ran successfully' : sprintf('%s Command did not run successfully', \$process->getExitCode());
            \$output->write(\$formatter->stop(spl_object_hash(\$process), \$message, \$process->isSuccessful()));
        }

        if (!\$process->isSuccessful() && null !== \$error) {
            \$output->writeln(sprintf('<error>%s</error>', \$this->escapeString(\$error)));
        }

        return \$process;
    }

    /**
     * Runs the process.
     *
     * This is identical to run() except that an exception is thrown if the process
     * exits with a non-zero exit code.
     *
     * @param string|Process \$cmd      An instance of Process or a command to run
     * @param callable|null  \$callback A PHP callback to run whenever there is some
     *                                 output available on STDOUT or STDERR
     *
     * @return Process The process that ran
     *
     * @throws ProcessFailedException
     *
     * @see run()
     */
    public function mustRun(OutputInterface \$output, \$cmd, string \$error = null, callable \$callback = null): Process
    {
        \$process = \$this->run(\$output, \$cmd, \$error, \$callback);

        if (!\$process->isSuccessful()) {
            throw new ProcessFailedException(\$process);
        }

        return \$process;
    }

    /**
     * Wraps a Process callback to add debugging output.
     */
    public function wrapCallback(OutputInterface \$output, Process \$process, callable \$callback = null): callable
    {
        if (\$output instanceof ConsoleOutputInterface) {
            \$output = \$output->getErrorOutput();
        }

        \$formatter = \$this->getHelperSet()->get('debug_formatter');

        return function (\$type, \$buffer) use (\$output, \$process, \$callback, \$formatter) {
            \$output->write(\$formatter->progress(spl_object_hash(\$process), \$this->escapeString(\$buffer), Process::ERR === \$type));

            if (null !== \$callback) {
                \$callback(\$type, \$buffer);
            }
        };
    }

    private function escapeString(string \$str): string
    {
        return str_replace('<', '\\\\<', \$str);
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'process';
    }
}
", "@app/vendor/symfony/console/Helper/ProcessHelper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Helper\\ProcessHelper.php");
    }
}
