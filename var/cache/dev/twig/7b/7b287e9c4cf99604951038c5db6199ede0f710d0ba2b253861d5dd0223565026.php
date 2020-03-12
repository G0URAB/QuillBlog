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

/* @app/vendor/symfony/config/Definition/Builder/ValidationBuilder.php */
class __TwigTemplate_f1b4d31c9e533ed269a643a8a57a74cd3b20e848de9a204ee6a7c57ac8588238 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Definition/Builder/ValidationBuilder.php"));

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
 * This class builds validation conditions.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ValidationBuilder
{
    protected \$node;
    public \$rules = [];

    public function __construct(NodeDefinition \$node)
    {
        \$this->node = \$node;
    }

    /**
     * Registers a closure to run as normalization or an expression builder to build it if null is provided.
     *
     * @return ExprBuilder|\$this
     */
    public function rule(\\Closure \$closure = null)
    {
        if (null !== \$closure) {
            \$this->rules[] = \$closure;

            return \$this;
        }

        return \$this->rules[] = new ExprBuilder(\$this->node);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Definition/Builder/ValidationBuilder.php";
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
 * This class builds validation conditions.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ValidationBuilder
{
    protected \$node;
    public \$rules = [];

    public function __construct(NodeDefinition \$node)
    {
        \$this->node = \$node;
    }

    /**
     * Registers a closure to run as normalization or an expression builder to build it if null is provided.
     *
     * @return ExprBuilder|\$this
     */
    public function rule(\\Closure \$closure = null)
    {
        if (null !== \$closure) {
            \$this->rules[] = \$closure;

            return \$this;
        }

        return \$this->rules[] = new ExprBuilder(\$this->node);
    }
}
", "@app/vendor/symfony/config/Definition/Builder/ValidationBuilder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Definition\\Builder\\ValidationBuilder.php");
    }
}
