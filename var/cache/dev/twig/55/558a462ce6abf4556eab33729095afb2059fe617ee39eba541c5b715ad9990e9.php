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

/* @app/vendor/symfony/twig-bundle/TwigBundle.php */
class __TwigTemplate_1a19b789d535de37b8e028b2ce820852e72cb510ec57bbd71a7e3f5f135fd88d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bundle/TwigBundle.php"));

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

namespace Symfony\\Bundle\\TwigBundle;

use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\ExtensionPass;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\RuntimeLoaderPass;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\TwigEnvironmentPass;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\TwigLoaderPass;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

/**
 * Bundle.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TwigBundle extends Bundle
{
    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        // ExtensionPass must be run before the FragmentRendererPass as it adds tags that are processed later
        \$container->addCompilerPass(new ExtensionPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 10);
        \$container->addCompilerPass(new TwigEnvironmentPass());
        \$container->addCompilerPass(new TwigLoaderPass());
        \$container->addCompilerPass(new RuntimeLoaderPass(), PassConfig::TYPE_BEFORE_REMOVING);
    }

    public function registerCommands(Application \$application)
    {
        // noop
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bundle/TwigBundle.php";
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

namespace Symfony\\Bundle\\TwigBundle;

use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\ExtensionPass;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\RuntimeLoaderPass;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\TwigEnvironmentPass;
use Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler\\TwigLoaderPass;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

/**
 * Bundle.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TwigBundle extends Bundle
{
    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        // ExtensionPass must be run before the FragmentRendererPass as it adds tags that are processed later
        \$container->addCompilerPass(new ExtensionPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 10);
        \$container->addCompilerPass(new TwigEnvironmentPass());
        \$container->addCompilerPass(new TwigLoaderPass());
        \$container->addCompilerPass(new RuntimeLoaderPass(), PassConfig::TYPE_BEFORE_REMOVING);
    }

    public function registerCommands(Application \$application)
    {
        // noop
    }
}
", "@app/vendor/symfony/twig-bundle/TwigBundle.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bundle\\TwigBundle.php");
    }
}
