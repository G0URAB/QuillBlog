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

/* @app/vendor/symfony/routing/Loader/AnnotationFileLoader.php */
class __TwigTemplate_115a36ea522a9ed95910d9391221a8d66f7081d051be7fbb7579de63c11844a9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/routing/Loader/AnnotationFileLoader.php"));

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

use Symfony\\Component\\Config\\FileLocatorInterface;
use Symfony\\Component\\Config\\Loader\\FileLoader;
use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * AnnotationFileLoader loads routing information from annotations set
 * on a PHP class and its methods.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AnnotationFileLoader extends FileLoader
{
    protected \$loader;

    /**
     * @throws \\RuntimeException
     */
    public function __construct(FileLocatorInterface \$locator, AnnotationClassLoader \$loader)
    {
        if (!\\function_exists('token_get_all')) {
            throw new \\LogicException('The Tokenizer extension is required for the routing annotation loaders.');
        }

        parent::__construct(\$locator);

        \$this->loader = \$loader;
    }

    /**
     * Loads from annotations from a file.
     *
     * @param string      \$file A PHP file path
     * @param string|null \$type The resource type
     *
     * @return RouteCollection|null A RouteCollection instance
     *
     * @throws \\InvalidArgumentException When the file does not exist or its routes cannot be parsed
     */
    public function load(\$file, string \$type = null)
    {
        \$path = \$this->locator->locate(\$file);

        \$collection = new RouteCollection();
        if (\$class = \$this->findClass(\$path)) {
            \$refl = new \\ReflectionClass(\$class);
            if (\$refl->isAbstract()) {
                return null;
            }

            \$collection->addResource(new FileResource(\$path));
            \$collection->addCollection(\$this->loader->load(\$class, \$type));
        }

        gc_mem_caches();

        return \$collection;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, string \$type = null)
    {
        return \\is_string(\$resource) && 'php' === pathinfo(\$resource, PATHINFO_EXTENSION) && (!\$type || 'annotation' === \$type);
    }

    /**
     * Returns the full class name for the first class in the file.
     *
     * @return string|false Full class name if found, false otherwise
     */
    protected function findClass(string \$file)
    {
        \$class = false;
        \$namespace = false;
        \$tokens = token_get_all(file_get_contents(\$file));

        if (1 === \\count(\$tokens) && T_INLINE_HTML === \$tokens[0][0]) {
            throw new \\InvalidArgumentException(sprintf('The file \"%s\" does not contain PHP code. Did you forgot to add the \"<?php\" start tag at the beginning of the file?', \$file));
        }

        for (\$i = 0; isset(\$tokens[\$i]); ++\$i) {
            \$token = \$tokens[\$i];

            if (!isset(\$token[1])) {
                continue;
            }

            if (true === \$class && T_STRING === \$token[0]) {
                return \$namespace.'\\\\'.\$token[1];
            }

            if (true === \$namespace && T_STRING === \$token[0]) {
                \$namespace = \$token[1];
                while (isset(\$tokens[++\$i][1]) && \\in_array(\$tokens[\$i][0], [T_NS_SEPARATOR, T_STRING])) {
                    \$namespace .= \$tokens[\$i][1];
                }
                \$token = \$tokens[\$i];
            }

            if (T_CLASS === \$token[0]) {
                // Skip usage of ::class constant and anonymous classes
                \$skipClassToken = false;
                for (\$j = \$i - 1; \$j > 0; --\$j) {
                    if (!isset(\$tokens[\$j][1])) {
                        break;
                    }

                    if (T_DOUBLE_COLON === \$tokens[\$j][0] || T_NEW === \$tokens[\$j][0]) {
                        \$skipClassToken = true;
                        break;
                    } elseif (!\\in_array(\$tokens[\$j][0], [T_WHITESPACE, T_DOC_COMMENT, T_COMMENT])) {
                        break;
                    }
                }

                if (!\$skipClassToken) {
                    \$class = true;
                }
            }

            if (T_NAMESPACE === \$token[0]) {
                \$namespace = true;
            }
        }

        return false;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/routing/Loader/AnnotationFileLoader.php";
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

use Symfony\\Component\\Config\\FileLocatorInterface;
use Symfony\\Component\\Config\\Loader\\FileLoader;
use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * AnnotationFileLoader loads routing information from annotations set
 * on a PHP class and its methods.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AnnotationFileLoader extends FileLoader
{
    protected \$loader;

    /**
     * @throws \\RuntimeException
     */
    public function __construct(FileLocatorInterface \$locator, AnnotationClassLoader \$loader)
    {
        if (!\\function_exists('token_get_all')) {
            throw new \\LogicException('The Tokenizer extension is required for the routing annotation loaders.');
        }

        parent::__construct(\$locator);

        \$this->loader = \$loader;
    }

    /**
     * Loads from annotations from a file.
     *
     * @param string      \$file A PHP file path
     * @param string|null \$type The resource type
     *
     * @return RouteCollection|null A RouteCollection instance
     *
     * @throws \\InvalidArgumentException When the file does not exist or its routes cannot be parsed
     */
    public function load(\$file, string \$type = null)
    {
        \$path = \$this->locator->locate(\$file);

        \$collection = new RouteCollection();
        if (\$class = \$this->findClass(\$path)) {
            \$refl = new \\ReflectionClass(\$class);
            if (\$refl->isAbstract()) {
                return null;
            }

            \$collection->addResource(new FileResource(\$path));
            \$collection->addCollection(\$this->loader->load(\$class, \$type));
        }

        gc_mem_caches();

        return \$collection;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, string \$type = null)
    {
        return \\is_string(\$resource) && 'php' === pathinfo(\$resource, PATHINFO_EXTENSION) && (!\$type || 'annotation' === \$type);
    }

    /**
     * Returns the full class name for the first class in the file.
     *
     * @return string|false Full class name if found, false otherwise
     */
    protected function findClass(string \$file)
    {
        \$class = false;
        \$namespace = false;
        \$tokens = token_get_all(file_get_contents(\$file));

        if (1 === \\count(\$tokens) && T_INLINE_HTML === \$tokens[0][0]) {
            throw new \\InvalidArgumentException(sprintf('The file \"%s\" does not contain PHP code. Did you forgot to add the \"<?php\" start tag at the beginning of the file?', \$file));
        }

        for (\$i = 0; isset(\$tokens[\$i]); ++\$i) {
            \$token = \$tokens[\$i];

            if (!isset(\$token[1])) {
                continue;
            }

            if (true === \$class && T_STRING === \$token[0]) {
                return \$namespace.'\\\\'.\$token[1];
            }

            if (true === \$namespace && T_STRING === \$token[0]) {
                \$namespace = \$token[1];
                while (isset(\$tokens[++\$i][1]) && \\in_array(\$tokens[\$i][0], [T_NS_SEPARATOR, T_STRING])) {
                    \$namespace .= \$tokens[\$i][1];
                }
                \$token = \$tokens[\$i];
            }

            if (T_CLASS === \$token[0]) {
                // Skip usage of ::class constant and anonymous classes
                \$skipClassToken = false;
                for (\$j = \$i - 1; \$j > 0; --\$j) {
                    if (!isset(\$tokens[\$j][1])) {
                        break;
                    }

                    if (T_DOUBLE_COLON === \$tokens[\$j][0] || T_NEW === \$tokens[\$j][0]) {
                        \$skipClassToken = true;
                        break;
                    } elseif (!\\in_array(\$tokens[\$j][0], [T_WHITESPACE, T_DOC_COMMENT, T_COMMENT])) {
                        break;
                    }
                }

                if (!\$skipClassToken) {
                    \$class = true;
                }
            }

            if (T_NAMESPACE === \$token[0]) {
                \$namespace = true;
            }
        }

        return false;
    }
}
", "@app/vendor/symfony/routing/Loader/AnnotationFileLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\routing\\Loader\\AnnotationFileLoader.php");
    }
}
