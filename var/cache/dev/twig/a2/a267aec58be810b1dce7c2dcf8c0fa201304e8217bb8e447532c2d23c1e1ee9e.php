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

/* @app/vendor/symfony/twig-bridge/Node/SearchAndRenderBlockNode.php */
class __TwigTemplate_d0867b4130be403c7f68d8e0567f2ca0531fec53612b1a77a6b7d423767033df extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Node/SearchAndRenderBlockNode.php"));

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
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FunctionExpression;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class SearchAndRenderBlockNode extends FunctionExpression
{
    public function compile(Compiler \$compiler): void
    {
        \$compiler->addDebugInfo(\$this);
        \$compiler->raw('\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(');

        preg_match('/_([^_]+)\$/', \$this->getAttribute('name'), \$matches);

        \$arguments = iterator_to_array(\$this->getNode('arguments'));
        \$blockNameSuffix = \$matches[1];

        if (isset(\$arguments[0])) {
            \$compiler->subcompile(\$arguments[0]);
            \$compiler->raw(', \\''.\$blockNameSuffix.'\\'');

            if (isset(\$arguments[1])) {
                if ('label' === \$blockNameSuffix) {
                    // The \"label\" function expects the label in the second and
                    // the variables in the third argument
                    \$label = \$arguments[1];
                    \$variables = isset(\$arguments[2]) ? \$arguments[2] : null;
                    \$lineno = \$label->getTemplateLine();

                    if (\$label instanceof ConstantExpression) {
                        // If the label argument is given as a constant, we can either
                        // strip it away if it is empty, or integrate it into the array
                        // of variables at compile time.
                        \$labelIsExpression = false;

                        // Only insert the label into the array if it is not empty
                        if (!twig_test_empty(\$label->getAttribute('value'))) {
                            \$originalVariables = \$variables;
                            \$variables = new ArrayExpression([], \$lineno);
                            \$labelKey = new ConstantExpression('label', \$lineno);

                            if (null !== \$originalVariables) {
                                foreach (\$originalVariables->getKeyValuePairs() as \$pair) {
                                    // Don't copy the original label attribute over if it exists
                                    if ((string) \$labelKey !== (string) \$pair['key']) {
                                        \$variables->addElement(\$pair['value'], \$pair['key']);
                                    }
                                }
                            }

                            // Insert the label argument into the array
                            \$variables->addElement(\$label, \$labelKey);
                        }
                    } else {
                        // The label argument is not a constant, but some kind of
                        // expression. This expression needs to be evaluated at runtime.
                        // Depending on the result (whether it is null or not), the
                        // label in the arguments should take precedence over the label
                        // in the attributes or not.
                        \$labelIsExpression = true;
                    }
                } else {
                    // All other functions than \"label\" expect the variables
                    // in the second argument
                    \$label = null;
                    \$variables = \$arguments[1];
                    \$labelIsExpression = false;
                }

                if (null !== \$variables || \$labelIsExpression) {
                    \$compiler->raw(', ');

                    if (null !== \$variables) {
                        \$compiler->subcompile(\$variables);
                    }

                    if (\$labelIsExpression) {
                        if (null !== \$variables) {
                            \$compiler->raw(' + ');
                        }

                        // Check at runtime whether the label is empty.
                        // If not, add it to the array at runtime.
                        \$compiler->raw('(twig_test_empty(\$_label_ = ');
                        \$compiler->subcompile(\$label);
                        \$compiler->raw(') ? [] : [\"label\" => \$_label_])');
                    }
                }
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
        return "@app/vendor/symfony/twig-bridge/Node/SearchAndRenderBlockNode.php";
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
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FunctionExpression;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class SearchAndRenderBlockNode extends FunctionExpression
{
    public function compile(Compiler \$compiler): void
    {
        \$compiler->addDebugInfo(\$this);
        \$compiler->raw('\$this->env->getRuntime(\\'Symfony\\Component\\Form\\FormRenderer\\')->searchAndRenderBlock(');

        preg_match('/_([^_]+)\$/', \$this->getAttribute('name'), \$matches);

        \$arguments = iterator_to_array(\$this->getNode('arguments'));
        \$blockNameSuffix = \$matches[1];

        if (isset(\$arguments[0])) {
            \$compiler->subcompile(\$arguments[0]);
            \$compiler->raw(', \\''.\$blockNameSuffix.'\\'');

            if (isset(\$arguments[1])) {
                if ('label' === \$blockNameSuffix) {
                    // The \"label\" function expects the label in the second and
                    // the variables in the third argument
                    \$label = \$arguments[1];
                    \$variables = isset(\$arguments[2]) ? \$arguments[2] : null;
                    \$lineno = \$label->getTemplateLine();

                    if (\$label instanceof ConstantExpression) {
                        // If the label argument is given as a constant, we can either
                        // strip it away if it is empty, or integrate it into the array
                        // of variables at compile time.
                        \$labelIsExpression = false;

                        // Only insert the label into the array if it is not empty
                        if (!twig_test_empty(\$label->getAttribute('value'))) {
                            \$originalVariables = \$variables;
                            \$variables = new ArrayExpression([], \$lineno);
                            \$labelKey = new ConstantExpression('label', \$lineno);

                            if (null !== \$originalVariables) {
                                foreach (\$originalVariables->getKeyValuePairs() as \$pair) {
                                    // Don't copy the original label attribute over if it exists
                                    if ((string) \$labelKey !== (string) \$pair['key']) {
                                        \$variables->addElement(\$pair['value'], \$pair['key']);
                                    }
                                }
                            }

                            // Insert the label argument into the array
                            \$variables->addElement(\$label, \$labelKey);
                        }
                    } else {
                        // The label argument is not a constant, but some kind of
                        // expression. This expression needs to be evaluated at runtime.
                        // Depending on the result (whether it is null or not), the
                        // label in the arguments should take precedence over the label
                        // in the attributes or not.
                        \$labelIsExpression = true;
                    }
                } else {
                    // All other functions than \"label\" expect the variables
                    // in the second argument
                    \$label = null;
                    \$variables = \$arguments[1];
                    \$labelIsExpression = false;
                }

                if (null !== \$variables || \$labelIsExpression) {
                    \$compiler->raw(', ');

                    if (null !== \$variables) {
                        \$compiler->subcompile(\$variables);
                    }

                    if (\$labelIsExpression) {
                        if (null !== \$variables) {
                            \$compiler->raw(' + ');
                        }

                        // Check at runtime whether the label is empty.
                        // If not, add it to the array at runtime.
                        \$compiler->raw('(twig_test_empty(\$_label_ = ');
                        \$compiler->subcompile(\$label);
                        \$compiler->raw(') ? [] : [\"label\" => \$_label_])');
                    }
                }
            }
        }

        \$compiler->raw(')');
    }
}
", "@app/vendor/symfony/twig-bridge/Node/SearchAndRenderBlockNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Node\\SearchAndRenderBlockNode.php");
    }
}
