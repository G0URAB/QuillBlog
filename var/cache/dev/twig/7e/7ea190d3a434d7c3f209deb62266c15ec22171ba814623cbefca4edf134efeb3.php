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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureChecker.php */
class __TwigTemplate_da0ca493e3345a795ac57baaf05a4eefa383de0e7d2e814cfb6882404ac9d91f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureChecker.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Signature;

use ProxyManager\\Signature\\Exception\\InvalidSignatureException;
use ProxyManager\\Signature\\Exception\\MissingSignatureException;
use ReflectionClass;

/**
 * Generator for signatures to be used to check the validity of generated code
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class SignatureChecker implements SignatureCheckerInterface
{
    /**
     * @var SignatureGeneratorInterface
     */
    private \$signatureGenerator;

    /**
     * @param SignatureGeneratorInterface \$signatureGenerator
     */
    public function __construct(SignatureGeneratorInterface \$signatureGenerator)
    {
        \$this->signatureGenerator = \$signatureGenerator;
    }

    /**
     * {@inheritDoc}
     */
    public function checkSignature(ReflectionClass \$class, array \$parameters)
    {
        \$propertyName      = 'signature' . \$this->signatureGenerator->generateSignatureKey(\$parameters);
        \$signature         = \$this->signatureGenerator->generateSignature(\$parameters);
        \$defaultProperties = \$class->getDefaultProperties();

        if (! \\array_key_exists(\$propertyName, \$defaultProperties)) {
            throw MissingSignatureException::fromMissingSignature(\$class, \$parameters, \$signature);
        }

        if (\$defaultProperties[\$propertyName] !== \$signature) {
            throw InvalidSignatureException::fromInvalidSignature(
                \$class,
                \$parameters,
                \$defaultProperties[\$propertyName],
                \$signature
            );
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureChecker.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Signature;

use ProxyManager\\Signature\\Exception\\InvalidSignatureException;
use ProxyManager\\Signature\\Exception\\MissingSignatureException;
use ReflectionClass;

/**
 * Generator for signatures to be used to check the validity of generated code
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class SignatureChecker implements SignatureCheckerInterface
{
    /**
     * @var SignatureGeneratorInterface
     */
    private \$signatureGenerator;

    /**
     * @param SignatureGeneratorInterface \$signatureGenerator
     */
    public function __construct(SignatureGeneratorInterface \$signatureGenerator)
    {
        \$this->signatureGenerator = \$signatureGenerator;
    }

    /**
     * {@inheritDoc}
     */
    public function checkSignature(ReflectionClass \$class, array \$parameters)
    {
        \$propertyName      = 'signature' . \$this->signatureGenerator->generateSignatureKey(\$parameters);
        \$signature         = \$this->signatureGenerator->generateSignature(\$parameters);
        \$defaultProperties = \$class->getDefaultProperties();

        if (! \\array_key_exists(\$propertyName, \$defaultProperties)) {
            throw MissingSignatureException::fromMissingSignature(\$class, \$parameters, \$signature);
        }

        if (\$defaultProperties[\$propertyName] !== \$signature) {
            throw InvalidSignatureException::fromInvalidSignature(
                \$class,
                \$parameters,
                \$defaultProperties[\$propertyName],
                \$signature
            );
        }
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureChecker.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Signature\\SignatureChecker.php");
    }
}
