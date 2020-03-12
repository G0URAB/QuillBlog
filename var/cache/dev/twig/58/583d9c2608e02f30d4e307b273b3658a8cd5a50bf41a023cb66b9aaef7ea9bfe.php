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

/* @app/vendor/symfony/dependency-injection/Config/ContainerParametersResource.php */
class __TwigTemplate_31c5e3504ae135d7d936dd3a0bd502fb2c1da165cd0cf0225abbb5ead1891b02 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Config/ContainerParametersResource.php"));

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

/**
 * Tracks container parameters.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final
 */
class ContainerParametersResource implements ResourceInterface
{
    private \$parameters;

    /**
     * @param array \$parameters The container parameters to track
     */
    public function __construct(array \$parameters)
    {
        \$this->parameters = \$parameters;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return 'container_parameters_'.md5(serialize(\$this->parameters));
    }

    /**
     * @return array Tracked parameters
     */
    public function getParameters(): array
    {
        return \$this->parameters;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Config/ContainerParametersResource.php";
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

/**
 * Tracks container parameters.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final
 */
class ContainerParametersResource implements ResourceInterface
{
    private \$parameters;

    /**
     * @param array \$parameters The container parameters to track
     */
    public function __construct(array \$parameters)
    {
        \$this->parameters = \$parameters;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return 'container_parameters_'.md5(serialize(\$this->parameters));
    }

    /**
     * @return array Tracked parameters
     */
    public function getParameters(): array
    {
        return \$this->parameters;
    }
}
", "@app/vendor/symfony/dependency-injection/Config/ContainerParametersResource.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Config\\ContainerParametersResource.php");
    }
}
