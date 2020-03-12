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

/* @app/vendor/symfony/yaml/Escaper.php */
class __TwigTemplate_6ae03823179559f307a71ac9851d059fc0d52fa35cba3dc8c553614190a713cc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/yaml/Escaper.php"));

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

namespace Symfony\\Component\\Yaml;

/**
 * Escaper encapsulates escaping rules for single and double-quoted
 * YAML strings.
 *
 * @author Matthew Lewinski <matthew@lewinski.org>
 *
 * @internal
 */
class Escaper
{
    // Characters that would cause a dumped string to require double quoting.
    const REGEX_CHARACTER_TO_ESCAPE = \"[\\\\x00-\\\\x1f]|\\xc2\\x85|\\xc2\\xa0|\\xe2\\x80\\xa8|\\xe2\\x80\\xa9\";

    // Mapping arrays for escaping a double quoted string. The backslash is
    // first to ensure proper escaping because str_replace operates iteratively
    // on the input arrays. This ordering of the characters avoids the use of strtr,
    // which performs more slowly.
    private static \$escapees = ['\\\\', '\\\\\\\\', '\\\\\"', '\"',
                                     \"\\x00\",  \"\\x01\",  \"\\x02\",  \"\\x03\",  \"\\x04\",  \"\\x05\",  \"\\x06\",  \"\\x07\",
                                     \"\\x08\",  \"\\x09\",  \"\\x0a\",  \"\\x0b\",  \"\\x0c\",  \"\\x0d\",  \"\\x0e\",  \"\\x0f\",
                                     \"\\x10\",  \"\\x11\",  \"\\x12\",  \"\\x13\",  \"\\x14\",  \"\\x15\",  \"\\x16\",  \"\\x17\",
                                     \"\\x18\",  \"\\x19\",  \"\\x1a\",  \"\\x1b\",  \"\\x1c\",  \"\\x1d\",  \"\\x1e\",  \"\\x1f\",
                                     \"\\xc2\\x85\", \"\\xc2\\xa0\", \"\\xe2\\x80\\xa8\", \"\\xe2\\x80\\xa9\",
                               ];
    private static \$escaped = ['\\\\\\\\', '\\\\\"', '\\\\\\\\', '\\\\\"',
                                     '\\\\0',   '\\\\x01', '\\\\x02', '\\\\x03', '\\\\x04', '\\\\x05', '\\\\x06', '\\\\a',
                                     '\\\\b',   '\\\\t',   '\\\\n',   '\\\\v',   '\\\\f',   '\\\\r',   '\\\\x0e', '\\\\x0f',
                                     '\\\\x10', '\\\\x11', '\\\\x12', '\\\\x13', '\\\\x14', '\\\\x15', '\\\\x16', '\\\\x17',
                                     '\\\\x18', '\\\\x19', '\\\\x1a', '\\\\e',   '\\\\x1c', '\\\\x1d', '\\\\x1e', '\\\\x1f',
                                     '\\\\N', '\\\\_', '\\\\L', '\\\\P',
                              ];

    /**
     * Determines if a PHP value would require double quoting in YAML.
     *
     * @param string \$value A PHP value
     *
     * @return bool True if the value would require double quotes
     */
    public static function requiresDoubleQuoting(string \$value): bool
    {
        return 0 < preg_match('/'.self::REGEX_CHARACTER_TO_ESCAPE.'/u', \$value);
    }

    /**
     * Escapes and surrounds a PHP value with double quotes.
     *
     * @param string \$value A PHP value
     *
     * @return string The quoted, escaped string
     */
    public static function escapeWithDoubleQuotes(string \$value): string
    {
        return sprintf('\"%s\"', str_replace(self::\$escapees, self::\$escaped, \$value));
    }

