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

/* @app/vendor/psr/log/README.md */
class __TwigTemplate_9834d3c09e895c2302c81b462bd3457217da58e085eb62180d80558e8dee8ae6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/psr/log/README.md"));

        // line 1
        echo "PSR Log
=======

This repository holds all interfaces/classes/traits related to
[PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md).

Note that this is not a logger of its own. It is merely an interface that
describes a logger. See the specification for more details.

Installation
------------

```bash
composer require psr/log
```

Usage
-----

If you need a logger, you can use the interface like this:

```php
<?php

use Psr\\Log\\LoggerInterface;

class Foo
{
    private \$logger;

    public function __construct(LoggerInterface \$logger = null)
    {
        \$this->logger = \$logger;
    }

    public function doSomething()
    {
        if (\$this->logger) {
            \$this->logger->info('Doing work');
        }
           
        try {
            \$this->doSomethingElse();
        } catch (Exception \$exception) {
            \$this->logger->error('Oh no!', array('exception' => \$exception));
        }

        // do something useful
    }
}
```

You can then pick one of the implementations of the interface to get a logger.

If you want to implement the interface, you can require this package and
implement `Psr\\Log\\LoggerInterface` in your code. Please read the
[specification text](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md)
for details.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/psr/log/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("PSR Log
=======

This repository holds all interfaces/classes/traits related to
[PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md).

Note that this is not a logger of its own. It is merely an interface that
describes a logger. See the specification for more details.

Installation
------------

```bash
composer require psr/log
```

Usage
-----

If you need a logger, you can use the interface like this:

```php
<?php

use Psr\\Log\\LoggerInterface;

class Foo
{
    private \$logger;

    public function __construct(LoggerInterface \$logger = null)
    {
        \$this->logger = \$logger;
    }

    public function doSomething()
    {
        if (\$this->logger) {
            \$this->logger->info('Doing work');
        }
           
        try {
            \$this->doSomethingElse();
        } catch (Exception \$exception) {
            \$this->logger->error('Oh no!', array('exception' => \$exception));
        }

        // do something useful
    }
}
```

You can then pick one of the implementations of the interface to get a logger.

If you want to implement the interface, you can require this package and
implement `Psr\\Log\\LoggerInterface` in your code. Please read the
[specification text](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md)
for details.
", "@app/vendor/psr/log/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\psr\\log\\README.md");
    }
}
