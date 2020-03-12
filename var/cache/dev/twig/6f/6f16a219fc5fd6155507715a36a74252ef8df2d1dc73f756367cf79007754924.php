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

/* @app/vendor/symfony/flex/src/Response.php */
class __TwigTemplate_127df13c91546645274ee990215dc7fc43a9ce9033926385800c3d827906acdd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/Response.php"));

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

namespace Symfony\\Flex;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Response implements \\JsonSerializable
{
    private \$body;
    private \$origHeaders;
    private \$headers;
    private \$code;

    /**
     * @param mixed \$body The response as JSON
     */
    public function __construct(\$body, array \$headers = [], int \$code = 200)
    {
        \$this->body = \$body;
        \$this->origHeaders = \$headers;
        \$this->headers = \$this->parseHeaders(\$headers);
        \$this->code = \$code;
    }

    public function getStatusCode(): int
    {
        return \$this->code;
    }

    public function getHeader(string \$name): string
    {
        return \$this->headers[strtolower(\$name)][0] ?? '';
    }

    public function getHeaders(string \$name): array
    {
        return \$this->headers[strtolower(\$name)] ?? [];
    }

    public function getBody()
    {
        return \$this->body;
    }

    public function getOrigHeaders(): array
    {
        return \$this->origHeaders;
    }

    public static function fromJson(array \$json): self
    {
        \$response = new self(\$json['body']);
        \$response->headers = \$json['headers'];

        return \$response;
    }

    public function jsonSerialize()
    {
        return ['body' => \$this->body, 'headers' => \$this->headers];
    }

    private function parseHeaders(array \$headers): array
    {
        \$values = [];
        foreach (array_reverse(\$headers) as \$header) {
            if (preg_match('{^([^\\:]+):\\s*(.+?)\\s*\$}i', \$header, \$match)) {
                \$values[strtolower(\$match[1])][] = \$match[2];
            } elseif (preg_match('{^HTTP/}i', \$header)) {
                break;
            }
        }

        return \$values;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/Response.php";
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

namespace Symfony\\Flex;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Response implements \\JsonSerializable
{
    private \$body;
    private \$origHeaders;
    private \$headers;
    private \$code;

    /**
     * @param mixed \$body The response as JSON
     */
    public function __construct(\$body, array \$headers = [], int \$code = 200)
    {
        \$this->body = \$body;
        \$this->origHeaders = \$headers;
        \$this->headers = \$this->parseHeaders(\$headers);
        \$this->code = \$code;
    }

    public function getStatusCode(): int
    {
        return \$this->code;
    }

    public function getHeader(string \$name): string
    {
        return \$this->headers[strtolower(\$name)][0] ?? '';
    }

    public function getHeaders(string \$name): array
    {
        return \$this->headers[strtolower(\$name)] ?? [];
    }

    public function getBody()
    {
        return \$this->body;
    }

    public function getOrigHeaders(): array
    {
        return \$this->origHeaders;
    }

    public static function fromJson(array \$json): self
    {
        \$response = new self(\$json['body']);
        \$response->headers = \$json['headers'];

        return \$response;
    }

    public function jsonSerialize()
    {
        return ['body' => \$this->body, 'headers' => \$this->headers];
    }

    private function parseHeaders(array \$headers): array
    {
        \$values = [];
        foreach (array_reverse(\$headers) as \$header) {
            if (preg_match('{^([^\\:]+):\\s*(.+?)\\s*\$}i', \$header, \$match)) {
                \$values[strtolower(\$match[1])][] = \$match[2];
            } elseif (preg_match('{^HTTP/}i', \$header)) {
                break;
            }
        }

        return \$values;
    }
}
", "@app/vendor/symfony/flex/src/Response.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\Response.php");
    }
}
