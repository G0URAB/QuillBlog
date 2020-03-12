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

/* @app/vendor/symfony/console/CHANGELOG.md */
class __TwigTemplate_40eddbbf6828323ab9156ca507a63742d8780979b7a22ecbbc626e15862c8f6b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

5.0.0
-----

 * removed support for finding hidden commands using an abbreviation, use the full name instead
 * removed `TableStyle::setCrossingChar()` method in favor of `TableStyle::setDefaultCrossingChar()`
 * removed `TableStyle::setHorizontalBorderChar()` method in favor of `TableStyle::setDefaultCrossingChars()`
 * removed `TableStyle::getHorizontalBorderChar()` method in favor of `TableStyle::getBorderChars()`
 * removed `TableStyle::setVerticalBorderChar()` method in favor of `TableStyle::setVerticalBorderChars()`
 * removed `TableStyle::getVerticalBorderChar()` method in favor of `TableStyle::getBorderChars()`
 * removed support for returning `null` from `Command::execute()`, return `0` instead
 * `ProcessHelper::run()` accepts only `array|Symfony\\Component\\Process\\Process` for its `command` argument
 * `Application::setDispatcher` accepts only `Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface`
   for its `dispatcher` argument
 * renamed `Application::renderException()` and `Application::doRenderException()`
   to `renderThrowable()` and `doRenderThrowable()` respectively.

