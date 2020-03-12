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

/* @app/vendor/symfony/dependency-injection/Loader/Configurator/ReferenceConfigurator.php */
class __TwigTemplate_390cc3305667a93a3f79776e52473bff417b84de3d9be69e836e5b1b3e390113 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Loader/Configurator/ReferenceConfigurator.php"));

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

use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ReferenceConfigurator extends AbstractConfigurator
{
    /** @internal */
    protected \$id;

    /** @internal */
    protected \$invalidBehavior = ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE;

    public function __construct(string \$id)
    {
        \$this->id = \$id;
    }

    /**
     * @return \$this
     */
    final public function ignoreOnInvalid(): self
    {
        \$this->invalidBehavior = ContainerInterface::IGNORE_ON_INVALID_REFERENCE;

        return \$this;
    }

    /**
     * @return \$this
     */
    final public function nullOnInvalid(): self
    {
        \$this->invalidBehavior = ContainerInterface::NULL_ON_INVALID_REFERENCE;

        return \$this;
    }

    /**
     * @return \$this
     */
    final public function ignoreOnUninitialized(): self
    {
        \$this->invalidBehavior = ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE;

        return \$this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return \$this->id;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Loader/Configurator/ReferenceConfigurator.php";
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

use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ReferenceConfigurator extends AbstractConfigurator
{
    /** @internal */
    protected \$id;

    /** @internal */
    protected \$invalidBehavior = ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE;

    public function __construct(string \$id)
    {
        \$this->id = \$id;
    }

    /**
     * @return \$this
     */
    final public function ignoreOnInvalid(): self
    {
        \$this->invalidBehavior = ContainerInterface::IGNORE_ON_INVALID_REFERENCE;

        return \$this;
    }

    /**
     * @return \$this
     */
    final public function nullOnInvalid(): self
    {
        \$this->invalidBehavior = ContainerInterface::NULL_ON_INVALID_REFERENCE;

        return \$this;
    }

    /**
     * @return \$this
     */
    final public function ignoreOnUninitialized(): self
    {
        \$this->invalidBehavior = ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE;

        return \$this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return \$this->id;
    }
}
", "@app/vendor/symfony/dependency-injection/Loader/Configurator/ReferenceConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Loader\\Configurator\\ReferenceConfigurator.php");
    }
}
