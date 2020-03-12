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

/* @app/vendor/symfony/maker-bundle/src/Util/PrettyPrinter.php */
class __TwigTemplate_1a4bd6b3992ddd366f499410b54836a155389f67cfc89e905e116a7f26799cdf extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Util/PrettyPrinter.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Util;

use PhpParser\\Node\\Stmt;
use PhpParser\\PrettyPrinter\\Standard;

/**
 * @internal
 */
final class PrettyPrinter extends Standard
{
    /**
     * Overridden to fix indentation problem with tabs.
     *
     * If the original source code uses tabs, then the tokenizer
     * will see this as \"1\" indent level, and will indent new lines
     * with just 1 space. By changing 1 indent to 4, we effectively
     * \"correct\" this problem when printing.
     *
     * For code that is even further indented (e.g. 8 spaces),
     * the printer uses the first indentation (here corrected
     * from 1 space to 4) and already (without needing any other
     * changes) adds 4 spaces onto that. This is why we don't
     * also need to handle indent levels of 5, 9, etc: these
     * do not occur (at least in the code we generate);
     */
    protected function setIndentLevel(int \$level)
    {
        if (1 === \$level) {
            \$level = 4;
        }

        parent::setIndentLevel(\$level);
    }

    /**
     * Overridden to change coding standards.
     *
     * Before:
     *      public function getFoo() : string
     *
     * After
     *      public function getFoo(): string
     */
    protected function pStmt_ClassMethod(Stmt\\ClassMethod \$node)
    {
        \$classMethod = parent::pStmt_ClassMethod(\$node);

        if (\$node->returnType) {
            \$classMethod = str_replace(') :', '):', \$classMethod);
        }

        return \$classMethod;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Util/PrettyPrinter.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Util;

use PhpParser\\Node\\Stmt;
use PhpParser\\PrettyPrinter\\Standard;

/**
 * @internal
 */
final class PrettyPrinter extends Standard
{
    /**
     * Overridden to fix indentation problem with tabs.
     *
     * If the original source code uses tabs, then the tokenizer
     * will see this as \"1\" indent level, and will indent new lines
     * with just 1 space. By changing 1 indent to 4, we effectively
     * \"correct\" this problem when printing.
     *
     * For code that is even further indented (e.g. 8 spaces),
     * the printer uses the first indentation (here corrected
     * from 1 space to 4) and already (without needing any other
     * changes) adds 4 spaces onto that. This is why we don't
     * also need to handle indent levels of 5, 9, etc: these
     * do not occur (at least in the code we generate);
     */
    protected function setIndentLevel(int \$level)
    {
        if (1 === \$level) {
            \$level = 4;
        }

        parent::setIndentLevel(\$level);
    }

    /**
     * Overridden to change coding standards.
     *
     * Before:
     *      public function getFoo() : string
     *
     * After
     *      public function getFoo(): string
     */
    protected function pStmt_ClassMethod(Stmt\\ClassMethod \$node)
    {
        \$classMethod = parent::pStmt_ClassMethod(\$node);

        if (\$node->returnType) {
            \$classMethod = str_replace(') :', '):', \$classMethod);
        }

        return \$classMethod;
    }
}
", "@app/vendor/symfony/maker-bundle/src/Util/PrettyPrinter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Util\\PrettyPrinter.php");
    }
}
