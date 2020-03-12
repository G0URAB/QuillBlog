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

/* @app/vendor/symfony/http-kernel/DependencyInjection/ResettableServicePass.php */
class __TwigTemplate_07280f6c20083270aabf98b1bd93a14ff5cc1a50d866761208e3e857baa7f641 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/DependencyInjection/ResettableServicePass.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Alexander M. Turek <me@derrabus.de>
 */
class ResettableServicePass implements CompilerPassInterface
{
    private \$tagName;

    public function __construct(string \$tagName = 'kernel.reset')
    {
        \$this->tagName = \$tagName;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->has('services_resetter')) {
            return;
        }

        \$services = \$methods = [];

        foreach (\$container->findTaggedServiceIds(\$this->tagName, true) as \$id => \$tags) {
            \$services[\$id] = new Reference(\$id, ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE);

            foreach (\$tags as \$attributes) {
                if (!isset(\$attributes['method'])) {
                    throw new RuntimeException(sprintf('Tag \"%s\" requires the \"method\" attribute to be set.', \$this->tagName));
                }

                if (!isset(\$methods[\$id])) {
                    \$methods[\$id] = [];
                }

                \$methods[\$id][] = \$attributes['method'];
            }
        }

        if (!\$services) {
            \$container->removeAlias('services_resetter');
            \$container->removeDefinition('services_resetter');

            return;
        }

        \$container->findDefinition('services_resetter')
            ->setArgument(0, new IteratorArgument(\$services))
            ->setArgument(1, \$methods);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/DependencyInjection/ResettableServicePass.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Alexander M. Turek <me@derrabus.de>
 */
class ResettableServicePass implements CompilerPassInterface
{
    private \$tagName;

    public function __construct(string \$tagName = 'kernel.reset')
    {
        \$this->tagName = \$tagName;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->has('services_resetter')) {
            return;
        }

        \$services = \$methods = [];

        foreach (\$container->findTaggedServiceIds(\$this->tagName, true) as \$id => \$tags) {
            \$services[\$id] = new Reference(\$id, ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE);

            foreach (\$tags as \$attributes) {
                if (!isset(\$attributes['method'])) {
                    throw new RuntimeException(sprintf('Tag \"%s\" requires the \"method\" attribute to be set.', \$this->tagName));
                }

                if (!isset(\$methods[\$id])) {
                    \$methods[\$id] = [];
                }

                \$methods[\$id][] = \$attributes['method'];
            }
        }

        if (!\$services) {
            \$container->removeAlias('services_resetter');
            \$container->removeDefinition('services_resetter');

            return;
        }

        \$container->findDefinition('services_resetter')
            ->setArgument(0, new IteratorArgument(\$services))
            ->setArgument(1, \$methods);
    }
}
", "@app/vendor/symfony/http-kernel/DependencyInjection/ResettableServicePass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\DependencyInjection\\ResettableServicePass.php");
    }
}
