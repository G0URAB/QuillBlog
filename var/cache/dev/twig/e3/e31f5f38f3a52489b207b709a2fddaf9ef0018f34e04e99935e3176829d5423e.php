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

/* @app/vendor/symfony/cache/Adapter/DoctrineAdapter.php */
class __TwigTemplate_a7e75390fa45eb394f17fbd9fbb3f4861dbfb36dc54c0477de12e46093b77bee extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/Adapter/DoctrineAdapter.php"));

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

use Doctrine\\Common\\Cache\\CacheProvider;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DoctrineAdapter extends AbstractAdapter
{
    private \$provider;

    public function __construct(CacheProvider \$provider, string \$namespace = '', int \$defaultLifetime = 0)
    {
        parent::__construct('', \$defaultLifetime);
        \$this->provider = \$provider;
        \$provider->setNamespace(\$namespace);
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        parent::reset();
        \$this->provider->setNamespace(\$this->provider->getNamespace());
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        \$unserializeCallbackHandler = ini_set('unserialize_callback_func', parent::class.'::handleUnserializeCallback');
        try {
            return \$this->provider->fetchMultiple(\$ids);
        } catch (\\Error \$e) {
            \$trace = \$e->getTrace();

            if (isset(\$trace[0]['function']) && !isset(\$trace[0]['class'])) {
                switch (\$trace[0]['function']) {
                    case 'unserialize':
                    case 'apcu_fetch':
                    case 'apc_fetch':
                        throw new \\ErrorException(\$e->getMessage(), \$e->getCode(), E_ERROR, \$e->getFile(), \$e->getLine());
                }
            }

            throw \$e;
        } finally {
            ini_set('unserialize_callback_func', \$unserializeCallbackHandler);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(string \$id)
    {
        return \$this->provider->contains(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear(string \$namespace)
    {
        \$namespace = \$this->provider->getNamespace();

        return isset(\$namespace[0])
            ? \$this->provider->deleteAll()
            : \$this->provider->flushAll();
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids)
    {
        \$ok = true;
        foreach (\$ids as \$id) {
            \$ok = \$this->provider->delete(\$id) && \$ok;
        }

        return \$ok;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, int \$lifetime)
    {
        return \$this->provider->saveMultiple(\$values, \$lifetime);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/cache/Adapter/DoctrineAdapter.php";
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

use Doctrine\\Common\\Cache\\CacheProvider;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DoctrineAdapter extends AbstractAdapter
{
    private \$provider;

    public function __construct(CacheProvider \$provider, string \$namespace = '', int \$defaultLifetime = 0)
    {
        parent::__construct('', \$defaultLifetime);
        \$this->provider = \$provider;
        \$provider->setNamespace(\$namespace);
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        parent::reset();
        \$this->provider->setNamespace(\$this->provider->getNamespace());
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        \$unserializeCallbackHandler = ini_set('unserialize_callback_func', parent::class.'::handleUnserializeCallback');
        try {
            return \$this->provider->fetchMultiple(\$ids);
        } catch (\\Error \$e) {
            \$trace = \$e->getTrace();

            if (isset(\$trace[0]['function']) && !isset(\$trace[0]['class'])) {
                switch (\$trace[0]['function']) {
                    case 'unserialize':
                    case 'apcu_fetch':
                    case 'apc_fetch':
                        throw new \\ErrorException(\$e->getMessage(), \$e->getCode(), E_ERROR, \$e->getFile(), \$e->getLine());
                }
            }

            throw \$e;
        } finally {
            ini_set('unserialize_callback_func', \$unserializeCallbackHandler);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(string \$id)
    {
        return \$this->provider->contains(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear(string \$namespace)
    {
        \$namespace = \$this->provider->getNamespace();

        return isset(\$namespace[0])
            ? \$this->provider->deleteAll()
            : \$this->provider->flushAll();
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids)
    {
        \$ok = true;
        foreach (\$ids as \$id) {
            \$ok = \$this->provider->delete(\$id) && \$ok;
        }

        return \$ok;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, int \$lifetime)
    {
        return \$this->provider->saveMultiple(\$values, \$lifetime);
    }
}
", "@app/vendor/symfony/cache/Adapter/DoctrineAdapter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\Adapter\\DoctrineAdapter.php");
    }
}
