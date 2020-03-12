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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhereKeywords.php */
class __TwigTemplate_fa5ae5c6bac5b40b1196b3a5a1b9c4630bcc018b0aeff22970491220bc095dda extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhereKeywords.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

/**
 * SAP Sybase SQL Anywhere 10 reserved keywords list.
 */
class SQLAnywhereKeywords extends KeywordList
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'SQLAnywhere';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://infocenter.sybase.com/help/topic/com.sybase.dbrfen10/pdf/dbrfen10.pdf?noframes=true
     */
    protected function getKeywords()
    {
        return [
            'ADD',
            'ALL',
            'ALTER',
            'AND',
            'ANY',
            'AS',
            'ASC',
            'ATTACH',
            'BACKUP',
            'BEGIN',
            'BETWEEN',
            'BIGINT',
            'BINARY',
            'BIT',
            'BOTTOM',
            'BREAK',
            'BY',
            'CALL',
            'CAPABILITY',
            'CASCADE',
            'CASE',
            'CAST',
            'CHAR',
            'CHAR_CONVERT',
            'CHARACTER',
            'CHECK',
            'CHECKPOINT',
            'CLOSE',
            'COMMENT',
            'COMMIT',
            'COMPRESSED',
            'CONFLICT',
            'CONNECT',
            'CONSTRAINT',
            'CONTAINS',
            'CONTINUE',
            'CONVERT',
            'CREATE',
            'CROSS',
            'CUBE',
            'CURRENT',
            'CURRENT_TIMESTAMP',
            'CURRENT_USER',
            'CURSOR',
            'DATE',
            'DBSPACE',
            'DEALLOCATE',
            'DEC',
            'DECIMAL',
            'DECLARE',
            'DEFAULT',
            'DELETE',
            'DELETING',
            'DESC',
            'DETACH',
            'DISTINCT',
            'DO',
            'DOUBLE',
            'DROP',
            'DYNAMIC',
            'ELSE',
            'ELSEIF',
            'ENCRYPTED',
            'END',
            'ENDIF',
            'ESCAPE',
            'EXCEPT',
            'EXCEPTION',
            'EXEC',
            'EXECUTE',
            'EXISTING',
            'EXISTS',
            'EXTERNLOGIN',
            'FETCH',
            'FIRST',
            'FLOAT',
            'FOR',
            'FORCE',
            'FOREIGN',
            'FORWARD',
            'FROM',
            'FULL',
            'GOTO',
            'GRANT',
            'GROUP',
            'HAVING',
            'HOLDLOCK',
            'IDENTIFIED',
            'IF',
            'IN',
            'INDEX',
            'INDEX_LPAREN',
            'INNER',
            'INOUT',
            'INSENSITIVE',
            'INSERT',
            'INSERTING',
            'INSTALL',
            'INSTEAD',
            'INT',
            'INTEGER',
            'INTEGRATED',
            'INTERSECT',
            'INTO',
            'IQ',
            'IS',
            'ISOLATION',
            'JOIN',
            'KERBEROS',
            'KEY',
            'LATERAL',
            'LEFT',
            'LIKE',
            'LOCK',
            'LOGIN',
            'LONG',
            'MATCH',
            'MEMBERSHIP',
            'MESSAGE',
            'MODE',
            'MODIFY',
            'NATURAL',
            'NCHAR',
            'NEW',
            'NO',
            'NOHOLDLOCK',
            'NOT',
            'NOTIFY',
            'NULL',
            'NUMERIC',
            'NVARCHAR',
            'OF',
            'OFF',
            'ON',
            'OPEN',
            'OPTION',
            'OPTIONS',
            'OR',
            'ORDER',
            'OTHERS',
            'OUT',
            'OUTER',
            'OVER',
            'PASSTHROUGH',
            'PRECISION',
            'PREPARE',
            'PRIMARY',
            'PRINT',
            'PRIVILEGES',
            'PROC',
            'PROCEDURE',
            'PUBLICATION',
            'RAISERROR',
            'READTEXT',
            'REAL',
            'REFERENCE',
            'REFERENCES',
            'REFRESH',
            'RELEASE',
            'REMOTE',
            'REMOVE',
            'RENAME',
            'REORGANIZE',
            'RESOURCE',
            'RESTORE',
            'RESTRICT',
            'RETURN',
            'REVOKE',
            'RIGHT',
            'ROLLBACK',
            'ROLLUP',
            'SAVE',
            'SAVEPOINT',
            'SCROLL',
            'SELECT',
            'SENSITIVE',
            'SESSION',
            'SET',
            'SETUSER',
            'SHARE',
            'SMALLINT',
            'SOME',
            'SQLCODE',
            'SQLSTATE',
            'START',
            'STOP',
            'SUBTRANS',
            'SUBTRANSACTION',
            'SYNCHRONIZE',
            'SYNTAX_ERROR',
            'TABLE',
            'TEMPORARY',
            'THEN',
            'TIME',
            'TIMESTAMP',
            'TINYINT',
            'TO',
            'TOP',
            'TRAN',
            'TRIGGER',
            'TRUNCATE',
            'TSEQUAL',
            'UNBOUNDED',
            'UNION',
            'UNIQUE',
            'UNIQUEIDENTIFIER',
            'UNKNOWN',
            'UNSIGNED',
            'UPDATE',
            'UPDATING',
            'USER',
            'USING',
            'VALIDATE',
            'VALUES',
            'VARBINARY',
            'VARBIT',
            'VARCHAR',
            'VARIABLE',
            'VARYING',
            'VIEW',
            'WAIT',
            'WAITFOR',
            'WHEN',
            'WHERE',
            'WHILE',
            'WINDOW',
            'WITH',
            'WITH_CUBE',
            'WITH_LPAREN',
            'WITH_ROLLUP',
            'WITHIN',
            'WORK',
            'WRITETEXT',
            'XML',
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhereKeywords.php";
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
 * SAP Sybase SQL Anywhere 10 reserved keywords list.
 */
class SQLAnywhereKeywords extends KeywordList
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'SQLAnywhere';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://infocenter.sybase.com/help/topic/com.sybase.dbrfen10/pdf/dbrfen10.pdf?noframes=true
     */
    protected function getKeywords()
    {
        return [
            'ADD',
            'ALL',
            'ALTER',
            'AND',
            'ANY',
            'AS',
            'ASC',
            'ATTACH',
            'BACKUP',
            'BEGIN',
            'BETWEEN',
            'BIGINT',
            'BINARY',
            'BIT',
            'BOTTOM',
            'BREAK',
            'BY',
            'CALL',
            'CAPABILITY',
            'CASCADE',
            'CASE',
            'CAST',
            'CHAR',
            'CHAR_CONVERT',
            'CHARACTER',
            'CHECK',
            'CHECKPOINT',
            'CLOSE',
            'COMMENT',
            'COMMIT',
            'COMPRESSED',
            'CONFLICT',
            'CONNECT',
            'CONSTRAINT',
            'CONTAINS',
            'CONTINUE',
            'CONVERT',
            'CREATE',
            'CROSS',
            'CUBE',
            'CURRENT',
            'CURRENT_TIMESTAMP',
            'CURRENT_USER',
            'CURSOR',
            'DATE',
            'DBSPACE',
            'DEALLOCATE',
            'DEC',
            'DECIMAL',
            'DECLARE',
            'DEFAULT',
            'DELETE',
            'DELETING',
            'DESC',
            'DETACH',
            'DISTINCT',
            'DO',
            'DOUBLE',
            'DROP',
            'DYNAMIC',
            'ELSE',
            'ELSEIF',
            'ENCRYPTED',
            'END',
            'ENDIF',
            'ESCAPE',
            'EXCEPT',
            'EXCEPTION',
            'EXEC',
            'EXECUTE',
            'EXISTING',
            'EXISTS',
            'EXTERNLOGIN',
            'FETCH',
            'FIRST',
            'FLOAT',
            'FOR',
            'FORCE',
            'FOREIGN',
            'FORWARD',
            'FROM',
            'FULL',
            'GOTO',
            'GRANT',
            'GROUP',
            'HAVING',
            'HOLDLOCK',
            'IDENTIFIED',
            'IF',
            'IN',
            'INDEX',
            'INDEX_LPAREN',
            'INNER',
            'INOUT',
            'INSENSITIVE',
            'INSERT',
            'INSERTING',
            'INSTALL',
            'INSTEAD',
            'INT',
            'INTEGER',
            'INTEGRATED',
            'INTERSECT',
            'INTO',
            'IQ',
            'IS',
            'ISOLATION',
            'JOIN',
            'KERBEROS',
            'KEY',
            'LATERAL',
            'LEFT',
            'LIKE',
            'LOCK',
            'LOGIN',
            'LONG',
            'MATCH',
            'MEMBERSHIP',
            'MESSAGE',
            'MODE',
            'MODIFY',
            'NATURAL',
            'NCHAR',
            'NEW',
            'NO',
            'NOHOLDLOCK',
            'NOT',
            'NOTIFY',
            'NULL',
            'NUMERIC',
            'NVARCHAR',
            'OF',
            'OFF',
            'ON',
            'OPEN',
            'OPTION',
            'OPTIONS',
            'OR',
            'ORDER',
            'OTHERS',
            'OUT',
            'OUTER',
            'OVER',
            'PASSTHROUGH',
            'PRECISION',
            'PREPARE',
            'PRIMARY',
            'PRINT',
            'PRIVILEGES',
            'PROC',
            'PROCEDURE',
            'PUBLICATION',
            'RAISERROR',
            'READTEXT',
            'REAL',
            'REFERENCE',
            'REFERENCES',
            'REFRESH',
            'RELEASE',
            'REMOTE',
            'REMOVE',
            'RENAME',
            'REORGANIZE',
            'RESOURCE',
            'RESTORE',
            'RESTRICT',
            'RETURN',
            'REVOKE',
            'RIGHT',
            'ROLLBACK',
            'ROLLUP',
            'SAVE',
            'SAVEPOINT',
            'SCROLL',
            'SELECT',
            'SENSITIVE',
            'SESSION',
            'SET',
            'SETUSER',
            'SHARE',
            'SMALLINT',
            'SOME',
            'SQLCODE',
            'SQLSTATE',
            'START',
            'STOP',
            'SUBTRANS',
            'SUBTRANSACTION',
            'SYNCHRONIZE',
            'SYNTAX_ERROR',
            'TABLE',
            'TEMPORARY',
            'THEN',
            'TIME',
            'TIMESTAMP',
            'TINYINT',
            'TO',
            'TOP',
            'TRAN',
            'TRIGGER',
            'TRUNCATE',
            'TSEQUAL',
            'UNBOUNDED',
            'UNION',
            'UNIQUE',
            'UNIQUEIDENTIFIER',
            'UNKNOWN',
            'UNSIGNED',
            'UPDATE',
            'UPDATING',
            'USER',
            'USING',
            'VALIDATE',
            'VALUES',
            'VARBINARY',
            'VARBIT',
            'VARCHAR',
            'VARIABLE',
            'VARYING',
            'VIEW',
            'WAIT',
            'WAITFOR',
            'WHEN',
            'WHERE',
            'WHILE',
            'WINDOW',
            'WITH',
            'WITH_CUBE',
            'WITH_LPAREN',
            'WITH_ROLLUP',
            'WITHIN',
            'WORK',
            'WRITETEXT',
            'XML',
        ];
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhereKeywords.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Platforms\\Keywords\\SQLAnywhereKeywords.php");
    }
}
