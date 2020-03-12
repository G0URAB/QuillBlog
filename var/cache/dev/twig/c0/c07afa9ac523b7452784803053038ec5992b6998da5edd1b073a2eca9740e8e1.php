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

/* @app/vendor/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php */
class __TwigTemplate_fdd79d99f15ebe5c917bcbe93172702284f4b6a8f2a50149fbadc37a463bd462 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php"));

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
 * Can be used in unit testing or in a situations where persisted sessions are not desired.
 *
 * @author Drak <drak@zikula.org>
 */
class NullSessionHandler extends AbstractSessionHandler
{
    /**
     * @return bool
     */
    public function close()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function validateId(\$sessionId)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doRead(string \$sessionId)
    {
        return '';
    }

    /**
     * @return bool
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(string \$sessionId, string \$data)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDestroy(string \$sessionId)
    {
        return true;
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        return true;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php";
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
 * Can be used in unit testing or in a situations where persisted sessions are not desired.
 *
 * @author Drak <drak@zikula.org>
 */
class NullSessionHandler extends AbstractSessionHandler
{
    /**
     * @return bool
     */
    public function close()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function validateId(\$sessionId)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doRead(string \$sessionId)
    {
        return '';
    }

    /**
     * @return bool
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(string \$sessionId, string \$data)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDestroy(string \$sessionId)
    {
        return true;
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        return true;
    }
}
", "@app/vendor/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Session\\Storage\\Handler\\NullSessionHandler.php");
    }
}