4.4.0
-----

 * deprecated finding hidden commands using an abbreviation, use the full name instead
 * added `Question::setTrimmable` default to true to allow the answer to be trimmed
 * added method `minSecondsBetweenRedraws()` and `maxSecondsBetweenRedraws()` on `ProgressBar`
 * `Application` implements `ResetInterface`
 * marked all dispatched event classes as `@final`
 * added support for displaying table horizontally
 * deprecated returning `null` from `Command::execute()`, return `0` instead
 * Deprecated the `Application::renderException()` and `Application::doRenderException()` methods,
   use `renderThrowable()` and `doRenderThrowable()` instead.
 * added support for the `NO_COLOR` env var (https://no-color.org/)

4.3.0
-----

 * added support for hyperlinks
 * added `ProgressBar::iterate()` method that simplify updating the progress bar when iterating
 * added `Question::setAutocompleterCallback()` to provide a callback function
   that dynamically generates suggestions as the user types

4.2.0
-----

 * allowed passing commands as `[\$process, 'ENV_VAR' => 'value']` to
   `ProcessHelper::run()` to pass environment variables
 * deprecated passing a command as a string to `ProcessHelper::run()`,
   pass it the command as an array of its arguments instead
 * made the `ProcessHelper` class final
 * added `WrappableOutputFormatterInterface::formatAndWrap()` (implemented in `OutputFormatter`)
 * added `capture_stderr_separately` option to `CommandTester::execute()`

4.1.0
-----

 * added option to run suggested command if command is not found and only 1 alternative is available
 * added option to modify console output and print multiple modifiable sections
 * added support for iterable messages in output `write` and `writeln` methods

4.0.0
-----

 * `OutputFormatter` throws an exception when unknown options are used
 * removed `QuestionHelper::setInputStream()/getInputStream()`
 * removed `Application::getTerminalWidth()/getTerminalHeight()` and
  `Application::setTerminalDimensions()/getTerminalDimensions()`
* removed `ConsoleExceptionEvent`
* removed `ConsoleEvents::EXCEPTION`

3.4.0
-----

 * added `SHELL_VERBOSITY` env var to control verbosity
 * added `CommandLoaderInterface`, `FactoryCommandLoader` and PSR-11
   `ContainerCommandLoader` for commands lazy-loading
 * added a case-insensitive command name matching fallback
 * added static `Command::\$defaultName/getDefaultName()`, allowing for
   commands to be registered at compile time in the application command loader.
   Setting the `\$defaultName` property avoids the need for filling the `command`
   attribute on the `console.command` tag when using `AddConsoleCommandPass`.

3.3.0
-----

* added `ExceptionListener`
* added `AddConsoleCommandPass` (originally in FrameworkBundle)
* [BC BREAK] `Input::getOption()` no longer returns the default value for options
  with value optional explicitly passed empty
* added console.error event to catch exceptions thrown by other listeners
* deprecated console.exception event in favor of console.error
* added ability to handle `CommandNotFoundException` through the
 `console.error` event
* deprecated default validation in `SymfonyQuestionHelper::ask`

3.2.0
------

* added `setInputs()` method to CommandTester for ease testing of commands expecting inputs
* added `setStream()` and `getStream()` methods to Input (implement StreamableInputInterface)
* added StreamableInputInterface
* added LockableTrait

3.1.0
-----

 * added truncate method to FormatterHelper
 * added setColumnWidth(s) method to Table

2.8.3
-----

 * remove readline support from the question helper as it caused issues

2.8.0
-----

 * use readline for user input in the question helper when available to allow
   the use of arrow keys

2.6.0
-----

 * added a Process helper
 * added a DebugFormatter helper

2.5.0
-----

 * deprecated the dialog helper (use the question helper instead)
 * deprecated TableHelper in favor of Table
 * deprecated ProgressHelper in favor of ProgressBar
 * added ConsoleLogger
 * added a question helper
 * added a way to set the process name of a command
 * added a way to set a default command instead of `ListCommand`

2.4.0
-----

 * added a way to force terminal dimensions
 * added a convenient method to detect verbosity level
 * [BC BREAK] made descriptors use output instead of returning a string

2.3.0
-----

 * added multiselect support to the select dialog helper
 * added Table Helper for tabular data rendering
 * added support for events in `Application`
 * added a way to normalize EOLs in `ApplicationTester::getDisplay()` and `CommandTester::getDisplay()`
 * added a way to set the progress bar progress via the `setCurrent` method
 * added support for multiple InputOption shortcuts, written as `'-a|-b|-c'`
 * added two additional verbosity levels, VERBOSITY_VERY_VERBOSE and VERBOSITY_DEBUG

2.2.0
-----

 * added support for colorization on Windows via ConEmu
 * add a method to Dialog Helper to ask for a question and hide the response
 * added support for interactive selections in console (DialogHelper::select())
 * added support for autocompletion as you type in Dialog Helper

2.1.0
-----

 * added ConsoleOutputInterface
 * added the possibility to disable a command (Command::isEnabled())
 * added suggestions when a command does not exist
 * added a --raw option to the list command
 * added support for STDERR in the console output class (errors are now sent
   to STDERR)
 * made the defaults (helper set, commands, input definition) in Application
   more easily customizable
 * added support for the shell even if readline is not available
 * added support for process isolation in Symfony shell via
   `--process-isolation` switch
 * added support for `--`, which disables options parsing after that point
   (tokens will be parsed as arguments)
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/CHANGELOG.md";
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

 * removed support for finding hidden commands using an abbreviation, use the full name instead
 * removed `TableStyle::setCrossingChar()` method in favor of `TableStyle::setDefaultCrossingChar()`
 * removed `TableStyle::setHorizontalBorderChar()` method in favor of `TableStyle::setDefaultCrossingChars()`
 * removed `TableStyle::getHorizontalBorderChar()` method in favor of `TableStyle::getBorderChars()`
 * removed `TableStyle::setVerticalBorderChar()` method in favor of `TableStyle::setVerticalBorderChars()`
 * removed `TableStyle::getVerticalBorderChar()` method in favor of `TableStyle::getBorderChars()`
 * removed support for returning `null` from `Command::execute()`, return `0` instead
 * `ProcessHelper::run()` accepts only `array|Symfony\\Component\\Process\\Process` for its `command` argument
 * `Application::setDispatcher` accepts only `Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface`
   for its `dispatcher` argument
 * renamed `Application::renderException()` and `Application::doRenderException()`
   to `renderThrowable()` and `doRenderThrowable()` respectively.

4.4.0
-----

 * deprecated finding hidden commands using an abbreviation, use the full name instead
 * added `Question::setTrimmable` default to true to allow the answer to be trimmed
 * added method `minSecondsBetweenRedraws()` and `maxSecondsBetweenRedraws()` on `ProgressBar`
 * `Application` implements `ResetInterface`
 * marked all dispatched event classes as `@final`
 * added support for displaying table horizontally
 * deprecated returning `null` from `Command::execute()`, return `0` instead
 * Deprecated the `Application::renderException()` and `Application::doRenderException()` methods,
   use `renderThrowable()` and `doRenderThrowable()` instead.
 * added support for the `NO_COLOR` env var (https://no-color.org/)

4.3.0
-----

 * added support for hyperlinks
 * added `ProgressBar::iterate()` method that simplify updating the progress bar when iterating
 * added `Question::setAutocompleterCallback()` to provide a callback function
   that dynamically generates suggestions as the user types

4.2.0
-----

 * allowed passing commands as `[\$process, 'ENV_VAR' => 'value']` to
   `ProcessHelper::run()` to pass environment variables
 * deprecated passing a command as a string to `ProcessHelper::run()`,
   pass it the command as an array of its arguments instead
 * made the `ProcessHelper` class final
 * added `WrappableOutputFormatterInterface::formatAndWrap()` (implemented in `OutputFormatter`)
 * added `capture_stderr_separately` option to `CommandTester::execute()`

4.1.0
-----

 * added option to run suggested command if command is not found and only 1 alternative is available
 * added option to modify console output and print multiple modifiable sections
 * added support for iterable messages in output `write` and `writeln` methods

4.0.0
-----

 * `OutputFormatter` throws an exception when unknown options are used
 * removed `QuestionHelper::setInputStream()/getInputStream()`
 * removed `Application::getTerminalWidth()/getTerminalHeight()` and
  `Application::setTerminalDimensions()/getTerminalDimensions()`
* removed `ConsoleExceptionEvent`
* removed `ConsoleEvents::EXCEPTION`

3.4.0
-----

 * added `SHELL_VERBOSITY` env var to control verbosity
 * added `CommandLoaderInterface`, `FactoryCommandLoader` and PSR-11
   `ContainerCommandLoader` for commands lazy-loading
 * added a case-insensitive command name matching fallback
 * added static `Command::\$defaultName/getDefaultName()`, allowing for
   commands to be registered at compile time in the application command loader.
   Setting the `\$defaultName` property avoids the need for filling the `command`
   attribute on the `console.command` tag when using `AddConsoleCommandPass`.

3.3.0
-----

* added `ExceptionListener`
* added `AddConsoleCommandPass` (originally in FrameworkBundle)
* [BC BREAK] `Input::getOption()` no longer returns the default value for options
  with value optional explicitly passed empty
* added console.error event to catch exceptions thrown by other listeners
* deprecated console.exception event in favor of console.error
* added ability to handle `CommandNotFoundException` through the
 `console.error` event
* deprecated default validation in `SymfonyQuestionHelper::ask`

3.2.0
------

* added `setInputs()` method to CommandTester for ease testing of commands expecting inputs
* added `setStream()` and `getStream()` methods to Input (implement StreamableInputInterface)
* added StreamableInputInterface
* added LockableTrait

3.1.0
-----

 * added truncate method to FormatterHelper
 * added setColumnWidth(s) method to Table

2.8.3
-----

 * remove readline support from the question helper as it caused issues

2.8.0
-----

 * use readline for user input in the question helper when available to allow
   the use of arrow keys

2.6.0
-----

 * added a Process helper
 * added a DebugFormatter helper

2.5.0
-----

 * deprecated the dialog helper (use the question helper instead)
 * deprecated TableHelper in favor of Table
 * deprecated ProgressHelper in favor of ProgressBar
 * added ConsoleLogger
 * added a question helper
 * added a way to set the process name of a command
 * added a way to set a default command instead of `ListCommand`

2.4.0
-----

 * added a way to force terminal dimensions
 * added a convenient method to detect verbosity level
 * [BC BREAK] made descriptors use output instead of returning a string

2.3.0
-----

 * added multiselect support to the select dialog helper
 * added Table Helper for tabular data rendering
 * added support for events in `Application`
 * added a way to normalize EOLs in `ApplicationTester::getDisplay()` and `CommandTester::getDisplay()`
 * added a way to set the progress bar progress via the `setCurrent` method
 * added support for multiple InputOption shortcuts, written as `'-a|-b|-c'`
 * added two additional verbosity levels, VERBOSITY_VERY_VERBOSE and VERBOSITY_DEBUG

2.2.0
-----

 * added support for colorization on Windows via ConEmu
 * add a method to Dialog Helper to ask for a question and hide the response
 * added support for interactive selections in console (DialogHelper::select())
 * added support for autocompletion as you type in Dialog Helper

2.1.0
-----

 * added ConsoleOutputInterface
 * added the possibility to disable a command (Command::isEnabled())
 * added suggestions when a command does not exist
 * added a --raw option to the list command
 * added support for STDERR in the console output class (errors are now sent
   to STDERR)
 * made the defaults (helper set, commands, input definition) in Application
   more easily customizable
 * added support for the shell even if readline is not available
 * added support for process isolation in Symfony shell via
   `--process-isolation` switch
 * added support for `--`, which disables options parsing after that point
   (tokens will be parsed as arguments)
", "@app/vendor/symfony/console/CHANGELOG.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\CHANGELOG.md");
    }
}
