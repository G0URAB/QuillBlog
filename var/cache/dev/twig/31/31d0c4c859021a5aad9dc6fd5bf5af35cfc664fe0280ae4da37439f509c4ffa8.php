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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Node.php */
class __TwigTemplate_626bce426f4ba937b50bf950ef72d43f760043c2064f1fe5dd6752a6e8905b43 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Node.php"));

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
 * Abstract class of an AST node.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
abstract class Node
{
    /**
     * Double-dispatch method, supposed to dispatch back to the walker.
     *
     * Implementation is not mandatory for all nodes.
     *
     * @param \\Doctrine\\ORM\\Query\\SqlWalker \$walker
     *
     * @return string
     *
     * @throws ASTException
     */
    public function dispatch(\$walker)
    {
        throw ASTException::noDispatchForNode(\$this);
    }

    /**
     * Dumps the AST Node into a string representation for information purpose only.
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->dump(\$this);
    }

    /**
     * @param object \$obj
     *
     * @return string
     */
    public function dump(\$obj)
    {
        static \$ident = 0;

        \$str = '';

        if (\$obj instanceof Node) {
            \$str .= get_class(\$obj) . '(' . PHP_EOL;
            \$props = get_object_vars(\$obj);

            foreach (\$props as \$name => \$prop) {
                \$ident += 4;
                \$str .= str_repeat(' ', \$ident) . '\"' . \$name . '\": '
                      . \$this->dump(\$prop) . ',' . PHP_EOL;
                \$ident -= 4;
            }

            \$str .= str_repeat(' ', \$ident) . ')';
        } else if (is_array(\$obj)) {
            \$ident += 4;
            \$str .= 'array(';
            \$some = false;

            foreach (\$obj as \$k => \$v) {
                \$str .= PHP_EOL . str_repeat(' ', \$ident) . '\"'
                      . \$k . '\" => ' . \$this->dump(\$v) . ',';
                \$some = true;
            }

            \$ident -= 4;
            \$str .= (\$some ? PHP_EOL . str_repeat(' ', \$ident) : '') . ')';
        } else if (is_object(\$obj)) {
            \$str .= 'instanceof(' . get_class(\$obj) . ')';
        } else {
            \$str .= var_export(\$obj, true);
        }

        return \$str;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Node.php";
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
 * Abstract class of an AST node.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
abstract class Node
{
    /**
     * Double-dispatch method, supposed to dispatch back to the walker.
     *
     * Implementation is not mandatory for all nodes.
     *
     * @param \\Doctrine\\ORM\\Query\\SqlWalker \$walker
     *
     * @return string
     *
     * @throws ASTException
     */
    public function dispatch(\$walker)
    {
        throw ASTException::noDispatchForNode(\$this);
    }

    /**
     * Dumps the AST Node into a string representation for information purpose only.
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->dump(\$this);
    }

    /**
     * @param object \$obj
     *
     * @return string
     */
    public function dump(\$obj)
    {
        static \$ident = 0;

        \$str = '';

        if (\$obj instanceof Node) {
            \$str .= get_class(\$obj) . '(' . PHP_EOL;
            \$props = get_object_vars(\$obj);

            foreach (\$props as \$name => \$prop) {
                \$ident += 4;
                \$str .= str_repeat(' ', \$ident) . '\"' . \$name . '\": '
                      . \$this->dump(\$prop) . ',' . PHP_EOL;
                \$ident -= 4;
            }

            \$str .= str_repeat(' ', \$ident) . ')';
        } else if (is_array(\$obj)) {
            \$ident += 4;
            \$str .= 'array(';
            \$some = false;

            foreach (\$obj as \$k => \$v) {
                \$str .= PHP_EOL . str_repeat(' ', \$ident) . '\"'
                      . \$k . '\" => ' . \$this->dump(\$v) . ',';
                \$some = true;
            }

            \$ident -= 4;
            \$str .= (\$some ? PHP_EOL . str_repeat(' ', \$ident) : '') . ')';
        } else if (is_object(\$obj)) {
            \$str .= 'instanceof(' . get_class(\$obj) . ')';
        } else {
            \$str .= var_export(\$obj, true);
        }

        return \$str;
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Node.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Query\\AST\\Node.php");
    }
}
