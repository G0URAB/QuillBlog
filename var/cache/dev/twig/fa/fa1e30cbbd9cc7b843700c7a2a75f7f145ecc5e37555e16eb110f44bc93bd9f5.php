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

/* @app/vendor/twig/twig/src/Node/Expression/TestExpression.php */
class __TwigTemplate_21901f2a4ed3ccbbfead8fca4c7c139a8a0a8f9fe2273b8bc9c16533cb14eb89 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/Expression/TestExpression.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node\\Expression;

use Twig\\Compiler;
use Twig\\Node\\Node;

class TestExpression extends CallExpression
{
    public function __construct(Node \$node, string \$name, Node \$arguments = null, int \$lineno)
    {
        \$nodes = ['node' => \$node];
        if (null !== \$arguments) {
            \$nodes['arguments'] = \$arguments;
        }

        parent::__construct(\$nodes, ['name' => \$name], \$lineno);
    }

    public function compile(Compiler \$compiler): void
    {
        \$name = \$this->getAttribute('name');
        \$test = \$compiler->getEnvironment()->getTest(\$name);

        \$this->setAttribute('name', \$name);
        \$this->setAttribute('type', 'test');
        \$this->setAttribute('arguments', \$test->getArguments());
        \$this->setAttribute('callable', \$test->getCallable());
        \$this->setAttribute('is_variadic', \$test->isVariadic());

        \$this->compileCallable(\$compiler);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/Expression/TestExpression.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node\\Expression;

use Twig\\Compiler;
use Twig\\Node\\Node;

class TestExpression extends CallExpression
{
    public function __construct(Node \$node, string \$name, Node \$arguments = null, int \$lineno)
    {
        \$nodes = ['node' => \$node];
        if (null !== \$arguments) {
            \$nodes['arguments'] = \$arguments;
        }

        parent::__construct(\$nodes, ['name' => \$name], \$lineno);
    }

    public function compile(Compiler \$compiler): void
    {
        \$name = \$this->getAttribute('name');
        \$test = \$compiler->getEnvironment()->getTest(\$name);

        \$this->setAttribute('name', \$name);
        \$this->setAttribute('type', 'test');
        \$this->setAttribute('arguments', \$test->getArguments());
        \$this->setAttribute('callable', \$test->getCallable());
        \$this->setAttribute('is_variadic', \$test->isVariadic());

        \$this->compileCallable(\$compiler);
    }
}
", "@app/vendor/twig/twig/src/Node/Expression/TestExpression.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\Expression\\TestExpression.php");
    }
}
