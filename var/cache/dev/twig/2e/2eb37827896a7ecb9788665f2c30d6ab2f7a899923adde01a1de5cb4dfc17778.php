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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/GlobFinder.php */
class __TwigTemplate_d454a6cf71f05803dfe103c16d6915d60e65f83743453d1e98ea12644e599b07 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/GlobFinder.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Finder;

use function glob;
use function rtrim;

/**
 * The GlobFinder class finds migrations in a directory using the PHP glob() function.
 */
final class GlobFinder extends Finder
{
    /**
     * @return string[]
     */
    public function findMigrations(string \$directory, ?string \$namespace = null) : array
    {
        \$dir = \$this->getRealPath(\$directory);

        \$files = glob(rtrim(\$dir, '/') . '/Version*.php');

        return \$this->loadMigrations(\$files, \$namespace);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/GlobFinder.php";
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

use function glob;
use function rtrim;

/**
 * The GlobFinder class finds migrations in a directory using the PHP glob() function.
 */
final class GlobFinder extends Finder
{
    /**
     * @return string[]
     */
    public function findMigrations(string \$directory, ?string \$namespace = null) : array
    {
        \$dir = \$this->getRealPath(\$directory);

        \$files = glob(rtrim(\$dir, '/') . '/Version*.php');

        return \$this->loadMigrations(\$files, \$namespace);
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/GlobFinder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Finder\\GlobFinder.php");
    }
}
