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

/* @app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/VoidCache.php */
class __TwigTemplate_cc6f91e3a7f65a57dd942cc0d404693ae17eddb4911675edd9af17f237bccef6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/VoidCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

/**
 * Void cache driver. The cache could be of use in tests where you don`t need to cache anything.
 *
 * @link   www.doctrine-project.org
 */
class VoidCache extends CacheProvider
{
    /**
     * {@inheritDoc}
     */
    protected function doFetch(\$id)
    {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    protected function doContains(\$id)
    {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    protected function doDelete(\$id)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    protected function doFlush()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    protected function doGetStats()
    {
        return;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/VoidCache.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

/**
 * Void cache driver. The cache could be of use in tests where you don`t need to cache anything.
 *
 * @link   www.doctrine-project.org
 */
class VoidCache extends CacheProvider
{
    /**
     * {@inheritDoc}
     */
    protected function doFetch(\$id)
    {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    protected function doContains(\$id)
    {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    protected function doDelete(\$id)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    protected function doFlush()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    protected function doGetStats()
    {
        return;
    }
}
", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/VoidCache.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\VoidCache.php");
    }
}
