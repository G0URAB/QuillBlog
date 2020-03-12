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

/* @app/vendor/symfony/console/Style/OutputStyle.php */
class __TwigTemplate_c2f5cff39e3e8a25397a18cd2121b755ca5050a9db09a38a7c89a68cdea0c216 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Style/OutputStyle.php"));

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

use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Decorates output to add console style guide helpers.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
abstract class OutputStyle implements OutputInterface, StyleInterface
{
    private \$output;

    public function __construct(OutputInterface \$output)
    {
        \$this->output = \$output;
    }

    /**
     * {@inheritdoc}
     */
    public function newLine(int \$count = 1)
    {
        \$this->output->write(str_repeat(PHP_EOL, \$count));
    }

    /**
     * @return ProgressBar
     */
    public function createProgressBar(int \$max = 0)
    {
        return new ProgressBar(\$this->output, \$max);
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$messages, bool \$newline = false, int \$type = self::OUTPUT_NORMAL)
    {
        \$this->output->write(\$messages, \$newline, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function writeln(\$messages, int \$type = self::OUTPUT_NORMAL)
    {
        \$this->output->writeln(\$messages, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function setVerbosity(int \$level)
    {
        \$this->output->setVerbosity(\$level);
    }

    /**
     * {@inheritdoc}
     */
    public function getVerbosity()
    {
        return \$this->output->getVerbosity();
    }

    /**
     * {@inheritdoc}
     */
    public function setDecorated(bool \$decorated)
    {
        \$this->output->setDecorated(\$decorated);
    }

    /**
     * {@inheritdoc}
     */
    public function isDecorated()
    {
        return \$this->output->isDecorated();
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(OutputFormatterInterface \$formatter)
    {
        \$this->output->setFormatter(\$formatter);
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatter()
    {
        return \$this->output->getFormatter();
    }

    /**
     * {@inheritdoc}
     */
    public function isQuiet()
    {
        return \$this->output->isQuiet();
    }

    /**
     * {@inheritdoc}
     */
    public function isVerbose()
    {
        return \$this->output->isVerbose();
    }

    /**
     * {@inheritdoc}
     */
    public function isVeryVerbose()
    {
        return \$this->output->isVeryVerbose();
    }

    /**
     * {@inheritdoc}
     */
    public function isDebug()
    {
        return \$this->output->isDebug();
    }

    protected function getErrorOutput()
    {
        if (!\$this->output instanceof ConsoleOutputInterface) {
            return \$this->output;
        }

        return \$this->output->getErrorOutput();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Style/OutputStyle.php";
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

use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Decorates output to add console style guide helpers.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
abstract class OutputStyle implements OutputInterface, StyleInterface
{
    private \$output;

    public function __construct(OutputInterface \$output)
    {
        \$this->output = \$output;
    }

    /**
     * {@inheritdoc}
     */
    public function newLine(int \$count = 1)
    {
        \$this->output->write(str_repeat(PHP_EOL, \$count));
    }

    /**
     * @return ProgressBar
     */
    public function createProgressBar(int \$max = 0)
    {
        return new ProgressBar(\$this->output, \$max);
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$messages, bool \$newline = false, int \$type = self::OUTPUT_NORMAL)
    {
        \$this->output->write(\$messages, \$newline, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function writeln(\$messages, int \$type = self::OUTPUT_NORMAL)
    {
        \$this->output->writeln(\$messages, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function setVerbosity(int \$level)
    {
        \$this->output->setVerbosity(\$level);
    }

    /**
     * {@inheritdoc}
     */
    public function getVerbosity()
    {
        return \$this->output->getVerbosity();
    }

    /**
     * {@inheritdoc}
     */
    public function setDecorated(bool \$decorated)
    {
        \$this->output->setDecorated(\$decorated);
    }

    /**
     * {@inheritdoc}
     */
    public function isDecorated()
    {
        return \$this->output->isDecorated();
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter(OutputFormatterInterface \$formatter)
    {
        \$this->output->setFormatter(\$formatter);
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatter()
    {
        return \$this->output->getFormatter();
    }

    /**
     * {@inheritdoc}
     */
    public function isQuiet()
    {
        return \$this->output->isQuiet();
    }

    /**
     * {@inheritdoc}
     */
    public function isVerbose()
    {
        return \$this->output->isVerbose();
    }

    /**
     * {@inheritdoc}
     */
    public function isVeryVerbose()
    {
        return \$this->output->isVeryVerbose();
    }

    /**
     * {@inheritdoc}
     */
    public function isDebug()
    {
        return \$this->output->isDebug();
    }

    protected function getErrorOutput()
    {
        if (!\$this->output instanceof ConsoleOutputInterface) {
            return \$this->output;
        }

        return \$this->output->getErrorOutput();
    }
}
", "@app/vendor/symfony/console/Style/OutputStyle.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Style\\OutputStyle.php");
    }
}
