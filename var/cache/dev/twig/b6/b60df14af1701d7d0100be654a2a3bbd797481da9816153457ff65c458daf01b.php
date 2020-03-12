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

/* @app/vendor/twig/extra-bundle/src/DependencyInjection/Compiler/MissingExtensionSuggestorPass.php */
class __TwigTemplate_ecf2512746e789b8b022f14028e6c6aac420b06d3fae72b8f6abb34ea41ba41b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/extra-bundle/src/DependencyInjection/Compiler/MissingExtensionSuggestorPass.php"));

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

namespace Twig\\Extra\\TwigExtraBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class MissingExtensionSuggestorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (\$container->getParameter('kernel.debug')) {
            \$container->getDefinition('twig')
                ->addMethodCall('registerUndefinedFilterCallback', [[new Reference('twig.missing_extension_suggestor'), 'suggestFilter']])
                ->addMethodCall('registerUndefinedFunctionCallback', [[new Reference('twig.missing_extension_suggestor'), 'suggestFunction']])
            ;
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/extra-bundle/src/DependencyInjection/Compiler/MissingExtensionSuggestorPass.php";
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

namespace Twig\\Extra\\TwigExtraBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class MissingExtensionSuggestorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (\$container->getParameter('kernel.debug')) {
            \$container->getDefinition('twig')
                ->addMethodCall('registerUndefinedFilterCallback', [[new Reference('twig.missing_extension_suggestor'), 'suggestFilter']])
                ->addMethodCall('registerUndefinedFunctionCallback', [[new Reference('twig.missing_extension_suggestor'), 'suggestFunction']])
            ;
        }
    }
}
", "@app/vendor/twig/extra-bundle/src/DependencyInjection/Compiler/MissingExtensionSuggestorPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\extra-bundle\\src\\DependencyInjection\\Compiler\\MissingExtensionSuggestorPass.php");
    }
}
