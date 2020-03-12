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

/* @app/vendor/symfony/framework-bundle/CacheWarmer/RouterCacheWarmer.php */
class __TwigTemplate_f4467a584af65ad5d152e0752a358c8f14f1df5d13003f01fcd7aaa092830854 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/CacheWarmer/RouterCacheWarmer.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\CacheWarmer;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;

/**
 * Generates the router matcher and generator classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class RouterCacheWarmer implements CacheWarmerInterface, ServiceSubscriberInterface
{
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        // As this cache warmer is optional, dependencies should be lazy-loaded, that's why a container should be injected.
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(string \$cacheDir)
    {
        \$router = \$this->container->get('router');

        if (\$router instanceof WarmableInterface) {
            \$router->warmUp(\$cacheDir);

            return;
        }

        throw new \\LogicException(sprintf('The router %s cannot be warmed up because it does not implement %s.', \\get_class(\$router), WarmableInterface::class));
    }

    /**
     * Checks whether this warmer is optional or not.
     *
     * @return bool always true
     */
    public function isOptional(): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedServices(): array
    {
        return [
            'router' => RouterInterface::class,
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/CacheWarmer/RouterCacheWarmer.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\CacheWarmer;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;

/**
 * Generates the router matcher and generator classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class RouterCacheWarmer implements CacheWarmerInterface, ServiceSubscriberInterface
{
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        // As this cache warmer is optional, dependencies should be lazy-loaded, that's why a container should be injected.
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(string \$cacheDir)
    {
        \$router = \$this->container->get('router');

        if (\$router instanceof WarmableInterface) {
            \$router->warmUp(\$cacheDir);

            return;
        }

        throw new \\LogicException(sprintf('The router %s cannot be warmed up because it does not implement %s.', \\get_class(\$router), WarmableInterface::class));
    }

    /**
     * Checks whether this warmer is optional or not.
     *
     * @return bool always true
     */
    public function isOptional(): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedServices(): array
    {
        return [
            'router' => RouterInterface::class,
        ];
    }
}
", "@app/vendor/symfony/framework-bundle/CacheWarmer/RouterCacheWarmer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\CacheWarmer\\RouterCacheWarmer.php");
    }
}
