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

/* @app/vendor/twig/twig/src/Node/SandboxNode.php */
class __TwigTemplate_50eba080f82a1706389e416eb6b715506bd5003dddb0974445d956d4a7d5e2c1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/SandboxNode.php"));

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

/**
 * Represents a sandbox node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SandboxNode extends Node
{
    public function __construct(Node \$body, int \$lineno, string \$tag = null)
    {
        parent::__construct(['body' => \$body], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write(\"if (!\\\$alreadySandboxed = \\\$this->sandbox->isSandboxed()) {\\n\")
            ->indent()
            ->write(\"\\\$this->sandbox->enableSandbox();\\n\")
            ->outdent()
            ->write(\"}\\n\")
            ->subcompile(\$this->getNode('body'))
            ->write(\"if (!\\\$alreadySandboxed) {\\n\")
            ->indent()
            ->write(\"\\\$this->sandbox->disableSandbox();\\n\")
            ->outdent()
            ->write(\"}\\n\")
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/SandboxNode.php";
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

/**
 * Represents a sandbox node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SandboxNode extends Node
{
    public function __construct(Node \$body, int \$lineno, string \$tag = null)
    {
        parent::__construct(['body' => \$body], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write(\"if (!\\\$alreadySandboxed = \\\$this->sandbox->isSandboxed()) {\\n\")
            ->indent()
            ->write(\"\\\$this->sandbox->enableSandbox();\\n\")
            ->outdent()
            ->write(\"}\\n\")
            ->subcompile(\$this->getNode('body'))
            ->write(\"if (!\\\$alreadySandboxed) {\\n\")
            ->indent()
            ->write(\"\\\$this->sandbox->disableSandbox();\\n\")
            ->outdent()
            ->write(\"}\\n\")
        ;
    }
}
", "@app/vendor/twig/twig/src/Node/SandboxNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\SandboxNode.php");
    }
}
