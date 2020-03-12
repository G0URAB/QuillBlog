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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/NullableType.php */
class __TwigTemplate_71dfd3cbfa47e6f2ce45b05075853f753055d7d7675da2a66e80585e2c300425 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/NullableType.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

class NullableType extends NodeAbstract
{
    /** @var Identifier|Name Type */
    public \$type;

    /**
     * Constructs a nullable type (wrapping another type).
     *
     * @param string|Identifier|Name \$type       Type
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(\$type, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->type = \\is_string(\$type) ? new Identifier(\$type) : \$type;
    }

    public function getSubNodeNames() : array {
        return ['type'];
    }
    
    public function getType() : string {
        return 'NullableType';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/NullableType.php";
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

class NullableType extends NodeAbstract
{
    /** @var Identifier|Name Type */
    public \$type;

    /**
     * Constructs a nullable type (wrapping another type).
     *
     * @param string|Identifier|Name \$type       Type
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(\$type, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->type = \\is_string(\$type) ? new Identifier(\$type) : \$type;
    }

    public function getSubNodeNames() : array {
        return ['type'];
    }
    
    public function getType() : string {
        return 'NullableType';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/NullableType.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\NullableType.php");
    }
}
