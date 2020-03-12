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

/* @app/vendor/symfony/cache/Adapter/Psr16Adapter.php */
class __TwigTemplate_cb0b645e70c0ecdc1d28d5fc52aacbca517b1ffc2f20f8b76d5869366590498e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/Adapter/Psr16Adapter.php"));

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

namespace Symfony\\Component\\Cache\\Adapter;

use Psr\\SimpleCache\\CacheInterface;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\ProxyTrait;

/**
 * Turns a PSR-16 cache into a PSR-6 one.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Psr16Adapter extends AbstractAdapter implements PruneableInterface, ResettableInterface
{
    /**
     * @internal
     */
    protected const NS_SEPARATOR = '_';

    use ProxyTrait;

    private \$miss;

    public function __construct(CacheInterface \$pool, string \$namespace = '', int \$defaultLifetime = 0)
    {
        parent::__construct(\$namespace, \$defaultLifetime);

        \$this->pool = \$pool;
        \$this->miss = new \\stdClass();
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        foreach (\$this->pool->getMultiple(\$ids, \$this->miss) as \$key => \$value) {
            if (\$this->miss !== \$value) {
                yield \$key => \$value;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(string \$id)
    {
        return \$this->pool->has(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear(string \$namespace)
    {
        return \$this->pool->clear();
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids)
    {
        return \$this->pool->deleteMultiple(\$ids);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, int \$lifetime)
    {
        return \$this->pool->setMultiple(\$values, 0 === \$lifetime ? null : \$lifetime);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/cache/Adapter/Psr16Adapter.php";
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

namespace Symfony\\Component\\Cache\\Adapter;

use Psr\\SimpleCache\\CacheInterface;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\ProxyTrait;

/**
 * Turns a PSR-16 cache into a PSR-6 one.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Psr16Adapter extends AbstractAdapter implements PruneableInterface, ResettableInterface
{
    /**
     * @internal
     */
    protected const NS_SEPARATOR = '_';

    use ProxyTrait;

    private \$miss;

    public function __construct(CacheInterface \$pool, string \$namespace = '', int \$defaultLifetime = 0)
    {
        parent::__construct(\$namespace, \$defaultLifetime);

        \$this->pool = \$pool;
        \$this->miss = new \\stdClass();
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        foreach (\$this->pool->getMultiple(\$ids, \$this->miss) as \$key => \$value) {
            if (\$this->miss !== \$value) {
                yield \$key => \$value;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(string \$id)
    {
        return \$this->pool->has(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear(string \$namespace)
    {
        return \$this->pool->clear();
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids)
    {
        return \$this->pool->deleteMultiple(\$ids);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, int \$lifetime)
    {
        return \$this->pool->setMultiple(\$values, 0 === \$lifetime ? null : \$lifetime);
    }
}
", "@app/vendor/symfony/cache/Adapter/Psr16Adapter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\Adapter\\Psr16Adapter.php");
    }
}
