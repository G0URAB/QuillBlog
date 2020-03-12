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

/* @app/vendor/doctrine/dbal/README.md */
class __TwigTemplate_9b7998fbb68c085030078ffacedeba86e9f73b1e7753403d13cb0e4b849ced8c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/README.md"));

        // line 1
        echo "# Doctrine DBAL

| [Master][Master] | [2.9][2.9] | [Develop][develop] |
|:----------------:|:----------:|:------------------:|
| [![Build status][Master image]][Master] | [![Build status][2.9 image]][2.9] | [![Build status][develop image]][develop] |
| [![Build Status][ContinuousPHP image]][ContinuousPHP] | [![Build Status][ContinuousPHP 2.9 image]][ContinuousPHP] | [![Build Status][ContinuousPHP develop image]][ContinuousPHP] |
| [![Code Coverage][Coverage image]][Scrutinizer Master] | [![Code Coverage][Coverage 2.9 image]][Scrutinizer 2.9] | [![Code Coverage][Coverage develop image]][Scrutinizer develop] |
| [![Code Quality][Quality image]][Scrutinizer Master] | [![Code Quality][Quality 2.9 image]][Scrutinizer 2.9] | [![Code Quality][Quality develop image]][Scrutinizer develop] |
| [![AppVeyor][AppVeyor master image]][AppVeyor master] | [![AppVeyor][AppVeyor 2.9 image]][AppVeyor 2.9] | [![AppVeyor][AppVeyor develop image]][AppVeyor develop] |

Powerful database abstraction layer with many features for database schema introspection, schema management and PDO abstraction.

## More resources:

