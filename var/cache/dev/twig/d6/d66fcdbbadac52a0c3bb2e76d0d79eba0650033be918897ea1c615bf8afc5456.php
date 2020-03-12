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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere12Keywords.php */
class __TwigTemplate_63698d9d797444103a2e525798feb3cdd4777d7fd9db8f21b4b85b3e45bd42f5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere12Keywords.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use function array_diff;
use function array_merge;

/**
 * SAP Sybase SQL Anywhere 12 reserved keywords list.
 */
class SQLAnywhere12Keywords extends SQLAnywhere11Keywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'SQLAnywhere12';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://dcx.sybase.com/1200/en/dbreference/alhakeywords.html
     */
    protected function getKeywords()
    {
        return array_merge(
            array_diff(
                parent::getKeywords(),
                [
                    'INDEX_LPAREN',
                    'SYNTAX_ERROR',
                    'WITH_CUBE',
                    'WITH_LPAREN',
                    'WITH_ROLLUP',
                ]
            ),
            [
                'DATETIMEOFFSET',
                'LIMIT',
                'OPENXML',
                'SPATIAL',
                'TREAT',
            ]
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere12Keywords.php";
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
 * SAP Sybase SQL Anywhere 12 reserved keywords list.
 */
class SQLAnywhere12Keywords extends SQLAnywhere11Keywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'SQLAnywhere12';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://dcx.sybase.com/1200/en/dbreference/alhakeywords.html
     */
    protected function getKeywords()
    {
        return array_merge(
            array_diff(
                parent::getKeywords(),
                [
                    'INDEX_LPAREN',
                    'SYNTAX_ERROR',
                    'WITH_CUBE',
                    'WITH_LPAREN',
                    'WITH_ROLLUP',
                ]
            ),
            [
                'DATETIMEOFFSET',
                'LIMIT',
                'OPENXML',
                'SPATIAL',
                'TREAT',
            ]
        );
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere12Keywords.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Platforms\\Keywords\\SQLAnywhere12Keywords.php");
    }
}
