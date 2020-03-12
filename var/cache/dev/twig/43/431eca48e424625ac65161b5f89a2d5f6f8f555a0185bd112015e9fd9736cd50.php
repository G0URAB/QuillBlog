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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2005Platform.php */
class __TwigTemplate_ca1f590f4ecfecbd5139949beda1c5c90f38bbee400621a6531c5ea46f7d511d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2005Platform.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms;

/**
 * Platform to ensure compatibility of Doctrine with Microsoft SQL Server 2005 version and
 * higher.
 *
 * Differences to SQL Server 2008 are:
 *
 * - DATETIME2 datatype does not exist, only DATETIME which has a precision of
 *   3. This is not supported by PHP DateTime, so we are emulating it by
 *   setting .000 manually.
 * - Starting with SQLServer2005 VARCHAR(MAX), VARBINARY(MAX) and
 *   NVARCHAR(max) replace the old TEXT, NTEXT and IMAGE types. See
 *   {@link http://www.sql-server-helper.com/faq/sql-server-2005-varchar-max-p01.aspx}
 *   for more information.
 */
class SQLServer2005Platform extends SQLServerPlatform
{
    /**
     * {@inheritDoc}
     */
    public function supportsLimitOffset()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function getClobTypeDeclarationSQL(array \$field)
    {
        return 'VARCHAR(MAX)';
    }

    /**
     * {@inheritdoc}
     *
     * Returns Microsoft SQL Server 2005 specific keywords class
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\SQLServer2005Keywords::class;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2005Platform.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms;

/**
 * Platform to ensure compatibility of Doctrine with Microsoft SQL Server 2005 version and
 * higher.
 *
 * Differences to SQL Server 2008 are:
 *
 * - DATETIME2 datatype does not exist, only DATETIME which has a precision of
 *   3. This is not supported by PHP DateTime, so we are emulating it by
 *   setting .000 manually.
 * - Starting with SQLServer2005 VARCHAR(MAX), VARBINARY(MAX) and
 *   NVARCHAR(max) replace the old TEXT, NTEXT and IMAGE types. See
 *   {@link http://www.sql-server-helper.com/faq/sql-server-2005-varchar-max-p01.aspx}
 *   for more information.
 */
class SQLServer2005Platform extends SQLServerPlatform
{
    /**
     * {@inheritDoc}
     */
    public function supportsLimitOffset()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function getClobTypeDeclarationSQL(array \$field)
    {
        return 'VARCHAR(MAX)';
    }

    /**
     * {@inheritdoc}
     *
     * Returns Microsoft SQL Server 2005 specific keywords class
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\SQLServer2005Keywords::class;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2005Platform.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Platforms\\SQLServer2005Platform.php");
    }
}
