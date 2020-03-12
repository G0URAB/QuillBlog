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

/* @app/vendor/doctrine/doctrine-migrations-bundle/Resources/config/schema/doctrine_migrations-1.0.xsd */
class __TwigTemplate_d95812c35e0eec512a31a266f41358986a3bf302bbda92ec12200b8ac1f9dd52 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-migrations-bundle/Resources/config/schema/doctrine_migrations-1.0.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<xsd:schema xmlns=\"http://symfony.com/schema/dic/doctrine/migrations\"
            xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
            targetNamespace=\"http://symfony.com/schema/dic/doctrine/migrations\"
            elementFormDefault=\"qualified\">

    <xsd:element name=\"config\">
        <xsd:complexType>
            <xsd:attribute name=\"dir_name\" type=\"xsd:string\" />
            <xsd:attribute name=\"namespace\" type=\"xsd:string\" />
            <xsd:attribute name=\"table_name\" type=\"xsd:string\" />
            <xsd:attribute name=\"column_name\" type=\"xsd:string\" />
            <xsd:attribute name=\"column_length\" type=\"xsd:integer\" />
            <xsd:attribute name=\"executed_at_column_name\" type=\"xsd:integer\" />
            <xsd:attribute name=\"all_or_nothing\" type=\"xsd:boolean\" />
            <xsd:attribute name=\"name\" type=\"xsd:string\" />
            <xsd:attribute name=\"custom_template\" type=\"xsd:string\" />
            <xsd:attribute name=\"organize-migrations\">
                <xsd:simpleType>
                    <xsd:restriction base=\"xsd:string\">
                        <xsd:enumeration value=\"BY_YEAR\" />
                        <xsd:enumeration value=\"BY_YEAR_AND_MONTH\" />
                        <xsd:enumeration value=\"false\" />
                    </xsd:restriction>
                </xsd:simpleType>
            </xsd:attribute>
        </xsd:complexType>
    </xsd:element>
</xsd:schema>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-migrations-bundle/Resources/config/schema/doctrine_migrations-1.0.xsd";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<xsd:schema xmlns=\"http://symfony.com/schema/dic/doctrine/migrations\"
            xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
            targetNamespace=\"http://symfony.com/schema/dic/doctrine/migrations\"
            elementFormDefault=\"qualified\">

    <xsd:element name=\"config\">
        <xsd:complexType>
            <xsd:attribute name=\"dir_name\" type=\"xsd:string\" />
            <xsd:attribute name=\"namespace\" type=\"xsd:string\" />
            <xsd:attribute name=\"table_name\" type=\"xsd:string\" />
            <xsd:attribute name=\"column_name\" type=\"xsd:string\" />
            <xsd:attribute name=\"column_length\" type=\"xsd:integer\" />
            <xsd:attribute name=\"executed_at_column_name\" type=\"xsd:integer\" />
            <xsd:attribute name=\"all_or_nothing\" type=\"xsd:boolean\" />
            <xsd:attribute name=\"name\" type=\"xsd:string\" />
            <xsd:attribute name=\"custom_template\" type=\"xsd:string\" />
            <xsd:attribute name=\"organize-migrations\">
                <xsd:simpleType>
                    <xsd:restriction base=\"xsd:string\">
                        <xsd:enumeration value=\"BY_YEAR\" />
                        <xsd:enumeration value=\"BY_YEAR_AND_MONTH\" />
                        <xsd:enumeration value=\"false\" />
                    </xsd:restriction>
                </xsd:simpleType>
            </xsd:attribute>
        </xsd:complexType>
    </xsd:element>
</xsd:schema>
", "@app/vendor/doctrine/doctrine-migrations-bundle/Resources/config/schema/doctrine_migrations-1.0.xsd", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-migrations-bundle\\Resources\\config\\schema\\doctrine_migrations-1.0.xsd");
    }
}
