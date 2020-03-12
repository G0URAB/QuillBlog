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

/* @app/vendor/symfony/dependency-injection/Argument/ServiceLocator.php */
class __TwigTemplate_821d0bde65a2506f213be9452c1cbe842fd4dadeb29487c6172c478a328d9688 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Argument/ServiceLocator.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Argument;

use Symfony\\Component\\DependencyInjection\\ServiceLocator as BaseServiceLocator;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class ServiceLocator extends BaseServiceLocator
{
    private \$factory;
    private \$serviceMap;
    private \$serviceTypes;

    public function __construct(\\Closure \$factory, array \$serviceMap, array \$serviceTypes = null)
    {
        \$this->factory = \$factory;
        \$this->serviceMap = \$serviceMap;
        \$this->serviceTypes = \$serviceTypes;
        parent::__construct(\$serviceMap);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$id)
    {
        return isset(\$this->serviceMap[\$id]) ? (\$this->factory)(...\$this->serviceMap[\$id]) : parent::get(\$id);
    }

    /**
     * {@inheritdoc}
     */
    public function getProvidedServices(): array
    {
        return \$this->serviceTypes ?? \$this->serviceTypes = array_map(function () { return '?'; }, \$this->serviceMap);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Argument/ServiceLocator.php";
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

namespace Symfony\\Component\\DependencyInjection\\Argument;

use Symfony\\Component\\DependencyInjection\\ServiceLocator as BaseServiceLocator;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class ServiceLocator extends BaseServiceLocator
{
    private \$factory;
    private \$serviceMap;
    private \$serviceTypes;

    public function __construct(\\Closure \$factory, array \$serviceMap, array \$serviceTypes = null)
    {
        \$this->factory = \$factory;
        \$this->serviceMap = \$serviceMap;
        \$this->serviceTypes = \$serviceTypes;
        parent::__construct(\$serviceMap);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$id)
    {
        return isset(\$this->serviceMap[\$id]) ? (\$this->factory)(...\$this->serviceMap[\$id]) : parent::get(\$id);
    }

    /**
     * {@inheritdoc}
     */
    public function getProvidedServices(): array
    {
        return \$this->serviceTypes ?? \$this->serviceTypes = array_map(function () { return '?'; }, \$this->serviceMap);
    }
}
", "@app/vendor/symfony/dependency-injection/Argument/ServiceLocator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Argument\\ServiceLocator.php");
    }
}
