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

/* @app/vendor/symfony/maker-bundle/src/DependencyInjection/CompilerPass/MakeCommandRegistrationPass.php */
class __TwigTemplate_a9b1b86979f15d2b3c26df6c8cba36713463708978cc0beb51dfd35c731108f4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/DependencyInjection/CompilerPass/MakeCommandRegistrationPass.php"));

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

namespace Symfony\\Bundle\\MakerBundle\\DependencyInjection\\CompilerPass;

use Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand;
use Symfony\\Bundle\\MakerBundle\\MakerInterface;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;

class MakeCommandRegistrationPass implements CompilerPassInterface
{
    const MAKER_TAG = 'maker.command';

    public function process(ContainerBuilder \$container)
    {
        foreach (\$container->findTaggedServiceIds(self::MAKER_TAG) as \$id => \$tags) {
            \$def = \$container->getDefinition(\$id);
            \$class = \$container->getParameterBag()->resolveValue(\$def->getClass());
            if (!is_subclass_of(\$class, MakerInterface::class)) {
                throw new InvalidArgumentException(sprintf('Service \"%s\" must implement interface \"%s\".', \$id, MakerInterface::class));
            }

            \$commandDefinition = new ChildDefinition('maker.auto_command.abstract');
            \$commandDefinition->setClass(MakerCommand::class);
            \$commandDefinition->replaceArgument(0, new Reference(\$id));
            \$commandDefinition->addTag('console.command', ['command' => \$class::getCommandName()]);

            \$container->setDefinition(sprintf('maker.auto_command.%s', Str::asTwigVariable(\$class::getCommandName())), \$commandDefinition);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/DependencyInjection/CompilerPass/MakeCommandRegistrationPass.php";
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

namespace Symfony\\Bundle\\MakerBundle\\DependencyInjection\\CompilerPass;

use Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand;
use Symfony\\Bundle\\MakerBundle\\MakerInterface;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;

class MakeCommandRegistrationPass implements CompilerPassInterface
{
    const MAKER_TAG = 'maker.command';

    public function process(ContainerBuilder \$container)
    {
        foreach (\$container->findTaggedServiceIds(self::MAKER_TAG) as \$id => \$tags) {
            \$def = \$container->getDefinition(\$id);
            \$class = \$container->getParameterBag()->resolveValue(\$def->getClass());
            if (!is_subclass_of(\$class, MakerInterface::class)) {
                throw new InvalidArgumentException(sprintf('Service \"%s\" must implement interface \"%s\".', \$id, MakerInterface::class));
            }

            \$commandDefinition = new ChildDefinition('maker.auto_command.abstract');
            \$commandDefinition->setClass(MakerCommand::class);
            \$commandDefinition->replaceArgument(0, new Reference(\$id));
            \$commandDefinition->addTag('console.command', ['command' => \$class::getCommandName()]);

            \$container->setDefinition(sprintf('maker.auto_command.%s', Str::asTwigVariable(\$class::getCommandName())), \$commandDefinition);
        }
    }
}
", "@app/vendor/symfony/maker-bundle/src/DependencyInjection/CompilerPass/MakeCommandRegistrationPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\DependencyInjection\\CompilerPass\\MakeCommandRegistrationPass.php");
    }
}
