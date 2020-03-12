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

/* @app/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php */
class __TwigTemplate_194680ced587e8b19f017718995db7531662853595559864a0a53f1b822fc788 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php"));

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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler;

/**
 * Lazily loads fragment renderers from the dependency injection container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LazyLoadingFragmentHandler extends FragmentHandler
{
    private \$container;
    private \$initialized = [];

    public function __construct(ContainerInterface \$container, RequestStack \$requestStack, bool \$debug = false)
    {
        \$this->container = \$container;

        parent::__construct(\$requestStack, [], \$debug);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\$uri, string \$renderer = 'inline', array \$options = [])
    {
        if (!isset(\$this->initialized[\$renderer]) && \$this->container->has(\$renderer)) {
            \$this->addRenderer(\$this->container->get(\$renderer));
            \$this->initialized[\$renderer] = true;
        }

        return parent::render(\$uri, \$renderer, \$options);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php";
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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler;

/**
 * Lazily loads fragment renderers from the dependency injection container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LazyLoadingFragmentHandler extends FragmentHandler
{
    private \$container;
    private \$initialized = [];

    public function __construct(ContainerInterface \$container, RequestStack \$requestStack, bool \$debug = false)
    {
        \$this->container = \$container;

        parent::__construct(\$requestStack, [], \$debug);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\$uri, string \$renderer = 'inline', array \$options = [])
    {
        if (!isset(\$this->initialized[\$renderer]) && \$this->container->has(\$renderer)) {
            \$this->addRenderer(\$this->container->get(\$renderer));
            \$this->initialized[\$renderer] = true;
        }

        return parent::render(\$uri, \$renderer, \$options);
    }
}
", "@app/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\DependencyInjection\\LazyLoadingFragmentHandler.php");
    }
}
