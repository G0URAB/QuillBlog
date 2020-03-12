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

/* @app/vendor/doctrine/doctrine-bundle/Dbal/RegexSchemaAssetFilter.php */
class __TwigTemplate_3182db3a154bcc7431ad0d63d1fc6ad04aabc326bf50e55e78bdde02cbfca0ed extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/Dbal/RegexSchemaAssetFilter.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Dbal;

use Doctrine\\DBAL\\Schema\\AbstractAsset;

class RegexSchemaAssetFilter
{
    /** @var string */
    private \$filterExpression;

    public function __construct(string \$filterExpression)
    {
        \$this->filterExpression = \$filterExpression;
    }

    public function __invoke(\$assetName) : bool
    {
        if (\$assetName instanceof AbstractAsset) {
            \$assetName = \$assetName->getName();
        }

        return preg_match(\$this->filterExpression, \$assetName);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/Dbal/RegexSchemaAssetFilter.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Dbal;

use Doctrine\\DBAL\\Schema\\AbstractAsset;

class RegexSchemaAssetFilter
{
    /** @var string */
    private \$filterExpression;

    public function __construct(string \$filterExpression)
    {
        \$this->filterExpression = \$filterExpression;
    }

    public function __invoke(\$assetName) : bool
    {
        if (\$assetName instanceof AbstractAsset) {
            \$assetName = \$assetName->getName();
        }

        return preg_match(\$this->filterExpression, \$assetName);
    }
}
", "@app/vendor/doctrine/doctrine-bundle/Dbal/RegexSchemaAssetFilter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\Dbal\\RegexSchemaAssetFilter.php");
    }
}
