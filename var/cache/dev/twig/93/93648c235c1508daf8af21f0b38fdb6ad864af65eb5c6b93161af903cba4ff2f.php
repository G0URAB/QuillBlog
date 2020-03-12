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

/* @app/vendor/symfony/config/Loader/LoaderResolver.php */
class __TwigTemplate_40dda2a8577308d6be88a24a05a05db91713607a36a589ae36c5cfb8f0f96613 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Loader/LoaderResolver.php"));

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

namespace Symfony\\Component\\Config\\Loader;

/**
 * LoaderResolver selects a loader for a given resource.
 *
 * A resource can be anything (e.g. a full path to a config file or a Closure).
 * Each loader determines whether it can load a resource and how.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LoaderResolver implements LoaderResolverInterface
{
    /**
     * @var LoaderInterface[] An array of LoaderInterface objects
     */
    private \$loaders = [];

    /**
     * @param LoaderInterface[] \$loaders An array of loaders
     */
    public function __construct(array \$loaders = [])
    {
        foreach (\$loaders as \$loader) {
            \$this->addLoader(\$loader);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\$resource, string \$type = null)
    {
        foreach (\$this->loaders as \$loader) {
            if (\$loader->supports(\$resource, \$type)) {
                return \$loader;
            }
        }

        return false;
    }

    public function addLoader(LoaderInterface \$loader)
    {
        \$this->loaders[] = \$loader;
        \$loader->setResolver(\$this);
    }

    /**
     * Returns the registered loaders.
     *
     * @return LoaderInterface[] An array of LoaderInterface instances
     */
    public function getLoaders()
    {
        return \$this->loaders;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Loader/LoaderResolver.php";
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

namespace Symfony\\Component\\Config\\Loader;

/**
 * LoaderResolver selects a loader for a given resource.
 *
 * A resource can be anything (e.g. a full path to a config file or a Closure).
 * Each loader determines whether it can load a resource and how.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LoaderResolver implements LoaderResolverInterface
{
    /**
     * @var LoaderInterface[] An array of LoaderInterface objects
     */
    private \$loaders = [];

    /**
     * @param LoaderInterface[] \$loaders An array of loaders
     */
    public function __construct(array \$loaders = [])
    {
        foreach (\$loaders as \$loader) {
            \$this->addLoader(\$loader);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\$resource, string \$type = null)
    {
        foreach (\$this->loaders as \$loader) {
            if (\$loader->supports(\$resource, \$type)) {
                return \$loader;
            }
        }

        return false;
    }

    public function addLoader(LoaderInterface \$loader)
    {
        \$this->loaders[] = \$loader;
        \$loader->setResolver(\$this);
    }

    /**
     * Returns the registered loaders.
     *
     * @return LoaderInterface[] An array of LoaderInterface instances
     */
    public function getLoaders()
    {
        return \$this->loaders;
    }
}
", "@app/vendor/symfony/config/Loader/LoaderResolver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Loader\\LoaderResolver.php");
    }
}
