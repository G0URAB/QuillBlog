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

/* @app/vendor/symfony/http-kernel/Event/ControllerArgumentsEvent.php */
class __TwigTemplate_90a7432f9363eac41ebd58799202e9e0b4a315e61eea8352f4b75a6bbb0bcb93 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/Event/ControllerArgumentsEvent.php"));

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

namespace Symfony\\Component\\HttpKernel\\Event;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

/**
 * Allows filtering of controller arguments.
 *
 * You can call getController() to retrieve the controller and getArguments
 * to retrieve the current arguments. With setArguments() you can replace
 * arguments that are used to call the controller.
 *
 * Arguments set in the event must be compatible with the signature of the
 * controller.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
final class ControllerArgumentsEvent extends KernelEvent
{
    private \$controller;
    private \$arguments;

    public function __construct(HttpKernelInterface \$kernel, callable \$controller, array \$arguments, Request \$request, ?int \$requestType)
    {
        parent::__construct(\$kernel, \$request, \$requestType);

        \$this->controller = \$controller;
        \$this->arguments = \$arguments;
    }

    public function getController(): callable
    {
        return \$this->controller;
    }

    public function setController(callable \$controller)
    {
        \$this->controller = \$controller;
    }

    public function getArguments(): array
    {
        return \$this->arguments;
    }

    public function setArguments(array \$arguments)
    {
        \$this->arguments = \$arguments;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/Event/ControllerArgumentsEvent.php";
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

namespace Symfony\\Component\\HttpKernel\\Event;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

/**
 * Allows filtering of controller arguments.
 *
 * You can call getController() to retrieve the controller and getArguments
 * to retrieve the current arguments. With setArguments() you can replace
 * arguments that are used to call the controller.
 *
 * Arguments set in the event must be compatible with the signature of the
 * controller.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
final class ControllerArgumentsEvent extends KernelEvent
{
    private \$controller;
    private \$arguments;

    public function __construct(HttpKernelInterface \$kernel, callable \$controller, array \$arguments, Request \$request, ?int \$requestType)
    {
        parent::__construct(\$kernel, \$request, \$requestType);

        \$this->controller = \$controller;
        \$this->arguments = \$arguments;
    }

    public function getController(): callable
    {
        return \$this->controller;
    }

    public function setController(callable \$controller)
    {
        \$this->controller = \$controller;
    }

    public function getArguments(): array
    {
        return \$this->arguments;
    }

    public function setArguments(array \$arguments)
    {
        \$this->arguments = \$arguments;
    }
}
", "@app/vendor/symfony/http-kernel/Event/ControllerArgumentsEvent.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Event\\ControllerArgumentsEvent.php");
    }
}
