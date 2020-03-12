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

/* @app/vendor/doctrine/orm/docs/en/reference/batch-processing.rst */
class __TwigTemplate_734212c6336d26281fb09db20b661e04165a3355049a5c713cf55fb7c9996257 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/docs/en/reference/batch-processing.rst"));

        // line 1
        echo "Batch Processing
================

This chapter shows you how to accomplish bulk inserts, updates and
deletes with Doctrine in an efficient way. The main problem with
bulk operations is usually not to run out of memory and this is
especially what the strategies presented here provide help with.

.. warning::

    An ORM tool is not primarily well-suited for mass
    inserts, updates or deletions. Every RDBMS has its own, most
    effective way of dealing with such operations and if the options
    outlined below are not sufficient for your purposes we recommend
    you use the tools for your particular RDBMS for these bulk
    operations.


.. note::

    Having an SQL logger enabled when processing batches can have a serious impact on performance and resource usage.
    To avoid that you should disable it in the DBAL configuration:
.. code-block:: php

    <?php
    \$em->getConnection()->getConfiguration()->setSQLLogger(null);

Bulk Inserts
------------

Bulk inserts in Doctrine are best performed in batches, taking
advantage of the transactional write-behind behavior of an
``EntityManager``. The following code shows an example for
inserting 10000 objects with a batch size of 20. You may need to
experiment with the batch size to find the size that works best for
you. Larger batch sizes mean more prepared statement reuse
internally but also mean more work during ``flush``.

.. code-block:: php

    <?php
    \$batchSize = 20;
    for (\$i = 1; \$i <= 10000; ++\$i) {
        \$user = new CmsUser;
        \$user->setStatus('user');
        \$user->setUsername('user' . \$i);
        \$user->setName('Mr.Smith-' . \$i);
        \$em->persist(\$user);
        if ((\$i % \$batchSize) === 0) {
            \$em->flush();
            \$em->clear(); // Detaches all objects from Doctrine!
        }
    }
    \$em->flush(); //Persist objects that did not make up an entire batch
    \$em->clear();

Bulk Updates
------------

There are 2 possibilities for bulk updates with Doctrine.

DQL UPDATE
~~~~~~~~~~

The by far most efficient way for bulk updates is to use a DQL
UPDATE query. Example:

.. code-block:: php

    <?php
    \$q = \$em->createQuery('update MyProject\\Model\\Manager m set m.salary = m.salary * 0.9');
    \$numUpdated = \$q->execute();

Iterating results
~~~~~~~~~~~~~~~~~

An alternative solution for bulk updates is to use the
``Query#iterate()`` facility to iterate over the query results step
by step instead of loading the whole result into memory at once.
The following example shows how to do this, combining the iteration
with the batching strategy that was already used for bulk inserts:

.. code-block:: php

    <?php
    \$batchSize = 20;
    \$i = 1;
    \$q = \$em->createQuery('select u from MyProject\\Model\\User u');
    \$iterableResult = \$q->iterate();
    foreach (\$iterableResult as \$row) {
        \$user = \$row[0];
        \$user->increaseCredit();
        \$user->calculateNewBonuses();
        if ((\$i % \$batchSize) === 0) {
            \$em->flush(); // Executes all updates.
            \$em->clear(); // Detaches all objects from Doctrine!
        }
        ++\$i;
    }
    \$em->flush();

.. note::

    Iterating results is not possible with queries that
    fetch-join a collection-valued association. The nature of such SQL
    result sets is not suitable for incremental hydration.

.. note::

    Results may be fully buffered by the database client/ connection allocating
    additional memory not visible to the PHP process. For large sets this
    may easily kill the process for no apparent reason.


Bulk Deletes
------------

There are two possibilities for bulk deletes with Doctrine. You can
either issue a single DQL DELETE query or you can iterate over
results removing them one at a time.

DQL DELETE
~~~~~~~~~~

