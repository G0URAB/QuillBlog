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

/* @app/vendor/doctrine/orm/README.md */
class __TwigTemplate_4d45352b700b851e331ce358818c0d443d6d4495cdc79bf99e7c9339d7de04a7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/README.md"));

        // line 1
        echo "| [Master][Master] | [2.5][2.5] |
|:----------------:|:----------:|
| [![Build status][Master image]][Master] | [![Build status][2.5 image]][2.5] |
| [![Coverage Status][Master coverage image]][Master coverage] | [![Coverage Status][2.5 coverage image]][2.5 coverage] |

Doctrine 2 is an object-relational mapper (ORM) for PHP 7.1+ that provides transparent persistence
for PHP objects. It sits on top of a powerful database abstraction layer (DBAL). One of its key features
is the option to write database queries in a proprietary object oriented SQL dialect called Doctrine Query Language (DQL),
inspired by Hibernate's HQL. This provides developers with a powerful alternative to SQL that maintains flexibility
without requiring unnecessary code duplication.


## More resources:

* [Website](http://www.doctrine-project.org)
* [Documentation](http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/index.html)


  [Master image]: https://img.shields.io/travis/doctrine/orm/master.svg?style=flat-square
  [Master]: https://travis-ci.org/doctrine/orm
  [Master coverage image]: https://img.shields.io/scrutinizer/coverage/g/doctrine/orm/master.svg?style=flat-square
  [Master coverage]: https://scrutinizer-ci.com/g/doctrine/orm/?branch=master
  [2.5 image]: https://img.shields.io/travis/doctrine/orm/2.5.svg?style=flat-square
  [2.5]: https://github.com/doctrine/orm/tree/2.5
  [2.5 coverage image]: https://img.shields.io/scrutinizer/coverage/g/doctrine/orm/2.5.svg?style=flat-square
  [2.5 coverage]: https://scrutinizer-ci.com/g/doctrine/orm/?branch=2.5
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("| [Master][Master] | [2.5][2.5] |
|:----------------:|:----------:|
| [![Build status][Master image]][Master] | [![Build status][2.5 image]][2.5] |
| [![Coverage Status][Master coverage image]][Master coverage] | [![Coverage Status][2.5 coverage image]][2.5 coverage] |

Doctrine 2 is an object-relational mapper (ORM) for PHP 7.1+ that provides transparent persistence
for PHP objects. It sits on top of a powerful database abstraction layer (DBAL). One of its key features
is the option to write database queries in a proprietary object oriented SQL dialect called Doctrine Query Language (DQL),
inspired by Hibernate's HQL. This provides developers with a powerful alternative to SQL that maintains flexibility
without requiring unnecessary code duplication.


## More resources:

* [Website](http://www.doctrine-project.org)
* [Documentation](http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/index.html)


  [Master image]: https://img.shields.io/travis/doctrine/orm/master.svg?style=flat-square
  [Master]: https://travis-ci.org/doctrine/orm
  [Master coverage image]: https://img.shields.io/scrutinizer/coverage/g/doctrine/orm/master.svg?style=flat-square
  [Master coverage]: https://scrutinizer-ci.com/g/doctrine/orm/?branch=master
  [2.5 image]: https://img.shields.io/travis/doctrine/orm/2.5.svg?style=flat-square
  [2.5]: https://github.com/doctrine/orm/tree/2.5
  [2.5 coverage image]: https://img.shields.io/scrutinizer/coverage/g/doctrine/orm/2.5.svg?style=flat-square
  [2.5 coverage]: https://scrutinizer-ci.com/g/doctrine/orm/?branch=2.5
", "@app/vendor/doctrine/orm/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\README.md");
    }
}
