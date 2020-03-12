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

/* @app/vendor/symfony/cache/DoctrineProvider.php */
class __TwigTemplate_d437f5acc4ef2aab515086ca27870dc3cfa3c1162127659425bba423d2762e41 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/DoctrineProvider.php"));

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

namespace Symfony\\Component\\Cache;

use Doctrine\\Common\\Cache\\CacheProvider;
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DoctrineProvider extends CacheProvider implements PruneableInterface, ResettableInterface
{
    private \$pool;

    public function __construct(CacheItemPoolInterface \$pool)
    {
        \$this->pool = \$pool;
    }

    /**
     * {@inheritdoc}
     */
    public function prune()
    {
        return \$this->pool instanceof PruneableInterface && \$this->pool->prune();
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        if (\$this->pool instanceof ResetInterface) {
            \$this->pool->reset();
        }
        \$this->setNamespace(\$this->getNamespace());
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        \$item = \$this->pool->getItem(rawurlencode(\$id));

        return \$item->isHit() ? \$item->get() : false;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    protected function doContains(\$id)
    {
        return \$this->pool->hasItem(rawurlencode(\$id));
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        \$item = \$this->pool->getItem(rawurlencode(\$id));

        if (0 < \$lifeTime) {
            \$item->expiresAfter(\$lifeTime);
        }

        return \$this->pool->save(\$item->set(\$data));
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    protected function doDelete(\$id)
    {
        return \$this->pool->deleteItem(rawurlencode(\$id));
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    protected function doFlush()
    {
        return \$this->pool->clear();
    }

    /**
     * {@inheritdoc}
     *
     * @return array|null
     */
    protected function doGetStats()
    {
        return null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/cache/DoctrineProvider.php";
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

namespace Symfony\\Component\\Cache;

use Doctrine\\Common\\Cache\\CacheProvider;
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DoctrineProvider extends CacheProvider implements PruneableInterface, ResettableInterface
{
    private \$pool;

    public function __construct(CacheItemPoolInterface \$pool)
    {
        \$this->pool = \$pool;
    }

    /**
     * {@inheritdoc}
     */
    public function prune()
    {
        return \$this->pool instanceof PruneableInterface && \$this->pool->prune();
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        if (\$this->pool instanceof ResetInterface) {
            \$this->pool->reset();
        }
        \$this->setNamespace(\$this->getNamespace());
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        \$item = \$this->pool->getItem(rawurlencode(\$id));

        return \$item->isHit() ? \$item->get() : false;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    protected function doContains(\$id)
    {
        return \$this->pool->hasItem(rawurlencode(\$id));
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        \$item = \$this->pool->getItem(rawurlencode(\$id));

        if (0 < \$lifeTime) {
            \$item->expiresAfter(\$lifeTime);
        }

        return \$this->pool->save(\$item->set(\$data));
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    protected function doDelete(\$id)
    {
        return \$this->pool->deleteItem(rawurlencode(\$id));
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    protected function doFlush()
    {
        return \$this->pool->clear();
    }

    /**
     * {@inheritdoc}
     *
     * @return array|null
     */
    protected function doGetStats()
    {
        return null;
    }
}
", "@app/vendor/symfony/cache/DoctrineProvider.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\DoctrineProvider.php");
    }
}
