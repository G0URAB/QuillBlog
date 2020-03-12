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

/* @app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/DecorateTrait.php */
class __TwigTemplate_03e64f924a233b18dc63845145372c428fb535a6fa3141cc6d312ca4c89fa487 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/DecorateTrait.php"));

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

use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

trait DecorateTrait
{
    /**
     * Sets the service that this service is decorating.
     *
     * @param string|null \$id The decorated service id, use null to remove decoration
     *
     * @return \$this
     *
     * @throws InvalidArgumentException in case the decorated service id and the new decorated service id are equals
     */
    final public function decorate(?string \$id, string \$renamedId = null, int \$priority = 0, int \$invalidBehavior = ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE): self
    {
        \$this->definition->setDecoratedService(\$id, \$renamedId, \$priority, \$invalidBehavior);

        return \$this;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/DecorateTrait.php";
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

use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

trait DecorateTrait
{
    /**
     * Sets the service that this service is decorating.
     *
     * @param string|null \$id The decorated service id, use null to remove decoration
     *
     * @return \$this
     *
     * @throws InvalidArgumentException in case the decorated service id and the new decorated service id are equals
     */
    final public function decorate(?string \$id, string \$renamedId = null, int \$priority = 0, int \$invalidBehavior = ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE): self
    {
        \$this->definition->setDecoratedService(\$id, \$renamedId, \$priority, \$invalidBehavior);

        return \$this;
    }
}
", "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/DecorateTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Loader\\Configurator\\Traits\\DecorateTrait.php");
    }
}
