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

/* @app/vendor/symfony/maker-bundle/src/Maker/MakeTwigExtension.php */
class __TwigTemplate_587daabf30046f8f46793024a8a4f6c947a7872274e461cebb44e5f87b6fd632 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Maker/MakeTwigExtension.php"));

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

use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Twig\\Extension\\AbstractExtension;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeTwigExtension extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:twig-extension';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new Twig extension class')
            ->addArgument('name', InputArgument::OPTIONAL, 'The name of the Twig extension class (e.g. <fg=yellow>AppExtension</>)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeTwigExtension.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$extensionClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('name'),
            'Twig\\\\',
            'Extension'
        );

        \$generator->generateClass(
            \$extensionClassNameDetails->getFullName(),
            'twig/Extension.tpl.php',
            []
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Open your new extension class and start customizing it.',
            'Find the documentation at <fg=yellow>http://symfony.com/doc/current/templating/twig_extension.html</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            AbstractExtension::class,
            'twig'
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Maker/MakeTwigExtension.php";
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

use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Twig\\Extension\\AbstractExtension;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeTwigExtension extends AbstractMaker
{
    public static function getCommandName(): string
    {
        return 'make:twig-extension';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new Twig extension class')
            ->addArgument('name', InputArgument::OPTIONAL, 'The name of the Twig extension class (e.g. <fg=yellow>AppExtension</>)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeTwigExtension.txt'))
        ;
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$extensionClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('name'),
            'Twig\\\\',
            'Extension'
        );

        \$generator->generateClass(
            \$extensionClassNameDetails->getFullName(),
            'twig/Extension.tpl.php',
            []
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Open your new extension class and start customizing it.',
            'Find the documentation at <fg=yellow>http://symfony.com/doc/current/templating/twig_extension.html</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            AbstractExtension::class,
            'twig'
        );
    }
}
", "@app/vendor/symfony/maker-bundle/src/Maker/MakeTwigExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeTwigExtension.php");
    }
}
