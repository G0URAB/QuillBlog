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

/* @app/vendor/symfony/dependency-injection/Loader/DirectoryLoader.php */
class __TwigTemplate_5d46c69919f3a429ee8460ed4253c209790cd585ea4f99b36bfc0dc0b03a8877 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Loader/DirectoryLoader.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader;

/**
 * DirectoryLoader is a recursive loader to go through directories.
 *
 * @author Sebastien Lavoie <seb@wemakecustom.com>
 */
class DirectoryLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load(\$file, string \$type = null)
    {
        \$file = rtrim(\$file, '/');
        \$path = \$this->locator->locate(\$file);
        \$this->container->fileExists(\$path, false);

        foreach (scandir(\$path) as \$dir) {
            if ('.' !== \$dir[0]) {
                if (is_dir(\$path.'/'.\$dir)) {
                    \$dir .= '/'; // append / to allow recursion
                }

                \$this->setCurrentDir(\$path);

                \$this->import(\$dir, null, false, \$path);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, string \$type = null)
    {
        if ('directory' === \$type) {
            return true;
        }

        return null === \$type && \\is_string(\$resource) && '/' === substr(\$resource, -1);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Loader/DirectoryLoader.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader;

/**
 * DirectoryLoader is a recursive loader to go through directories.
 *
 * @author Sebastien Lavoie <seb@wemakecustom.com>
 */
class DirectoryLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load(\$file, string \$type = null)
    {
        \$file = rtrim(\$file, '/');
        \$path = \$this->locator->locate(\$file);
        \$this->container->fileExists(\$path, false);

        foreach (scandir(\$path) as \$dir) {
            if ('.' !== \$dir[0]) {
                if (is_dir(\$path.'/'.\$dir)) {
                    \$dir .= '/'; // append / to allow recursion
                }

                \$this->setCurrentDir(\$path);

                \$this->import(\$dir, null, false, \$path);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, string \$type = null)
    {
        if ('directory' === \$type) {
            return true;
        }

        return null === \$type && \\is_string(\$resource) && '/' === substr(\$resource, -1);
    }
}
", "@app/vendor/symfony/dependency-injection/Loader/DirectoryLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Loader\\DirectoryLoader.php");
    }
}
