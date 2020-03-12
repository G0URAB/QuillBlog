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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/MysqlSessionInit.php */
class __TwigTemplate_b463ade41f2f64fd505887b1b65e92737e8b5ad24e5c919f0be06c4a8850c22f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/MysqlSessionInit.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event\\Listeners;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\DBAL\\Event\\ConnectionEventArgs;
use Doctrine\\DBAL\\Events;

/**
 * MySQL Session Init Event Subscriber which allows to set the Client Encoding of the Connection.
 *
 * @deprecated Use \"charset\" option to PDO MySQL Connection instead.
 */
class MysqlSessionInit implements EventSubscriber
{
    /**
     * The charset.
     *
     * @var string
     */
    private \$charset;

    /**
     * The collation, or FALSE if no collation.
     *
     * @var string|bool
     */
    private \$collation;

    /**
     * Configure Charset and Collation options of MySQL Client for each Connection.
     *
     * @param string      \$charset   The charset.
     * @param string|bool \$collation The collation, or FALSE if no collation.
     */
    public function __construct(\$charset = 'utf8', \$collation = false)
    {
        \$this->charset   = \$charset;
        \$this->collation = \$collation;
    }

    /**
     * @return void
     */
    public function postConnect(ConnectionEventArgs \$args)
    {
        \$collation = \$this->collation ? ' COLLATE ' . \$this->collation : '';
        \$args->getConnection()->executeUpdate('SET NAMES ' . \$this->charset . \$collation);
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscribedEvents()
    {
        return [Events::postConnect];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/MysqlSessionInit.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Event\\Listeners;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\DBAL\\Event\\ConnectionEventArgs;
use Doctrine\\DBAL\\Events;

/**
 * MySQL Session Init Event Subscriber which allows to set the Client Encoding of the Connection.
 *
 * @deprecated Use \"charset\" option to PDO MySQL Connection instead.
 */
class MysqlSessionInit implements EventSubscriber
{
    /**
     * The charset.
     *
     * @var string
     */
    private \$charset;

    /**
     * The collation, or FALSE if no collation.
     *
     * @var string|bool
     */
    private \$collation;

    /**
     * Configure Charset and Collation options of MySQL Client for each Connection.
     *
     * @param string      \$charset   The charset.
     * @param string|bool \$collation The collation, or FALSE if no collation.
     */
    public function __construct(\$charset = 'utf8', \$collation = false)
    {
        \$this->charset   = \$charset;
        \$this->collation = \$collation;
    }

    /**
     * @return void
     */
    public function postConnect(ConnectionEventArgs \$args)
    {
        \$collation = \$this->collation ? ' COLLATE ' . \$this->collation : '';
        \$args->getConnection()->executeUpdate('SET NAMES ' . \$this->charset . \$collation);
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscribedEvents()
    {
        return [Events::postConnect];
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/MysqlSessionInit.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit.php");
    }
}