The by far most efficient way for bulk deletes is to use a DQL
DELETE query.

Example:

.. code-block:: php

    <?php
    \$q = \$em->createQuery('delete from MyProject\\Model\\Manager m where m.salary > 100000');
    \$numDeleted = \$q->execute();

Iterating results
~~~~~~~~~~~~~~~~~

An alternative solution for bulk deletes is to use the
``Query#iterate()`` facility to iterate over the query results step
by step instead of loading the whole result into memory at once.
The following example shows how to do this:

.. code-block:: php

    <?php
    \$batchSize = 20;
    \$i = 1;
    \$q = \$em->createQuery('select u from MyProject\\Model\\User u');
    \$iterableResult = \$q->iterate();
    while ((\$row = \$iterableResult->next()) !== false) {
        \$em->remove(\$row[0]);
        if ((\$i % \$batchSize) === 0) {
            \$em->flush(); // Executes all deletions.
            \$em->clear(); // Detaches all objects from Doctrine!
        }
        ++\$i;
    }
    \$em->flush();

.. note::

    Iterating results is not possible with queries that
    fetch-join a collection-valued association. The nature of such SQL
    result sets is not suitable for incremental hydration.


Iterating Large Results for Data-Processing
-------------------------------------------

You can use the ``iterate()`` method just to iterate over a large
result and no UPDATE or DELETE intention. The ``IterableResult``
instance returned from ``\$query->iterate()`` implements the
Iterator interface so you can process a large result without memory
problems using the following approach:

.. code-block:: php

    <?php
    \$q = \$this->_em->createQuery('select u from MyProject\\Model\\User u');
    \$iterableResult = \$q->iterate();
    foreach (\$iterableResult as \$row) {
        // do stuff with the data in the row, \$row[0] is always the object
    
        // detach from Doctrine, so that it can be Garbage-Collected immediately
        \$this->_em->detach(\$row[0]);
    }

.. note::

    Iterating results is not possible with queries that
    fetch-join a collection-valued association. The nature of such SQL
    result sets is not suitable for incremental hydration.



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/docs/en/reference/batch-processing.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Batch Processing
================

This chapter shows you how to accomplish bulk inserts, updates and
deletes with Doctrine in an efficient way. The main problem with
bulk operations is usually not to run out of memory and this is
especially what the strategies presented here provide help with.

.. warning::

    An ORM tool is not primarily well-suited for mass
    inserts, updates or deletions. Every RDBMS has its own, most
    effective way of dealing with such operations and if the options
    outlined below are not sufficient for your purposes we recommend
    you use the tools for your particular RDBMS for these bulk
    operations.


.. note::

    Having an SQL logger enabled when processing batches can have a serious impact on performance and resource usage.
    To avoid that you should disable it in the DBAL configuration:
.. code-block:: php

    <?php
    \$em->getConnection()->getConfiguration()->setSQLLogger(null);

Bulk Inserts
------------

Bulk inserts in Doctrine are best performed in batches, taking
advantage of the transactional write-behind behavior of an
``EntityManager``. The following code shows an example for
inserting 10000 objects with a batch size of 20. You may need to
experiment with the batch size to find the size that works best for
you. Larger batch sizes mean more prepared statement reuse
internally but also mean more work during ``flush``.

.. code-block:: php

    <?php
    \$batchSize = 20;
    for (\$i = 1; \$i <= 10000; ++\$i) {
        \$user = new CmsUser;
        \$user->setStatus('user');
        \$user->setUsername('user' . \$i);
        \$user->setName('Mr.Smith-' . \$i);
        \$em->persist(\$user);
        if ((\$i % \$batchSize) === 0) {
            \$em->flush();
            \$em->clear(); // Detaches all objects from Doctrine!
        }
    }
    \$em->flush(); //Persist objects that did not make up an entire batch
    \$em->clear();

Bulk Updates
------------

There are 2 possibilities for bulk updates with Doctrine.

DQL UPDATE
~~~~~~~~~~

