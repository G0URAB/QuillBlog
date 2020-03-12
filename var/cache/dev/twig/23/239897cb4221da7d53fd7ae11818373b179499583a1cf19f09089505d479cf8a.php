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

/* @app/vendor/symfony/framework-bundle/Controller/TemplateController.php */
class __TwigTemplate_8ed762c6358c1cc779e9dda18ae93878b173c1ba3031224cd1ba4d234b7ac896 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Controller/TemplateController.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Controller;

use Symfony\\Component\\HttpFoundation\\Response;
use Twig\\Environment;

/**
 * TemplateController.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class TemplateController
{
    private \$twig;

    public function __construct(Environment \$twig = null)
    {
        \$this->twig = \$twig;
    }

    /**
     * Renders a template.
     *
     * @param string    \$template  The template name
     * @param int|null  \$maxAge    Max age for client caching
     * @param int|null  \$sharedAge Max age for shared (proxy) caching
     * @param bool|null \$private   Whether or not caching should apply for client caches only
     */
    public function templateAction(string \$template, int \$maxAge = null, int \$sharedAge = null, bool \$private = null): Response
    {
        if (null === \$this->twig) {
            throw new \\LogicException('You can not use the TemplateController if the Twig Bundle is not available.');
        }

        \$response = new Response(\$this->twig->render(\$template));

        if (\$maxAge) {
            \$response->setMaxAge(\$maxAge);
        }

        if (null !== \$sharedAge) {
            \$response->setSharedMaxAge(\$sharedAge);
        }

        if (\$private) {
            \$response->setPrivate();
        } elseif (false === \$private || (null === \$private && (null !== \$maxAge || null !== \$sharedAge))) {
            \$response->setPublic();
        }

        return \$response;
    }

    public function __invoke(string \$template, int \$maxAge = null, int \$sharedAge = null, bool \$private = null): Response
    {
        return \$this->templateAction(\$template, \$maxAge, \$sharedAge, \$private);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Controller/TemplateController.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Controller;

use Symfony\\Component\\HttpFoundation\\Response;
use Twig\\Environment;

/**
 * TemplateController.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class TemplateController
{
    private \$twig;

    public function __construct(Environment \$twig = null)
    {
        \$this->twig = \$twig;
    }

    /**
     * Renders a template.
     *
     * @param string    \$template  The template name
     * @param int|null  \$maxAge    Max age for client caching
     * @param int|null  \$sharedAge Max age for shared (proxy) caching
     * @param bool|null \$private   Whether or not caching should apply for client caches only
     */
    public function templateAction(string \$template, int \$maxAge = null, int \$sharedAge = null, bool \$private = null): Response
    {
        if (null === \$this->twig) {
            throw new \\LogicException('You can not use the TemplateController if the Twig Bundle is not available.');
        }

        \$response = new Response(\$this->twig->render(\$template));

        if (\$maxAge) {
            \$response->setMaxAge(\$maxAge);
        }

        if (null !== \$sharedAge) {
            \$response->setSharedMaxAge(\$sharedAge);
        }

        if (\$private) {
            \$response->setPrivate();
        } elseif (false === \$private || (null === \$private && (null !== \$maxAge || null !== \$sharedAge))) {
            \$response->setPublic();
        }

        return \$response;
    }

    public function __invoke(string \$template, int \$maxAge = null, int \$sharedAge = null, bool \$private = null): Response
    {
        return \$this->templateAction(\$template, \$maxAge, \$sharedAge, \$private);
    }
}
", "@app/vendor/symfony/framework-bundle/Controller/TemplateController.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Controller\\TemplateController.php");
    }
}
