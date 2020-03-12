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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Version.php */
class __TwigTemplate_00fafad34da2c946b35bd55fb8ead356e6b7bdaf7244540d06e35cd4d7ff8d82 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Version.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager;

use PackageVersions\\Versions;

/**
 * Version class - to be adjusted when a new release is created.
 *
 * Note that we cannot check the version at runtime via `git` because that would cause a lot of I/O operations.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class Version
{
    /**
     * Private constructor - this class is not meant to be instantiated
     */
    private function __construct()
    {
    }

    /**
     * Retrieves the package version in the format <detected-version>@<commit-hash>,
     * where the detected version is what composer could detect.
     *
     * @return string
     *
     * @throws \\OutOfBoundsException
     */
    public static function getVersion() : string
    {
        return Versions::getVersion('ocramius/proxy-manager');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Version.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager;

use PackageVersions\\Versions;

/**
 * Version class - to be adjusted when a new release is created.
 *
 * Note that we cannot check the version at runtime via `git` because that would cause a lot of I/O operations.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class Version
{
    /**
     * Private constructor - this class is not meant to be instantiated
     */
    private function __construct()
    {
    }

    /**
     * Retrieves the package version in the format <detected-version>@<commit-hash>,
     * where the detected version is what composer could detect.
     *
     * @return string
     *
     * @throws \\OutOfBoundsException
     */
    public static function getVersion() : string
    {
        return Versions::getVersion('ocramius/proxy-manager');
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Version.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Version.php");
    }
}
