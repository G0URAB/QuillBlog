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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/AbstractSqlExecutor.php */
class __TwigTemplate_f016ca505fec7ad0f8e4d1ad0d184c0b4b5a2125eedd30ffe6730bf89f0bb1d5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/AbstractSqlExecutor.php"));

        // line 1
        echo "<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Query\\Exec;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Cache\\QueryCacheProfile;

/**
 * Base class for SQL statement executors.
 *
 * @author      Roman Borschel <roman@code-factory.org>
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.doctrine-project.org
 * @since       2.0
 * @todo Rename: AbstractSQLExecutor
 */
abstract class AbstractSqlExecutor
{
    /**
     * @var array
     */
    protected \$_sqlStatements;

    /**
     * @var QueryCacheProfile
     */
    protected \$queryCacheProfile;

    /**
     * Gets the SQL statements that are executed by the executor.
     *
     * @return array  All the SQL update statements.
     */
    public function getSqlStatements()
    {
        return \$this->_sqlStatements;
    }

    /**
     * @param \\Doctrine\\DBAL\\Cache\\QueryCacheProfile \$qcp
     *
     * @return void
     */
    public function setQueryCacheProfile(QueryCacheProfile \$qcp)
    {
        \$this->queryCacheProfile = \$qcp;
    }

    /**
     * Do not use query cache
     *
     * @return void
     */
    public function removeQueryCacheProfile()
    {
        \$this->queryCacheProfile = null;
    }

    /**
     * Executes all sql statements.
     *
     * @param Connection \$conn   The database connection that is used to execute the queries.
     * @param array      \$params The parameters.
     * @param array      \$types  The parameter types.
     *
     * @return \\Doctrine\\DBAL\\Driver\\Statement
     */
    abstract public function execute(Connection \$conn, array \$params, array \$types);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/AbstractSqlExecutor.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Query\\Exec;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Cache\\QueryCacheProfile;

/**
 * Base class for SQL statement executors.
 *
 * @author      Roman Borschel <roman@code-factory.org>
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.doctrine-project.org
 * @since       2.0
 * @todo Rename: AbstractSQLExecutor
 */
abstract class AbstractSqlExecutor
{
    /**
     * @var array
     */
    protected \$_sqlStatements;

    /**
     * @var QueryCacheProfile
     */
    protected \$queryCacheProfile;

    /**
     * Gets the SQL statements that are executed by the executor.
     *
     * @return array  All the SQL update statements.
     */
    public function getSqlStatements()
    {
        return \$this->_sqlStatements;
    }

    /**
     * @param \\Doctrine\\DBAL\\Cache\\QueryCacheProfile \$qcp
     *
     * @return void
     */
    public function setQueryCacheProfile(QueryCacheProfile \$qcp)
    {
        \$this->queryCacheProfile = \$qcp;
    }

    /**
     * Do not use query cache
     *
     * @return void
     */
    public function removeQueryCacheProfile()
    {
        \$this->queryCacheProfile = null;
    }

    /**
     * Executes all sql statements.
     *
     * @param Connection \$conn   The database connection that is used to execute the queries.
     * @param array      \$params The parameters.
     * @param array      \$types  The parameter types.
     *
     * @return \\Doctrine\\DBAL\\Driver\\Statement
     */
    abstract public function execute(Connection \$conn, array \$params, array \$types);
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/AbstractSqlExecutor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Query\\Exec\\AbstractSqlExecutor.php");
    }
}
