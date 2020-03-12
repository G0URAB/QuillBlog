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

/* @app/vendor/symfony/var-dumper/CHANGELOG.md */
class __TwigTemplate_68901866e136629bc0d373f75e114ef3014c5ea9078010e941f0ef3f83344bc9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.4.0
-----

 * added `VarDumperTestTrait::setUpVarDumper()` and `VarDumperTestTrait::tearDownVarDumper()`
   to configure casters & flags to use in tests
 * added `ImagineCaster` and infrastructure to dump images
 * added the stamps of a message after it is dispatched in `TraceableMessageBus` and `MessengerDataCollector` collected data
 * added `UuidCaster`
 * made all casters final
 * added support for the `NO_COLOR` env var (https://no-color.org/)

4.3.0
-----

 * added `DsCaster` to support dumping the contents of data structures from the Ds extension

4.2.0
-----

 * support selecting the format to use by setting the environment variable `VAR_DUMPER_FORMAT` to `html` or `cli`

4.1.0
-----

 * added a `ServerDumper` to send serialized Data clones to a server
 * added a `ServerDumpCommand` and `DumpServer` to run a server collecting
   and displaying dumps on a single place with multiple formats support
 * added `CliDescriptor` and `HtmlDescriptor` descriptors for `server:dump` CLI and HTML formats support

4.0.0
-----

 * support for passing `\\ReflectionClass` instances to the `Caster::castObject()`
   method has been dropped, pass class names as strings instead
 * the `Data::getRawData()` method has been removed
 * the `VarDumperTestTrait::assertDumpEquals()` method expects a 3rd `\$filter = 0`
   argument and moves `\$message = ''` argument at 4th position.
 * the `VarDumperTestTrait::assertDumpMatchesFormat()` method expects a 3rd `\$filter = 0`
   argument and moves `\$message = ''` argument at 4th position.

3.4.0
-----

 * added `AbstractCloner::setMinDepth()` function to ensure minimum tree depth
 * deprecated `MongoCaster`

2.7.0
-----

 * deprecated `Cloner\\Data::getLimitedClone()`. Use `withMaxDepth`, `withMaxItemsPerDepth` or `withRefHandles` instead.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG
=========

4.4.0
-----

 * added `VarDumperTestTrait::setUpVarDumper()` and `VarDumperTestTrait::tearDownVarDumper()`
   to configure casters & flags to use in tests
 * added `ImagineCaster` and infrastructure to dump images
 * added the stamps of a message after it is dispatched in `TraceableMessageBus` and `MessengerDataCollector` collected data
 * added `UuidCaster`
 * made all casters final
 * added support for the `NO_COLOR` env var (https://no-color.org/)

4.3.0
-----

 * added `DsCaster` to support dumping the contents of data structures from the Ds extension

4.2.0
-----

 * support selecting the format to use by setting the environment variable `VAR_DUMPER_FORMAT` to `html` or `cli`

4.1.0
-----

 * added a `ServerDumper` to send serialized Data clones to a server
 * added a `ServerDumpCommand` and `DumpServer` to run a server collecting
   and displaying dumps on a single place with multiple formats support
 * added `CliDescriptor` and `HtmlDescriptor` descriptors for `server:dump` CLI and HTML formats support

4.0.0
-----

 * support for passing `\\ReflectionClass` instances to the `Caster::castObject()`
   method has been dropped, pass class names as strings instead
 * the `Data::getRawData()` method has been removed
 * the `VarDumperTestTrait::assertDumpEquals()` method expects a 3rd `\$filter = 0`
   argument and moves `\$message = ''` argument at 4th position.
 * the `VarDumperTestTrait::assertDumpMatchesFormat()` method expects a 3rd `\$filter = 0`
   argument and moves `\$message = ''` argument at 4th position.

3.4.0
-----

 * added `AbstractCloner::setMinDepth()` function to ensure minimum tree depth
 * deprecated `MongoCaster`

2.7.0
-----

 * deprecated `Cloner\\Data::getLimitedClone()`. Use `withMaxDepth`, `withMaxItemsPerDepth` or `withRefHandles` instead.
", "@app/vendor/symfony/var-dumper/CHANGELOG.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\CHANGELOG.md");
    }
}
