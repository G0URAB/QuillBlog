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

/* @app/vendor/symfony/framework-bundle/Controller/ControllerResolver.php */
class __TwigTemplate_a5554c94a35db2f7bad6e3d71830ad4ca68a7f911ec1c2bf822c9d635c54e675 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Controller/ControllerResolver.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Controller;

use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ContainerControllerResolver;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class ControllerResolver extends ContainerControllerResolver
{
    /**
     * {@inheritdoc}
     */
    protected function instantiateController(\$class): object
    {
        return \$this->configureController(parent::instantiateController(\$class), \$class);
    }

    private function configureController(\$controller, string \$class): object
    {
        if (\$controller instanceof ContainerAwareInterface) {
            \$controller->setContainer(\$this->container);
        }
        if (\$controller instanceof AbstractController) {
            if (null === \$previousContainer = \$controller->setContainer(\$this->container)) {
                throw new \\LogicException(sprintf('\"%s\" has no container set, did you forget to define it as a service subscriber?', \$class));
            } else {
                \$controller->setContainer(\$previousContainer);
            }
        }

        return \$controller;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Controller/ControllerResolver.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Controller;

use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ContainerControllerResolver;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class ControllerResolver extends ContainerControllerResolver
{
    /**
     * {@inheritdoc}
     */
    protected function instantiateController(\$class): object
    {
        return \$this->configureController(parent::instantiateController(\$class), \$class);
    }

    private function configureController(\$controller, string \$class): object
    {
        if (\$controller instanceof ContainerAwareInterface) {
            \$controller->setContainer(\$this->container);
        }
        if (\$controller instanceof AbstractController) {
            if (null === \$previousContainer = \$controller->setContainer(\$this->container)) {
                throw new \\LogicException(sprintf('\"%s\" has no container set, did you forget to define it as a service subscriber?', \$class));
            } else {
                \$controller->setContainer(\$previousContainer);
            }
        }

        return \$controller;
    }
}
", "@app/vendor/symfony/framework-bundle/Controller/ControllerResolver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Controller\\ControllerResolver.php");
    }
}
