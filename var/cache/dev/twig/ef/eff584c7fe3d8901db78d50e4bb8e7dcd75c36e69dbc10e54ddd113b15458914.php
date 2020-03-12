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

/* @app/vendor/symfony/framework-bundle/Console/Application.php */
class __TwigTemplate_9c966a91e5888302272ba4e839f3faebcdc4028d20f9a3161d54498a135b6d89 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Console/Application.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Console;

use Symfony\\Component\\Console\\Application as BaseApplication;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Command\\ListCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Debug\\Exception\\FatalThrowableError;
use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;
use Symfony\\Component\\HttpKernel\\Kernel;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Application extends BaseApplication
{
    private \$kernel;
    private \$commandsRegistered = false;
    private \$registrationErrors = [];

    public function __construct(KernelInterface \$kernel)
    {
        \$this->kernel = \$kernel;

        parent::__construct('Symfony', Kernel::VERSION);

        \$inputDefinition = \$this->getDefinition();
        \$inputDefinition->addOption(new InputOption('--env', '-e', InputOption::VALUE_REQUIRED, 'The Environment name.', \$kernel->getEnvironment()));
        \$inputDefinition->addOption(new InputOption('--no-debug', null, InputOption::VALUE_NONE, 'Switches off debug mode.'));
    }

    /**
     * Gets the Kernel associated with this Console.
     *
     * @return KernelInterface A KernelInterface instance
     */
    public function getKernel()
    {
        return \$this->kernel;
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        if (\$this->kernel->getContainer()->has('services_resetter')) {
            \$this->kernel->getContainer()->get('services_resetter')->reset();
        }
    }

    /**
     * Runs the current application.
     *
     * @return int 0 if everything went fine, or an error code
     */
    public function doRun(InputInterface \$input, OutputInterface \$output)
    {
        \$this->registerCommands();

        if (\$this->registrationErrors) {
            \$this->renderRegistrationErrors(\$input, \$output);
        }

        \$this->setDispatcher(\$this->kernel->getContainer()->get('event_dispatcher'));

        return parent::doRun(\$input, \$output);
    }

    /**
     * {@inheritdoc}
     */
    protected function doRunCommand(Command \$command, InputInterface \$input, OutputInterface \$output)
    {
        if (!\$command instanceof ListCommand) {
            if (\$this->registrationErrors) {
                \$this->renderRegistrationErrors(\$input, \$output);
                \$this->registrationErrors = [];
            }

            return parent::doRunCommand(\$command, \$input, \$output);
        }

        \$returnCode = parent::doRunCommand(\$command, \$input, \$output);

        if (\$this->registrationErrors) {
            \$this->renderRegistrationErrors(\$input, \$output);
            \$this->registrationErrors = [];
        }

        return \$returnCode;
    }

    /**
     * {@inheritdoc}
     */
    public function find(\$name)
    {
        \$this->registerCommands();

        return parent::find(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$name)
    {
        \$this->registerCommands();

        \$command = parent::get(\$name);

        if (\$command instanceof ContainerAwareInterface) {
            \$command->setContainer(\$this->kernel->getContainer());
        }

        return \$command;
    }

    /**
     * {@inheritdoc}
     */
    public function all(\$namespace = null)
    {
        \$this->registerCommands();

        return parent::all(\$namespace);
    }

    /**
     * {@inheritdoc}
     */
    public function getLongVersion()
    {
        return parent::getLongVersion().sprintf(' (env: <comment>%s</>, debug: <comment>%s</>)', \$this->kernel->getEnvironment(), \$this->kernel->isDebug() ? 'true' : 'false');
    }

    public function add(Command \$command)
    {
        \$this->registerCommands();

        return parent::add(\$command);
    }

    protected function registerCommands()
    {
        if (\$this->commandsRegistered) {
            return;
        }

        \$this->commandsRegistered = true;

        \$this->kernel->boot();

        \$container = \$this->kernel->getContainer();

        foreach (\$this->kernel->getBundles() as \$bundle) {
            if (\$bundle instanceof Bundle) {
                try {
                    \$bundle->registerCommands(\$this);
                } catch (\\Throwable \$e) {
                    \$this->registrationErrors[] = \$e;
                }
            }
        }

        if (\$container->has('console.command_loader')) {
            \$this->setCommandLoader(\$container->get('console.command_loader'));
        }

        if (\$container->hasParameter('console.command.ids')) {
            \$lazyCommandIds = \$container->hasParameter('console.lazy_command.ids') ? \$container->getParameter('console.lazy_command.ids') : [];
            foreach (\$container->getParameter('console.command.ids') as \$id) {
                if (!isset(\$lazyCommandIds[\$id])) {
                    try {
                        \$this->add(\$container->get(\$id));
                    } catch (\\Throwable \$e) {
                        \$this->registrationErrors[] = \$e;
                    }
                }
            }
        }
    }

    private function renderRegistrationErrors(InputInterface \$input, OutputInterface \$output)
    {
        if (\$output instanceof ConsoleOutputInterface) {
            \$output = \$output->getErrorOutput();
        }

        (new SymfonyStyle(\$input, \$output))->warning('Some commands could not be registered:');

        foreach (\$this->registrationErrors as \$error) {
            if (method_exists(\$this, 'doRenderThrowable')) {
                \$this->doRenderThrowable(\$error, \$output);
            } else {
                if (!\$error instanceof \\Exception) {
                    \$error = new FatalThrowableError(\$error);
                }

                \$this->doRenderException(\$error, \$output);
            }
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Console/Application.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Console;

use Symfony\\Component\\Console\\Application as BaseApplication;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Command\\ListCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Debug\\Exception\\FatalThrowableError;
use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;
use Symfony\\Component\\HttpKernel\\Kernel;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Application extends BaseApplication
{
    private \$kernel;
    private \$commandsRegistered = false;
    private \$registrationErrors = [];

    public function __construct(KernelInterface \$kernel)
    {
        \$this->kernel = \$kernel;

        parent::__construct('Symfony', Kernel::VERSION);

        \$inputDefinition = \$this->getDefinition();
        \$inputDefinition->addOption(new InputOption('--env', '-e', InputOption::VALUE_REQUIRED, 'The Environment name.', \$kernel->getEnvironment()));
        \$inputDefinition->addOption(new InputOption('--no-debug', null, InputOption::VALUE_NONE, 'Switches off debug mode.'));
    }

    /**
     * Gets the Kernel associated with this Console.
     *
     * @return KernelInterface A KernelInterface instance
     */
    public function getKernel()
    {
        return \$this->kernel;
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        if (\$this->kernel->getContainer()->has('services_resetter')) {
            \$this->kernel->getContainer()->get('services_resetter')->reset();
        }
    }

    /**
     * Runs the current application.
     *
     * @return int 0 if everything went fine, or an error code
     */
    public function doRun(InputInterface \$input, OutputInterface \$output)
    {
        \$this->registerCommands();

        if (\$this->registrationErrors) {
            \$this->renderRegistrationErrors(\$input, \$output);
        }

        \$this->setDispatcher(\$this->kernel->getContainer()->get('event_dispatcher'));

        return parent::doRun(\$input, \$output);
    }

    /**
     * {@inheritdoc}
     */
    protected function doRunCommand(Command \$command, InputInterface \$input, OutputInterface \$output)
    {
        if (!\$command instanceof ListCommand) {
            if (\$this->registrationErrors) {
                \$this->renderRegistrationErrors(\$input, \$output);
                \$this->registrationErrors = [];
            }

            return parent::doRunCommand(\$command, \$input, \$output);
        }

        \$returnCode = parent::doRunCommand(\$command, \$input, \$output);

        if (\$this->registrationErrors) {
            \$this->renderRegistrationErrors(\$input, \$output);
            \$this->registrationErrors = [];
        }

        return \$returnCode;
    }

    /**
     * {@inheritdoc}
     */
    public function find(\$name)
    {
        \$this->registerCommands();

        return parent::find(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$name)
    {
        \$this->registerCommands();

        \$command = parent::get(\$name);

        if (\$command instanceof ContainerAwareInterface) {
            \$command->setContainer(\$this->kernel->getContainer());
        }

        return \$command;
    }

    /**
     * {@inheritdoc}
     */
    public function all(\$namespace = null)
    {
        \$this->registerCommands();

        return parent::all(\$namespace);
    }

    /**
     * {@inheritdoc}
     */
    public function getLongVersion()
    {
        return parent::getLongVersion().sprintf(' (env: <comment>%s</>, debug: <comment>%s</>)', \$this->kernel->getEnvironment(), \$this->kernel->isDebug() ? 'true' : 'false');
    }

    public function add(Command \$command)
    {
        \$this->registerCommands();

        return parent::add(\$command);
    }

    protected function registerCommands()
    {
        if (\$this->commandsRegistered) {
            return;
        }

        \$this->commandsRegistered = true;

        \$this->kernel->boot();

        \$container = \$this->kernel->getContainer();

        foreach (\$this->kernel->getBundles() as \$bundle) {
            if (\$bundle instanceof Bundle) {
                try {
                    \$bundle->registerCommands(\$this);
                } catch (\\Throwable \$e) {
                    \$this->registrationErrors[] = \$e;
                }
            }
        }

        if (\$container->has('console.command_loader')) {
            \$this->setCommandLoader(\$container->get('console.command_loader'));
        }

        if (\$container->hasParameter('console.command.ids')) {
            \$lazyCommandIds = \$container->hasParameter('console.lazy_command.ids') ? \$container->getParameter('console.lazy_command.ids') : [];
            foreach (\$container->getParameter('console.command.ids') as \$id) {
                if (!isset(\$lazyCommandIds[\$id])) {
                    try {
                        \$this->add(\$container->get(\$id));
                    } catch (\\Throwable \$e) {
                        \$this->registrationErrors[] = \$e;
                    }
                }
            }
        }
    }

    private function renderRegistrationErrors(InputInterface \$input, OutputInterface \$output)
    {
        if (\$output instanceof ConsoleOutputInterface) {
            \$output = \$output->getErrorOutput();
        }

        (new SymfonyStyle(\$input, \$output))->warning('Some commands could not be registered:');

        foreach (\$this->registrationErrors as \$error) {
            if (method_exists(\$this, 'doRenderThrowable')) {
                \$this->doRenderThrowable(\$error, \$output);
            } else {
                if (!\$error instanceof \\Exception) {
                    \$error = new FatalThrowableError(\$error);
                }

                \$this->doRenderException(\$error, \$output);
            }
        }
    }
}
", "@app/vendor/symfony/framework-bundle/Console/Application.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Console\\Application.php");
    }
}
