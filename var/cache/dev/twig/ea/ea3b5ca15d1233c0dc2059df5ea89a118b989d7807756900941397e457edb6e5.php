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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/ClassSignatureGenerator.php */
class __TwigTemplate_5a7724c646f83530314bc922b3d462e522d5a116c6851bb4a55fbb1441b55b1e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/ClassSignatureGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Signature;

use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Applies a signature to a given class generator
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class ClassSignatureGenerator implements ClassSignatureGeneratorInterface
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
     *
     * @throws \\Zend\\Code\\Exception\\InvalidArgumentException
     */
    public function addSignature(ClassGenerator \$classGenerator, array \$parameters) : ClassGenerator
    {
        \$classGenerator->addPropertyFromGenerator(new PropertyGenerator(
            'signature' . \$this->signatureGenerator->generateSignatureKey(\$parameters),
            \$this->signatureGenerator->generateSignature(\$parameters),
            PropertyGenerator::FLAG_STATIC | PropertyGenerator::FLAG_PRIVATE
        ));

        return \$classGenerator;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/ClassSignatureGenerator.php";
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

use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Applies a signature to a given class generator
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class ClassSignatureGenerator implements ClassSignatureGeneratorInterface
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
     *
     * @throws \\Zend\\Code\\Exception\\InvalidArgumentException
     */
    public function addSignature(ClassGenerator \$classGenerator, array \$parameters) : ClassGenerator
    {
        \$classGenerator->addPropertyFromGenerator(new PropertyGenerator(
            'signature' . \$this->signatureGenerator->generateSignatureKey(\$parameters),
            \$this->signatureGenerator->generateSignature(\$parameters),
            PropertyGenerator::FLAG_STATIC | PropertyGenerator::FLAG_PRIVATE
        ));

        return \$classGenerator;
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/ClassSignatureGenerator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Signature\\ClassSignatureGenerator.php");
    }
}
