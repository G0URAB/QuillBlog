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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ComparisonExpression.php */
class __TwigTemplate_92f0a7b6f04d3d3e16209896e07ba41c763e70e2aa83531bf5058ecc13fced2f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ComparisonExpression.php"));

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

namespace Doctrine\\ORM\\Query\\AST;

/**
 * ComparisonExpression ::= ArithmeticExpression ComparisonOperator ( QuantifiedExpression | ArithmeticExpression ) |
 *                          StringExpression ComparisonOperator (StringExpression | QuantifiedExpression) |
 *                          BooleanExpression (\"=\" | \"<>\" | \"!=\") (BooleanExpression | QuantifiedExpression) |
 *                          EnumExpression (\"=\" | \"<>\" | \"!=\") (EnumExpression | QuantifiedExpression) |
 *                          DatetimeExpression ComparisonOperator (DatetimeExpression | QuantifiedExpression) |
 *                          EntityExpression (\"=\" | \"<>\") (EntityExpression | QuantifiedExpression)
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class ComparisonExpression extends Node
{
    /**
     * @var Node
     */
    public \$leftExpression;

    /**
     * @var Node
     */
    public \$rightExpression;

    /**
     * @var string
     */
    public \$operator;

    /**
     * @param Node   \$leftExpr
     * @param string \$operator
     * @param Node   \$rightExpr
     */
    public function __construct(\$leftExpr, \$operator, \$rightExpr)
    {
        \$this->leftExpression = \$leftExpr;
        \$this->rightExpression = \$rightExpr;
        \$this->operator = \$operator;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\$sqlWalker)
    {
        return \$sqlWalker->walkComparisonExpression(\$this);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ComparisonExpression.php";
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

namespace Doctrine\\ORM\\Query\\AST;

/**
 * ComparisonExpression ::= ArithmeticExpression ComparisonOperator ( QuantifiedExpression | ArithmeticExpression ) |
 *                          StringExpression ComparisonOperator (StringExpression | QuantifiedExpression) |
 *                          BooleanExpression (\"=\" | \"<>\" | \"!=\") (BooleanExpression | QuantifiedExpression) |
 *                          EnumExpression (\"=\" | \"<>\" | \"!=\") (EnumExpression | QuantifiedExpression) |
 *                          DatetimeExpression ComparisonOperator (DatetimeExpression | QuantifiedExpression) |
 *                          EntityExpression (\"=\" | \"<>\") (EntityExpression | QuantifiedExpression)
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class ComparisonExpression extends Node
{
    /**
     * @var Node
     */
    public \$leftExpression;

    /**
     * @var Node
     */
    public \$rightExpression;

    /**
     * @var string
     */
    public \$operator;

    /**
     * @param Node   \$leftExpr
     * @param string \$operator
     * @param Node   \$rightExpr
     */
    public function __construct(\$leftExpr, \$operator, \$rightExpr)
    {
        \$this->leftExpression = \$leftExpr;
        \$this->rightExpression = \$rightExpr;
        \$this->operator = \$operator;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\$sqlWalker)
    {
        return \$sqlWalker->walkComparisonExpression(\$this);
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ComparisonExpression.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Query\\AST\\ComparisonExpression.php");
    }
}
