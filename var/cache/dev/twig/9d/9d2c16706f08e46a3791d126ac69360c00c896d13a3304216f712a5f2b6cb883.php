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

/* @app/vendor/symfony/finder/CHANGELOG.md */
class __TwigTemplate_7cac6e19b7aefe18e4da7fde56a6af2a8b1c064b7b1b6fd3c64442ebbbd36da1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/finder/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

5.0.0
-----

 * added `\$useNaturalSort` argument to `Finder::sortByName()`

4.3.0
-----

 * added Finder::ignoreVCSIgnored() to ignore files based on rules listed in .gitignore

4.2.0
-----

 * added \$useNaturalSort option to Finder::sortByName() method
 * the `Finder::sortByName()` method will have a new `\$useNaturalSort`
   argument in version 5.0, not defining it is deprecated
 * added `Finder::reverseSorting()` to reverse the sorting

4.0.0
-----

 * removed `ExceptionInterface`
 * removed `Symfony\\Component\\Finder\\Iterator\\FilterIterator`

3.4.0
-----

 * deprecated `Symfony\\Component\\Finder\\Iterator\\FilterIterator`
 * added Finder::hasResults() method to check if any results were found

3.3.0
-----

 * added double-star matching to Glob::toRegex()

3.0.0
-----

 * removed deprecated classes

2.8.0
-----

 * deprecated adapters and related classes

2.5.0
-----
 * added support for GLOB_BRACE in the paths passed to Finder::in()

2.3.0
-----

 * added a way to ignore unreadable directories (via Finder::ignoreUnreadableDirs())
 * unified the way subfolders that are not executable are handled by always throwing an AccessDeniedException exception

2.2.0
-----

 * added Finder::path() and Finder::notPath() methods
 * added finder adapters to improve performance on specific platforms
 * added support for wildcard characters (glob patterns) in the paths passed
   to Finder::in()

2.1.0
-----

 * added Finder::sortByAccessedTime(), Finder::sortByChangedTime(), and
   Finder::sortByModifiedTime()
 * added Countable to Finder
 * added support for an array of directories as an argument to
   Finder::exclude()
 * added searching based on the file content via Finder::contains() and
   Finder::notContains()
 * added support for the != operator in the Comparator
 * [BC BREAK] filter expressions (used for file name and content) are no more
   considered as regexps but glob patterns when they are enclosed in '*' or '?'
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/finder/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG
=========

5.0.0
-----

 * added `\$useNaturalSort` argument to `Finder::sortByName()`

4.3.0
-----

 * added Finder::ignoreVCSIgnored() to ignore files based on rules listed in .gitignore

4.2.0
-----

 * added \$useNaturalSort option to Finder::sortByName() method
 * the `Finder::sortByName()` method will have a new `\$useNaturalSort`
   argument in version 5.0, not defining it is deprecated
 * added `Finder::reverseSorting()` to reverse the sorting

4.0.0
-----

 * removed `ExceptionInterface`
 * removed `Symfony\\Component\\Finder\\Iterator\\FilterIterator`

3.4.0
-----

 * deprecated `Symfony\\Component\\Finder\\Iterator\\FilterIterator`
 * added Finder::hasResults() method to check if any results were found

3.3.0
-----

 * added double-star matching to Glob::toRegex()

3.0.0
-----

 * removed deprecated classes

2.8.0
-----

 * deprecated adapters and related classes

2.5.0
-----
 * added support for GLOB_BRACE in the paths passed to Finder::in()

2.3.0
-----

 * added a way to ignore unreadable directories (via Finder::ignoreUnreadableDirs())
 * unified the way subfolders that are not executable are handled by always throwing an AccessDeniedException exception

2.2.0
-----

 * added Finder::path() and Finder::notPath() methods
 * added finder adapters to improve performance on specific platforms
 * added support for wildcard characters (glob patterns) in the paths passed
   to Finder::in()

2.1.0
-----

 * added Finder::sortByAccessedTime(), Finder::sortByChangedTime(), and
   Finder::sortByModifiedTime()
 * added Countable to Finder
 * added support for an array of directories as an argument to
   Finder::exclude()
 * added searching based on the file content via Finder::contains() and
   Finder::notContains()
 * added support for the != operator in the Comparator
 * [BC BREAK] filter expressions (used for file name and content) are no more
   considered as regexps but glob patterns when they are enclosed in '*' or '?'
", "@app/vendor/symfony/finder/CHANGELOG.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\finder\\CHANGELOG.md");
    }
}
