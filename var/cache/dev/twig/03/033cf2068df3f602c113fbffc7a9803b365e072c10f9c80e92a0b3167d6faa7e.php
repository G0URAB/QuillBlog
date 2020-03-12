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

/* @app/vendor/symfony/mime/Encoder/QpContentEncoder.php */
class __TwigTemplate_9447b26c375f40febdb5826413a5cdd4a6816fc0f637473742c69734c6756df5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Encoder/QpContentEncoder.php"));

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

/**
 * @author Lars Strojny
 */
final class QpContentEncoder implements ContentEncoderInterface
{
    public function encodeByteStream(\$stream, int \$maxLineLength = 0): iterable
    {
        if (!\\is_resource(\$stream)) {
            throw new \\TypeError(sprintf('Method \"%s\" takes a stream as a first argument.', __METHOD__));
        }

        // we don't use PHP stream filters here as the content should be small enough
        if (stream_get_meta_data(\$stream)['seekable'] ?? false) {
            rewind(\$stream);
        }

        yield \$this->encodeString(stream_get_contents(\$stream), 'utf-8', 0, \$maxLineLength);
    }

    public function getName(): string
    {
        return 'quoted-printable';
    }

    public function encodeString(string \$string, ?string \$charset = 'utf-8', int \$firstLineOffset = 0, int \$maxLineLength = 0): string
    {
        return \$this->standardize(quoted_printable_encode(\$string));
    }

    /**
     * Make sure CRLF is correct and HT/SPACE are in valid places.
     */
    private function standardize(string \$string): string
    {
        // transform CR or LF to CRLF
        \$string = preg_replace('~=0D(?!=0A)|(?<!=0D)=0A~', '=0D=0A', \$string);
        // transform =0D=0A to CRLF
        \$string = str_replace([\"\\t=0D=0A\", ' =0D=0A', '=0D=0A'], [\"=09\\r\\n\", \"=20\\r\\n\", \"\\r\\n\"], \$string);

        switch (\\ord(substr(\$string, -1))) {
            case 0x09:
                \$string = substr_replace(\$string, '=09', -1);
                break;
            case 0x20:
                \$string = substr_replace(\$string, '=20', -1);
                break;
        }

        return \$string;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Encoder/QpContentEncoder.php";
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

/**
 * @author Lars Strojny
 */
final class QpContentEncoder implements ContentEncoderInterface
{
    public function encodeByteStream(\$stream, int \$maxLineLength = 0): iterable
    {
        if (!\\is_resource(\$stream)) {
            throw new \\TypeError(sprintf('Method \"%s\" takes a stream as a first argument.', __METHOD__));
        }

        // we don't use PHP stream filters here as the content should be small enough
        if (stream_get_meta_data(\$stream)['seekable'] ?? false) {
            rewind(\$stream);
        }

        yield \$this->encodeString(stream_get_contents(\$stream), 'utf-8', 0, \$maxLineLength);
    }

    public function getName(): string
    {
        return 'quoted-printable';
    }

    public function encodeString(string \$string, ?string \$charset = 'utf-8', int \$firstLineOffset = 0, int \$maxLineLength = 0): string
    {
        return \$this->standardize(quoted_printable_encode(\$string));
    }

    /**
     * Make sure CRLF is correct and HT/SPACE are in valid places.
     */
    private function standardize(string \$string): string
    {
        // transform CR or LF to CRLF
        \$string = preg_replace('~=0D(?!=0A)|(?<!=0D)=0A~', '=0D=0A', \$string);
        // transform =0D=0A to CRLF
        \$string = str_replace([\"\\t=0D=0A\", ' =0D=0A', '=0D=0A'], [\"=09\\r\\n\", \"=20\\r\\n\", \"\\r\\n\"], \$string);

        switch (\\ord(substr(\$string, -1))) {
            case 0x09:
                \$string = substr_replace(\$string, '=09', -1);
                break;
            case 0x20:
                \$string = substr_replace(\$string, '=20', -1);
                break;
        }

        return \$string;
    }
}
", "@app/vendor/symfony/mime/Encoder/QpContentEncoder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Encoder\\QpContentEncoder.php");
    }
}
