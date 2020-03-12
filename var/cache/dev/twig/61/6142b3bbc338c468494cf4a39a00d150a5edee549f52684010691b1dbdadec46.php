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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php */
class __TwigTemplate_dd51c1a159c0a695f0156a979a365cdfd1300b897c08d67ff1148ed105297586 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Logging;

use function microtime;

/**
 * Includes executed SQLs in a Debug Stack.
 */
class DebugStack implements SQLLogger
{
    /**
     * Executed SQL queries.
     *
     * @var mixed[][]
     */
    public \$queries = [];

    /**
     * If Debug Stack is enabled (log queries) or not.
     *
     * @var bool
     */
    public \$enabled = true;

    /** @var float|null */
    public \$start = null;

    /** @var int */
    public \$currentQuery = 0;

    /**
     * {@inheritdoc}
     */
    public function startQuery(\$sql, ?array \$params = null, ?array \$types = null)
    {
        if (! \$this->enabled) {
            return;
        }

        \$this->start                          = microtime(true);
        \$this->queries[++\$this->currentQuery] = ['sql' => \$sql, 'params' => \$params, 'types' => \$types, 'executionMS' => 0];
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
        if (! \$this->enabled) {
            return;
        }

        \$this->queries[\$this->currentQuery]['executionMS'] = microtime(true) - \$this->start;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Logging;

use function microtime;

/**
 * Includes executed SQLs in a Debug Stack.
 */
class DebugStack implements SQLLogger
{
    /**
     * Executed SQL queries.
     *
     * @var mixed[][]
     */
    public \$queries = [];

    /**
     * If Debug Stack is enabled (log queries) or not.
     *
     * @var bool
     */
    public \$enabled = true;

    /** @var float|null */
    public \$start = null;

    /** @var int */
    public \$currentQuery = 0;

    /**
     * {@inheritdoc}
     */
    public function startQuery(\$sql, ?array \$params = null, ?array \$types = null)
    {
        if (! \$this->enabled) {
            return;
        }

        \$this->start                          = microtime(true);
        \$this->queries[++\$this->currentQuery] = ['sql' => \$sql, 'params' => \$params, 'types' => \$types, 'executionMS' => 0];
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
        if (! \$this->enabled) {
            return;
        }

        \$this->queries[\$this->currentQuery]['executionMS'] = microtime(true) - \$this->start;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\DebugStack.php");
    }
}
