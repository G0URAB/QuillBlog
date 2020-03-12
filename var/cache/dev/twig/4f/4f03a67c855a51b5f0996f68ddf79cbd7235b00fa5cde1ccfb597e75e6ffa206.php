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

/* @app/vendor/twig/twig/src/Profiler/Node/LeaveProfileNode.php */
class __TwigTemplate_d99ef4206edff4ee34f57cc5e05fe6638c580563401aa19ff348ba6ecae0bd7c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Profiler/Node/LeaveProfileNode.php"));

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

namespace Twig\\Profiler\\Node;

use Twig\\Compiler;
use Twig\\Node\\Node;

/**
 * Represents a profile leave node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LeaveProfileNode extends Node
{
    public function __construct(string \$varName)
    {
        parent::__construct([], ['var_name' => \$varName]);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->write(\"\\n\")
            ->write(sprintf(\"\\\$%s->leave(\\\$%s);\\n\\n\", \$this->getAttribute('var_name'), \$this->getAttribute('var_name').'_prof'))
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Profiler/Node/LeaveProfileNode.php";
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

namespace Twig\\Profiler\\Node;

use Twig\\Compiler;
use Twig\\Node\\Node;

/**
 * Represents a profile leave node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LeaveProfileNode extends Node
{
    public function __construct(string \$varName)
    {
        parent::__construct([], ['var_name' => \$varName]);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->write(\"\\n\")
            ->write(sprintf(\"\\\$%s->leave(\\\$%s);\\n\\n\", \$this->getAttribute('var_name'), \$this->getAttribute('var_name').'_prof'))
        ;
    }
}
", "@app/vendor/twig/twig/src/Profiler/Node/LeaveProfileNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Profiler\\Node\\LeaveProfileNode.php");
    }
}
