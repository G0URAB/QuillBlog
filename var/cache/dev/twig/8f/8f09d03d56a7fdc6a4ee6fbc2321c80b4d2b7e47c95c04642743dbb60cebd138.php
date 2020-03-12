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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/MigrationFinder.php */
class __TwigTemplate_0f511ca6ea00075c4393f92ad34c4d424dbd4ff10f3e241d14f7ae87cd42e93d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/MigrationFinder.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Finder;

/**
 * The MigrationFinder interface defines the interface used for finding migrations in a given directory and namespace.
 */
interface MigrationFinder
{
    /**
     * @param string      \$directory The directory which the finder should search
     * @param string|null \$namespace If not null only classes in this namespace will be returned
     *
     * @return string[]
     */
    public function findMigrations(string \$directory, ?string \$namespace = null) : array;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/MigrationFinder.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Finder;

/**
 * The MigrationFinder interface defines the interface used for finding migrations in a given directory and namespace.
 */
interface MigrationFinder
{
    /**
     * @param string      \$directory The directory which the finder should search
     * @param string|null \$namespace If not null only classes in this namespace will be returned
     *
     * @return string[]
     */
    public function findMigrations(string \$directory, ?string \$namespace = null) : array;
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/MigrationFinder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Finder\\MigrationFinder.php");
    }
}
