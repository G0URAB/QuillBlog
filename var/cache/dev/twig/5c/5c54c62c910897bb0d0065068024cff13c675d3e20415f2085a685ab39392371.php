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

/* @app/vendor/nikic/php-parser/grammar/rebuildParsers.php */
class __TwigTemplate_6ae0e6134dac1a44f95bed002db0c1e9d983dca4ff8b46e378b4f46a5b94bfd2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/grammar/rebuildParsers.php"));

        // line 1
        echo "<?php

\$grammarFileToName = [
    __DIR__ . '/php5.y' => 'Php5',
    __DIR__ . '/php7.y' => 'Php7',
];

\$tokensFile     = __DIR__ . '/tokens.y';
\$tokensTemplate = __DIR__ . '/tokens.template';
\$skeletonFile   = __DIR__ . '/parser.template';
\$tmpGrammarFile = __DIR__ . '/tmp_parser.phpy';
\$tmpResultFile  = __DIR__ . '/tmp_parser.php';
\$resultDir = __DIR__ . '/../lib/PhpParser/Parser';
\$tokensResultsFile = \$resultDir . '/Tokens.php';

\$kmyacc = getenv('KMYACC');
if (!\$kmyacc) {
    // Use phpyacc from dev dependencies by default.
    \$kmyacc = PHP_BINARY . ' ' . __DIR__ . '/../vendor/bin/phpyacc';
}

\$options = array_flip(\$argv);
\$optionDebug = isset(\$options['--debug']);
\$optionKeepTmpGrammar = isset(\$options['--keep-tmp-grammar']);

///////////////////////////////
/// Utility regex constants ///
///////////////////////////////

