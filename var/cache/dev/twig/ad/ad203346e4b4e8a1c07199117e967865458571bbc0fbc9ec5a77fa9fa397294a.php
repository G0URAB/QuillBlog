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

/* @app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/FactoryTrait.php */
class __TwigTemplate_1ce8ae5c1310ae18544a2088fce3c5f329cee32840b8bf5eaf8c2d0d4b328890 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/FactoryTrait.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\Traits;

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

trait FactoryTrait
{
    /**
     * Sets a factory.
     *
     * @param string|array \$factory A PHP callable reference
     *
     * @return \$this
     */
    final public function factory(\$factory): self
    {
        if (\\is_string(\$factory) && 1 === substr_count(\$factory, ':')) {
            \$factoryParts = explode(':', \$factory);

            throw new InvalidArgumentException(sprintf('Invalid factory \"%s\": the \"service:method\" notation is not available when using PHP-based DI configuration. Use \"[ref(\\'%s\\'), \\'%s\\']\" instead.', \$factory, \$factoryParts[0], \$factoryParts[1]));
        }

        \$this->definition->setFactory(static::processValue(\$factory, true));

        return \$this;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/FactoryTrait.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\Traits;

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

trait FactoryTrait
{
    /**
     * Sets a factory.
     *
     * @param string|array \$factory A PHP callable reference
     *
     * @return \$this
     */
    final public function factory(\$factory): self
    {
        if (\\is_string(\$factory) && 1 === substr_count(\$factory, ':')) {
            \$factoryParts = explode(':', \$factory);

            throw new InvalidArgumentException(sprintf('Invalid factory \"%s\": the \"service:method\" notation is not available when using PHP-based DI configuration. Use \"[ref(\\'%s\\'), \\'%s\\']\" instead.', \$factory, \$factoryParts[0], \$factoryParts[1]));
        }

        \$this->definition->setFactory(static::processValue(\$factory, true));

        return \$this;
    }
}
", "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/FactoryTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Loader\\Configurator\\Traits\\FactoryTrait.php");
    }
}
