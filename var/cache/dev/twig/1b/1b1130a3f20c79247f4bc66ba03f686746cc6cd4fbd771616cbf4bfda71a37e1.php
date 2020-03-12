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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/TokenEmulatorInterface.php */
class __TwigTemplate_76a2ff3c92d3a1afb814c186fd08ca6498c422b1ff96bdea2c865198b5826c44 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/TokenEmulatorInterface.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Lexer\\TokenEmulator;

/** @internal */
interface TokenEmulatorInterface
{
    public function isEmulationNeeded(string \$code): bool;

    /**
     * @return array Modified Tokens
     */
    public function emulate(string \$code, array \$tokens): array;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/TokenEmulatorInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Lexer\\TokenEmulator;

/** @internal */
interface TokenEmulatorInterface
{
    public function isEmulationNeeded(string \$code): bool;

    /**
     * @return array Modified Tokens
     */
    public function emulate(string \$code, array \$tokens): array;
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Lexer/TokenEmulator/TokenEmulatorInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Lexer\\TokenEmulator\\TokenEmulatorInterface.php");
    }
}
