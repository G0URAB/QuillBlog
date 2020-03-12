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

/* @app/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php */
class __TwigTemplate_3f89489fb03138d093f8dea8552a265e324b3b0271a7de1b2f00e615ea041cb2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php"));

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

/**
 * A ConfigCacheFactory implementation that validates the
 * cache with an arbitrary set of ResourceCheckers.
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class ResourceCheckerConfigCacheFactory implements ConfigCacheFactoryInterface
{
    private \$resourceCheckers = [];

    /**
     * @param iterable|ResourceCheckerInterface[] \$resourceCheckers
     */
    public function __construct(iterable \$resourceCheckers = [])
    {
        \$this->resourceCheckers = \$resourceCheckers;
    }

    /**
     * {@inheritdoc}
     */
    public function cache(string \$file, callable \$callable)
    {
        \$cache = new ResourceCheckerConfigCache(\$file, \$this->resourceCheckers);
        if (!\$cache->isFresh()) {
            \$callable(\$cache);
        }

        return \$cache;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php";
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

/**
 * A ConfigCacheFactory implementation that validates the
 * cache with an arbitrary set of ResourceCheckers.
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class ResourceCheckerConfigCacheFactory implements ConfigCacheFactoryInterface
{
    private \$resourceCheckers = [];

    /**
     * @param iterable|ResourceCheckerInterface[] \$resourceCheckers
     */
    public function __construct(iterable \$resourceCheckers = [])
    {
        \$this->resourceCheckers = \$resourceCheckers;
    }

    /**
     * {@inheritdoc}
     */
    public function cache(string \$file, callable \$callable)
    {
        \$cache = new ResourceCheckerConfigCache(\$file, \$this->resourceCheckers);
        if (!\$cache->isFresh()) {
            \$callable(\$cache);
        }

        return \$cache;
    }
}
", "@app/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\ResourceCheckerConfigCacheFactory.php");
    }
}
