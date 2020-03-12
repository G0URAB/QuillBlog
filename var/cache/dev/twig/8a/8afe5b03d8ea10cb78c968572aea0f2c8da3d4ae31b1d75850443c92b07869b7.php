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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractDriverException.php */
class __TwigTemplate_eafd5868c2f83c4fcf9b9ef8da95ff185e936971d0d6916ba1c4de179f55a41a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractDriverException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

use Exception;

/**
 * Abstract base implementation of the {@link DriverException} interface.
 */
abstract class AbstractDriverException extends Exception implements DriverException
{
    /**
     * The driver specific error code.
     *
     * @var int|string|null
     */
    private \$errorCode;

    /**
     * The SQLSTATE of the driver.
     *
     * @var string|null
     */
    private \$sqlState;

    /**
     * @param string          \$message   The driver error message.
     * @param string|null     \$sqlState  The SQLSTATE the driver is in at the time the error occurred, if any.
     * @param int|string|null \$errorCode The driver specific error code if any.
     */
    public function __construct(\$message, \$sqlState = null, \$errorCode = null)
    {
        parent::__construct(\$message);

        \$this->errorCode = \$errorCode;
        \$this->sqlState  = \$sqlState;
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorCode()
    {
        return \$this->errorCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLState()
    {
        return \$this->sqlState;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractDriverException.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver;

use Exception;

/**
 * Abstract base implementation of the {@link DriverException} interface.
 */
abstract class AbstractDriverException extends Exception implements DriverException
{
    /**
     * The driver specific error code.
     *
     * @var int|string|null
     */
    private \$errorCode;

    /**
     * The SQLSTATE of the driver.
     *
     * @var string|null
     */
    private \$sqlState;

    /**
     * @param string          \$message   The driver error message.
     * @param string|null     \$sqlState  The SQLSTATE the driver is in at the time the error occurred, if any.
     * @param int|string|null \$errorCode The driver specific error code if any.
     */
    public function __construct(\$message, \$sqlState = null, \$errorCode = null)
    {
        parent::__construct(\$message);

        \$this->errorCode = \$errorCode;
        \$this->sqlState  = \$sqlState;
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorCode()
    {
        return \$this->errorCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLState()
    {
        return \$this->sqlState;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractDriverException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\AbstractDriverException.php");
    }
}
