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

/* @app/vendor/symfony/config/Definition/NodeInterface.php */
class __TwigTemplate_cbf542cbde6f832bca03fed54021e0d7b0175de0335d778ba207992059868401 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Definition/NodeInterface.php"));

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

use Symfony\\Component\\Config\\Definition\\Exception\\ForbiddenOverwriteException;
use Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException;
use Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException;

/**
 * Common Interface among all nodes.
 *
 * In most cases, it is better to inherit from BaseNode instead of implementing
 * this interface yourself.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface NodeInterface
{
    /**
     * Returns the name of the node.
     *
     * @return string The name of the node
     */
    public function getName();

    /**
     * Returns the path of the node.
     *
     * @return string The node path
     */
    public function getPath();

    /**
     * Returns true when the node is required.
     *
     * @return bool If the node is required
     */
    public function isRequired();

    /**
     * Returns true when the node has a default value.
     *
     * @return bool If the node has a default value
     */
    public function hasDefaultValue();

    /**
     * Returns the default value of the node.
     *
     * @return mixed The default value
     *
     * @throws \\RuntimeException if the node has no default value
     */
    public function getDefaultValue();

    /**
     * Normalizes a value.
     *
     * @param mixed \$value The value to normalize
     *
     * @return mixed The normalized value
     *
     * @throws InvalidTypeException if the value type is invalid
     */
    public function normalize(\$value);

    /**
     * Merges two values together.
     *
     * @param mixed \$leftSide
     * @param mixed \$rightSide
     *
     * @return mixed The merged value
     *
     * @throws ForbiddenOverwriteException if the configuration path cannot be overwritten
     * @throws InvalidTypeException        if the value type is invalid
     */
    public function merge(\$leftSide, \$rightSide);

    /**
     * Finalizes a value.
     *
     * @param mixed \$value The value to finalize
     *
     * @return mixed The finalized value
     *
     * @throws InvalidTypeException          if the value type is invalid
     * @throws InvalidConfigurationException if the value is invalid configuration
     */
    public function finalize(\$value);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Definition/NodeInterface.php";
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

use Symfony\\Component\\Config\\Definition\\Exception\\ForbiddenOverwriteException;
use Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException;
use Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException;

/**
 * Common Interface among all nodes.
 *
 * In most cases, it is better to inherit from BaseNode instead of implementing
 * this interface yourself.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface NodeInterface
{
    /**
     * Returns the name of the node.
     *
     * @return string The name of the node
     */
    public function getName();

    /**
     * Returns the path of the node.
     *
     * @return string The node path
     */
    public function getPath();

    /**
     * Returns true when the node is required.
     *
     * @return bool If the node is required
     */
    public function isRequired();

    /**
     * Returns true when the node has a default value.
     *
     * @return bool If the node has a default value
     */
    public function hasDefaultValue();

    /**
     * Returns the default value of the node.
     *
     * @return mixed The default value
     *
     * @throws \\RuntimeException if the node has no default value
     */
    public function getDefaultValue();

    /**
     * Normalizes a value.
     *
     * @param mixed \$value The value to normalize
     *
     * @return mixed The normalized value
     *
     * @throws InvalidTypeException if the value type is invalid
     */
    public function normalize(\$value);

    /**
     * Merges two values together.
     *
     * @param mixed \$leftSide
     * @param mixed \$rightSide
     *
     * @return mixed The merged value
     *
     * @throws ForbiddenOverwriteException if the configuration path cannot be overwritten
     * @throws InvalidTypeException        if the value type is invalid
     */
    public function merge(\$leftSide, \$rightSide);

    /**
     * Finalizes a value.
     *
     * @param mixed \$value The value to finalize
     *
     * @return mixed The finalized value
     *
     * @throws InvalidTypeException          if the value type is invalid
     * @throws InvalidConfigurationException if the value is invalid configuration
     */
    public function finalize(\$value);
}
", "@app/vendor/symfony/config/Definition/NodeInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Definition\\NodeInterface.php");
    }
}
