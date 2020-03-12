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

/* @app/vendor/symfony/twig-bridge/NodeVisitor/TranslationDefaultDomainNodeVisitor.php */
class __TwigTemplate_f40dead5bdd58ef40303db113f408b9811b568e34042ec0ab57bd32940358013 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/NodeVisitor/TranslationDefaultDomainNodeVisitor.php"));

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

namespace Symfony\\Bridge\\Twig\\NodeVisitor;

use Symfony\\Bridge\\Twig\\Node\\TransDefaultDomainNode;
use Symfony\\Bridge\\Twig\\Node\\TransNode;
use Twig\\Environment;
use Twig\\Node\\BlockNode;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\ModuleNode;
use Twig\\Node\\Node;
use Twig\\Node\\SetNode;
use Twig\\NodeVisitor\\AbstractNodeVisitor;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class TranslationDefaultDomainNodeVisitor extends AbstractNodeVisitor
{
    private \$scope;

    public function __construct()
    {
        \$this->scope = new Scope();
    }

    /**
     * {@inheritdoc}
     */
    protected function doEnterNode(Node \$node, Environment \$env): Node
    {
        if (\$node instanceof BlockNode || \$node instanceof ModuleNode) {
            \$this->scope = \$this->scope->enter();
        }

        if (\$node instanceof TransDefaultDomainNode) {
            if (\$node->getNode('expr') instanceof ConstantExpression) {
                \$this->scope->set('domain', \$node->getNode('expr'));

                return \$node;
            } else {
                \$var = \$this->getVarName();
                \$name = new AssignNameExpression(\$var, \$node->getTemplateLine());
                \$this->scope->set('domain', new NameExpression(\$var, \$node->getTemplateLine()));

                return new SetNode(false, new Node([\$name]), new Node([\$node->getNode('expr')]), \$node->getTemplateLine());
            }
        }

        if (!\$this->scope->has('domain')) {
            return \$node;
        }

        if (\$node instanceof FilterExpression && \\in_array(\$node->getNode('filter')->getAttribute('value'), ['trans', 'transchoice'])) {
            \$arguments = \$node->getNode('arguments');
            \$ind = 'trans' === \$node->getNode('filter')->getAttribute('value') ? 1 : 2;
            if (\$this->isNamedArguments(\$arguments)) {
                if (!\$arguments->hasNode('domain') && !\$arguments->hasNode(\$ind)) {
                    \$arguments->setNode('domain', \$this->scope->get('domain'));
                }
            } else {
                if (!\$arguments->hasNode(\$ind)) {
                    if (!\$arguments->hasNode(\$ind - 1)) {
                        \$arguments->setNode(\$ind - 1, new ArrayExpression([], \$node->getTemplateLine()));
                    }

                    \$arguments->setNode(\$ind, \$this->scope->get('domain'));
                }
            }
        } elseif (\$node instanceof TransNode) {
            if (!\$node->hasNode('domain')) {
                \$node->setNode('domain', \$this->scope->get('domain'));
            }
        }

        return \$node;
    }

    /**
     * {@inheritdoc}
     */
    protected function doLeaveNode(Node \$node, Environment \$env): ?Node
    {
        if (\$node instanceof TransDefaultDomainNode) {
            return null;
        }

        if (\$node instanceof BlockNode || \$node instanceof ModuleNode) {
            \$this->scope = \$this->scope->leave();
        }

        return \$node;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority(): int
    {
        return -10;
    }

    private function isNamedArguments(Node \$arguments): bool
    {
        foreach (\$arguments as \$name => \$node) {
            if (!\\is_int(\$name)) {
                return true;
            }
        }

        return false;
    }

    private function getVarName(): string
    {
        return sprintf('__internal_%s', hash('sha256', uniqid(mt_rand(), true), false));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/NodeVisitor/TranslationDefaultDomainNodeVisitor.php";
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

namespace Symfony\\Bridge\\Twig\\NodeVisitor;

use Symfony\\Bridge\\Twig\\Node\\TransDefaultDomainNode;
use Symfony\\Bridge\\Twig\\Node\\TransNode;
use Twig\\Environment;
use Twig\\Node\\BlockNode;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\ModuleNode;
use Twig\\Node\\Node;
use Twig\\Node\\SetNode;
use Twig\\NodeVisitor\\AbstractNodeVisitor;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class TranslationDefaultDomainNodeVisitor extends AbstractNodeVisitor
{
    private \$scope;

    public function __construct()
    {
        \$this->scope = new Scope();
    }

    /**
     * {@inheritdoc}
     */
    protected function doEnterNode(Node \$node, Environment \$env): Node
    {
        if (\$node instanceof BlockNode || \$node instanceof ModuleNode) {
            \$this->scope = \$this->scope->enter();
        }

        if (\$node instanceof TransDefaultDomainNode) {
            if (\$node->getNode('expr') instanceof ConstantExpression) {
                \$this->scope->set('domain', \$node->getNode('expr'));

                return \$node;
            } else {
                \$var = \$this->getVarName();
                \$name = new AssignNameExpression(\$var, \$node->getTemplateLine());
                \$this->scope->set('domain', new NameExpression(\$var, \$node->getTemplateLine()));

                return new SetNode(false, new Node([\$name]), new Node([\$node->getNode('expr')]), \$node->getTemplateLine());
            }
        }

        if (!\$this->scope->has('domain')) {
            return \$node;
        }

        if (\$node instanceof FilterExpression && \\in_array(\$node->getNode('filter')->getAttribute('value'), ['trans', 'transchoice'])) {
            \$arguments = \$node->getNode('arguments');
            \$ind = 'trans' === \$node->getNode('filter')->getAttribute('value') ? 1 : 2;
            if (\$this->isNamedArguments(\$arguments)) {
                if (!\$arguments->hasNode('domain') && !\$arguments->hasNode(\$ind)) {
                    \$arguments->setNode('domain', \$this->scope->get('domain'));
                }
            } else {
                if (!\$arguments->hasNode(\$ind)) {
                    if (!\$arguments->hasNode(\$ind - 1)) {
                        \$arguments->setNode(\$ind - 1, new ArrayExpression([], \$node->getTemplateLine()));
                    }

                    \$arguments->setNode(\$ind, \$this->scope->get('domain'));
                }
            }
        } elseif (\$node instanceof TransNode) {
            if (!\$node->hasNode('domain')) {
                \$node->setNode('domain', \$this->scope->get('domain'));
            }
        }

        return \$node;
    }

    /**
     * {@inheritdoc}
     */
    protected function doLeaveNode(Node \$node, Environment \$env): ?Node
    {
        if (\$node instanceof TransDefaultDomainNode) {
            return null;
        }

        if (\$node instanceof BlockNode || \$node instanceof ModuleNode) {
            \$this->scope = \$this->scope->leave();
        }

        return \$node;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority(): int
    {
        return -10;
    }

    private function isNamedArguments(Node \$arguments): bool
    {
        foreach (\$arguments as \$name => \$node) {
            if (!\\is_int(\$name)) {
                return true;
            }
        }

        return false;
    }

    private function getVarName(): string
    {
        return sprintf('__internal_%s', hash('sha256', uniqid(mt_rand(), true), false));
    }
}
", "@app/vendor/symfony/twig-bridge/NodeVisitor/TranslationDefaultDomainNodeVisitor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\NodeVisitor\\TranslationDefaultDomainNodeVisitor.php");
    }
}
