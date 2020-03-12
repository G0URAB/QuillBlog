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

/* @app/vendor/symfony/framework-bundle/Routing/RedirectableCompiledUrlMatcher.php */
class __TwigTemplate_4bf2001c589881cc8189316ab11f04298afaf209b43eba5ac949447e793d96dd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Routing/RedirectableCompiledUrlMatcher.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Routing;

use Symfony\\Component\\Routing\\Matcher\\CompiledUrlMatcher;
use Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcherInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class RedirectableCompiledUrlMatcher extends CompiledUrlMatcher implements RedirectableUrlMatcherInterface
{
    /**
     * {@inheritdoc}
     */
    public function redirect(string \$path, string \$route, string \$scheme = null): array
    {
        return [
            '_controller' => 'Symfony\\\\Bundle\\\\FrameworkBundle\\\\Controller\\\\RedirectController::urlRedirectAction',
            'path' => \$path,
            'permanent' => true,
            'scheme' => \$scheme,
            'httpPort' => \$this->context->getHttpPort(),
            'httpsPort' => \$this->context->getHttpsPort(),
            '_route' => \$route,
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Routing/RedirectableCompiledUrlMatcher.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Routing;

use Symfony\\Component\\Routing\\Matcher\\CompiledUrlMatcher;
use Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcherInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class RedirectableCompiledUrlMatcher extends CompiledUrlMatcher implements RedirectableUrlMatcherInterface
{
    /**
     * {@inheritdoc}
     */
    public function redirect(string \$path, string \$route, string \$scheme = null): array
    {
        return [
            '_controller' => 'Symfony\\\\Bundle\\\\FrameworkBundle\\\\Controller\\\\RedirectController::urlRedirectAction',
            'path' => \$path,
            'permanent' => true,
            'scheme' => \$scheme,
            'httpPort' => \$this->context->getHttpPort(),
            'httpsPort' => \$this->context->getHttpsPort(),
            '_route' => \$route,
        ];
    }
}
", "@app/vendor/symfony/framework-bundle/Routing/RedirectableCompiledUrlMatcher.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Routing\\RedirectableCompiledUrlMatcher.php");
    }
}
