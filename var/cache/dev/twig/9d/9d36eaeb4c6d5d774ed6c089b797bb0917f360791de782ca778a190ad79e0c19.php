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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DriverException.php */
class __TwigTemplate_dee486640d48754815357ec117bc84404d9dd56798dee3bebcd000af5c43844c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DriverException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

use Throwable;

/**
 * Contract for a driver exception.
 *
 * Driver exceptions provide the SQLSTATE of the driver
 * and the driver specific error code at the time the error occurred.
 */
interface DriverException extends Throwable
{
    /**
     * Returns the driver specific error code if available.
     *
     * Returns null if no driver specific error code is available
     * for the error raised by the driver.
     *
     * @return int|string|null
     */
    public function getErrorCode();

    /**
     * Returns the driver error message.
     *
     * @return string
     */
    public function getMessage();

    /**
     * Returns the SQLSTATE the driver was in at the time the error occurred.
     *
     * Returns null if the driver does not provide a SQLSTATE for the error occurred.
     *
     * @return string|null
     */
    public function getSQLState();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DriverException.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver;

use Throwable;

/**
 * Contract for a driver exception.
 *
 * Driver exceptions provide the SQLSTATE of the driver
 * and the driver specific error code at the time the error occurred.
 */
interface DriverException extends Throwable
{
    /**
     * Returns the driver specific error code if available.
     *
     * Returns null if no driver specific error code is available
     * for the error raised by the driver.
     *
     * @return int|string|null
     */
    public function getErrorCode();

    /**
     * Returns the driver error message.
     *
     * @return string
     */
    public function getMessage();

    /**
     * Returns the SQLSTATE the driver was in at the time the error occurred.
     *
     * Returns null if the driver does not provide a SQLSTATE for the error occurred.
     *
     * @return string|null
     */
    public function getSQLState();
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DriverException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\DriverException.php");
    }
}
