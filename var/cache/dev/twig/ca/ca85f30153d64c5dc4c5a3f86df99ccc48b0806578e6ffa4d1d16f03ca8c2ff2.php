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

/* @app/vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php */
class __TwigTemplate_2a41eeef3fdae07d81240d1c29f776eb2981289b4d6bfa92aab7222fcb8d6d89 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php"));

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
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer;

/**
 * Delete an item from a cache pool.
 *
 * @author Pierre du Plessis <pdples@gmail.com>
 */
final class CachePoolDeleteCommand extends Command
{
    protected static \$defaultName = 'cache:pool:delete';

    private \$poolClearer;

    public function __construct(Psr6CacheClearer \$poolClearer)
    {
        parent::__construct();

        \$this->poolClearer = \$poolClearer;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('pool', InputArgument::REQUIRED, 'The cache pool from which to delete an item'),
                new InputArgument('key', InputArgument::REQUIRED, 'The cache key to delete from the pool'),
            ])
            ->setDescription('Deletes an item from a cache pool')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> deletes an item from a given cache pool.

    %command.full_name% <pool> <key>
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
        \$pool = \$input->getArgument('pool');
        \$key = \$input->getArgument('key');
        \$cachePool = \$this->poolClearer->getPool(\$pool);

        if (!\$cachePool->hasItem(\$key)) {
            \$io->note(sprintf('Cache item \"%s\" does not exist in cache pool \"%s\".', \$key, \$pool));

            return 0;
        }

        if (!\$cachePool->deleteItem(\$key)) {
            throw new \\Exception(sprintf('Cache item \"%s\" could not be deleted.', \$key));
        }

        \$io->success(sprintf('Cache item \"%s\" was successfully deleted.', \$key));

        return 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php";
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
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer;

/**
 * Delete an item from a cache pool.
 *
 * @author Pierre du Plessis <pdples@gmail.com>
 */
final class CachePoolDeleteCommand extends Command
{
    protected static \$defaultName = 'cache:pool:delete';

    private \$poolClearer;

    public function __construct(Psr6CacheClearer \$poolClearer)
    {
        parent::__construct();

        \$this->poolClearer = \$poolClearer;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('pool', InputArgument::REQUIRED, 'The cache pool from which to delete an item'),
                new InputArgument('key', InputArgument::REQUIRED, 'The cache key to delete from the pool'),
            ])
            ->setDescription('Deletes an item from a cache pool')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> deletes an item from a given cache pool.

    %command.full_name% <pool> <key>
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
        \$pool = \$input->getArgument('pool');
        \$key = \$input->getArgument('key');
        \$cachePool = \$this->poolClearer->getPool(\$pool);

        if (!\$cachePool->hasItem(\$key)) {
            \$io->note(sprintf('Cache item \"%s\" does not exist in cache pool \"%s\".', \$key, \$pool));

            return 0;
        }

        if (!\$cachePool->deleteItem(\$key)) {
            throw new \\Exception(sprintf('Cache item \"%s\" could not be deleted.', \$key));
        }

        \$io->success(sprintf('Cache item \"%s\" was successfully deleted.', \$key));

        return 0;
    }
}
", "@app/vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Command\\CachePoolDeleteCommand.php");
    }
}
