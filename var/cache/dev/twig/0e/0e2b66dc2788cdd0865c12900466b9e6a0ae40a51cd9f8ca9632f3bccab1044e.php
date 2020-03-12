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

/* @app/vendor/twig/twig/doc/filters/index.rst */
class __TwigTemplate_b7a6f65e2269a9e5d00c490c78ce848feb7669474972138b1619262602e45571 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/index.rst"));

        // line 1
        echo "Filters
=======

.. toctree::
    :maxdepth: 1

    abs
    batch
    capitalize
    column
    convert_encoding
    country_name
    currency_name
    currency_symbol
    data_uri
    date
    date_modify
    default
    escape
    filter
    first
    format
    format_currency
    format_date
    format_datetime
    format_number
    format_time
    html_to_markdown
    inline_css
    inky_to_html
    join
    json_encode
    keys
    language_name
    last
    length
    locale_name
    lower
    map
    markdown_to_html
    merge
    nl2br
    number_format
    raw
    reduce
    replace
    reverse
    round
    slice
    sort
    spaceless
    split
    striptags
    timezone_name
    title
    trim
    u
    upper
    url_encode
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/index.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Filters
=======

.. toctree::
    :maxdepth: 1

    abs
    batch
    capitalize
    column
    convert_encoding
    country_name
    currency_name
    currency_symbol
    data_uri
    date
    date_modify
    default
    escape
    filter
    first
    format
    format_currency
    format_date
    format_datetime
    format_number
    format_time
    html_to_markdown
    inline_css
    inky_to_html
    join
    json_encode
    keys
    language_name
    last
    length
    locale_name
    lower
    map
    markdown_to_html
    merge
    nl2br
    number_format
    raw
    reduce
    replace
    reverse
    round
    slice
    sort
    spaceless
    split
    striptags
    timezone_name
    title
    trim
    u
    upper
    url_encode
", "@app/vendor/twig/twig/doc/filters/index.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\index.rst");
    }
}
