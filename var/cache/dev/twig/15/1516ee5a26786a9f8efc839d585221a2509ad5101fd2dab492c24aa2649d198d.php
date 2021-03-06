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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php */
class __TwigTemplate_b39bf703fe2af58a6e24da354ff13ea392effa6357f27cd6ee5eef074124b576 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Logging;

/**
 * Chains multiple SQLLogger.
 */
class LoggerChain implements SQLLogger
{
    /** @var SQLLogger[] */
    private \$loggers = [];

    /**
     * @param SQLLogger[] \$loggers
     */
    public function __construct(array \$loggers = [])
    {
        \$this->loggers = \$loggers;
    }

    /**
     * Adds a logger in the chain.
     *
     * @deprecated Inject list of loggers via constructor instead
     *
     * @return void
     */
    public function addLogger(SQLLogger \$logger)
    {
        \$this->loggers[] = \$logger;
    }

    /**
     * {@inheritdoc}
     */
    public function startQuery(\$sql, ?array \$params = null, ?array \$types = null)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->startQuery(\$sql, \$params, \$types);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->stopQuery();
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Logging;

/**
 * Chains multiple SQLLogger.
 */
class LoggerChain implements SQLLogger
{
    /** @var SQLLogger[] */
    private \$loggers = [];

    /**
     * @param SQLLogger[] \$loggers
     */
    public function __construct(array \$loggers = [])
    {
        \$this->loggers = \$loggers;
    }

    /**
     * Adds a logger in the chain.
     *
     * @deprecated Inject list of loggers via constructor instead
     *
     * @return void
     */
    public function addLogger(SQLLogger \$logger)
    {
        \$this->loggers[] = \$logger;
    }

    /**
     * {@inheritdoc}
     */
    public function startQuery(\$sql, ?array \$params = null, ?array \$types = null)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->startQuery(\$sql, \$params, \$types);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->stopQuery();
        }
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\LoggerChain.php");
    }
}
