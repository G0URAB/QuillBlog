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

/* @app/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php */
class __TwigTemplate_905baa4933c79cd2705f3f3f531668f9ac2d4648075a827cc20ebad5819f5991 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Twig;

use SqlFormatter;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFilter;

/**
 * This class contains the needed functions in order to do the query highlighting
 */
class DoctrineExtension extends AbstractExtension
{
    /**
     * Define our functions
     *
     * @return TwigFilter[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('doctrine_pretty_query', [\$this, 'formatQuery'], ['is_safe' => ['html']]),
            new TwigFilter('doctrine_replace_query_parameters', [\$this, 'replaceQueryParameters']),
        ];
    }

    /**
     * Get the possible combinations of elements from the given array
     */
    private function getPossibleCombinations(array \$elements, int \$combinationsLevel) : array
    {
        \$baseCount = count(\$elements);
        \$result    = [];

        if (\$combinationsLevel === 1) {
            foreach (\$elements as \$element) {
                \$result[] = [\$element];
            }

            return \$result;
        }

        \$nextLevelElements = \$this->getPossibleCombinations(\$elements, \$combinationsLevel - 1);

        foreach (\$nextLevelElements as \$nextLevelElement) {
            \$lastElement = \$nextLevelElement[\$combinationsLevel - 2];
            \$found       = false;

            foreach (\$elements as \$key => \$element) {
                if (\$element === \$lastElement) {
                    \$found = true;
                    continue;
                }

                if (\$found !== true || \$key >= \$baseCount) {
                    continue;
                }

                \$tmp              = \$nextLevelElement;
                \$newCombination   = array_slice(\$tmp, 0);
                \$newCombination[] = \$element;
                \$result[]         = array_slice(\$newCombination, 0);
            }
        }

        return \$result;
    }

    /**
     * Escape parameters of a SQL query
     * DON'T USE THIS FUNCTION OUTSIDE ITS INTENDED SCOPE
     *
     * @internal
     *
     * @param mixed \$parameter
     *
     * @return string
     */
    public static function escapeFunction(\$parameter)
    {
        \$result = \$parameter;

        switch (true) {
            // Check if result is non-unicode string using PCRE_UTF8 modifier
            case is_string(\$result) && ! preg_match('//u', \$result):
                \$result = '0x' . strtoupper(bin2hex(\$result));
                break;

            case is_string(\$result):
                \$result = \"'\" . addslashes(\$result) . \"'\";
                break;

            case is_array(\$result):
                foreach (\$result as &\$value) {
                    \$value = static::escapeFunction(\$value);
                }

                \$result = implode(', ', \$result);
                break;

            case is_object(\$result):
                \$result = addslashes((string) \$result);
                break;

            case \$result === null:
                \$result = 'NULL';
                break;

            case is_bool(\$result):
                \$result = \$result ? '1' : '0';
                break;
        }

        return \$result;
    }

    /**
     * Return a query with the parameters replaced
     *
     * @param string     \$query
     * @param array|Data \$parameters
     *
     * @return string
     */
    public function replaceQueryParameters(\$query, \$parameters)
    {
        if (\$parameters instanceof Data) {
            \$parameters = \$parameters->getValue(true);
        }

        \$i = 0;

        if (! array_key_exists(0, \$parameters) && array_key_exists(1, \$parameters)) {
            \$i = 1;
        }

        return preg_replace_callback(
            '/\\?|((?<!:):[a-z0-9_]+)/i',
            static function (\$matches) use (\$parameters, &\$i) {
                \$key = substr(\$matches[0], 1);

                if (! array_key_exists(\$i, \$parameters) && (\$key === false || ! array_key_exists(\$key, \$parameters))) {
                    return \$matches[0];
                }

                \$value  = array_key_exists(\$i, \$parameters) ? \$parameters[\$i] : \$parameters[\$key];
                \$result = DoctrineExtension::escapeFunction(\$value);
                \$i++;

                return \$result;
            },
            \$query
        );
    }

    /**
     * Formats and/or highlights the given SQL statement.
     *
     * @param  string \$sql
     * @param  bool   \$highlightOnly If true the query is not formatted, just highlighted
     *
     * @return string
     */
    public function formatQuery(\$sql, \$highlightOnly = false)
    {
        SqlFormatter::\$pre_attributes            = 'class=\"highlight highlight-sql\"';
        SqlFormatter::\$quote_attributes          = 'class=\"string\"';
        SqlFormatter::\$backtick_quote_attributes = 'class=\"string\"';
        SqlFormatter::\$reserved_attributes       = 'class=\"keyword\"';
        SqlFormatter::\$boundary_attributes       = 'class=\"symbol\"';
        SqlFormatter::\$number_attributes         = 'class=\"number\"';
        SqlFormatter::\$word_attributes           = 'class=\"word\"';
        SqlFormatter::\$error_attributes          = 'class=\"error\"';
        SqlFormatter::\$comment_attributes        = 'class=\"comment\"';
        SqlFormatter::\$variable_attributes       = 'class=\"variable\"';

        if (\$highlightOnly) {
            \$html = SqlFormatter::highlight(\$sql);
            \$html = preg_replace('/<pre class=\".*\">([^\"]*+)<\\/pre>/Us', '\\1', \$html);
        } else {
            \$html = SqlFormatter::format(\$sql);
            \$html = preg_replace('/<pre class=\"(.*)\">([^\"]*+)<\\/pre>/Us', '<div class=\"\\1\"><pre>\\2</pre></div>', \$html);
        }

        return \$html;
    }

