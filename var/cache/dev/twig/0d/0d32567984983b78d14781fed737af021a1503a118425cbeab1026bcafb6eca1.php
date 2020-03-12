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

/* @app/vendor/symfony/mime/Encoder/Base64ContentEncoder.php */
class __TwigTemplate_955a2bf74ad691cc6251215d48a98caf96e5ca606b00f903f18a2d87bf1808a3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Encoder/Base64ContentEncoder.php"));

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

namespace Symfony\\Component\\Mime\\Encoder;

use Symfony\\Component\\Mime\\Exception\\RuntimeException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Base64ContentEncoder extends Base64Encoder implements ContentEncoderInterface
{
    public function encodeByteStream(\$stream, int \$maxLineLength = 0): iterable
    {
        if (!\\is_resource(\$stream)) {
            throw new \\TypeError(sprintf('Method \"%s\" takes a stream as a first argument.', __METHOD__));
        }

        \$filter = stream_filter_append(\$stream, 'convert.base64-encode', STREAM_FILTER_READ, [
            'line-length' => 0 >= \$maxLineLength || 76 < \$maxLineLength ? 76 : \$maxLineLength,
            'line-break-chars' => \"\\r\\n\",
        ]);
        if (!\\is_resource(\$filter)) {
            throw new RuntimeException('Unable to set the base64 content encoder to the filter.');
        }

        if (stream_get_meta_data(\$stream)['seekable'] ?? false) {
            rewind(\$stream);
        }
        while (!feof(\$stream)) {
            yield fread(\$stream, 8192);
        }
        stream_filter_remove(\$filter);
    }

    public function getName(): string
    {
        return 'base64';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Encoder/Base64ContentEncoder.php";
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

namespace Symfony\\Component\\Mime\\Encoder;

use Symfony\\Component\\Mime\\Exception\\RuntimeException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class Base64ContentEncoder extends Base64Encoder implements ContentEncoderInterface
{
    public function encodeByteStream(\$stream, int \$maxLineLength = 0): iterable
    {
        if (!\\is_resource(\$stream)) {
            throw new \\TypeError(sprintf('Method \"%s\" takes a stream as a first argument.', __METHOD__));
        }

        \$filter = stream_filter_append(\$stream, 'convert.base64-encode', STREAM_FILTER_READ, [
            'line-length' => 0 >= \$maxLineLength || 76 < \$maxLineLength ? 76 : \$maxLineLength,
            'line-break-chars' => \"\\r\\n\",
        ]);
        if (!\\is_resource(\$filter)) {
            throw new RuntimeException('Unable to set the base64 content encoder to the filter.');
        }

        if (stream_get_meta_data(\$stream)['seekable'] ?? false) {
            rewind(\$stream);
        }
        while (!feof(\$stream)) {
            yield fread(\$stream, 8192);
        }
        stream_filter_remove(\$filter);
    }

    public function getName(): string
    {
        return 'base64';
    }
}
", "@app/vendor/symfony/mime/Encoder/Base64ContentEncoder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Encoder\\Base64ContentEncoder.php");
    }
}
