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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionHelperLoader.php */
class __TwigTemplate_bde1cfb4595b48ad17ab19eb3ea97ea789f850bedbba0aa012f77510324db443 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionHelperLoader.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Connection\\Loader;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
use Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface;
use Symfony\\Component\\Console\\Helper\\HelperSet;

/**
 * The ConnectionHelperLoader is responsible for loading a Doctrine\\DBAL\\Connection from a Symfony Console HelperSet.
 *
 * @internal
 */
class ConnectionHelperLoader implements ConnectionLoaderInterface
{
    /** @var string */
    private \$helperName;

    /** @var  HelperSet */
    private \$helperSet;

    public function __construct(?HelperSet \$helperSet = null, string \$helperName)
    {
        \$this->helperName = \$helperName;

        if (\$helperSet === null) {
            \$helperSet = new HelperSet();
        }

        \$this->helperSet = \$helperSet;
    }

    /**
     * Read the input and return a Configuration, returns null if the config
     * is not supported.
     */
    public function chosen() : ?Connection
    {
        if (\$this->helperSet->has(\$this->helperName)) {
            \$connectionHelper = \$this->helperSet->get(\$this->helperName);

            if (\$connectionHelper instanceof ConnectionHelper) {
                return \$connectionHelper->getConnection();
            }
        }

        return null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionHelperLoader.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Connection\\Loader;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
use Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface;
use Symfony\\Component\\Console\\Helper\\HelperSet;

/**
 * The ConnectionHelperLoader is responsible for loading a Doctrine\\DBAL\\Connection from a Symfony Console HelperSet.
 *
 * @internal
 */
class ConnectionHelperLoader implements ConnectionLoaderInterface
{
    /** @var string */
    private \$helperName;

    /** @var  HelperSet */
    private \$helperSet;

    public function __construct(?HelperSet \$helperSet = null, string \$helperName)
    {
        \$this->helperName = \$helperName;

        if (\$helperSet === null) {
            \$helperSet = new HelperSet();
        }

        \$this->helperSet = \$helperSet;
    }

    /**
     * Read the input and return a Configuration, returns null if the config
     * is not supported.
     */
    public function chosen() : ?Connection
    {
        if (\$this->helperSet->has(\$this->helperName)) {
            \$connectionHelper = \$this->helperSet->get(\$this->helperName);

            if (\$connectionHelper instanceof ConnectionHelper) {
                return \$connectionHelper->getConnection();
            }
        }

        return null;
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionHelperLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\Connection\\Loader\\ConnectionHelperLoader.php");
    }
}
