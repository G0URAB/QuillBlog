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

/* @app/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php */
class __TwigTemplate_78a034a5a815d9ff50c32908b20d5617dd869c805b45f17d0db42191b829f247 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php"));

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
 * Asset version strategy interface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface VersionStrategyInterface
{
    /**
     * Returns the asset version for an asset.
     *
     * @return string The version string
     */
    public function getVersion(string \$path);

    /**
     * Applies version to the supplied path.
     *
     * @return string The versionized path
     */
    public function applyVersion(string \$path);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php";
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
 * Asset version strategy interface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface VersionStrategyInterface
{
    /**
     * Returns the asset version for an asset.
     *
     * @return string The version string
     */
    public function getVersion(string \$path);

    /**
     * Applies version to the supplied path.
     *
     * @return string The versionized path
     */
    public function applyVersion(string \$path);
}
", "@app/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\asset\\VersionStrategy\\VersionStrategyInterface.php");
    }
}
