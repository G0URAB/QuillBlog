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

/* @app/vendor/symfony/mime/Test/Constraint/EmailAttachmentCount.php */
class __TwigTemplate_50c3996a1df5227474e90074b2eb690ff0baf8db92b505fbd1fa5059e16b459a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Test/Constraint/EmailAttachmentCount.php"));

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
use Symfony\\Component\\Mime\\Message;
use Symfony\\Component\\Mime\\RawMessage;

final class EmailAttachmentCount extends Constraint
{
    private \$expectedValue;
    private \$transport;

    public function __construct(int \$expectedValue, string \$transport = null)
    {
        \$this->expectedValue = \$expectedValue;
        \$this->transport = \$transport;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return sprintf('has sent \"%d\" attachment(s)', \$this->expectedValue);
    }

    /**
     * @param RawMessage \$message
     *
     * {@inheritdoc}
     */
    protected function matches(\$message): bool
    {
        if (RawMessage::class === \\get_class(\$message) || Message::class === \\get_class(\$message)) {
            throw new \\LogicException('Unable to test a message attachment on a RawMessage or Message instance.');
        }

        return \$this->expectedValue === \\count(\$message->getAttachments());
    }

    /**
     * @param RawMessage \$message
     *
     * {@inheritdoc}
     */
    protected function failureDescription(\$message): string
    {
        return 'the Email '.\$this->toString();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Test/Constraint/EmailAttachmentCount.php";
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
use Symfony\\Component\\Mime\\Message;
use Symfony\\Component\\Mime\\RawMessage;

final class EmailAttachmentCount extends Constraint
{
    private \$expectedValue;
    private \$transport;

    public function __construct(int \$expectedValue, string \$transport = null)
    {
        \$this->expectedValue = \$expectedValue;
        \$this->transport = \$transport;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return sprintf('has sent \"%d\" attachment(s)', \$this->expectedValue);
    }

    /**
     * @param RawMessage \$message
     *
     * {@inheritdoc}
     */
    protected function matches(\$message): bool
    {
        if (RawMessage::class === \\get_class(\$message) || Message::class === \\get_class(\$message)) {
            throw new \\LogicException('Unable to test a message attachment on a RawMessage or Message instance.');
        }

        return \$this->expectedValue === \\count(\$message->getAttachments());
    }

    /**
     * @param RawMessage \$message
     *
     * {@inheritdoc}
     */
    protected function failureDescription(\$message): string
    {
        return 'the Email '.\$this->toString();
    }
}
", "@app/vendor/symfony/mime/Test/Constraint/EmailAttachmentCount.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Test\\Constraint\\EmailAttachmentCount.php");
    }
}
