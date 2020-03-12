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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/FnTokenEmulator.php */
class __TwigTemplate_2db5a6336d92a524cf2c38528d1961ec3aa0dd76162106f2705f2d97dfa626f0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/FnTokenEmulator.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Lexer\\TokenEmulator;

use PhpParser\\Lexer\\Emulative;

final class FnTokenEmulator implements TokenEmulatorInterface
{
    public function isEmulationNeeded(string \$code) : bool
    {
        // skip version where this is supported
        if (version_compare(\\PHP_VERSION, Emulative::PHP_7_4, '>=')) {
            return false;
        }

        return strpos(\$code, 'fn') !== false;
    }

    public function emulate(string \$code, array \$tokens): array
    {
        // We need to manually iterate and manage a count because we'll change
        // the tokens array on the way
        foreach (\$tokens as \$i => \$token) {
            if (\$token[0] === T_STRING && \$token[1] === 'fn') {
                \$previousNonSpaceToken = \$this->getPreviousNonSpaceToken(\$tokens, \$i);
                if (\$previousNonSpaceToken !== null && \$previousNonSpaceToken[0] === T_OBJECT_OPERATOR) {
                    continue;
                }

                \$tokens[\$i][0] = Emulative::T_FN;
            }
        }

        return \$tokens;
    }

    /**
     * @param mixed[] \$tokens
     * @return mixed[]|null
     */
    private function getPreviousNonSpaceToken(array \$tokens, int \$start)
    {
        for (\$i = \$start - 1; \$i >= 0; --\$i) {
            if (\$tokens[\$i][0] === T_WHITESPACE) {
                continue;
            }

            return \$tokens[\$i];
        }

        return null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/FnTokenEmulator.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Lexer\\TokenEmulator;

use PhpParser\\Lexer\\Emulative;

final class FnTokenEmulator implements TokenEmulatorInterface
{
    public function isEmulationNeeded(string \$code) : bool
    {
        // skip version where this is supported
        if (version_compare(\\PHP_VERSION, Emulative::PHP_7_4, '>=')) {
            return false;
        }

        return strpos(\$code, 'fn') !== false;
    }

    public function emulate(string \$code, array \$tokens): array
    {
        // We need to manually iterate and manage a count because we'll change
        // the tokens array on the way
        foreach (\$tokens as \$i => \$token) {
            if (\$token[0] === T_STRING && \$token[1] === 'fn') {
                \$previousNonSpaceToken = \$this->getPreviousNonSpaceToken(\$tokens, \$i);
                if (\$previousNonSpaceToken !== null && \$previousNonSpaceToken[0] === T_OBJECT_OPERATOR) {
                    continue;
                }

                \$tokens[\$i][0] = Emulative::T_FN;
            }
        }

        return \$tokens;
    }

    /**
     * @param mixed[] \$tokens
     * @return mixed[]|null
     */
    private function getPreviousNonSpaceToken(array \$tokens, int \$start)
    {
        for (\$i = \$start - 1; \$i >= 0; --\$i) {
            if (\$tokens[\$i][0] === T_WHITESPACE) {
                continue;
            }

            return \$tokens[\$i];
        }

        return null;
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/FnTokenEmulator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Lexer\\TokenEmulator\\FnTokenEmulator.php");
    }
}
