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

/* @app/vendor/zendframework/zend-eventmanager/src/ListenerAggregateTrait.php */
class __TwigTemplate_e6e1cfdcc7e656681932f719df88f9564c691f0fb3214c26a7d690ff65a79d63 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-eventmanager/src/ListenerAggregateTrait.php"));

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

/**
 * Provides logic to easily create aggregate listeners, without worrying about
 * manually detaching events
 */
trait ListenerAggregateTrait
{
    /**
     * @var callable[]
     */
    protected \$listeners = [];

    /**
     * {@inheritDoc}
     */
    public function detach(EventManagerInterface \$events)
    {
        foreach (\$this->listeners as \$index => \$callback) {
            \$events->detach(\$callback);
            unset(\$this->listeners[\$index]);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-eventmanager/src/ListenerAggregateTrait.php";
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

/**
 * Provides logic to easily create aggregate listeners, without worrying about
 * manually detaching events
 */
trait ListenerAggregateTrait
{
    /**
     * @var callable[]
     */
    protected \$listeners = [];

    /**
     * {@inheritDoc}
     */
    public function detach(EventManagerInterface \$events)
    {
        foreach (\$this->listeners as \$index => \$callback) {
            \$events->detach(\$callback);
            unset(\$this->listeners[\$index]);
        }
    }
}
", "@app/vendor/zendframework/zend-eventmanager/src/ListenerAggregateTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-eventmanager\\src\\ListenerAggregateTrait.php");
    }
}
