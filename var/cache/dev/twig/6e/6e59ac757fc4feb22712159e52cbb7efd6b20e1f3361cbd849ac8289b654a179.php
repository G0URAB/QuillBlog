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

/* @app/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php */
class __TwigTemplate_084e2b8b720bcd6d6f7c632a447e5473403123857cbf6f901b06ee60a13c341a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\CacheWarmer;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;
use Twig\\Environment;
use Twig\\Error\\Error;

/**
 * Generates the Twig cache for all templates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TemplateCacheWarmer implements CacheWarmerInterface, ServiceSubscriberInterface
{
    private \$container;
    private \$twig;
    private \$iterator;

    public function __construct(ContainerInterface \$container, iterable \$iterator)
    {
        // As this cache warmer is optional, dependencies should be lazy-loaded, that's why a container should be injected.
        \$this->container = \$container;
        \$this->iterator = \$iterator;
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(string \$cacheDir)
    {
        if (null === \$this->twig) {
            \$this->twig = \$this->container->get('twig');
        }

        foreach (\$this->iterator as \$template) {
            try {
                \$this->twig->load(\$template);
            } catch (Error \$e) {
                // problem during compilation, give up
                // might be a syntax error or a non-Twig template
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isOptional()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedServices()
    {
        return [
            'twig' => Environment::class,
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php";
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

namespace Symfony\\Bundle\\TwigBundle\\CacheWarmer;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;
use Twig\\Environment;
use Twig\\Error\\Error;

/**
 * Generates the Twig cache for all templates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TemplateCacheWarmer implements CacheWarmerInterface, ServiceSubscriberInterface
{
    private \$container;
    private \$twig;
    private \$iterator;

    public function __construct(ContainerInterface \$container, iterable \$iterator)
    {
        // As this cache warmer is optional, dependencies should be lazy-loaded, that's why a container should be injected.
        \$this->container = \$container;
        \$this->iterator = \$iterator;
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(string \$cacheDir)
    {
        if (null === \$this->twig) {
            \$this->twig = \$this->container->get('twig');
        }

        foreach (\$this->iterator as \$template) {
            try {
                \$this->twig->load(\$template);
            } catch (Error \$e) {
                // problem during compilation, give up
                // might be a syntax error or a non-Twig template
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isOptional()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedServices()
    {
        return [
            'twig' => Environment::class,
        ];
    }
}
", "@app/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bundle\\CacheWarmer\\TemplateCacheWarmer.php");
    }
}
