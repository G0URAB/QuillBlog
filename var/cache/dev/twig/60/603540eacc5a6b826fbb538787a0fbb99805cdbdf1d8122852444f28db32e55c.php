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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Event/Listeners/AutoCommitListener.php */
class __TwigTemplate_c470d75a441f3168a7596c60e14e249ac168cd75f10ccedbdf939683d1c9e6ec extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Event/Listeners/AutoCommitListener.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Event\\Listeners;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\Migrations\\Event\\MigrationsEventArgs;
use Doctrine\\Migrations\\Events;

/**
 * Listens for `onMigrationsMigrated` and, if the connection has autocommit
 * makes sure to do the final commit to ensure changes stick around.
 *
 * @internal
 */
final class AutoCommitListener implements EventSubscriber
{
    public function onMigrationsMigrated(MigrationsEventArgs \$args) : void
    {
        \$conn = \$args->getConnection();

        if (\$args->isDryRun() || \$conn->isAutoCommit()) {
            return;
        }

        \$conn->commit();
    }

    /** {@inheritdoc} */
    public function getSubscribedEvents()
    {
        return [Events::onMigrationsMigrated];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Event/Listeners/AutoCommitListener.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Event\\Listeners;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\Migrations\\Event\\MigrationsEventArgs;
use Doctrine\\Migrations\\Events;

/**
 * Listens for `onMigrationsMigrated` and, if the connection has autocommit
 * makes sure to do the final commit to ensure changes stick around.
 *
 * @internal
 */
final class AutoCommitListener implements EventSubscriber
{
    public function onMigrationsMigrated(MigrationsEventArgs \$args) : void
    {
        \$conn = \$args->getConnection();

        if (\$args->isDryRun() || \$conn->isAutoCommit()) {
            return;
        }

        \$conn->commit();
    }

    /** {@inheritdoc} */
    public function getSubscribedEvents()
    {
        return [Events::onMigrationsMigrated];
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Event/Listeners/AutoCommitListener.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Event\\Listeners\\AutoCommitListener.php");
    }
}
