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

/* @app/vendor/symfony/http-foundation/AcceptHeader.php */
class __TwigTemplate_2a7560bdddcedb95bf1008c9dac5d3d15f5591d46da94571ef988644ff3fcd72 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/AcceptHeader.php"));

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
 * Represents an Accept-* header.
 *
 * An accept header is compound with a list of items,
 * sorted by descending quality.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class AcceptHeader
{
    /**
     * @var AcceptHeaderItem[]
     */
    private \$items = [];

    /**
     * @var bool
     */
    private \$sorted = true;

    /**
     * @param AcceptHeaderItem[] \$items
     */
    public function __construct(array \$items)
    {
        foreach (\$items as \$item) {
            \$this->add(\$item);
        }
    }

    /**
     * Builds an AcceptHeader instance from a string.
     *
     * @return self
     */
    public static function fromString(?string \$headerValue)
    {
        \$index = 0;

        \$parts = HeaderUtils::split(\$headerValue ?? '', ',;=');

        return new self(array_map(function (\$subParts) use (&\$index) {
            \$part = array_shift(\$subParts);
            \$attributes = HeaderUtils::combine(\$subParts);

            \$item = new AcceptHeaderItem(\$part[0], \$attributes);
            \$item->setIndex(\$index++);

            return \$item;
        }, \$parts));
    }

    /**
     * Returns header value's string representation.
     *
     * @return string
     */
    public function __toString()
    {
        return implode(',', \$this->items);
    }

    /**
     * Tests if header has given value.
     *
     * @return bool
     */
    public function has(string \$value)
    {
        return isset(\$this->items[\$value]);
    }

    /**
     * Returns given value's item, if exists.
     *
     * @return AcceptHeaderItem|null
     */
    public function get(string \$value)
    {
        return \$this->items[\$value] ?? \$this->items[explode('/', \$value)[0].'/*'] ?? \$this->items['*/*'] ?? \$this->items['*'] ?? null;
    }

    /**
     * Adds an item.
     *
     * @return \$this
     */
    public function add(AcceptHeaderItem \$item)
    {
        \$this->items[\$item->getValue()] = \$item;
        \$this->sorted = false;

        return \$this;
    }

    /**
     * Returns all items.
     *
     * @return AcceptHeaderItem[]
     */
    public function all()
    {
        \$this->sort();

        return \$this->items;
    }

    /**
     * Filters items on their value using given regex.
     *
     * @return self
     */
    public function filter(string \$pattern)
    {
        return new self(array_filter(\$this->items, function (AcceptHeaderItem \$item) use (\$pattern) {
            return preg_match(\$pattern, \$item->getValue());
        }));
    }

    /**
     * Returns first item.
     *
     * @return AcceptHeaderItem|null
     */
    public function first()
    {
        \$this->sort();

        return !empty(\$this->items) ? reset(\$this->items) : null;
    }

    /**
     * Sorts items by descending quality.
     */
    private function sort(): void
    {
        if (!\$this->sorted) {
            uasort(\$this->items, function (AcceptHeaderItem \$a, AcceptHeaderItem \$b) {
                \$qA = \$a->getQuality();
                \$qB = \$b->getQuality();

                if (\$qA === \$qB) {
                    return \$a->getIndex() > \$b->getIndex() ? 1 : -1;
                }

                return \$qA > \$qB ? -1 : 1;
            });

            \$this->sorted = true;
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/AcceptHeader.php";
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
 * Represents an Accept-* header.
 *
 * An accept header is compound with a list of items,
 * sorted by descending quality.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class AcceptHeader
{
    /**
     * @var AcceptHeaderItem[]
     */
    private \$items = [];

    /**
     * @var bool
     */
    private \$sorted = true;

    /**
     * @param AcceptHeaderItem[] \$items
     */
    public function __construct(array \$items)
    {
        foreach (\$items as \$item) {
            \$this->add(\$item);
        }
    }

    /**
     * Builds an AcceptHeader instance from a string.
     *
     * @return self
     */
    public static function fromString(?string \$headerValue)
    {
        \$index = 0;

        \$parts = HeaderUtils::split(\$headerValue ?? '', ',;=');

        return new self(array_map(function (\$subParts) use (&\$index) {
            \$part = array_shift(\$subParts);
            \$attributes = HeaderUtils::combine(\$subParts);

            \$item = new AcceptHeaderItem(\$part[0], \$attributes);
            \$item->setIndex(\$index++);

            return \$item;
        }, \$parts));
    }

    /**
     * Returns header value's string representation.
     *
     * @return string
     */
    public function __toString()
    {
        return implode(',', \$this->items);
    }

    /**
     * Tests if header has given value.
     *
     * @return bool
     */
    public function has(string \$value)
    {
        return isset(\$this->items[\$value]);
    }

    /**
     * Returns given value's item, if exists.
     *
     * @return AcceptHeaderItem|null
     */
    public function get(string \$value)
    {
        return \$this->items[\$value] ?? \$this->items[explode('/', \$value)[0].'/*'] ?? \$this->items['*/*'] ?? \$this->items['*'] ?? null;
    }

    /**
     * Adds an item.
     *
     * @return \$this
     */
    public function add(AcceptHeaderItem \$item)
    {
        \$this->items[\$item->getValue()] = \$item;
        \$this->sorted = false;

        return \$this;
    }

    /**
     * Returns all items.
     *
     * @return AcceptHeaderItem[]
     */
    public function all()
    {
        \$this->sort();

        return \$this->items;
    }

    /**
     * Filters items on their value using given regex.
     *
     * @return self
     */
    public function filter(string \$pattern)
    {
        return new self(array_filter(\$this->items, function (AcceptHeaderItem \$item) use (\$pattern) {
            return preg_match(\$pattern, \$item->getValue());
        }));
    }

    /**
     * Returns first item.
     *
     * @return AcceptHeaderItem|null
     */
    public function first()
    {
        \$this->sort();

        return !empty(\$this->items) ? reset(\$this->items) : null;
    }

    /**
     * Sorts items by descending quality.
     */
    private function sort(): void
    {
        if (!\$this->sorted) {
            uasort(\$this->items, function (AcceptHeaderItem \$a, AcceptHeaderItem \$b) {
                \$qA = \$a->getQuality();
                \$qB = \$b->getQuality();

                if (\$qA === \$qB) {
                    return \$a->getIndex() > \$b->getIndex() ? 1 : -1;
                }

                return \$qA > \$qB ? -1 : 1;
            });

            \$this->sorted = true;
        }
    }
}
", "@app/vendor/symfony/http-foundation/AcceptHeader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\AcceptHeader.php");
    }
}
