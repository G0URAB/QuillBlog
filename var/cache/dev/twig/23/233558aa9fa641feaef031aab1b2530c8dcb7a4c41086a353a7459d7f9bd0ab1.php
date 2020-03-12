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

/* @app/vendor/twig/twig/src/Sandbox/SecurityNotAllowedMethodError.php */
class __TwigTemplate_9d3709476b40df0533e2a46e48b521a8274099a786981563f6e409c7b6a36691 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Sandbox/SecurityNotAllowedMethodError.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Sandbox;

/**
 * Exception thrown when a not allowed class method is used in a template.
 *
 * @author Kit Burton-Senior <mail@kitbs.com>
 */
final class SecurityNotAllowedMethodError extends SecurityError
{
    private \$className;
    private \$methodName;

    public function __construct(string \$message, string \$className, string \$methodName)
    {
        parent::__construct(\$message);
        \$this->className = \$className;
        \$this->methodName = \$methodName;
    }

    public function getClassName(): string
    {
        return \$this->className;
    }

    public function getMethodName()
    {
        return \$this->methodName;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Sandbox/SecurityNotAllowedMethodError.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Sandbox;

/**
 * Exception thrown when a not allowed class method is used in a template.
 *
 * @author Kit Burton-Senior <mail@kitbs.com>
 */
final class SecurityNotAllowedMethodError extends SecurityError
{
    private \$className;
    private \$methodName;

    public function __construct(string \$message, string \$className, string \$methodName)
    {
        parent::__construct(\$message);
        \$this->className = \$className;
        \$this->methodName = \$methodName;
    }

    public function getClassName(): string
    {
        return \$this->className;
    }

    public function getMethodName()
    {
        return \$this->methodName;
    }
}
", "@app/vendor/twig/twig/src/Sandbox/SecurityNotAllowedMethodError.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Sandbox\\SecurityNotAllowedMethodError.php");
    }
}
