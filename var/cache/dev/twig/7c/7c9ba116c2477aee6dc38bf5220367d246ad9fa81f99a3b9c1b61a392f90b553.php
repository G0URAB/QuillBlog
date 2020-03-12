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

/* @app/vendor/twig/twig/src/Sandbox/SecurityPolicy.php */
class __TwigTemplate_572d0d9ee03a0b33ef7b39721c561864cc333e7970b9ba0f9b71ff3ee1658a96 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Sandbox/SecurityPolicy.php"));

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

use Twig\\Markup;
use Twig\\Template;

/**
 * Represents a security policy which need to be enforced when sandbox mode is enabled.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class SecurityPolicy implements SecurityPolicyInterface
{
    private \$allowedTags;
    private \$allowedFilters;
    private \$allowedMethods;
    private \$allowedProperties;
    private \$allowedFunctions;

    public function __construct(array \$allowedTags = [], array \$allowedFilters = [], array \$allowedMethods = [], array \$allowedProperties = [], array \$allowedFunctions = [])
    {
        \$this->allowedTags = \$allowedTags;
        \$this->allowedFilters = \$allowedFilters;
        \$this->setAllowedMethods(\$allowedMethods);
        \$this->allowedProperties = \$allowedProperties;
        \$this->allowedFunctions = \$allowedFunctions;
    }

    public function setAllowedTags(array \$tags): void
    {
        \$this->allowedTags = \$tags;
    }

    public function setAllowedFilters(array \$filters): void
    {
        \$this->allowedFilters = \$filters;
    }

    public function setAllowedMethods(array \$methods): void
    {
        \$this->allowedMethods = [];
        foreach (\$methods as \$class => \$m) {
            \$this->allowedMethods[\$class] = array_map(function (\$value) { return strtr(\$value, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz'); }, \\is_array(\$m) ? \$m : [\$m]);
        }
    }

    public function setAllowedProperties(array \$properties): void
    {
        \$this->allowedProperties = \$properties;
    }

    public function setAllowedFunctions(array \$functions): void
    {
        \$this->allowedFunctions = \$functions;
    }

    public function checkSecurity(\$tags, \$filters, \$functions): void
    {
        foreach (\$tags as \$tag) {
            if (!\\in_array(\$tag, \$this->allowedTags)) {
                throw new SecurityNotAllowedTagError(sprintf('Tag \"%s\" is not allowed.', \$tag), \$tag);
            }
        }

        foreach (\$filters as \$filter) {
            if (!\\in_array(\$filter, \$this->allowedFilters)) {
                throw new SecurityNotAllowedFilterError(sprintf('Filter \"%s\" is not allowed.', \$filter), \$filter);
            }
        }

        foreach (\$functions as \$function) {
            if (!\\in_array(\$function, \$this->allowedFunctions)) {
                throw new SecurityNotAllowedFunctionError(sprintf('Function \"%s\" is not allowed.', \$function), \$function);
            }
        }
    }

    public function checkMethodAllowed(\$obj, \$method): void
    {
        if (\$obj instanceof Template || \$obj instanceof Markup) {
            return;
        }

        \$allowed = false;
        \$method = strtr(\$method, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz');
        foreach (\$this->allowedMethods as \$class => \$methods) {
            if (\$obj instanceof \$class) {
                \$allowed = \\in_array(\$method, \$methods);

                break;
            }
        }

        if (!\$allowed) {
            \$class = \\get_class(\$obj);
            throw new SecurityNotAllowedMethodError(sprintf('Calling \"%s\" method on a \"%s\" object is not allowed.', \$method, \$class), \$class, \$method);
        }
    }

    public function checkPropertyAllowed(\$obj, \$property): void
    {
        \$allowed = false;
        foreach (\$this->allowedProperties as \$class => \$properties) {
            if (\$obj instanceof \$class) {
                \$allowed = \\in_array(\$property, \\is_array(\$properties) ? \$properties : [\$properties]);

                break;
            }
        }

        if (!\$allowed) {
            \$class = \\get_class(\$obj);
            throw new SecurityNotAllowedPropertyError(sprintf('Calling \"%s\" property on a \"%s\" object is not allowed.', \$property, \$class), \$class, \$property);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Sandbox/SecurityPolicy.php";
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

use Twig\\Markup;
use Twig\\Template;

/**
 * Represents a security policy which need to be enforced when sandbox mode is enabled.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class SecurityPolicy implements SecurityPolicyInterface
{
    private \$allowedTags;
    private \$allowedFilters;
    private \$allowedMethods;
    private \$allowedProperties;
    private \$allowedFunctions;

    public function __construct(array \$allowedTags = [], array \$allowedFilters = [], array \$allowedMethods = [], array \$allowedProperties = [], array \$allowedFunctions = [])
    {
        \$this->allowedTags = \$allowedTags;
        \$this->allowedFilters = \$allowedFilters;
        \$this->setAllowedMethods(\$allowedMethods);
        \$this->allowedProperties = \$allowedProperties;
        \$this->allowedFunctions = \$allowedFunctions;
    }

    public function setAllowedTags(array \$tags): void
    {
        \$this->allowedTags = \$tags;
    }

    public function setAllowedFilters(array \$filters): void
    {
        \$this->allowedFilters = \$filters;
    }

    public function setAllowedMethods(array \$methods): void
    {
        \$this->allowedMethods = [];
        foreach (\$methods as \$class => \$m) {
            \$this->allowedMethods[\$class] = array_map(function (\$value) { return strtr(\$value, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz'); }, \\is_array(\$m) ? \$m : [\$m]);
        }
    }

    public function setAllowedProperties(array \$properties): void
    {
        \$this->allowedProperties = \$properties;
    }

    public function setAllowedFunctions(array \$functions): void
    {
        \$this->allowedFunctions = \$functions;
    }

    public function checkSecurity(\$tags, \$filters, \$functions): void
    {
        foreach (\$tags as \$tag) {
            if (!\\in_array(\$tag, \$this->allowedTags)) {
                throw new SecurityNotAllowedTagError(sprintf('Tag \"%s\" is not allowed.', \$tag), \$tag);
            }
        }

        foreach (\$filters as \$filter) {
            if (!\\in_array(\$filter, \$this->allowedFilters)) {
                throw new SecurityNotAllowedFilterError(sprintf('Filter \"%s\" is not allowed.', \$filter), \$filter);
            }
        }

        foreach (\$functions as \$function) {
            if (!\\in_array(\$function, \$this->allowedFunctions)) {
                throw new SecurityNotAllowedFunctionError(sprintf('Function \"%s\" is not allowed.', \$function), \$function);
            }
        }
    }

    public function checkMethodAllowed(\$obj, \$method): void
    {
        if (\$obj instanceof Template || \$obj instanceof Markup) {
            return;
        }

        \$allowed = false;
        \$method = strtr(\$method, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz');
        foreach (\$this->allowedMethods as \$class => \$methods) {
            if (\$obj instanceof \$class) {
                \$allowed = \\in_array(\$method, \$methods);

                break;
            }
        }

        if (!\$allowed) {
            \$class = \\get_class(\$obj);
            throw new SecurityNotAllowedMethodError(sprintf('Calling \"%s\" method on a \"%s\" object is not allowed.', \$method, \$class), \$class, \$method);
        }
    }

    public function checkPropertyAllowed(\$obj, \$property): void
    {
        \$allowed = false;
        foreach (\$this->allowedProperties as \$class => \$properties) {
            if (\$obj instanceof \$class) {
                \$allowed = \\in_array(\$property, \\is_array(\$properties) ? \$properties : [\$properties]);

                break;
            }
        }

        if (!\$allowed) {
            \$class = \\get_class(\$obj);
            throw new SecurityNotAllowedPropertyError(sprintf('Calling \"%s\" property on a \"%s\" object is not allowed.', \$property, \$class), \$class, \$property);
        }
    }
}
", "@app/vendor/twig/twig/src/Sandbox/SecurityPolicy.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Sandbox\\SecurityPolicy.php");
    }
}