const LIB = '(?(DEFINE)
    (?<singleQuotedString>\\'[^\\\\\\\\\\']*+(?:\\\\\\\\.[^\\\\\\\\\\']*+)*+\\')
    (?<doubleQuotedString>\"[^\\\\\\\\\"]*+(?:\\\\\\\\.[^\\\\\\\\\"]*+)*+\")
    (?<string>(?&singleQuotedString)|(?&doubleQuotedString))
    (?<comment>/\\*[^*]*+(?:\\*(?!/)[^*]*+)*+\\*/)
    (?<code>\\{[^\\'\"/{}]*+(?:(?:(?&string)|(?&comment)|(?&code)|/)[^\\'\"/{}]*+)*+})
)';

const PARAMS = '\\[(?<params>[^[\\]]*+(?:\\[(?&params)\\][^[\\]]*+)*+)\\]';
const ARGS   = '\\((?<args>[^()]*+(?:\\((?&args)\\)[^()]*+)*+)\\)';

///////////////////
/// Main script ///
///////////////////

\$tokens = file_get_contents(\$tokensFile);

foreach (\$grammarFileToName as \$grammarFile => \$name) {
    echo \"Building temporary \$name grammar file.\\n\";

    \$grammarCode = file_get_contents(\$grammarFile);
    \$grammarCode = str_replace('%tokens', \$tokens, \$grammarCode);

    \$grammarCode = resolveNodes(\$grammarCode);
    \$grammarCode = resolveMacros(\$grammarCode);
    \$grammarCode = resolveStackAccess(\$grammarCode);

    file_put_contents(\$tmpGrammarFile, \$grammarCode);

    \$additionalArgs = \$optionDebug ? '-t -v' : '';

    echo \"Building \$name parser.\\n\";
    \$output = execCmd(\"\$kmyacc \$additionalArgs -m \$skeletonFile -p \$name \$tmpGrammarFile\");

    \$resultCode = file_get_contents(\$tmpResultFile);
    \$resultCode = removeTrailingWhitespace(\$resultCode);

    ensureDirExists(\$resultDir);
    file_put_contents(\"\$resultDir/\$name.php\", \$resultCode);
    unlink(\$tmpResultFile);

    echo \"Building token definition.\\n\";
    \$output = execCmd(\"\$kmyacc -m \$tokensTemplate \$tmpGrammarFile\");
    rename(\$tmpResultFile, \$tokensResultsFile);

    if (!\$optionKeepTmpGrammar) {
        unlink(\$tmpGrammarFile);
    }
}

///////////////////////////////
/// Preprocessing functions ///
///////////////////////////////

function resolveNodes(\$code) {
    return preg_replace_callback(
        '~\\b(?<name>[A-Z][a-zA-Z_\\\\\\\\]++)\\s*' . PARAMS . '~',
        function(\$matches) {
            // recurse
            \$matches['params'] = resolveNodes(\$matches['params']);

            \$params = magicSplit(
                '(?:' . PARAMS . '|' . ARGS . ')(*SKIP)(*FAIL)|,',
                \$matches['params']
            );

            \$paramCode = '';
            foreach (\$params as \$param) {
                \$paramCode .= \$param . ', ';
            }

            return 'new ' . \$matches['name'] . '(' . \$paramCode . 'attributes())';
        },
        \$code
    );
}

function resolveMacros(\$code) {
    return preg_replace_callback(
        '~\\b(?<!::|->)(?!array\\()(?<name>[a-z][A-Za-z]++)' . ARGS . '~',
        function(\$matches) {
            // recurse
            \$matches['args'] = resolveMacros(\$matches['args']);

            \$name = \$matches['name'];
            \$args = magicSplit(
                '(?:' . PARAMS . '|' . ARGS . ')(*SKIP)(*FAIL)|,',
                \$matches['args']
            );

            if ('attributes' == \$name) {
                assertArgs(0, \$args, \$name);
                return '\$this->startAttributeStack[#1] + \$this->endAttributes';
            }

            if ('stackAttributes' == \$name) {
                assertArgs(1, \$args, \$name);
                return '\$this->startAttributeStack[' . \$args[0] . ']'
                     . ' + \$this->endAttributeStack[' . \$args[0] . ']';
            }

            if ('init' == \$name) {
                return '\$\$ = array(' . implode(', ', \$args) . ')';
            }

            if ('push' == \$name) {
                assertArgs(2, \$args, \$name);

                return \$args[0] . '[] = ' . \$args[1] . '; \$\$ = ' . \$args[0];
            }

            if ('pushNormalizing' == \$name) {
                assertArgs(2, \$args, \$name);

                return 'if (is_array(' . \$args[1] . ')) { \$\$ = array_merge(' . \$args[0] . ', ' . \$args[1] . '); }'
                     . ' else { ' . \$args[0] . '[] = ' . \$args[1] . '; \$\$ = ' . \$args[0] . '; }';
            }

            if ('toArray' == \$name) {
                assertArgs(1, \$args, \$name);

                return 'is_array(' . \$args[0] . ') ? ' . \$args[0] . ' : array(' . \$args[0] . ')';
            }

            if ('parseVar' == \$name) {
                assertArgs(1, \$args, \$name);

                return 'substr(' . \$args[0] . ', 1)';
            }

            if ('parseEncapsed' == \$name) {
                assertArgs(3, \$args, \$name);

                return 'foreach (' . \$args[0] . ' as \$s) { if (\$s instanceof Node\\Scalar\\EncapsedStringPart) {'
                     . ' \$s->value = Node\\Scalar\\String_::parseEscapeSequences(\$s->value, ' . \$args[1] . ', ' . \$args[2] . '); } }';
            }

            if ('makeNop' == \$name) {
                assertArgs(3, \$args, \$name);

                return '\$startAttributes = ' . \$args[1] . ';'
                . ' if (isset(\$startAttributes[\\'comments\\']))'
                . ' { ' . \$args[0] . ' = new Stmt\\Nop(\$startAttributes + ' . \$args[2] . '); }'
                . ' else { ' . \$args[0] . ' = null; }';
            }

            if ('makeZeroLengthNop' == \$name) {
                assertArgs(2, \$args, \$name);

                return '\$startAttributes = ' . \$args[1] . ';'
                    . ' if (isset(\$startAttributes[\\'comments\\']))'
                    . ' { ' . \$args[0] . ' = new Stmt\\Nop(\$this->createZeroLengthAttributes(\$startAttributes)); }'
                    . ' else { ' . \$args[0] . ' = null; }';
            }

            if ('strKind' == \$name) {
                assertArgs(1, \$args, \$name);

                return '(' . \$args[0] . '[0] === \"\\'\" || (' . \$args[0] . '[1] === \"\\'\" && '
                     . '(' . \$args[0] . '[0] === \\'b\\' || ' . \$args[0] . '[0] === \\'B\\')) '
                     . '? Scalar\\String_::KIND_SINGLE_QUOTED : Scalar\\String_::KIND_DOUBLE_QUOTED)';
            }

            if ('prependLeadingComments' == \$name) {
                assertArgs(1, \$args, \$name);

                return '\$attrs = \$this->startAttributeStack[#1]; \$stmts = ' . \$args[0] . '; '
                . 'if (!empty(\$attrs[\\'comments\\'])) {'
                . '\$stmts[0]->setAttribute(\\'comments\\', '
                . 'array_merge(\$attrs[\\'comments\\'], \$stmts[0]->getAttribute(\\'comments\\', []))); }';
            }

            return \$matches[0];
        },
        \$code
    );
}

function assertArgs(\$num, \$args, \$name) {
    if (\$num != count(\$args)) {
        die('Wrong argument count for ' . \$name . '().');
    }
}

function resolveStackAccess(\$code) {
    \$code = preg_replace('/\\\$\\d+/', '\$this->semStack[\$0]', \$code);
    \$code = preg_replace('/#(\\d+)/', '\$\$1', \$code);
    return \$code;
}

function removeTrailingWhitespace(\$code) {
    \$lines = explode(\"\\n\", \$code);
    \$lines = array_map('rtrim', \$lines);
    return implode(\"\\n\", \$lines);
}

function ensureDirExists(\$dir) {
    if (!is_dir(\$dir)) {
        mkdir(\$dir, 0777, true);
    }
}

function execCmd(\$cmd) {
    \$output = trim(shell_exec(\"\$cmd 2>&1\"));
    if (\$output !== \"\") {
        echo \"> \" . \$cmd . \"\\n\";
        echo \$output;
    }
    return \$output;
}

//////////////////////////////
/// Regex helper functions ///
//////////////////////////////

function regex(\$regex) {
    return '~' . LIB . '(?:' . str_replace('~', '\\~', \$regex) . ')~';
}

function magicSplit(\$regex, \$string) {
    \$pieces = preg_split(regex('(?:(?&string)|(?&comment)|(?&code))(*SKIP)(*FAIL)|' . \$regex), \$string);

    foreach (\$pieces as &\$piece) {
        \$piece = trim(\$piece);
    }

    if (\$pieces === ['']) {
        return [];
    }

    return \$pieces;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/grammar/rebuildParsers.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

\$grammarFileToName = [
    __DIR__ . '/php5.y' => 'Php5',
    __DIR__ . '/php7.y' => 'Php7',
];

\$tokensFile     = __DIR__ . '/tokens.y';
\$tokensTemplate = __DIR__ . '/tokens.template';
\$skeletonFile   = __DIR__ . '/parser.template';
\$tmpGrammarFile = __DIR__ . '/tmp_parser.phpy';
\$tmpResultFile  = __DIR__ . '/tmp_parser.php';
\$resultDir = __DIR__ . '/../lib/PhpParser/Parser';
\$tokensResultsFile = \$resultDir . '/Tokens.php';

\$kmyacc = getenv('KMYACC');
if (!\$kmyacc) {
    // Use phpyacc from dev dependencies by default.
    \$kmyacc = PHP_BINARY . ' ' . __DIR__ . '/../vendor/bin/phpyacc';
}

\$options = array_flip(\$argv);
\$optionDebug = isset(\$options['--debug']);
\$optionKeepTmpGrammar = isset(\$options['--keep-tmp-grammar']);

///////////////////////////////
/// Utility regex constants ///
///////////////////////////////

const LIB = '(?(DEFINE)
    (?<singleQuotedString>\\'[^\\\\\\\\\\']*+(?:\\\\\\\\.[^\\\\\\\\\\']*+)*+\\')
    (?<doubleQuotedString>\"[^\\\\\\\\\"]*+(?:\\\\\\\\.[^\\\\\\\\\"]*+)*+\")
    (?<string>(?&singleQuotedString)|(?&doubleQuotedString))
    (?<comment>/\\*[^*]*+(?:\\*(?!/)[^*]*+)*+\\*/)
    (?<code>\\{[^\\'\"/{}]*+(?:(?:(?&string)|(?&comment)|(?&code)|/)[^\\'\"/{}]*+)*+})
)';

const PARAMS = '\\[(?<params>[^[\\]]*+(?:\\[(?&params)\\][^[\\]]*+)*+)\\]';
const ARGS   = '\\((?<args>[^()]*+(?:\\((?&args)\\)[^()]*+)*+)\\)';

///////////////////
/// Main script ///
///////////////////

\$tokens = file_get_contents(\$tokensFile);

foreach (\$grammarFileToName as \$grammarFile => \$name) {
    echo \"Building temporary \$name grammar file.\\n\";

    \$grammarCode = file_get_contents(\$grammarFile);
    \$grammarCode = str_replace('%tokens', \$tokens, \$grammarCode);

    \$grammarCode = resolveNodes(\$grammarCode);
    \$grammarCode = resolveMacros(\$grammarCode);
    \$grammarCode = resolveStackAccess(\$grammarCode);

    file_put_contents(\$tmpGrammarFile, \$grammarCode);

    \$additionalArgs = \$optionDebug ? '-t -v' : '';

    echo \"Building \$name parser.\\n\";
    \$output = execCmd(\"\$kmyacc \$additionalArgs -m \$skeletonFile -p \$name \$tmpGrammarFile\");

    \$resultCode = file_get_contents(\$tmpResultFile);
    \$resultCode = removeTrailingWhitespace(\$resultCode);

    ensureDirExists(\$resultDir);
    file_put_contents(\"\$resultDir/\$name.php\", \$resultCode);
    unlink(\$tmpResultFile);

    echo \"Building token definition.\\n\";
    \$output = execCmd(\"\$kmyacc -m \$tokensTemplate \$tmpGrammarFile\");
    rename(\$tmpResultFile, \$tokensResultsFile);

    if (!\$optionKeepTmpGrammar) {
        unlink(\$tmpGrammarFile);
    }
}

///////////////////////////////
/// Preprocessing functions ///
///////////////////////////////

function resolveNodes(\$code) {
    return preg_replace_callback(
        '~\\b(?<name>[A-Z][a-zA-Z_\\\\\\\\]++)\\s*' . PARAMS . '~',
        function(\$matches) {
            // recurse
            \$matches['params'] = resolveNodes(\$matches['params']);

            \$params = magicSplit(
                '(?:' . PARAMS . '|' . ARGS . ')(*SKIP)(*FAIL)|,',
                \$matches['params']
            );

            \$paramCode = '';
            foreach (\$params as \$param) {
                \$paramCode .= \$param . ', ';
            }

            return 'new ' . \$matches['name'] . '(' . \$paramCode . 'attributes())';
        },
        \$code
    );
}

function resolveMacros(\$code) {
    return preg_replace_callback(
        '~\\b(?<!::|->)(?!array\\()(?<name>[a-z][A-Za-z]++)' . ARGS . '~',
        function(\$matches) {
            // recurse
            \$matches['args'] = resolveMacros(\$matches['args']);

            \$name = \$matches['name'];
            \$args = magicSplit(
                '(?:' . PARAMS . '|' . ARGS . ')(*SKIP)(*FAIL)|,',
                \$matches['args']
            );

            if ('attributes' == \$name) {
                assertArgs(0, \$args, \$name);
                return '\$this->startAttributeStack[#1] + \$this->endAttributes';
            }

            if ('stackAttributes' == \$name) {
                assertArgs(1, \$args, \$name);
                return '\$this->startAttributeStack[' . \$args[0] . ']'
                     . ' + \$this->endAttributeStack[' . \$args[0] . ']';
            }

            if ('init' == \$name) {
                return '\$\$ = array(' . implode(', ', \$args) . ')';
            }

            if ('push' == \$name) {
                assertArgs(2, \$args, \$name);

                return \$args[0] . '[] = ' . \$args[1] . '; \$\$ = ' . \$args[0];
            }

            if ('pushNormalizing' == \$name) {
                assertArgs(2, \$args, \$name);

                return 'if (is_array(' . \$args[1] . ')) { \$\$ = array_merge(' . \$args[0] . ', ' . \$args[1] . '); }'
                     . ' else { ' . \$args[0] . '[] = ' . \$args[1] . '; \$\$ = ' . \$args[0] . '; }';
            }

            if ('toArray' == \$name) {
                assertArgs(1, \$args, \$name);

                return 'is_array(' . \$args[0] . ') ? ' . \$args[0] . ' : array(' . \$args[0] . ')';
            }

            if ('parseVar' == \$name) {
                assertArgs(1, \$args, \$name);

                return 'substr(' . \$args[0] . ', 1)';
            }

            if ('parseEncapsed' == \$name) {
                assertArgs(3, \$args, \$name);

                return 'foreach (' . \$args[0] . ' as \$s) { if (\$s instanceof Node\\Scalar\\EncapsedStringPart) {'
                     . ' \$s->value = Node\\Scalar\\String_::parseEscapeSequences(\$s->value, ' . \$args[1] . ', ' . \$args[2] . '); } }';
            }

            if ('makeNop' == \$name) {
                assertArgs(3, \$args, \$name);

                return '\$startAttributes = ' . \$args[1] . ';'
                . ' if (isset(\$startAttributes[\\'comments\\']))'
                . ' { ' . \$args[0] . ' = new Stmt\\Nop(\$startAttributes + ' . \$args[2] . '); }'
                . ' else { ' . \$args[0] . ' = null; }';
            }

            if ('makeZeroLengthNop' == \$name) {
                assertArgs(2, \$args, \$name);

                return '\$startAttributes = ' . \$args[1] . ';'
                    . ' if (isset(\$startAttributes[\\'comments\\']))'
                    . ' { ' . \$args[0] . ' = new Stmt\\Nop(\$this->createZeroLengthAttributes(\$startAttributes)); }'
                    . ' else { ' . \$args[0] . ' = null; }';
            }

            if ('strKind' == \$name) {
                assertArgs(1, \$args, \$name);

                return '(' . \$args[0] . '[0] === \"\\'\" || (' . \$args[0] . '[1] === \"\\'\" && '
                     . '(' . \$args[0] . '[0] === \\'b\\' || ' . \$args[0] . '[0] === \\'B\\')) '
                     . '? Scalar\\String_::KIND_SINGLE_QUOTED : Scalar\\String_::KIND_DOUBLE_QUOTED)';
            }

            if ('prependLeadingComments' == \$name) {
                assertArgs(1, \$args, \$name);

                return '\$attrs = \$this->startAttributeStack[#1]; \$stmts = ' . \$args[0] . '; '
                . 'if (!empty(\$attrs[\\'comments\\'])) {'
                . '\$stmts[0]->setAttribute(\\'comments\\', '
                . 'array_merge(\$attrs[\\'comments\\'], \$stmts[0]->getAttribute(\\'comments\\', []))); }';
            }

            return \$matches[0];
        },
        \$code
    );
}

function assertArgs(\$num, \$args, \$name) {
    if (\$num != count(\$args)) {
        die('Wrong argument count for ' . \$name . '().');
    }
}

function resolveStackAccess(\$code) {
    \$code = preg_replace('/\\\$\\d+/', '\$this->semStack[\$0]', \$code);
    \$code = preg_replace('/#(\\d+)/', '\$\$1', \$code);
    return \$code;
}

function removeTrailingWhitespace(\$code) {
    \$lines = explode(\"\\n\", \$code);
    \$lines = array_map('rtrim', \$lines);
    return implode(\"\\n\", \$lines);
}

function ensureDirExists(\$dir) {
    if (!is_dir(\$dir)) {
        mkdir(\$dir, 0777, true);
    }
}

function execCmd(\$cmd) {
    \$output = trim(shell_exec(\"\$cmd 2>&1\"));
    if (\$output !== \"\") {
        echo \"> \" . \$cmd . \"\\n\";
        echo \$output;
    }
    return \$output;
}

//////////////////////////////
/// Regex helper functions ///
//////////////////////////////

function regex(\$regex) {
    return '~' . LIB . '(?:' . str_replace('~', '\\~', \$regex) . ')~';
}

function magicSplit(\$regex, \$string) {
    \$pieces = preg_split(regex('(?:(?&string)|(?&comment)|(?&code))(*SKIP)(*FAIL)|' . \$regex), \$string);

    foreach (\$pieces as &\$piece) {
        \$piece = trim(\$piece);
    }

    if (\$pieces === ['']) {
        return [];
    }

    return \$pieces;
}
", "@app/vendor/nikic/php-parser/grammar/rebuildParsers.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\grammar\\rebuildParsers.php");
    }
}
