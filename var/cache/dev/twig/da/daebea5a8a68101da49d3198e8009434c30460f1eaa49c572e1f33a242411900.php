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

/* @app/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php */
class __TwigTemplate_92967b0cc62665f95ebd0efaea0a2b8504ad03655bbc3a5e7d88745e79fa0350 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php"));

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

namespace Symfony\\Component\\Routing\\Loader;

use Symfony\\Component\\Config\\Resource\\DirectoryResource;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * AnnotationDirectoryLoader loads routing information from annotations set
 * on PHP classes and methods.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AnnotationDirectoryLoader extends AnnotationFileLoader
{
    /**
     * Loads from annotations from a directory.
     *
     * @param string      \$path A directory path
     * @param string|null \$type The resource type
     *
     * @return RouteCollection A RouteCollection instance
     *
     * @throws \\InvalidArgumentException When the directory does not exist or its routes cannot be parsed
     */
    public function load(\$path, string \$type = null)
    {
        if (!is_dir(\$dir = \$this->locator->locate(\$path))) {
            return parent::supports(\$path, \$type) ? parent::load(\$path, \$type) : new RouteCollection();
        }

        \$collection = new RouteCollection();
        \$collection->addResource(new DirectoryResource(\$dir, '/\\.php\$/'));
        \$files = iterator_to_array(new \\RecursiveIteratorIterator(
            new \\RecursiveCallbackFilterIterator(
                new \\RecursiveDirectoryIterator(\$dir, \\FilesystemIterator::SKIP_DOTS | \\FilesystemIterator::FOLLOW_SYMLINKS),
                function (\\SplFileInfo \$current) {
                    return '.' !== substr(\$current->getBasename(), 0, 1);
                }
            ),
            \\RecursiveIteratorIterator::LEAVES_ONLY
        ));
        usort(\$files, function (\\SplFileInfo \$a, \\SplFileInfo \$b) {
            return (string) \$a > (string) \$b ? 1 : -1;
        });

        foreach (\$files as \$file) {
            if (!\$file->isFile() || '.php' !== substr(\$file->getFilename(), -4)) {
                continue;
            }

            if (\$class = \$this->findClass(\$file)) {
                \$refl = new \\ReflectionClass(\$class);
                if (\$refl->isAbstract()) {
                    continue;
                }

                \$collection->addCollection(\$this->loader->load(\$class, \$type));
            }
        }

        return \$collection;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, string \$type = null)
    {
        if ('annotation' === \$type) {
            return true;
        }

        if (\$type || !\\is_string(\$resource)) {
            return false;
        }

        try {
            return is_dir(\$this->locator->locate(\$resource));
        } catch (\\Exception \$e) {
            return false;
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php";
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

namespace Symfony\\Component\\Routing\\Loader;

use Symfony\\Component\\Config\\Resource\\DirectoryResource;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * AnnotationDirectoryLoader loads routing information from annotations set
 * on PHP classes and methods.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AnnotationDirectoryLoader extends AnnotationFileLoader
{
    /**
     * Loads from annotations from a directory.
     *
     * @param string      \$path A directory path
     * @param string|null \$type The resource type
     *
     * @return RouteCollection A RouteCollection instance
     *
     * @throws \\InvalidArgumentException When the directory does not exist or its routes cannot be parsed
     */
    public function load(\$path, string \$type = null)
    {
        if (!is_dir(\$dir = \$this->locator->locate(\$path))) {
            return parent::supports(\$path, \$type) ? parent::load(\$path, \$type) : new RouteCollection();
        }

        \$collection = new RouteCollection();
        \$collection->addResource(new DirectoryResource(\$dir, '/\\.php\$/'));
        \$files = iterator_to_array(new \\RecursiveIteratorIterator(
            new \\RecursiveCallbackFilterIterator(
                new \\RecursiveDirectoryIterator(\$dir, \\FilesystemIterator::SKIP_DOTS | \\FilesystemIterator::FOLLOW_SYMLINKS),
                function (\\SplFileInfo \$current) {
                    return '.' !== substr(\$current->getBasename(), 0, 1);
                }
            ),
            \\RecursiveIteratorIterator::LEAVES_ONLY
        ));
        usort(\$files, function (\\SplFileInfo \$a, \\SplFileInfo \$b) {
            return (string) \$a > (string) \$b ? 1 : -1;
        });

        foreach (\$files as \$file) {
            if (!\$file->isFile() || '.php' !== substr(\$file->getFilename(), -4)) {
                continue;
            }

            if (\$class = \$this->findClass(\$file)) {
                \$refl = new \\ReflectionClass(\$class);
                if (\$refl->isAbstract()) {
                    continue;
                }

                \$collection->addCollection(\$this->loader->load(\$class, \$type));
            }
        }

        return \$collection;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, string \$type = null)
    {
        if ('annotation' === \$type) {
            return true;
        }

        if (\$type || !\\is_string(\$resource)) {
            return false;
        }

        try {
            return is_dir(\$this->locator->locate(\$resource));
        } catch (\\Exception \$e) {
            return false;
        }
    }
}
", "@app/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\routing\\Loader\\AnnotationDirectoryLoader.php");
    }
}
