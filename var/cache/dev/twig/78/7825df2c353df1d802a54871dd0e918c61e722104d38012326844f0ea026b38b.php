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

/* @app/vendor/symfony/twig-bridge/Node/RenderBlockNode.php */
class __TwigTemplate_72285c8a4b3cb2169b84f3c8c0989985c5c2b75a9da4160250bbb1994d17a5c2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Node/RenderBlockNode.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Expression\\FunctionExpression;

/**
 * Compiles a call to {@link \\Symfony\\Component\\Form\\FormRendererInterface::renderBlock()}.
 *
 * The function name is used as block name. For example, if the function name
 * is \"foo\", the block \"foo\" will be rendered.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class RenderBlockNode extends FunctionExpression
{
    public function compile(Compiler \$compiler): void
    {
        \$compiler->addDebugInfo(\$this);
        \$arguments = iterator_to_array(\$this->getNode('arguments'));
        \$compiler->write('\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->renderBlock(');

        if (isset(\$arguments[0])) {
            \$compiler->subcompile(\$arguments[0]);
            \$compiler->raw(', \\''.\$this->getAttribute('name').'\\'');

            if (isset(\$arguments[1])) {
                \$compiler->raw(', ');
                \$compiler->subcompile(\$arguments[1]);
            }
        }

        \$compiler->raw(')');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Node/RenderBlockNode.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Expression\\FunctionExpression;

/**
 * Compiles a call to {@link \\Symfony\\Component\\Form\\FormRendererInterface::renderBlock()}.
 *
 * The function name is used as block name. For example, if the function name
 * is \"foo\", the block \"foo\" will be rendered.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class RenderBlockNode extends FunctionExpression
{
    public function compile(Compiler \$compiler): void
    {
        \$compiler->addDebugInfo(\$this);
        \$arguments = iterator_to_array(\$this->getNode('arguments'));
        \$compiler->write('\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->renderBlock(');

        if (isset(\$arguments[0])) {
            \$compiler->subcompile(\$arguments[0]);
            \$compiler->raw(', \\''.\$this->getAttribute('name').'\\'');

            if (isset(\$arguments[1])) {
                \$compiler->raw(', ');
                \$compiler->subcompile(\$arguments[1]);
            }
        }

        \$compiler->raw(')');
    }
}
", "@app/vendor/symfony/twig-bridge/Node/RenderBlockNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Node\\RenderBlockNode.php");
    }
}
