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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Event/MigrationsVersionEventArgs.php */
class __TwigTemplate_96869add437dd53b2a7d62a391686309801bda67eef903bf029c5db8e2d7bd5e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Event/MigrationsVersionEventArgs.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Event;

use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Version\\Version;

/**
 * The MigrationsVersionEventArgs class is passed to events related to a single migration version.
 */
class MigrationsVersionEventArgs extends MigrationsEventArgs
{
    /** @var Version */
    private \$version;

    public function __construct(
        Version \$version,
        Configuration \$config,
        string \$direction,
        bool \$dryRun
    ) {
        parent::__construct(\$config, \$direction, \$dryRun);

        \$this->version = \$version;
    }

    public function getVersion() : Version
    {
        return \$this->version;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Event/MigrationsVersionEventArgs.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Event;

use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Version\\Version;

/**
 * The MigrationsVersionEventArgs class is passed to events related to a single migration version.
 */
class MigrationsVersionEventArgs extends MigrationsEventArgs
{
    /** @var Version */
    private \$version;

    public function __construct(
        Version \$version,
        Configuration \$config,
        string \$direction,
        bool \$dryRun
    ) {
        parent::__construct(\$config, \$direction, \$dryRun);

        \$this->version = \$version;
    }

    public function getVersion() : Version
    {
        return \$this->version;
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Event/MigrationsVersionEventArgs.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Event\\MigrationsVersionEventArgs.php");
    }
}
