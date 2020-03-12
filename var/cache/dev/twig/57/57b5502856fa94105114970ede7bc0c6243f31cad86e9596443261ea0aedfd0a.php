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

/* @app/vendor/symfony/http-kernel/Fragment/AbstractSurrogateFragmentRenderer.php */
class __TwigTemplate_9faa28d639d5d7847fde72148af54d61ab9537b21e8d7bc1a35764d7b35a8831 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/Fragment/AbstractSurrogateFragmentRenderer.php"));

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
use Symfony\\Component\\HttpKernel\\HttpCache\\SurrogateInterface;
use Symfony\\Component\\HttpKernel\\UriSigner;

/**
 * Implements Surrogate rendering strategy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AbstractSurrogateFragmentRenderer extends RoutableFragmentRenderer
{
    private \$surrogate;
    private \$inlineStrategy;
    private \$signer;

    /**
     * The \"fallback\" strategy when surrogate is not available should always be an
     * instance of InlineFragmentRenderer.
     *
     * @param FragmentRendererInterface \$inlineStrategy The inline strategy to use when the surrogate is not supported
     */
    public function __construct(SurrogateInterface \$surrogate = null, FragmentRendererInterface \$inlineStrategy, UriSigner \$signer = null)
    {
        \$this->surrogate = \$surrogate;
        \$this->inlineStrategy = \$inlineStrategy;
        \$this->signer = \$signer;
    }

    /**
     * {@inheritdoc}
     *
     * Note that if the current Request has no surrogate capability, this method
     * falls back to use the inline rendering strategy.
     *
     * Additional available options:
     *
     *  * alt: an alternative URI to render in case of an error
     *  * comment: a comment to add when returning the surrogate tag
     *
     * Note, that not all surrogate strategies support all options. For now
     * 'alt' and 'comment' are only supported by ESI.
     *
     * @see Symfony\\Component\\HttpKernel\\HttpCache\\SurrogateInterface
     */
    public function render(\$uri, Request \$request, array \$options = [])
    {
        if (!\$this->surrogate || !\$this->surrogate->hasSurrogateCapability(\$request)) {
            if (\$uri instanceof ControllerReference && \$this->containsNonScalars(\$uri->attributes)) {
                throw new \\InvalidArgumentException('Passing non-scalar values as part of URI attributes to the ESI and SSI rendering strategies is not supported. Use a different rendering strategy or pass scalar values.');
            }

            return \$this->inlineStrategy->render(\$uri, \$request, \$options);
        }

        if (\$uri instanceof ControllerReference) {
            \$uri = \$this->generateSignedFragmentUri(\$uri, \$request);
        }

        \$alt = isset(\$options['alt']) ? \$options['alt'] : null;
        if (\$alt instanceof ControllerReference) {
            \$alt = \$this->generateSignedFragmentUri(\$alt, \$request);
        }

        \$tag = \$this->surrogate->renderIncludeTag(\$uri, \$alt, isset(\$options['ignore_errors']) ? \$options['ignore_errors'] : false, isset(\$options['comment']) ? \$options['comment'] : '');

        return new Response(\$tag);
    }

    private function generateSignedFragmentUri(ControllerReference \$uri, Request \$request): string
    {
        if (null === \$this->signer) {
            throw new \\LogicException('You must use a URI when using the ESI rendering strategy or set a URL signer.');
        }

        // we need to sign the absolute URI, but want to return the path only.
        \$fragmentUri = \$this->signer->sign(\$this->generateFragmentUri(\$uri, \$request, true));

        return substr(\$fragmentUri, \\strlen(\$request->getSchemeAndHttpHost()));
    }

    private function containsNonScalars(array \$values): bool
    {
        foreach (\$values as \$value) {
            if (\\is_array(\$value)) {
                return \$this->containsNonScalars(\$value);
            } elseif (!is_scalar(\$value) && null !== \$value) {
                return true;
            }
        }

        return false;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/Fragment/AbstractSurrogateFragmentRenderer.php";
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
use Symfony\\Component\\HttpKernel\\HttpCache\\SurrogateInterface;
use Symfony\\Component\\HttpKernel\\UriSigner;

/**
 * Implements Surrogate rendering strategy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AbstractSurrogateFragmentRenderer extends RoutableFragmentRenderer
{
    private \$surrogate;
    private \$inlineStrategy;
    private \$signer;

    /**
     * The \"fallback\" strategy when surrogate is not available should always be an
     * instance of InlineFragmentRenderer.
     *
     * @param FragmentRendererInterface \$inlineStrategy The inline strategy to use when the surrogate is not supported
     */
    public function __construct(SurrogateInterface \$surrogate = null, FragmentRendererInterface \$inlineStrategy, UriSigner \$signer = null)
    {
        \$this->surrogate = \$surrogate;
        \$this->inlineStrategy = \$inlineStrategy;
        \$this->signer = \$signer;
    }

    /**
     * {@inheritdoc}
     *
     * Note that if the current Request has no surrogate capability, this method
     * falls back to use the inline rendering strategy.
     *
     * Additional available options:
     *
     *  * alt: an alternative URI to render in case of an error
     *  * comment: a comment to add when returning the surrogate tag
     *
     * Note, that not all surrogate strategies support all options. For now
     * 'alt' and 'comment' are only supported by ESI.
     *
     * @see Symfony\\Component\\HttpKernel\\HttpCache\\SurrogateInterface
     */
    public function render(\$uri, Request \$request, array \$options = [])
    {
        if (!\$this->surrogate || !\$this->surrogate->hasSurrogateCapability(\$request)) {
            if (\$uri instanceof ControllerReference && \$this->containsNonScalars(\$uri->attributes)) {
                throw new \\InvalidArgumentException('Passing non-scalar values as part of URI attributes to the ESI and SSI rendering strategies is not supported. Use a different rendering strategy or pass scalar values.');
            }

            return \$this->inlineStrategy->render(\$uri, \$request, \$options);
        }

        if (\$uri instanceof ControllerReference) {
            \$uri = \$this->generateSignedFragmentUri(\$uri, \$request);
        }

        \$alt = isset(\$options['alt']) ? \$options['alt'] : null;
        if (\$alt instanceof ControllerReference) {
            \$alt = \$this->generateSignedFragmentUri(\$alt, \$request);
        }

        \$tag = \$this->surrogate->renderIncludeTag(\$uri, \$alt, isset(\$options['ignore_errors']) ? \$options['ignore_errors'] : false, isset(\$options['comment']) ? \$options['comment'] : '');

        return new Response(\$tag);
    }

    private function generateSignedFragmentUri(ControllerReference \$uri, Request \$request): string
    {
        if (null === \$this->signer) {
            throw new \\LogicException('You must use a URI when using the ESI rendering strategy or set a URL signer.');
        }

        // we need to sign the absolute URI, but want to return the path only.
        \$fragmentUri = \$this->signer->sign(\$this->generateFragmentUri(\$uri, \$request, true));

        return substr(\$fragmentUri, \\strlen(\$request->getSchemeAndHttpHost()));
    }

    private function containsNonScalars(array \$values): bool
    {
        foreach (\$values as \$value) {
            if (\\is_array(\$value)) {
                return \$this->containsNonScalars(\$value);
            } elseif (!is_scalar(\$value) && null !== \$value) {
                return true;
            }
        }

        return false;
    }
}
", "@app/vendor/symfony/http-kernel/Fragment/AbstractSurrogateFragmentRenderer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Fragment\\AbstractSurrogateFragmentRenderer.php");
    }
}
