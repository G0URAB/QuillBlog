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

/* @app/vendor/twig/twig/src/Node/Expression/MethodCallExpression.php */
class __TwigTemplate_91d790934af063bb7812c53d429b73e0e71e68ac57682cbf27ece39d75dd551c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/Expression/MethodCallExpression.php"));

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

class MethodCallExpression extends AbstractExpression
{
    public function __construct(AbstractExpression \$node, string \$method, ArrayExpression \$arguments, int \$lineno)
    {
        parent::__construct(['node' => \$node, 'arguments' => \$arguments], ['method' => \$method, 'safe' => false, 'is_defined_test' => false], \$lineno);

        if (\$node instanceof NameExpression) {
            \$node->setAttribute('always_defined', true);
        }
    }

    public function compile(Compiler \$compiler): void
    {
        if (\$this->getAttribute('is_defined_test')) {
            \$compiler
                ->raw('method_exists(\$macros[')
                ->repr(\$this->getNode('node')->getAttribute('name'))
                ->raw('], ')
                ->repr(\$this->getAttribute('method'))
                ->raw(')')
            ;

            return;
        }

        \$compiler
            ->raw('twig_call_macro(\$macros[')
            ->repr(\$this->getNode('node')->getAttribute('name'))
            ->raw('], ')
            ->repr(\$this->getAttribute('method'))
            ->raw(', [')
        ;
        \$first = true;
        foreach (\$this->getNode('arguments')->getKeyValuePairs() as \$pair) {
            if (!\$first) {
                \$compiler->raw(', ');
            }
            \$first = false;

            \$compiler->subcompile(\$pair['value']);
        }
        \$compiler
            ->raw('], ')
            ->repr(\$this->getTemplateLine())
            ->raw(', \$context, \$this->getSourceContext())');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/Expression/MethodCallExpression.php";
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

class MethodCallExpression extends AbstractExpression
{
    public function __construct(AbstractExpression \$node, string \$method, ArrayExpression \$arguments, int \$lineno)
    {
        parent::__construct(['node' => \$node, 'arguments' => \$arguments], ['method' => \$method, 'safe' => false, 'is_defined_test' => false], \$lineno);

        if (\$node instanceof NameExpression) {
            \$node->setAttribute('always_defined', true);
        }
    }

    public function compile(Compiler \$compiler): void
    {
        if (\$this->getAttribute('is_defined_test')) {
            \$compiler
                ->raw('method_exists(\$macros[')
                ->repr(\$this->getNode('node')->getAttribute('name'))
                ->raw('], ')
                ->repr(\$this->getAttribute('method'))
                ->raw(')')
            ;

            return;
        }

        \$compiler
            ->raw('twig_call_macro(\$macros[')
            ->repr(\$this->getNode('node')->getAttribute('name'))
            ->raw('], ')
            ->repr(\$this->getAttribute('method'))
            ->raw(', [')
        ;
        \$first = true;
        foreach (\$this->getNode('arguments')->getKeyValuePairs() as \$pair) {
            if (!\$first) {
                \$compiler->raw(', ');
            }
            \$first = false;

            \$compiler->subcompile(\$pair['value']);
        }
        \$compiler
            ->raw('], ')
            ->repr(\$this->getTemplateLine())
            ->raw(', \$context, \$this->getSourceContext())');
    }
}
", "@app/vendor/twig/twig/src/Node/Expression/MethodCallExpression.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\Expression\\MethodCallExpression.php");
    }
}
