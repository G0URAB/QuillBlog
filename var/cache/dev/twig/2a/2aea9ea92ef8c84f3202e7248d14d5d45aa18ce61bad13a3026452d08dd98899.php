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

/* @app/vendor/zendframework/zend-eventmanager/src/Filter/FilterInterface.php */
class __TwigTemplate_8672e731f615e30b410bc8da40861736df1c8b053cf328544bbe67460f143fc8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-eventmanager/src/Filter/FilterInterface.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zend-eventmanager for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-eventmanager/blob/master/LICENSE.md
 */

namespace Zend\\EventManager\\Filter;

use Zend\\EventManager\\ResponseCollection;

/**
 * Interface for intercepting filter chains
 */
interface FilterInterface
{
    /**
     * Execute the filter chain
     *
     * @param  string|object \$context
     * @param  array \$params
     * @return mixed
     */
    public function run(\$context, array \$params = []);

    /**
     * Attach an intercepting filter
     *
     * @param  callable \$callback
     */
    public function attach(callable \$callback);

    /**
     * Detach an intercepting filter
     *
     * @param  callable \$filter
     * @return bool
     */
    public function detach(callable \$filter);

    /**
     * Get all intercepting filters
     *
     * @return array
     */
    public function getFilters();

    /**
     * Clear all filters
     *
     * @return void
     */
    public function clearFilters();

    /**
     * Get all filter responses
     *
     * @return ResponseCollection
     */
    public function getResponses();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-eventmanager/src/Filter/FilterInterface.php";
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

namespace Zend\\EventManager\\Filter;

use Zend\\EventManager\\ResponseCollection;

/**
 * Interface for intercepting filter chains
 */
interface FilterInterface
{
    /**
     * Execute the filter chain
     *
     * @param  string|object \$context
     * @param  array \$params
     * @return mixed
     */
    public function run(\$context, array \$params = []);

    /**
     * Attach an intercepting filter
     *
     * @param  callable \$callback
     */
    public function attach(callable \$callback);

    /**
     * Detach an intercepting filter
     *
     * @param  callable \$filter
     * @return bool
     */
    public function detach(callable \$filter);

    /**
     * Get all intercepting filters
     *
     * @return array
     */
    public function getFilters();

    /**
     * Clear all filters
     *
     * @return void
     */
    public function clearFilters();

    /**
     * Get all filter responses
     *
     * @return ResponseCollection
     */
    public function getResponses();
}
", "@app/vendor/zendframework/zend-eventmanager/src/Filter/FilterInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-eventmanager\\src\\Filter\\FilterInterface.php");
    }
}
