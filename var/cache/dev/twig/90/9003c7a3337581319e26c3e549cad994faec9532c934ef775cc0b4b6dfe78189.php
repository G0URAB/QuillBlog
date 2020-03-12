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

/* @app/src/Kernel.php */
class __TwigTemplate_2006ff7721a7f6ea38fddc54516c0c81fbefb6622b4bade69eb24076d6b3a695 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/src/Kernel.php"));

        // line 1
        echo "<?php

namespace App;

use Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Kernel as BaseKernel;
use Symfony\\Component\\Routing\\RouteCollectionBuilder;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    private const CONFIG_EXTS = '.{php,xml,yaml,yml}';

    public function registerBundles(): iterable
    {
        \$contents = require \$this->getProjectDir().'/config/bundles.php';
        foreach (\$contents as \$class => \$envs) {
            if (\$envs[\$this->environment] ?? \$envs['all'] ?? false) {
                yield new \$class();
            }
        }
    }

    public function getProjectDir(): string
    {
        return \\dirname(__DIR__);
    }

    protected function configureContainer(ContainerBuilder \$container, LoaderInterface \$loader): void
    {
        \$container->addResource(new FileResource(\$this->getProjectDir().'/config/bundles.php'));
        \$container->setParameter('container.dumper.inline_class_loader', \\PHP_VERSION_ID < 70400 || \$this->debug);
        \$container->setParameter('container.dumper.inline_factories', true);
        \$confDir = \$this->getProjectDir().'/config';

        \$loader->load(\$confDir.'/{packages}/*'.self::CONFIG_EXTS, 'glob');
        \$loader->load(\$confDir.'/{packages}/'.\$this->environment.'/*'.self::CONFIG_EXTS, 'glob');
        \$loader->load(\$confDir.'/{services}'.self::CONFIG_EXTS, 'glob');
        \$loader->load(\$confDir.'/{services}_'.\$this->environment.self::CONFIG_EXTS, 'glob');
    }

    protected function configureRoutes(RouteCollectionBuilder \$routes): void
    {
        \$confDir = \$this->getProjectDir().'/config';

        \$routes->import(\$confDir.'/{routes}/'.\$this->environment.'/*'.self::CONFIG_EXTS, '/', 'glob');
        \$routes->import(\$confDir.'/{routes}/*'.self::CONFIG_EXTS, '/', 'glob');
        \$routes->import(\$confDir.'/{routes}'.self::CONFIG_EXTS, '/', 'glob');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/src/Kernel.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App;

use Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Kernel as BaseKernel;
use Symfony\\Component\\Routing\\RouteCollectionBuilder;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    private const CONFIG_EXTS = '.{php,xml,yaml,yml}';

    public function registerBundles(): iterable
    {
        \$contents = require \$this->getProjectDir().'/config/bundles.php';
        foreach (\$contents as \$class => \$envs) {
            if (\$envs[\$this->environment] ?? \$envs['all'] ?? false) {
                yield new \$class();
            }
        }
    }

    public function getProjectDir(): string
    {
        return \\dirname(__DIR__);
    }

    protected function configureContainer(ContainerBuilder \$container, LoaderInterface \$loader): void
    {
        \$container->addResource(new FileResource(\$this->getProjectDir().'/config/bundles.php'));
        \$container->setParameter('container.dumper.inline_class_loader', \\PHP_VERSION_ID < 70400 || \$this->debug);
        \$container->setParameter('container.dumper.inline_factories', true);
        \$confDir = \$this->getProjectDir().'/config';

        \$loader->load(\$confDir.'/{packages}/*'.self::CONFIG_EXTS, 'glob');
        \$loader->load(\$confDir.'/{packages}/'.\$this->environment.'/*'.self::CONFIG_EXTS, 'glob');
        \$loader->load(\$confDir.'/{services}'.self::CONFIG_EXTS, 'glob');
        \$loader->load(\$confDir.'/{services}_'.\$this->environment.self::CONFIG_EXTS, 'glob');
    }

    protected function configureRoutes(RouteCollectionBuilder \$routes): void
    {
        \$confDir = \$this->getProjectDir().'/config';

        \$routes->import(\$confDir.'/{routes}/'.\$this->environment.'/*'.self::CONFIG_EXTS, '/', 'glob');
        \$routes->import(\$confDir.'/{routes}/*'.self::CONFIG_EXTS, '/', 'glob');
        \$routes->import(\$confDir.'/{routes}'.self::CONFIG_EXTS, '/', 'glob');
    }
}
", "@app/src/Kernel.php", "C:\\wamp64\\www\\QuillBlog\\src\\Kernel.php");
    }
}
