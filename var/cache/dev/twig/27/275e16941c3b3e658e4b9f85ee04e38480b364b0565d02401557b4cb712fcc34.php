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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/HaltCompiler.php */
class __TwigTemplate_edc00a62decc1aef04a74577a7980b8f2e4c576f8f417b788217e14e284ee963 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/HaltCompiler.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node\\Stmt;

class HaltCompiler extends Stmt
{
    /** @var string Remaining text after halt compiler statement. */
    public \$remaining;

    /**
     * Constructs a __halt_compiler node.
     *
     * @param string \$remaining  Remaining text after halt compiler statement.
     * @param array  \$attributes Additional attributes
     */
    public function __construct(string \$remaining, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->remaining = \$remaining;
    }

    public function getSubNodeNames() : array {
        return ['remaining'];
    }
    
    public function getType() : string {
        return 'Stmt_HaltCompiler';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/HaltCompiler.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node\\Stmt;

class HaltCompiler extends Stmt
{
    /** @var string Remaining text after halt compiler statement. */
    public \$remaining;

    /**
     * Constructs a __halt_compiler node.
     *
     * @param string \$remaining  Remaining text after halt compiler statement.
     * @param array  \$attributes Additional attributes
     */
    public function __construct(string \$remaining, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->remaining = \$remaining;
    }

    public function getSubNodeNames() : array {
        return ['remaining'];
    }
    
    public function getType() : string {
        return 'Stmt_HaltCompiler';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/HaltCompiler.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\HaltCompiler.php");
    }
}
