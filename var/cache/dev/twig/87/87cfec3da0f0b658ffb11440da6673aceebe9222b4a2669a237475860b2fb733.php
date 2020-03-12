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

/* @app/vendor/symfony/mime/Header/MailboxListHeader.php */
class __TwigTemplate_5b87f108c152c7ca9a83dd5026c6d5c6db61e89d6dfeaba196e1faeca06c2a80 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Header/MailboxListHeader.php"));

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

namespace Symfony\\Component\\Mime\\Header;

use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Exception\\RfcComplianceException;

/**
 * A Mailbox list MIME Header for something like From, To, Cc, and Bcc (one or more named addresses).
 *
 * @author Chris Corbyn
 */
final class MailboxListHeader extends AbstractHeader
{
    private \$addresses = [];

    /**
     * @param Address[] \$addresses
     */
    public function __construct(string \$name, array \$addresses)
    {
        parent::__construct(\$name);

        \$this->setAddresses(\$addresses);
    }

    /**
     * @param Address[] \$body
     *
     * @throws RfcComplianceException
     */
    public function setBody(\$body)
    {
        \$this->setAddresses(\$body);
    }

    /**
     * @throws RfcComplianceException
     *
     * @return Address[]
     */
    public function getBody(): array
    {
        return \$this->getAddresses();
    }

    /**
     * Sets a list of addresses to be shown in this Header.
     *
     * @param Address[] \$addresses
     *
     * @throws RfcComplianceException
     */
    public function setAddresses(array \$addresses)
    {
        \$this->addresses = [];
        \$this->addAddresses(\$addresses);
    }

    /**
     * Sets a list of addresses to be shown in this Header.
     *
     * @param Address[] \$addresses
     *
     * @throws RfcComplianceException
     */
    public function addAddresses(array \$addresses)
    {
        foreach (\$addresses as \$address) {
            \$this->addAddress(\$address);
        }
    }

    /**
     * @throws RfcComplianceException
     */
    public function addAddress(Address \$address)
    {
        \$this->addresses[] = \$address;
    }

    /**
     * @return Address[]
     */
    public function getAddresses(): array
    {
        return \$this->addresses;
    }

    /**
     * Gets the full mailbox list of this Header as an array of valid RFC 2822 strings.
     *
     * @throws RfcComplianceException
     *
     * @return string[]
     */
    public function getAddressStrings(): array
    {
        \$strings = [];
        foreach (\$this->addresses as \$address) {
            \$str = \$address->getEncodedAddress();
            if (\$name = \$address->getName()) {
                \$str = \$this->createPhrase(\$this, \$name, \$this->getCharset(), !\$strings).' <'.\$str.'>';
            }
            \$strings[] = \$str;
        }

        return \$strings;
    }

    public function getBodyAsString(): string
    {
        return implode(', ', \$this->getAddressStrings());
    }

    /**
     * Redefine the encoding requirements for addresses.
     *
     * All \"specials\" must be encoded as the full header value will not be quoted
     *
     * @see RFC 2822 3.2.1
     */
    protected function tokenNeedsEncoding(string \$token): bool
    {
        return preg_match('/[()<>\\[\\]:;@\\,.\"]/', \$token) || parent::tokenNeedsEncoding(\$token);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Header/MailboxListHeader.php";
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

namespace Symfony\\Component\\Mime\\Header;

use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Exception\\RfcComplianceException;

/**
 * A Mailbox list MIME Header for something like From, To, Cc, and Bcc (one or more named addresses).
 *
 * @author Chris Corbyn
 */
final class MailboxListHeader extends AbstractHeader
{
    private \$addresses = [];

    /**
     * @param Address[] \$addresses
     */
    public function __construct(string \$name, array \$addresses)
    {
        parent::__construct(\$name);

        \$this->setAddresses(\$addresses);
    }

    /**
     * @param Address[] \$body
     *
     * @throws RfcComplianceException
     */
    public function setBody(\$body)
    {
        \$this->setAddresses(\$body);
    }

    /**
     * @throws RfcComplianceException
     *
     * @return Address[]
     */
    public function getBody(): array
    {
        return \$this->getAddresses();
    }

    /**
     * Sets a list of addresses to be shown in this Header.
     *
     * @param Address[] \$addresses
     *
     * @throws RfcComplianceException
     */
    public function setAddresses(array \$addresses)
    {
        \$this->addresses = [];
        \$this->addAddresses(\$addresses);
    }

    /**
     * Sets a list of addresses to be shown in this Header.
     *
     * @param Address[] \$addresses
     *
     * @throws RfcComplianceException
     */
    public function addAddresses(array \$addresses)
    {
        foreach (\$addresses as \$address) {
            \$this->addAddress(\$address);
        }
    }

    /**
     * @throws RfcComplianceException
     */
    public function addAddress(Address \$address)
    {
        \$this->addresses[] = \$address;
    }

    /**
     * @return Address[]
     */
    public function getAddresses(): array
    {
        return \$this->addresses;
    }

    /**
     * Gets the full mailbox list of this Header as an array of valid RFC 2822 strings.
     *
     * @throws RfcComplianceException
     *
     * @return string[]
     */
    public function getAddressStrings(): array
    {
        \$strings = [];
        foreach (\$this->addresses as \$address) {
            \$str = \$address->getEncodedAddress();
            if (\$name = \$address->getName()) {
                \$str = \$this->createPhrase(\$this, \$name, \$this->getCharset(), !\$strings).' <'.\$str.'>';
            }
            \$strings[] = \$str;
        }

        return \$strings;
    }

    public function getBodyAsString(): string
    {
        return implode(', ', \$this->getAddressStrings());
    }

    /**
     * Redefine the encoding requirements for addresses.
     *
     * All \"specials\" must be encoded as the full header value will not be quoted
     *
     * @see RFC 2822 3.2.1
     */
    protected function tokenNeedsEncoding(string \$token): bool
    {
        return preg_match('/[()<>\\[\\]:;@\\,.\"]/', \$token) || parent::tokenNeedsEncoding(\$token);
    }
}
", "@app/vendor/symfony/mime/Header/MailboxListHeader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Header\\MailboxListHeader.php");
    }
}
