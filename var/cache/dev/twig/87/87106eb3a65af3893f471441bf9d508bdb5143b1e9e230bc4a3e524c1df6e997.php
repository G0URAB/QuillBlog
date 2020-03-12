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

/* @app/vendor/symfony/config/Definition/EnumNode.php */
class __TwigTemplate_1f046bc2f03ada527798671033f1befd8544a4a9149f6d3b390f0456e34b1e43 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Definition/EnumNode.php"));

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
 * Node which only allows a finite set of values.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class EnumNode extends ScalarNode
{
    private \$values;

    public function __construct(?string \$name, NodeInterface \$parent = null, array \$values = [], string \$pathSeparator = BaseNode::DEFAULT_PATH_SEPARATOR)
    {
        \$values = array_unique(\$values);
        if (empty(\$values)) {
            throw new \\InvalidArgumentException('\$values must contain at least one element.');
        }

        parent::__construct(\$name, \$parent, \$pathSeparator);
        \$this->values = \$values;
    }

    public function getValues()
    {
        return \$this->values;
    }

    protected function finalizeValue(\$value)
    {
        \$value = parent::finalizeValue(\$value);

        if (!\\in_array(\$value, \$this->values, true)) {
            \$ex = new InvalidConfigurationException(sprintf('The value %s is not allowed for path \"%s\". Permissible values: %s', json_encode(\$value), \$this->getPath(), implode(', ', array_map('json_encode', \$this->values))));
            \$ex->setPath(\$this->getPath());

            throw \$ex;
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    protected function allowPlaceholders(): bool
    {
        return false;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Definition/EnumNode.php";
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
 * Node which only allows a finite set of values.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class EnumNode extends ScalarNode
{
    private \$values;

    public function __construct(?string \$name, NodeInterface \$parent = null, array \$values = [], string \$pathSeparator = BaseNode::DEFAULT_PATH_SEPARATOR)
    {
        \$values = array_unique(\$values);
        if (empty(\$values)) {
            throw new \\InvalidArgumentException('\$values must contain at least one element.');
        }

        parent::__construct(\$name, \$parent, \$pathSeparator);
        \$this->values = \$values;
    }

    public function getValues()
    {
        return \$this->values;
    }

    protected function finalizeValue(\$value)
    {
        \$value = parent::finalizeValue(\$value);

        if (!\\in_array(\$value, \$this->values, true)) {
            \$ex = new InvalidConfigurationException(sprintf('The value %s is not allowed for path \"%s\". Permissible values: %s', json_encode(\$value), \$this->getPath(), implode(', ', array_map('json_encode', \$this->values))));
            \$ex->setPath(\$this->getPath());

            throw \$ex;
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    protected function allowPlaceholders(): bool
    {
        return false;
    }
}
", "@app/vendor/symfony/config/Definition/EnumNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Definition\\EnumNode.php");
    }
}
