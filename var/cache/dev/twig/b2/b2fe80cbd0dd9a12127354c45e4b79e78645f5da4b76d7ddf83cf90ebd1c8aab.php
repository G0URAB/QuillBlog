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

/* @app/vendor/symfony/mime/Message.php */
class __TwigTemplate_4c61d2ee482c5a1385770c78cf632a9665ec776c7b6d56ad334c24c0d2fba7e1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Message.php"));

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

namespace Symfony\\Component\\Mime;

use Symfony\\Component\\Mime\\Exception\\LogicException;
use Symfony\\Component\\Mime\\Header\\Headers;
use Symfony\\Component\\Mime\\Part\\AbstractPart;
use Symfony\\Component\\Mime\\Part\\TextPart;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Message extends RawMessage
{
    private \$headers;
    private \$body;

    public function __construct(Headers \$headers = null, AbstractPart \$body = null)
    {
        \$this->headers = \$headers ? clone \$headers : new Headers();
        \$this->body = \$body;
    }

    public function __clone()
    {
        \$this->headers = clone \$this->headers;

        if (null !== \$this->body) {
            \$this->body = clone \$this->body;
        }
    }

    /**
     * @return \$this
     */
    public function setBody(AbstractPart \$body = null)
    {
        \$this->body = \$body;

        return \$this;
    }

    public function getBody(): ?AbstractPart
    {
        return \$this->body;
    }

    /**
     * @return \$this
     */
    public function setHeaders(Headers \$headers)
    {
        \$this->headers = \$headers;

        return \$this;
    }

    public function getHeaders(): Headers
    {
        return \$this->headers;
    }

    public function getPreparedHeaders(): Headers
    {
        \$headers = clone \$this->headers;

        if (!\$headers->has('From')) {
            throw new LogicException('An email must have a \"From\" header.');
        }

        \$headers->addTextHeader('MIME-Version', '1.0');

        if (!\$headers->has('Date')) {
            \$headers->addDateHeader('Date', new \\DateTimeImmutable());
        }

        // determine the \"real\" sender
        if (!\$headers->has('Sender') && \\count(\$froms = \$headers->get('From')->getAddresses()) > 1) {
            \$headers->addMailboxHeader('Sender', \$froms[0]);
        }

        if (!\$headers->has('Message-ID')) {
            \$headers->addIdHeader('Message-ID', \$this->generateMessageId());
        }

        // remove the Bcc field which should NOT be part of the sent message
        \$headers->remove('Bcc');

        return \$headers;
    }

    public function toString(): string
    {
        if (null === \$body = \$this->getBody()) {
            \$body = new TextPart('');
        }

        return \$this->getPreparedHeaders()->toString().\$body->toString();
    }

    public function toIterable(): iterable
    {
        if (null === \$body = \$this->getBody()) {
            \$body = new TextPart('');
        }

        yield \$this->getPreparedHeaders()->toString();
        yield from \$body->toIterable();
    }

    public function ensureValidity()
    {
        if (!\$this->headers->has('From')) {
            throw new LogicException('An email must have a \"From\" header.');
        }

        parent::ensureValidity();
    }

    public function generateMessageId(): string
    {
        if (\$this->headers->has('Sender')) {
            \$sender = \$this->headers->get('Sender')->getAddress();
        } elseif (\$this->headers->has('From')) {
            \$sender = \$this->headers->get('From')->getAddresses()[0];
        } else {
            throw new LogicException('An email must have a \"From\" or a \"Sender\" header to compute a Messsage ID.');
        }

        return bin2hex(random_bytes(16)).strstr(\$sender->getAddress(), '@');
    }

    public function __serialize(): array
    {
        return [\$this->headers, \$this->body];
    }

    public function __unserialize(array \$data): void
    {
        [\$this->headers, \$this->body] = \$data;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Message.php";
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

namespace Symfony\\Component\\Mime;

use Symfony\\Component\\Mime\\Exception\\LogicException;
use Symfony\\Component\\Mime\\Header\\Headers;
use Symfony\\Component\\Mime\\Part\\AbstractPart;
use Symfony\\Component\\Mime\\Part\\TextPart;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Message extends RawMessage
{
    private \$headers;
    private \$body;

    public function __construct(Headers \$headers = null, AbstractPart \$body = null)
    {
        \$this->headers = \$headers ? clone \$headers : new Headers();
        \$this->body = \$body;
    }

    public function __clone()
    {
        \$this->headers = clone \$this->headers;

        if (null !== \$this->body) {
            \$this->body = clone \$this->body;
        }
    }

    /**
     * @return \$this
     */
    public function setBody(AbstractPart \$body = null)
    {
        \$this->body = \$body;

        return \$this;
    }

    public function getBody(): ?AbstractPart
    {
        return \$this->body;
    }

    /**
     * @return \$this
     */
    public function setHeaders(Headers \$headers)
    {
        \$this->headers = \$headers;

        return \$this;
    }

    public function getHeaders(): Headers
    {
        return \$this->headers;
    }

    public function getPreparedHeaders(): Headers
    {
        \$headers = clone \$this->headers;

        if (!\$headers->has('From')) {
            throw new LogicException('An email must have a \"From\" header.');
        }

        \$headers->addTextHeader('MIME-Version', '1.0');

        if (!\$headers->has('Date')) {
            \$headers->addDateHeader('Date', new \\DateTimeImmutable());
        }

        // determine the \"real\" sender
        if (!\$headers->has('Sender') && \\count(\$froms = \$headers->get('From')->getAddresses()) > 1) {
            \$headers->addMailboxHeader('Sender', \$froms[0]);
        }

        if (!\$headers->has('Message-ID')) {
            \$headers->addIdHeader('Message-ID', \$this->generateMessageId());
        }

        // remove the Bcc field which should NOT be part of the sent message
        \$headers->remove('Bcc');

        return \$headers;
    }

    public function toString(): string
    {
        if (null === \$body = \$this->getBody()) {
            \$body = new TextPart('');
        }

        return \$this->getPreparedHeaders()->toString().\$body->toString();
    }

    public function toIterable(): iterable
    {
        if (null === \$body = \$this->getBody()) {
            \$body = new TextPart('');
        }

        yield \$this->getPreparedHeaders()->toString();
        yield from \$body->toIterable();
    }

    public function ensureValidity()
    {
        if (!\$this->headers->has('From')) {
            throw new LogicException('An email must have a \"From\" header.');
        }

        parent::ensureValidity();
    }

    public function generateMessageId(): string
    {
        if (\$this->headers->has('Sender')) {
            \$sender = \$this->headers->get('Sender')->getAddress();
        } elseif (\$this->headers->has('From')) {
            \$sender = \$this->headers->get('From')->getAddresses()[0];
        } else {
            throw new LogicException('An email must have a \"From\" or a \"Sender\" header to compute a Messsage ID.');
        }

        return bin2hex(random_bytes(16)).strstr(\$sender->getAddress(), '@');
    }

    public function __serialize(): array
    {
        return [\$this->headers, \$this->body];
    }

    public function __unserialize(array \$data): void
    {
        [\$this->headers, \$this->body] = \$data;
    }
}
", "@app/vendor/symfony/mime/Message.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Message.php");
    }
}
