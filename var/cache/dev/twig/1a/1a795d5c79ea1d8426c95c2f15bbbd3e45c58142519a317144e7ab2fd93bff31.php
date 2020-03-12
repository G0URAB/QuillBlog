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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Goto_.php */
class __TwigTemplate_c09a17a1e5f9b6417519fe432e9e98a5edac0fc6088afc21dcfd33c868a21c1a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Goto_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node\\Identifier;
use PhpParser\\Node\\Stmt;

class Goto_ extends Stmt
{
    /** @var Identifier Name of label to jump to */
    public \$name;

    /**
     * Constructs a goto node.
     *
     * @param string|Identifier \$name       Name of label to jump to
     * @param array             \$attributes Additional attributes
     */
    public function __construct(\$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
    }

    public function getSubNodeNames() : array {
        return ['name'];
    }
    
    public function getType() : string {
        return 'Stmt_Goto';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Goto_.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node\\Identifier;
use PhpParser\\Node\\Stmt;

class Goto_ extends Stmt
{
    /** @var Identifier Name of label to jump to */
    public \$name;

    /**
     * Constructs a goto node.
     *
     * @param string|Identifier \$name       Name of label to jump to
     * @param array             \$attributes Additional attributes
     */
    public function __construct(\$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
    }

    public function getSubNodeNames() : array {
        return ['name'];
    }
    
    public function getType() : string {
        return 'Stmt_Goto';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Goto_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\Goto_.php");
    }
}
