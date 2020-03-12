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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/PoolingShardManager.php */
class __TwigTemplate_3df214a2c1b1cc2523a967e2484b87b3d0c633566d51da8e10008bca3a643b3f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/PoolingShardManager.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Sharding;

use Doctrine\\DBAL\\Sharding\\ShardChoser\\ShardChoser;
use RuntimeException;

/**
 * Shard Manager for the Connection Pooling Shard Strategy
 */
class PoolingShardManager implements ShardManager
{
    /** @var PoolingShardConnection */
    private \$conn;

    /** @var ShardChoser */
    private \$choser;

    /** @var string|null */
    private \$currentDistributionValue;

    public function __construct(PoolingShardConnection \$conn)
    {
        \$params       = \$conn->getParams();
        \$this->conn   = \$conn;
        \$this->choser = \$params['shardChoser'];
    }

    /**
     * {@inheritDoc}
     */
    public function selectGlobal()
    {
        \$this->conn->connect(0);
        \$this->currentDistributionValue = null;
    }

    /**
     * {@inheritDoc}
     */
    public function selectShard(\$distributionValue)
    {
        \$shardId = \$this->choser->pickShard(\$distributionValue, \$this->conn);
        \$this->conn->connect(\$shardId);
        \$this->currentDistributionValue = \$distributionValue;
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentDistributionValue()
    {
        return \$this->currentDistributionValue;
    }

    /**
     * {@inheritDoc}
     */
    public function getShards()
    {
        \$params = \$this->conn->getParams();
        \$shards = [];

        foreach (\$params['shards'] as \$shard) {
            \$shards[] = ['id' => \$shard['id']];
        }

        return \$shards;
    }

    /**
     * {@inheritDoc}
     *
     * @throws RuntimeException
     */
    public function queryAll(\$sql, array \$params, array \$types)
    {
        \$shards = \$this->getShards();
        if (! \$shards) {
            throw new RuntimeException('No shards found.');
        }

        \$result          = [];
        \$oldDistribution = \$this->getCurrentDistributionValue();

        foreach (\$shards as \$shard) {
            \$this->conn->connect(\$shard['id']);
            foreach (\$this->conn->fetchAll(\$sql, \$params, \$types) as \$row) {
                \$result[] = \$row;
            }
        }

        if (\$oldDistribution === null) {
            \$this->selectGlobal();
        } else {
            \$this->selectShard(\$oldDistribution);
        }

        return \$result;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/PoolingShardManager.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Sharding;

use Doctrine\\DBAL\\Sharding\\ShardChoser\\ShardChoser;
use RuntimeException;

/**
 * Shard Manager for the Connection Pooling Shard Strategy
 */
class PoolingShardManager implements ShardManager
{
    /** @var PoolingShardConnection */
    private \$conn;

    /** @var ShardChoser */
    private \$choser;

    /** @var string|null */
    private \$currentDistributionValue;

    public function __construct(PoolingShardConnection \$conn)
    {
        \$params       = \$conn->getParams();
        \$this->conn   = \$conn;
        \$this->choser = \$params['shardChoser'];
    }

    /**
     * {@inheritDoc}
     */
    public function selectGlobal()
    {
        \$this->conn->connect(0);
        \$this->currentDistributionValue = null;
    }

    /**
     * {@inheritDoc}
     */
    public function selectShard(\$distributionValue)
    {
        \$shardId = \$this->choser->pickShard(\$distributionValue, \$this->conn);
        \$this->conn->connect(\$shardId);
        \$this->currentDistributionValue = \$distributionValue;
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentDistributionValue()
    {
        return \$this->currentDistributionValue;
    }

    /**
     * {@inheritDoc}
     */
    public function getShards()
    {
        \$params = \$this->conn->getParams();
        \$shards = [];

        foreach (\$params['shards'] as \$shard) {
            \$shards[] = ['id' => \$shard['id']];
        }

        return \$shards;
    }

    /**
     * {@inheritDoc}
     *
     * @throws RuntimeException
     */
    public function queryAll(\$sql, array \$params, array \$types)
    {
        \$shards = \$this->getShards();
        if (! \$shards) {
            throw new RuntimeException('No shards found.');
        }

        \$result          = [];
        \$oldDistribution = \$this->getCurrentDistributionValue();

        foreach (\$shards as \$shard) {
            \$this->conn->connect(\$shard['id']);
            foreach (\$this->conn->fetchAll(\$sql, \$params, \$types) as \$row) {
                \$result[] = \$row;
            }
        }

        if (\$oldDistribution === null) {
            \$this->selectGlobal();
        } else {
            \$this->selectShard(\$oldDistribution);
        }

        return \$result;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/PoolingShardManager.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Sharding\\PoolingShardManager.php");
    }
}
