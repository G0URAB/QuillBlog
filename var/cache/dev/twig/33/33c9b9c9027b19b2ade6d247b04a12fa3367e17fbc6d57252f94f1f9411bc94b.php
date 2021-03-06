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

/* @app/vendor/symfony/dependency-injection/Loader/Configurator/InstanceofConfigurator.php */
class __TwigTemplate_3aeb646eb115ca64937013a202688a95baee419c3114443f5395411a32e80989 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Loader/Configurator/InstanceofConfigurator.php"));

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

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class InstanceofConfigurator extends AbstractServiceConfigurator
{
    const FACTORY = 'instanceof';

    use Traits\\AutowireTrait;
    use Traits\\CallTrait;
    use Traits\\ConfiguratorTrait;
    use Traits\\LazyTrait;
    use Traits\\PropertyTrait;
    use Traits\\PublicTrait;
    use Traits\\ShareTrait;
    use Traits\\TagTrait;
    use Traits\\BindTrait;

    private \$path;

    public function __construct(ServicesConfigurator \$parent, Definition \$definition, string \$id, string \$path = null)
    {
        parent::__construct(\$parent, \$definition, \$id, []);

        \$this->path = \$path;
    }

    /**
     * Defines an instanceof-conditional to be applied to following service definitions.
     */
    final public function instanceof(string \$fqcn): self
    {
        return \$this->parent->instanceof(\$fqcn);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Loader/Configurator/InstanceofConfigurator.php";
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

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class InstanceofConfigurator extends AbstractServiceConfigurator
{
    const FACTORY = 'instanceof';

    use Traits\\AutowireTrait;
    use Traits\\CallTrait;
    use Traits\\ConfiguratorTrait;
    use Traits\\LazyTrait;
    use Traits\\PropertyTrait;
    use Traits\\PublicTrait;
    use Traits\\ShareTrait;
    use Traits\\TagTrait;
    use Traits\\BindTrait;

    private \$path;

    public function __construct(ServicesConfigurator \$parent, Definition \$definition, string \$id, string \$path = null)
    {
        parent::__construct(\$parent, \$definition, \$id, []);

        \$this->path = \$path;
    }

    /**
     * Defines an instanceof-conditional to be applied to following service definitions.
     */
    final public function instanceof(string \$fqcn): self
    {
        return \$this->parent->instanceof(\$fqcn);
    }
}
", "@app/vendor/symfony/dependency-injection/Loader/Configurator/InstanceofConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Loader\\Configurator\\InstanceofConfigurator.php");
    }
}
