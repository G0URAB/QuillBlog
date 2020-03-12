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

/* @app/vendor/symfony/twig-bundle/TemplateIterator.php */
class __TwigTemplate_c1eb07cff741ecfb8956725dbf80deb157907fe3b0bbb8be2ba0a0af5cea0f12 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bundle/TemplateIterator.php"));

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

namespace Symfony\\Bundle\\TwigBundle;

use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * Iterator for all templates in bundles and in the application Resources directory.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class TemplateIterator implements \\IteratorAggregate
{
    private \$kernel;
    private \$templates;
    private \$paths;
    private \$defaultPath;

    /**
     * @param array       \$paths       Additional Twig paths to warm
     * @param string|null \$defaultPath The directory where global templates can be stored
     */
    public function __construct(KernelInterface \$kernel, array \$paths = [], string \$defaultPath = null)
    {
        \$this->kernel = \$kernel;
        \$this->paths = \$paths;
        \$this->defaultPath = \$defaultPath;
    }

    public function getIterator(): \\Traversable
    {
        if (null !== \$this->templates) {
            return \$this->templates;
        }

        \$templates = null !== \$this->defaultPath ? \$this->findTemplatesInDirectory(\$this->defaultPath, null, ['bundles']) : [];

        foreach (\$this->kernel->getBundles() as \$bundle) {
            \$name = \$bundle->getName();
            if ('Bundle' === substr(\$name, -6)) {
                \$name = substr(\$name, 0, -6);
            }

            \$bundleTemplatesDir = is_dir(\$bundle->getPath().'/Resources/views') ? \$bundle->getPath().'/Resources/views' : \$bundle->getPath().'/templates';

            \$templates = array_merge(
                \$templates,
                \$this->findTemplatesInDirectory(\$bundleTemplatesDir, \$name),
                null !== \$this->defaultPath ? \$this->findTemplatesInDirectory(\$this->defaultPath.'/bundles/'.\$bundle->getName(), \$name) : []
            );
        }

        foreach (\$this->paths as \$dir => \$namespace) {
            \$templates = array_merge(\$templates, \$this->findTemplatesInDirectory(\$dir, \$namespace));
        }

        return \$this->templates = new \\ArrayIterator(array_unique(\$templates));
    }

    /**
     * Find templates in the given directory.
     *
     * @return string[]
     */
    private function findTemplatesInDirectory(string \$dir, string \$namespace = null, array \$excludeDirs = []): array
    {
        if (!is_dir(\$dir)) {
            return [];
        }

        \$templates = [];
        foreach (Finder::create()->files()->followLinks()->in(\$dir)->exclude(\$excludeDirs) as \$file) {
            \$templates[] = (null !== \$namespace ? '@'.\$namespace.'/' : '').str_replace('\\\\', '/', \$file->getRelativePathname());
        }

        return \$templates;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bundle/TemplateIterator.php";
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

namespace Symfony\\Bundle\\TwigBundle;

use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * Iterator for all templates in bundles and in the application Resources directory.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class TemplateIterator implements \\IteratorAggregate
{
    private \$kernel;
    private \$templates;
    private \$paths;
    private \$defaultPath;

    /**
     * @param array       \$paths       Additional Twig paths to warm
     * @param string|null \$defaultPath The directory where global templates can be stored
     */
    public function __construct(KernelInterface \$kernel, array \$paths = [], string \$defaultPath = null)
    {
        \$this->kernel = \$kernel;
        \$this->paths = \$paths;
        \$this->defaultPath = \$defaultPath;
    }

    public function getIterator(): \\Traversable
    {
        if (null !== \$this->templates) {
            return \$this->templates;
        }

        \$templates = null !== \$this->defaultPath ? \$this->findTemplatesInDirectory(\$this->defaultPath, null, ['bundles']) : [];

        foreach (\$this->kernel->getBundles() as \$bundle) {
            \$name = \$bundle->getName();
            if ('Bundle' === substr(\$name, -6)) {
                \$name = substr(\$name, 0, -6);
            }

            \$bundleTemplatesDir = is_dir(\$bundle->getPath().'/Resources/views') ? \$bundle->getPath().'/Resources/views' : \$bundle->getPath().'/templates';

            \$templates = array_merge(
                \$templates,
                \$this->findTemplatesInDirectory(\$bundleTemplatesDir, \$name),
                null !== \$this->defaultPath ? \$this->findTemplatesInDirectory(\$this->defaultPath.'/bundles/'.\$bundle->getName(), \$name) : []
            );
        }

        foreach (\$this->paths as \$dir => \$namespace) {
            \$templates = array_merge(\$templates, \$this->findTemplatesInDirectory(\$dir, \$namespace));
        }

        return \$this->templates = new \\ArrayIterator(array_unique(\$templates));
    }

    /**
     * Find templates in the given directory.
     *
     * @return string[]
     */
    private function findTemplatesInDirectory(string \$dir, string \$namespace = null, array \$excludeDirs = []): array
    {
        if (!is_dir(\$dir)) {
            return [];
        }

        \$templates = [];
        foreach (Finder::create()->files()->followLinks()->in(\$dir)->exclude(\$excludeDirs) as \$file) {
            \$templates[] = (null !== \$namespace ? '@'.\$namespace.'/' : '').str_replace('\\\\', '/', \$file->getRelativePathname());
        }

        return \$templates;
    }
}
", "@app/vendor/symfony/twig-bundle/TemplateIterator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bundle\\TemplateIterator.php");
    }
}
