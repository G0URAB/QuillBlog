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

/* @app/vendor/symfony/dependency-injection/Loader/Configurator/DefaultsConfigurator.php */
class __TwigTemplate_9fd820bd5aa6a9738d4fd24c87f20872f26ba7e2f528537556742dbdba725166 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Loader/Configurator/DefaultsConfigurator.php"));

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
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DefaultsConfigurator extends AbstractServiceConfigurator
{
    const FACTORY = 'defaults';

    use Traits\\AutoconfigureTrait;
    use Traits\\AutowireTrait;
    use Traits\\BindTrait;
    use Traits\\PublicTrait;

    private \$path;

    public function __construct(ServicesConfigurator \$parent, Definition \$definition, string \$path = null)
    {
        parent::__construct(\$parent, \$definition, null, []);

        \$this->path = \$path;
    }

    /**
     * Adds a tag for this definition.
     *
     * @return \$this
     *
     * @throws InvalidArgumentException when an invalid tag name or attribute is provided
     */
    final public function tag(string \$name, array \$attributes = []): self
    {
        if ('' === \$name) {
            throw new InvalidArgumentException('The tag name in \"_defaults\" must be a non-empty string.');
        }

        foreach (\$attributes as \$attribute => \$value) {
            if (null !== \$value && !is_scalar(\$value)) {
                throw new InvalidArgumentException(sprintf('Tag \"%s\", attribute \"%s\" in \"_defaults\" must be of a scalar-type.', \$name, \$attribute));
            }
        }

        \$this->definition->addTag(\$name, \$attributes);

        return \$this;
    }

    /**
     * Defines an instanceof-conditional to be applied to following service definitions.
     */
    final public function instanceof(string \$fqcn): InstanceofConfigurator
    {
        return \$this->parent->instanceof(\$fqcn);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Loader/Configurator/DefaultsConfigurator.php";
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
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DefaultsConfigurator extends AbstractServiceConfigurator
{
    const FACTORY = 'defaults';

    use Traits\\AutoconfigureTrait;
    use Traits\\AutowireTrait;
    use Traits\\BindTrait;
    use Traits\\PublicTrait;

    private \$path;

    public function __construct(ServicesConfigurator \$parent, Definition \$definition, string \$path = null)
    {
        parent::__construct(\$parent, \$definition, null, []);

        \$this->path = \$path;
    }

    /**
     * Adds a tag for this definition.
     *
     * @return \$this
     *
     * @throws InvalidArgumentException when an invalid tag name or attribute is provided
     */
    final public function tag(string \$name, array \$attributes = []): self
    {
        if ('' === \$name) {
            throw new InvalidArgumentException('The tag name in \"_defaults\" must be a non-empty string.');
        }

        foreach (\$attributes as \$attribute => \$value) {
            if (null !== \$value && !is_scalar(\$value)) {
                throw new InvalidArgumentException(sprintf('Tag \"%s\", attribute \"%s\" in \"_defaults\" must be of a scalar-type.', \$name, \$attribute));
            }
        }

        \$this->definition->addTag(\$name, \$attributes);

        return \$this;
    }

    /**
     * Defines an instanceof-conditional to be applied to following service definitions.
     */
    final public function instanceof(string \$fqcn): InstanceofConfigurator
    {
        return \$this->parent->instanceof(\$fqcn);
    }
}
", "@app/vendor/symfony/dependency-injection/Loader/Configurator/DefaultsConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Loader\\Configurator\\DefaultsConfigurator.php");
    }
}
