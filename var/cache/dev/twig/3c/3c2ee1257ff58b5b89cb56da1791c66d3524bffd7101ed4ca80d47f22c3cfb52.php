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

/* @app/vendor/symfony/framework-bundle/DependencyInjection/Compiler/UnusedTagsPass.php */
class __TwigTemplate_bc5d90a000bc17c51a53b5227974d659f2de679d17991d02f0a6b983b41b2cb4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/DependencyInjection/Compiler/UnusedTagsPass.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Find all service tags which are defined, but not used and yield a warning log message.
 *
 * @author Florian Pfitzer <pfitzer@wurzel3.de>
 */
class UnusedTagsPass implements CompilerPassInterface
{
    private \$whitelist = [
        'annotations.cached_reader',
        'auto_alias',
        'cache.pool',
        'cache.pool.clearer',
        'chatter.transport_factory',
        'config_cache.resource_checker',
        'console.command',
        'container.env_var_loader',
        'container.env_var_processor',
        'container.hot_path',
        'container.reversible',
        'container.service_locator',
        'container.service_locator_context',
        'container.service_subscriber',
        'controller.argument_value_resolver',
        'controller.service_arguments',
        'data_collector',
        'form.type',
        'form.type_extension',
        'form.type_guesser',
        'http_client.client',
        'kernel.cache_clearer',
        'kernel.cache_warmer',
        'kernel.event_listener',
        'kernel.event_subscriber',
        'kernel.fragment_renderer',
        'kernel.locale_aware',
        'kernel.reset',
        'mailer.transport_factory',
        'messenger.bus',
        'messenger.message_handler',
        'messenger.receiver',
        'messenger.transport_factory',
        'mime.mime_type_guesser',
        'monolog.logger',
        'notifier.channel',
        'property_info.access_extractor',
        'property_info.initializable_extractor',
        'property_info.list_extractor',
        'property_info.type_extractor',
        'proxy',
        'routing.expression_language_provider',
        'routing.loader',
        'routing.route_loader',
        'security.expression_language_provider',
        'security.remember_me_aware',
        'security.voter',
        'serializer.encoder',
        'serializer.normalizer',
        'texter.transport_factory',
        'translation.dumper',
        'translation.extractor',
        'translation.loader',
        'twig.extension',
        'twig.loader',
        'twig.runtime',
        'validator.auto_mapper',
        'validator.constraint_validator',
        'validator.initializer',
    ];

    public function process(ContainerBuilder \$container)
    {
        \$tags = array_unique(array_merge(\$container->findTags(), \$this->whitelist));

        foreach (\$container->findUnusedTags() as \$tag) {
            // skip whitelisted tags
            if (\\in_array(\$tag, \$this->whitelist)) {
                continue;
            }

            // check for typos
            \$candidates = [];
            foreach (\$tags as \$definedTag) {
                if (\$definedTag === \$tag) {
                    continue;
                }

                if (false !== strpos(\$definedTag, \$tag) || levenshtein(\$tag, \$definedTag) <= \\strlen(\$tag) / 3) {
                    \$candidates[] = \$definedTag;
                }
            }

            \$services = array_keys(\$container->findTaggedServiceIds(\$tag));
            \$message = sprintf('Tag \"%s\" was defined on service(s) \"%s\", but was never used.', \$tag, implode('\", \"', \$services));
            if (!empty(\$candidates)) {
                \$message .= sprintf(' Did you mean \"%s\"?', implode('\", \"', \$candidates));
            }

            \$container->log(\$this, \$message);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/DependencyInjection/Compiler/UnusedTagsPass.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Find all service tags which are defined, but not used and yield a warning log message.
 *
 * @author Florian Pfitzer <pfitzer@wurzel3.de>
 */
class UnusedTagsPass implements CompilerPassInterface
{
    private \$whitelist = [
        'annotations.cached_reader',
        'auto_alias',
        'cache.pool',
        'cache.pool.clearer',
        'chatter.transport_factory',
        'config_cache.resource_checker',
        'console.command',
        'container.env_var_loader',
        'container.env_var_processor',
        'container.hot_path',
        'container.reversible',
        'container.service_locator',
        'container.service_locator_context',
        'container.service_subscriber',
        'controller.argument_value_resolver',
        'controller.service_arguments',
        'data_collector',
        'form.type',
        'form.type_extension',
        'form.type_guesser',
        'http_client.client',
        'kernel.cache_clearer',
        'kernel.cache_warmer',
        'kernel.event_listener',
        'kernel.event_subscriber',
        'kernel.fragment_renderer',
        'kernel.locale_aware',
        'kernel.reset',
        'mailer.transport_factory',
        'messenger.bus',
        'messenger.message_handler',
        'messenger.receiver',
        'messenger.transport_factory',
        'mime.mime_type_guesser',
        'monolog.logger',
        'notifier.channel',
        'property_info.access_extractor',
        'property_info.initializable_extractor',
        'property_info.list_extractor',
        'property_info.type_extractor',
        'proxy',
        'routing.expression_language_provider',
        'routing.loader',
        'routing.route_loader',
        'security.expression_language_provider',
        'security.remember_me_aware',
        'security.voter',
        'serializer.encoder',
        'serializer.normalizer',
        'texter.transport_factory',
        'translation.dumper',
        'translation.extractor',
        'translation.loader',
        'twig.extension',
        'twig.loader',
        'twig.runtime',
        'validator.auto_mapper',
        'validator.constraint_validator',
        'validator.initializer',
    ];

    public function process(ContainerBuilder \$container)
    {
        \$tags = array_unique(array_merge(\$container->findTags(), \$this->whitelist));

        foreach (\$container->findUnusedTags() as \$tag) {
            // skip whitelisted tags
            if (\\in_array(\$tag, \$this->whitelist)) {
                continue;
            }

            // check for typos
            \$candidates = [];
            foreach (\$tags as \$definedTag) {
                if (\$definedTag === \$tag) {
                    continue;
                }

                if (false !== strpos(\$definedTag, \$tag) || levenshtein(\$tag, \$definedTag) <= \\strlen(\$tag) / 3) {
                    \$candidates[] = \$definedTag;
                }
            }

            \$services = array_keys(\$container->findTaggedServiceIds(\$tag));
            \$message = sprintf('Tag \"%s\" was defined on service(s) \"%s\", but was never used.', \$tag, implode('\", \"', \$services));
            if (!empty(\$candidates)) {
                \$message .= sprintf(' Did you mean \"%s\"?', implode('\", \"', \$candidates));
            }

            \$container->log(\$this, \$message);
        }
    }
}
", "@app/vendor/symfony/framework-bundle/DependencyInjection/Compiler/UnusedTagsPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\DependencyInjection\\Compiler\\UnusedTagsPass.php");
    }
}
