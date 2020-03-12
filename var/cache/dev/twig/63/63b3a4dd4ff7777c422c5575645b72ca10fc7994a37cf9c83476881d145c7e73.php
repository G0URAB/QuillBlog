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

/* @app/vendor/symfony/config/Definition/ScalarNode.php */
class __TwigTemplate_9d5d5c4338e5fd6b557c343040fd8c1c0bcc5f8197fd99015b09b3a7494cd4ec extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Definition/ScalarNode.php"));

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

use Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException;

/**
 * This node represents a scalar value in the config tree.
 *
 * The following values are considered scalars:
 *   * booleans
 *   * strings
 *   * null
 *   * integers
 *   * floats
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ScalarNode extends VariableNode
{
    /**
     * {@inheritdoc}
     */
    protected function validateType(\$value)
    {
        if (!is_scalar(\$value) && null !== \$value) {
            \$ex = new InvalidTypeException(sprintf('Invalid type for path \"%s\". Expected scalar, but got %s.', \$this->getPath(), \\gettype(\$value)));
            if (\$hint = \$this->getInfo()) {
                \$ex->addHint(\$hint);
            }
            \$ex->setPath(\$this->getPath());

            throw \$ex;
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function isValueEmpty(\$value)
    {
        // assume environment variables are never empty (which in practice is likely to be true during runtime)
        // not doing so breaks many configs that are valid today
        if (\$this->isHandlingPlaceholder()) {
            return false;
        }

        return null === \$value || '' === \$value;
    }

    /**
     * {@inheritdoc}
     */
    protected function getValidPlaceholderTypes(): array
    {
        return ['bool', 'int', 'float', 'string'];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Definition/ScalarNode.php";
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

use Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException;

/**
 * This node represents a scalar value in the config tree.
 *
 * The following values are considered scalars:
 *   * booleans
 *   * strings
 *   * null
 *   * integers
 *   * floats
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ScalarNode extends VariableNode
{
    /**
     * {@inheritdoc}
     */
    protected function validateType(\$value)
    {
        if (!is_scalar(\$value) && null !== \$value) {
            \$ex = new InvalidTypeException(sprintf('Invalid type for path \"%s\". Expected scalar, but got %s.', \$this->getPath(), \\gettype(\$value)));
            if (\$hint = \$this->getInfo()) {
                \$ex->addHint(\$hint);
            }
            \$ex->setPath(\$this->getPath());

            throw \$ex;
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function isValueEmpty(\$value)
    {
        // assume environment variables are never empty (which in practice is likely to be true during runtime)
        // not doing so breaks many configs that are valid today
        if (\$this->isHandlingPlaceholder()) {
            return false;
        }

        return null === \$value || '' === \$value;
    }

    /**
     * {@inheritdoc}
     */
    protected function getValidPlaceholderTypes(): array
    {
        return ['bool', 'int', 'float', 'string'];
    }
}
", "@app/vendor/symfony/config/Definition/ScalarNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Definition\\ScalarNode.php");
    }
}
