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

/* @app/vendor/symfony/mime/Header/MailboxHeader.php */
class __TwigTemplate_7a87e585e2a33c36584dfb2877229cfe0139408f77be341afe70ee40bdf91813 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Header/MailboxHeader.php"));

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
 * A Mailbox MIME Header for something like Sender (one named address).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class MailboxHeader extends AbstractHeader
{
    private \$address;

    public function __construct(string \$name, Address \$address)
    {
        parent::__construct(\$name);

        \$this->setAddress(\$address);
    }

    /**
     * @param Address \$body
     *
     * @throws RfcComplianceException
     */
    public function setBody(\$body)
    {
        \$this->setAddress(\$body);
    }

    /**
     * @throws RfcComplianceException
     */
    public function getBody(): Address
    {
        return \$this->getAddress();
    }

    /**
     * @throws RfcComplianceException
     */
    public function setAddress(Address \$address)
    {
        \$this->address = \$address;
    }

    public function getAddress(): Address
    {
        return \$this->address;
    }

    public function getBodyAsString(): string
    {
        \$str = \$this->address->getEncodedAddress();
        if (\$name = \$this->address->getName()) {
            \$str = \$this->createPhrase(\$this, \$name, \$this->getCharset(), true).' <'.\$str.'>';
        }

        return \$str;
    }

    /**
     * Redefine the encoding requirements for an address.
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
        return "@app/vendor/symfony/mime/Header/MailboxHeader.php";
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
 * A Mailbox MIME Header for something like Sender (one named address).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class MailboxHeader extends AbstractHeader
{
    private \$address;

    public function __construct(string \$name, Address \$address)
    {
        parent::__construct(\$name);

        \$this->setAddress(\$address);
    }

    /**
     * @param Address \$body
     *
     * @throws RfcComplianceException
     */
    public function setBody(\$body)
    {
        \$this->setAddress(\$body);
    }

    /**
     * @throws RfcComplianceException
     */
    public function getBody(): Address
    {
        return \$this->getAddress();
    }

    /**
     * @throws RfcComplianceException
     */
    public function setAddress(Address \$address)
    {
        \$this->address = \$address;
    }

    public function getAddress(): Address
    {
        return \$this->address;
    }

    public function getBodyAsString(): string
    {
        \$str = \$this->address->getEncodedAddress();
        if (\$name = \$this->address->getName()) {
            \$str = \$this->createPhrase(\$this, \$name, \$this->getCharset(), true).' <'.\$str.'>';
        }

        return \$str;
    }

    /**
     * Redefine the encoding requirements for an address.
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
", "@app/vendor/symfony/mime/Header/MailboxHeader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Header\\MailboxHeader.php");
    }
}
