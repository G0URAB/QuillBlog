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

/* @app/vendor/symfony/mime/Test/Constraint/EmailHtmlBodyContains.php */
class __TwigTemplate_fdbe1b78b959d07f35220b2bde6e2bf396638ea42a7db6e03c10c2e51bc9bede extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Test/Constraint/EmailHtmlBodyContains.php"));

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

final class EmailHtmlBodyContains extends Constraint
{
    private \$expectedText;

    public function __construct(string \$expectedText)
    {
        \$this->expectedText = \$expectedText;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return sprintf('contains \"%s\"', \$this->expectedText);
    }

    /**
     * {@inheritdoc}
     *
     * @param RawMessage \$message
     */
    protected function matches(\$message): bool
    {
        if (RawMessage::class === \\get_class(\$message) || Message::class === \\get_class(\$message)) {
            throw new \\LogicException('Unable to test a message HTML body on a RawMessage or Message instance.');
        }

        return false !== mb_strpos(\$message->getHtmlBody(), \$this->expectedText);
    }

    /**
     * {@inheritdoc}
     *
     * @param RawMessage \$message
     */
    protected function failureDescription(\$message): string
    {
        return 'the Email HTML body '.\$this->toString();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Test/Constraint/EmailHtmlBodyContains.php";
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

final class EmailHtmlBodyContains extends Constraint
{
    private \$expectedText;

    public function __construct(string \$expectedText)
    {
        \$this->expectedText = \$expectedText;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return sprintf('contains \"%s\"', \$this->expectedText);
    }

    /**
     * {@inheritdoc}
     *
     * @param RawMessage \$message
     */
    protected function matches(\$message): bool
    {
        if (RawMessage::class === \\get_class(\$message) || Message::class === \\get_class(\$message)) {
            throw new \\LogicException('Unable to test a message HTML body on a RawMessage or Message instance.');
        }

        return false !== mb_strpos(\$message->getHtmlBody(), \$this->expectedText);
    }

    /**
     * {@inheritdoc}
     *
     * @param RawMessage \$message
     */
    protected function failureDescription(\$message): string
    {
        return 'the Email HTML body '.\$this->toString();
    }
}
", "@app/vendor/symfony/mime/Test/Constraint/EmailHtmlBodyContains.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Test\\Constraint\\EmailHtmlBodyContains.php");
    }
}
