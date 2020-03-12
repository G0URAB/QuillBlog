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

/* @app/vendor/symfony/twig-bridge/NodeVisitor/Scope.php */
class __TwigTemplate_7ea488c05ce20fbe5e3b198e3429eb0eacde4c49ee5242926b54b78cd67907a7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/NodeVisitor/Scope.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\NodeVisitor;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class Scope
{
    private \$parent;
    private \$data = [];
    private \$left = false;

    public function __construct(self \$parent = null)
    {
        \$this->parent = \$parent;
    }

    /**
     * Opens a new child scope.
     *
     * @return self
     */
    public function enter()
    {
        return new self(\$this);
    }

    /**
     * Closes current scope and returns parent one.
     *
     * @return self|null
     */
    public function leave()
    {
        \$this->left = true;

        return \$this->parent;
    }

    /**
     * Stores data into current scope.
     *
     * @return \$this
     *
     * @throws \\LogicException
     */
    public function set(string \$key, \$value)
    {
        if (\$this->left) {
            throw new \\LogicException('Left scope is not mutable.');
        }

        \$this->data[\$key] = \$value;

        return \$this;
    }

    /**
     * Tests if a data is visible from current scope.
     *
     * @return bool
     */
    public function has(string \$key)
    {
        if (\\array_key_exists(\$key, \$this->data)) {
            return true;
        }

        if (null === \$this->parent) {
            return false;
        }

        return \$this->parent->has(\$key);
    }

    /**
     * Returns data visible from current scope.
     *
     * @return mixed
     */
    public function get(string \$key, \$default = null)
    {
        if (\\array_key_exists(\$key, \$this->data)) {
            return \$this->data[\$key];
        }

        if (null === \$this->parent) {
            return \$default;
        }

        return \$this->parent->get(\$key, \$default);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/NodeVisitor/Scope.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\NodeVisitor;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class Scope
{
    private \$parent;
    private \$data = [];
    private \$left = false;

    public function __construct(self \$parent = null)
    {
        \$this->parent = \$parent;
    }

    /**
     * Opens a new child scope.
     *
     * @return self
     */
    public function enter()
    {
        return new self(\$this);
    }

    /**
     * Closes current scope and returns parent one.
     *
     * @return self|null
     */
    public function leave()
    {
        \$this->left = true;

        return \$this->parent;
    }

    /**
     * Stores data into current scope.
     *
     * @return \$this
     *
     * @throws \\LogicException
     */
    public function set(string \$key, \$value)
    {
        if (\$this->left) {
            throw new \\LogicException('Left scope is not mutable.');
        }

        \$this->data[\$key] = \$value;

        return \$this;
    }

    /**
     * Tests if a data is visible from current scope.
     *
     * @return bool
     */
    public function has(string \$key)
    {
        if (\\array_key_exists(\$key, \$this->data)) {
            return true;
        }

        if (null === \$this->parent) {
            return false;
        }

        return \$this->parent->has(\$key);
    }

    /**
     * Returns data visible from current scope.
     *
     * @return mixed
     */
    public function get(string \$key, \$default = null)
    {
        if (\\array_key_exists(\$key, \$this->data)) {
            return \$this->data[\$key];
        }

        if (null === \$this->parent) {
            return \$default;
        }

        return \$this->parent->get(\$key, \$default);
    }
}
", "@app/vendor/symfony/twig-bridge/NodeVisitor/Scope.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\NodeVisitor\\Scope.php");
    }
}
