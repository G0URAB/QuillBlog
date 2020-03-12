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

/* @app/vendor/doctrine/collections/lib/Doctrine/Common/Collections/ArrayCollection.php */
class __TwigTemplate_4f7727525c419c5a5e9ab602b383f7a260985918d3fff6a108c2383632af3264 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/collections/lib/Doctrine/Common/Collections/ArrayCollection.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Collections;

use ArrayIterator;
use Closure;
use Doctrine\\Common\\Collections\\Expr\\ClosureExpressionVisitor;
use const ARRAY_FILTER_USE_BOTH;
use function array_filter;
use function array_key_exists;
use function array_keys;
use function array_map;
use function array_reverse;
use function array_search;
use function array_slice;
use function array_values;
use function count;
use function current;
use function end;
use function in_array;
use function key;
use function next;
use function reset;
use function spl_object_hash;
use function uasort;

/**
 * An ArrayCollection is a Collection implementation that wraps a regular PHP array.
 *
 * Warning: Using (un-)serialize() on a collection is not a supported use-case
 * and may break when we change the internals in the future. If you need to
 * serialize a collection use {@link toArray()} and reconstruct the collection
 * manually.
 *
 * @psalm-template TKey of array-key
 * @psalm-template T
 * @template-implements Collection<TKey,T>
 * @template-implements Selectable<TKey,T>
 */
class ArrayCollection implements Collection, Selectable
{
    /**
     * An array containing the entries of this collection.
     *
     * @psalm-var array<TKey,T>
     * @var array
     */
    private \$elements;

    /**
     * Initializes a new ArrayCollection.
     *
     * @param array \$elements
     *
     * @psalm-param array<TKey,T> \$elements
     */
    public function __construct(array \$elements = [])
    {
        \$this->elements = \$elements;
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        return \$this->elements;
    }

    /**
     * {@inheritDoc}
     */
    public function first()
    {
        return reset(\$this->elements);
    }

    /**
     * Creates a new instance from the specified elements.
     *
     * This method is provided for derived classes to specify how a new
     * instance should be created when constructor semantics have changed.
     *
     * @param array \$elements Elements.
     *
     * @return static
     *
     * @psalm-param array<TKey,T> \$elements
     * @psalm-return static<TKey,T>
     */
    protected function createFrom(array \$elements)
    {
        return new static(\$elements);
    }

