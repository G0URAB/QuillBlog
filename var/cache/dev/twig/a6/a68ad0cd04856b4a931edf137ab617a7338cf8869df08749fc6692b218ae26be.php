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

/* @app/vendor/jdorn/sql-formatter/tests/performance.php */
class __TwigTemplate_bd7197b2a6cefbea5090feb959447a1e9b0246124bf1c1b836b2f44826e3acc6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/jdorn/sql-formatter/tests/performance.php"));

        // line 1
        echo "<?php
require '../lib/SqlFormatter.php';

//this is the default value
//set to '0' to disable caching
//a value between 10 and 20 seems to give the best result
SqlFormatter::\$max_cachekey_size = 15;

//the sample query file is filled with install scripts for PrestaShop
//and some sample catalog data from Magento
\$contents = file_get_contents('sql.sql');

//queries are separated by 2 new lines
\$queries = explode(\"\\n\\n\",\$contents);

//track time and memory usage
\$start = microtime(true);
\$ustart = memory_get_usage(true);

//track number of queries and size of queries
\$num = 0;
\$chars = 0;

foreach (\$queries as \$query) {
\t//do formatting and highlighting
\tSqlFormatter::format(\$query);
\t
\t\$num++;
\t\$chars += strlen(\$query);
}

\$uend = memory_get_usage(true);
\$end = microtime(true);

echo \"<p>Formatted \".\$num.\" queries using a max_cachekey_size of \".SqlFormatter::\$max_cachekey_size.\"</p>\";

echo \"<p>Average query length of \".number_format(\$chars/\$num,5).\" characters</p>\";

echo \"<p>Took \".number_format(\$end-\$start,5).\" seconds total, \".number_format((\$end-\$start)/\$num,5).\" seconds per query, \".number_format(1000*(\$end-\$start)/\$chars,5).\" seconds per 1000 characters</p>\";

echo \"<p>Used \".number_format(\$uend-\$ustart).\" bytes of memory</p>\";

echo \"<h3>Cache Stats</h3><pre>\".print_r(SqlFormatter::getCacheStats(),true).\"</pre>\";

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/jdorn/sql-formatter/tests/performance.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
require '../lib/SqlFormatter.php';

//this is the default value
//set to '0' to disable caching
//a value between 10 and 20 seems to give the best result
SqlFormatter::\$max_cachekey_size = 15;

//the sample query file is filled with install scripts for PrestaShop
//and some sample catalog data from Magento
\$contents = file_get_contents('sql.sql');

//queries are separated by 2 new lines
\$queries = explode(\"\\n\\n\",\$contents);

//track time and memory usage
\$start = microtime(true);
\$ustart = memory_get_usage(true);

//track number of queries and size of queries
\$num = 0;
\$chars = 0;

foreach (\$queries as \$query) {
\t//do formatting and highlighting
\tSqlFormatter::format(\$query);
\t
\t\$num++;
\t\$chars += strlen(\$query);
}

\$uend = memory_get_usage(true);
\$end = microtime(true);

echo \"<p>Formatted \".\$num.\" queries using a max_cachekey_size of \".SqlFormatter::\$max_cachekey_size.\"</p>\";

echo \"<p>Average query length of \".number_format(\$chars/\$num,5).\" characters</p>\";

echo \"<p>Took \".number_format(\$end-\$start,5).\" seconds total, \".number_format((\$end-\$start)/\$num,5).\" seconds per query, \".number_format(1000*(\$end-\$start)/\$chars,5).\" seconds per 1000 characters</p>\";

echo \"<p>Used \".number_format(\$uend-\$ustart).\" bytes of memory</p>\";

echo \"<h3>Cache Stats</h3><pre>\".print_r(SqlFormatter::getCacheStats(),true).\"</pre>\";

", "@app/vendor/jdorn/sql-formatter/tests/performance.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\jdorn\\sql-formatter\\tests\\performance.php");
    }
}
