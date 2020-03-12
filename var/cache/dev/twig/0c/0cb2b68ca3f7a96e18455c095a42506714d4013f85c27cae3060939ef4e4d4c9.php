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

/* @app/vendor/symfony/asset/Context/RequestStackContext.php */
class __TwigTemplate_7a8e760d4e8bf1e9e77ca22e2a290fe88a5b632a60c6db1bf670a041affe5bde extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/asset/Context/RequestStackContext.php"));

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

namespace Symfony\\Component\\Asset\\Context;

use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * Uses a RequestStack to populate the context.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RequestStackContext implements ContextInterface
{
    private \$requestStack;
    private \$basePath;
    private \$secure;

    public function __construct(RequestStack \$requestStack, string \$basePath = '', bool \$secure = false)
    {
        \$this->requestStack = \$requestStack;
        \$this->basePath = \$basePath;
        \$this->secure = \$secure;
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath()
    {
        if (!\$request = \$this->requestStack->getMasterRequest()) {
            return \$this->basePath;
        }

        return \$request->getBasePath();
    }

    /**
     * {@inheritdoc}
     */
    public function isSecure()
    {
        if (!\$request = \$this->requestStack->getMasterRequest()) {
            return \$this->secure;
        }

        return \$request->isSecure();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/asset/Context/RequestStackContext.php";
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

namespace Symfony\\Component\\Asset\\Context;

use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * Uses a RequestStack to populate the context.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RequestStackContext implements ContextInterface
{
    private \$requestStack;
    private \$basePath;
    private \$secure;

    public function __construct(RequestStack \$requestStack, string \$basePath = '', bool \$secure = false)
    {
        \$this->requestStack = \$requestStack;
        \$this->basePath = \$basePath;
        \$this->secure = \$secure;
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath()
    {
        if (!\$request = \$this->requestStack->getMasterRequest()) {
            return \$this->basePath;
        }

        return \$request->getBasePath();
    }

    /**
     * {@inheritdoc}
     */
    public function isSecure()
    {
        if (!\$request = \$this->requestStack->getMasterRequest()) {
            return \$this->secure;
        }

        return \$request->isSecure();
    }
}
", "@app/vendor/symfony/asset/Context/RequestStackContext.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\asset\\Context\\RequestStackContext.php");
    }
}
