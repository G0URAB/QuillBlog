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

/* @app/vendor/doctrine/orm/docs/en/cookbook/implementing-arrayaccess-for-domain-objects.rst */
class __TwigTemplate_0769dc635719f04d23fab70f6c53b30fb6850f458a02274f6b609f2af42994a3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/docs/en/cookbook/implementing-arrayaccess-for-domain-objects.rst"));

        // line 1
        echo "Implementing ArrayAccess for Domain Objects
===========================================

.. sectionauthor:: Roman Borschel (roman@code-factory.org)

This recipe will show you how to implement ArrayAccess for your
domain objects in order to allow more uniform access, for example
in templates. In these examples we will implement ArrayAccess on a
`Layer Supertype <http://martinfowler.com/eaaCatalog/layerSupertype.html>`_
for all our domain objects.

Option 1
--------

In this implementation we will make use of PHPs highly dynamic
nature to dynamically access properties of a subtype in a supertype
at runtime. Note that this implementation has 2 main caveats:


-  It will not work with private fields
-  It will not go through any getters/setters

.. code-block:: php

    <?php
    abstract class DomainObject implements ArrayAccess
    {
        public function offsetExists(\$offset) {
            return isset(\$this->\$offset);
        }
    
        public function offsetSet(\$offset, \$value) {
            \$this->\$offset = \$value;
        }
    
        public function offsetGet(\$offset) {
            return \$this->\$offset;
        }
    
        public function offsetUnset(\$offset) {
            \$this->\$offset = null;
        }
    }

Option 2
--------

In this implementation we will dynamically invoke getters/setters.
Again we use PHPs dynamic nature to invoke methods on a subtype
from a supertype at runtime. This implementation has the following
caveats:


-  It relies on a naming convention
-  The semantics of offsetExists can differ
-  offsetUnset will not work with typehinted setters

.. code-block:: php

    <?php
    abstract class DomainObject implements ArrayAccess
    {
        public function offsetExists(\$offset) {
            // In this example we say that exists means it is not null
            \$value = \$this->{\"get\$offset\"}();
            return \$value !== null;
        }
    
        public function offsetSet(\$offset, \$value) {
            \$this->{\"set\$offset\"}(\$value);
        }
    
        public function offsetGet(\$offset) {
            return \$this->{\"get\$offset\"}();
        }
    
        public function offsetUnset(\$offset) {
            \$this->{\"set\$offset\"}(null);
        }
    }

Read-only
---------

You can slightly tweak option 1 or option 2 in order to make array
access read-only. This will also circumvent some of the caveats of
each option. Simply make offsetSet and offsetUnset throw an
exception (i.e. BadMethodCallException).

.. code-block:: php

    <?php
    abstract class DomainObject implements ArrayAccess
    {
        public function offsetExists(\$offset) {
            // option 1 or option 2
        }
    
        public function offsetSet(\$offset, \$value) {
            throw new BadMethodCallException(\"Array access of class \" . get_class(\$this) . \" is read-only!\");
        }
    
        public function offsetGet(\$offset) {
            // option 1 or option 2
        }
    
        public function offsetUnset(\$offset) {
            throw new BadMethodCallException(\"Array access of class \" . get_class(\$this) . \" is read-only!\");
        }
    }


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/docs/en/cookbook/implementing-arrayaccess-for-domain-objects.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Implementing ArrayAccess for Domain Objects
===========================================

.. sectionauthor:: Roman Borschel (roman@code-factory.org)

This recipe will show you how to implement ArrayAccess for your
domain objects in order to allow more uniform access, for example
in templates. In these examples we will implement ArrayAccess on a
`Layer Supertype <http://martinfowler.com/eaaCatalog/layerSupertype.html>`_
for all our domain objects.

Option 1
--------

In this implementation we will make use of PHPs highly dynamic
nature to dynamically access properties of a subtype in a supertype
at runtime. Note that this implementation has 2 main caveats:


-  It will not work with private fields
-  It will not go through any getters/setters

.. code-block:: php

    <?php
    abstract class DomainObject implements ArrayAccess
    {
        public function offsetExists(\$offset) {
            return isset(\$this->\$offset);
        }
    
        public function offsetSet(\$offset, \$value) {
            \$this->\$offset = \$value;
        }
    
        public function offsetGet(\$offset) {
            return \$this->\$offset;
        }
    
        public function offsetUnset(\$offset) {
            \$this->\$offset = null;
        }
    }

Option 2
--------

In this implementation we will dynamically invoke getters/setters.
Again we use PHPs dynamic nature to invoke methods on a subtype
from a supertype at runtime. This implementation has the following
caveats:


-  It relies on a naming convention
-  The semantics of offsetExists can differ
-  offsetUnset will not work with typehinted setters

.. code-block:: php

    <?php
    abstract class DomainObject implements ArrayAccess
    {
        public function offsetExists(\$offset) {
            // In this example we say that exists means it is not null
            \$value = \$this->{\"get\$offset\"}();
            return \$value !== null;
        }
    
        public function offsetSet(\$offset, \$value) {
            \$this->{\"set\$offset\"}(\$value);
        }
    
        public function offsetGet(\$offset) {
            return \$this->{\"get\$offset\"}();
        }
    
        public function offsetUnset(\$offset) {
            \$this->{\"set\$offset\"}(null);
        }
    }

Read-only
---------

You can slightly tweak option 1 or option 2 in order to make array
access read-only. This will also circumvent some of the caveats of
each option. Simply make offsetSet and offsetUnset throw an
exception (i.e. BadMethodCallException).

.. code-block:: php

    <?php
    abstract class DomainObject implements ArrayAccess
    {
        public function offsetExists(\$offset) {
            // option 1 or option 2
        }
    
        public function offsetSet(\$offset, \$value) {
            throw new BadMethodCallException(\"Array access of class \" . get_class(\$this) . \" is read-only!\");
        }
    
        public function offsetGet(\$offset) {
            // option 1 or option 2
        }
    
        public function offsetUnset(\$offset) {
            throw new BadMethodCallException(\"Array access of class \" . get_class(\$this) . \" is read-only!\");
        }
    }


", "@app/vendor/doctrine/orm/docs/en/cookbook/implementing-arrayaccess-for-domain-objects.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\docs\\en\\cookbook\\implementing-arrayaccess-for-domain-objects.rst");
    }
}
