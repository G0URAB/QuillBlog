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

/* @app/vendor/symfony/maker-bundle/phpunit.xml.dist */
class __TwigTemplate_a8e3c73aa7179af13e036456d460535a2d6b5d43527a53419a262c7b655f37a7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/phpunit.xml.dist"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<!-- https://phpunit.de/manual/current/en/appendixes.configuration.html -->
<phpunit xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
         xsi:noNamespaceSchemaLocation=\"http://schema.phpunit.de/6.1/phpunit.xsd\"
         backupGlobals=\"false\"
         colors=\"true\"
         bootstrap=\"vendor/autoload.php\"
         failOnRisky=\"true\"
         failOnWarning=\"true\"
>
    <php>
        <ini name=\"error_reporting\" value=\"-1\" />
        <env name=\"TEST_DATABASE_DSN\" value=\"mysql://root:@127.0.0.1:3306/test_maker\" />
    </php>

    <testsuites>
        <testsuite name=\"Project Test Suite\">
            <directory>tests/</directory>
            <exclude>tests/Maker</exclude>
            <exclude>tests/fixtures</exclude>
            <exclude>tests/tmp</exclude>
        </testsuite>
        <testsuite name=\"Maker Test Suite\">
            <directory>tests/Maker</directory>
        </testsuite>
    </testsuites>

    <filter>
        <whitelist>
            <directory>./src/</directory>
        </whitelist>
    </filter>
</phpunit>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/phpunit.xml.dist";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<!-- https://phpunit.de/manual/current/en/appendixes.configuration.html -->
<phpunit xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
         xsi:noNamespaceSchemaLocation=\"http://schema.phpunit.de/6.1/phpunit.xsd\"
         backupGlobals=\"false\"
         colors=\"true\"
         bootstrap=\"vendor/autoload.php\"
         failOnRisky=\"true\"
         failOnWarning=\"true\"
>
    <php>
        <ini name=\"error_reporting\" value=\"-1\" />
        <env name=\"TEST_DATABASE_DSN\" value=\"mysql://root:@127.0.0.1:3306/test_maker\" />
    </php>

    <testsuites>
        <testsuite name=\"Project Test Suite\">
            <directory>tests/</directory>
            <exclude>tests/Maker</exclude>
            <exclude>tests/fixtures</exclude>
            <exclude>tests/tmp</exclude>
        </testsuite>
        <testsuite name=\"Maker Test Suite\">
            <directory>tests/Maker</directory>
        </testsuite>
    </testsuites>

    <filter>
        <whitelist>
            <directory>./src/</directory>
        </whitelist>
    </filter>
</phpunit>
", "@app/vendor/symfony/maker-bundle/phpunit.xml.dist", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\phpunit.xml.dist");
    }
}
