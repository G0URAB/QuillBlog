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

/* @app/vendor/doctrine/collections/README.md */
class __TwigTemplate_c615bd02e212fbeefe9ff590e56fdff71715eadee4f62c9233b88d54ee1bfb40 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/collections/README.md"));

        // line 1
        echo "# Doctrine Collections

[![Build Status](https://travis-ci.org/doctrine/collections.svg?branch=master)](https://travis-ci.org/doctrine/collections)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/doctrine/collections/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/doctrine/collections/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/doctrine/collections/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/doctrine/collections/?branch=master)

Collections Abstraction library

## Changelog

### v1.6.1

This release, combined with the release of [`doctrine/collections` `v1.6.1`](https://github.com/doctrine/collections/releases/tag/v1.6.1),
fixes an issue where parsing annotations was not possible
for classes within `doctrine/collections`.

Specifically, `v1.6.0` introduced Psalm-specific annotations
such as (for example) `@template` and `@template-implements`,
which were both incorrectly recognized as `@template`.

`@template` has therefore been removed, and instead we use
the prefixed `@psalm-template`, which is no longer parsed
by `doctrine/collections` `v1.6.1`

Total issues resolved: **1**

- [186: Use `@psalm-template` annotation to avoid clashes](https://github.com/doctrine/collections/pull/186) thanks to @muglug

### v1.6.0

This release bumps the minimum required PHP version to 7.1.3.

Following improvements were introduced:

 * `ArrayCollection#filter()` now allows filtering by key, value or both.
 * When using the `ClosureExpressionVisitor` over objects with a defined
   accessor and property, the accessor is prioritised.
 * Updated testing tools and coding standards, autoloading, which also
   led to marginal performance improvements
 * Introduced generic type docblock declarations from [psalm](https://github.com/vimeo/psalm),
   which should allow users to declare `/** @var Collection<KeyType, ValueType> */`
   in their code, and leverage the type propagation deriving from that.

Total issues resolved: **16**

- [127: Use PSR-4](https://github.com/doctrine/collections/pull/127) thanks to @Nyholm
- [129: Remove space in method declaration](https://github.com/doctrine/collections/pull/129) thanks to @bounoable
- [130: Update build to add PHPCS and PHPStan](https://github.com/doctrine/collections/pull/130) thanks to @lcobucci
- [131: ClosureExpressionVisitor &gt; Don't duplicate the accessor when the field already starts with it](https://github.com/doctrine/collections/pull/131) thanks to @ruudk
- [139: Apply Doctrine CS 2.1](https://github.com/doctrine/collections/pull/139) thanks to @Majkl578
- [142: CS 4.0, version composer.lock, merge stages](https://github.com/doctrine/collections/pull/142) thanks to @Majkl578
- [144: Update to PHPUnit 7](https://github.com/doctrine/collections/pull/144) thanks to @carusogabriel
- [146: Update changelog for v1.4.0 and v1.5.0](https://github.com/doctrine/collections/pull/146) thanks to @GromNaN
- [154: Update index.rst](https://github.com/doctrine/collections/pull/154) thanks to @chraiet
- [158: Extract Selectable method into own documentation section](https://github.com/doctrine/collections/pull/158) thanks to @SenseException
- [160: Update homepage](https://github.com/doctrine/collections/pull/160) thanks to @Majkl578
- [165: Allow `ArrayCollection#filter()` to filter by key, value or both](https://github.com/doctrine/collections/issues/165) thanks to @0x13a
- [167: Allow `ArrayCollection#filter()` to filter by key and also value](https://github.com/doctrine/collections/pull/167) thanks to @0x13a
- [175: CI: Test against PHP 7.4snapshot instead of nightly (8.0)](https://github.com/doctrine/collections/pull/175) thanks to @Majkl578
- [177: Generify collections using Psalm](https://github.com/doctrine/collections/pull/177) thanks to @nschoellhorn
- [178: Updated doctrine/coding-standard to 6.0](https://github.com/doctrine/collections/pull/178) thanks to @patrickjahns

### v1.5.0

* [Require PHP 7.1+](https://github.com/doctrine/collections/pull/105)
* [Drop HHVM support](https://github.com/doctrine/collections/pull/118)

### v1.4.0

* [Require PHP 5.6+](https://github.com/doctrine/collections/pull/105)
* [Add `ArrayCollection::createFrom()`](https://github.com/doctrine/collections/pull/91)
* [Support non-camel-case naming](https://github.com/doctrine/collections/pull/57)
* [Comparison `START_WITH`, `END_WITH`](https://github.com/doctrine/collections/pull/78)
* [Comparison `MEMBER_OF`](https://github.com/doctrine/collections/pull/66)
* [Add Contributing guide](https://github.com/doctrine/collections/pull/103)

### v1.3.0

* [Explicit casting of first and max results in criteria API](https://github.com/doctrine/collections/pull/26)
* [Keep keys when using `ArrayCollection#matching()` with sorting](https://github.com/doctrine/collections/pull/49)
* [Made `AbstractLazyCollection#\$initialized` protected for extensibility](https://github.com/doctrine/collections/pull/52)

### v1.2.0

* Add a new ``AbstractLazyCollection``

### v1.1.0

* Deprecated ``Comparison::IS``, because it's only there for SQL semantics.
  These are fixed in the ORM instead.
* Add ``Comparison::CONTAINS`` to perform partial string matches:

        \$criteria->andWhere(\$criteria->expr()->contains('property', 'Foo'));
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/collections/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine Collections

[![Build Status](https://travis-ci.org/doctrine/collections.svg?branch=master)](https://travis-ci.org/doctrine/collections)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/doctrine/collections/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/doctrine/collections/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/doctrine/collections/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/doctrine/collections/?branch=master)

Collections Abstraction library

## Changelog

### v1.6.1

This release, combined with the release of [`doctrine/collections` `v1.6.1`](https://github.com/doctrine/collections/releases/tag/v1.6.1),
fixes an issue where parsing annotations was not possible
for classes within `doctrine/collections`.

Specifically, `v1.6.0` introduced Psalm-specific annotations
such as (for example) `@template` and `@template-implements`,
which were both incorrectly recognized as `@template`.

`@template` has therefore been removed, and instead we use
the prefixed `@psalm-template`, which is no longer parsed
by `doctrine/collections` `v1.6.1`

Total issues resolved: **1**

- [186: Use `@psalm-template` annotation to avoid clashes](https://github.com/doctrine/collections/pull/186) thanks to @muglug

### v1.6.0

This release bumps the minimum required PHP version to 7.1.3.

Following improvements were introduced:

 * `ArrayCollection#filter()` now allows filtering by key, value or both.
 * When using the `ClosureExpressionVisitor` over objects with a defined
   accessor and property, the accessor is prioritised.
 * Updated testing tools and coding standards, autoloading, which also
   led to marginal performance improvements
 * Introduced generic type docblock declarations from [psalm](https://github.com/vimeo/psalm),
   which should allow users to declare `/** @var Collection<KeyType, ValueType> */`
   in their code, and leverage the type propagation deriving from that.

Total issues resolved: **16**

- [127: Use PSR-4](https://github.com/doctrine/collections/pull/127) thanks to @Nyholm
- [129: Remove space in method declaration](https://github.com/doctrine/collections/pull/129) thanks to @bounoable
- [130: Update build to add PHPCS and PHPStan](https://github.com/doctrine/collections/pull/130) thanks to @lcobucci
- [131: ClosureExpressionVisitor &gt; Don't duplicate the accessor when the field already starts with it](https://github.com/doctrine/collections/pull/131) thanks to @ruudk
- [139: Apply Doctrine CS 2.1](https://github.com/doctrine/collections/pull/139) thanks to @Majkl578
- [142: CS 4.0, version composer.lock, merge stages](https://github.com/doctrine/collections/pull/142) thanks to @Majkl578
- [144: Update to PHPUnit 7](https://github.com/doctrine/collections/pull/144) thanks to @carusogabriel
- [146: Update changelog for v1.4.0 and v1.5.0](https://github.com/doctrine/collections/pull/146) thanks to @GromNaN
- [154: Update index.rst](https://github.com/doctrine/collections/pull/154) thanks to @chraiet
- [158: Extract Selectable method into own documentation section](https://github.com/doctrine/collections/pull/158) thanks to @SenseException
- [160: Update homepage](https://github.com/doctrine/collections/pull/160) thanks to @Majkl578
- [165: Allow `ArrayCollection#filter()` to filter by key, value or both](https://github.com/doctrine/collections/issues/165) thanks to @0x13a
- [167: Allow `ArrayCollection#filter()` to filter by key and also value](https://github.com/doctrine/collections/pull/167) thanks to @0x13a
- [175: CI: Test against PHP 7.4snapshot instead of nightly (8.0)](https://github.com/doctrine/collections/pull/175) thanks to @Majkl578
- [177: Generify collections using Psalm](https://github.com/doctrine/collections/pull/177) thanks to @nschoellhorn
- [178: Updated doctrine/coding-standard to 6.0](https://github.com/doctrine/collections/pull/178) thanks to @patrickjahns

### v1.5.0

* [Require PHP 7.1+](https://github.com/doctrine/collections/pull/105)
* [Drop HHVM support](https://github.com/doctrine/collections/pull/118)

### v1.4.0

* [Require PHP 5.6+](https://github.com/doctrine/collections/pull/105)
* [Add `ArrayCollection::createFrom()`](https://github.com/doctrine/collections/pull/91)
* [Support non-camel-case naming](https://github.com/doctrine/collections/pull/57)
* [Comparison `START_WITH`, `END_WITH`](https://github.com/doctrine/collections/pull/78)
* [Comparison `MEMBER_OF`](https://github.com/doctrine/collections/pull/66)
* [Add Contributing guide](https://github.com/doctrine/collections/pull/103)

### v1.3.0

* [Explicit casting of first and max results in criteria API](https://github.com/doctrine/collections/pull/26)
* [Keep keys when using `ArrayCollection#matching()` with sorting](https://github.com/doctrine/collections/pull/49)
* [Made `AbstractLazyCollection#\$initialized` protected for extensibility](https://github.com/doctrine/collections/pull/52)

### v1.2.0

* Add a new ``AbstractLazyCollection``

### v1.1.0

* Deprecated ``Comparison::IS``, because it's only there for SQL semantics.
  These are fixed in the ORM instead.
* Add ``Comparison::CONTAINS`` to perform partial string matches:

        \$criteria->andWhere(\$criteria->expr()->contains('property', 'Foo'));
", "@app/vendor/doctrine/collections/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\collections\\README.md");
    }
}