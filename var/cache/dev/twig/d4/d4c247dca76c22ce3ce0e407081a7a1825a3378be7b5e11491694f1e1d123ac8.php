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

/* @app/vendor/twig/extra-bundle/src/DependencyInjection/TwigExtraExtension.php */
class __TwigTemplate_e2ceca54e281811a05a083d8e5df82da8624b3a41acf011de90871d31bea6f16 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/extra-bundle/src/DependencyInjection/TwigExtraExtension.php"));

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

use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;
use Twig\\Extra\\TwigExtraBundle\\Extensions;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TwigExtraExtension extends Extension
{
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$loader = new XmlFileLoader(\$container, new FileLocator(\\dirname(__DIR__).'/Resources/config'));
        \$configuration = \$this->getConfiguration(\$configs, \$container);
        \$config = \$this->processConfiguration(\$configuration, \$configs);

        if (\$container->getParameter('kernel.debug')) {
            \$loader->load('suggestor.xml');
        }

        foreach (array_keys(Extensions::getClasses()) as \$extension) {
            if (\$this->isConfigEnabled(\$container, \$config[\$extension])) {
                \$loader->load(\$extension.'.xml');
            }
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/extra-bundle/src/DependencyInjection/TwigExtraExtension.php";
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

use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;
use Twig\\Extra\\TwigExtraBundle\\Extensions;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TwigExtraExtension extends Extension
{
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$loader = new XmlFileLoader(\$container, new FileLocator(\\dirname(__DIR__).'/Resources/config'));
        \$configuration = \$this->getConfiguration(\$configs, \$container);
        \$config = \$this->processConfiguration(\$configuration, \$configs);

        if (\$container->getParameter('kernel.debug')) {
            \$loader->load('suggestor.xml');
        }

        foreach (array_keys(Extensions::getClasses()) as \$extension) {
            if (\$this->isConfigEnabled(\$container, \$config[\$extension])) {
                \$loader->load(\$extension.'.xml');
            }
        }
    }
}
", "@app/vendor/twig/extra-bundle/src/DependencyInjection/TwigExtraExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\extra-bundle\\src\\DependencyInjection\\TwigExtraExtension.php");
    }
}
