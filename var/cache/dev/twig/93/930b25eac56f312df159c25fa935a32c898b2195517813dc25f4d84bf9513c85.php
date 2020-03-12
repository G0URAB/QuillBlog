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

/* @app/vendor/symfony/routing/Loader/Configurator/Traits/RouteTrait.php */
class __TwigTemplate_4cbd757248d431861647d8c434f7a902abe51dd801de14a4ac81a25f57c4ea92 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/routing/Loader/Configurator/Traits/RouteTrait.php"));

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

namespace Symfony\\Component\\Routing\\Loader\\Configurator\\Traits;

use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

trait RouteTrait
{
    /**
     * @var RouteCollection|Route
     */
    private \$route;

    /**
     * Adds defaults.
     *
     * @return \$this
     */
    final public function defaults(array \$defaults): self
    {
        \$this->route->addDefaults(\$defaults);

        return \$this;
    }

    /**
     * Adds requirements.
     *
     * @return \$this
     */
    final public function requirements(array \$requirements): self
    {
        \$this->route->addRequirements(\$requirements);

        return \$this;
    }

    /**
     * Adds options.
     *
     * @return \$this
     */
    final public function options(array \$options): self
    {
        \$this->route->addOptions(\$options);

        return \$this;
    }

    /**
     * Whether paths should accept utf8 encoding.
     *
     * @return \$this
     */
    final public function utf8(bool \$utf8 = true): self
    {
        \$this->route->addOptions(['utf8' => \$utf8]);

        return \$this;
    }

    /**
     * Sets the condition.
     *
     * @return \$this
     */
    final public function condition(string \$condition): self
    {
        \$this->route->setCondition(\$condition);

        return \$this;
    }

    /**
     * Sets the pattern for the host.
     *
     * @return \$this
     */
    final public function host(string \$pattern): self
    {
        \$this->route->setHost(\$pattern);

        return \$this;
    }

    /**
     * Sets the schemes (e.g. 'https') this route is restricted to.
     * So an empty array means that any scheme is allowed.
     *
     * @param string[] \$schemes
     *
     * @return \$this
     */
    final public function schemes(array \$schemes): self
    {
        \$this->route->setSchemes(\$schemes);

        return \$this;
    }

    /**
     * Sets the HTTP methods (e.g. 'POST') this route is restricted to.
     * So an empty array means that any method is allowed.
     *
     * @param string[] \$methods
     *
     * @return \$this
     */
    final public function methods(array \$methods): self
    {
        \$this->route->setMethods(\$methods);

        return \$this;
    }

    /**
     * Adds the \"_controller\" entry to defaults.
     *
     * @param callable|string \$controller a callable or parseable pseudo-callable
     *
     * @return \$this
     */
    final public function controller(\$controller): self
    {
        \$this->route->addDefaults(['_controller' => \$controller]);

        return \$this;
    }

    /**
     * Adds the \"_locale\" entry to defaults.
     *
     * @return \$this
     */
    final public function locale(string \$locale): self
    {
        \$this->route->addDefaults(['_locale' => \$locale]);

        return \$this;
    }

    /**
     * Adds the \"_format\" entry to defaults.
     *
     * @return \$this
     */
    final public function format(string \$format): self
    {
        \$this->route->addDefaults(['_format' => \$format]);

        return \$this;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/routing/Loader/Configurator/Traits/RouteTrait.php";
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

namespace Symfony\\Component\\Routing\\Loader\\Configurator\\Traits;

use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

trait RouteTrait
{
    /**
     * @var RouteCollection|Route
     */
    private \$route;

    /**
     * Adds defaults.
     *
     * @return \$this
     */
    final public function defaults(array \$defaults): self
    {
        \$this->route->addDefaults(\$defaults);

        return \$this;
    }

    /**
     * Adds requirements.
     *
     * @return \$this
     */
    final public function requirements(array \$requirements): self
    {
        \$this->route->addRequirements(\$requirements);

        return \$this;
    }

    /**
     * Adds options.
     *
     * @return \$this
     */
    final public function options(array \$options): self
    {
        \$this->route->addOptions(\$options);

        return \$this;
    }

    /**
     * Whether paths should accept utf8 encoding.
     *
     * @return \$this
     */
    final public function utf8(bool \$utf8 = true): self
    {
        \$this->route->addOptions(['utf8' => \$utf8]);

        return \$this;
    }

    /**
     * Sets the condition.
     *
     * @return \$this
     */
    final public function condition(string \$condition): self
    {
        \$this->route->setCondition(\$condition);

        return \$this;
    }

    /**
     * Sets the pattern for the host.
     *
     * @return \$this
     */
    final public function host(string \$pattern): self
    {
        \$this->route->setHost(\$pattern);

        return \$this;
    }

    /**
     * Sets the schemes (e.g. 'https') this route is restricted to.
     * So an empty array means that any scheme is allowed.
     *
     * @param string[] \$schemes
     *
     * @return \$this
     */
    final public function schemes(array \$schemes): self
    {
        \$this->route->setSchemes(\$schemes);

        return \$this;
    }

    /**
     * Sets the HTTP methods (e.g. 'POST') this route is restricted to.
     * So an empty array means that any method is allowed.
     *
     * @param string[] \$methods
     *
     * @return \$this
     */
    final public function methods(array \$methods): self
    {
        \$this->route->setMethods(\$methods);

        return \$this;
    }

    /**
     * Adds the \"_controller\" entry to defaults.
     *
     * @param callable|string \$controller a callable or parseable pseudo-callable
     *
     * @return \$this
     */
    final public function controller(\$controller): self
    {
        \$this->route->addDefaults(['_controller' => \$controller]);

        return \$this;
    }

    /**
     * Adds the \"_locale\" entry to defaults.
     *
     * @return \$this
     */
    final public function locale(string \$locale): self
    {
        \$this->route->addDefaults(['_locale' => \$locale]);

        return \$this;
    }

    /**
     * Adds the \"_format\" entry to defaults.
     *
     * @return \$this
     */
    final public function format(string \$format): self
    {
        \$this->route->addDefaults(['_format' => \$format]);

        return \$this;
    }
}
", "@app/vendor/symfony/routing/Loader/Configurator/Traits/RouteTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\routing\\Loader\\Configurator\\Traits\\RouteTrait.php");
    }
}
