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

/* @app/vendor/symfony/config/ConfigCacheFactoryInterface.php */
class __TwigTemplate_991c3506185048811c810b7bb89f74614eb3916b23b4374dd96156980f60b33a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/ConfigCacheFactoryInterface.php"));

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

namespace Symfony\\Component\\Config;

/**
 * Interface for a ConfigCache factory. This factory creates
 * an instance of ConfigCacheInterface and initializes the
 * cache if necessary.
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 */
interface ConfigCacheFactoryInterface
{
    /**
     * Creates a cache instance and (re-)initializes it if necessary.
     *
     * @param string   \$file     The absolute cache file path
     * @param callable \$callable The callable to be executed when the cache needs to be filled (i. e. is not fresh). The cache will be passed as the only parameter to this callback
     *
     * @return ConfigCacheInterface The cache instance
     */
    public function cache(string \$file, callable \$callable);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/ConfigCacheFactoryInterface.php";
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

namespace Symfony\\Component\\Config;

/**
 * Interface for a ConfigCache factory. This factory creates
 * an instance of ConfigCacheInterface and initializes the
 * cache if necessary.
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 */
interface ConfigCacheFactoryInterface
{
    /**
     * Creates a cache instance and (re-)initializes it if necessary.
     *
     * @param string   \$file     The absolute cache file path
     * @param callable \$callable The callable to be executed when the cache needs to be filled (i. e. is not fresh). The cache will be passed as the only parameter to this callback
     *
     * @return ConfigCacheInterface The cache instance
     */
    public function cache(string \$file, callable \$callable);
}
", "@app/vendor/symfony/config/ConfigCacheFactoryInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\ConfigCacheFactoryInterface.php");
    }
}
