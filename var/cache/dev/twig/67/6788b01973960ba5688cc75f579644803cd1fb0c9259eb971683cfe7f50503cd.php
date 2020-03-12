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

/* @app/vendor/symfony/routing/Loader/Configurator/RouteConfigurator.php */
class __TwigTemplate_d6229fe229db9fc680bb1b3b17b77816b389c6ffdf398ecc806ea37354310c09 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/routing/Loader/Configurator/RouteConfigurator.php"));

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

use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RouteConfigurator
{
    use Traits\\AddTrait;
    use Traits\\RouteTrait;

    private \$parentConfigurator;

    public function __construct(RouteCollection \$collection, \$route, string \$name = '', CollectionConfigurator \$parentConfigurator = null, array \$prefixes = null)
    {
        \$this->collection = \$collection;
        \$this->route = \$route;
        \$this->name = \$name;
        \$this->parentConfigurator = \$parentConfigurator; // for GC control
        \$this->prefixes = \$prefixes;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/routing/Loader/Configurator/RouteConfigurator.php";
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

use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RouteConfigurator
{
    use Traits\\AddTrait;
    use Traits\\RouteTrait;

    private \$parentConfigurator;

    public function __construct(RouteCollection \$collection, \$route, string \$name = '', CollectionConfigurator \$parentConfigurator = null, array \$prefixes = null)
    {
        \$this->collection = \$collection;
        \$this->route = \$route;
        \$this->name = \$name;
        \$this->parentConfigurator = \$parentConfigurator; // for GC control
        \$this->prefixes = \$prefixes;
    }
}
", "@app/vendor/symfony/routing/Loader/Configurator/RouteConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\routing\\Loader\\Configurator\\RouteConfigurator.php");
    }
}
