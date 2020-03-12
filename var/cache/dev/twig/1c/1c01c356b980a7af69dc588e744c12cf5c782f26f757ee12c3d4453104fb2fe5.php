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

/* @app/vendor/ocramius/package-versions/phpcs.xml.dist */
class __TwigTemplate_3124c3dcd2ad8b5787790175aff2831a81679477861594e485654cf7c8daf5cd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/package-versions/phpcs.xml.dist"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<ruleset>
    <arg name=\"basepath\" value=\".\"/>
    <arg name=\"extensions\" value=\"php\"/>
    <arg name=\"parallel\" value=\"80\"/>
    <arg name=\"cache\" value=\".phpcs-cache\"/>
    <arg name=\"colors\"/>

    <arg value=\"nps\"/>

    <file>src</file>
    <file>test</file>

    <rule ref=\"Doctrine\">
        <exclude-pattern>src/PackageVersions/Versions.php</exclude-pattern>
    </rule>

    <rule ref=\"Generic.Strings.UnnecessaryStringConcat.Found\">
        <exclude-pattern>src/PackageVersions/Installer.php</exclude-pattern>
    </rule>
</ruleset>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/package-versions/phpcs.xml.dist";
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

    <arg value=\"nps\"/>

    <file>src</file>
    <file>test</file>

    <rule ref=\"Doctrine\">
        <exclude-pattern>src/PackageVersions/Versions.php</exclude-pattern>
    </rule>

    <rule ref=\"Generic.Strings.UnnecessaryStringConcat.Found\">
        <exclude-pattern>src/PackageVersions/Installer.php</exclude-pattern>
    </rule>
</ruleset>
", "@app/vendor/ocramius/package-versions/phpcs.xml.dist", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\package-versions\\phpcs.xml.dist");
    }
}
