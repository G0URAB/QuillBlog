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

/* @app/vendor/twig/twig/src/NodeVisitor/SandboxNodeVisitor.php */
class __TwigTemplate_d2c6ac883f63c8d5eaf71f14ef9d8d30c19202f63e41d250a6818dd1473fd179 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/NodeVisitor/SandboxNodeVisitor.php"));

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

namespace Twig\\NodeVisitor;

use Twig\\Environment;
use Twig\\Node\\CheckSecurityNode;
use Twig\\Node\\CheckToStringNode;
use Twig\\Node\\Expression\\Binary\\ConcatBinary;
use Twig\\Node\\Expression\\Binary\\RangeBinary;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Expression\\FunctionExpression;
use Twig\\Node\\Expression\\GetAttrExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\ModuleNode;
use Twig\\Node\\Node;
use Twig\\Node\\PrintNode;
use Twig\\Node\\SetNode;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class SandboxNodeVisitor implements NodeVisitorInterface
{
    private \$inAModule = false;
    private \$tags;
    private \$filters;
    private \$functions;
    private \$needsToStringWrap = false;

    public function enterNode(Node \$node, Environment \$env): Node
    {
        if (\$node instanceof ModuleNode) {
            \$this->inAModule = true;
            \$this->tags = [];
            \$this->filters = [];
            \$this->functions = [];

            return \$node;
        } elseif (\$this->inAModule) {
            // look for tags
            if (\$node->getNodeTag() && !isset(\$this->tags[\$node->getNodeTag()])) {
                \$this->tags[\$node->getNodeTag()] = \$node;
            }

            // look for filters
            if (\$node instanceof FilterExpression && !isset(\$this->filters[\$node->getNode('filter')->getAttribute('value')])) {
                \$this->filters[\$node->getNode('filter')->getAttribute('value')] = \$node;
            }

            // look for functions
            if (\$node instanceof FunctionExpression && !isset(\$this->functions[\$node->getAttribute('name')])) {
                \$this->functions[\$node->getAttribute('name')] = \$node;
            }

            // the .. operator is equivalent to the range() function
            if (\$node instanceof RangeBinary && !isset(\$this->functions['range'])) {
                \$this->functions['range'] = \$node;
            }

            if (\$node instanceof PrintNode) {
                \$this->needsToStringWrap = true;
                \$this->wrapNode(\$node, 'expr');
            }

            if (\$node instanceof SetNode && !\$node->getAttribute('capture')) {
                \$this->needsToStringWrap = true;
            }

            // wrap outer nodes that can implicitly call __toString()
            if (\$this->needsToStringWrap) {
                if (\$node instanceof ConcatBinary) {
                    \$this->wrapNode(\$node, 'left');
                    \$this->wrapNode(\$node, 'right');
                }
                if (\$node instanceof FilterExpression) {
                    \$this->wrapNode(\$node, 'node');
                    \$this->wrapArrayNode(\$node, 'arguments');
                }
                if (\$node instanceof FunctionExpression) {
                    \$this->wrapArrayNode(\$node, 'arguments');
                }
            }
        }

        return \$node;
    }

    public function leaveNode(Node \$node, Environment \$env): ?Node
    {
        if (\$node instanceof ModuleNode) {
            \$this->inAModule = false;

            \$node->getNode('constructor_end')->setNode('_security_check', new Node([new CheckSecurityNode(\$this->filters, \$this->tags, \$this->functions), \$node->getNode('display_start')]));
        } elseif (\$this->inAModule) {
            if (\$node instanceof PrintNode || \$node instanceof SetNode) {
                \$this->needsToStringWrap = false;
            }
        }

        return \$node;
    }

    private function wrapNode(Node \$node, string \$name): void
    {
        \$expr = \$node->getNode(\$name);
        if (\$expr instanceof NameExpression || \$expr instanceof GetAttrExpression) {
            \$node->setNode(\$name, new CheckToStringNode(\$expr));
        }
    }

    private function wrapArrayNode(Node \$node, string \$name): void
    {
        \$args = \$node->getNode(\$name);
        foreach (\$args as \$name => \$_) {
            \$this->wrapNode(\$args, \$name);
        }
    }

    public function getPriority(): int
    {
        return 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/NodeVisitor/SandboxNodeVisitor.php";
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

namespace Twig\\NodeVisitor;

use Twig\\Environment;
use Twig\\Node\\CheckSecurityNode;
use Twig\\Node\\CheckToStringNode;
use Twig\\Node\\Expression\\Binary\\ConcatBinary;
use Twig\\Node\\Expression\\Binary\\RangeBinary;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Expression\\FunctionExpression;
use Twig\\Node\\Expression\\GetAttrExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\ModuleNode;
use Twig\\Node\\Node;
use Twig\\Node\\PrintNode;
use Twig\\Node\\SetNode;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class SandboxNodeVisitor implements NodeVisitorInterface
{
    private \$inAModule = false;
    private \$tags;
    private \$filters;
    private \$functions;
    private \$needsToStringWrap = false;

    public function enterNode(Node \$node, Environment \$env): Node
    {
        if (\$node instanceof ModuleNode) {
            \$this->inAModule = true;
            \$this->tags = [];
            \$this->filters = [];
            \$this->functions = [];

            return \$node;
        } elseif (\$this->inAModule) {
            // look for tags
            if (\$node->getNodeTag() && !isset(\$this->tags[\$node->getNodeTag()])) {
                \$this->tags[\$node->getNodeTag()] = \$node;
            }

            // look for filters
            if (\$node instanceof FilterExpression && !isset(\$this->filters[\$node->getNode('filter')->getAttribute('value')])) {
                \$this->filters[\$node->getNode('filter')->getAttribute('value')] = \$node;
            }

            // look for functions
            if (\$node instanceof FunctionExpression && !isset(\$this->functions[\$node->getAttribute('name')])) {
                \$this->functions[\$node->getAttribute('name')] = \$node;
            }

            // the .. operator is equivalent to the range() function
            if (\$node instanceof RangeBinary && !isset(\$this->functions['range'])) {
                \$this->functions['range'] = \$node;
            }

            if (\$node instanceof PrintNode) {
                \$this->needsToStringWrap = true;
                \$this->wrapNode(\$node, 'expr');
            }

            if (\$node instanceof SetNode && !\$node->getAttribute('capture')) {
                \$this->needsToStringWrap = true;
            }

            // wrap outer nodes that can implicitly call __toString()
            if (\$this->needsToStringWrap) {
                if (\$node instanceof ConcatBinary) {
                    \$this->wrapNode(\$node, 'left');
                    \$this->wrapNode(\$node, 'right');
                }
                if (\$node instanceof FilterExpression) {
                    \$this->wrapNode(\$node, 'node');
                    \$this->wrapArrayNode(\$node, 'arguments');
                }
                if (\$node instanceof FunctionExpression) {
                    \$this->wrapArrayNode(\$node, 'arguments');
                }
            }
        }

        return \$node;
    }

    public function leaveNode(Node \$node, Environment \$env): ?Node
    {
        if (\$node instanceof ModuleNode) {
            \$this->inAModule = false;

            \$node->getNode('constructor_end')->setNode('_security_check', new Node([new CheckSecurityNode(\$this->filters, \$this->tags, \$this->functions), \$node->getNode('display_start')]));
        } elseif (\$this->inAModule) {
            if (\$node instanceof PrintNode || \$node instanceof SetNode) {
                \$this->needsToStringWrap = false;
            }
        }

        return \$node;
    }

    private function wrapNode(Node \$node, string \$name): void
    {
        \$expr = \$node->getNode(\$name);
        if (\$expr instanceof NameExpression || \$expr instanceof GetAttrExpression) {
            \$node->setNode(\$name, new CheckToStringNode(\$expr));
        }
    }

    private function wrapArrayNode(Node \$node, string \$name): void
    {
        \$args = \$node->getNode(\$name);
        foreach (\$args as \$name => \$_) {
            \$this->wrapNode(\$args, \$name);
        }
    }

    public function getPriority(): int
    {
        return 0;
    }
}
", "@app/vendor/twig/twig/src/NodeVisitor/SandboxNodeVisitor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\NodeVisitor\\SandboxNodeVisitor.php");
    }
}
