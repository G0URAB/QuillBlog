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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Stopwatch.php */
class __TwigTemplate_707a7ed1037a25fec7ce1735d13240e5bb09214a2173977b9a6dbf6a17c6c358 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Stopwatch.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Symfony\\Component\\Stopwatch\\Stopwatch as SymfonyStopwatch;
use Symfony\\Component\\Stopwatch\\StopwatchEvent;

/**
 * The Stopwatch class wraps the Symfony Stopwatch class so that we do not directly depend on it.
 *
 * @internal
 */
class Stopwatch
{
    /** @var SymfonyStopwatch */
    private \$symfonyStopwatch;

    public function __construct(SymfonyStopwatch \$symfonyStopwatch)
    {
        \$this->symfonyStopwatch = \$symfonyStopwatch;
    }

    public function start(string \$section) : StopwatchEvent
    {
        return \$this->symfonyStopwatch->start(\$section);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Stopwatch.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Symfony\\Component\\Stopwatch\\Stopwatch as SymfonyStopwatch;
use Symfony\\Component\\Stopwatch\\StopwatchEvent;

/**
 * The Stopwatch class wraps the Symfony Stopwatch class so that we do not directly depend on it.
 *
 * @internal
 */
class Stopwatch
{
    /** @var SymfonyStopwatch */
    private \$symfonyStopwatch;

    public function __construct(SymfonyStopwatch \$symfonyStopwatch)
    {
        \$this->symfonyStopwatch = \$symfonyStopwatch;
    }

    public function start(string \$section) : StopwatchEvent
    {
        return \$this->symfonyStopwatch->start(\$section);
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Stopwatch.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Stopwatch.php");
    }
}
