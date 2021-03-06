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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/ConversionException.php */
class __TwigTemplate_360647147ca3cc71944515791372e8b74ed225bfdac5b7ad48ffa533357fd532 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/ConversionException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Types;

use Doctrine\\DBAL\\DBALException;
use Throwable;
use function get_class;
use function gettype;
use function implode;
use function is_object;
use function is_scalar;
use function sprintf;
use function strlen;
use function substr;

/**
 * Conversion Exception is thrown when the database to PHP conversion fails.
 */
class ConversionException extends DBALException
{
    /**
     * Thrown when a Database to Doctrine Type Conversion fails.
     *
     * @param string \$value
     * @param string \$toType
     *
     * @return \\Doctrine\\DBAL\\Types\\ConversionException
     */
    public static function conversionFailed(\$value, \$toType)
    {
        \$value = strlen(\$value) > 32 ? substr(\$value, 0, 20) . '...' : \$value;

        return new self('Could not convert database value \"' . \$value . '\" to Doctrine Type ' . \$toType);
    }

    /**
     * Thrown when a Database to Doctrine Type Conversion fails and we can make a statement
     * about the expected format.
     *
     * @param string \$value
     * @param string \$toType
     * @param string \$expectedFormat
     *
     * @return \\Doctrine\\DBAL\\Types\\ConversionException
     */
    public static function conversionFailedFormat(\$value, \$toType, \$expectedFormat, ?Throwable \$previous = null)
    {
        \$value = strlen(\$value) > 32 ? substr(\$value, 0, 20) . '...' : \$value;

        return new self(
            'Could not convert database value \"' . \$value . '\" to Doctrine Type ' .
            \$toType . '. Expected format: ' . \$expectedFormat,
            0,
            \$previous
        );
    }

    /**
     * Thrown when the PHP value passed to the converter was not of the expected type.
     *
     * @param mixed    \$value
     * @param string   \$toType
     * @param string[] \$possibleTypes
     *
     * @return \\Doctrine\\DBAL\\Types\\ConversionException
     */
    public static function conversionFailedInvalidType(\$value, \$toType, array \$possibleTypes)
    {
        \$actualType = is_object(\$value) ? get_class(\$value) : gettype(\$value);

        if (is_scalar(\$value)) {
            return new self(sprintf(
                \"Could not convert PHP value '%s' of type '%s' to type '%s'. Expected one of the following types: %s\",
                \$value,
                \$actualType,
                \$toType,
                implode(', ', \$possibleTypes)
            ));
        }

        return new self(sprintf(
            \"Could not convert PHP value of type '%s' to type '%s'. Expected one of the following types: %s\",
            \$actualType,
            \$toType,
            implode(', ', \$possibleTypes)
        ));
    }

    public static function conversionFailedSerialization(\$value, \$format, \$error)
    {
        \$actualType = is_object(\$value) ? get_class(\$value) : gettype(\$value);

        return new self(sprintf(
            \"Could not convert PHP type '%s' to '%s', as an '%s' error was triggered by the serialization\",
            \$actualType,
            \$format,
            \$error
        ));
    }

    public static function conversionFailedUnserialization(string \$format, string \$error) : self
    {
        return new self(sprintf(
            \"Could not convert database value to '%s' as an error was triggered by the unserialization: '%s'\",
            \$format,
            \$error
        ));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/ConversionException.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Types;

use Doctrine\\DBAL\\DBALException;
use Throwable;
use function get_class;
use function gettype;
use function implode;
use function is_object;
use function is_scalar;
use function sprintf;
use function strlen;
use function substr;

/**
 * Conversion Exception is thrown when the database to PHP conversion fails.
 */
class ConversionException extends DBALException
{
    /**
     * Thrown when a Database to Doctrine Type Conversion fails.
     *
     * @param string \$value
     * @param string \$toType
     *
     * @return \\Doctrine\\DBAL\\Types\\ConversionException
     */
    public static function conversionFailed(\$value, \$toType)
    {
        \$value = strlen(\$value) > 32 ? substr(\$value, 0, 20) . '...' : \$value;

        return new self('Could not convert database value \"' . \$value . '\" to Doctrine Type ' . \$toType);
    }

    /**
     * Thrown when a Database to Doctrine Type Conversion fails and we can make a statement
     * about the expected format.
     *
     * @param string \$value
     * @param string \$toType
     * @param string \$expectedFormat
     *
     * @return \\Doctrine\\DBAL\\Types\\ConversionException
     */
    public static function conversionFailedFormat(\$value, \$toType, \$expectedFormat, ?Throwable \$previous = null)
    {
        \$value = strlen(\$value) > 32 ? substr(\$value, 0, 20) . '...' : \$value;

        return new self(
            'Could not convert database value \"' . \$value . '\" to Doctrine Type ' .
            \$toType . '. Expected format: ' . \$expectedFormat,
            0,
            \$previous
        );
    }

    /**
     * Thrown when the PHP value passed to the converter was not of the expected type.
     *
     * @param mixed    \$value
     * @param string   \$toType
     * @param string[] \$possibleTypes
     *
     * @return \\Doctrine\\DBAL\\Types\\ConversionException
     */
    public static function conversionFailedInvalidType(\$value, \$toType, array \$possibleTypes)
    {
        \$actualType = is_object(\$value) ? get_class(\$value) : gettype(\$value);

        if (is_scalar(\$value)) {
            return new self(sprintf(
                \"Could not convert PHP value '%s' of type '%s' to type '%s'. Expected one of the following types: %s\",
                \$value,
                \$actualType,
                \$toType,
                implode(', ', \$possibleTypes)
            ));
        }

        return new self(sprintf(
            \"Could not convert PHP value of type '%s' to type '%s'. Expected one of the following types: %s\",
            \$actualType,
            \$toType,
            implode(', ', \$possibleTypes)
        ));
    }

    public static function conversionFailedSerialization(\$value, \$format, \$error)
    {
        \$actualType = is_object(\$value) ? get_class(\$value) : gettype(\$value);

        return new self(sprintf(
            \"Could not convert PHP type '%s' to '%s', as an '%s' error was triggered by the serialization\",
            \$actualType,
            \$format,
            \$error
        ));
    }

    public static function conversionFailedUnserialization(string \$format, string \$error) : self
    {
        return new self(sprintf(
            \"Could not convert database value to '%s' as an error was triggered by the unserialization: '%s'\",
            \$format,
            \$error
        ));
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/ConversionException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Types\\ConversionException.php");
    }
}
