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

/* @app/vendor/symfony/config/ConfigCacheInterface.php */
class __TwigTemplate_b8e6bf1a69f2a643675f7d19f8114a599973e112791ca09f33f4d848465a0394 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/ConfigCacheInterface.php"));

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

namespace Symfony\\Component\\Config;

use Symfony\\Component\\Config\\Resource\\ResourceInterface;

/**
 * Interface for ConfigCache.
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 */
interface ConfigCacheInterface
{
    /**
     * Gets the cache file path.
     *
     * @return string The cache file path
     */
    public function getPath();

    /**
     * Checks if the cache is still fresh.
     *
     * This check should take the metadata passed to the write() method into consideration.
     *
     * @return bool Whether the cache is still fresh
     */
    public function isFresh();

    /**
     * Writes the given content into the cache file. Metadata will be stored
     * independently and can be used to check cache freshness at a later time.
     *
     * @param string                   \$content  The content to write into the cache
     * @param ResourceInterface[]|null \$metadata An array of ResourceInterface instances
     *
     * @throws \\RuntimeException When the cache file cannot be written
     */
    public function write(string \$content, array \$metadata = null);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/ConfigCacheInterface.php";
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

namespace Symfony\\Component\\Config;

use Symfony\\Component\\Config\\Resource\\ResourceInterface;

/**
 * Interface for ConfigCache.
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 */
interface ConfigCacheInterface
{
    /**
     * Gets the cache file path.
     *
     * @return string The cache file path
     */
    public function getPath();

    /**
     * Checks if the cache is still fresh.
     *
     * This check should take the metadata passed to the write() method into consideration.
     *
     * @return bool Whether the cache is still fresh
     */
    public function isFresh();

    /**
     * Writes the given content into the cache file. Metadata will be stored
     * independently and can be used to check cache freshness at a later time.
     *
     * @param string                   \$content  The content to write into the cache
     * @param ResourceInterface[]|null \$metadata An array of ResourceInterface instances
     *
     * @throws \\RuntimeException When the cache file cannot be written
     */
    public function write(string \$content, array \$metadata = null);
}
", "@app/vendor/symfony/config/ConfigCacheInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\ConfigCacheInterface.php");
    }
}
