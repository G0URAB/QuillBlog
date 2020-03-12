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

/* @app/vendor/symfony/http-foundation/RequestStack.php */
class __TwigTemplate_82504569a27a8f00ef529c20e9c711f656593ed2efc3363cea1ca77a5e0c0cda extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/RequestStack.php"));

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

namespace Symfony\\Component\\HttpFoundation;

/**
 * Request stack that controls the lifecycle of requests.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class RequestStack
{
    /**
     * @var Request[]
     */
    private \$requests = [];

    /**
     * Pushes a Request on the stack.
     *
     * This method should generally not be called directly as the stack
     * management should be taken care of by the application itself.
     */
    public function push(Request \$request)
    {
        \$this->requests[] = \$request;
    }

    /**
     * Pops the current request from the stack.
     *
     * This operation lets the current request go out of scope.
     *
     * This method should generally not be called directly as the stack
     * management should be taken care of by the application itself.
     *
     * @return Request|null
     */
    public function pop()
    {
        if (!\$this->requests) {
            return null;
        }

        return array_pop(\$this->requests);
    }

    /**
     * @return Request|null
     */
    public function getCurrentRequest()
    {
        return end(\$this->requests) ?: null;
    }

    /**
     * Gets the master Request.
     *
     * Be warned that making your code aware of the master request
     * might make it un-compatible with other features of your framework
     * like ESI support.
     *
     * @return Request|null
     */
    public function getMasterRequest()
    {
        if (!\$this->requests) {
            return null;
        }

        return \$this->requests[0];
    }

    /**
     * Returns the parent request of the current.
     *
     * Be warned that making your code aware of the parent request
     * might make it un-compatible with other features of your framework
     * like ESI support.
     *
     * If current Request is the master request, it returns null.
     *
     * @return Request|null
     */
    public function getParentRequest()
    {
        \$pos = \\count(\$this->requests) - 2;

        if (!isset(\$this->requests[\$pos])) {
            return null;
        }

        return \$this->requests[\$pos];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/RequestStack.php";
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

namespace Symfony\\Component\\HttpFoundation;

/**
 * Request stack that controls the lifecycle of requests.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class RequestStack
{
    /**
     * @var Request[]
     */
    private \$requests = [];

    /**
     * Pushes a Request on the stack.
     *
     * This method should generally not be called directly as the stack
     * management should be taken care of by the application itself.
     */
    public function push(Request \$request)
    {
        \$this->requests[] = \$request;
    }

    /**
     * Pops the current request from the stack.
     *
     * This operation lets the current request go out of scope.
     *
     * This method should generally not be called directly as the stack
     * management should be taken care of by the application itself.
     *
     * @return Request|null
     */
    public function pop()
    {
        if (!\$this->requests) {
            return null;
        }

        return array_pop(\$this->requests);
    }

    /**
     * @return Request|null
     */
    public function getCurrentRequest()
    {
        return end(\$this->requests) ?: null;
    }

    /**
     * Gets the master Request.
     *
     * Be warned that making your code aware of the master request
     * might make it un-compatible with other features of your framework
     * like ESI support.
     *
     * @return Request|null
     */
    public function getMasterRequest()
    {
        if (!\$this->requests) {
            return null;
        }

        return \$this->requests[0];
    }

    /**
     * Returns the parent request of the current.
     *
     * Be warned that making your code aware of the parent request
     * might make it un-compatible with other features of your framework
     * like ESI support.
     *
     * If current Request is the master request, it returns null.
     *
     * @return Request|null
     */
    public function getParentRequest()
    {
        \$pos = \\count(\$this->requests) - 2;

        if (!isset(\$this->requests[\$pos])) {
            return null;
        }

        return \$this->requests[\$pos];
    }
}
", "@app/vendor/symfony/http-foundation/RequestStack.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\RequestStack.php");
    }
}
