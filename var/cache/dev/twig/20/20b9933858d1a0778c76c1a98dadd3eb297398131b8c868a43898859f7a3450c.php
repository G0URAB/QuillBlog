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

/* @app/vendor/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php */
class __TwigTemplate_36ee8ff326ba7ec82e21f32d4453efef5faa21f148ebee2bea700204dcbc3739 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy;

/**
 * @author Drak <drak@zikula.org>
 */
class SessionHandlerProxy extends AbstractProxy implements \\SessionHandlerInterface, \\SessionUpdateTimestampHandlerInterface
{
    protected \$handler;

    public function __construct(\\SessionHandlerInterface \$handler)
    {
        \$this->handler = \$handler;
        \$this->wrapper = (\$handler instanceof \\SessionHandler);
        \$this->saveHandlerName = \$this->wrapper ? ini_get('session.save_handler') : 'user';
    }

    /**
     * @return \\SessionHandlerInterface
     */
    public function getHandler()
    {
        return \$this->handler;
    }

    // \\SessionHandlerInterface

    /**
     * @return bool
     */
    public function open(\$savePath, \$sessionName)
    {
        return (bool) \$this->handler->open(\$savePath, \$sessionName);
    }

    /**
     * @return bool
     */
    public function close()
    {
        return (bool) \$this->handler->close();
    }

    /**
     * @return string
     */
    public function read(\$sessionId)
    {
        return (string) \$this->handler->read(\$sessionId);
    }

    /**
     * @return bool
     */
    public function write(\$sessionId, \$data)
    {
        return (bool) \$this->handler->write(\$sessionId, \$data);
    }

    /**
     * @return bool
     */
    public function destroy(\$sessionId)
    {
        return (bool) \$this->handler->destroy(\$sessionId);
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        return (bool) \$this->handler->gc(\$maxlifetime);
    }

    /**
     * @return bool
     */
    public function validateId(\$sessionId)
    {
        return !\$this->handler instanceof \\SessionUpdateTimestampHandlerInterface || \$this->handler->validateId(\$sessionId);
    }

    /**
     * @return bool
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        return \$this->handler instanceof \\SessionUpdateTimestampHandlerInterface ? \$this->handler->updateTimestamp(\$sessionId, \$data) : \$this->write(\$sessionId, \$data);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy;

/**
 * @author Drak <drak@zikula.org>
 */
class SessionHandlerProxy extends AbstractProxy implements \\SessionHandlerInterface, \\SessionUpdateTimestampHandlerInterface
{
    protected \$handler;

    public function __construct(\\SessionHandlerInterface \$handler)
    {
        \$this->handler = \$handler;
        \$this->wrapper = (\$handler instanceof \\SessionHandler);
        \$this->saveHandlerName = \$this->wrapper ? ini_get('session.save_handler') : 'user';
    }

    /**
     * @return \\SessionHandlerInterface
     */
    public function getHandler()
    {
        return \$this->handler;
    }

    // \\SessionHandlerInterface

    /**
     * @return bool
     */
    public function open(\$savePath, \$sessionName)
    {
        return (bool) \$this->handler->open(\$savePath, \$sessionName);
    }

    /**
     * @return bool
     */
    public function close()
    {
        return (bool) \$this->handler->close();
    }

    /**
     * @return string
     */
    public function read(\$sessionId)
    {
        return (string) \$this->handler->read(\$sessionId);
    }

    /**
     * @return bool
     */
    public function write(\$sessionId, \$data)
    {
        return (bool) \$this->handler->write(\$sessionId, \$data);
    }

    /**
     * @return bool
     */
    public function destroy(\$sessionId)
    {
        return (bool) \$this->handler->destroy(\$sessionId);
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        return (bool) \$this->handler->gc(\$maxlifetime);
    }

    /**
     * @return bool
     */
    public function validateId(\$sessionId)
    {
        return !\$this->handler instanceof \\SessionUpdateTimestampHandlerInterface || \$this->handler->validateId(\$sessionId);
    }

    /**
     * @return bool
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        return \$this->handler instanceof \\SessionUpdateTimestampHandlerInterface ? \$this->handler->updateTimestamp(\$sessionId, \$data) : \$this->write(\$sessionId, \$data);
    }
}
", "@app/vendor/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Session\\Storage\\Proxy\\SessionHandlerProxy.php");
    }
}
