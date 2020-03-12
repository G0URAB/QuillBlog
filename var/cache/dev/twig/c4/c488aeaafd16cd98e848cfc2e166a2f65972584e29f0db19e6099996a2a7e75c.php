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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/ConnectionLoaderInterface.php */
class __TwigTemplate_79ffa7116f4d3a44e97f3bb85426bbcdcb38a322dfc14d3fee2e87e56c40b1a7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/ConnectionLoaderInterface.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Connection;

use Doctrine\\DBAL\\Connection;

/**
 * The ConnectionLoaderInterface defines the interface used to load the Doctrine\\DBAL\\Connection instance to use
 * for migrations.
 *
 * @internal
 */
interface ConnectionLoaderInterface
{
    /**
     * Read the input and return a Connection, returns null if the config
     * is not supported.
     */
    public function chosen() : ?Connection;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/ConnectionLoaderInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Connection;

use Doctrine\\DBAL\\Connection;

/**
 * The ConnectionLoaderInterface defines the interface used to load the Doctrine\\DBAL\\Connection instance to use
 * for migrations.
 *
 * @internal
 */
interface ConnectionLoaderInterface
{
    /**
     * Read the input and return a Connection, returns null if the config
     * is not supported.
     */
    public function chosen() : ?Connection;
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/ConnectionLoaderInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface.php");
    }
}
