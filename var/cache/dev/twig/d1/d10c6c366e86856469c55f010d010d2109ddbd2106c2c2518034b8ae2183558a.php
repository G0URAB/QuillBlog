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

/* @app/vendor/doctrine/common/lib/Doctrine/Common/Lexer.php */
class __TwigTemplate_f2dec11e22e655cf0e89d56fd4c2b2d65122d23d61d07f3f71dfb4eff8227efa extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/common/lib/Doctrine/Common/Lexer.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common;

use Doctrine\\Common\\Lexer\\AbstractLexer;
use function trigger_error;
use const E_USER_DEPRECATED;

@trigger_error(Lexer::class . ' is deprecated.', E_USER_DEPRECATED);

/**
 * Base class for writing simple lexers, i.e. for creating small DSLs.
 *
 * Lexer moved into its own Component Doctrine\\Common\\Lexer. This class
 * only stays for being BC.
 *
 * @since  2.0
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 *
 * @deprecated Use Doctrine\\Common\\Lexer\\AbstractLexer from doctrine/lexer package instead.
 */
abstract class Lexer extends AbstractLexer
{
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/common/lib/Doctrine/Common/Lexer.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common;

use Doctrine\\Common\\Lexer\\AbstractLexer;
use function trigger_error;
use const E_USER_DEPRECATED;

@trigger_error(Lexer::class . ' is deprecated.', E_USER_DEPRECATED);

/**
 * Base class for writing simple lexers, i.e. for creating small DSLs.
 *
 * Lexer moved into its own Component Doctrine\\Common\\Lexer. This class
 * only stays for being BC.
 *
 * @since  2.0
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 *
 * @deprecated Use Doctrine\\Common\\Lexer\\AbstractLexer from doctrine/lexer package instead.
 */
abstract class Lexer extends AbstractLexer
{
}
", "@app/vendor/doctrine/common/lib/Doctrine/Common/Lexer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Lexer.php");
    }
}
