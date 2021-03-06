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

/* @app/vendor/twig/twig/src/Node/Expression/FilterExpression.php */
class __TwigTemplate_d8397f390d589f777567379c0bb0d621c367b3ee4f2937870a8d5938b000df9f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/Expression/FilterExpression.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node\\Expression;

use Twig\\Compiler;
use Twig\\Node\\Node;

class FilterExpression extends CallExpression
{
    public function __construct(Node \$node, ConstantExpression \$filterName, Node \$arguments, int \$lineno, string \$tag = null)
    {
        parent::__construct(['node' => \$node, 'filter' => \$filterName, 'arguments' => \$arguments], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$name = \$this->getNode('filter')->getAttribute('value');
        \$filter = \$compiler->getEnvironment()->getFilter(\$name);

        \$this->setAttribute('name', \$name);
        \$this->setAttribute('type', 'filter');
        \$this->setAttribute('needs_environment', \$filter->needsEnvironment());
        \$this->setAttribute('needs_context', \$filter->needsContext());
        \$this->setAttribute('arguments', \$filter->getArguments());
        \$this->setAttribute('callable', \$filter->getCallable());
        \$this->setAttribute('is_variadic', \$filter->isVariadic());

        \$this->compileCallable(\$compiler);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/Expression/FilterExpression.php";
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
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node\\Expression;

use Twig\\Compiler;
use Twig\\Node\\Node;

class FilterExpression extends CallExpression
{
    public function __construct(Node \$node, ConstantExpression \$filterName, Node \$arguments, int \$lineno, string \$tag = null)
    {
        parent::__construct(['node' => \$node, 'filter' => \$filterName, 'arguments' => \$arguments], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$name = \$this->getNode('filter')->getAttribute('value');
        \$filter = \$compiler->getEnvironment()->getFilter(\$name);

        \$this->setAttribute('name', \$name);
        \$this->setAttribute('type', 'filter');
        \$this->setAttribute('needs_environment', \$filter->needsEnvironment());
        \$this->setAttribute('needs_context', \$filter->needsContext());
        \$this->setAttribute('arguments', \$filter->getArguments());
        \$this->setAttribute('callable', \$filter->getCallable());
        \$this->setAttribute('is_variadic', \$filter->isVariadic());

        \$this->compileCallable(\$compiler);
    }
}
", "@app/vendor/twig/twig/src/Node/Expression/FilterExpression.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\Expression\\FilterExpression.php");
    }
}
