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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/String_.php */
class __TwigTemplate_f298635ac08b002d762c8d0a8e00cf5c4a12fce8f4b33009c8d7e27a8b2b14bc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/String_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Scalar;

use PhpParser\\Error;
use PhpParser\\Node\\Scalar;

class String_ extends Scalar
{
    /* For use in \"kind\" attribute */
    const KIND_SINGLE_QUOTED = 1;
    const KIND_DOUBLE_QUOTED = 2;
    const KIND_HEREDOC = 3;
    const KIND_NOWDOC = 4;

    /** @var string String value */
    public \$value;

    protected static \$replacements = [
        '\\\\' => '\\\\',
        '\$'  =>  '\$',
        'n'  => \"\\n\",
        'r'  => \"\\r\",
        't'  => \"\\t\",
        'f'  => \"\\f\",
        'v'  => \"\\v\",
        'e'  => \"\\x1B\",
    ];

    /**
     * Constructs a string scalar node.
     *
     * @param string \$value      Value of the string
     * @param array  \$attributes Additional attributes
     */
    public function __construct(string \$value, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['value'];
    }

    /**
     * @internal
     *
     * Parses a string token.
     *
     * @param string \$str String token content
     * @param bool \$parseUnicodeEscape Whether to parse PHP 7 \\u escapes
     *
     * @return string The parsed string
     */
    public static function parse(string \$str, bool \$parseUnicodeEscape = true) : string {
        \$bLength = 0;
        if ('b' === \$str[0] || 'B' === \$str[0]) {
            \$bLength = 1;
        }

        if ('\\'' === \$str[\$bLength]) {
            return str_replace(
                ['\\\\\\\\', '\\\\\\''],
                ['\\\\', '\\''],
                substr(\$str, \$bLength + 1, -1)
            );
        } else {
            return self::parseEscapeSequences(
                substr(\$str, \$bLength + 1, -1), '\"', \$parseUnicodeEscape
            );
        }
    }

    /**
     * @internal
     *
     * Parses escape sequences in strings (all string types apart from single quoted).
     *
     * @param string      \$str   String without quotes
     * @param null|string \$quote Quote type
     * @param bool \$parseUnicodeEscape Whether to parse PHP 7 \\u escapes
     *
     * @return string String with escape sequences parsed
     */
    public static function parseEscapeSequences(string \$str, \$quote, bool \$parseUnicodeEscape = true) : string {
        if (null !== \$quote) {
            \$str = str_replace('\\\\' . \$quote, \$quote, \$str);
        }

        \$extra = '';
        if (\$parseUnicodeEscape) {
            \$extra = '|u\\{([0-9a-fA-F]+)\\}';
        }

        return preg_replace_callback(
            '~\\\\\\\\([\\\\\\\\\$nrtfve]|[xX][0-9a-fA-F]{1,2}|[0-7]{1,3}' . \$extra . ')~',
            function(\$matches) {
                \$str = \$matches[1];

                if (isset(self::\$replacements[\$str])) {
                    return self::\$replacements[\$str];
                } elseif ('x' === \$str[0] || 'X' === \$str[0]) {
                    return chr(hexdec(substr(\$str, 1)));
                } elseif ('u' === \$str[0]) {
                    return self::codePointToUtf8(hexdec(\$matches[2]));
                } else {
                    return chr(octdec(\$str));
                }
            },
            \$str
        );
    }

    /**
     * Converts a Unicode code point to its UTF-8 encoded representation.
     *
     * @param int \$num Code point
     *
     * @return string UTF-8 representation of code point
     */
    private static function codePointToUtf8(int \$num) : string {
        if (\$num <= 0x7F) {
            return chr(\$num);
        }
        if (\$num <= 0x7FF) {
            return chr((\$num>>6) + 0xC0) . chr((\$num&0x3F) + 0x80);
        }
        if (\$num <= 0xFFFF) {
            return chr((\$num>>12) + 0xE0) . chr(((\$num>>6)&0x3F) + 0x80) . chr((\$num&0x3F) + 0x80);
        }
        if (\$num <= 0x1FFFFF) {
            return chr((\$num>>18) + 0xF0) . chr(((\$num>>12)&0x3F) + 0x80)
                 . chr(((\$num>>6)&0x3F) + 0x80) . chr((\$num&0x3F) + 0x80);
        }
        throw new Error('Invalid UTF-8 codepoint escape sequence: Codepoint too large');
    }

    public function getType() : string {
        return 'Scalar_String';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/String_.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Scalar;

use PhpParser\\Error;
use PhpParser\\Node\\Scalar;

class String_ extends Scalar
{
    /* For use in \"kind\" attribute */
    const KIND_SINGLE_QUOTED = 1;
    const KIND_DOUBLE_QUOTED = 2;
    const KIND_HEREDOC = 3;
    const KIND_NOWDOC = 4;

    /** @var string String value */
    public \$value;

    protected static \$replacements = [
        '\\\\' => '\\\\',
        '\$'  =>  '\$',
        'n'  => \"\\n\",
        'r'  => \"\\r\",
        't'  => \"\\t\",
        'f'  => \"\\f\",
        'v'  => \"\\v\",
        'e'  => \"\\x1B\",
    ];

    /**
     * Constructs a string scalar node.
     *
     * @param string \$value      Value of the string
     * @param array  \$attributes Additional attributes
     */
    public function __construct(string \$value, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['value'];
    }

    /**
     * @internal
     *
     * Parses a string token.
     *
     * @param string \$str String token content
     * @param bool \$parseUnicodeEscape Whether to parse PHP 7 \\u escapes
     *
     * @return string The parsed string
     */
    public static function parse(string \$str, bool \$parseUnicodeEscape = true) : string {
        \$bLength = 0;
        if ('b' === \$str[0] || 'B' === \$str[0]) {
            \$bLength = 1;
        }

        if ('\\'' === \$str[\$bLength]) {
            return str_replace(
                ['\\\\\\\\', '\\\\\\''],
                ['\\\\', '\\''],
                substr(\$str, \$bLength + 1, -1)
            );
        } else {
            return self::parseEscapeSequences(
                substr(\$str, \$bLength + 1, -1), '\"', \$parseUnicodeEscape
            );
        }
    }

    /**
     * @internal
     *
     * Parses escape sequences in strings (all string types apart from single quoted).
     *
     * @param string      \$str   String without quotes
     * @param null|string \$quote Quote type
     * @param bool \$parseUnicodeEscape Whether to parse PHP 7 \\u escapes
     *
     * @return string String with escape sequences parsed
     */
    public static function parseEscapeSequences(string \$str, \$quote, bool \$parseUnicodeEscape = true) : string {
        if (null !== \$quote) {
            \$str = str_replace('\\\\' . \$quote, \$quote, \$str);
        }

        \$extra = '';
        if (\$parseUnicodeEscape) {
            \$extra = '|u\\{([0-9a-fA-F]+)\\}';
        }

        return preg_replace_callback(
            '~\\\\\\\\([\\\\\\\\\$nrtfve]|[xX][0-9a-fA-F]{1,2}|[0-7]{1,3}' . \$extra . ')~',
            function(\$matches) {
                \$str = \$matches[1];

                if (isset(self::\$replacements[\$str])) {
                    return self::\$replacements[\$str];
                } elseif ('x' === \$str[0] || 'X' === \$str[0]) {
                    return chr(hexdec(substr(\$str, 1)));
                } elseif ('u' === \$str[0]) {
                    return self::codePointToUtf8(hexdec(\$matches[2]));
                } else {
                    return chr(octdec(\$str));
                }
            },
            \$str
        );
    }

    /**
     * Converts a Unicode code point to its UTF-8 encoded representation.
     *
     * @param int \$num Code point
     *
     * @return string UTF-8 representation of code point
     */
    private static function codePointToUtf8(int \$num) : string {
        if (\$num <= 0x7F) {
            return chr(\$num);
        }
        if (\$num <= 0x7FF) {
            return chr((\$num>>6) + 0xC0) . chr((\$num&0x3F) + 0x80);
        }
        if (\$num <= 0xFFFF) {
            return chr((\$num>>12) + 0xE0) . chr(((\$num>>6)&0x3F) + 0x80) . chr((\$num&0x3F) + 0x80);
        }
        if (\$num <= 0x1FFFFF) {
            return chr((\$num>>18) + 0xF0) . chr(((\$num>>12)&0x3F) + 0x80)
                 . chr(((\$num>>6)&0x3F) + 0x80) . chr((\$num&0x3F) + 0x80);
        }
        throw new Error('Invalid UTF-8 codepoint escape sequence: Codepoint too large');
    }

    public function getType() : string {
        return 'Scalar_String';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Scalar/String_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Scalar\\String_.php");
    }
}
