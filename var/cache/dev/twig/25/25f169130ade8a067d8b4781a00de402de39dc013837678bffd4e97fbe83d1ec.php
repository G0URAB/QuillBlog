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

/* @app/vendor/symfony/framework-bundle/Resources/config/messenger.xml */
class __TwigTemplate_a7a66b55cdf7485843242b65a21cf42f1d2ef77966c6974c95b34116325c7f8c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/messenger.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <!-- Asynchronous -->
        <service id=\"messenger.senders_locator\" class=\"Symfony\\Component\\Messenger\\Transport\\Sender\\SendersLocator\">
            <argument type=\"collection\" /> <!-- Per message senders map -->
            <argument /> <!-- senders service locator -->
        </service>
        <service id=\"messenger.middleware.send_message\" class=\"Symfony\\Component\\Messenger\\Middleware\\SendMessageMiddleware\">
            <tag name=\"monolog.logger\" channel=\"messenger\" />
            <argument type=\"service\" id=\"messenger.senders_locator\" />
            <argument type=\"service\" id=\"event_dispatcher\" />
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <!-- Message encoding/decoding -->
        <service id=\"messenger.transport.symfony_serializer\" class=\"Symfony\\Component\\Messenger\\Transport\\Serialization\\Serializer\">
            <argument type=\"service\" id=\"serializer\" />
            <argument /> <!-- Format -->
            <argument type=\"collection\" /> <!-- Context -->
        </service>
        <service id=\"Symfony\\Component\\Messenger\\Transport\\Serialization\\SerializerInterface\" alias=\"messenger.default_serializer\" />

        <service id=\"messenger.transport.native_php_serializer\" class=\"Symfony\\Component\\Messenger\\Transport\\Serialization\\PhpSerializer\" />

        <!-- Middleware -->
        <service id=\"messenger.middleware.handle_message\" class=\"Symfony\\Component\\Messenger\\Middleware\\HandleMessageMiddleware\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"messenger\" />
            <argument /> <!-- Bus handler resolver -->
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"messenger.middleware.add_bus_name_stamp_middleware\" class=\"Symfony\\Component\\Messenger\\Middleware\\AddBusNameStampMiddleware\" abstract=\"true\" />

        <service id=\"messenger.middleware.dispatch_after_current_bus\" class=\"Symfony\\Component\\Messenger\\Middleware\\DispatchAfterCurrentBusMiddleware\" />

        <service id=\"messenger.middleware.validation\" class=\"Symfony\\Component\\Messenger\\Middleware\\ValidationMiddleware\">
            <argument type=\"service\" id=\"validator\" />
        </service>

        <service id=\"messenger.middleware.reject_redelivered_message_middleware\" class=\"Symfony\\Component\\Messenger\\Middleware\\RejectRedeliveredMessageMiddleware\" />

        <service id=\"messenger.middleware.failed_message_processing_middleware\" class=\"Symfony\\Component\\Messenger\\Middleware\\FailedMessageProcessingMiddleware\" />

        <service id=\"messenger.middleware.traceable\" class=\"Symfony\\Component\\Messenger\\Middleware\\TraceableMiddleware\" abstract=\"true\">
            <argument type=\"service\" id=\"debug.stopwatch\" />
        </service>

        <!-- Discovery -->
        <service id=\"messenger.receiver_locator\">
            <tag name=\"container.service_locator\" />
            <argument type=\"collection\" />
        </service>

        <!-- transports -->
        <service id=\"messenger.transport_factory\" class=\"Symfony\\Component\\Messenger\\Transport\\TransportFactory\">
            <argument type=\"tagged_iterator\" tag=\"messenger.transport_factory\" />
        </service>

        <service id=\"messenger.transport.amqp.factory\" class=\"Symfony\\Component\\Messenger\\Transport\\AmqpExt\\AmqpTransportFactory\">
            <tag name=\"messenger.transport_factory\" />
        </service>

        <service id=\"messenger.transport.redis.factory\" class=\"Symfony\\Component\\Messenger\\Transport\\RedisExt\\RedisTransportFactory\">
            <tag name=\"messenger.transport_factory\" />
        </service>

        <service id=\"messenger.transport.sync.factory\" class=\"Symfony\\Component\\Messenger\\Transport\\Sync\\SyncTransportFactory\">
            <tag name=\"messenger.transport_factory\" />
            <argument type=\"service\" id=\"messenger.routable_message_bus\" />
        </service>

        <service id=\"messenger.transport.in_memory.factory\" class=\"Symfony\\Component\\Messenger\\Transport\\InMemoryTransportFactory\">
            <tag name=\"messenger.transport_factory\" />
            <tag name=\"kernel.reset\" method=\"reset\" />
        </service>

        <!-- retry -->
        <service id=\"messenger.retry_strategy_locator\">
            <tag name=\"container.service_locator\" />
            <argument type=\"collection\" />
        </service>

        <service id=\"messenger.retry.abstract_multiplier_retry_strategy\" class=\"Symfony\\Component\\Messenger\\Retry\\MultiplierRetryStrategy\" abstract=\"true\">
            <argument /> <!-- max retries -->
            <argument /> <!-- delay ms -->
            <argument /> <!-- multiplier -->
            <argument /> <!-- max delay ms -->
        </service>

        <!-- worker event listeners -->
        <service id=\"messenger.retry.send_failed_message_for_retry_listener\" class=\"Symfony\\Component\\Messenger\\EventListener\\SendFailedMessageForRetryListener\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"monolog.logger\" channel=\"messenger\" />
            <argument /> <!-- senders service locator -->
            <argument type=\"service\" id=\"messenger.retry_strategy_locator\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
        </service>

        <service id=\"messenger.failure.send_failed_message_to_failure_transport_listener\" class=\"Symfony\\Component\\Messenger\\EventListener\\SendFailedMessageToFailureTransportListener\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"monolog.logger\" channel=\"messenger\" />
            <argument /> <!-- Failure transport -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
        </service>

        <service id=\"messenger.listener.dispatch_pcntl_signal_listener\" class=\"Symfony\\Component\\Messenger\\EventListener\\DispatchPcntlSignalListener\">
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"messenger.listener.stop_worker_on_restart_signal_listener\" class=\"Symfony\\Component\\Messenger\\EventListener\\StopWorkerOnRestartSignalListener\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"monolog.logger\" channel=\"messenger\" />
            <argument type=\"service\" id=\"cache.messenger.restart_workers_signal\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
        </service>

        <service id=\"messenger.listener.stop_worker_on_sigterm_signal_listener\" class=\"Symfony\\Component\\Messenger\\EventListener\\StopWorkerOnSigtermSignalListener\">
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <!-- routable message bus -->
        <service id=\"messenger.routable_message_bus\" class=\"Symfony\\Component\\Messenger\\RoutableMessageBus\">
            <argument /> <!-- Message bus locator -->
            <argument type=\"service\" id=\"messenger.default_bus\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/messenger.xml";
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

        <!-- Asynchronous -->
        <service id=\"messenger.senders_locator\" class=\"Symfony\\Component\\Messenger\\Transport\\Sender\\SendersLocator\">
            <argument type=\"collection\" /> <!-- Per message senders map -->
            <argument /> <!-- senders service locator -->
        </service>
        <service id=\"messenger.middleware.send_message\" class=\"Symfony\\Component\\Messenger\\Middleware\\SendMessageMiddleware\">
            <tag name=\"monolog.logger\" channel=\"messenger\" />
            <argument type=\"service\" id=\"messenger.senders_locator\" />
            <argument type=\"service\" id=\"event_dispatcher\" />
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <!-- Message encoding/decoding -->
        <service id=\"messenger.transport.symfony_serializer\" class=\"Symfony\\Component\\Messenger\\Transport\\Serialization\\Serializer\">
            <argument type=\"service\" id=\"serializer\" />
            <argument /> <!-- Format -->
            <argument type=\"collection\" /> <!-- Context -->
        </service>
        <service id=\"Symfony\\Component\\Messenger\\Transport\\Serialization\\SerializerInterface\" alias=\"messenger.default_serializer\" />

        <service id=\"messenger.transport.native_php_serializer\" class=\"Symfony\\Component\\Messenger\\Transport\\Serialization\\PhpSerializer\" />

        <!-- Middleware -->
        <service id=\"messenger.middleware.handle_message\" class=\"Symfony\\Component\\Messenger\\Middleware\\HandleMessageMiddleware\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"messenger\" />
            <argument /> <!-- Bus handler resolver -->
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

        <service id=\"messenger.middleware.add_bus_name_stamp_middleware\" class=\"Symfony\\Component\\Messenger\\Middleware\\AddBusNameStampMiddleware\" abstract=\"true\" />

        <service id=\"messenger.middleware.dispatch_after_current_bus\" class=\"Symfony\\Component\\Messenger\\Middleware\\DispatchAfterCurrentBusMiddleware\" />

        <service id=\"messenger.middleware.validation\" class=\"Symfony\\Component\\Messenger\\Middleware\\ValidationMiddleware\">
            <argument type=\"service\" id=\"validator\" />
        </service>

        <service id=\"messenger.middleware.reject_redelivered_message_middleware\" class=\"Symfony\\Component\\Messenger\\Middleware\\RejectRedeliveredMessageMiddleware\" />

        <service id=\"messenger.middleware.failed_message_processing_middleware\" class=\"Symfony\\Component\\Messenger\\Middleware\\FailedMessageProcessingMiddleware\" />

        <service id=\"messenger.middleware.traceable\" class=\"Symfony\\Component\\Messenger\\Middleware\\TraceableMiddleware\" abstract=\"true\">
            <argument type=\"service\" id=\"debug.stopwatch\" />
        </service>

        <!-- Discovery -->
        <service id=\"messenger.receiver_locator\">
            <tag name=\"container.service_locator\" />
            <argument type=\"collection\" />
        </service>

        <!-- transports -->
        <service id=\"messenger.transport_factory\" class=\"Symfony\\Component\\Messenger\\Transport\\TransportFactory\">
            <argument type=\"tagged_iterator\" tag=\"messenger.transport_factory\" />
        </service>

        <service id=\"messenger.transport.amqp.factory\" class=\"Symfony\\Component\\Messenger\\Transport\\AmqpExt\\AmqpTransportFactory\">
            <tag name=\"messenger.transport_factory\" />
        </service>

        <service id=\"messenger.transport.redis.factory\" class=\"Symfony\\Component\\Messenger\\Transport\\RedisExt\\RedisTransportFactory\">
            <tag name=\"messenger.transport_factory\" />
        </service>

        <service id=\"messenger.transport.sync.factory\" class=\"Symfony\\Component\\Messenger\\Transport\\Sync\\SyncTransportFactory\">
            <tag name=\"messenger.transport_factory\" />
            <argument type=\"service\" id=\"messenger.routable_message_bus\" />
        </service>

        <service id=\"messenger.transport.in_memory.factory\" class=\"Symfony\\Component\\Messenger\\Transport\\InMemoryTransportFactory\">
            <tag name=\"messenger.transport_factory\" />
            <tag name=\"kernel.reset\" method=\"reset\" />
        </service>

        <!-- retry -->
        <service id=\"messenger.retry_strategy_locator\">
            <tag name=\"container.service_locator\" />
            <argument type=\"collection\" />
        </service>

        <service id=\"messenger.retry.abstract_multiplier_retry_strategy\" class=\"Symfony\\Component\\Messenger\\Retry\\MultiplierRetryStrategy\" abstract=\"true\">
            <argument /> <!-- max retries -->
            <argument /> <!-- delay ms -->
            <argument /> <!-- multiplier -->
            <argument /> <!-- max delay ms -->
        </service>

        <!-- worker event listeners -->
        <service id=\"messenger.retry.send_failed_message_for_retry_listener\" class=\"Symfony\\Component\\Messenger\\EventListener\\SendFailedMessageForRetryListener\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"monolog.logger\" channel=\"messenger\" />
            <argument /> <!-- senders service locator -->
            <argument type=\"service\" id=\"messenger.retry_strategy_locator\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
        </service>

        <service id=\"messenger.failure.send_failed_message_to_failure_transport_listener\" class=\"Symfony\\Component\\Messenger\\EventListener\\SendFailedMessageToFailureTransportListener\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"monolog.logger\" channel=\"messenger\" />
            <argument /> <!-- Failure transport -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
        </service>

        <service id=\"messenger.listener.dispatch_pcntl_signal_listener\" class=\"Symfony\\Component\\Messenger\\EventListener\\DispatchPcntlSignalListener\">
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"messenger.listener.stop_worker_on_restart_signal_listener\" class=\"Symfony\\Component\\Messenger\\EventListener\\StopWorkerOnRestartSignalListener\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"monolog.logger\" channel=\"messenger\" />
            <argument type=\"service\" id=\"cache.messenger.restart_workers_signal\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
        </service>

        <service id=\"messenger.listener.stop_worker_on_sigterm_signal_listener\" class=\"Symfony\\Component\\Messenger\\EventListener\\StopWorkerOnSigtermSignalListener\">
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <!-- routable message bus -->
        <service id=\"messenger.routable_message_bus\" class=\"Symfony\\Component\\Messenger\\RoutableMessageBus\">
            <argument /> <!-- Message bus locator -->
            <argument type=\"service\" id=\"messenger.default_bus\" />
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/messenger.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\messenger.xml");
    }
}
