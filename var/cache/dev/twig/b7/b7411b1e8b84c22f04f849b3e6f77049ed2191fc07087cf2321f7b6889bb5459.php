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

/* @app/vendor/doctrine/orm/docs/en/cookbook/implementing-the-notify-changetracking-policy.rst */
class __TwigTemplate_cfc8c0a5d0c433a1284cde0e40fd806cdd2c777617bd0e1b2b105c0b01527bed extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/docs/en/cookbook/implementing-the-notify-changetracking-policy.rst"));

        // line 1
        echo "Implementing the Notify ChangeTracking Policy
=============================================

.. sectionauthor:: Roman Borschel (roman@code-factory.org)

The NOTIFY change-tracking policy is the most effective
change-tracking policy provided by Doctrine but it requires some
boilerplate code. This recipe will show you how this boilerplate
code should look like. We will implement it on a
`Layer Supertype <http://martinfowler.com/eaaCatalog/layerSupertype.html>`_
for all our domain objects.

Implementing NotifyPropertyChanged
----------------------------------

The NOTIFY policy is based on the assumption that the entities
notify interested listeners of changes to their properties. For
that purpose, a class that wants to use this policy needs to
implement the ``NotifyPropertyChanged`` interface from the
``Doctrine\\Common`` namespace.

.. code-block:: php

    <?php
    use Doctrine\\Common\\NotifyPropertyChanged;
    use Doctrine\\Common\\PropertyChangedListener;
    
    abstract class DomainObject implements NotifyPropertyChanged
    {
        private \$listeners = array();
    
        public function addPropertyChangedListener(PropertyChangedListener \$listener) {
            \$this->listeners[] = \$listener;
        }
    
        /** Notifies listeners of a change. */
        protected function onPropertyChanged(\$propName, \$oldValue, \$newValue) {
            if (\$this->listeners) {
                foreach (\$this->listeners as \$listener) {
                    \$listener->propertyChanged(\$this, \$propName, \$oldValue, \$newValue);
                }
            }
        }
    }

Then, in each property setter of concrete, derived domain classes,
you need to invoke onPropertyChanged as follows to notify
listeners:

.. code-block:: php

    <?php
    // Mapping not shown, either in annotations, xml or yaml as usual
    class MyEntity extends DomainObject
    {
        private \$data;
        // ... other fields as usual
    
        public function setData(\$data) {
            if (\$data != \$this->data) { // check: is it actually modified?
                \$this->onPropertyChanged('data', \$this->data, \$data);
                \$this->data = \$data;
            }
        }
    }

The check whether the new value is different from the old one is
not mandatory but recommended. That way you can avoid unnecessary
updates and also have full control over when you consider a
property changed.


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/docs/en/cookbook/implementing-the-notify-changetracking-policy.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Implementing the Notify ChangeTracking Policy
=============================================

.. sectionauthor:: Roman Borschel (roman@code-factory.org)

The NOTIFY change-tracking policy is the most effective
change-tracking policy provided by Doctrine but it requires some
boilerplate code. This recipe will show you how this boilerplate
code should look like. We will implement it on a
`Layer Supertype <http://martinfowler.com/eaaCatalog/layerSupertype.html>`_
for all our domain objects.

Implementing NotifyPropertyChanged
----------------------------------

The NOTIFY policy is based on the assumption that the entities
notify interested listeners of changes to their properties. For
that purpose, a class that wants to use this policy needs to
implement the ``NotifyPropertyChanged`` interface from the
``Doctrine\\Common`` namespace.

.. code-block:: php

    <?php
    use Doctrine\\Common\\NotifyPropertyChanged;
    use Doctrine\\Common\\PropertyChangedListener;
    
    abstract class DomainObject implements NotifyPropertyChanged
    {
        private \$listeners = array();
    
        public function addPropertyChangedListener(PropertyChangedListener \$listener) {
            \$this->listeners[] = \$listener;
        }
    
        /** Notifies listeners of a change. */
        protected function onPropertyChanged(\$propName, \$oldValue, \$newValue) {
            if (\$this->listeners) {
                foreach (\$this->listeners as \$listener) {
                    \$listener->propertyChanged(\$this, \$propName, \$oldValue, \$newValue);
                }
            }
        }
    }

Then, in each property setter of concrete, derived domain classes,
you need to invoke onPropertyChanged as follows to notify
listeners:

.. code-block:: php

    <?php
    // Mapping not shown, either in annotations, xml or yaml as usual
    class MyEntity extends DomainObject
    {
        private \$data;
        // ... other fields as usual
    
        public function setData(\$data) {
            if (\$data != \$this->data) { // check: is it actually modified?
                \$this->onPropertyChanged('data', \$this->data, \$data);
                \$this->data = \$data;
            }
        }
    }

The check whether the new value is different from the old one is
not mandatory but recommended. That way you can avoid unnecessary
updates and also have full control over when you consider a
property changed.


", "@app/vendor/doctrine/orm/docs/en/cookbook/implementing-the-notify-changetracking-policy.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\docs\\en\\cookbook\\implementing-the-notify-changetracking-policy.rst");
    }
}
