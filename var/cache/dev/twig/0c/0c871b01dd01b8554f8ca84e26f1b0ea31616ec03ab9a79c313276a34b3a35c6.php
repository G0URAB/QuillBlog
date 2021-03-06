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

/* @app/vendor/symfony/var-dumper/Caster/Caster.php */
class __TwigTemplate_a00a2c2dd3fe631cd2b4c5d7dc13945d9ed03c4813265dec780bc10d238d301b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Caster/Caster.php"));

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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Helper for filtering out properties in casters.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class Caster
{
    const EXCLUDE_VERBOSE = 1;
    const EXCLUDE_VIRTUAL = 2;
    const EXCLUDE_DYNAMIC = 4;
    const EXCLUDE_PUBLIC = 8;
    const EXCLUDE_PROTECTED = 16;
    const EXCLUDE_PRIVATE = 32;
    const EXCLUDE_NULL = 64;
    const EXCLUDE_EMPTY = 128;
    const EXCLUDE_NOT_IMPORTANT = 256;
    const EXCLUDE_STRICT = 512;

    const PREFIX_VIRTUAL = \"\\0~\\0\";
    const PREFIX_DYNAMIC = \"\\0+\\0\";
    const PREFIX_PROTECTED = \"\\0*\\0\";

    /**
     * Casts objects to arrays and adds the dynamic property prefix.
     *
     * @param bool \$hasDebugInfo Whether the __debugInfo method exists on \$obj or not
     *
     * @return array The array-cast of the object, with prefixed dynamic properties
     */
    public static function castObject(object \$obj, string \$class, bool \$hasDebugInfo = false): array
    {
        if (\$hasDebugInfo) {
            try {
                \$debugInfo = \$obj->__debugInfo();
            } catch (\\Exception \$e) {
                // ignore failing __debugInfo()
                \$hasDebugInfo = false;
            }
        }

        \$a = \$obj instanceof \\Closure ? [] : (array) \$obj;

        if (\$obj instanceof \\__PHP_Incomplete_Class) {
            return \$a;
        }

        if (\$a) {
            static \$publicProperties = [];

            \$i = 0;
            \$prefixedKeys = [];
            foreach (\$a as \$k => \$v) {
                if (\"\\0\" !== (\$k[0] ?? '')) {
                    if (!isset(\$publicProperties[\$class])) {
                        foreach ((new \\ReflectionClass(\$class))->getProperties(\\ReflectionProperty::IS_PUBLIC) as \$prop) {
                            \$publicProperties[\$class][\$prop->name] = true;
                        }
                    }
                    if (!isset(\$publicProperties[\$class][\$k])) {
                        \$prefixedKeys[\$i] = self::PREFIX_DYNAMIC.\$k;
                    }
                } elseif (isset(\$k[16]) && \"\\0\" === \$k[16] && 0 === strpos(\$k, \"\\0class@anonymous\\0\")) {
                    \$prefixedKeys[\$i] = \"\\0\".get_parent_class(\$class).'@anonymous'.strrchr(\$k, \"\\0\");
                }
                ++\$i;
            }
            if (\$prefixedKeys) {
                \$keys = array_keys(\$a);
                foreach (\$prefixedKeys as \$i => \$k) {
                    \$keys[\$i] = \$k;
                }
                \$a = array_combine(\$keys, \$a);
            }
        }

        if (\$hasDebugInfo && \\is_array(\$debugInfo)) {
            foreach (\$debugInfo as \$k => \$v) {
                if (!isset(\$k[0]) || \"\\0\" !== \$k[0]) {
                    \$k = self::PREFIX_VIRTUAL.\$k;
                }

                unset(\$a[\$k]);
                \$a[\$k] = \$v;
            }
        }

        return \$a;
    }

    /**
     * Filters out the specified properties.
     *
     * By default, a single match in the \$filter bit field filters properties out, following an \"or\" logic.
     * When EXCLUDE_STRICT is set, an \"and\" logic is applied: all bits must match for a property to be removed.
     *
     * @param array    \$a                The array containing the properties to filter
     * @param int      \$filter           A bit field of Caster::EXCLUDE_* constants specifying which properties to filter out
     * @param string[] \$listedProperties List of properties to exclude when Caster::EXCLUDE_VERBOSE is set, and to preserve when Caster::EXCLUDE_NOT_IMPORTANT is set
     * @param int      &\$count           Set to the number of removed properties
     *
     * @return array The filtered array
     */
    public static function filter(array \$a, int \$filter, array \$listedProperties = [], ?int &\$count = 0): array
    {
        \$count = 0;

        foreach (\$a as \$k => \$v) {
            \$type = self::EXCLUDE_STRICT & \$filter;

            if (null === \$v) {
                \$type |= self::EXCLUDE_NULL & \$filter;
                \$type |= self::EXCLUDE_EMPTY & \$filter;
            } elseif (false === \$v || '' === \$v || '0' === \$v || 0 === \$v || 0.0 === \$v || [] === \$v) {
                \$type |= self::EXCLUDE_EMPTY & \$filter;
            }
            if ((self::EXCLUDE_NOT_IMPORTANT & \$filter) && !\\in_array(\$k, \$listedProperties, true)) {
                \$type |= self::EXCLUDE_NOT_IMPORTANT;
            }
            if ((self::EXCLUDE_VERBOSE & \$filter) && \\in_array(\$k, \$listedProperties, true)) {
                \$type |= self::EXCLUDE_VERBOSE;
            }

            if (!isset(\$k[1]) || \"\\0\" !== \$k[0]) {
                \$type |= self::EXCLUDE_PUBLIC & \$filter;
            } elseif ('~' === \$k[1]) {
                \$type |= self::EXCLUDE_VIRTUAL & \$filter;
            } elseif ('+' === \$k[1]) {
                \$type |= self::EXCLUDE_DYNAMIC & \$filter;
            } elseif ('*' === \$k[1]) {
                \$type |= self::EXCLUDE_PROTECTED & \$filter;
            } else {
                \$type |= self::EXCLUDE_PRIVATE & \$filter;
            }

            if ((self::EXCLUDE_STRICT & \$filter) ? \$type === \$filter : \$type) {
                unset(\$a[\$k]);
                ++\$count;
            }
        }

        return \$a;
    }

    public static function castPhpIncompleteClass(\\__PHP_Incomplete_Class \$c, array \$a, Stub \$stub, bool \$isNested): array
    {
        if (isset(\$a['__PHP_Incomplete_Class_Name'])) {
            \$stub->class .= '('.\$a['__PHP_Incomplete_Class_Name'].')';
            unset(\$a['__PHP_Incomplete_Class_Name']);
        }

        return \$a;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Caster/Caster.php";
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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Helper for filtering out properties in casters.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class Caster
{
    const EXCLUDE_VERBOSE = 1;
    const EXCLUDE_VIRTUAL = 2;
    const EXCLUDE_DYNAMIC = 4;
    const EXCLUDE_PUBLIC = 8;
    const EXCLUDE_PROTECTED = 16;
    const EXCLUDE_PRIVATE = 32;
    const EXCLUDE_NULL = 64;
    const EXCLUDE_EMPTY = 128;
    const EXCLUDE_NOT_IMPORTANT = 256;
    const EXCLUDE_STRICT = 512;

    const PREFIX_VIRTUAL = \"\\0~\\0\";
    const PREFIX_DYNAMIC = \"\\0+\\0\";
    const PREFIX_PROTECTED = \"\\0*\\0\";

    /**
     * Casts objects to arrays and adds the dynamic property prefix.
     *
     * @param bool \$hasDebugInfo Whether the __debugInfo method exists on \$obj or not
     *
     * @return array The array-cast of the object, with prefixed dynamic properties
     */
    public static function castObject(object \$obj, string \$class, bool \$hasDebugInfo = false): array
    {
        if (\$hasDebugInfo) {
            try {
                \$debugInfo = \$obj->__debugInfo();
            } catch (\\Exception \$e) {
                // ignore failing __debugInfo()
                \$hasDebugInfo = false;
            }
        }

        \$a = \$obj instanceof \\Closure ? [] : (array) \$obj;

        if (\$obj instanceof \\__PHP_Incomplete_Class) {
            return \$a;
        }

        if (\$a) {
            static \$publicProperties = [];

            \$i = 0;
            \$prefixedKeys = [];
            foreach (\$a as \$k => \$v) {
                if (\"\\0\" !== (\$k[0] ?? '')) {
                    if (!isset(\$publicProperties[\$class])) {
                        foreach ((new \\ReflectionClass(\$class))->getProperties(\\ReflectionProperty::IS_PUBLIC) as \$prop) {
                            \$publicProperties[\$class][\$prop->name] = true;
                        }
                    }
                    if (!isset(\$publicProperties[\$class][\$k])) {
                        \$prefixedKeys[\$i] = self::PREFIX_DYNAMIC.\$k;
                    }
                } elseif (isset(\$k[16]) && \"\\0\" === \$k[16] && 0 === strpos(\$k, \"\\0class@anonymous\\0\")) {
                    \$prefixedKeys[\$i] = \"\\0\".get_parent_class(\$class).'@anonymous'.strrchr(\$k, \"\\0\");
                }
                ++\$i;
            }
            if (\$prefixedKeys) {
                \$keys = array_keys(\$a);
                foreach (\$prefixedKeys as \$i => \$k) {
                    \$keys[\$i] = \$k;
                }
                \$a = array_combine(\$keys, \$a);
            }
        }

        if (\$hasDebugInfo && \\is_array(\$debugInfo)) {
            foreach (\$debugInfo as \$k => \$v) {
                if (!isset(\$k[0]) || \"\\0\" !== \$k[0]) {
                    \$k = self::PREFIX_VIRTUAL.\$k;
                }

                unset(\$a[\$k]);
                \$a[\$k] = \$v;
            }
        }

        return \$a;
    }

    /**
     * Filters out the specified properties.
     *
     * By default, a single match in the \$filter bit field filters properties out, following an \"or\" logic.
     * When EXCLUDE_STRICT is set, an \"and\" logic is applied: all bits must match for a property to be removed.
     *
     * @param array    \$a                The array containing the properties to filter
     * @param int      \$filter           A bit field of Caster::EXCLUDE_* constants specifying which properties to filter out
     * @param string[] \$listedProperties List of properties to exclude when Caster::EXCLUDE_VERBOSE is set, and to preserve when Caster::EXCLUDE_NOT_IMPORTANT is set
     * @param int      &\$count           Set to the number of removed properties
     *
     * @return array The filtered array
     */
    public static function filter(array \$a, int \$filter, array \$listedProperties = [], ?int &\$count = 0): array
    {
        \$count = 0;

        foreach (\$a as \$k => \$v) {
            \$type = self::EXCLUDE_STRICT & \$filter;

            if (null === \$v) {
                \$type |= self::EXCLUDE_NULL & \$filter;
                \$type |= self::EXCLUDE_EMPTY & \$filter;
            } elseif (false === \$v || '' === \$v || '0' === \$v || 0 === \$v || 0.0 === \$v || [] === \$v) {
                \$type |= self::EXCLUDE_EMPTY & \$filter;
            }
            if ((self::EXCLUDE_NOT_IMPORTANT & \$filter) && !\\in_array(\$k, \$listedProperties, true)) {
                \$type |= self::EXCLUDE_NOT_IMPORTANT;
            }
            if ((self::EXCLUDE_VERBOSE & \$filter) && \\in_array(\$k, \$listedProperties, true)) {
                \$type |= self::EXCLUDE_VERBOSE;
            }

            if (!isset(\$k[1]) || \"\\0\" !== \$k[0]) {
                \$type |= self::EXCLUDE_PUBLIC & \$filter;
            } elseif ('~' === \$k[1]) {
                \$type |= self::EXCLUDE_VIRTUAL & \$filter;
            } elseif ('+' === \$k[1]) {
                \$type |= self::EXCLUDE_DYNAMIC & \$filter;
            } elseif ('*' === \$k[1]) {
                \$type |= self::EXCLUDE_PROTECTED & \$filter;
            } else {
                \$type |= self::EXCLUDE_PRIVATE & \$filter;
            }

            if ((self::EXCLUDE_STRICT & \$filter) ? \$type === \$filter : \$type) {
                unset(\$a[\$k]);
                ++\$count;
            }
        }

        return \$a;
    }

    public static function castPhpIncompleteClass(\\__PHP_Incomplete_Class \$c, array \$a, Stub \$stub, bool \$isNested): array
    {
        if (isset(\$a['__PHP_Incomplete_Class_Name'])) {
            \$stub->class .= '('.\$a['__PHP_Incomplete_Class_Name'].')';
            unset(\$a['__PHP_Incomplete_Class_Name']);
        }

        return \$a;
    }
}
", "@app/vendor/symfony/var-dumper/Caster/Caster.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Caster\\Caster.php");
    }
}
