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

/* @app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/GenericTag.php */
class __TwigTemplate_38f7b28fa63fce6a0000e99d4947866963828c08c57fc6b693375b31c6e6037f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/GenericTag.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Reflection\\DocBlock\\Tag;

use Zend\\Code\\Generic\\Prototype\\PrototypeGenericInterface;

use function explode;
use function trim;

class GenericTag implements TagInterface, PrototypeGenericInterface
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
     * @var null|string
     */
    protected \$contentSplitCharacter;

    /**
     * @var array
     */
    protected \$values = [];

    /**
     * @param  string \$contentSplitCharacter
     */
    public function __construct(\$contentSplitCharacter = ' ')
    {
        \$this->contentSplitCharacter = \$contentSplitCharacter;
    }

    /**
     * @param  string \$tagDocBlockLine
     * @return void
     */
    public function initialize(\$tagDocBlockLine)
    {
        \$this->parse(\$tagDocBlockLine);
    }

    /**
     * Get annotation tag name
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * @param  string \$name
     */
    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return \$this->content;
    }

    /**
     * @param  int \$position
     * @return string
     */
    public function returnValue(\$position)
    {
        return \$this->values[\$position];
    }

    /**
     * Serialize to string
     *
     * Required by Reflector
     *
     * @todo   What should this do?
     * @return string
     */
    public function __toString()
    {
        return 'DocBlock Tag [ * @' . \$this->name . ' ]' . \"\\n\";
    }

    /**
     * @param  string \$docBlockLine
     */
    protected function parse(\$docBlockLine)
    {
        \$this->content = trim(\$docBlockLine);
        \$this->values = explode(\$this->contentSplitCharacter, \$docBlockLine);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/GenericTag.php";
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

namespace Zend\\Code\\Reflection\\DocBlock\\Tag;

use Zend\\Code\\Generic\\Prototype\\PrototypeGenericInterface;

use function explode;
use function trim;

class GenericTag implements TagInterface, PrototypeGenericInterface
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
     * @var null|string
     */
    protected \$contentSplitCharacter;

    /**
     * @var array
     */
    protected \$values = [];

    /**
     * @param  string \$contentSplitCharacter
     */
    public function __construct(\$contentSplitCharacter = ' ')
    {
        \$this->contentSplitCharacter = \$contentSplitCharacter;
    }

    /**
     * @param  string \$tagDocBlockLine
     * @return void
     */
    public function initialize(\$tagDocBlockLine)
    {
        \$this->parse(\$tagDocBlockLine);
    }

    /**
     * Get annotation tag name
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * @param  string \$name
     */
    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return \$this->content;
    }

    /**
     * @param  int \$position
     * @return string
     */
    public function returnValue(\$position)
    {
        return \$this->values[\$position];
    }

    /**
     * Serialize to string
     *
     * Required by Reflector
     *
     * @todo   What should this do?
     * @return string
     */
    public function __toString()
    {
        return 'DocBlock Tag [ * @' . \$this->name . ' ]' . \"\\n\";
    }

    /**
     * @param  string \$docBlockLine
     */
    protected function parse(\$docBlockLine)
    {
        \$this->content = trim(\$docBlockLine);
        \$this->values = explode(\$this->contentSplitCharacter, \$docBlockLine);
    }
}
", "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/GenericTag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\Reflection\\DocBlock\\Tag\\GenericTag.php");
    }
}
