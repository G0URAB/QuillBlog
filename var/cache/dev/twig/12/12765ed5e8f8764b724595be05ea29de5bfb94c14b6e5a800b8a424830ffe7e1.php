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

/* @app/vendor/twig/twig/src/Node/SetNode.php */
class __TwigTemplate_d60626f035eea50681fb3c4c243881a875516ef11f3d7f791dd41665268115af extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/SetNode.php"));

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
use Twig\\Node\\Expression\\ConstantExpression;

/**
 * Represents a set node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SetNode extends Node implements NodeCaptureInterface
{
    public function __construct(bool \$capture, Node \$names, Node \$values, int \$lineno, string \$tag = null)
    {
        parent::__construct(['names' => \$names, 'values' => \$values], ['capture' => \$capture, 'safe' => false], \$lineno, \$tag);

        /*
         * Optimizes the node when capture is used for a large block of text.
         *
         * ";
        // line 31
        $context["foo"] = ('' === $tmp = "foo") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " is compiled to \$context['foo'] = new Twig\\Markup(\"foo\");
         */
        if (\$this->getAttribute('capture')) {
            \$this->setAttribute('safe', true);

            \$values = \$this->getNode('values');
            if (\$values instanceof TextNode) {
                \$this->setNode('values', new ConstantExpression(\$values->getAttribute('data'), \$values->getTemplateLine()));
                \$this->setAttribute('capture', false);
            }
        }
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler->addDebugInfo(\$this);

        if (\\count(\$this->getNode('names')) > 1) {
            \$compiler->write('list(');
            foreach (\$this->getNode('names') as \$idx => \$node) {
                if (\$idx) {
                    \$compiler->raw(', ');
                }

                \$compiler->subcompile(\$node);
            }
            \$compiler->raw(')');
        } else {
            if (\$this->getAttribute('capture')) {
                if (\$compiler->getEnvironment()->isDebug()) {
                    \$compiler->write(\"ob_start();\\n\");
                } else {
                    \$compiler->write(\"ob_start(function () { return ''; });\\n\");
                }
                \$compiler
                    ->subcompile(\$this->getNode('values'))
                ;
            }

            \$compiler->subcompile(\$this->getNode('names'), false);

            if (\$this->getAttribute('capture')) {
                \$compiler->raw(\" = ('' === \\\$tmp = ob_get_clean()) ? '' : new Markup(\\\$tmp, \\\$this->env->getCharset())\");
            }
        }

        if (!\$this->getAttribute('capture')) {
            \$compiler->raw(' = ');

            if (\\count(\$this->getNode('names')) > 1) {
                \$compiler->write('[');
                foreach (\$this->getNode('values') as \$idx => \$value) {
                    if (\$idx) {
                        \$compiler->raw(', ');
                    }

                    \$compiler->subcompile(\$value);
                }
                \$compiler->raw(']');
            } else {
                if (\$this->getAttribute('safe')) {
                    \$compiler
                        ->raw(\"('' === \\\$tmp = \")
                        ->subcompile(\$this->getNode('values'))
                        ->raw(\") ? '' : new Markup(\\\$tmp, \\\$this->env->getCharset())\")
                    ;
                } else {
                    \$compiler->subcompile(\$this->getNode('values'));
                }
            }
        }

        \$compiler->raw(\";\\n\");
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/SetNode.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 31,  40 => 1,);
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
use Twig\\Node\\Expression\\ConstantExpression;

/**
 * Represents a set node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SetNode extends Node implements NodeCaptureInterface
{
    public function __construct(bool \$capture, Node \$names, Node \$values, int \$lineno, string \$tag = null)
    {
        parent::__construct(['names' => \$names, 'values' => \$values], ['capture' => \$capture, 'safe' => false], \$lineno, \$tag);

        /*
         * Optimizes the node when capture is used for a large block of text.
         *
         * {% set foo %}foo{% endset %} is compiled to \$context['foo'] = new Twig\\Markup(\"foo\");
         */
        if (\$this->getAttribute('capture')) {
            \$this->setAttribute('safe', true);

            \$values = \$this->getNode('values');
            if (\$values instanceof TextNode) {
                \$this->setNode('values', new ConstantExpression(\$values->getAttribute('data'), \$values->getTemplateLine()));
                \$this->setAttribute('capture', false);
            }
        }
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler->addDebugInfo(\$this);

        if (\\count(\$this->getNode('names')) > 1) {
            \$compiler->write('list(');
            foreach (\$this->getNode('names') as \$idx => \$node) {
                if (\$idx) {
                    \$compiler->raw(', ');
                }

                \$compiler->subcompile(\$node);
            }
            \$compiler->raw(')');
        } else {
            if (\$this->getAttribute('capture')) {
                if (\$compiler->getEnvironment()->isDebug()) {
                    \$compiler->write(\"ob_start();\\n\");
                } else {
                    \$compiler->write(\"ob_start(function () { return ''; });\\n\");
                }
                \$compiler
                    ->subcompile(\$this->getNode('values'))
                ;
            }

            \$compiler->subcompile(\$this->getNode('names'), false);

            if (\$this->getAttribute('capture')) {
                \$compiler->raw(\" = ('' === \\\$tmp = ob_get_clean()) ? '' : new Markup(\\\$tmp, \\\$this->env->getCharset())\");
            }
        }

        if (!\$this->getAttribute('capture')) {
            \$compiler->raw(' = ');

            if (\\count(\$this->getNode('names')) > 1) {
                \$compiler->write('[');
                foreach (\$this->getNode('values') as \$idx => \$value) {
                    if (\$idx) {
                        \$compiler->raw(', ');
                    }

                    \$compiler->subcompile(\$value);
                }
                \$compiler->raw(']');
            } else {
                if (\$this->getAttribute('safe')) {
                    \$compiler
                        ->raw(\"('' === \\\$tmp = \")
                        ->subcompile(\$this->getNode('values'))
                        ->raw(\") ? '' : new Markup(\\\$tmp, \\\$this->env->getCharset())\")
                    ;
                } else {
                    \$compiler->subcompile(\$this->getNode('values'));
                }
            }
        }

        \$compiler->raw(\";\\n\");
    }
}
", "@app/vendor/twig/twig/src/Node/SetNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\SetNode.php");
    }
}
