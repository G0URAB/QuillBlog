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

/* @app/vendor/symfony/maker-bundle/src/DependencyBuilder.php */
class __TwigTemplate_72392cd3ed145ad13db8b8ba6346b9f9c02304a583e78ccdda74a09cd42cb01e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/DependencyBuilder.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle;

final class DependencyBuilder
{
    private \$dependencies = [];
    private \$devDependencies = [];

    private \$minimumPHPVersion = 70000;

    /**
     * Add a dependency that will be reported if the given class is missing.
     *
     * If the dependency is *optional*, then it will only be reported to
     * the user if other required dependencies are missing. An example
     * is the \"validator\" when trying to work with forms.
     */
    public function addClassDependency(string \$class, string \$package, bool \$required = true, bool \$devDependency = false)
    {
        if (\$devDependency) {
            \$this->devDependencies[] = [
                'class' => \$class,
                'name' => \$package,
                'required' => \$required,
            ];
        } else {
            \$this->dependencies[] = [
                'class' => \$class,
                'name' => \$package,
                'required' => \$required,
            ];
        }
    }

    public function requirePHP71()
    {
        \$this->minimumPHPVersion = 70100;
    }

    /**
     * @internal
     */
    public function getMissingDependencies(): array
    {
        return \$this->calculateMissingDependencies(\$this->dependencies);
    }

    /**
     * @internal
     */
    public function getMissingDevDependencies(): array
    {
        return \$this->calculateMissingDependencies(\$this->devDependencies);
    }

    /**
     * @internal
     */
    public function getAllRequiredDependencies(): array
    {
        return \$this->getRequiredDependencyNames(\$this->dependencies);
    }

    /**
     * @internal
     */
    public function getAllRequiredDevDependencies(): array
    {
        return \$this->getRequiredDependencyNames(\$this->devDependencies);
    }

    /**
     * @internal
     */
    public function getMissingPackagesMessage(string \$commandName, \$message = null): string
    {
        \$packages = \$this->getMissingDependencies();
        \$packagesDev = \$this->getMissingDevDependencies();

        if (empty(\$packages) && empty(\$packagesDev)) {
            return '';
        }

        \$packagesCount = \\count(\$packages) + \\count(\$packagesDev);

        \$message = sprintf(
            \"Missing package%s: %s, run:\\n\",
            \$packagesCount > 1 ? 's' : '',
            \$message ?: sprintf('to use the %s command', \$commandName)
        );

        if (!empty(\$packages)) {
            \$message .= sprintf(\"\\ncomposer require %s\", implode(' ', \$packages));
        }

        if (!empty(\$packagesDev)) {
            \$message .= sprintf(\"\\ncomposer require %s --dev\", implode(' ', \$packagesDev));
        }

        return \$message;
    }

    /**
     * @internal
     */
    public function isPhpVersionSatisfied(): bool
    {
        return \\PHP_VERSION_ID >= \$this->minimumPHPVersion;
    }

    private function getRequiredDependencyNames(array \$dependencies): array
    {
        \$packages = [];
        foreach (\$dependencies as \$package) {
            if (!\$package['required']) {
                continue;
            }
            \$packages[] = \$package['name'];
        }

        return array_unique(\$packages);
    }

    private function calculateMissingDependencies(array \$dependencies): array
    {
        \$missingPackages = [];
        \$missingOptionalPackages = [];
        foreach (\$dependencies as \$package) {
            if (class_exists(\$package['class']) || interface_exists(\$package['class']) || trait_exists(\$package['class'])) {
                continue;
            }
            if (true === \$package['required']) {
                \$missingPackages[] = \$package['name'];
            } else {
                \$missingOptionalPackages[] = \$package['name'];
            }
        }
        if (empty(\$missingPackages)) {
            return [];
        }

        return array_unique(array_merge(\$missingPackages, \$missingOptionalPackages));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/DependencyBuilder.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle;

final class DependencyBuilder
{
    private \$dependencies = [];
    private \$devDependencies = [];

    private \$minimumPHPVersion = 70000;

    /**
     * Add a dependency that will be reported if the given class is missing.
     *
     * If the dependency is *optional*, then it will only be reported to
     * the user if other required dependencies are missing. An example
     * is the \"validator\" when trying to work with forms.
     */
    public function addClassDependency(string \$class, string \$package, bool \$required = true, bool \$devDependency = false)
    {
        if (\$devDependency) {
            \$this->devDependencies[] = [
                'class' => \$class,
                'name' => \$package,
                'required' => \$required,
            ];
        } else {
            \$this->dependencies[] = [
                'class' => \$class,
                'name' => \$package,
                'required' => \$required,
            ];
        }
    }

    public function requirePHP71()
    {
        \$this->minimumPHPVersion = 70100;
    }

    /**
     * @internal
     */
    public function getMissingDependencies(): array
    {
        return \$this->calculateMissingDependencies(\$this->dependencies);
    }

    /**
     * @internal
     */
    public function getMissingDevDependencies(): array
    {
        return \$this->calculateMissingDependencies(\$this->devDependencies);
    }

    /**
     * @internal
     */
    public function getAllRequiredDependencies(): array
    {
        return \$this->getRequiredDependencyNames(\$this->dependencies);
    }

    /**
     * @internal
     */
    public function getAllRequiredDevDependencies(): array
    {
        return \$this->getRequiredDependencyNames(\$this->devDependencies);
    }

    /**
     * @internal
     */
    public function getMissingPackagesMessage(string \$commandName, \$message = null): string
    {
        \$packages = \$this->getMissingDependencies();
        \$packagesDev = \$this->getMissingDevDependencies();

        if (empty(\$packages) && empty(\$packagesDev)) {
            return '';
        }

        \$packagesCount = \\count(\$packages) + \\count(\$packagesDev);

        \$message = sprintf(
            \"Missing package%s: %s, run:\\n\",
            \$packagesCount > 1 ? 's' : '',
            \$message ?: sprintf('to use the %s command', \$commandName)
        );

        if (!empty(\$packages)) {
            \$message .= sprintf(\"\\ncomposer require %s\", implode(' ', \$packages));
        }

        if (!empty(\$packagesDev)) {
            \$message .= sprintf(\"\\ncomposer require %s --dev\", implode(' ', \$packagesDev));
        }

        return \$message;
    }

    /**
     * @internal
     */
    public function isPhpVersionSatisfied(): bool
    {
        return \\PHP_VERSION_ID >= \$this->minimumPHPVersion;
    }

    private function getRequiredDependencyNames(array \$dependencies): array
    {
        \$packages = [];
        foreach (\$dependencies as \$package) {
            if (!\$package['required']) {
                continue;
            }
            \$packages[] = \$package['name'];
        }

        return array_unique(\$packages);
    }

    private function calculateMissingDependencies(array \$dependencies): array
    {
        \$missingPackages = [];
        \$missingOptionalPackages = [];
        foreach (\$dependencies as \$package) {
            if (class_exists(\$package['class']) || interface_exists(\$package['class']) || trait_exists(\$package['class'])) {
                continue;
            }
            if (true === \$package['required']) {
                \$missingPackages[] = \$package['name'];
            } else {
                \$missingOptionalPackages[] = \$package['name'];
            }
        }
        if (empty(\$missingPackages)) {
            return [];
        }

        return array_unique(array_merge(\$missingPackages, \$missingOptionalPackages));
    }
}
", "@app/vendor/symfony/maker-bundle/src/DependencyBuilder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\DependencyBuilder.php");
    }
}
