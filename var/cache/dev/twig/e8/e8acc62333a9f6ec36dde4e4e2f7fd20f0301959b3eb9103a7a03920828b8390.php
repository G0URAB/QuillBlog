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

/* @app/vendor/twig/twig/src/Util/DeprecationCollector.php */
class __TwigTemplate_9fca797cbd06eca6223fa03ececb62cf69b10123cb0c76edda3dd3589e549f72 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Util/DeprecationCollector.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Util;

use Twig\\Environment;
use Twig\\Error\\SyntaxError;
use Twig\\Source;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class DeprecationCollector
{
    private \$twig;

    public function __construct(Environment \$twig)
    {
        \$this->twig = \$twig;
    }

    /**
     * Returns deprecations for templates contained in a directory.
     *
     * @param string \$dir A directory where templates are stored
     * @param string \$ext Limit the loaded templates by extension
     *
     * @return array An array of deprecations
     */
    public function collectDir(string \$dir, string \$ext = '.twig'): array
    {
        \$iterator = new \\RegexIterator(
            new \\RecursiveIteratorIterator(
                new \\RecursiveDirectoryIterator(\$dir), \\RecursiveIteratorIterator::LEAVES_ONLY
            ), '{'.preg_quote(\$ext).'\$}'
        );

        return \$this->collect(new TemplateDirIterator(\$iterator));
    }

    /**
     * Returns deprecations for passed templates.
     *
     * @param \\Traversable \$iterator An iterator of templates (where keys are template names and values the contents of the template)
     *
     * @return array An array of deprecations
     */
    public function collect(\\Traversable \$iterator): array
    {
        \$deprecations = [];
        set_error_handler(function (\$type, \$msg) use (&\$deprecations) {
            if (E_USER_DEPRECATED === \$type) {
                \$deprecations[] = \$msg;
            }
        });

        foreach (\$iterator as \$name => \$contents) {
            try {
                \$this->twig->parse(\$this->twig->tokenize(new Source(\$contents, \$name)));
            } catch (SyntaxError \$e) {
                // ignore templates containing syntax errors
            }
        }

        restore_error_handler();

        return \$deprecations;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Util/DeprecationCollector.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Util;

use Twig\\Environment;
use Twig\\Error\\SyntaxError;
use Twig\\Source;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class DeprecationCollector
{
    private \$twig;

    public function __construct(Environment \$twig)
    {
        \$this->twig = \$twig;
    }

    /**
     * Returns deprecations for templates contained in a directory.
     *
     * @param string \$dir A directory where templates are stored
     * @param string \$ext Limit the loaded templates by extension
     *
     * @return array An array of deprecations
     */
    public function collectDir(string \$dir, string \$ext = '.twig'): array
    {
        \$iterator = new \\RegexIterator(
            new \\RecursiveIteratorIterator(
                new \\RecursiveDirectoryIterator(\$dir), \\RecursiveIteratorIterator::LEAVES_ONLY
            ), '{'.preg_quote(\$ext).'\$}'
        );

        return \$this->collect(new TemplateDirIterator(\$iterator));
    }

    /**
     * Returns deprecations for passed templates.
     *
     * @param \\Traversable \$iterator An iterator of templates (where keys are template names and values the contents of the template)
     *
     * @return array An array of deprecations
     */
    public function collect(\\Traversable \$iterator): array
    {
        \$deprecations = [];
        set_error_handler(function (\$type, \$msg) use (&\$deprecations) {
            if (E_USER_DEPRECATED === \$type) {
                \$deprecations[] = \$msg;
            }
        });

        foreach (\$iterator as \$name => \$contents) {
            try {
                \$this->twig->parse(\$this->twig->tokenize(new Source(\$contents, \$name)));
            } catch (SyntaxError \$e) {
                // ignore templates containing syntax errors
            }
        }

        restore_error_handler();

        return \$deprecations;
    }
}
", "@app/vendor/twig/twig/src/Util/DeprecationCollector.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Util\\DeprecationCollector.php");
    }
}
