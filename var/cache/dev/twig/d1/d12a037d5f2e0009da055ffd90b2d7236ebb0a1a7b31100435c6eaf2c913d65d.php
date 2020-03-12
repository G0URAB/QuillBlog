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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/DriverException.php */
class __TwigTemplate_58d6db4fbcec59a6167fff9a9bbd999df347ce5ec4f8687c72189a0682d04291 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/DriverException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Exception;

use Doctrine\\DBAL\\DBALException;
use Exception;

/**
 * Base class for all errors detected in the driver.
 */
class DriverException extends DBALException
{
    /**
     * The previous DBAL driver exception.
     *
     * @var \\Doctrine\\DBAL\\Driver\\DriverException
     */
    private \$driverException;

    /**
     * @param string                                \$message         The exception message.
     * @param \\Doctrine\\DBAL\\Driver\\DriverException \$driverException The DBAL driver exception to chain.
     */
    public function __construct(\$message, \\Doctrine\\DBAL\\Driver\\DriverException \$driverException)
    {
        \$exception = null;

        if (\$driverException instanceof Exception) {
            \$exception = \$driverException;
        }

        parent::__construct(\$message, 0, \$exception);

        \$this->driverException = \$driverException;
    }

    /**
     * Returns the driver specific error code if given.
     *
     * Returns null if no error code was given by the driver.
     *
     * @return int|string|null
     */
    public function getErrorCode()
    {
        return \$this->driverException->getErrorCode();
    }

    /**
     * Returns the SQLSTATE the driver was in at the time the error occurred, if given.
     *
     * Returns null if no SQLSTATE was given by the driver.
     *
     * @return string|null
     */
    public function getSQLState()
    {
        return \$this->driverException->getSQLState();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/DriverException.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Exception;

use Doctrine\\DBAL\\DBALException;
use Exception;

/**
 * Base class for all errors detected in the driver.
 */
class DriverException extends DBALException
{
    /**
     * The previous DBAL driver exception.
     *
     * @var \\Doctrine\\DBAL\\Driver\\DriverException
     */
    private \$driverException;

    /**
     * @param string                                \$message         The exception message.
     * @param \\Doctrine\\DBAL\\Driver\\DriverException \$driverException The DBAL driver exception to chain.
     */
    public function __construct(\$message, \\Doctrine\\DBAL\\Driver\\DriverException \$driverException)
    {
        \$exception = null;

        if (\$driverException instanceof Exception) {
            \$exception = \$driverException;
        }

        parent::__construct(\$message, 0, \$exception);

        \$this->driverException = \$driverException;
    }

    /**
     * Returns the driver specific error code if given.
     *
     * Returns null if no error code was given by the driver.
     *
     * @return int|string|null
     */
    public function getErrorCode()
    {
        return \$this->driverException->getErrorCode();
    }

    /**
     * Returns the SQLSTATE the driver was in at the time the error occurred, if given.
     *
     * Returns null if no SQLSTATE was given by the driver.
     *
     * @return string|null
     */
    public function getSQLState()
    {
        return \$this->driverException->getSQLState();
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/DriverException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Exception\\DriverException.php");
    }
}
