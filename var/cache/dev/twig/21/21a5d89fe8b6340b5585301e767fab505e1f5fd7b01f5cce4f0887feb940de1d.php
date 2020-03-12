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

/* @app/vendor/twig/twig/src/Node/Expression/FunctionExpression.php */
class __TwigTemplate_aceb7e4c539d4fb36c5bdf72ac8ee895fab2bf2e82d6f98c5a67ffd931f5de04 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/Expression/FunctionExpression.php"));

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

class FunctionExpression extends CallExpression
{
    public function __construct(string \$name, Node \$arguments, int \$lineno)
    {
        parent::__construct(['arguments' => \$arguments], ['name' => \$name, 'is_defined_test' => false], \$lineno);
    }

    public function compile(Compiler \$compiler)
    {
        \$name = \$this->getAttribute('name');
        \$function = \$compiler->getEnvironment()->getFunction(\$name);

        \$this->setAttribute('name', \$name);
        \$this->setAttribute('type', 'function');
        \$this->setAttribute('needs_environment', \$function->needsEnvironment());
        \$this->setAttribute('needs_context', \$function->needsContext());
        \$this->setAttribute('arguments', \$function->getArguments());
        \$callable = \$function->getCallable();
        if ('constant' === \$name && \$this->getAttribute('is_defined_test')) {
            \$callable = 'twig_constant_is_defined';
        }
        \$this->setAttribute('callable', \$callable);
        \$this->setAttribute('is_variadic', \$function->isVariadic());

        \$this->compileCallable(\$compiler);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/Expression/FunctionExpression.php";
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

class FunctionExpression extends CallExpression
{
    public function __construct(string \$name, Node \$arguments, int \$lineno)
    {
        parent::__construct(['arguments' => \$arguments], ['name' => \$name, 'is_defined_test' => false], \$lineno);
    }

    public function compile(Compiler \$compiler)
    {
        \$name = \$this->getAttribute('name');
        \$function = \$compiler->getEnvironment()->getFunction(\$name);

        \$this->setAttribute('name', \$name);
        \$this->setAttribute('type', 'function');
        \$this->setAttribute('needs_environment', \$function->needsEnvironment());
        \$this->setAttribute('needs_context', \$function->needsContext());
        \$this->setAttribute('arguments', \$function->getArguments());
        \$callable = \$function->getCallable();
        if ('constant' === \$name && \$this->getAttribute('is_defined_test')) {
            \$callable = 'twig_constant_is_defined';
        }
        \$this->setAttribute('callable', \$callable);
        \$this->setAttribute('is_variadic', \$function->isVariadic());

        \$this->compileCallable(\$compiler);
    }
}
", "@app/vendor/twig/twig/src/Node/Expression/FunctionExpression.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\Expression\\FunctionExpression.php");
    }
}
