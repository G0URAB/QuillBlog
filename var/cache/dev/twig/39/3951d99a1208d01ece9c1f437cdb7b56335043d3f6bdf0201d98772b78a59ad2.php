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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/CollectionRegionCommand.php */
class __TwigTemplate_c91cc3e23347e71456c52ee68fe918354378703286d62178d60b0b4d051b3920 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/CollectionRegionCommand.php"));

        // line 1
        echo "<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache;

use Doctrine\\ORM\\Cache;
use Doctrine\\ORM\\Cache\\Region\\DefaultRegion;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Command to clear a collection cache region.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class CollectionRegionCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('orm:clear-cache:region:collection')
             ->setDescription('Clear a second-level cache collection region')
             ->addArgument('owner-class', InputArgument::OPTIONAL, 'The owner entity name.')
             ->addArgument('association', InputArgument::OPTIONAL, 'The association collection name.')
             ->addArgument('owner-id', InputArgument::OPTIONAL, 'The owner identifier.')
             ->addOption('all', null, InputOption::VALUE_NONE, 'If defined, all entity regions will be deleted/invalidated.')
             ->addOption('flush', null, InputOption::VALUE_NONE, 'If defined, all cache entries will be flushed.')
             ->setHelp(<<<EOT
The <info>%command.name%</info> command is meant to clear a second-level cache collection regions for an associated Entity Manager.
It is possible to delete/invalidate all collection region, a specific collection region or flushes the cache provider.

The execution type differ on how you execute the command.
If you want to invalidate all entries for an collection region this command would do the work:

<info>%command.name% 'Entities\\MyEntity' 'collectionName'</info>

To invalidate a specific entry you should use :

<info>%command.name% 'Entities\\MyEntity' 'collectionName' 1</info>

If you want to invalidate all entries for the all collection regions:

<info>%command.name% --all</info>

Alternatively, if you want to flush the configured cache provider for an collection region use this command:

<info>%command.name% 'Entities\\MyEntity' 'collectionName' --flush</info>

Finally, be aware that if <info>--flush</info> option is passed,
not all cache providers are able to flush entries, because of a limitation of its execution nature.
EOT
             );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ui = new SymfonyStyle(\$input, \$output);

        \$em          = \$this->getHelper('em')->getEntityManager();
        \$ownerClass  = \$input->getArgument('owner-class');
        \$assoc       = \$input->getArgument('association');
        \$ownerId     = \$input->getArgument('owner-id');
        \$cache       = \$em->getCache();

        if ( ! \$cache instanceof Cache) {
            throw new \\InvalidArgumentException('No second-level cache is configured on the given EntityManager.');
        }

        if (( ! \$ownerClass || ! \$assoc) && ! \$input->getOption('all')) {
            throw new \\InvalidArgumentException('Missing arguments \"--owner-class\" \"--association\"');
        }

        if (\$input->getOption('flush')) {
            \$collectionRegion  = \$cache->getCollectionCacheRegion(\$ownerClass, \$assoc);

            if ( ! \$collectionRegion instanceof DefaultRegion) {
                throw new \\InvalidArgumentException(sprintf(
                    'The option \"--flush\" expects a \"Doctrine\\ORM\\Cache\\Region\\DefaultRegion\", but got \"%s\".',
                    is_object(\$collectionRegion) ? get_class(\$collectionRegion) : gettype(\$collectionRegion)
                ));
            }

            \$collectionRegion->getCache()->flushAll();

            \$ui->comment(
                sprintf(
                    'Flushing cache provider configured for <info>\"%s#%s\"</info>',
                    \$ownerClass,
                    \$assoc
                )
            );

            return 0;
        }

        if (\$input->getOption('all')) {
            \$ui->comment('Clearing <info>all</info> second-level cache collection regions');

            \$cache->evictEntityRegions();

            return 0;
        }

        if (\$ownerId) {
            \$ui->comment(
                sprintf(
                    'Clearing second-level cache entry for collection <info>\"%s#%s\"</info> owner entity identified by <info>\"%s\"</info>',
                    \$ownerClass,
                    \$assoc,
                    \$ownerId
                )
            );
            \$cache->evictCollection(\$ownerClass, \$assoc, \$ownerId);

            return 0;
        }

        \$ui->comment(sprintf('Clearing second-level cache for collection <info>\"%s#%s\"</info>', \$ownerClass, \$assoc));
        \$cache->evictCollectionRegion(\$ownerClass, \$assoc);

        return 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/CollectionRegionCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache;

