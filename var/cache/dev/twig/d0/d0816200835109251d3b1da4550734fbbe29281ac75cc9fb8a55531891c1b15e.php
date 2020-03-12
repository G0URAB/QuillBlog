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

/* @app/vendor/symfony/event-dispatcher/GenericEvent.php */
class __TwigTemplate_67b35a3d260421be92de549b5ad071c9ccf93b0d78edcd7aa3a584c593182764 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/event-dispatcher/GenericEvent.php"));

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

namespace Symfony\\Component\\EventDispatcher;

use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * Event encapsulation class.
 *
 * Encapsulates events thus decoupling the observer from the subject they encapsulate.
 *
 * @author Drak <drak@zikula.org>
 */
class GenericEvent extends Event implements \\ArrayAccess, \\IteratorAggregate
{
    protected \$subject;
    protected \$arguments;

    /**
     * Encapsulate an event with \$subject and \$args.
     *
     * @param mixed \$subject   The subject of the event, usually an object or a callable
     * @param array \$arguments Arguments to store in the event
     */
    public function __construct(\$subject = null, array \$arguments = [])
    {
        \$this->subject = \$subject;
        \$this->arguments = \$arguments;
    }

    /**
     * Getter for subject property.
     *
     * @return mixed The observer subject
     */
    public function getSubject()
    {
        return \$this->subject;
    }

    /**
     * Get argument by key.
     *
     * @return mixed Contents of array key
     *
     * @throws \\InvalidArgumentException if key is not found
     */
    public function getArgument(string \$key)
    {
        if (\$this->hasArgument(\$key)) {
            return \$this->arguments[\$key];
        }

        throw new \\InvalidArgumentException(sprintf('Argument \"%s\" not found.', \$key));
    }

    /**
     * Add argument to event.
     *
     * @param mixed \$value Value
     *
     * @return \$this
     */
    public function setArgument(string \$key, \$value)
    {
        \$this->arguments[\$key] = \$value;

        return \$this;
    }

    /**
     * Getter for all arguments.
     *
     * @return array
     */
    public function getArguments()
    {
        return \$this->arguments;
    }

    /**
     * Set args property.
     *
     * @return \$this
     */
    public function setArguments(array \$args = [])
    {
        \$this->arguments = \$args;

        return \$this;
    }

    /**
     * Has argument.
     *
     * @return bool
     */
    public function hasArgument(string \$key)
    {
        return \\array_key_exists(\$key, \$this->arguments);
    }

    /**
     * ArrayAccess for argument getter.
     *
     * @param string \$key Array key
     *
     * @return mixed
     *
     * @throws \\InvalidArgumentException if key does not exist in \$this->args
     */
    public function offsetGet(\$key)
    {
        return \$this->getArgument(\$key);
    }

    /**
     * ArrayAccess for argument setter.
     *
     * @param string \$key   Array key to set
     * @param mixed  \$value Value
     */
    public function offsetSet(\$key, \$value)
    {
        \$this->setArgument(\$key, \$value);
    }

    /**
     * ArrayAccess for unset argument.
     *
     * @param string \$key Array key
     */
    public function offsetUnset(\$key)
    {
        if (\$this->hasArgument(\$key)) {
            unset(\$this->arguments[\$key]);
        }
    }

    /**
     * ArrayAccess has argument.
     *
     * @param string \$key Array key
     *
     * @return bool
     */
    public function offsetExists(\$key)
    {
        return \$this->hasArgument(\$key);
    }

    /**
     * IteratorAggregate for iterating over the object like an array.
     *
     * @return \\ArrayIterator
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->arguments);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/event-dispatcher/GenericEvent.php";
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

namespace Symfony\\Component\\EventDispatcher;

use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * Event encapsulation class.
 *
 * Encapsulates events thus decoupling the observer from the subject they encapsulate.
 *
 * @author Drak <drak@zikula.org>
 */
class GenericEvent extends Event implements \\ArrayAccess, \\IteratorAggregate
{
    protected \$subject;
    protected \$arguments;

    /**
     * Encapsulate an event with \$subject and \$args.
     *
     * @param mixed \$subject   The subject of the event, usually an object or a callable
     * @param array \$arguments Arguments to store in the event
     */
    public function __construct(\$subject = null, array \$arguments = [])
    {
        \$this->subject = \$subject;
        \$this->arguments = \$arguments;
    }

    /**
     * Getter for subject property.
     *
     * @return mixed The observer subject
     */
    public function getSubject()
    {
        return \$this->subject;
    }

    /**
     * Get argument by key.
     *
     * @return mixed Contents of array key
     *
     * @throws \\InvalidArgumentException if key is not found
     */
    public function getArgument(string \$key)
    {
        if (\$this->hasArgument(\$key)) {
            return \$this->arguments[\$key];
        }

        throw new \\InvalidArgumentException(sprintf('Argument \"%s\" not found.', \$key));
    }

    /**
     * Add argument to event.
     *
     * @param mixed \$value Value
     *
     * @return \$this
     */
    public function setArgument(string \$key, \$value)
    {
        \$this->arguments[\$key] = \$value;

        return \$this;
    }

    /**
     * Getter for all arguments.
     *
     * @return array
     */
    public function getArguments()
    {
        return \$this->arguments;
    }

    /**
     * Set args property.
     *
     * @return \$this
     */
    public function setArguments(array \$args = [])
    {
        \$this->arguments = \$args;

        return \$this;
    }

    /**
     * Has argument.
     *
     * @return bool
     */
    public function hasArgument(string \$key)
    {
        return \\array_key_exists(\$key, \$this->arguments);
    }

    /**
     * ArrayAccess for argument getter.
     *
     * @param string \$key Array key
     *
     * @return mixed
     *
     * @throws \\InvalidArgumentException if key does not exist in \$this->args
     */
    public function offsetGet(\$key)
    {
        return \$this->getArgument(\$key);
    }

    /**
     * ArrayAccess for argument setter.
     *
     * @param string \$key   Array key to set
     * @param mixed  \$value Value
     */
    public function offsetSet(\$key, \$value)
    {
        \$this->setArgument(\$key, \$value);
    }

    /**
     * ArrayAccess for unset argument.
     *
     * @param string \$key Array key
     */
    public function offsetUnset(\$key)
    {
        if (\$this->hasArgument(\$key)) {
            unset(\$this->arguments[\$key]);
        }
    }

    /**
     * ArrayAccess has argument.
     *
     * @param string \$key Array key
     *
     * @return bool
     */
    public function offsetExists(\$key)
    {
        return \$this->hasArgument(\$key);
    }

    /**
     * IteratorAggregate for iterating over the object like an array.
     *
     * @return \\ArrayIterator
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->arguments);
    }
}
", "@app/vendor/symfony/event-dispatcher/GenericEvent.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\event-dispatcher\\GenericEvent.php");
    }
}
