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

/* @app/vendor/symfony/console/Tester/CommandTester.php */
class __TwigTemplate_4816bed1f39165a966b0aa74cc4235942b7a8a0d78d938cb99a60f369c83d3da extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Tester/CommandTester.php"));

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

namespace Symfony\\Component\\Console\\Tester;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\ArrayInput;

/**
 * Eases the testing of console commands.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class CommandTester
{
    use TesterTrait;

    private \$command;
    private \$input;
    private \$statusCode;

    public function __construct(Command \$command)
    {
        \$this->command = \$command;
    }

    /**
     * Executes the command.
     *
     * Available execution options:
     *
     *  * interactive:               Sets the input interactive flag
     *  * decorated:                 Sets the output decorated flag
     *  * verbosity:                 Sets the output verbosity flag
     *  * capture_stderr_separately: Make output of stdOut and stdErr separately available
     *
     * @param array \$input   An array of command arguments and options
     * @param array \$options An array of execution options
     *
     * @return int The command exit code
     */
    public function execute(array \$input, array \$options = [])
    {
        // set the command name automatically if the application requires
        // this argument and no command name was passed
        if (!isset(\$input['command'])
            && (null !== \$application = \$this->command->getApplication())
            && \$application->getDefinition()->hasArgument('command')
        ) {
            \$input = array_merge(['command' => \$this->command->getName()], \$input);
        }

        \$this->input = new ArrayInput(\$input);
        // Use an in-memory input stream even if no inputs are set so that QuestionHelper::ask() does not rely on the blocking STDIN.
        \$this->input->setStream(self::createStream(\$this->inputs));

        if (isset(\$options['interactive'])) {
            \$this->input->setInteractive(\$options['interactive']);
        }

        if (!isset(\$options['decorated'])) {
            \$options['decorated'] = false;
        }

        \$this->initOutput(\$options);

        return \$this->statusCode = \$this->command->run(\$this->input, \$this->output);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Tester/CommandTester.php";
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

namespace Symfony\\Component\\Console\\Tester;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\ArrayInput;

/**
 * Eases the testing of console commands.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class CommandTester
{
    use TesterTrait;

    private \$command;
    private \$input;
    private \$statusCode;

    public function __construct(Command \$command)
    {
        \$this->command = \$command;
    }

    /**
     * Executes the command.
     *
     * Available execution options:
     *
     *  * interactive:               Sets the input interactive flag
     *  * decorated:                 Sets the output decorated flag
     *  * verbosity:                 Sets the output verbosity flag
     *  * capture_stderr_separately: Make output of stdOut and stdErr separately available
     *
     * @param array \$input   An array of command arguments and options
     * @param array \$options An array of execution options
     *
     * @return int The command exit code
     */
    public function execute(array \$input, array \$options = [])
    {
        // set the command name automatically if the application requires
        // this argument and no command name was passed
        if (!isset(\$input['command'])
            && (null !== \$application = \$this->command->getApplication())
            && \$application->getDefinition()->hasArgument('command')
        ) {
            \$input = array_merge(['command' => \$this->command->getName()], \$input);
        }

        \$this->input = new ArrayInput(\$input);
        // Use an in-memory input stream even if no inputs are set so that QuestionHelper::ask() does not rely on the blocking STDIN.
        \$this->input->setStream(self::createStream(\$this->inputs));

        if (isset(\$options['interactive'])) {
            \$this->input->setInteractive(\$options['interactive']);
        }

        if (!isset(\$options['decorated'])) {
            \$options['decorated'] = false;
        }

        \$this->initOutput(\$options);

        return \$this->statusCode = \$this->command->run(\$this->input, \$this->output);
    }
}
", "@app/vendor/symfony/console/Tester/CommandTester.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Tester\\CommandTester.php");
    }
}
