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

/* @app/var/cache/dev/App_KernelDevDebugContainer.preload.php */
class __TwigTemplate_39de06295ae78242d58e227dd285dacd3a19d08bb2465a637fe04706dfced622 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/var/cache/dev/App_KernelDevDebugContainer.preload.php"));

        // line 1
        echo "<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the \"opcache.preload\" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\\Component\\DependencyInjection\\Dumper\\Preloader;

require dirname(__DIR__, 3).'\\\\vendor/autoload.php';
require __DIR__.'/ContainerVScOxgY/App_KernelDevDebugContainer.php';

\$classes = [];
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\DisallowRobotsIndexingListener';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorListener';
\$classes[] = 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBag';
\$classes[] = 'Symfony\\Component\\HttpKernel\\HttpKernel';
\$classes[] = 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver';
\$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver';
\$classes[] = 'Symfony\\Component\\HttpKernel\\Controller\\TraceableArgumentResolver';
\$classes[] = 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver';
\$classes[] = 'Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactory';
\$classes[] = 'Symfony\\Component\\HttpFoundation\\RequestStack';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\SessionListener';
\$classes[] = 'Symfony\\Component\\DependencyInjection\\ServiceLocator';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener';
\$classes[] = 'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter';
\$classes[] = 'Symfony\\Component\\Stopwatch\\Stopwatch';
\$classes[] = 'Symfony\\Component\\Routing\\RequestContext';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener';
\$classes[] = 'Symfony\\Component\\HttpKernel\\Log\\Logger';
\$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router';
\$classes[] = 'Symfony\\Component\\Config\\ResourceCheckerConfigCacheFactory';
\$classes[] = 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher';
\$classes[] = 'Symfony\\Component\\EventDispatcher\\EventDispatcher';

Preloader::preload(\$classes);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/var/cache/dev/App_KernelDevDebugContainer.preload.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the \"opcache.preload\" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\\Component\\DependencyInjection\\Dumper\\Preloader;

require dirname(__DIR__, 3).'\\\\vendor/autoload.php';
require __DIR__.'/ContainerVScOxgY/App_KernelDevDebugContainer.php';

\$classes = [];
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\DisallowRobotsIndexingListener';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorListener';
\$classes[] = 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBag';
\$classes[] = 'Symfony\\Component\\HttpKernel\\HttpKernel';
\$classes[] = 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver';
\$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver';
\$classes[] = 'Symfony\\Component\\HttpKernel\\Controller\\TraceableArgumentResolver';
\$classes[] = 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver';
\$classes[] = 'Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactory';
\$classes[] = 'Symfony\\Component\\HttpFoundation\\RequestStack';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\SessionListener';
\$classes[] = 'Symfony\\Component\\DependencyInjection\\ServiceLocator';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener';
\$classes[] = 'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter';
\$classes[] = 'Symfony\\Component\\Stopwatch\\Stopwatch';
\$classes[] = 'Symfony\\Component\\Routing\\RequestContext';
\$classes[] = 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener';
\$classes[] = 'Symfony\\Component\\HttpKernel\\Log\\Logger';
\$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router';
\$classes[] = 'Symfony\\Component\\Config\\ResourceCheckerConfigCacheFactory';
\$classes[] = 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher';
\$classes[] = 'Symfony\\Component\\EventDispatcher\\EventDispatcher';

Preloader::preload(\$classes);
", "@app/var/cache/dev/App_KernelDevDebugContainer.preload.php", "C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev\\App_KernelDevDebugContainer.preload.php");
    }
}
