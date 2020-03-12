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

/* @app/vendor/symfony/config/Definition/Builder/NormalizationBuilder.php */
class __TwigTemplate_8944de3cb447acd0c6ed86986345dc0b312937971308b18bd21b8845caba154a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Definition/Builder/NormalizationBuilder.php"));

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

/**
 * This class builds normalization conditions.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class NormalizationBuilder
{
    protected \$node;
    public \$before = [];
    public \$remappings = [];

    public function __construct(NodeDefinition \$node)
    {
        \$this->node = \$node;
    }

    /**
     * Registers a key to remap to its plural form.
     *
     * @param string      \$key    The key to remap
     * @param string|null \$plural The plural of the key in case of irregular plural
     *
     * @return \$this
     */
    public function remap(string \$key, string \$plural = null)
    {
        \$this->remappings[] = [\$key, null === \$plural ? \$key.'s' : \$plural];

        return \$this;
    }

    /**
     * Registers a closure to run before the normalization or an expression builder to build it if null is provided.
     *
     * @return ExprBuilder|\$this
     */
    public function before(\\Closure \$closure = null)
    {
        if (null !== \$closure) {
            \$this->before[] = \$closure;

            return \$this;
        }

        return \$this->before[] = new ExprBuilder(\$this->node);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Definition/Builder/NormalizationBuilder.php";
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

/**
 * This class builds normalization conditions.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class NormalizationBuilder
{
    protected \$node;
    public \$before = [];
    public \$remappings = [];

    public function __construct(NodeDefinition \$node)
    {
        \$this->node = \$node;
    }

    /**
     * Registers a key to remap to its plural form.
     *
     * @param string      \$key    The key to remap
     * @param string|null \$plural The plural of the key in case of irregular plural
     *
     * @return \$this
     */
    public function remap(string \$key, string \$plural = null)
    {
        \$this->remappings[] = [\$key, null === \$plural ? \$key.'s' : \$plural];

        return \$this;
    }

    /**
     * Registers a closure to run before the normalization or an expression builder to build it if null is provided.
     *
     * @return ExprBuilder|\$this
     */
    public function before(\\Closure \$closure = null)
    {
        if (null !== \$closure) {
            \$this->before[] = \$closure;

            return \$this;
        }

        return \$this->before[] = new ExprBuilder(\$this->node);
    }
}
", "@app/vendor/symfony/config/Definition/Builder/NormalizationBuilder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Definition\\Builder\\NormalizationBuilder.php");
    }
}
