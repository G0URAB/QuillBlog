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

/* @app/vendor/symfony/http-foundation/Session/Storage/Proxy/AbstractProxy.php */
class __TwigTemplate_512ab6f7d29b6364bd8eb8af1466b0d88763cc4b13dd114876af5d72d83699ea extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Session/Storage/Proxy/AbstractProxy.php"));

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
abstract class AbstractProxy
{
    /**
     * Flag if handler wraps an internal PHP session handler (using \\SessionHandler).
     *
     * @var bool
     */
    protected \$wrapper = false;

    /**
     * @var string
     */
    protected \$saveHandlerName;

    /**
     * Gets the session.save_handler name.
     *
     * @return string|null
     */
    public function getSaveHandlerName()
    {
        return \$this->saveHandlerName;
    }

    /**
     * Is this proxy handler and instance of \\SessionHandlerInterface.
     *
     * @return bool
     */
    public function isSessionHandlerInterface()
    {
        return \$this instanceof \\SessionHandlerInterface;
    }

    /**
     * Returns true if this handler wraps an internal PHP session save handler using \\SessionHandler.
     *
     * @return bool
     */
    public function isWrapper()
    {
        return \$this->wrapper;
    }

    /**
     * Has a session started?
     *
     * @return bool
     */
    public function isActive()
    {
        return PHP_SESSION_ACTIVE === session_status();
    }

    /**
     * Gets the session ID.
     *
     * @return string
     */
    public function getId()
    {
        return session_id();
    }

    /**
     * Sets the session ID.
     *
     * @throws \\LogicException
     */
    public function setId(string \$id)
    {
        if (\$this->isActive()) {
            throw new \\LogicException('Cannot change the ID of an active session');
        }

        session_id(\$id);
    }

    /**
     * Gets the session name.
     *
     * @return string
     */
    public function getName()
    {
        return session_name();
    }

    /**
     * Sets the session name.
     *
     * @throws \\LogicException
     */
    public function setName(string \$name)
    {
        if (\$this->isActive()) {
            throw new \\LogicException('Cannot change the name of an active session');
        }

        session_name(\$name);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Session/Storage/Proxy/AbstractProxy.php";
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
abstract class AbstractProxy
{
    /**
     * Flag if handler wraps an internal PHP session handler (using \\SessionHandler).
     *
     * @var bool
     */
    protected \$wrapper = false;

    /**
     * @var string
     */
    protected \$saveHandlerName;

    /**
     * Gets the session.save_handler name.
     *
     * @return string|null
     */
    public function getSaveHandlerName()
    {
        return \$this->saveHandlerName;
    }

    /**
     * Is this proxy handler and instance of \\SessionHandlerInterface.
     *
     * @return bool
     */
    public function isSessionHandlerInterface()
    {
        return \$this instanceof \\SessionHandlerInterface;
    }

    /**
     * Returns true if this handler wraps an internal PHP session save handler using \\SessionHandler.
     *
     * @return bool
     */
    public function isWrapper()
    {
        return \$this->wrapper;
    }

    /**
     * Has a session started?
     *
     * @return bool
     */
    public function isActive()
    {
        return PHP_SESSION_ACTIVE === session_status();
    }

    /**
     * Gets the session ID.
     *
     * @return string
     */
    public function getId()
    {
        return session_id();
    }

    /**
     * Sets the session ID.
     *
     * @throws \\LogicException
     */
    public function setId(string \$id)
    {
        if (\$this->isActive()) {
            throw new \\LogicException('Cannot change the ID of an active session');
        }

        session_id(\$id);
    }

    /**
     * Gets the session name.
     *
     * @return string
     */
    public function getName()
    {
        return session_name();
    }

    /**
     * Sets the session name.
     *
     * @throws \\LogicException
     */
    public function setName(string \$name)
    {
        if (\$this->isActive()) {
            throw new \\LogicException('Cannot change the name of an active session');
        }

        session_name(\$name);
    }
}
", "@app/vendor/symfony/http-foundation/Session/Storage/Proxy/AbstractProxy.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Session\\Storage\\Proxy\\AbstractProxy.php");
    }
}
