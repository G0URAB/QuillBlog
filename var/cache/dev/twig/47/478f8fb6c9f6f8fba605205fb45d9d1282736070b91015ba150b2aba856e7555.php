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

/* @app/vendor/symfony/config/Definition/VariableNode.php */
class __TwigTemplate_5a8e4be380f9f81cd34397bec7569effc07d69c4c46fbaecfd5126d8a9bba231 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Definition/VariableNode.php"));

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

namespace Symfony\\Component\\Config\\Definition;

use Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException;

/**
 * This node represents a value of variable type in the config tree.
 *
 * This node is intended for values of arbitrary type.
 * Any PHP type is accepted as a value.
 *
 * @author Jeremy Mikola <jmikola@gmail.com>
 */
class VariableNode extends BaseNode implements PrototypeNodeInterface
{
    protected \$defaultValueSet = false;
    protected \$defaultValue;
    protected \$allowEmptyValue = true;

    public function setDefaultValue(\$value)
    {
        \$this->defaultValueSet = true;
        \$this->defaultValue = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function hasDefaultValue()
    {
        return \$this->defaultValueSet;
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultValue()
    {
        \$v = \$this->defaultValue;

        return \$v instanceof \\Closure ? \$v() : \$v;
    }

    /**
     * Sets if this node is allowed to have an empty value.
     *
     * @param bool \$boolean True if this entity will accept empty values
     */
    public function setAllowEmptyValue(bool \$boolean)
    {
        \$this->allowEmptyValue = \$boolean;
    }

    /**
     * {@inheritdoc}
     */
    public function setName(string \$name)
    {
        \$this->name = \$name;
    }

    /**
     * {@inheritdoc}
     */
    protected function validateType(\$value)
    {
    }

    /**
     * {@inheritdoc}
     */
    protected function finalizeValue(\$value)
    {
        // deny environment variables only when using custom validators
        // this avoids ever passing an empty value to final validation closures
        if (!\$this->allowEmptyValue && \$this->isHandlingPlaceholder() && \$this->finalValidationClosures) {
            \$e = new InvalidConfigurationException(sprintf('The path \"%s\" cannot contain an environment variable when empty values are not allowed by definition and are validated.', \$this->getPath()));
            if (\$hint = \$this->getInfo()) {
                \$e->addHint(\$hint);
            }
            \$e->setPath(\$this->getPath());

            throw \$e;
        }

        if (!\$this->allowEmptyValue && \$this->isValueEmpty(\$value)) {
            \$ex = new InvalidConfigurationException(sprintf('The path \"%s\" cannot contain an empty value, but got %s.', \$this->getPath(), json_encode(\$value)));
            if (\$hint = \$this->getInfo()) {
                \$ex->addHint(\$hint);
            }
            \$ex->setPath(\$this->getPath());

            throw \$ex;
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    protected function normalizeValue(\$value)
    {
        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    protected function mergeValues(\$leftSide, \$rightSide)
    {
        return \$rightSide;
    }

    /**
     * Evaluates if the given value is to be treated as empty.
     *
     * By default, PHP's empty() function is used to test for emptiness. This
     * method may be overridden by subtypes to better match their understanding
     * of empty data.
     *
     * @param mixed \$value
     *
     * @return bool
     *
     * @see finalizeValue()
     */
    protected function isValueEmpty(\$value)
    {
        return empty(\$value);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Definition/VariableNode.php";
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

namespace Symfony\\Component\\Config\\Definition;

use Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException;

/**
 * This node represents a value of variable type in the config tree.
 *
 * This node is intended for values of arbitrary type.
 * Any PHP type is accepted as a value.
 *
 * @author Jeremy Mikola <jmikola@gmail.com>
 */
class VariableNode extends BaseNode implements PrototypeNodeInterface
{
    protected \$defaultValueSet = false;
    protected \$defaultValue;
    protected \$allowEmptyValue = true;

    public function setDefaultValue(\$value)
    {
        \$this->defaultValueSet = true;
        \$this->defaultValue = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function hasDefaultValue()
    {
        return \$this->defaultValueSet;
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultValue()
    {
        \$v = \$this->defaultValue;

        return \$v instanceof \\Closure ? \$v() : \$v;
    }

    /**
     * Sets if this node is allowed to have an empty value.
     *
     * @param bool \$boolean True if this entity will accept empty values
     */
    public function setAllowEmptyValue(bool \$boolean)
    {
        \$this->allowEmptyValue = \$boolean;
    }

    /**
     * {@inheritdoc}
     */
    public function setName(string \$name)
    {
        \$this->name = \$name;
    }

    /**
     * {@inheritdoc}
     */
    protected function validateType(\$value)
    {
    }

    /**
     * {@inheritdoc}
     */
    protected function finalizeValue(\$value)
    {
        // deny environment variables only when using custom validators
        // this avoids ever passing an empty value to final validation closures
        if (!\$this->allowEmptyValue && \$this->isHandlingPlaceholder() && \$this->finalValidationClosures) {
            \$e = new InvalidConfigurationException(sprintf('The path \"%s\" cannot contain an environment variable when empty values are not allowed by definition and are validated.', \$this->getPath()));
            if (\$hint = \$this->getInfo()) {
                \$e->addHint(\$hint);
            }
            \$e->setPath(\$this->getPath());

            throw \$e;
        }

        if (!\$this->allowEmptyValue && \$this->isValueEmpty(\$value)) {
            \$ex = new InvalidConfigurationException(sprintf('The path \"%s\" cannot contain an empty value, but got %s.', \$this->getPath(), json_encode(\$value)));
            if (\$hint = \$this->getInfo()) {
                \$ex->addHint(\$hint);
            }
            \$ex->setPath(\$this->getPath());

            throw \$ex;
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    protected function normalizeValue(\$value)
    {
        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    protected function mergeValues(\$leftSide, \$rightSide)
    {
        return \$rightSide;
    }

    /**
     * Evaluates if the given value is to be treated as empty.
     *
     * By default, PHP's empty() function is used to test for emptiness. This
     * method may be overridden by subtypes to better match their understanding
     * of empty data.
     *
     * @param mixed \$value
     *
     * @return bool
     *
     * @see finalizeValue()
     */
    protected function isValueEmpty(\$value)
    {
        return empty(\$value);
    }
}
", "@app/vendor/symfony/config/Definition/VariableNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Definition\\VariableNode.php");
    }
}
