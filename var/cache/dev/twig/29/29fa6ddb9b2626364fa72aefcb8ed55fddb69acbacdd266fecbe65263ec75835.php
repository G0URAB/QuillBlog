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

/* @app/vendor/symfony/dependency-injection/Exception/ParameterCircularReferenceException.php */
class __TwigTemplate_a1738aee8d73208139647b8aed174aeb95c070d653b578e3d8796326564d8208 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Exception/ParameterCircularReferenceException.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Exception;

/**
 * This exception is thrown when a circular reference in a parameter is detected.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParameterCircularReferenceException extends RuntimeException
{
    private \$parameters;

    public function __construct(array \$parameters, \\Throwable \$previous = null)
    {
        parent::__construct(sprintf('Circular reference detected for parameter \"%s\" (\"%s\" > \"%s\").', \$parameters[0], implode('\" > \"', \$parameters), \$parameters[0]), 0, \$previous);

        \$this->parameters = \$parameters;
    }

    public function getParameters()
    {
        return \$this->parameters;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Exception/ParameterCircularReferenceException.php";
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

namespace Symfony\\Component\\DependencyInjection\\Exception;

/**
 * This exception is thrown when a circular reference in a parameter is detected.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParameterCircularReferenceException extends RuntimeException
{
    private \$parameters;

    public function __construct(array \$parameters, \\Throwable \$previous = null)
    {
        parent::__construct(sprintf('Circular reference detected for parameter \"%s\" (\"%s\" > \"%s\").', \$parameters[0], implode('\" > \"', \$parameters), \$parameters[0]), 0, \$previous);

        \$this->parameters = \$parameters;
    }

    public function getParameters()
    {
        return \$this->parameters;
    }
}
", "@app/vendor/symfony/dependency-injection/Exception/ParameterCircularReferenceException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Exception\\ParameterCircularReferenceException.php");
    }
}
