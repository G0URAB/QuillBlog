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

/* @app/vendor/symfony/http-kernel/Controller/ErrorController.php */
class __TwigTemplate_b44405b243d81b5384d61407bf1cbb931b743a3bb5ef7da583cde41b7a858a95 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/Controller/ErrorController.php"));

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

namespace Symfony\\Component\\HttpKernel\\Controller;

use Symfony\\Component\\ErrorHandler\\ErrorRenderer\\ErrorRendererInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

/**
 * Renders error or exception pages from a given FlattenException.
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class ErrorController
{
    private \$kernel;
    private \$controller;
    private \$errorRenderer;

    public function __construct(HttpKernelInterface \$kernel, \$controller, ErrorRendererInterface \$errorRenderer)
    {
        \$this->kernel = \$kernel;
        \$this->controller = \$controller;
        \$this->errorRenderer = \$errorRenderer;
    }

    public function __invoke(\\Throwable \$exception): Response
    {
        \$exception = \$this->errorRenderer->render(\$exception);

        return new Response(\$exception->getAsString(), \$exception->getStatusCode(), \$exception->getHeaders());
    }

    public function preview(Request \$request, int \$code): Response
    {
        /*
         * This Request mimics the parameters set by
         * \\Symfony\\Component\\HttpKernel\\EventListener\\ErrorListener::duplicateRequest, with
         * the additional \"showException\" flag.
         */
        \$subRequest = \$request->duplicate(null, null, [
            '_controller' => \$this->controller,
            'exception' => new HttpException(\$code, 'This is a sample exception.'),
            'logger' => null,
            'showException' => false,
        ]);

        return \$this->kernel->handle(\$subRequest, HttpKernelInterface::SUB_REQUEST);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/Controller/ErrorController.php";
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

namespace Symfony\\Component\\HttpKernel\\Controller;

use Symfony\\Component\\ErrorHandler\\ErrorRenderer\\ErrorRendererInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

/**
 * Renders error or exception pages from a given FlattenException.
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class ErrorController
{
    private \$kernel;
    private \$controller;
    private \$errorRenderer;

    public function __construct(HttpKernelInterface \$kernel, \$controller, ErrorRendererInterface \$errorRenderer)
    {
        \$this->kernel = \$kernel;
        \$this->controller = \$controller;
        \$this->errorRenderer = \$errorRenderer;
    }

    public function __invoke(\\Throwable \$exception): Response
    {
        \$exception = \$this->errorRenderer->render(\$exception);

        return new Response(\$exception->getAsString(), \$exception->getStatusCode(), \$exception->getHeaders());
    }

    public function preview(Request \$request, int \$code): Response
    {
        /*
         * This Request mimics the parameters set by
         * \\Symfony\\Component\\HttpKernel\\EventListener\\ErrorListener::duplicateRequest, with
         * the additional \"showException\" flag.
         */
        \$subRequest = \$request->duplicate(null, null, [
            '_controller' => \$this->controller,
            'exception' => new HttpException(\$code, 'This is a sample exception.'),
            'logger' => null,
            'showException' => false,
        ]);

        return \$this->kernel->handle(\$subRequest, HttpKernelInterface::SUB_REQUEST);
    }
}
", "@app/vendor/symfony/http-kernel/Controller/ErrorController.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Controller\\ErrorController.php");
    }
}
