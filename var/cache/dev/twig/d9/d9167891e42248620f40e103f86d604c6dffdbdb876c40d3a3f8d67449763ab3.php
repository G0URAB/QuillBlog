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

/* @app/vendor/twig/twig/src/Node/ImportNode.php */
class __TwigTemplate_85d720496991191a3022d94326ebc430ff69a628bacc682a9209664b7e3f71cc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/ImportNode.php"));

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
use Twig\\Node\\Expression\\NameExpression;

/**
 * Represents an import node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ImportNode extends Node
{
    public function __construct(AbstractExpression \$expr, AbstractExpression \$var, int \$lineno, string \$tag = null, bool \$global = true)
    {
        parent::__construct(['expr' => \$expr, 'var' => \$var], ['global' => \$global], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write('\$macros[')
            ->repr(\$this->getNode('var')->getAttribute('name'))
            ->raw('] = ')
        ;

        if (\$this->getAttribute('global')) {
            \$compiler
                ->raw('\$this->macros[')
                ->repr(\$this->getNode('var')->getAttribute('name'))
                ->raw('] = ')
            ;
        }

        if (\$this->getNode('expr') instanceof NameExpression && '_self' === \$this->getNode('expr')->getAttribute('name')) {
            \$compiler->raw('\$this');
        } else {
            \$compiler
                ->raw('\$this->loadTemplate(')
                ->subcompile(\$this->getNode('expr'))
                ->raw(', ')
                ->repr(\$this->getTemplateName())
                ->raw(', ')
                ->repr(\$this->getTemplateLine())
                ->raw(')->unwrap()')
            ;
        }

        \$compiler->raw(\";\\n\");
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/ImportNode.php";
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

namespace Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Expression\\AbstractExpression;
use Twig\\Node\\Expression\\NameExpression;

/**
 * Represents an import node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ImportNode extends Node
{
    public function __construct(AbstractExpression \$expr, AbstractExpression \$var, int \$lineno, string \$tag = null, bool \$global = true)
    {
        parent::__construct(['expr' => \$expr, 'var' => \$var], ['global' => \$global], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write('\$macros[')
            ->repr(\$this->getNode('var')->getAttribute('name'))
            ->raw('] = ')
        ;

        if (\$this->getAttribute('global')) {
            \$compiler
                ->raw('\$this->macros[')
                ->repr(\$this->getNode('var')->getAttribute('name'))
                ->raw('] = ')
            ;
        }

        if (\$this->getNode('expr') instanceof NameExpression && '_self' === \$this->getNode('expr')->getAttribute('name')) {
            \$compiler->raw('\$this');
        } else {
            \$compiler
                ->raw('\$this->loadTemplate(')
                ->subcompile(\$this->getNode('expr'))
                ->raw(', ')
                ->repr(\$this->getTemplateName())
                ->raw(', ')
                ->repr(\$this->getTemplateLine())
                ->raw(')->unwrap()')
            ;
        }

        \$compiler->raw(\";\\n\");
    }
}
", "@app/vendor/twig/twig/src/Node/ImportNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\ImportNode.php");
    }
}
