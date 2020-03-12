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

/* @app/vendor/symfony/routing/Loader/Configurator/CollectionConfigurator.php */
class __TwigTemplate_fdd8a2f46c25a0592085e3b3e4038bfd9ffa0daf4d788a660ca2128656c57e48 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/routing/Loader/Configurator/CollectionConfigurator.php"));

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
class CollectionConfigurator
{
    use Traits\\AddTrait;
    use Traits\\RouteTrait;

    private \$parent;
    private \$parentConfigurator;
    private \$parentPrefixes;

    public function __construct(RouteCollection \$parent, string \$name, self \$parentConfigurator = null, array \$parentPrefixes = null)
    {
        \$this->parent = \$parent;
        \$this->name = \$name;
        \$this->collection = new RouteCollection();
        \$this->route = new Route('');
        \$this->parentConfigurator = \$parentConfigurator; // for GC control
        \$this->parentPrefixes = \$parentPrefixes;
    }

    public function __destruct()
    {
        if (null === \$this->prefixes) {
            \$this->collection->addPrefix(\$this->route->getPath());
        }

        \$this->parent->addCollection(\$this->collection);
    }

    /**
     * Creates a sub-collection.
     */
    final public function collection(string \$name = ''): self
    {
        return new self(\$this->collection, \$this->name.\$name, \$this, \$this->prefixes);
    }

    /**
     * Sets the prefix to add to the path of all child routes.
     *
     * @param string|array \$prefix the prefix, or the localized prefixes
     *
     * @return \$this
     */
    final public function prefix(\$prefix): self
    {
        if (\\is_array(\$prefix)) {
            if (null === \$this->parentPrefixes) {
                // no-op
            } elseif (\$missing = array_diff_key(\$this->parentPrefixes, \$prefix)) {
                throw new \\LogicException(sprintf('Collection \"%s\" is missing prefixes for locale(s) \"%s\".', \$this->name, implode('\", \"', array_keys(\$missing))));
            } else {
                foreach (\$prefix as \$locale => \$localePrefix) {
                    if (!isset(\$this->parentPrefixes[\$locale])) {
                        throw new \\LogicException(sprintf('Collection \"%s\" with locale \"%s\" is missing a corresponding prefix in its parent collection.', \$this->name, \$locale));
                    }

                    \$prefix[\$locale] = \$this->parentPrefixes[\$locale].\$localePrefix;
                }
            }
            \$this->prefixes = \$prefix;
            \$this->route->setPath('/');
        } else {
            \$this->prefixes = null;
            \$this->route->setPath(\$prefix);
        }

        return \$this;
    }

    private function createRoute(string \$path): Route
    {
        return (clone \$this->route)->setPath(\$path);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/routing/Loader/Configurator/CollectionConfigurator.php";
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
class CollectionConfigurator
{
    use Traits\\AddTrait;
    use Traits\\RouteTrait;

    private \$parent;
    private \$parentConfigurator;
    private \$parentPrefixes;

    public function __construct(RouteCollection \$parent, string \$name, self \$parentConfigurator = null, array \$parentPrefixes = null)
    {
        \$this->parent = \$parent;
        \$this->name = \$name;
        \$this->collection = new RouteCollection();
        \$this->route = new Route('');
        \$this->parentConfigurator = \$parentConfigurator; // for GC control
        \$this->parentPrefixes = \$parentPrefixes;
    }

    public function __destruct()
    {
        if (null === \$this->prefixes) {
            \$this->collection->addPrefix(\$this->route->getPath());
        }

        \$this->parent->addCollection(\$this->collection);
    }

    /**
     * Creates a sub-collection.
     */
    final public function collection(string \$name = ''): self
    {
        return new self(\$this->collection, \$this->name.\$name, \$this, \$this->prefixes);
    }

    /**
     * Sets the prefix to add to the path of all child routes.
     *
     * @param string|array \$prefix the prefix, or the localized prefixes
     *
     * @return \$this
     */
    final public function prefix(\$prefix): self
    {
        if (\\is_array(\$prefix)) {
            if (null === \$this->parentPrefixes) {
                // no-op
            } elseif (\$missing = array_diff_key(\$this->parentPrefixes, \$prefix)) {
                throw new \\LogicException(sprintf('Collection \"%s\" is missing prefixes for locale(s) \"%s\".', \$this->name, implode('\", \"', array_keys(\$missing))));
            } else {
                foreach (\$prefix as \$locale => \$localePrefix) {
                    if (!isset(\$this->parentPrefixes[\$locale])) {
                        throw new \\LogicException(sprintf('Collection \"%s\" with locale \"%s\" is missing a corresponding prefix in its parent collection.', \$this->name, \$locale));
                    }

                    \$prefix[\$locale] = \$this->parentPrefixes[\$locale].\$localePrefix;
                }
            }
            \$this->prefixes = \$prefix;
            \$this->route->setPath('/');
        } else {
            \$this->prefixes = null;
            \$this->route->setPath(\$prefix);
        }

        return \$this;
    }

    private function createRoute(string \$path): Route
    {
        return (clone \$this->route)->setPath(\$path);
    }
}
", "@app/vendor/symfony/routing/Loader/Configurator/CollectionConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\routing\\Loader\\Configurator\\CollectionConfigurator.php");
    }
}
