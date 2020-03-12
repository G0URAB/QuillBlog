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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/State.php */
class __TwigTemplate_c6d3629938928e9bb1e07a78fea386a6139d56dd78962fb7d9053ee5b6e5040e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/State.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Version;

/**
 * The State class contains constants for the different states a migration can be in during execution.
 *
 * @internal
 */
final class State
{
    public const NONE = 0;

    public const PRE = 1;

    public const EXEC = 2;

    public const POST = 3;

    public const STATES = [
        self::NONE,
        self::PRE,
        self::EXEC,
        self::POST,
    ];

    /**
     * This class cannot be instantiated.
     */
    private function __construct()
    {
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/State.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Version;

/**
 * The State class contains constants for the different states a migration can be in during execution.
 *
 * @internal
 */
final class State
{
    public const NONE = 0;

    public const PRE = 1;

    public const EXEC = 2;

    public const POST = 3;

    public const STATES = [
        self::NONE,
        self::PRE,
        self::EXEC,
        self::POST,
    ];

    /**
     * This class cannot be instantiated.
     */
    private function __construct()
    {
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/State.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Version\\State.php");
    }
}
