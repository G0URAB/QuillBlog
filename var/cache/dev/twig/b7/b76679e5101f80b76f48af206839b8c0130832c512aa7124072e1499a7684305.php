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

/* @app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/InvalidCacheId.php */
class __TwigTemplate_2f1331e4639e1e34f73032813ec973481c1971413483e67c68f8dddb989a7903 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/InvalidCacheId.php"));

        // line 1
        echo "<?php
declare(strict_types=1);

namespace Doctrine\\Common\\Cache;

use InvalidArgumentException;
use function sprintf;

final class InvalidCacheId extends InvalidArgumentException
{
    public static function exceedsMaxLength(\$id, int \$maxLength) : self
    {
        return new self(sprintf('Cache id \"%s\" exceeds maximum length %d', \$id, \$maxLength));
    }

    public static function containsUnauthorizedCharacter(\$id, string \$character) : self
    {
        return new self(sprintf('Cache id \"%s\" contains unauthorized character \"%s\"', \$id, \$character));
    }

    public static function containsControlCharacter(\$id) : self
    {
        return new self(sprintf('Cache id \"%s\" contains at least one control character', \$id));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/InvalidCacheId.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
declare(strict_types=1);

namespace Doctrine\\Common\\Cache;

use InvalidArgumentException;
use function sprintf;

final class InvalidCacheId extends InvalidArgumentException
{
    public static function exceedsMaxLength(\$id, int \$maxLength) : self
    {
        return new self(sprintf('Cache id \"%s\" exceeds maximum length %d', \$id, \$maxLength));
    }

    public static function containsUnauthorizedCharacter(\$id, string \$character) : self
    {
        return new self(sprintf('Cache id \"%s\" contains unauthorized character \"%s\"', \$id, \$character));
    }

    public static function containsControlCharacter(\$id) : self
    {
        return new self(sprintf('Cache id \"%s\" contains at least one control character', \$id));
    }
}
", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/InvalidCacheId.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\InvalidCacheId.php");
    }
}
