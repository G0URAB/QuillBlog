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

/* @app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/UnexpectedValueException.php */
class __TwigTemplate_28cf8f3df6bda627e81e7483c82af4cb5f9e6c7290df290b188b8a1b3e6817d6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/UnexpectedValueException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Instantiator\\Exception;

use Exception;
use ReflectionClass;
use UnexpectedValueException as BaseUnexpectedValueException;
use function sprintf;

/**
 * Exception for given parameters causing invalid/unexpected state on instantiation
 */
class UnexpectedValueException extends BaseUnexpectedValueException implements ExceptionInterface
{
    public static function fromSerializationTriggeredException(
        ReflectionClass \$reflectionClass,
        Exception \$exception
    ) : self {
        return new self(
            sprintf(
                'An exception was raised while trying to instantiate an instance of \"%s\" via un-serialization',
                \$reflectionClass->getName()
            ),
            0,
            \$exception
        );
    }

    public static function fromUncleanUnSerialization(
        ReflectionClass \$reflectionClass,
        string \$errorString,
        int \$errorCode,
        string \$errorFile,
        int \$errorLine
    ) : self {
        return new self(
            sprintf(
                'Could not produce an instance of \"%s\" via un-serialization, since an error was triggered '
                . 'in file \"%s\" at line \"%d\"',
                \$reflectionClass->getName(),
                \$errorFile,
                \$errorLine
            ),
            0,
            new Exception(\$errorString, \$errorCode)
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/UnexpectedValueException.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Instantiator\\Exception;

use Exception;
use ReflectionClass;
use UnexpectedValueException as BaseUnexpectedValueException;
use function sprintf;

/**
 * Exception for given parameters causing invalid/unexpected state on instantiation
 */
class UnexpectedValueException extends BaseUnexpectedValueException implements ExceptionInterface
{
    public static function fromSerializationTriggeredException(
        ReflectionClass \$reflectionClass,
        Exception \$exception
    ) : self {
        return new self(
            sprintf(
                'An exception was raised while trying to instantiate an instance of \"%s\" via un-serialization',
                \$reflectionClass->getName()
            ),
            0,
            \$exception
        );
    }

    public static function fromUncleanUnSerialization(
        ReflectionClass \$reflectionClass,
        string \$errorString,
        int \$errorCode,
        string \$errorFile,
        int \$errorLine
    ) : self {
        return new self(
            sprintf(
                'Could not produce an instance of \"%s\" via un-serialization, since an error was triggered '
                . 'in file \"%s\" at line \"%d\"',
                \$reflectionClass->getName(),
                \$errorFile,
                \$errorLine
            ),
            0,
            new Exception(\$errorString, \$errorCode)
        );
    }
}
", "@app/vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/UnexpectedValueException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\instantiator\\src\\Doctrine\\Instantiator\\Exception\\UnexpectedValueException.php");
    }
}
