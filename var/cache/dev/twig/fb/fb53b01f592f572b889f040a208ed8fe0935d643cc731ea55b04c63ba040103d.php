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

/* @app/vendor/twig/twig/src/Loader/LoaderInterface.php */
class __TwigTemplate_4d687e1f0d53206296f67ea83000c8cdae99a6504ce9894bbeea87d761cd8ee3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Loader/LoaderInterface.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Loader;

use Twig\\Error\\LoaderError;
use Twig\\Source;

/**
 * Interface all loaders must implement.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface LoaderInterface
{
    /**
     * Returns the source context for a given template logical name.
     *
     * @throws LoaderError When \$name is not found
     */
    public function getSourceContext(string \$name): Source;

    /**
     * Gets the cache key to use for the cache for a given template name.
     *
     * @throws LoaderError When \$name is not found
     */
    public function getCacheKey(string \$name): string;

    /**
     * @param int \$time Timestamp of the last modification time of the cached template
     *
     * @throws LoaderError When \$name is not found
     */
    public function isFresh(string \$name, int \$time): bool;

    /**
     * @return bool
     */
    public function exists(string \$name);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Loader/LoaderInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Loader;

use Twig\\Error\\LoaderError;
use Twig\\Source;

/**
 * Interface all loaders must implement.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface LoaderInterface
{
    /**
     * Returns the source context for a given template logical name.
     *
     * @throws LoaderError When \$name is not found
     */
    public function getSourceContext(string \$name): Source;

    /**
     * Gets the cache key to use for the cache for a given template name.
     *
     * @throws LoaderError When \$name is not found
     */
    public function getCacheKey(string \$name): string;

    /**
     * @param int \$time Timestamp of the last modification time of the cached template
     *
     * @throws LoaderError When \$name is not found
     */
    public function isFresh(string \$name, int \$time): bool;

    /**
     * @return bool
     */
    public function exists(string \$name);
}
", "@app/vendor/twig/twig/src/Loader/LoaderInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Loader\\LoaderInterface.php");
    }
}
