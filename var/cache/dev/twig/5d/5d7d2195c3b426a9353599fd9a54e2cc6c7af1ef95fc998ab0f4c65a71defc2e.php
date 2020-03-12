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

/* @app/vendor/twig/twig/src/Extension/DebugExtension.php */
class __TwigTemplate_95c1bdf5ba19aafb4926fd575f4558b34d0c62d133f81379dee402a568660817 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Extension/DebugExtension.php"));

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

namespace Twig\\Extension {
use Twig\\TwigFunction;

final class DebugExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        // dump is safe if var_dump is overridden by xdebug
        \$isDumpOutputHtmlSafe = \\extension_loaded('xdebug')
            // false means that it was not set (and the default is on) or it explicitly enabled
            && (false === ini_get('xdebug.overload_var_dump') || ini_get('xdebug.overload_var_dump'))
            // false means that it was not set (and the default is on) or it explicitly enabled
            // xdebug.overload_var_dump produces HTML only when html_errors is also enabled
            && (false === ini_get('html_errors') || ini_get('html_errors'))
            || 'cli' === \\PHP_SAPI
        ;

        return [
            new TwigFunction('dump', 'twig_var_dump', ['is_safe' => \$isDumpOutputHtmlSafe ? ['html'] : [], 'needs_context' => true, 'needs_environment' => true, 'is_variadic' => true]),
        ];
    }
}
}

namespace {
use Twig\\Environment;
use Twig\\Template;
use Twig\\TemplateWrapper;

function twig_var_dump(Environment \$env, \$context, ...\$vars)
{
    if (!\$env->isDebug()) {
        return;
    }

    ob_start();

    if (!\$vars) {
        \$vars = [];
        foreach (\$context as \$key => \$value) {
            if (!\$value instanceof Template && !\$value instanceof TemplateWrapper) {
                \$vars[\$key] = \$value;
            }
        }

        var_dump(\$vars);
    } else {
        var_dump(...\$vars);
    }

    return ob_get_clean();
}
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Extension/DebugExtension.php";
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

namespace Twig\\Extension {
use Twig\\TwigFunction;

final class DebugExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        // dump is safe if var_dump is overridden by xdebug
        \$isDumpOutputHtmlSafe = \\extension_loaded('xdebug')
            // false means that it was not set (and the default is on) or it explicitly enabled
            && (false === ini_get('xdebug.overload_var_dump') || ini_get('xdebug.overload_var_dump'))
            // false means that it was not set (and the default is on) or it explicitly enabled
            // xdebug.overload_var_dump produces HTML only when html_errors is also enabled
            && (false === ini_get('html_errors') || ini_get('html_errors'))
            || 'cli' === \\PHP_SAPI
        ;

        return [
            new TwigFunction('dump', 'twig_var_dump', ['is_safe' => \$isDumpOutputHtmlSafe ? ['html'] : [], 'needs_context' => true, 'needs_environment' => true, 'is_variadic' => true]),
        ];
    }
}
}

namespace {
use Twig\\Environment;
use Twig\\Template;
use Twig\\TemplateWrapper;

function twig_var_dump(Environment \$env, \$context, ...\$vars)
{
    if (!\$env->isDebug()) {
        return;
    }

    ob_start();

    if (!\$vars) {
        \$vars = [];
        foreach (\$context as \$key => \$value) {
            if (!\$value instanceof Template && !\$value instanceof TemplateWrapper) {
                \$vars[\$key] = \$value;
            }
        }

        var_dump(\$vars);
    } else {
        var_dump(...\$vars);
    }

    return ob_get_clean();
}
}
", "@app/vendor/twig/twig/src/Extension/DebugExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Extension\\DebugExtension.php");
    }
}
