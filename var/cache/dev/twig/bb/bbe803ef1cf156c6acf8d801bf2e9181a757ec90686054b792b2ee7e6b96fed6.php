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

/* @app/vendor/doctrine/common/lib/Doctrine/Common/Util/Debug.php */
class __TwigTemplate_fa06626595a084ddd5929bd1da39a875322e9965c4f39b38be2bf91cf5bb81b4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/common/lib/Doctrine/Common/Util/Debug.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common\\Util;

use Doctrine\\Common\\Collections\\Collection;
use Doctrine\\Common\\Persistence\\Proxy;

/**
 * Static class containing most used debug methods.
 *
 * @link   www.doctrine-project.org
 * @since  2.0
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 * @author Giorgio Sironi <piccoloprincipeazzurro@gmail.com>
 *
 * @deprecated The Debug class is deprecated, please use symfony/var-dumper instead.
 */
final class Debug
{
    /**
     * Private constructor (prevents instantiation).
     */
    private function __construct()
    {
    }

    /**
     * Prints a dump of the public, protected and private properties of \$var.
     *
     * @link https://xdebug.org/
     *
     * @param mixed   \$var       The variable to dump.
     * @param integer \$maxDepth  The maximum nesting level for object properties.
     * @param boolean \$stripTags Whether output should strip HTML tags.
     * @param boolean \$echo      Send the dumped value to the output buffer
     *
     * @return string
     */
    public static function dump(\$var, \$maxDepth = 2, \$stripTags = true, \$echo = true)
    {
        \$html = ini_get('html_errors');

        if (\$html !== true) {
            ini_set('html_errors', true);
        }

        if (extension_loaded('xdebug')) {
            ini_set('xdebug.var_display_max_depth', \$maxDepth);
        }

        \$var = self::export(\$var, \$maxDepth);

        ob_start();
        var_dump(\$var);

        \$dump = ob_get_contents();

        ob_end_clean();

        \$dumpText = (\$stripTags ? strip_tags(html_entity_decode(\$dump)) : \$dump);

        ini_set('html_errors', \$html);

        if (\$echo) {
            echo \$dumpText;
        }

        return \$dumpText;
    }

    /**
     * @param mixed \$var
     * @param int   \$maxDepth
     *
     * @return mixed
     */
    public static function export(\$var, \$maxDepth)
    {
        \$return = null;
        \$isObj  = is_object(\$var);

        if (\$var instanceof Collection) {
            \$var = \$var->toArray();
        }

        if ( ! \$maxDepth) {
            return is_object(\$var) ? get_class(\$var)
                : (is_array(\$var) ? 'Array(' . count(\$var) . ')' : \$var);
        }

        if (is_array(\$var)) {
            \$return = [];

            foreach (\$var as \$k => \$v) {
                \$return[\$k] = self::export(\$v, \$maxDepth - 1);
            }

            return \$return;
        }

        if ( ! \$isObj) {
            return \$var;
        }

        \$return = new \\stdClass();
        if (\$var instanceof \\DateTimeInterface) {
            \$return->__CLASS__ = get_class(\$var);
            \$return->date      = \$var->format('c');
            \$return->timezone  = \$var->getTimezone()->getName();

            return \$return;
        }

        \$return->__CLASS__ = ClassUtils::getClass(\$var);

        if (\$var instanceof Proxy) {
            \$return->__IS_PROXY__          = true;
            \$return->__PROXY_INITIALIZED__ = \$var->__isInitialized();
        }

        if (\$var instanceof \\ArrayObject || \$var instanceof \\ArrayIterator) {
            \$return->__STORAGE__ = self::export(\$var->getArrayCopy(), \$maxDepth - 1);
        }

        return self::fillReturnWithClassAttributes(\$var, \$return, \$maxDepth);
    }

