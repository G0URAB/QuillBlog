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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere16Keywords.php */
class __TwigTemplate_369fec381b0d7351751e7c5e6eefbb71f92ac0eb50621ccb7eb75bb8ba46b1ce extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere16Keywords.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use function array_merge;

/**
 * SAP Sybase SQL Anywhere 16 reserved keywords list.
 */
class SQLAnywhere16Keywords extends SQLAnywhere12Keywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'SQLAnywhere16';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://dcx.sybase.com/index.html#sa160/en/dbreference/alhakeywords.html
     */
    protected function getKeywords()
    {
        return array_merge(
            parent::getKeywords(),
            [
                'ARRAY',
                'JSON',
                'ROW',
                'ROWTYPE',
                'UNNEST',
                'VARRAY',
            ]
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere16Keywords.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use function array_merge;

/**
 * SAP Sybase SQL Anywhere 16 reserved keywords list.
 */
class SQLAnywhere16Keywords extends SQLAnywhere12Keywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'SQLAnywhere16';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://dcx.sybase.com/index.html#sa160/en/dbreference/alhakeywords.html
     */
    protected function getKeywords()
    {
        return array_merge(
            parent::getKeywords(),
            [
                'ARRAY',
                'JSON',
                'ROW',
                'ROWTYPE',
                'UNNEST',
                'VARRAY',
            ]
        );
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere16Keywords.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Platforms\\Keywords\\SQLAnywhere16Keywords.php");
    }
}
