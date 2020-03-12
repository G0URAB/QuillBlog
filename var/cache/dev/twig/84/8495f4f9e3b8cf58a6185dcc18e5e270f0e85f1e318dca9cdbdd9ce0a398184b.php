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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureGenerator.php */
class __TwigTemplate_c21d4e6b7e7ae63ed9056e7debe39d5f48c6d5ce1db1f86165dfee8e04673060 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Signature;

use ProxyManager\\Inflector\\Util\\ParameterEncoder;
use ProxyManager\\Inflector\\Util\\ParameterHasher;

/**
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class SignatureGenerator implements SignatureGeneratorInterface
{
    /**
     * @var ParameterEncoder
     */
    private \$parameterEncoder;

    /**
     * @var ParameterHasher
     */
    private \$parameterHasher;

    /**
     * Constructor.
     */
    public function __construct()
    {
        \$this->parameterEncoder = new ParameterEncoder();
        \$this->parameterHasher  = new ParameterHasher();
    }

    /**
     * {@inheritDoc}
     */
    public function generateSignature(array \$parameters) : string
    {
        return \$this->parameterEncoder->encodeParameters(\$parameters);
    }

    /**
     * {@inheritDoc}
     */
    public function generateSignatureKey(array \$parameters) : string
    {
        return \$this->parameterHasher->hashParameters(\$parameters);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureGenerator.php";
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

use ProxyManager\\Inflector\\Util\\ParameterEncoder;
use ProxyManager\\Inflector\\Util\\ParameterHasher;

/**
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class SignatureGenerator implements SignatureGeneratorInterface
{
    /**
     * @var ParameterEncoder
     */
    private \$parameterEncoder;

    /**
     * @var ParameterHasher
     */
    private \$parameterHasher;

    /**
     * Constructor.
     */
    public function __construct()
    {
        \$this->parameterEncoder = new ParameterEncoder();
        \$this->parameterHasher  = new ParameterHasher();
    }

    /**
     * {@inheritDoc}
     */
    public function generateSignature(array \$parameters) : string
    {
        return \$this->parameterEncoder->encodeParameters(\$parameters);
    }

    /**
     * {@inheritDoc}
     */
    public function generateSignatureKey(array \$parameters) : string
    {
        return \$this->parameterHasher->hashParameters(\$parameters);
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Signature/SignatureGenerator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Signature\\SignatureGenerator.php");
    }
}
