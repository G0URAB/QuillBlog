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

/* @app/vendor/twig/twig/src/Node/DeprecatedNode.php */
class __TwigTemplate_69a38fce6539956d410d4a79f003813ecf65acc73fc0c9cb7cd913df4f46547a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/DeprecatedNode.php"));

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
use Twig\\Node\\Expression\\ConstantExpression;

/**
 * Represents a deprecated node.
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class DeprecatedNode extends Node
{
    public function __construct(AbstractExpression \$expr, int \$lineno, string \$tag = null)
    {
        parent::__construct(['expr' => \$expr], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler->addDebugInfo(\$this);

        \$expr = \$this->getNode('expr');

        if (\$expr instanceof ConstantExpression) {
            \$compiler->write('@trigger_error(')
                ->subcompile(\$expr);
        } else {
            \$varName = \$compiler->getVarName();
            \$compiler->write(sprintf('\$%s = ', \$varName))
                ->subcompile(\$expr)
                ->raw(\";\\n\")
                ->write(sprintf('@trigger_error(\$%s', \$varName));
        }

        \$compiler
            ->raw('.')
            ->string(sprintf(' (\"%s\" at line %d).', \$this->getTemplateName(), \$this->getTemplateLine()))
            ->raw(\", E_USER_DEPRECATED);\\n\")
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/DeprecatedNode.php";
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
use Twig\\Node\\Expression\\ConstantExpression;

/**
 * Represents a deprecated node.
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class DeprecatedNode extends Node
{
    public function __construct(AbstractExpression \$expr, int \$lineno, string \$tag = null)
    {
        parent::__construct(['expr' => \$expr], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler->addDebugInfo(\$this);

        \$expr = \$this->getNode('expr');

        if (\$expr instanceof ConstantExpression) {
            \$compiler->write('@trigger_error(')
                ->subcompile(\$expr);
        } else {
            \$varName = \$compiler->getVarName();
            \$compiler->write(sprintf('\$%s = ', \$varName))
                ->subcompile(\$expr)
                ->raw(\";\\n\")
                ->write(sprintf('@trigger_error(\$%s', \$varName));
        }

        \$compiler
            ->raw('.')
            ->string(sprintf(' (\"%s\" at line %d).', \$this->getTemplateName(), \$this->getTemplateLine()))
            ->raw(\", E_USER_DEPRECATED);\\n\")
        ;
    }
}
", "@app/vendor/twig/twig/src/Node/DeprecatedNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\DeprecatedNode.php");
    }
}
