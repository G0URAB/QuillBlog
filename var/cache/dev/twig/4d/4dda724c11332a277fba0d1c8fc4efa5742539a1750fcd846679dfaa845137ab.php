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

/* @app/vendor/symfony/dependency-injection/Dumper/Preloader.php */
class __TwigTemplate_60aee1f75f7b5d9636b9935ddfbbcb019ac7e3ead9bafd23addac0f08be0747a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Dumper/Preloader.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Dumper;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class Preloader
{
    public static function preload(array \$classes)
    {
        set_error_handler(function (\$t, \$m, \$f, \$l) {
            if (error_reporting() & \$t) {
                if (__FILE__ !== \$f) {
                    throw new \\ErrorException(\$m, 0, \$t, \$f, \$l);
                }

                throw new \\ReflectionException(\$m);
            }
        });

        \$prev = [];
        \$preloaded = [];

        try {
            while (\$prev !== \$classes) {
                \$prev = \$classes;
                foreach (\$classes as \$c) {
                    if (!isset(\$preloaded[\$c])) {
                        self::doPreload(\$c, \$preloaded);
                    }
                }
                \$classes = array_merge(get_declared_classes(), get_declared_interfaces(), get_declared_traits());
            }
        } finally {
            restore_error_handler();
        }
    }

    private static function doPreload(string \$class, array &\$preloaded)
    {
        if (isset(\$preloaded[\$class]) || \\in_array(\$class, ['self', 'static', 'parent'], true)) {
            return;
        }

        \$preloaded[\$class] = true;

        try {
            \$r = new \\ReflectionClass(\$class);

            if (\$r->isInternal()) {
                return;
            }

            \$r->getConstants();
            \$r->getDefaultProperties();

            if (\\PHP_VERSION_ID >= 70400) {
                foreach (\$r->getProperties(\\ReflectionProperty::IS_PUBLIC) as \$p) {
                    if ((\$t = \$p->getType()) && !\$t->isBuiltin()) {
                        self::doPreload(\$t->getName(), \$preloaded);
                    }
                }
            }

            foreach (\$r->getMethods(\\ReflectionMethod::IS_PUBLIC) as \$m) {
                foreach (\$m->getParameters() as \$p) {
                    if (\$p->isDefaultValueAvailable() && \$p->isDefaultValueConstant()) {
                        \$c = \$p->getDefaultValueConstantName();

                        if (\$i = strpos(\$c, '::')) {
                            self::doPreload(substr(\$c, 0, \$i), \$preloaded);
                        }
                    }

                    if ((\$t = \$p->getType()) && !\$t->isBuiltin()) {
                        self::doPreload(\$t->getName(), \$preloaded);
                    }
                }

                if ((\$t = \$m->getReturnType()) && !\$t->isBuiltin()) {
                    self::doPreload(\$t->getName(), \$preloaded);
                }
            }
        } catch (\\ReflectionException \$e) {
            // ignore missing classes
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Dumper/Preloader.php";
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

namespace Symfony\\Component\\DependencyInjection\\Dumper;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class Preloader
{
    public static function preload(array \$classes)
    {
        set_error_handler(function (\$t, \$m, \$f, \$l) {
            if (error_reporting() & \$t) {
                if (__FILE__ !== \$f) {
                    throw new \\ErrorException(\$m, 0, \$t, \$f, \$l);
                }

                throw new \\ReflectionException(\$m);
            }
        });

        \$prev = [];
        \$preloaded = [];

        try {
            while (\$prev !== \$classes) {
                \$prev = \$classes;
                foreach (\$classes as \$c) {
                    if (!isset(\$preloaded[\$c])) {
                        self::doPreload(\$c, \$preloaded);
                    }
                }
                \$classes = array_merge(get_declared_classes(), get_declared_interfaces(), get_declared_traits());
            }
        } finally {
            restore_error_handler();
        }
    }

    private static function doPreload(string \$class, array &\$preloaded)
    {
        if (isset(\$preloaded[\$class]) || \\in_array(\$class, ['self', 'static', 'parent'], true)) {
            return;
        }

        \$preloaded[\$class] = true;

        try {
            \$r = new \\ReflectionClass(\$class);

            if (\$r->isInternal()) {
                return;
            }

            \$r->getConstants();
            \$r->getDefaultProperties();

            if (\\PHP_VERSION_ID >= 70400) {
                foreach (\$r->getProperties(\\ReflectionProperty::IS_PUBLIC) as \$p) {
                    if ((\$t = \$p->getType()) && !\$t->isBuiltin()) {
                        self::doPreload(\$t->getName(), \$preloaded);
                    }
                }
            }

            foreach (\$r->getMethods(\\ReflectionMethod::IS_PUBLIC) as \$m) {
                foreach (\$m->getParameters() as \$p) {
                    if (\$p->isDefaultValueAvailable() && \$p->isDefaultValueConstant()) {
                        \$c = \$p->getDefaultValueConstantName();

                        if (\$i = strpos(\$c, '::')) {
                            self::doPreload(substr(\$c, 0, \$i), \$preloaded);
                        }
                    }

                    if ((\$t = \$p->getType()) && !\$t->isBuiltin()) {
                        self::doPreload(\$t->getName(), \$preloaded);
                    }
                }

                if ((\$t = \$m->getReturnType()) && !\$t->isBuiltin()) {
                    self::doPreload(\$t->getName(), \$preloaded);
                }
            }
        } catch (\\ReflectionException \$e) {
            // ignore missing classes
        }
    }
}
", "@app/vendor/symfony/dependency-injection/Dumper/Preloader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Dumper\\Preloader.php");
    }
}
