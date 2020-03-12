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

/* @app/vendor/twig/twig/src/Node/Expression/Binary/NotEqualBinary.php */
class __TwigTemplate_f56f9813576ed5a1f23f82ccda8a198175ba072d00c14e5320015cc76fa4b760 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/Expression/Binary/NotEqualBinary.php"));

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

class NotEqualBinary extends AbstractBinary
{
    public function compile(Compiler \$compiler): void
    {
        if (\\PHP_VERSION_ID >= 80000) {
            parent::compile(\$compiler);

            return;
        }

        \$compiler
            ->raw('0 !== twig_compare(')
            ->subcompile(\$this->getNode('left'))
            ->raw(', ')
            ->subcompile(\$this->getNode('right'))
            ->raw(')')
        ;
    }

    public function operator(Compiler \$compiler): Compiler
    {
        return \$compiler->raw('!=');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/Expression/Binary/NotEqualBinary.php";
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

class NotEqualBinary extends AbstractBinary
{
    public function compile(Compiler \$compiler): void
    {
        if (\\PHP_VERSION_ID >= 80000) {
            parent::compile(\$compiler);

            return;
        }

        \$compiler
            ->raw('0 !== twig_compare(')
            ->subcompile(\$this->getNode('left'))
            ->raw(', ')
            ->subcompile(\$this->getNode('right'))
            ->raw(')')
        ;
    }

    public function operator(Compiler \$compiler): Compiler
    {
        return \$compiler->raw('!=');
    }
}
", "@app/vendor/twig/twig/src/Node/Expression/Binary/NotEqualBinary.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\Expression\\Binary\\NotEqualBinary.php");
    }
}