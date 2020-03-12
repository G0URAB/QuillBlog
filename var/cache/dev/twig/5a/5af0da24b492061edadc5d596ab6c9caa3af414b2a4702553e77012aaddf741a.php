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

/* @app/vendor/twig/extra-bundle/src/Extensions.php */
class __TwigTemplate_45fc10438949d5689e160e92d066ff7205f3117592dbb832e7c6de9f063043f1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/extra-bundle/src/Extensions.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Extra\\TwigExtraBundle;

use Twig\\Extra\\CssInliner\\CssInlinerExtension;
use Twig\\Extra\\Html\\HtmlExtension;
use Twig\\Extra\\Inky\\InkyExtension;
use Twig\\Extra\\Intl\\IntlExtension;
use Twig\\Extra\\Markdown\\MarkdownExtension;
use Twig\\Extra\\String\\StringExtension;

final class Extensions
{
    private const EXTENSIONS = [
        'html' => [
            'name' => 'html',
            'class' => HtmlExtension::class,
            'class_name' => 'HtmlExtension',
            'package' => 'twig/html-extra',
            'filters' => ['data_uri'],
            'functions' => ['html_classes'],
        ],
        'markdown' => [
            'name' => 'markdown',
            'class' => MarkdownExtension::class,
            'class_name' => 'MarkdownExtension',
            'package' => 'twig/markdown-extra',
            'filters' => ['html_to_markdown', 'markdown_to_html'],
            'functions' => [],
        ],
        'intl' => [
            'name' => 'intl',
            'class' => IntlExtension::class,
            'class_name' => 'IntlExtension',
            'package' => 'twig/intl-extra',
            'filters' => ['country_name', 'currency_name', 'currency_symbol', 'language_name', 'locale_name', 'timezone_name',
                'format_currency', 'format_number', 'format_decimal_number', 'format_currency_number',
                'format_percent_number', 'format_scientific_number', 'format_spellout_number', 'format_ordinal_number',
                'format_duration_number', 'format_date', 'format_datetime', 'format_time',
            ],
            'functions' => ['country_timezones'],
        ],
        'cssinliner' => [
            'name' => 'cssinliner',
            'class' => CssInlinerExtension::class,
            'class_name' => 'CssInlinerExtension',
            'package' => 'twig/cssinliner-extra',
            'filters' => ['inline_css'],
            'functions' => [],
        ],
        'inky' => [
            'name' => 'inky',
            'class' => InkyExtension::class,
            'class_name' => 'InkyExtension',
            'package' => 'twig/inky-extra',
            'filters' => ['inky_to_html'],
            'functions' => [],
        ],
        'string' => [
            'name' => 'string',
            'class' => StringExtension::class,
            'class_name' => 'StringExtension',
            'package' => 'twig/string-extra',
            'filters' => ['u'],
            'functions' => [],
        ],
    ];

    public static function getClasses(): array
    {
        return array_column(self::EXTENSIONS, 'class', 'name');
    }

    public static function getFilter(string \$name): array
    {
        foreach (self::EXTENSIONS as \$extension) {
            if (\\in_array(\$name, \$extension['filters'])) {
                return [\$extension['class_name'], \$extension['package']];
            }
        }

        return [];
    }

    public static function getFunction(string \$name): array
    {
        foreach (self::EXTENSIONS as \$extension) {
            if (\\in_array(\$name, \$extension['functions'])) {
                return [\$extension['class_name'], \$extension['package']];
            }
        }

        return [];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/extra-bundle/src/Extensions.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Extra\\TwigExtraBundle;

use Twig\\Extra\\CssInliner\\CssInlinerExtension;
use Twig\\Extra\\Html\\HtmlExtension;
use Twig\\Extra\\Inky\\InkyExtension;
use Twig\\Extra\\Intl\\IntlExtension;
use Twig\\Extra\\Markdown\\MarkdownExtension;
use Twig\\Extra\\String\\StringExtension;

final class Extensions
{
    private const EXTENSIONS = [
        'html' => [
            'name' => 'html',
            'class' => HtmlExtension::class,
            'class_name' => 'HtmlExtension',
            'package' => 'twig/html-extra',
            'filters' => ['data_uri'],
            'functions' => ['html_classes'],
        ],
        'markdown' => [
            'name' => 'markdown',
            'class' => MarkdownExtension::class,
            'class_name' => 'MarkdownExtension',
            'package' => 'twig/markdown-extra',
            'filters' => ['html_to_markdown', 'markdown_to_html'],
            'functions' => [],
        ],
        'intl' => [
            'name' => 'intl',
            'class' => IntlExtension::class,
            'class_name' => 'IntlExtension',
            'package' => 'twig/intl-extra',
            'filters' => ['country_name', 'currency_name', 'currency_symbol', 'language_name', 'locale_name', 'timezone_name',
                'format_currency', 'format_number', 'format_decimal_number', 'format_currency_number',
                'format_percent_number', 'format_scientific_number', 'format_spellout_number', 'format_ordinal_number',
                'format_duration_number', 'format_date', 'format_datetime', 'format_time',
            ],
            'functions' => ['country_timezones'],
        ],
        'cssinliner' => [
            'name' => 'cssinliner',
            'class' => CssInlinerExtension::class,
            'class_name' => 'CssInlinerExtension',
            'package' => 'twig/cssinliner-extra',
            'filters' => ['inline_css'],
            'functions' => [],
        ],
        'inky' => [
            'name' => 'inky',
            'class' => InkyExtension::class,
            'class_name' => 'InkyExtension',
            'package' => 'twig/inky-extra',
            'filters' => ['inky_to_html'],
            'functions' => [],
        ],
        'string' => [
            'name' => 'string',
            'class' => StringExtension::class,
            'class_name' => 'StringExtension',
            'package' => 'twig/string-extra',
            'filters' => ['u'],
            'functions' => [],
        ],
    ];

    public static function getClasses(): array
    {
        return array_column(self::EXTENSIONS, 'class', 'name');
    }

    public static function getFilter(string \$name): array
    {
        foreach (self::EXTENSIONS as \$extension) {
            if (\\in_array(\$name, \$extension['filters'])) {
                return [\$extension['class_name'], \$extension['package']];
            }
        }

        return [];
    }

    public static function getFunction(string \$name): array
    {
        foreach (self::EXTENSIONS as \$extension) {
            if (\\in_array(\$name, \$extension['functions'])) {
                return [\$extension['class_name'], \$extension['package']];
            }
        }

        return [];
    }
}
", "@app/vendor/twig/extra-bundle/src/Extensions.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\extra-bundle\\src\\Extensions.php");
    }
}
