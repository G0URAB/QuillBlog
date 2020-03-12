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

/* @app/vendor/twig/twig/src/Node/Expression/Binary/AbstractBinary.php */
class __TwigTemplate_ec5d3eb740ab028643b7a81f5cf2104ffa15c93c8dee763fc404cbc4f0b1b335 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/Expression/Binary/AbstractBinary.php"));

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

namespace Twig\\Node\\Expression\\Binary;

use Twig\\Compiler;
use Twig\\Node\\Expression\\AbstractExpression;
use Twig\\Node\\Node;

abstract class AbstractBinary extends AbstractExpression
{
    public function __construct(Node \$left, Node \$right, int \$lineno)
    {
        parent::__construct(['left' => \$left, 'right' => \$right], [], \$lineno);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->raw('(')
            ->subcompile(\$this->getNode('left'))
            ->raw(' ')
        ;
        \$this->operator(\$compiler);
        \$compiler
            ->raw(' ')
            ->subcompile(\$this->getNode('right'))
            ->raw(')')
        ;
    }

    abstract public function operator(Compiler \$compiler): Compiler;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/Expression/Binary/AbstractBinary.php";
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

namespace Twig\\Node\\Expression\\Binary;

use Twig\\Compiler;
use Twig\\Node\\Expression\\AbstractExpression;
use Twig\\Node\\Node;

abstract class AbstractBinary extends AbstractExpression
{
    public function __construct(Node \$left, Node \$right, int \$lineno)
    {
        parent::__construct(['left' => \$left, 'right' => \$right], [], \$lineno);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->raw('(')
            ->subcompile(\$this->getNode('left'))
            ->raw(' ')
        ;
        \$this->operator(\$compiler);
        \$compiler
            ->raw(' ')
            ->subcompile(\$this->getNode('right'))
            ->raw(')')
        ;
    }

    abstract public function operator(Compiler \$compiler): Compiler;
}
", "@app/vendor/twig/twig/src/Node/Expression/Binary/AbstractBinary.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\Expression\\Binary\\AbstractBinary.php");
    }
}
