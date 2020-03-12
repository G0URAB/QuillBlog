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

/* @app/vendor/symfony/console/Style/StyleInterface.php */
class __TwigTemplate_b8b75e5d5e4239e58957d8b764881a3b45ab3f9869a6bbbb85d3f15acf62ce1d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Style/StyleInterface.php"));

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

namespace Symfony\\Component\\Console\\Style;

/**
 * Output style helpers.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
interface StyleInterface
{
    /**
     * Formats a command title.
     */
    public function title(string \$message);

    /**
     * Formats a section title.
     */
    public function section(string \$message);

    /**
     * Formats a list.
     */
    public function listing(array \$elements);

    /**
     * Formats informational text.
     *
     * @param string|array \$message
     */
    public function text(\$message);

    /**
     * Formats a success result bar.
     *
     * @param string|array \$message
     */
    public function success(\$message);

    /**
     * Formats an error result bar.
     *
     * @param string|array \$message
     */
    public function error(\$message);

    /**
     * Formats an warning result bar.
     *
     * @param string|array \$message
     */
    public function warning(\$message);

    /**
     * Formats a note admonition.
     *
     * @param string|array \$message
     */
    public function note(\$message);

    /**
     * Formats a caution admonition.
     *
     * @param string|array \$message
     */
    public function caution(\$message);

    /**
     * Formats a table.
     */
    public function table(array \$headers, array \$rows);

    /**
     * Asks a question.
     *
     * @return mixed
     */
    public function ask(string \$question, ?string \$default = null, callable \$validator = null);

    /**
     * Asks a question with the user input hidden.
     *
     * @return mixed
     */
    public function askHidden(string \$question, callable \$validator = null);

    /**
     * Asks for confirmation.
     *
     * @return bool
     */
    public function confirm(string \$question, bool \$default = true);

    /**
     * Asks a choice question.
     *
     * @param string|int|null \$default
     *
     * @return mixed
     */
    public function choice(string \$question, array \$choices, \$default = null);

    /**
     * Add newline(s).
     */
    public function newLine(int \$count = 1);

    /**
     * Starts the progress output.
     */
    public function progressStart(int \$max = 0);

    /**
     * Advances the progress output X steps.
     */
    public function progressAdvance(int \$step = 1);

    /**
     * Finishes the progress output.
     */
    public function progressFinish();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Style/StyleInterface.php";
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

namespace Symfony\\Component\\Console\\Style;

/**
 * Output style helpers.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
interface StyleInterface
{
    /**
     * Formats a command title.
     */
    public function title(string \$message);

    /**
     * Formats a section title.
     */
    public function section(string \$message);

    /**
     * Formats a list.
     */
    public function listing(array \$elements);

    /**
     * Formats informational text.
     *
     * @param string|array \$message
     */
    public function text(\$message);

    /**
     * Formats a success result bar.
     *
     * @param string|array \$message
     */
    public function success(\$message);

    /**
     * Formats an error result bar.
     *
     * @param string|array \$message
     */
    public function error(\$message);

    /**
     * Formats an warning result bar.
     *
     * @param string|array \$message
     */
    public function warning(\$message);

    /**
     * Formats a note admonition.
     *
     * @param string|array \$message
     */
    public function note(\$message);

    /**
     * Formats a caution admonition.
     *
     * @param string|array \$message
     */
    public function caution(\$message);

    /**
     * Formats a table.
     */
    public function table(array \$headers, array \$rows);

    /**
     * Asks a question.
     *
     * @return mixed
     */
    public function ask(string \$question, ?string \$default = null, callable \$validator = null);

    /**
     * Asks a question with the user input hidden.
     *
     * @return mixed
     */
    public function askHidden(string \$question, callable \$validator = null);

    /**
     * Asks for confirmation.
     *
     * @return bool
     */
    public function confirm(string \$question, bool \$default = true);

    /**
     * Asks a choice question.
     *
     * @param string|int|null \$default
     *
     * @return mixed
     */
    public function choice(string \$question, array \$choices, \$default = null);

    /**
     * Add newline(s).
     */
    public function newLine(int \$count = 1);

    /**
     * Starts the progress output.
     */
    public function progressStart(int \$max = 0);

    /**
     * Advances the progress output X steps.
     */
    public function progressAdvance(int \$step = 1);

    /**
     * Finishes the progress output.
     */
    public function progressFinish();
}
", "@app/vendor/symfony/console/Style/StyleInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Style\\StyleInterface.php");
    }
}
