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

/* @app/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php */
class __TwigTemplate_f3aaa380af42a6f6ffae5efac160355193ee19b4a9c7307f8cf6444e967cfdeb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php"));

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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Resets provided services.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class ServicesResetter implements ResetInterface
{
    private \$resettableServices;
    private \$resetMethods;

    public function __construct(\\Traversable \$resettableServices, array \$resetMethods)
    {
        \$this->resettableServices = \$resettableServices;
        \$this->resetMethods = \$resetMethods;
    }

    public function reset()
    {
        foreach (\$this->resettableServices as \$id => \$service) {
            foreach ((array) \$this->resetMethods[\$id] as \$resetMethod) {
                \$service->\$resetMethod();
            }
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php";
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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Resets provided services.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class ServicesResetter implements ResetInterface
{
    private \$resettableServices;
    private \$resetMethods;

    public function __construct(\\Traversable \$resettableServices, array \$resetMethods)
    {
        \$this->resettableServices = \$resettableServices;
        \$this->resetMethods = \$resetMethods;
    }

    public function reset()
    {
        foreach (\$this->resettableServices as \$id => \$service) {
            foreach ((array) \$this->resetMethods[\$id] as \$resetMethod) {
                \$service->\$resetMethod();
            }
        }
    }
}
", "@app/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\DependencyInjection\\ServicesResetter.php");
    }
}
