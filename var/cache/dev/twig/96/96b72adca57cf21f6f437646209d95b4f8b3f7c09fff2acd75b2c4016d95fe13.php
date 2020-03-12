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

/* @app/vendor/symfony/dependency-injection/Loader/Configurator/AbstractServiceConfigurator.php */
class __TwigTemplate_197ff808996a33197f6bd0075386fe06298cd92f2670dc8f112b88c80426f3ad extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Loader/Configurator/AbstractServiceConfigurator.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;

abstract class AbstractServiceConfigurator extends AbstractConfigurator
{
    protected \$parent;
    protected \$id;
    private \$defaultTags = [];

    public function __construct(ServicesConfigurator \$parent, Definition \$definition, string \$id = null, array \$defaultTags = [])
    {
        \$this->parent = \$parent;
        \$this->definition = \$definition;
        \$this->id = \$id;
        \$this->defaultTags = \$defaultTags;
    }

    public function __destruct()
    {
        // default tags should be added last
        foreach (\$this->defaultTags as \$name => \$attributes) {
            foreach (\$attributes as \$attributes) {
                \$this->definition->addTag(\$name, \$attributes);
            }
        }
        \$this->defaultTags = [];
    }

    /**
     * Registers a service.
     */
    final public function set(string \$id, string \$class = null): ServiceConfigurator
    {
        \$this->__destruct();

        return \$this->parent->set(\$id, \$class);
    }

    /**
     * Creates an alias.
     */
    final public function alias(string \$id, string \$referencedId): AliasConfigurator
    {
        \$this->__destruct();

        return \$this->parent->alias(\$id, \$referencedId);
    }

    /**
     * Registers a PSR-4 namespace using a glob pattern.
     */
    final public function load(string \$namespace, string \$resource): PrototypeConfigurator
    {
        \$this->__destruct();

        return \$this->parent->load(\$namespace, \$resource);
    }

    /**
     * Gets an already defined service definition.
     *
     * @throws ServiceNotFoundException if the service definition does not exist
     */
    final public function get(string \$id): ServiceConfigurator
    {
        \$this->__destruct();

        return \$this->parent->get(\$id);
    }

    /**
     * Registers a service.
     */
    final public function __invoke(string \$id, string \$class = null): ServiceConfigurator
    {
        \$this->__destruct();

        return \$this->parent->set(\$id, \$class);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Loader/Configurator/AbstractServiceConfigurator.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;

abstract class AbstractServiceConfigurator extends AbstractConfigurator
{
    protected \$parent;
    protected \$id;
    private \$defaultTags = [];

    public function __construct(ServicesConfigurator \$parent, Definition \$definition, string \$id = null, array \$defaultTags = [])
    {
        \$this->parent = \$parent;
        \$this->definition = \$definition;
        \$this->id = \$id;
        \$this->defaultTags = \$defaultTags;
    }

    public function __destruct()
    {
        // default tags should be added last
        foreach (\$this->defaultTags as \$name => \$attributes) {
            foreach (\$attributes as \$attributes) {
                \$this->definition->addTag(\$name, \$attributes);
            }
        }
        \$this->defaultTags = [];
    }

    /**
     * Registers a service.
     */
    final public function set(string \$id, string \$class = null): ServiceConfigurator
    {
        \$this->__destruct();

        return \$this->parent->set(\$id, \$class);
    }

    /**
     * Creates an alias.
     */
    final public function alias(string \$id, string \$referencedId): AliasConfigurator
    {
        \$this->__destruct();

        return \$this->parent->alias(\$id, \$referencedId);
    }

    /**
     * Registers a PSR-4 namespace using a glob pattern.
     */
    final public function load(string \$namespace, string \$resource): PrototypeConfigurator
    {
        \$this->__destruct();

        return \$this->parent->load(\$namespace, \$resource);
    }

    /**
     * Gets an already defined service definition.
     *
     * @throws ServiceNotFoundException if the service definition does not exist
     */
    final public function get(string \$id): ServiceConfigurator
    {
        \$this->__destruct();

        return \$this->parent->get(\$id);
    }

    /**
     * Registers a service.
     */
    final public function __invoke(string \$id, string \$class = null): ServiceConfigurator
    {
        \$this->__destruct();

        return \$this->parent->set(\$id, \$class);
    }
}
", "@app/vendor/symfony/dependency-injection/Loader/Configurator/AbstractServiceConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Loader\\Configurator\\AbstractServiceConfigurator.php");
    }
}
