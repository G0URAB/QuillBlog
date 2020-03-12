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

/* @app/vendor/symfony/maker-bundle/src/Maker/MakeFixtures.php */
class __TwigTemplate_7787f05bf49c94cf7383e9260e72c7d52031f0e9b948cf0589ef87776fe8da21 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Maker/MakeFixtures.php"));

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

use Doctrine\\Bundle\\FixturesBundle\\Fixture;
use Doctrine\\ORM\\Mapping\\Column;
use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeFixtures extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:fixtures';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new class to load Doctrine fixtures')
            ->addArgument('fixtures-class', InputArgument::OPTIONAL, 'The class name of the fixtures to create (e.g. <fg=yellow>AppFixtures</>)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeFixture.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$fixturesClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('fixtures-class'),
            'DataFixtures\\\\'
        );

        \$generator->generateClass(
            \$fixturesClassNameDetails->getFullName(),
            'doctrine/Fixtures.tpl.php',
            []
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Open your new fixtures class and start customizing it.',
            sprintf('Load your fixtures by running: <comment>php %s doctrine:fixtures:load</comment>', \$_SERVER['PHP_SELF']),
            'Docs: <fg=yellow>https://symfony.com/doc/master/bundles/DoctrineFixturesBundle/index.html</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Column::class,
            'doctrine'
        );
        \$dependencies->addClassDependency(
            Fixture::class,
            'orm-fixtures',
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
        return "@app/vendor/symfony/maker-bundle/src/Maker/MakeFixtures.php";
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

use Doctrine\\Bundle\\FixturesBundle\\Fixture;
use Doctrine\\ORM\\Mapping\\Column;
use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeFixtures extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:fixtures';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new class to load Doctrine fixtures')
            ->addArgument('fixtures-class', InputArgument::OPTIONAL, 'The class name of the fixtures to create (e.g. <fg=yellow>AppFixtures</>)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeFixture.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$fixturesClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('fixtures-class'),
            'DataFixtures\\\\'
        );

        \$generator->generateClass(
            \$fixturesClassNameDetails->getFullName(),
            'doctrine/Fixtures.tpl.php',
            []
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Open your new fixtures class and start customizing it.',
            sprintf('Load your fixtures by running: <comment>php %s doctrine:fixtures:load</comment>', \$_SERVER['PHP_SELF']),
            'Docs: <fg=yellow>https://symfony.com/doc/master/bundles/DoctrineFixturesBundle/index.html</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Column::class,
            'doctrine'
        );
        \$dependencies->addClassDependency(
            Fixture::class,
            'orm-fixtures',
            true,
            true
        );
    }
}
", "@app/vendor/symfony/maker-bundle/src/Maker/MakeFixtures.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeFixtures.php");
    }
}
