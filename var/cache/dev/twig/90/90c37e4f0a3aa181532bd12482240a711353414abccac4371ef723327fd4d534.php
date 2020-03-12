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

/* @app/vendor/symfony/dependency-injection/Config/ContainerParametersResourceChecker.php */
class __TwigTemplate_612fe2f59a73fc2348fd2191169f6d9e32228f3817b3fb55f9ef054c80c7a9e3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Config/ContainerParametersResourceChecker.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Config;

use Symfony\\Component\\Config\\Resource\\ResourceInterface;
use Symfony\\Component\\Config\\ResourceCheckerInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ContainerParametersResourceChecker implements ResourceCheckerInterface
{
    /** @var ContainerInterface */
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(ResourceInterface \$metadata)
    {
        return \$metadata instanceof ContainerParametersResource;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(ResourceInterface \$resource, int \$timestamp)
    {
        foreach (\$resource->getParameters() as \$key => \$value) {
            if (!\$this->container->hasParameter(\$key) || \$this->container->getParameter(\$key) !== \$value) {
                return false;
            }
        }

        return true;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Config/ContainerParametersResourceChecker.php";
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

namespace Symfony\\Component\\DependencyInjection\\Config;

use Symfony\\Component\\Config\\Resource\\ResourceInterface;
use Symfony\\Component\\Config\\ResourceCheckerInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ContainerParametersResourceChecker implements ResourceCheckerInterface
{
    /** @var ContainerInterface */
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(ResourceInterface \$metadata)
    {
        return \$metadata instanceof ContainerParametersResource;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(ResourceInterface \$resource, int \$timestamp)
    {
        foreach (\$resource->getParameters() as \$key => \$value) {
            if (!\$this->container->hasParameter(\$key) || \$this->container->getParameter(\$key) !== \$value) {
                return false;
            }
        }

        return true;
    }
}
", "@app/vendor/symfony/dependency-injection/Config/ContainerParametersResourceChecker.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Config\\ContainerParametersResourceChecker.php");
    }
}