    /**
     * Fill the \$return variable with class attributes
     * Based on obj2array function from {@see https://secure.php.net/manual/en/function.get-object-vars.php#47075}
     *
     * @param object   \$var
     * @param \\stdClass \$return
     * @param int      \$maxDepth
     *
     * @return mixed
     */
    private static function fillReturnWithClassAttributes(\$var, \\stdClass \$return, \$maxDepth)
    {
        \$clone = (array) \$var;

        foreach (array_keys(\$clone) as \$key) {
            \$aux  = explode(\"\\0\", \$key);
            \$name = end(\$aux);
            if (\$aux[0] === '') {
                \$name .= ':' . (\$aux[1] === '*' ? 'protected' : \$aux[1] . ':private');
            }
            \$return->\$name = self::export(\$clone[\$key], \$maxDepth - 1);
            ;
        }

        return \$return;
    }

    /**
     * Returns a string representation of an object.
     *
     * @param object \$obj
     *
     * @return string
     */
    public static function toString(\$obj)
    {
        return method_exists(\$obj, '__toString') ? (string) \$obj : get_class(\$obj) . '@' . spl_object_hash(\$obj);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/common/lib/Doctrine/Common/Util/Debug.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common\\Util;

use Doctrine\\Common\\Collections\\Collection;
use Doctrine\\Common\\Persistence\\Proxy;

/**
 * Static class containing most used debug methods.
 *
 * @link   www.doctrine-project.org
 * @since  2.0
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 * @author Giorgio Sironi <piccoloprincipeazzurro@gmail.com>
 *
 * @deprecated The Debug class is deprecated, please use symfony/var-dumper instead.
 */
final class Debug
{
    /**
     * Private constructor (prevents instantiation).
     */
    private function __construct()
    {
    }

    /**
     * Prints a dump of the public, protected and private properties of \$var.
     *
     * @link https://xdebug.org/
     *
     * @param mixed   \$var       The variable to dump.
     * @param integer \$maxDepth  The maximum nesting level for object properties.
     * @param boolean \$stripTags Whether output should strip HTML tags.
     * @param boolean \$echo      Send the dumped value to the output buffer
     *
     * @return string
     */
    public static function dump(\$var, \$maxDepth = 2, \$stripTags = true, \$echo = true)
    {
        \$html = ini_get('html_errors');

        if (\$html !== true) {
            ini_set('html_errors', true);
        }

        if (extension_loaded('xdebug')) {
            ini_set('xdebug.var_display_max_depth', \$maxDepth);
        }

        \$var = self::export(\$var, \$maxDepth);

        ob_start();
        var_dump(\$var);

        \$dump = ob_get_contents();

        ob_end_clean();

        \$dumpText = (\$stripTags ? strip_tags(html_entity_decode(\$dump)) : \$dump);

        ini_set('html_errors', \$html);

        if (\$echo) {
            echo \$dumpText;
        }

        return \$dumpText;
    }

    /**
     * @param mixed \$var
     * @param int   \$maxDepth
     *
     * @return mixed
     */
    public static function export(\$var, \$maxDepth)
    {
        \$return = null;
        \$isObj  = is_object(\$var);

        if (\$var instanceof Collection) {
            \$var = \$var->toArray();
        }

        if ( ! \$maxDepth) {
            return is_object(\$var) ? get_class(\$var)
                : (is_array(\$var) ? 'Array(' . count(\$var) . ')' : \$var);
        }

        if (is_array(\$var)) {
            \$return = [];

            foreach (\$var as \$k => \$v) {
                \$return[\$k] = self::export(\$v, \$maxDepth - 1);
            }

            return \$return;
        }

        if ( ! \$isObj) {
            return \$var;
        }

        \$return = new \\stdClass();
        if (\$var instanceof \\DateTimeInterface) {
            \$return->__CLASS__ = get_class(\$var);
            \$return->date      = \$var->format('c');
            \$return->timezone  = \$var->getTimezone()->getName();

            return \$return;
        }

        \$return->__CLASS__ = ClassUtils::getClass(\$var);

        if (\$var instanceof Proxy) {
            \$return->__IS_PROXY__          = true;
            \$return->__PROXY_INITIALIZED__ = \$var->__isInitialized();
        }

        if (\$var instanceof \\ArrayObject || \$var instanceof \\ArrayIterator) {
            \$return->__STORAGE__ = self::export(\$var->getArrayCopy(), \$maxDepth - 1);
        }

        return self::fillReturnWithClassAttributes(\$var, \$return, \$maxDepth);
    }

    /**
     * Fill the \$return variable with class attributes
     * Based on obj2array function from {@see https://secure.php.net/manual/en/function.get-object-vars.php#47075}
     *
     * @param object   \$var
     * @param \\stdClass \$return
     * @param int      \$maxDepth
     *
     * @return mixed
     */
    private static function fillReturnWithClassAttributes(\$var, \\stdClass \$return, \$maxDepth)
    {
        \$clone = (array) \$var;

        foreach (array_keys(\$clone) as \$key) {
            \$aux  = explode(\"\\0\", \$key);
            \$name = end(\$aux);
            if (\$aux[0] === '') {
                \$name .= ':' . (\$aux[1] === '*' ? 'protected' : \$aux[1] . ':private');
            }
            \$return->\$name = self::export(\$clone[\$key], \$maxDepth - 1);
            ;
        }

        return \$return;
    }

    /**
     * Returns a string representation of an object.
     *
     * @param object \$obj
     *
     * @return string
     */
    public static function toString(\$obj)
    {
        return method_exists(\$obj, '__toString') ? (string) \$obj : get_class(\$obj) . '@' . spl_object_hash(\$obj);
    }
}
", "@app/vendor/doctrine/common/lib/Doctrine/Common/Util/Debug.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Util\\Debug.php");
    }
}
