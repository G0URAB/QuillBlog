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

/* @app/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php */
class __TwigTemplate_5d804441ff7c79e6756d45ebd8dbe4ace4d5c67787c319cbe9f57a8c2290fb5c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\WebLink\\GenericLinkProvider;
use Symfony\\Component\\WebLink\\Link;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * Twig extension for the Symfony WebLink component.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
final class WebLinkExtension extends AbstractExtension
{
    private \$requestStack;

    public function __construct(RequestStack \$requestStack)
    {
        \$this->requestStack = \$requestStack;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('link', [\$this, 'link']),
            new TwigFunction('preload', [\$this, 'preload']),
            new TwigFunction('dns_prefetch', [\$this, 'dnsPrefetch']),
            new TwigFunction('preconnect', [\$this, 'preconnect']),
            new TwigFunction('prefetch', [\$this, 'prefetch']),
            new TwigFunction('prerender', [\$this, 'prerender']),
        ];
    }

    /**
     * Adds a \"Link\" HTTP header.
     *
     * @param string \$rel        The relation type (e.g. \"preload\", \"prefetch\", \"prerender\" or \"dns-prefetch\")
     * @param array  \$attributes The attributes of this link (e.g. \"['as' => true]\", \"['pr' => 0.5]\")
     *
     * @return string The relation URI
     */
    public function link(string \$uri, string \$rel, array \$attributes = []): string
    {
        if (!\$request = \$this->requestStack->getMasterRequest()) {
            return \$uri;
        }

        \$link = new Link(\$rel, \$uri);
        foreach (\$attributes as \$key => \$value) {
            \$link = \$link->withAttribute(\$key, \$value);
        }

        \$linkProvider = \$request->attributes->get('_links', new GenericLinkProvider());
        \$request->attributes->set('_links', \$linkProvider->withLink(\$link));

        return \$uri;
    }

    /**
     * Preloads a resource.
     *
     * @param array \$attributes The attributes of this link (e.g. \"['as' => true]\", \"['crossorigin' => 'use-credentials']\")
     *
     * @return string The path of the asset
     */
    public function preload(string \$uri, array \$attributes = []): string
    {
        return \$this->link(\$uri, 'preload', \$attributes);
    }

    /**
     * Resolves a resource origin as early as possible.
     *
     * @param array \$attributes The attributes of this link (e.g. \"['as' => true]\", \"['pr' => 0.5]\")
     *
     * @return string The path of the asset
     */
    public function dnsPrefetch(string \$uri, array \$attributes = []): string
    {
        return \$this->link(\$uri, 'dns-prefetch', \$attributes);
    }

    /**
     * Initiates a early connection to a resource (DNS resolution, TCP handshake, TLS negotiation).
     *
     * @param array \$attributes The attributes of this link (e.g. \"['as' => true]\", \"['pr' => 0.5]\")
     *
     * @return string The path of the asset
     */
    public function preconnect(string \$uri, array \$attributes = []): string
    {
        return \$this->link(\$uri, 'preconnect', \$attributes);
    }

    /**
     * Indicates to the client that it should prefetch this resource.
     *
     * @param array \$attributes The attributes of this link (e.g. \"['as' => true]\", \"['pr' => 0.5]\")
     *
     * @return string The path of the asset
     */
    public function prefetch(string \$uri, array \$attributes = []): string
    {
        return \$this->link(\$uri, 'prefetch', \$attributes);
    }

    /**
     * Indicates to the client that it should prerender this resource .
     *
     * @param array \$attributes The attributes of this link (e.g. \"['as' => true]\", \"['pr' => 0.5]\")
     *
     * @return string The path of the asset
     */
    public function prerender(string \$uri, array \$attributes = []): string
    {
        return \$this->link(\$uri, 'prerender', \$attributes);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php";
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\WebLink\\GenericLinkProvider;
use Symfony\\Component\\WebLink\\Link;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * Twig extension for the Symfony WebLink component.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
final class WebLinkExtension extends AbstractExtension
{
    private \$requestStack;

    public function __construct(RequestStack \$requestStack)
    {
        \$this->requestStack = \$requestStack;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('link', [\$this, 'link']),
            new TwigFunction('preload', [\$this, 'preload']),
            new TwigFunction('dns_prefetch', [\$this, 'dnsPrefetch']),
            new TwigFunction('preconnect', [\$this, 'preconnect']),
            new TwigFunction('prefetch', [\$this, 'prefetch']),
            new TwigFunction('prerender', [\$this, 'prerender']),
        ];
    }

    /**
     * Adds a \"Link\" HTTP header.
     *
     * @param string \$rel        The relation type (e.g. \"preload\", \"prefetch\", \"prerender\" or \"dns-prefetch\")
     * @param array  \$attributes The attributes of this link (e.g. \"['as' => true]\", \"['pr' => 0.5]\")
     *
     * @return string The relation URI
     */
    public function link(string \$uri, string \$rel, array \$attributes = []): string
    {
        if (!\$request = \$this->requestStack->getMasterRequest()) {
            return \$uri;
        }

        \$link = new Link(\$rel, \$uri);
        foreach (\$attributes as \$key => \$value) {
            \$link = \$link->withAttribute(\$key, \$value);
        }

        \$linkProvider = \$request->attributes->get('_links', new GenericLinkProvider());
        \$request->attributes->set('_links', \$linkProvider->withLink(\$link));

        return \$uri;
    }

    /**
     * Preloads a resource.
     *
     * @param array \$attributes The attributes of this link (e.g. \"['as' => true]\", \"['crossorigin' => 'use-credentials']\")
     *
     * @return string The path of the asset
     */
    public function preload(string \$uri, array \$attributes = []): string
    {
        return \$this->link(\$uri, 'preload', \$attributes);
    }

    /**
     * Resolves a resource origin as early as possible.
     *
     * @param array \$attributes The attributes of this link (e.g. \"['as' => true]\", \"['pr' => 0.5]\")
     *
     * @return string The path of the asset
     */
    public function dnsPrefetch(string \$uri, array \$attributes = []): string
    {
        return \$this->link(\$uri, 'dns-prefetch', \$attributes);
    }

    /**
     * Initiates a early connection to a resource (DNS resolution, TCP handshake, TLS negotiation).
     *
     * @param array \$attributes The attributes of this link (e.g. \"['as' => true]\", \"['pr' => 0.5]\")
     *
     * @return string The path of the asset
     */
    public function preconnect(string \$uri, array \$attributes = []): string
    {
        return \$this->link(\$uri, 'preconnect', \$attributes);
    }

    /**
     * Indicates to the client that it should prefetch this resource.
     *
     * @param array \$attributes The attributes of this link (e.g. \"['as' => true]\", \"['pr' => 0.5]\")
     *
     * @return string The path of the asset
     */
    public function prefetch(string \$uri, array \$attributes = []): string
    {
        return \$this->link(\$uri, 'prefetch', \$attributes);
    }

    /**
     * Indicates to the client that it should prerender this resource .
     *
     * @param array \$attributes The attributes of this link (e.g. \"['as' => true]\", \"['pr' => 0.5]\")
     *
     * @return string The path of the asset
     */
    public function prerender(string \$uri, array \$attributes = []): string
    {
        return \$this->link(\$uri, 'prerender', \$attributes);
    }
}
", "@app/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Extension\\WebLinkExtension.php");
    }
}
