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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/AliasResolver.php */
class __TwigTemplate_1dae7be21e88ddd2d5654f3cc343772df10b33ef47adebc542a05d9d66076bf3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/AliasResolver.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Version;

use Doctrine\\Migrations\\MigrationRepository;
use function substr;

/**
 * The AliasResolver class is responsible for resolving aliases like first, current, etc. to the actual version number.
 *
 * @internal
 */
final class AliasResolver
{
    private const ALIAS_FIRST   = 'first';
    private const ALIAS_CURRENT = 'current';
    private const ALIAS_PREV    = 'prev';
    private const ALIAS_NEXT    = 'next';
    private const ALIAS_LATEST  = 'latest';

    /** @var MigrationRepository */
    private \$migrationRepository;

    public function __construct(MigrationRepository \$migrationRepository)
    {
        \$this->migrationRepository = \$migrationRepository;
    }

    /**
     * Returns the version number from an alias.
     *
     * Supported aliases are:
     *
     * - first: The very first version before any migrations have been run.
     * - current: The current version.
     * - prev: The version prior to the current version.
     * - next: The version following the current version.
     * - latest: The latest available version.
     *
     * If an existing version number is specified, it is returned verbatimly.
     */
    public function resolveVersionAlias(string \$alias) : ?string
    {
        if (\$this->migrationRepository->hasVersion(\$alias)) {
            return \$alias;
        }

        switch (\$alias) {
            case self::ALIAS_FIRST:
                return '0';
            case self::ALIAS_CURRENT:
                return \$this->migrationRepository->getCurrentVersion();
            case self::ALIAS_PREV:
                return \$this->migrationRepository->getPrevVersion();
            case self::ALIAS_NEXT:
                return \$this->migrationRepository->getNextVersion();
            case self::ALIAS_LATEST:
                return \$this->migrationRepository->getLatestVersion();
            default:
                if (substr(\$alias, 0, 7) === self::ALIAS_CURRENT) {
                    return \$this->migrationRepository->getDeltaVersion(substr(\$alias, 7));
                }

                return null;
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/AliasResolver.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Version;

use Doctrine\\Migrations\\MigrationRepository;
use function substr;

/**
 * The AliasResolver class is responsible for resolving aliases like first, current, etc. to the actual version number.
 *
 * @internal
 */
final class AliasResolver
{
    private const ALIAS_FIRST   = 'first';
    private const ALIAS_CURRENT = 'current';
    private const ALIAS_PREV    = 'prev';
    private const ALIAS_NEXT    = 'next';
    private const ALIAS_LATEST  = 'latest';

    /** @var MigrationRepository */
    private \$migrationRepository;

    public function __construct(MigrationRepository \$migrationRepository)
    {
        \$this->migrationRepository = \$migrationRepository;
    }

    /**
     * Returns the version number from an alias.
     *
     * Supported aliases are:
     *
     * - first: The very first version before any migrations have been run.
     * - current: The current version.
     * - prev: The version prior to the current version.
     * - next: The version following the current version.
     * - latest: The latest available version.
     *
     * If an existing version number is specified, it is returned verbatimly.
     */
    public function resolveVersionAlias(string \$alias) : ?string
    {
        if (\$this->migrationRepository->hasVersion(\$alias)) {
            return \$alias;
        }

        switch (\$alias) {
            case self::ALIAS_FIRST:
                return '0';
            case self::ALIAS_CURRENT:
                return \$this->migrationRepository->getCurrentVersion();
            case self::ALIAS_PREV:
                return \$this->migrationRepository->getPrevVersion();
            case self::ALIAS_NEXT:
                return \$this->migrationRepository->getNextVersion();
            case self::ALIAS_LATEST:
                return \$this->migrationRepository->getLatestVersion();
            default:
                if (substr(\$alias, 0, 7) === self::ALIAS_CURRENT) {
                    return \$this->migrationRepository->getDeltaVersion(substr(\$alias, 7));
                }

                return null;
        }
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/AliasResolver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Version\\AliasResolver.php");
    }
}
