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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Exception/InvalidTemplateSpecified.php */
class __TwigTemplate_4623356fe86f88620e8edb84aaad05aa7352efc5c6970fd32bf23b6d230436d4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Exception/InvalidTemplateSpecified.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Generator\\Exception;

use InvalidArgumentException;
use function sprintf;

final class InvalidTemplateSpecified extends InvalidArgumentException implements GeneratorException
{
    public static function notFoundOrNotReadable(string \$path) : self
    {
        return new self(sprintf('The specified template \"%s\" cannot be found or is not readable.', \$path));
    }

    public static function notReadable(string \$path) : self
    {
        return new self(sprintf('The specified template \"%s\" could not be read.', \$path));
    }

    public static function empty(string \$path) : self
    {
        return new self(sprintf('The specified template \"%s\" is empty.', \$path));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Exception/InvalidTemplateSpecified.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Generator\\Exception;

use InvalidArgumentException;
use function sprintf;

final class InvalidTemplateSpecified extends InvalidArgumentException implements GeneratorException
{
    public static function notFoundOrNotReadable(string \$path) : self
    {
        return new self(sprintf('The specified template \"%s\" cannot be found or is not readable.', \$path));
    }

    public static function notReadable(string \$path) : self
    {
        return new self(sprintf('The specified template \"%s\" could not be read.', \$path));
    }

    public static function empty(string \$path) : self
    {
        return new self(sprintf('The specified template \"%s\" is empty.', \$path));
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Exception/InvalidTemplateSpecified.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Generator\\Exception\\InvalidTemplateSpecified.php");
    }
}
