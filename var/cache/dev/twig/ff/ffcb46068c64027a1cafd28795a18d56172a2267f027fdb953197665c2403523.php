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

/* @app/vendor/symfony/framework-bundle/Command/CacheWarmupCommand.php */
class __TwigTemplate_6c5774053467de325d1c4bd052a531d26227747f8cea8ab2e28c310a2e6a0c07 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Command/CacheWarmupCommand.php"));

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

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate;

/**
 * Warmup the cache.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class CacheWarmupCommand extends Command
{
    protected static \$defaultName = 'cache:warmup';

    private \$cacheWarmer;

    public function __construct(CacheWarmerAggregate \$cacheWarmer)
    {
        parent::__construct();

        \$this->cacheWarmer = \$cacheWarmer;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputOption('no-optional-warmers', '', InputOption::VALUE_NONE, 'Skip optional cache warmers (faster)'),
            ])
            ->setDescription('Warms up an empty cache')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command warms up the cache.

Before running this command, the cache must be empty.

This command does not generate the classes cache (as when executing this
command, too many classes that should be part of the cache are already loaded
in memory). Use <comment>curl</comment> or any other similar tool to warm up
the classes cache if you want.

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$io = new SymfonyStyle(\$input, \$output);

        \$kernel = \$this->getApplication()->getKernel();
        \$io->comment(sprintf('Warming up the cache for the <info>%s</info> environment with debug <info>%s</info>', \$kernel->getEnvironment(), var_export(\$kernel->isDebug(), true)));

        if (!\$input->getOption('no-optional-warmers')) {
            \$this->cacheWarmer->enableOptionalWarmers();
        }

        \$this->cacheWarmer->warmUp(\$kernel->getContainer()->getParameter('kernel.cache_dir'));

        \$io->success(sprintf('Cache for the \"%s\" environment (debug=%s) was successfully warmed.', \$kernel->getEnvironment(), var_export(\$kernel->isDebug(), true)));

        return 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Command/CacheWarmupCommand.php";
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

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate;

/**
 * Warmup the cache.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class CacheWarmupCommand extends Command
{
    protected static \$defaultName = 'cache:warmup';

    private \$cacheWarmer;

    public function __construct(CacheWarmerAggregate \$cacheWarmer)
    {
        parent::__construct();

        \$this->cacheWarmer = \$cacheWarmer;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputOption('no-optional-warmers', '', InputOption::VALUE_NONE, 'Skip optional cache warmers (faster)'),
            ])
            ->setDescription('Warms up an empty cache')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command warms up the cache.

Before running this command, the cache must be empty.

This command does not generate the classes cache (as when executing this
command, too many classes that should be part of the cache are already loaded
in memory). Use <comment>curl</comment> or any other similar tool to warm up
the classes cache if you want.

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$io = new SymfonyStyle(\$input, \$output);

        \$kernel = \$this->getApplication()->getKernel();
        \$io->comment(sprintf('Warming up the cache for the <info>%s</info> environment with debug <info>%s</info>', \$kernel->getEnvironment(), var_export(\$kernel->isDebug(), true)));

        if (!\$input->getOption('no-optional-warmers')) {
            \$this->cacheWarmer->enableOptionalWarmers();
        }

        \$this->cacheWarmer->warmUp(\$kernel->getContainer()->getParameter('kernel.cache_dir'));

        \$io->success(sprintf('Cache for the \"%s\" environment (debug=%s) was successfully warmed.', \$kernel->getEnvironment(), var_export(\$kernel->isDebug(), true)));

        return 0;
    }
}
", "@app/vendor/symfony/framework-bundle/Command/CacheWarmupCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Command\\CacheWarmupCommand.php");
    }
}
