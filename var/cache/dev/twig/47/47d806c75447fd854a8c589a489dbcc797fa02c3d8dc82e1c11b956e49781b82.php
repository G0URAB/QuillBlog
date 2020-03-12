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

/* @app/vendor/symfony/config/Exception/LoaderLoadException.php */
class __TwigTemplate_9a45dd73bc8cfa8820a4e78ea4526ce51f84fbc2b59cc3e2174b3968a5717f4c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Exception/LoaderLoadException.php"));

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

namespace Symfony\\Component\\Config\\Exception;

/**
 * Exception class for when a resource cannot be loaded or imported.
 *
 * @author Ryan Weaver <ryan@thatsquality.com>
 */
class LoaderLoadException extends \\Exception
{
    /**
     * @param string     \$resource       The resource that could not be imported
     * @param string     \$sourceResource The original resource importing the new resource
     * @param int        \$code           The error code
     * @param \\Throwable \$previous       A previous exception
     * @param string     \$type           The type of resource
     */
    public function __construct(string \$resource, string \$sourceResource = null, int \$code = null, \\Throwable \$previous = null, string \$type = null)
    {
        \$message = '';
        if (\$previous) {
            // Include the previous exception, to help the user see what might be the underlying cause

            // Trim the trailing period of the previous message. We only want 1 period remove so no rtrim...
            if ('.' === substr(\$previous->getMessage(), -1)) {
                \$trimmedMessage = substr(\$previous->getMessage(), 0, -1);
                \$message .= sprintf('%s', \$trimmedMessage).' in ';
            } else {
                \$message .= sprintf('%s', \$previous->getMessage()).' in ';
            }
            \$message .= \$resource.' ';

            // show tweaked trace to complete the human readable sentence
            if (null === \$sourceResource) {
                \$message .= sprintf('(which is loaded in resource \"%s\")', \$resource);
            } else {
                \$message .= sprintf('(which is being imported from \"%s\")', \$sourceResource);
            }
            \$message .= '.';

        // if there's no previous message, present it the default way
        } elseif (null === \$sourceResource) {
            \$message .= sprintf('Cannot load resource \"%s\".', \$resource);
        } else {
            \$message .= sprintf('Cannot import resource \"%s\" from \"%s\".', \$resource, \$sourceResource);
        }

        // Is the resource located inside a bundle?
        if ('@' === \$resource[0]) {
            \$parts = explode(\\DIRECTORY_SEPARATOR, \$resource);
            \$bundle = substr(\$parts[0], 1);
            \$message .= sprintf(' Make sure the \"%s\" bundle is correctly registered and loaded in the application kernel class.', \$bundle);
            \$message .= sprintf(' If the bundle is registered, make sure the bundle path \"%s\" is not empty.', \$resource);
        } elseif (null !== \$type) {
            // maybe there is no loader for this specific type
            if ('annotation' === \$type) {
                \$message .= ' Make sure annotations are installed and enabled.';
            } else {
                \$message .= sprintf(' Make sure there is a loader supporting the \"%s\" type.', \$type);
            }
        }

        parent::__construct(\$message, \$code, \$previous);
    }

    protected function varToString(\$var)
    {
        if (\\is_object(\$var)) {
            return sprintf('Object(%s)', \\get_class(\$var));
        }

        if (\\is_array(\$var)) {
            \$a = [];
            foreach (\$var as \$k => \$v) {
                \$a[] = sprintf('%s => %s', \$k, \$this->varToString(\$v));
            }

            return sprintf('Array(%s)', implode(', ', \$a));
        }

        if (\\is_resource(\$var)) {
            return sprintf('Resource(%s)', get_resource_type(\$var));
        }

        if (null === \$var) {
            return 'null';
        }

        if (false === \$var) {
            return 'false';
        }

        if (true === \$var) {
            return 'true';
        }

        return (string) \$var;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Exception/LoaderLoadException.php";
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

namespace Symfony\\Component\\Config\\Exception;

/**
 * Exception class for when a resource cannot be loaded or imported.
 *
 * @author Ryan Weaver <ryan@thatsquality.com>
 */
class LoaderLoadException extends \\Exception
{
    /**
     * @param string     \$resource       The resource that could not be imported
     * @param string     \$sourceResource The original resource importing the new resource
     * @param int        \$code           The error code
     * @param \\Throwable \$previous       A previous exception
     * @param string     \$type           The type of resource
     */
    public function __construct(string \$resource, string \$sourceResource = null, int \$code = null, \\Throwable \$previous = null, string \$type = null)
    {
        \$message = '';
        if (\$previous) {
            // Include the previous exception, to help the user see what might be the underlying cause

            // Trim the trailing period of the previous message. We only want 1 period remove so no rtrim...
            if ('.' === substr(\$previous->getMessage(), -1)) {
                \$trimmedMessage = substr(\$previous->getMessage(), 0, -1);
                \$message .= sprintf('%s', \$trimmedMessage).' in ';
            } else {
                \$message .= sprintf('%s', \$previous->getMessage()).' in ';
            }
            \$message .= \$resource.' ';

            // show tweaked trace to complete the human readable sentence
            if (null === \$sourceResource) {
                \$message .= sprintf('(which is loaded in resource \"%s\")', \$resource);
            } else {
                \$message .= sprintf('(which is being imported from \"%s\")', \$sourceResource);
            }
            \$message .= '.';

        // if there's no previous message, present it the default way
        } elseif (null === \$sourceResource) {
            \$message .= sprintf('Cannot load resource \"%s\".', \$resource);
        } else {
            \$message .= sprintf('Cannot import resource \"%s\" from \"%s\".', \$resource, \$sourceResource);
        }

        // Is the resource located inside a bundle?
        if ('@' === \$resource[0]) {
            \$parts = explode(\\DIRECTORY_SEPARATOR, \$resource);
            \$bundle = substr(\$parts[0], 1);
            \$message .= sprintf(' Make sure the \"%s\" bundle is correctly registered and loaded in the application kernel class.', \$bundle);
            \$message .= sprintf(' If the bundle is registered, make sure the bundle path \"%s\" is not empty.', \$resource);
        } elseif (null !== \$type) {
            // maybe there is no loader for this specific type
            if ('annotation' === \$type) {
                \$message .= ' Make sure annotations are installed and enabled.';
            } else {
                \$message .= sprintf(' Make sure there is a loader supporting the \"%s\" type.', \$type);
            }
        }

        parent::__construct(\$message, \$code, \$previous);
    }

    protected function varToString(\$var)
    {
        if (\\is_object(\$var)) {
            return sprintf('Object(%s)', \\get_class(\$var));
        }

        if (\\is_array(\$var)) {
            \$a = [];
            foreach (\$var as \$k => \$v) {
                \$a[] = sprintf('%s => %s', \$k, \$this->varToString(\$v));
            }

            return sprintf('Array(%s)', implode(', ', \$a));
        }

        if (\\is_resource(\$var)) {
            return sprintf('Resource(%s)', get_resource_type(\$var));
        }

        if (null === \$var) {
            return 'null';
        }

        if (false === \$var) {
            return 'false';
        }

        if (true === \$var) {
            return 'true';
        }

        return (string) \$var;
    }
}
", "@app/vendor/symfony/config/Exception/LoaderLoadException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Exception\\LoaderLoadException.php");
    }
}
