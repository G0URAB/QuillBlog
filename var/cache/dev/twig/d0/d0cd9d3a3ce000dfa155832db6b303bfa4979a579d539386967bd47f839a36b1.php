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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Parser/Multiple.php */
class __TwigTemplate_bc065efb61187c01d6a1aef64bfa6b586f7c3a77014e25d8ad6fef284188d0be extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Parser/Multiple.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Parser;

use PhpParser\\Error;
use PhpParser\\ErrorHandler;
use PhpParser\\Parser;

class Multiple implements Parser
{
    /** @var Parser[] List of parsers to try, in order of preference */
    private \$parsers;

    /**
     * Create a parser which will try multiple parsers in an order of preference.
     *
     * Parsers will be invoked in the order they're provided to the constructor. If one of the
     * parsers runs without throwing, it's output is returned. Otherwise the exception that the
     * first parser generated is thrown.
     *
     * @param Parser[] \$parsers
     */
    public function __construct(array \$parsers) {
        \$this->parsers = \$parsers;
    }

    public function parse(string \$code, ErrorHandler \$errorHandler = null) {
        if (null === \$errorHandler) {
            \$errorHandler = new ErrorHandler\\Throwing;
        }

        list(\$firstStmts, \$firstError) = \$this->tryParse(\$this->parsers[0], \$errorHandler, \$code);
        if (\$firstError === null) {
            return \$firstStmts;
        }

        for (\$i = 1, \$c = count(\$this->parsers); \$i < \$c; ++\$i) {
            list(\$stmts, \$error) = \$this->tryParse(\$this->parsers[\$i], \$errorHandler, \$code);
            if (\$error === null) {
                return \$stmts;
            }
        }

        throw \$firstError;
    }

    private function tryParse(Parser \$parser, ErrorHandler \$errorHandler, \$code) {
        \$stmts = null;
        \$error = null;
        try {
            \$stmts = \$parser->parse(\$code, \$errorHandler);
        } catch (Error \$error) {}
        return [\$stmts, \$error];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Parser/Multiple.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Parser;

use PhpParser\\Error;
use PhpParser\\ErrorHandler;
use PhpParser\\Parser;

class Multiple implements Parser
{
    /** @var Parser[] List of parsers to try, in order of preference */
    private \$parsers;

    /**
     * Create a parser which will try multiple parsers in an order of preference.
     *
     * Parsers will be invoked in the order they're provided to the constructor. If one of the
     * parsers runs without throwing, it's output is returned. Otherwise the exception that the
     * first parser generated is thrown.
     *
     * @param Parser[] \$parsers
     */
    public function __construct(array \$parsers) {
        \$this->parsers = \$parsers;
    }

    public function parse(string \$code, ErrorHandler \$errorHandler = null) {
        if (null === \$errorHandler) {
            \$errorHandler = new ErrorHandler\\Throwing;
        }

        list(\$firstStmts, \$firstError) = \$this->tryParse(\$this->parsers[0], \$errorHandler, \$code);
        if (\$firstError === null) {
            return \$firstStmts;
        }

        for (\$i = 1, \$c = count(\$this->parsers); \$i < \$c; ++\$i) {
            list(\$stmts, \$error) = \$this->tryParse(\$this->parsers[\$i], \$errorHandler, \$code);
            if (\$error === null) {
                return \$stmts;
            }
        }

        throw \$firstError;
    }

    private function tryParse(Parser \$parser, ErrorHandler \$errorHandler, \$code) {
        \$stmts = null;
        \$error = null;
        try {
            \$stmts = \$parser->parse(\$code, \$errorHandler);
        } catch (Error \$error) {}
        return [\$stmts, \$error];
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Parser/Multiple.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Parser\\Multiple.php");
    }
}
