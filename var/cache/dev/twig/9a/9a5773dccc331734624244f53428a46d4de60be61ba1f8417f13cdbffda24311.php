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

/* @app/vendor/symfony/routing/Loader/Configurator/ImportConfigurator.php */
class __TwigTemplate_b45092b96ec563494a66df54cf60b08cdef8df1baf40758a3b46e55e1b8a0f83 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/routing/Loader/Configurator/ImportConfigurator.php"));

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

namespace Symfony\\Component\\Routing\\Loader\\Configurator;

use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ImportConfigurator
{
    use Traits\\RouteTrait;

    private \$parent;

    public function __construct(RouteCollection \$parent, RouteCollection \$route)
    {
        \$this->parent = \$parent;
        \$this->route = \$route;
    }

    public function __destruct()
    {
        \$this->parent->addCollection(\$this->route);
    }

    /**
     * Sets the prefix to add to the path of all child routes.
     *
     * @param string|array \$prefix the prefix, or the localized prefixes
     *
     * @return \$this
     */
    final public function prefix(\$prefix, bool \$trailingSlashOnRoot = true): self
    {
        if (!\\is_array(\$prefix)) {
            \$this->route->addPrefix(\$prefix);
            if (!\$trailingSlashOnRoot) {
                \$rootPath = (new Route(trim(trim(\$prefix), '/').'/'))->getPath();
                foreach (\$this->route->all() as \$route) {
                    if (\$route->getPath() === \$rootPath) {
                        \$route->setPath(rtrim(\$rootPath, '/'));
                    }
                }
            }
        } else {
            foreach (\$prefix as \$locale => \$localePrefix) {
                \$prefix[\$locale] = trim(trim(\$localePrefix), '/');
            }
            foreach (\$this->route->all() as \$name => \$route) {
                if (null === \$locale = \$route->getDefault('_locale')) {
                    \$this->route->remove(\$name);
                    foreach (\$prefix as \$locale => \$localePrefix) {
                        \$localizedRoute = clone \$route;
                        \$localizedRoute->setDefault('_locale', \$locale);
                        \$localizedRoute->setDefault('_canonical_route', \$name);
                        \$localizedRoute->setPath(\$localePrefix.(!\$trailingSlashOnRoot && '/' === \$route->getPath() ? '' : \$route->getPath()));
                        \$this->route->add(\$name.'.'.\$locale, \$localizedRoute);
                    }
                } elseif (!isset(\$prefix[\$locale])) {
                    throw new \\InvalidArgumentException(sprintf('Route \"%s\" with locale \"%s\" is missing a corresponding prefix in its parent collection.', \$name, \$locale));
                } else {
                    \$route->setPath(\$prefix[\$locale].(!\$trailingSlashOnRoot && '/' === \$route->getPath() ? '' : \$route->getPath()));
                    \$this->route->add(\$name, \$route);
                }
            }
        }

        return \$this;
    }

    /**
     * Sets the prefix to add to the name of all child routes.
     *
     * @return \$this
     */
    final public function namePrefix(string \$namePrefix): self
    {
        \$this->route->addNamePrefix(\$namePrefix);

        return \$this;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/routing/Loader/Configurator/ImportConfigurator.php";
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

namespace Symfony\\Component\\Routing\\Loader\\Configurator;

use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ImportConfigurator
{
    use Traits\\RouteTrait;

    private \$parent;

    public function __construct(RouteCollection \$parent, RouteCollection \$route)
    {
        \$this->parent = \$parent;
        \$this->route = \$route;
    }

    public function __destruct()
    {
        \$this->parent->addCollection(\$this->route);
    }

    /**
     * Sets the prefix to add to the path of all child routes.
     *
     * @param string|array \$prefix the prefix, or the localized prefixes
     *
     * @return \$this
     */
    final public function prefix(\$prefix, bool \$trailingSlashOnRoot = true): self
    {
        if (!\\is_array(\$prefix)) {
            \$this->route->addPrefix(\$prefix);
            if (!\$trailingSlashOnRoot) {
                \$rootPath = (new Route(trim(trim(\$prefix), '/').'/'))->getPath();
                foreach (\$this->route->all() as \$route) {
                    if (\$route->getPath() === \$rootPath) {
                        \$route->setPath(rtrim(\$rootPath, '/'));
                    }
                }
            }
        } else {
            foreach (\$prefix as \$locale => \$localePrefix) {
                \$prefix[\$locale] = trim(trim(\$localePrefix), '/');
            }
            foreach (\$this->route->all() as \$name => \$route) {
                if (null === \$locale = \$route->getDefault('_locale')) {
                    \$this->route->remove(\$name);
                    foreach (\$prefix as \$locale => \$localePrefix) {
                        \$localizedRoute = clone \$route;
                        \$localizedRoute->setDefault('_locale', \$locale);
                        \$localizedRoute->setDefault('_canonical_route', \$name);
                        \$localizedRoute->setPath(\$localePrefix.(!\$trailingSlashOnRoot && '/' === \$route->getPath() ? '' : \$route->getPath()));
                        \$this->route->add(\$name.'.'.\$locale, \$localizedRoute);
                    }
                } elseif (!isset(\$prefix[\$locale])) {
                    throw new \\InvalidArgumentException(sprintf('Route \"%s\" with locale \"%s\" is missing a corresponding prefix in its parent collection.', \$name, \$locale));
                } else {
                    \$route->setPath(\$prefix[\$locale].(!\$trailingSlashOnRoot && '/' === \$route->getPath() ? '' : \$route->getPath()));
                    \$this->route->add(\$name, \$route);
                }
            }
        }

        return \$this;
    }

    /**
     * Sets the prefix to add to the name of all child routes.
     *
     * @return \$this
     */
    final public function namePrefix(string \$namePrefix): self
    {
        \$this->route->addNamePrefix(\$namePrefix);

        return \$this;
    }
}
", "@app/vendor/symfony/routing/Loader/Configurator/ImportConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\routing\\Loader\\Configurator\\ImportConfigurator.php");
    }
}
