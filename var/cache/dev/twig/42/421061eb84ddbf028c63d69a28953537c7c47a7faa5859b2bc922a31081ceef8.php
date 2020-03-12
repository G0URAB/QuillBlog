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

/* @app/vendor/symfony/flex/src/ScriptExecutor.php */
class __TwigTemplate_bc80b634151b29162e0a2988afcc45fe15b8f127bc31f4e9777d751f2f754eba extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/ScriptExecutor.php"));

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

namespace Symfony\\Flex;

use Composer\\Composer;
use Composer\\EventDispatcher\\ScriptExecutionException;
use Composer\\IO\\IOInterface;
use Composer\\Semver\\Constraint\\EmptyConstraint;
use Composer\\Util\\ProcessExecutor;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Output\\StreamOutput;
use Symfony\\Component\\Process\\PhpExecutableFinder;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ScriptExecutor
{
    private \$composer;
    private \$io;
    private \$options;
    private \$executor;

    public function __construct(Composer \$composer, IOInterface \$io, Options \$options, ProcessExecutor \$executor = null)
    {
        \$this->composer = \$composer;
        \$this->io = \$io;
        \$this->options = \$options;
        \$this->executor = \$executor ?: new ProcessExecutor();
    }

    /**
     * @throws ScriptExecutionException if the executed command returns a non-0 exit code
     */
    public function execute(string \$type, string \$cmd)
    {
        \$parsedCmd = \$this->options->expandTargetDir(\$cmd);
        if (null === \$expandedCmd = \$this->expandCmd(\$type, \$parsedCmd)) {
            return;
        }

        \$cmdOutput = new StreamOutput(fopen('php://temp', 'rw'), OutputInterface::VERBOSITY_VERBOSE, \$this->io->isDecorated());
        \$outputHandler = function (\$type, \$buffer) use (\$cmdOutput) {
            \$cmdOutput->write(\$buffer, false, OutputInterface::OUTPUT_RAW);
        };

        \$this->io->writeError(sprintf('Executing script %s', \$parsedCmd), \$this->io->isVerbose());
        \$exitCode = \$this->executor->execute(\$expandedCmd, \$outputHandler);

        \$code = 0 === \$exitCode ? ' <info>[OK]</>' : ' <error>[KO]</>';

        if (\$this->io->isVerbose()) {
            \$this->io->writeError(sprintf('Executed script %s %s', \$cmd, \$code));
        } else {
            \$this->io->writeError(\$code);
        }

        if (0 !== \$exitCode) {
            \$this->io->writeError(' <error>[KO]</>');
            \$this->io->writeError(sprintf('<error>Script %s returned with error code %s</>', \$cmd, \$exitCode));
            fseek(\$cmdOutput->getStream(), 0);
            foreach (explode(\"\\n\", stream_get_contents(\$cmdOutput->getStream())) as \$line) {
                \$this->io->writeError('!!  '.\$line);
            }

            throw new ScriptExecutionException(\$cmd, \$exitCode);
        }
    }

    private function expandCmd(string \$type, string \$cmd)
    {
        switch (\$type) {
            case 'symfony-cmd':
                return \$this->expandSymfonyCmd(\$cmd);
            case 'php-script':
                return \$this->expandPhpScript(\$cmd);
            case 'script':
                return \$cmd;
            default:
                throw new \\InvalidArgumentException(sprintf('Invalid symfony/flex auto-script in composer.json: \"%s\" is not a valid type of command.', \$type));
        }
    }

    private function expandSymfonyCmd(string \$cmd)
    {
        \$repo = \$this->composer->getRepositoryManager()->getLocalRepository();
        if (!\$repo->findPackage('symfony/console', new EmptyConstraint())) {
            \$this->io->writeError(sprintf('<warning>Skipping \"%s\" (needs symfony/console to run).</>', \$cmd));

            return null;
        }

        \$console = ProcessExecutor::escape(\$this->options->get('root-dir').'/'.\$this->options->get('bin-dir').'/console');
        if (\$this->io->isDecorated()) {
            \$console .= ' --ansi';
        }

        return \$this->expandPhpScript(\$console.' '.\$cmd);
    }

    private function expandPhpScript(string \$cmd): string
    {
        \$phpFinder = new PhpExecutableFinder();
        if (!\$php = \$phpFinder->find(false)) {
            throw new \\RuntimeException('The PHP executable could not be found, add it to your PATH and try again.');
        }

        \$arguments = \$phpFinder->findArguments();

        if (\$env = (string) (getenv('COMPOSER_ORIGINAL_INIS'))) {
            \$paths = explode(PATH_SEPARATOR, \$env);
            \$ini = array_shift(\$paths);
        } else {
            \$ini = php_ini_loaded_file();
        }

        if (\$ini) {
            \$arguments[] = '--php-ini='.\$ini;
        }

        \$phpArgs = implode(' ', array_map([ProcessExecutor::class, 'escape'], \$arguments));

        return ProcessExecutor::escape(\$php).(\$phpArgs ? ' '.\$phpArgs : '').' '.\$cmd;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/ScriptExecutor.php";
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

namespace Symfony\\Flex;

use Composer\\Composer;
use Composer\\EventDispatcher\\ScriptExecutionException;
use Composer\\IO\\IOInterface;
use Composer\\Semver\\Constraint\\EmptyConstraint;
use Composer\\Util\\ProcessExecutor;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Output\\StreamOutput;
use Symfony\\Component\\Process\\PhpExecutableFinder;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ScriptExecutor
{
    private \$composer;
    private \$io;
    private \$options;
    private \$executor;

    public function __construct(Composer \$composer, IOInterface \$io, Options \$options, ProcessExecutor \$executor = null)
    {
        \$this->composer = \$composer;
        \$this->io = \$io;
        \$this->options = \$options;
        \$this->executor = \$executor ?: new ProcessExecutor();
    }

    /**
     * @throws ScriptExecutionException if the executed command returns a non-0 exit code
     */
    public function execute(string \$type, string \$cmd)
    {
        \$parsedCmd = \$this->options->expandTargetDir(\$cmd);
        if (null === \$expandedCmd = \$this->expandCmd(\$type, \$parsedCmd)) {
            return;
        }

        \$cmdOutput = new StreamOutput(fopen('php://temp', 'rw'), OutputInterface::VERBOSITY_VERBOSE, \$this->io->isDecorated());
        \$outputHandler = function (\$type, \$buffer) use (\$cmdOutput) {
            \$cmdOutput->write(\$buffer, false, OutputInterface::OUTPUT_RAW);
        };

        \$this->io->writeError(sprintf('Executing script %s', \$parsedCmd), \$this->io->isVerbose());
        \$exitCode = \$this->executor->execute(\$expandedCmd, \$outputHandler);

        \$code = 0 === \$exitCode ? ' <info>[OK]</>' : ' <error>[KO]</>';

        if (\$this->io->isVerbose()) {
            \$this->io->writeError(sprintf('Executed script %s %s', \$cmd, \$code));
        } else {
            \$this->io->writeError(\$code);
        }

        if (0 !== \$exitCode) {
            \$this->io->writeError(' <error>[KO]</>');
            \$this->io->writeError(sprintf('<error>Script %s returned with error code %s</>', \$cmd, \$exitCode));
            fseek(\$cmdOutput->getStream(), 0);
            foreach (explode(\"\\n\", stream_get_contents(\$cmdOutput->getStream())) as \$line) {
                \$this->io->writeError('!!  '.\$line);
            }

            throw new ScriptExecutionException(\$cmd, \$exitCode);
        }
    }

    private function expandCmd(string \$type, string \$cmd)
    {
        switch (\$type) {
            case 'symfony-cmd':
                return \$this->expandSymfonyCmd(\$cmd);
            case 'php-script':
                return \$this->expandPhpScript(\$cmd);
            case 'script':
                return \$cmd;
            default:
                throw new \\InvalidArgumentException(sprintf('Invalid symfony/flex auto-script in composer.json: \"%s\" is not a valid type of command.', \$type));
        }
    }

    private function expandSymfonyCmd(string \$cmd)
    {
        \$repo = \$this->composer->getRepositoryManager()->getLocalRepository();
        if (!\$repo->findPackage('symfony/console', new EmptyConstraint())) {
            \$this->io->writeError(sprintf('<warning>Skipping \"%s\" (needs symfony/console to run).</>', \$cmd));

            return null;
        }

        \$console = ProcessExecutor::escape(\$this->options->get('root-dir').'/'.\$this->options->get('bin-dir').'/console');
        if (\$this->io->isDecorated()) {
            \$console .= ' --ansi';
        }

        return \$this->expandPhpScript(\$console.' '.\$cmd);
    }

    private function expandPhpScript(string \$cmd): string
    {
        \$phpFinder = new PhpExecutableFinder();
        if (!\$php = \$phpFinder->find(false)) {
            throw new \\RuntimeException('The PHP executable could not be found, add it to your PATH and try again.');
        }

        \$arguments = \$phpFinder->findArguments();

        if (\$env = (string) (getenv('COMPOSER_ORIGINAL_INIS'))) {
            \$paths = explode(PATH_SEPARATOR, \$env);
            \$ini = array_shift(\$paths);
        } else {
            \$ini = php_ini_loaded_file();
        }

        if (\$ini) {
            \$arguments[] = '--php-ini='.\$ini;
        }

        \$phpArgs = implode(' ', array_map([ProcessExecutor::class, 'escape'], \$arguments));

        return ProcessExecutor::escape(\$php).(\$phpArgs ? ' '.\$phpArgs : '').' '.\$cmd;
    }
}
", "@app/vendor/symfony/flex/src/ScriptExecutor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\ScriptExecutor.php");
    }
}
