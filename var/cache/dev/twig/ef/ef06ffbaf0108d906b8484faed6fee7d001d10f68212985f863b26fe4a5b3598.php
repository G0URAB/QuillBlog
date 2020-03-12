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

/* @app/vendor/doctrine/common/lib/Doctrine/Common/Util/ClassUtils.php */
class __TwigTemplate_ecfd157f454a25ca821f0796e8a9dbda7a0780012b9cf7df170a80226100a40c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/common/lib/Doctrine/Common/Util/ClassUtils.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common\\Util;

use Doctrine\\Common\\Persistence\\Proxy;

/**
 * Class and reflection related functionality for objects that
 * might or not be proxy objects at the moment.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Johannes Schmitt <schmittjoh@gmail.com>
 *
 * @deprecated The ClassUtils class is deprecated.
 */
class ClassUtils
{
    /**
     * Gets the real class name of a class name that could be a proxy.
     *
     * @param string \$class
     *
     * @return string
     */
    public static function getRealClass(\$class)
    {
        if (false === \$pos = strrpos(\$class, '\\\\' . Proxy::MARKER . '\\\\')) {
            return \$class;
        }

        return substr(\$class, \$pos + Proxy::MARKER_LENGTH + 2);
    }

    /**
     * Gets the real class name of an object (even if its a proxy).
     *
     * @param object \$object
     *
     * @return string
     */
    public static function getClass(\$object)
    {
        return self::getRealClass(get_class(\$object));
    }

    /**
     * Gets the real parent class name of a class or object.
     *
     * @param string \$className
     *
     * @return string
     */
    public static function getParentClass(\$className)
    {
        return get_parent_class(self::getRealClass(\$className));
    }

    /**
     * Creates a new reflection class.
     *
     * @param string \$class
     *
     * @return \\ReflectionClass
     */
    public static function newReflectionClass(\$class)
    {
        return new \\ReflectionClass(self::getRealClass(\$class));
    }

    /**
     * Creates a new reflection object.
     *
     * @param object \$object
     *
     * @return \\ReflectionClass
     */
    public static function newReflectionObject(\$object)
    {
        return self::newReflectionClass(self::getClass(\$object));
    }

    /**
     * Given a class name and a proxy namespace returns the proxy name.
     *
     * @param string \$className
     * @param string \$proxyNamespace
     *
     * @return string
     */
    public static function generateProxyClassName(\$className, \$proxyNamespace)
    {
        return rtrim(\$proxyNamespace, '\\\\') . '\\\\' . Proxy::MARKER . '\\\\' . ltrim(\$className, '\\\\');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/common/lib/Doctrine/Common/Util/ClassUtils.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common\\Util;

use Doctrine\\Common\\Persistence\\Proxy;

/**
 * Class and reflection related functionality for objects that
 * might or not be proxy objects at the moment.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Johannes Schmitt <schmittjoh@gmail.com>
 *
 * @deprecated The ClassUtils class is deprecated.
 */
class ClassUtils
{
    /**
     * Gets the real class name of a class name that could be a proxy.
     *
     * @param string \$class
     *
     * @return string
     */
    public static function getRealClass(\$class)
    {
        if (false === \$pos = strrpos(\$class, '\\\\' . Proxy::MARKER . '\\\\')) {
            return \$class;
        }

        return substr(\$class, \$pos + Proxy::MARKER_LENGTH + 2);
    }

    /**
     * Gets the real class name of an object (even if its a proxy).
     *
     * @param object \$object
     *
     * @return string
     */
    public static function getClass(\$object)
    {
        return self::getRealClass(get_class(\$object));
    }

    /**
     * Gets the real parent class name of a class or object.
     *
     * @param string \$className
     *
     * @return string
     */
    public static function getParentClass(\$className)
    {
        return get_parent_class(self::getRealClass(\$className));
    }

    /**
     * Creates a new reflection class.
     *
     * @param string \$class
     *
     * @return \\ReflectionClass
     */
    public static function newReflectionClass(\$class)
    {
        return new \\ReflectionClass(self::getRealClass(\$class));
    }

    /**
     * Creates a new reflection object.
     *
     * @param object \$object
     *
     * @return \\ReflectionClass
     */
    public static function newReflectionObject(\$object)
    {
        return self::newReflectionClass(self::getClass(\$object));
    }

    /**
     * Given a class name and a proxy namespace returns the proxy name.
     *
     * @param string \$className
     * @param string \$proxyNamespace
     *
     * @return string
     */
    public static function generateProxyClassName(\$className, \$proxyNamespace)
    {
        return rtrim(\$proxyNamespace, '\\\\') . '\\\\' . Proxy::MARKER . '\\\\' . ltrim(\$className, '\\\\');
    }
}
", "@app/vendor/doctrine/common/lib/Doctrine/Common/Util/ClassUtils.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Util\\ClassUtils.php");
    }
}
