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

/* @app/vendor/doctrine/orm/docs/en/cookbook/decorator-pattern.rst */
class __TwigTemplate_569165c85df0397d38a5d87c34c58e844e33317c300c131e08c975e412ea6748 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/docs/en/cookbook/decorator-pattern.rst"));

        // line 1
        echo "Persisting the Decorator Pattern
================================

.. sectionauthor:: Chris Woodford <chris.woodford@gmail.com>

This recipe will show you a simple example of how you can use 
Doctrine 2 to persist an implementation of the
`Decorator Pattern <http://en.wikipedia.org/wiki/Decorator_pattern>`_

Component
---------

The ``Component`` class needs to be persisted, so it's going to 
be an ``Entity``. As the top of the inheritance hierarchy, it's going 
to have to define the persistent inheritance. For this example, we 
will use Single Table Inheritance, but Class Table Inheritance  
would work as well. In the discriminator map, we will define two 
concrete subclasses, ``ConcreteComponent`` and ``ConcreteDecorator``. 

.. code-block:: php

    <?php
    
    namespace Test;
 
    /**
     * @Entity
     * @InheritanceType(\"SINGLE_TABLE\")
     * @DiscriminatorColumn(name=\"discr\", type=\"string\")
     * @DiscriminatorMap({\"cc\" = \"Test\\Component\\ConcreteComponent\", 
        \"cd\" = \"Test\\Decorator\\ConcreteDecorator\"})
     */
    abstract class Component
    {
 
        /**
         * @Id @Column(type=\"integer\")
         * @GeneratedValue(strategy=\"AUTO\")
         */
        protected \$id;
 
        /** @Column(type=\"string\", nullable=true) */
        protected \$name;
 
        /**
         * Get id
         * @return integer \$id
         */
        public function getId()
        {
            return \$this->id;
        }
 
        /**
         * Set name
         * @param string \$name
         */
        public function setName(\$name)
        {
            \$this->name = \$name;
        }
 
        /**
         * Get name
         * @return string \$name
         */
        public function getName()
        {
            return \$this->name;
        }
 
    }
    
ConcreteComponent
-----------------

The ``ConcreteComponent`` class is pretty simple and doesn't do much 
more than extend the abstract ``Component`` class (only for the 
purpose of keeping this example simple).

.. code-block:: php

    <?php
    
    namespace Test\\Component;
 
    use Test\\Component;
 
    /** @Entity */
    class ConcreteComponent extends Component
    {}
    
Decorator
---------

The ``Decorator`` class doesn't need to be persisted, but it does 
need to define an association with a persisted ``Entity``. We can 
use a ``MappedSuperclass`` for this.

.. code-block:: php

    <?php

    namespace Test;
 
    /** @MappedSuperclass */
    abstract class Decorator extends Component
    {
 
        /**
         * @OneToOne(targetEntity=\"Test\\Component\", cascade={\"all\"})
         * @JoinColumn(name=\"decorates\", referencedColumnName=\"id\")
         */
        protected \$decorates;
 
        /**
         * initialize the decorator
         * @param Component \$c
         */
        public function __construct(Component \$c)
        {
            \$this->setDecorates(\$c);
        }
 
        /**
         * (non-PHPdoc)
         * @see Test.Component::getName()
         */
        public function getName()
        {
    \t    return 'Decorated ' . \$this->getDecorates()->getName();
        }
 
        /**
         * the component being decorated
         * @return Component
         */
        protected function getDecorates()
        {
    \t    return \$this->decorates;
        }
 
        /**
         * sets the component being decorated
         * @param Component \$c
         */
        protected function setDecorates(Component \$c)
        {
    \t    \$this->decorates = \$c;
        }
 
    }

All operations on the ``Decorator`` (i.e. persist, remove, etc) will 
cascade from the ``Decorator`` to the ``Component``. This means that 
when we persist a ``Decorator``, Doctrine will take care of 
persisting the chain of decorated objects for us. A ``Decorator`` can 
be treated exactly as a ``Component`` when it comes time to 
persisting it.
 
The ``Decorator's`` constructor accepts an instance of a 
``Component``, as defined by the ``Decorator`` pattern. The 
setDecorates/getDecorates methods have been defined as protected to 
hide the fact that a ``Decorator`` is decorating a ``Component`` and 
keeps the ``Component`` interface and the ``Decorator`` interface 
identical.

To illustrate the intended result of the ``Decorator`` pattern, the 
getName() method has been overridden to append a string to the 
``Component's`` getName() method.

ConcreteDecorator
-----------------

