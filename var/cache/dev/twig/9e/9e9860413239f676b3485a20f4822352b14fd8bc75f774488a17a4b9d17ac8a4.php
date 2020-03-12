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

/* @app/vendor/symfony/twig-bridge/Node/StopwatchNode.php */
class __TwigTemplate_bb2594229323a9283dbbf718a512f5badda6eb2fb16068b91fea0e2d60b8a7f9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Node/StopwatchNode.php"));

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
use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\Node;

/**
 * Represents a stopwatch node.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
final class StopwatchNode extends Node
{
    public function __construct(Node \$name, Node \$body, AssignNameExpression \$var, int \$lineno = 0, string \$tag = null)
    {
        parent::__construct(['body' => \$body, 'name' => \$name, 'var' => \$var], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write('')
            ->subcompile(\$this->getNode('var'))
            ->raw(' = ')
            ->subcompile(\$this->getNode('name'))
            ->write(\";\\n\")
            ->write(\"\\\$this->env->getExtension('Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension')->getStopwatch()->start(\")
            ->subcompile(\$this->getNode('var'))
            ->raw(\", 'template');\\n\")
            ->subcompile(\$this->getNode('body'))
            ->write(\"\\\$this->env->getExtension('Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension')->getStopwatch()->stop(\")
            ->subcompile(\$this->getNode('var'))
            ->raw(\");\\n\")
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Node/StopwatchNode.php";
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
use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\Node;

/**
 * Represents a stopwatch node.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
final class StopwatchNode extends Node
{
    public function __construct(Node \$name, Node \$body, AssignNameExpression \$var, int \$lineno = 0, string \$tag = null)
    {
        parent::__construct(['body' => \$body, 'name' => \$name, 'var' => \$var], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write('')
            ->subcompile(\$this->getNode('var'))
            ->raw(' = ')
            ->subcompile(\$this->getNode('name'))
            ->write(\";\\n\")
            ->write(\"\\\$this->env->getExtension('Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension')->getStopwatch()->start(\")
            ->subcompile(\$this->getNode('var'))
            ->raw(\", 'template');\\n\")
            ->subcompile(\$this->getNode('body'))
            ->write(\"\\\$this->env->getExtension('Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension')->getStopwatch()->stop(\")
            ->subcompile(\$this->getNode('var'))
            ->raw(\");\\n\")
        ;
    }
}
", "@app/vendor/symfony/twig-bridge/Node/StopwatchNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Node\\StopwatchNode.php");
    }
}
