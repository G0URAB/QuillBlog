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

/* @app/vendor/symfony/http-kernel/Fragment/HIncludeFragmentRenderer.php */
class __TwigTemplate_fd2493d0e7f717a797ddf85821b2aca9d58926a79d185fb0747ad13a40d1cca3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/Fragment/HIncludeFragmentRenderer.php"));

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

namespace Symfony\\Component\\HttpKernel\\Fragment;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\UriSigner;
use Twig\\Environment;

/**
 * Implements the Hinclude rendering strategy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HIncludeFragmentRenderer extends RoutableFragmentRenderer
{
    private \$globalDefaultTemplate;
    private \$signer;
    private \$twig;
    private \$charset;

    /**
     * @param string \$globalDefaultTemplate The global default content (it can be a template name or the content)
     */
    public function __construct(Environment \$twig = null, UriSigner \$signer = null, string \$globalDefaultTemplate = null, string \$charset = 'utf-8')
    {
        \$this->twig = \$twig;
        \$this->globalDefaultTemplate = \$globalDefaultTemplate;
        \$this->signer = \$signer;
        \$this->charset = \$charset;
    }

    /**
     * Checks if a templating engine has been set.
     *
     * @return bool true if the templating engine has been set, false otherwise
     */
    public function hasTemplating()
    {
        return null !== \$this->twig;
    }

    /**
     * {@inheritdoc}
     *
     * Additional available options:
     *
     *  * default:    The default content (it can be a template name or the content)
     *  * id:         An optional hx:include tag id attribute
     *  * attributes: An optional array of hx:include tag attributes
     */
    public function render(\$uri, Request \$request, array \$options = [])
    {
        if (\$uri instanceof ControllerReference) {
            if (null === \$this->signer) {
                throw new \\LogicException('You must use a proper URI when using the Hinclude rendering strategy or set a URL signer.');
            }

            // we need to sign the absolute URI, but want to return the path only.
            \$uri = substr(\$this->signer->sign(\$this->generateFragmentUri(\$uri, \$request, true)), \\strlen(\$request->getSchemeAndHttpHost()));
        }

        // We need to replace ampersands in the URI with the encoded form in order to return valid html/xml content.
        \$uri = str_replace('&', '&amp;', \$uri);

        \$template = isset(\$options['default']) ? \$options['default'] : \$this->globalDefaultTemplate;
        if (null !== \$this->twig && \$template && \$this->twig->getLoader()->exists(\$template)) {
            \$content = \$this->twig->render(\$template);
        } else {
            \$content = \$template;
        }

        \$attributes = isset(\$options['attributes']) && \\is_array(\$options['attributes']) ? \$options['attributes'] : [];
        if (isset(\$options['id']) && \$options['id']) {
            \$attributes['id'] = \$options['id'];
        }
        \$renderedAttributes = '';
        if (\\count(\$attributes) > 0) {
            \$flags = ENT_QUOTES | ENT_SUBSTITUTE;
            foreach (\$attributes as \$attribute => \$value) {
                \$renderedAttributes .= sprintf(
                    ' %s=\"%s\"',
                    htmlspecialchars(\$attribute, \$flags, \$this->charset, false),
                    htmlspecialchars(\$value, \$flags, \$this->charset, false)
                );
            }
        }

        return new Response(sprintf('<hx:include src=\"%s\"%s>%s</hx:include>', \$uri, \$renderedAttributes, \$content));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'hinclude';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/Fragment/HIncludeFragmentRenderer.php";
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

namespace Symfony\\Component\\HttpKernel\\Fragment;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\UriSigner;
use Twig\\Environment;

/**
 * Implements the Hinclude rendering strategy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HIncludeFragmentRenderer extends RoutableFragmentRenderer
{
    private \$globalDefaultTemplate;
    private \$signer;
    private \$twig;
    private \$charset;

    /**
     * @param string \$globalDefaultTemplate The global default content (it can be a template name or the content)
     */
    public function __construct(Environment \$twig = null, UriSigner \$signer = null, string \$globalDefaultTemplate = null, string \$charset = 'utf-8')
    {
        \$this->twig = \$twig;
        \$this->globalDefaultTemplate = \$globalDefaultTemplate;
        \$this->signer = \$signer;
        \$this->charset = \$charset;
    }

    /**
     * Checks if a templating engine has been set.
     *
     * @return bool true if the templating engine has been set, false otherwise
     */
    public function hasTemplating()
    {
        return null !== \$this->twig;
    }

    /**
     * {@inheritdoc}
     *
     * Additional available options:
     *
     *  * default:    The default content (it can be a template name or the content)
     *  * id:         An optional hx:include tag id attribute
     *  * attributes: An optional array of hx:include tag attributes
     */
    public function render(\$uri, Request \$request, array \$options = [])
    {
        if (\$uri instanceof ControllerReference) {
            if (null === \$this->signer) {
                throw new \\LogicException('You must use a proper URI when using the Hinclude rendering strategy or set a URL signer.');
            }

            // we need to sign the absolute URI, but want to return the path only.
            \$uri = substr(\$this->signer->sign(\$this->generateFragmentUri(\$uri, \$request, true)), \\strlen(\$request->getSchemeAndHttpHost()));
        }

        // We need to replace ampersands in the URI with the encoded form in order to return valid html/xml content.
        \$uri = str_replace('&', '&amp;', \$uri);

        \$template = isset(\$options['default']) ? \$options['default'] : \$this->globalDefaultTemplate;
        if (null !== \$this->twig && \$template && \$this->twig->getLoader()->exists(\$template)) {
            \$content = \$this->twig->render(\$template);
        } else {
            \$content = \$template;
        }

        \$attributes = isset(\$options['attributes']) && \\is_array(\$options['attributes']) ? \$options['attributes'] : [];
        if (isset(\$options['id']) && \$options['id']) {
            \$attributes['id'] = \$options['id'];
        }
        \$renderedAttributes = '';
        if (\\count(\$attributes) > 0) {
            \$flags = ENT_QUOTES | ENT_SUBSTITUTE;
            foreach (\$attributes as \$attribute => \$value) {
                \$renderedAttributes .= sprintf(
                    ' %s=\"%s\"',
                    htmlspecialchars(\$attribute, \$flags, \$this->charset, false),
                    htmlspecialchars(\$value, \$flags, \$this->charset, false)
                );
            }
        }

        return new Response(sprintf('<hx:include src=\"%s\"%s>%s</hx:include>', \$uri, \$renderedAttributes, \$content));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'hinclude';
    }
}
", "@app/vendor/symfony/http-kernel/Fragment/HIncludeFragmentRenderer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Fragment\\HIncludeFragmentRenderer.php");
    }
}
