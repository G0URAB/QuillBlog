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

/* @app/vendor/symfony/maker-bundle/src/DependencyInjection/MakerExtension.php */
class __TwigTemplate_dd54a810c0127d9055001f240c108f5516536673f77aea6f1a76808a7c9147f6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/DependencyInjection/MakerExtension.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\DependencyInjection;

use Symfony\\Bundle\\MakerBundle\\DependencyInjection\\CompilerPass\\MakeCommandRegistrationPass;
use Symfony\\Bundle\\MakerBundle\\MakerInterface;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @see http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class MakerExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$loader = new Loader\\XmlFileLoader(\$container, new FileLocator(__DIR__.'/../Resources/config'));
        \$loader->load('services.xml');
        \$loader->load('makers.xml');

        \$configuration = \$this->getConfiguration(\$configs, \$container);
        \$config = \$this->processConfiguration(\$configuration, \$configs);

        \$rootNamespace = trim(\$config['root_namespace'], '\\\\');

        \$autoloaderFinderDefinition = \$container->getDefinition('maker.autoloader_finder');
        \$autoloaderFinderDefinition->replaceArgument(0, \$rootNamespace);

        \$makeCommandDefinition = \$container->getDefinition('maker.generator');
        \$makeCommandDefinition->replaceArgument(1, \$rootNamespace);

        \$doctrineHelperDefinition = \$container->getDefinition('maker.doctrine_helper');
        \$doctrineHelperDefinition->replaceArgument(0, \$rootNamespace.'\\\\Entity');

        \$container->registerForAutoconfiguration(MakerInterface::class)
            ->addTag(MakeCommandRegistrationPass::MAKER_TAG);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/DependencyInjection/MakerExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\DependencyInjection;

use Symfony\\Bundle\\MakerBundle\\DependencyInjection\\CompilerPass\\MakeCommandRegistrationPass;
use Symfony\\Bundle\\MakerBundle\\MakerInterface;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @see http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class MakerExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$loader = new Loader\\XmlFileLoader(\$container, new FileLocator(__DIR__.'/../Resources/config'));
        \$loader->load('services.xml');
        \$loader->load('makers.xml');

        \$configuration = \$this->getConfiguration(\$configs, \$container);
        \$config = \$this->processConfiguration(\$configuration, \$configs);

        \$rootNamespace = trim(\$config['root_namespace'], '\\\\');

        \$autoloaderFinderDefinition = \$container->getDefinition('maker.autoloader_finder');
        \$autoloaderFinderDefinition->replaceArgument(0, \$rootNamespace);

        \$makeCommandDefinition = \$container->getDefinition('maker.generator');
        \$makeCommandDefinition->replaceArgument(1, \$rootNamespace);

        \$doctrineHelperDefinition = \$container->getDefinition('maker.doctrine_helper');
        \$doctrineHelperDefinition->replaceArgument(0, \$rootNamespace.'\\\\Entity');

        \$container->registerForAutoconfiguration(MakerInterface::class)
            ->addTag(MakeCommandRegistrationPass::MAKER_TAG);
    }
}
", "@app/vendor/symfony/maker-bundle/src/DependencyInjection/MakerExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\DependencyInjection\\MakerExtension.php");
    }
}
