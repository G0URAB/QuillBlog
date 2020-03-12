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

/* @app/vendor/symfony/twig-bridge/CHANGELOG.md */
class __TwigTemplate_c8ac4397863454d0740e06abc6ca761c4dccd27d77e176d8be94913afbe7c0e6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

5.0.0
-----

 * removed `TwigEngine` class, use `\\Twig\\Environment` instead.
 * removed `transChoice` filter and token
 * `HttpFoundationExtension` requires a `UrlHelper` on instantiation
 * removed support for implicit STDIN usage in the `lint:twig` command, use `lint:twig -` (append a dash) instead to make it explicit.

4.4.0
-----

 * added a new `TwigErrorRenderer` for `html` format, integrated with the `ErrorHandler` component
 * marked all classes extending twig as `@final`
 * deprecated to pass `\$rootDir` and `\$fileLinkFormatter` as 5th and 6th argument respectively to the 
   `DebugCommand::__construct()` method, swap the variables position.
 * the `LintCommand` lints all the templates stored in all configured Twig paths if none argument is provided
 * deprecated accepting STDIN implicitly when using the `lint:twig` command, use `lint:twig -` (append a dash) instead to make it explicit.
 * added `--show-deprecations` option to the `lint:twig` command
 * added support for Bootstrap4 switches: add the `switch-custom` class to the label attributes of a `CheckboxType`
 * Marked the `TwigDataCollector` class as `@final`.

4.3.0
-----

 * added the `form_parent()` function that allows to reliably retrieve the parent form in Twig templates
 * added the `workflow_transition_blockers()` function
 * deprecated the `\$requestStack` and `\$requestContext` arguments of the 
   `HttpFoundationExtension`, pass a `Symfony\\Component\\HttpFoundation\\UrlHelper`
   instance as the only argument instead

4.2.0
-----

 * add bundle name suggestion on wrongly overridden templates paths
 * added `name` argument in `debug:twig` command and changed `filter` argument as `--filter` option
 * deprecated the `transchoice` tag and filter, use the `trans` ones instead with a `%count%` parameter

4.1.0
-----

 * add a `workflow_metadata` function

3.4.0
-----

 * added an `only` keyword to `form_theme` tag to disable usage of default themes when rendering a form
 * deprecated `Symfony\\Bridge\\Twig\\Form\\TwigRenderer`
 * deprecated `DebugCommand::set/getTwigEnvironment`. Pass an instance of
   `Twig\\Environment` as first argument  of the constructor instead
 * deprecated `LintCommand::set/getTwigEnvironment`. Pass an instance of
   `Twig\\Environment` as first argument of the constructor instead

3.3.0
-----

 * added a `workflow_has_marked_place` function
 * added a `workflow_marked_places` function

3.2.0
-----

 * added `AppVariable::getToken()`
 * Deprecated the possibility to inject the Form `TwigRenderer` into the `FormExtension`.
 * [BC BREAK] Registering the `FormExtension` without configuring a runtime loader for the `TwigRenderer`
   doesn't work anymore.

   Before:

   ```php
   use Symfony\\Bridge\\Twig\\Extension\\FormExtension;
   use Symfony\\Bridge\\Twig\\Form\\TwigRenderer;
   use Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine;

   // ...
   \$rendererEngine = new TwigRendererEngine(['form_div_layout.html.twig']);
   \$rendererEngine->setEnvironment(\$twig);
   \$twig->addExtension(new FormExtension(new TwigRenderer(\$rendererEngine, \$csrfTokenManager)));
   ```

   After:

   ```php
   // ...
   \$rendererEngine = new TwigRendererEngine(['form_div_layout.html.twig'], \$twig);
   // require Twig 1.30+
   \$twig->addRuntimeLoader(new \\Twig\\RuntimeLoader\\FactoryRuntimeLoader([
       TwigRenderer::class => function () use (\$rendererEngine, \$csrfTokenManager) {
           return new TwigRenderer(\$rendererEngine, \$csrfTokenManager);
       },
   ]));
   \$twig->addExtension(new FormExtension());
   ```
 * Deprecated the `TwigRendererEngineInterface` interface.
 * added WorkflowExtension (provides `workflow_can` and `workflow_transitions`)

2.7.0
-----

 * added LogoutUrlExtension (provides `logout_url` and `logout_path`)
 * added an HttpFoundation extension (provides the `absolute_url` and the `relative_path` functions)
 * added AssetExtension (provides the `asset` and `asset_version` functions)
 * Added possibility to extract translation messages from a file or files besides extracting from a directory

2.5.0
-----

 * moved command `twig:lint` from `TwigBundle`

2.4.0
-----

 * added stopwatch tag to time templates with the WebProfilerBundle

2.3.0
-----

 * added helpers form(), form_start() and form_end()
 * deprecated form_enctype() in favor of form_start()

