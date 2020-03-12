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

/* @app/vendor/doctrine/doctrine-bundle/Resources/config/messenger.xml */
class __TwigTemplate_be7acf71277c12c540567244e623e8d11775db8cfddbe5114b7bb4362e011f07 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/Resources/config/messenger.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">
    <services>
        <!--
        The following service isn't prefixed by the \"doctrine.orm\" namespace in order for end-users to just use
        the \"doctrine_transaction\" shortcut in message buses middleware config
        -->
        <service id=\"messenger.middleware.doctrine_transaction\" class=\"Symfony\\Bridge\\Doctrine\\Messenger\\DoctrineTransactionMiddleware\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!--
        The following service isn't prefixed by the \"doctrine.orm\" namespace in order for end-users to just use
        the \"doctrine_ping_connection\" shortcut in message buses middleware config
        -->
        <service id=\"messenger.middleware.doctrine_ping_connection\" class=\"Symfony\\Bridge\\Doctrine\\Messenger\\DoctrinePingConnectionMiddleware\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!--
        The following service isn't prefixed by the \"doctrine.orm\" namespace in order for end-users to just use
        the \"doctrine_close_connection\" shortcut in message buses middleware config
        -->
        <service id=\"messenger.middleware.doctrine_close_connection\" class=\"Symfony\\Bridge\\Doctrine\\Messenger\\DoctrineCloseConnectionMiddleware\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!--
        The following service isn't tagged as transport factory because the class may not exist.
        The tag is added conditionally in DoctrineExtension.
        -->
        <service id=\"messenger.transport.doctrine.factory\" class=\"Symfony\\Component\\Messenger\\Transport\\Doctrine\\DoctrineTransportFactory\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <service id=\"doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager\" class=\"Symfony\\Bridge\\Doctrine\\Messenger\\DoctrineClearEntityManagerWorkerSubscriber\" public=\"false\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"doctrine\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/Resources/config/messenger.xml";
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
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">
    <services>
        <!--
        The following service isn't prefixed by the \"doctrine.orm\" namespace in order for end-users to just use
        the \"doctrine_transaction\" shortcut in message buses middleware config
        -->
        <service id=\"messenger.middleware.doctrine_transaction\" class=\"Symfony\\Bridge\\Doctrine\\Messenger\\DoctrineTransactionMiddleware\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!--
        The following service isn't prefixed by the \"doctrine.orm\" namespace in order for end-users to just use
        the \"doctrine_ping_connection\" shortcut in message buses middleware config
        -->
        <service id=\"messenger.middleware.doctrine_ping_connection\" class=\"Symfony\\Bridge\\Doctrine\\Messenger\\DoctrinePingConnectionMiddleware\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!--
        The following service isn't prefixed by the \"doctrine.orm\" namespace in order for end-users to just use
        the \"doctrine_close_connection\" shortcut in message buses middleware config
        -->
        <service id=\"messenger.middleware.doctrine_close_connection\" class=\"Symfony\\Bridge\\Doctrine\\Messenger\\DoctrineCloseConnectionMiddleware\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!--
        The following service isn't tagged as transport factory because the class may not exist.
        The tag is added conditionally in DoctrineExtension.
        -->
        <service id=\"messenger.transport.doctrine.factory\" class=\"Symfony\\Component\\Messenger\\Transport\\Doctrine\\DoctrineTransportFactory\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <service id=\"doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager\" class=\"Symfony\\Bridge\\Doctrine\\Messenger\\DoctrineClearEntityManagerWorkerSubscriber\" public=\"false\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"doctrine\" />
        </service>
    </services>
</container>
", "@app/vendor/doctrine/doctrine-bundle/Resources/config/messenger.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\Resources\\config\\messenger.xml");
    }
}
