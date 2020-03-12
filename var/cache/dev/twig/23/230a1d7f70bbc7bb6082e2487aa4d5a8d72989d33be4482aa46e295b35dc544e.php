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

/* @app/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php */
class __TwigTemplate_9ec0e13b6db6f49525b5a853040fd674ddb55a458cbe5a241f6e8bd50a3cfe11 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Configurator;

use Symfony\\Bridge\\Twig\\UndefinedCallableHandler;
use Twig\\Environment;

// BC/FC with namespaced Twig
class_exists('Twig\\Environment');

/**
 * Twig environment configurator.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class EnvironmentConfigurator
{
    private \$dateFormat;
    private \$intervalFormat;
    private \$timezone;
    private \$decimals;
    private \$decimalPoint;
    private \$thousandsSeparator;

    public function __construct(string \$dateFormat, string \$intervalFormat, ?string \$timezone, int \$decimals, string \$decimalPoint, string \$thousandsSeparator)
    {
        \$this->dateFormat = \$dateFormat;
        \$this->intervalFormat = \$intervalFormat;
        \$this->timezone = \$timezone;
        \$this->decimals = \$decimals;
        \$this->decimalPoint = \$decimalPoint;
        \$this->thousandsSeparator = \$thousandsSeparator;
    }

    public function configure(Environment \$environment)
    {
        \$environment->getExtension('Twig\\Extension\\CoreExtension')->setDateFormat(\$this->dateFormat, \$this->intervalFormat);

        if (null !== \$this->timezone) {
            \$environment->getExtension('Twig\\Extension\\CoreExtension')->setTimezone(\$this->timezone);
        }

        \$environment->getExtension('Twig\\Extension\\CoreExtension')->setNumberFormat(\$this->decimals, \$this->decimalPoint, \$this->thousandsSeparator);

        // wrap UndefinedCallableHandler in closures for lazy-autoloading
        \$environment->registerUndefinedFilterCallback(function (\$name) { return UndefinedCallableHandler::onUndefinedFilter(\$name); });
        \$environment->registerUndefinedFunctionCallback(function (\$name) { return UndefinedCallableHandler::onUndefinedFunction(\$name); });
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php";
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

namespace Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Configurator;

use Symfony\\Bridge\\Twig\\UndefinedCallableHandler;
use Twig\\Environment;

// BC/FC with namespaced Twig
class_exists('Twig\\Environment');

/**
 * Twig environment configurator.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class EnvironmentConfigurator
{
    private \$dateFormat;
    private \$intervalFormat;
    private \$timezone;
    private \$decimals;
    private \$decimalPoint;
    private \$thousandsSeparator;

    public function __construct(string \$dateFormat, string \$intervalFormat, ?string \$timezone, int \$decimals, string \$decimalPoint, string \$thousandsSeparator)
    {
        \$this->dateFormat = \$dateFormat;
        \$this->intervalFormat = \$intervalFormat;
        \$this->timezone = \$timezone;
        \$this->decimals = \$decimals;
        \$this->decimalPoint = \$decimalPoint;
        \$this->thousandsSeparator = \$thousandsSeparator;
    }

    public function configure(Environment \$environment)
    {
        \$environment->getExtension('Twig\\Extension\\CoreExtension')->setDateFormat(\$this->dateFormat, \$this->intervalFormat);

        if (null !== \$this->timezone) {
            \$environment->getExtension('Twig\\Extension\\CoreExtension')->setTimezone(\$this->timezone);
        }

        \$environment->getExtension('Twig\\Extension\\CoreExtension')->setNumberFormat(\$this->decimals, \$this->decimalPoint, \$this->thousandsSeparator);

        // wrap UndefinedCallableHandler in closures for lazy-autoloading
        \$environment->registerUndefinedFilterCallback(function (\$name) { return UndefinedCallableHandler::onUndefinedFilter(\$name); });
        \$environment->registerUndefinedFunctionCallback(function (\$name) { return UndefinedCallableHandler::onUndefinedFunction(\$name); });
    }
}
", "@app/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator.php");
    }
}
