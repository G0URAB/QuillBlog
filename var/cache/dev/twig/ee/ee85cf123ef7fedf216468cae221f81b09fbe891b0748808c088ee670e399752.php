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

/* @app/vendor/symfony/framework-bundle/Command/ContainerLintCommand.php */
class __TwigTemplate_831240ecdf076b0d476aa90b8312d9692ac312979ccf41d40289f996213adce2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Command/ContainerLintCommand.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Command;

use Symfony\\Component\\Config\\ConfigCache;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\RuntimeException;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\DependencyInjection\\Compiler\\CheckTypeDeclarationsPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag;
use Symfony\\Component\\HttpKernel\\Kernel;

final class ContainerLintCommand extends Command
{
    protected static \$defaultName = 'lint:container';

    /**
     * @var ContainerBuilder
     */
    private \$containerBuilder;

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDescription('Ensures that arguments injected into services match type declarations')
            ->setHelp('This command parses service definitions and ensures that injected values match the type declarations of each services\\' class.')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$io = new SymfonyStyle(\$input, \$output);
        \$errorIo = \$io->getErrorStyle();

        try {
            \$container = \$this->getContainerBuilder();
        } catch (RuntimeException \$e) {
            \$errorIo->error(\$e->getMessage());

            return 2;
        }

        \$container->setParameter('container.build_time', time());

        \$container->compile();

        return 0;
    }

    private function getContainerBuilder(): ContainerBuilder
    {
        if (\$this->containerBuilder) {
            return \$this->containerBuilder;
        }

        \$kernel = \$this->getApplication()->getKernel();
        \$kernelContainer = \$kernel->getContainer();

        if (!\$kernel->isDebug() || !(new ConfigCache(\$kernelContainer->getParameter('debug.container.dump'), true))->isFresh()) {
            if (!\$kernel instanceof Kernel) {
                throw new RuntimeException(sprintf('This command does not support the application kernel: \"%s\" does not extend \"%s\".', \\get_class(\$kernel), Kernel::class));
            }

            \$buildContainer = \\Closure::bind(function (): ContainerBuilder {
                \$this->initializeBundles();

                return \$this->buildContainer();
            }, \$kernel, \\get_class(\$kernel));
            \$container = \$buildContainer();

            \$skippedIds = [];
        } else {
            if (!\$kernelContainer instanceof Container) {
                throw new RuntimeException(sprintf('This command does not support the application container: \"%s\" does not extend \"%s\".', \\get_class(\$kernelContainer), Container::class));
            }

            (new XmlFileLoader(\$container = new ContainerBuilder(\$parameterBag = new EnvPlaceholderParameterBag()), new FileLocator()))->load(\$kernelContainer->getParameter('debug.container.dump'));

            \$refl = new \\ReflectionProperty(\$parameterBag, 'resolved');
            \$refl->setAccessible(true);
            \$refl->setValue(\$parameterBag, true);

            \$skippedIds = [];
            foreach (\$container->getServiceIds() as \$serviceId) {
                if (0 === strpos(\$serviceId, '.errored.')) {
                    \$skippedIds[\$serviceId] = true;
                }
            }
        }

        \$container->setParameter('container.build_hash', 'lint_container');
        \$container->setParameter('container.build_id', 'lint_container');

        \$container->addCompilerPass(new CheckTypeDeclarationsPass(true, \$skippedIds), PassConfig::TYPE_AFTER_REMOVING, -100);

        return \$this->containerBuilder = \$container;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Command/ContainerLintCommand.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Command;

use Symfony\\Component\\Config\\ConfigCache;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\RuntimeException;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\DependencyInjection\\Compiler\\CheckTypeDeclarationsPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag;
use Symfony\\Component\\HttpKernel\\Kernel;

final class ContainerLintCommand extends Command
{
    protected static \$defaultName = 'lint:container';

    /**
     * @var ContainerBuilder
     */
    private \$containerBuilder;

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDescription('Ensures that arguments injected into services match type declarations')
            ->setHelp('This command parses service definitions and ensures that injected values match the type declarations of each services\\' class.')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$io = new SymfonyStyle(\$input, \$output);
        \$errorIo = \$io->getErrorStyle();

        try {
            \$container = \$this->getContainerBuilder();
        } catch (RuntimeException \$e) {
            \$errorIo->error(\$e->getMessage());

            return 2;
        }

        \$container->setParameter('container.build_time', time());

        \$container->compile();

        return 0;
    }

    private function getContainerBuilder(): ContainerBuilder
    {
        if (\$this->containerBuilder) {
            return \$this->containerBuilder;
        }

        \$kernel = \$this->getApplication()->getKernel();
        \$kernelContainer = \$kernel->getContainer();

        if (!\$kernel->isDebug() || !(new ConfigCache(\$kernelContainer->getParameter('debug.container.dump'), true))->isFresh()) {
            if (!\$kernel instanceof Kernel) {
                throw new RuntimeException(sprintf('This command does not support the application kernel: \"%s\" does not extend \"%s\".', \\get_class(\$kernel), Kernel::class));
            }

            \$buildContainer = \\Closure::bind(function (): ContainerBuilder {
                \$this->initializeBundles();

                return \$this->buildContainer();
            }, \$kernel, \\get_class(\$kernel));
            \$container = \$buildContainer();

            \$skippedIds = [];
        } else {
            if (!\$kernelContainer instanceof Container) {
                throw new RuntimeException(sprintf('This command does not support the application container: \"%s\" does not extend \"%s\".', \\get_class(\$kernelContainer), Container::class));
            }

            (new XmlFileLoader(\$container = new ContainerBuilder(\$parameterBag = new EnvPlaceholderParameterBag()), new FileLocator()))->load(\$kernelContainer->getParameter('debug.container.dump'));

            \$refl = new \\ReflectionProperty(\$parameterBag, 'resolved');
            \$refl->setAccessible(true);
            \$refl->setValue(\$parameterBag, true);

            \$skippedIds = [];
            foreach (\$container->getServiceIds() as \$serviceId) {
                if (0 === strpos(\$serviceId, '.errored.')) {
                    \$skippedIds[\$serviceId] = true;
                }
            }
        }

        \$container->setParameter('container.build_hash', 'lint_container');
        \$container->setParameter('container.build_id', 'lint_container');

        \$container->addCompilerPass(new CheckTypeDeclarationsPass(true, \$skippedIds), PassConfig::TYPE_AFTER_REMOVING, -100);

        return \$this->containerBuilder = \$container;
    }
}
", "@app/vendor/symfony/framework-bundle/Command/ContainerLintCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Command\\ContainerLintCommand.php");
    }
}
