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

/* @app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/Psr0FindFile.php */
class __TwigTemplate_ba7d3dec35a40de56ae0da1a2da71e2f936c53c8f9ef1fc921c9be7928bbbadc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/Psr0FindFile.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Reflection;

use const DIRECTORY_SEPARATOR;
use function is_file;
use function str_replace;
use function strpos;
use function strrpos;
use function substr;

/**
 * Finds a class in a PSR-0 structure.
 */
class Psr0FindFile implements ClassFinderInterface
{
    /**
     * The PSR-0 prefixes.
     *
     * @var string[][]
     */
    protected \$prefixes;

    /**
     * @param string[][] \$prefixes An array of prefixes. Each key is a PHP namespace and each value is
     *                        a list of directories.
     */
    public function __construct(\$prefixes)
    {
        \$this->prefixes = \$prefixes;
    }

    /**
     * {@inheritDoc}
     */
    public function findFile(\$class)
    {
        if (\$class[0] === '\\\\') {
            \$class = substr(\$class, 1);
        }

        \$lastNsPos = strrpos(\$class, '\\\\');

        if (\$lastNsPos !== false) {
            // namespaced class name
            \$classPath = str_replace('\\\\', DIRECTORY_SEPARATOR, substr(\$class, 0, \$lastNsPos)) . DIRECTORY_SEPARATOR;
            \$className = substr(\$class, \$lastNsPos + 1);
        } else {
            // PEAR-like class name
            \$classPath = null;
            \$className = \$class;
        }

        \$classPath .= str_replace('_', DIRECTORY_SEPARATOR, \$className) . '.php';

        foreach (\$this->prefixes as \$prefix => \$dirs) {
            if (strpos(\$class, \$prefix) !== 0) {
                continue;
            }

            foreach (\$dirs as \$dir) {
                if (is_file(\$dir . DIRECTORY_SEPARATOR . \$classPath)) {
                    return \$dir . DIRECTORY_SEPARATOR . \$classPath;
                }
            }
        }

        return null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/Psr0FindFile.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Reflection;

use const DIRECTORY_SEPARATOR;
use function is_file;
use function str_replace;
use function strpos;
use function strrpos;
use function substr;

/**
 * Finds a class in a PSR-0 structure.
 */
class Psr0FindFile implements ClassFinderInterface
{
    /**
     * The PSR-0 prefixes.
     *
     * @var string[][]
     */
    protected \$prefixes;

    /**
     * @param string[][] \$prefixes An array of prefixes. Each key is a PHP namespace and each value is
     *                        a list of directories.
     */
    public function __construct(\$prefixes)
    {
        \$this->prefixes = \$prefixes;
    }

    /**
     * {@inheritDoc}
     */
    public function findFile(\$class)
    {
        if (\$class[0] === '\\\\') {
            \$class = substr(\$class, 1);
        }

        \$lastNsPos = strrpos(\$class, '\\\\');

        if (\$lastNsPos !== false) {
            // namespaced class name
            \$classPath = str_replace('\\\\', DIRECTORY_SEPARATOR, substr(\$class, 0, \$lastNsPos)) . DIRECTORY_SEPARATOR;
            \$className = substr(\$class, \$lastNsPos + 1);
        } else {
            // PEAR-like class name
            \$classPath = null;
            \$className = \$class;
        }

        \$classPath .= str_replace('_', DIRECTORY_SEPARATOR, \$className) . '.php';

        foreach (\$this->prefixes as \$prefix => \$dirs) {
            if (strpos(\$class, \$prefix) !== 0) {
                continue;
            }

            foreach (\$dirs as \$dir) {
                if (is_file(\$dir . DIRECTORY_SEPARATOR . \$classPath)) {
                    return \$dir . DIRECTORY_SEPARATOR . \$classPath;
                }
            }
        }

        return null;
    }
}
", "@app/vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/Psr0FindFile.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\reflection\\lib\\Doctrine\\Common\\Reflection\\Psr0FindFile.php");
    }
}
