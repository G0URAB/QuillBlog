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

/* @app/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php */
class __TwigTemplate_ce45dd7dd31150dcd09f7686cd67d13154389aabbd613977ffc34ae6fe9ee46b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php"));

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
use Symfony\\Bundle\\MakerBundle\\MakerInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;

/**
 * Convenient abstract class for makers.
 */
abstract class AbstractMaker implements MakerInterface
{
    public function interact(InputInterface \$input, ConsoleStyle \$io, Command \$command)
    {
    }

    protected function writeSuccessMessage(ConsoleStyle \$io)
    {
        \$io->newLine();
        \$io->writeln(' <bg=green;fg=white>          </>');
        \$io->writeln(' <bg=green;fg=white> Success! </>');
        \$io->writeln(' <bg=green;fg=white>          </>');
        \$io->newLine();
    }

    protected function addDependencies(array \$dependencies, string \$message = null): string
    {
        \$dependencyBuilder = new DependencyBuilder();

        foreach (\$dependencies as \$class => \$name) {
            \$dependencyBuilder->addClassDependency(\$class, \$name);
        }

        return \$dependencyBuilder->getMissingPackagesMessage(
            \$this->getCommandName(),
            \$message
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php";
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
use Symfony\\Bundle\\MakerBundle\\MakerInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;

/**
 * Convenient abstract class for makers.
 */
abstract class AbstractMaker implements MakerInterface
{
    public function interact(InputInterface \$input, ConsoleStyle \$io, Command \$command)
    {
    }

    protected function writeSuccessMessage(ConsoleStyle \$io)
    {
        \$io->newLine();
        \$io->writeln(' <bg=green;fg=white>          </>');
        \$io->writeln(' <bg=green;fg=white> Success! </>');
        \$io->writeln(' <bg=green;fg=white>          </>');
        \$io->newLine();
    }

    protected function addDependencies(array \$dependencies, string \$message = null): string
    {
        \$dependencyBuilder = new DependencyBuilder();

        foreach (\$dependencies as \$class => \$name) {
            \$dependencyBuilder->addClassDependency(\$class, \$name);
        }

        return \$dependencyBuilder->getMissingPackagesMessage(
            \$this->getCommandName(),
            \$message
        );
    }
}
", "@app/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php");
    }
}