use Doctrine\\ORM\\Cache;
use Doctrine\\ORM\\Cache\\Region\\DefaultRegion;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Command to clear a collection cache region.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class CollectionRegionCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('orm:clear-cache:region:collection')
             ->setDescription('Clear a second-level cache collection region')
             ->addArgument('owner-class', InputArgument::OPTIONAL, 'The owner entity name.')
             ->addArgument('association', InputArgument::OPTIONAL, 'The association collection name.')
             ->addArgument('owner-id', InputArgument::OPTIONAL, 'The owner identifier.')
             ->addOption('all', null, InputOption::VALUE_NONE, 'If defined, all entity regions will be deleted/invalidated.')
             ->addOption('flush', null, InputOption::VALUE_NONE, 'If defined, all cache entries will be flushed.')
             ->setHelp(<<<EOT
The <info>%command.name%</info> command is meant to clear a second-level cache collection regions for an associated Entity Manager.
It is possible to delete/invalidate all collection region, a specific collection region or flushes the cache provider.

The execution type differ on how you execute the command.
If you want to invalidate all entries for an collection region this command would do the work:

<info>%command.name% 'Entities\\MyEntity' 'collectionName'</info>

To invalidate a specific entry you should use :

<info>%command.name% 'Entities\\MyEntity' 'collectionName' 1</info>

If you want to invalidate all entries for the all collection regions:

<info>%command.name% --all</info>

Alternatively, if you want to flush the configured cache provider for an collection region use this command:

<info>%command.name% 'Entities\\MyEntity' 'collectionName' --flush</info>

Finally, be aware that if <info>--flush</info> option is passed,
not all cache providers are able to flush entries, because of a limitation of its execution nature.
EOT
             );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ui = new SymfonyStyle(\$input, \$output);

        \$em          = \$this->getHelper('em')->getEntityManager();
        \$ownerClass  = \$input->getArgument('owner-class');
        \$assoc       = \$input->getArgument('association');
        \$ownerId     = \$input->getArgument('owner-id');
        \$cache       = \$em->getCache();

        if ( ! \$cache instanceof Cache) {
            throw new \\InvalidArgumentException('No second-level cache is configured on the given EntityManager.');
        }

        if (( ! \$ownerClass || ! \$assoc) && ! \$input->getOption('all')) {
            throw new \\InvalidArgumentException('Missing arguments \"--owner-class\" \"--association\"');
        }

        if (\$input->getOption('flush')) {
            \$collectionRegion  = \$cache->getCollectionCacheRegion(\$ownerClass, \$assoc);

            if ( ! \$collectionRegion instanceof DefaultRegion) {
                throw new \\InvalidArgumentException(sprintf(
                    'The option \"--flush\" expects a \"Doctrine\\ORM\\Cache\\Region\\DefaultRegion\", but got \"%s\".',
                    is_object(\$collectionRegion) ? get_class(\$collectionRegion) : gettype(\$collectionRegion)
                ));
            }

            \$collectionRegion->getCache()->flushAll();

            \$ui->comment(
                sprintf(
                    'Flushing cache provider configured for <info>\"%s#%s\"</info>',
                    \$ownerClass,
                    \$assoc
                )
            );

            return 0;
        }

        if (\$input->getOption('all')) {
            \$ui->comment('Clearing <info>all</info> second-level cache collection regions');

            \$cache->evictEntityRegions();

            return 0;
        }

        if (\$ownerId) {
            \$ui->comment(
                sprintf(
                    'Clearing second-level cache entry for collection <info>\"%s#%s\"</info> owner entity identified by <info>\"%s\"</info>',
                    \$ownerClass,
                    \$assoc,
                    \$ownerId
                )
            );
            \$cache->evictCollection(\$ownerClass, \$assoc, \$ownerId);

            return 0;
        }

        \$ui->comment(sprintf('Clearing second-level cache for collection <info>\"%s#%s\"</info>', \$ownerClass, \$assoc));
        \$cache->evictCollectionRegion(\$ownerClass, \$assoc);

        return 0;
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/CollectionRegionCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\CollectionRegionCommand.php");
    }
}
