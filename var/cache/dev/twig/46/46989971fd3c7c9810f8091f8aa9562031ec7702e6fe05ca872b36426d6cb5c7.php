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

/* @app/vendor/symfony/mime/Encoder/Base64Encoder.php */
class __TwigTemplate_d7670383e7734e6e73bce2c8715941a43d82665dae5a07b9f986875e12467f2e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Encoder/Base64Encoder.php"));

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
 * @author Chris Corbyn
 */
class Base64Encoder implements EncoderInterface
{
    /**
     * Takes an unencoded string and produces a Base64 encoded string from it.
     *
     * Base64 encoded strings have a maximum line length of 76 characters.
     * If the first line needs to be shorter, indicate the difference with
     * \$firstLineOffset.
     */
    public function encodeString(string \$string, ?string \$charset = 'utf-8', int \$firstLineOffset = 0, int \$maxLineLength = 0): string
    {
        if (0 >= \$maxLineLength || 76 < \$maxLineLength) {
            \$maxLineLength = 76;
        }

        \$encodedString = base64_encode(\$string);
        \$firstLine = '';
        if (0 !== \$firstLineOffset) {
            \$firstLine = substr(\$encodedString, 0, \$maxLineLength - \$firstLineOffset).\"\\r\\n\";
            \$encodedString = substr(\$encodedString, \$maxLineLength - \$firstLineOffset);
        }

        return \$firstLine.trim(chunk_split(\$encodedString, \$maxLineLength, \"\\r\\n\"));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Encoder/Base64Encoder.php";
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
 * @author Chris Corbyn
 */
class Base64Encoder implements EncoderInterface
{
    /**
     * Takes an unencoded string and produces a Base64 encoded string from it.
     *
     * Base64 encoded strings have a maximum line length of 76 characters.
     * If the first line needs to be shorter, indicate the difference with
     * \$firstLineOffset.
     */
    public function encodeString(string \$string, ?string \$charset = 'utf-8', int \$firstLineOffset = 0, int \$maxLineLength = 0): string
    {
        if (0 >= \$maxLineLength || 76 < \$maxLineLength) {
            \$maxLineLength = 76;
        }

        \$encodedString = base64_encode(\$string);
        \$firstLine = '';
        if (0 !== \$firstLineOffset) {
            \$firstLine = substr(\$encodedString, 0, \$maxLineLength - \$firstLineOffset).\"\\r\\n\";
            \$encodedString = substr(\$encodedString, \$maxLineLength - \$firstLineOffset);
        }

        return \$firstLine.trim(chunk_split(\$encodedString, \$maxLineLength, \"\\r\\n\"));
    }
}
", "@app/vendor/symfony/mime/Encoder/Base64Encoder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Encoder\\Base64Encoder.php");
    }
}
