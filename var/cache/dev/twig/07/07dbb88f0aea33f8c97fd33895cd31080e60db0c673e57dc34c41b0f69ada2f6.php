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

/* @app/vendor/symfony/maker-bundle/src/Maker/MakeFunctionalTest.php */
class __TwigTemplate_bfc84924325427567659d49b13263dbabac025659166cfb47c23a33b5929d91f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Maker/MakeFunctionalTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Maker;

use Symfony\\Bundle\\FrameworkBundle\\Test\\WebTestAssertionsTrait;
use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Component\\BrowserKit\\History;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\CssSelector\\CssSelectorConverter;
use Symfony\\Component\\Panther\\PantherTestCaseTrait;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
class MakeFunctionalTest extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:functional-test';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new functional test class')
            ->addArgument('name', InputArgument::OPTIONAL, 'The name of the functional test class (e.g. <fg=yellow>DefaultControllerTest</>)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeFunctionalTest.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$testClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('name'),
            'Tests\\\\',
            'Test'
        );

        \$generator->generateClass(
            \$testClassNameDetails->getFullName(),
            'test/Functional.tpl.php',
            [
                'web_assertions_are_available' => trait_exists(WebTestAssertionsTrait::class),
                'panther_is_available' => trait_exists(PantherTestCaseTrait::class),
            ]
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Open your new test class and start customizing it.',
            'Find the documentation at <fg=yellow>https://symfony.com/doc/current/testing.html#functional-tests</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            History::class,
            'browser-kit',
            true,
            true
        );
        \$dependencies->addClassDependency(
            CssSelectorConverter::class,
            'css-selector',
            true,
            true
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Maker/MakeFunctionalTest.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Maker;

use Symfony\\Bundle\\FrameworkBundle\\Test\\WebTestAssertionsTrait;
use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Component\\BrowserKit\\History;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\CssSelector\\CssSelectorConverter;
use Symfony\\Component\\Panther\\PantherTestCaseTrait;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
class MakeFunctionalTest extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:functional-test';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new functional test class')
            ->addArgument('name', InputArgument::OPTIONAL, 'The name of the functional test class (e.g. <fg=yellow>DefaultControllerTest</>)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeFunctionalTest.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$testClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('name'),
            'Tests\\\\',
            'Test'
        );

        \$generator->generateClass(
            \$testClassNameDetails->getFullName(),
            'test/Functional.tpl.php',
            [
                'web_assertions_are_available' => trait_exists(WebTestAssertionsTrait::class),
                'panther_is_available' => trait_exists(PantherTestCaseTrait::class),
            ]
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Open your new test class and start customizing it.',
            'Find the documentation at <fg=yellow>https://symfony.com/doc/current/testing.html#functional-tests</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            History::class,
            'browser-kit',
            true,
            true
        );
        \$dependencies->addClassDependency(
            CssSelectorConverter::class,
            'css-selector',
            true,
            true
        );
    }
}
", "@app/vendor/symfony/maker-bundle/src/Maker/MakeFunctionalTest.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeFunctionalTest.php");
    }
}
