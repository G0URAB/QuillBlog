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

/* @app/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php */
class __TwigTemplate_dcf4e40d4fe69f97e585e727b789bcf59264f91f1c0d53b5ee7e26e6ec49550c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * Provides integration with the HttpKernel component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class HttpKernelExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('render', [HttpKernelRuntime::class, 'renderFragment'], ['is_safe' => ['html']]),
            new TwigFunction('render_*', [HttpKernelRuntime::class, 'renderFragmentStrategy'], ['is_safe' => ['html']]),
            new TwigFunction('controller', static::class.'::controller'),
        ];
    }

    public static function controller(string \$controller, array \$attributes = [], array \$query = []): ControllerReference
    {
        return new ControllerReference(\$controller, \$attributes, \$query);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php";
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * Provides integration with the HttpKernel component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class HttpKernelExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('render', [HttpKernelRuntime::class, 'renderFragment'], ['is_safe' => ['html']]),
            new TwigFunction('render_*', [HttpKernelRuntime::class, 'renderFragmentStrategy'], ['is_safe' => ['html']]),
            new TwigFunction('controller', static::class.'::controller'),
        ];
    }

    public static function controller(string \$controller, array \$attributes = [], array \$query = []): ControllerReference
    {
        return new ControllerReference(\$controller, \$attributes, \$query);
    }
}
", "@app/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelExtension.php");
    }
}