2.2.0
-----

 * added a `controller` function to help generating controller references
 * added a `render_esi` and a `render_hinclude` function
 * [BC BREAK] restricted the `render` tag to only accept URIs or ControllerReference instances (the signature changed)
 * added a `render` function to render a request
 * The `app` global variable is now injected even when using the twig service directly.
 * Added an optional parameter to the `path` and `url` function which allows to generate
   relative paths (e.g. \"../parent-file\") and scheme-relative URLs (e.g. \"//example.com/dir/file\").

2.1.0
-----

 * added global variables access in a form theme
 * added TwigEngine
 * added TwigExtractor
 * added a csrf_token function
 * added a way to specify a default domain for a Twig template (via the
   'trans_default_domain' tag)
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/CHANGELOG.md";
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

 * removed `TwigEngine` class, use `\\Twig\\Environment` instead.
 * removed `transChoice` filter and token
 * `HttpFoundationExtension` requires a `UrlHelper` on instantiation
 * removed support for implicit STDIN usage in the `lint:twig` command, use `lint:twig -` (append a dash) instead to make it explicit.

4.4.0
-----

 * added a new `TwigErrorRenderer` for `html` format, integrated with the `ErrorHandler` component
 * marked all classes extending twig as `@final`
 * deprecated to pass `\$rootDir` and `\$fileLinkFormatter` as 5th and 6th argument respectively to the 
   `DebugCommand::__construct()` method, swap the variables position.
 * the `LintCommand` lints all the templates stored in all configured Twig paths if none argument is provided
 * deprecated accepting STDIN implicitly when using the `lint:twig` command, use `lint:twig -` (append a dash) instead to make it explicit.
 * added `--show-deprecations` option to the `lint:twig` command
 * added support for Bootstrap4 switches: add the `switch-custom` class to the label attributes of a `CheckboxType`
 * Marked the `TwigDataCollector` class as `@final`.

4.3.0
-----

 * added the `form_parent()` function that allows to reliably retrieve the parent form in Twig templates
 * added the `workflow_transition_blockers()` function
 * deprecated the `\$requestStack` and `\$requestContext` arguments of the 
   `HttpFoundationExtension`, pass a `Symfony\\Component\\HttpFoundation\\UrlHelper`
   instance as the only argument instead

4.2.0
-----

 * add bundle name suggestion on wrongly overridden templates paths
 * added `name` argument in `debug:twig` command and changed `filter` argument as `--filter` option
 * deprecated the `transchoice` tag and filter, use the `trans` ones instead with a `%count%` parameter

4.1.0
-----

 * add a `workflow_metadata` function

3.4.0
-----

 * added an `only` keyword to `form_theme` tag to disable usage of default themes when rendering a form
 * deprecated `Symfony\\Bridge\\Twig\\Form\\TwigRenderer`
 * deprecated `DebugCommand::set/getTwigEnvironment`. Pass an instance of
   `Twig\\Environment` as first argument  of the constructor instead
 * deprecated `LintCommand::set/getTwigEnvironment`. Pass an instance of
   `Twig\\Environment` as first argument of the constructor instead

3.3.0
-----

 * added a `workflow_has_marked_place` function
 * added a `workflow_marked_places` function

3.2.0
-----

 * added `AppVariable::getToken()`
 * Deprecated the possibility to inject the Form `TwigRenderer` into the `FormExtension`.
 * [BC BREAK] Registering the `FormExtension` without configuring a runtime loader for the `TwigRenderer`
   doesn't work anymore.

   Before:

   ```php
   use Symfony\\Bridge\\Twig\\Extension\\FormExtension;
   use Symfony\\Bridge\\Twig\\Form\\TwigRenderer;
   use Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine;

   // ...
   \$rendererEngine = new TwigRendererEngine(['form_div_layout.html.twig']);
   \$rendererEngine->setEnvironment(\$twig);
   \$twig->addExtension(new FormExtension(new TwigRenderer(\$rendererEngine, \$csrfTokenManager)));
   ```

   After:

   ```php
   // ...
   \$rendererEngine = new TwigRendererEngine(['form_div_layout.html.twig'], \$twig);
   // require Twig 1.30+
   \$twig->addRuntimeLoader(new \\Twig\\RuntimeLoader\\FactoryRuntimeLoader([
       TwigRenderer::class => function () use (\$rendererEngine, \$csrfTokenManager) {
           return new TwigRenderer(\$rendererEngine, \$csrfTokenManager);
       },
   ]));
   \$twig->addExtension(new FormExtension());
   ```
 * Deprecated the `TwigRendererEngineInterface` interface.
 * added WorkflowExtension (provides `workflow_can` and `workflow_transitions`)

2.7.0
-----

 * added LogoutUrlExtension (provides `logout_url` and `logout_path`)
 * added an HttpFoundation extension (provides the `absolute_url` and the `relative_path` functions)
 * added AssetExtension (provides the `asset` and `asset_version` functions)
 * Added possibility to extract translation messages from a file or files besides extracting from a directory

2.5.0
-----

 * moved command `twig:lint` from `TwigBundle`

2.4.0
-----

 * added stopwatch tag to time templates with the WebProfilerBundle

2.3.0
-----

 * added helpers form(), form_start() and form_end()
 * deprecated form_enctype() in favor of form_start()

2.2.0
-----

 * added a `controller` function to help generating controller references
 * added a `render_esi` and a `render_hinclude` function
 * [BC BREAK] restricted the `render` tag to only accept URIs or ControllerReference instances (the signature changed)
 * added a `render` function to render a request
 * The `app` global variable is now injected even when using the twig service directly.
 * Added an optional parameter to the `path` and `url` function which allows to generate
   relative paths (e.g. \"../parent-file\") and scheme-relative URLs (e.g. \"//example.com/dir/file\").

2.1.0
-----

 * added global variables access in a form theme
 * added TwigEngine
 * added TwigExtractor
 * added a csrf_token function
 * added a way to specify a default domain for a Twig template (via the
   'trans_default_domain' tag)
", "@app/vendor/symfony/twig-bridge/CHANGELOG.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\CHANGELOG.md");
    }
}
