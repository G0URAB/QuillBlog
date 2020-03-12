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

/* @app/vendor/symfony/config/Definition/Builder/TreeBuilder.php */
class __TwigTemplate_9373fdd64350b9a622f17d9daa38b606c4adea06ff528f3666d1bd696207b0d4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Definition/Builder/TreeBuilder.php"));

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

namespace Symfony\\Component\\Config\\Definition\\Builder;

use Symfony\\Component\\Config\\Definition\\NodeInterface;

/**
 * This is the entry class for building a config tree.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class TreeBuilder implements NodeParentInterface
{
    protected \$tree;
    protected \$root;

    public function __construct(string \$name, string \$type = 'array', NodeBuilder \$builder = null)
    {
        \$builder = \$builder ?: new NodeBuilder();
        \$this->root = \$builder->node(\$name, \$type)->setParent(\$this);
    }

    /**
     * @return NodeDefinition|ArrayNodeDefinition The root node (as an ArrayNodeDefinition when the type is 'array')
     */
    public function getRootNode(): NodeDefinition
    {
        return \$this->root;
    }

    /**
     * Builds the tree.
     *
     * @return NodeInterface
     *
     * @throws \\RuntimeException
     */
    public function buildTree()
    {
        if (null !== \$this->tree) {
            return \$this->tree;
        }

        return \$this->tree = \$this->root->getNode(true);
    }

    public function setPathSeparator(string \$separator)
    {
        // unset last built as changing path separator changes all nodes
        \$this->tree = null;

        \$this->root->setPathSeparator(\$separator);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Definition/Builder/TreeBuilder.php";
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

namespace Symfony\\Component\\Config\\Definition\\Builder;

use Symfony\\Component\\Config\\Definition\\NodeInterface;

/**
 * This is the entry class for building a config tree.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class TreeBuilder implements NodeParentInterface
{
    protected \$tree;
    protected \$root;

    public function __construct(string \$name, string \$type = 'array', NodeBuilder \$builder = null)
    {
        \$builder = \$builder ?: new NodeBuilder();
        \$this->root = \$builder->node(\$name, \$type)->setParent(\$this);
    }

    /**
     * @return NodeDefinition|ArrayNodeDefinition The root node (as an ArrayNodeDefinition when the type is 'array')
     */
    public function getRootNode(): NodeDefinition
    {
        return \$this->root;
    }

    /**
     * Builds the tree.
     *
     * @return NodeInterface
     *
     * @throws \\RuntimeException
     */
    public function buildTree()
    {
        if (null !== \$this->tree) {
            return \$this->tree;
        }

        return \$this->tree = \$this->root->getNode(true);
    }

    public function setPathSeparator(string \$separator)
    {
        // unset last built as changing path separator changes all nodes
        \$this->tree = null;

        \$this->root->setPathSeparator(\$separator);
    }
}
", "@app/vendor/symfony/config/Definition/Builder/TreeBuilder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Definition\\Builder\\TreeBuilder.php");
    }
}
