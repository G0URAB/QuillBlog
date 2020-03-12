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

/* @app/vendor/symfony/http-foundation/Session/Storage/Handler/MemcachedSessionHandler.php */
class __TwigTemplate_1aa987d3dcc30769ee6ec76b5b52654c9315e8d15c33cc97a7fba801db914dd0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Session/Storage/Handler/MemcachedSessionHandler.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

/**
 * Memcached based session storage handler based on the Memcached class
 * provided by the PHP memcached extension.
 *
 * @see https://php.net/memcached
 *
 * @author Drak <drak@zikula.org>
 */
class MemcachedSessionHandler extends AbstractSessionHandler
{
    private \$memcached;

    /**
     * @var int Time to live in seconds
     */
    private \$ttl;

    /**
     * @var string Key prefix for shared environments
     */
    private \$prefix;

    /**
     * Constructor.
     *
     * List of available options:
     *  * prefix: The prefix to use for the memcached keys in order to avoid collision
     *  * expiretime: The time to live in seconds.
     *
     * @throws \\InvalidArgumentException When unsupported options are passed
     */
    public function __construct(\\Memcached \$memcached, array \$options = [])
    {
        \$this->memcached = \$memcached;

        if (\$diff = array_diff(array_keys(\$options), ['prefix', 'expiretime'])) {
            throw new \\InvalidArgumentException(sprintf('The following options are not supported \"%s\"', implode(', ', \$diff)));
        }

        \$this->ttl = isset(\$options['expiretime']) ? (int) \$options['expiretime'] : 86400;
        \$this->prefix = isset(\$options['prefix']) ? \$options['prefix'] : 'sf2s';
    }

    /**
     * @return bool
     */
    public function close()
    {
        return \$this->memcached->quit();
    }

    /**
     * {@inheritdoc}
     */
    protected function doRead(string \$sessionId)
    {
        return \$this->memcached->get(\$this->prefix.\$sessionId) ?: '';
    }

    /**
     * @return bool
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        \$this->memcached->touch(\$this->prefix.\$sessionId, time() + \$this->ttl);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(string \$sessionId, string \$data)
    {
        return \$this->memcached->set(\$this->prefix.\$sessionId, \$data, time() + \$this->ttl);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDestroy(string \$sessionId)
    {
        \$result = \$this->memcached->delete(\$this->prefix.\$sessionId);

        return \$result || \\Memcached::RES_NOTFOUND == \$this->memcached->getResultCode();
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        // not required here because memcached will auto expire the records anyhow.
        return true;
    }

    /**
     * Return a Memcached instance.
     *
     * @return \\Memcached
     */
    protected function getMemcached()
    {
        return \$this->memcached;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Session/Storage/Handler/MemcachedSessionHandler.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

/**
 * Memcached based session storage handler based on the Memcached class
 * provided by the PHP memcached extension.
 *
 * @see https://php.net/memcached
 *
 * @author Drak <drak@zikula.org>
 */
class MemcachedSessionHandler extends AbstractSessionHandler
{
    private \$memcached;

    /**
     * @var int Time to live in seconds
     */
    private \$ttl;

    /**
     * @var string Key prefix for shared environments
     */
    private \$prefix;

    /**
     * Constructor.
     *
     * List of available options:
     *  * prefix: The prefix to use for the memcached keys in order to avoid collision
     *  * expiretime: The time to live in seconds.
     *
     * @throws \\InvalidArgumentException When unsupported options are passed
     */
    public function __construct(\\Memcached \$memcached, array \$options = [])
    {
        \$this->memcached = \$memcached;

        if (\$diff = array_diff(array_keys(\$options), ['prefix', 'expiretime'])) {
            throw new \\InvalidArgumentException(sprintf('The following options are not supported \"%s\"', implode(', ', \$diff)));
        }

        \$this->ttl = isset(\$options['expiretime']) ? (int) \$options['expiretime'] : 86400;
        \$this->prefix = isset(\$options['prefix']) ? \$options['prefix'] : 'sf2s';
    }

    /**
     * @return bool
     */
    public function close()
    {
        return \$this->memcached->quit();
    }

    /**
     * {@inheritdoc}
     */
    protected function doRead(string \$sessionId)
    {
        return \$this->memcached->get(\$this->prefix.\$sessionId) ?: '';
    }

    /**
     * @return bool
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        \$this->memcached->touch(\$this->prefix.\$sessionId, time() + \$this->ttl);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(string \$sessionId, string \$data)
    {
        return \$this->memcached->set(\$this->prefix.\$sessionId, \$data, time() + \$this->ttl);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDestroy(string \$sessionId)
    {
        \$result = \$this->memcached->delete(\$this->prefix.\$sessionId);

        return \$result || \\Memcached::RES_NOTFOUND == \$this->memcached->getResultCode();
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        // not required here because memcached will auto expire the records anyhow.
        return true;
    }

    /**
     * Return a Memcached instance.
     *
     * @return \\Memcached
     */
    protected function getMemcached()
    {
        return \$this->memcached;
    }
}
", "@app/vendor/symfony/http-foundation/Session/Storage/Handler/MemcachedSessionHandler.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Session\\Storage\\Handler\\MemcachedSessionHandler.php");
    }
}
