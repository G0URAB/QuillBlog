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

/* @app/vendor/symfony/http-kernel/DependencyInjection/MergeExtensionConfigurationPass.php */
class __TwigTemplate_1746ec486b792d0f114e55f7d96d38abd775fc1301c99688bc65b8f583e5c919 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/DependencyInjection/MergeExtensionConfigurationPass.php"));

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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\MergeExtensionConfigurationPass as BaseMergeExtensionConfigurationPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Ensures certain extensions are always loaded.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class MergeExtensionConfigurationPass extends BaseMergeExtensionConfigurationPass
{
    private \$extensions;

    public function __construct(array \$extensions)
    {
        \$this->extensions = \$extensions;
    }

    public function process(ContainerBuilder \$container)
    {
        foreach (\$this->extensions as \$extension) {
            if (!\\count(\$container->getExtensionConfig(\$extension))) {
                \$container->loadFromExtension(\$extension, []);
            }
        }

        parent::process(\$container);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/DependencyInjection/MergeExtensionConfigurationPass.php";
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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\MergeExtensionConfigurationPass as BaseMergeExtensionConfigurationPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Ensures certain extensions are always loaded.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class MergeExtensionConfigurationPass extends BaseMergeExtensionConfigurationPass
{
    private \$extensions;

    public function __construct(array \$extensions)
    {
        \$this->extensions = \$extensions;
    }

    public function process(ContainerBuilder \$container)
    {
        foreach (\$this->extensions as \$extension) {
            if (!\\count(\$container->getExtensionConfig(\$extension))) {
                \$container->loadFromExtension(\$extension, []);
            }
        }

        parent::process(\$container);
    }
}
", "@app/vendor/symfony/http-kernel/DependencyInjection/MergeExtensionConfigurationPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\DependencyInjection\\MergeExtensionConfigurationPass.php");
    }
}
