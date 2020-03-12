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

/* @app/vendor/symfony/mime/Crypto/SMimeEncrypter.php */
class __TwigTemplate_f9635522c0f1d6831f4a348a69bdc63d8ed0649ae5004439287393a41ade94e4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Crypto/SMimeEncrypter.php"));

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
final class SMimeEncrypter extends SMime
{
    private \$certs;
    private \$cipher;

    /**
     * @param string|string[] \$certificate The path (or array of paths) of the file(s) containing the X.509 certificate(s)
     * @param int|null        \$cipher      A set of algorithms used to encrypt the message. Must be one of these PHP constants: https://www.php.net/manual/en/openssl.ciphers.php
     */
    public function __construct(\$certificate, int \$cipher = null)
    {
        if (!\\extension_loaded('openssl')) {
            throw new \\LogicException('PHP extension \"openssl\" is required to use SMime.');
        }

        if (\\is_array(\$certificate)) {
            \$this->certs = array_map([\$this, 'normalizeFilePath'], \$certificate);
        } else {
            \$this->certs = \$this->normalizeFilePath(\$certificate);
        }

        \$this->cipher = \$cipher ?? OPENSSL_CIPHER_AES_256_CBC;
    }

    public function encrypt(Message \$message): Message
    {
        \$bufferFile = tmpfile();
        \$outputFile = tmpfile();

        \$this->iteratorToFile(\$message->toIterable(), \$bufferFile);

        if (!@openssl_pkcs7_encrypt(stream_get_meta_data(\$bufferFile)['uri'], stream_get_meta_data(\$outputFile)['uri'], \$this->certs, [], 0, \$this->cipher)) {
            throw new RuntimeException(sprintf('Failed to encrypt S/Mime message. Error: \"%s\".', openssl_error_string()));
        }

        \$mimePart = \$this->convertMessageToSMimePart(\$outputFile, 'application', 'pkcs7-mime');
        \$mimePart->getHeaders()
            ->addTextHeader('Content-Transfer-Encoding', 'base64')
            ->addParameterizedHeader('Content-Disposition', 'attachment', ['name' => 'smime.p7m'])
        ;

        return new Message(\$message->getHeaders(), \$mimePart);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Crypto/SMimeEncrypter.php";
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
final class SMimeEncrypter extends SMime
{
    private \$certs;
    private \$cipher;

    /**
     * @param string|string[] \$certificate The path (or array of paths) of the file(s) containing the X.509 certificate(s)
     * @param int|null        \$cipher      A set of algorithms used to encrypt the message. Must be one of these PHP constants: https://www.php.net/manual/en/openssl.ciphers.php
     */
    public function __construct(\$certificate, int \$cipher = null)
    {
        if (!\\extension_loaded('openssl')) {
            throw new \\LogicException('PHP extension \"openssl\" is required to use SMime.');
        }

        if (\\is_array(\$certificate)) {
            \$this->certs = array_map([\$this, 'normalizeFilePath'], \$certificate);
        } else {
            \$this->certs = \$this->normalizeFilePath(\$certificate);
        }

        \$this->cipher = \$cipher ?? OPENSSL_CIPHER_AES_256_CBC;
    }

    public function encrypt(Message \$message): Message
    {
        \$bufferFile = tmpfile();
        \$outputFile = tmpfile();

        \$this->iteratorToFile(\$message->toIterable(), \$bufferFile);

        if (!@openssl_pkcs7_encrypt(stream_get_meta_data(\$bufferFile)['uri'], stream_get_meta_data(\$outputFile)['uri'], \$this->certs, [], 0, \$this->cipher)) {
            throw new RuntimeException(sprintf('Failed to encrypt S/Mime message. Error: \"%s\".', openssl_error_string()));
        }

        \$mimePart = \$this->convertMessageToSMimePart(\$outputFile, 'application', 'pkcs7-mime');
        \$mimePart->getHeaders()
            ->addTextHeader('Content-Transfer-Encoding', 'base64')
            ->addParameterizedHeader('Content-Disposition', 'attachment', ['name' => 'smime.p7m'])
        ;

        return new Message(\$message->getHeaders(), \$mimePart);
    }
}
", "@app/vendor/symfony/mime/Crypto/SMimeEncrypter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Crypto\\SMimeEncrypter.php");
    }
}