The final class required to complete a simple implementation of the 
Decorator pattern is the ``ConcreteDecorator``. In order to further 
illustrate how the ``Decorator`` can alter data as it moves through 
the chain of decoration, a new field, \"special\", has been added to 
this class. The getName() has been overridden and appends the value 
of the getSpecial() method to its return value.  

.. code-block:: php

    <?php
    
    namespace Test\\Decorator;
 
    use Test\\Decorator;
 
    /** @Entity */
    class ConcreteDecorator extends Decorator
    {
 
        /** @Column(type=\"string\", nullable=true) */
        protected \$special;
 
        /**
         * Set special
         * @param string \$special
         */
        public function setSpecial(\$special)
        {
            \$this->special = \$special;
        }
 
        /**
         * Get special
         * @return string \$special
         */
        public function getSpecial()
        {
            return \$this->special;
        }
 
        /**
         * (non-PHPdoc)
         * @see Test.Component::getName()
         */
        public function getName()
        {
            return '[' . \$this->getSpecial()
                . '] ' . parent::getName(); 
        }
 
    }
    
Examples
--------

Here is an example of how to persist and retrieve your decorated 
objects

.. code-block:: php

    <?php
    
    use Test\\Component\\ConcreteComponent,
        Test\\Decorator\\ConcreteDecorator;
 
    // assumes Doctrine 2 is configured and an instance of
    // an EntityManager is available as \$em
 
    // create a new concrete component
    \$c = new ConcreteComponent();
    \$c->setName('Test Component 1');
    \$em->persist(\$c); // assigned unique ID = 1
 
    // create a new concrete decorator
    \$c = new ConcreteComponent();
    \$c->setName('Test Component 2');
 
    \$d = new ConcreteDecorator(\$c);
    \$d->setSpecial('Really');
    \$em->persist(\$d); 
    // assigns c as unique ID = 2, and d as unique ID = 3
    
    \$em->flush();

    \$c = \$em->find('Test\\Component', 1);
    \$d = \$em->find('Test\\Component', 3);
 
    echo get_class(\$c);
    // prints: Test\\Component\\ConcreteComponent
 
    echo \$c->getName();
    // prints: Test Component 1 
 
    echo get_class(\$d) 
    // prints: Test\\Component\\ConcreteDecorator
 
    echo \$d->getName();
    // prints: [Really] Decorated Test Component 2
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/docs/en/cookbook/decorator-pattern.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Persisting the Decorator Pattern
================================

.. sectionauthor:: Chris Woodford <chris.woodford@gmail.com>

This recipe will show you a simple example of how you can use 
Doctrine 2 to persist an implementation of the
`Decorator Pattern <http://en.wikipedia.org/wiki/Decorator_pattern>`_

Component
---------

The ``Component`` class needs to be persisted, so it's going to 
be an ``Entity``. As the top of the inheritance hierarchy, it's going 
to have to define the persistent inheritance. For this example, we 
will use Single Table Inheritance, but Class Table Inheritance  
would work as well. In the discriminator map, we will define two 
concrete subclasses, ``ConcreteComponent`` and ``ConcreteDecorator``. 

.. code-block:: php

    <?php
    
    namespace Test;
 
    /**
     * @Entity
     * @InheritanceType(\"SINGLE_TABLE\")
     * @DiscriminatorColumn(name=\"discr\", type=\"string\")
     * @DiscriminatorMap({\"cc\" = \"Test\\Component\\ConcreteComponent\", 
        \"cd\" = \"Test\\Decorator\\ConcreteDecorator\"})
     */
    abstract class Component
    {
 
        /**
         * @Id @Column(type=\"integer\")
         * @GeneratedValue(strategy=\"AUTO\")
         */
        protected \$id;
 
        /** @Column(type=\"string\", nullable=true) */
        protected \$name;
 
        /**
         * Get id
         * @return integer \$id
         */
        public function getId()
        {
            return \$this->id;
        }
 
        /**
         * Set name
         * @param string \$name
         */
        public function setName(\$name)
        {
            \$this->name = \$name;
        }
 
        /**
         * Get name
         * @return string \$name
         */
        public function getName()
        {
            return \$this->name;
        }
 
    }
    
ConcreteComponent
-----------------

The ``ConcreteComponent`` class is pretty simple and doesn't do much 
more than extend the abstract ``Component`` class (only for the 
purpose of keeping this example simple).

.. code-block:: php

    <?php
    
    namespace Test\\Component;
 
    use Test\\Component;
 
    /** @Entity */
    class ConcreteComponent extends Component
    {}
    
Decorator
---------

