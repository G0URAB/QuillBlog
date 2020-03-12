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

/* @app/vendor/symfony/mime/Address.php */
class __TwigTemplate_eef555b1150bb95812b2da0be5d0307c4ed10f0407d64beba677d126d4043347 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Address.php"));

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

use Egulias\\EmailValidator\\EmailValidator;
use Egulias\\EmailValidator\\Validation\\RFCValidation;
use Symfony\\Component\\Mime\\Encoder\\IdnAddressEncoder;
use Symfony\\Component\\Mime\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Mime\\Exception\\LogicException;
use Symfony\\Component\\Mime\\Exception\\RfcComplianceException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Address
{
    /**
     * A regex that matches a structure like 'Name <email@address.com>'.
     * It matches anything between the first < and last > as email address.
     * This allows to use a single string to construct an Address, which can be convenient to use in
     * config, and allows to have more readable config.
     * This does not try to cover all edge cases for address.
     */
    private const FROM_STRING_PATTERN = '~(?<displayName>[^<]*)<(?<addrSpec>.*)>[^>]*~';

    private static \$validator;
    private static \$encoder;

    private \$address;
    private \$name;

    public function __construct(string \$address, string \$name = '')
    {
        if (!class_exists(EmailValidator::class)) {
            throw new LogicException(sprintf('The \"%s\" class cannot be used as it needs \"%s\"; try running \"composer require egulias/email-validator\".', __CLASS__, EmailValidator::class));
        }

        if (null === self::\$validator) {
            self::\$validator = new EmailValidator();
        }

        \$this->address = trim(\$address);
        \$this->name = trim(str_replace([\"\\n\", \"\\r\"], '', \$name));

        if (!self::\$validator->isValid(\$this->address, new RFCValidation())) {
            throw new RfcComplianceException(sprintf('Email \"%s\" does not comply with addr-spec of RFC 2822.', \$address));
        }
    }

    public function getAddress(): string
    {
        return \$this->address;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    public function getEncodedAddress(): string
    {
        if (null === self::\$encoder) {
            self::\$encoder = new IdnAddressEncoder();
        }

        return self::\$encoder->encodeString(\$this->address);
    }

    public function toString(): string
    {
        return (\$n = \$this->getName()) ? \$n.' <'.\$this->getEncodedAddress().'>' : \$this->getEncodedAddress();
    }

    /**
     * @param Address|string \$address
     */
    public static function create(\$address): self
    {
        if (\$address instanceof self) {
            return \$address;
        }
        if (\\is_string(\$address)) {
            return new self(\$address);
        }

        throw new InvalidArgumentException(sprintf('An address can be an instance of Address or a string (\"%s\") given).', \\is_object(\$address) ? \\get_class(\$address) : \\gettype(\$address)));
    }

    /**
     * @param (Address|string)[] \$addresses
     *
     * @return Address[]
     */
    public static function createArray(array \$addresses): array
    {
        \$addrs = [];
        foreach (\$addresses as \$address) {
            \$addrs[] = self::create(\$address);
        }

        return \$addrs;
    }

    public static function fromString(string \$string): self
    {
        if (false === strpos(\$string, '<')) {
            return new self(\$string, '');
        }

        if (!preg_match(self::FROM_STRING_PATTERN, \$string, \$matches)) {
            throw new InvalidArgumentException(sprintf('Could not parse \"%s\" to a \"%s\" instance.', \$string, static::class));
        }

        return new self(\$matches['addrSpec'], trim(\$matches['displayName'], ' \\'\"'));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Address.php";
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

use Egulias\\EmailValidator\\EmailValidator;
use Egulias\\EmailValidator\\Validation\\RFCValidation;
use Symfony\\Component\\Mime\\Encoder\\IdnAddressEncoder;
use Symfony\\Component\\Mime\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Mime\\Exception\\LogicException;
use Symfony\\Component\\Mime\\Exception\\RfcComplianceException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Address
{
    /**
     * A regex that matches a structure like 'Name <email@address.com>'.
     * It matches anything between the first < and last > as email address.
     * This allows to use a single string to construct an Address, which can be convenient to use in
     * config, and allows to have more readable config.
     * This does not try to cover all edge cases for address.
     */
    private const FROM_STRING_PATTERN = '~(?<displayName>[^<]*)<(?<addrSpec>.*)>[^>]*~';

    private static \$validator;
    private static \$encoder;

    private \$address;
    private \$name;

    public function __construct(string \$address, string \$name = '')
    {
        if (!class_exists(EmailValidator::class)) {
            throw new LogicException(sprintf('The \"%s\" class cannot be used as it needs \"%s\"; try running \"composer require egulias/email-validator\".', __CLASS__, EmailValidator::class));
        }

        if (null === self::\$validator) {
            self::\$validator = new EmailValidator();
        }

        \$this->address = trim(\$address);
        \$this->name = trim(str_replace([\"\\n\", \"\\r\"], '', \$name));

        if (!self::\$validator->isValid(\$this->address, new RFCValidation())) {
            throw new RfcComplianceException(sprintf('Email \"%s\" does not comply with addr-spec of RFC 2822.', \$address));
        }
    }

    public function getAddress(): string
    {
        return \$this->address;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    public function getEncodedAddress(): string
    {
        if (null === self::\$encoder) {
            self::\$encoder = new IdnAddressEncoder();
        }

        return self::\$encoder->encodeString(\$this->address);
    }

    public function toString(): string
    {
        return (\$n = \$this->getName()) ? \$n.' <'.\$this->getEncodedAddress().'>' : \$this->getEncodedAddress();
    }

    /**
     * @param Address|string \$address
     */
    public static function create(\$address): self
    {
        if (\$address instanceof self) {
            return \$address;
        }
        if (\\is_string(\$address)) {
            return new self(\$address);
        }

        throw new InvalidArgumentException(sprintf('An address can be an instance of Address or a string (\"%s\") given).', \\is_object(\$address) ? \\get_class(\$address) : \\gettype(\$address)));
    }

    /**
     * @param (Address|string)[] \$addresses
     *
     * @return Address[]
     */
    public static function createArray(array \$addresses): array
    {
        \$addrs = [];
        foreach (\$addresses as \$address) {
            \$addrs[] = self::create(\$address);
        }

        return \$addrs;
    }

    public static function fromString(string \$string): self
    {
        if (false === strpos(\$string, '<')) {
            return new self(\$string, '');
        }

        if (!preg_match(self::FROM_STRING_PATTERN, \$string, \$matches)) {
            throw new InvalidArgumentException(sprintf('Could not parse \"%s\" to a \"%s\" instance.', \$string, static::class));
        }

        return new self(\$matches['addrSpec'], trim(\$matches['displayName'], ' \\'\"'));
    }
}
", "@app/vendor/symfony/mime/Address.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Address.php");
    }
}
