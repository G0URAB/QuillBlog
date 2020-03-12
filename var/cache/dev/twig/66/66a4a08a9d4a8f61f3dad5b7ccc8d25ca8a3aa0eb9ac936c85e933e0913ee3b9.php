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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL94Keywords.php */
class __TwigTemplate_eb108a8b26667705a934eb64e5febc54b8e2b151184c1feec371eac9845f3887 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL94Keywords.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use function array_diff;
use function array_merge;

/**
 * PostgreSQL 9.4 reserved keywords list.
 */
class PostgreSQL94Keywords extends PostgreSQL92Keywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'PostgreSQL94';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://www.postgresql.org/docs/9.4/static/sql-keywords-appendix.html
     */
    protected function getKeywords()
    {
        \$parentKeywords = array_diff(parent::getKeywords(), ['OVER']);

        return array_merge(\$parentKeywords, ['LATERAL']);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL94Keywords.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use function array_diff;
use function array_merge;

/**
 * PostgreSQL 9.4 reserved keywords list.
 */
class PostgreSQL94Keywords extends PostgreSQL92Keywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'PostgreSQL94';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://www.postgresql.org/docs/9.4/static/sql-keywords-appendix.html
     */
    protected function getKeywords()
    {
        \$parentKeywords = array_diff(parent::getKeywords(), ['OVER']);

        return array_merge(\$parentKeywords, ['LATERAL']);
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL94Keywords.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Platforms\\Keywords\\PostgreSQL94Keywords.php");
    }
}