    /**
     * {@inheritDoc}
     */
    public function last()
    {
        return end(\$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function key()
    {
        return key(\$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function next()
    {
        return next(\$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function current()
    {
        return current(\$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function remove(\$key)
    {
        if (! isset(\$this->elements[\$key]) && ! array_key_exists(\$key, \$this->elements)) {
            return null;
        }

        \$removed = \$this->elements[\$key];
        unset(\$this->elements[\$key]);

        return \$removed;
    }

    /**
     * {@inheritDoc}
     */
    public function removeElement(\$element)
    {
        \$key = array_search(\$element, \$this->elements, true);

        if (\$key === false) {
            return false;
        }

        unset(\$this->elements[\$key]);

        return true;
    }

    /**
     * Required by interface ArrayAccess.
     *
     * {@inheritDoc}
     */
    public function offsetExists(\$offset)
    {
        return \$this->containsKey(\$offset);
    }

    /**
     * Required by interface ArrayAccess.
     *
     * {@inheritDoc}
     */
    public function offsetGet(\$offset)
    {
        return \$this->get(\$offset);
    }

    /**
     * Required by interface ArrayAccess.
     *
     * {@inheritDoc}
     */
    public function offsetSet(\$offset, \$value)
    {
        if (! isset(\$offset)) {
            \$this->add(\$value);

            return;
        }

        \$this->set(\$offset, \$value);
    }

    /**
     * Required by interface ArrayAccess.
     *
     * {@inheritDoc}
     */
    public function offsetUnset(\$offset)
    {
        \$this->remove(\$offset);
    }

    /**
     * {@inheritDoc}
     */
    public function containsKey(\$key)
    {
        return isset(\$this->elements[\$key]) || array_key_exists(\$key, \$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function contains(\$element)
    {
        return in_array(\$element, \$this->elements, true);
    }

    /**
     * {@inheritDoc}
     */
    public function exists(Closure \$p)
    {
        foreach (\$this->elements as \$key => \$element) {
            if (\$p(\$key, \$element)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function indexOf(\$element)
    {
        return array_search(\$element, \$this->elements, true);
    }

    /**
     * {@inheritDoc}
     */
    public function get(\$key)
    {
        return \$this->elements[\$key] ?? null;
    }

    /**
     * {@inheritDoc}
     */
    public function getKeys()
    {
        return array_keys(\$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function getValues()
    {
        return array_values(\$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function count()
    {
        return count(\$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function set(\$key, \$value)
    {
        \$this->elements[\$key] = \$value;
    }

    /**
     * {@inheritDoc}
     */
    public function add(\$element)
    {
        \$this->elements[] = \$element;

        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function isEmpty()
    {
        return empty(\$this->elements);
    }

    /**
     * Required by interface IteratorAggregate.
     *
     * {@inheritDoc}
     */
    public function getIterator()
    {
        return new ArrayIterator(\$this->elements);
    }

    /**
     * {@inheritDoc}
     *
     * @return static
     *
     * @psalm-template U
     * @psalm-param Closure(T=):U \$func
     * @psalm-return static<TKey, U>
     */
    public function map(Closure \$func)
    {
        return \$this->createFrom(array_map(\$func, \$this->elements));
    }

    /**
     * {@inheritDoc}
     *
     * @return static
     *
     * @psalm-return static<TKey,T>
     */
    public function filter(Closure \$p)
    {
        return \$this->createFrom(array_filter(\$this->elements, \$p, ARRAY_FILTER_USE_BOTH));
    }

    /**
     * {@inheritDoc}
     */
    public function forAll(Closure \$p)
    {
        foreach (\$this->elements as \$key => \$element) {
            if (! \$p(\$key, \$element)) {
                return false;
            }
        }

        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function partition(Closure \$p)
    {
        \$matches = \$noMatches = [];

        foreach (\$this->elements as \$key => \$element) {
            if (\$p(\$key, \$element)) {
                \$matches[\$key] = \$element;
            } else {
                \$noMatches[\$key] = \$element;
            }
        }

        return [\$this->createFrom(\$matches), \$this->createFrom(\$noMatches)];
    }

    /**
     * Returns a string representation of this object.
     *
     * @return string
     */
    public function __toString()
    {
        return self::class . '@' . spl_object_hash(\$this);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        \$this->elements = [];
    }

    /**
     * {@inheritDoc}
     */
    public function slice(\$offset, \$length = null)
    {
        return array_slice(\$this->elements, \$offset, \$length, true);
    }

    /**
     * {@inheritDoc}
     */
    public function matching(Criteria \$criteria)
    {
        \$expr     = \$criteria->getWhereExpression();
        \$filtered = \$this->elements;

        if (\$expr) {
            \$visitor  = new ClosureExpressionVisitor();
            \$filter   = \$visitor->dispatch(\$expr);
            \$filtered = array_filter(\$filtered, \$filter);
        }

        \$orderings = \$criteria->getOrderings();

        if (\$orderings) {
            \$next = null;
            foreach (array_reverse(\$orderings) as \$field => \$ordering) {
                \$next = ClosureExpressionVisitor::sortByField(\$field, \$ordering === Criteria::DESC ? -1 : 1, \$next);
            }

            uasort(\$filtered, \$next);
        }

        \$offset = \$criteria->getFirstResult();
        \$length = \$criteria->getMaxResults();

        if (\$offset || \$length) {
            \$filtered = array_slice(\$filtered, (int) \$offset, \$length);
        }

        return \$this->createFrom(\$filtered);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/collections/lib/Doctrine/Common/Collections/ArrayCollection.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Collections;

use ArrayIterator;
use Closure;
use Doctrine\\Common\\Collections\\Expr\\ClosureExpressionVisitor;
use const ARRAY_FILTER_USE_BOTH;
use function array_filter;
use function array_key_exists;
use function array_keys;
use function array_map;
use function array_reverse;
use function array_search;
use function array_slice;
use function array_values;
use function count;
use function current;
use function end;
use function in_array;
use function key;
use function next;
use function reset;
use function spl_object_hash;
use function uasort;

/**
 * An ArrayCollection is a Collection implementation that wraps a regular PHP array.
 *
 * Warning: Using (un-)serialize() on a collection is not a supported use-case
 * and may break when we change the internals in the future. If you need to
 * serialize a collection use {@link toArray()} and reconstruct the collection
 * manually.
 *
 * @psalm-template TKey of array-key
 * @psalm-template T
 * @template-implements Collection<TKey,T>
 * @template-implements Selectable<TKey,T>
 */
class ArrayCollection implements Collection, Selectable
{
    /**
     * An array containing the entries of this collection.
     *
     * @psalm-var array<TKey,T>
     * @var array
     */
    private \$elements;

    /**
     * Initializes a new ArrayCollection.
     *
     * @param array \$elements
     *
     * @psalm-param array<TKey,T> \$elements
     */
    public function __construct(array \$elements = [])
    {
        \$this->elements = \$elements;
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        return \$this->elements;
    }

    /**
     * {@inheritDoc}
     */
    public function first()
    {
        return reset(\$this->elements);
    }

    /**
     * Creates a new instance from the specified elements.
     *
     * This method is provided for derived classes to specify how a new
     * instance should be created when constructor semantics have changed.
     *
     * @param array \$elements Elements.
     *
     * @return static
     *
     * @psalm-param array<TKey,T> \$elements
     * @psalm-return static<TKey,T>
     */
    protected function createFrom(array \$elements)
    {
        return new static(\$elements);
    }

    /**
     * {@inheritDoc}
     */
    public function last()
    {
        return end(\$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function key()
    {
        return key(\$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function next()
    {
        return next(\$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function current()
    {
        return current(\$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function remove(\$key)
    {
        if (! isset(\$this->elements[\$key]) && ! array_key_exists(\$key, \$this->elements)) {
            return null;
        }

        \$removed = \$this->elements[\$key];
        unset(\$this->elements[\$key]);

        return \$removed;
    }

    /**
     * {@inheritDoc}
     */
    public function removeElement(\$element)
    {
        \$key = array_search(\$element, \$this->elements, true);

        if (\$key === false) {
            return false;
        }

        unset(\$this->elements[\$key]);

        return true;
    }

    /**
     * Required by interface ArrayAccess.
     *
     * {@inheritDoc}
     */
    public function offsetExists(\$offset)
    {
        return \$this->containsKey(\$offset);
    }

    /**
     * Required by interface ArrayAccess.
     *
     * {@inheritDoc}
     */
    public function offsetGet(\$offset)
    {
        return \$this->get(\$offset);
    }

    /**
     * Required by interface ArrayAccess.
     *
     * {@inheritDoc}
     */
    public function offsetSet(\$offset, \$value)
    {
        if (! isset(\$offset)) {
            \$this->add(\$value);

            return;
        }

        \$this->set(\$offset, \$value);
    }

    /**
     * Required by interface ArrayAccess.
     *
     * {@inheritDoc}
     */
    public function offsetUnset(\$offset)
    {
        \$this->remove(\$offset);
    }

    /**
     * {@inheritDoc}
     */
    public function containsKey(\$key)
    {
        return isset(\$this->elements[\$key]) || array_key_exists(\$key, \$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function contains(\$element)
    {
        return in_array(\$element, \$this->elements, true);
    }

    /**
     * {@inheritDoc}
     */
    public function exists(Closure \$p)
    {
        foreach (\$this->elements as \$key => \$element) {
            if (\$p(\$key, \$element)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function indexOf(\$element)
    {
        return array_search(\$element, \$this->elements, true);
    }

    /**
     * {@inheritDoc}
     */
    public function get(\$key)
    {
        return \$this->elements[\$key] ?? null;
    }

    /**
     * {@inheritDoc}
     */
    public function getKeys()
    {
        return array_keys(\$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function getValues()
    {
        return array_values(\$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function count()
    {
        return count(\$this->elements);
    }

    /**
     * {@inheritDoc}
     */
    public function set(\$key, \$value)
    {
        \$this->elements[\$key] = \$value;
    }

    /**
     * {@inheritDoc}
     */
    public function add(\$element)
    {
        \$this->elements[] = \$element;

        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function isEmpty()
    {
        return empty(\$this->elements);
    }

    /**
     * Required by interface IteratorAggregate.
     *
     * {@inheritDoc}
     */
    public function getIterator()
    {
        return new ArrayIterator(\$this->elements);
    }

    /**
     * {@inheritDoc}
     *
     * @return static
     *
     * @psalm-template U
     * @psalm-param Closure(T=):U \$func
     * @psalm-return static<TKey, U>
     */
    public function map(Closure \$func)
    {
        return \$this->createFrom(array_map(\$func, \$this->elements));
    }

    /**
     * {@inheritDoc}
     *
     * @return static
     *
     * @psalm-return static<TKey,T>
     */
    public function filter(Closure \$p)
    {
        return \$this->createFrom(array_filter(\$this->elements, \$p, ARRAY_FILTER_USE_BOTH));
    }

    /**
     * {@inheritDoc}
     */
    public function forAll(Closure \$p)
    {
        foreach (\$this->elements as \$key => \$element) {
            if (! \$p(\$key, \$element)) {
                return false;
            }
        }

        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function partition(Closure \$p)
    {
        \$matches = \$noMatches = [];

        foreach (\$this->elements as \$key => \$element) {
            if (\$p(\$key, \$element)) {
                \$matches[\$key] = \$element;
            } else {
                \$noMatches[\$key] = \$element;
            }
        }

        return [\$this->createFrom(\$matches), \$this->createFrom(\$noMatches)];
    }

    /**
     * Returns a string representation of this object.
     *
     * @return string
     */
    public function __toString()
    {
        return self::class . '@' . spl_object_hash(\$this);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        \$this->elements = [];
    }

    /**
     * {@inheritDoc}
     */
    public function slice(\$offset, \$length = null)
    {
        return array_slice(\$this->elements, \$offset, \$length, true);
    }

    /**
     * {@inheritDoc}
     */
    public function matching(Criteria \$criteria)
    {
        \$expr     = \$criteria->getWhereExpression();
        \$filtered = \$this->elements;

        if (\$expr) {
            \$visitor  = new ClosureExpressionVisitor();
            \$filter   = \$visitor->dispatch(\$expr);
            \$filtered = array_filter(\$filtered, \$filter);
        }

        \$orderings = \$criteria->getOrderings();

        if (\$orderings) {
            \$next = null;
            foreach (array_reverse(\$orderings) as \$field => \$ordering) {
                \$next = ClosureExpressionVisitor::sortByField(\$field, \$ordering === Criteria::DESC ? -1 : 1, \$next);
            }

            uasort(\$filtered, \$next);
        }

        \$offset = \$criteria->getFirstResult();
        \$length = \$criteria->getMaxResults();

        if (\$offset || \$length) {
            \$filtered = array_slice(\$filtered, (int) \$offset, \$length);
        }

        return \$this->createFrom(\$filtered);
    }
}
", "@app/vendor/doctrine/collections/lib/Doctrine/Common/Collections/ArrayCollection.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\ArrayCollection.php");
    }
}
