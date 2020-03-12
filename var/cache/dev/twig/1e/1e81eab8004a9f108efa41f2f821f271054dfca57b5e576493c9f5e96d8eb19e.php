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

/* @app/vendor/twig/twig/src/Profiler/Node/EnterProfileNode.php */
class __TwigTemplate_9c7698b0152fa8712389fff5f92792e2991b466cb75c6b6881a479d2880aa015 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Profiler/Node/EnterProfileNode.php"));

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
 * Represents a profile enter node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class EnterProfileNode extends Node
{
    public function __construct(string \$extensionName, string \$type, string \$name, string \$varName)
    {
        parent::__construct([], ['extension_name' => \$extensionName, 'name' => \$name, 'type' => \$type, 'var_name' => \$varName]);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->write(sprintf('\$%s = \$this->extensions[', \$this->getAttribute('var_name')))
            ->repr(\$this->getAttribute('extension_name'))
            ->raw(\"];\\n\")
            ->write(sprintf('\$%s->enter(\$%s = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), ', \$this->getAttribute('var_name'), \$this->getAttribute('var_name').'_prof'))
            ->repr(\$this->getAttribute('type'))
            ->raw(', ')
            ->repr(\$this->getAttribute('name'))
            ->raw(\"));\\n\\n\")
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Profiler/Node/EnterProfileNode.php";
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
 * Represents a profile enter node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class EnterProfileNode extends Node
{
    public function __construct(string \$extensionName, string \$type, string \$name, string \$varName)
    {
        parent::__construct([], ['extension_name' => \$extensionName, 'name' => \$name, 'type' => \$type, 'var_name' => \$varName]);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->write(sprintf('\$%s = \$this->extensions[', \$this->getAttribute('var_name')))
            ->repr(\$this->getAttribute('extension_name'))
            ->raw(\"];\\n\")
            ->write(sprintf('\$%s->enter(\$%s = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), ', \$this->getAttribute('var_name'), \$this->getAttribute('var_name').'_prof'))
            ->repr(\$this->getAttribute('type'))
            ->raw(', ')
            ->repr(\$this->getAttribute('name'))
            ->raw(\"));\\n\\n\")
        ;
    }
}
", "@app/vendor/twig/twig/src/Profiler/Node/EnterProfileNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Profiler\\Node\\EnterProfileNode.php");
    }
}