    /**
     * Get the name of the extension
     *
     * @return string
     */
    public function getName()
    {
        return 'doctrine_extension';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Twig;

use SqlFormatter;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFilter;

/**
 * This class contains the needed functions in order to do the query highlighting
 */
class DoctrineExtension extends AbstractExtension
{
    /**
     * Define our functions
     *
     * @return TwigFilter[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('doctrine_pretty_query', [\$this, 'formatQuery'], ['is_safe' => ['html']]),
            new TwigFilter('doctrine_replace_query_parameters', [\$this, 'replaceQueryParameters']),
        ];
    }

    /**
     * Get the possible combinations of elements from the given array
     */
    private function getPossibleCombinations(array \$elements, int \$combinationsLevel) : array
    {
        \$baseCount = count(\$elements);
        \$result    = [];

        if (\$combinationsLevel === 1) {
            foreach (\$elements as \$element) {
                \$result[] = [\$element];
            }

            return \$result;
        }

        \$nextLevelElements = \$this->getPossibleCombinations(\$elements, \$combinationsLevel - 1);

        foreach (\$nextLevelElements as \$nextLevelElement) {
            \$lastElement = \$nextLevelElement[\$combinationsLevel - 2];
            \$found       = false;

            foreach (\$elements as \$key => \$element) {
                if (\$element === \$lastElement) {
                    \$found = true;
                    continue;
                }

                if (\$found !== true || \$key >= \$baseCount) {
                    continue;
                }

                \$tmp              = \$nextLevelElement;
                \$newCombination   = array_slice(\$tmp, 0);
                \$newCombination[] = \$element;
                \$result[]         = array_slice(\$newCombination, 0);
            }
        }

        return \$result;
    }

    /**
     * Escape parameters of a SQL query
     * DON'T USE THIS FUNCTION OUTSIDE ITS INTENDED SCOPE
     *
     * @internal
     *
     * @param mixed \$parameter
     *
     * @return string
     */
    public static function escapeFunction(\$parameter)
    {
        \$result = \$parameter;

        switch (true) {
            // Check if result is non-unicode string using PCRE_UTF8 modifier
            case is_string(\$result) && ! preg_match('//u', \$result):
                \$result = '0x' . strtoupper(bin2hex(\$result));
                break;

            case is_string(\$result):
                \$result = \"'\" . addslashes(\$result) . \"'\";
                break;

            case is_array(\$result):
                foreach (\$result as &\$value) {
                    \$value = static::escapeFunction(\$value);
                }

                \$result = implode(', ', \$result);
                break;

            case is_object(\$result):
                \$result = addslashes((string) \$result);
                break;

            case \$result === null:
                \$result = 'NULL';
                break;

            case is_bool(\$result):
                \$result = \$result ? '1' : '0';
                break;
        }

        return \$result;
    }

    /**
     * Return a query with the parameters replaced
     *
     * @param string     \$query
     * @param array|Data \$parameters
     *
     * @return string
     */
    public function replaceQueryParameters(\$query, \$parameters)
    {
        if (\$parameters instanceof Data) {
            \$parameters = \$parameters->getValue(true);
        }

        \$i = 0;

        if (! array_key_exists(0, \$parameters) && array_key_exists(1, \$parameters)) {
            \$i = 1;
        }

        return preg_replace_callback(
            '/\\?|((?<!:):[a-z0-9_]+)/i',
            static function (\$matches) use (\$parameters, &\$i) {
                \$key = substr(\$matches[0], 1);

                if (! array_key_exists(\$i, \$parameters) && (\$key === false || ! array_key_exists(\$key, \$parameters))) {
                    return \$matches[0];
                }

                \$value  = array_key_exists(\$i, \$parameters) ? \$parameters[\$i] : \$parameters[\$key];
                \$result = DoctrineExtension::escapeFunction(\$value);
                \$i++;

                return \$result;
            },
            \$query
        );
    }

    /**
     * Formats and/or highlights the given SQL statement.
     *
     * @param  string \$sql
     * @param  bool   \$highlightOnly If true the query is not formatted, just highlighted
     *
     * @return string
     */
    public function formatQuery(\$sql, \$highlightOnly = false)
    {
        SqlFormatter::\$pre_attributes            = 'class=\"highlight highlight-sql\"';
        SqlFormatter::\$quote_attributes          = 'class=\"string\"';
        SqlFormatter::\$backtick_quote_attributes = 'class=\"string\"';
        SqlFormatter::\$reserved_attributes       = 'class=\"keyword\"';
        SqlFormatter::\$boundary_attributes       = 'class=\"symbol\"';
        SqlFormatter::\$number_attributes         = 'class=\"number\"';
        SqlFormatter::\$word_attributes           = 'class=\"word\"';
        SqlFormatter::\$error_attributes          = 'class=\"error\"';
        SqlFormatter::\$comment_attributes        = 'class=\"comment\"';
        SqlFormatter::\$variable_attributes       = 'class=\"variable\"';

        if (\$highlightOnly) {
            \$html = SqlFormatter::highlight(\$sql);
            \$html = preg_replace('/<pre class=\".*\">([^\"]*+)<\\/pre>/Us', '\\1', \$html);
        } else {
            \$html = SqlFormatter::format(\$sql);
            \$html = preg_replace('/<pre class=\"(.*)\">([^\"]*+)<\\/pre>/Us', '<div class=\"\\1\"><pre>\\2</pre></div>', \$html);
        }

        return \$html;
    }

    /**
     * Get the name of the extension
     *
     * @return string
     */
    public function getName()
    {
        return 'doctrine_extension';
    }
}
", "@app/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\Twig\\DoctrineExtension.php");
    }
}
