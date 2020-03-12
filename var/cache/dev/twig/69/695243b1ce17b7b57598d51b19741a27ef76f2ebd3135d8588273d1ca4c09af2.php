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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/BytesFormatter.php */
class __TwigTemplate_f691925ad7d691188f1301bb1036dc4f42a77f992ad7c6c4789d8fded8aec365 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/BytesFormatter.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools;

use function floor;
use function log;
use function pow;
use function round;

/**
 * The BytesFormatter class is responsible for converting a bytes integer to a more human readable string.
 * This class is used to format the memory used for display purposes when executing migrations.
 *
 * @internal
 */
final class BytesFormatter
{
    public static function formatBytes(float \$size, int \$precision = 2) : string
    {
        \$base     = log(\$size, 1024);
        \$suffixes = ['', 'K', 'M', 'G', 'T'];

        return round(pow(1024, \$base - floor(\$base)), \$precision) . \$suffixes[(int) floor(\$base)];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/BytesFormatter.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools;

use function floor;
use function log;
use function pow;
use function round;

/**
 * The BytesFormatter class is responsible for converting a bytes integer to a more human readable string.
 * This class is used to format the memory used for display purposes when executing migrations.
 *
 * @internal
 */
final class BytesFormatter
{
    public static function formatBytes(float \$size, int \$precision = 2) : string
    {
        \$base     = log(\$size, 1024);
        \$suffixes = ['', 'K', 'M', 'G', 'T'];

        return round(pow(1024, \$base - floor(\$base)), \$precision) . \$suffixes[(int) floor(\$base)];
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/BytesFormatter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\BytesFormatter.php");
    }
}
