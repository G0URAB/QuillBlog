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

/* @app/vendor/symfony/twig-bridge/Extension/AssetExtension.php */
class __TwigTemplate_61a2c4efe51f25be4c783854659cf232d62f03733ffa5bb04654c4550d10df0f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Extension/AssetExtension.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Asset\\Packages;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * Twig extension for the Symfony Asset component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class AssetExtension extends AbstractExtension
{
    private \$packages;

    public function __construct(Packages \$packages)
    {
        \$this->packages = \$packages;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('asset', [\$this, 'getAssetUrl']),
            new TwigFunction('asset_version', [\$this, 'getAssetVersion']),
        ];
    }

    /**
     * Returns the public url/path of an asset.
     *
     * If the package used to generate the path is an instance of
     * UrlPackage, you will always get a URL and not a path.
     */
    public function getAssetUrl(string \$path, string \$packageName = null): string
    {
        return \$this->packages->getUrl(\$path, \$packageName);
    }

    /**
     * Returns the version of an asset.
     */
    public function getAssetVersion(string \$path, string \$packageName = null): string
    {
        return \$this->packages->getVersion(\$path, \$packageName);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Extension/AssetExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Asset\\Packages;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * Twig extension for the Symfony Asset component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class AssetExtension extends AbstractExtension
{
    private \$packages;

    public function __construct(Packages \$packages)
    {
        \$this->packages = \$packages;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('asset', [\$this, 'getAssetUrl']),
            new TwigFunction('asset_version', [\$this, 'getAssetVersion']),
        ];
    }

    /**
     * Returns the public url/path of an asset.
     *
     * If the package used to generate the path is an instance of
     * UrlPackage, you will always get a URL and not a path.
     */
    public function getAssetUrl(string \$path, string \$packageName = null): string
    {
        return \$this->packages->getUrl(\$path, \$packageName);
    }

    /**
     * Returns the version of an asset.
     */
    public function getAssetVersion(string \$path, string \$packageName = null): string
    {
        return \$this->packages->getVersion(\$path, \$packageName);
    }
}
", "@app/vendor/symfony/twig-bridge/Extension/AssetExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Extension\\AssetExtension.php");
    }
}
