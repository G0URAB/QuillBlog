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

/* @app/vendor/zendframework/zend-eventmanager/src/FilterChain.php */
class __TwigTemplate_2d8608c7db6713367101f639e3e24d7e802e2cf711e375a212647061508d8606 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-eventmanager/src/FilterChain.php"));

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
 * FilterChain: intercepting filter manager
 */
class FilterChain implements Filter\\FilterInterface
{
    /**
     * @var Filter\\FilterIterator All filters
     */
    protected \$filters;

    /**
     * Constructor
     *
     * Initializes Filter\\FilterIterator in which filters will be aggregated
     */
    public function __construct()
    {
        \$this->filters = new Filter\\FilterIterator();
    }

    /**
     * Apply the filters
     *
     * Begins iteration of the filters.
     *
     * @param  mixed \$context Object under observation
     * @param  mixed \$argv Associative array of arguments
     * @return mixed
     */
    public function run(\$context, array \$argv = [])
    {
        \$chain = clone \$this->getFilters();

        if (\$chain->isEmpty()) {
            return;
        }

        \$next = \$chain->extract();

        return \$next(\$context, \$argv, \$chain);
    }

    /**
     * Connect a filter to the chain
     *
     * @param  callable \$callback PHP Callback
     * @param  int \$priority Priority in the queue at which to execute;
     *     defaults to 1 (higher numbers == higher priority)
     * @return CallbackHandler (to allow later unsubscribe)
     * @throws Exception\\InvalidCallbackException
     */
    public function attach(callable \$callback, \$priority = 1)
    {
        \$this->filters->insert(\$callback, \$priority);
        return \$callback;
    }

    /**
     * Detach a filter from the chain
     *
     * @param  callable \$filter
     * @return bool Returns true if filter found and unsubscribed; returns false otherwise
     */
    public function detach(callable \$filter)
    {
        return \$this->filters->remove(\$filter);
    }

    /**
     * Retrieve all filters
     *
     * @return Filter\\FilterIterator
     */
    public function getFilters()
    {
        return \$this->filters;
    }

    /**
     * Clear all filters
     *
     * @return void
     */
    public function clearFilters()
    {
        \$this->filters = new Filter\\FilterIterator();
    }

    /**
     * Return current responses
     *
     * Only available while the chain is still being iterated. Returns the
     * current ResponseCollection.
     *
     * @return null|ResponseCollection
     */
    public function getResponses()
    {
        return;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-eventmanager/src/FilterChain.php";
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
 * FilterChain: intercepting filter manager
 */
class FilterChain implements Filter\\FilterInterface
{
    /**
     * @var Filter\\FilterIterator All filters
     */
    protected \$filters;

    /**
     * Constructor
     *
     * Initializes Filter\\FilterIterator in which filters will be aggregated
     */
    public function __construct()
    {
        \$this->filters = new Filter\\FilterIterator();
    }

    /**
     * Apply the filters
     *
     * Begins iteration of the filters.
     *
     * @param  mixed \$context Object under observation
     * @param  mixed \$argv Associative array of arguments
     * @return mixed
     */
    public function run(\$context, array \$argv = [])
    {
        \$chain = clone \$this->getFilters();

        if (\$chain->isEmpty()) {
            return;
        }

        \$next = \$chain->extract();

        return \$next(\$context, \$argv, \$chain);
    }

    /**
     * Connect a filter to the chain
     *
     * @param  callable \$callback PHP Callback
     * @param  int \$priority Priority in the queue at which to execute;
     *     defaults to 1 (higher numbers == higher priority)
     * @return CallbackHandler (to allow later unsubscribe)
     * @throws Exception\\InvalidCallbackException
     */
    public function attach(callable \$callback, \$priority = 1)
    {
        \$this->filters->insert(\$callback, \$priority);
        return \$callback;
    }

    /**
     * Detach a filter from the chain
     *
     * @param  callable \$filter
     * @return bool Returns true if filter found and unsubscribed; returns false otherwise
     */
    public function detach(callable \$filter)
    {
        return \$this->filters->remove(\$filter);
    }

    /**
     * Retrieve all filters
     *
     * @return Filter\\FilterIterator
     */
    public function getFilters()
    {
        return \$this->filters;
    }

    /**
     * Clear all filters
     *
     * @return void
     */
    public function clearFilters()
    {
        \$this->filters = new Filter\\FilterIterator();
    }

    /**
     * Return current responses
     *
     * Only available while the chain is still being iterated. Returns the
     * current ResponseCollection.
     *
     * @return null|ResponseCollection
     */
    public function getResponses()
    {
        return;
    }
}
", "@app/vendor/zendframework/zend-eventmanager/src/FilterChain.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-eventmanager\\src\\FilterChain.php");
    }
}