The ``Decorator`` class doesn't need to be persisted, but it does 
need to define an association with a persisted ``Entity``. We can 
use a ``MappedSuperclass`` for this.

.. code-block:: php

    <?php

    namespace Test;
 
    /** @MappedSuperclass */
    abstract class Decorator extends Component
    {
 
        /**
         * @OneToOne(targetEntity=\"Test\\Component\", cascade={\"all\"})
         * @JoinColumn(name=\"decorates\", referencedColumnName=\"id\")
         */
        protected \$decorates;
 
        /**
         * initialize the decorator
         * @param Component \$c
         */
        public function __construct(Component \$c)
        {
            \$this->setDecorates(\$c);
        }
 
        /**
         * (non-PHPdoc)
         * @see Test.Component::getName()
         */
        public function getName()
        {
    \t    return 'Decorated ' . \$this->getDecorates()->getName();
        }
 
        /**
         * the component being decorated
         * @return Component
         */
        protected function getDecorates()
        {
    \t    return \$this->decorates;
        }
 
        /**
         * sets the component being decorated
         * @param Component \$c
         */
        protected function setDecorates(Component \$c)
        {
    \t    \$this->decorates = \$c;
        }
 
    }

All operations on the ``Decorator`` (i.e. persist, remove, etc) will 
cascade from the ``Decorator`` to the ``Component``. This means that 
when we persist a ``Decorator``, Doctrine will take care of 
persisting the chain of decorated objects for us. A ``Decorator`` can 
be treated exactly as a ``Component`` when it comes time to 
persisting it.
 
The ``Decorator's`` constructor accepts an instance of a 
``Component``, as defined by the ``Decorator`` pattern. The 
setDecorates/getDecorates methods have been defined as protected to 
hide the fact that a ``Decorator`` is decorating a ``Component`` and 
keeps the ``Component`` interface and the ``Decorator`` interface 
identical.

To illustrate the intended result of the ``Decorator`` pattern, the 
getName() method has been overridden to append a string to the 
``Component's`` getName() method.

ConcreteDecorator
-----------------

The final class required to complete a simple implementation of the 
Decorator pattern is the ``ConcreteDecorator``. In order to further 
illustrate how the ``Decorator`` can alter data as it moves through 
the chain of decoration, a new field, \"special\", has been added to 
this class. The getName() has been overridden and appends the value 
of the getSpecial() method to its return value.  

.. code-block:: php

    <?php
    
    namespace Test\\Decorator;
 
    use Test\\Decorator;
 
    /** @Entity */
    class ConcreteDecorator extends Decorator
    {
 
        /** @Column(type=\"string\", nullable=true) */
        protected \$special;
 
        /**
         * Set special
         * @param string \$special
         */
        public function setSpecial(\$special)
        {
            \$this->special = \$special;
        }
 
        /**
         * Get special
         * @return string \$special
         */
        public function getSpecial()
        {
            return \$this->special;
        }
 
        /**
         * (non-PHPdoc)
         * @see Test.Component::getName()
         */
        public function getName()
        {
            return '[' . \$this->getSpecial()
                . '] ' . parent::getName(); 
        }
 
    }
    
Examples
--------

Here is an example of how to persist and retrieve your decorated 
objects

.. code-block:: php

    <?php
    
    use Test\\Component\\ConcreteComponent,
        Test\\Decorator\\ConcreteDecorator;
 
    // assumes Doctrine 2 is configured and an instance of
    // an EntityManager is available as \$em
 
    // create a new concrete component
    \$c = new ConcreteComponent();
    \$c->setName('Test Component 1');
    \$em->persist(\$c); // assigned unique ID = 1
 
    // create a new concrete decorator
    \$c = new ConcreteComponent();
    \$c->setName('Test Component 2');
 
    \$d = new ConcreteDecorator(\$c);
    \$d->setSpecial('Really');
    \$em->persist(\$d); 
    // assigns c as unique ID = 2, and d as unique ID = 3
    
    \$em->flush();

    \$c = \$em->find('Test\\Component', 1);
    \$d = \$em->find('Test\\Component', 3);
 
    echo get_class(\$c);
    // prints: Test\\Component\\ConcreteComponent
 
    echo \$c->getName();
    // prints: Test Component 1 
 
    echo get_class(\$d) 
    // prints: Test\\Component\\ConcreteDecorator
 
    echo \$d->getName();
    // prints: [Really] Decorated Test Component 2
    
", "@app/vendor/doctrine/orm/docs/en/cookbook/decorator-pattern.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\docs\\en\\cookbook\\decorator-pattern.rst");
    }
}
