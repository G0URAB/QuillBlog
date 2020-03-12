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

/* @app/vendor/doctrine/doctrine-bundle/Resources/config/dbal.xml */
class __TwigTemplate_b1481b078ddb7e0d6ccfc178d2955b176f9db43b91f1b1d6dce7b7d149647f57 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/Resources/config/dbal.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"doctrine.dbal.logger.chain.class\">Doctrine\\DBAL\\Logging\\LoggerChain</parameter>
        <parameter key=\"doctrine.dbal.logger.profiling.class\">Doctrine\\DBAL\\Logging\\DebugStack</parameter>
        <parameter key=\"doctrine.dbal.logger.class\">Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger</parameter>
        <parameter key=\"doctrine.dbal.configuration.class\">Doctrine\\DBAL\\Configuration</parameter>
        <parameter key=\"doctrine.data_collector.class\">Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector</parameter>
        <parameter key=\"doctrine.dbal.connection.event_manager.class\">Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager</parameter>
        <parameter key=\"doctrine.dbal.connection_factory.class\">Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory</parameter>
        <parameter key=\"doctrine.dbal.events.mysql_session_init.class\">Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit</parameter>
        <parameter key=\"doctrine.dbal.events.oracle_session_init.class\">Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit</parameter>
        <parameter key=\"doctrine.class\">Doctrine\\Bundle\\DoctrineBundle\\Registry</parameter>
        <parameter key=\"doctrine.entity_managers\" type=\"collection\"></parameter>
        <parameter key=\"doctrine.default_entity_manager\"></parameter>
    </parameters>

    <services>
        <service id=\"Doctrine\\DBAL\\Driver\\Connection\" alias=\"database_connection\" public=\"false\" />
        <service id=\"Doctrine\\DBAL\\Connection\" alias=\"database_connection\" public=\"false\" />

        <service id=\"doctrine.dbal.logger.chain\" class=\"%doctrine.dbal.logger.chain.class%\" public=\"false\" abstract=\"true\">
            <call method=\"addLogger\">
                <argument type=\"service\" id=\"doctrine.dbal.logger\" />
            </call>
        </service>

        <service id=\"doctrine.dbal.logger.profiling\" class=\"%doctrine.dbal.logger.profiling.class%\" public=\"false\" abstract=\"true\" />
        <service id=\"doctrine.dbal.logger.backtrace\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\Logging\\BacktraceLogger\" public=\"false\" abstract=\"true\" />

        <service id=\"doctrine.dbal.logger\" class=\"%doctrine.dbal.logger.class%\" public=\"false\">
            <tag name=\"monolog.logger\" channel=\"doctrine\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"null\" />
        </service>

        <service id=\"data_collector.doctrine\" class=\"%doctrine.data_collector.class%\" public=\"false\">
            <tag name=\"data_collector\" template=\"@Doctrine/Collector/db.html.twig\" id=\"db\" priority=\"250\" />
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <service id=\"doctrine.dbal.connection_factory\" class=\"%doctrine.dbal.connection_factory.class%\">
            <argument>%doctrine.dbal.connection_factory.types%</argument>
        </service>

        <service id=\"doctrine.dbal.connection\" class=\"Doctrine\\DBAL\\Connection\" abstract=\"true\">
            <factory service=\"doctrine.dbal.connection_factory\" method=\"createConnection\" />
        </service>

        <service id=\"doctrine.dbal.connection.event_manager\" class=\"%doctrine.dbal.connection.event_manager.class%\" public=\"false\" abstract=\"true\">
            <argument type=\"service\" id=\"service_container\" />
        </service>

        <service id=\"doctrine.dbal.connection.configuration\" class=\"%doctrine.dbal.configuration.class%\" public=\"false\" abstract=\"true\" />

        <service id=\"doctrine\" class=\"%doctrine.class%\" public=\"true\">
            <argument type=\"service\" id=\"service_container\" />
            <argument>%doctrine.connections%</argument>
            <argument>%doctrine.entity_managers%</argument>
            <argument>%doctrine.default_connection%</argument>
            <argument>%doctrine.default_entity_manager%</argument>
            <tag name=\"kernel.reset\" method=\"reset\" />
        </service>
        <service id=\"Doctrine\\Persistence\\ManagerRegistry\" alias=\"doctrine\" public=\"false\" />
        <service id=\"Doctrine\\Common\\Persistence\\ManagerRegistry\" alias=\"doctrine\" public=\"false\" />

        <service id=\"doctrine.twig.doctrine_extension\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Twig\\DoctrineExtension\" public=\"false\">
            <tag name=\"twig.extension\" />
        </service>

        <service id=\"doctrine.dbal.schema_asset_filter_manager\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\SchemaAssetsFilterManager\" public=\"false\" abstract=\"true\">
            <!-- schema assets filters -->
        </service>

        <service id=\"doctrine.dbal.well_known_schema_asset_filter\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\BlacklistSchemaAssetFilter\" public=\"false\">
            <argument type=\"collection\" />
        </service>

        <!-- commands -->
        <service id=\"doctrine.database_create_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand\">
            <argument type=\"service\" id=\"doctrine\" />

            <tag name=\"console.command\" command=\"doctrine:database:create\" />
        </service>

        <service id=\"doctrine.database_drop_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand\">
            <argument type=\"service\" id=\"doctrine\" />

            <tag name=\"console.command\" command=\"doctrine:database:drop\" />
        </service>

        <service id=\"doctrine.database_import_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:database:import\" />
        </service>

        <service id=\"doctrine.query_sql_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:query:sql\" />
        </service>

    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/Resources/config/dbal.xml";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"doctrine.dbal.logger.chain.class\">Doctrine\\DBAL\\Logging\\LoggerChain</parameter>
        <parameter key=\"doctrine.dbal.logger.profiling.class\">Doctrine\\DBAL\\Logging\\DebugStack</parameter>
        <parameter key=\"doctrine.dbal.logger.class\">Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger</parameter>
        <parameter key=\"doctrine.dbal.configuration.class\">Doctrine\\DBAL\\Configuration</parameter>
        <parameter key=\"doctrine.data_collector.class\">Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector</parameter>
        <parameter key=\"doctrine.dbal.connection.event_manager.class\">Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager</parameter>
        <parameter key=\"doctrine.dbal.connection_factory.class\">Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory</parameter>
        <parameter key=\"doctrine.dbal.events.mysql_session_init.class\">Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit</parameter>
        <parameter key=\"doctrine.dbal.events.oracle_session_init.class\">Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit</parameter>
        <parameter key=\"doctrine.class\">Doctrine\\Bundle\\DoctrineBundle\\Registry</parameter>
        <parameter key=\"doctrine.entity_managers\" type=\"collection\"></parameter>
        <parameter key=\"doctrine.default_entity_manager\"></parameter>
    </parameters>

    <services>
        <service id=\"Doctrine\\DBAL\\Driver\\Connection\" alias=\"database_connection\" public=\"false\" />
        <service id=\"Doctrine\\DBAL\\Connection\" alias=\"database_connection\" public=\"false\" />

        <service id=\"doctrine.dbal.logger.chain\" class=\"%doctrine.dbal.logger.chain.class%\" public=\"false\" abstract=\"true\">
            <call method=\"addLogger\">
                <argument type=\"service\" id=\"doctrine.dbal.logger\" />
            </call>
        </service>

        <service id=\"doctrine.dbal.logger.profiling\" class=\"%doctrine.dbal.logger.profiling.class%\" public=\"false\" abstract=\"true\" />
        <service id=\"doctrine.dbal.logger.backtrace\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\Logging\\BacktraceLogger\" public=\"false\" abstract=\"true\" />

        <service id=\"doctrine.dbal.logger\" class=\"%doctrine.dbal.logger.class%\" public=\"false\">
            <tag name=\"monolog.logger\" channel=\"doctrine\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"null\" />
        </service>

        <service id=\"data_collector.doctrine\" class=\"%doctrine.data_collector.class%\" public=\"false\">
            <tag name=\"data_collector\" template=\"@Doctrine/Collector/db.html.twig\" id=\"db\" priority=\"250\" />
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <service id=\"doctrine.dbal.connection_factory\" class=\"%doctrine.dbal.connection_factory.class%\">
            <argument>%doctrine.dbal.connection_factory.types%</argument>
        </service>

        <service id=\"doctrine.dbal.connection\" class=\"Doctrine\\DBAL\\Connection\" abstract=\"true\">
            <factory service=\"doctrine.dbal.connection_factory\" method=\"createConnection\" />
        </service>

        <service id=\"doctrine.dbal.connection.event_manager\" class=\"%doctrine.dbal.connection.event_manager.class%\" public=\"false\" abstract=\"true\">
            <argument type=\"service\" id=\"service_container\" />
        </service>

        <service id=\"doctrine.dbal.connection.configuration\" class=\"%doctrine.dbal.configuration.class%\" public=\"false\" abstract=\"true\" />

        <service id=\"doctrine\" class=\"%doctrine.class%\" public=\"true\">
            <argument type=\"service\" id=\"service_container\" />
            <argument>%doctrine.connections%</argument>
            <argument>%doctrine.entity_managers%</argument>
            <argument>%doctrine.default_connection%</argument>
            <argument>%doctrine.default_entity_manager%</argument>
            <tag name=\"kernel.reset\" method=\"reset\" />
        </service>
        <service id=\"Doctrine\\Persistence\\ManagerRegistry\" alias=\"doctrine\" public=\"false\" />
        <service id=\"Doctrine\\Common\\Persistence\\ManagerRegistry\" alias=\"doctrine\" public=\"false\" />

        <service id=\"doctrine.twig.doctrine_extension\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Twig\\DoctrineExtension\" public=\"false\">
            <tag name=\"twig.extension\" />
        </service>

        <service id=\"doctrine.dbal.schema_asset_filter_manager\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\SchemaAssetsFilterManager\" public=\"false\" abstract=\"true\">
            <!-- schema assets filters -->
        </service>

        <service id=\"doctrine.dbal.well_known_schema_asset_filter\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Dbal\\BlacklistSchemaAssetFilter\" public=\"false\">
            <argument type=\"collection\" />
        </service>

        <!-- commands -->
        <service id=\"doctrine.database_create_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand\">
            <argument type=\"service\" id=\"doctrine\" />

            <tag name=\"console.command\" command=\"doctrine:database:create\" />
        </service>

        <service id=\"doctrine.database_drop_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand\">
            <argument type=\"service\" id=\"doctrine\" />

            <tag name=\"console.command\" command=\"doctrine:database:drop\" />
        </service>

        <service id=\"doctrine.database_import_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:database:import\" />
        </service>

        <service id=\"doctrine.query_sql_command\" class=\"Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand\">
            <tag name=\"console.command\" command=\"doctrine:query:sql\" />
        </service>

    </services>
</container>
", "@app/vendor/doctrine/doctrine-bundle/Resources/config/dbal.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\Resources\\config\\dbal.xml");
    }
}
