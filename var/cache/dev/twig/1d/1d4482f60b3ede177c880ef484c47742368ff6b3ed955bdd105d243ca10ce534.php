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

/* @app/vendor/symfony/maker-bundle/src/Util/AutoloaderUtil.php */
class __TwigTemplate_83669709941a66fb6db55c098e2ca471f6442328a9e473e6a53bba414d640865 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Util/AutoloaderUtil.php"));

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

/**
 * @author Ryan Weaver <weaverryan@gmail.com>
 *
 * @internal
 */
class AutoloaderUtil
{
    /**
     * @var ComposerAutoloaderFinder
     */
    private \$autoloaderFinder;

    public function __construct(ComposerAutoloaderFinder \$autoloaderFinder)
    {
        \$this->autoloaderFinder = \$autoloaderFinder;
    }

    /**
     * Returns the relative path to where a new class should live.
     *
     * @return string|null
     *
     * @throws \\Exception
     */
    public function getPathForFutureClass(string \$className)
    {
        \$classLoader = \$this->getClassLoader();

        // lookup is obviously modeled off of Composer's autoload logic
        foreach (\$classLoader->getPrefixesPsr4() as \$prefix => \$paths) {
            if (0 === strpos(\$className, \$prefix)) {
                return \$paths[0].'/'.str_replace('\\\\', '/', substr(\$className, \\strlen(\$prefix))).'.php';
            }
        }

        foreach (\$classLoader->getPrefixes() as \$prefix => \$paths) {
            if (0 === strpos(\$className, \$prefix)) {
                return \$paths[0].'/'.str_replace('\\\\', '/', \$className).'.php';
            }
        }

        if (\$classLoader->getFallbackDirsPsr4()) {
            return \$classLoader->getFallbackDirsPsr4()[0].'/'.str_replace('\\\\', '/', \$className).'.php';
        }

        if (\$classLoader->getFallbackDirs()) {
            return \$classLoader->getFallbackDirs()[0].'/'.str_replace('\\\\', '/', \$className).'.php';
        }

        return null;
    }

    public function getNamespacePrefixForClass(string \$className): string
    {
        foreach (\$this->getClassLoader()->getPrefixesPsr4() as \$prefix => \$paths) {
            if (0 === strpos(\$className, \$prefix)) {
                return \$prefix;
            }
        }

        return '';
    }

    /**
     * Returns if the namespace is configured by composer autoloader.
     */
    public function isNamespaceConfiguredToAutoload(string \$namespace): bool
    {
        \$namespace = trim(\$namespace, '\\\\').'\\\\';
        \$classLoader = \$this->getClassLoader();

        foreach (\$classLoader->getPrefixesPsr4() as \$prefix => \$paths) {
            if (0 === strpos(\$namespace, \$prefix)) {
                return true;
            }
        }

        foreach (\$classLoader->getPrefixes() as \$prefix => \$paths) {
            if (0 === strpos(\$namespace, \$prefix)) {
                return true;
            }
        }

        return false;
    }

    private function getClassLoader(): ClassLoader
    {
        return \$this->autoloaderFinder->getClassLoader();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Util/AutoloaderUtil.php";
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

/**
 * @author Ryan Weaver <weaverryan@gmail.com>
 *
 * @internal
 */
class AutoloaderUtil
{
    /**
     * @var ComposerAutoloaderFinder
     */
    private \$autoloaderFinder;

    public function __construct(ComposerAutoloaderFinder \$autoloaderFinder)
    {
        \$this->autoloaderFinder = \$autoloaderFinder;
    }

    /**
     * Returns the relative path to where a new class should live.
     *
     * @return string|null
     *
     * @throws \\Exception
     */
    public function getPathForFutureClass(string \$className)
    {
        \$classLoader = \$this->getClassLoader();

        // lookup is obviously modeled off of Composer's autoload logic
        foreach (\$classLoader->getPrefixesPsr4() as \$prefix => \$paths) {
            if (0 === strpos(\$className, \$prefix)) {
                return \$paths[0].'/'.str_replace('\\\\', '/', substr(\$className, \\strlen(\$prefix))).'.php';
            }
        }

        foreach (\$classLoader->getPrefixes() as \$prefix => \$paths) {
            if (0 === strpos(\$className, \$prefix)) {
                return \$paths[0].'/'.str_replace('\\\\', '/', \$className).'.php';
            }
        }

        if (\$classLoader->getFallbackDirsPsr4()) {
            return \$classLoader->getFallbackDirsPsr4()[0].'/'.str_replace('\\\\', '/', \$className).'.php';
        }

        if (\$classLoader->getFallbackDirs()) {
            return \$classLoader->getFallbackDirs()[0].'/'.str_replace('\\\\', '/', \$className).'.php';
        }

        return null;
    }

    public function getNamespacePrefixForClass(string \$className): string
    {
        foreach (\$this->getClassLoader()->getPrefixesPsr4() as \$prefix => \$paths) {
            if (0 === strpos(\$className, \$prefix)) {
                return \$prefix;
            }
        }

        return '';
    }

    /**
     * Returns if the namespace is configured by composer autoloader.
     */
    public function isNamespaceConfiguredToAutoload(string \$namespace): bool
    {
        \$namespace = trim(\$namespace, '\\\\').'\\\\';
        \$classLoader = \$this->getClassLoader();

        foreach (\$classLoader->getPrefixesPsr4() as \$prefix => \$paths) {
            if (0 === strpos(\$namespace, \$prefix)) {
                return true;
            }
        }

        foreach (\$classLoader->getPrefixes() as \$prefix => \$paths) {
            if (0 === strpos(\$namespace, \$prefix)) {
                return true;
            }
        }

        return false;
    }

    private function getClassLoader(): ClassLoader
    {
        return \$this->autoloaderFinder->getClassLoader();
    }
}
", "@app/vendor/symfony/maker-bundle/src/Util/AutoloaderUtil.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Util\\AutoloaderUtil.php");
    }
}
