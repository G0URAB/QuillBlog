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

/* @app/var/cache/dev/App_KernelDevDebugContainer.xml */
class __TwigTemplate_e97ac4aa8ab785897fd990891b406c3bc953d826dba559db74ee7528f39a7936 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/var/cache/dev/App_KernelDevDebugContainer.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<container xmlns=\"http://symfony.com/schema/dic/services\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <parameters>
    <parameter key=\"kernel.project_dir\">C:\\wamp64\\www\\QuillBlog</parameter>
    <parameter key=\"kernel.environment\">dev</parameter>
    <parameter key=\"kernel.debug\">true</parameter>
    <parameter key=\"kernel.cache_dir\">C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev</parameter>
    <parameter key=\"kernel.logs_dir\">C:\\wamp64\\www\\QuillBlog\\var\\log</parameter>
    <parameter key=\"kernel.bundles\" type=\"collection\">
      <parameter key=\"FrameworkBundle\">Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle</parameter>
      <parameter key=\"MakerBundle\">Symfony\\Bundle\\MakerBundle\\MakerBundle</parameter>
      <parameter key=\"DoctrineBundle\">Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle</parameter>
      <parameter key=\"DoctrineMigrationsBundle\">Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle</parameter>
      <parameter key=\"TwigBundle\">Symfony\\Bundle\\TwigBundle\\TwigBundle</parameter>
      <parameter key=\"TwigExtraBundle\">Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle</parameter>
    </parameter>
    <parameter key=\"kernel.bundles_metadata\" type=\"collection\">
      <parameter key=\"FrameworkBundle\" type=\"collection\">
        <parameter key=\"path\">C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\FrameworkBundle</parameter>
      </parameter>
      <parameter key=\"MakerBundle\" type=\"collection\">
        <parameter key=\"path\">C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\MakerBundle</parameter>
      </parameter>
      <parameter key=\"DoctrineBundle\" type=\"collection\">
        <parameter key=\"path\">C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle</parameter>
        <parameter key=\"namespace\">Doctrine\\Bundle\\DoctrineBundle</parameter>
      </parameter>
      <parameter key=\"DoctrineMigrationsBundle\" type=\"collection\">
        <parameter key=\"path\">C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-migrations-bundle</parameter>
        <parameter key=\"namespace\">Doctrine\\Bundle\\MigrationsBundle</parameter>
      </parameter>
      <parameter key=\"TwigBundle\" type=\"collection\">
        <parameter key=\"path\">C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\TwigBundle</parameter>
      </parameter>
      <parameter key=\"TwigExtraBundle\" type=\"collection\">
        <parameter key=\"path\">C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\extra-bundle\\src</parameter>
        <parameter key=\"namespace\">Twig\\Extra\\TwigExtraBundle</parameter>
      </parameter>
    </parameter>
    <parameter key=\"kernel.charset\">UTF-8</parameter>
    <parameter key=\"kernel.container_class\">App_KernelDevDebugContainer</parameter>
    <parameter key=\"container.dumper.inline_class_loader\">true</parameter>
    <parameter key=\"container.dumper.inline_factories\">true</parameter>
    <parameter key=\"fragment.renderer.hinclude.global_template\"></parameter>
    <parameter key=\"fragment.path\">/_fragment</parameter>
    <parameter key=\"kernel.secret\">%env(APP_SECRET)%</parameter>
    <parameter key=\"kernel.http_method_override\">true</parameter>
    <parameter key=\"kernel.trusted_hosts\" type=\"collection\"/>
    <parameter key=\"kernel.default_locale\">en</parameter>
    <parameter key=\"kernel.error_controller\">error_controller</parameter>
    <parameter key=\"debug.file_link_format\">null</parameter>
    <parameter key=\"session.metadata.storage_key\">_sf2_meta</parameter>
    <parameter key=\"session.storage.options\" type=\"collection\">
      <parameter key=\"cache_limiter\" type=\"string\">0</parameter>
      <parameter key=\"cookie_secure\">auto</parameter>
      <parameter key=\"cookie_httponly\">true</parameter>
      <parameter key=\"cookie_samesite\">lax</parameter>
      <parameter key=\"gc_probability\">1</parameter>
    </parameter>
    <parameter key=\"session.save_path\">C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/sessions</parameter>
    <parameter key=\"session.metadata.update_threshold\">0</parameter>
    <parameter key=\"asset.request_context.base_path\"></parameter>
    <parameter key=\"asset.request_context.secure\">false</parameter>
    <parameter key=\"data_collector.templates\" type=\"collection\"/>
    <parameter key=\"debug.error_handler.throw_at\">-1</parameter>
    <parameter key=\"debug.container.dump\">C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/App_KernelDevDebugContainer.xml</parameter>
    <parameter key=\"router.request_context.host\">localhost</parameter>
    <parameter key=\"router.request_context.scheme\">http</parameter>
    <parameter key=\"router.request_context.base_url\"></parameter>
    <parameter key=\"router.resource\">kernel::loadRoutes</parameter>
    <parameter key=\"request_listener.http_port\">80</parameter>
    <parameter key=\"request_listener.https_port\">443</parameter>
    <parameter key=\"doctrine.dbal.logger.chain.class\">Doctrine\\DBAL\\Logging\\LoggerChain</parameter>
    <parameter key=\"doctrine.dbal.logger.profiling.class\">Doctrine\\DBAL\\Logging\\DebugStack</parameter>
    <parameter key=\"doctrine.dbal.logger.class\">Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger</parameter>
    <parameter key=\"doctrine.dbal.configuration.class\">Doctrine\\DBAL\\Configuration</parameter>
    <parameter key=\"doctrine.data_collector.class\">Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector</parameter>
    <parameter key=\"doctrine.dbal.connection.event_manager.class\">Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager</parameter>
    <parameter key=\"doctrine.dbal.connection_factory.class\">Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory</parameter>
    <parameter key=\"doctrine.dbal.events.mysql_session_init.class\">Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit</parameter>
    <parameter key=\"doctrine.dbal.events.oracle_session_init.class\">Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit</parameter>
    <parameter key=\"doctrine.class\">Doctrine\\Bundle\\DoctrineBundle\\Registry</parameter>
    <parameter key=\"doctrine.entity_managers\" type=\"collection\">
      <parameter key=\"default\">doctrine.orm.default_entity_manager</parameter>
    </parameter>
    <parameter key=\"doctrine.default_entity_manager\">default</parameter>
    <parameter key=\"doctrine.dbal.connection_factory.types\" type=\"collection\"/>
    <parameter key=\"doctrine.connections\" type=\"collection\">
      <parameter key=\"default\">doctrine.dbal.default_connection</parameter>
    </parameter>
    <parameter key=\"doctrine.default_connection\">default</parameter>
    <parameter key=\"doctrine.orm.configuration.class\">Doctrine\\ORM\\Configuration</parameter>
    <parameter key=\"doctrine.orm.entity_manager.class\">Doctrine\\ORM\\EntityManager</parameter>
    <parameter key=\"doctrine.orm.manager_configurator.class\">Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator</parameter>
    <parameter key=\"doctrine.orm.cache.array.class\">Doctrine\\Common\\Cache\\ArrayCache</parameter>
    <parameter key=\"doctrine.orm.cache.apc.class\">Doctrine\\Common\\Cache\\ApcCache</parameter>
    <parameter key=\"doctrine.orm.cache.memcache.class\">Doctrine\\Common\\Cache\\MemcacheCache</parameter>
    <parameter key=\"doctrine.orm.cache.memcache_host\">localhost</parameter>
    <parameter key=\"doctrine.orm.cache.memcache_port\">11211</parameter>
    <parameter key=\"doctrine.orm.cache.memcache_instance.class\">Memcache</parameter>
    <parameter key=\"doctrine.orm.cache.memcached.class\">Doctrine\\Common\\Cache\\MemcachedCache</parameter>
    <parameter key=\"doctrine.orm.cache.memcached_host\">localhost</parameter>
    <parameter key=\"doctrine.orm.cache.memcached_port\">11211</parameter>
    <parameter key=\"doctrine.orm.cache.memcached_instance.class\">Memcached</parameter>
    <parameter key=\"doctrine.orm.cache.redis.class\">Doctrine\\Common\\Cache\\RedisCache</parameter>
    <parameter key=\"doctrine.orm.cache.redis_host\">localhost</parameter>
    <parameter key=\"doctrine.orm.cache.redis_port\">6379</parameter>
    <parameter key=\"doctrine.orm.cache.redis_instance.class\">Redis</parameter>
    <parameter key=\"doctrine.orm.cache.xcache.class\">Doctrine\\Common\\Cache\\XcacheCache</parameter>
    <parameter key=\"doctrine.orm.cache.wincache.class\">Doctrine\\Common\\Cache\\WinCacheCache</parameter>
    <parameter key=\"doctrine.orm.cache.zenddata.class\">Doctrine\\Common\\Cache\\ZendDataCache</parameter>
    <parameter key=\"doctrine.orm.metadata.driver_chain.class\">Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain</parameter>
    <parameter key=\"doctrine.orm.metadata.annotation.class\">Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.xml.class\">Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.yml.class\">Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.php.class\">Doctrine\\ORM\\Mapping\\Driver\\PHPDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.staticphp.class\">Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver</parameter>
    <parameter key=\"doctrine.orm.proxy_cache_warmer.class\">Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer</parameter>
    <parameter key=\"form.type_guesser.doctrine.class\">Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser</parameter>
    <parameter key=\"doctrine.orm.validator.unique.class\">Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator</parameter>
    <parameter key=\"doctrine.orm.validator_initializer.class\">Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer</parameter>
    <parameter key=\"doctrine.orm.security.user.provider.class\">Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider</parameter>
    <parameter key=\"doctrine.orm.listeners.resolve_target_entity.class\">Doctrine\\ORM\\Tools\\ResolveTargetEntityListener</parameter>
    <parameter key=\"doctrine.orm.listeners.attach_entity_listeners.class\">Doctrine\\ORM\\Tools\\AttachEntityListenersListener</parameter>
    <parameter key=\"doctrine.orm.naming_strategy.default.class\">Doctrine\\ORM\\Mapping\\DefaultNamingStrategy</parameter>
    <parameter key=\"doctrine.orm.naming_strategy.underscore.class\">Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy</parameter>
    <parameter key=\"doctrine.orm.quote_strategy.default.class\">Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy</parameter>
    <parameter key=\"doctrine.orm.quote_strategy.ansi.class\">Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy</parameter>
    <parameter key=\"doctrine.orm.entity_listener_resolver.class\">Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.default_cache_factory.class\">Doctrine\\ORM\\Cache\\DefaultCacheFactory</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.default_region.class\">Doctrine\\ORM\\Cache\\Region\\DefaultRegion</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.filelock_region.class\">Doctrine\\ORM\\Cache\\Region\\FileLockRegion</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.logger_chain.class\">Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.logger_statistics.class\">Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.cache_configuration.class\">Doctrine\\ORM\\Cache\\CacheConfiguration</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.regions_configuration.class\">Doctrine\\ORM\\Cache\\RegionsConfiguration</parameter>
    <parameter key=\"doctrine.orm.auto_generate_proxy_classes\">true</parameter>
    <parameter key=\"doctrine.orm.proxy_dir\">C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/doctrine/orm/Proxies</parameter>
    <parameter key=\"doctrine.orm.proxy_namespace\">Proxies</parameter>
    <parameter key=\"doctrine_migrations.dir_name\">C:\\wamp64\\www\\QuillBlog/src/Migrations</parameter>
    <parameter key=\"doctrine_migrations.namespace\">DoctrineMigrations</parameter>
    <parameter key=\"doctrine_migrations.table_name\">migration_versions</parameter>
    <parameter key=\"doctrine_migrations.column_name\">version</parameter>
    <parameter key=\"doctrine_migrations.column_length\">14</parameter>
    <parameter key=\"doctrine_migrations.executed_at_column_name\">executed_at</parameter>
    <parameter key=\"doctrine_migrations.all_or_nothing\">false</parameter>
    <parameter key=\"doctrine_migrations.name\">Application Migrations</parameter>
    <parameter key=\"doctrine_migrations.custom_template\">null</parameter>
    <parameter key=\"doctrine_migrations.organize_migrations\">false</parameter>
    <parameter key=\"twig.form.resources\" type=\"collection\">
      <parameter>form_div_layout.html.twig</parameter>
    </parameter>
    <parameter key=\"twig.default_path\">C:\\wamp64\\www\\QuillBlog/templates</parameter>
    <parameter key=\"console.command.ids\" type=\"collection\"/>
  </parameters>
  <services>
    <service id=\"service_container\" class=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" public=\"true\" synthetic=\"true\"/>
    <service id=\"kernel\" class=\"App\\Kernel\" public=\"true\" synthetic=\"true\">
      <tag name=\"routing.route_loader\"/>
    </service>
    <service id=\"App\\Controller\\BlogController\" class=\"App\\Controller\\BlogController\" public=\"true\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"controller.service_arguments\"/>
      <tag name=\"container.service_subscriber\"/>
      <call method=\"setContainer\">
        <argument type=\"service\" id=\".service_locator.pNNo5z3.App\\Controller\\BlogController\"/>
      </call>
    </service>
    <service id=\"App\\Repository\\BlogControllerRepository\" class=\"App\\Repository\\BlogControllerRepository\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"doctrine.repository_service\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"argument_metadata_factory\" class=\"Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactory\" public=\"false\"/>
    <service id=\"response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument>UTF-8</argument>
    </service>
    <service id=\"streamed_response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"locale_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument>en</argument>
      <argument type=\"service\" id=\"router.default\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"validate_request_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"disallow_search_engine_index_response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DisallowRobotsIndexingListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"error_controller\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ErrorController\" public=\"true\">
      <argument type=\"service\" id=\"http_kernel\"/>
      <argument>error_controller</argument>
      <argument type=\"service\" id=\"twig.error_renderer.html\"/>
    </service>
    <service id=\"exception_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ErrorListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"request\"/>
      <tag name=\"container.hot_path\"/>
      <argument>error_controller</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"null\"/>
      <argument>true</argument>
    </service>
    <service id=\"parameter_bag\" class=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBag\" public=\"false\">
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"http_kernel\" class=\"Symfony\\Component\\HttpKernel\\HttpKernel\" public=\"true\">
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      <argument type=\"service\" id=\"debug.controller_resolver\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument type=\"service\" id=\"debug.argument_resolver\"/>
    </service>
    <service id=\"request_stack\" class=\"Symfony\\Component\\HttpFoundation\\RequestStack\" public=\"true\"/>
    <service id=\"url_helper\" class=\"Symfony\\Component\\HttpFoundation\\UrlHelper\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
      <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"cache_warmer\" class=\"Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate\" public=\"true\">
      <argument type=\"tagged_iterator\" tag=\"kernel.cache_warmer\"/>
      <argument>true</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/App_KernelDevDebugContainerDeprecations.log</argument>
    </service>
    <service id=\"cache_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer\" public=\"true\">
      <argument type=\"tagged_iterator\" tag=\"kernel.cache_clearer\"/>
    </service>
    <service id=\"filesystem\" class=\"Symfony\\Component\\Filesystem\\Filesystem\" public=\"true\"/>
    <service id=\"file_locator\" class=\"Symfony\\Component\\HttpKernel\\Config\\FileLocator\" public=\"false\">
      <argument type=\"service\" id=\"kernel\"/>
    </service>
    <service id=\"uri_signer\" class=\"Symfony\\Component\\HttpKernel\\UriSigner\" public=\"false\">
      <argument>%env(APP_SECRET)%</argument>
    </service>
    <service id=\"config_cache_factory\" class=\"Symfony\\Component\\Config\\ResourceCheckerConfigCacheFactory\" public=\"false\">
      <argument type=\"tagged_iterator\" tag=\"config_cache.resource_checker\"/>
    </service>
    <service id=\"dependency_injection.config.container_parameters_resource_checker\" class=\"Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResourceChecker\" public=\"false\">
      <tag name=\"config_cache.resource_checker\" priority=\"-980\"/>
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"config.resource.self_checking_resource_checker\" class=\"Symfony\\Component\\Config\\Resource\\SelfCheckingResourceChecker\" public=\"false\">
      <tag name=\"config_cache.resource_checker\" priority=\"-990\"/>
    </service>
    <service id=\"services_resetter\" class=\"Symfony\\Component\\HttpKernel\\DependencyInjection\\ServicesResetter\" public=\"true\">
      <argument type=\"iterator\">
        <argument key=\"cache.app\" type=\"service\" id=\"cache.app\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.system\" type=\"service\" id=\"cache.system\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.validator\" type=\"service\" id=\"cache.validator\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.serializer\" type=\"service\" id=\"cache.serializer\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.annotations\" type=\"service\" id=\"cache.annotations\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.property_info\" type=\"service\" id=\"cache.property_info\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"debug.stopwatch\" type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"debug.event_dispatcher\" type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"doctrine\" type=\"service\" id=\"doctrine\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
      <argument type=\"collection\">
        <argument key=\"cache.app\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"cache.system\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"cache.validator\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"cache.serializer\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"cache.annotations\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"cache.property_info\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"debug.stopwatch\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"debug.event_dispatcher\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"doctrine\" type=\"collection\">
          <argument>reset</argument>
        </argument>
      </argument>
    </service>
    <service id=\"reverse_container\" class=\"Symfony\\Component\\DependencyInjection\\ReverseContainer\" public=\"false\">
      <argument type=\"service\" id=\"service_container\"/>
      <argument type=\"service\" id=\".service_locator.wnlveDj\"/>
    </service>
    <service id=\"container.env_var_processor\" class=\"Symfony\\Component\\DependencyInjection\\EnvVarProcessor\" public=\"false\">
      <tag name=\"container.env_var_processor\"/>
      <argument type=\"service\" id=\"service_container\"/>
      <argument type=\"tagged_iterator\" tag=\"container.env_var_loader\"/>
    </service>
    <service id=\"slugger\" class=\"stdClass\"/>
    <service id=\"fragment.handler\" class=\"Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler\" public=\"false\">
      <argument type=\"service\" id=\".service_locator._cmka45\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument>true</argument>
    </service>
    <service id=\"fragment.renderer.inline\" class=\"Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer\" public=\"false\">
      <tag name=\"kernel.fragment_renderer\" alias=\"inline\"/>
      <argument type=\"service\" id=\"http_kernel\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      <call method=\"setFragmentPath\">
        <argument>/_fragment</argument>
      </call>
    </service>
    <service id=\".2_~FFgcIJK\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
      <factory class=\"Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer\" method=\"getAndCleanOutputBuffer\"/>
    </service>
    <service id=\".1_~FFgcIJK\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
      <argument>true</argument>
      <factory class=\"Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer\" method=\"isDebug\"/>
    </service>
    <service id=\"error_handler.error_renderer.html\" class=\"Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer\">
      <argument type=\"service\" id=\".1_~FFgcIJK\"/>
      <argument>UTF-8</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <argument type=\"service\" id=\".2_~FFgcIJK\"/>
      <argument type=\"service\" id=\"logger\" on-invalid=\"null\"/>
    </service>
    <service id=\"console.error_listener\" class=\"Symfony\\Component\\Console\\EventListener\\ErrorListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"console\"/>
      <argument type=\"service\" id=\"logger\" on-invalid=\"null\"/>
    </service>
    <service id=\"console.suggest_missing_package_subscriber\" class=\"Symfony\\Bundle\\FrameworkBundle\\EventListener\\SuggestMissingPackageSubscriber\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
    </service>
    <service id=\"console.command.about\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"about\"/>
      <call method=\"setName\">
        <argument>about</argument>
      </call>
    </service>
    <service id=\"console.command.assets_install\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"assets:install\"/>
      <argument type=\"service\" id=\"filesystem\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <call method=\"setName\">
        <argument>assets:install</argument>
      </call>
    </service>
    <service id=\"console.command.cache_clear\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:clear\"/>
      <argument type=\"service\" id=\"cache_clearer\"/>
      <argument type=\"service\" id=\"filesystem\"/>
      <call method=\"setName\">
        <argument>cache:clear</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_clear\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:clear\"/>
      <argument type=\"service\" id=\"cache.global_clearer\"/>
      <call method=\"setName\">
        <argument>cache:pool:clear</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_prune\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:prune\"/>
      <argument type=\"iterator\"/>
      <call method=\"setName\">
        <argument>cache:pool:prune</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_delete\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:delete\"/>
      <argument type=\"service\" id=\"cache.global_clearer\"/>
      <call method=\"setName\">
        <argument>cache:pool:delete</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_list\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:list\"/>
      <argument type=\"collection\">
        <argument>cache.app</argument>
        <argument>cache.system</argument>
        <argument>cache.validator</argument>
        <argument>cache.serializer</argument>
        <argument>cache.annotations</argument>
        <argument>cache.property_info</argument>
        <argument>cache.doctrine.orm.default.metadata</argument>
        <argument>cache.doctrine.orm.default.result</argument>
        <argument>cache.doctrine.orm.default.query</argument>
      </argument>
      <call method=\"setName\">
        <argument>cache:pool:list</argument>
      </call>
    </service>
    <service id=\"console.command.cache_warmup\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:warmup\"/>
      <argument type=\"service\" id=\"cache_warmer\"/>
      <call method=\"setName\">
        <argument>cache:warmup</argument>
      </call>
    </service>
    <service id=\"console.command.config_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:config\"/>
      <call method=\"setName\">
        <argument>debug:config</argument>
      </call>
    </service>
    <service id=\"console.command.config_dump_reference\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"config:dump-reference\"/>
      <call method=\"setName\">
        <argument>config:dump-reference</argument>
      </call>
    </service>
    <service id=\"console.command.container_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:container\"/>
      <call method=\"setName\">
        <argument>debug:container</argument>
      </call>
    </service>
    <service id=\"console.command.container_lint\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"lint:container\"/>
      <call method=\"setName\">
        <argument>lint:container</argument>
      </call>
    </service>
    <service id=\"console.command.debug_autowiring\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:autowiring\"/>
      <argument>null</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <call method=\"setName\">
        <argument>debug:autowiring</argument>
      </call>
    </service>
    <service id=\"console.command.event_dispatcher_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:event-dispatcher\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      <call method=\"setName\">
        <argument>debug:event-dispatcher</argument>
      </call>
    </service>
    <service id=\"console.command.router_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:router\"/>
      <argument type=\"service\" id=\"router.default\"/>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <call method=\"setName\">
        <argument>debug:router</argument>
      </call>
    </service>
    <service id=\"console.command.router_match\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"router:match\"/>
      <argument type=\"service\" id=\"router.default\"/>
      <call method=\"setName\">
        <argument>router:match</argument>
      </call>
    </service>
    <service id=\"console.command.yaml_lint\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"lint:yaml\"/>
      <call method=\"setName\">
        <argument>lint:yaml</argument>
      </call>
    </service>
    <service id=\"console.command.secrets_set\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"secrets:set\"/>
      <argument type=\"service\" id=\"secrets.vault\"/>
      <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\"/>
      <call method=\"setName\">
        <argument>secrets:set</argument>
      </call>
    </service>
    <service id=\"console.command.secrets_remove\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"secrets:remove\"/>
      <argument type=\"service\" id=\"secrets.vault\"/>
      <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\"/>
      <call method=\"setName\">
        <argument>secrets:remove</argument>
      </call>
    </service>
    <service id=\"console.command.secrets_generate_key\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"secrets:generate-keys\"/>
      <argument type=\"service\" id=\"secrets.vault\"/>
      <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\"/>
      <call method=\"setName\">
        <argument>secrets:generate-keys</argument>
      </call>
    </service>
    <service id=\"console.command.secrets_list\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"secrets:list\"/>
      <argument type=\"service\" id=\"secrets.vault\"/>
      <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\"/>
      <call method=\"setName\">
        <argument>secrets:list</argument>
      </call>
    </service>
    <service id=\"console.command.secrets_decrypt_to_local\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"secrets:decrypt-to-local\"/>
      <argument type=\"service\" id=\"secrets.vault\"/>
      <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\"/>
      <call method=\"setName\">
        <argument>secrets:decrypt-to-local</argument>
      </call>
    </service>
    <service id=\"console.command.secrets_encrypt_from_local\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"secrets:encrypt-from-local\"/>
      <argument type=\"service\" id=\"secrets.vault\"/>
      <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\"/>
      <call method=\"setName\">
        <argument>secrets:encrypt-from-local</argument>
      </call>
    </service>
    <service id=\"cache.app\" class=\"Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter\" public=\"true\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>Waw3LDoonQ</argument>
      <argument>0</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.app.taggable\" class=\"Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter\" public=\"false\">
      <argument type=\"service\" id=\"cache.app\"/>
    </service>
    <service id=\"cache.system\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"true\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>kZXnnbn5bl</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.validator\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>x03duRdP2q</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.serializer\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>TUBL1vsI1S</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.annotations\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>dS5rNYipbY</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.property_info\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>57ZT5vRd03</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.adapter.system\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.system_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.adapter.apcu\" class=\"Symfony\\Component\\Cache\\Adapter\\ApcuAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.doctrine\" class=\"Symfony\\Component\\Cache\\Adapter\\DoctrineAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_doctrine_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.filesystem\" class=\"Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument>0</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.psr6\" class=\"Symfony\\Component\\Cache\\Adapter\\ProxyAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_psr6_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
    </service>
    <service id=\"cache.adapter.redis\" class=\"Symfony\\Component\\Cache\\Adapter\\RedisAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_redis_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.memcached\" class=\"Symfony\\Component\\Cache\\Adapter\\MemcachedAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_memcached_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.pdo\" class=\"Symfony\\Component\\Cache\\Adapter\\PdoAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_pdo_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.array\" class=\"Symfony\\Component\\Cache\\Adapter\\ArrayAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument>0</argument>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.default_marshaller\" class=\"Symfony\\Component\\Cache\\Marshaller\\DefaultMarshaller\" public=\"false\">
      <argument>null</argument>
    </service>
    <service id=\"cache.default_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer\" public=\"false\">
      <tag name=\"cache.pool.clearer\"/>
      <argument type=\"collection\">
        <argument key=\"cache.app\" type=\"service\" id=\"cache.app\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\"cache.system_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer\" public=\"true\">
      <tag name=\"cache.pool.clearer\"/>
      <tag name=\"kernel.cache_clearer\"/>
      <argument type=\"collection\">
        <argument key=\"cache.system\" type=\"service\" id=\"cache.system\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.validator\" type=\"service\" id=\"cache.validator\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.serializer\" type=\"service\" id=\"cache.serializer\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.annotations\" type=\"service\" id=\"cache.annotations\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.property_info\" type=\"service\" id=\"cache.property_info\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\"cache.global_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer\" public=\"true\">
      <tag name=\"cache.pool.clearer\"/>
      <argument type=\"collection\">
        <argument key=\"cache.app\" type=\"service\" id=\"cache.app\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.system\" type=\"service\" id=\"cache.system\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.validator\" type=\"service\" id=\"cache.validator\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.serializer\" type=\"service\" id=\"cache.serializer\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.annotations\" type=\"service\" id=\"cache.annotations\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.property_info\" type=\"service\" id=\"cache.property_info\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.doctrine.orm.default.metadata\" type=\"service\" id=\"cache.doctrine.orm.default.metadata\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.doctrine.orm.default.result\" type=\"service\" id=\"cache.doctrine.orm.default.result\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.doctrine.orm.default.query\" type=\"service\" id=\"cache.doctrine.orm.default.query\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\".cache_connection.GD_MSZC\" class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" public=\"false\">
      <argument>redis://localhost</argument>
      <argument type=\"collection\">
        <argument key=\"lazy\">true</argument>
      </argument>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createConnection\"/>
    </service>
    <service id=\".cache_connection.JKE6keX\" class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" public=\"false\">
      <argument>memcached://localhost</argument>
      <argument type=\"collection\">
        <argument key=\"lazy\">true</argument>
      </argument>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createConnection\"/>
    </service>
    <service id=\".1_NativeFileSessionHandler~jGn_eiJ\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler\" public=\"false\">
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/sessions</argument>
    </service>
    <service id=\"session\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Session\" public=\"true\">
      <argument type=\"service\" id=\"session.storage.native\"/>
      <argument type=\"service\" id=\"session.attribute_bag\"/>
      <argument type=\"service\" id=\"session.flash_bag\"/>
    </service>
    <service id=\"session.storage.metadata_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag\" public=\"false\">
      <argument>_sf2_meta</argument>
      <argument>0</argument>
    </service>
    <service id=\"session.storage.native\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage\" public=\"false\">
      <argument>%session.storage.options%</argument>
      <argument>null</argument>
      <argument type=\"service\" id=\"session.storage.metadata_bag\"/>
    </service>
    <service id=\"session.storage.php_bridge\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage\" public=\"false\">
      <argument>null</argument>
      <argument type=\"service\" id=\"session.storage.metadata_bag\"/>
    </service>
    <service id=\"session.flash_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag\" public=\"false\"/>
    <service id=\"session.attribute_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag\" public=\"false\"/>
    <service id=\"session.storage.mock_file\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage\" public=\"false\">
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/sessions</argument>
      <argument>MOCKSESSID</argument>
      <argument type=\"service\" id=\"session.storage.metadata_bag\"/>
    </service>
    <service id=\"session.handler.native_file\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\StrictSessionHandler\" public=\"false\">
      <argument type=\"service\" id=\".1_NativeFileSessionHandler~jGn_eiJ\"/>
    </service>
    <service id=\"session.abstract_handler\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\AbstractSessionHandler\" public=\"false\">
      <argument></argument>
      <factory class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\SessionHandlerFactory\" method=\"createHandler\"/>
    </service>
    <service id=\"session_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\SessionListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\".service_locator.Bppmeg3\"/>
    </service>
    <service id=\"assets.packages\" class=\"Symfony\\Component\\Asset\\Packages\" public=\"false\">
      <argument type=\"service\" id=\"assets._default_package\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\"assets.empty_package\" class=\"Symfony\\Component\\Asset\\Package\" public=\"false\">
      <argument type=\"service\" id=\"assets.empty_version_strategy\"/>
    </service>
    <service id=\"assets.context\" class=\"Symfony\\Component\\Asset\\Context\\RequestStackContext\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
      <argument></argument>
      <argument>false</argument>
    </service>
    <service id=\"assets.path_package\" class=\"Symfony\\Component\\Asset\\PathPackage\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"assets.context\"/>
    </service>
    <service id=\"assets.url_package\" class=\"Symfony\\Component\\Asset\\UrlPackage\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"assets.context\"/>
    </service>
    <service id=\"assets.static_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
    </service>
    <service id=\"assets.empty_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\EmptyVersionStrategy\" public=\"false\"/>
    <service id=\"assets.json_manifest_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\JsonManifestVersionStrategy\" public=\"false\" abstract=\"true\">
      <argument></argument>
    </service>
    <service id=\"assets._default_package\" class=\"Symfony\\Component\\Asset\\PathPackage\" public=\"false\">
      <argument></argument>
      <argument type=\"service\" id=\"assets.empty_version_strategy\"/>
      <argument type=\"service\" id=\"assets.context\"/>
    </service>
    <service id=\"debug.debug_handlers_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"php\"/>
      <tag name=\"container.hot_path\"/>
      <argument>null</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"null\"/>
      <argument>null</argument>
      <argument>-1</argument>
      <argument>true</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\"/>
      <argument>true</argument>
    </service>
    <service id=\"debug.file_link_formatter\" class=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\" public=\"false\">
      <argument>null</argument>
    </service>
    <service id=\"debug.stopwatch\" class=\"Symfony\\Component\\Stopwatch\\Stopwatch\">
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>true</argument>
    </service>
    <service id=\"debug.event_dispatcher\" class=\"Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher\" public=\"false\">
      <tag name=\"container.hot_path\"/>
      <tag name=\"monolog.logger\" channel=\"event\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
      <argument type=\"service\" id=\"logger\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"request_stack\" on-invalid=\"null\"/>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"response_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"streamed_response_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>-1024</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_listener\"/>
          <argument>setDefaultLocale</argument>
        </argument>
        <argument>100</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>16</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_listener\"/>
          <argument>onKernelFinishRequest</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"validate_request_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>256</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"disallow_search_engine_index_response_listener\"/>
          <argument>onResponse</argument>
        </argument>
        <argument>-255</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller_arguments</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"exception_listener\"/>
          <argument>onControllerArguments</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"exception_listener\"/>
          <argument>logKernelException</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"exception_listener\"/>
          <argument>onKernelException</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.error</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"console.error_listener\"/>
          <argument>onConsoleError</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"console.error_listener\"/>
          <argument>onConsoleTerminate</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.error</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"console.suggest_missing_package_subscriber\"/>
          <argument>onConsoleError</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"session_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>128</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"session_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>-1000</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"session_listener\"/>
          <argument>onFinishRequest</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.debug_handlers_listener\"/>
          <argument>configure</argument>
        </argument>
        <argument>2048</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.command</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.debug_handlers_listener\"/>
          <argument>configure</argument>
        </argument>
        <argument>2048</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"router_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>32</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"router_listener\"/>
          <argument>onKernelFinishRequest</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"router_listener\"/>
          <argument>onKernelException</argument>
        </argument>
        <argument>-64</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.error</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"maker.console_error_listener\"/>
          <argument>onConsoleError</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"maker.console_error_listener\"/>
          <argument>onConsoleTerminate</argument>
        </argument>
        <argument>0</argument>
      </call>
    </service>
    <service id=\"debug.controller_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"request\"/>
      <argument type=\"service\" id=\"debug.controller_resolver.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableArgumentResolver\" public=\"false\">
      <argument type=\"service\" id=\"debug.argument_resolver.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"routing.resolver\" class=\"Symfony\\Component\\Config\\Loader\\LoaderResolver\" public=\"false\">
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.xml\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.yml\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.php\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.glob\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.directory\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.container\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.annotation\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.annotation.directory\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.annotation.file\"/>
      </call>
    </service>
    <service id=\"routing.loader.xml\" class=\"Symfony\\Component\\Routing\\Loader\\XmlFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.yml\" class=\"Symfony\\Component\\Routing\\Loader\\YamlFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.php\" class=\"Symfony\\Component\\Routing\\Loader\\PhpFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.glob\" class=\"Symfony\\Component\\Routing\\Loader\\GlobFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.directory\" class=\"Symfony\\Component\\Routing\\Loader\\DirectoryLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.container\" class=\"Symfony\\Component\\Routing\\Loader\\ContainerLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\".service_locator.mshSVvX\"/>
    </service>
    <service id=\"routing.loader\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader\" public=\"true\">
      <argument type=\"service\" id=\"routing.resolver\"/>
      <argument type=\"collection\">
        <argument key=\"utf8\">true</argument>
      </argument>
    </service>
    <service id=\"router.default\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\Router\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"router\"/>
      <tag name=\"container.service_subscriber\" id=\"routing.loader\"/>
      <argument type=\"service\" id=\".service_locator.ld1.260.router.default\"/>
      <argument>kernel::loadRoutes</argument>
      <argument type=\"collection\">
        <argument key=\"cache_dir\">C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev</argument>
        <argument key=\"debug\">true</argument>
        <argument key=\"generator_class\">Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator</argument>
        <argument key=\"generator_dumper_class\">Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper</argument>
        <argument key=\"matcher_class\">Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher</argument>
        <argument key=\"matcher_dumper_class\">Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper</argument>
        <argument key=\"strict_requirements\">true</argument>
        <argument key=\"resource_type\">service</argument>
      </argument>
      <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"parameter_bag\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <argument>en</argument>
      <call method=\"setConfigCacheFactory\">
        <argument type=\"service\" id=\"config_cache_factory\"/>
      </call>
    </service>
    <service id=\"router.request_context\" class=\"Symfony\\Component\\Routing\\RequestContext\" public=\"false\">
      <argument></argument>
      <argument>GET</argument>
      <argument>localhost</argument>
      <argument>http</argument>
      <argument>80</argument>
      <argument>443</argument>
    </service>
    <service id=\"router.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer\" public=\"false\">
      <tag name=\"container.service_subscriber\" id=\"router\"/>
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\".service_locator.3TLJ8AE.router.cache_warmer\"/>
    </service>
    <service id=\"router_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\RouterListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"request\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"router.default\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <argument>true</argument>
    </service>
    <service id=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController\" public=\"true\">
      <argument type=\"service\" id=\"router.default\"/>
      <argument>80</argument>
      <argument>443</argument>
    </service>
    <service id=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController\" public=\"true\">
      <argument type=\"service\" id=\"twig\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"routing.loader.annotation\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\AnnotatedRouteControllerLoader\" public=\"false\">
      <tag name=\"routing.loader\" priority=\"-10\"/>
      <argument type=\"service\" id=\"annotations.cached_reader\"/>
    </service>
    <service id=\"routing.loader.annotation.directory\" class=\"Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader\" public=\"false\">
      <tag name=\"routing.loader\" priority=\"-10\"/>
      <argument type=\"service\" id=\"file_locator\"/>
      <argument type=\"service\" id=\"routing.loader.annotation\"/>
    </service>
    <service id=\"routing.loader.annotation.file\" class=\"Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader\" public=\"false\">
      <tag name=\"routing.loader\" priority=\"-10\"/>
      <argument type=\"service\" id=\"file_locator\"/>
      <argument type=\"service\" id=\"routing.loader.annotation\"/>
    </service>
    <service id=\".2_PhpArrayAdapter~mwk0cku\" class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" public=\"false\">
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/annotations.php</argument>
      <argument type=\"service\" id=\"cache.annotations\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" method=\"create\"/>
    </service>
    <service id=\".1_ArrayCache~mwk0cku\" class=\"Doctrine\\Common\\Cache\\ArrayCache\" public=\"false\"/>
    <service id=\"annotations.reader\" class=\"Doctrine\\Common\\Annotations\\AnnotationReader\" public=\"false\">
      <call method=\"addGlobalIgnoredName\">
        <argument>required</argument>
        <argument type=\"service\" id=\"annotations.dummy_registry\"/>
      </call>
    </service>
    <service id=\"annotations.dummy_registry\" class=\"Doctrine\\Common\\Annotations\\AnnotationRegistry\" public=\"false\">
      <call method=\"registerUniqueLoader\">
        <argument>class_exists</argument>
      </call>
    </service>
    <service id=\"annotations.cached_reader\" class=\"Doctrine\\Common\\Annotations\\CachedReader\" public=\"false\">
      <tag name=\"annotations.cached_reader\"/>
      <argument type=\"service\" id=\"annotations.reader\"/>
      <argument type=\"service\" id=\".1_ArrayCache~mwk0cku\"/>
      <argument>true</argument>
      <property name=\"cacheProviderBackup\" type=\"service\" id=\"annotations.cache\"/>
    </service>
    <service id=\"annotations.filesystem_cache\" class=\"Doctrine\\Common\\Cache\\FilesystemCache\" public=\"false\">
      <argument></argument>
    </service>
    <service id=\"annotations.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\AnnotationsCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\"annotations.reader\"/>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/annotations.php</argument>
      <argument>#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller\$))#</argument>
      <argument>true</argument>
    </service>
    <service id=\"annotations.cache\" class=\"Symfony\\Component\\Cache\\DoctrineProvider\" public=\"false\">
      <argument type=\"service\" id=\".2_PhpArrayAdapter~mwk0cku\"/>
    </service>
    <service id=\"secrets.vault\" class=\"Symfony\\Bundle\\FrameworkBundle\\Secrets\\SodiumVault\">
      <tag name=\"container.env_var_loader\"/>
      <argument>C:\\wamp64\\www\\QuillBlog/config/secrets/dev</argument>
      <argument>%env(base64:default::SYMFONY_DECRYPTION_SECRET)%</argument>
    </service>
    <service id=\"secrets.local_vault\" class=\"Symfony\\Bundle\\FrameworkBundle\\Secrets\\DotenvVault\">
      <argument>C:\\wamp64\\www\\QuillBlog/.env.dev.local</argument>
    </service>
    <service id=\"mime_types\" class=\"Symfony\\Component\\Mime\\MimeTypes\" public=\"false\">
      <call method=\"setDefault\">
        <argument type=\"service\" id=\"mime_types\"/>
      </call>
    </service>
    <service id=\"maker.file_manager\" class=\"Symfony\\Bundle\\MakerBundle\\FileManager\" public=\"false\">
      <argument type=\"service\" id=\"filesystem\"/>
      <argument type=\"service\" id=\"maker.autoloader_util\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <argument>C:\\wamp64\\www\\QuillBlog/templates</argument>
    </service>
    <service id=\"maker.autoloader_finder\" class=\"Symfony\\Bundle\\MakerBundle\\Util\\ComposerAutoloaderFinder\" public=\"false\">
      <argument>App</argument>
    </service>
    <service id=\"maker.autoloader_util\" class=\"Symfony\\Bundle\\MakerBundle\\Util\\AutoloaderUtil\" public=\"false\">
      <argument type=\"service\" id=\"maker.autoloader_finder\"/>
    </service>
    <service id=\"maker.event_registry\" class=\"Symfony\\Bundle\\MakerBundle\\EventRegistry\" public=\"false\">
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
    </service>
    <service id=\"maker.console_error_listener\" class=\"Symfony\\Bundle\\MakerBundle\\Event\\ConsoleErrorSubscriber\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
    </service>
    <service id=\"maker.doctrine_helper\" class=\"Symfony\\Bundle\\MakerBundle\\Doctrine\\DoctrineHelper\" public=\"false\">
      <argument>App\\Entity</argument>
      <argument type=\"service\" id=\"doctrine\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"maker.auto_command.abstract\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.generator\" class=\"Symfony\\Bundle\\MakerBundle\\Generator\" public=\"false\">
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument>App</argument>
    </service>
    <service id=\"maker.entity_class_generator\" class=\"Symfony\\Bundle\\MakerBundle\\Doctrine\\EntityClassGenerator\" public=\"false\">
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.user_class_builder\" class=\"Symfony\\Bundle\\MakerBundle\\Security\\UserClassBuilder\" public=\"false\"/>
    <service id=\"maker.security_config_updater\" class=\"Symfony\\Bundle\\MakerBundle\\Security\\SecurityConfigUpdater\" public=\"false\"/>
    <service id=\"maker.renderer.form_type_renderer\" class=\"Symfony\\Bundle\\MakerBundle\\Renderer\\FormTypeRenderer\" public=\"false\">
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.maker.make_authenticator\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeAuthenticator\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.security_config_updater\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
    </service>
    <service id=\"maker.maker.make_command\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeCommand\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_controller\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeController\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
    </service>
    <service id=\"maker.maker.make_crud\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeCrud\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
      <argument type=\"service\" id=\"maker.renderer.form_type_renderer\"/>
    </service>
    <service id=\"maker.maker.make_entity\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeEntity\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.maker.make_fixtures\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeFixtures\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_form\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeForm\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
      <argument type=\"service\" id=\"maker.renderer.form_type_renderer\"/>
    </service>
    <service id=\"maker.maker.make_functional_test\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeFunctionalTest\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_registration_form\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeRegistrationForm\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.renderer.form_type_renderer\"/>
      <argument type=\"service\" id=\"router.default\"/>
    </service>
    <service id=\"maker.maker.make_serializer_encoder\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSerializerEncoder\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_serializer_normalizer\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSerializerNormalizer\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_subscriber\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSubscriber\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.event_registry\"/>
    </service>
    <service id=\"maker.maker.make_twig_extension\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeTwigExtension\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_unit_test\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeUnitTest\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_validator\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeValidator\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_voter\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeVoter\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_user\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeUser\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.user_class_builder\"/>
      <argument type=\"service\" id=\"maker.security_config_updater\"/>
    </service>
    <service id=\"maker.maker.make_migration\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeMigration\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
    </service>
    <service id=\"doctrine.dbal.logger.chain\" class=\"Doctrine\\DBAL\\Logging\\LoggerChain\" public=\"false\" abstract=\"true\">
      <call method=\"addLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.logger.profiling\" class=\"Doctrine\\DBAL\\Logging\\DebugStack\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.dbal.logger.backtrace\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\Logging\\BacktraceLogger\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.dbal.logger\" class=\"Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"doctrine\"/>
      <argument type=\"service\" id=\"logger\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"null\"/>
    </service>
    <service id=\"data_collector.doctrine\" class=\"Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@Doctrine/Collector/db.html.twig\" id=\"db\" priority=\"250\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"addLogger\">
        <argument>default</argument>
        <argument type=\"service\" id=\"doctrine.dbal.logger.profiling.default\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.connection_factory\" class=\"Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory\">
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.dbal.connection\" class=\"Doctrine\\DBAL\\Connection\" abstract=\"true\">
      <factory service=\"doctrine.dbal.connection_factory\" method=\"createConnection\"/>
    </service>
    <service id=\"doctrine.dbal.connection.event_manager\" class=\"Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"doctrine.dbal.connection.configuration\" class=\"Doctrine\\DBAL\\Configuration\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Registry\" public=\"true\">
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"service_container\"/>
      <argument>%doctrine.connections%</argument>
      <argument>%doctrine.entity_managers%</argument>
      <argument>default</argument>
      <argument>default</argument>
    </service>
    <service id=\"doctrine.twig.doctrine_extension\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Twig\\DoctrineExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"doctrine.dbal.schema_asset_filter_manager\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\SchemaAssetsFilterManager\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.dbal.well_known_schema_asset_filter\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\BlacklistSchemaAssetFilter\" public=\"false\">
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.database_create_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:database:create\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"setName\">
        <argument>doctrine:database:create</argument>
      </call>
    </service>
    <service id=\"doctrine.database_drop_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:database:drop\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"setName\">
        <argument>doctrine:database:drop</argument>
      </call>
    </service>
    <service id=\"doctrine.database_import_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:database:import\"/>
      <call method=\"setName\">
        <argument>doctrine:database:import</argument>
      </call>
    </service>
    <service id=\"doctrine.query_sql_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:query:sql\"/>
      <call method=\"setName\">
        <argument>doctrine:query:sql</argument>
      </call>
    </service>
    <service id=\"doctrine.dbal.default_connection.configuration\" class=\"Doctrine\\DBAL\\Configuration\" public=\"false\">
      <call method=\"setSQLLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger.chain.default\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.logger.profiling.default\" class=\"Doctrine\\DBAL\\Logging\\DebugStack\" public=\"false\"/>
    <service id=\"doctrine.dbal.logger.chain.default\" class=\"Doctrine\\DBAL\\Logging\\LoggerChain\" public=\"false\">
      <call method=\"addLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger\"/>
      </call>
      <call method=\"addLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger.profiling.default\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.default_connection.event_manager\" class=\"Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.bpvU51K\"/>
      <call method=\"addEventListener\">
        <argument type=\"collection\">
          <argument>loadClassMetadata</argument>
        </argument>
        <argument>doctrine.orm.default_listeners.attach_entity_listeners</argument>
      </call>
    </service>
    <service id=\"doctrine.dbal.default_connection\" class=\"Doctrine\\DBAL\\Connection\" public=\"true\">
      <argument type=\"collection\">
        <argument key=\"url\">%env(resolve:DATABASE_URL)%</argument>
        <argument key=\"host\">localhost</argument>
        <argument key=\"port\">null</argument>
        <argument key=\"user\">root</argument>
        <argument key=\"password\">null</argument>
        <argument key=\"driver\">pdo_mysql</argument>
        <argument key=\"driverOptions\" type=\"collection\"/>
        <argument key=\"defaultTableOptions\" type=\"collection\"/>
      </argument>
      <argument type=\"service\" id=\"doctrine.dbal.default_connection.configuration\"/>
      <argument type=\"service\" id=\"doctrine.dbal.default_connection.event_manager\"/>
      <argument type=\"collection\"/>
      <factory service=\"doctrine.dbal.connection_factory\" method=\"createConnection\"/>
    </service>
    <service id=\".1_ServiceLocator~wMitVIC\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.orm.proxy_cache_warmer\" class=\"Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"form.type_guesser.doctrine\" class=\"Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser\">
      <tag name=\"form.type_guesser\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"form.type.entity\" class=\"Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType\">
      <tag name=\"form.type\" alias=\"entity\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.configuration\" class=\"Doctrine\\ORM\\Configuration\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.orm.entity_manager.abstract\" class=\"Doctrine\\ORM\\EntityManager\" lazy=\"true\" abstract=\"true\">
      <factory class=\"Doctrine\\ORM\\EntityManager\" method=\"create\"/>
    </service>
    <service id=\"doctrine.orm.container_repository_factory\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Repository\\ContainerRepositoryFactory\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.kOQSzIs\"/>
    </service>
    <service id=\"doctrine.orm.manager_configurator.abstract\" class=\"Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator\" abstract=\"true\">
      <argument type=\"collection\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.orm.validator.unique\" class=\"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator\">
      <tag name=\"validator.constraint_validator\" alias=\"doctrine.orm.validator.unique\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.validator_initializer\" class=\"Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer\">
      <tag name=\"validator.initializer\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.security.user.provider\" class=\"Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.listeners.resolve_target_entity\" class=\"Doctrine\\ORM\\Tools\\ResolveTargetEntityListener\" public=\"false\"/>
    <service id=\"doctrine.orm.naming_strategy.default\" class=\"Doctrine\\ORM\\Mapping\\DefaultNamingStrategy\" public=\"false\"/>
    <service id=\"doctrine.orm.naming_strategy.underscore\" class=\"Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy\" public=\"false\"/>
    <service id=\"doctrine.orm.naming_strategy.underscore_number_aware\" class=\"Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy\" public=\"false\">
      <argument>0</argument>
      <argument>true</argument>
    </service>
    <service id=\"doctrine.orm.quote_strategy.default\" class=\"Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy\" public=\"false\"/>
    <service id=\"doctrine.orm.quote_strategy.ansi\" class=\"Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy\" public=\"false\"/>
    <service id=\"doctrine.cache_clear_metadata_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-metadata\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-metadata</argument>
      </call>
    </service>
    <service id=\"doctrine.cache_clear_query_cache_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-query\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-query</argument>
      </call>
    </service>
    <service id=\"doctrine.cache_clear_result_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-result\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-result</argument>
      </call>
    </service>
    <service id=\"doctrine.cache_collection_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-collection-region\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-collection-region</argument>
      </call>
    </service>
    <service id=\"doctrine.mapping_convert_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:mapping:convert\"/>
      <call method=\"setName\">
        <argument>doctrine:mapping:convert</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_create_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:create\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:create</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_drop_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:drop\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:drop</argument>
      </call>
    </service>
    <service id=\"doctrine.ensure_production_settings_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:ensure-production-settings\"/>
      <call method=\"setName\">
        <argument>doctrine:ensure-production-settings</argument>
      </call>
    </service>
    <service id=\"doctrine.clear_entity_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-entity-region\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-entity-region</argument>
      </call>
    </service>
    <service id=\"doctrine.mapping_info_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:mapping:info\"/>
      <call method=\"setName\">
        <argument>doctrine:mapping:info</argument>
      </call>
    </service>
    <service id=\"doctrine.clear_query_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-query-region\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-query-region</argument>
      </call>
    </service>
    <service id=\"doctrine.query_dql_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:query:dql\"/>
      <call method=\"setName\">
        <argument>doctrine:query:dql</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_update_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:update\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:update</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_validate_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:validate\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:validate</argument>
      </call>
    </service>
    <service id=\"doctrine.mapping_import_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:mapping:import\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <argument>%kernel.bundles%</argument>
      <call method=\"setName\">
        <argument>doctrine:mapping:import</argument>
      </call>
    </service>
    <service id=\"doctrine.orm.default_configuration\" class=\"Doctrine\\ORM\\Configuration\" public=\"false\">
      <call method=\"setEntityNamespaces\">
        <argument type=\"collection\">
          <argument key=\"App\">App\\Entity</argument>
        </argument>
      </call>
      <call method=\"setMetadataCacheImpl\">
        <argument type=\"service\" id=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata\"/>
      </call>
      <call method=\"setQueryCacheImpl\">
        <argument type=\"service\" id=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.query\"/>
      </call>
      <call method=\"setResultCacheImpl\">
        <argument type=\"service\" id=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.result\"/>
      </call>
      <call method=\"setMetadataDriverImpl\">
        <argument type=\"service\" id=\"doctrine.orm.default_metadata_driver\"/>
      </call>
      <call method=\"setProxyDir\">
        <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/doctrine/orm/Proxies</argument>
      </call>
      <call method=\"setProxyNamespace\">
        <argument>Proxies</argument>
      </call>
      <call method=\"setAutoGenerateProxyClasses\">
        <argument>true</argument>
      </call>
      <call method=\"setClassMetadataFactoryName\">
        <argument>Doctrine\\ORM\\Mapping\\ClassMetadataFactory</argument>
      </call>
      <call method=\"setDefaultRepositoryClassName\">
        <argument>Doctrine\\ORM\\EntityRepository</argument>
      </call>
      <call method=\"setNamingStrategy\">
        <argument type=\"service\" id=\"doctrine.orm.naming_strategy.underscore_number_aware\"/>
      </call>
      <call method=\"setQuoteStrategy\">
        <argument type=\"service\" id=\"doctrine.orm.quote_strategy.default\"/>
      </call>
      <call method=\"setEntityListenerResolver\">
        <argument type=\"service\" id=\"doctrine.orm.default_entity_listener_resolver\"/>
      </call>
      <call method=\"setRepositoryFactory\">
        <argument type=\"service\" id=\"doctrine.orm.container_repository_factory\"/>
      </call>
    </service>
    <service id=\"doctrine.orm.default_annotation_metadata_driver\" class=\"Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver\" public=\"false\">
      <argument type=\"service\" id=\"annotations.cached_reader\"/>
      <argument type=\"collection\">
        <argument>C:\\wamp64\\www\\QuillBlog\\src\\Entity</argument>
      </argument>
    </service>
    <service id=\"doctrine.orm.default_metadata_driver\" class=\"Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain\" public=\"false\">
      <call method=\"addDriver\">
        <argument type=\"service\" id=\"doctrine.orm.default_annotation_metadata_driver\"/>
        <argument>App\\Entity</argument>
      </call>
    </service>
    <service id=\"cache.doctrine.orm.default.metadata\" class=\"Symfony\\Component\\Cache\\Adapter\\ArrayAdapter\">
      <tag name=\"cache.pool\"/>
    </service>
    <service id=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata\" class=\"Symfony\\Component\\Cache\\DoctrineProvider\">
      <argument type=\"service\" id=\"cache.doctrine.orm.default.metadata\"/>
    </service>
    <service id=\"cache.doctrine.orm.default.result\" class=\"Symfony\\Component\\Cache\\Adapter\\ArrayAdapter\">
      <tag name=\"cache.pool\"/>
    </service>
    <service id=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.result\" class=\"Symfony\\Component\\Cache\\DoctrineProvider\">
      <argument type=\"service\" id=\"cache.doctrine.orm.default.result\"/>
    </service>
    <service id=\"cache.doctrine.orm.default.query\" class=\"Symfony\\Component\\Cache\\Adapter\\ArrayAdapter\">
      <tag name=\"cache.pool\"/>
    </service>
    <service id=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.query\" class=\"Symfony\\Component\\Cache\\DoctrineProvider\">
      <argument type=\"service\" id=\"cache.doctrine.orm.default.query\"/>
    </service>
    <service id=\"doctrine.orm.default_entity_listener_resolver\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver\">
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"doctrine.orm.default_listeners.attach_entity_listeners\" class=\"Doctrine\\ORM\\Tools\\AttachEntityListenersListener\">
      <tag name=\"doctrine.event_listener\" event=\"loadClassMetadata\"/>
    </service>
    <service id=\"doctrine.orm.default_manager_configurator\" class=\"Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator\">
      <argument type=\"collection\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.orm.default_entity_manager\" class=\"Doctrine\\ORM\\EntityManager\" public=\"true\" lazy=\"true\">
      <argument type=\"service\" id=\"doctrine.dbal.default_connection\"/>
      <argument type=\"service\" id=\"doctrine.orm.default_configuration\"/>
      <factory class=\"Doctrine\\ORM\\EntityManager\" method=\"create\"/>
      <configurator service=\"doctrine.orm.default_manager_configurator\" method=\"configure\"/>
    </service>
    <service id=\"doctrine.orm.default_entity_manager.validator_loader\" class=\"Symfony\\Bridge\\Doctrine\\Validator\\DoctrineLoader\">
      <tag name=\"validator.auto_mapper\" priority=\"-100\"/>
      <argument type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
    </service>
    <service id=\"doctrine_migrations.diff_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:diff</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.dump_schema_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:dump-schema</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.execute_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:execute</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.generate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:generate</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.latest_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:latest</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.migrate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:migrate</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.rollup_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:rollup</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.status_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:status</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.up_to_date_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:up-to-date</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.version_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:version</argument>
      </call>
    </service>
    <service id=\".1_~woTWp3X\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
      <argument>true</argument>
      <factory class=\"Symfony\\Bridge\\Twig\\ErrorRenderer\\TwigErrorRenderer\" method=\"isDebug\"/>
    </service>
    <service id=\"twig\" class=\"Twig\\Environment\" public=\"true\">
      <argument type=\"service\" id=\"twig.loader.native_filesystem\"/>
      <argument type=\"collection\">
        <argument key=\"autoescape\">name</argument>
        <argument key=\"cache\">C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/twig</argument>
        <argument key=\"charset\">UTF-8</argument>
        <argument key=\"debug\">true</argument>
        <argument key=\"strict_variables\">true</argument>
      </argument>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.profiler\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.trans\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.assets\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.code\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.routing\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.yaml\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.debug.stopwatch\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.httpkernel\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.httpfoundation\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"doctrine.twig.doctrine_extension\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.debug\"/>
      </call>
      <call method=\"addGlobal\">
        <argument>app</argument>
        <argument type=\"service\" id=\"twig.app_variable\"/>
      </call>
      <call method=\"addRuntimeLoader\">
        <argument type=\"service\" id=\"twig.runtime_loader\"/>
      </call>
      <call method=\"registerUndefinedFilterCallback\">
        <argument type=\"collection\">
          <argument type=\"service\" id=\"twig.missing_extension_suggestor\"/>
          <argument>suggestFilter</argument>
        </argument>
      </call>
      <call method=\"registerUndefinedFunctionCallback\">
        <argument type=\"collection\">
          <argument type=\"service\" id=\"twig.missing_extension_suggestor\"/>
          <argument>suggestFunction</argument>
        </argument>
      </call>
      <configurator service=\"twig.configurator.environment\" method=\"configure\"/>
    </service>
    <service id=\"twig.app_variable\" class=\"Symfony\\Bridge\\Twig\\AppVariable\" public=\"false\">
      <call method=\"setEnvironment\">
        <argument>dev</argument>
      </call>
      <call method=\"setDebug\">
        <argument>true</argument>
      </call>
      <call method=\"setRequestStack\">
        <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"twig.template_iterator\" class=\"Symfony\\Bundle\\TwigBundle\\TemplateIterator\" public=\"false\">
      <argument type=\"service\" id=\"kernel\"/>
      <argument type=\"collection\">
        <argument key=\"C:\\wamp64\\www\\QuillBlog/public/includes\">includes</argument>
        <argument key=\"C:\\wamp64\\www\\QuillBlog\">app</argument>
      </argument>
      <argument>C:\\wamp64\\www\\QuillBlog/templates</argument>
    </service>
    <service id=\"twig.template_cache_warmer\" class=\"Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <tag name=\"container.service_subscriber\" id=\"twig\"/>
      <argument type=\"service\" id=\".service_locator.lSARbri.twig.template_cache_warmer\"/>
      <argument type=\"service\" id=\"twig.template_iterator\"/>
    </service>
    <service id=\"twig.loader.native_filesystem\" class=\"Twig\\Loader\\FilesystemLoader\" public=\"false\">
      <tag name=\"twig.loader\"/>
      <argument type=\"collection\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <call method=\"addPath\">
        <argument>C:\\wamp64\\www\\QuillBlog/public/includes</argument>
        <argument>includes</argument>
      </call>
      <call method=\"addPath\">
        <argument>C:\\wamp64\\www\\QuillBlog</argument>
        <argument>app</argument>
      </call>
      <call method=\"addPath\">
        <argument>C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle/Resources/views</argument>
        <argument>Framework</argument>
      </call>
      <call method=\"addPath\">
        <argument>C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle/Resources/views</argument>
        <argument>!Framework</argument>
      </call>
      <call method=\"addPath\">
        <argument>C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle/Resources/views</argument>
        <argument>Doctrine</argument>
      </call>
      <call method=\"addPath\">
        <argument>C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle/Resources/views</argument>
        <argument>!Doctrine</argument>
      </call>
      <call method=\"addPath\">
        <argument>C:\\wamp64\\www\\QuillBlog/templates</argument>
      </call>
    </service>
    <service id=\"twig.loader.chain\" class=\"Twig\\Loader\\ChainLoader\" public=\"false\"/>
    <service id=\"twig.extension.profiler\" class=\"Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"twig.profile\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"null\"/>
    </service>
    <service id=\"twig.profile\" class=\"Twig\\Profiler\\Profile\" public=\"false\"/>
    <service id=\"data_collector.twig\" class=\"Symfony\\Bridge\\Twig\\DataCollector\\TwigDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/twig.html.twig\" id=\"twig\" priority=\"257\"/>
      <argument type=\"service\" id=\"twig.profile\"/>
      <argument type=\"service\" id=\"twig\"/>
    </service>
    <service id=\"twig.extension.trans\" class=\"Symfony\\Bridge\\Twig\\Extension\\TranslationExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument>null</argument>
    </service>
    <service id=\"twig.extension.assets\" class=\"Symfony\\Bridge\\Twig\\Extension\\AssetExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"assets.packages\"/>
    </service>
    <service id=\"twig.extension.code\" class=\"Symfony\\Bridge\\Twig\\Extension\\CodeExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <argument>UTF-8</argument>
    </service>
    <service id=\"twig.extension.routing\" class=\"Symfony\\Bridge\\Twig\\Extension\\RoutingExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"router.default\"/>
    </service>
    <service id=\"twig.extension.yaml\" class=\"Symfony\\Bridge\\Twig\\Extension\\YamlExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"twig.extension.debug.stopwatch\" class=\"Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\"/>
      <argument>true</argument>
    </service>
    <service id=\"twig.extension.httpkernel\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"twig.runtime.httpkernel\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime\" public=\"false\">
      <tag name=\"twig.runtime\"/>
      <argument type=\"service\" id=\"fragment.handler\"/>
    </service>
    <service id=\"twig.extension.httpfoundation\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpFoundationExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"url_helper\"/>
    </service>
    <service id=\"twig.extension.debug\" class=\"Twig\\Extension\\DebugExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"twig.extension.weblink\" class=\"Symfony\\Bridge\\Twig\\Extension\\WebLinkExtension\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
    </service>
    <service id=\"twig.configurator.environment\" class=\"Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator\" public=\"false\">
      <argument>F j, Y H:i</argument>
      <argument>%d days</argument>
      <argument>null</argument>
      <argument>0</argument>
      <argument>.</argument>
      <argument>,</argument>
    </service>
    <service id=\"twig.runtime_loader\" class=\"Twig\\RuntimeLoader\\ContainerRuntimeLoader\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.UCasskA\"/>
    </service>
    <service id=\"twig.error_renderer.html\" class=\"Symfony\\Bridge\\Twig\\ErrorRenderer\\TwigErrorRenderer\" public=\"false\">
      <argument type=\"service\" id=\"twig\"/>
      <argument type=\"service\" id=\"error_handler.error_renderer.html\"/>
      <argument type=\"service\" id=\".1_~woTWp3X\"/>
    </service>
    <service id=\"twig.command.debug\" class=\"Symfony\\Bridge\\Twig\\Command\\DebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:twig\"/>
      <argument type=\"service\" id=\"twig\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <argument>%kernel.bundles_metadata%</argument>
      <argument>C:\\wamp64\\www\\QuillBlog/templates</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <call method=\"setName\">
        <argument>debug:twig</argument>
      </call>
    </service>
    <service id=\"twig.command.lint\" class=\"Symfony\\Bundle\\TwigBundle\\Command\\LintCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"lint:twig\"/>
      <argument type=\"service\" id=\"twig\"/>
      <call method=\"setName\">
        <argument>lint:twig</argument>
      </call>
    </service>
    <service id=\"twig.missing_extension_suggestor\" class=\"Twig\\Extra\\TwigExtraBundle\\MissingExtensionSuggestor\" public=\"false\"/>
    <service id=\".instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\BlogController\" class=\"App\\Controller\\BlogController\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\BlogController\" class=\"App\\Controller\\BlogController\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Controller\\BlogController\" class=\"App\\Controller\\BlogController\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\BlogControllerRepository\" class=\"App\\Repository\\BlogControllerRepository\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Repository\\BlogControllerRepository\" class=\"App\\Repository\\BlogControllerRepository\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".service_locator.CmORmuK\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"base64\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"bool\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"const\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"csv\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"default\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"file\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"float\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"int\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"json\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"key\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"query_string\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"require\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"resolve\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"string\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"trim\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"url\" type=\"service\" id=\"container.env_var_processor\"/>
      </argument>
    </service>
    <service id=\"maker.auto_command.make_auth\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:auth\"/>
      <argument type=\"service\" id=\"maker.maker.make_authenticator\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:auth</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_command\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:command\"/>
      <argument type=\"service\" id=\"maker.maker.make_command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:command</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_controller\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:controller\"/>
      <argument type=\"service\" id=\"maker.maker.make_controller\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:controller</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_crud\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:crud\"/>
      <argument type=\"service\" id=\"maker.maker.make_crud\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:crud</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_entity\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:entity\"/>
      <argument type=\"service\" id=\"maker.maker.make_entity\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:entity</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_fixtures\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:fixtures\"/>
      <argument type=\"service\" id=\"maker.maker.make_fixtures\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:fixtures</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_form\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:form\"/>
      <argument type=\"service\" id=\"maker.maker.make_form\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:form</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_functional_test\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:functional-test\"/>
      <argument type=\"service\" id=\"maker.maker.make_functional_test\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:functional-test</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_registration_form\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:registration-form\"/>
      <argument type=\"service\" id=\"maker.maker.make_registration_form\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:registration-form</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_serializer_encoder\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:serializer:encoder\"/>
      <argument type=\"service\" id=\"maker.maker.make_serializer_encoder\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:serializer:encoder</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_serializer_normalizer\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:serializer:normalizer\"/>
      <argument type=\"service\" id=\"maker.maker.make_serializer_normalizer\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:serializer:normalizer</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_subscriber\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:subscriber\"/>
      <argument type=\"service\" id=\"maker.maker.make_subscriber\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:subscriber</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_twig_extension\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:twig-extension\"/>
      <argument type=\"service\" id=\"maker.maker.make_twig_extension\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:twig-extension</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_unit_test\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:unit-test\"/>
      <argument type=\"service\" id=\"maker.maker.make_unit_test\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:unit-test</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_validator\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:validator\"/>
      <argument type=\"service\" id=\"maker.maker.make_validator\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:validator</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_voter\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:voter\"/>
      <argument type=\"service\" id=\"maker.maker.make_voter\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:voter</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_user\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:user\"/>
      <argument type=\"service\" id=\"maker.maker.make_user\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:user</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_migration\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:migration\"/>
      <argument type=\"service\" id=\"maker.maker.make_migration\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:migration</argument>
      </call>
    </service>
    <service id=\".service_locator.I3K77mT\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\".service_locator._cmka45\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"inline\" type=\"service\" id=\"fragment.renderer.inline\"/>
      </argument>
    </service>
    <service id=\"debug.argument_resolver.request_attribute\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"100\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.request_attribute.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.request\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"50\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.request.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.session\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"50\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.session.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.service\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-50\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.service.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.default\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-100\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.default.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.variadic\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-150\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.variadic.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.not_tagged_controller\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-200\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.not_tagged_controller.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\".service_locator.bpvU51K\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"doctrine.orm.default_listeners.attach_entity_listeners\" type=\"service\" id=\"doctrine.orm.default_listeners.attach_entity_listeners\"/>
      </argument>
    </service>
    <service id=\".service_locator.kOQSzIs\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"App\\Repository\\BlogControllerRepository\" type=\"service\" id=\"App\\Repository\\BlogControllerRepository\"/>
      </argument>
    </service>
    <service id=\"logger\" class=\"Symfony\\Component\\HttpKernel\\Log\\Logger\" public=\"false\"/>
    <service id=\".service_locator.pNNo5z3\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"doctrine\" type=\"service\" id=\"doctrine\" on-invalid=\"ignore\"/>
        <argument key=\"http_kernel\" type=\"service\" id=\"http_kernel\" on-invalid=\"ignore\"/>
        <argument key=\"parameter_bag\" type=\"service\" id=\"parameter_bag\" on-invalid=\"ignore\"/>
        <argument key=\"request_stack\" type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
        <argument key=\"router\" type=\"service\" id=\"router.default\" on-invalid=\"ignore\"/>
        <argument key=\"session\" type=\"service\" id=\"session\" on-invalid=\"ignore\"/>
        <argument key=\"twig\" type=\"service\" id=\"twig\" on-invalid=\"ignore\"/>
      </argument>
    </service>
    <service id=\".service_locator.pNNo5z3.App\\Controller\\BlogController\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"App\\Controller\\BlogController\"/>
      <argument>App\\Controller\\BlogController</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.pNNo5z3\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.ld1.260\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"routing.loader\" type=\"service\" id=\"routing.loader\"/>
      </argument>
    </service>
    <service id=\".service_locator.ld1.260.router.default\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"router.default\"/>
      <argument>router.default</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.ld1.260\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.3TLJ8AE\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"router\" type=\"service\" id=\"router.default\"/>
      </argument>
    </service>
    <service id=\".service_locator.3TLJ8AE.router.cache_warmer\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"router.cache_warmer\"/>
      <argument>router.cache_warmer</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.3TLJ8AE\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.lSARbri\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"twig\" type=\"service\" id=\"twig\"/>
      </argument>
    </service>
    <service id=\".service_locator.lSARbri.twig.template_cache_warmer\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"twig.template_cache_warmer\"/>
      <argument>twig.template_cache_warmer</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.lSARbri\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.wnlveDj\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"reverse_container\" type=\"service\" id=\"reverse_container\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\".service_locator.Bppmeg3\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"initialized_session\" type=\"service\" id=\"session\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"request_stack\" type=\"service\" id=\"request_stack\"/>
        <argument key=\"session\" type=\"service\" id=\"session\" on-invalid=\"ignore\"/>
        <argument key=\"session_storage\" type=\"service\" id=\"session.storage.native\" on-invalid=\"ignore\"/>
      </argument>
    </service>
    <service id=\".service_locator.mshSVvX\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"kernel\" type=\"service\" id=\"kernel\"/>
      </argument>
    </service>
    <service id=\"debug.event_dispatcher.inner\" class=\"Symfony\\Component\\EventDispatcher\\EventDispatcher\" public=\"false\"/>
    <service id=\"debug.controller_resolver.inner\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver\" public=\"false\">
      <argument type=\"service\" id=\"service_container\"/>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"debug.argument_resolver.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\" public=\"false\">
      <argument type=\"service\" id=\"argument_metadata_factory\"/>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"debug.argument_resolver.request_attribute\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.request\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.session\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.service\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.default\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.variadic\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.not_tagged_controller\"/>
      </argument>
    </service>
    <service id=\"debug.argument_resolver.request_attribute.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.request.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.session.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\SessionValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.service.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\ServiceValueResolver\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.I3K77mT\"/>
    </service>
    <service id=\"debug.argument_resolver.default.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\DefaultValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.variadic.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\VariadicValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.not_tagged_controller.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\NotTaggedControllerValueResolver\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.I3K77mT\"/>
    </service>
    <service id=\"console.command_loader\" class=\"Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader\" public=\"true\">
      <argument type=\"service\" id=\".service_locator.gZrzbkL\"/>
      <argument type=\"collection\">
        <argument key=\"about\">console.command.about</argument>
        <argument key=\"assets:install\">console.command.assets_install</argument>
        <argument key=\"cache:clear\">console.command.cache_clear</argument>
        <argument key=\"cache:pool:clear\">console.command.cache_pool_clear</argument>
        <argument key=\"cache:pool:prune\">console.command.cache_pool_prune</argument>
        <argument key=\"cache:pool:delete\">console.command.cache_pool_delete</argument>
        <argument key=\"cache:pool:list\">console.command.cache_pool_list</argument>
        <argument key=\"cache:warmup\">console.command.cache_warmup</argument>
        <argument key=\"debug:config\">console.command.config_debug</argument>
        <argument key=\"config:dump-reference\">console.command.config_dump_reference</argument>
        <argument key=\"debug:container\">console.command.container_debug</argument>
        <argument key=\"lint:container\">console.command.container_lint</argument>
        <argument key=\"debug:autowiring\">console.command.debug_autowiring</argument>
        <argument key=\"debug:event-dispatcher\">console.command.event_dispatcher_debug</argument>
        <argument key=\"debug:router\">console.command.router_debug</argument>
        <argument key=\"router:match\">console.command.router_match</argument>
        <argument key=\"lint:yaml\">console.command.yaml_lint</argument>
        <argument key=\"secrets:set\">console.command.secrets_set</argument>
        <argument key=\"secrets:remove\">console.command.secrets_remove</argument>
        <argument key=\"secrets:generate-keys\">console.command.secrets_generate_key</argument>
        <argument key=\"secrets:list\">console.command.secrets_list</argument>
        <argument key=\"secrets:decrypt-to-local\">console.command.secrets_decrypt_to_local</argument>
        <argument key=\"secrets:encrypt-from-local\">console.command.secrets_encrypt_from_local</argument>
        <argument key=\"doctrine:database:create\">doctrine.database_create_command</argument>
        <argument key=\"doctrine:database:drop\">doctrine.database_drop_command</argument>
        <argument key=\"doctrine:database:import\">doctrine.database_import_command</argument>
        <argument key=\"doctrine:query:sql\">doctrine.query_sql_command</argument>
        <argument key=\"doctrine:cache:clear-metadata\">doctrine.cache_clear_metadata_command</argument>
        <argument key=\"doctrine:cache:clear-query\">doctrine.cache_clear_query_cache_command</argument>
        <argument key=\"doctrine:cache:clear-result\">doctrine.cache_clear_result_command</argument>
        <argument key=\"doctrine:cache:clear-collection-region\">doctrine.cache_collection_region_command</argument>
        <argument key=\"doctrine:mapping:convert\">doctrine.mapping_convert_command</argument>
        <argument key=\"doctrine:schema:create\">doctrine.schema_create_command</argument>
        <argument key=\"doctrine:schema:drop\">doctrine.schema_drop_command</argument>
        <argument key=\"doctrine:ensure-production-settings\">doctrine.ensure_production_settings_command</argument>
        <argument key=\"doctrine:cache:clear-entity-region\">doctrine.clear_entity_region_command</argument>
        <argument key=\"doctrine:mapping:info\">doctrine.mapping_info_command</argument>
        <argument key=\"doctrine:cache:clear-query-region\">doctrine.clear_query_region_command</argument>
        <argument key=\"doctrine:query:dql\">doctrine.query_dql_command</argument>
        <argument key=\"doctrine:schema:update\">doctrine.schema_update_command</argument>
        <argument key=\"doctrine:schema:validate\">doctrine.schema_validate_command</argument>
        <argument key=\"doctrine:mapping:import\">doctrine.mapping_import_command</argument>
        <argument key=\"doctrine:migrations:diff\">doctrine_migrations.diff_command</argument>
        <argument key=\"doctrine:migrations:dump-schema\">doctrine_migrations.dump_schema_command</argument>
        <argument key=\"doctrine:migrations:execute\">doctrine_migrations.execute_command</argument>
        <argument key=\"doctrine:migrations:generate\">doctrine_migrations.generate_command</argument>
        <argument key=\"doctrine:migrations:latest\">doctrine_migrations.latest_command</argument>
        <argument key=\"doctrine:migrations:migrate\">doctrine_migrations.migrate_command</argument>
        <argument key=\"doctrine:migrations:rollup\">doctrine_migrations.rollup_command</argument>
        <argument key=\"doctrine:migrations:status\">doctrine_migrations.status_command</argument>
        <argument key=\"doctrine:migrations:up-to-date\">doctrine_migrations.up_to_date_command</argument>
        <argument key=\"doctrine:migrations:version\">doctrine_migrations.version_command</argument>
        <argument key=\"debug:twig\">twig.command.debug</argument>
        <argument key=\"lint:twig\">twig.command.lint</argument>
        <argument key=\"make:auth\">maker.auto_command.make_auth</argument>
        <argument key=\"make:command\">maker.auto_command.make_command</argument>
        <argument key=\"make:controller\">maker.auto_command.make_controller</argument>
        <argument key=\"make:crud\">maker.auto_command.make_crud</argument>
        <argument key=\"make:entity\">maker.auto_command.make_entity</argument>
        <argument key=\"make:fixtures\">maker.auto_command.make_fixtures</argument>
        <argument key=\"make:form\">maker.auto_command.make_form</argument>
        <argument key=\"make:functional-test\">maker.auto_command.make_functional_test</argument>
        <argument key=\"make:registration-form\">maker.auto_command.make_registration_form</argument>
        <argument key=\"make:serializer:encoder\">maker.auto_command.make_serializer_encoder</argument>
        <argument key=\"make:serializer:normalizer\">maker.auto_command.make_serializer_normalizer</argument>
        <argument key=\"make:subscriber\">maker.auto_command.make_subscriber</argument>
        <argument key=\"make:twig-extension\">maker.auto_command.make_twig_extension</argument>
        <argument key=\"make:unit-test\">maker.auto_command.make_unit_test</argument>
        <argument key=\"make:validator\">maker.auto_command.make_validator</argument>
        <argument key=\"make:voter\">maker.auto_command.make_voter</argument>
        <argument key=\"make:user\">maker.auto_command.make_user</argument>
        <argument key=\"make:migration\">maker.auto_command.make_migration</argument>
      </argument>
    </service>
    <service id=\".service_locator.gZrzbkL\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"console.command.about\" type=\"service\" id=\"console.command.about\"/>
        <argument key=\"console.command.assets_install\" type=\"service\" id=\"console.command.assets_install\"/>
        <argument key=\"console.command.cache_clear\" type=\"service\" id=\"console.command.cache_clear\"/>
        <argument key=\"console.command.cache_pool_clear\" type=\"service\" id=\"console.command.cache_pool_clear\"/>
        <argument key=\"console.command.cache_pool_delete\" type=\"service\" id=\"console.command.cache_pool_delete\"/>
        <argument key=\"console.command.cache_pool_list\" type=\"service\" id=\"console.command.cache_pool_list\"/>
        <argument key=\"console.command.cache_pool_prune\" type=\"service\" id=\"console.command.cache_pool_prune\"/>
        <argument key=\"console.command.cache_warmup\" type=\"service\" id=\"console.command.cache_warmup\"/>
        <argument key=\"console.command.config_debug\" type=\"service\" id=\"console.command.config_debug\"/>
        <argument key=\"console.command.config_dump_reference\" type=\"service\" id=\"console.command.config_dump_reference\"/>
        <argument key=\"console.command.container_debug\" type=\"service\" id=\"console.command.container_debug\"/>
        <argument key=\"console.command.container_lint\" type=\"service\" id=\"console.command.container_lint\"/>
        <argument key=\"console.command.debug_autowiring\" type=\"service\" id=\"console.command.debug_autowiring\"/>
        <argument key=\"console.command.event_dispatcher_debug\" type=\"service\" id=\"console.command.event_dispatcher_debug\"/>
        <argument key=\"console.command.router_debug\" type=\"service\" id=\"console.command.router_debug\"/>
        <argument key=\"console.command.router_match\" type=\"service\" id=\"console.command.router_match\"/>
        <argument key=\"console.command.secrets_decrypt_to_local\" type=\"service\" id=\"console.command.secrets_decrypt_to_local\"/>
        <argument key=\"console.command.secrets_encrypt_from_local\" type=\"service\" id=\"console.command.secrets_encrypt_from_local\"/>
        <argument key=\"console.command.secrets_generate_key\" type=\"service\" id=\"console.command.secrets_generate_key\"/>
        <argument key=\"console.command.secrets_list\" type=\"service\" id=\"console.command.secrets_list\"/>
        <argument key=\"console.command.secrets_remove\" type=\"service\" id=\"console.command.secrets_remove\"/>
        <argument key=\"console.command.secrets_set\" type=\"service\" id=\"console.command.secrets_set\"/>
        <argument key=\"console.command.yaml_lint\" type=\"service\" id=\"console.command.yaml_lint\"/>
        <argument key=\"doctrine.cache_clear_metadata_command\" type=\"service\" id=\"doctrine.cache_clear_metadata_command\"/>
        <argument key=\"doctrine.cache_clear_query_cache_command\" type=\"service\" id=\"doctrine.cache_clear_query_cache_command\"/>
        <argument key=\"doctrine.cache_clear_result_command\" type=\"service\" id=\"doctrine.cache_clear_result_command\"/>
        <argument key=\"doctrine.cache_collection_region_command\" type=\"service\" id=\"doctrine.cache_collection_region_command\"/>
        <argument key=\"doctrine.clear_entity_region_command\" type=\"service\" id=\"doctrine.clear_entity_region_command\"/>
        <argument key=\"doctrine.clear_query_region_command\" type=\"service\" id=\"doctrine.clear_query_region_command\"/>
        <argument key=\"doctrine.database_create_command\" type=\"service\" id=\"doctrine.database_create_command\"/>
        <argument key=\"doctrine.database_drop_command\" type=\"service\" id=\"doctrine.database_drop_command\"/>
        <argument key=\"doctrine.database_import_command\" type=\"service\" id=\"doctrine.database_import_command\"/>
        <argument key=\"doctrine.ensure_production_settings_command\" type=\"service\" id=\"doctrine.ensure_production_settings_command\"/>
        <argument key=\"doctrine.mapping_convert_command\" type=\"service\" id=\"doctrine.mapping_convert_command\"/>
        <argument key=\"doctrine.mapping_import_command\" type=\"service\" id=\"doctrine.mapping_import_command\"/>
        <argument key=\"doctrine.mapping_info_command\" type=\"service\" id=\"doctrine.mapping_info_command\"/>
        <argument key=\"doctrine.query_dql_command\" type=\"service\" id=\"doctrine.query_dql_command\"/>
        <argument key=\"doctrine.query_sql_command\" type=\"service\" id=\"doctrine.query_sql_command\"/>
        <argument key=\"doctrine.schema_create_command\" type=\"service\" id=\"doctrine.schema_create_command\"/>
        <argument key=\"doctrine.schema_drop_command\" type=\"service\" id=\"doctrine.schema_drop_command\"/>
        <argument key=\"doctrine.schema_update_command\" type=\"service\" id=\"doctrine.schema_update_command\"/>
        <argument key=\"doctrine.schema_validate_command\" type=\"service\" id=\"doctrine.schema_validate_command\"/>
        <argument key=\"doctrine_migrations.diff_command\" type=\"service\" id=\"doctrine_migrations.diff_command\"/>
        <argument key=\"doctrine_migrations.dump_schema_command\" type=\"service\" id=\"doctrine_migrations.dump_schema_command\"/>
        <argument key=\"doctrine_migrations.execute_command\" type=\"service\" id=\"doctrine_migrations.execute_command\"/>
        <argument key=\"doctrine_migrations.generate_command\" type=\"service\" id=\"doctrine_migrations.generate_command\"/>
        <argument key=\"doctrine_migrations.latest_command\" type=\"service\" id=\"doctrine_migrations.latest_command\"/>
        <argument key=\"doctrine_migrations.migrate_command\" type=\"service\" id=\"doctrine_migrations.migrate_command\"/>
        <argument key=\"doctrine_migrations.rollup_command\" type=\"service\" id=\"doctrine_migrations.rollup_command\"/>
        <argument key=\"doctrine_migrations.status_command\" type=\"service\" id=\"doctrine_migrations.status_command\"/>
        <argument key=\"doctrine_migrations.up_to_date_command\" type=\"service\" id=\"doctrine_migrations.up_to_date_command\"/>
        <argument key=\"doctrine_migrations.version_command\" type=\"service\" id=\"doctrine_migrations.version_command\"/>
        <argument key=\"maker.auto_command.make_auth\" type=\"service\" id=\"maker.auto_command.make_auth\"/>
        <argument key=\"maker.auto_command.make_command\" type=\"service\" id=\"maker.auto_command.make_command\"/>
        <argument key=\"maker.auto_command.make_controller\" type=\"service\" id=\"maker.auto_command.make_controller\"/>
        <argument key=\"maker.auto_command.make_crud\" type=\"service\" id=\"maker.auto_command.make_crud\"/>
        <argument key=\"maker.auto_command.make_entity\" type=\"service\" id=\"maker.auto_command.make_entity\"/>
        <argument key=\"maker.auto_command.make_fixtures\" type=\"service\" id=\"maker.auto_command.make_fixtures\"/>
        <argument key=\"maker.auto_command.make_form\" type=\"service\" id=\"maker.auto_command.make_form\"/>
        <argument key=\"maker.auto_command.make_functional_test\" type=\"service\" id=\"maker.auto_command.make_functional_test\"/>
        <argument key=\"maker.auto_command.make_migration\" type=\"service\" id=\"maker.auto_command.make_migration\"/>
        <argument key=\"maker.auto_command.make_registration_form\" type=\"service\" id=\"maker.auto_command.make_registration_form\"/>
        <argument key=\"maker.auto_command.make_serializer_encoder\" type=\"service\" id=\"maker.auto_command.make_serializer_encoder\"/>
        <argument key=\"maker.auto_command.make_serializer_normalizer\" type=\"service\" id=\"maker.auto_command.make_serializer_normalizer\"/>
        <argument key=\"maker.auto_command.make_subscriber\" type=\"service\" id=\"maker.auto_command.make_subscriber\"/>
        <argument key=\"maker.auto_command.make_twig_extension\" type=\"service\" id=\"maker.auto_command.make_twig_extension\"/>
        <argument key=\"maker.auto_command.make_unit_test\" type=\"service\" id=\"maker.auto_command.make_unit_test\"/>
        <argument key=\"maker.auto_command.make_user\" type=\"service\" id=\"maker.auto_command.make_user\"/>
        <argument key=\"maker.auto_command.make_validator\" type=\"service\" id=\"maker.auto_command.make_validator\"/>
        <argument key=\"maker.auto_command.make_voter\" type=\"service\" id=\"maker.auto_command.make_voter\"/>
        <argument key=\"twig.command.debug\" type=\"service\" id=\"twig.command.debug\"/>
        <argument key=\"twig.command.lint\" type=\"service\" id=\"twig.command.lint\"/>
      </argument>
    </service>
    <service id=\".service_locator.UCasskA\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime\" type=\"service\" id=\"twig.runtime.httpkernel\"/>
      </argument>
    </service>
    <service id=\"Psr\\Container\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface\" alias=\"parameter_bag\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface\" alias=\"parameter_bag\" public=\"false\"/>
    <service id=\"Symfony\\Component\\EventDispatcher\\EventDispatcherInterface\" alias=\"debug.event_dispatcher\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface\" alias=\"debug.event_dispatcher\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\HttpKernelInterface\" alias=\"http_kernel\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\RequestStack\" alias=\"request_stack\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\UrlHelper\" alias=\"url_helper\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\KernelInterface\" alias=\"kernel\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Filesystem\\Filesystem\" alias=\"filesystem\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\Config\\FileLocator\" alias=\"file_locator\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ReverseContainer\" alias=\"reverse_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\String\\Slugger\\SluggerInterface\" alias=\"slugger\" public=\"false\"/>
    <service id=\"error_renderer.html\" alias=\"twig.error_renderer.html\"/>
    <service id=\"error_renderer\" alias=\"twig.error_renderer.html\"/>
    <service id=\"Psr\\EventDispatcher\\EventDispatcherInterface\" alias=\"debug.event_dispatcher\"/>
    <service id=\"Psr\\Container\\ContainerInterface \$parameterBag\" alias=\"parameter_bag\"/>
    <service id=\"cache.app_clearer\" alias=\"cache.default_clearer\" public=\"true\"/>
    <service id=\"Psr\\Cache\\CacheItemPoolInterface\" alias=\"cache.app\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" alias=\"cache.app\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\Cache\\CacheInterface\" alias=\"cache.app\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\Cache\\TagAwareCacheInterface\" alias=\"cache.app.taggable\" public=\"false\"/>
    <service id=\"cache.default_redis_provider\" alias=\".cache_connection.GD_MSZC\" public=\"false\"/>
    <service id=\"cache.default_memcached_provider\" alias=\".cache_connection.JKE6keX\" public=\"false\"/>
    <service id=\"cache.default_pdo_provider\" alias=\"doctrine.dbal.default_connection\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\Session\\SessionInterface\" alias=\"session\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface\" alias=\"session.storage.native\" public=\"false\"/>
    <service id=\"SessionHandlerInterface\" alias=\"session.handler\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface\" alias=\"session.flash_bag\" public=\"false\"/>
    <service id=\"session.storage.filesystem\" alias=\"session.storage.mock_file\" public=\"false\"/>
    <service id=\"session.storage\" alias=\"session.storage.native\"/>
    <service id=\"Symfony\\Component\\Asset\\Packages\" alias=\"assets.packages\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\" alias=\"debug.file_link_formatter\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Stopwatch\\Stopwatch\" alias=\"debug.stopwatch\" public=\"false\"/>
    <service id=\"router\" alias=\"router.default\" public=\"true\"/>
    <service id=\"Symfony\\Component\\Routing\\RouterInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\RequestContextAwareInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\RequestContext\" alias=\"router.request_context\" public=\"false\"/>
    <service id=\"annotation_reader\" alias=\"annotations.cached_reader\"/>
    <service id=\"Doctrine\\Common\\Annotations\\Reader\" alias=\"annotations.cached_reader\" public=\"false\"/>
    <service id=\"Doctrine\\DBAL\\Driver\\Connection\" alias=\"doctrine.dbal.default_connection\" public=\"false\"/>
    <service id=\"Doctrine\\DBAL\\Connection\" alias=\"doctrine.dbal.default_connection\" public=\"false\"/>
    <service id=\"Doctrine\\Persistence\\ManagerRegistry\" alias=\"doctrine\" public=\"false\"/>
    <service id=\"Doctrine\\Common\\Persistence\\ManagerRegistry\" alias=\"doctrine\" public=\"false\"/>
    <service id=\"database_connection\" alias=\"doctrine.dbal.default_connection\" public=\"true\"/>
    <service id=\"doctrine.dbal.event_manager\" alias=\"doctrine.dbal.default_connection.event_manager\" public=\"false\"/>
    <service id=\"Doctrine\\ORM\\EntityManagerInterface\" alias=\"doctrine.orm.default_entity_manager\" public=\"false\"/>
    <service id=\"doctrine.orm.metadata.annotation_reader\" alias=\"annotations.cached_reader\" public=\"false\"/>
    <service id=\"doctrine.orm.entity_manager\" alias=\"doctrine.orm.default_entity_manager\" public=\"true\"/>
    <service id=\"doctrine.orm.default_metadata_cache\" alias=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata\" public=\"false\"/>
    <service id=\"doctrine.orm.default_result_cache\" alias=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.result\" public=\"false\"/>
    <service id=\"doctrine.orm.default_query_cache\" alias=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.query\" public=\"false\"/>
    <service id=\"doctrine.orm.default_entity_manager.event_manager\" alias=\"doctrine.dbal.default_connection.event_manager\" public=\"false\"/>
    <service id=\"Twig_Environment\" alias=\"twig\" public=\"false\"/>
    <service id=\"Twig\\Environment\" alias=\"twig\" public=\"false\"/>
    <service id=\"container.env_var_processors_locator\" alias=\".service_locator.CmORmuK\" public=\"true\"/>
    <service id=\"twig.loader.filesystem\" alias=\"twig.loader.native_filesystem\" public=\"false\"/>
    <service id=\"argument_resolver.controller_locator\" alias=\".service_locator.I3K77mT\"/>
    <service id=\"twig.loader\" alias=\"twig.loader.native_filesystem\"/>
    <service id=\"Psr\\Log\\LoggerInterface\" alias=\"logger\" public=\"false\"/>
    <service id=\"event_dispatcher\" alias=\"debug.event_dispatcher\" public=\"true\"/>
    <service id=\"controller_resolver\" alias=\"debug.controller_resolver\" public=\"false\"/>
    <service id=\"argument_resolver\" alias=\"debug.argument_resolver\" public=\"false\"/>
    <service id=\"twig.error_renderer.html.inner\" alias=\"error_handler.error_renderer.html\" public=\"false\"/>
    <service id=\"argument_resolver.request_attribute\" alias=\"debug.argument_resolver.request_attribute\" public=\"false\"/>
    <service id=\"argument_resolver.request\" alias=\"debug.argument_resolver.request\" public=\"false\"/>
    <service id=\"argument_resolver.session\" alias=\"debug.argument_resolver.session\" public=\"false\"/>
    <service id=\"argument_resolver.service\" alias=\"debug.argument_resolver.service\" public=\"false\"/>
    <service id=\"argument_resolver.default\" alias=\"debug.argument_resolver.default\" public=\"false\"/>
    <service id=\"argument_resolver.variadic\" alias=\"debug.argument_resolver.variadic\" public=\"false\"/>
    <service id=\"argument_resolver.not_tagged_controller\" alias=\"debug.argument_resolver.not_tagged_controller\" public=\"false\"/>
  </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/var/cache/dev/App_KernelDevDebugContainer.xml";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<container xmlns=\"http://symfony.com/schema/dic/services\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">
  <parameters>
    <parameter key=\"kernel.project_dir\">C:\\wamp64\\www\\QuillBlog</parameter>
    <parameter key=\"kernel.environment\">dev</parameter>
    <parameter key=\"kernel.debug\">true</parameter>
    <parameter key=\"kernel.cache_dir\">C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev</parameter>
    <parameter key=\"kernel.logs_dir\">C:\\wamp64\\www\\QuillBlog\\var\\log</parameter>
    <parameter key=\"kernel.bundles\" type=\"collection\">
      <parameter key=\"FrameworkBundle\">Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle</parameter>
      <parameter key=\"MakerBundle\">Symfony\\Bundle\\MakerBundle\\MakerBundle</parameter>
      <parameter key=\"DoctrineBundle\">Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle</parameter>
      <parameter key=\"DoctrineMigrationsBundle\">Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle</parameter>
      <parameter key=\"TwigBundle\">Symfony\\Bundle\\TwigBundle\\TwigBundle</parameter>
      <parameter key=\"TwigExtraBundle\">Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle</parameter>
    </parameter>
    <parameter key=\"kernel.bundles_metadata\" type=\"collection\">
      <parameter key=\"FrameworkBundle\" type=\"collection\">
        <parameter key=\"path\">C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\FrameworkBundle</parameter>
      </parameter>
      <parameter key=\"MakerBundle\" type=\"collection\">
        <parameter key=\"path\">C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\MakerBundle</parameter>
      </parameter>
      <parameter key=\"DoctrineBundle\" type=\"collection\">
        <parameter key=\"path\">C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle</parameter>
        <parameter key=\"namespace\">Doctrine\\Bundle\\DoctrineBundle</parameter>
      </parameter>
      <parameter key=\"DoctrineMigrationsBundle\" type=\"collection\">
        <parameter key=\"path\">C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-migrations-bundle</parameter>
        <parameter key=\"namespace\">Doctrine\\Bundle\\MigrationsBundle</parameter>
      </parameter>
      <parameter key=\"TwigBundle\" type=\"collection\">
        <parameter key=\"path\">C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bundle</parameter>
        <parameter key=\"namespace\">Symfony\\Bundle\\TwigBundle</parameter>
      </parameter>
      <parameter key=\"TwigExtraBundle\" type=\"collection\">
        <parameter key=\"path\">C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\extra-bundle\\src</parameter>
        <parameter key=\"namespace\">Twig\\Extra\\TwigExtraBundle</parameter>
      </parameter>
    </parameter>
    <parameter key=\"kernel.charset\">UTF-8</parameter>
    <parameter key=\"kernel.container_class\">App_KernelDevDebugContainer</parameter>
    <parameter key=\"container.dumper.inline_class_loader\">true</parameter>
    <parameter key=\"container.dumper.inline_factories\">true</parameter>
    <parameter key=\"fragment.renderer.hinclude.global_template\"></parameter>
    <parameter key=\"fragment.path\">/_fragment</parameter>
    <parameter key=\"kernel.secret\">%env(APP_SECRET)%</parameter>
    <parameter key=\"kernel.http_method_override\">true</parameter>
    <parameter key=\"kernel.trusted_hosts\" type=\"collection\"/>
    <parameter key=\"kernel.default_locale\">en</parameter>
    <parameter key=\"kernel.error_controller\">error_controller</parameter>
    <parameter key=\"debug.file_link_format\">null</parameter>
    <parameter key=\"session.metadata.storage_key\">_sf2_meta</parameter>
    <parameter key=\"session.storage.options\" type=\"collection\">
      <parameter key=\"cache_limiter\" type=\"string\">0</parameter>
      <parameter key=\"cookie_secure\">auto</parameter>
      <parameter key=\"cookie_httponly\">true</parameter>
      <parameter key=\"cookie_samesite\">lax</parameter>
      <parameter key=\"gc_probability\">1</parameter>
    </parameter>
    <parameter key=\"session.save_path\">C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/sessions</parameter>
    <parameter key=\"session.metadata.update_threshold\">0</parameter>
    <parameter key=\"asset.request_context.base_path\"></parameter>
    <parameter key=\"asset.request_context.secure\">false</parameter>
    <parameter key=\"data_collector.templates\" type=\"collection\"/>
    <parameter key=\"debug.error_handler.throw_at\">-1</parameter>
    <parameter key=\"debug.container.dump\">C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/App_KernelDevDebugContainer.xml</parameter>
    <parameter key=\"router.request_context.host\">localhost</parameter>
    <parameter key=\"router.request_context.scheme\">http</parameter>
    <parameter key=\"router.request_context.base_url\"></parameter>
    <parameter key=\"router.resource\">kernel::loadRoutes</parameter>
    <parameter key=\"request_listener.http_port\">80</parameter>
    <parameter key=\"request_listener.https_port\">443</parameter>
    <parameter key=\"doctrine.dbal.logger.chain.class\">Doctrine\\DBAL\\Logging\\LoggerChain</parameter>
    <parameter key=\"doctrine.dbal.logger.profiling.class\">Doctrine\\DBAL\\Logging\\DebugStack</parameter>
    <parameter key=\"doctrine.dbal.logger.class\">Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger</parameter>
    <parameter key=\"doctrine.dbal.configuration.class\">Doctrine\\DBAL\\Configuration</parameter>
    <parameter key=\"doctrine.data_collector.class\">Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector</parameter>
    <parameter key=\"doctrine.dbal.connection.event_manager.class\">Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager</parameter>
    <parameter key=\"doctrine.dbal.connection_factory.class\">Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory</parameter>
    <parameter key=\"doctrine.dbal.events.mysql_session_init.class\">Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit</parameter>
    <parameter key=\"doctrine.dbal.events.oracle_session_init.class\">Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit</parameter>
    <parameter key=\"doctrine.class\">Doctrine\\Bundle\\DoctrineBundle\\Registry</parameter>
    <parameter key=\"doctrine.entity_managers\" type=\"collection\">
      <parameter key=\"default\">doctrine.orm.default_entity_manager</parameter>
    </parameter>
    <parameter key=\"doctrine.default_entity_manager\">default</parameter>
    <parameter key=\"doctrine.dbal.connection_factory.types\" type=\"collection\"/>
    <parameter key=\"doctrine.connections\" type=\"collection\">
      <parameter key=\"default\">doctrine.dbal.default_connection</parameter>
    </parameter>
    <parameter key=\"doctrine.default_connection\">default</parameter>
    <parameter key=\"doctrine.orm.configuration.class\">Doctrine\\ORM\\Configuration</parameter>
    <parameter key=\"doctrine.orm.entity_manager.class\">Doctrine\\ORM\\EntityManager</parameter>
    <parameter key=\"doctrine.orm.manager_configurator.class\">Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator</parameter>
    <parameter key=\"doctrine.orm.cache.array.class\">Doctrine\\Common\\Cache\\ArrayCache</parameter>
    <parameter key=\"doctrine.orm.cache.apc.class\">Doctrine\\Common\\Cache\\ApcCache</parameter>
    <parameter key=\"doctrine.orm.cache.memcache.class\">Doctrine\\Common\\Cache\\MemcacheCache</parameter>
    <parameter key=\"doctrine.orm.cache.memcache_host\">localhost</parameter>
    <parameter key=\"doctrine.orm.cache.memcache_port\">11211</parameter>
    <parameter key=\"doctrine.orm.cache.memcache_instance.class\">Memcache</parameter>
    <parameter key=\"doctrine.orm.cache.memcached.class\">Doctrine\\Common\\Cache\\MemcachedCache</parameter>
    <parameter key=\"doctrine.orm.cache.memcached_host\">localhost</parameter>
    <parameter key=\"doctrine.orm.cache.memcached_port\">11211</parameter>
    <parameter key=\"doctrine.orm.cache.memcached_instance.class\">Memcached</parameter>
    <parameter key=\"doctrine.orm.cache.redis.class\">Doctrine\\Common\\Cache\\RedisCache</parameter>
    <parameter key=\"doctrine.orm.cache.redis_host\">localhost</parameter>
    <parameter key=\"doctrine.orm.cache.redis_port\">6379</parameter>
    <parameter key=\"doctrine.orm.cache.redis_instance.class\">Redis</parameter>
    <parameter key=\"doctrine.orm.cache.xcache.class\">Doctrine\\Common\\Cache\\XcacheCache</parameter>
    <parameter key=\"doctrine.orm.cache.wincache.class\">Doctrine\\Common\\Cache\\WinCacheCache</parameter>
    <parameter key=\"doctrine.orm.cache.zenddata.class\">Doctrine\\Common\\Cache\\ZendDataCache</parameter>
    <parameter key=\"doctrine.orm.metadata.driver_chain.class\">Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain</parameter>
    <parameter key=\"doctrine.orm.metadata.annotation.class\">Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.xml.class\">Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.yml.class\">Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.php.class\">Doctrine\\ORM\\Mapping\\Driver\\PHPDriver</parameter>
    <parameter key=\"doctrine.orm.metadata.staticphp.class\">Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver</parameter>
    <parameter key=\"doctrine.orm.proxy_cache_warmer.class\">Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer</parameter>
    <parameter key=\"form.type_guesser.doctrine.class\">Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser</parameter>
    <parameter key=\"doctrine.orm.validator.unique.class\">Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator</parameter>
    <parameter key=\"doctrine.orm.validator_initializer.class\">Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer</parameter>
    <parameter key=\"doctrine.orm.security.user.provider.class\">Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider</parameter>
    <parameter key=\"doctrine.orm.listeners.resolve_target_entity.class\">Doctrine\\ORM\\Tools\\ResolveTargetEntityListener</parameter>
    <parameter key=\"doctrine.orm.listeners.attach_entity_listeners.class\">Doctrine\\ORM\\Tools\\AttachEntityListenersListener</parameter>
    <parameter key=\"doctrine.orm.naming_strategy.default.class\">Doctrine\\ORM\\Mapping\\DefaultNamingStrategy</parameter>
    <parameter key=\"doctrine.orm.naming_strategy.underscore.class\">Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy</parameter>
    <parameter key=\"doctrine.orm.quote_strategy.default.class\">Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy</parameter>
    <parameter key=\"doctrine.orm.quote_strategy.ansi.class\">Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy</parameter>
    <parameter key=\"doctrine.orm.entity_listener_resolver.class\">Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.default_cache_factory.class\">Doctrine\\ORM\\Cache\\DefaultCacheFactory</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.default_region.class\">Doctrine\\ORM\\Cache\\Region\\DefaultRegion</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.filelock_region.class\">Doctrine\\ORM\\Cache\\Region\\FileLockRegion</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.logger_chain.class\">Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.logger_statistics.class\">Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.cache_configuration.class\">Doctrine\\ORM\\Cache\\CacheConfiguration</parameter>
    <parameter key=\"doctrine.orm.second_level_cache.regions_configuration.class\">Doctrine\\ORM\\Cache\\RegionsConfiguration</parameter>
    <parameter key=\"doctrine.orm.auto_generate_proxy_classes\">true</parameter>
    <parameter key=\"doctrine.orm.proxy_dir\">C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/doctrine/orm/Proxies</parameter>
    <parameter key=\"doctrine.orm.proxy_namespace\">Proxies</parameter>
    <parameter key=\"doctrine_migrations.dir_name\">C:\\wamp64\\www\\QuillBlog/src/Migrations</parameter>
    <parameter key=\"doctrine_migrations.namespace\">DoctrineMigrations</parameter>
    <parameter key=\"doctrine_migrations.table_name\">migration_versions</parameter>
    <parameter key=\"doctrine_migrations.column_name\">version</parameter>
    <parameter key=\"doctrine_migrations.column_length\">14</parameter>
    <parameter key=\"doctrine_migrations.executed_at_column_name\">executed_at</parameter>
    <parameter key=\"doctrine_migrations.all_or_nothing\">false</parameter>
    <parameter key=\"doctrine_migrations.name\">Application Migrations</parameter>
    <parameter key=\"doctrine_migrations.custom_template\">null</parameter>
    <parameter key=\"doctrine_migrations.organize_migrations\">false</parameter>
    <parameter key=\"twig.form.resources\" type=\"collection\">
      <parameter>form_div_layout.html.twig</parameter>
    </parameter>
    <parameter key=\"twig.default_path\">C:\\wamp64\\www\\QuillBlog/templates</parameter>
    <parameter key=\"console.command.ids\" type=\"collection\"/>
  </parameters>
  <services>
    <service id=\"service_container\" class=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" public=\"true\" synthetic=\"true\"/>
    <service id=\"kernel\" class=\"App\\Kernel\" public=\"true\" synthetic=\"true\">
      <tag name=\"routing.route_loader\"/>
    </service>
    <service id=\"App\\Controller\\BlogController\" class=\"App\\Controller\\BlogController\" public=\"true\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"controller.service_arguments\"/>
      <tag name=\"container.service_subscriber\"/>
      <call method=\"setContainer\">
        <argument type=\"service\" id=\".service_locator.pNNo5z3.App\\Controller\\BlogController\"/>
      </call>
    </service>
    <service id=\"App\\Repository\\BlogControllerRepository\" class=\"App\\Repository\\BlogControllerRepository\" autowire=\"true\" autoconfigure=\"true\">
      <tag name=\"doctrine.repository_service\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"argument_metadata_factory\" class=\"Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactory\" public=\"false\"/>
    <service id=\"response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <argument>UTF-8</argument>
    </service>
    <service id=\"streamed_response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"locale_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument>en</argument>
      <argument type=\"service\" id=\"router.default\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"validate_request_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"disallow_search_engine_index_response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DisallowRobotsIndexingListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
    </service>
    <service id=\"error_controller\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ErrorController\" public=\"true\">
      <argument type=\"service\" id=\"http_kernel\"/>
      <argument>error_controller</argument>
      <argument type=\"service\" id=\"twig.error_renderer.html\"/>
    </service>
    <service id=\"exception_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ErrorListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"request\"/>
      <tag name=\"container.hot_path\"/>
      <argument>error_controller</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"null\"/>
      <argument>true</argument>
    </service>
    <service id=\"parameter_bag\" class=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBag\" public=\"false\">
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"http_kernel\" class=\"Symfony\\Component\\HttpKernel\\HttpKernel\" public=\"true\">
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      <argument type=\"service\" id=\"debug.controller_resolver\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument type=\"service\" id=\"debug.argument_resolver\"/>
    </service>
    <service id=\"request_stack\" class=\"Symfony\\Component\\HttpFoundation\\RequestStack\" public=\"true\"/>
    <service id=\"url_helper\" class=\"Symfony\\Component\\HttpFoundation\\UrlHelper\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
      <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"cache_warmer\" class=\"Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate\" public=\"true\">
      <argument type=\"tagged_iterator\" tag=\"kernel.cache_warmer\"/>
      <argument>true</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/App_KernelDevDebugContainerDeprecations.log</argument>
    </service>
    <service id=\"cache_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer\" public=\"true\">
      <argument type=\"tagged_iterator\" tag=\"kernel.cache_clearer\"/>
    </service>
    <service id=\"filesystem\" class=\"Symfony\\Component\\Filesystem\\Filesystem\" public=\"true\"/>
    <service id=\"file_locator\" class=\"Symfony\\Component\\HttpKernel\\Config\\FileLocator\" public=\"false\">
      <argument type=\"service\" id=\"kernel\"/>
    </service>
    <service id=\"uri_signer\" class=\"Symfony\\Component\\HttpKernel\\UriSigner\" public=\"false\">
      <argument>%env(APP_SECRET)%</argument>
    </service>
    <service id=\"config_cache_factory\" class=\"Symfony\\Component\\Config\\ResourceCheckerConfigCacheFactory\" public=\"false\">
      <argument type=\"tagged_iterator\" tag=\"config_cache.resource_checker\"/>
    </service>
    <service id=\"dependency_injection.config.container_parameters_resource_checker\" class=\"Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResourceChecker\" public=\"false\">
      <tag name=\"config_cache.resource_checker\" priority=\"-980\"/>
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"config.resource.self_checking_resource_checker\" class=\"Symfony\\Component\\Config\\Resource\\SelfCheckingResourceChecker\" public=\"false\">
      <tag name=\"config_cache.resource_checker\" priority=\"-990\"/>
    </service>
    <service id=\"services_resetter\" class=\"Symfony\\Component\\HttpKernel\\DependencyInjection\\ServicesResetter\" public=\"true\">
      <argument type=\"iterator\">
        <argument key=\"cache.app\" type=\"service\" id=\"cache.app\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.system\" type=\"service\" id=\"cache.system\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.validator\" type=\"service\" id=\"cache.validator\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.serializer\" type=\"service\" id=\"cache.serializer\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.annotations\" type=\"service\" id=\"cache.annotations\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.property_info\" type=\"service\" id=\"cache.property_info\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"debug.stopwatch\" type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"debug.event_dispatcher\" type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"doctrine\" type=\"service\" id=\"doctrine\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
      <argument type=\"collection\">
        <argument key=\"cache.app\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"cache.system\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"cache.validator\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"cache.serializer\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"cache.annotations\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"cache.property_info\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"debug.stopwatch\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"debug.event_dispatcher\" type=\"collection\">
          <argument>reset</argument>
        </argument>
        <argument key=\"doctrine\" type=\"collection\">
          <argument>reset</argument>
        </argument>
      </argument>
    </service>
    <service id=\"reverse_container\" class=\"Symfony\\Component\\DependencyInjection\\ReverseContainer\" public=\"false\">
      <argument type=\"service\" id=\"service_container\"/>
      <argument type=\"service\" id=\".service_locator.wnlveDj\"/>
    </service>
    <service id=\"container.env_var_processor\" class=\"Symfony\\Component\\DependencyInjection\\EnvVarProcessor\" public=\"false\">
      <tag name=\"container.env_var_processor\"/>
      <argument type=\"service\" id=\"service_container\"/>
      <argument type=\"tagged_iterator\" tag=\"container.env_var_loader\"/>
    </service>
    <service id=\"slugger\" class=\"stdClass\"/>
    <service id=\"fragment.handler\" class=\"Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler\" public=\"false\">
      <argument type=\"service\" id=\".service_locator._cmka45\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument>true</argument>
    </service>
    <service id=\"fragment.renderer.inline\" class=\"Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer\" public=\"false\">
      <tag name=\"kernel.fragment_renderer\" alias=\"inline\"/>
      <argument type=\"service\" id=\"http_kernel\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      <call method=\"setFragmentPath\">
        <argument>/_fragment</argument>
      </call>
    </service>
    <service id=\".2_~FFgcIJK\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
      <factory class=\"Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer\" method=\"getAndCleanOutputBuffer\"/>
    </service>
    <service id=\".1_~FFgcIJK\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
      <argument>true</argument>
      <factory class=\"Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer\" method=\"isDebug\"/>
    </service>
    <service id=\"error_handler.error_renderer.html\" class=\"Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer\">
      <argument type=\"service\" id=\".1_~FFgcIJK\"/>
      <argument>UTF-8</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <argument type=\"service\" id=\".2_~FFgcIJK\"/>
      <argument type=\"service\" id=\"logger\" on-invalid=\"null\"/>
    </service>
    <service id=\"console.error_listener\" class=\"Symfony\\Component\\Console\\EventListener\\ErrorListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"console\"/>
      <argument type=\"service\" id=\"logger\" on-invalid=\"null\"/>
    </service>
    <service id=\"console.suggest_missing_package_subscriber\" class=\"Symfony\\Bundle\\FrameworkBundle\\EventListener\\SuggestMissingPackageSubscriber\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
    </service>
    <service id=\"console.command.about\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"about\"/>
      <call method=\"setName\">
        <argument>about</argument>
      </call>
    </service>
    <service id=\"console.command.assets_install\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"assets:install\"/>
      <argument type=\"service\" id=\"filesystem\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <call method=\"setName\">
        <argument>assets:install</argument>
      </call>
    </service>
    <service id=\"console.command.cache_clear\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:clear\"/>
      <argument type=\"service\" id=\"cache_clearer\"/>
      <argument type=\"service\" id=\"filesystem\"/>
      <call method=\"setName\">
        <argument>cache:clear</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_clear\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:clear\"/>
      <argument type=\"service\" id=\"cache.global_clearer\"/>
      <call method=\"setName\">
        <argument>cache:pool:clear</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_prune\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:prune\"/>
      <argument type=\"iterator\"/>
      <call method=\"setName\">
        <argument>cache:pool:prune</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_delete\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:delete\"/>
      <argument type=\"service\" id=\"cache.global_clearer\"/>
      <call method=\"setName\">
        <argument>cache:pool:delete</argument>
      </call>
    </service>
    <service id=\"console.command.cache_pool_list\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:pool:list\"/>
      <argument type=\"collection\">
        <argument>cache.app</argument>
        <argument>cache.system</argument>
        <argument>cache.validator</argument>
        <argument>cache.serializer</argument>
        <argument>cache.annotations</argument>
        <argument>cache.property_info</argument>
        <argument>cache.doctrine.orm.default.metadata</argument>
        <argument>cache.doctrine.orm.default.result</argument>
        <argument>cache.doctrine.orm.default.query</argument>
      </argument>
      <call method=\"setName\">
        <argument>cache:pool:list</argument>
      </call>
    </service>
    <service id=\"console.command.cache_warmup\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"cache:warmup\"/>
      <argument type=\"service\" id=\"cache_warmer\"/>
      <call method=\"setName\">
        <argument>cache:warmup</argument>
      </call>
    </service>
    <service id=\"console.command.config_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:config\"/>
      <call method=\"setName\">
        <argument>debug:config</argument>
      </call>
    </service>
    <service id=\"console.command.config_dump_reference\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"config:dump-reference\"/>
      <call method=\"setName\">
        <argument>config:dump-reference</argument>
      </call>
    </service>
    <service id=\"console.command.container_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:container\"/>
      <call method=\"setName\">
        <argument>debug:container</argument>
      </call>
    </service>
    <service id=\"console.command.container_lint\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"lint:container\"/>
      <call method=\"setName\">
        <argument>lint:container</argument>
      </call>
    </service>
    <service id=\"console.command.debug_autowiring\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:autowiring\"/>
      <argument>null</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <call method=\"setName\">
        <argument>debug:autowiring</argument>
      </call>
    </service>
    <service id=\"console.command.event_dispatcher_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:event-dispatcher\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
      <call method=\"setName\">
        <argument>debug:event-dispatcher</argument>
      </call>
    </service>
    <service id=\"console.command.router_debug\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:router\"/>
      <argument type=\"service\" id=\"router.default\"/>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <call method=\"setName\">
        <argument>debug:router</argument>
      </call>
    </service>
    <service id=\"console.command.router_match\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"router:match\"/>
      <argument type=\"service\" id=\"router.default\"/>
      <call method=\"setName\">
        <argument>router:match</argument>
      </call>
    </service>
    <service id=\"console.command.yaml_lint\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"lint:yaml\"/>
      <call method=\"setName\">
        <argument>lint:yaml</argument>
      </call>
    </service>
    <service id=\"console.command.secrets_set\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"secrets:set\"/>
      <argument type=\"service\" id=\"secrets.vault\"/>
      <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\"/>
      <call method=\"setName\">
        <argument>secrets:set</argument>
      </call>
    </service>
    <service id=\"console.command.secrets_remove\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"secrets:remove\"/>
      <argument type=\"service\" id=\"secrets.vault\"/>
      <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\"/>
      <call method=\"setName\">
        <argument>secrets:remove</argument>
      </call>
    </service>
    <service id=\"console.command.secrets_generate_key\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"secrets:generate-keys\"/>
      <argument type=\"service\" id=\"secrets.vault\"/>
      <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\"/>
      <call method=\"setName\">
        <argument>secrets:generate-keys</argument>
      </call>
    </service>
    <service id=\"console.command.secrets_list\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"secrets:list\"/>
      <argument type=\"service\" id=\"secrets.vault\"/>
      <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\"/>
      <call method=\"setName\">
        <argument>secrets:list</argument>
      </call>
    </service>
    <service id=\"console.command.secrets_decrypt_to_local\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"secrets:decrypt-to-local\"/>
      <argument type=\"service\" id=\"secrets.vault\"/>
      <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\"/>
      <call method=\"setName\">
        <argument>secrets:decrypt-to-local</argument>
      </call>
    </service>
    <service id=\"console.command.secrets_encrypt_from_local\" class=\"Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"secrets:encrypt-from-local\"/>
      <argument type=\"service\" id=\"secrets.vault\"/>
      <argument type=\"service\" id=\"secrets.local_vault\" on-invalid=\"ignore\"/>
      <call method=\"setName\">
        <argument>secrets:encrypt-from-local</argument>
      </call>
    </service>
    <service id=\"cache.app\" class=\"Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter\" public=\"true\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>Waw3LDoonQ</argument>
      <argument>0</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.app.taggable\" class=\"Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter\" public=\"false\">
      <argument type=\"service\" id=\"cache.app\"/>
    </service>
    <service id=\"cache.system\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"true\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>kZXnnbn5bl</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.validator\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>x03duRdP2q</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.serializer\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>TUBL1vsI1S</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.annotations\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>dS5rNYipbY</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.property_info\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\">
      <tag name=\"cache.pool\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>57ZT5vRd03</argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.adapter.system\" class=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.system_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createSystemCache\"/>
    </service>
    <service id=\"cache.adapter.apcu\" class=\"Symfony\\Component\\Cache\\Adapter\\ApcuAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument>0</argument>
      <argument>%container.build_id%</argument>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.doctrine\" class=\"Symfony\\Component\\Cache\\Adapter\\DoctrineAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_doctrine_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.filesystem\" class=\"Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument>0</argument>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/pools</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.psr6\" class=\"Symfony\\Component\\Cache\\Adapter\\ProxyAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_psr6_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
    </service>
    <service id=\"cache.adapter.redis\" class=\"Symfony\\Component\\Cache\\Adapter\\RedisAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_redis_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.memcached\" class=\"Symfony\\Component\\Cache\\Adapter\\MemcachedAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_memcached_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.pdo\" class=\"Symfony\\Component\\Cache\\Adapter\\PdoAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" provider=\"cache.default_pdo_provider\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument></argument>
      <argument></argument>
      <argument>0</argument>
      <argument type=\"collection\"/>
      <argument type=\"service\" id=\"cache.default_marshaller\" on-invalid=\"ignore\"/>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.adapter.array\" class=\"Symfony\\Component\\Cache\\Adapter\\ArrayAdapter\" public=\"false\" abstract=\"true\">
      <tag name=\"cache.pool\" clearer=\"cache.default_clearer\" reset=\"reset\"/>
      <tag name=\"monolog.logger\" channel=\"cache\"/>
      <argument>0</argument>
      <call method=\"setLogger\">
        <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"cache.default_marshaller\" class=\"Symfony\\Component\\Cache\\Marshaller\\DefaultMarshaller\" public=\"false\">
      <argument>null</argument>
    </service>
    <service id=\"cache.default_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer\" public=\"false\">
      <tag name=\"cache.pool.clearer\"/>
      <argument type=\"collection\">
        <argument key=\"cache.app\" type=\"service\" id=\"cache.app\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\"cache.system_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer\" public=\"true\">
      <tag name=\"cache.pool.clearer\"/>
      <tag name=\"kernel.cache_clearer\"/>
      <argument type=\"collection\">
        <argument key=\"cache.system\" type=\"service\" id=\"cache.system\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.validator\" type=\"service\" id=\"cache.validator\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.serializer\" type=\"service\" id=\"cache.serializer\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.annotations\" type=\"service\" id=\"cache.annotations\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.property_info\" type=\"service\" id=\"cache.property_info\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\"cache.global_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer\" public=\"true\">
      <tag name=\"cache.pool.clearer\"/>
      <argument type=\"collection\">
        <argument key=\"cache.app\" type=\"service\" id=\"cache.app\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.system\" type=\"service\" id=\"cache.system\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.validator\" type=\"service\" id=\"cache.validator\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.serializer\" type=\"service\" id=\"cache.serializer\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.annotations\" type=\"service\" id=\"cache.annotations\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.property_info\" type=\"service\" id=\"cache.property_info\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.doctrine.orm.default.metadata\" type=\"service\" id=\"cache.doctrine.orm.default.metadata\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.doctrine.orm.default.result\" type=\"service\" id=\"cache.doctrine.orm.default.result\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"cache.doctrine.orm.default.query\" type=\"service\" id=\"cache.doctrine.orm.default.query\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\".cache_connection.GD_MSZC\" class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" public=\"false\">
      <argument>redis://localhost</argument>
      <argument type=\"collection\">
        <argument key=\"lazy\">true</argument>
      </argument>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createConnection\"/>
    </service>
    <service id=\".cache_connection.JKE6keX\" class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" public=\"false\">
      <argument>memcached://localhost</argument>
      <argument type=\"collection\">
        <argument key=\"lazy\">true</argument>
      </argument>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\AbstractAdapter\" method=\"createConnection\"/>
    </service>
    <service id=\".1_NativeFileSessionHandler~jGn_eiJ\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler\" public=\"false\">
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/sessions</argument>
    </service>
    <service id=\"session\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Session\" public=\"true\">
      <argument type=\"service\" id=\"session.storage.native\"/>
      <argument type=\"service\" id=\"session.attribute_bag\"/>
      <argument type=\"service\" id=\"session.flash_bag\"/>
    </service>
    <service id=\"session.storage.metadata_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag\" public=\"false\">
      <argument>_sf2_meta</argument>
      <argument>0</argument>
    </service>
    <service id=\"session.storage.native\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage\" public=\"false\">
      <argument>%session.storage.options%</argument>
      <argument>null</argument>
      <argument type=\"service\" id=\"session.storage.metadata_bag\"/>
    </service>
    <service id=\"session.storage.php_bridge\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage\" public=\"false\">
      <argument>null</argument>
      <argument type=\"service\" id=\"session.storage.metadata_bag\"/>
    </service>
    <service id=\"session.flash_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag\" public=\"false\"/>
    <service id=\"session.attribute_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag\" public=\"false\"/>
    <service id=\"session.storage.mock_file\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage\" public=\"false\">
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/sessions</argument>
      <argument>MOCKSESSID</argument>
      <argument type=\"service\" id=\"session.storage.metadata_bag\"/>
    </service>
    <service id=\"session.handler.native_file\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\StrictSessionHandler\" public=\"false\">
      <argument type=\"service\" id=\".1_NativeFileSessionHandler~jGn_eiJ\"/>
    </service>
    <service id=\"session.abstract_handler\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\AbstractSessionHandler\" public=\"false\">
      <argument></argument>
      <factory class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\SessionHandlerFactory\" method=\"createHandler\"/>
    </service>
    <service id=\"session_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\SessionListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\".service_locator.Bppmeg3\"/>
    </service>
    <service id=\"assets.packages\" class=\"Symfony\\Component\\Asset\\Packages\" public=\"false\">
      <argument type=\"service\" id=\"assets._default_package\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\"assets.empty_package\" class=\"Symfony\\Component\\Asset\\Package\" public=\"false\">
      <argument type=\"service\" id=\"assets.empty_version_strategy\"/>
    </service>
    <service id=\"assets.context\" class=\"Symfony\\Component\\Asset\\Context\\RequestStackContext\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
      <argument></argument>
      <argument>false</argument>
    </service>
    <service id=\"assets.path_package\" class=\"Symfony\\Component\\Asset\\PathPackage\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"assets.context\"/>
    </service>
    <service id=\"assets.url_package\" class=\"Symfony\\Component\\Asset\\UrlPackage\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
      <argument type=\"service\" id=\"assets.context\"/>
    </service>
    <service id=\"assets.static_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument></argument>
    </service>
    <service id=\"assets.empty_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\EmptyVersionStrategy\" public=\"false\"/>
    <service id=\"assets.json_manifest_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\JsonManifestVersionStrategy\" public=\"false\" abstract=\"true\">
      <argument></argument>
    </service>
    <service id=\"assets._default_package\" class=\"Symfony\\Component\\Asset\\PathPackage\" public=\"false\">
      <argument></argument>
      <argument type=\"service\" id=\"assets.empty_version_strategy\"/>
      <argument type=\"service\" id=\"assets.context\"/>
    </service>
    <service id=\"debug.debug_handlers_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"php\"/>
      <tag name=\"container.hot_path\"/>
      <argument>null</argument>
      <argument type=\"service\" id=\"logger\" on-invalid=\"null\"/>
      <argument>null</argument>
      <argument>-1</argument>
      <argument>true</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\"/>
      <argument>true</argument>
    </service>
    <service id=\"debug.file_link_formatter\" class=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\" public=\"false\">
      <argument>null</argument>
    </service>
    <service id=\"debug.stopwatch\" class=\"Symfony\\Component\\Stopwatch\\Stopwatch\">
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument>true</argument>
    </service>
    <service id=\"debug.event_dispatcher\" class=\"Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher\" public=\"false\">
      <tag name=\"container.hot_path\"/>
      <tag name=\"monolog.logger\" channel=\"event\"/>
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"debug.event_dispatcher.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
      <argument type=\"service\" id=\"logger\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"request_stack\" on-invalid=\"null\"/>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"response_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"streamed_response_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>-1024</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_listener\"/>
          <argument>setDefaultLocale</argument>
        </argument>
        <argument>100</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>16</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"locale_listener\"/>
          <argument>onKernelFinishRequest</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"validate_request_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>256</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"disallow_search_engine_index_response_listener\"/>
          <argument>onResponse</argument>
        </argument>
        <argument>-255</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.controller_arguments</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"exception_listener\"/>
          <argument>onControllerArguments</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"exception_listener\"/>
          <argument>logKernelException</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"exception_listener\"/>
          <argument>onKernelException</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.error</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"console.error_listener\"/>
          <argument>onConsoleError</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"console.error_listener\"/>
          <argument>onConsoleTerminate</argument>
        </argument>
        <argument>-128</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.error</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"console.suggest_missing_package_subscriber\"/>
          <argument>onConsoleError</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"session_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>128</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.response</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"session_listener\"/>
          <argument>onKernelResponse</argument>
        </argument>
        <argument>-1000</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"session_listener\"/>
          <argument>onFinishRequest</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.debug_handlers_listener\"/>
          <argument>configure</argument>
        </argument>
        <argument>2048</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.command</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"debug.debug_handlers_listener\"/>
          <argument>configure</argument>
        </argument>
        <argument>2048</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"router_listener\"/>
          <argument>onKernelRequest</argument>
        </argument>
        <argument>32</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.finish_request</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"router_listener\"/>
          <argument>onKernelFinishRequest</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>kernel.exception</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"router_listener\"/>
          <argument>onKernelException</argument>
        </argument>
        <argument>-64</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.error</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"maker.console_error_listener\"/>
          <argument>onConsoleError</argument>
        </argument>
        <argument>0</argument>
      </call>
      <call method=\"addListener\">
        <argument>console.terminate</argument>
        <argument type=\"collection\">
          <argument type=\"service\" id=\"maker.console_error_listener\"/>
          <argument>onConsoleTerminate</argument>
        </argument>
        <argument>0</argument>
      </call>
    </service>
    <service id=\"debug.controller_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"request\"/>
      <argument type=\"service\" id=\"debug.controller_resolver.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableArgumentResolver\" public=\"false\">
      <argument type=\"service\" id=\"debug.argument_resolver.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"routing.resolver\" class=\"Symfony\\Component\\Config\\Loader\\LoaderResolver\" public=\"false\">
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.xml\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.yml\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.php\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.glob\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.directory\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.container\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.annotation\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.annotation.directory\"/>
      </call>
      <call method=\"addLoader\">
        <argument type=\"service\" id=\"routing.loader.annotation.file\"/>
      </call>
    </service>
    <service id=\"routing.loader.xml\" class=\"Symfony\\Component\\Routing\\Loader\\XmlFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.yml\" class=\"Symfony\\Component\\Routing\\Loader\\YamlFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.php\" class=\"Symfony\\Component\\Routing\\Loader\\PhpFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.glob\" class=\"Symfony\\Component\\Routing\\Loader\\GlobFileLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.directory\" class=\"Symfony\\Component\\Routing\\Loader\\DirectoryLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\"file_locator\"/>
    </service>
    <service id=\"routing.loader.container\" class=\"Symfony\\Component\\Routing\\Loader\\ContainerLoader\" public=\"false\">
      <tag name=\"routing.loader\"/>
      <argument type=\"service\" id=\".service_locator.mshSVvX\"/>
    </service>
    <service id=\"routing.loader\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader\" public=\"true\">
      <argument type=\"service\" id=\"routing.resolver\"/>
      <argument type=\"collection\">
        <argument key=\"utf8\">true</argument>
      </argument>
    </service>
    <service id=\"router.default\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\Router\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"router\"/>
      <tag name=\"container.service_subscriber\" id=\"routing.loader\"/>
      <argument type=\"service\" id=\".service_locator.ld1.260.router.default\"/>
      <argument>kernel::loadRoutes</argument>
      <argument type=\"collection\">
        <argument key=\"cache_dir\">C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev</argument>
        <argument key=\"debug\">true</argument>
        <argument key=\"generator_class\">Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator</argument>
        <argument key=\"generator_dumper_class\">Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper</argument>
        <argument key=\"matcher_class\">Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher</argument>
        <argument key=\"matcher_dumper_class\">Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper</argument>
        <argument key=\"strict_requirements\">true</argument>
        <argument key=\"resource_type\">service</argument>
      </argument>
      <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"parameter_bag\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <argument>en</argument>
      <call method=\"setConfigCacheFactory\">
        <argument type=\"service\" id=\"config_cache_factory\"/>
      </call>
    </service>
    <service id=\"router.request_context\" class=\"Symfony\\Component\\Routing\\RequestContext\" public=\"false\">
      <argument></argument>
      <argument>GET</argument>
      <argument>localhost</argument>
      <argument>http</argument>
      <argument>80</argument>
      <argument>443</argument>
    </service>
    <service id=\"router.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer\" public=\"false\">
      <tag name=\"container.service_subscriber\" id=\"router\"/>
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\".service_locator.3TLJ8AE.router.cache_warmer\"/>
    </service>
    <service id=\"router_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\RouterListener\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
      <tag name=\"monolog.logger\" channel=\"request\"/>
      <tag name=\"container.hot_path\"/>
      <tag name=\"container.hot_path\"/>
      <argument type=\"service\" id=\"router.default\"/>
      <argument type=\"service\" id=\"request_stack\"/>
      <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\"/>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <argument>true</argument>
    </service>
    <service id=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController\" public=\"true\">
      <argument type=\"service\" id=\"router.default\"/>
      <argument>80</argument>
      <argument>443</argument>
    </service>
    <service id=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController\" public=\"true\">
      <argument type=\"service\" id=\"twig\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"routing.loader.annotation\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\AnnotatedRouteControllerLoader\" public=\"false\">
      <tag name=\"routing.loader\" priority=\"-10\"/>
      <argument type=\"service\" id=\"annotations.cached_reader\"/>
    </service>
    <service id=\"routing.loader.annotation.directory\" class=\"Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader\" public=\"false\">
      <tag name=\"routing.loader\" priority=\"-10\"/>
      <argument type=\"service\" id=\"file_locator\"/>
      <argument type=\"service\" id=\"routing.loader.annotation\"/>
    </service>
    <service id=\"routing.loader.annotation.file\" class=\"Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader\" public=\"false\">
      <tag name=\"routing.loader\" priority=\"-10\"/>
      <argument type=\"service\" id=\"file_locator\"/>
      <argument type=\"service\" id=\"routing.loader.annotation\"/>
    </service>
    <service id=\".2_PhpArrayAdapter~mwk0cku\" class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" public=\"false\">
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/annotations.php</argument>
      <argument type=\"service\" id=\"cache.annotations\"/>
      <factory class=\"Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter\" method=\"create\"/>
    </service>
    <service id=\".1_ArrayCache~mwk0cku\" class=\"Doctrine\\Common\\Cache\\ArrayCache\" public=\"false\"/>
    <service id=\"annotations.reader\" class=\"Doctrine\\Common\\Annotations\\AnnotationReader\" public=\"false\">
      <call method=\"addGlobalIgnoredName\">
        <argument>required</argument>
        <argument type=\"service\" id=\"annotations.dummy_registry\"/>
      </call>
    </service>
    <service id=\"annotations.dummy_registry\" class=\"Doctrine\\Common\\Annotations\\AnnotationRegistry\" public=\"false\">
      <call method=\"registerUniqueLoader\">
        <argument>class_exists</argument>
      </call>
    </service>
    <service id=\"annotations.cached_reader\" class=\"Doctrine\\Common\\Annotations\\CachedReader\" public=\"false\">
      <tag name=\"annotations.cached_reader\"/>
      <argument type=\"service\" id=\"annotations.reader\"/>
      <argument type=\"service\" id=\".1_ArrayCache~mwk0cku\"/>
      <argument>true</argument>
      <property name=\"cacheProviderBackup\" type=\"service\" id=\"annotations.cache\"/>
    </service>
    <service id=\"annotations.filesystem_cache\" class=\"Doctrine\\Common\\Cache\\FilesystemCache\" public=\"false\">
      <argument></argument>
    </service>
    <service id=\"annotations.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\AnnotationsCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\"annotations.reader\"/>
      <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/annotations.php</argument>
      <argument>#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller\$))#</argument>
      <argument>true</argument>
    </service>
    <service id=\"annotations.cache\" class=\"Symfony\\Component\\Cache\\DoctrineProvider\" public=\"false\">
      <argument type=\"service\" id=\".2_PhpArrayAdapter~mwk0cku\"/>
    </service>
    <service id=\"secrets.vault\" class=\"Symfony\\Bundle\\FrameworkBundle\\Secrets\\SodiumVault\">
      <tag name=\"container.env_var_loader\"/>
      <argument>C:\\wamp64\\www\\QuillBlog/config/secrets/dev</argument>
      <argument>%env(base64:default::SYMFONY_DECRYPTION_SECRET)%</argument>
    </service>
    <service id=\"secrets.local_vault\" class=\"Symfony\\Bundle\\FrameworkBundle\\Secrets\\DotenvVault\">
      <argument>C:\\wamp64\\www\\QuillBlog/.env.dev.local</argument>
    </service>
    <service id=\"mime_types\" class=\"Symfony\\Component\\Mime\\MimeTypes\" public=\"false\">
      <call method=\"setDefault\">
        <argument type=\"service\" id=\"mime_types\"/>
      </call>
    </service>
    <service id=\"maker.file_manager\" class=\"Symfony\\Bundle\\MakerBundle\\FileManager\" public=\"false\">
      <argument type=\"service\" id=\"filesystem\"/>
      <argument type=\"service\" id=\"maker.autoloader_util\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <argument>C:\\wamp64\\www\\QuillBlog/templates</argument>
    </service>
    <service id=\"maker.autoloader_finder\" class=\"Symfony\\Bundle\\MakerBundle\\Util\\ComposerAutoloaderFinder\" public=\"false\">
      <argument>App</argument>
    </service>
    <service id=\"maker.autoloader_util\" class=\"Symfony\\Bundle\\MakerBundle\\Util\\AutoloaderUtil\" public=\"false\">
      <argument type=\"service\" id=\"maker.autoloader_finder\"/>
    </service>
    <service id=\"maker.event_registry\" class=\"Symfony\\Bundle\\MakerBundle\\EventRegistry\" public=\"false\">
      <argument type=\"service\" id=\"debug.event_dispatcher\"/>
    </service>
    <service id=\"maker.console_error_listener\" class=\"Symfony\\Bundle\\MakerBundle\\Event\\ConsoleErrorSubscriber\" public=\"false\">
      <tag name=\"kernel.event_subscriber\"/>
    </service>
    <service id=\"maker.doctrine_helper\" class=\"Symfony\\Bundle\\MakerBundle\\Doctrine\\DoctrineHelper\" public=\"false\">
      <argument>App\\Entity</argument>
      <argument type=\"service\" id=\"doctrine\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"maker.auto_command.abstract\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\" abstract=\"true\">
      <argument></argument>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.generator\" class=\"Symfony\\Bundle\\MakerBundle\\Generator\" public=\"false\">
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument>App</argument>
    </service>
    <service id=\"maker.entity_class_generator\" class=\"Symfony\\Bundle\\MakerBundle\\Doctrine\\EntityClassGenerator\" public=\"false\">
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.user_class_builder\" class=\"Symfony\\Bundle\\MakerBundle\\Security\\UserClassBuilder\" public=\"false\"/>
    <service id=\"maker.security_config_updater\" class=\"Symfony\\Bundle\\MakerBundle\\Security\\SecurityConfigUpdater\" public=\"false\"/>
    <service id=\"maker.renderer.form_type_renderer\" class=\"Symfony\\Bundle\\MakerBundle\\Renderer\\FormTypeRenderer\" public=\"false\">
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.maker.make_authenticator\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeAuthenticator\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.security_config_updater\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
    </service>
    <service id=\"maker.maker.make_command\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeCommand\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_controller\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeController\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
    </service>
    <service id=\"maker.maker.make_crud\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeCrud\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
      <argument type=\"service\" id=\"maker.renderer.form_type_renderer\"/>
    </service>
    <service id=\"maker.maker.make_entity\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeEntity\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <argument type=\"service\" id=\"maker.generator\"/>
    </service>
    <service id=\"maker.maker.make_fixtures\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeFixtures\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_form\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeForm\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.doctrine_helper\"/>
      <argument type=\"service\" id=\"maker.renderer.form_type_renderer\"/>
    </service>
    <service id=\"maker.maker.make_functional_test\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeFunctionalTest\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_registration_form\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeRegistrationForm\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.renderer.form_type_renderer\"/>
      <argument type=\"service\" id=\"router.default\"/>
    </service>
    <service id=\"maker.maker.make_serializer_encoder\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSerializerEncoder\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_serializer_normalizer\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSerializerNormalizer\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_subscriber\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeSubscriber\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.event_registry\"/>
    </service>
    <service id=\"maker.maker.make_twig_extension\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeTwigExtension\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_unit_test\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeUnitTest\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_validator\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeValidator\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_voter\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeVoter\" public=\"false\">
      <tag name=\"maker.command\"/>
    </service>
    <service id=\"maker.maker.make_user\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeUser\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.user_class_builder\"/>
      <argument type=\"service\" id=\"maker.security_config_updater\"/>
    </service>
    <service id=\"maker.maker.make_migration\" class=\"Symfony\\Bundle\\MakerBundle\\Maker\\MakeMigration\" public=\"false\">
      <tag name=\"maker.command\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
    </service>
    <service id=\"doctrine.dbal.logger.chain\" class=\"Doctrine\\DBAL\\Logging\\LoggerChain\" public=\"false\" abstract=\"true\">
      <call method=\"addLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.logger.profiling\" class=\"Doctrine\\DBAL\\Logging\\DebugStack\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.dbal.logger.backtrace\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\Logging\\BacktraceLogger\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.dbal.logger\" class=\"Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger\" public=\"false\">
      <tag name=\"monolog.logger\" channel=\"doctrine\"/>
      <argument type=\"service\" id=\"logger\" on-invalid=\"null\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"null\"/>
    </service>
    <service id=\"data_collector.doctrine\" class=\"Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@Doctrine/Collector/db.html.twig\" id=\"db\" priority=\"250\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"addLogger\">
        <argument>default</argument>
        <argument type=\"service\" id=\"doctrine.dbal.logger.profiling.default\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.connection_factory\" class=\"Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory\">
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.dbal.connection\" class=\"Doctrine\\DBAL\\Connection\" abstract=\"true\">
      <factory service=\"doctrine.dbal.connection_factory\" method=\"createConnection\"/>
    </service>
    <service id=\"doctrine.dbal.connection.event_manager\" class=\"Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"doctrine.dbal.connection.configuration\" class=\"Doctrine\\DBAL\\Configuration\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Registry\" public=\"true\">
      <tag name=\"kernel.reset\" method=\"reset\"/>
      <argument type=\"service\" id=\"service_container\"/>
      <argument>%doctrine.connections%</argument>
      <argument>%doctrine.entity_managers%</argument>
      <argument>default</argument>
      <argument>default</argument>
    </service>
    <service id=\"doctrine.twig.doctrine_extension\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Twig\\DoctrineExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"doctrine.dbal.schema_asset_filter_manager\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\SchemaAssetsFilterManager\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.dbal.well_known_schema_asset_filter\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\BlacklistSchemaAssetFilter\" public=\"false\">
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.database_create_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:database:create\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"setName\">
        <argument>doctrine:database:create</argument>
      </call>
    </service>
    <service id=\"doctrine.database_drop_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:database:drop\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <call method=\"setName\">
        <argument>doctrine:database:drop</argument>
      </call>
    </service>
    <service id=\"doctrine.database_import_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:database:import\"/>
      <call method=\"setName\">
        <argument>doctrine:database:import</argument>
      </call>
    </service>
    <service id=\"doctrine.query_sql_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:query:sql\"/>
      <call method=\"setName\">
        <argument>doctrine:query:sql</argument>
      </call>
    </service>
    <service id=\"doctrine.dbal.default_connection.configuration\" class=\"Doctrine\\DBAL\\Configuration\" public=\"false\">
      <call method=\"setSQLLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger.chain.default\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.logger.profiling.default\" class=\"Doctrine\\DBAL\\Logging\\DebugStack\" public=\"false\"/>
    <service id=\"doctrine.dbal.logger.chain.default\" class=\"Doctrine\\DBAL\\Logging\\LoggerChain\" public=\"false\">
      <call method=\"addLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger\"/>
      </call>
      <call method=\"addLogger\">
        <argument type=\"service\" id=\"doctrine.dbal.logger.profiling.default\"/>
      </call>
    </service>
    <service id=\"doctrine.dbal.default_connection.event_manager\" class=\"Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.bpvU51K\"/>
      <call method=\"addEventListener\">
        <argument type=\"collection\">
          <argument>loadClassMetadata</argument>
        </argument>
        <argument>doctrine.orm.default_listeners.attach_entity_listeners</argument>
      </call>
    </service>
    <service id=\"doctrine.dbal.default_connection\" class=\"Doctrine\\DBAL\\Connection\" public=\"true\">
      <argument type=\"collection\">
        <argument key=\"url\">%env(resolve:DATABASE_URL)%</argument>
        <argument key=\"host\">localhost</argument>
        <argument key=\"port\">null</argument>
        <argument key=\"user\">root</argument>
        <argument key=\"password\">null</argument>
        <argument key=\"driver\">pdo_mysql</argument>
        <argument key=\"driverOptions\" type=\"collection\"/>
        <argument key=\"defaultTableOptions\" type=\"collection\"/>
      </argument>
      <argument type=\"service\" id=\"doctrine.dbal.default_connection.configuration\"/>
      <argument type=\"service\" id=\"doctrine.dbal.default_connection.event_manager\"/>
      <argument type=\"collection\"/>
      <factory service=\"doctrine.dbal.connection_factory\" method=\"createConnection\"/>
    </service>
    <service id=\".1_ServiceLocator~wMitVIC\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.orm.proxy_cache_warmer\" class=\"Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"form.type_guesser.doctrine\" class=\"Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser\">
      <tag name=\"form.type_guesser\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"form.type.entity\" class=\"Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType\">
      <tag name=\"form.type\" alias=\"entity\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.configuration\" class=\"Doctrine\\ORM\\Configuration\" public=\"false\" abstract=\"true\"/>
    <service id=\"doctrine.orm.entity_manager.abstract\" class=\"Doctrine\\ORM\\EntityManager\" lazy=\"true\" abstract=\"true\">
      <factory class=\"Doctrine\\ORM\\EntityManager\" method=\"create\"/>
    </service>
    <service id=\"doctrine.orm.container_repository_factory\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Repository\\ContainerRepositoryFactory\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.kOQSzIs\"/>
    </service>
    <service id=\"doctrine.orm.manager_configurator.abstract\" class=\"Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator\" abstract=\"true\">
      <argument type=\"collection\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.orm.validator.unique\" class=\"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator\">
      <tag name=\"validator.constraint_validator\" alias=\"doctrine.orm.validator.unique\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.validator_initializer\" class=\"Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer\">
      <tag name=\"validator.initializer\"/>
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.security.user.provider\" class=\"Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider\" public=\"false\" abstract=\"true\">
      <argument type=\"service\" id=\"doctrine\"/>
    </service>
    <service id=\"doctrine.orm.listeners.resolve_target_entity\" class=\"Doctrine\\ORM\\Tools\\ResolveTargetEntityListener\" public=\"false\"/>
    <service id=\"doctrine.orm.naming_strategy.default\" class=\"Doctrine\\ORM\\Mapping\\DefaultNamingStrategy\" public=\"false\"/>
    <service id=\"doctrine.orm.naming_strategy.underscore\" class=\"Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy\" public=\"false\"/>
    <service id=\"doctrine.orm.naming_strategy.underscore_number_aware\" class=\"Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy\" public=\"false\">
      <argument>0</argument>
      <argument>true</argument>
    </service>
    <service id=\"doctrine.orm.quote_strategy.default\" class=\"Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy\" public=\"false\"/>
    <service id=\"doctrine.orm.quote_strategy.ansi\" class=\"Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy\" public=\"false\"/>
    <service id=\"doctrine.cache_clear_metadata_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-metadata\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-metadata</argument>
      </call>
    </service>
    <service id=\"doctrine.cache_clear_query_cache_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-query\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-query</argument>
      </call>
    </service>
    <service id=\"doctrine.cache_clear_result_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-result\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-result</argument>
      </call>
    </service>
    <service id=\"doctrine.cache_collection_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-collection-region\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-collection-region</argument>
      </call>
    </service>
    <service id=\"doctrine.mapping_convert_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:mapping:convert\"/>
      <call method=\"setName\">
        <argument>doctrine:mapping:convert</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_create_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:create\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:create</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_drop_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:drop\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:drop</argument>
      </call>
    </service>
    <service id=\"doctrine.ensure_production_settings_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:ensure-production-settings\"/>
      <call method=\"setName\">
        <argument>doctrine:ensure-production-settings</argument>
      </call>
    </service>
    <service id=\"doctrine.clear_entity_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-entity-region\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-entity-region</argument>
      </call>
    </service>
    <service id=\"doctrine.mapping_info_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:mapping:info\"/>
      <call method=\"setName\">
        <argument>doctrine:mapping:info</argument>
      </call>
    </service>
    <service id=\"doctrine.clear_query_region_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:cache:clear-query-region\"/>
      <call method=\"setName\">
        <argument>doctrine:cache:clear-query-region</argument>
      </call>
    </service>
    <service id=\"doctrine.query_dql_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:query:dql\"/>
      <call method=\"setName\">
        <argument>doctrine:query:dql</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_update_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:update\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:update</argument>
      </call>
    </service>
    <service id=\"doctrine.schema_validate_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand\">
      <tag name=\"console.command\" command=\"doctrine:schema:validate\"/>
      <call method=\"setName\">
        <argument>doctrine:schema:validate</argument>
      </call>
    </service>
    <service id=\"doctrine.mapping_import_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand\">
      <tag name=\"console.command\" command=\"doctrine:mapping:import\"/>
      <argument type=\"service\" id=\"doctrine\"/>
      <argument>%kernel.bundles%</argument>
      <call method=\"setName\">
        <argument>doctrine:mapping:import</argument>
      </call>
    </service>
    <service id=\"doctrine.orm.default_configuration\" class=\"Doctrine\\ORM\\Configuration\" public=\"false\">
      <call method=\"setEntityNamespaces\">
        <argument type=\"collection\">
          <argument key=\"App\">App\\Entity</argument>
        </argument>
      </call>
      <call method=\"setMetadataCacheImpl\">
        <argument type=\"service\" id=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata\"/>
      </call>
      <call method=\"setQueryCacheImpl\">
        <argument type=\"service\" id=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.query\"/>
      </call>
      <call method=\"setResultCacheImpl\">
        <argument type=\"service\" id=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.result\"/>
      </call>
      <call method=\"setMetadataDriverImpl\">
        <argument type=\"service\" id=\"doctrine.orm.default_metadata_driver\"/>
      </call>
      <call method=\"setProxyDir\">
        <argument>C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/doctrine/orm/Proxies</argument>
      </call>
      <call method=\"setProxyNamespace\">
        <argument>Proxies</argument>
      </call>
      <call method=\"setAutoGenerateProxyClasses\">
        <argument>true</argument>
      </call>
      <call method=\"setClassMetadataFactoryName\">
        <argument>Doctrine\\ORM\\Mapping\\ClassMetadataFactory</argument>
      </call>
      <call method=\"setDefaultRepositoryClassName\">
        <argument>Doctrine\\ORM\\EntityRepository</argument>
      </call>
      <call method=\"setNamingStrategy\">
        <argument type=\"service\" id=\"doctrine.orm.naming_strategy.underscore_number_aware\"/>
      </call>
      <call method=\"setQuoteStrategy\">
        <argument type=\"service\" id=\"doctrine.orm.quote_strategy.default\"/>
      </call>
      <call method=\"setEntityListenerResolver\">
        <argument type=\"service\" id=\"doctrine.orm.default_entity_listener_resolver\"/>
      </call>
      <call method=\"setRepositoryFactory\">
        <argument type=\"service\" id=\"doctrine.orm.container_repository_factory\"/>
      </call>
    </service>
    <service id=\"doctrine.orm.default_annotation_metadata_driver\" class=\"Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver\" public=\"false\">
      <argument type=\"service\" id=\"annotations.cached_reader\"/>
      <argument type=\"collection\">
        <argument>C:\\wamp64\\www\\QuillBlog\\src\\Entity</argument>
      </argument>
    </service>
    <service id=\"doctrine.orm.default_metadata_driver\" class=\"Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain\" public=\"false\">
      <call method=\"addDriver\">
        <argument type=\"service\" id=\"doctrine.orm.default_annotation_metadata_driver\"/>
        <argument>App\\Entity</argument>
      </call>
    </service>
    <service id=\"cache.doctrine.orm.default.metadata\" class=\"Symfony\\Component\\Cache\\Adapter\\ArrayAdapter\">
      <tag name=\"cache.pool\"/>
    </service>
    <service id=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata\" class=\"Symfony\\Component\\Cache\\DoctrineProvider\">
      <argument type=\"service\" id=\"cache.doctrine.orm.default.metadata\"/>
    </service>
    <service id=\"cache.doctrine.orm.default.result\" class=\"Symfony\\Component\\Cache\\Adapter\\ArrayAdapter\">
      <tag name=\"cache.pool\"/>
    </service>
    <service id=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.result\" class=\"Symfony\\Component\\Cache\\DoctrineProvider\">
      <argument type=\"service\" id=\"cache.doctrine.orm.default.result\"/>
    </service>
    <service id=\"cache.doctrine.orm.default.query\" class=\"Symfony\\Component\\Cache\\Adapter\\ArrayAdapter\">
      <tag name=\"cache.pool\"/>
    </service>
    <service id=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.query\" class=\"Symfony\\Component\\Cache\\DoctrineProvider\">
      <argument type=\"service\" id=\"cache.doctrine.orm.default.query\"/>
    </service>
    <service id=\"doctrine.orm.default_entity_listener_resolver\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver\">
      <argument type=\"service\" id=\"service_container\"/>
    </service>
    <service id=\"doctrine.orm.default_listeners.attach_entity_listeners\" class=\"Doctrine\\ORM\\Tools\\AttachEntityListenersListener\">
      <tag name=\"doctrine.event_listener\" event=\"loadClassMetadata\"/>
    </service>
    <service id=\"doctrine.orm.default_manager_configurator\" class=\"Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator\">
      <argument type=\"collection\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\"doctrine.orm.default_entity_manager\" class=\"Doctrine\\ORM\\EntityManager\" public=\"true\" lazy=\"true\">
      <argument type=\"service\" id=\"doctrine.dbal.default_connection\"/>
      <argument type=\"service\" id=\"doctrine.orm.default_configuration\"/>
      <factory class=\"Doctrine\\ORM\\EntityManager\" method=\"create\"/>
      <configurator service=\"doctrine.orm.default_manager_configurator\" method=\"configure\"/>
    </service>
    <service id=\"doctrine.orm.default_entity_manager.validator_loader\" class=\"Symfony\\Bridge\\Doctrine\\Validator\\DoctrineLoader\">
      <tag name=\"validator.auto_mapper\" priority=\"-100\"/>
      <argument type=\"service\" id=\"doctrine.orm.default_entity_manager\"/>
    </service>
    <service id=\"doctrine_migrations.diff_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:diff</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.dump_schema_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:dump-schema</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.execute_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:execute</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.generate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:generate</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.latest_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:latest</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.migrate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:migrate</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.rollup_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:rollup</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.status_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:status</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.up_to_date_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:up-to-date</argument>
      </call>
    </service>
    <service id=\"doctrine_migrations.version_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand\">
      <tag name=\"console.command\"/>
      <call method=\"setName\">
        <argument>doctrine:migrations:version</argument>
      </call>
    </service>
    <service id=\".1_~woTWp3X\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
      <argument>true</argument>
      <factory class=\"Symfony\\Bridge\\Twig\\ErrorRenderer\\TwigErrorRenderer\" method=\"isDebug\"/>
    </service>
    <service id=\"twig\" class=\"Twig\\Environment\" public=\"true\">
      <argument type=\"service\" id=\"twig.loader.native_filesystem\"/>
      <argument type=\"collection\">
        <argument key=\"autoescape\">name</argument>
        <argument key=\"cache\">C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev/twig</argument>
        <argument key=\"charset\">UTF-8</argument>
        <argument key=\"debug\">true</argument>
        <argument key=\"strict_variables\">true</argument>
      </argument>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.profiler\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.trans\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.assets\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.code\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.routing\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.yaml\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.debug.stopwatch\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.httpkernel\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.httpfoundation\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"doctrine.twig.doctrine_extension\"/>
      </call>
      <call method=\"addExtension\">
        <argument type=\"service\" id=\"twig.extension.debug\"/>
      </call>
      <call method=\"addGlobal\">
        <argument>app</argument>
        <argument type=\"service\" id=\"twig.app_variable\"/>
      </call>
      <call method=\"addRuntimeLoader\">
        <argument type=\"service\" id=\"twig.runtime_loader\"/>
      </call>
      <call method=\"registerUndefinedFilterCallback\">
        <argument type=\"collection\">
          <argument type=\"service\" id=\"twig.missing_extension_suggestor\"/>
          <argument>suggestFilter</argument>
        </argument>
      </call>
      <call method=\"registerUndefinedFunctionCallback\">
        <argument type=\"collection\">
          <argument type=\"service\" id=\"twig.missing_extension_suggestor\"/>
          <argument>suggestFunction</argument>
        </argument>
      </call>
      <configurator service=\"twig.configurator.environment\" method=\"configure\"/>
    </service>
    <service id=\"twig.app_variable\" class=\"Symfony\\Bridge\\Twig\\AppVariable\" public=\"false\">
      <call method=\"setEnvironment\">
        <argument>dev</argument>
      </call>
      <call method=\"setDebug\">
        <argument>true</argument>
      </call>
      <call method=\"setRequestStack\">
        <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
      </call>
    </service>
    <service id=\"twig.template_iterator\" class=\"Symfony\\Bundle\\TwigBundle\\TemplateIterator\" public=\"false\">
      <argument type=\"service\" id=\"kernel\"/>
      <argument type=\"collection\">
        <argument key=\"C:\\wamp64\\www\\QuillBlog/public/includes\">includes</argument>
        <argument key=\"C:\\wamp64\\www\\QuillBlog\">app</argument>
      </argument>
      <argument>C:\\wamp64\\www\\QuillBlog/templates</argument>
    </service>
    <service id=\"twig.template_cache_warmer\" class=\"Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheWarmer\" public=\"false\">
      <tag name=\"kernel.cache_warmer\"/>
      <tag name=\"container.service_subscriber\" id=\"twig\"/>
      <argument type=\"service\" id=\".service_locator.lSARbri.twig.template_cache_warmer\"/>
      <argument type=\"service\" id=\"twig.template_iterator\"/>
    </service>
    <service id=\"twig.loader.native_filesystem\" class=\"Twig\\Loader\\FilesystemLoader\" public=\"false\">
      <tag name=\"twig.loader\"/>
      <argument type=\"collection\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <call method=\"addPath\">
        <argument>C:\\wamp64\\www\\QuillBlog/public/includes</argument>
        <argument>includes</argument>
      </call>
      <call method=\"addPath\">
        <argument>C:\\wamp64\\www\\QuillBlog</argument>
        <argument>app</argument>
      </call>
      <call method=\"addPath\">
        <argument>C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle/Resources/views</argument>
        <argument>Framework</argument>
      </call>
      <call method=\"addPath\">
        <argument>C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle/Resources/views</argument>
        <argument>!Framework</argument>
      </call>
      <call method=\"addPath\">
        <argument>C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle/Resources/views</argument>
        <argument>Doctrine</argument>
      </call>
      <call method=\"addPath\">
        <argument>C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle/Resources/views</argument>
        <argument>!Doctrine</argument>
      </call>
      <call method=\"addPath\">
        <argument>C:\\wamp64\\www\\QuillBlog/templates</argument>
      </call>
    </service>
    <service id=\"twig.loader.chain\" class=\"Twig\\Loader\\ChainLoader\" public=\"false\"/>
    <service id=\"twig.extension.profiler\" class=\"Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"twig.profile\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"null\"/>
    </service>
    <service id=\"twig.profile\" class=\"Twig\\Profiler\\Profile\" public=\"false\"/>
    <service id=\"data_collector.twig\" class=\"Symfony\\Bridge\\Twig\\DataCollector\\TwigDataCollector\" public=\"false\">
      <tag name=\"data_collector\" template=\"@WebProfiler/Collector/twig.html.twig\" id=\"twig\" priority=\"257\"/>
      <argument type=\"service\" id=\"twig.profile\"/>
      <argument type=\"service\" id=\"twig\"/>
    </service>
    <service id=\"twig.extension.trans\" class=\"Symfony\\Bridge\\Twig\\Extension\\TranslationExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument>null</argument>
    </service>
    <service id=\"twig.extension.assets\" class=\"Symfony\\Bridge\\Twig\\Extension\\AssetExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"assets.packages\"/>
    </service>
    <service id=\"twig.extension.code\" class=\"Symfony\\Bridge\\Twig\\Extension\\CodeExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <argument>UTF-8</argument>
    </service>
    <service id=\"twig.extension.routing\" class=\"Symfony\\Bridge\\Twig\\Extension\\RoutingExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"router.default\"/>
    </service>
    <service id=\"twig.extension.yaml\" class=\"Symfony\\Bridge\\Twig\\Extension\\YamlExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"twig.extension.debug.stopwatch\" class=\"Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\"/>
      <argument>true</argument>
    </service>
    <service id=\"twig.extension.httpkernel\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"twig.runtime.httpkernel\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime\" public=\"false\">
      <tag name=\"twig.runtime\"/>
      <argument type=\"service\" id=\"fragment.handler\"/>
    </service>
    <service id=\"twig.extension.httpfoundation\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpFoundationExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
      <argument type=\"service\" id=\"url_helper\"/>
    </service>
    <service id=\"twig.extension.debug\" class=\"Twig\\Extension\\DebugExtension\" public=\"false\">
      <tag name=\"twig.extension\"/>
    </service>
    <service id=\"twig.extension.weblink\" class=\"Symfony\\Bridge\\Twig\\Extension\\WebLinkExtension\" public=\"false\">
      <argument type=\"service\" id=\"request_stack\"/>
    </service>
    <service id=\"twig.configurator.environment\" class=\"Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator\" public=\"false\">
      <argument>F j, Y H:i</argument>
      <argument>%d days</argument>
      <argument>null</argument>
      <argument>0</argument>
      <argument>.</argument>
      <argument>,</argument>
    </service>
    <service id=\"twig.runtime_loader\" class=\"Twig\\RuntimeLoader\\ContainerRuntimeLoader\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.UCasskA\"/>
    </service>
    <service id=\"twig.error_renderer.html\" class=\"Symfony\\Bridge\\Twig\\ErrorRenderer\\TwigErrorRenderer\" public=\"false\">
      <argument type=\"service\" id=\"twig\"/>
      <argument type=\"service\" id=\"error_handler.error_renderer.html\"/>
      <argument type=\"service\" id=\".1_~woTWp3X\"/>
    </service>
    <service id=\"twig.command.debug\" class=\"Symfony\\Bridge\\Twig\\Command\\DebugCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"debug:twig\"/>
      <argument type=\"service\" id=\"twig\"/>
      <argument>C:\\wamp64\\www\\QuillBlog</argument>
      <argument>%kernel.bundles_metadata%</argument>
      <argument>C:\\wamp64\\www\\QuillBlog/templates</argument>
      <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\"/>
      <call method=\"setName\">
        <argument>debug:twig</argument>
      </call>
    </service>
    <service id=\"twig.command.lint\" class=\"Symfony\\Bundle\\TwigBundle\\Command\\LintCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"lint:twig\"/>
      <argument type=\"service\" id=\"twig\"/>
      <call method=\"setName\">
        <argument>lint:twig</argument>
      </call>
    </service>
    <service id=\"twig.missing_extension_suggestor\" class=\"Twig\\Extra\\TwigExtraBundle\\MissingExtensionSuggestor\" public=\"false\"/>
    <service id=\".instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\BlogController\" class=\"App\\Controller\\BlogController\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\BlogController\" class=\"App\\Controller\\BlogController\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Controller\\BlogController\" class=\"App\\Controller\\BlogController\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\BlogControllerRepository\" class=\"App\\Repository\\BlogControllerRepository\" autowire=\"true\" abstract=\"true\"/>
    <service id=\".abstract.instanceof.App\\Repository\\BlogControllerRepository\" class=\"App\\Repository\\BlogControllerRepository\" autowire=\"true\" autoconfigure=\"true\" abstract=\"true\"/>
    <service id=\".service_locator.CmORmuK\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"base64\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"bool\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"const\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"csv\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"default\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"file\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"float\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"int\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"json\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"key\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"query_string\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"require\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"resolve\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"string\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"trim\" type=\"service\" id=\"container.env_var_processor\"/>
        <argument key=\"url\" type=\"service\" id=\"container.env_var_processor\"/>
      </argument>
    </service>
    <service id=\"maker.auto_command.make_auth\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:auth\"/>
      <argument type=\"service\" id=\"maker.maker.make_authenticator\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:auth</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_command\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:command\"/>
      <argument type=\"service\" id=\"maker.maker.make_command\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:command</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_controller\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:controller\"/>
      <argument type=\"service\" id=\"maker.maker.make_controller\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:controller</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_crud\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:crud\"/>
      <argument type=\"service\" id=\"maker.maker.make_crud\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:crud</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_entity\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:entity\"/>
      <argument type=\"service\" id=\"maker.maker.make_entity\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:entity</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_fixtures\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:fixtures\"/>
      <argument type=\"service\" id=\"maker.maker.make_fixtures\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:fixtures</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_form\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:form\"/>
      <argument type=\"service\" id=\"maker.maker.make_form\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:form</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_functional_test\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:functional-test\"/>
      <argument type=\"service\" id=\"maker.maker.make_functional_test\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:functional-test</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_registration_form\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:registration-form\"/>
      <argument type=\"service\" id=\"maker.maker.make_registration_form\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:registration-form</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_serializer_encoder\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:serializer:encoder\"/>
      <argument type=\"service\" id=\"maker.maker.make_serializer_encoder\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:serializer:encoder</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_serializer_normalizer\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:serializer:normalizer\"/>
      <argument type=\"service\" id=\"maker.maker.make_serializer_normalizer\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:serializer:normalizer</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_subscriber\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:subscriber\"/>
      <argument type=\"service\" id=\"maker.maker.make_subscriber\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:subscriber</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_twig_extension\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:twig-extension\"/>
      <argument type=\"service\" id=\"maker.maker.make_twig_extension\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:twig-extension</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_unit_test\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:unit-test\"/>
      <argument type=\"service\" id=\"maker.maker.make_unit_test\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:unit-test</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_validator\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:validator\"/>
      <argument type=\"service\" id=\"maker.maker.make_validator\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:validator</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_voter\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:voter\"/>
      <argument type=\"service\" id=\"maker.maker.make_voter\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:voter</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_user\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:user\"/>
      <argument type=\"service\" id=\"maker.maker.make_user\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:user</argument>
      </call>
    </service>
    <service id=\"maker.auto_command.make_migration\" class=\"Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand\" public=\"false\">
      <tag name=\"console.command\" command=\"make:migration\"/>
      <argument type=\"service\" id=\"maker.maker.make_migration\"/>
      <argument type=\"service\" id=\"maker.file_manager\"/>
      <argument type=\"service\" id=\"maker.generator\"/>
      <call method=\"setName\">
        <argument>make:migration</argument>
      </call>
    </service>
    <service id=\".service_locator.I3K77mT\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\"/>
    </service>
    <service id=\".service_locator._cmka45\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"inline\" type=\"service\" id=\"fragment.renderer.inline\"/>
      </argument>
    </service>
    <service id=\"debug.argument_resolver.request_attribute\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"100\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.request_attribute.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.request\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"50\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.request.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.session\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"50\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.session.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.service\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-50\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.service.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.default\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-100\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.default.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.variadic\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-150\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.variadic.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\"debug.argument_resolver.not_tagged_controller\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver\">
      <tag name=\"controller.argument_value_resolver\" priority=\"-200\"/>
      <argument type=\"service\" id=\"debug.argument_resolver.not_tagged_controller.inner\"/>
      <argument type=\"service\" id=\"debug.stopwatch\"/>
    </service>
    <service id=\".service_locator.bpvU51K\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"doctrine.orm.default_listeners.attach_entity_listeners\" type=\"service\" id=\"doctrine.orm.default_listeners.attach_entity_listeners\"/>
      </argument>
    </service>
    <service id=\".service_locator.kOQSzIs\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"App\\Repository\\BlogControllerRepository\" type=\"service\" id=\"App\\Repository\\BlogControllerRepository\"/>
      </argument>
    </service>
    <service id=\"logger\" class=\"Symfony\\Component\\HttpKernel\\Log\\Logger\" public=\"false\"/>
    <service id=\".service_locator.pNNo5z3\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"doctrine\" type=\"service\" id=\"doctrine\" on-invalid=\"ignore\"/>
        <argument key=\"http_kernel\" type=\"service\" id=\"http_kernel\" on-invalid=\"ignore\"/>
        <argument key=\"parameter_bag\" type=\"service\" id=\"parameter_bag\" on-invalid=\"ignore\"/>
        <argument key=\"request_stack\" type=\"service\" id=\"request_stack\" on-invalid=\"ignore\"/>
        <argument key=\"router\" type=\"service\" id=\"router.default\" on-invalid=\"ignore\"/>
        <argument key=\"session\" type=\"service\" id=\"session\" on-invalid=\"ignore\"/>
        <argument key=\"twig\" type=\"service\" id=\"twig\" on-invalid=\"ignore\"/>
      </argument>
    </service>
    <service id=\".service_locator.pNNo5z3.App\\Controller\\BlogController\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"App\\Controller\\BlogController\"/>
      <argument>App\\Controller\\BlogController</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.pNNo5z3\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.ld1.260\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"routing.loader\" type=\"service\" id=\"routing.loader\"/>
      </argument>
    </service>
    <service id=\".service_locator.ld1.260.router.default\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"router.default\"/>
      <argument>router.default</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.ld1.260\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.3TLJ8AE\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"router\" type=\"service\" id=\"router.default\"/>
      </argument>
    </service>
    <service id=\".service_locator.3TLJ8AE.router.cache_warmer\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"router.cache_warmer\"/>
      <argument>router.cache_warmer</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.3TLJ8AE\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.lSARbri\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"twig\" type=\"service\" id=\"twig\"/>
      </argument>
    </service>
    <service id=\".service_locator.lSARbri.twig.template_cache_warmer\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator_context\" id=\"twig.template_cache_warmer\"/>
      <argument>twig.template_cache_warmer</argument>
      <argument type=\"service\" id=\"service_container\"/>
      <factory service=\".service_locator.lSARbri\" method=\"withContext\"/>
    </service>
    <service id=\".service_locator.wnlveDj\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"reverse_container\" type=\"service\" id=\"reverse_container\" on-invalid=\"ignore_uninitialized\"/>
      </argument>
    </service>
    <service id=\".service_locator.Bppmeg3\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"initialized_session\" type=\"service\" id=\"session\" on-invalid=\"ignore_uninitialized\"/>
        <argument key=\"request_stack\" type=\"service\" id=\"request_stack\"/>
        <argument key=\"session\" type=\"service\" id=\"session\" on-invalid=\"ignore\"/>
        <argument key=\"session_storage\" type=\"service\" id=\"session.storage.native\" on-invalid=\"ignore\"/>
      </argument>
    </service>
    <service id=\".service_locator.mshSVvX\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"kernel\" type=\"service\" id=\"kernel\"/>
      </argument>
    </service>
    <service id=\"debug.event_dispatcher.inner\" class=\"Symfony\\Component\\EventDispatcher\\EventDispatcher\" public=\"false\"/>
    <service id=\"debug.controller_resolver.inner\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver\" public=\"false\">
      <argument type=\"service\" id=\"service_container\"/>
      <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\"/>
    </service>
    <service id=\"debug.argument_resolver.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\" public=\"false\">
      <argument type=\"service\" id=\"argument_metadata_factory\"/>
      <argument type=\"iterator\">
        <argument type=\"service\" id=\"debug.argument_resolver.request_attribute\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.request\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.session\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.service\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.default\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.variadic\"/>
        <argument type=\"service\" id=\"debug.argument_resolver.not_tagged_controller\"/>
      </argument>
    </service>
    <service id=\"debug.argument_resolver.request_attribute.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.request.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.session.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\SessionValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.service.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\ServiceValueResolver\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.I3K77mT\"/>
    </service>
    <service id=\"debug.argument_resolver.default.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\DefaultValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.variadic.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\VariadicValueResolver\" public=\"false\"/>
    <service id=\"debug.argument_resolver.not_tagged_controller.inner\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\NotTaggedControllerValueResolver\" public=\"false\">
      <argument type=\"service\" id=\".service_locator.I3K77mT\"/>
    </service>
    <service id=\"console.command_loader\" class=\"Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader\" public=\"true\">
      <argument type=\"service\" id=\".service_locator.gZrzbkL\"/>
      <argument type=\"collection\">
        <argument key=\"about\">console.command.about</argument>
        <argument key=\"assets:install\">console.command.assets_install</argument>
        <argument key=\"cache:clear\">console.command.cache_clear</argument>
        <argument key=\"cache:pool:clear\">console.command.cache_pool_clear</argument>
        <argument key=\"cache:pool:prune\">console.command.cache_pool_prune</argument>
        <argument key=\"cache:pool:delete\">console.command.cache_pool_delete</argument>
        <argument key=\"cache:pool:list\">console.command.cache_pool_list</argument>
        <argument key=\"cache:warmup\">console.command.cache_warmup</argument>
        <argument key=\"debug:config\">console.command.config_debug</argument>
        <argument key=\"config:dump-reference\">console.command.config_dump_reference</argument>
        <argument key=\"debug:container\">console.command.container_debug</argument>
        <argument key=\"lint:container\">console.command.container_lint</argument>
        <argument key=\"debug:autowiring\">console.command.debug_autowiring</argument>
        <argument key=\"debug:event-dispatcher\">console.command.event_dispatcher_debug</argument>
        <argument key=\"debug:router\">console.command.router_debug</argument>
        <argument key=\"router:match\">console.command.router_match</argument>
        <argument key=\"lint:yaml\">console.command.yaml_lint</argument>
        <argument key=\"secrets:set\">console.command.secrets_set</argument>
        <argument key=\"secrets:remove\">console.command.secrets_remove</argument>
        <argument key=\"secrets:generate-keys\">console.command.secrets_generate_key</argument>
        <argument key=\"secrets:list\">console.command.secrets_list</argument>
        <argument key=\"secrets:decrypt-to-local\">console.command.secrets_decrypt_to_local</argument>
        <argument key=\"secrets:encrypt-from-local\">console.command.secrets_encrypt_from_local</argument>
        <argument key=\"doctrine:database:create\">doctrine.database_create_command</argument>
        <argument key=\"doctrine:database:drop\">doctrine.database_drop_command</argument>
        <argument key=\"doctrine:database:import\">doctrine.database_import_command</argument>
        <argument key=\"doctrine:query:sql\">doctrine.query_sql_command</argument>
        <argument key=\"doctrine:cache:clear-metadata\">doctrine.cache_clear_metadata_command</argument>
        <argument key=\"doctrine:cache:clear-query\">doctrine.cache_clear_query_cache_command</argument>
        <argument key=\"doctrine:cache:clear-result\">doctrine.cache_clear_result_command</argument>
        <argument key=\"doctrine:cache:clear-collection-region\">doctrine.cache_collection_region_command</argument>
        <argument key=\"doctrine:mapping:convert\">doctrine.mapping_convert_command</argument>
        <argument key=\"doctrine:schema:create\">doctrine.schema_create_command</argument>
        <argument key=\"doctrine:schema:drop\">doctrine.schema_drop_command</argument>
        <argument key=\"doctrine:ensure-production-settings\">doctrine.ensure_production_settings_command</argument>
        <argument key=\"doctrine:cache:clear-entity-region\">doctrine.clear_entity_region_command</argument>
        <argument key=\"doctrine:mapping:info\">doctrine.mapping_info_command</argument>
        <argument key=\"doctrine:cache:clear-query-region\">doctrine.clear_query_region_command</argument>
        <argument key=\"doctrine:query:dql\">doctrine.query_dql_command</argument>
        <argument key=\"doctrine:schema:update\">doctrine.schema_update_command</argument>
        <argument key=\"doctrine:schema:validate\">doctrine.schema_validate_command</argument>
        <argument key=\"doctrine:mapping:import\">doctrine.mapping_import_command</argument>
        <argument key=\"doctrine:migrations:diff\">doctrine_migrations.diff_command</argument>
        <argument key=\"doctrine:migrations:dump-schema\">doctrine_migrations.dump_schema_command</argument>
        <argument key=\"doctrine:migrations:execute\">doctrine_migrations.execute_command</argument>
        <argument key=\"doctrine:migrations:generate\">doctrine_migrations.generate_command</argument>
        <argument key=\"doctrine:migrations:latest\">doctrine_migrations.latest_command</argument>
        <argument key=\"doctrine:migrations:migrate\">doctrine_migrations.migrate_command</argument>
        <argument key=\"doctrine:migrations:rollup\">doctrine_migrations.rollup_command</argument>
        <argument key=\"doctrine:migrations:status\">doctrine_migrations.status_command</argument>
        <argument key=\"doctrine:migrations:up-to-date\">doctrine_migrations.up_to_date_command</argument>
        <argument key=\"doctrine:migrations:version\">doctrine_migrations.version_command</argument>
        <argument key=\"debug:twig\">twig.command.debug</argument>
        <argument key=\"lint:twig\">twig.command.lint</argument>
        <argument key=\"make:auth\">maker.auto_command.make_auth</argument>
        <argument key=\"make:command\">maker.auto_command.make_command</argument>
        <argument key=\"make:controller\">maker.auto_command.make_controller</argument>
        <argument key=\"make:crud\">maker.auto_command.make_crud</argument>
        <argument key=\"make:entity\">maker.auto_command.make_entity</argument>
        <argument key=\"make:fixtures\">maker.auto_command.make_fixtures</argument>
        <argument key=\"make:form\">maker.auto_command.make_form</argument>
        <argument key=\"make:functional-test\">maker.auto_command.make_functional_test</argument>
        <argument key=\"make:registration-form\">maker.auto_command.make_registration_form</argument>
        <argument key=\"make:serializer:encoder\">maker.auto_command.make_serializer_encoder</argument>
        <argument key=\"make:serializer:normalizer\">maker.auto_command.make_serializer_normalizer</argument>
        <argument key=\"make:subscriber\">maker.auto_command.make_subscriber</argument>
        <argument key=\"make:twig-extension\">maker.auto_command.make_twig_extension</argument>
        <argument key=\"make:unit-test\">maker.auto_command.make_unit_test</argument>
        <argument key=\"make:validator\">maker.auto_command.make_validator</argument>
        <argument key=\"make:voter\">maker.auto_command.make_voter</argument>
        <argument key=\"make:user\">maker.auto_command.make_user</argument>
        <argument key=\"make:migration\">maker.auto_command.make_migration</argument>
      </argument>
    </service>
    <service id=\".service_locator.gZrzbkL\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"console.command.about\" type=\"service\" id=\"console.command.about\"/>
        <argument key=\"console.command.assets_install\" type=\"service\" id=\"console.command.assets_install\"/>
        <argument key=\"console.command.cache_clear\" type=\"service\" id=\"console.command.cache_clear\"/>
        <argument key=\"console.command.cache_pool_clear\" type=\"service\" id=\"console.command.cache_pool_clear\"/>
        <argument key=\"console.command.cache_pool_delete\" type=\"service\" id=\"console.command.cache_pool_delete\"/>
        <argument key=\"console.command.cache_pool_list\" type=\"service\" id=\"console.command.cache_pool_list\"/>
        <argument key=\"console.command.cache_pool_prune\" type=\"service\" id=\"console.command.cache_pool_prune\"/>
        <argument key=\"console.command.cache_warmup\" type=\"service\" id=\"console.command.cache_warmup\"/>
        <argument key=\"console.command.config_debug\" type=\"service\" id=\"console.command.config_debug\"/>
        <argument key=\"console.command.config_dump_reference\" type=\"service\" id=\"console.command.config_dump_reference\"/>
        <argument key=\"console.command.container_debug\" type=\"service\" id=\"console.command.container_debug\"/>
        <argument key=\"console.command.container_lint\" type=\"service\" id=\"console.command.container_lint\"/>
        <argument key=\"console.command.debug_autowiring\" type=\"service\" id=\"console.command.debug_autowiring\"/>
        <argument key=\"console.command.event_dispatcher_debug\" type=\"service\" id=\"console.command.event_dispatcher_debug\"/>
        <argument key=\"console.command.router_debug\" type=\"service\" id=\"console.command.router_debug\"/>
        <argument key=\"console.command.router_match\" type=\"service\" id=\"console.command.router_match\"/>
        <argument key=\"console.command.secrets_decrypt_to_local\" type=\"service\" id=\"console.command.secrets_decrypt_to_local\"/>
        <argument key=\"console.command.secrets_encrypt_from_local\" type=\"service\" id=\"console.command.secrets_encrypt_from_local\"/>
        <argument key=\"console.command.secrets_generate_key\" type=\"service\" id=\"console.command.secrets_generate_key\"/>
        <argument key=\"console.command.secrets_list\" type=\"service\" id=\"console.command.secrets_list\"/>
        <argument key=\"console.command.secrets_remove\" type=\"service\" id=\"console.command.secrets_remove\"/>
        <argument key=\"console.command.secrets_set\" type=\"service\" id=\"console.command.secrets_set\"/>
        <argument key=\"console.command.yaml_lint\" type=\"service\" id=\"console.command.yaml_lint\"/>
        <argument key=\"doctrine.cache_clear_metadata_command\" type=\"service\" id=\"doctrine.cache_clear_metadata_command\"/>
        <argument key=\"doctrine.cache_clear_query_cache_command\" type=\"service\" id=\"doctrine.cache_clear_query_cache_command\"/>
        <argument key=\"doctrine.cache_clear_result_command\" type=\"service\" id=\"doctrine.cache_clear_result_command\"/>
        <argument key=\"doctrine.cache_collection_region_command\" type=\"service\" id=\"doctrine.cache_collection_region_command\"/>
        <argument key=\"doctrine.clear_entity_region_command\" type=\"service\" id=\"doctrine.clear_entity_region_command\"/>
        <argument key=\"doctrine.clear_query_region_command\" type=\"service\" id=\"doctrine.clear_query_region_command\"/>
        <argument key=\"doctrine.database_create_command\" type=\"service\" id=\"doctrine.database_create_command\"/>
        <argument key=\"doctrine.database_drop_command\" type=\"service\" id=\"doctrine.database_drop_command\"/>
        <argument key=\"doctrine.database_import_command\" type=\"service\" id=\"doctrine.database_import_command\"/>
        <argument key=\"doctrine.ensure_production_settings_command\" type=\"service\" id=\"doctrine.ensure_production_settings_command\"/>
        <argument key=\"doctrine.mapping_convert_command\" type=\"service\" id=\"doctrine.mapping_convert_command\"/>
        <argument key=\"doctrine.mapping_import_command\" type=\"service\" id=\"doctrine.mapping_import_command\"/>
        <argument key=\"doctrine.mapping_info_command\" type=\"service\" id=\"doctrine.mapping_info_command\"/>
        <argument key=\"doctrine.query_dql_command\" type=\"service\" id=\"doctrine.query_dql_command\"/>
        <argument key=\"doctrine.query_sql_command\" type=\"service\" id=\"doctrine.query_sql_command\"/>
        <argument key=\"doctrine.schema_create_command\" type=\"service\" id=\"doctrine.schema_create_command\"/>
        <argument key=\"doctrine.schema_drop_command\" type=\"service\" id=\"doctrine.schema_drop_command\"/>
        <argument key=\"doctrine.schema_update_command\" type=\"service\" id=\"doctrine.schema_update_command\"/>
        <argument key=\"doctrine.schema_validate_command\" type=\"service\" id=\"doctrine.schema_validate_command\"/>
        <argument key=\"doctrine_migrations.diff_command\" type=\"service\" id=\"doctrine_migrations.diff_command\"/>
        <argument key=\"doctrine_migrations.dump_schema_command\" type=\"service\" id=\"doctrine_migrations.dump_schema_command\"/>
        <argument key=\"doctrine_migrations.execute_command\" type=\"service\" id=\"doctrine_migrations.execute_command\"/>
        <argument key=\"doctrine_migrations.generate_command\" type=\"service\" id=\"doctrine_migrations.generate_command\"/>
        <argument key=\"doctrine_migrations.latest_command\" type=\"service\" id=\"doctrine_migrations.latest_command\"/>
        <argument key=\"doctrine_migrations.migrate_command\" type=\"service\" id=\"doctrine_migrations.migrate_command\"/>
        <argument key=\"doctrine_migrations.rollup_command\" type=\"service\" id=\"doctrine_migrations.rollup_command\"/>
        <argument key=\"doctrine_migrations.status_command\" type=\"service\" id=\"doctrine_migrations.status_command\"/>
        <argument key=\"doctrine_migrations.up_to_date_command\" type=\"service\" id=\"doctrine_migrations.up_to_date_command\"/>
        <argument key=\"doctrine_migrations.version_command\" type=\"service\" id=\"doctrine_migrations.version_command\"/>
        <argument key=\"maker.auto_command.make_auth\" type=\"service\" id=\"maker.auto_command.make_auth\"/>
        <argument key=\"maker.auto_command.make_command\" type=\"service\" id=\"maker.auto_command.make_command\"/>
        <argument key=\"maker.auto_command.make_controller\" type=\"service\" id=\"maker.auto_command.make_controller\"/>
        <argument key=\"maker.auto_command.make_crud\" type=\"service\" id=\"maker.auto_command.make_crud\"/>
        <argument key=\"maker.auto_command.make_entity\" type=\"service\" id=\"maker.auto_command.make_entity\"/>
        <argument key=\"maker.auto_command.make_fixtures\" type=\"service\" id=\"maker.auto_command.make_fixtures\"/>
        <argument key=\"maker.auto_command.make_form\" type=\"service\" id=\"maker.auto_command.make_form\"/>
        <argument key=\"maker.auto_command.make_functional_test\" type=\"service\" id=\"maker.auto_command.make_functional_test\"/>
        <argument key=\"maker.auto_command.make_migration\" type=\"service\" id=\"maker.auto_command.make_migration\"/>
        <argument key=\"maker.auto_command.make_registration_form\" type=\"service\" id=\"maker.auto_command.make_registration_form\"/>
        <argument key=\"maker.auto_command.make_serializer_encoder\" type=\"service\" id=\"maker.auto_command.make_serializer_encoder\"/>
        <argument key=\"maker.auto_command.make_serializer_normalizer\" type=\"service\" id=\"maker.auto_command.make_serializer_normalizer\"/>
        <argument key=\"maker.auto_command.make_subscriber\" type=\"service\" id=\"maker.auto_command.make_subscriber\"/>
        <argument key=\"maker.auto_command.make_twig_extension\" type=\"service\" id=\"maker.auto_command.make_twig_extension\"/>
        <argument key=\"maker.auto_command.make_unit_test\" type=\"service\" id=\"maker.auto_command.make_unit_test\"/>
        <argument key=\"maker.auto_command.make_user\" type=\"service\" id=\"maker.auto_command.make_user\"/>
        <argument key=\"maker.auto_command.make_validator\" type=\"service\" id=\"maker.auto_command.make_validator\"/>
        <argument key=\"maker.auto_command.make_voter\" type=\"service\" id=\"maker.auto_command.make_voter\"/>
        <argument key=\"twig.command.debug\" type=\"service\" id=\"twig.command.debug\"/>
        <argument key=\"twig.command.lint\" type=\"service\" id=\"twig.command.lint\"/>
      </argument>
    </service>
    <service id=\".service_locator.UCasskA\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"false\">
      <tag name=\"container.service_locator\"/>
      <argument type=\"collection\">
        <argument key=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime\" type=\"service\" id=\"twig.runtime.httpkernel\"/>
      </argument>
    </service>
    <service id=\"Psr\\Container\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" alias=\"service_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface\" alias=\"parameter_bag\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface\" alias=\"parameter_bag\" public=\"false\"/>
    <service id=\"Symfony\\Component\\EventDispatcher\\EventDispatcherInterface\" alias=\"debug.event_dispatcher\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface\" alias=\"debug.event_dispatcher\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\HttpKernelInterface\" alias=\"http_kernel\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\RequestStack\" alias=\"request_stack\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\UrlHelper\" alias=\"url_helper\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\KernelInterface\" alias=\"kernel\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Filesystem\\Filesystem\" alias=\"filesystem\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\Config\\FileLocator\" alias=\"file_locator\" public=\"false\"/>
    <service id=\"Symfony\\Component\\DependencyInjection\\ReverseContainer\" alias=\"reverse_container\" public=\"false\"/>
    <service id=\"Symfony\\Component\\String\\Slugger\\SluggerInterface\" alias=\"slugger\" public=\"false\"/>
    <service id=\"error_renderer.html\" alias=\"twig.error_renderer.html\"/>
    <service id=\"error_renderer\" alias=\"twig.error_renderer.html\"/>
    <service id=\"Psr\\EventDispatcher\\EventDispatcherInterface\" alias=\"debug.event_dispatcher\"/>
    <service id=\"Psr\\Container\\ContainerInterface \$parameterBag\" alias=\"parameter_bag\"/>
    <service id=\"cache.app_clearer\" alias=\"cache.default_clearer\" public=\"true\"/>
    <service id=\"Psr\\Cache\\CacheItemPoolInterface\" alias=\"cache.app\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\" alias=\"cache.app\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\Cache\\CacheInterface\" alias=\"cache.app\" public=\"false\"/>
    <service id=\"Symfony\\Contracts\\Cache\\TagAwareCacheInterface\" alias=\"cache.app.taggable\" public=\"false\"/>
    <service id=\"cache.default_redis_provider\" alias=\".cache_connection.GD_MSZC\" public=\"false\"/>
    <service id=\"cache.default_memcached_provider\" alias=\".cache_connection.JKE6keX\" public=\"false\"/>
    <service id=\"cache.default_pdo_provider\" alias=\"doctrine.dbal.default_connection\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\Session\\SessionInterface\" alias=\"session\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface\" alias=\"session.storage.native\" public=\"false\"/>
    <service id=\"SessionHandlerInterface\" alias=\"session.handler\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface\" alias=\"session.flash_bag\" public=\"false\"/>
    <service id=\"session.storage.filesystem\" alias=\"session.storage.mock_file\" public=\"false\"/>
    <service id=\"session.storage\" alias=\"session.storage.native\"/>
    <service id=\"Symfony\\Component\\Asset\\Packages\" alias=\"assets.packages\" public=\"false\"/>
    <service id=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\" alias=\"debug.file_link_formatter\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Stopwatch\\Stopwatch\" alias=\"debug.stopwatch\" public=\"false\"/>
    <service id=\"router\" alias=\"router.default\" public=\"true\"/>
    <service id=\"Symfony\\Component\\Routing\\RouterInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\RequestContextAwareInterface\" alias=\"router.default\" public=\"false\"/>
    <service id=\"Symfony\\Component\\Routing\\RequestContext\" alias=\"router.request_context\" public=\"false\"/>
    <service id=\"annotation_reader\" alias=\"annotations.cached_reader\"/>
    <service id=\"Doctrine\\Common\\Annotations\\Reader\" alias=\"annotations.cached_reader\" public=\"false\"/>
    <service id=\"Doctrine\\DBAL\\Driver\\Connection\" alias=\"doctrine.dbal.default_connection\" public=\"false\"/>
    <service id=\"Doctrine\\DBAL\\Connection\" alias=\"doctrine.dbal.default_connection\" public=\"false\"/>
    <service id=\"Doctrine\\Persistence\\ManagerRegistry\" alias=\"doctrine\" public=\"false\"/>
    <service id=\"Doctrine\\Common\\Persistence\\ManagerRegistry\" alias=\"doctrine\" public=\"false\"/>
    <service id=\"database_connection\" alias=\"doctrine.dbal.default_connection\" public=\"true\"/>
    <service id=\"doctrine.dbal.event_manager\" alias=\"doctrine.dbal.default_connection.event_manager\" public=\"false\"/>
    <service id=\"Doctrine\\ORM\\EntityManagerInterface\" alias=\"doctrine.orm.default_entity_manager\" public=\"false\"/>
    <service id=\"doctrine.orm.metadata.annotation_reader\" alias=\"annotations.cached_reader\" public=\"false\"/>
    <service id=\"doctrine.orm.entity_manager\" alias=\"doctrine.orm.default_entity_manager\" public=\"true\"/>
    <service id=\"doctrine.orm.default_metadata_cache\" alias=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata\" public=\"false\"/>
    <service id=\"doctrine.orm.default_result_cache\" alias=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.result\" public=\"false\"/>
    <service id=\"doctrine.orm.default_query_cache\" alias=\"doctrine.orm.cache.provider.cache.doctrine.orm.default.query\" public=\"false\"/>
    <service id=\"doctrine.orm.default_entity_manager.event_manager\" alias=\"doctrine.dbal.default_connection.event_manager\" public=\"false\"/>
    <service id=\"Twig_Environment\" alias=\"twig\" public=\"false\"/>
    <service id=\"Twig\\Environment\" alias=\"twig\" public=\"false\"/>
    <service id=\"container.env_var_processors_locator\" alias=\".service_locator.CmORmuK\" public=\"true\"/>
    <service id=\"twig.loader.filesystem\" alias=\"twig.loader.native_filesystem\" public=\"false\"/>
    <service id=\"argument_resolver.controller_locator\" alias=\".service_locator.I3K77mT\"/>
    <service id=\"twig.loader\" alias=\"twig.loader.native_filesystem\"/>
    <service id=\"Psr\\Log\\LoggerInterface\" alias=\"logger\" public=\"false\"/>
    <service id=\"event_dispatcher\" alias=\"debug.event_dispatcher\" public=\"true\"/>
    <service id=\"controller_resolver\" alias=\"debug.controller_resolver\" public=\"false\"/>
    <service id=\"argument_resolver\" alias=\"debug.argument_resolver\" public=\"false\"/>
    <service id=\"twig.error_renderer.html.inner\" alias=\"error_handler.error_renderer.html\" public=\"false\"/>
    <service id=\"argument_resolver.request_attribute\" alias=\"debug.argument_resolver.request_attribute\" public=\"false\"/>
    <service id=\"argument_resolver.request\" alias=\"debug.argument_resolver.request\" public=\"false\"/>
    <service id=\"argument_resolver.session\" alias=\"debug.argument_resolver.session\" public=\"false\"/>
    <service id=\"argument_resolver.service\" alias=\"debug.argument_resolver.service\" public=\"false\"/>
    <service id=\"argument_resolver.default\" alias=\"debug.argument_resolver.default\" public=\"false\"/>
    <service id=\"argument_resolver.variadic\" alias=\"debug.argument_resolver.variadic\" public=\"false\"/>
    <service id=\"argument_resolver.not_tagged_controller\" alias=\"debug.argument_resolver.not_tagged_controller\" public=\"false\"/>
  </services>
</container>
", "@app/var/cache/dev/App_KernelDevDebugContainer.xml", "C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev\\App_KernelDevDebugContainer.xml");
    }
}
