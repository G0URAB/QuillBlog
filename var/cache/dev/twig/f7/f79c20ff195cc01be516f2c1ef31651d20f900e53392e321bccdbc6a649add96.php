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

/* @app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionProperty.php */
class __TwigTemplate_6f46dfd0ed5914dd7989224b86f773922e0c69ff51028ac3181ba9f5858ec08e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionProperty.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Reflection;

use ReflectionException;
use ReflectionProperty;

class StaticReflectionProperty extends ReflectionProperty
{
    /**
     * The PSR-0 parser object.
     *
     * @var StaticReflectionParser
     */
    protected \$staticReflectionParser;

    /**
     * The name of the property.
     *
     * @var string|null
     */
    protected \$propertyName;

    /**
     * @param string|null \$propertyName
     */
    public function __construct(StaticReflectionParser \$staticReflectionParser, \$propertyName)
    {
        \$this->staticReflectionParser = \$staticReflectionParser;
        \$this->propertyName           = \$propertyName;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return \$this->propertyName;
    }

    /**
     * @return StaticReflectionParser
     */
    protected function getStaticReflectionParser()
    {
        return \$this->staticReflectionParser->getStaticReflectionParserForDeclaringClass('property', \$this->propertyName);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeclaringClass()
    {
        return \$this->getStaticReflectionParser()->getReflectionClass();
    }

    /**
     * {@inheritDoc}
     */
    public function getDocComment()
    {
        return \$this->getStaticReflectionParser()->getDocComment('property', \$this->propertyName);
    }

    /**
     * @return string[]
     */
    public function getUseStatements()
    {
        return \$this->getStaticReflectionParser()->getUseStatements();
    }

    /**
     * {@inheritDoc}
     */
    public static function export(\$class, \$name, \$return = false)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiers()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getValue(\$object = null)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isDefault()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isPrivate()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isProtected()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isPublic()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isStatic()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function setAccessible(\$accessible)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function setValue(\$object, \$value = null)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {
        throw new ReflectionException('Method not implemented');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionProperty.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Reflection;

use ReflectionException;
use ReflectionProperty;

class StaticReflectionProperty extends ReflectionProperty
{
    /**
     * The PSR-0 parser object.
     *
     * @var StaticReflectionParser
     */
    protected \$staticReflectionParser;

    /**
     * The name of the property.
     *
     * @var string|null
     */
    protected \$propertyName;

    /**
     * @param string|null \$propertyName
     */
    public function __construct(StaticReflectionParser \$staticReflectionParser, \$propertyName)
    {
        \$this->staticReflectionParser = \$staticReflectionParser;
        \$this->propertyName           = \$propertyName;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return \$this->propertyName;
    }

    /**
     * @return StaticReflectionParser
     */
    protected function getStaticReflectionParser()
    {
        return \$this->staticReflectionParser->getStaticReflectionParserForDeclaringClass('property', \$this->propertyName);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeclaringClass()
    {
        return \$this->getStaticReflectionParser()->getReflectionClass();
    }

    /**
     * {@inheritDoc}
     */
    public function getDocComment()
    {
        return \$this->getStaticReflectionParser()->getDocComment('property', \$this->propertyName);
    }

    /**
     * @return string[]
     */
    public function getUseStatements()
    {
        return \$this->getStaticReflectionParser()->getUseStatements();
    }

    /**
     * {@inheritDoc}
     */
    public static function export(\$class, \$name, \$return = false)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiers()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getValue(\$object = null)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isDefault()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isPrivate()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isProtected()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isPublic()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isStatic()
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function setAccessible(\$accessible)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function setValue(\$object, \$value = null)
    {
        throw new ReflectionException('Method not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {
        throw new ReflectionException('Method not implemented');
    }
}
", "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionProperty.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\reflection\\lib\\Doctrine\\Common\\Reflection\\StaticReflectionProperty.php");
    }
}
