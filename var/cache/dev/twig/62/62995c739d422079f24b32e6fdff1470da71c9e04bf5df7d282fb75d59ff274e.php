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

/* @app/vendor/doctrine/orm/docs/en/cookbook/mysql-enums.rst */
class __TwigTemplate_44788a53731109ac40c21eb5176ee0af966846cfb7c241f8d944b8f7fb3e2b5c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/docs/en/cookbook/mysql-enums.rst"));

        // line 1
        echo "Mysql Enums
===========

The type system of Doctrine 2 consists of flyweights, which means there is only
one instance of any given type. Additionally types do not contain state. Both
assumptions make it rather complicated to work with the Enum Type of MySQL that
is used quite a lot by developers.

When using Enums with a non-tweaked Doctrine 2 application you will get
errors from the Schema-Tool commands due to the unknown database type \"enum\".
By default Doctrine does not map the MySQL enum type to a Doctrine type.
This is because Enums contain state (their allowed values) and Doctrine
types don't.

This cookbook entry shows two possible solutions to work with MySQL enums.
But first a word of warning. The MySQL Enum type has considerable downsides:

-  Adding new values requires to rebuild the whole table, which can take hours
   depending on the size.
-  Enums are ordered in the way the values are specified, not in their \"natural\" order.
-  Enums validation mechanism for allowed values is not necessarily good,
   specifying invalid values leads to an empty enum for the default MySQL error
   settings. You can easily replicate the \"allow only some values\" requirement
   in your Doctrine entities.

Solution 1: Mapping to Varchars
-------------------------------

You can map ENUMs to varchars. You can register MySQL ENUMs to map to Doctrine
varchars. This way Doctrine always resolves ENUMs to Doctrine varchars. It
will even detect this match correctly when using SchemaTool update commands.

.. code-block:: php

    <?php
    \$conn = \$em->getConnection();
    \$conn->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');

In this case you have to ensure that each varchar field that is an enum in the
database only gets passed the allowed values. You can easily enforce this in your
entities:

