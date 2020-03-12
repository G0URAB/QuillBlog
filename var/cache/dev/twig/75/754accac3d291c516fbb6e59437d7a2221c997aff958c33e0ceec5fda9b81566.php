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

/* @app/vendor/twig/twig/src/Node/Expression/Unary/AbstractUnary.php */
class __TwigTemplate_8435817c09586c68f06615e72cc8ee27bb9d70c4332ebe04e08309b8d475e760 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/Expression/Unary/AbstractUnary.php"));

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

namespace Twig\\Node\\Expression\\Unary;

use Twig\\Compiler;
use Twig\\Node\\Expression\\AbstractExpression;
use Twig\\Node\\Node;

abstract class AbstractUnary extends AbstractExpression
{
    public function __construct(Node \$node, int \$lineno)
    {
        parent::__construct(['node' => \$node], [], \$lineno);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler->raw(' ');
        \$this->operator(\$compiler);
        \$compiler->subcompile(\$this->getNode('node'));
    }

    abstract public function operator(Compiler \$compiler): Compiler;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/Expression/Unary/AbstractUnary.php";
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

namespace Twig\\Node\\Expression\\Unary;

use Twig\\Compiler;
use Twig\\Node\\Expression\\AbstractExpression;
use Twig\\Node\\Node;

abstract class AbstractUnary extends AbstractExpression
{
    public function __construct(Node \$node, int \$lineno)
    {
        parent::__construct(['node' => \$node], [], \$lineno);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler->raw(' ');
        \$this->operator(\$compiler);
        \$compiler->subcompile(\$this->getNode('node'));
    }

    abstract public function operator(Compiler \$compiler): Compiler;
}
", "@app/vendor/twig/twig/src/Node/Expression/Unary/AbstractUnary.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\Expression\\Unary\\AbstractUnary.php");
    }
}
