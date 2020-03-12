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

/* @app/vendor/twig/twig/src/NodeVisitor/MacroAutoImportNodeVisitor.php */
class __TwigTemplate_a278bdad5cddbf8c8d09b9385ab5cd0be76e442613cb6769f0b3ec55d1a751ab extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/NodeVisitor/MacroAutoImportNodeVisitor.php"));

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
use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\GetAttrExpression;
use Twig\\Node\\Expression\\MethodCallExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\ImportNode;
use Twig\\Node\\ModuleNode;
use Twig\\Node\\Node;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class MacroAutoImportNodeVisitor implements NodeVisitorInterface
{
    private \$inAModule = false;
    private \$hasMacroCalls = false;

    public function enterNode(Node \$node, Environment \$env): Node
    {
        if (\$node instanceof ModuleNode) {
            \$this->inAModule = true;
            \$this->hasMacroCalls = false;
        }

        return \$node;
    }

    public function leaveNode(Node \$node, Environment \$env): Node
    {
        if (\$node instanceof ModuleNode) {
            \$this->inAModule = false;
            if (\$this->hasMacroCalls) {
                \$node->getNode('constructor_end')->setNode('_auto_macro_import', new ImportNode(new NameExpression('_self', 0), new AssignNameExpression('_self', 0), 0, 'import', true));
            }
        } elseif (\$this->inAModule) {
            if (
                \$node instanceof GetAttrExpression &&
                \$node->getNode('node') instanceof NameExpression &&
                '_self' === \$node->getNode('node')->getAttribute('name') &&
                \$node->getNode('attribute') instanceof ConstantExpression
            ) {
                \$this->hasMacroCalls = true;

                \$name = \$node->getNode('attribute')->getAttribute('value');
                \$node = new MethodCallExpression(\$node->getNode('node'), 'macro_'.\$name, \$node->getNode('arguments'), \$node->getTemplateLine());
                \$node->setAttribute('safe', true);
            }
        }

        return \$node;
    }

    public function getPriority(): int
    {
        // we must be ran before auto-escaping
        return -10;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/NodeVisitor/MacroAutoImportNodeVisitor.php";
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
use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\GetAttrExpression;
use Twig\\Node\\Expression\\MethodCallExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\ImportNode;
use Twig\\Node\\ModuleNode;
use Twig\\Node\\Node;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class MacroAutoImportNodeVisitor implements NodeVisitorInterface
{
    private \$inAModule = false;
    private \$hasMacroCalls = false;

    public function enterNode(Node \$node, Environment \$env): Node
    {
        if (\$node instanceof ModuleNode) {
            \$this->inAModule = true;
            \$this->hasMacroCalls = false;
        }

        return \$node;
    }

    public function leaveNode(Node \$node, Environment \$env): Node
    {
        if (\$node instanceof ModuleNode) {
            \$this->inAModule = false;
            if (\$this->hasMacroCalls) {
                \$node->getNode('constructor_end')->setNode('_auto_macro_import', new ImportNode(new NameExpression('_self', 0), new AssignNameExpression('_self', 0), 0, 'import', true));
            }
        } elseif (\$this->inAModule) {
            if (
                \$node instanceof GetAttrExpression &&
                \$node->getNode('node') instanceof NameExpression &&
                '_self' === \$node->getNode('node')->getAttribute('name') &&
                \$node->getNode('attribute') instanceof ConstantExpression
            ) {
                \$this->hasMacroCalls = true;

                \$name = \$node->getNode('attribute')->getAttribute('value');
                \$node = new MethodCallExpression(\$node->getNode('node'), 'macro_'.\$name, \$node->getNode('arguments'), \$node->getTemplateLine());
                \$node->setAttribute('safe', true);
            }
        }

        return \$node;
    }

    public function getPriority(): int
    {
        // we must be ran before auto-escaping
        return -10;
    }
}
", "@app/vendor/twig/twig/src/NodeVisitor/MacroAutoImportNodeVisitor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\NodeVisitor\\MacroAutoImportNodeVisitor.php");
    }
}
