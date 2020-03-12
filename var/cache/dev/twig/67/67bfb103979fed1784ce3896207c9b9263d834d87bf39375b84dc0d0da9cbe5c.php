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

/* @app/vendor/symfony/http-foundation/Session/Storage/PhpBridgeSessionStorage.php */
class __TwigTemplate_fa34c2341f9ef58fdfbeae624439ce626a05e661d426d07573f5499f067e0fef extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Session/Storage/PhpBridgeSessionStorage.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage;

use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\AbstractProxy;

/**
 * Allows session to be started by PHP and managed by Symfony.
 *
 * @author Drak <drak@zikula.org>
 */
class PhpBridgeSessionStorage extends NativeSessionStorage
{
    /**
     * @param AbstractProxy|\\SessionHandlerInterface|null \$handler
     */
    public function __construct(\$handler = null, MetadataBag \$metaBag = null)
    {
        if (!\\extension_loaded('session')) {
            throw new \\LogicException('PHP extension \"session\" is required.');
        }

        \$this->setMetadataBag(\$metaBag);
        \$this->setSaveHandler(\$handler);
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        if (\$this->started) {
            return true;
        }

        \$this->loadSession();

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        // clear out the bags and nothing else that may be set
        // since the purpose of this driver is to share a handler
        foreach (\$this->bags as \$bag) {
            \$bag->clear();
        }

        // reconnect the bags to the session
        \$this->loadSession();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Session/Storage/PhpBridgeSessionStorage.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage;

use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\AbstractProxy;

/**
 * Allows session to be started by PHP and managed by Symfony.
 *
 * @author Drak <drak@zikula.org>
 */
class PhpBridgeSessionStorage extends NativeSessionStorage
{
    /**
     * @param AbstractProxy|\\SessionHandlerInterface|null \$handler
     */
    public function __construct(\$handler = null, MetadataBag \$metaBag = null)
    {
        if (!\\extension_loaded('session')) {
            throw new \\LogicException('PHP extension \"session\" is required.');
        }

        \$this->setMetadataBag(\$metaBag);
        \$this->setSaveHandler(\$handler);
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        if (\$this->started) {
            return true;
        }

        \$this->loadSession();

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        // clear out the bags and nothing else that may be set
        // since the purpose of this driver is to share a handler
        foreach (\$this->bags as \$bag) {
            \$bag->clear();
        }

        // reconnect the bags to the session
        \$this->loadSession();
    }
}
", "@app/vendor/symfony/http-foundation/Session/Storage/PhpBridgeSessionStorage.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Session\\Storage\\PhpBridgeSessionStorage.php");
    }
}
