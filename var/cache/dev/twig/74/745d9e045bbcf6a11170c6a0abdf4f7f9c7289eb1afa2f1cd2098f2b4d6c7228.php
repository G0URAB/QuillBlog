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

/* @app/vendor/symfony/http-foundation/HeaderBag.php */
class __TwigTemplate_9ef462a1688f3513fc031a7ba7f20ab6026fd0ee0fdcf7a331ecf3b6d12c7cf8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/HeaderBag.php"));

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

namespace Symfony\\Component\\HttpFoundation;

/**
 * HeaderBag is a container for HTTP headers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HeaderBag implements \\IteratorAggregate, \\Countable
{
    protected const UPPER = '_ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    protected const LOWER = '-abcdefghijklmnopqrstuvwxyz';

    protected \$headers = [];
    protected \$cacheControl = [];

    public function __construct(array \$headers = [])
    {
        foreach (\$headers as \$key => \$values) {
            \$this->set(\$key, \$values);
        }
    }

    /**
     * Returns the headers as a string.
     *
     * @return string The headers
     */
    public function __toString()
    {
        if (!\$headers = \$this->all()) {
            return '';
        }

        ksort(\$headers);
        \$max = max(array_map('strlen', array_keys(\$headers))) + 1;
        \$content = '';
        foreach (\$headers as \$name => \$values) {
            \$name = ucwords(\$name, '-');
            foreach (\$values as \$value) {
                \$content .= sprintf(\"%-{\$max}s %s\\r\\n\", \$name.':', \$value);
            }
        }

        return \$content;
    }

    /**
     * Returns the headers.
     *
     * @param string|null \$key The name of the headers to return or null to get them all
     *
     * @return array An array of headers
     */
    public function all(string \$key = null)
    {
        if (null !== \$key) {
            return \$this->headers[strtr(\$key, self::UPPER, self::LOWER)] ?? [];
        }

        return \$this->headers;
    }

    /**
     * Returns the parameter keys.
     *
     * @return array An array of parameter keys
     */
    public function keys()
    {
        return array_keys(\$this->all());
    }

    /**
     * Replaces the current HTTP headers by a new set.
     */
    public function replace(array \$headers = [])
    {
        \$this->headers = [];
        \$this->add(\$headers);
    }

    /**
     * Adds new headers the current HTTP headers set.
     */
    public function add(array \$headers)
    {
        foreach (\$headers as \$key => \$values) {
            \$this->set(\$key, \$values);
        }
    }

    /**
     * Returns a header value by name.
     *
     * @return string|null The first header value or default value
     */
    public function get(string \$key, string \$default = null)
    {
        \$headers = \$this->all(\$key);

        if (!\$headers) {
            return \$default;
        }

        if (null === \$headers[0]) {
            return null;
        }

        return (string) \$headers[0];
    }

    /**
     * Sets a header by name.
     *
     * @param string|string[] \$values  The value or an array of values
     * @param bool            \$replace Whether to replace the actual value or not (true by default)
     */
    public function set(string \$key, \$values, bool \$replace = true)
    {
        \$key = strtr(\$key, self::UPPER, self::LOWER);

        if (\\is_array(\$values)) {
            \$values = array_values(\$values);

            if (true === \$replace || !isset(\$this->headers[\$key])) {
                \$this->headers[\$key] = \$values;
            } else {
                \$this->headers[\$key] = array_merge(\$this->headers[\$key], \$values);
            }
        } else {
            if (true === \$replace || !isset(\$this->headers[\$key])) {
                \$this->headers[\$key] = [\$values];
            } else {
                \$this->headers[\$key][] = \$values;
            }
        }

        if ('cache-control' === \$key) {
            \$this->cacheControl = \$this->parseCacheControl(implode(', ', \$this->headers[\$key]));
        }
    }

    /**
     * Returns true if the HTTP header is defined.
     *
     * @return bool true if the parameter exists, false otherwise
     */
    public function has(string \$key)
    {
        return \\array_key_exists(strtr(\$key, self::UPPER, self::LOWER), \$this->all());
    }

    /**
     * Returns true if the given HTTP header contains the given value.
     *
     * @return bool true if the value is contained in the header, false otherwise
     */
    public function contains(string \$key, string \$value)
    {
        return \\in_array(\$value, \$this->all(\$key));
    }

    /**
     * Removes a header.
     */
    public function remove(string \$key)
    {
        \$key = strtr(\$key, self::UPPER, self::LOWER);

        unset(\$this->headers[\$key]);

        if ('cache-control' === \$key) {
            \$this->cacheControl = [];
        }
    }

    /**
     * Returns the HTTP header value converted to a date.
     *
     * @return \\DateTimeInterface|null The parsed DateTime or the default value if the header does not exist
     *
     * @throws \\RuntimeException When the HTTP header is not parseable
     */
    public function getDate(string \$key, \\DateTime \$default = null)
    {
        if (null === \$value = \$this->get(\$key)) {
            return \$default;
        }

        if (false === \$date = \\DateTime::createFromFormat(DATE_RFC2822, \$value)) {
            throw new \\RuntimeException(sprintf('The %s HTTP header is not parseable (%s).', \$key, \$value));
        }

        return \$date;
    }

    /**
     * Adds a custom Cache-Control directive.
     *
     * @param mixed \$value The Cache-Control directive value
     */
    public function addCacheControlDirective(string \$key, \$value = true)
    {
        \$this->cacheControl[\$key] = \$value;

        \$this->set('Cache-Control', \$this->getCacheControlHeader());
    }

    /**
     * Returns true if the Cache-Control directive is defined.
     *
     * @return bool true if the directive exists, false otherwise
     */
    public function hasCacheControlDirective(string \$key)
    {
        return \\array_key_exists(\$key, \$this->cacheControl);
    }

    /**
     * Returns a Cache-Control directive value by name.
     *
     * @return mixed|null The directive value if defined, null otherwise
     */
    public function getCacheControlDirective(string \$key)
    {
        return \\array_key_exists(\$key, \$this->cacheControl) ? \$this->cacheControl[\$key] : null;
    }

    /**
     * Removes a Cache-Control directive.
     */
    public function removeCacheControlDirective(string \$key)
    {
        unset(\$this->cacheControl[\$key]);

        \$this->set('Cache-Control', \$this->getCacheControlHeader());
    }

    /**
     * Returns an iterator for headers.
     *
     * @return \\ArrayIterator An \\ArrayIterator instance
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->headers);
    }

    /**
     * Returns the number of headers.
     *
     * @return int The number of headers
     */
    public function count()
    {
        return \\count(\$this->headers);
    }

    protected function getCacheControlHeader()
    {
        ksort(\$this->cacheControl);

        return HeaderUtils::toString(\$this->cacheControl, ',');
    }

    /**
     * Parses a Cache-Control HTTP header.
     *
     * @return array An array representing the attribute values
     */
    protected function parseCacheControl(string \$header)
    {
        \$parts = HeaderUtils::split(\$header, ',=');

        return HeaderUtils::combine(\$parts);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/HeaderBag.php";
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

namespace Symfony\\Component\\HttpFoundation;

/**
 * HeaderBag is a container for HTTP headers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HeaderBag implements \\IteratorAggregate, \\Countable
{
    protected const UPPER = '_ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    protected const LOWER = '-abcdefghijklmnopqrstuvwxyz';

    protected \$headers = [];
    protected \$cacheControl = [];

    public function __construct(array \$headers = [])
    {
        foreach (\$headers as \$key => \$values) {
            \$this->set(\$key, \$values);
        }
    }

    /**
     * Returns the headers as a string.
     *
     * @return string The headers
     */
    public function __toString()
    {
        if (!\$headers = \$this->all()) {
            return '';
        }

        ksort(\$headers);
        \$max = max(array_map('strlen', array_keys(\$headers))) + 1;
        \$content = '';
        foreach (\$headers as \$name => \$values) {
            \$name = ucwords(\$name, '-');
            foreach (\$values as \$value) {
                \$content .= sprintf(\"%-{\$max}s %s\\r\\n\", \$name.':', \$value);
            }
        }

        return \$content;
    }

    /**
     * Returns the headers.
     *
     * @param string|null \$key The name of the headers to return or null to get them all
     *
     * @return array An array of headers
     */
    public function all(string \$key = null)
    {
        if (null !== \$key) {
            return \$this->headers[strtr(\$key, self::UPPER, self::LOWER)] ?? [];
        }

        return \$this->headers;
    }

    /**
     * Returns the parameter keys.
     *
     * @return array An array of parameter keys
     */
    public function keys()
    {
        return array_keys(\$this->all());
    }

    /**
     * Replaces the current HTTP headers by a new set.
     */
    public function replace(array \$headers = [])
    {
        \$this->headers = [];
        \$this->add(\$headers);
    }

    /**
     * Adds new headers the current HTTP headers set.
     */
    public function add(array \$headers)
    {
        foreach (\$headers as \$key => \$values) {
            \$this->set(\$key, \$values);
        }
    }

    /**
     * Returns a header value by name.
     *
     * @return string|null The first header value or default value
     */
    public function get(string \$key, string \$default = null)
    {
        \$headers = \$this->all(\$key);

        if (!\$headers) {
            return \$default;
        }

        if (null === \$headers[0]) {
            return null;
        }

        return (string) \$headers[0];
    }

    /**
     * Sets a header by name.
     *
     * @param string|string[] \$values  The value or an array of values
     * @param bool            \$replace Whether to replace the actual value or not (true by default)
     */
    public function set(string \$key, \$values, bool \$replace = true)
    {
        \$key = strtr(\$key, self::UPPER, self::LOWER);

        if (\\is_array(\$values)) {
            \$values = array_values(\$values);

            if (true === \$replace || !isset(\$this->headers[\$key])) {
                \$this->headers[\$key] = \$values;
            } else {
                \$this->headers[\$key] = array_merge(\$this->headers[\$key], \$values);
            }
        } else {
            if (true === \$replace || !isset(\$this->headers[\$key])) {
                \$this->headers[\$key] = [\$values];
            } else {
                \$this->headers[\$key][] = \$values;
            }
        }

        if ('cache-control' === \$key) {
            \$this->cacheControl = \$this->parseCacheControl(implode(', ', \$this->headers[\$key]));
        }
    }

    /**
     * Returns true if the HTTP header is defined.
     *
     * @return bool true if the parameter exists, false otherwise
     */
    public function has(string \$key)
    {
        return \\array_key_exists(strtr(\$key, self::UPPER, self::LOWER), \$this->all());
    }

    /**
     * Returns true if the given HTTP header contains the given value.
     *
     * @return bool true if the value is contained in the header, false otherwise
     */
    public function contains(string \$key, string \$value)
    {
        return \\in_array(\$value, \$this->all(\$key));
    }

    /**
     * Removes a header.
     */
    public function remove(string \$key)
    {
        \$key = strtr(\$key, self::UPPER, self::LOWER);

        unset(\$this->headers[\$key]);

        if ('cache-control' === \$key) {
            \$this->cacheControl = [];
        }
    }

    /**
     * Returns the HTTP header value converted to a date.
     *
     * @return \\DateTimeInterface|null The parsed DateTime or the default value if the header does not exist
     *
     * @throws \\RuntimeException When the HTTP header is not parseable
     */
    public function getDate(string \$key, \\DateTime \$default = null)
    {
        if (null === \$value = \$this->get(\$key)) {
            return \$default;
        }

        if (false === \$date = \\DateTime::createFromFormat(DATE_RFC2822, \$value)) {
            throw new \\RuntimeException(sprintf('The %s HTTP header is not parseable (%s).', \$key, \$value));
        }

        return \$date;
    }

    /**
     * Adds a custom Cache-Control directive.
     *
     * @param mixed \$value The Cache-Control directive value
     */
    public function addCacheControlDirective(string \$key, \$value = true)
    {
        \$this->cacheControl[\$key] = \$value;

        \$this->set('Cache-Control', \$this->getCacheControlHeader());
    }

    /**
     * Returns true if the Cache-Control directive is defined.
     *
     * @return bool true if the directive exists, false otherwise
     */
    public function hasCacheControlDirective(string \$key)
    {
        return \\array_key_exists(\$key, \$this->cacheControl);
    }

    /**
     * Returns a Cache-Control directive value by name.
     *
     * @return mixed|null The directive value if defined, null otherwise
     */
    public function getCacheControlDirective(string \$key)
    {
        return \\array_key_exists(\$key, \$this->cacheControl) ? \$this->cacheControl[\$key] : null;
    }

    /**
     * Removes a Cache-Control directive.
     */
    public function removeCacheControlDirective(string \$key)
    {
        unset(\$this->cacheControl[\$key]);

        \$this->set('Cache-Control', \$this->getCacheControlHeader());
    }

    /**
     * Returns an iterator for headers.
     *
     * @return \\ArrayIterator An \\ArrayIterator instance
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->headers);
    }

    /**
     * Returns the number of headers.
     *
     * @return int The number of headers
     */
    public function count()
    {
        return \\count(\$this->headers);
    }

    protected function getCacheControlHeader()
    {
        ksort(\$this->cacheControl);

        return HeaderUtils::toString(\$this->cacheControl, ',');
    }

    /**
     * Parses a Cache-Control HTTP header.
     *
     * @return array An array representing the attribute values
     */
    protected function parseCacheControl(string \$header)
    {
        \$parts = HeaderUtils::split(\$header, ',=');

        return HeaderUtils::combine(\$parts);
    }
}
", "@app/vendor/symfony/http-foundation/HeaderBag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\HeaderBag.php");
    }
}
