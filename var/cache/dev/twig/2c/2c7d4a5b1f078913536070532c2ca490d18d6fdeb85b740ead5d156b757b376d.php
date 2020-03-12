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

/* @app/vendor/symfony/mime/Part/AbstractPart.php */
class __TwigTemplate_44bc0edd3b16b86473a60af03bb76029f137cd70718e6a91fcb60a89445e754e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Part/AbstractPart.php"));

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
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AbstractPart
{
    private \$headers;

    public function __construct()
    {
        \$this->headers = new Headers();
    }

    public function getHeaders(): Headers
    {
        return \$this->headers;
    }

    public function getPreparedHeaders(): Headers
    {
        \$headers = clone \$this->headers;
        \$headers->setHeaderBody('Parameterized', 'Content-Type', \$this->getMediaType().'/'.\$this->getMediaSubtype());

        return \$headers;
    }

    public function toString(): string
    {
        return \$this->getPreparedHeaders()->toString().\"\\r\\n\".\$this->bodyToString();
    }

    public function toIterable(): iterable
    {
        yield \$this->getPreparedHeaders()->toString();
        yield \"\\r\\n\";
        yield from \$this->bodyToIterable();
    }

    public function asDebugString(): string
    {
        return \$this->getMediaType().'/'.\$this->getMediaSubtype();
    }

    abstract public function bodyToString(): string;

    abstract public function bodyToIterable(): iterable;

    abstract public function getMediaType(): string;

    abstract public function getMediaSubtype(): string;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Part/AbstractPart.php";
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
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AbstractPart
{
    private \$headers;

    public function __construct()
    {
        \$this->headers = new Headers();
    }

    public function getHeaders(): Headers
    {
        return \$this->headers;
    }

    public function getPreparedHeaders(): Headers
    {
        \$headers = clone \$this->headers;
        \$headers->setHeaderBody('Parameterized', 'Content-Type', \$this->getMediaType().'/'.\$this->getMediaSubtype());

        return \$headers;
    }

    public function toString(): string
    {
        return \$this->getPreparedHeaders()->toString().\"\\r\\n\".\$this->bodyToString();
    }

    public function toIterable(): iterable
    {
        yield \$this->getPreparedHeaders()->toString();
        yield \"\\r\\n\";
        yield from \$this->bodyToIterable();
    }

    public function asDebugString(): string
    {
        return \$this->getMediaType().'/'.\$this->getMediaSubtype();
    }

    abstract public function bodyToString(): string;

    abstract public function bodyToIterable(): iterable;

    abstract public function getMediaType(): string;

    abstract public function getMediaSubtype(): string;
}
", "@app/vendor/symfony/mime/Part/AbstractPart.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Part\\AbstractPart.php");
    }
}
