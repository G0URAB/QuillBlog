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

/* @app/vendor/symfony/config/FileLocator.php */
class __TwigTemplate_2720a5cda925ad314de4e574f1dab195c276186e1162d15eb17b1258b01ab22d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/FileLocator.php"));

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

use Symfony\\Component\\Config\\Exception\\FileLocatorFileNotFoundException;

/**
 * FileLocator uses an array of pre-defined paths to find files.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileLocator implements FileLocatorInterface
{
    protected \$paths;

    /**
     * @param string|string[] \$paths A path or an array of paths where to look for resources
     */
    public function __construct(\$paths = [])
    {
        \$this->paths = (array) \$paths;
    }

    /**
     * {@inheritdoc}
     */
    public function locate(string \$name, string \$currentPath = null, bool \$first = true)
    {
        if ('' === \$name) {
            throw new \\InvalidArgumentException('An empty file name is not valid to be located.');
        }

        if (\$this->isAbsolutePath(\$name)) {
            if (!file_exists(\$name)) {
                throw new FileLocatorFileNotFoundException(sprintf('The file \"%s\" does not exist.', \$name), 0, null, [\$name]);
            }

            return \$name;
        }

        \$paths = \$this->paths;

        if (null !== \$currentPath) {
            array_unshift(\$paths, \$currentPath);
        }

        \$paths = array_unique(\$paths);
        \$filepaths = \$notfound = [];

        foreach (\$paths as \$path) {
            if (@file_exists(\$file = \$path.\\DIRECTORY_SEPARATOR.\$name)) {
                if (true === \$first) {
                    return \$file;
                }
                \$filepaths[] = \$file;
            } else {
                \$notfound[] = \$file;
            }
        }

        if (!\$filepaths) {
            throw new FileLocatorFileNotFoundException(sprintf('The file \"%s\" does not exist (in: %s).', \$name, implode(', ', \$paths)), 0, null, \$notfound);
        }

        return \$filepaths;
    }

    /**
     * Returns whether the file path is an absolute path.
     */
    private function isAbsolutePath(string \$file): bool
    {
        if ('/' === \$file[0] || '\\\\' === \$file[0]
            || (\\strlen(\$file) > 3 && ctype_alpha(\$file[0])
                && ':' === \$file[1]
                && ('\\\\' === \$file[2] || '/' === \$file[2])
            )
            || null !== parse_url(\$file, PHP_URL_SCHEME)
        ) {
            return true;
        }

        return false;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/FileLocator.php";
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

use Symfony\\Component\\Config\\Exception\\FileLocatorFileNotFoundException;

/**
 * FileLocator uses an array of pre-defined paths to find files.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileLocator implements FileLocatorInterface
{
    protected \$paths;

    /**
     * @param string|string[] \$paths A path or an array of paths where to look for resources
     */
    public function __construct(\$paths = [])
    {
        \$this->paths = (array) \$paths;
    }

    /**
     * {@inheritdoc}
     */
    public function locate(string \$name, string \$currentPath = null, bool \$first = true)
    {
        if ('' === \$name) {
            throw new \\InvalidArgumentException('An empty file name is not valid to be located.');
        }

        if (\$this->isAbsolutePath(\$name)) {
            if (!file_exists(\$name)) {
                throw new FileLocatorFileNotFoundException(sprintf('The file \"%s\" does not exist.', \$name), 0, null, [\$name]);
            }

            return \$name;
        }

        \$paths = \$this->paths;

        if (null !== \$currentPath) {
            array_unshift(\$paths, \$currentPath);
        }

        \$paths = array_unique(\$paths);
        \$filepaths = \$notfound = [];

        foreach (\$paths as \$path) {
            if (@file_exists(\$file = \$path.\\DIRECTORY_SEPARATOR.\$name)) {
                if (true === \$first) {
                    return \$file;
                }
                \$filepaths[] = \$file;
            } else {
                \$notfound[] = \$file;
            }
        }

        if (!\$filepaths) {
            throw new FileLocatorFileNotFoundException(sprintf('The file \"%s\" does not exist (in: %s).', \$name, implode(', ', \$paths)), 0, null, \$notfound);
        }

        return \$filepaths;
    }

    /**
     * Returns whether the file path is an absolute path.
     */
    private function isAbsolutePath(string \$file): bool
    {
        if ('/' === \$file[0] || '\\\\' === \$file[0]
            || (\\strlen(\$file) > 3 && ctype_alpha(\$file[0])
                && ':' === \$file[1]
                && ('\\\\' === \$file[2] || '/' === \$file[2])
            )
            || null !== parse_url(\$file, PHP_URL_SCHEME)
        ) {
            return true;
        }

        return false;
    }
}
", "@app/vendor/symfony/config/FileLocator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\FileLocator.php");
    }
}
