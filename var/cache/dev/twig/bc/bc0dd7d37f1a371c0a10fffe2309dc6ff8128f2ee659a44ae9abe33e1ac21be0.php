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

/* @app/vendor/symfony/maker-bundle/src/Test/MakerTestKernel.php */
class __TwigTemplate_59e84f90102ff83d74df0f1b6f901257d1877ab8bfad00de6b686dc18254d588 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Test/MakerTestKernel.php"));

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

namespace Symfony\\Bundle\\MakerBundle\\Test;

use Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle;
use Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait;
use Symfony\\Bundle\\MakerBundle\\DependencyInjection\\CompilerPass\\MakeCommandRegistrationPass;
use Symfony\\Bundle\\MakerBundle\\MakerBundle;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Kernel;
use Symfony\\Component\\Routing\\Loader\\Configurator\\RoutingConfigurator;
use Symfony\\Component\\Routing\\RouteCollectionBuilder;

class MakerTestKernel extends Kernel implements CompilerPassInterface
{
    use MicroKernelTrait;

    private \$testRootDir;

    public function __construct(string \$environment, bool \$debug)
    {
        \$this->testRootDir = sys_get_temp_dir().'/'.uniqid('sf_maker_', true);

        parent::__construct(\$environment, \$debug);
    }

    public function registerBundles()
    {
        return [
            new FrameworkBundle(),
            new MakerBundle(),
        ];
    }

    protected function configureRoutes(RouteCollectionBuilder \$routes)
    {
    }

    protected function configureRouting(RoutingConfigurator \$routes)
    {
    }

    protected function configureContainer(ContainerBuilder \$c, LoaderInterface \$loader)
    {
        \$c->setParameter('kernel.secret', 123);
    }

    public function getProjectDir()
    {
        return \$this->getRootDir();
    }

    public function getRootDir()
    {
        return \$this->testRootDir;
    }

    public function process(ContainerBuilder \$container)
    {
        // makes all makers public to help the tests
        foreach (\$container->findTaggedServiceIds(MakeCommandRegistrationPass::MAKER_TAG) as \$id => \$tags) {
            \$defn = \$container->getDefinition(\$id);
            \$defn->setPublic(true);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Test/MakerTestKernel.php";
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

namespace Symfony\\Bundle\\MakerBundle\\Test;

use Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle;
use Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait;
use Symfony\\Bundle\\MakerBundle\\DependencyInjection\\CompilerPass\\MakeCommandRegistrationPass;
use Symfony\\Bundle\\MakerBundle\\MakerBundle;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Kernel;
use Symfony\\Component\\Routing\\Loader\\Configurator\\RoutingConfigurator;
use Symfony\\Component\\Routing\\RouteCollectionBuilder;

class MakerTestKernel extends Kernel implements CompilerPassInterface
{
    use MicroKernelTrait;

    private \$testRootDir;

    public function __construct(string \$environment, bool \$debug)
    {
        \$this->testRootDir = sys_get_temp_dir().'/'.uniqid('sf_maker_', true);

        parent::__construct(\$environment, \$debug);
    }

    public function registerBundles()
    {
        return [
            new FrameworkBundle(),
            new MakerBundle(),
        ];
    }

    protected function configureRoutes(RouteCollectionBuilder \$routes)
    {
    }

    protected function configureRouting(RoutingConfigurator \$routes)
    {
    }

    protected function configureContainer(ContainerBuilder \$c, LoaderInterface \$loader)
    {
        \$c->setParameter('kernel.secret', 123);
    }

    public function getProjectDir()
    {
        return \$this->getRootDir();
    }

    public function getRootDir()
    {
        return \$this->testRootDir;
    }

    public function process(ContainerBuilder \$container)
    {
        // makes all makers public to help the tests
        foreach (\$container->findTaggedServiceIds(MakeCommandRegistrationPass::MAKER_TAG) as \$id => \$tags) {
            \$defn = \$container->getDefinition(\$id);
            \$defn->setPublic(true);
        }
    }
}
", "@app/vendor/symfony/maker-bundle/src/Test/MakerTestKernel.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Test\\MakerTestKernel.php");
    }
}
