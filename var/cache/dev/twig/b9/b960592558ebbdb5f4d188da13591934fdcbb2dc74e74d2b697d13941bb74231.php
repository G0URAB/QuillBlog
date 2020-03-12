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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Identifier.php */
class __TwigTemplate_affb4373b18f4265d619b0c642f60bc5b9e3e32c82e7fb43b2de03241085cb78 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Identifier.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node;

use PhpParser\\NodeAbstract;

/**
 * Represents a non-namespaced name. Namespaced names are represented using Name nodes.
 */
class Identifier extends NodeAbstract
{
    /** @var string Identifier as string */
    public \$name;

    private static \$specialClassNames = [
        'self'   => true,
        'parent' => true,
        'static' => true,
    ];

    /**
     * Constructs an identifier node.
     *
     * @param string \$name       Identifier as string
     * @param array  \$attributes Additional attributes
     */
    public function __construct(string \$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \$name;
    }

    public function getSubNodeNames() : array {
        return ['name'];
    }

    /**
     * Get identifier as string.
     *
     * @return string Identifier as string.
     */
    public function toString() : string {
        return \$this->name;
    }

    /**
     * Get lowercased identifier as string.
     *
     * @return string Lowercased identifier as string
     */
    public function toLowerString() : string {
        return strtolower(\$this->name);
    }

    /**
     * Checks whether the identifier is a special class name (self, parent or static).
     *
     * @return bool Whether identifier is a special class name
     */
    public function isSpecialClassName() : bool {
        return isset(self::\$specialClassNames[strtolower(\$this->name)]);
    }

    /**
     * Get identifier as string.
     *
     * @return string Identifier as string
     */
    public function __toString() : string {
        return \$this->name;
    }
    
    public function getType() : string {
        return 'Identifier';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Identifier.php";
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

/**
 * Represents a non-namespaced name. Namespaced names are represented using Name nodes.
 */
class Identifier extends NodeAbstract
{
    /** @var string Identifier as string */
    public \$name;

    private static \$specialClassNames = [
        'self'   => true,
        'parent' => true,
        'static' => true,
    ];

    /**
     * Constructs an identifier node.
     *
     * @param string \$name       Identifier as string
     * @param array  \$attributes Additional attributes
     */
    public function __construct(string \$name, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \$name;
    }

    public function getSubNodeNames() : array {
        return ['name'];
    }

    /**
     * Get identifier as string.
     *
     * @return string Identifier as string.
     */
    public function toString() : string {
        return \$this->name;
    }

    /**
     * Get lowercased identifier as string.
     *
     * @return string Lowercased identifier as string
     */
    public function toLowerString() : string {
        return strtolower(\$this->name);
    }

    /**
     * Checks whether the identifier is a special class name (self, parent or static).
     *
     * @return bool Whether identifier is a special class name
     */
    public function isSpecialClassName() : bool {
        return isset(self::\$specialClassNames[strtolower(\$this->name)]);
    }

    /**
     * Get identifier as string.
     *
     * @return string Identifier as string
     */
    public function __toString() : string {
        return \$this->name;
    }
    
    public function getType() : string {
        return 'Identifier';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Identifier.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Identifier.php");
    }
}
