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

/* @app/vendor/twig/twig/src/Node/Expression/Binary/NotInBinary.php */
class __TwigTemplate_42501448ed7304febc05a341259957750a4146eb999bae5377f9cce1bde7de25 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/Expression/Binary/NotInBinary.php"));

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

namespace Twig\\Node\\Expression\\Binary;

use Twig\\Compiler;

class NotInBinary extends AbstractBinary
{
    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->raw('!twig_in_filter(')
            ->subcompile(\$this->getNode('left'))
            ->raw(', ')
            ->subcompile(\$this->getNode('right'))
            ->raw(')')
        ;
    }

    public function operator(Compiler \$compiler): Compiler
    {
        return \$compiler->raw('not in');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/Expression/Binary/NotInBinary.php";
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

namespace Twig\\Node\\Expression\\Binary;

use Twig\\Compiler;

class NotInBinary extends AbstractBinary
{
    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->raw('!twig_in_filter(')
            ->subcompile(\$this->getNode('left'))
            ->raw(', ')
            ->subcompile(\$this->getNode('right'))
            ->raw(')')
        ;
    }

    public function operator(Compiler \$compiler): Compiler
    {
        return \$compiler->raw('not in');
    }
}
", "@app/vendor/twig/twig/src/Node/Expression/Binary/NotInBinary.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\Expression\\Binary\\NotInBinary.php");
    }
}
