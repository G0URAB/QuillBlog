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

/* @app/vendor/twig/extra-bundle/src/DependencyInjection/Configuration.php */
class __TwigTemplate_6efe3cc35e310760f67a46b6b4fe3595838c97d897c8612ca7d446cfde5ef45f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/extra-bundle/src/DependencyInjection/Configuration.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Extra\\TwigExtraBundle\\DependencyInjection;

use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;
use Twig\\Extra\\TwigExtraBundle\\Extensions;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        \$treeBuilder = new TreeBuilder('twig_extra');
        \$rootNode = \$treeBuilder->getRootNode();

        foreach (Extensions::getClasses() as \$name => \$class) {
            \$rootNode
                ->children()
                    ->arrayNode(\$name)
                        ->{class_exists(\$class) ? 'canBeDisabled' : 'canBeEnabled'}()
                    ->end()
                ->end()
            ;
        }

        return \$treeBuilder;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/extra-bundle/src/DependencyInjection/Configuration.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Extra\\TwigExtraBundle\\DependencyInjection;

use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;
use Twig\\Extra\\TwigExtraBundle\\Extensions;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        \$treeBuilder = new TreeBuilder('twig_extra');
        \$rootNode = \$treeBuilder->getRootNode();

        foreach (Extensions::getClasses() as \$name => \$class) {
            \$rootNode
                ->children()
                    ->arrayNode(\$name)
                        ->{class_exists(\$class) ? 'canBeDisabled' : 'canBeEnabled'}()
                    ->end()
                ->end()
            ;
        }

        return \$treeBuilder;
    }
}
", "@app/vendor/twig/extra-bundle/src/DependencyInjection/Configuration.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\extra-bundle\\src\\DependencyInjection\\Configuration.php");
    }
}
