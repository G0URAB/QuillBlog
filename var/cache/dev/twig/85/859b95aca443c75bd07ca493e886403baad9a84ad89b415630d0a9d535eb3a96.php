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

/* @app/vendor/symfony/cache/DependencyInjection/CacheCollectorPass.php */
class __TwigTemplate_cb2c4cf741385b0f4e67b8d17ac6b94e6e318df82ca3a623113922642c5a2ecc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/DependencyInjection/CacheCollectorPass.php"));

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

namespace Symfony\\Component\\Cache\\DependencyInjection;

use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapterInterface;
use Symfony\\Component\\Cache\\Adapter\\TraceableAdapter;
use Symfony\\Component\\Cache\\Adapter\\TraceableTagAwareAdapter;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Inject a data collector to all the cache services to be able to get detailed statistics.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class CacheCollectorPass implements CompilerPassInterface
{
    private \$dataCollectorCacheId;
    private \$cachePoolTag;
    private \$cachePoolRecorderInnerSuffix;

    public function __construct(string \$dataCollectorCacheId = 'data_collector.cache', string \$cachePoolTag = 'cache.pool', string \$cachePoolRecorderInnerSuffix = '.recorder_inner')
    {
        \$this->dataCollectorCacheId = \$dataCollectorCacheId;
        \$this->cachePoolTag = \$cachePoolTag;
        \$this->cachePoolRecorderInnerSuffix = \$cachePoolRecorderInnerSuffix;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->dataCollectorCacheId)) {
            return;
        }

        \$collectorDefinition = \$container->getDefinition(\$this->dataCollectorCacheId);
        foreach (\$container->findTaggedServiceIds(\$this->cachePoolTag) as \$id => \$attributes) {
            \$definition = \$container->getDefinition(\$id);
            if (\$definition->isAbstract()) {
                continue;
            }

            \$recorder = new Definition(is_subclass_of(\$definition->getClass(), TagAwareAdapterInterface::class) ? TraceableTagAwareAdapter::class : TraceableAdapter::class);
            \$recorder->setTags(\$definition->getTags());
            \$recorder->setPublic(\$definition->isPublic());
            \$recorder->setArguments([new Reference(\$innerId = \$id.\$this->cachePoolRecorderInnerSuffix)]);

            \$definition->setTags([]);
            \$definition->setPublic(false);

            \$container->setDefinition(\$innerId, \$definition);
            \$container->setDefinition(\$id, \$recorder);

            // Tell the collector to add the new instance
            \$collectorDefinition->addMethodCall('addInstance', [\$id, new Reference(\$id)]);
            \$collectorDefinition->setPublic(false);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/cache/DependencyInjection/CacheCollectorPass.php";
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

namespace Symfony\\Component\\Cache\\DependencyInjection;

use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapterInterface;
use Symfony\\Component\\Cache\\Adapter\\TraceableAdapter;
use Symfony\\Component\\Cache\\Adapter\\TraceableTagAwareAdapter;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Inject a data collector to all the cache services to be able to get detailed statistics.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class CacheCollectorPass implements CompilerPassInterface
{
    private \$dataCollectorCacheId;
    private \$cachePoolTag;
    private \$cachePoolRecorderInnerSuffix;

    public function __construct(string \$dataCollectorCacheId = 'data_collector.cache', string \$cachePoolTag = 'cache.pool', string \$cachePoolRecorderInnerSuffix = '.recorder_inner')
    {
        \$this->dataCollectorCacheId = \$dataCollectorCacheId;
        \$this->cachePoolTag = \$cachePoolTag;
        \$this->cachePoolRecorderInnerSuffix = \$cachePoolRecorderInnerSuffix;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->dataCollectorCacheId)) {
            return;
        }

        \$collectorDefinition = \$container->getDefinition(\$this->dataCollectorCacheId);
        foreach (\$container->findTaggedServiceIds(\$this->cachePoolTag) as \$id => \$attributes) {
            \$definition = \$container->getDefinition(\$id);
            if (\$definition->isAbstract()) {
                continue;
            }

            \$recorder = new Definition(is_subclass_of(\$definition->getClass(), TagAwareAdapterInterface::class) ? TraceableTagAwareAdapter::class : TraceableAdapter::class);
            \$recorder->setTags(\$definition->getTags());
            \$recorder->setPublic(\$definition->isPublic());
            \$recorder->setArguments([new Reference(\$innerId = \$id.\$this->cachePoolRecorderInnerSuffix)]);

            \$definition->setTags([]);
            \$definition->setPublic(false);

            \$container->setDefinition(\$innerId, \$definition);
            \$container->setDefinition(\$id, \$recorder);

            // Tell the collector to add the new instance
            \$collectorDefinition->addMethodCall('addInstance', [\$id, new Reference(\$id)]);
            \$collectorDefinition->setPublic(false);
        }
    }
}
", "@app/vendor/symfony/cache/DependencyInjection/CacheCollectorPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\DependencyInjection\\CacheCollectorPass.php");
    }
}
