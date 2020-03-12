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

/* @app/vendor/symfony/twig-bridge/Mime/WrappedTemplatedEmail.php */
class __TwigTemplate_40f8cdae63cf9e5232bc15ca92fb15f3af1035b042f63ae37d3f164d7bd1e114 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Mime/WrappedTemplatedEmail.php"));

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

namespace Symfony\\Bridge\\Twig\\Mime;

use Symfony\\Component\\Mime\\Address;
use Twig\\Environment;

/**
 * @internal
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class WrappedTemplatedEmail
{
    private \$twig;
    private \$message;

    public function __construct(Environment \$twig, TemplatedEmail \$message)
    {
        \$this->twig = \$twig;
        \$this->message = \$message;
    }

    public function toName(): string
    {
        return \$this->message->getTo()[0]->getName();
    }

    public function image(string \$image, string \$contentType = null): string
    {
        \$file = \$this->twig->getLoader()->getSourceContext(\$image);
        if (\$path = \$file->getPath()) {
            \$this->message->embedFromPath(\$path, \$image, \$contentType);
        } else {
            \$this->message->embed(\$file->getCode(), \$image, \$contentType);
        }

        return 'cid:'.\$image;
    }

    public function attach(string \$file, string \$name = null, string \$contentType = null): void
    {
        \$file = \$this->twig->getLoader()->getSourceContext(\$file);
        if (\$path = \$file->getPath()) {
            \$this->message->attachFromPath(\$path, \$name, \$contentType);
        } else {
            \$this->message->attach(\$file->getCode(), \$name, \$contentType);
        }
    }

    /**
     * @return \$this
     */
    public function setSubject(string \$subject): self
    {
        \$this->message->subject(\$subject);

        return \$this;
    }

    public function getSubject(): ?string
    {
        return \$this->message->getSubject();
    }

    /**
     * @return \$this
     */
    public function setReturnPath(string \$address): self
    {
        \$this->message->returnPath(\$address);

        return \$this;
    }

    public function getReturnPath(): string
    {
        return \$this->message->getReturnPath();
    }

    /**
     * @return \$this
     */
    public function addFrom(string \$address, string \$name = ''): self
    {
        \$this->message->addFrom(new Address(\$address, \$name));

        return \$this;
    }

    /**
     * @return Address[]
     */
    public function getFrom(): array
    {
        return \$this->message->getFrom();
    }

    /**
     * @return \$this
     */
    public function addReplyTo(string \$address): self
    {
        \$this->message->addReplyTo(\$address);

        return \$this;
    }

    /**
     * @return Address[]
     */
    public function getReplyTo(): array
    {
        return \$this->message->getReplyTo();
    }

    /**
     * @return \$this
     */
    public function addTo(string \$address, string \$name = ''): self
    {
        \$this->message->addTo(new Address(\$address, \$name));

        return \$this;
    }

    /**
     * @return Address[]
     */
    public function getTo(): array
    {
        return \$this->message->getTo();
    }

    /**
     * @return \$this
     */
    public function addCc(string \$address, string \$name = ''): self
    {
        \$this->message->addCc(new Address(\$address, \$name));

        return \$this;
    }

    /**
     * @return Address[]
     */
    public function getCc(): array
    {
        return \$this->message->getCc();
    }

    /**
     * @return \$this
     */
    public function addBcc(string \$address, string \$name = ''): self
    {
        \$this->message->addBcc(new Address(\$address, \$name));

        return \$this;
    }

    /**
     * @return Address[]
     */
    public function getBcc(): array
    {
        return \$this->message->getBcc();
    }

    /**
     * @return \$this
     */
    public function setPriority(int \$priority): self
    {
        \$this->message->setPriority(\$priority);

        return \$this;
    }

    public function getPriority(): int
    {
        return \$this->message->getPriority();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Mime/WrappedTemplatedEmail.php";
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

namespace Symfony\\Bridge\\Twig\\Mime;

use Symfony\\Component\\Mime\\Address;
use Twig\\Environment;

/**
 * @internal
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class WrappedTemplatedEmail
{
    private \$twig;
    private \$message;

    public function __construct(Environment \$twig, TemplatedEmail \$message)
    {
        \$this->twig = \$twig;
        \$this->message = \$message;
    }

    public function toName(): string
    {
        return \$this->message->getTo()[0]->getName();
    }

    public function image(string \$image, string \$contentType = null): string
    {
        \$file = \$this->twig->getLoader()->getSourceContext(\$image);
        if (\$path = \$file->getPath()) {
            \$this->message->embedFromPath(\$path, \$image, \$contentType);
        } else {
            \$this->message->embed(\$file->getCode(), \$image, \$contentType);
        }

        return 'cid:'.\$image;
    }

    public function attach(string \$file, string \$name = null, string \$contentType = null): void
    {
        \$file = \$this->twig->getLoader()->getSourceContext(\$file);
        if (\$path = \$file->getPath()) {
            \$this->message->attachFromPath(\$path, \$name, \$contentType);
        } else {
            \$this->message->attach(\$file->getCode(), \$name, \$contentType);
        }
    }

    /**
     * @return \$this
     */
    public function setSubject(string \$subject): self
    {
        \$this->message->subject(\$subject);

        return \$this;
    }

    public function getSubject(): ?string
    {
        return \$this->message->getSubject();
    }

    /**
     * @return \$this
     */
    public function setReturnPath(string \$address): self
    {
        \$this->message->returnPath(\$address);

        return \$this;
    }

    public function getReturnPath(): string
    {
        return \$this->message->getReturnPath();
    }

    /**
     * @return \$this
     */
    public function addFrom(string \$address, string \$name = ''): self
    {
        \$this->message->addFrom(new Address(\$address, \$name));

        return \$this;
    }

    /**
     * @return Address[]
     */
    public function getFrom(): array
    {
        return \$this->message->getFrom();
    }

    /**
     * @return \$this
     */
    public function addReplyTo(string \$address): self
    {
        \$this->message->addReplyTo(\$address);

        return \$this;
    }

    /**
     * @return Address[]
     */
    public function getReplyTo(): array
    {
        return \$this->message->getReplyTo();
    }

    /**
     * @return \$this
     */
    public function addTo(string \$address, string \$name = ''): self
    {
        \$this->message->addTo(new Address(\$address, \$name));

        return \$this;
    }

    /**
     * @return Address[]
     */
    public function getTo(): array
    {
        return \$this->message->getTo();
    }

    /**
     * @return \$this
     */
    public function addCc(string \$address, string \$name = ''): self
    {
        \$this->message->addCc(new Address(\$address, \$name));

        return \$this;
    }

    /**
     * @return Address[]
     */
    public function getCc(): array
    {
        return \$this->message->getCc();
    }

    /**
     * @return \$this
     */
    public function addBcc(string \$address, string \$name = ''): self
    {
        \$this->message->addBcc(new Address(\$address, \$name));

        return \$this;
    }

    /**
     * @return Address[]
     */
    public function getBcc(): array
    {
        return \$this->message->getBcc();
    }

    /**
     * @return \$this
     */
    public function setPriority(int \$priority): self
    {
        \$this->message->setPriority(\$priority);

        return \$this;
    }

    public function getPriority(): int
    {
        return \$this->message->getPriority();
    }
}
", "@app/vendor/symfony/twig-bridge/Mime/WrappedTemplatedEmail.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Mime\\WrappedTemplatedEmail.php");
    }
}
