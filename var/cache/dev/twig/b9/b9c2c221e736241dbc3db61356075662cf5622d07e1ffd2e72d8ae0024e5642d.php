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

/* @app/vendor/symfony/framework-bundle/Resources/config/form.xml */
class __TwigTemplate_fbd290f1b57f15e9f762ee84995fa7f7d6442f56bb81a748505e409cb344067f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/form.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <!-- ResolvedFormTypeFactory -->
        <service id=\"form.resolved_type_factory\" class=\"Symfony\\Component\\Form\\ResolvedFormTypeFactory\" />
        <service id=\"Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface\" alias=\"form.resolved_type_factory\" />

        <!-- FormRegistry -->
        <service id=\"form.registry\" class=\"Symfony\\Component\\Form\\FormRegistry\">
            <argument type=\"collection\">
                <!--
                We don't need to be able to add more extensions.
                 * more types can be registered with the form.type tag
                 * more type extensions can be registered with the form.type_extension tag
                 * more type_guessers can be registered with the form.type_guesser tag
                -->
                <argument type=\"service\" id=\"form.extension\" />
            </argument>
            <argument type=\"service\" id=\"form.resolved_type_factory\" />
        </service>
        <service id=\"Symfony\\Component\\Form\\FormRegistryInterface\" alias=\"form.registry\" />

        <!-- FormFactory -->
        <service id=\"form.factory\" class=\"Symfony\\Component\\Form\\FormFactory\" public=\"true\">
            <argument type=\"service\" id=\"form.registry\" />
        </service>
        <service id=\"Symfony\\Component\\Form\\FormFactoryInterface\" alias=\"form.factory\" />

        <!-- DependencyInjectionExtension -->
        <service id=\"form.extension\" class=\"Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension\">
            <argument /><!-- All services with tag \"form.type\" are stored in a service locator by FormPass -->
            <argument type=\"collection\" /><!-- All services with tag \"form.type_extension\" are stored here by FormPass -->
            <argument type=\"iterator\" /><!-- All services with tag \"form.type_guesser\" are stored here by FormPass -->
        </service>

        <!-- ValidatorTypeGuesser -->
        <service id=\"form.type_guesser.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser\">
            <tag name=\"form.type_guesser\" />
            <argument type=\"service\" id=\"validator.mapping.class_metadata_factory\" />
        </service>

        <!-- CoreExtension -->
        <service id=\"form.property_accessor\" alias=\"property_accessor\" />

        <service id=\"form.choice_list_factory.default\" class=\"Symfony\\Component\\Form\\ChoiceList\\Factory\\DefaultChoiceListFactory\" />

        <service id=\"form.choice_list_factory.property_access\" class=\"Symfony\\Component\\Form\\ChoiceList\\Factory\\PropertyAccessDecorator\">
            <argument type=\"service\" id=\"form.choice_list_factory.default\"/>
            <argument type=\"service\" id=\"form.property_accessor\"/>
        </service>

        <service id=\"form.choice_list_factory.cached\" class=\"Symfony\\Component\\Form\\ChoiceList\\Factory\\CachingFactoryDecorator\">
            <argument type=\"service\" id=\"form.choice_list_factory.property_access\"/>
            <tag name=\"kernel.reset\" method=\"reset\" />
        </service>

        <service id=\"form.choice_list_factory\" alias=\"form.choice_list_factory.cached\" />

        <service id=\"form.type.form\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\">
            <argument type=\"service\" id=\"form.property_accessor\" />
            <tag name=\"form.type\" />
        </service>
        <service id=\"form.type.choice\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType\">
            <tag name=\"form.type\" />
            <argument type=\"service\" id=\"form.choice_list_factory\"/>
        </service>
        <service id=\"form.type.file\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType\" public=\"true\">
            <tag name=\"form.type\" />
            <argument type=\"service\" id=\"translator\" on-invalid=\"ignore\" />
        </service>

        <service id=\"form.type_extension.form.transformation_failure_handling\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension\">
            <tag name=\"form.type_extension\" extended-type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\" />
            <argument type=\"service\" id=\"translator\" on-invalid=\"ignore\" />
        </service>

        <!-- FormTypeHttpFoundationExtension -->
        <service id=\"form.type_extension.form.http_foundation\" class=\"Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension\">
            <argument type=\"service\" id=\"form.type_extension.form.request_handler\" />
            <tag name=\"form.type_extension\" />
        </service>

        <!-- HttpFoundationRequestHandler -->
        <service id=\"form.type_extension.form.request_handler\" class=\"Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler\">
            <argument type=\"service\" id=\"form.server_params\" />
        </service>

        <service id=\"form.server_params\" class=\"Symfony\\Component\\Form\\Util\\ServerParams\">
            <argument type=\"service\" id=\"request_stack\" />
        </service>

        <!-- FormTypeValidatorExtension -->
        <service id=\"form.type_extension.form.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension\">
            <tag name=\"form.type_extension\" extended-type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\" />
            <argument type=\"service\" id=\"validator\" />
        </service>
        <service id=\"form.type_extension.repeated.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension\">
            <tag name=\"form.type_extension\" />
        </service>
        <service id=\"form.type_extension.submit.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension\">
            <tag name=\"form.type_extension\" extended-type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType\" />
        </service>
        <service id=\"form.type_extension.upload.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension\">
            <tag name=\"form.type_extension\" />
            <argument type=\"service\" id=\"translator\"/>
            <argument type=\"string\">%validator.translation_domain%</argument>
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/form.xml";
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

        <!-- ResolvedFormTypeFactory -->
        <service id=\"form.resolved_type_factory\" class=\"Symfony\\Component\\Form\\ResolvedFormTypeFactory\" />
        <service id=\"Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface\" alias=\"form.resolved_type_factory\" />

        <!-- FormRegistry -->
        <service id=\"form.registry\" class=\"Symfony\\Component\\Form\\FormRegistry\">
            <argument type=\"collection\">
                <!--
                We don't need to be able to add more extensions.
                 * more types can be registered with the form.type tag
                 * more type extensions can be registered with the form.type_extension tag
                 * more type_guessers can be registered with the form.type_guesser tag
                -->
                <argument type=\"service\" id=\"form.extension\" />
            </argument>
            <argument type=\"service\" id=\"form.resolved_type_factory\" />
        </service>
        <service id=\"Symfony\\Component\\Form\\FormRegistryInterface\" alias=\"form.registry\" />

        <!-- FormFactory -->
        <service id=\"form.factory\" class=\"Symfony\\Component\\Form\\FormFactory\" public=\"true\">
            <argument type=\"service\" id=\"form.registry\" />
        </service>
        <service id=\"Symfony\\Component\\Form\\FormFactoryInterface\" alias=\"form.factory\" />

        <!-- DependencyInjectionExtension -->
        <service id=\"form.extension\" class=\"Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension\">
            <argument /><!-- All services with tag \"form.type\" are stored in a service locator by FormPass -->
            <argument type=\"collection\" /><!-- All services with tag \"form.type_extension\" are stored here by FormPass -->
            <argument type=\"iterator\" /><!-- All services with tag \"form.type_guesser\" are stored here by FormPass -->
        </service>

        <!-- ValidatorTypeGuesser -->
        <service id=\"form.type_guesser.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser\">
            <tag name=\"form.type_guesser\" />
            <argument type=\"service\" id=\"validator.mapping.class_metadata_factory\" />
        </service>

        <!-- CoreExtension -->
        <service id=\"form.property_accessor\" alias=\"property_accessor\" />

        <service id=\"form.choice_list_factory.default\" class=\"Symfony\\Component\\Form\\ChoiceList\\Factory\\DefaultChoiceListFactory\" />

        <service id=\"form.choice_list_factory.property_access\" class=\"Symfony\\Component\\Form\\ChoiceList\\Factory\\PropertyAccessDecorator\">
            <argument type=\"service\" id=\"form.choice_list_factory.default\"/>
            <argument type=\"service\" id=\"form.property_accessor\"/>
        </service>

        <service id=\"form.choice_list_factory.cached\" class=\"Symfony\\Component\\Form\\ChoiceList\\Factory\\CachingFactoryDecorator\">
            <argument type=\"service\" id=\"form.choice_list_factory.property_access\"/>
            <tag name=\"kernel.reset\" method=\"reset\" />
        </service>

        <service id=\"form.choice_list_factory\" alias=\"form.choice_list_factory.cached\" />

        <service id=\"form.type.form\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\">
            <argument type=\"service\" id=\"form.property_accessor\" />
            <tag name=\"form.type\" />
        </service>
        <service id=\"form.type.choice\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType\">
            <tag name=\"form.type\" />
            <argument type=\"service\" id=\"form.choice_list_factory\"/>
        </service>
        <service id=\"form.type.file\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType\" public=\"true\">
            <tag name=\"form.type\" />
            <argument type=\"service\" id=\"translator\" on-invalid=\"ignore\" />
        </service>

        <service id=\"form.type_extension.form.transformation_failure_handling\" class=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension\">
            <tag name=\"form.type_extension\" extended-type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\" />
            <argument type=\"service\" id=\"translator\" on-invalid=\"ignore\" />
        </service>

        <!-- FormTypeHttpFoundationExtension -->
        <service id=\"form.type_extension.form.http_foundation\" class=\"Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension\">
            <argument type=\"service\" id=\"form.type_extension.form.request_handler\" />
            <tag name=\"form.type_extension\" />
        </service>

        <!-- HttpFoundationRequestHandler -->
        <service id=\"form.type_extension.form.request_handler\" class=\"Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler\">
            <argument type=\"service\" id=\"form.server_params\" />
        </service>

        <service id=\"form.server_params\" class=\"Symfony\\Component\\Form\\Util\\ServerParams\">
            <argument type=\"service\" id=\"request_stack\" />
        </service>

        <!-- FormTypeValidatorExtension -->
        <service id=\"form.type_extension.form.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension\">
            <tag name=\"form.type_extension\" extended-type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType\" />
            <argument type=\"service\" id=\"validator\" />
        </service>
        <service id=\"form.type_extension.repeated.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension\">
            <tag name=\"form.type_extension\" />
        </service>
        <service id=\"form.type_extension.submit.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension\">
            <tag name=\"form.type_extension\" extended-type=\"Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType\" />
        </service>
        <service id=\"form.type_extension.upload.validator\" class=\"Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension\">
            <tag name=\"form.type_extension\" />
            <argument type=\"service\" id=\"translator\"/>
            <argument type=\"string\">%validator.translation_domain%</argument>
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/form.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\form.xml");
    }
}
