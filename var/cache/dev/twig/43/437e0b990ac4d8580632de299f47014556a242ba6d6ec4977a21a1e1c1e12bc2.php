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

/* @app/vendor/symfony/error-handler/ErrorEnhancer/ClassNotFoundErrorEnhancer.php */
class __TwigTemplate_e58ce1ac5b4d1d5dc7e3aac8a336252fa94d9d33ef79282b2576406f0b36289d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/ErrorEnhancer/ClassNotFoundErrorEnhancer.php"));

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

namespace Symfony\\Component\\ErrorHandler\\ErrorEnhancer;

use Composer\\Autoload\\ClassLoader;
use Symfony\\Component\\ErrorHandler\\DebugClassLoader;
use Symfony\\Component\\ErrorHandler\\Error\\ClassNotFoundError;
use Symfony\\Component\\ErrorHandler\\Error\\FatalError;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ClassNotFoundErrorEnhancer implements ErrorEnhancerInterface
{
    /**
     * {@inheritdoc}
     */
    public function enhance(\\Throwable \$error): ?\\Throwable
    {
        // Some specific versions of PHP produce a fatal error when extending a not found class.
        \$message = !\$error instanceof FatalError ? \$error->getMessage() : \$error->getError()['message'];
        \$messageLen = \\strlen(\$message);
        \$notFoundSuffix = '\\' not found';
        \$notFoundSuffixLen = \\strlen(\$notFoundSuffix);
        if (\$notFoundSuffixLen > \$messageLen) {
            return null;
        }

        if (0 !== substr_compare(\$message, \$notFoundSuffix, -\$notFoundSuffixLen)) {
            return null;
        }

        foreach (['class', 'interface', 'trait'] as \$typeName) {
            \$prefix = ucfirst(\$typeName).' \\'';
            \$prefixLen = \\strlen(\$prefix);
            if (0 !== strpos(\$message, \$prefix)) {
                continue;
            }

            \$fullyQualifiedClassName = substr(\$message, \$prefixLen, -\$notFoundSuffixLen);
            if (false !== \$namespaceSeparatorIndex = strrpos(\$fullyQualifiedClassName, '\\\\')) {
                \$className = substr(\$fullyQualifiedClassName, \$namespaceSeparatorIndex + 1);
                \$namespacePrefix = substr(\$fullyQualifiedClassName, 0, \$namespaceSeparatorIndex);
                \$message = sprintf('Attempted to load %s \"%s\" from namespace \"%s\".', \$typeName, \$className, \$namespacePrefix);
                \$tail = ' for another namespace?';
            } else {
                \$className = \$fullyQualifiedClassName;
                \$message = sprintf('Attempted to load %s \"%s\" from the global namespace.', \$typeName, \$className);
                \$tail = '?';
            }

            if (\$candidates = \$this->getClassCandidates(\$className)) {
                \$tail = array_pop(\$candidates).'\"?';
                if (\$candidates) {
                    \$tail = ' for e.g. \"'.implode('\", \"', \$candidates).'\" or \"'.\$tail;
                } else {
                    \$tail = ' for \"'.\$tail;
                }
            }
            \$message .= \"\\nDid you forget a \\\"use\\\" statement\".\$tail;

            return new ClassNotFoundError(\$message, \$error);
        }

        return null;
    }

    /**
     * Tries to guess the full namespace for a given class name.
     *
     * By default, it looks for PSR-0 and PSR-4 classes registered via a Symfony or a Composer
     * autoloader (that should cover all common cases).
     *
     * @param string \$class A class name (without its namespace)
     *
     * Returns an array of possible fully qualified class names
     */
    private function getClassCandidates(string \$class): array
    {
        if (!\\is_array(\$functions = spl_autoload_functions())) {
            return [];
        }

        // find Symfony and Composer autoloaders
        \$classes = [];

        foreach (\$functions as \$function) {
            if (!\\is_array(\$function)) {
                continue;
            }
            // get class loaders wrapped by DebugClassLoader
            if (\$function[0] instanceof DebugClassLoader) {
                \$function = \$function[0]->getClassLoader();

                if (!\\is_array(\$function)) {
                    continue;
                }
            }

            if (\$function[0] instanceof ClassLoader) {
                foreach (\$function[0]->getPrefixes() as \$prefix => \$paths) {
                    foreach (\$paths as \$path) {
                        \$classes = array_merge(\$classes, \$this->findClassInPath(\$path, \$class, \$prefix));
                    }
                }

                foreach (\$function[0]->getPrefixesPsr4() as \$prefix => \$paths) {
                    foreach (\$paths as \$path) {
                        \$classes = array_merge(\$classes, \$this->findClassInPath(\$path, \$class, \$prefix));
                    }
                }
            }
        }

        return array_unique(\$classes);
    }

    private function findClassInPath(string \$path, string \$class, string \$prefix): array
    {
        if (!\$path = realpath(\$path.'/'.strtr(\$prefix, '\\\\_', '//')) ?: realpath(\$path.'/'.\\dirname(strtr(\$prefix, '\\\\_', '//'))) ?: realpath(\$path)) {
            return [];
        }

        \$classes = [];
        \$filename = \$class.'.php';
        foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$path, \\RecursiveDirectoryIterator::SKIP_DOTS), \\RecursiveIteratorIterator::LEAVES_ONLY) as \$file) {
            if (\$filename == \$file->getFileName() && \$class = \$this->convertFileToClass(\$path, \$file->getPathName(), \$prefix)) {
                \$classes[] = \$class;
            }
        }

        return \$classes;
    }

    private function convertFileToClass(string \$path, string \$file, string \$prefix): ?string
    {
        \$candidates = [
            // namespaced class
            \$namespacedClass = str_replace([\$path.\\DIRECTORY_SEPARATOR, '.php', '/'], ['', '', '\\\\'], \$file),
            // namespaced class (with target dir)
            \$prefix.\$namespacedClass,
            // namespaced class (with target dir and separator)
            \$prefix.'\\\\'.\$namespacedClass,
            // PEAR class
            str_replace('\\\\', '_', \$namespacedClass),
            // PEAR class (with target dir)
            str_replace('\\\\', '_', \$prefix.\$namespacedClass),
            // PEAR class (with target dir and separator)
            str_replace('\\\\', '_', \$prefix.'\\\\'.\$namespacedClass),
        ];

        if (\$prefix) {
            \$candidates = array_filter(\$candidates, function (\$candidate) use (\$prefix) { return 0 === strpos(\$candidate, \$prefix); });
        }

        // We cannot use the autoloader here as most of them use require; but if the class
        // is not found, the new autoloader call will require the file again leading to a
        // \"cannot redeclare class\" error.
        foreach (\$candidates as \$candidate) {
            if (\$this->classExists(\$candidate)) {
                return \$candidate;
            }
        }

        try {
            require_once \$file;
        } catch (\\Throwable \$e) {
            return null;
        }

        foreach (\$candidates as \$candidate) {
            if (\$this->classExists(\$candidate)) {
                return \$candidate;
            }
        }

        return null;
    }

    private function classExists(string \$class): bool
    {
        return class_exists(\$class, false) || interface_exists(\$class, false) || trait_exists(\$class, false);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/ErrorEnhancer/ClassNotFoundErrorEnhancer.php";
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

namespace Symfony\\Component\\ErrorHandler\\ErrorEnhancer;

use Composer\\Autoload\\ClassLoader;
use Symfony\\Component\\ErrorHandler\\DebugClassLoader;
use Symfony\\Component\\ErrorHandler\\Error\\ClassNotFoundError;
use Symfony\\Component\\ErrorHandler\\Error\\FatalError;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ClassNotFoundErrorEnhancer implements ErrorEnhancerInterface
{
    /**
     * {@inheritdoc}
     */
    public function enhance(\\Throwable \$error): ?\\Throwable
    {
        // Some specific versions of PHP produce a fatal error when extending a not found class.
        \$message = !\$error instanceof FatalError ? \$error->getMessage() : \$error->getError()['message'];
        \$messageLen = \\strlen(\$message);
        \$notFoundSuffix = '\\' not found';
        \$notFoundSuffixLen = \\strlen(\$notFoundSuffix);
        if (\$notFoundSuffixLen > \$messageLen) {
            return null;
        }

        if (0 !== substr_compare(\$message, \$notFoundSuffix, -\$notFoundSuffixLen)) {
            return null;
        }

        foreach (['class', 'interface', 'trait'] as \$typeName) {
            \$prefix = ucfirst(\$typeName).' \\'';
            \$prefixLen = \\strlen(\$prefix);
            if (0 !== strpos(\$message, \$prefix)) {
                continue;
            }

            \$fullyQualifiedClassName = substr(\$message, \$prefixLen, -\$notFoundSuffixLen);
            if (false !== \$namespaceSeparatorIndex = strrpos(\$fullyQualifiedClassName, '\\\\')) {
                \$className = substr(\$fullyQualifiedClassName, \$namespaceSeparatorIndex + 1);
                \$namespacePrefix = substr(\$fullyQualifiedClassName, 0, \$namespaceSeparatorIndex);
                \$message = sprintf('Attempted to load %s \"%s\" from namespace \"%s\".', \$typeName, \$className, \$namespacePrefix);
                \$tail = ' for another namespace?';
            } else {
                \$className = \$fullyQualifiedClassName;
                \$message = sprintf('Attempted to load %s \"%s\" from the global namespace.', \$typeName, \$className);
                \$tail = '?';
            }

            if (\$candidates = \$this->getClassCandidates(\$className)) {
                \$tail = array_pop(\$candidates).'\"?';
                if (\$candidates) {
                    \$tail = ' for e.g. \"'.implode('\", \"', \$candidates).'\" or \"'.\$tail;
                } else {
                    \$tail = ' for \"'.\$tail;
                }
            }
            \$message .= \"\\nDid you forget a \\\"use\\\" statement\".\$tail;

            return new ClassNotFoundError(\$message, \$error);
        }

        return null;
    }

    /**
     * Tries to guess the full namespace for a given class name.
     *
     * By default, it looks for PSR-0 and PSR-4 classes registered via a Symfony or a Composer
     * autoloader (that should cover all common cases).
     *
     * @param string \$class A class name (without its namespace)
     *
     * Returns an array of possible fully qualified class names
     */
    private function getClassCandidates(string \$class): array
    {
        if (!\\is_array(\$functions = spl_autoload_functions())) {
            return [];
        }

        // find Symfony and Composer autoloaders
        \$classes = [];

        foreach (\$functions as \$function) {
            if (!\\is_array(\$function)) {
                continue;
            }
            // get class loaders wrapped by DebugClassLoader
            if (\$function[0] instanceof DebugClassLoader) {
                \$function = \$function[0]->getClassLoader();

                if (!\\is_array(\$function)) {
                    continue;
                }
            }

            if (\$function[0] instanceof ClassLoader) {
                foreach (\$function[0]->getPrefixes() as \$prefix => \$paths) {
                    foreach (\$paths as \$path) {
                        \$classes = array_merge(\$classes, \$this->findClassInPath(\$path, \$class, \$prefix));
                    }
                }

                foreach (\$function[0]->getPrefixesPsr4() as \$prefix => \$paths) {
                    foreach (\$paths as \$path) {
                        \$classes = array_merge(\$classes, \$this->findClassInPath(\$path, \$class, \$prefix));
                    }
                }
            }
        }

        return array_unique(\$classes);
    }

    private function findClassInPath(string \$path, string \$class, string \$prefix): array
    {
        if (!\$path = realpath(\$path.'/'.strtr(\$prefix, '\\\\_', '//')) ?: realpath(\$path.'/'.\\dirname(strtr(\$prefix, '\\\\_', '//'))) ?: realpath(\$path)) {
            return [];
        }

        \$classes = [];
        \$filename = \$class.'.php';
        foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$path, \\RecursiveDirectoryIterator::SKIP_DOTS), \\RecursiveIteratorIterator::LEAVES_ONLY) as \$file) {
            if (\$filename == \$file->getFileName() && \$class = \$this->convertFileToClass(\$path, \$file->getPathName(), \$prefix)) {
                \$classes[] = \$class;
            }
        }

        return \$classes;
    }

    private function convertFileToClass(string \$path, string \$file, string \$prefix): ?string
    {
        \$candidates = [
            // namespaced class
            \$namespacedClass = str_replace([\$path.\\DIRECTORY_SEPARATOR, '.php', '/'], ['', '', '\\\\'], \$file),
            // namespaced class (with target dir)
            \$prefix.\$namespacedClass,
            // namespaced class (with target dir and separator)
            \$prefix.'\\\\'.\$namespacedClass,
            // PEAR class
            str_replace('\\\\', '_', \$namespacedClass),
            // PEAR class (with target dir)
            str_replace('\\\\', '_', \$prefix.\$namespacedClass),
            // PEAR class (with target dir and separator)
            str_replace('\\\\', '_', \$prefix.'\\\\'.\$namespacedClass),
        ];

        if (\$prefix) {
            \$candidates = array_filter(\$candidates, function (\$candidate) use (\$prefix) { return 0 === strpos(\$candidate, \$prefix); });
        }

        // We cannot use the autoloader here as most of them use require; but if the class
        // is not found, the new autoloader call will require the file again leading to a
        // \"cannot redeclare class\" error.
        foreach (\$candidates as \$candidate) {
            if (\$this->classExists(\$candidate)) {
                return \$candidate;
            }
        }

        try {
            require_once \$file;
        } catch (\\Throwable \$e) {
            return null;
        }

        foreach (\$candidates as \$candidate) {
            if (\$this->classExists(\$candidate)) {
                return \$candidate;
            }
        }

        return null;
    }

    private function classExists(string \$class): bool
    {
        return class_exists(\$class, false) || interface_exists(\$class, false) || trait_exists(\$class, false);
    }
}
", "@app/vendor/symfony/error-handler/ErrorEnhancer/ClassNotFoundErrorEnhancer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\ErrorEnhancer\\ClassNotFoundErrorEnhancer.php");
    }
}
