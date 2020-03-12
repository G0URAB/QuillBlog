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

/* @app/vendor/twig/twig/src/Loader/ArrayLoader.php */
class __TwigTemplate_c58c2ae5f7fe2a63786d53bf5fef6e879ff96420554abf35861fd87b0249f7ce extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Loader/ArrayLoader.php"));

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

namespace Twig\\Loader;

use Twig\\Error\\LoaderError;
use Twig\\Source;

/**
 * Loads a template from an array.
 *
 * When using this loader with a cache mechanism, you should know that a new cache
 * key is generated each time a template content \"changes\" (the cache key being the
 * source code of the template). If you don't want to see your cache grows out of
 * control, you need to take care of clearing the old cache file by yourself.
 *
 * This loader should only be used for unit testing.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class ArrayLoader implements LoaderInterface
{
    private \$templates = [];

    /**
     * @param array \$templates An array of templates (keys are the names, and values are the source code)
     */
    public function __construct(array \$templates = [])
    {
        \$this->templates = \$templates;
    }

    public function setTemplate(string \$name, string \$template): void
    {
        \$this->templates[\$name] = \$template;
    }

    public function getSourceContext(string \$name): Source
    {
        \$name = (string) \$name;
        if (!isset(\$this->templates[\$name])) {
            throw new LoaderError(sprintf('Template \"%s\" is not defined.', \$name));
        }

        return new Source(\$this->templates[\$name], \$name);
    }

    public function exists(string \$name): bool
    {
        return isset(\$this->templates[\$name]);
    }

    public function getCacheKey(string \$name): string
    {
        if (!isset(\$this->templates[\$name])) {
            throw new LoaderError(sprintf('Template \"%s\" is not defined.', \$name));
        }

        return \$name.':'.\$this->templates[\$name];
    }

    public function isFresh(string \$name, int \$time): bool
    {
        if (!isset(\$this->templates[\$name])) {
            throw new LoaderError(sprintf('Template \"%s\" is not defined.', \$name));
        }

        return true;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Loader/ArrayLoader.php";
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

namespace Twig\\Loader;

use Twig\\Error\\LoaderError;
use Twig\\Source;

/**
 * Loads a template from an array.
 *
 * When using this loader with a cache mechanism, you should know that a new cache
 * key is generated each time a template content \"changes\" (the cache key being the
 * source code of the template). If you don't want to see your cache grows out of
 * control, you need to take care of clearing the old cache file by yourself.
 *
 * This loader should only be used for unit testing.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class ArrayLoader implements LoaderInterface
{
    private \$templates = [];

    /**
     * @param array \$templates An array of templates (keys are the names, and values are the source code)
     */
    public function __construct(array \$templates = [])
    {
        \$this->templates = \$templates;
    }

    public function setTemplate(string \$name, string \$template): void
    {
        \$this->templates[\$name] = \$template;
    }

    public function getSourceContext(string \$name): Source
    {
        \$name = (string) \$name;
        if (!isset(\$this->templates[\$name])) {
            throw new LoaderError(sprintf('Template \"%s\" is not defined.', \$name));
        }

        return new Source(\$this->templates[\$name], \$name);
    }

    public function exists(string \$name): bool
    {
        return isset(\$this->templates[\$name]);
    }

    public function getCacheKey(string \$name): string
    {
        if (!isset(\$this->templates[\$name])) {
            throw new LoaderError(sprintf('Template \"%s\" is not defined.', \$name));
        }

        return \$name.':'.\$this->templates[\$name];
    }

    public function isFresh(string \$name, int \$time): bool
    {
        if (!isset(\$this->templates[\$name])) {
            throw new LoaderError(sprintf('Template \"%s\" is not defined.', \$name));
        }

        return true;
    }
}
", "@app/vendor/twig/twig/src/Loader/ArrayLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Loader\\ArrayLoader.php");
    }
}
