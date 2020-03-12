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

/* @app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/ParentTrait.php */
class __TwigTemplate_5cf731e610252e2a16f4bc46129aff8258f469eb9dcd437fa170f8b8af68e5ec extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/ParentTrait.php"));

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

use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

trait ParentTrait
{
    /**
     * Sets the Definition to inherit from.
     *
     * @return \$this
     *
     * @throws InvalidArgumentException when parent cannot be set
     */
    final public function parent(string \$parent): self
    {
        if (!\$this->allowParent) {
            throw new InvalidArgumentException(sprintf('A parent cannot be defined when either \"_instanceof\" or \"_defaults\" are also defined for service prototype \"%s\".', \$this->id));
        }

        if (\$this->definition instanceof ChildDefinition) {
            \$this->definition->setParent(\$parent);
        } elseif (\$this->definition->isAutoconfigured()) {
            throw new InvalidArgumentException(sprintf('The service \"%s\" cannot have a \"parent\" and also have \"autoconfigure\". Try disabling autoconfiguration for the service.', \$this->id));
        } elseif (\$this->definition->getBindings()) {
            throw new InvalidArgumentException(sprintf('The service \"%s\" cannot have a \"parent\" and also \"bind\" arguments.', \$this->id));
        } else {
            // cast Definition to ChildDefinition
            \$definition = serialize(\$this->definition);
            \$definition = substr_replace(\$definition, '53', 2, 2);
            \$definition = substr_replace(\$definition, 'Child', 44, 0);
            \$definition = unserialize(\$definition);

            \$this->definition = \$definition->setParent(\$parent);
        }

        return \$this;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/ParentTrait.php";
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

use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

trait ParentTrait
{
    /**
     * Sets the Definition to inherit from.
     *
     * @return \$this
     *
     * @throws InvalidArgumentException when parent cannot be set
     */
    final public function parent(string \$parent): self
    {
        if (!\$this->allowParent) {
            throw new InvalidArgumentException(sprintf('A parent cannot be defined when either \"_instanceof\" or \"_defaults\" are also defined for service prototype \"%s\".', \$this->id));
        }

        if (\$this->definition instanceof ChildDefinition) {
            \$this->definition->setParent(\$parent);
        } elseif (\$this->definition->isAutoconfigured()) {
            throw new InvalidArgumentException(sprintf('The service \"%s\" cannot have a \"parent\" and also have \"autoconfigure\". Try disabling autoconfiguration for the service.', \$this->id));
        } elseif (\$this->definition->getBindings()) {
            throw new InvalidArgumentException(sprintf('The service \"%s\" cannot have a \"parent\" and also \"bind\" arguments.', \$this->id));
        } else {
            // cast Definition to ChildDefinition
            \$definition = serialize(\$this->definition);
            \$definition = substr_replace(\$definition, '53', 2, 2);
            \$definition = substr_replace(\$definition, 'Child', 44, 0);
            \$definition = unserialize(\$definition);

            \$this->definition = \$definition->setParent(\$parent);
        }

        return \$this;
    }
}
", "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/ParentTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Loader\\Configurator\\Traits\\ParentTrait.php");
    }
}
