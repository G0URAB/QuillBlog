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

/* @app/vendor/doctrine/orm/docs/en/reference/best-practices.rst */
class __TwigTemplate_cfa2ffefa1457e84b750cc707f054de2b5d73b0734212d2eef4517ef778e45ca extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/docs/en/reference/best-practices.rst"));

        // line 1
        echo "Best Practices
==============

The best practices mentioned here that affect database
design generally refer to best practices when working with Doctrine
and do not necessarily reflect best practices for database design
in general.

Constrain relationships as much as possible
-------------------------------------------

It is important to constrain relationships as much as possible.
This means:


-  Impose a traversal direction (avoid bidirectional associations
   if possible)
-  Eliminate nonessential associations

This has several benefits:


-  Reduced coupling in your domain model
-  Simpler code in your domain model (no need to maintain
   bidirectionality properly)
-  Less work for Doctrine

Avoid composite keys
--------------------

Even though Doctrine fully supports composite keys it is best not
to use them if possible. Composite keys require additional work by
Doctrine and thus have a higher probability of errors.

Use events judiciously
----------------------

The event system of Doctrine is great and fast. Even though making
heavy use of events, especially lifecycle events, can have a
negative impact on the performance of your application. Thus you
should use events judiciously.

Use cascades judiciously
------------------------

Automatic cascades of the persist/remove/merge/etc. operations are
very handy but should be used wisely. Do NOT simply add all
cascades to all associations. Think about which cascades actually
do make sense for you for a particular association, given the
scenarios it is most likely used in.

Don't use special characters
----------------------------

Avoid using any non-ASCII characters in class, field, table or
column names. Doctrine itself is not unicode-safe in many places
and will not be until PHP itself is fully unicode-aware.

Don't use identifier quoting
----------------------------

Identifier quoting is a workaround for using reserved words that
often causes problems in edge cases. Do not use identifier quoting
and avoid using reserved words as table or column names.

Initialize collections in the constructor
-----------------------------------------

It is recommended best practice to initialize any business
collections in entities in the constructor. Example:

.. code-block:: php

    <?php
    namespace MyProject\\Model;
    use Doctrine\\Common\\Collections\\ArrayCollection;
    
    class User {
        private \$addresses;
        private \$articles;
    
        public function __construct() {
            \$this->addresses = new ArrayCollection;
            \$this->articles = new ArrayCollection;
        }
    }

Don't map foreign keys to fields in an entity
---------------------------------------------

Foreign keys have no meaning whatsoever in an object model. Foreign
keys are how a relational database establishes relationships. Your
object model establishes relationships through object references.
Thus mapping foreign keys to object fields heavily leaks details of
the relational model into the object model, something you really
should not do.

Use explicit transaction demarcation
------------------------------------

While Doctrine will automatically wrap all DML operations in a
transaction on flush(), it is considered best practice to
explicitly set the transaction boundaries yourself. Otherwise every
single query is wrapped in a small transaction (Yes, SELECT
queries, too) since you can not talk to your database outside of a
transaction. While such short transactions for read-only (SELECT)
queries generally don't have any noticeable performance impact, it
is still preferable to use fewer, well-defined transactions that
are established through explicit transaction boundaries.


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/docs/en/reference/best-practices.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Best Practices
==============

The best practices mentioned here that affect database
design generally refer to best practices when working with Doctrine
and do not necessarily reflect best practices for database design
in general.

Constrain relationships as much as possible
-------------------------------------------

It is important to constrain relationships as much as possible.
This means:


-  Impose a traversal direction (avoid bidirectional associations
   if possible)
-  Eliminate nonessential associations

This has several benefits:


-  Reduced coupling in your domain model
-  Simpler code in your domain model (no need to maintain
   bidirectionality properly)
-  Less work for Doctrine

Avoid composite keys
--------------------

Even though Doctrine fully supports composite keys it is best not
to use them if possible. Composite keys require additional work by
Doctrine and thus have a higher probability of errors.

Use events judiciously
----------------------

The event system of Doctrine is great and fast. Even though making
heavy use of events, especially lifecycle events, can have a
negative impact on the performance of your application. Thus you
should use events judiciously.

Use cascades judiciously
------------------------

Automatic cascades of the persist/remove/merge/etc. operations are
very handy but should be used wisely. Do NOT simply add all
cascades to all associations. Think about which cascades actually
do make sense for you for a particular association, given the
scenarios it is most likely used in.

Don't use special characters
----------------------------

Avoid using any non-ASCII characters in class, field, table or
column names. Doctrine itself is not unicode-safe in many places
and will not be until PHP itself is fully unicode-aware.

Don't use identifier quoting
----------------------------

Identifier quoting is a workaround for using reserved words that
often causes problems in edge cases. Do not use identifier quoting
and avoid using reserved words as table or column names.

Initialize collections in the constructor
-----------------------------------------

It is recommended best practice to initialize any business
collections in entities in the constructor. Example:

.. code-block:: php

    <?php
    namespace MyProject\\Model;
    use Doctrine\\Common\\Collections\\ArrayCollection;
    
    class User {
        private \$addresses;
        private \$articles;
    
        public function __construct() {
            \$this->addresses = new ArrayCollection;
            \$this->articles = new ArrayCollection;
        }
    }

Don't map foreign keys to fields in an entity
---------------------------------------------

Foreign keys have no meaning whatsoever in an object model. Foreign
keys are how a relational database establishes relationships. Your
object model establishes relationships through object references.
Thus mapping foreign keys to object fields heavily leaks details of
the relational model into the object model, something you really
should not do.

Use explicit transaction demarcation
------------------------------------

While Doctrine will automatically wrap all DML operations in a
transaction on flush(), it is considered best practice to
explicitly set the transaction boundaries yourself. Otherwise every
single query is wrapped in a small transaction (Yes, SELECT
queries, too) since you can not talk to your database outside of a
transaction. While such short transactions for read-only (SELECT)
queries generally don't have any noticeable performance impact, it
is still preferable to use fewer, well-defined transactions that
are established through explicit transaction boundaries.


", "@app/vendor/doctrine/orm/docs/en/reference/best-practices.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\docs\\en\\reference\\best-practices.rst");
    }
}
