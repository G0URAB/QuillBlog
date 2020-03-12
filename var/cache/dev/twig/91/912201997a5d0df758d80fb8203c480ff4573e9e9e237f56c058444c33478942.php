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

/* @app/vendor/symfony/maker-bundle/src/MakerInterface.php */
class __TwigTemplate_5331df950684f01c8d567d6070ffb4bba423c657b81d13d48ab9cd905eb60f98 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/MakerInterface.php"));

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

namespace Symfony\\Bundle\\MakerBundle;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;

/**
 * Interface that all maker commands must implement.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
interface MakerInterface
{
    /**
     * Return the command name for your maker (e.g. make:report).
     */
    public static function getCommandName(): string;

    /**
     * Configure the command: set description, input arguments, options, etc.
     *
     * By default, all arguments will be asked interactively. If you want
     * to avoid that, use the \$inputConfig->setArgumentAsNonInteractive() method.
     */
    public function configureCommand(Command \$command, InputConfiguration \$inputConfig);

    /**
     * Configure any library dependencies that your maker requires.
     */
    public function configureDependencies(DependencyBuilder \$dependencies);

    /**
     * If necessary, you can use this method to interactively ask the user for input.
     */
    public function interact(InputInterface \$input, ConsoleStyle \$io, Command \$command);

    /**
     * Called after normal code generation: allows you to do anything.
     */
    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/MakerInterface.php";
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

namespace Symfony\\Bundle\\MakerBundle;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;

/**
 * Interface that all maker commands must implement.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
interface MakerInterface
{
    /**
     * Return the command name for your maker (e.g. make:report).
     */
    public static function getCommandName(): string;

    /**
     * Configure the command: set description, input arguments, options, etc.
     *
     * By default, all arguments will be asked interactively. If you want
     * to avoid that, use the \$inputConfig->setArgumentAsNonInteractive() method.
     */
    public function configureCommand(Command \$command, InputConfiguration \$inputConfig);

    /**
     * Configure any library dependencies that your maker requires.
     */
    public function configureDependencies(DependencyBuilder \$dependencies);

    /**
     * If necessary, you can use this method to interactively ask the user for input.
     */
    public function interact(InputInterface \$input, ConsoleStyle \$io, Command \$command);

    /**
     * Called after normal code generation: allows you to do anything.
     */
    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator);
}
", "@app/vendor/symfony/maker-bundle/src/MakerInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php");
    }
}
