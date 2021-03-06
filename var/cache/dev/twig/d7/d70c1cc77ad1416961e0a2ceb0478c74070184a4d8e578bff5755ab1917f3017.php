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

/* @app/vendor/symfony/dependency-injection/Loader/Configurator/ServiceConfigurator.php */
class __TwigTemplate_c4c1cef975041274cf6c0add34c04a3defd4dcb135b62e0285469f911f1da239 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Loader/Configurator/ServiceConfigurator.php"));

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

use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ServiceConfigurator extends AbstractServiceConfigurator
{
    const FACTORY = 'services';

    use Traits\\AbstractTrait;
    use Traits\\ArgumentTrait;
    use Traits\\AutoconfigureTrait;
    use Traits\\AutowireTrait;
    use Traits\\BindTrait;
    use Traits\\CallTrait;
    use Traits\\ClassTrait;
    use Traits\\ConfiguratorTrait;
    use Traits\\DecorateTrait;
    use Traits\\DeprecateTrait;
    use Traits\\FactoryTrait;
    use Traits\\FileTrait;
    use Traits\\LazyTrait;
    use Traits\\ParentTrait;
    use Traits\\PropertyTrait;
    use Traits\\PublicTrait;
    use Traits\\ShareTrait;
    use Traits\\SyntheticTrait;
    use Traits\\TagTrait;

    private \$container;
    private \$instanceof;
    private \$allowParent;
    private \$path;

    public function __construct(ContainerBuilder \$container, array \$instanceof, bool \$allowParent, ServicesConfigurator \$parent, Definition \$definition, \$id, array \$defaultTags, string \$path = null)
    {
        \$this->container = \$container;
        \$this->instanceof = \$instanceof;
        \$this->allowParent = \$allowParent;
        \$this->path = \$path;

        parent::__construct(\$parent, \$definition, \$id, \$defaultTags);
    }

    public function __destruct()
    {
        parent::__destruct();

        \$this->container->removeBindings(\$this->id);

        if (!\$this->definition instanceof ChildDefinition) {
            \$this->container->setDefinition(\$this->id, \$this->definition->setInstanceofConditionals(\$this->instanceof));
        } else {
            \$this->container->setDefinition(\$this->id, \$this->definition);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Loader/Configurator/ServiceConfigurator.php";
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

use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ServiceConfigurator extends AbstractServiceConfigurator
{
    const FACTORY = 'services';

    use Traits\\AbstractTrait;
    use Traits\\ArgumentTrait;
    use Traits\\AutoconfigureTrait;
    use Traits\\AutowireTrait;
    use Traits\\BindTrait;
    use Traits\\CallTrait;
    use Traits\\ClassTrait;
    use Traits\\ConfiguratorTrait;
    use Traits\\DecorateTrait;
    use Traits\\DeprecateTrait;
    use Traits\\FactoryTrait;
    use Traits\\FileTrait;
    use Traits\\LazyTrait;
    use Traits\\ParentTrait;
    use Traits\\PropertyTrait;
    use Traits\\PublicTrait;
    use Traits\\ShareTrait;
    use Traits\\SyntheticTrait;
    use Traits\\TagTrait;

    private \$container;
    private \$instanceof;
    private \$allowParent;
    private \$path;

    public function __construct(ContainerBuilder \$container, array \$instanceof, bool \$allowParent, ServicesConfigurator \$parent, Definition \$definition, \$id, array \$defaultTags, string \$path = null)
    {
        \$this->container = \$container;
        \$this->instanceof = \$instanceof;
        \$this->allowParent = \$allowParent;
        \$this->path = \$path;

        parent::__construct(\$parent, \$definition, \$id, \$defaultTags);
    }

    public function __destruct()
    {
        parent::__destruct();

        \$this->container->removeBindings(\$this->id);

        if (!\$this->definition instanceof ChildDefinition) {
            \$this->container->setDefinition(\$this->id, \$this->definition->setInstanceofConditionals(\$this->instanceof));
        } else {
            \$this->container->setDefinition(\$this->id, \$this->definition);
        }
    }
}
", "@app/vendor/symfony/dependency-injection/Loader/Configurator/ServiceConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Loader\\Configurator\\ServiceConfigurator.php");
    }
}
