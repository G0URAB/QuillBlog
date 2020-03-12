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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/Exception/MissingSignatureException.php */
class __TwigTemplate_4297d2ab34b2bf45c79952d34f364435aca6cd1939441e7adf1215e1352f6c99 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/Exception/MissingSignatureException.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Signature\\Exception;

use ReflectionClass;
use UnexpectedValueException;

/**
 * Exception for no found signatures
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MissingSignatureException extends UnexpectedValueException implements ExceptionInterface
{
    public static function fromMissingSignature(ReflectionClass \$class, array \$parameters, string \$expected) : self
    {
        return new self(sprintf(
            'No signature found for class \"%s\", expected signature \"%s\" for %d parameters',
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
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/Exception/MissingSignatureException.php";
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
 * Exception for no found signatures
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MissingSignatureException extends UnexpectedValueException implements ExceptionInterface
{
    public static function fromMissingSignature(ReflectionClass \$class, array \$parameters, string \$expected) : self
    {
        return new self(sprintf(
            'No signature found for class \"%s\", expected signature \"%s\" for %d parameters',
            \$class->getName(),
            \$expected,
            count(\$parameters)
        ));
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/Exception/MissingSignatureException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Signature\\Exception\\MissingSignatureException.php");
    }
}
