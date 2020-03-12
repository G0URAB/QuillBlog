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

/* @app/vendor/symfony/config/Definition/Builder/EnumNodeDefinition.php */
class __TwigTemplate_7040bc80f27619bc698e4f91e19f9b50906c84cf2d37949fdd21f9bc162644cd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Definition/Builder/EnumNodeDefinition.php"));

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

use Symfony\\Component\\Config\\Definition\\EnumNode;

/**
 * Enum Node Definition.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class EnumNodeDefinition extends ScalarNodeDefinition
{
    private \$values;

    /**
     * @return \$this
     */
    public function values(array \$values)
    {
        \$values = array_unique(\$values);

        if (empty(\$values)) {
            throw new \\InvalidArgumentException('->values() must be called with at least one value.');
        }

        \$this->values = \$values;

        return \$this;
    }

    /**
     * Instantiate a Node.
     *
     * @return EnumNode The node
     *
     * @throws \\RuntimeException
     */
    protected function instantiateNode()
    {
        if (null === \$this->values) {
            throw new \\RuntimeException('You must call ->values() on enum nodes.');
        }

        return new EnumNode(\$this->name, \$this->parent, \$this->values, \$this->pathSeparator);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Definition/Builder/EnumNodeDefinition.php";
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

use Symfony\\Component\\Config\\Definition\\EnumNode;

/**
 * Enum Node Definition.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class EnumNodeDefinition extends ScalarNodeDefinition
{
    private \$values;

    /**
     * @return \$this
     */
    public function values(array \$values)
    {
        \$values = array_unique(\$values);

        if (empty(\$values)) {
            throw new \\InvalidArgumentException('->values() must be called with at least one value.');
        }

        \$this->values = \$values;

        return \$this;
    }

    /**
     * Instantiate a Node.
     *
     * @return EnumNode The node
     *
     * @throws \\RuntimeException
     */
    protected function instantiateNode()
    {
        if (null === \$this->values) {
            throw new \\RuntimeException('You must call ->values() on enum nodes.');
        }

        return new EnumNode(\$this->name, \$this->parent, \$this->values, \$this->pathSeparator);
    }
}
", "@app/vendor/symfony/config/Definition/Builder/EnumNodeDefinition.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Definition\\Builder\\EnumNodeDefinition.php");
    }
}
