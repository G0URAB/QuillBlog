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

/* @app/vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/UnexpectedValueException.php */
class __TwigTemplate_c0d63a7ff60dd656ef67a9c3989dcd2384ccc556410557a4ae3edc0ea59b34ab extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/UnexpectedValueException.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common\\Proxy\\Exception;

use UnexpectedValueException as BaseUnexpectedValueException;

/**
 * Proxy Unexpected Value Exception.
 *
 * @link   www.doctrine-project.org
 * @since  2.4
 * @author Marco Pivetta <ocramius@gmail.com>
 *
 * @deprecated The Doctrine\\Common\\Proxy component is deprecated, please use ocramius/proxy-manager instead.
 */
class UnexpectedValueException extends BaseUnexpectedValueException implements ProxyException
{
    /**
     * @param string \$proxyDirectory
     *
     * @return self
     */
    public static function proxyDirectoryNotWritable(\$proxyDirectory)
    {
        return new self(sprintf('Your proxy directory \"%s\" must be writable', \$proxyDirectory));
    }

    /**
     * @param string          \$className
     * @param string          \$methodName
     * @param string          \$parameterName
     * @param \\Exception|null \$previous
     *
     * @return self
     */
    public static function invalidParameterTypeHint(
        \$className,
        \$methodName,
        \$parameterName,
        \\Exception \$previous = null
    ) {
        return new self(
            sprintf(
                'The type hint of parameter \"%s\" in method \"%s\" in class \"%s\" is invalid.',
                \$parameterName,
                \$methodName,
                \$className
            ),
            0,
            \$previous
        );
    }

    /**
     * @param string \$className
     * @param string \$methodName
     * @param \\Exception|null \$previous
     *
     * @return self
     */
    public static function invalidReturnTypeHint(\$className, \$methodName, \\Exception \$previous = null)
    {
        return new self(
            sprintf(
                'The return type of method \"%s\" in class \"%s\" is invalid.',
                \$methodName,
                \$className
            ),
            0,
            \$previous
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/UnexpectedValueException.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common\\Proxy\\Exception;

use UnexpectedValueException as BaseUnexpectedValueException;

/**
 * Proxy Unexpected Value Exception.
 *
 * @link   www.doctrine-project.org
 * @since  2.4
 * @author Marco Pivetta <ocramius@gmail.com>
 *
 * @deprecated The Doctrine\\Common\\Proxy component is deprecated, please use ocramius/proxy-manager instead.
 */
class UnexpectedValueException extends BaseUnexpectedValueException implements ProxyException
{
    /**
     * @param string \$proxyDirectory
     *
     * @return self
     */
    public static function proxyDirectoryNotWritable(\$proxyDirectory)
    {
        return new self(sprintf('Your proxy directory \"%s\" must be writable', \$proxyDirectory));
    }

    /**
     * @param string          \$className
     * @param string          \$methodName
     * @param string          \$parameterName
     * @param \\Exception|null \$previous
     *
     * @return self
     */
    public static function invalidParameterTypeHint(
        \$className,
        \$methodName,
        \$parameterName,
        \\Exception \$previous = null
    ) {
        return new self(
            sprintf(
                'The type hint of parameter \"%s\" in method \"%s\" in class \"%s\" is invalid.',
                \$parameterName,
                \$methodName,
                \$className
            ),
            0,
            \$previous
        );
    }

    /**
     * @param string \$className
     * @param string \$methodName
     * @param \\Exception|null \$previous
     *
     * @return self
     */
    public static function invalidReturnTypeHint(\$className, \$methodName, \\Exception \$previous = null)
    {
        return new self(
            sprintf(
                'The return type of method \"%s\" in class \"%s\" is invalid.',
                \$methodName,
                \$className
            ),
            0,
            \$previous
        );
    }
}
", "@app/vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/UnexpectedValueException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Proxy\\Exception\\UnexpectedValueException.php");
    }
}