The by far most efficient way for bulk updates is to use a DQL
UPDATE query. Example:

.. code-block:: php

    <?php
    \$q = \$em->createQuery('update MyProject\\Model\\Manager m set m.salary = m.salary * 0.9');
    \$numUpdated = \$q->execute();

Iterating results
~~~~~~~~~~~~~~~~~

An alternative solution for bulk updates is to use the
``Query#iterate()`` facility to iterate over the query results step
by step instead of loading the whole result into memory at once.
The following example shows how to do this, combining the iteration
with the batching strategy that was already used for bulk inserts:

.. code-block:: php

    <?php
    \$batchSize = 20;
    \$i = 1;
    \$q = \$em->createQuery('select u from MyProject\\Model\\User u');
    \$iterableResult = \$q->iterate();
    foreach (\$iterableResult as \$row) {
        \$user = \$row[0];
        \$user->increaseCredit();
        \$user->calculateNewBonuses();
        if ((\$i % \$batchSize) === 0) {
            \$em->flush(); // Executes all updates.
            \$em->clear(); // Detaches all objects from Doctrine!
        }
        ++\$i;
    }
    \$em->flush();

.. note::

    Iterating results is not possible with queries that
    fetch-join a collection-valued association. The nature of such SQL
    result sets is not suitable for incremental hydration.

.. note::

    Results may be fully buffered by the database client/ connection allocating
    additional memory not visible to the PHP process. For large sets this
    may easily kill the process for no apparent reason.


Bulk Deletes
------------

There are two possibilities for bulk deletes with Doctrine. You can
either issue a single DQL DELETE query or you can iterate over
results removing them one at a time.

DQL DELETE
~~~~~~~~~~

The by far most efficient way for bulk deletes is to use a DQL
DELETE query.

Example:

.. code-block:: php

    <?php
    \$q = \$em->createQuery('delete from MyProject\\Model\\Manager m where m.salary > 100000');
    \$numDeleted = \$q->execute();

Iterating results
~~~~~~~~~~~~~~~~~

An alternative solution for bulk deletes is to use the
``Query#iterate()`` facility to iterate over the query results step
by step instead of loading the whole result into memory at once.
The following example shows how to do this:

.. code-block:: php

    <?php
    \$batchSize = 20;
    \$i = 1;
    \$q = \$em->createQuery('select u from MyProject\\Model\\User u');
    \$iterableResult = \$q->iterate();
    while ((\$row = \$iterableResult->next()) !== false) {
        \$em->remove(\$row[0]);
        if ((\$i % \$batchSize) === 0) {
            \$em->flush(); // Executes all deletions.
            \$em->clear(); // Detaches all objects from Doctrine!
        }
        ++\$i;
    }
    \$em->flush();

.. note::

    Iterating results is not possible with queries that
    fetch-join a collection-valued association. The nature of such SQL
    result sets is not suitable for incremental hydration.


Iterating Large Results for Data-Processing
-------------------------------------------

You can use the ``iterate()`` method just to iterate over a large
result and no UPDATE or DELETE intention. The ``IterableResult``
instance returned from ``\$query->iterate()`` implements the
Iterator interface so you can process a large result without memory
problems using the following approach:

.. code-block:: php

    <?php
    \$q = \$this->_em->createQuery('select u from MyProject\\Model\\User u');
    \$iterableResult = \$q->iterate();
    foreach (\$iterableResult as \$row) {
        // do stuff with the data in the row, \$row[0] is always the object
    
        // detach from Doctrine, so that it can be Garbage-Collected immediately
        \$this->_em->detach(\$row[0]);
    }

.. note::

    Iterating results is not possible with queries that
    fetch-join a collection-valued association. The nature of such SQL
    result sets is not suitable for incremental hydration.



", "@app/vendor/doctrine/orm/docs/en/reference/batch-processing.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\docs\\en\\reference\\batch-processing.rst");
    }
}
