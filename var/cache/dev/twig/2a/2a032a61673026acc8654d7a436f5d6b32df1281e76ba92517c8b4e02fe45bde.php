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

/* @app/vendor/symfony/framework-bundle/HttpCache/HttpCache.php */
class __TwigTemplate_eb41960ea350336d2b0f5b03037ff2299017e68ba5114ad84d8bb828f88eb887 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/HttpCache/HttpCache.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\HttpCache;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpCache\\Esi;
use Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache as BaseHttpCache;
use Symfony\\Component\\HttpKernel\\HttpCache\\Store;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * Manages HTTP cache objects in a Container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HttpCache extends BaseHttpCache
{
    protected \$cacheDir;
    protected \$kernel;

    /**
     * @param string \$cacheDir The cache directory (default used if null)
     */
    public function __construct(KernelInterface \$kernel, string \$cacheDir = null)
    {
        \$this->kernel = \$kernel;
        \$this->cacheDir = \$cacheDir;

        \$isDebug = \$kernel->isDebug();
        \$options = ['debug' => \$isDebug];

        if (\$isDebug) {
            \$options['stale_if_error'] = 0;
        }

        parent::__construct(\$kernel, \$this->createStore(), \$this->createSurrogate(), array_merge(\$options, \$this->getOptions()));
    }

    /**
     * {@inheritdoc}
     */
    protected function forward(Request \$request, bool \$catch = false, Response \$entry = null)
    {
        \$this->getKernel()->boot();
        \$this->getKernel()->getContainer()->set('cache', \$this);

        return parent::forward(\$request, \$catch, \$entry);
    }

    /**
     * Returns an array of options to customize the Cache configuration.
     *
     * @return array An array of options
     */
    protected function getOptions()
    {
        return [];
    }

    protected function createSurrogate()
    {
        return new Esi();
    }

    protected function createStore()
    {
        return new Store(\$this->cacheDir ?: \$this->kernel->getCacheDir().'/http_cache');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/HttpCache/HttpCache.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\HttpCache;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpCache\\Esi;
use Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache as BaseHttpCache;
use Symfony\\Component\\HttpKernel\\HttpCache\\Store;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * Manages HTTP cache objects in a Container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HttpCache extends BaseHttpCache
{
    protected \$cacheDir;
    protected \$kernel;

    /**
     * @param string \$cacheDir The cache directory (default used if null)
     */
    public function __construct(KernelInterface \$kernel, string \$cacheDir = null)
    {
        \$this->kernel = \$kernel;
        \$this->cacheDir = \$cacheDir;

        \$isDebug = \$kernel->isDebug();
        \$options = ['debug' => \$isDebug];

        if (\$isDebug) {
            \$options['stale_if_error'] = 0;
        }

        parent::__construct(\$kernel, \$this->createStore(), \$this->createSurrogate(), array_merge(\$options, \$this->getOptions()));
    }

    /**
     * {@inheritdoc}
     */
    protected function forward(Request \$request, bool \$catch = false, Response \$entry = null)
    {
        \$this->getKernel()->boot();
        \$this->getKernel()->getContainer()->set('cache', \$this);

        return parent::forward(\$request, \$catch, \$entry);
    }

    /**
     * Returns an array of options to customize the Cache configuration.
     *
     * @return array An array of options
     */
    protected function getOptions()
    {
        return [];
    }

    protected function createSurrogate()
    {
        return new Esi();
    }

    protected function createStore()
    {
        return new Store(\$this->cacheDir ?: \$this->kernel->getCacheDir().'/http_cache');
    }
}
", "@app/vendor/symfony/framework-bundle/HttpCache/HttpCache.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\HttpCache\\HttpCache.php");
    }
}
