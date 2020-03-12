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

/* @app/vendor/ocramius/package-versions/src/PackageVersions/FallbackVersions.php */
class __TwigTemplate_4cc3e6be76e57ad004a562acb90e5898d8483b0f550590d4dcd8f3ec7c94f53a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/package-versions/src/PackageVersions/FallbackVersions.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace PackageVersions;

use Generator;
use OutOfBoundsException;
use UnexpectedValueException;
use function array_key_exists;
use function array_merge;
use function basename;
use function file_exists;
use function file_get_contents;
use function getcwd;
use function iterator_to_array;
use function json_decode;
use function json_encode;
use function sprintf;

/**
 * @internal
 *
 * This is a fallback for {@see \\PackageVersions\\Versions::getVersion()}
 * Do not use this class directly: it is intended to be only used when
 * {@see \\PackageVersions\\Versions} fails to be generated, which typically
 * happens when running composer with `--no-scripts` flag)
 */
final class FallbackVersions
{
    public const ROOT_PACKAGE_NAME = 'unknown/root-package@UNKNOWN';

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     * @throws UnexpectedValueException If the composer.lock file could not be located.
     */
    public static function getVersion(string \$packageName) : string
    {
        \$versions = iterator_to_array(self::getVersions(self::getPackageData()));

        if (! array_key_exists(\$packageName, \$versions)) {
            throw new OutOfBoundsException(
                'Required package \"' . \$packageName . '\" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
            );
        }

        return \$versions[\$packageName];
    }

    /**
     * @return mixed[]
     *
     * @throws UnexpectedValueException
     */
    private static function getPackageData() : array
    {
        \$checkedPaths = [
            // The top-level project's ./vendor/composer/installed.json
            getcwd() . '/vendor/composer/installed.json',
            __DIR__ . '/../../../../composer/installed.json',
            // The top-level project's ./composer.lock
            getcwd() . '/composer.lock',
            __DIR__ . '/../../../../../composer.lock',
            // This package's composer.lock
            __DIR__ . '/../../composer.lock',
        ];

        \$packageData = [];
        foreach (\$checkedPaths as \$path) {
            if (! file_exists(\$path)) {
                continue;
            }

            \$data = json_decode(file_get_contents(\$path), true);
            switch (basename(\$path)) {
                case 'installed.json':
                    \$packageData[] = \$data;
                    break;
                case 'composer.lock':
                    \$packageData[] = \$data['packages'] + (\$data['packages-dev'] ?? []);
                    break;
                default:
                    // intentionally left blank
            }
        }

        if (\$packageData !== []) {
            return array_merge(...\$packageData);
        }

        throw new UnexpectedValueException(sprintf(
            'PackageVersions could not locate the `vendor/composer/installed.json` or your `composer.lock` '
            . 'location. This is assumed to be in %s. If you customized your composer vendor directory and ran composer '
            . 'installation with --no-scripts or if you deployed without the required composer files, then you are on '
            . 'your own, and we can\\'t really help you. Fix your shit and cut the tooling some slack.',
            json_encode(\$checkedPaths)
        ));
    }

    /**
     * @param mixed[] \$packageData
     *
     * @return Generator&string[]
     *
     * @psalm-return Generator<string, string>
     */
    private static function getVersions(array \$packageData) : Generator
    {
        foreach (\$packageData as \$package) {
            yield \$package['name'] => \$package['version'] . '@' . (
                \$package['source']['reference'] ?? \$package['dist']['reference'] ?? ''
            );
        }

        yield self::ROOT_PACKAGE_NAME => self::ROOT_PACKAGE_NAME;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/package-versions/src/PackageVersions/FallbackVersions.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace PackageVersions;

use Generator;
use OutOfBoundsException;
use UnexpectedValueException;
use function array_key_exists;
use function array_merge;
use function basename;
use function file_exists;
use function file_get_contents;
use function getcwd;
use function iterator_to_array;
use function json_decode;
use function json_encode;
use function sprintf;

/**
 * @internal
 *
 * This is a fallback for {@see \\PackageVersions\\Versions::getVersion()}
 * Do not use this class directly: it is intended to be only used when
 * {@see \\PackageVersions\\Versions} fails to be generated, which typically
 * happens when running composer with `--no-scripts` flag)
 */
final class FallbackVersions
{
    public const ROOT_PACKAGE_NAME = 'unknown/root-package@UNKNOWN';

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     * @throws UnexpectedValueException If the composer.lock file could not be located.
     */
    public static function getVersion(string \$packageName) : string
    {
        \$versions = iterator_to_array(self::getVersions(self::getPackageData()));

        if (! array_key_exists(\$packageName, \$versions)) {
            throw new OutOfBoundsException(
                'Required package \"' . \$packageName . '\" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
            );
        }

        return \$versions[\$packageName];
    }

    /**
     * @return mixed[]
     *
     * @throws UnexpectedValueException
     */
    private static function getPackageData() : array
    {
        \$checkedPaths = [
            // The top-level project's ./vendor/composer/installed.json
            getcwd() . '/vendor/composer/installed.json',
            __DIR__ . '/../../../../composer/installed.json',
            // The top-level project's ./composer.lock
            getcwd() . '/composer.lock',
            __DIR__ . '/../../../../../composer.lock',
            // This package's composer.lock
            __DIR__ . '/../../composer.lock',
        ];

        \$packageData = [];
        foreach (\$checkedPaths as \$path) {
            if (! file_exists(\$path)) {
                continue;
            }

            \$data = json_decode(file_get_contents(\$path), true);
            switch (basename(\$path)) {
                case 'installed.json':
                    \$packageData[] = \$data;
                    break;
                case 'composer.lock':
                    \$packageData[] = \$data['packages'] + (\$data['packages-dev'] ?? []);
                    break;
                default:
                    // intentionally left blank
            }
        }

        if (\$packageData !== []) {
            return array_merge(...\$packageData);
        }

        throw new UnexpectedValueException(sprintf(
            'PackageVersions could not locate the `vendor/composer/installed.json` or your `composer.lock` '
            . 'location. This is assumed to be in %s. If you customized your composer vendor directory and ran composer '
            . 'installation with --no-scripts or if you deployed without the required composer files, then you are on '
            . 'your own, and we can\\'t really help you. Fix your shit and cut the tooling some slack.',
            json_encode(\$checkedPaths)
        ));
    }

    /**
     * @param mixed[] \$packageData
     *
     * @return Generator&string[]
     *
     * @psalm-return Generator<string, string>
     */
    private static function getVersions(array \$packageData) : Generator
    {
        foreach (\$packageData as \$package) {
            yield \$package['name'] => \$package['version'] . '@' . (
                \$package['source']['reference'] ?? \$package['dist']['reference'] ?? ''
            );
        }

        yield self::ROOT_PACKAGE_NAME => self::ROOT_PACKAGE_NAME;
    }
}
", "@app/vendor/ocramius/package-versions/src/PackageVersions/FallbackVersions.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\package-versions\\src\\PackageVersions\\FallbackVersions.php");
    }
}
