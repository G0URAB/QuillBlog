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

/* @app/vendor/twig/twig/src/Node/EmbedNode.php */
class __TwigTemplate_438e245fc19c5e0e9bf1d2e1a0f59279b26f4c60d151b2769d393d4f98781e2d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/EmbedNode.php"));

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
 * Represents an embed node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class EmbedNode extends IncludeNode
{
    // we don't inject the module to avoid node visitors to traverse it twice (as it will be already visited in the main module)
    public function __construct(string \$name, int \$index, AbstractExpression \$variables = null, bool \$only = false, bool \$ignoreMissing = false, int \$lineno, string \$tag = null)
    {
        parent::__construct(new ConstantExpression('not_used', \$lineno), \$variables, \$only, \$ignoreMissing, \$lineno, \$tag);

        \$this->setAttribute('name', \$name);
        \$this->setAttribute('index', \$index);
    }

    protected function addGetTemplate(Compiler \$compiler): void
    {
        \$compiler
            ->write('\$this->loadTemplate(')
            ->string(\$this->getAttribute('name'))
            ->raw(', ')
            ->repr(\$this->getTemplateName())
            ->raw(', ')
            ->repr(\$this->getTemplateLine())
            ->raw(', ')
            ->string(\$this->getAttribute('index'))
            ->raw(')')
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/EmbedNode.php";
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
 * Represents an embed node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class EmbedNode extends IncludeNode
{
    // we don't inject the module to avoid node visitors to traverse it twice (as it will be already visited in the main module)
    public function __construct(string \$name, int \$index, AbstractExpression \$variables = null, bool \$only = false, bool \$ignoreMissing = false, int \$lineno, string \$tag = null)
    {
        parent::__construct(new ConstantExpression('not_used', \$lineno), \$variables, \$only, \$ignoreMissing, \$lineno, \$tag);

        \$this->setAttribute('name', \$name);
        \$this->setAttribute('index', \$index);
    }

    protected function addGetTemplate(Compiler \$compiler): void
    {
        \$compiler
            ->write('\$this->loadTemplate(')
            ->string(\$this->getAttribute('name'))
            ->raw(', ')
            ->repr(\$this->getTemplateName())
            ->raw(', ')
            ->repr(\$this->getTemplateLine())
            ->raw(', ')
            ->string(\$this->getAttribute('index'))
            ->raw(')')
        ;
    }
}
", "@app/vendor/twig/twig/src/Node/EmbedNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\EmbedNode.php");
    }
}
