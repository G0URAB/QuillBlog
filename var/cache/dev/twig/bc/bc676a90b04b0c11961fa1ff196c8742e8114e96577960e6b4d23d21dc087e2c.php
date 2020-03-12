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

/* @app/vendor/symfony/mime/Test/Constraint/EmailAddressContains.php */
class __TwigTemplate_c6c592340fdb664e044010c21a4dd6322f95105ca501d079efc67ecd84c866a4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Test/Constraint/EmailAddressContains.php"));

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

namespace Symfony\\Component\\Mime\\Test\\Constraint;

use PHPUnit\\Framework\\Constraint\\Constraint;
use Symfony\\Component\\Mime\\Header\\MailboxHeader;
use Symfony\\Component\\Mime\\Header\\MailboxListHeader;
use Symfony\\Component\\Mime\\RawMessage;

final class EmailAddressContains extends Constraint
{
    private \$headerName;
    private \$expectedValue;

    public function __construct(string \$headerName, string \$expectedValue)
    {
        \$this->headerName = \$headerName;
        \$this->expectedValue = \$expectedValue;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return sprintf('contains address \"%s\" with value \"%s\"', \$this->headerName, \$this->expectedValue);
    }

    /**
     * @param RawMessage \$message
     *
     * {@inheritdoc}
     */
    protected function matches(\$message): bool
    {
        if (RawMessage::class === \\get_class(\$message)) {
            throw new \\LogicException('Unable to test a message address on a RawMessage instance.');
        }

        \$header = \$message->getHeaders()->get(\$this->headerName);
        if (\$header instanceof MailboxHeader) {
            return \$this->expectedValue === \$header->Address()->getAddress();
        } elseif (\$header instanceof MailboxListHeader) {
            foreach (\$header->getAddresses() as \$address) {
                if (\$this->expectedValue === \$address->getAddress()) {
                    return true;
                }
            }

            return false;
        }

        throw new \\LogicException(sprintf('Unable to test a message address on a non-address header.'));
    }

    /**
     * @param RawMessage \$message
     *
     * {@inheritdoc}
     */
    protected function failureDescription(\$message): string
    {
        return sprintf('the Email %s (value is %s)', \$this->toString(), \$message->getHeaders()->get(\$this->headerName)->getBodyAsString());
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Test/Constraint/EmailAddressContains.php";
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

namespace Symfony\\Component\\Mime\\Test\\Constraint;

use PHPUnit\\Framework\\Constraint\\Constraint;
use Symfony\\Component\\Mime\\Header\\MailboxHeader;
use Symfony\\Component\\Mime\\Header\\MailboxListHeader;
use Symfony\\Component\\Mime\\RawMessage;

final class EmailAddressContains extends Constraint
{
    private \$headerName;
    private \$expectedValue;

    public function __construct(string \$headerName, string \$expectedValue)
    {
        \$this->headerName = \$headerName;
        \$this->expectedValue = \$expectedValue;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return sprintf('contains address \"%s\" with value \"%s\"', \$this->headerName, \$this->expectedValue);
    }

    /**
     * @param RawMessage \$message
     *
     * {@inheritdoc}
     */
    protected function matches(\$message): bool
    {
        if (RawMessage::class === \\get_class(\$message)) {
            throw new \\LogicException('Unable to test a message address on a RawMessage instance.');
        }

        \$header = \$message->getHeaders()->get(\$this->headerName);
        if (\$header instanceof MailboxHeader) {
            return \$this->expectedValue === \$header->Address()->getAddress();
        } elseif (\$header instanceof MailboxListHeader) {
            foreach (\$header->getAddresses() as \$address) {
                if (\$this->expectedValue === \$address->getAddress()) {
                    return true;
                }
            }

            return false;
        }

        throw new \\LogicException(sprintf('Unable to test a message address on a non-address header.'));
    }

    /**
     * @param RawMessage \$message
     *
     * {@inheritdoc}
     */
    protected function failureDescription(\$message): string
    {
        return sprintf('the Email %s (value is %s)', \$this->toString(), \$message->getHeaders()->get(\$this->headerName)->getBodyAsString());
    }
}
", "@app/vendor/symfony/mime/Test/Constraint/EmailAddressContains.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Test\\Constraint\\EmailAddressContains.php");
    }
}
