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

/* @app/vendor/nikic/php-parser/lib/PhpParser/ParserFactory.php */
class __TwigTemplate_34b9daa0ca45c9bf6ef7d13d44c2c71c0d27fc00a054dffa52d96d11e4b5dd03 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/ParserFactory.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser;

class ParserFactory
{
    const PREFER_PHP7 = 1;
    const PREFER_PHP5 = 2;
    const ONLY_PHP7 = 3;
    const ONLY_PHP5 = 4;

    /**
     * Creates a Parser instance, according to the provided kind.
     *
     * @param int        \$kind  One of ::PREFER_PHP7, ::PREFER_PHP5, ::ONLY_PHP7 or ::ONLY_PHP5
     * @param Lexer|null \$lexer Lexer to use. Defaults to emulative lexer when not specified
     * @param array      \$parserOptions Parser options. See ParserAbstract::__construct() argument
     *
     * @return Parser The parser instance
     */
    public function create(int \$kind, Lexer \$lexer = null, array \$parserOptions = []) : Parser {
        if (null === \$lexer) {
            \$lexer = new Lexer\\Emulative();
        }
        switch (\$kind) {
            case self::PREFER_PHP7:
                return new Parser\\Multiple([
                    new Parser\\Php7(\$lexer, \$parserOptions), new Parser\\Php5(\$lexer, \$parserOptions)
                ]);
            case self::PREFER_PHP5:
                return new Parser\\Multiple([
                    new Parser\\Php5(\$lexer, \$parserOptions), new Parser\\Php7(\$lexer, \$parserOptions)
                ]);
            case self::ONLY_PHP7:
                return new Parser\\Php7(\$lexer, \$parserOptions);
            case self::ONLY_PHP5:
                return new Parser\\Php5(\$lexer, \$parserOptions);
            default:
                throw new \\LogicException(
                    'Kind must be one of ::PREFER_PHP7, ::PREFER_PHP5, ::ONLY_PHP7 or ::ONLY_PHP5'
                );
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/ParserFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser;

class ParserFactory
{
    const PREFER_PHP7 = 1;
    const PREFER_PHP5 = 2;
    const ONLY_PHP7 = 3;
    const ONLY_PHP5 = 4;

    /**
     * Creates a Parser instance, according to the provided kind.
     *
     * @param int        \$kind  One of ::PREFER_PHP7, ::PREFER_PHP5, ::ONLY_PHP7 or ::ONLY_PHP5
     * @param Lexer|null \$lexer Lexer to use. Defaults to emulative lexer when not specified
     * @param array      \$parserOptions Parser options. See ParserAbstract::__construct() argument
     *
     * @return Parser The parser instance
     */
    public function create(int \$kind, Lexer \$lexer = null, array \$parserOptions = []) : Parser {
        if (null === \$lexer) {
            \$lexer = new Lexer\\Emulative();
        }
        switch (\$kind) {
            case self::PREFER_PHP7:
                return new Parser\\Multiple([
                    new Parser\\Php7(\$lexer, \$parserOptions), new Parser\\Php5(\$lexer, \$parserOptions)
                ]);
            case self::PREFER_PHP5:
                return new Parser\\Multiple([
                    new Parser\\Php5(\$lexer, \$parserOptions), new Parser\\Php7(\$lexer, \$parserOptions)
                ]);
            case self::ONLY_PHP7:
                return new Parser\\Php7(\$lexer, \$parserOptions);
            case self::ONLY_PHP5:
                return new Parser\\Php5(\$lexer, \$parserOptions);
            default:
                throw new \\LogicException(
                    'Kind must be one of ::PREFER_PHP7, ::PREFER_PHP5, ::ONLY_PHP7 or ::ONLY_PHP5'
                );
        }
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/ParserFactory.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\ParserFactory.php");
    }
}
