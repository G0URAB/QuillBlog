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

/* @app/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php */
class __TwigTemplate_5fe13cf12f27f18cdedee7cd08eb00be07ff8efef915a9f7715cd14a0ae194fd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php"));

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

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\UrlHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * Twig extension for the Symfony HttpFoundation component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class HttpFoundationExtension extends AbstractExtension
{
    private \$urlHelper;

    public function __construct(UrlHelper \$urlHelper)
    {
        \$this->urlHelper = \$urlHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('absolute_url', [\$this, 'generateAbsoluteUrl']),
            new TwigFunction('relative_path', [\$this, 'generateRelativePath']),
        ];
    }

    /**
     * Returns the absolute URL for the given absolute or relative path.
     *
     * This method returns the path unchanged if no request is available.
     *
     * @see Request::getUriForPath()
     */
    public function generateAbsoluteUrl(string \$path): string
    {
        return \$this->urlHelper->getAbsoluteUrl(\$path);
    }

    /**
     * Returns a relative path based on the current Request.
     *
     * This method returns the path unchanged if no request is available.
     *
     * @see Request::getRelativeUriForPath()
     */
    public function generateRelativePath(string \$path): string
    {
        return \$this->urlHelper->getRelativePath(\$path);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php";
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

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\UrlHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * Twig extension for the Symfony HttpFoundation component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class HttpFoundationExtension extends AbstractExtension
{
    private \$urlHelper;

    public function __construct(UrlHelper \$urlHelper)
    {
        \$this->urlHelper = \$urlHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('absolute_url', [\$this, 'generateAbsoluteUrl']),
            new TwigFunction('relative_path', [\$this, 'generateRelativePath']),
        ];
    }

    /**
     * Returns the absolute URL for the given absolute or relative path.
     *
     * This method returns the path unchanged if no request is available.
     *
     * @see Request::getUriForPath()
     */
    public function generateAbsoluteUrl(string \$path): string
    {
        return \$this->urlHelper->getAbsoluteUrl(\$path);
    }

    /**
     * Returns a relative path based on the current Request.
     *
     * This method returns the path unchanged if no request is available.
     *
     * @see Request::getRelativeUriForPath()
     */
    public function generateRelativePath(string \$path): string
    {
        return \$this->urlHelper->getRelativePath(\$path);
    }
}
", "@app/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Extension\\HttpFoundationExtension.php");
    }
}
