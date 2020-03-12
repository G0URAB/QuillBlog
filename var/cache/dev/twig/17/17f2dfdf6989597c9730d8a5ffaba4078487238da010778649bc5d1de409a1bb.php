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

/* @app/vendor/doctrine/inflector/docs/en/index.rst */
class __TwigTemplate_4cbcf0a8bc9e4c3cf718245ca4de4a1e2de1c8fa174019133b08e9c928285c28 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/inflector/docs/en/index.rst"));

        // line 1
        echo "Introduction
============

The Doctrine Inflector has static methods for inflecting text.
The features include pluralization, singularization,
converting between camelCase and under_score and capitalizing
words.

All you need to use the Inflector is the ``Doctrine\\Common\\Inflector\\Inflector``
class.

Installation
============

You can install the Inflector with composer:

.. code-block::

    \$ composer require doctrine/inflector

Here are the available methods that you can use:

Tableize
========

Converts ``ModelName`` to ``model_name``:

.. code-block:: php

    echo Inflector::tableize('ModelName'); // model_name

Classify
========

Converts ``model_name`` to ``ModelName``:

.. code-block:: php

    echo Inflector::classify('model_name'); // ModelName

Camelize
========

This method uses `Classify`_ and then converts the first character to lowercase:

.. code-block:: php

    echo Inflector::camelize('model_name'); // modelName

ucwords
=======

Takes a string and capitalizes all of the words, like PHP's built-in
ucwords function. This extends that behavior, however, by allowing the
word delimiters to be configured, rather than only separating on
whitespace.

Here is an example:

.. code-block:: php

    \$string = 'top-o-the-morning to all_of_you!';

    echo Inflector::ucwords(\$string); // Top-O-The-Morning To All_of_you!

    echo Inflector::ucwords(\$string, '-_ '); // Top-O-The-Morning To All_Of_You!

Pluralize
=========

Returns a word in plural form.

.. code-block:: php

    echo Inflector::pluralize('browser'); // browsers

Singularize
===========

.. code-block:: php

    echo Inflector::singularize('browsers'); // browser

Rules
=====

Customize the rules for pluralization and singularization:

.. code-block:: php

    Inflector::rules('plural', ['/^(inflect)or\$/i' => '\\1ables']);
    Inflector::rules('plural', [
        'rules' => ['/^(inflect)ors\$/i' => '\\1ables'],
        'uninflected' => ['dontinflectme'],
        'irregular' => ['red' => 'redlings']
    ]);

The arguments for the ``rules`` method are:

- ``\$type`` - The type of inflection, either ``plural`` or ``singular``
- ``\$rules`` - An array of rules to be added.
- ``\$reset`` - If true, will unset default inflections for all new rules that are being defined in \$rules.

Reset
=====

Clears Inflectors inflected value caches, and resets the inflection
rules to the initial values.

.. code-block:: php

    Inflector::reset();

Slugify
=======

You can easily use the Inflector to create a slug from a string of text
by using the `tableize`_ method and replacing underscores with hyphens:

.. code-block:: php

    public static function slugify(string \$text) : string
    {
        return str_replace('_', '-', Inflector::tableize(\$text));
    }
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/inflector/docs/en/index.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Introduction
============

The Doctrine Inflector has static methods for inflecting text.
The features include pluralization, singularization,
converting between camelCase and under_score and capitalizing
words.

All you need to use the Inflector is the ``Doctrine\\Common\\Inflector\\Inflector``
class.

Installation
============

You can install the Inflector with composer:

.. code-block::

    \$ composer require doctrine/inflector

Here are the available methods that you can use:

Tableize
========

Converts ``ModelName`` to ``model_name``:

.. code-block:: php

    echo Inflector::tableize('ModelName'); // model_name

Classify
========

Converts ``model_name`` to ``ModelName``:

.. code-block:: php

    echo Inflector::classify('model_name'); // ModelName

Camelize
========

This method uses `Classify`_ and then converts the first character to lowercase:

.. code-block:: php

    echo Inflector::camelize('model_name'); // modelName

ucwords
=======

Takes a string and capitalizes all of the words, like PHP's built-in
ucwords function. This extends that behavior, however, by allowing the
word delimiters to be configured, rather than only separating on
whitespace.

Here is an example:

.. code-block:: php

    \$string = 'top-o-the-morning to all_of_you!';

    echo Inflector::ucwords(\$string); // Top-O-The-Morning To All_of_you!

    echo Inflector::ucwords(\$string, '-_ '); // Top-O-The-Morning To All_Of_You!

Pluralize
=========

Returns a word in plural form.

.. code-block:: php

    echo Inflector::pluralize('browser'); // browsers

Singularize
===========

.. code-block:: php

    echo Inflector::singularize('browsers'); // browser

Rules
=====

Customize the rules for pluralization and singularization:

.. code-block:: php

    Inflector::rules('plural', ['/^(inflect)or\$/i' => '\\1ables']);
    Inflector::rules('plural', [
        'rules' => ['/^(inflect)ors\$/i' => '\\1ables'],
        'uninflected' => ['dontinflectme'],
        'irregular' => ['red' => 'redlings']
    ]);

The arguments for the ``rules`` method are:

- ``\$type`` - The type of inflection, either ``plural`` or ``singular``
- ``\$rules`` - An array of rules to be added.
- ``\$reset`` - If true, will unset default inflections for all new rules that are being defined in \$rules.

Reset
=====

Clears Inflectors inflected value caches, and resets the inflection
rules to the initial values.

.. code-block:: php

    Inflector::reset();

Slugify
=======

You can easily use the Inflector to create a slug from a string of text
by using the `tableize`_ method and replacing underscores with hyphens:

.. code-block:: php

    public static function slugify(string \$text) : string
    {
        return str_replace('_', '-', Inflector::tableize(\$text));
    }
", "@app/vendor/doctrine/inflector/docs/en/index.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\inflector\\docs\\en\\index.rst");
    }
}
