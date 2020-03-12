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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOException.php */
class __TwigTemplate_33c0179054a2cb3ca744deb0411d0d9dae0c214ad6a6477082ff6b49998f5aa1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

/**
 * Tiny wrapper for PDOException instances to implement the {@link DriverException} interface.
 */
class PDOException extends \\PDOException implements DriverException
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
     * @param \\PDOException \$exception The PDO exception to wrap.
     */
    public function __construct(\\PDOException \$exception)
    {
        parent::__construct(\$exception->getMessage(), 0, \$exception);

        \$this->code      = \$exception->getCode();
        \$this->errorInfo = \$exception->errorInfo;
        \$this->errorCode = \$exception->errorInfo[1] ?? \$exception->getCode();
        \$this->sqlState  = \$exception->errorInfo[0] ?? \$exception->getCode();
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
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOException.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver;

/**
 * Tiny wrapper for PDOException instances to implement the {@link DriverException} interface.
 */
class PDOException extends \\PDOException implements DriverException
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
     * @param \\PDOException \$exception The PDO exception to wrap.
     */
    public function __construct(\\PDOException \$exception)
    {
        parent::__construct(\$exception->getMessage(), 0, \$exception);

        \$this->code      = \$exception->getCode();
        \$this->errorInfo = \$exception->errorInfo;
        \$this->errorCode = \$exception->errorInfo[1] ?? \$exception->getCode();
        \$this->sqlState  = \$exception->errorInfo[0] ?? \$exception->getCode();
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
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\PDOException.php");
    }
}
