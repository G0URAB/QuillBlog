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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XML/configuration.xsd */
class __TwigTemplate_4da93c540e42dae645c6121dcce2ec4adf8bdd118d12c9b0598b5e250a389501 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XML/configuration.xsd"));

        // line 1
        echo "<xs:schema
        attributeFormDefault=\"unqualified\"
        elementFormDefault=\"qualified\"
        targetNamespace=\"http://doctrine-project.org/schemas/migrations/configuration\"
        xmlns:xs=\"http://www.w3.org/2001/XMLSchema\">
    <xs:element name=\"doctrine-migrations\">
        <xs:complexType>
            <xs:all minOccurs=\"0\">
                <xs:element type=\"xs:string\" name=\"name\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:string\" name=\"custom-template\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:string\" name=\"migrations-namespace\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element name=\"table\" minOccurs=\"0\" maxOccurs=\"1\">
                    <xs:complexType>
                        <xs:attribute type=\"xs:string\" name=\"name\"/>
                        <xs:attribute type=\"xs:string\" name=\"column\"/>
                        <xs:attribute type=\"xs:string\" name=\"column_length\"/>
                        <xs:attribute type=\"xs:string\" name=\"executed_at_column\"/>
                    </xs:complexType>
                </xs:element>
                <xs:element name=\"organize-migrations\" minOccurs=\"0\" maxOccurs=\"1\">
                    <xs:simpleType>
                        <xs:restriction base=\"xs:string\">
                            <xs:pattern value=\"((y|Y)(e|E)(a|A)(r|R))|((y|Y)(e|E)(a|A)(r|R)_(a|A)(n|N)(d|D)_(m|M)(o|O)(n|N)(t|T)(h|H))\"/>
                        </xs:restriction>
                    </xs:simpleType>
                </xs:element>
                <xs:element type=\"xs:string\" name=\"migrations-directory\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:boolean\" name=\"all-or-nothing\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:boolean\" name=\"check-database-platform\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element name=\"migrations\" minOccurs=\"0\" maxOccurs=\"1\">
                    <xs:complexType>
                        <xs:sequence minOccurs=\"0\" maxOccurs=\"unbounded\">
                            <xs:element name=\"migration\">
                                <xs:complexType mixed=\"true\">
                                    <xs:attribute name=\"version\" type=\"xs:string\"/>
                                    <xs:attribute name=\"class\" type=\"xs:string\"/>
                                </xs:complexType>
                            </xs:element>
                        </xs:sequence>
                    </xs:complexType>
                </xs:element>
            </xs:all>
        </xs:complexType>
    </xs:element>
</xs:schema>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XML/configuration.xsd";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<xs:schema
        attributeFormDefault=\"unqualified\"
        elementFormDefault=\"qualified\"
        targetNamespace=\"http://doctrine-project.org/schemas/migrations/configuration\"
        xmlns:xs=\"http://www.w3.org/2001/XMLSchema\">
    <xs:element name=\"doctrine-migrations\">
        <xs:complexType>
            <xs:all minOccurs=\"0\">
                <xs:element type=\"xs:string\" name=\"name\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:string\" name=\"custom-template\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:string\" name=\"migrations-namespace\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element name=\"table\" minOccurs=\"0\" maxOccurs=\"1\">
                    <xs:complexType>
                        <xs:attribute type=\"xs:string\" name=\"name\"/>
                        <xs:attribute type=\"xs:string\" name=\"column\"/>
                        <xs:attribute type=\"xs:string\" name=\"column_length\"/>
                        <xs:attribute type=\"xs:string\" name=\"executed_at_column\"/>
                    </xs:complexType>
                </xs:element>
                <xs:element name=\"organize-migrations\" minOccurs=\"0\" maxOccurs=\"1\">
                    <xs:simpleType>
                        <xs:restriction base=\"xs:string\">
                            <xs:pattern value=\"((y|Y)(e|E)(a|A)(r|R))|((y|Y)(e|E)(a|A)(r|R)_(a|A)(n|N)(d|D)_(m|M)(o|O)(n|N)(t|T)(h|H))\"/>
                        </xs:restriction>
                    </xs:simpleType>
                </xs:element>
                <xs:element type=\"xs:string\" name=\"migrations-directory\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:boolean\" name=\"all-or-nothing\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element type=\"xs:boolean\" name=\"check-database-platform\" minOccurs=\"0\" maxOccurs=\"1\"/>
                <xs:element name=\"migrations\" minOccurs=\"0\" maxOccurs=\"1\">
                    <xs:complexType>
                        <xs:sequence minOccurs=\"0\" maxOccurs=\"unbounded\">
                            <xs:element name=\"migration\">
                                <xs:complexType mixed=\"true\">
                                    <xs:attribute name=\"version\" type=\"xs:string\"/>
                                    <xs:attribute name=\"class\" type=\"xs:string\"/>
                                </xs:complexType>
                            </xs:element>
                        </xs:sequence>
                    </xs:complexType>
                </xs:element>
            </xs:all>
        </xs:complexType>
    </xs:element>
</xs:schema>
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/XML/configuration.xsd", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\XML\\configuration.xsd");
    }
}
