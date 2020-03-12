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

/* @app/vendor/ocramius/package-versions/psalm.xml */
class __TwigTemplate_678a9033a8e321761ed4a48a6202776b36ebad1f6f548ca8f518b62c220dbcc6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/package-versions/psalm.xml"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<psalm
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns=\"https://getpsalm.org/schema/config\"
    xsi:schemaLocation=\"https://getpsalm.org/schema/config vendor/vimeo/psalm/config.xsd\"
    rememberPropertyAssignmentsAfterCall=\"false\"
    totallyTyped=\"false\"
>
    <projectFiles>
        <directory name=\"src\"/>
        <directory name=\"test/PackageVersionsTest\"/>
        <directory name=\"test/static-analysis/happy-path\"/>
        <ignoreFiles>
            <directory name=\"vendor\"/>
        </ignoreFiles>
    </projectFiles>

    <issueHandlers>
        <InternalClass errorLevel=\"suppress\"/>
        <InternalMethod errorLevel=\"suppress\"/>
        <PropertyNotSetInConstructor errorLevel=\"suppress\"/>
    </issueHandlers>
</psalm>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/package-versions/psalm.xml";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\"?>
<psalm
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns=\"https://getpsalm.org/schema/config\"
    xsi:schemaLocation=\"https://getpsalm.org/schema/config vendor/vimeo/psalm/config.xsd\"
    rememberPropertyAssignmentsAfterCall=\"false\"
    totallyTyped=\"false\"
>
    <projectFiles>
        <directory name=\"src\"/>
        <directory name=\"test/PackageVersionsTest\"/>
        <directory name=\"test/static-analysis/happy-path\"/>
        <ignoreFiles>
            <directory name=\"vendor\"/>
        </ignoreFiles>
    </projectFiles>

    <issueHandlers>
        <InternalClass errorLevel=\"suppress\"/>
        <InternalMethod errorLevel=\"suppress\"/>
        <PropertyNotSetInConstructor errorLevel=\"suppress\"/>
    </issueHandlers>
</psalm>
", "@app/vendor/ocramius/package-versions/psalm.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\package-versions\\psalm.xml");
    }
}
