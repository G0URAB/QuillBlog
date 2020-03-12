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

/* @app/vendor/jdorn/sql-formatter/examples/cli.php */
class __TwigTemplate_b628196f52548dcc58cb07bac96d5cf48909665c4a4f91efb060593b04e752ee extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/jdorn/sql-formatter/examples/cli.php"));

        // line 1
        echo "<?php
if(php_sapi_name() !== \"cli\") {
\techo \"<p>Run this php script from the command line to see CLI syntax highlighting and formatting.  It support Unix pipes or command line argument style.</p>\";
\techo \"<pre><code>php examples/cli.php \\\"SELECT * FROM MyTable WHERE (id>5 AND \\\\`name\\\\` LIKE \\\\&quot;testing\\\\&quot;);\\\"</code></pre>\";
\techo \"<pre><code>echo \\\"SELECT * FROM MyTable WHERE (id>5 AND \\\\`name\\\\` LIKE \\\\&quot;testing\\\\&quot;);\\\" | php examples/cli.php</code></pre>\";
}

if(isset(\$argv[1])) {
\t\$sql = \$argv[1];
}
else {
\t\$sql = stream_get_contents(fopen(\"php://stdin\", \"r\"));
}

require_once(__DIR__.'/../lib/SqlFormatter.php');

echo SqlFormatter::format(\$sql);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/jdorn/sql-formatter/examples/cli.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
if(php_sapi_name() !== \"cli\") {
\techo \"<p>Run this php script from the command line to see CLI syntax highlighting and formatting.  It support Unix pipes or command line argument style.</p>\";
\techo \"<pre><code>php examples/cli.php \\\"SELECT * FROM MyTable WHERE (id>5 AND \\\\`name\\\\` LIKE \\\\&quot;testing\\\\&quot;);\\\"</code></pre>\";
\techo \"<pre><code>echo \\\"SELECT * FROM MyTable WHERE (id>5 AND \\\\`name\\\\` LIKE \\\\&quot;testing\\\\&quot;);\\\" | php examples/cli.php</code></pre>\";
}

if(isset(\$argv[1])) {
\t\$sql = \$argv[1];
}
else {
\t\$sql = stream_get_contents(fopen(\"php://stdin\", \"r\"));
}

require_once(__DIR__.'/../lib/SqlFormatter.php');

echo SqlFormatter::format(\$sql);
", "@app/vendor/jdorn/sql-formatter/examples/cli.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\jdorn\\sql-formatter\\examples\\cli.php");
    }
}
