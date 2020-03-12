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

/* @app/vendor/symfony/mime/Part/SMimePart.php */
class __TwigTemplate_d8bb2593b66491192667d0b916537076d413d410bee6134e20e26d0b3cfb5db5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Part/SMimePart.php"));

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

namespace Symfony\\Component\\Mime\\Part;

use Symfony\\Component\\Mime\\Header\\Headers;

/**
 * @author Sebastiaan Stok <s.stok@rollerscapes.net>
 */
class SMimePart extends AbstractPart
{
    private \$body;
    private \$type;
    private \$subtype;
    private \$parameters;

    /**
     * @param iterable|string \$body
     */
    public function __construct(\$body, string \$type, string \$subtype, array \$parameters)
    {
        parent::__construct();

        if (!\\is_string(\$body) && !is_iterable(\$body)) {
            throw new \\TypeError(sprintf('The body of \"%s\" must be a string or a iterable (got \"%s\").', self::class, \\is_object(\$body) ? \\get_class(\$body) : \\gettype(\$body)));
        }

        \$this->body = \$body;
        \$this->type = \$type;
        \$this->subtype = \$subtype;
        \$this->parameters = \$parameters;
    }

    public function getMediaType(): string
    {
        return \$this->type;
    }

    public function getMediaSubtype(): string
    {
        return \$this->subtype;
    }

    public function bodyToString(): string
    {
        if (\\is_string(\$this->body)) {
            return \$this->body;
        }

        \$body = '';
        foreach (\$this->body as \$chunk) {
            \$body .= \$chunk;
        }
        \$this->body = \$body;

        return \$body;
    }

    public function bodyToIterable(): iterable
    {
        if (\\is_string(\$this->body)) {
            yield \$this->body;

            return;
        }

        \$body = '';
        foreach (\$this->body as \$chunk) {
            \$body .= \$chunk;
            yield \$chunk;
        }
        \$this->body = \$body;
    }

    public function getPreparedHeaders(): Headers
    {
        \$headers = clone parent::getHeaders();

        \$headers->setHeaderBody('Parameterized', 'Content-Type', \$this->getMediaType().'/'.\$this->getMediaSubtype());

        foreach (\$this->parameters as \$name => \$value) {
            \$headers->setHeaderParameter('Content-Type', \$name, \$value);
        }

        return \$headers;
    }

    public function __sleep(): array
    {
        // convert iterables to strings for serialization
        if (is_iterable(\$this->body)) {
            \$this->body = \$this->bodyToString();
        }

        \$this->_headers = \$this->getHeaders();

        return ['_headers', 'body', 'type', 'subtype', 'parameters'];
    }

    public function __wakeup(): void
    {
        \$r = new \\ReflectionProperty(AbstractPart::class, 'headers');
        \$r->setAccessible(true);
        \$r->setValue(\$this, \$this->_headers);
        unset(\$this->_headers);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Part/SMimePart.php";
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

namespace Symfony\\Component\\Mime\\Part;

use Symfony\\Component\\Mime\\Header\\Headers;

/**
 * @author Sebastiaan Stok <s.stok@rollerscapes.net>
 */
class SMimePart extends AbstractPart
{
    private \$body;
    private \$type;
    private \$subtype;
    private \$parameters;

    /**
     * @param iterable|string \$body
     */
    public function __construct(\$body, string \$type, string \$subtype, array \$parameters)
    {
        parent::__construct();

        if (!\\is_string(\$body) && !is_iterable(\$body)) {
            throw new \\TypeError(sprintf('The body of \"%s\" must be a string or a iterable (got \"%s\").', self::class, \\is_object(\$body) ? \\get_class(\$body) : \\gettype(\$body)));
        }

        \$this->body = \$body;
        \$this->type = \$type;
        \$this->subtype = \$subtype;
        \$this->parameters = \$parameters;
    }

    public function getMediaType(): string
    {
        return \$this->type;
    }

    public function getMediaSubtype(): string
    {
        return \$this->subtype;
    }

    public function bodyToString(): string
    {
        if (\\is_string(\$this->body)) {
            return \$this->body;
        }

        \$body = '';
        foreach (\$this->body as \$chunk) {
            \$body .= \$chunk;
        }
        \$this->body = \$body;

        return \$body;
    }

    public function bodyToIterable(): iterable
    {
        if (\\is_string(\$this->body)) {
            yield \$this->body;

            return;
        }

        \$body = '';
        foreach (\$this->body as \$chunk) {
            \$body .= \$chunk;
            yield \$chunk;
        }
        \$this->body = \$body;
    }

    public function getPreparedHeaders(): Headers
    {
        \$headers = clone parent::getHeaders();

        \$headers->setHeaderBody('Parameterized', 'Content-Type', \$this->getMediaType().'/'.\$this->getMediaSubtype());

        foreach (\$this->parameters as \$name => \$value) {
            \$headers->setHeaderParameter('Content-Type', \$name, \$value);
        }

        return \$headers;
    }

    public function __sleep(): array
    {
        // convert iterables to strings for serialization
        if (is_iterable(\$this->body)) {
            \$this->body = \$this->bodyToString();
        }

        \$this->_headers = \$this->getHeaders();

        return ['_headers', 'body', 'type', 'subtype', 'parameters'];
    }

    public function __wakeup(): void
    {
        \$r = new \\ReflectionProperty(AbstractPart::class, 'headers');
        \$r->setAccessible(true);
        \$r->setValue(\$this, \$this->_headers);
        unset(\$this->_headers);
    }
}
", "@app/vendor/symfony/mime/Part/SMimePart.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Part\\SMimePart.php");
    }
}
