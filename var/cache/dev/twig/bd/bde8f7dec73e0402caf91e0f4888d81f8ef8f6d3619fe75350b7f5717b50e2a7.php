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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/Exception/NameIsReserved.php */
class __TwigTemplate_ee6d8fcdfb114c9e0a0fe29793a61fcecf4743bc447cffea289ec52cce13f7e3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/Exception/NameIsReserved.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Finder\\Exception;

use InvalidArgumentException;
use const PHP_EOL;
use function sprintf;

final class NameIsReserved extends InvalidArgumentException implements FinderException
{
    public static function new(string \$version) : self
    {
        return new self(sprintf(
            'Cannot load a migrations with the name \"%s\" because it is a number reserved by Doctrine Migrations.'
            . PHP_EOL
            . 'It is used to revert all migrations including the first one.',
            \$version
        ));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/Exception/NameIsReserved.php";
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
use const PHP_EOL;
use function sprintf;

final class NameIsReserved extends InvalidArgumentException implements FinderException
{
    public static function new(string \$version) : self
    {
        return new self(sprintf(
            'Cannot load a migrations with the name \"%s\" because it is a number reserved by Doctrine Migrations.'
            . PHP_EOL
            . 'It is used to revert all migrations including the first one.',
            \$version
        ));
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Finder/Exception/NameIsReserved.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Finder\\Exception\\NameIsReserved.php");
    }
}
