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

/* @app/vendor/doctrine/orm/docs/en/reference/configuration.rst */
class __TwigTemplate_2a0478d98a204912123e407ff3c62fa15a2295f38f06d285c769247c4d3d4dc0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/docs/en/reference/configuration.rst"));

        // line 1
        echo "Installation and Configuration
==============================

Doctrine can be installed with `Composer <https://getcomposer.org>`_.

Define the following requirement in your ``composer.json`` file:

::

    {
        \"require\": {
            \"doctrine/orm\": \"*\"
        }
    }

Then call ``composer install`` from your command line. If you don't know
how Composer works, check out their `Getting Started <https://getcomposer.org/doc/00-intro.md>`_ to set up.

Class loading
-------------

Autoloading is taken care of by Composer. You just have to include the composer autoload file in your project:

.. code-block:: php

    <?php
    // bootstrap.php
    // Include Composer Autoload (relative to project root).
    require_once \"vendor/autoload.php\";

Obtaining an EntityManager
--------------------------

Once you have prepared the class loading, you acquire an
*EntityManager* instance. The EntityManager class is the primary
access point to ORM functionality provided by Doctrine.

.. code-block:: php

    <?php
    // bootstrap.php
    require_once \"vendor/autoload.php\";

    use Doctrine\\ORM\\Tools\\Setup;
    use Doctrine\\ORM\\EntityManager;

    \$paths = array(\"/path/to/entity-files\");
    \$isDevMode = false;

    // the connection configuration
    \$dbParams = array(
        'driver'   => 'pdo_mysql',
        'user'     => 'root',
        'password' => '',
        'dbname'   => 'foo',
    );

    \$config = Setup::createAnnotationMetadataConfiguration(\$paths, \$isDevMode);
    \$entityManager = EntityManager::create(\$dbParams, \$config);

Or if you prefer XML:

.. code-block:: php

    <?php
    \$paths = array(\"/path/to/xml-mappings\");
    \$config = Setup::createXMLMetadataConfiguration(\$paths, \$isDevMode);
    \$entityManager = EntityManager::create(\$dbParams, \$config);

Or if you prefer YAML:

.. code-block:: php

    <?php
    \$paths = array(\"/path/to/yml-mappings\");
    \$config = Setup::createYAMLMetadataConfiguration(\$paths, \$isDevMode);
    \$entityManager = EntityManager::create(\$dbParams, \$config);

.. note::
    If you want to use yml mapping you should add yaml dependency to your `composer.json`:
    
    ::
    
        \"symfony/yaml\": \"*\"

Inside the ``Setup`` methods several assumptions are made:

-  If `\$isDevMode` is true caching is done in memory with the ``ArrayCache``. Proxy objects are recreated on every request.
-  If `\$isDevMode` is false, check for Caches in the order APC, Xcache, Memcache (127.0.0.1:11211), Redis (127.0.0.1:6379) unless `\$cache` is passed as fourth argument.
-  If `\$isDevMode` is false, set then proxy classes have to be explicitly created through the command line.
-  If third argument `\$proxyDir` is not set, use the systems temporary directory.

If you want to configure Doctrine in more detail, take a look at the :doc:`Advanced Configuration <reference/advanced-configuration>` section.

.. note::

    You can learn more about the database connection configuration in the
    `Doctrine DBAL connection configuration reference <http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html>`_.

Setting up the Commandline Tool
-------------------------------

Doctrine ships with a number of command line tools that are very helpful
during development. You can call this command from the Composer binary
directory:

.. code-block:: sh

    \$ php vendor/bin/doctrine

You need to register your applications EntityManager to the console tool
to make use of the tasks by creating a ``cli-config.php`` file with the
following content:

On Doctrine 2.4 and above:

.. code-block:: php

    <?php
    use Doctrine\\ORM\\Tools\\Console\\ConsoleRunner;

    // replace with file to your own project bootstrap
    require_once 'bootstrap.php';

    // replace with mechanism to retrieve EntityManager in your app
    \$entityManager = GetEntityManager();

    return ConsoleRunner::createHelperSet(\$entityManager);

On Doctrine 2.3 and below:

.. code-block:: php

    <?php
    // cli-config.php
    require_once 'my_bootstrap.php';

    // Any way to access the EntityManager from  your application
    \$em = GetMyEntityManager();

    \$helperSet = new \\Symfony\\Component\\Console\\Helper\\HelperSet(array(
        'db' => new \\Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper(\$em->getConnection()),
        'em' => new \\Doctrine\\ORM\\Tools\\Console\\Helper\\EntityManagerHelper(\$em)
    ));
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/docs/en/reference/configuration.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Installation and Configuration
==============================

Doctrine can be installed with `Composer <https://getcomposer.org>`_.

Define the following requirement in your ``composer.json`` file:

::

    {
        \"require\": {
            \"doctrine/orm\": \"*\"
        }
    }

Then call ``composer install`` from your command line. If you don't know
how Composer works, check out their `Getting Started <https://getcomposer.org/doc/00-intro.md>`_ to set up.

Class loading
-------------

Autoloading is taken care of by Composer. You just have to include the composer autoload file in your project:

.. code-block:: php

    <?php
    // bootstrap.php
    // Include Composer Autoload (relative to project root).
    require_once \"vendor/autoload.php\";

Obtaining an EntityManager
--------------------------

Once you have prepared the class loading, you acquire an
*EntityManager* instance. The EntityManager class is the primary
access point to ORM functionality provided by Doctrine.

.. code-block:: php

    <?php
    // bootstrap.php
    require_once \"vendor/autoload.php\";

    use Doctrine\\ORM\\Tools\\Setup;
    use Doctrine\\ORM\\EntityManager;

    \$paths = array(\"/path/to/entity-files\");
    \$isDevMode = false;

    // the connection configuration
    \$dbParams = array(
        'driver'   => 'pdo_mysql',
        'user'     => 'root',
        'password' => '',
        'dbname'   => 'foo',
    );

    \$config = Setup::createAnnotationMetadataConfiguration(\$paths, \$isDevMode);
    \$entityManager = EntityManager::create(\$dbParams, \$config);

Or if you prefer XML:

.. code-block:: php

    <?php
    \$paths = array(\"/path/to/xml-mappings\");
    \$config = Setup::createXMLMetadataConfiguration(\$paths, \$isDevMode);
    \$entityManager = EntityManager::create(\$dbParams, \$config);

Or if you prefer YAML:

.. code-block:: php

    <?php
    \$paths = array(\"/path/to/yml-mappings\");
    \$config = Setup::createYAMLMetadataConfiguration(\$paths, \$isDevMode);
    \$entityManager = EntityManager::create(\$dbParams, \$config);

.. note::
    If you want to use yml mapping you should add yaml dependency to your `composer.json`:
    
    ::
    
        \"symfony/yaml\": \"*\"

Inside the ``Setup`` methods several assumptions are made:

-  If `\$isDevMode` is true caching is done in memory with the ``ArrayCache``. Proxy objects are recreated on every request.
-  If `\$isDevMode` is false, check for Caches in the order APC, Xcache, Memcache (127.0.0.1:11211), Redis (127.0.0.1:6379) unless `\$cache` is passed as fourth argument.
-  If `\$isDevMode` is false, set then proxy classes have to be explicitly created through the command line.
-  If third argument `\$proxyDir` is not set, use the systems temporary directory.

If you want to configure Doctrine in more detail, take a look at the :doc:`Advanced Configuration <reference/advanced-configuration>` section.

.. note::

    You can learn more about the database connection configuration in the
    `Doctrine DBAL connection configuration reference <http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html>`_.

Setting up the Commandline Tool
-------------------------------

Doctrine ships with a number of command line tools that are very helpful
during development. You can call this command from the Composer binary
directory:

.. code-block:: sh

    \$ php vendor/bin/doctrine

You need to register your applications EntityManager to the console tool
to make use of the tasks by creating a ``cli-config.php`` file with the
following content:

On Doctrine 2.4 and above:

.. code-block:: php

    <?php
    use Doctrine\\ORM\\Tools\\Console\\ConsoleRunner;

    // replace with file to your own project bootstrap
    require_once 'bootstrap.php';

    // replace with mechanism to retrieve EntityManager in your app
    \$entityManager = GetEntityManager();

    return ConsoleRunner::createHelperSet(\$entityManager);

On Doctrine 2.3 and below:

.. code-block:: php

    <?php
    // cli-config.php
    require_once 'my_bootstrap.php';

    // Any way to access the EntityManager from  your application
    \$em = GetMyEntityManager();

    \$helperSet = new \\Symfony\\Component\\Console\\Helper\\HelperSet(array(
        'db' => new \\Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper(\$em->getConnection()),
        'em' => new \\Doctrine\\ORM\\Tools\\Console\\Helper\\EntityManagerHelper(\$em)
    ));
", "@app/vendor/doctrine/orm/docs/en/reference/configuration.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\docs\\en\\reference\\configuration.rst");
    }
}
