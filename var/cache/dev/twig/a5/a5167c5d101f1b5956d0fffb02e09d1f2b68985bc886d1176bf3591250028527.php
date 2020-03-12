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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardChoser/MultiTenantShardChoser.php */
class __TwigTemplate_7cacbdee51dae5dfd3ef28c3ba5e983b5adce02b286c4eb9a3df299ee8ed3885 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardChoser/MultiTenantShardChoser.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Sharding\\ShardChoser;

use Doctrine\\DBAL\\Sharding\\PoolingShardConnection;

/**
 * The MultiTenant Shard choser assumes that the distribution value directly
 * maps to the shard id.
 */
class MultiTenantShardChoser implements ShardChoser
{
    /**
     * {@inheritdoc}
     */
    public function pickShard(\$distributionValue, PoolingShardConnection \$conn)
    {
        return \$distributionValue;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardChoser/MultiTenantShardChoser.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Sharding\\ShardChoser;

use Doctrine\\DBAL\\Sharding\\PoolingShardConnection;

/**
 * The MultiTenant Shard choser assumes that the distribution value directly
 * maps to the shard id.
 */
class MultiTenantShardChoser implements ShardChoser
{
    /**
     * {@inheritdoc}
     */
    public function pickShard(\$distributionValue, PoolingShardConnection \$conn)
    {
        return \$distributionValue;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardChoser/MultiTenantShardChoser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Sharding\\ShardChoser\\MultiTenantShardChoser.php");
    }
}
