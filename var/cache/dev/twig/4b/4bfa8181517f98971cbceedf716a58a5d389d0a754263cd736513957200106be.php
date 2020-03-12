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

/* @app/vendor/twig/twig/src/Cache/CacheInterface.php */
class __TwigTemplate_1710841efbbf8129bb84e5c06c19fad47000477c8cccb0a6df8e78bf07214ec3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Cache/CacheInterface.php"));

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

namespace Twig\\Cache;

/**
 * Interface implemented by cache classes.
 *
 * It is highly recommended to always store templates on the filesystem to
 * benefit from the PHP opcode cache. This interface is mostly useful if you
 * need to implement a custom strategy for storing templates on the filesystem.
 *
 * @author Andrew Tch <andrew@noop.lv>
 */
interface CacheInterface
{
    /**
     * Generates a cache key for the given template class name.
     */
    public function generateKey(string \$name, string \$className): string;

    /**
     * Writes the compiled template to cache.
     *
     * @param string \$content The template representation as a PHP class
     */
    public function write(string \$key, string \$content): void;

    /**
     * Loads a template from the cache.
     */
    public function load(string \$key): void;

    /**
     * Returns the modification timestamp of a key.
     */
    public function getTimestamp(string \$key): int;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Cache/CacheInterface.php";
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

namespace Twig\\Cache;

/**
 * Interface implemented by cache classes.
 *
 * It is highly recommended to always store templates on the filesystem to
 * benefit from the PHP opcode cache. This interface is mostly useful if you
 * need to implement a custom strategy for storing templates on the filesystem.
 *
 * @author Andrew Tch <andrew@noop.lv>
 */
interface CacheInterface
{
    /**
     * Generates a cache key for the given template class name.
     */
    public function generateKey(string \$name, string \$className): string;

    /**
     * Writes the compiled template to cache.
     *
     * @param string \$content The template representation as a PHP class
     */
    public function write(string \$key, string \$content): void;

    /**
     * Loads a template from the cache.
     */
    public function load(string \$key): void;

    /**
     * Returns the modification timestamp of a key.
     */
    public function getTimestamp(string \$key): int;
}
", "@app/vendor/twig/twig/src/Cache/CacheInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Cache\\CacheInterface.php");
    }
}
