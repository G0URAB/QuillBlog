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

/* @app/vendor/twig/twig/src/Node/Expression/Test/ConstantTest.php */
class __TwigTemplate_d7b642c37e51dbf7fa62dfd2e3400353b8e66f9f5adbe782f71161fdb42ff397 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/Expression/Test/ConstantTest.php"));

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

namespace Twig\\Node\\Expression\\Test;

use Twig\\Compiler;
use Twig\\Node\\Expression\\TestExpression;

/**
 * Checks if a variable is the exact same value as a constant.
 *
 *    ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "status", [], "any", false, false, false, 20) === constant("Post::PUBLISHED"))) {
            // line 21
            echo " *      the status attribute is exactly the same as Post::PUBLISHED
 *    ";
        }
        // line 23
        echo " *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ConstantTest extends TestExpression
{
    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->raw('(')
            ->subcompile(\$this->getNode('node'))
            ->raw(' === constant(')
        ;

        if (\$this->getNode('arguments')->hasNode(1)) {
            \$compiler
                ->raw('get_class(')
                ->subcompile(\$this->getNode('arguments')->getNode(1))
                ->raw(').\"::\".')
            ;
        }

        \$compiler
            ->subcompile(\$this->getNode('arguments')->getNode(0))
            ->raw('))')
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/Expression/Test/ConstantTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  63 => 21,  61 => 20,  40 => 1,);
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

namespace Twig\\Node\\Expression\\Test;

use Twig\\Compiler;
use Twig\\Node\\Expression\\TestExpression;

/**
 * Checks if a variable is the exact same value as a constant.
 *
 *    {% if post.status is constant('Post::PUBLISHED') %}
 *      the status attribute is exactly the same as Post::PUBLISHED
 *    {% endif %}
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ConstantTest extends TestExpression
{
    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->raw('(')
            ->subcompile(\$this->getNode('node'))
            ->raw(' === constant(')
        ;

        if (\$this->getNode('arguments')->hasNode(1)) {
            \$compiler
                ->raw('get_class(')
                ->subcompile(\$this->getNode('arguments')->getNode(1))
                ->raw(').\"::\".')
            ;
        }

        \$compiler
            ->subcompile(\$this->getNode('arguments')->getNode(0))
            ->raw('))')
        ;
    }
}
", "@app/vendor/twig/twig/src/Node/Expression/Test/ConstantTest.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\Expression\\Test\\ConstantTest.php");
    }
}
