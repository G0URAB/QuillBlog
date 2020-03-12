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

/* @app/vendor/twig/twig/src/Compiler.php */
class __TwigTemplate_294c5a430215a46782f085b9b43893cd74384a16b80a7d61b2ddffd09a27abad extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Compiler.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

use Twig\\Node\\Node;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Compiler
{
    private \$lastLine;
    private \$source;
    private \$indentation;
    private \$env;
    private \$debugInfo = [];
    private \$sourceOffset;
    private \$sourceLine;
    private \$varNameSalt = 0;

    public function __construct(Environment \$env)
    {
        \$this->env = \$env;
    }

    public function getEnvironment(): Environment
    {
        return \$this->env;
    }

    public function getSource(): string
    {
        return \$this->source;
    }

    /**
     * @return \$this
     */
    public function compile(Node \$node, int \$indentation = 0)
    {
        \$this->lastLine = null;
        \$this->source = '';
        \$this->debugInfo = [];
        \$this->sourceOffset = 0;
        // source code starts at 1 (as we then increment it when we encounter new lines)
        \$this->sourceLine = 1;
        \$this->indentation = \$indentation;
        \$this->varNameSalt = 0;

        \$node->compile(\$this);

        return \$this;
    }

    /**
     * @return \$this
     */
    public function subcompile(Node \$node, bool \$raw = true)
    {
        if (false === \$raw) {
            \$this->source .= str_repeat(' ', \$this->indentation * 4);
        }

        \$node->compile(\$this);

        return \$this;
    }

    /**
     * Adds a raw string to the compiled code.
     *
     * @return \$this
     */
    public function raw(string \$string)
    {
        \$this->source .= \$string;

        return \$this;
    }

    /**
     * Writes a string to the compiled code by adding indentation.
     *
     * @return \$this
     */
    public function write(...\$strings)
    {
        foreach (\$strings as \$string) {
            \$this->source .= str_repeat(' ', \$this->indentation * 4).\$string;
        }

        return \$this;
    }

    /**
     * Adds a quoted string to the compiled code.
     *
     * @return \$this
     */
    public function string(string \$value)
    {
        \$this->source .= sprintf('\"%s\"', addcslashes(\$value, \"\\0\\t\\\"\\\$\\\\\"));

        return \$this;
    }

    /**
     * Returns a PHP representation of a given value.
     *
     * @return \$this
     */
    public function repr(\$value)
    {
        if (\\is_int(\$value) || \\is_float(\$value)) {
            if (false !== \$locale = setlocale(LC_NUMERIC, '0')) {
                setlocale(LC_NUMERIC, 'C');
            }

            \$this->raw(var_export(\$value, true));

            if (false !== \$locale) {
                setlocale(LC_NUMERIC, \$locale);
            }
        } elseif (null === \$value) {
            \$this->raw('null');
        } elseif (\\is_bool(\$value)) {
            \$this->raw(\$value ? 'true' : 'false');
        } elseif (\\is_array(\$value)) {
            \$this->raw('array(');
            \$first = true;
            foreach (\$value as \$key => \$v) {
                if (!\$first) {
                    \$this->raw(', ');
                }
                \$first = false;
                \$this->repr(\$key);
                \$this->raw(' => ');
                \$this->repr(\$v);
            }
            \$this->raw(')');
        } else {
            \$this->string(\$value);
        }

        return \$this;
    }

    /**
     * @return \$this
     */
    public function addDebugInfo(Node \$node)
    {
        if (\$node->getTemplateLine() != \$this->lastLine) {
            \$this->write(sprintf(\"// line %d\\n\", \$node->getTemplateLine()));

            \$this->sourceLine += substr_count(\$this->source, \"\\n\", \$this->sourceOffset);
            \$this->sourceOffset = \\strlen(\$this->source);
            \$this->debugInfo[\$this->sourceLine] = \$node->getTemplateLine();

            \$this->lastLine = \$node->getTemplateLine();
        }

        return \$this;
    }

    public function getDebugInfo(): array
    {
        ksort(\$this->debugInfo);

        return \$this->debugInfo;
    }

    /**
     * @return \$this
     */
    public function indent(int \$step = 1)
    {
        \$this->indentation += \$step;

        return \$this;
    }

    /**
     * @return \$this
     *
     * @throws \\LogicException When trying to outdent too much so the indentation would become negative
     */
    public function outdent(int \$step = 1)
    {
        // can't outdent by more steps than the current indentation level
        if (\$this->indentation < \$step) {
            throw new \\LogicException('Unable to call outdent() as the indentation would become negative.');
        }

        \$this->indentation -= \$step;

        return \$this;
    }

    public function getVarName(): string
    {
        return sprintf('__internal_%s', hash('sha256', __METHOD__.\$this->varNameSalt++));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Compiler.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

use Twig\\Node\\Node;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Compiler
{
    private \$lastLine;
    private \$source;
    private \$indentation;
    private \$env;
    private \$debugInfo = [];
    private \$sourceOffset;
    private \$sourceLine;
    private \$varNameSalt = 0;

    public function __construct(Environment \$env)
    {
        \$this->env = \$env;
    }

    public function getEnvironment(): Environment
    {
        return \$this->env;
    }

    public function getSource(): string
    {
        return \$this->source;
    }

    /**
     * @return \$this
     */
    public function compile(Node \$node, int \$indentation = 0)
    {
        \$this->lastLine = null;
        \$this->source = '';
        \$this->debugInfo = [];
        \$this->sourceOffset = 0;
        // source code starts at 1 (as we then increment it when we encounter new lines)
        \$this->sourceLine = 1;
        \$this->indentation = \$indentation;
        \$this->varNameSalt = 0;

        \$node->compile(\$this);

        return \$this;
    }

    /**
     * @return \$this
     */
    public function subcompile(Node \$node, bool \$raw = true)
    {
        if (false === \$raw) {
            \$this->source .= str_repeat(' ', \$this->indentation * 4);
        }

        \$node->compile(\$this);

        return \$this;
    }

    /**
     * Adds a raw string to the compiled code.
     *
     * @return \$this
     */
    public function raw(string \$string)
    {
        \$this->source .= \$string;

        return \$this;
    }

    /**
     * Writes a string to the compiled code by adding indentation.
     *
     * @return \$this
     */
    public function write(...\$strings)
    {
        foreach (\$strings as \$string) {
            \$this->source .= str_repeat(' ', \$this->indentation * 4).\$string;
        }

        return \$this;
    }

    /**
     * Adds a quoted string to the compiled code.
     *
     * @return \$this
     */
    public function string(string \$value)
    {
        \$this->source .= sprintf('\"%s\"', addcslashes(\$value, \"\\0\\t\\\"\\\$\\\\\"));

        return \$this;
    }

    /**
     * Returns a PHP representation of a given value.
     *
     * @return \$this
     */
    public function repr(\$value)
    {
        if (\\is_int(\$value) || \\is_float(\$value)) {
            if (false !== \$locale = setlocale(LC_NUMERIC, '0')) {
                setlocale(LC_NUMERIC, 'C');
            }

            \$this->raw(var_export(\$value, true));

            if (false !== \$locale) {
                setlocale(LC_NUMERIC, \$locale);
            }
        } elseif (null === \$value) {
            \$this->raw('null');
        } elseif (\\is_bool(\$value)) {
            \$this->raw(\$value ? 'true' : 'false');
        } elseif (\\is_array(\$value)) {
            \$this->raw('array(');
            \$first = true;
            foreach (\$value as \$key => \$v) {
                if (!\$first) {
                    \$this->raw(', ');
                }
                \$first = false;
                \$this->repr(\$key);
                \$this->raw(' => ');
                \$this->repr(\$v);
            }
            \$this->raw(')');
        } else {
            \$this->string(\$value);
        }

        return \$this;
    }

    /**
     * @return \$this
     */
    public function addDebugInfo(Node \$node)
    {
        if (\$node->getTemplateLine() != \$this->lastLine) {
            \$this->write(sprintf(\"// line %d\\n\", \$node->getTemplateLine()));

            \$this->sourceLine += substr_count(\$this->source, \"\\n\", \$this->sourceOffset);
            \$this->sourceOffset = \\strlen(\$this->source);
            \$this->debugInfo[\$this->sourceLine] = \$node->getTemplateLine();

            \$this->lastLine = \$node->getTemplateLine();
        }

        return \$this;
    }

    public function getDebugInfo(): array
    {
        ksort(\$this->debugInfo);

        return \$this->debugInfo;
    }

    /**
     * @return \$this
     */
    public function indent(int \$step = 1)
    {
        \$this->indentation += \$step;

        return \$this;
    }

    /**
     * @return \$this
     *
     * @throws \\LogicException When trying to outdent too much so the indentation would become negative
     */
    public function outdent(int \$step = 1)
    {
        // can't outdent by more steps than the current indentation level
        if (\$this->indentation < \$step) {
            throw new \\LogicException('Unable to call outdent() as the indentation would become negative.');
        }

        \$this->indentation -= \$step;

        return \$this;
    }

    public function getVarName(): string
    {
        return sprintf('__internal_%s', hash('sha256', __METHOD__.\$this->varNameSalt++));
    }
}
", "@app/vendor/twig/twig/src/Compiler.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Compiler.php");
    }
}
