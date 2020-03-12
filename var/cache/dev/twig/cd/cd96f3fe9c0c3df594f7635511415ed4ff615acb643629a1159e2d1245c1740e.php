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

/* @app/vendor/symfony/polyfill-php73/README.md */
class __TwigTemplate_d4a4108db4ab0622a5ccc343610cbfdf01fbec68eefa74f361a331d9ba594604 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/polyfill-php73/README.md"));

        // line 1
        echo "Symfony Polyfill / Php73
========================

This component provides functions added to PHP 7.3 core:

- [`array_key_first`](https://php.net/array_key_first)
- [`array_key_last`](https://php.net/array_key_last)
- [`hrtime`](https://php.net/function.hrtime)
- [`is_countable`](https://php.net/is_countable)
- [`JsonException`](https://php.net/JsonException)

More information can be found in the
[main Polyfill README](https://github.com/symfony/polyfill/blob/master/README.md).

License
=======

This library is released under the [MIT license](LICENSE).
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/polyfill-php73/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Symfony Polyfill / Php73
========================

This component provides functions added to PHP 7.3 core:

- [`array_key_first`](https://php.net/array_key_first)
- [`array_key_last`](https://php.net/array_key_last)
- [`hrtime`](https://php.net/function.hrtime)
- [`is_countable`](https://php.net/is_countable)
- [`JsonException`](https://php.net/JsonException)

More information can be found in the
[main Polyfill README](https://github.com/symfony/polyfill/blob/master/README.md).

License
=======

This library is released under the [MIT license](LICENSE).
", "@app/vendor/symfony/polyfill-php73/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\polyfill-php73\\README.md");
    }
}
