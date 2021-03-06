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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/NativeQuery.php */
class __TwigTemplate_3bf9cec44db5cea33b10676b0ddac003f0f184a1d1121cb305aa58d0cf2c42a4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/NativeQuery.php"));

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

namespace Doctrine\\ORM;

/**
 * Represents a native SQL query.
 *
 * @author Roman Borschel <roman@code-factory.org>
 * @since 2.0
 */
final class NativeQuery extends AbstractQuery
{
    /**
     * @var string
     */
    private \$_sql;

    /**
     * Sets the SQL of the query.
     *
     * @param string \$sql
     *
     * @return NativeQuery This query instance.
     */
    public function setSQL(\$sql)
    {
        \$this->_sql = \$sql;

        return \$this;
    }

    /**
     * Gets the SQL query.
     *
     * @return mixed The built SQL query or an array of all SQL queries.
     *
     * @override
     */
    public function getSQL()
    {
        return \$this->_sql;
    }

    /**
     * {@inheritdoc}
     */
    protected function _doExecute()
    {
        \$parameters = [];
        \$types      = [];

        foreach (\$this->getParameters() as \$parameter) {
            \$name  = \$parameter->getName();
            \$value = \$this->processParameterValue(\$parameter->getValue());
            \$type  = (\$parameter->getValue() === \$value)
                ? \$parameter->getType()
                : Query\\ParameterTypeInferer::inferType(\$value);

            \$parameters[\$name] = \$value;
            \$types[\$name]      = \$type;
        }

        if (\$parameters && is_int(key(\$parameters))) {
            ksort(\$parameters);
            ksort(\$types);

            \$parameters = array_values(\$parameters);
            \$types      = array_values(\$types);
        }

        return \$this->_em->getConnection()->executeQuery(
            \$this->_sql, \$parameters, \$types, \$this->_queryCacheProfile
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/NativeQuery.php";
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

namespace Doctrine\\ORM;

/**
 * Represents a native SQL query.
 *
 * @author Roman Borschel <roman@code-factory.org>
 * @since 2.0
 */
final class NativeQuery extends AbstractQuery
{
    /**
     * @var string
     */
    private \$_sql;

    /**
     * Sets the SQL of the query.
     *
     * @param string \$sql
     *
     * @return NativeQuery This query instance.
     */
    public function setSQL(\$sql)
    {
        \$this->_sql = \$sql;

        return \$this;
    }

    /**
     * Gets the SQL query.
     *
     * @return mixed The built SQL query or an array of all SQL queries.
     *
     * @override
     */
    public function getSQL()
    {
        return \$this->_sql;
    }

    /**
     * {@inheritdoc}
     */
    protected function _doExecute()
    {
        \$parameters = [];
        \$types      = [];

        foreach (\$this->getParameters() as \$parameter) {
            \$name  = \$parameter->getName();
            \$value = \$this->processParameterValue(\$parameter->getValue());
            \$type  = (\$parameter->getValue() === \$value)
                ? \$parameter->getType()
                : Query\\ParameterTypeInferer::inferType(\$value);

            \$parameters[\$name] = \$value;
            \$types[\$name]      = \$type;
        }

        if (\$parameters && is_int(key(\$parameters))) {
            ksort(\$parameters);
            ksort(\$types);

            \$parameters = array_values(\$parameters);
            \$types      = array_values(\$types);
        }

        return \$this->_em->getConnection()->executeQuery(
            \$this->_sql, \$parameters, \$types, \$this->_queryCacheProfile
        );
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/NativeQuery.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\NativeQuery.php");
    }
}
