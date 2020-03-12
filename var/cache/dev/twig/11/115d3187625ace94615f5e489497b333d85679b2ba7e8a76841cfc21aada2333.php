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

/* @app/vendor/symfony/yaml/Dumper.php */
class __TwigTemplate_f7e9d35c629664f8775672fc0d87b5d19503b657252012420495bae8e1c4fb77 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/yaml/Dumper.php"));

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

use Symfony\\Component\\Yaml\\Tag\\TaggedValue;

/**
 * Dumper dumps PHP variables to YAML strings.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class Dumper
{
    /**
     * The amount of spaces to use for indentation of nested nodes.
     *
     * @var int
     */
    protected \$indentation;

    public function __construct(int \$indentation = 4)
    {
        if (\$indentation < 1) {
            throw new \\InvalidArgumentException('The indentation must be greater than zero.');
        }

        \$this->indentation = \$indentation;
    }

    /**
     * Dumps a PHP value to YAML.
     *
     * @param mixed \$input  The PHP value
     * @param int   \$inline The level where you switch to inline YAML
     * @param int   \$indent The level of indentation (used internally)
     * @param int   \$flags  A bit field of Yaml::DUMP_* constants to customize the dumped YAML string
     *
     * @return string The YAML representation of the PHP value
     */
    public function dump(\$input, int \$inline = 0, int \$indent = 0, int \$flags = 0): string
    {
        \$output = '';
        \$prefix = \$indent ? str_repeat(' ', \$indent) : '';
        \$dumpObjectAsInlineMap = true;

        if (Yaml::DUMP_OBJECT_AS_MAP & \$flags && (\$input instanceof \\ArrayObject || \$input instanceof \\stdClass)) {
            \$dumpObjectAsInlineMap = empty((array) \$input);
        }

        if (\$inline <= 0 || (!\\is_array(\$input) && !\$input instanceof TaggedValue && \$dumpObjectAsInlineMap) || empty(\$input)) {
            \$output .= \$prefix.Inline::dump(\$input, \$flags);
        } else {
            \$dumpAsMap = Inline::isHash(\$input);

            foreach (\$input as \$key => \$value) {
                if (\$inline >= 1 && Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK & \$flags && \\is_string(\$value) && false !== strpos(\$value, \"\\n\") && false === strpos(\$value, \"\\r\\n\")) {
                    // If the first line starts with a space character, the spec requires a blockIndicationIndicator
                    // http://www.yaml.org/spec/1.2/spec.html#id2793979
                    \$blockIndentationIndicator = (' ' === substr(\$value, 0, 1)) ? (string) \$this->indentation : '';
                    \$output .= sprintf(\"%s%s%s |%s\\n\", \$prefix, \$dumpAsMap ? Inline::dump(\$key, \$flags).':' : '-', '', \$blockIndentationIndicator);

                    foreach (explode(\"\\n\", \$value) as \$row) {
                        \$output .= sprintf(\"%s%s%s\\n\", \$prefix, str_repeat(' ', \$this->indentation), \$row);
                    }

                    continue;
                }

                if (\$value instanceof TaggedValue) {
                    \$output .= sprintf('%s%s !%s', \$prefix, \$dumpAsMap ? Inline::dump(\$key, \$flags).':' : '-', \$value->getTag());

                    if (\$inline >= 1 && Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK & \$flags && \\is_string(\$value->getValue()) && false !== strpos(\$value->getValue(), \"\\n\") && false === strpos(\$value->getValue(), \"\\r\\n\")) {
                        // If the first line starts with a space character, the spec requires a blockIndicationIndicator
                        // http://www.yaml.org/spec/1.2/spec.html#id2793979
                        \$blockIndentationIndicator = (' ' === substr(\$value->getValue(), 0, 1)) ? (string) \$this->indentation : '';
                        \$output .= sprintf(\" |%s\\n\", \$blockIndentationIndicator);

                        foreach (explode(\"\\n\", \$value->getValue()) as \$row) {
                            \$output .= sprintf(\"%s%s%s\\n\", \$prefix, str_repeat(' ', \$this->indentation), \$row);
                        }

                        continue;
                    }

                    if (\$inline - 1 <= 0 || null === \$value->getValue() || is_scalar(\$value->getValue())) {
                        \$output .= ' '.\$this->dump(\$value->getValue(), \$inline - 1, 0, \$flags).\"\\n\";
                    } else {
                        \$output .= \"\\n\";
                        \$output .= \$this->dump(\$value->getValue(), \$inline - 1, \$dumpAsMap ? \$indent + \$this->indentation : \$indent + 2, \$flags);
                    }

                    continue;
                }

                \$dumpObjectAsInlineMap = true;

                if (Yaml::DUMP_OBJECT_AS_MAP & \$flags && (\$value instanceof \\ArrayObject || \$value instanceof \\stdClass)) {
                    \$dumpObjectAsInlineMap = empty((array) \$value);
                }

                \$willBeInlined = \$inline - 1 <= 0 || !\\is_array(\$value) && \$dumpObjectAsInlineMap || empty(\$value);

                \$output .= sprintf('%s%s%s%s',
                    \$prefix,
                    \$dumpAsMap ? Inline::dump(\$key, \$flags).':' : '-',
                    \$willBeInlined ? ' ' : \"\\n\",
                    \$this->dump(\$value, \$inline - 1, \$willBeInlined ? 0 : \$indent + \$this->indentation, \$flags)
                ).(\$willBeInlined ? \"\\n\" : '');
            }
        }

        return \$output;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/yaml/Dumper.php";
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

use Symfony\\Component\\Yaml\\Tag\\TaggedValue;

/**
 * Dumper dumps PHP variables to YAML strings.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class Dumper
{
    /**
     * The amount of spaces to use for indentation of nested nodes.
     *
     * @var int
     */
    protected \$indentation;

    public function __construct(int \$indentation = 4)
    {
        if (\$indentation < 1) {
            throw new \\InvalidArgumentException('The indentation must be greater than zero.');
        }

        \$this->indentation = \$indentation;
    }

    /**
     * Dumps a PHP value to YAML.
     *
     * @param mixed \$input  The PHP value
     * @param int   \$inline The level where you switch to inline YAML
     * @param int   \$indent The level of indentation (used internally)
     * @param int   \$flags  A bit field of Yaml::DUMP_* constants to customize the dumped YAML string
     *
     * @return string The YAML representation of the PHP value
     */
    public function dump(\$input, int \$inline = 0, int \$indent = 0, int \$flags = 0): string
    {
        \$output = '';
        \$prefix = \$indent ? str_repeat(' ', \$indent) : '';
        \$dumpObjectAsInlineMap = true;

        if (Yaml::DUMP_OBJECT_AS_MAP & \$flags && (\$input instanceof \\ArrayObject || \$input instanceof \\stdClass)) {
            \$dumpObjectAsInlineMap = empty((array) \$input);
        }

        if (\$inline <= 0 || (!\\is_array(\$input) && !\$input instanceof TaggedValue && \$dumpObjectAsInlineMap) || empty(\$input)) {
            \$output .= \$prefix.Inline::dump(\$input, \$flags);
        } else {
            \$dumpAsMap = Inline::isHash(\$input);

            foreach (\$input as \$key => \$value) {
                if (\$inline >= 1 && Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK & \$flags && \\is_string(\$value) && false !== strpos(\$value, \"\\n\") && false === strpos(\$value, \"\\r\\n\")) {
                    // If the first line starts with a space character, the spec requires a blockIndicationIndicator
                    // http://www.yaml.org/spec/1.2/spec.html#id2793979
                    \$blockIndentationIndicator = (' ' === substr(\$value, 0, 1)) ? (string) \$this->indentation : '';
                    \$output .= sprintf(\"%s%s%s |%s\\n\", \$prefix, \$dumpAsMap ? Inline::dump(\$key, \$flags).':' : '-', '', \$blockIndentationIndicator);

                    foreach (explode(\"\\n\", \$value) as \$row) {
                        \$output .= sprintf(\"%s%s%s\\n\", \$prefix, str_repeat(' ', \$this->indentation), \$row);
                    }

                    continue;
                }

                if (\$value instanceof TaggedValue) {
                    \$output .= sprintf('%s%s !%s', \$prefix, \$dumpAsMap ? Inline::dump(\$key, \$flags).':' : '-', \$value->getTag());

                    if (\$inline >= 1 && Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK & \$flags && \\is_string(\$value->getValue()) && false !== strpos(\$value->getValue(), \"\\n\") && false === strpos(\$value->getValue(), \"\\r\\n\")) {
                        // If the first line starts with a space character, the spec requires a blockIndicationIndicator
                        // http://www.yaml.org/spec/1.2/spec.html#id2793979
                        \$blockIndentationIndicator = (' ' === substr(\$value->getValue(), 0, 1)) ? (string) \$this->indentation : '';
                        \$output .= sprintf(\" |%s\\n\", \$blockIndentationIndicator);

                        foreach (explode(\"\\n\", \$value->getValue()) as \$row) {
                            \$output .= sprintf(\"%s%s%s\\n\", \$prefix, str_repeat(' ', \$this->indentation), \$row);
                        }

                        continue;
                    }

                    if (\$inline - 1 <= 0 || null === \$value->getValue() || is_scalar(\$value->getValue())) {
                        \$output .= ' '.\$this->dump(\$value->getValue(), \$inline - 1, 0, \$flags).\"\\n\";
                    } else {
                        \$output .= \"\\n\";
                        \$output .= \$this->dump(\$value->getValue(), \$inline - 1, \$dumpAsMap ? \$indent + \$this->indentation : \$indent + 2, \$flags);
                    }

                    continue;
                }

                \$dumpObjectAsInlineMap = true;

                if (Yaml::DUMP_OBJECT_AS_MAP & \$flags && (\$value instanceof \\ArrayObject || \$value instanceof \\stdClass)) {
                    \$dumpObjectAsInlineMap = empty((array) \$value);
                }

                \$willBeInlined = \$inline - 1 <= 0 || !\\is_array(\$value) && \$dumpObjectAsInlineMap || empty(\$value);

                \$output .= sprintf('%s%s%s%s',
                    \$prefix,
                    \$dumpAsMap ? Inline::dump(\$key, \$flags).':' : '-',
                    \$willBeInlined ? ' ' : \"\\n\",
                    \$this->dump(\$value, \$inline - 1, \$willBeInlined ? 0 : \$indent + \$this->indentation, \$flags)
                ).(\$willBeInlined ? \"\\n\" : '');
            }
        }

        return \$output;
    }
}
", "@app/vendor/symfony/yaml/Dumper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\yaml\\Dumper.php");
    }
}
