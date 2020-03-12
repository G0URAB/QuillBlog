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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Name/FullyQualified.php */
class __TwigTemplate_6fd925482c57a29b02dd397b6e918d3fb0ccd147ce0e86cc13b614216618e827 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Name/FullyQualified.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Name;

class FullyQualified extends \\PhpParser\\Node\\Name
{
    /**
     * Checks whether the name is unqualified. (E.g. Name)
     *
     * @return bool Whether the name is unqualified
     */
    public function isUnqualified() : bool {
        return false;
    }

    /**
     * Checks whether the name is qualified. (E.g. Name\\Name)
     *
     * @return bool Whether the name is qualified
     */
    public function isQualified() : bool {
        return false;
    }

    /**
     * Checks whether the name is fully qualified. (E.g. \\Name)
     *
     * @return bool Whether the name is fully qualified
     */
    public function isFullyQualified() : bool {
        return true;
    }

    /**
     * Checks whether the name is explicitly relative to the current namespace. (E.g. namespace\\Name)
     *
     * @return bool Whether the name is relative
     */
    public function isRelative() : bool {
        return false;
    }

    public function toCodeString() : string {
        return '\\\\' . \$this->toString();
    }
    
    public function getType() : string {
        return 'Name_FullyQualified';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Name/FullyQualified.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Name;

class FullyQualified extends \\PhpParser\\Node\\Name
{
    /**
     * Checks whether the name is unqualified. (E.g. Name)
     *
     * @return bool Whether the name is unqualified
     */
    public function isUnqualified() : bool {
        return false;
    }

    /**
     * Checks whether the name is qualified. (E.g. Name\\Name)
     *
     * @return bool Whether the name is qualified
     */
    public function isQualified() : bool {
        return false;
    }

    /**
     * Checks whether the name is fully qualified. (E.g. \\Name)
     *
     * @return bool Whether the name is fully qualified
     */
    public function isFullyQualified() : bool {
        return true;
    }

    /**
     * Checks whether the name is explicitly relative to the current namespace. (E.g. namespace\\Name)
     *
     * @return bool Whether the name is relative
     */
    public function isRelative() : bool {
        return false;
    }

    public function toCodeString() : string {
        return '\\\\' . \$this->toString();
    }
    
    public function getType() : string {
        return 'Name_FullyQualified';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Name/FullyQualified.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Name\\FullyQualified.php");
    }
}
