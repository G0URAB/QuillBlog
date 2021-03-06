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

/* @app/vendor/symfony/asset/VersionStrategy/JsonManifestVersionStrategy.php */
class __TwigTemplate_b12f0ed9038407ab18c950762e8924a973a909aa9fab134164c5e45a02fa41c9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/asset/VersionStrategy/JsonManifestVersionStrategy.php"));

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

namespace Symfony\\Component\\Asset\\VersionStrategy;

/**
 * Reads the versioned path of an asset from a JSON manifest file.
 *
 * For example, the manifest file might look like this:
 *     {
 *         \"main.js\": \"main.abc123.js\",
 *         \"css/styles.css\": \"css/styles.555abc.css\"
 *     }
 *
 * You could then ask for the version of \"main.js\" or \"css/styles.css\".
 */
class JsonManifestVersionStrategy implements VersionStrategyInterface
{
    private \$manifestPath;
    private \$manifestData;

    /**
     * @param string \$manifestPath Absolute path to the manifest file
     */
    public function __construct(string \$manifestPath)
    {
        \$this->manifestPath = \$manifestPath;
    }

    /**
     * With a manifest, we don't really know or care about what
     * the version is. Instead, this returns the path to the
     * versioned file.
     */
    public function getVersion(string \$path)
    {
        return \$this->applyVersion(\$path);
    }

    public function applyVersion(string \$path)
    {
        return \$this->getManifestPath(\$path) ?: \$path;
    }

    private function getManifestPath(string \$path): ?string
    {
        if (null === \$this->manifestData) {
            if (!file_exists(\$this->manifestPath)) {
                throw new \\RuntimeException(sprintf('Asset manifest file \"%s\" does not exist.', \$this->manifestPath));
            }

            \$this->manifestData = json_decode(file_get_contents(\$this->manifestPath), true);
            if (0 < json_last_error()) {
                throw new \\RuntimeException(sprintf('Error parsing JSON from asset manifest file \"%s\" - %s', \$this->manifestPath, json_last_error_msg()));
            }
        }

        return isset(\$this->manifestData[\$path]) ? \$this->manifestData[\$path] : null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/asset/VersionStrategy/JsonManifestVersionStrategy.php";
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

namespace Symfony\\Component\\Asset\\VersionStrategy;

/**
 * Reads the versioned path of an asset from a JSON manifest file.
 *
 * For example, the manifest file might look like this:
 *     {
 *         \"main.js\": \"main.abc123.js\",
 *         \"css/styles.css\": \"css/styles.555abc.css\"
 *     }
 *
 * You could then ask for the version of \"main.js\" or \"css/styles.css\".
 */
class JsonManifestVersionStrategy implements VersionStrategyInterface
{
    private \$manifestPath;
    private \$manifestData;

    /**
     * @param string \$manifestPath Absolute path to the manifest file
     */
    public function __construct(string \$manifestPath)
    {
        \$this->manifestPath = \$manifestPath;
    }

    /**
     * With a manifest, we don't really know or care about what
     * the version is. Instead, this returns the path to the
     * versioned file.
     */
    public function getVersion(string \$path)
    {
        return \$this->applyVersion(\$path);
    }

    public function applyVersion(string \$path)
    {
        return \$this->getManifestPath(\$path) ?: \$path;
    }

    private function getManifestPath(string \$path): ?string
    {
        if (null === \$this->manifestData) {
            if (!file_exists(\$this->manifestPath)) {
                throw new \\RuntimeException(sprintf('Asset manifest file \"%s\" does not exist.', \$this->manifestPath));
            }

            \$this->manifestData = json_decode(file_get_contents(\$this->manifestPath), true);
            if (0 < json_last_error()) {
                throw new \\RuntimeException(sprintf('Error parsing JSON from asset manifest file \"%s\" - %s', \$this->manifestPath, json_last_error_msg()));
            }
        }

        return isset(\$this->manifestData[\$path]) ? \$this->manifestData[\$path] : null;
    }
}
", "@app/vendor/symfony/asset/VersionStrategy/JsonManifestVersionStrategy.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\asset\\VersionStrategy\\JsonManifestVersionStrategy.php");
    }
}
