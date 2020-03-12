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

/* @app/vendor/symfony/twig-bundle/CHANGELOG.md */
class __TwigTemplate_5309b463653cd095399e6c11561bee432776e5109c213ebb3ec65025d981c4c3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bundle/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

5.0.0
-----

 * updated default value for the `strict_variables` option to `%kernel.debug%` parameter
 * removed support to load templates from the legacy directories `src/Resources/views/` and `src/Resources/<BundleName>/views/`
 * removed `TwigEngine` class, use `Twig\\Environment` instead
 * removed `FilesystemLoader` and `NativeFilesystemLoader`, use Twig notation for templates instead
 * removed `twig.exception_controller` configuration option, use `framework.error_controller` option instead
 * removed `ExceptionController`, `PreviewErrorController` and all built-in error templates in favor of the new error renderer mechanism

4.4.0
-----

 * marked the `TemplateIterator` as `internal`
 * added HTML comment to beginning and end of `exception_full.html.twig`
 * deprecated `ExceptionController` and `PreviewErrorController` controllers, use `ErrorController` from the `HttpKernel` component instead
 * deprecated all built-in error templates in favor of the new error renderer mechanism
 * deprecated `twig.exception_controller` configuration option, set it to \"null\" and use `framework.error_controller` configuration instead

4.2.0
-----

 * deprecated support for legacy templates directories `src/Resources/views/` and `src/Resources/<BundleName>/views/`, use `templates/` and `templates/bundles/<BundleName>/` instead.

4.1.0
-----

 * added priority to Twig extensions 
 * deprecated relying on the default value (`false`) of the `twig.strict_variables` configuration option. The `%kernel.debug%` parameter will be the new default in 5.0

4.0.0
-----

 * removed `ContainerAwareRuntimeLoader`

3.4.0
-----

 * added exclusive Twig namespace only for root bundles
 * deprecated `Symfony\\Bundle\\TwigBundle\\Command\\DebugCommand`, use `Symfony\\Bridge\\Twig\\Command\\DebugCommand` instead
 * deprecated relying on the `ContainerAwareInterface` implementation for `Symfony\\Bundle\\TwigBundle\\Command\\LintCommand`
 * added option to configure default path templates (via `default_path`)

3.3.0
-----

 * Deprecated `ContainerAwareRuntimeLoader`

2.7.0
-----

 * made it possible to configure the default formats for both the `date` and the `number_format` filter
 * added support for the new Asset component (from Twig bridge)
 * deprecated the assets extension (use the one from the Twig bridge instead)

2.6.0
-----

 * [BC BREAK] changed exception.json.twig to match same structure as error.json.twig making clients independent of runtime environment.

2.3.0
-----

 * added option to configure a custom template escaping guesser (via `autoescape_service` and `autoescape_service_method`)

2.2.0
-----

 * moved the exception controller to be a service (`twig.controller.exception:showAction` vs `Symfony\\\\Bundle\\\\TwigBundle\\\\Controller\\\\ExceptionController::showAction`)
 * added support for multiple loaders via the \"twig.loader\" tag.
 * added automatic registration of namespaced paths for registered bundles
 * added support for namespaced paths

2.1.0
-----

 * added a new setting (\"paths\") to configure more paths for the Twig filesystem loader
 * added contextual escaping based on the template file name (disabled if you explicitly pass an autoescape option)
 * added a command that extracts translation messages from templates
 * added the real template name when an error occurs in a Twig template
 * added the twig:lint command that will validate a Twig template syntax.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bundle/CHANGELOG.md";
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

 * updated default value for the `strict_variables` option to `%kernel.debug%` parameter
 * removed support to load templates from the legacy directories `src/Resources/views/` and `src/Resources/<BundleName>/views/`
 * removed `TwigEngine` class, use `Twig\\Environment` instead
 * removed `FilesystemLoader` and `NativeFilesystemLoader`, use Twig notation for templates instead
 * removed `twig.exception_controller` configuration option, use `framework.error_controller` option instead
 * removed `ExceptionController`, `PreviewErrorController` and all built-in error templates in favor of the new error renderer mechanism

4.4.0
-----

 * marked the `TemplateIterator` as `internal`
 * added HTML comment to beginning and end of `exception_full.html.twig`
 * deprecated `ExceptionController` and `PreviewErrorController` controllers, use `ErrorController` from the `HttpKernel` component instead
 * deprecated all built-in error templates in favor of the new error renderer mechanism
 * deprecated `twig.exception_controller` configuration option, set it to \"null\" and use `framework.error_controller` configuration instead

4.2.0
-----

 * deprecated support for legacy templates directories `src/Resources/views/` and `src/Resources/<BundleName>/views/`, use `templates/` and `templates/bundles/<BundleName>/` instead.

4.1.0
-----

 * added priority to Twig extensions 
 * deprecated relying on the default value (`false`) of the `twig.strict_variables` configuration option. The `%kernel.debug%` parameter will be the new default in 5.0

4.0.0
-----

 * removed `ContainerAwareRuntimeLoader`

3.4.0
-----

 * added exclusive Twig namespace only for root bundles
 * deprecated `Symfony\\Bundle\\TwigBundle\\Command\\DebugCommand`, use `Symfony\\Bridge\\Twig\\Command\\DebugCommand` instead
 * deprecated relying on the `ContainerAwareInterface` implementation for `Symfony\\Bundle\\TwigBundle\\Command\\LintCommand`
 * added option to configure default path templates (via `default_path`)

3.3.0
-----

 * Deprecated `ContainerAwareRuntimeLoader`

2.7.0
-----

 * made it possible to configure the default formats for both the `date` and the `number_format` filter
 * added support for the new Asset component (from Twig bridge)
 * deprecated the assets extension (use the one from the Twig bridge instead)

2.6.0
-----

 * [BC BREAK] changed exception.json.twig to match same structure as error.json.twig making clients independent of runtime environment.

2.3.0
-----

 * added option to configure a custom template escaping guesser (via `autoescape_service` and `autoescape_service_method`)

2.2.0
-----

 * moved the exception controller to be a service (`twig.controller.exception:showAction` vs `Symfony\\\\Bundle\\\\TwigBundle\\\\Controller\\\\ExceptionController::showAction`)
 * added support for multiple loaders via the \"twig.loader\" tag.
 * added automatic registration of namespaced paths for registered bundles
 * added support for namespaced paths

2.1.0
-----

 * added a new setting (\"paths\") to configure more paths for the Twig filesystem loader
 * added contextual escaping based on the template file name (disabled if you explicitly pass an autoescape option)
 * added a command that extracts translation messages from templates
 * added the real template name when an error occurs in a Twig template
 * added the twig:lint command that will validate a Twig template syntax.
", "@app/vendor/symfony/twig-bundle/CHANGELOG.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bundle\\CHANGELOG.md");
    }
}
