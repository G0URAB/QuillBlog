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

/* @app/vendor/symfony/console/Event/ConsoleErrorEvent.php */
class __TwigTemplate_6f9037a2277433aa4cf2cbba133d361c488007bb1be02a1c32b0b825b526950c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Event/ConsoleErrorEvent.php"));

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

namespace Symfony\\Component\\Console\\Event;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Allows to handle throwables thrown while running a command.
 *
 * @author Wouter de Jong <wouter@wouterj.nl>
 */
final class ConsoleErrorEvent extends ConsoleEvent
{
    private \$error;
    private \$exitCode;

    public function __construct(InputInterface \$input, OutputInterface \$output, \\Throwable \$error, Command \$command = null)
    {
        parent::__construct(\$command, \$input, \$output);

        \$this->error = \$error;
    }

    public function getError(): \\Throwable
    {
        return \$this->error;
    }

    public function setError(\\Throwable \$error): void
    {
        \$this->error = \$error;
    }

    public function setExitCode(int \$exitCode): void
    {
        \$this->exitCode = \$exitCode;

        \$r = new \\ReflectionProperty(\$this->error, 'code');
        \$r->setAccessible(true);
        \$r->setValue(\$this->error, \$this->exitCode);
    }

    public function getExitCode(): int
    {
        return null !== \$this->exitCode ? \$this->exitCode : (\\is_int(\$this->error->getCode()) && 0 !== \$this->error->getCode() ? \$this->error->getCode() : 1);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Event/ConsoleErrorEvent.php";
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

namespace Symfony\\Component\\Console\\Event;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Allows to handle throwables thrown while running a command.
 *
 * @author Wouter de Jong <wouter@wouterj.nl>
 */
final class ConsoleErrorEvent extends ConsoleEvent
{
    private \$error;
    private \$exitCode;

    public function __construct(InputInterface \$input, OutputInterface \$output, \\Throwable \$error, Command \$command = null)
    {
        parent::__construct(\$command, \$input, \$output);

        \$this->error = \$error;
    }

    public function getError(): \\Throwable
    {
        return \$this->error;
    }

    public function setError(\\Throwable \$error): void
    {
        \$this->error = \$error;
    }

    public function setExitCode(int \$exitCode): void
    {
        \$this->exitCode = \$exitCode;

        \$r = new \\ReflectionProperty(\$this->error, 'code');
        \$r->setAccessible(true);
        \$r->setValue(\$this->error, \$this->exitCode);
    }

    public function getExitCode(): int
    {
        return null !== \$this->exitCode ? \$this->exitCode : (\\is_int(\$this->error->getCode()) && 0 !== \$this->error->getCode() ? \$this->error->getCode() : 1);
    }
}
", "@app/vendor/symfony/console/Event/ConsoleErrorEvent.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Event\\ConsoleErrorEvent.php");
    }
}
