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

/* @app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/GenericTag.php */
class __TwigTemplate_01876c65f4f964a6d0d74bd12d39909580270e93692bceb5660c4a0d3acced2d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/GenericTag.php"));

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

use Zend\\Code\\Generator\\AbstractGenerator;
use Zend\\Code\\Generic\\Prototype\\PrototypeGenericInterface;

use function ltrim;

class GenericTag extends AbstractGenerator implements TagInterface, PrototypeGenericInterface
{
    /**
     * @var string
     */
    protected \$name;

    /**
     * @var string
     */
    protected \$content;

    /**
     * @param string \$name
     * @param string \$content
     */
    public function __construct(\$name = null, \$content = null)
    {
        if (! empty(\$name)) {
            \$this->setName(\$name);
        }

        if (! empty(\$content)) {
            \$this->setContent(\$content);
        }
    }

    /**
     * @param  string \$name
     * @return GenericTag
     */
    public function setName(\$name)
    {
        \$this->name = ltrim(\$name, '@');
        return \$this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * @param string \$content
     * @return GenericTag
     */
    public function setContent(\$content)
    {
        \$this->content = \$content;
        return \$this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return \$this->content;
    }

    /**
     * @return string
     */
    public function generate()
    {
        \$output = '@' . \$this->name
            . (! empty(\$this->content) ? ' ' . \$this->content : '');

        return \$output;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/GenericTag.php";
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

use Zend\\Code\\Generator\\AbstractGenerator;
use Zend\\Code\\Generic\\Prototype\\PrototypeGenericInterface;

use function ltrim;

class GenericTag extends AbstractGenerator implements TagInterface, PrototypeGenericInterface
{
    /**
     * @var string
     */
    protected \$name;

    /**
     * @var string
     */
    protected \$content;

    /**
     * @param string \$name
     * @param string \$content
     */
    public function __construct(\$name = null, \$content = null)
    {
        if (! empty(\$name)) {
            \$this->setName(\$name);
        }

        if (! empty(\$content)) {
            \$this->setContent(\$content);
        }
    }

    /**
     * @param  string \$name
     * @return GenericTag
     */
    public function setName(\$name)
    {
        \$this->name = ltrim(\$name, '@');
        return \$this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * @param string \$content
     * @return GenericTag
     */
    public function setContent(\$content)
    {
        \$this->content = \$content;
        return \$this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return \$this->content;
    }

    /**
     * @return string
     */
    public function generate()
    {
        \$output = '@' . \$this->name
            . (! empty(\$this->content) ? ' ' . \$this->content : '');

        return \$output;
    }
}
", "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/GenericTag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\Generator\\DocBlock\\Tag\\GenericTag.php");
    }
}
