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

/* @app/vendor/symfony/cache/Adapter/NullAdapter.php */
class __TwigTemplate_7dc5db2c771fcc255aaff88888ef56125f7b2eadc813445cde8414d1f542e2f0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/Adapter/NullAdapter.php"));

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

use Psr\\Cache\\CacheItemInterface;
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Contracts\\Cache\\CacheInterface;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class NullAdapter implements AdapterInterface, CacheInterface
{
    private \$createCacheItem;

    public function __construct()
    {
        \$this->createCacheItem = \\Closure::bind(
            function (\$key) {
                \$item = new CacheItem();
                \$item->key = \$key;
                \$item->isHit = false;

                return \$item;
            },
            \$this,
            CacheItem::class
        );
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$key, callable \$callback, float \$beta = null, array &\$metadata = null)
    {
        \$save = true;

        return \$callback((\$this->createCacheItem)(\$key), \$save);
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        \$f = \$this->createCacheItem;

        return \$f(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array \$keys = [])
    {
        return \$this->generateItems(\$keys);
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function hasItem(\$key)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function clear(string \$prefix = '')
    {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function deleteItem(\$key)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function deleteItems(array \$keys)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function save(CacheItemInterface \$item)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function commit()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(string \$key): bool
    {
        return \$this->deleteItem(\$key);
    }

    private function generateItems(array \$keys)
    {
        \$f = \$this->createCacheItem;

        foreach (\$keys as \$key) {
            yield \$key => \$f(\$key);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/cache/Adapter/NullAdapter.php";
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

use Psr\\Cache\\CacheItemInterface;
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Contracts\\Cache\\CacheInterface;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class NullAdapter implements AdapterInterface, CacheInterface
{
    private \$createCacheItem;

    public function __construct()
    {
        \$this->createCacheItem = \\Closure::bind(
            function (\$key) {
                \$item = new CacheItem();
                \$item->key = \$key;
                \$item->isHit = false;

                return \$item;
            },
            \$this,
            CacheItem::class
        );
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$key, callable \$callback, float \$beta = null, array &\$metadata = null)
    {
        \$save = true;

        return \$callback((\$this->createCacheItem)(\$key), \$save);
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        \$f = \$this->createCacheItem;

        return \$f(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array \$keys = [])
    {
        return \$this->generateItems(\$keys);
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function hasItem(\$key)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function clear(string \$prefix = '')
    {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function deleteItem(\$key)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function deleteItems(array \$keys)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function save(CacheItemInterface \$item)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function commit()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(string \$key): bool
    {
        return \$this->deleteItem(\$key);
    }

    private function generateItems(array \$keys)
    {
        \$f = \$this->createCacheItem;

        foreach (\$keys as \$key) {
            yield \$key => \$f(\$key);
        }
    }
}
", "@app/vendor/symfony/cache/Adapter/NullAdapter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\Adapter\\NullAdapter.php");
    }
}
