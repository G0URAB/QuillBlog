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

/* @app/vendor/symfony/config/Definition/Builder/VariableNodeDefinition.php */
class __TwigTemplate_c0d96723543a4ca98094afac56347a7ad20295033dbde19ad7b0d918e4ee050a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Definition/Builder/VariableNodeDefinition.php"));

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

use Symfony\\Component\\Config\\Definition\\VariableNode;

/**
 * This class provides a fluent interface for defining a node.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class VariableNodeDefinition extends NodeDefinition
{
    /**
     * Instantiate a Node.
     *
     * @return VariableNode The node
     */
    protected function instantiateNode()
    {
        return new VariableNode(\$this->name, \$this->parent, \$this->pathSeparator);
    }

    /**
     * {@inheritdoc}
     */
    protected function createNode()
    {
        \$node = \$this->instantiateNode();

        if (null !== \$this->normalization) {
            \$node->setNormalizationClosures(\$this->normalization->before);
        }

        if (null !== \$this->merge) {
            \$node->setAllowOverwrite(\$this->merge->allowOverwrite);
        }

        if (true === \$this->default) {
            \$node->setDefaultValue(\$this->defaultValue);
        }

        \$node->setAllowEmptyValue(\$this->allowEmptyValue);
        \$node->addEquivalentValue(null, \$this->nullEquivalent);
        \$node->addEquivalentValue(true, \$this->trueEquivalent);
        \$node->addEquivalentValue(false, \$this->falseEquivalent);
        \$node->setRequired(\$this->required);
        \$node->setDeprecated(\$this->deprecationMessage);

        if (null !== \$this->validation) {
            \$node->setFinalValidationClosures(\$this->validation->rules);
        }

        return \$node;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Definition/Builder/VariableNodeDefinition.php";
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

use Symfony\\Component\\Config\\Definition\\VariableNode;

/**
 * This class provides a fluent interface for defining a node.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class VariableNodeDefinition extends NodeDefinition
{
    /**
     * Instantiate a Node.
     *
     * @return VariableNode The node
     */
    protected function instantiateNode()
    {
        return new VariableNode(\$this->name, \$this->parent, \$this->pathSeparator);
    }

    /**
     * {@inheritdoc}
     */
    protected function createNode()
    {
        \$node = \$this->instantiateNode();

        if (null !== \$this->normalization) {
            \$node->setNormalizationClosures(\$this->normalization->before);
        }

        if (null !== \$this->merge) {
            \$node->setAllowOverwrite(\$this->merge->allowOverwrite);
        }

        if (true === \$this->default) {
            \$node->setDefaultValue(\$this->defaultValue);
        }

        \$node->setAllowEmptyValue(\$this->allowEmptyValue);
        \$node->addEquivalentValue(null, \$this->nullEquivalent);
        \$node->addEquivalentValue(true, \$this->trueEquivalent);
        \$node->addEquivalentValue(false, \$this->falseEquivalent);
        \$node->setRequired(\$this->required);
        \$node->setDeprecated(\$this->deprecationMessage);

        if (null !== \$this->validation) {
            \$node->setFinalValidationClosures(\$this->validation->rules);
        }

        return \$node;
    }
}
", "@app/vendor/symfony/config/Definition/Builder/VariableNodeDefinition.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Definition\\Builder\\VariableNodeDefinition.php");
    }
}