    /**
     * Determines if a PHP value would require single quoting in YAML.
     *
     * @param string \$value A PHP value
     *
     * @return bool True if the value would require single quotes
     */
    public static function requiresSingleQuoting(string \$value): bool
    {
        // Determines if a PHP value is entirely composed of a value that would
        // require single quoting in YAML.
        if (\\in_array(strtolower(\$value), ['null', '~', 'true', 'false', 'y', 'n', 'yes', 'no', 'on', 'off'])) {
            return true;
        }

        // Determines if the PHP value contains any single characters that would
        // cause it to require single quoting in YAML.
        return 0 < preg_match('/[ \\s \\' \" \\: \\{ \\} \\[ \\] , & \\* \\# \\?] | \\A[ \\- ? | < > = ! % @ ` ]/x', \$value);
    }

    /**
     * Escapes and surrounds a PHP value with single quotes.
     *
     * @param string \$value A PHP value
     *
     * @return string The quoted, escaped string
     */
    public static function escapeWithSingleQuotes(string \$value): string
    {
        return sprintf(\"'%s'\", str_replace('\\'', '\\'\\'', \$value));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/yaml/Escaper.php";
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

namespace Symfony\\Component\\Yaml;

/**
 * Escaper encapsulates escaping rules for single and double-quoted
 * YAML strings.
 *
 * @author Matthew Lewinski <matthew@lewinski.org>
 *
 * @internal
 */
class Escaper
{
    // Characters that would cause a dumped string to require double quoting.
    const REGEX_CHARACTER_TO_ESCAPE = \"[\\\\x00-\\\\x1f]|\\xc2\\x85|\\xc2\\xa0|\\xe2\\x80\\xa8|\\xe2\\x80\\xa9\";

    // Mapping arrays for escaping a double quoted string. The backslash is
    // first to ensure proper escaping because str_replace operates iteratively
    // on the input arrays. This ordering of the characters avoids the use of strtr,
    // which performs more slowly.
    private static \$escapees = ['\\\\', '\\\\\\\\', '\\\\\"', '\"',
                                     \"\\x00\",  \"\\x01\",  \"\\x02\",  \"\\x03\",  \"\\x04\",  \"\\x05\",  \"\\x06\",  \"\\x07\",
                                     \"\\x08\",  \"\\x09\",  \"\\x0a\",  \"\\x0b\",  \"\\x0c\",  \"\\x0d\",  \"\\x0e\",  \"\\x0f\",
                                     \"\\x10\",  \"\\x11\",  \"\\x12\",  \"\\x13\",  \"\\x14\",  \"\\x15\",  \"\\x16\",  \"\\x17\",
                                     \"\\x18\",  \"\\x19\",  \"\\x1a\",  \"\\x1b\",  \"\\x1c\",  \"\\x1d\",  \"\\x1e\",  \"\\x1f\",
                                     \"\\xc2\\x85\", \"\\xc2\\xa0\", \"\\xe2\\x80\\xa8\", \"\\xe2\\x80\\xa9\",
                               ];
    private static \$escaped = ['\\\\\\\\', '\\\\\"', '\\\\\\\\', '\\\\\"',
                                     '\\\\0',   '\\\\x01', '\\\\x02', '\\\\x03', '\\\\x04', '\\\\x05', '\\\\x06', '\\\\a',
                                     '\\\\b',   '\\\\t',   '\\\\n',   '\\\\v',   '\\\\f',   '\\\\r',   '\\\\x0e', '\\\\x0f',
                                     '\\\\x10', '\\\\x11', '\\\\x12', '\\\\x13', '\\\\x14', '\\\\x15', '\\\\x16', '\\\\x17',
                                     '\\\\x18', '\\\\x19', '\\\\x1a', '\\\\e',   '\\\\x1c', '\\\\x1d', '\\\\x1e', '\\\\x1f',
                                     '\\\\N', '\\\\_', '\\\\L', '\\\\P',
                              ];

    /**
     * Determines if a PHP value would require double quoting in YAML.
     *
     * @param string \$value A PHP value
     *
     * @return bool True if the value would require double quotes
     */
    public static function requiresDoubleQuoting(string \$value): bool
    {
        return 0 < preg_match('/'.self::REGEX_CHARACTER_TO_ESCAPE.'/u', \$value);
    }

    /**
     * Escapes and surrounds a PHP value with double quotes.
     *
     * @param string \$value A PHP value
     *
     * @return string The quoted, escaped string
     */
    public static function escapeWithDoubleQuotes(string \$value): string
    {
        return sprintf('\"%s\"', str_replace(self::\$escapees, self::\$escaped, \$value));
    }

    /**
     * Determines if a PHP value would require single quoting in YAML.
     *
     * @param string \$value A PHP value
     *
     * @return bool True if the value would require single quotes
     */
    public static function requiresSingleQuoting(string \$value): bool
    {
        // Determines if a PHP value is entirely composed of a value that would
        // require single quoting in YAML.
        if (\\in_array(strtolower(\$value), ['null', '~', 'true', 'false', 'y', 'n', 'yes', 'no', 'on', 'off'])) {
            return true;
        }

        // Determines if the PHP value contains any single characters that would
        // cause it to require single quoting in YAML.
        return 0 < preg_match('/[ \\s \\' \" \\: \\{ \\} \\[ \\] , & \\* \\# \\?] | \\A[ \\- ? | < > = ! % @ ` ]/x', \$value);
    }

    /**
     * Escapes and surrounds a PHP value with single quotes.
     *
     * @param string \$value A PHP value
     *
     * @return string The quoted, escaped string
     */
    public static function escapeWithSingleQuotes(string \$value): string
    {
        return sprintf(\"'%s'\", str_replace('\\'', '\\'\\'', \$value));
    }
}
", "@app/vendor/symfony/yaml/Escaper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\yaml\\Escaper.php");
    }
}
