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

/* @app/vendor/twig/twig/src/Node/CheckToStringNode.php */
class __TwigTemplate_05f3d9e81e52c1c655eaad32e27d1c28e15200030d3680baaba2481aaceb29f7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/CheckToStringNode.php"));

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

namespace Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Expression\\AbstractExpression;

/**
 * Checks if casting an expression to __toString() is allowed by the sandbox.
 *
 * For instance, when there is a simple Print statement, like ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "html", null, true);
        echo ",
 * and if the sandbox is enabled, we need to check that the __toString()
 * method is allowed if 'article' is an object. The same goes for ";
        // line 22
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })())), "html", null, true);
        echo "
 * or ";
        // line 23
        echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })())), "html", null, true);
        echo "
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CheckToStringNode extends AbstractExpression
{
    public function __construct(AbstractExpression \$expr)
    {
        parent::__construct(['expr' => \$expr], [], \$expr->getTemplateLine(), \$expr->getNodeTag());
    }

    public function compile(Compiler \$compiler): void
    {
        \$expr = \$this->getNode('expr');
        \$compiler
            ->raw('\$this->sandbox->ensureToStringAllowed(')
            ->subcompile(\$expr)
            ->raw(', ')
            ->repr(\$expr->getTemplateLine())
            ->raw(', \$this->source)')
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/CheckToStringNode.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  66 => 22,  61 => 20,  40 => 1,);
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

namespace Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Expression\\AbstractExpression;

/**
 * Checks if casting an expression to __toString() is allowed by the sandbox.
 *
 * For instance, when there is a simple Print statement, like {{ article }},
 * and if the sandbox is enabled, we need to check that the __toString()
 * method is allowed if 'article' is an object. The same goes for {{ article|upper }}
 * or {{ random(article) }}
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CheckToStringNode extends AbstractExpression
{
    public function __construct(AbstractExpression \$expr)
    {
        parent::__construct(['expr' => \$expr], [], \$expr->getTemplateLine(), \$expr->getNodeTag());
    }

    public function compile(Compiler \$compiler): void
    {
        \$expr = \$this->getNode('expr');
        \$compiler
            ->raw('\$this->sandbox->ensureToStringAllowed(')
            ->subcompile(\$expr)
            ->raw(', ')
            ->repr(\$expr->getTemplateLine())
            ->raw(', \$this->source)')
        ;
    }
}
", "@app/vendor/twig/twig/src/Node/CheckToStringNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\CheckToStringNode.php");
    }
}
