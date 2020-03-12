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

/* @app/vendor/symfony/yaml/Yaml.php */
class __TwigTemplate_e3601fe61426207a111f49d90fadd9cc003a7b4e8dcd1d3218ac3a6af135f5b0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/yaml/Yaml.php"));

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

use Symfony\\Component\\Yaml\\Exception\\ParseException;

/**
 * Yaml offers convenience methods to load and dump YAML.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class Yaml
{
    const DUMP_OBJECT = 1;
    const PARSE_EXCEPTION_ON_INVALID_TYPE = 2;
    const PARSE_OBJECT = 4;
    const PARSE_OBJECT_FOR_MAP = 8;
    const DUMP_EXCEPTION_ON_INVALID_TYPE = 16;
    const PARSE_DATETIME = 32;
    const DUMP_OBJECT_AS_MAP = 64;
    const DUMP_MULTI_LINE_LITERAL_BLOCK = 128;
    const PARSE_CONSTANT = 256;
    const PARSE_CUSTOM_TAGS = 512;
    const DUMP_EMPTY_ARRAY_AS_SEQUENCE = 1024;
    const DUMP_NULL_AS_TILDE = 2048;

    /**
     * Parses a YAML file into a PHP value.
     *
     * Usage:
     *
     *     \$array = Yaml::parseFile('config.yml');
     *     print_r(\$array);
     *
     * @param string \$filename The path to the YAML file to be parsed
     * @param int    \$flags    A bit field of PARSE_* constants to customize the YAML parser behavior
     *
     * @return mixed The YAML converted to a PHP value
     *
     * @throws ParseException If the file could not be read or the YAML is not valid
     */
    public static function parseFile(string \$filename, int \$flags = 0)
    {
        \$yaml = new Parser();

        return \$yaml->parseFile(\$filename, \$flags);
    }

    /**
     * Parses YAML into a PHP value.
     *
     *  Usage:
     *  <code>
     *   \$array = Yaml::parse(file_get_contents('config.yml'));
     *   print_r(\$array);
     *  </code>
     *
     * @param string \$input A string containing YAML
     * @param int    \$flags A bit field of PARSE_* constants to customize the YAML parser behavior
     *
     * @return mixed The YAML converted to a PHP value
     *
     * @throws ParseException If the YAML is not valid
     */
    public static function parse(string \$input, int \$flags = 0)
    {
        \$yaml = new Parser();

        return \$yaml->parse(\$input, \$flags);
    }

    /**
     * Dumps a PHP value to a YAML string.
     *
     * The dump method, when supplied with an array, will do its best
     * to convert the array into friendly YAML.
     *
     * @param mixed \$input  The PHP value
     * @param int   \$inline The level where you switch to inline YAML
     * @param int   \$indent The amount of spaces to use for indentation of nested nodes
     * @param int   \$flags  A bit field of DUMP_* constants to customize the dumped YAML string
     *
     * @return string A YAML string representing the original PHP value
     */
    public static function dump(\$input, int \$inline = 2, int \$indent = 4, int \$flags = 0): string
    {
        \$yaml = new Dumper(\$indent);

        return \$yaml->dump(\$input, \$inline, 0, \$flags);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/yaml/Yaml.php";
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

use Symfony\\Component\\Yaml\\Exception\\ParseException;

/**
 * Yaml offers convenience methods to load and dump YAML.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class Yaml
{
    const DUMP_OBJECT = 1;
    const PARSE_EXCEPTION_ON_INVALID_TYPE = 2;
    const PARSE_OBJECT = 4;
    const PARSE_OBJECT_FOR_MAP = 8;
    const DUMP_EXCEPTION_ON_INVALID_TYPE = 16;
    const PARSE_DATETIME = 32;
    const DUMP_OBJECT_AS_MAP = 64;
    const DUMP_MULTI_LINE_LITERAL_BLOCK = 128;
    const PARSE_CONSTANT = 256;
    const PARSE_CUSTOM_TAGS = 512;
    const DUMP_EMPTY_ARRAY_AS_SEQUENCE = 1024;
    const DUMP_NULL_AS_TILDE = 2048;

    /**
     * Parses a YAML file into a PHP value.
     *
     * Usage:
     *
     *     \$array = Yaml::parseFile('config.yml');
     *     print_r(\$array);
     *
     * @param string \$filename The path to the YAML file to be parsed
     * @param int    \$flags    A bit field of PARSE_* constants to customize the YAML parser behavior
     *
     * @return mixed The YAML converted to a PHP value
     *
     * @throws ParseException If the file could not be read or the YAML is not valid
     */
    public static function parseFile(string \$filename, int \$flags = 0)
    {
        \$yaml = new Parser();

        return \$yaml->parseFile(\$filename, \$flags);
    }

    /**
     * Parses YAML into a PHP value.
     *
     *  Usage:
     *  <code>
     *   \$array = Yaml::parse(file_get_contents('config.yml'));
     *   print_r(\$array);
     *  </code>
     *
     * @param string \$input A string containing YAML
     * @param int    \$flags A bit field of PARSE_* constants to customize the YAML parser behavior
     *
     * @return mixed The YAML converted to a PHP value
     *
     * @throws ParseException If the YAML is not valid
     */
    public static function parse(string \$input, int \$flags = 0)
    {
        \$yaml = new Parser();

        return \$yaml->parse(\$input, \$flags);
    }

    /**
     * Dumps a PHP value to a YAML string.
     *
     * The dump method, when supplied with an array, will do its best
     * to convert the array into friendly YAML.
     *
     * @param mixed \$input  The PHP value
     * @param int   \$inline The level where you switch to inline YAML
     * @param int   \$indent The amount of spaces to use for indentation of nested nodes
     * @param int   \$flags  A bit field of DUMP_* constants to customize the dumped YAML string
     *
     * @return string A YAML string representing the original PHP value
     */
    public static function dump(\$input, int \$inline = 2, int \$indent = 4, int \$flags = 0): string
    {
        \$yaml = new Dumper(\$indent);

        return \$yaml->dump(\$input, \$inline, 0, \$flags);
    }
}
", "@app/vendor/symfony/yaml/Yaml.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\yaml\\Yaml.php");
    }
}
