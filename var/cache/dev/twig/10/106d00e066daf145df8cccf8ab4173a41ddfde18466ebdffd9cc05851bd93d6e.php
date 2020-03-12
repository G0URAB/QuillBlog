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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/Encapsed.php */
class __TwigTemplate_d23317a9934683ab245515435db6ea0b8f85be53ef3b49b8b83daafbce6812f8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/Encapsed.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Scalar;

use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Scalar;

class Encapsed extends Scalar
{
    /** @var Expr[] list of string parts */
    public \$parts;

    /**
     * Constructs an encapsed string node.
     *
     * @param Expr[] \$parts      Encaps list
     * @param array  \$attributes Additional attributes
     */
    public function __construct(array \$parts, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->parts = \$parts;
    }

    public function getSubNodeNames() : array {
        return ['parts'];
    }
    
    public function getType() : string {
        return 'Scalar_Encapsed';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/Encapsed.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Scalar;

use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Scalar;

class Encapsed extends Scalar
{
    /** @var Expr[] list of string parts */
    public \$parts;

    /**
     * Constructs an encapsed string node.
     *
     * @param Expr[] \$parts      Encaps list
     * @param array  \$attributes Additional attributes
     */
    public function __construct(array \$parts, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->parts = \$parts;
    }

    public function getSubNodeNames() : array {
        return ['parts'];
    }
    
    public function getType() : string {
        return 'Scalar_Encapsed';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/Encapsed.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Scalar\\Encapsed.php");
    }
}
