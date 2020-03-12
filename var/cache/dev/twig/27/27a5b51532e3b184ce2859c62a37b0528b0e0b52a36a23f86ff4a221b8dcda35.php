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

/* @app/vendor/symfony/asset/VersionStrategy/StaticVersionStrategy.php */
class __TwigTemplate_287a56e4b6ed40c6f1ba892f3094ae94de315c64c2e75e076db4bf0cd83f2693 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/asset/VersionStrategy/StaticVersionStrategy.php"));

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
 * Returns the same version for all assets.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StaticVersionStrategy implements VersionStrategyInterface
{
    private \$version;
    private \$format;

    /**
     * @param string \$version Version number
     * @param string \$format  Url format
     */
    public function __construct(string \$version, string \$format = null)
    {
        \$this->version = \$version;
        \$this->format = \$format ?: '%s?%s';
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion(string \$path)
    {
        return \$this->version;
    }

    /**
     * {@inheritdoc}
     */
    public function applyVersion(string \$path)
    {
        \$versionized = sprintf(\$this->format, ltrim(\$path, '/'), \$this->getVersion(\$path));

        if (\$path && '/' == \$path[0]) {
            return '/'.\$versionized;
        }

        return \$versionized;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/asset/VersionStrategy/StaticVersionStrategy.php";
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
 * Returns the same version for all assets.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StaticVersionStrategy implements VersionStrategyInterface
{
    private \$version;
    private \$format;

    /**
     * @param string \$version Version number
     * @param string \$format  Url format
     */
    public function __construct(string \$version, string \$format = null)
    {
        \$this->version = \$version;
        \$this->format = \$format ?: '%s?%s';
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion(string \$path)
    {
        return \$this->version;
    }

    /**
     * {@inheritdoc}
     */
    public function applyVersion(string \$path)
    {
        \$versionized = sprintf(\$this->format, ltrim(\$path, '/'), \$this->getVersion(\$path));

        if (\$path && '/' == \$path[0]) {
            return '/'.\$versionized;
        }

        return \$versionized;
    }
}
", "@app/vendor/symfony/asset/VersionStrategy/StaticVersionStrategy.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\asset\\VersionStrategy\\StaticVersionStrategy.php");
    }
}
