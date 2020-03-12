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

/* @app/vendor/symfony/asset/PathPackage.php */
class __TwigTemplate_f16e84287196e4a9a05c11ea79872f816a0c9d3c8b3486e9ac79523be786cedf extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/asset/PathPackage.php"));

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

namespace Symfony\\Component\\Asset;

use Symfony\\Component\\Asset\\Context\\ContextInterface;
use Symfony\\Component\\Asset\\VersionStrategy\\VersionStrategyInterface;

/**
 * Package that adds a base path to asset URLs in addition to a version.
 *
 * In addition to the provided base path, this package also automatically
 * prepends the current request base path if a Context is available to
 * allow a website to be hosted easily under any given path under the Web
 * Server root directory.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PathPackage extends Package
{
    private \$basePath;

    /**
     * @param string \$basePath The base path to be prepended to relative paths
     */
    public function __construct(string \$basePath, VersionStrategyInterface \$versionStrategy, ContextInterface \$context = null)
    {
        parent::__construct(\$versionStrategy, \$context);

        if (!\$basePath) {
            \$this->basePath = '/';
        } else {
            if ('/' != \$basePath[0]) {
                \$basePath = '/'.\$basePath;
            }

            \$this->basePath = rtrim(\$basePath, '/').'/';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(string \$path)
    {
        \$versionedPath = parent::getUrl(\$path);

        // if absolute or begins with /, we're done
        if (\$this->isAbsoluteUrl(\$versionedPath) || (\$versionedPath && '/' === \$versionedPath[0])) {
            return \$versionedPath;
        }

        return \$this->getBasePath().ltrim(\$versionedPath, '/');
    }

    /**
     * Returns the base path.
     *
     * @return string The base path
     */
    public function getBasePath()
    {
        return \$this->getContext()->getBasePath().\$this->basePath;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/asset/PathPackage.php";
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

namespace Symfony\\Component\\Asset;

use Symfony\\Component\\Asset\\Context\\ContextInterface;
use Symfony\\Component\\Asset\\VersionStrategy\\VersionStrategyInterface;

/**
 * Package that adds a base path to asset URLs in addition to a version.
 *
 * In addition to the provided base path, this package also automatically
 * prepends the current request base path if a Context is available to
 * allow a website to be hosted easily under any given path under the Web
 * Server root directory.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PathPackage extends Package
{
    private \$basePath;

    /**
     * @param string \$basePath The base path to be prepended to relative paths
     */
    public function __construct(string \$basePath, VersionStrategyInterface \$versionStrategy, ContextInterface \$context = null)
    {
        parent::__construct(\$versionStrategy, \$context);

        if (!\$basePath) {
            \$this->basePath = '/';
        } else {
            if ('/' != \$basePath[0]) {
                \$basePath = '/'.\$basePath;
            }

            \$this->basePath = rtrim(\$basePath, '/').'/';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(string \$path)
    {
        \$versionedPath = parent::getUrl(\$path);

        // if absolute or begins with /, we're done
        if (\$this->isAbsoluteUrl(\$versionedPath) || (\$versionedPath && '/' === \$versionedPath[0])) {
            return \$versionedPath;
        }

        return \$this->getBasePath().ltrim(\$versionedPath, '/');
    }

    /**
     * Returns the base path.
     *
     * @return string The base path
     */
    public function getBasePath()
    {
        return \$this->getContext()->getBasePath().\$this->basePath;
    }
}
", "@app/vendor/symfony/asset/PathPackage.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\asset\\PathPackage.php");
    }
}
