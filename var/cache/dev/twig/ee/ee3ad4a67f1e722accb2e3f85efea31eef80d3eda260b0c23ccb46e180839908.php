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

/* @app/vendor/doctrine/doctrine-bundle/phpcs.xml.dist */
class __TwigTemplate_a620eb227bfa186f9778a4ed4c54fe0f1006f73521eca8914052824d7b15b092 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/phpcs.xml.dist"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<ruleset>
    <arg name=\"basepath\" value=\".\"/>
    <arg name=\"extensions\" value=\"php\"/>
    <arg name=\"parallel\" value=\"80\"/>
    <arg name=\"cache\" value=\".phpcs-cache\"/>
    <arg name=\"colors\"/>

    <!-- Ignore warnings, show progress of the run and show sniff names -->
    <arg value=\"nps\"/>

    <file>.</file>
    <exclude-pattern>vendor/*</exclude-pattern>

    <rule ref=\"Doctrine\">
        <exclude name=\"SlevomatCodingStandard.Classes.ClassConstantVisibility\"/>
        <exclude name=\"SlevomatCodingStandard.Exceptions.ReferenceThrowableOnly\"/>
        <exclude name=\"SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFallbackGlobalName\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.DeclareStrictTypes\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.NullableTypeForNullDefaultValue\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingParameterTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.ControlStructures.RequireNullCoalesceOperator.NullCoalesceOperatorNotUsed\"/>
        <exclude name=\"SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix\"/>
        <exclude name=\"SlevomatCodingStandard.Classes.SuperfluousAbstractClassNaming.SuperfluousPrefix\"/>
    </rule>

    <rule ref=\"PSR1.Classes.ClassDeclaration.MultipleClasses\">
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"Squiz.Classes.ClassFileName.NoMatch\">
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty\">
        <exclude-pattern>Tests/DependencyInjection/Fixtures/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversableParameterTypeHintSpecification\">
        <exclude-pattern>DependencyInjection/*</exclude-pattern>
        <exclude-pattern>Twig/DoctrineExtension.php</exclude-pattern>
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversablePropertyTypeHintSpecification\">
        <exclude-pattern>DependencyInjection/*</exclude-pattern>
        <exclude-pattern>Twig/DoctrineExtension.php</exclude-pattern>
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversableReturnTypeHintSpecification\">
        <exclude-pattern>DependencyInjection/*</exclude-pattern>
        <exclude-pattern>Twig/DoctrineExtension.php</exclude-pattern>
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
</ruleset>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/phpcs.xml.dist";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\"?>
<ruleset>
    <arg name=\"basepath\" value=\".\"/>
    <arg name=\"extensions\" value=\"php\"/>
    <arg name=\"parallel\" value=\"80\"/>
    <arg name=\"cache\" value=\".phpcs-cache\"/>
    <arg name=\"colors\"/>

    <!-- Ignore warnings, show progress of the run and show sniff names -->
    <arg value=\"nps\"/>

    <file>.</file>
    <exclude-pattern>vendor/*</exclude-pattern>

    <rule ref=\"Doctrine\">
        <exclude name=\"SlevomatCodingStandard.Classes.ClassConstantVisibility\"/>
        <exclude name=\"SlevomatCodingStandard.Exceptions.ReferenceThrowableOnly\"/>
        <exclude name=\"SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFallbackGlobalName\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.DeclareStrictTypes\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.NullableTypeForNullDefaultValue\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingParameterTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.ControlStructures.RequireNullCoalesceOperator.NullCoalesceOperatorNotUsed\"/>
        <exclude name=\"SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix\"/>
        <exclude name=\"SlevomatCodingStandard.Classes.SuperfluousAbstractClassNaming.SuperfluousPrefix\"/>
    </rule>

    <rule ref=\"PSR1.Classes.ClassDeclaration.MultipleClasses\">
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"Squiz.Classes.ClassFileName.NoMatch\">
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty\">
        <exclude-pattern>Tests/DependencyInjection/Fixtures/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversableParameterTypeHintSpecification\">
        <exclude-pattern>DependencyInjection/*</exclude-pattern>
        <exclude-pattern>Twig/DoctrineExtension.php</exclude-pattern>
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversablePropertyTypeHintSpecification\">
        <exclude-pattern>DependencyInjection/*</exclude-pattern>
        <exclude-pattern>Twig/DoctrineExtension.php</exclude-pattern>
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversableReturnTypeHintSpecification\">
        <exclude-pattern>DependencyInjection/*</exclude-pattern>
        <exclude-pattern>Twig/DoctrineExtension.php</exclude-pattern>
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
</ruleset>
", "@app/vendor/doctrine/doctrine-bundle/phpcs.xml.dist", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\phpcs.xml.dist");
    }
}
