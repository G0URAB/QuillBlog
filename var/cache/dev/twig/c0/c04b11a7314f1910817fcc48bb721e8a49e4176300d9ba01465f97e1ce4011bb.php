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

/* @app/vendor/twig/twig/src/Sandbox/SecurityNotAllowedPropertyError.php */
class __TwigTemplate_2aed20c514c831ebd2b8d7667dcf7b9b775ada615d0d120599026e49970023ae extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Sandbox/SecurityNotAllowedPropertyError.php"));

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
 * Exception thrown when a not allowed class property is used in a template.
 *
 * @author Kit Burton-Senior <mail@kitbs.com>
 */
final class SecurityNotAllowedPropertyError extends SecurityError
{
    private \$className;
    private \$propertyName;

    public function __construct(string \$message, string \$className, string \$propertyName)
    {
        parent::__construct(\$message);
        \$this->className = \$className;
        \$this->propertyName = \$propertyName;
    }

    public function getClassName(): string
    {
        return \$this->className;
    }

    public function getPropertyName()
    {
        return \$this->propertyName;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Sandbox/SecurityNotAllowedPropertyError.php";
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
 * Exception thrown when a not allowed class property is used in a template.
 *
 * @author Kit Burton-Senior <mail@kitbs.com>
 */
final class SecurityNotAllowedPropertyError extends SecurityError
{
    private \$className;
    private \$propertyName;

    public function __construct(string \$message, string \$className, string \$propertyName)
    {
        parent::__construct(\$message);
        \$this->className = \$className;
        \$this->propertyName = \$propertyName;
    }

    public function getClassName(): string
    {
        return \$this->className;
    }

    public function getPropertyName()
    {
        return \$this->propertyName;
    }
}
", "@app/vendor/twig/twig/src/Sandbox/SecurityNotAllowedPropertyError.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Sandbox\\SecurityNotAllowedPropertyError.php");
    }
}
