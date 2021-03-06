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

/* @app/vendor/twig/twig/src/Node/IfNode.php */
class __TwigTemplate_91bb6938973f587f4570d52b1c142ce7bf8f24dc42dd5c41261df563ee5f243e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/IfNode.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node;

use Twig\\Compiler;

/**
 * Represents an if node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IfNode extends Node
{
    public function __construct(Node \$tests, Node \$else = null, int \$lineno, string \$tag = null)
    {
        \$nodes = ['tests' => \$tests];
        if (null !== \$else) {
            \$nodes['else'] = \$else;
        }

        parent::__construct(\$nodes, [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler->addDebugInfo(\$this);
        for (\$i = 0, \$count = \\count(\$this->getNode('tests')); \$i < \$count; \$i += 2) {
            if (\$i > 0) {
                \$compiler
                    ->outdent()
                    ->write('} elseif (')
                ;
            } else {
                \$compiler
                    ->write('if (')
                ;
            }

            \$compiler
                ->subcompile(\$this->getNode('tests')->getNode(\$i))
                ->raw(\") {\\n\")
                ->indent()
                ->subcompile(\$this->getNode('tests')->getNode(\$i + 1))
            ;
        }

        if (\$this->hasNode('else')) {
            \$compiler
                ->outdent()
                ->write(\"} else {\\n\")
                ->indent()
                ->subcompile(\$this->getNode('else'))
            ;
        }

        \$compiler
            ->outdent()
            ->write(\"}\\n\");
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/IfNode.php";
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
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node;

use Twig\\Compiler;

/**
 * Represents an if node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IfNode extends Node
{
    public function __construct(Node \$tests, Node \$else = null, int \$lineno, string \$tag = null)
    {
        \$nodes = ['tests' => \$tests];
        if (null !== \$else) {
            \$nodes['else'] = \$else;
        }

        parent::__construct(\$nodes, [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler->addDebugInfo(\$this);
        for (\$i = 0, \$count = \\count(\$this->getNode('tests')); \$i < \$count; \$i += 2) {
            if (\$i > 0) {
                \$compiler
                    ->outdent()
                    ->write('} elseif (')
                ;
            } else {
                \$compiler
                    ->write('if (')
                ;
            }

            \$compiler
                ->subcompile(\$this->getNode('tests')->getNode(\$i))
                ->raw(\") {\\n\")
                ->indent()
                ->subcompile(\$this->getNode('tests')->getNode(\$i + 1))
            ;
        }

        if (\$this->hasNode('else')) {
            \$compiler
                ->outdent()
                ->write(\"} else {\\n\")
                ->indent()
                ->subcompile(\$this->getNode('else'))
            ;
        }

        \$compiler
            ->outdent()
            ->write(\"}\\n\");
    }
}
", "@app/vendor/twig/twig/src/Node/IfNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\IfNode.php");
    }
}
