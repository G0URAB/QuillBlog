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

/* @app/vendor/symfony/console/Output/OutputInterface.php */
class __TwigTemplate_6b4767f34e614b3a2b88ade6460b646f94003367c98fb509f8915c8ca87d2a99 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Output/OutputInterface.php"));

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

namespace Symfony\\Component\\Console\\Output;

use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;

/**
 * OutputInterface is the interface implemented by all Output classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface OutputInterface
{
    const VERBOSITY_QUIET = 16;
    const VERBOSITY_NORMAL = 32;
    const VERBOSITY_VERBOSE = 64;
    const VERBOSITY_VERY_VERBOSE = 128;
    const VERBOSITY_DEBUG = 256;

    const OUTPUT_NORMAL = 1;
    const OUTPUT_RAW = 2;
    const OUTPUT_PLAIN = 4;

    /**
     * Writes a message to the output.
     *
     * @param string|iterable \$messages The message as an iterable of strings or a single string
     * @param bool            \$newline  Whether to add a newline
     * @param int             \$options  A bitmask of options (one of the OUTPUT or VERBOSITY constants), 0 is considered the same as self::OUTPUT_NORMAL | self::VERBOSITY_NORMAL
     */
    public function write(\$messages, bool \$newline = false, int \$options = 0);

    /**
     * Writes a message to the output and adds a newline at the end.
     *
     * @param string|iterable \$messages The message as an iterable of strings or a single string
     * @param int             \$options  A bitmask of options (one of the OUTPUT or VERBOSITY constants), 0 is considered the same as self::OUTPUT_NORMAL | self::VERBOSITY_NORMAL
     */
    public function writeln(\$messages, int \$options = 0);

    /**
     * Sets the verbosity of the output.
     */
    public function setVerbosity(int \$level);

    /**
     * Gets the current verbosity of the output.
     *
     * @return int The current level of verbosity (one of the VERBOSITY constants)
     */
    public function getVerbosity();

    /**
     * Returns whether verbosity is quiet (-q).
     *
     * @return bool true if verbosity is set to VERBOSITY_QUIET, false otherwise
     */
    public function isQuiet();

    /**
     * Returns whether verbosity is verbose (-v).
     *
     * @return bool true if verbosity is set to VERBOSITY_VERBOSE, false otherwise
     */
    public function isVerbose();

    /**
     * Returns whether verbosity is very verbose (-vv).
     *
     * @return bool true if verbosity is set to VERBOSITY_VERY_VERBOSE, false otherwise
     */
    public function isVeryVerbose();

    /**
     * Returns whether verbosity is debug (-vvv).
     *
     * @return bool true if verbosity is set to VERBOSITY_DEBUG, false otherwise
     */
    public function isDebug();

    /**
     * Sets the decorated flag.
     */
    public function setDecorated(bool \$decorated);

    /**
     * Gets the decorated flag.
     *
     * @return bool true if the output will decorate messages, false otherwise
     */
    public function isDecorated();

    public function setFormatter(OutputFormatterInterface \$formatter);

    /**
     * Returns current output formatter instance.
     *
     * @return OutputFormatterInterface
     */
    public function getFormatter();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Output/OutputInterface.php";
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

namespace Symfony\\Component\\Console\\Output;

use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;

/**
 * OutputInterface is the interface implemented by all Output classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface OutputInterface
{
    const VERBOSITY_QUIET = 16;
    const VERBOSITY_NORMAL = 32;
    const VERBOSITY_VERBOSE = 64;
    const VERBOSITY_VERY_VERBOSE = 128;
    const VERBOSITY_DEBUG = 256;

    const OUTPUT_NORMAL = 1;
    const OUTPUT_RAW = 2;
    const OUTPUT_PLAIN = 4;

    /**
     * Writes a message to the output.
     *
     * @param string|iterable \$messages The message as an iterable of strings or a single string
     * @param bool            \$newline  Whether to add a newline
     * @param int             \$options  A bitmask of options (one of the OUTPUT or VERBOSITY constants), 0 is considered the same as self::OUTPUT_NORMAL | self::VERBOSITY_NORMAL
     */
    public function write(\$messages, bool \$newline = false, int \$options = 0);

    /**
     * Writes a message to the output and adds a newline at the end.
     *
     * @param string|iterable \$messages The message as an iterable of strings or a single string
     * @param int             \$options  A bitmask of options (one of the OUTPUT or VERBOSITY constants), 0 is considered the same as self::OUTPUT_NORMAL | self::VERBOSITY_NORMAL
     */
    public function writeln(\$messages, int \$options = 0);

    /**
     * Sets the verbosity of the output.
     */
    public function setVerbosity(int \$level);

    /**
     * Gets the current verbosity of the output.
     *
     * @return int The current level of verbosity (one of the VERBOSITY constants)
     */
    public function getVerbosity();

    /**
     * Returns whether verbosity is quiet (-q).
     *
     * @return bool true if verbosity is set to VERBOSITY_QUIET, false otherwise
     */
    public function isQuiet();

    /**
     * Returns whether verbosity is verbose (-v).
     *
     * @return bool true if verbosity is set to VERBOSITY_VERBOSE, false otherwise
     */
    public function isVerbose();

    /**
     * Returns whether verbosity is very verbose (-vv).
     *
     * @return bool true if verbosity is set to VERBOSITY_VERY_VERBOSE, false otherwise
     */
    public function isVeryVerbose();

    /**
     * Returns whether verbosity is debug (-vvv).
     *
     * @return bool true if verbosity is set to VERBOSITY_DEBUG, false otherwise
     */
    public function isDebug();

    /**
     * Sets the decorated flag.
     */
    public function setDecorated(bool \$decorated);

    /**
     * Gets the decorated flag.
     *
     * @return bool true if the output will decorate messages, false otherwise
     */
    public function isDecorated();

    public function setFormatter(OutputFormatterInterface \$formatter);

    /**
     * Returns current output formatter instance.
     *
     * @return OutputFormatterInterface
     */
    public function getFormatter();
}
", "@app/vendor/symfony/console/Output/OutputInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Output\\OutputInterface.php");
    }
}
