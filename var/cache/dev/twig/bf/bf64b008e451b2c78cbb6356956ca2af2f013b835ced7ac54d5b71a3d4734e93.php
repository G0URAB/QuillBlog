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

/* @app/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php */
class __TwigTemplate_5f33a308595d6d4785bd50bf6f8b9beef3efc5c9f2da5223e8a92791810c17be extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php"));

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
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Generates the catalogues for translations.
 *
 * @author Xavier Leune <xavier.leune@gmail.com>
 */
class TranslationsCacheWarmer implements CacheWarmerInterface, ServiceSubscriberInterface
{
    private \$container;
    private \$translator;

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
        if (null === \$this->translator) {
            \$this->translator = \$this->container->get('translator');
        }

        if (\$this->translator instanceof WarmableInterface) {
            \$this->translator->warmUp(\$cacheDir);
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
            'translator' => TranslatorInterface::class,
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php";
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
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Generates the catalogues for translations.
 *
 * @author Xavier Leune <xavier.leune@gmail.com>
 */
class TranslationsCacheWarmer implements CacheWarmerInterface, ServiceSubscriberInterface
{
    private \$container;
    private \$translator;

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
        if (null === \$this->translator) {
            \$this->translator = \$this->container->get('translator');
        }

        if (\$this->translator instanceof WarmableInterface) {
            \$this->translator->warmUp(\$cacheDir);
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
            'translator' => TranslatorInterface::class,
        ];
    }
}
", "@app/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php");
    }
}
