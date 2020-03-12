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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/Exception/InvalidDirectory.php */
class __TwigTemplate_3b2d9ef07f318599d5e902233863e2cef8d53ac868e376d233c53d11bd78ea74 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/Exception/InvalidDirectory.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Finder\\Exception;

use InvalidArgumentException;
use function sprintf;

final class InvalidDirectory extends InvalidArgumentException implements FinderException
{
    public static function new(string \$directory) : self
    {
        return new self(sprintf('Cannot load migrations from \"%s\" because it is not a valid directory', \$directory));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/Exception/InvalidDirectory.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Finder\\Exception;

use InvalidArgumentException;
use function sprintf;

final class InvalidDirectory extends InvalidArgumentException implements FinderException
{
    public static function new(string \$directory) : self
    {
        return new self(sprintf('Cannot load migrations from \"%s\" because it is not a valid directory', \$directory));
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/Exception/InvalidDirectory.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Finder\\Exception\\InvalidDirectory.php");
    }
}
