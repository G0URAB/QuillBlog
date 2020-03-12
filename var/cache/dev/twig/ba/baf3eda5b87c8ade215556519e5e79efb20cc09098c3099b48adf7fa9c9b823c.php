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

/* @app/vendor/symfony/dependency-injection/LazyProxy/ProxyHelper.php */
class __TwigTemplate_d3114863c284d1a87b8e285cbb077ce2e000b79b210e4b02d231aec85e3b872a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/LazyProxy/ProxyHelper.php"));

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

namespace Symfony\\Component\\DependencyInjection\\LazyProxy;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class ProxyHelper
{
    /**
     * @return string|null The FQCN or builtin name of the type hint, or null when the type hint references an invalid self|parent context
     */
    public static function getTypeHint(\\ReflectionFunctionAbstract \$r, \\ReflectionParameter \$p = null, bool \$noBuiltin = false): ?string
    {
        if (\$p instanceof \\ReflectionParameter) {
            \$type = \$p->getType();
        } else {
            \$type = \$r->getReturnType();
        }
        if (!\$type) {
            return null;
        }
        if (!\\is_string(\$type)) {
            \$name = \$type->getName();

            if (\$type->isBuiltin()) {
                return \$noBuiltin ? null : \$name;
            }
        }
        \$lcName = strtolower(\$name);
        \$prefix = \$noBuiltin ? '' : '\\\\';

        if ('self' !== \$lcName && 'parent' !== \$lcName) {
            return \$prefix.\$name;
        }
        if (!\$r instanceof \\ReflectionMethod) {
            return null;
        }
        if ('self' === \$lcName) {
            return \$prefix.\$r->getDeclaringClass()->name;
        }

        return (\$parent = \$r->getDeclaringClass()->getParentClass()) ? \$prefix.\$parent->name : null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/LazyProxy/ProxyHelper.php";
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

namespace Symfony\\Component\\DependencyInjection\\LazyProxy;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class ProxyHelper
{
    /**
     * @return string|null The FQCN or builtin name of the type hint, or null when the type hint references an invalid self|parent context
     */
    public static function getTypeHint(\\ReflectionFunctionAbstract \$r, \\ReflectionParameter \$p = null, bool \$noBuiltin = false): ?string
    {
        if (\$p instanceof \\ReflectionParameter) {
            \$type = \$p->getType();
        } else {
            \$type = \$r->getReturnType();
        }
        if (!\$type) {
            return null;
        }
        if (!\\is_string(\$type)) {
            \$name = \$type->getName();

            if (\$type->isBuiltin()) {
                return \$noBuiltin ? null : \$name;
            }
        }
        \$lcName = strtolower(\$name);
        \$prefix = \$noBuiltin ? '' : '\\\\';

        if ('self' !== \$lcName && 'parent' !== \$lcName) {
            return \$prefix.\$name;
        }
        if (!\$r instanceof \\ReflectionMethod) {
            return null;
        }
        if ('self' === \$lcName) {
            return \$prefix.\$r->getDeclaringClass()->name;
        }

        return (\$parent = \$r->getDeclaringClass()->getParentClass()) ? \$prefix.\$parent->name : null;
    }
}
", "@app/vendor/symfony/dependency-injection/LazyProxy/ProxyHelper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\LazyProxy\\ProxyHelper.php");
    }
}
