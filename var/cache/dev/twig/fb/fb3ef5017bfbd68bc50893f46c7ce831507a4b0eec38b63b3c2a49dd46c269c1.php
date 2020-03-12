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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/Exception/InvalidSignatureException.php */
class __TwigTemplate_4dc00e0ef262df0e0f347c8cdac543848b4e0d4e2d37289ff6537ea54d4cdb6b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/Exception/InvalidSignatureException.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Signature\\Exception;

use ReflectionClass;
use UnexpectedValueException;

/**
 * Exception for invalid provided signatures
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class InvalidSignatureException extends UnexpectedValueException implements ExceptionInterface
{
    public static function fromInvalidSignature(
        ReflectionClass \$class,
        array \$parameters,
        string \$signature,
        string \$expected
    ) : self {
        return new self(sprintf(
            'Found signature \"%s\" for class \"%s\" does not correspond to expected signature \"%s\" for %d parameters',
            \$signature,
            \$class->getName(),
            \$expected,
            count(\$parameters)
        ));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/Exception/InvalidSignatureException.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Signature\\Exception;

use ReflectionClass;
use UnexpectedValueException;

/**
 * Exception for invalid provided signatures
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class InvalidSignatureException extends UnexpectedValueException implements ExceptionInterface
{
    public static function fromInvalidSignature(
        ReflectionClass \$class,
        array \$parameters,
        string \$signature,
        string \$expected
    ) : self {
        return new self(sprintf(
            'Found signature \"%s\" for class \"%s\" does not correspond to expected signature \"%s\" for %d parameters',
            \$signature,
            \$class->getName(),
            \$expected,
            count(\$parameters)
        ));
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/Exception/InvalidSignatureException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Signature\\Exception\\InvalidSignatureException.php");
    }
}