.. code-block:: php

    <?php
    /** @Entity */
    class Article
    {
        const STATUS_VISIBLE = 'visible';
        const STATUS_INVISIBLE = 'invisible';

        /** @Column(type=\"string\") */
        private \$status;

        public function setStatus(\$status)
        {
            if (!in_array(\$status, array(self::STATUS_VISIBLE, self::STATUS_INVISIBLE))) {
                throw new \\InvalidArgumentException(\"Invalid status\");
            }
            \$this->status = \$status;
        }
    }

If you want to actively create enums through the Doctrine Schema-Tool by using
the **columnDefinition** attribute.

.. code-block:: php

    <?php
    /** @Entity */
    class Article
    {
        /** @Column(type=\"string\", columnDefinition=\"ENUM('visible', 'invisible')\") */
        private \$status;
    }

In this case however Schema-Tool update will have a hard time not to request changes for this column on each call.

Solution 2: Defining a Type
---------------------------

You can make a stateless ENUM type by creating a type class for each unique set of ENUM values.
For example for the previous enum type:

.. code-block:: php

    <?php
    namespace MyProject\\DBAL;

    use Doctrine\\DBAL\\Types\\Type;
    use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

    class EnumVisibilityType extends Type
    {
        const ENUM_VISIBILITY = 'enumvisibility';
        const STATUS_VISIBLE = 'visible';
        const STATUS_INVISIBLE = 'invisible';

        public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
        {
            return \"ENUM('visible', 'invisible')\";
        }

        public function convertToPHPValue(\$value, AbstractPlatform \$platform)
        {
            return \$value;
        }

        public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
        {
            if (!in_array(\$value, array(self::STATUS_VISIBLE, self::STATUS_INVISIBLE))) {
                throw new \\InvalidArgumentException(\"Invalid status\");
            }
            return \$value;
        }

        public function getName()
        {
            return self::ENUM_VISIBILITY;
        }

        public function requiresSQLCommentHint(AbstractPlatform \$platform)
        {
            return true;
        }
    }

You can register this type with ``Type::addType('enumvisibility', 'MyProject\\DBAL\\EnumVisibilityType');``.
Then in your entity you can just use this type:

.. code-block:: php

    <?php
    /** @Entity */
    class Article
    {
        /** @Column(type=\"enumvisibility\") */
        private \$status;
    }

You can generalize this approach easily to create a base class for enums:

.. code-block:: php

    <?php
    namespace MyProject\\DBAL;

    use Doctrine\\DBAL\\Types\\Type;
    use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

    abstract class EnumType extends Type
    {
        protected \$name;
        protected \$values = array();

        public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
        {
            \$values = array_map(function(\$val) { return \"'\".\$val.\"'\"; }, \$this->values);

            return \"ENUM(\".implode(\", \", \$values).\")\";
        }

        public function convertToPHPValue(\$value, AbstractPlatform \$platform)
        {
            return \$value;
        }

        public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
        {
            if (!in_array(\$value, \$this->values)) {
                throw new \\InvalidArgumentException(\"Invalid '\".\$this->name.\"' value.\");
            }
            return \$value;
        }

        public function getName()
        {
            return \$this->name;
        }

        public function requiresSQLCommentHint(AbstractPlatform \$platform)
        {
            return true;
        }
    }

With this base class you can define an enum as easily as:

.. code-block:: php

    <?php
    namespace MyProject\\DBAL;

    class EnumVisibilityType extends EnumType
    {
        protected \$name = 'enumvisibility';
        protected \$values = array('visible', 'invisible');
    }

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/docs/en/cookbook/mysql-enums.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Mysql Enums
===========

The type system of Doctrine 2 consists of flyweights, which means there is only
one instance of any given type. Additionally types do not contain state. Both
assumptions make it rather complicated to work with the Enum Type of MySQL that
is used quite a lot by developers.

When using Enums with a non-tweaked Doctrine 2 application you will get
errors from the Schema-Tool commands due to the unknown database type \"enum\".
By default Doctrine does not map the MySQL enum type to a Doctrine type.
This is because Enums contain state (their allowed values) and Doctrine
types don't.

This cookbook entry shows two possible solutions to work with MySQL enums.
But first a word of warning. The MySQL Enum type has considerable downsides:

-  Adding new values requires to rebuild the whole table, which can take hours
   depending on the size.
-  Enums are ordered in the way the values are specified, not in their \"natural\" order.
-  Enums validation mechanism for allowed values is not necessarily good,
   specifying invalid values leads to an empty enum for the default MySQL error
   settings. You can easily replicate the \"allow only some values\" requirement
   in your Doctrine entities.

Solution 1: Mapping to Varchars
-------------------------------

You can map ENUMs to varchars. You can register MySQL ENUMs to map to Doctrine
varchars. This way Doctrine always resolves ENUMs to Doctrine varchars. It
will even detect this match correctly when using SchemaTool update commands.

.. code-block:: php

    <?php
    \$conn = \$em->getConnection();
    \$conn->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');

In this case you have to ensure that each varchar field that is an enum in the
database only gets passed the allowed values. You can easily enforce this in your
entities:

.. code-block:: php

    <?php
    /** @Entity */
    class Article
    {
        const STATUS_VISIBLE = 'visible';
        const STATUS_INVISIBLE = 'invisible';

        /** @Column(type=\"string\") */
        private \$status;

        public function setStatus(\$status)
        {
            if (!in_array(\$status, array(self::STATUS_VISIBLE, self::STATUS_INVISIBLE))) {
                throw new \\InvalidArgumentException(\"Invalid status\");
            }
            \$this->status = \$status;
        }
    }

If you want to actively create enums through the Doctrine Schema-Tool by using
the **columnDefinition** attribute.

.. code-block:: php

    <?php
    /** @Entity */
    class Article
    {
        /** @Column(type=\"string\", columnDefinition=\"ENUM('visible', 'invisible')\") */
        private \$status;
    }

In this case however Schema-Tool update will have a hard time not to request changes for this column on each call.

Solution 2: Defining a Type
---------------------------

You can make a stateless ENUM type by creating a type class for each unique set of ENUM values.
For example for the previous enum type:

.. code-block:: php

    <?php
    namespace MyProject\\DBAL;

    use Doctrine\\DBAL\\Types\\Type;
    use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

    class EnumVisibilityType extends Type
    {
        const ENUM_VISIBILITY = 'enumvisibility';
        const STATUS_VISIBLE = 'visible';
        const STATUS_INVISIBLE = 'invisible';

        public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
        {
            return \"ENUM('visible', 'invisible')\";
        }

        public function convertToPHPValue(\$value, AbstractPlatform \$platform)
        {
            return \$value;
        }

        public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
        {
            if (!in_array(\$value, array(self::STATUS_VISIBLE, self::STATUS_INVISIBLE))) {
                throw new \\InvalidArgumentException(\"Invalid status\");
            }
            return \$value;
        }

        public function getName()
        {
            return self::ENUM_VISIBILITY;
        }

        public function requiresSQLCommentHint(AbstractPlatform \$platform)
        {
            return true;
        }
    }

You can register this type with ``Type::addType('enumvisibility', 'MyProject\\DBAL\\EnumVisibilityType');``.
Then in your entity you can just use this type:

.. code-block:: php

    <?php
    /** @Entity */
    class Article
    {
        /** @Column(type=\"enumvisibility\") */
        private \$status;
    }

You can generalize this approach easily to create a base class for enums:

.. code-block:: php

    <?php
    namespace MyProject\\DBAL;

    use Doctrine\\DBAL\\Types\\Type;
    use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

    abstract class EnumType extends Type
    {
        protected \$name;
        protected \$values = array();

        public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
        {
            \$values = array_map(function(\$val) { return \"'\".\$val.\"'\"; }, \$this->values);

            return \"ENUM(\".implode(\", \", \$values).\")\";
        }

        public function convertToPHPValue(\$value, AbstractPlatform \$platform)
        {
            return \$value;
        }

        public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
        {
            if (!in_array(\$value, \$this->values)) {
                throw new \\InvalidArgumentException(\"Invalid '\".\$this->name.\"' value.\");
            }
            return \$value;
        }

        public function getName()
        {
            return \$this->name;
        }

        public function requiresSQLCommentHint(AbstractPlatform \$platform)
        {
            return true;
        }
    }

With this base class you can define an enum as easily as:

.. code-block:: php

    <?php
    namespace MyProject\\DBAL;

    class EnumVisibilityType extends EnumType
    {
        protected \$name = 'enumvisibility';
        protected \$values = array('visible', 'invisible');
    }

", "@app/vendor/doctrine/orm/docs/en/cookbook/mysql-enums.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\docs\\en\\cookbook\\mysql-enums.rst");
    }
}
