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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/UnionType.php */
class __TwigTemplate_6f396f7074b6b2920adeb54b3ab3366d714cfa9c66997b146e1a707595c1ce8b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/UnionType.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

class UnionType extends NodeAbstract
{
    /** @var (Identifier|Name)[] Types */
    public \$types;

    /**
     * Constructs a union type.
     *
     * @param (Identifier|Name)[] \$types      Types
     * @param array               \$attributes Additional attributes
     */
    public function __construct(array \$types, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->types = \$types;
    }

    public function getSubNodeNames() : array {
        return ['types'];
    }
    
    public function getType() : string {
        return 'UnionType';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/UnionType.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

class UnionType extends NodeAbstract
{
    /** @var (Identifier|Name)[] Types */
    public \$types;

    /**
     * Constructs a union type.
     *
     * @param (Identifier|Name)[] \$types      Types
     * @param array               \$attributes Additional attributes
     */
    public function __construct(array \$types, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->types = \$types;
    }

    public function getSubNodeNames() : array {
        return ['types'];
    }
    
    public function getType() : string {
        return 'UnionType';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/UnionType.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\UnionType.php");
    }
}
