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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardingException.php */
class __TwigTemplate_02079a98b40c1b223a734bbfe5bc325818fc19dbc5fb09f7048701b0e9f9268b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardingException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Sharding;

use Doctrine\\DBAL\\DBALException;

/**
 * Sharding related Exceptions
 */
class ShardingException extends DBALException
{
    /**
     * @return \\Doctrine\\DBAL\\Sharding\\ShardingException
     */
    public static function notImplemented()
    {
        return new self('This functionality is not implemented with this sharding provider.', 1331557937);
    }

    /**
     * @return \\Doctrine\\DBAL\\Sharding\\ShardingException
     */
    public static function missingDefaultFederationName()
    {
        return new self('SQLAzure requires a federation name to be set during sharding configuration.', 1332141280);
    }

    /**
     * @return \\Doctrine\\DBAL\\Sharding\\ShardingException
     */
    public static function missingDefaultDistributionKey()
    {
        return new self('SQLAzure requires a distribution key to be set during sharding configuration.', 1332141329);
    }

    /**
     * @return \\Doctrine\\DBAL\\Sharding\\ShardingException
     */
    public static function activeTransaction()
    {
        return new self('Cannot switch shard during an active transaction.', 1332141766);
    }

    /**
     * @return \\Doctrine\\DBAL\\Sharding\\ShardingException
     */
    public static function noShardDistributionValue()
    {
        return new self('You have to specify a string or integer as shard distribution value.', 1332142103);
    }

    /**
     * @return \\Doctrine\\DBAL\\Sharding\\ShardingException
     */
    public static function missingDistributionType()
    {
        return new self(\"You have to specify a sharding distribution type such as 'integer', 'string', 'guid'.\");
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardingException.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Sharding;

use Doctrine\\DBAL\\DBALException;

/**
 * Sharding related Exceptions
 */
class ShardingException extends DBALException
{
    /**
     * @return \\Doctrine\\DBAL\\Sharding\\ShardingException
     */
    public static function notImplemented()
    {
        return new self('This functionality is not implemented with this sharding provider.', 1331557937);
    }

    /**
     * @return \\Doctrine\\DBAL\\Sharding\\ShardingException
     */
    public static function missingDefaultFederationName()
    {
        return new self('SQLAzure requires a federation name to be set during sharding configuration.', 1332141280);
    }

    /**
     * @return \\Doctrine\\DBAL\\Sharding\\ShardingException
     */
    public static function missingDefaultDistributionKey()
    {
        return new self('SQLAzure requires a distribution key to be set during sharding configuration.', 1332141329);
    }

    /**
     * @return \\Doctrine\\DBAL\\Sharding\\ShardingException
     */
    public static function activeTransaction()
    {
        return new self('Cannot switch shard during an active transaction.', 1332141766);
    }

    /**
     * @return \\Doctrine\\DBAL\\Sharding\\ShardingException
     */
    public static function noShardDistributionValue()
    {
        return new self('You have to specify a string or integer as shard distribution value.', 1332142103);
    }

    /**
     * @return \\Doctrine\\DBAL\\Sharding\\ShardingException
     */
    public static function missingDistributionType()
    {
        return new self(\"You have to specify a sharding distribution type such as 'integer', 'string', 'guid'.\");
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardingException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Sharding\\ShardingException.php");
    }
}
