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

/* @app/vendor/symfony/mime/RawMessage.php */
class __TwigTemplate_00bd84ebe4c282327295cc47f383c02550eb06e4447323b25e0a5a35994d337d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/RawMessage.php"));

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

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RawMessage implements \\Serializable
{
    private \$message;

    /**
     * @param iterable|string \$message
     */
    public function __construct(\$message)
    {
        \$this->message = \$message;
    }

    public function toString(): string
    {
        if (\\is_string(\$this->message)) {
            return \$this->message;
        }

        return \$this->message = implode('', iterator_to_array(\$this->message, false));
    }

    public function toIterable(): iterable
    {
        if (\\is_string(\$this->message)) {
            yield \$this->message;

            return;
        }

        \$message = '';
        foreach (\$this->message as \$chunk) {
            \$message .= \$chunk;
            yield \$chunk;
        }
        \$this->message = \$message;
    }

    /**
     * @throws LogicException if the message is not valid
     */
    public function ensureValidity()
    {
    }

    /**
     * @internal
     */
    final public function serialize(): string
    {
        return serialize(\$this->__serialize());
    }

    /**
     * @internal
     */
    final public function unserialize(\$serialized)
    {
        \$this->__unserialize(unserialize(\$serialized));
    }

    public function __serialize(): array
    {
        return [\$this->message];
    }

    public function __unserialize(array \$data): void
    {
        [\$this->message] = \$data;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/RawMessage.php";
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

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RawMessage implements \\Serializable
{
    private \$message;

    /**
     * @param iterable|string \$message
     */
    public function __construct(\$message)
    {
        \$this->message = \$message;
    }

    public function toString(): string
    {
        if (\\is_string(\$this->message)) {
            return \$this->message;
        }

        return \$this->message = implode('', iterator_to_array(\$this->message, false));
    }

    public function toIterable(): iterable
    {
        if (\\is_string(\$this->message)) {
            yield \$this->message;

            return;
        }

        \$message = '';
        foreach (\$this->message as \$chunk) {
            \$message .= \$chunk;
            yield \$chunk;
        }
        \$this->message = \$message;
    }

    /**
     * @throws LogicException if the message is not valid
     */
    public function ensureValidity()
    {
    }

    /**
     * @internal
     */
    final public function serialize(): string
    {
        return serialize(\$this->__serialize());
    }

    /**
     * @internal
     */
    final public function unserialize(\$serialized)
    {
        \$this->__unserialize(unserialize(\$serialized));
    }

    public function __serialize(): array
    {
        return [\$this->message];
    }

    public function __unserialize(array \$data): void
    {
        [\$this->message] = \$data;
    }
}
", "@app/vendor/symfony/mime/RawMessage.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\RawMessage.php");
    }
}
