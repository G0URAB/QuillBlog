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

/* @app/vendor/doctrine/doctrine-bundle/Dbal/BlacklistSchemaAssetFilter.php */
class __TwigTemplate_68d350e2408746e418fe07b553f242cc30f551b4100c60288b11ae56f56d533f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/Dbal/BlacklistSchemaAssetFilter.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Dbal;

use Doctrine\\DBAL\\Schema\\AbstractAsset;
use function in_array;

class BlacklistSchemaAssetFilter
{
    /** @var string[] */
    private \$blacklist;

    /**
     * @param string[] \$blacklist
     */
    public function __construct(array \$blacklist)
    {
        \$this->blacklist = \$blacklist;
    }

    public function __invoke(\$assetName) : bool
    {
        if (\$assetName instanceof AbstractAsset) {
            \$assetName = \$assetName->getName();
        }

        return ! in_array(\$assetName, \$this->blacklist, true);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/Dbal/BlacklistSchemaAssetFilter.php";
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
use function in_array;

class BlacklistSchemaAssetFilter
{
    /** @var string[] */
    private \$blacklist;

    /**
     * @param string[] \$blacklist
     */
    public function __construct(array \$blacklist)
    {
        \$this->blacklist = \$blacklist;
    }

    public function __invoke(\$assetName) : bool
    {
        if (\$assetName instanceof AbstractAsset) {
            \$assetName = \$assetName->getName();
        }

        return ! in_array(\$assetName, \$this->blacklist, true);
    }
}
", "@app/vendor/doctrine/doctrine-bundle/Dbal/BlacklistSchemaAssetFilter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\Dbal\\BlacklistSchemaAssetFilter.php");
    }
}
