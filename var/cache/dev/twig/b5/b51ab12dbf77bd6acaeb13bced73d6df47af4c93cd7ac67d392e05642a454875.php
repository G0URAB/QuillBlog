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

/* @app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/CallTrait.php */
class __TwigTemplate_7a0ffe7bcf51f6a3c8a90c7a8dd0be0d191e6a5554006f253397365957215a4d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/CallTrait.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\Traits;

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

trait CallTrait
{
    /**
     * Adds a method to call after service initialization.
     *
     * @param string \$method       The method name to call
     * @param array  \$arguments    An array of arguments to pass to the method call
     * @param bool   \$returnsClone Whether the call returns the service instance or not
     *
     * @return \$this
     *
     * @throws InvalidArgumentException on empty \$method param
     */
    final public function call(string \$method, array \$arguments = [], bool \$returnsClone = false): self
    {
        \$this->definition->addMethodCall(\$method, static::processValue(\$arguments, true), \$returnsClone);

        return \$this;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/CallTrait.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\Traits;

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

trait CallTrait
{
    /**
     * Adds a method to call after service initialization.
     *
     * @param string \$method       The method name to call
     * @param array  \$arguments    An array of arguments to pass to the method call
     * @param bool   \$returnsClone Whether the call returns the service instance or not
     *
     * @return \$this
     *
     * @throws InvalidArgumentException on empty \$method param
     */
    final public function call(string \$method, array \$arguments = [], bool \$returnsClone = false): self
    {
        \$this->definition->addMethodCall(\$method, static::processValue(\$arguments, true), \$returnsClone);

        return \$this;
    }
}
", "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/CallTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Loader\\Configurator\\Traits\\CallTrait.php");
    }
}
