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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateSubFunction.php */
class __TwigTemplate_a1a0765a4aa4c87dc4dbf1c94ad57a0395a1a43e05c9f796088cf9a1d761bd5b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateSubFunction.php"));

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

namespace Doctrine\\ORM\\Query\\AST\\Functions;

use Doctrine\\ORM\\Query\\SqlWalker;
use Doctrine\\ORM\\Query\\QueryException;

/**
 * \"DATE_ADD(date1, interval, unit)\"
 *
 * 
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 */
class DateSubFunction extends DateAddFunction
{
    /**
     * @override
     * @inheritdoc
     */
    public function getSql(SqlWalker \$sqlWalker)
    {
        switch (strtolower(\$this->unit->value)) {
            case 'second':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateSubSecondsExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'minute':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateSubMinutesExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'hour':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateSubHourExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'day':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateSubDaysExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'week':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateSubWeeksExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'month':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateSubMonthExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'year':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateSubYearsExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );

            default:
                throw QueryException::semanticalError(
                    'DATE_SUB() only supports units of type second, minute, hour, day, week, month and year.'
                );
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateSubFunction.php";
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

namespace Doctrine\\ORM\\Query\\AST\\Functions;

use Doctrine\\ORM\\Query\\SqlWalker;
use Doctrine\\ORM\\Query\\QueryException;

/**
 * \"DATE_ADD(date1, interval, unit)\"
 *
 * 
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 */
class DateSubFunction extends DateAddFunction
{
    /**
     * @override
     * @inheritdoc
     */
    public function getSql(SqlWalker \$sqlWalker)
    {
        switch (strtolower(\$this->unit->value)) {
            case 'second':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateSubSecondsExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'minute':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateSubMinutesExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'hour':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateSubHourExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'day':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateSubDaysExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'week':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateSubWeeksExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'month':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateSubMonthExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );
            case 'year':
                return \$sqlWalker->getConnection()->getDatabasePlatform()->getDateSubYearsExpression(
                    \$this->firstDateExpression->dispatch(\$sqlWalker),
                    \$this->intervalExpression->dispatch(\$sqlWalker)
                );

            default:
                throw QueryException::semanticalError(
                    'DATE_SUB() only supports units of type second, minute, hour, day, week, month and year.'
                );
        }
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateSubFunction.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Query\\AST\\Functions\\DateSubFunction.php");
    }
}
