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

/* @app/vendor/symfony/maker-bundle/src/Util/ComposerAutoloaderFinder.php */
class __TwigTemplate_7a76fb9be5248083b2c798c3073867451411d8028506037900dcece502cdd022 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Util/ComposerAutoloaderFinder.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Util;

use Composer\\Autoload\\ClassLoader;
use Symfony\\Component\\Debug\\DebugClassLoader;
use Symfony\\Component\\ErrorHandler\\DebugClassLoader as ErrorHandlerDebugClassLoader;

/**
 * @internal
 */
class ComposerAutoloaderFinder
{
    private \$rootNamespace;

    /**
     * @var ClassLoader|null
     */
    private \$classLoader = null;

    public function __construct(string \$rootNamespace)
    {
        \$this->rootNamespace = [
            'psr0' => rtrim(\$rootNamespace, '\\\\'),
            'psr4' => rtrim(\$rootNamespace, '\\\\').'\\\\',
        ];
    }

    public function getClassLoader(): ClassLoader
    {
        if (null === \$this->classLoader) {
            \$this->classLoader = \$this->findComposerClassLoader();
        }

        if (null === \$this->classLoader) {
            throw new \\Exception(\"Could not find a Composer autoloader that autoloads from '{\$this->rootNamespace['psr4']}'\");
        }

        return \$this->classLoader;
    }

    /**
     * @return ClassLoader|null
     */
    private function findComposerClassLoader()
    {
        \$autoloadFunctions = spl_autoload_functions();

        foreach (\$autoloadFunctions as \$autoloader) {
            if (!\\is_array(\$autoloader)) {
                continue;
            }

            \$classLoader = \$this->extractComposerClassLoader(\$autoloader);
            if (null === \$classLoader) {
                continue;
            }

            \$finalClassLoader = \$this->locateMatchingClassLoader(\$classLoader);
            if (null !== \$finalClassLoader) {
                return \$finalClassLoader;
            }
        }

        return null;
    }

    /**
     * @return ClassLoader|null
     */
    private function extractComposerClassLoader(array \$autoloader)
    {
        if (isset(\$autoloader[0]) && \\is_object(\$autoloader[0])) {
            if (\$autoloader[0] instanceof ClassLoader) {
                return \$autoloader[0];
            }
            if (
                (\$autoloader[0] instanceof DebugClassLoader
                    || \$autoloader[0] instanceof ErrorHandlerDebugClassLoader)
                && \\is_array(\$autoloader[0]->getClassLoader())
                && \$autoloader[0]->getClassLoader()[0] instanceof ClassLoader) {
                return \$autoloader[0]->getClassLoader()[0];
            }
        }

        return null;
    }

    /**
     * @return ClassLoader|null
     */
    private function locateMatchingClassLoader(ClassLoader \$classLoader)
    {
        \$makerClassLoader = null;
        foreach (\$classLoader->getPrefixesPsr4() as \$prefix => \$paths) {
            if ('Symfony\\\\Bundle\\\\MakerBundle\\\\' === \$prefix) {
                \$makerClassLoader = \$classLoader;
            }
            if (0 === strpos(\$this->rootNamespace['psr4'], \$prefix)) {
                return \$classLoader;
            }
        }

        foreach (\$classLoader->getPrefixes() as \$prefix => \$paths) {
            if (0 === strpos(\$this->rootNamespace['psr0'], \$prefix)) {
                return \$classLoader;
            }
        }

        // Nothing found? Try the class loader where we found MakerBundle
        return \$makerClassLoader;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Util/ComposerAutoloaderFinder.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Util;

use Composer\\Autoload\\ClassLoader;
use Symfony\\Component\\Debug\\DebugClassLoader;
use Symfony\\Component\\ErrorHandler\\DebugClassLoader as ErrorHandlerDebugClassLoader;

/**
 * @internal
 */
class ComposerAutoloaderFinder
{
    private \$rootNamespace;

    /**
     * @var ClassLoader|null
     */
    private \$classLoader = null;

    public function __construct(string \$rootNamespace)
    {
        \$this->rootNamespace = [
            'psr0' => rtrim(\$rootNamespace, '\\\\'),
            'psr4' => rtrim(\$rootNamespace, '\\\\').'\\\\',
        ];
    }

    public function getClassLoader(): ClassLoader
    {
        if (null === \$this->classLoader) {
            \$this->classLoader = \$this->findComposerClassLoader();
        }

        if (null === \$this->classLoader) {
            throw new \\Exception(\"Could not find a Composer autoloader that autoloads from '{\$this->rootNamespace['psr4']}'\");
        }

        return \$this->classLoader;
    }

    /**
     * @return ClassLoader|null
     */
    private function findComposerClassLoader()
    {
        \$autoloadFunctions = spl_autoload_functions();

        foreach (\$autoloadFunctions as \$autoloader) {
            if (!\\is_array(\$autoloader)) {
                continue;
            }

            \$classLoader = \$this->extractComposerClassLoader(\$autoloader);
            if (null === \$classLoader) {
                continue;
            }

            \$finalClassLoader = \$this->locateMatchingClassLoader(\$classLoader);
            if (null !== \$finalClassLoader) {
                return \$finalClassLoader;
            }
        }

        return null;
    }

    /**
     * @return ClassLoader|null
     */
    private function extractComposerClassLoader(array \$autoloader)
    {
        if (isset(\$autoloader[0]) && \\is_object(\$autoloader[0])) {
            if (\$autoloader[0] instanceof ClassLoader) {
                return \$autoloader[0];
            }
            if (
                (\$autoloader[0] instanceof DebugClassLoader
                    || \$autoloader[0] instanceof ErrorHandlerDebugClassLoader)
                && \\is_array(\$autoloader[0]->getClassLoader())
                && \$autoloader[0]->getClassLoader()[0] instanceof ClassLoader) {
                return \$autoloader[0]->getClassLoader()[0];
            }
        }

        return null;
    }

    /**
     * @return ClassLoader|null
     */
    private function locateMatchingClassLoader(ClassLoader \$classLoader)
    {
        \$makerClassLoader = null;
        foreach (\$classLoader->getPrefixesPsr4() as \$prefix => \$paths) {
            if ('Symfony\\\\Bundle\\\\MakerBundle\\\\' === \$prefix) {
                \$makerClassLoader = \$classLoader;
            }
            if (0 === strpos(\$this->rootNamespace['psr4'], \$prefix)) {
                return \$classLoader;
            }
        }

        foreach (\$classLoader->getPrefixes() as \$prefix => \$paths) {
            if (0 === strpos(\$this->rootNamespace['psr0'], \$prefix)) {
                return \$classLoader;
            }
        }

        // Nothing found? Try the class loader where we found MakerBundle
        return \$makerClassLoader;
    }
}
", "@app/vendor/symfony/maker-bundle/src/Util/ComposerAutoloaderFinder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Util\\ComposerAutoloaderFinder.php");
    }
}
