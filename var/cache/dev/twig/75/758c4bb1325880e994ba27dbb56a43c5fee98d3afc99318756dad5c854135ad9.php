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

/* @app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/ReturnTag.php */
class __TwigTemplate_6436dab044cbc8f05fe8693f5223eedc6d411693b6fcdf103326860b6fa7cf4a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/ReturnTag.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator\\DocBlock\\Tag;

use Zend\\Code\\Generator\\DocBlock\\TagManager;
use Zend\\Code\\Reflection\\DocBlock\\Tag\\TagInterface as ReflectionTagInterface;

class ReturnTag extends AbstractTypeableTag implements TagInterface
{
    /**
     * @param ReflectionTagInterface \$reflectionTag
     * @return ReturnTag
     * @deprecated Deprecated in 2.3. Use TagManager::createTagFromReflection() instead
     */
    public static function fromReflection(ReflectionTagInterface \$reflectionTag)
    {
        \$tagManager = new TagManager();
        \$tagManager->initializeDefaultTags();
        return \$tagManager->createTagFromReflection(\$reflectionTag);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'return';
    }

    /**
     * @param string \$datatype
     * @return ReturnTag
     * @deprecated Deprecated in 2.3. Use setTypes() instead
     */
    public function setDatatype(\$datatype)
    {
        return \$this->setTypes(\$datatype);
    }

    /**
     * @return string
     * @deprecated Deprecated in 2.3. Use getTypes() or getTypesAsString() instead
     */
    public function getDatatype()
    {
        return \$this->getTypesAsString();
    }

    /**
     * @return string
     */
    public function generate()
    {
        \$output = '@return '
        . \$this->getTypesAsString()
        . (! empty(\$this->description) ? ' ' . \$this->description : '');

        return \$output;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/ReturnTag.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator\\DocBlock\\Tag;

use Zend\\Code\\Generator\\DocBlock\\TagManager;
use Zend\\Code\\Reflection\\DocBlock\\Tag\\TagInterface as ReflectionTagInterface;

class ReturnTag extends AbstractTypeableTag implements TagInterface
{
    /**
     * @param ReflectionTagInterface \$reflectionTag
     * @return ReturnTag
     * @deprecated Deprecated in 2.3. Use TagManager::createTagFromReflection() instead
     */
    public static function fromReflection(ReflectionTagInterface \$reflectionTag)
    {
        \$tagManager = new TagManager();
        \$tagManager->initializeDefaultTags();
        return \$tagManager->createTagFromReflection(\$reflectionTag);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'return';
    }

    /**
     * @param string \$datatype
     * @return ReturnTag
     * @deprecated Deprecated in 2.3. Use setTypes() instead
     */
    public function setDatatype(\$datatype)
    {
        return \$this->setTypes(\$datatype);
    }

    /**
     * @return string
     * @deprecated Deprecated in 2.3. Use getTypes() or getTypesAsString() instead
     */
    public function getDatatype()
    {
        return \$this->getTypesAsString();
    }

    /**
     * @return string
     */
    public function generate()
    {
        \$output = '@return '
        . \$this->getTypesAsString()
        . (! empty(\$this->description) ? ' ' . \$this->description : '');

        return \$output;
    }
}
", "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/ReturnTag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\Generator\\DocBlock\\Tag\\ReturnTag.php");
    }
}
