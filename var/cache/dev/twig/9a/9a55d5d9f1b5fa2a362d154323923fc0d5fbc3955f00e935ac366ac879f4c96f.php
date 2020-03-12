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

/* @app/vendor/symfony/mime/Crypto/SMimeSigner.php */
class __TwigTemplate_80d2df9d0200a2c201a0d0379ed2d0d1e278f6a964d370676b135f08c3f80ae0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Crypto/SMimeSigner.php"));

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

namespace Symfony\\Component\\Mime\\Crypto;

use Symfony\\Component\\Mime\\Exception\\RuntimeException;
use Symfony\\Component\\Mime\\Message;

/**
 * @author Sebastiaan Stok <s.stok@rollerscapes.net>
 */
final class SMimeSigner extends SMime
{
    private \$signCertificate;
    private \$signPrivateKey;
    private \$signOptions;
    private \$extraCerts;

    /**
     * @var string|null
     */
    private \$privateKeyPassphrase;

    /**
     * @param string      \$certificate          The path of the file containing the signing certificate (in PEM format)
     * @param string      \$privateKey           The path of the file containing the private key (in PEM format)
     * @param string|null \$privateKeyPassphrase A passphrase of the private key (if any)
     * @param string|null \$extraCerts           The path of the file containing intermediate certificates (in PEM format) needed by the signing certificate
     * @param int|null    \$signOptions          Bitwise operator options for openssl_pkcs7_sign() (@see https://secure.php.net/manual/en/openssl.pkcs7.flags.php)
     */
    public function __construct(string \$certificate, string \$privateKey, string \$privateKeyPassphrase = null, string \$extraCerts = null, int \$signOptions = null)
    {
        if (!\\extension_loaded('openssl')) {
            throw new \\LogicException('PHP extension \"openssl\" is required to use SMime.');
        }

        \$this->signCertificate = \$this->normalizeFilePath(\$certificate);

        if (null !== \$privateKeyPassphrase) {
            \$this->signPrivateKey = [\$this->normalizeFilePath(\$privateKey), \$privateKeyPassphrase];
        } else {
            \$this->signPrivateKey = \$this->normalizeFilePath(\$privateKey);
        }

        \$this->signOptions = \$signOptions ?? PKCS7_DETACHED;
        \$this->extraCerts = \$extraCerts ? realpath(\$extraCerts) : null;
        \$this->privateKeyPassphrase = \$privateKeyPassphrase;
    }

    public function sign(Message \$message): Message
    {
        \$bufferFile = tmpfile();
        \$outputFile = tmpfile();

        \$this->iteratorToFile(\$message->getBody()->toIterable(), \$bufferFile);

        if (!@openssl_pkcs7_sign(stream_get_meta_data(\$bufferFile)['uri'], stream_get_meta_data(\$outputFile)['uri'], \$this->signCertificate, \$this->signPrivateKey, [], \$this->signOptions, \$this->extraCerts)) {
            throw new RuntimeException(sprintf('Failed to sign S/Mime message. Error: \"%s\".', openssl_error_string()));
        }

        return new Message(\$message->getHeaders(), \$this->convertMessageToSMimePart(\$outputFile, 'multipart', 'signed'));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Crypto/SMimeSigner.php";
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

namespace Symfony\\Component\\Mime\\Crypto;

use Symfony\\Component\\Mime\\Exception\\RuntimeException;
use Symfony\\Component\\Mime\\Message;

/**
 * @author Sebastiaan Stok <s.stok@rollerscapes.net>
 */
final class SMimeSigner extends SMime
{
    private \$signCertificate;
    private \$signPrivateKey;
    private \$signOptions;
    private \$extraCerts;

    /**
     * @var string|null
     */
    private \$privateKeyPassphrase;

    /**
     * @param string      \$certificate          The path of the file containing the signing certificate (in PEM format)
     * @param string      \$privateKey           The path of the file containing the private key (in PEM format)
     * @param string|null \$privateKeyPassphrase A passphrase of the private key (if any)
     * @param string|null \$extraCerts           The path of the file containing intermediate certificates (in PEM format) needed by the signing certificate
     * @param int|null    \$signOptions          Bitwise operator options for openssl_pkcs7_sign() (@see https://secure.php.net/manual/en/openssl.pkcs7.flags.php)
     */
    public function __construct(string \$certificate, string \$privateKey, string \$privateKeyPassphrase = null, string \$extraCerts = null, int \$signOptions = null)
    {
        if (!\\extension_loaded('openssl')) {
            throw new \\LogicException('PHP extension \"openssl\" is required to use SMime.');
        }

        \$this->signCertificate = \$this->normalizeFilePath(\$certificate);

        if (null !== \$privateKeyPassphrase) {
            \$this->signPrivateKey = [\$this->normalizeFilePath(\$privateKey), \$privateKeyPassphrase];
        } else {
            \$this->signPrivateKey = \$this->normalizeFilePath(\$privateKey);
        }

        \$this->signOptions = \$signOptions ?? PKCS7_DETACHED;
        \$this->extraCerts = \$extraCerts ? realpath(\$extraCerts) : null;
        \$this->privateKeyPassphrase = \$privateKeyPassphrase;
    }

    public function sign(Message \$message): Message
    {
        \$bufferFile = tmpfile();
        \$outputFile = tmpfile();

        \$this->iteratorToFile(\$message->getBody()->toIterable(), \$bufferFile);

        if (!@openssl_pkcs7_sign(stream_get_meta_data(\$bufferFile)['uri'], stream_get_meta_data(\$outputFile)['uri'], \$this->signCertificate, \$this->signPrivateKey, [], \$this->signOptions, \$this->extraCerts)) {
            throw new RuntimeException(sprintf('Failed to sign S/Mime message. Error: \"%s\".', openssl_error_string()));
        }

        return new Message(\$message->getHeaders(), \$this->convertMessageToSMimePart(\$outputFile, 'multipart', 'signed'));
    }
}
", "@app/vendor/symfony/mime/Crypto/SMimeSigner.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Crypto\\SMimeSigner.php");
    }
}
