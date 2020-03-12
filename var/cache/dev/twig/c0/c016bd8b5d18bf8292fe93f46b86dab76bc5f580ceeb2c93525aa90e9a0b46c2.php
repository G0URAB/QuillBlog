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

/* @app/vendor/symfony/dependency-injection/Loader/Configurator/AbstractConfigurator.php */
class __TwigTemplate_28bb4e0fb861a612c9a08259077bcb5539a4f7d50d650f7757572ba6b374d32d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Loader/Configurator/AbstractConfigurator.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\Argument\\ArgumentInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Parameter;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\ExpressionLanguage\\Expression;

abstract class AbstractConfigurator
{
    const FACTORY = 'unknown';

    /** @internal */
    protected \$definition;

    public function __call(string \$method, array \$args)
    {
        if (method_exists(\$this, 'set'.\$method)) {
            return \$this->{'set'.\$method}(...\$args);
        }

        throw new \\BadMethodCallException(sprintf('Call to undefined method %s::%s()', static::class, \$method));
    }

    /**
     * Checks that a value is valid, optionally replacing Definition and Reference configurators by their configure value.
     *
     * @param mixed \$value
     * @param bool  \$allowServices whether Definition and Reference are allowed; by default, only scalars and arrays are
     *
     * @return mixed the value, optionally cast to a Definition/Reference
     */
    public static function processValue(\$value, \$allowServices = false)
    {
        if (\\is_array(\$value)) {
            foreach (\$value as \$k => \$v) {
                \$value[\$k] = static::processValue(\$v, \$allowServices);
            }

            return \$value;
        }

        if (\$value instanceof ReferenceConfigurator) {
            return new Reference(\$value->id, \$value->invalidBehavior);
        }

        if (\$value instanceof InlineServiceConfigurator) {
            \$def = \$value->definition;
            \$value->definition = null;

            return \$def;
        }

        if (\$value instanceof self) {
            throw new InvalidArgumentException(sprintf('\"%s()\" can be used only at the root of service configuration files.', \$value::FACTORY));
        }

        switch (true) {
            case null === \$value:
            case is_scalar(\$value):
                return \$value;

            case \$value instanceof ArgumentInterface:
            case \$value instanceof Definition:
            case \$value instanceof Expression:
            case \$value instanceof Parameter:
            case \$value instanceof Reference:
                if (\$allowServices) {
                    return \$value;
                }
        }

        throw new InvalidArgumentException(sprintf('Cannot use values of type \"%s\" in service configuration files.', \\is_object(\$value) ? \\get_class(\$value) : \\gettype(\$value)));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Loader/Configurator/AbstractConfigurator.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\Argument\\ArgumentInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Parameter;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\ExpressionLanguage\\Expression;

abstract class AbstractConfigurator
{
    const FACTORY = 'unknown';

    /** @internal */
    protected \$definition;

    public function __call(string \$method, array \$args)
    {
        if (method_exists(\$this, 'set'.\$method)) {
            return \$this->{'set'.\$method}(...\$args);
        }

        throw new \\BadMethodCallException(sprintf('Call to undefined method %s::%s()', static::class, \$method));
    }

    /**
     * Checks that a value is valid, optionally replacing Definition and Reference configurators by their configure value.
     *
     * @param mixed \$value
     * @param bool  \$allowServices whether Definition and Reference are allowed; by default, only scalars and arrays are
     *
     * @return mixed the value, optionally cast to a Definition/Reference
     */
    public static function processValue(\$value, \$allowServices = false)
    {
        if (\\is_array(\$value)) {
            foreach (\$value as \$k => \$v) {
                \$value[\$k] = static::processValue(\$v, \$allowServices);
            }

            return \$value;
        }

        if (\$value instanceof ReferenceConfigurator) {
            return new Reference(\$value->id, \$value->invalidBehavior);
        }

        if (\$value instanceof InlineServiceConfigurator) {
            \$def = \$value->definition;
            \$value->definition = null;

            return \$def;
        }

        if (\$value instanceof self) {
            throw new InvalidArgumentException(sprintf('\"%s()\" can be used only at the root of service configuration files.', \$value::FACTORY));
        }

        switch (true) {
            case null === \$value:
            case is_scalar(\$value):
                return \$value;

            case \$value instanceof ArgumentInterface:
            case \$value instanceof Definition:
            case \$value instanceof Expression:
            case \$value instanceof Parameter:
            case \$value instanceof Reference:
                if (\$allowServices) {
                    return \$value;
                }
        }

        throw new InvalidArgumentException(sprintf('Cannot use values of type \"%s\" in service configuration files.', \\is_object(\$value) ? \\get_class(\$value) : \\gettype(\$value)));
    }
}
", "@app/vendor/symfony/dependency-injection/Loader/Configurator/AbstractConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Loader\\Configurator\\AbstractConfigurator.php");
    }
}
