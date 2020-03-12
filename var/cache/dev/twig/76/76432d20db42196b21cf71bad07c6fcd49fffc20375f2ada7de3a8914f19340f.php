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

/* @app/vendor/symfony/service-contracts/ResetInterface.php */
class __TwigTemplate_2cb564e1be188c6546d0eb3312e257410a44df7575f2de438a07b2c220abc0de extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/service-contracts/ResetInterface.php"));

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

namespace Symfony\\Contracts\\Service;

/**
 * Provides a way to reset an object to its initial state.
 *
 * When calling the \"reset()\" method on an object, it should be put back to its
 * initial state. This usually means clearing any internal buffers and forwarding
 * the call to internal dependencies. All properties of the object should be put
 * back to the same state it had when it was first ready to use.
 *
 * This method could be called, for example, to recycle objects that are used as
 * services, so that they can be used to handle several requests in the same
 * process loop (note that we advise making your services stateless instead of
 * implementing this interface when possible.)
 */
interface ResetInterface
{
    public function reset();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/service-contracts/ResetInterface.php";
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

namespace Symfony\\Contracts\\Service;

/**
 * Provides a way to reset an object to its initial state.
 *
 * When calling the \"reset()\" method on an object, it should be put back to its
 * initial state. This usually means clearing any internal buffers and forwarding
 * the call to internal dependencies. All properties of the object should be put
 * back to the same state it had when it was first ready to use.
 *
 * This method could be called, for example, to recycle objects that are used as
 * services, so that they can be used to handle several requests in the same
 * process loop (note that we advise making your services stateless instead of
 * implementing this interface when possible.)
 */
interface ResetInterface
{
    public function reset();
}
", "@app/vendor/symfony/service-contracts/ResetInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\service-contracts\\ResetInterface.php");
    }
}
