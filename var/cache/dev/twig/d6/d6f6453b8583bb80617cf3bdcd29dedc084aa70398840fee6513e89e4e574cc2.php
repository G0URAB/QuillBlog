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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Internal/DiffElem.php */
class __TwigTemplate_0165cf9471ebeb24363cc27cc41e13332361b3053bb2944caf28c64c728a5d81 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Internal/DiffElem.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Internal;

/**
 * @internal
 */
class DiffElem
{
    const TYPE_KEEP = 0;
    const TYPE_REMOVE = 1;
    const TYPE_ADD = 2;
    const TYPE_REPLACE = 3;

    /** @var int One of the TYPE_* constants */
    public \$type;
    /** @var mixed Is null for add operations */
    public \$old;
    /** @var mixed Is null for remove operations */
    public \$new;

    public function __construct(int \$type, \$old, \$new) {
        \$this->type = \$type;
        \$this->old = \$old;
        \$this->new = \$new;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Internal/DiffElem.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Internal;

/**
 * @internal
 */
class DiffElem
{
    const TYPE_KEEP = 0;
    const TYPE_REMOVE = 1;
    const TYPE_ADD = 2;
    const TYPE_REPLACE = 3;

    /** @var int One of the TYPE_* constants */
    public \$type;
    /** @var mixed Is null for add operations */
    public \$old;
    /** @var mixed Is null for remove operations */
    public \$new;

    public function __construct(int \$type, \$old, \$new) {
        \$this->type = \$type;
        \$this->old = \$old;
        \$this->new = \$new;
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Internal/DiffElem.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Internal\\DiffElem.php");
    }
}
