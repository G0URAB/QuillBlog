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

/* @app/vendor/jdorn/sql-formatter/phpunit.xml.dist */
class __TwigTemplate_4cb2c9b8f39496a313fe066fed2ea1806b31209e753a25b79b88f7a83246e6e5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/jdorn/sql-formatter/phpunit.xml.dist"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<phpunit colors=\"true\">
    <testsuites>
        <testsuite name=\"SqlFormatter\">
            <directory suffix=\"Test.php\">./tests</directory>
        </testsuite>
    </testsuites>

    <filter>
        <whitelist>
            <directory>./</directory>
            <exclude>
                <directory>./tests</directory>
                <directory>./vendor</directory>
                <directory>./examples</directory>
            </exclude>
        </whitelist>
    </filter>
</phpunit>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/jdorn/sql-formatter/phpunit.xml.dist";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<phpunit colors=\"true\">
    <testsuites>
        <testsuite name=\"SqlFormatter\">
            <directory suffix=\"Test.php\">./tests</directory>
        </testsuite>
    </testsuites>

    <filter>
        <whitelist>
            <directory>./</directory>
            <exclude>
                <directory>./tests</directory>
                <directory>./vendor</directory>
                <directory>./examples</directory>
            </exclude>
        </whitelist>
    </filter>
</phpunit>
", "@app/vendor/jdorn/sql-formatter/phpunit.xml.dist", "C:\\wamp64\\www\\QuillBlog\\vendor\\jdorn\\sql-formatter\\phpunit.xml.dist");
    }
}
