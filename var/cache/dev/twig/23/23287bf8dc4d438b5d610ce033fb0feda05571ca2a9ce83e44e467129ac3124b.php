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

/* @app/vendor/symfony/finder/Iterator/ExcludeDirectoryFilterIterator.php */
class __TwigTemplate_89eeb0cfa837f646d28a9261c06b053bbe78c654bdfbc9031fc31bd25ab3bddd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/finder/Iterator/ExcludeDirectoryFilterIterator.php"));

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

namespace Symfony\\Component\\Finder\\Iterator;

/**
 * ExcludeDirectoryFilterIterator filters out directories.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExcludeDirectoryFilterIterator extends \\FilterIterator implements \\RecursiveIterator
{
    private \$iterator;
    private \$isRecursive;
    private \$excludedDirs = [];
    private \$excludedPattern;

    /**
     * @param \\Iterator \$iterator    The Iterator to filter
     * @param string[]  \$directories An array of directories to exclude
     */
    public function __construct(\\Iterator \$iterator, array \$directories)
    {
        \$this->iterator = \$iterator;
        \$this->isRecursive = \$iterator instanceof \\RecursiveIterator;
        \$patterns = [];
        foreach (\$directories as \$directory) {
            \$directory = rtrim(\$directory, '/');
            if (!\$this->isRecursive || false !== strpos(\$directory, '/')) {
                \$patterns[] = preg_quote(\$directory, '#');
            } else {
                \$this->excludedDirs[\$directory] = true;
            }
        }
        if (\$patterns) {
            \$this->excludedPattern = '#(?:^|/)(?:'.implode('|', \$patterns).')(?:/|\$)#';
        }

        parent::__construct(\$iterator);
    }

    /**
     * Filters the iterator values.
     *
     * @return bool True if the value should be kept, false otherwise
     */
    public function accept()
    {
        if (\$this->isRecursive && isset(\$this->excludedDirs[\$this->getFilename()]) && \$this->isDir()) {
            return false;
        }

        if (\$this->excludedPattern) {
            \$path = \$this->isDir() ? \$this->current()->getRelativePathname() : \$this->current()->getRelativePath();
            \$path = str_replace('\\\\', '/', \$path);

            return !preg_match(\$this->excludedPattern, \$path);
        }

        return true;
    }

    /**
     * @return bool
     */
    public function hasChildren()
    {
        return \$this->isRecursive && \$this->iterator->hasChildren();
    }

    public function getChildren()
    {
        \$children = new self(\$this->iterator->getChildren(), []);
        \$children->excludedDirs = \$this->excludedDirs;
        \$children->excludedPattern = \$this->excludedPattern;

        return \$children;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/finder/Iterator/ExcludeDirectoryFilterIterator.php";
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

namespace Symfony\\Component\\Finder\\Iterator;

/**
 * ExcludeDirectoryFilterIterator filters out directories.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExcludeDirectoryFilterIterator extends \\FilterIterator implements \\RecursiveIterator
{
    private \$iterator;
    private \$isRecursive;
    private \$excludedDirs = [];
    private \$excludedPattern;

    /**
     * @param \\Iterator \$iterator    The Iterator to filter
     * @param string[]  \$directories An array of directories to exclude
     */
    public function __construct(\\Iterator \$iterator, array \$directories)
    {
        \$this->iterator = \$iterator;
        \$this->isRecursive = \$iterator instanceof \\RecursiveIterator;
        \$patterns = [];
        foreach (\$directories as \$directory) {
            \$directory = rtrim(\$directory, '/');
            if (!\$this->isRecursive || false !== strpos(\$directory, '/')) {
                \$patterns[] = preg_quote(\$directory, '#');
            } else {
                \$this->excludedDirs[\$directory] = true;
            }
        }
        if (\$patterns) {
            \$this->excludedPattern = '#(?:^|/)(?:'.implode('|', \$patterns).')(?:/|\$)#';
        }

        parent::__construct(\$iterator);
    }

    /**
     * Filters the iterator values.
     *
     * @return bool True if the value should be kept, false otherwise
     */
    public function accept()
    {
        if (\$this->isRecursive && isset(\$this->excludedDirs[\$this->getFilename()]) && \$this->isDir()) {
            return false;
        }

        if (\$this->excludedPattern) {
            \$path = \$this->isDir() ? \$this->current()->getRelativePathname() : \$this->current()->getRelativePath();
            \$path = str_replace('\\\\', '/', \$path);

            return !preg_match(\$this->excludedPattern, \$path);
        }

        return true;
    }

    /**
     * @return bool
     */
    public function hasChildren()
    {
        return \$this->isRecursive && \$this->iterator->hasChildren();
    }

    public function getChildren()
    {
        \$children = new self(\$this->iterator->getChildren(), []);
        \$children->excludedDirs = \$this->excludedDirs;
        \$children->excludedPattern = \$this->excludedPattern;

        return \$children;
    }
}
", "@app/vendor/symfony/finder/Iterator/ExcludeDirectoryFilterIterator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\finder\\Iterator\\ExcludeDirectoryFilterIterator.php");
    }
}
