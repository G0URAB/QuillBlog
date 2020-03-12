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

/* @app/vendor/zendframework/zend-eventmanager/src/EventInterface.php */
class __TwigTemplate_3c3592954d1fc996ac50d92013c2fb7c7b15017a50f5e496eea1726061f90f41 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-eventmanager/src/EventInterface.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zend-eventmanager for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-eventmanager/blob/master/LICENSE.md
 */

namespace Zend\\EventManager;

use ArrayAccess;

/**
 * Representation of an event
 */
interface EventInterface
{
    /**
     * Get event name
     *
     * @return string
     */
    public function getName();

    /**
     * Get target/context from which event was triggered
     *
     * @return null|string|object
     */
    public function getTarget();

    /**
     * Get parameters passed to the event
     *
     * @return array|ArrayAccess
     */
    public function getParams();

    /**
     * Get a single parameter by name
     *
     * @param  string \$name
     * @param  mixed \$default Default value to return if parameter does not exist
     * @return mixed
     */
    public function getParam(\$name, \$default = null);

    /**
     * Set the event name
     *
     * @param  string \$name
     * @return void
     */
    public function setName(\$name);

    /**
     * Set the event target/context
     *
     * @param  null|string|object \$target
     * @return void
     */
    public function setTarget(\$target);

    /**
     * Set event parameters
     *
     * @param  array|ArrayAccess \$params
     * @return void
     */
    public function setParams(\$params);

    /**
     * Set a single parameter by key
     *
     * @param  string \$name
     * @param  mixed \$value
     * @return void
     */
    public function setParam(\$name, \$value);

    /**
     * Indicate whether or not the parent EventManagerInterface should stop propagating events
     *
     * @param  bool \$flag
     * @return void
     */
    public function stopPropagation(\$flag = true);

    /**
     * Has this event indicated event propagation should stop?
     *
     * @return bool
     */
    public function propagationIsStopped();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-eventmanager/src/EventInterface.php";
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
 * @link      http://github.com/zendframework/zend-eventmanager for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-eventmanager/blob/master/LICENSE.md
 */

namespace Zend\\EventManager;

use ArrayAccess;

/**
 * Representation of an event
 */
interface EventInterface
{
    /**
     * Get event name
     *
     * @return string
     */
    public function getName();

    /**
     * Get target/context from which event was triggered
     *
     * @return null|string|object
     */
    public function getTarget();

    /**
     * Get parameters passed to the event
     *
     * @return array|ArrayAccess
     */
    public function getParams();

    /**
     * Get a single parameter by name
     *
     * @param  string \$name
     * @param  mixed \$default Default value to return if parameter does not exist
     * @return mixed
     */
    public function getParam(\$name, \$default = null);

    /**
     * Set the event name
     *
     * @param  string \$name
     * @return void
     */
    public function setName(\$name);

    /**
     * Set the event target/context
     *
     * @param  null|string|object \$target
     * @return void
     */
    public function setTarget(\$target);

    /**
     * Set event parameters
     *
     * @param  array|ArrayAccess \$params
     * @return void
     */
    public function setParams(\$params);

    /**
     * Set a single parameter by key
     *
     * @param  string \$name
     * @param  mixed \$value
     * @return void
     */
    public function setParam(\$name, \$value);

    /**
     * Indicate whether or not the parent EventManagerInterface should stop propagating events
     *
     * @param  bool \$flag
     * @return void
     */
    public function stopPropagation(\$flag = true);

    /**
     * Has this event indicated event propagation should stop?
     *
     * @return bool
     */
    public function propagationIsStopped();
}
", "@app/vendor/zendframework/zend-eventmanager/src/EventInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-eventmanager\\src\\EventInterface.php");
    }
}
