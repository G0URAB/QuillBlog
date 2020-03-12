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

/* @app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/PropertyTag.php */
class __TwigTemplate_6918cd82f53419d65e91e9dc32e5d3be55fb8098afa7142d3131cf29d662f414 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/PropertyTag.php"));

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

use function ltrim;

class PropertyTag extends AbstractTypeableTag implements TagInterface
{
    /**
     * @var string
     */
    protected \$propertyName;

    /**
     * @param string \$propertyName
     * @param array \$types
     * @param string \$description
     */
    public function __construct(\$propertyName = null, \$types = [], \$description = null)
    {
        if (! empty(\$propertyName)) {
            \$this->setPropertyName(\$propertyName);
        }

        parent::__construct(\$types, \$description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'property';
    }

    /**
     * @param string \$propertyName
     * @return self
     */
    public function setPropertyName(\$propertyName)
    {
        \$this->propertyName = ltrim(\$propertyName, '\$');
        return \$this;
    }

    /**
     * @return string
     */
    public function getPropertyName()
    {
        return \$this->propertyName;
    }

    /**
     * @return string
     */
    public function generate()
    {
        \$output = '@property'
            . (! empty(\$this->types) ? ' ' . \$this->getTypesAsString() : '')
            . (! empty(\$this->propertyName) ? ' \$' . \$this->propertyName : '')
            . (! empty(\$this->description) ? ' ' . \$this->description : '');

        return \$output;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/PropertyTag.php";
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

use function ltrim;

class PropertyTag extends AbstractTypeableTag implements TagInterface
{
    /**
     * @var string
     */
    protected \$propertyName;

    /**
     * @param string \$propertyName
     * @param array \$types
     * @param string \$description
     */
    public function __construct(\$propertyName = null, \$types = [], \$description = null)
    {
        if (! empty(\$propertyName)) {
            \$this->setPropertyName(\$propertyName);
        }

        parent::__construct(\$types, \$description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'property';
    }

    /**
     * @param string \$propertyName
     * @return self
     */
    public function setPropertyName(\$propertyName)
    {
        \$this->propertyName = ltrim(\$propertyName, '\$');
        return \$this;
    }

    /**
     * @return string
     */
    public function getPropertyName()
    {
        return \$this->propertyName;
    }

    /**
     * @return string
     */
    public function generate()
    {
        \$output = '@property'
            . (! empty(\$this->types) ? ' ' . \$this->getTypesAsString() : '')
            . (! empty(\$this->propertyName) ? ' \$' . \$this->propertyName : '')
            . (! empty(\$this->description) ? ' ' . \$this->description : '');

        return \$output;
    }
}
", "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/PropertyTag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\Generator\\DocBlock\\Tag\\PropertyTag.php");
    }
}
