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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/OracleKeywords.php */
class __TwigTemplate_f85beafb6b419223536978ed16574021ed54ac9579061f78960d34ebf71a045c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/OracleKeywords.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

/**
 * Oracle Keywordlist.
 */
class OracleKeywords extends KeywordList
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Oracle';
    }

    /**
     * {@inheritdoc}
     */
    protected function getKeywords()
    {
        return [
            'ACCESS',
            'ELSE',
            'MODIFY',
            'START',
            'ADD',
            'EXCLUSIVE',
            'NOAUDIT',
            'SELECT',
            'ALL',
            'EXISTS',
            'NOCOMPRESS',
            'SESSION',
            'ALTER',
            'FILE',
            'NOT',
            'SET',
            'AND',
            'FLOAT',
            'NOTFOUND ',
            'SHARE',
            'ANY',
            'FOR',
            'NOWAIT',
            'SIZE',
            'ARRAYLEN',
            'FROM',
            'NULL',
            'SMALLINT',
            'AS',
            'GRANT',
            'NUMBER',
            'SQLBUF',
            'ASC',
            'GROUP',
            'OF',
            'SUCCESSFUL',
            'AUDIT',
            'HAVING',
            'OFFLINE ',
            'SYNONYM',
            'BETWEEN',
            'IDENTIFIED',
            'ON',
            'SYSDATE',
            'BY',
            'IMMEDIATE',
            'ONLINE',
            'TABLE',
            'CHAR',
            'IN',
            'OPTION',
            'THEN',
            'CHECK',
            'INCREMENT',
            'OR',
            'TO',
            'CLUSTER',
            'INDEX',
            'ORDER',
            'TRIGGER',
            'COLUMN',
            'INITIAL',
            'PCTFREE',
            'UID',
            'COMMENT',
            'INSERT',
            'PRIOR',
            'UNION',
            'COMPRESS',
            'INTEGER',
            'PRIVILEGES',
            'UNIQUE',
            'CONNECT',
            'INTERSECT',
            'PUBLIC',
            'UPDATE',
            'CREATE',
            'INTO',
            'RAW',
            'USER',
            'CURRENT',
            'IS',
            'RENAME',
            'VALIDATE',
            'DATE',
            'LEVEL',
            'RESOURCE',
            'VALUES',
            'DECIMAL',
            'LIKE',
            'REVOKE',
            'VARCHAR',
            'DEFAULT',
            'LOCK',
            'ROW',
            'VARCHAR2',
            'DELETE',
            'LONG',
            'ROWID',
            'VIEW',
            'DESC',
            'MAXEXTENTS',
            'ROWLABEL',
            'WHENEVER',
            'DISTINCT',
            'MINUS',
            'ROWNUM',
            'WHERE',
            'DROP',
            'MODE',
            'ROWS',
            'WITH',
            'RANGE',
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/OracleKeywords.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

/**
 * Oracle Keywordlist.
 */
class OracleKeywords extends KeywordList
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Oracle';
    }

    /**
     * {@inheritdoc}
     */
    protected function getKeywords()
    {
        return [
            'ACCESS',
            'ELSE',
            'MODIFY',
            'START',
            'ADD',
            'EXCLUSIVE',
            'NOAUDIT',
            'SELECT',
            'ALL',
            'EXISTS',
            'NOCOMPRESS',
            'SESSION',
            'ALTER',
            'FILE',
            'NOT',
            'SET',
            'AND',
            'FLOAT',
            'NOTFOUND ',
            'SHARE',
            'ANY',
            'FOR',
            'NOWAIT',
            'SIZE',
            'ARRAYLEN',
            'FROM',
            'NULL',
            'SMALLINT',
            'AS',
            'GRANT',
            'NUMBER',
            'SQLBUF',
            'ASC',
            'GROUP',
            'OF',
            'SUCCESSFUL',
            'AUDIT',
            'HAVING',
            'OFFLINE ',
            'SYNONYM',
            'BETWEEN',
            'IDENTIFIED',
            'ON',
            'SYSDATE',
            'BY',
            'IMMEDIATE',
            'ONLINE',
            'TABLE',
            'CHAR',
            'IN',
            'OPTION',
            'THEN',
            'CHECK',
            'INCREMENT',
            'OR',
            'TO',
            'CLUSTER',
            'INDEX',
            'ORDER',
            'TRIGGER',
            'COLUMN',
            'INITIAL',
            'PCTFREE',
            'UID',
            'COMMENT',
            'INSERT',
            'PRIOR',
            'UNION',
            'COMPRESS',
            'INTEGER',
            'PRIVILEGES',
            'UNIQUE',
            'CONNECT',
            'INTERSECT',
            'PUBLIC',
            'UPDATE',
            'CREATE',
            'INTO',
            'RAW',
            'USER',
            'CURRENT',
            'IS',
            'RENAME',
            'VALIDATE',
            'DATE',
            'LEVEL',
            'RESOURCE',
            'VALUES',
            'DECIMAL',
            'LIKE',
            'REVOKE',
            'VARCHAR',
            'DEFAULT',
            'LOCK',
            'ROW',
            'VARCHAR2',
            'DELETE',
            'LONG',
            'ROWID',
            'VIEW',
            'DESC',
            'MAXEXTENTS',
            'ROWLABEL',
            'WHENEVER',
            'DISTINCT',
            'MINUS',
            'ROWNUM',
            'WHERE',
            'DROP',
            'MODE',
            'ROWS',
            'WITH',
            'RANGE',
        ];
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/OracleKeywords.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Platforms\\Keywords\\OracleKeywords.php");
    }
}
