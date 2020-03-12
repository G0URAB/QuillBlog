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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/ConfigurationHelperInterface.php */
class __TwigTemplate_d9ce9c713a07dcd898458be70a1c5dd09748950097b7b3288094d23d4928d818 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/ConfigurationHelperInterface.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Helper;

use Doctrine\\Migrations\\Configuration\\Configuration;
use Symfony\\Component\\Console\\Input\\InputInterface;

/**
 * The ConfigurationHelperInterface defines the interface for getting the Configuration instance to be used for migrations.
 */
interface ConfigurationHelperInterface
{
    public function getMigrationConfig(
        InputInterface \$input
    ) : Configuration;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/ConfigurationHelperInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Helper;

use Doctrine\\Migrations\\Configuration\\Configuration;
use Symfony\\Component\\Console\\Input\\InputInterface;

/**
 * The ConfigurationHelperInterface defines the interface for getting the Configuration instance to be used for migrations.
 */
interface ConfigurationHelperInterface
{
    public function getMigrationConfig(
        InputInterface \$input
    ) : Configuration;
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/ConfigurationHelperInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Helper\\ConfigurationHelperInterface.php");
    }
}