* [Website](http://www.doctrine-project.org/projects/dbal.html)
* [Documentation](http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/)
* [Issue Tracker](https://github.com/doctrine/dbal/issues)

  [Master image]: https://img.shields.io/travis/doctrine/dbal/master.svg?style=flat-square
  [Coverage image]: https://img.shields.io/scrutinizer/coverage/g/doctrine/dbal/master.svg?style=flat-square
  [Quality image]: https://img.shields.io/scrutinizer/g/doctrine/dbal/master.svg?style=flat-square
  [ContinuousPHP image]: https://img.shields.io/continuousphp/git-hub/doctrine/dbal/master.svg?style=flat-square
  [Master]: https://travis-ci.org/doctrine/dbal
  [Scrutinizer Master]: https://scrutinizer-ci.com/g/doctrine/dbal/
  [AppVeyor master]: https://ci.appveyor.com/project/doctrine/dbal/branch/master
  [AppVeyor master image]: https://ci.appveyor.com/api/projects/status/i88kitq8qpbm0vie/branch/master?svg=true
  [ContinuousPHP]: https://continuousphp.com/git-hub/doctrine/dbal

  [2.9 image]: https://img.shields.io/travis/doctrine/dbal/2.9.svg?style=flat-square
  [Coverage 2.9 image]: https://img.shields.io/scrutinizer/coverage/g/doctrine/dbal/2.9.svg?style=flat-square
  [Quality 2.9 image]: https://img.shields.io/scrutinizer/g/doctrine/dbal/2.9.svg?style=flat-square
  [ContinuousPHP 2.9 image]: https://img.shields.io/continuousphp/git-hub/doctrine/dbal/2.9.svg?style=flat-square
  [2.9]: https://github.com/doctrine/dbal/tree/2.9
  [Scrutinizer 2.9]: https://scrutinizer-ci.com/g/doctrine/dbal/?branch=2.9
  [AppVeyor 2.9]: https://ci.appveyor.com/project/doctrine/dbal/branch/2.9
  [AppVeyor 2.9 image]: https://ci.appveyor.com/api/projects/status/i88kitq8qpbm0vie/branch/2.9?svg=true

  [develop]: https://github.com/doctrine/dbal/tree/develop
  [develop image]: https://img.shields.io/travis/doctrine/dbal/develop.svg?style=flat-square
  [Coverage develop image]: https://img.shields.io/scrutinizer/coverage/g/doctrine/dbal/develop.svg?style=flat-square
  [Quality develop image]: https://img.shields.io/scrutinizer/g/doctrine/dbal/develop.svg?style=flat-square
  [ContinuousPHP develop image]: https://img.shields.io/continuousphp/git-hub/doctrine/dbal/develop.svg?style=flat-square
  [develop]: https://github.com/doctrine/dbal/tree/develop
  [Scrutinizer develop]: https://scrutinizer-ci.com/g/doctrine/dbal/?branch=develop
  [AppVeyor develop]: https://ci.appveyor.com/project/doctrine/dbal/branch/develop
  [AppVeyor develop image]: https://ci.appveyor.com/api/projects/status/i88kitq8qpbm0vie/branch/develop?svg=true
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine DBAL

| [Master][Master] | [2.9][2.9] | [Develop][develop] |
|:----------------:|:----------:|:------------------:|
| [![Build status][Master image]][Master] | [![Build status][2.9 image]][2.9] | [![Build status][develop image]][develop] |
| [![Build Status][ContinuousPHP image]][ContinuousPHP] | [![Build Status][ContinuousPHP 2.9 image]][ContinuousPHP] | [![Build Status][ContinuousPHP develop image]][ContinuousPHP] |
| [![Code Coverage][Coverage image]][Scrutinizer Master] | [![Code Coverage][Coverage 2.9 image]][Scrutinizer 2.9] | [![Code Coverage][Coverage develop image]][Scrutinizer develop] |
| [![Code Quality][Quality image]][Scrutinizer Master] | [![Code Quality][Quality 2.9 image]][Scrutinizer 2.9] | [![Code Quality][Quality develop image]][Scrutinizer develop] |
| [![AppVeyor][AppVeyor master image]][AppVeyor master] | [![AppVeyor][AppVeyor 2.9 image]][AppVeyor 2.9] | [![AppVeyor][AppVeyor develop image]][AppVeyor develop] |

Powerful database abstraction layer with many features for database schema introspection, schema management and PDO abstraction.

## More resources:

* [Website](http://www.doctrine-project.org/projects/dbal.html)
* [Documentation](http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/)
* [Issue Tracker](https://github.com/doctrine/dbal/issues)

  [Master image]: https://img.shields.io/travis/doctrine/dbal/master.svg?style=flat-square
  [Coverage image]: https://img.shields.io/scrutinizer/coverage/g/doctrine/dbal/master.svg?style=flat-square
  [Quality image]: https://img.shields.io/scrutinizer/g/doctrine/dbal/master.svg?style=flat-square
  [ContinuousPHP image]: https://img.shields.io/continuousphp/git-hub/doctrine/dbal/master.svg?style=flat-square
  [Master]: https://travis-ci.org/doctrine/dbal
  [Scrutinizer Master]: https://scrutinizer-ci.com/g/doctrine/dbal/
  [AppVeyor master]: https://ci.appveyor.com/project/doctrine/dbal/branch/master
  [AppVeyor master image]: https://ci.appveyor.com/api/projects/status/i88kitq8qpbm0vie/branch/master?svg=true
  [ContinuousPHP]: https://continuousphp.com/git-hub/doctrine/dbal

  [2.9 image]: https://img.shields.io/travis/doctrine/dbal/2.9.svg?style=flat-square
  [Coverage 2.9 image]: https://img.shields.io/scrutinizer/coverage/g/doctrine/dbal/2.9.svg?style=flat-square
  [Quality 2.9 image]: https://img.shields.io/scrutinizer/g/doctrine/dbal/2.9.svg?style=flat-square
  [ContinuousPHP 2.9 image]: https://img.shields.io/continuousphp/git-hub/doctrine/dbal/2.9.svg?style=flat-square
  [2.9]: https://github.com/doctrine/dbal/tree/2.9
  [Scrutinizer 2.9]: https://scrutinizer-ci.com/g/doctrine/dbal/?branch=2.9
  [AppVeyor 2.9]: https://ci.appveyor.com/project/doctrine/dbal/branch/2.9
  [AppVeyor 2.9 image]: https://ci.appveyor.com/api/projects/status/i88kitq8qpbm0vie/branch/2.9?svg=true

  [develop]: https://github.com/doctrine/dbal/tree/develop
  [develop image]: https://img.shields.io/travis/doctrine/dbal/develop.svg?style=flat-square
  [Coverage develop image]: https://img.shields.io/scrutinizer/coverage/g/doctrine/dbal/develop.svg?style=flat-square
  [Quality develop image]: https://img.shields.io/scrutinizer/g/doctrine/dbal/develop.svg?style=flat-square
  [ContinuousPHP develop image]: https://img.shields.io/continuousphp/git-hub/doctrine/dbal/develop.svg?style=flat-square
  [develop]: https://github.com/doctrine/dbal/tree/develop
  [Scrutinizer develop]: https://scrutinizer-ci.com/g/doctrine/dbal/?branch=develop
  [AppVeyor develop]: https://ci.appveyor.com/project/doctrine/dbal/branch/develop
  [AppVeyor develop image]: https://ci.appveyor.com/api/projects/status/i88kitq8qpbm0vie/branch/develop?svg=true
", "@app/vendor/doctrine/dbal/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\README.md");
    }
}
