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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Builder/Use_.php */
class __TwigTemplate_6e883dc0433bde845260903bf17d828ddd3ab90d4bbe398278fc8b709b22da1d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Use_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser\\Builder;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;
use PhpParser\\Node\\Stmt;

class Use_ implements Builder
{
    protected \$name;
    protected \$type;
    protected \$alias = null;

    /**
     * Creates a name use (alias) builder.
     *
     * @param Node\\Name|string \$name Name of the entity (namespace, class, function, constant) to alias
     * @param int              \$type One of the Stmt\\Use_::TYPE_* constants
     */
    public function __construct(\$name, int \$type) {
        \$this->name = BuilderHelpers::normalizeName(\$name);
        \$this->type = \$type;
    }

    /**
     * Sets alias for used name.
     *
     * @param string \$alias Alias to use (last component of full name by default)
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function as(string \$alias) {
        \$this->alias = \$alias;
        return \$this;
    }

    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : Node {
        return new Stmt\\Use_([
            new Stmt\\UseUse(\$this->name, \$this->alias)
        ], \$this->type);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Use_.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser\\Builder;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;
use PhpParser\\Node\\Stmt;

class Use_ implements Builder
{
    protected \$name;
    protected \$type;
    protected \$alias = null;

    /**
     * Creates a name use (alias) builder.
     *
     * @param Node\\Name|string \$name Name of the entity (namespace, class, function, constant) to alias
     * @param int              \$type One of the Stmt\\Use_::TYPE_* constants
     */
    public function __construct(\$name, int \$type) {
        \$this->name = BuilderHelpers::normalizeName(\$name);
        \$this->type = \$type;
    }

    /**
     * Sets alias for used name.
     *
     * @param string \$alias Alias to use (last component of full name by default)
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function as(string \$alias) {
        \$this->alias = \$alias;
        return \$this;
    }

    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : Node {
        return new Stmt\\Use_([
            new Stmt\\UseUse(\$this->name, \$this->alias)
        ], \$this->type);
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Use_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Builder\\Use_.php");
    }
}
