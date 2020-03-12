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

/* @app/vendor/symfony/framework-bundle/Resources/config/session.xml */
class __TwigTemplate_51f32847d4f4d01876acf27c5290bfb2399988f2e95d4125bd0793e34c4fdcb4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/session.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"session.metadata.storage_key\">_sf2_meta</parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"session\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Session\" public=\"true\">
            <argument type=\"service\" id=\"session.storage\" />
            <argument type=\"service\" id=\"session.attribute_bag\" />
            <argument type=\"service\" id=\"session.flash_bag\" />
        </service>

        <service id=\"Symfony\\Component\\HttpFoundation\\Session\\SessionInterface\" alias=\"session\" />
        <service id=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface\" alias=\"session.storage\" />
        <service id=\"SessionHandlerInterface\" alias=\"session.handler\" />

        <service id=\"session.storage.metadata_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag\">
            <argument>%session.metadata.storage_key%</argument>
            <argument>%session.metadata.update_threshold%</argument>
        </service>

        <service id=\"session.storage.native\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage\">
            <argument>%session.storage.options%</argument>
            <argument type=\"service\" id=\"session.handler\" />
            <argument type=\"service\" id=\"session.storage.metadata_bag\" />
        </service>

        <service id=\"session.storage.php_bridge\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage\">
            <argument type=\"service\" id=\"session.handler\" />
            <argument type=\"service\" id=\"session.storage.metadata_bag\" />
        </service>

        <service id=\"session.flash_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag\" />
        <service id=\"Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface\" alias=\"session.flash_bag\" />

        <service id=\"session.attribute_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag\" />

        <service id=\"session.storage.mock_file\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage\">
            <argument>%kernel.cache_dir%/sessions</argument>
            <argument>MOCKSESSID</argument>
            <argument type=\"service\" id=\"session.storage.metadata_bag\" />
        </service>

        <service id=\"session.handler.native_file\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\StrictSessionHandler\">
            <argument type=\"service\">
                <service class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler\">
                    <argument>%session.save_path%</argument>
                </service>
            </argument>
        </service>

        <service id=\"session.abstract_handler\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\AbstractSessionHandler\">
            <factory class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\SessionHandlerFactory\" method=\"createHandler\" />
            <argument />
        </service>

        <service id=\"session_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\SessionListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service_locator\">
                <argument key=\"session\" type=\"service\" id=\"session\" on-invalid=\"ignore\" />
                <argument key=\"initialized_session\" type=\"service\" id=\"session\" on-invalid=\"ignore_uninitialized\" />
            </argument>
        </service>

        <!-- for BC -->
        <service id=\"session.storage.filesystem\" alias=\"session.storage.mock_file\" />
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/session.xml";
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

    <parameters>
        <parameter key=\"session.metadata.storage_key\">_sf2_meta</parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"session\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Session\" public=\"true\">
            <argument type=\"service\" id=\"session.storage\" />
            <argument type=\"service\" id=\"session.attribute_bag\" />
            <argument type=\"service\" id=\"session.flash_bag\" />
        </service>

        <service id=\"Symfony\\Component\\HttpFoundation\\Session\\SessionInterface\" alias=\"session\" />
        <service id=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface\" alias=\"session.storage\" />
        <service id=\"SessionHandlerInterface\" alias=\"session.handler\" />

        <service id=\"session.storage.metadata_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag\">
            <argument>%session.metadata.storage_key%</argument>
            <argument>%session.metadata.update_threshold%</argument>
        </service>

        <service id=\"session.storage.native\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage\">
            <argument>%session.storage.options%</argument>
            <argument type=\"service\" id=\"session.handler\" />
            <argument type=\"service\" id=\"session.storage.metadata_bag\" />
        </service>

        <service id=\"session.storage.php_bridge\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage\">
            <argument type=\"service\" id=\"session.handler\" />
            <argument type=\"service\" id=\"session.storage.metadata_bag\" />
        </service>

        <service id=\"session.flash_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag\" />
        <service id=\"Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface\" alias=\"session.flash_bag\" />

        <service id=\"session.attribute_bag\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag\" />

        <service id=\"session.storage.mock_file\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage\">
            <argument>%kernel.cache_dir%/sessions</argument>
            <argument>MOCKSESSID</argument>
            <argument type=\"service\" id=\"session.storage.metadata_bag\" />
        </service>

        <service id=\"session.handler.native_file\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\StrictSessionHandler\">
            <argument type=\"service\">
                <service class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler\">
                    <argument>%session.save_path%</argument>
                </service>
            </argument>
        </service>

        <service id=\"session.abstract_handler\" class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\AbstractSessionHandler\">
            <factory class=\"Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\SessionHandlerFactory\" method=\"createHandler\" />
            <argument />
        </service>

        <service id=\"session_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\SessionListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service_locator\">
                <argument key=\"session\" type=\"service\" id=\"session\" on-invalid=\"ignore\" />
                <argument key=\"initialized_session\" type=\"service\" id=\"session\" on-invalid=\"ignore_uninitialized\" />
            </argument>
        </service>

        <!-- for BC -->
        <service id=\"session.storage.filesystem\" alias=\"session.storage.mock_file\" />
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/session.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\session.xml");
    }
}
