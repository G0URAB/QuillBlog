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

/* @app/vendor/symfony/framework-bundle/Resources/config/console.xml */
class __TwigTemplate_b86774c4b563e48f6935f71b7772f8a0672f6481e7d503e336d7e97674d11d34 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/console.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"console.error_listener\" class=\"Symfony\\Component\\Console\\EventListener\\ErrorListener\">
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"monolog.logger\" channel=\"console\" />
        </service>

        <service id=\"console.suggest_missing_package_subscriber\" class=\"Symfony\\Bundle\\FrameworkBundle\\EventListener\\SuggestMissingPackageSubscriber\">
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"console.command.about\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand\">
            <tag name=\"console.command\" command=\"about\" />
        </service>

        <service id=\"console.command.assets_install\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand\">
            <argument type=\"service\" id=\"filesystem\" />
            <argument>%kernel.project_dir%</argument>
            <tag name=\"console.command\" command=\"assets:install\" />
        </service>

        <service id=\"console.command.cache_clear\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand\">
            <argument type=\"service\" id=\"cache_clearer\" />
            <argument type=\"service\" id=\"filesystem\" />
            <tag name=\"console.command\" command=\"cache:clear\" />
        </service>

        <service id=\"console.command.cache_pool_clear\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand\">
            <argument type=\"service\" id=\"cache.global_clearer\" />
            <tag name=\"console.command\" command=\"cache:pool:clear\" />
        </service>

        <service id=\"console.command.cache_pool_prune\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand\">
            <argument type=\"iterator\" />
            <tag name=\"console.command\" command=\"cache:pool:prune\" />
        </service>

        <service id=\"console.command.cache_pool_delete\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand\">
            <argument type=\"service\" id=\"cache.global_clearer\" />
            <tag name=\"console.command\" command=\"cache:pool:delete\" />
        </service>

        <service id=\"console.command.cache_pool_list\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand\">
            <argument /> <!-- Pool names -->
            <tag name=\"console.command\" command=\"cache:pool:list\" />
        </service>

        <service id=\"console.command.cache_warmup\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand\">
            <argument type=\"service\" id=\"cache_warmer\" />
            <tag name=\"console.command\" command=\"cache:warmup\" />
        </service>

        <service id=\"console.command.config_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand\">
            <tag name=\"console.command\" command=\"debug:config\" />
        </service>

        <service id=\"console.command.config_dump_reference\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand\">
            <tag name=\"console.command\" command=\"config:dump-reference\" />
        </service>

        <service id=\"console.command.container_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand\">
            <tag name=\"console.command\" command=\"debug:container\" />
        </service>

        <service id=\"console.command.container_lint\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand\">
            <tag name=\"console.command\" command=\"lint:container\" />
        </service>

        <service id=\"console.command.debug_autowiring\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand\">
            <argument>null</argument>
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
            <tag name=\"console.command\" command=\"debug:autowiring\" />
        </service>

        <service id=\"console.command.event_dispatcher_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand\">
            <argument type=\"service\" id=\"event_dispatcher\" />
            <tag name=\"console.command\" command=\"debug:event-dispatcher\" />
        </service>

        <service id=\"console.command.messenger_consume_messages\" class=\"Symfony\\Component\\Messenger\\Command\\ConsumeMessagesCommand\">
            <argument /> <!-- Routable message bus -->
            <argument type=\"service\" id=\"messenger.receiver_locator\" />
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"collection\" /> <!-- Receiver names -->

            <tag name=\"console.command\" command=\"messenger:consume\" />
            <tag name=\"monolog.logger\" channel=\"messenger\" />
        </service>

        <service id=\"console.command.messenger_setup_transports\" class=\"Symfony\\Component\\Messenger\\Command\\SetupTransportsCommand\">
            <argument type=\"service\" id=\"messenger.receiver_locator\" />
            <argument type=\"collection\" /> <!-- Receiver names -->

            <tag name=\"console.command\" command=\"messenger:setup-transports\" />
        </service>

        <service id=\"console.command.messenger_debug\" class=\"Symfony\\Component\\Messenger\\Command\\DebugCommand\">
            <argument type=\"collection\" /> <!-- Message to handlers mapping -->
            <tag name=\"console.command\" command=\"debug:messenger\" />
        </service>

        <service id=\"console.command.messenger_stop_workers\" class=\"Symfony\\Component\\Messenger\\Command\\StopWorkersCommand\">
            <argument type=\"service\" id=\"cache.messenger.restart_workers_signal\" />
            <tag name=\"console.command\" command=\"messenger:stop-workers\" />
        </service>

        <service id=\"console.command.messenger_failed_messages_retry\" class=\"Symfony\\Component\\Messenger\\Command\\FailedMessagesRetryCommand\">
            <argument /> <!-- Receiver name -->
            <argument /> <!-- Receiver -->
            <argument type=\"service\" id=\"messenger.routable_message_bus\" />
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"logger\" />

            <tag name=\"console.command\" command=\"messenger:failed:retry\" />
        </service>

        <service id=\"console.command.messenger_failed_messages_show\" class=\"Symfony\\Component\\Messenger\\Command\\FailedMessagesShowCommand\">
            <argument /> <!-- Receiver name -->
            <argument /> <!-- Receiver -->

            <tag name=\"console.command\" command=\"messenger:failed:show\" />
        </service>

        <service id=\"console.command.messenger_failed_messages_remove\" class=\"Symfony\\Component\\Messenger\\Command\\FailedMessagesRemoveCommand\">
            <argument /> <!-- Receiver name -->
            <argument /> <!-- Receiver -->

            <tag name=\"console.command\" command=\"messenger:failed:remove\" />
        </service>

        <service id=\"console.command.router_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand\">
            <argument type=\"service\" id=\"router\" />
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\" />
            <tag name=\"console.command\" command=\"debug:router\" />
        </service>

        <service id=\"console.command.router_match\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand\">
            <argument type=\"service\" id=\"router\" />
            <tag name=\"console.command\" command=\"router:match\" />
        </service>

        <service id=\"console.command.translation_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand\">
            <argument type=\"service\" id=\"translator\" />
            <argument type=\"service\" id=\"translation.reader\" />
            <argument type=\"service\" id=\"translation.extractor\" />
            <argument>%translator.default_path%</argument>
            <argument /> <!-- %twig.default_path% -->
            <argument type=\"collection\" /> <!-- Translator paths -->
            <argument type=\"collection\" /> <!-- Twig paths -->
            <tag name=\"console.command\" command=\"debug:translation\" />
        </service>

        <service id=\"console.command.translation_update\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand\">
            <argument type=\"service\" id=\"translation.writer\" />
            <argument type=\"service\" id=\"translation.reader\" />
            <argument type=\"service\" id=\"translation.extractor\" />
            <argument>%kernel.default_locale%</argument>
            <argument>%translator.default_path%</argument>
            <argument /> <!-- %twig.default_path% -->
            <argument type=\"collection\" /> <!-- Translator paths -->
            <argument type=\"collection\" /> <!-- Twig paths -->
            <tag name=\"console.command\" command=\"translation:update\" />
        </service>

        <service id=\"console.command.workflow_dump\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\WorkflowDumpCommand\">
            <tag name=\"console.command\" command=\"workflow:dump\" />
        </service>

        <service id=\"console.command.xliff_lint\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand\">
            <tag name=\"console.command\" command=\"lint:xliff\" />
        </service>

        <service id=\"console.command.yaml_lint\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand\">
            <tag name=\"console.command\" command=\"lint:yaml\" />
        </service>

        <service id=\"console.command.form_debug\" class=\"Symfony\\Component\\Form\\Command\\DebugCommand\">
            <argument type=\"service\" id=\"form.registry\" />
            <argument type=\"collection\" /> <!-- All form types namespaces are stored here by FormPass -->
            <argument type=\"collection\" /> <!-- All services form types are stored here by FormPass -->
            <argument type=\"collection\" /> <!-- All type extensions are stored here by FormPass -->
            <argument type=\"collection\" /> <!-- All type guessers are stored here by FormPass -->
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\" />
            <tag name=\"console.command\" command=\"debug:form\" />
        </service>

        <service id=\"console.command.secrets_set\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand\">
            <argument type=\"service\" id=\"secrets.vault\" />
            <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\" />
            <tag name=\"console.command\" command=\"secrets:set\" />
        </service>

        <service id=\"console.command.secrets_remove\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand\">
            <argument type=\"service\" id=\"secrets.vault\" />
            <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\" />
            <tag name=\"console.command\" command=\"secrets:remove\" />
        </service>

        <service id=\"console.command.secrets_generate_key\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand\">
            <argument type=\"service\" id=\"secrets.vault\" />
            <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\" />
            <tag name=\"console.command\" command=\"secrets:generate-keys\" />
        </service>

        <service id=\"console.command.secrets_list\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand\">
            <argument type=\"service\" id=\"secrets.vault\" />
            <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\" />
            <tag name=\"console.command\" command=\"secrets:list\" />
        </service>

        <service id=\"console.command.secrets_decrypt_to_local\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand\">
            <argument type=\"service\" id=\"secrets.vault\" />
            <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\" />
            <tag name=\"console.command\" command=\"secrets:decrypt-to-local\" />
        </service>

        <service id=\"console.command.secrets_encrypt_from_local\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand\">
            <argument type=\"service\" id=\"secrets.vault\" />
            <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\" />
            <tag name=\"console.command\" command=\"secrets:encrypt-from-local\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/console.xml";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"console.error_listener\" class=\"Symfony\\Component\\Console\\EventListener\\ErrorListener\">
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"monolog.logger\" channel=\"console\" />
        </service>

        <service id=\"console.suggest_missing_package_subscriber\" class=\"Symfony\\Bundle\\FrameworkBundle\\EventListener\\SuggestMissingPackageSubscriber\">
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"console.command.about\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand\">
            <tag name=\"console.command\" command=\"about\" />
        </service>

        <service id=\"console.command.assets_install\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand\">
            <argument type=\"service\" id=\"filesystem\" />
            <argument>%kernel.project_dir%</argument>
            <tag name=\"console.command\" command=\"assets:install\" />
        </service>

        <service id=\"console.command.cache_clear\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand\">
            <argument type=\"service\" id=\"cache_clearer\" />
            <argument type=\"service\" id=\"filesystem\" />
            <tag name=\"console.command\" command=\"cache:clear\" />
        </service>

        <service id=\"console.command.cache_pool_clear\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand\">
            <argument type=\"service\" id=\"cache.global_clearer\" />
            <tag name=\"console.command\" command=\"cache:pool:clear\" />
        </service>

        <service id=\"console.command.cache_pool_prune\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand\">
            <argument type=\"iterator\" />
            <tag name=\"console.command\" command=\"cache:pool:prune\" />
        </service>

        <service id=\"console.command.cache_pool_delete\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand\">
            <argument type=\"service\" id=\"cache.global_clearer\" />
            <tag name=\"console.command\" command=\"cache:pool:delete\" />
        </service>

        <service id=\"console.command.cache_pool_list\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand\">
            <argument /> <!-- Pool names -->
            <tag name=\"console.command\" command=\"cache:pool:list\" />
        </service>

        <service id=\"console.command.cache_warmup\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand\">
            <argument type=\"service\" id=\"cache_warmer\" />
            <tag name=\"console.command\" command=\"cache:warmup\" />
        </service>

        <service id=\"console.command.config_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand\">
            <tag name=\"console.command\" command=\"debug:config\" />
        </service>

        <service id=\"console.command.config_dump_reference\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand\">
            <tag name=\"console.command\" command=\"config:dump-reference\" />
        </service>

        <service id=\"console.command.container_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand\">
            <tag name=\"console.command\" command=\"debug:container\" />
        </service>

        <service id=\"console.command.container_lint\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand\">
            <tag name=\"console.command\" command=\"lint:container\" />
        </service>

        <service id=\"console.command.debug_autowiring\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand\">
            <argument>null</argument>
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
            <tag name=\"console.command\" command=\"debug:autowiring\" />
        </service>

        <service id=\"console.command.event_dispatcher_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand\">
            <argument type=\"service\" id=\"event_dispatcher\" />
            <tag name=\"console.command\" command=\"debug:event-dispatcher\" />
        </service>

        <service id=\"console.command.messenger_consume_messages\" class=\"Symfony\\Component\\Messenger\\Command\\ConsumeMessagesCommand\">
            <argument /> <!-- Routable message bus -->
            <argument type=\"service\" id=\"messenger.receiver_locator\" />
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"collection\" /> <!-- Receiver names -->

            <tag name=\"console.command\" command=\"messenger:consume\" />
            <tag name=\"monolog.logger\" channel=\"messenger\" />
        </service>

        <service id=\"console.command.messenger_setup_transports\" class=\"Symfony\\Component\\Messenger\\Command\\SetupTransportsCommand\">
            <argument type=\"service\" id=\"messenger.receiver_locator\" />
            <argument type=\"collection\" /> <!-- Receiver names -->

            <tag name=\"console.command\" command=\"messenger:setup-transports\" />
        </service>

        <service id=\"console.command.messenger_debug\" class=\"Symfony\\Component\\Messenger\\Command\\DebugCommand\">
            <argument type=\"collection\" /> <!-- Message to handlers mapping -->
            <tag name=\"console.command\" command=\"debug:messenger\" />
        </service>

        <service id=\"console.command.messenger_stop_workers\" class=\"Symfony\\Component\\Messenger\\Command\\StopWorkersCommand\">
            <argument type=\"service\" id=\"cache.messenger.restart_workers_signal\" />
            <tag name=\"console.command\" command=\"messenger:stop-workers\" />
        </service>

        <service id=\"console.command.messenger_failed_messages_retry\" class=\"Symfony\\Component\\Messenger\\Command\\FailedMessagesRetryCommand\">
            <argument /> <!-- Receiver name -->
            <argument /> <!-- Receiver -->
            <argument type=\"service\" id=\"messenger.routable_message_bus\" />
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"logger\" />

            <tag name=\"console.command\" command=\"messenger:failed:retry\" />
        </service>

        <service id=\"console.command.messenger_failed_messages_show\" class=\"Symfony\\Component\\Messenger\\Command\\FailedMessagesShowCommand\">
            <argument /> <!-- Receiver name -->
            <argument /> <!-- Receiver -->

            <tag name=\"console.command\" command=\"messenger:failed:show\" />
        </service>

        <service id=\"console.command.messenger_failed_messages_remove\" class=\"Symfony\\Component\\Messenger\\Command\\FailedMessagesRemoveCommand\">
            <argument /> <!-- Receiver name -->
            <argument /> <!-- Receiver -->

            <tag name=\"console.command\" command=\"messenger:failed:remove\" />
        </service>

        <service id=\"console.command.router_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand\">
            <argument type=\"service\" id=\"router\" />
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\" />
            <tag name=\"console.command\" command=\"debug:router\" />
        </service>

        <service id=\"console.command.router_match\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand\">
            <argument type=\"service\" id=\"router\" />
            <tag name=\"console.command\" command=\"router:match\" />
        </service>

        <service id=\"console.command.translation_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand\">
            <argument type=\"service\" id=\"translator\" />
            <argument type=\"service\" id=\"translation.reader\" />
            <argument type=\"service\" id=\"translation.extractor\" />
            <argument>%translator.default_path%</argument>
            <argument /> <!-- %twig.default_path% -->
            <argument type=\"collection\" /> <!-- Translator paths -->
            <argument type=\"collection\" /> <!-- Twig paths -->
            <tag name=\"console.command\" command=\"debug:translation\" />
        </service>

        <service id=\"console.command.translation_update\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand\">
            <argument type=\"service\" id=\"translation.writer\" />
            <argument type=\"service\" id=\"translation.reader\" />
            <argument type=\"service\" id=\"translation.extractor\" />
            <argument>%kernel.default_locale%</argument>
            <argument>%translator.default_path%</argument>
            <argument /> <!-- %twig.default_path% -->
            <argument type=\"collection\" /> <!-- Translator paths -->
            <argument type=\"collection\" /> <!-- Twig paths -->
            <tag name=\"console.command\" command=\"translation:update\" />
        </service>

        <service id=\"console.command.workflow_dump\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\WorkflowDumpCommand\">
            <tag name=\"console.command\" command=\"workflow:dump\" />
        </service>

        <service id=\"console.command.xliff_lint\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand\">
            <tag name=\"console.command\" command=\"lint:xliff\" />
        </service>

        <service id=\"console.command.yaml_lint\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand\">
            <tag name=\"console.command\" command=\"lint:yaml\" />
        </service>

        <service id=\"console.command.form_debug\" class=\"Symfony\\Component\\Form\\Command\\DebugCommand\">
            <argument type=\"service\" id=\"form.registry\" />
            <argument type=\"collection\" /> <!-- All form types namespaces are stored here by FormPass -->
            <argument type=\"collection\" /> <!-- All services form types are stored here by FormPass -->
            <argument type=\"collection\" /> <!-- All type extensions are stored here by FormPass -->
            <argument type=\"collection\" /> <!-- All type guessers are stored here by FormPass -->
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\" />
            <tag name=\"console.command\" command=\"debug:form\" />
        </service>

        <service id=\"console.command.secrets_set\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand\">
            <argument type=\"service\" id=\"secrets.vault\" />
            <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\" />
            <tag name=\"console.command\" command=\"secrets:set\" />
        </service>

        <service id=\"console.command.secrets_remove\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand\">
            <argument type=\"service\" id=\"secrets.vault\" />
            <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\" />
            <tag name=\"console.command\" command=\"secrets:remove\" />
        </service>

        <service id=\"console.command.secrets_generate_key\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand\">
            <argument type=\"service\" id=\"secrets.vault\" />
            <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\" />
            <tag name=\"console.command\" command=\"secrets:generate-keys\" />
        </service>

        <service id=\"console.command.secrets_list\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand\">
            <argument type=\"service\" id=\"secrets.vault\" />
            <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\" />
            <tag name=\"console.command\" command=\"secrets:list\" />
        </service>

        <service id=\"console.command.secrets_decrypt_to_local\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand\">
            <argument type=\"service\" id=\"secrets.vault\" />
            <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\" />
            <tag name=\"console.command\" command=\"secrets:decrypt-to-local\" />
        </service>

        <service id=\"console.command.secrets_encrypt_from_local\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand\">
            <argument type=\"service\" id=\"secrets.vault\" />
            <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\" />
            <tag name=\"console.command\" command=\"secrets:encrypt-from-local\" />
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/console.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\console.xml");
    }
}
