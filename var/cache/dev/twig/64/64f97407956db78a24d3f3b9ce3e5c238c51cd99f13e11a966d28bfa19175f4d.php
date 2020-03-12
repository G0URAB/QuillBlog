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

/* @app/vendor/symfony/routing/Generator/ConfigurableRequirementsInterface.php */
class __TwigTemplate_bd795386066a09e71ce439ae8160e6341e063c46d0b47edd4eae11911468c3b3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/routing/Generator/ConfigurableRequirementsInterface.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Routing\\Generator;

/**
 * ConfigurableRequirementsInterface must be implemented by URL generators that
 * can be configured whether an exception should be generated when the parameters
 * do not match the requirements. It is also possible to disable the requirements
 * check for URL generation completely.
 *
 * The possible configurations and use-cases:
 * - setStrictRequirements(true): Throw an exception for mismatching requirements. This
 *   is mostly useful in development environment.
 * - setStrictRequirements(false): Don't throw an exception but return an empty string as URL for
 *   mismatching requirements and log the problem. Useful when you cannot control all
 *   params because they come from third party libs but don't want to have a 404 in
 *   production environment. It should log the mismatch so one can review it.
 * - setStrictRequirements(null): Return the URL with the given parameters without
 *   checking the requirements at all. When generating a URL you should either trust
 *   your params or you validated them beforehand because otherwise it would break your
 *   link anyway. So in production environment you should know that params always pass
 *   the requirements. Thus this option allows to disable the check on URL generation for
 *   performance reasons (saving a preg_match for each requirement every time a URL is
 *   generated).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 */
interface ConfigurableRequirementsInterface
{
    /**
     * Enables or disables the exception on incorrect parameters.
     * Passing null will deactivate the requirements check completely.
     */
    public function setStrictRequirements(?bool \$enabled);

    /**
     * Returns whether to throw an exception on incorrect parameters.
     * Null means the requirements check is deactivated completely.
     *
     * @return bool|null
     */
    public function isStrictRequirements();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/routing/Generator/ConfigurableRequirementsInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Routing\\Generator;

/**
 * ConfigurableRequirementsInterface must be implemented by URL generators that
 * can be configured whether an exception should be generated when the parameters
 * do not match the requirements. It is also possible to disable the requirements
 * check for URL generation completely.
 *
 * The possible configurations and use-cases:
 * - setStrictRequirements(true): Throw an exception for mismatching requirements. This
 *   is mostly useful in development environment.
 * - setStrictRequirements(false): Don't throw an exception but return an empty string as URL for
 *   mismatching requirements and log the problem. Useful when you cannot control all
 *   params because they come from third party libs but don't want to have a 404 in
 *   production environment. It should log the mismatch so one can review it.
 * - setStrictRequirements(null): Return the URL with the given parameters without
 *   checking the requirements at all. When generating a URL you should either trust
 *   your params or you validated them beforehand because otherwise it would break your
 *   link anyway. So in production environment you should know that params always pass
 *   the requirements. Thus this option allows to disable the check on URL generation for
 *   performance reasons (saving a preg_match for each requirement every time a URL is
 *   generated).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 */
interface ConfigurableRequirementsInterface
{
    /**
     * Enables or disables the exception on incorrect parameters.
     * Passing null will deactivate the requirements check completely.
     */
    public function setStrictRequirements(?bool \$enabled);

    /**
     * Returns whether to throw an exception on incorrect parameters.
     * Null means the requirements check is deactivated completely.
     *
     * @return bool|null
     */
    public function isStrictRequirements();
}
", "@app/vendor/symfony/routing/Generator/ConfigurableRequirementsInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\routing\\Generator\\ConfigurableRequirementsInterface.php");
    }
}
