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

/* @app/vendor/twig/twig/src/Loader/ChainLoader.php */
class __TwigTemplate_9c5ba15f119f80e51e49a6fb7c4559506ae169ec1d5fe8b23b1c68efae832ba0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Loader/ChainLoader.php"));

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
 * Loads templates from other loaders.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class ChainLoader implements LoaderInterface
{
    private \$hasSourceCache = [];
    private \$loaders = [];

    /**
     * @param LoaderInterface[] \$loaders
     */
    public function __construct(array \$loaders = [])
    {
        foreach (\$loaders as \$loader) {
            \$this->addLoader(\$loader);
        }
    }

    public function addLoader(LoaderInterface \$loader): void
    {
        \$this->loaders[] = \$loader;
        \$this->hasSourceCache = [];
    }

    /**
     * @return LoaderInterface[]
     */
    public function getLoaders(): array
    {
        return \$this->loaders;
    }

    public function getSourceContext(string \$name): Source
    {
        \$exceptions = [];
        foreach (\$this->loaders as \$loader) {
            if (!\$loader->exists(\$name)) {
                continue;
            }

            try {
                return \$loader->getSourceContext(\$name);
            } catch (LoaderError \$e) {
                \$exceptions[] = \$e->getMessage();
            }
        }

        throw new LoaderError(sprintf('Template \"%s\" is not defined%s.', \$name, \$exceptions ? ' ('.implode(', ', \$exceptions).')' : ''));
    }

    public function exists(string \$name): bool
    {
        if (isset(\$this->hasSourceCache[\$name])) {
            return \$this->hasSourceCache[\$name];
        }

        foreach (\$this->loaders as \$loader) {
            if (\$loader->exists(\$name)) {
                return \$this->hasSourceCache[\$name] = true;
            }
        }

        return \$this->hasSourceCache[\$name] = false;
    }

    public function getCacheKey(string \$name): string
    {
        \$exceptions = [];
        foreach (\$this->loaders as \$loader) {
            if (!\$loader->exists(\$name)) {
                continue;
            }

            try {
                return \$loader->getCacheKey(\$name);
            } catch (LoaderError \$e) {
                \$exceptions[] = \\get_class(\$loader).': '.\$e->getMessage();
            }
        }

        throw new LoaderError(sprintf('Template \"%s\" is not defined%s.', \$name, \$exceptions ? ' ('.implode(', ', \$exceptions).')' : ''));
    }

    public function isFresh(string \$name, int \$time): bool
    {
        \$exceptions = [];
        foreach (\$this->loaders as \$loader) {
            if (!\$loader->exists(\$name)) {
                continue;
            }

            try {
                return \$loader->isFresh(\$name, \$time);
            } catch (LoaderError \$e) {
                \$exceptions[] = \\get_class(\$loader).': '.\$e->getMessage();
            }
        }

        throw new LoaderError(sprintf('Template \"%s\" is not defined%s.', \$name, \$exceptions ? ' ('.implode(', ', \$exceptions).')' : ''));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Loader/ChainLoader.php";
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
 * Loads templates from other loaders.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class ChainLoader implements LoaderInterface
{
    private \$hasSourceCache = [];
    private \$loaders = [];

    /**
     * @param LoaderInterface[] \$loaders
     */
    public function __construct(array \$loaders = [])
    {
        foreach (\$loaders as \$loader) {
            \$this->addLoader(\$loader);
        }
    }

    public function addLoader(LoaderInterface \$loader): void
    {
        \$this->loaders[] = \$loader;
        \$this->hasSourceCache = [];
    }

    /**
     * @return LoaderInterface[]
     */
    public function getLoaders(): array
    {
        return \$this->loaders;
    }

    public function getSourceContext(string \$name): Source
    {
        \$exceptions = [];
        foreach (\$this->loaders as \$loader) {
            if (!\$loader->exists(\$name)) {
                continue;
            }

            try {
                return \$loader->getSourceContext(\$name);
            } catch (LoaderError \$e) {
                \$exceptions[] = \$e->getMessage();
            }
        }

        throw new LoaderError(sprintf('Template \"%s\" is not defined%s.', \$name, \$exceptions ? ' ('.implode(', ', \$exceptions).')' : ''));
    }

    public function exists(string \$name): bool
    {
        if (isset(\$this->hasSourceCache[\$name])) {
            return \$this->hasSourceCache[\$name];
        }

        foreach (\$this->loaders as \$loader) {
            if (\$loader->exists(\$name)) {
                return \$this->hasSourceCache[\$name] = true;
            }
        }

        return \$this->hasSourceCache[\$name] = false;
    }

    public function getCacheKey(string \$name): string
    {
        \$exceptions = [];
        foreach (\$this->loaders as \$loader) {
            if (!\$loader->exists(\$name)) {
                continue;
            }

            try {
                return \$loader->getCacheKey(\$name);
            } catch (LoaderError \$e) {
                \$exceptions[] = \\get_class(\$loader).': '.\$e->getMessage();
            }
        }

        throw new LoaderError(sprintf('Template \"%s\" is not defined%s.', \$name, \$exceptions ? ' ('.implode(', ', \$exceptions).')' : ''));
    }

    public function isFresh(string \$name, int \$time): bool
    {
        \$exceptions = [];
        foreach (\$this->loaders as \$loader) {
            if (!\$loader->exists(\$name)) {
                continue;
            }

            try {
                return \$loader->isFresh(\$name, \$time);
            } catch (LoaderError \$e) {
                \$exceptions[] = \\get_class(\$loader).': '.\$e->getMessage();
            }
        }

        throw new LoaderError(sprintf('Template \"%s\" is not defined%s.', \$name, \$exceptions ? ' ('.implode(', ', \$exceptions).')' : ''));
    }
}
", "@app/vendor/twig/twig/src/Loader/ChainLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Loader\\ChainLoader.php");
    }
}
