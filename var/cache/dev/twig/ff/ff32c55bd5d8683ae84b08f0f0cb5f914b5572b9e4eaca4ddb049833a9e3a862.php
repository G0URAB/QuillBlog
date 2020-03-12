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

/* @app/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php */
class __TwigTemplate_088608939c86ee1a27d8ea724075477be8c531ca04ebf6c81b57411c275f86c7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\DataCollector;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\DataCollector\\RouterDataCollector as BaseRouterDataCollector;

/**
 * RouterDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class RouterDataCollector extends BaseRouterDataCollector
{
    public function guessRoute(Request \$request, \$controller)
    {
        if (\\is_array(\$controller)) {
            \$controller = \$controller[0];
        }

        if (\$controller instanceof RedirectController) {
            return \$request->attributes->get('_route');
        }

        return parent::guessRoute(\$request, \$controller);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\DataCollector;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\DataCollector\\RouterDataCollector as BaseRouterDataCollector;

/**
 * RouterDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class RouterDataCollector extends BaseRouterDataCollector
{
    public function guessRoute(Request \$request, \$controller)
    {
        if (\\is_array(\$controller)) {
            \$controller = \$controller[0];
        }

        if (\$controller instanceof RedirectController) {
            return \$request->attributes->get('_route');
        }

        return parent::guessRoute(\$request, \$controller);
    }
}
", "@app/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\DataCollector\\RouterDataCollector.php");
    }
}
