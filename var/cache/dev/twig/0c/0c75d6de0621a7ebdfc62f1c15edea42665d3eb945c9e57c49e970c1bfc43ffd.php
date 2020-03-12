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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Exception/VersionDoesNotExist.php */
class __TwigTemplate_614089049a0ad2062b592b1796c5de70cdca2b9179bc72f974f41c75c32ec9ac extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Exception/VersionDoesNotExist.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Exception;

use Doctrine\\Migrations\\Version\\Version;
use InvalidArgumentException;
use function sprintf;

final class VersionDoesNotExist extends InvalidArgumentException implements ConsoleException
{
    public static function new(Version \$version) : self
    {
        return new self(sprintf('The version \"%s\" does not exist in the version table.', \$version->getVersion()));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Exception/VersionDoesNotExist.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Exception;

use Doctrine\\Migrations\\Version\\Version;
use InvalidArgumentException;
use function sprintf;

final class VersionDoesNotExist extends InvalidArgumentException implements ConsoleException
{
    public static function new(Version \$version) : self
    {
        return new self(sprintf('The version \"%s\" does not exist in the version table.', \$version->getVersion()));
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Exception/VersionDoesNotExist.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Exception\\VersionDoesNotExist.php");
    }
}
