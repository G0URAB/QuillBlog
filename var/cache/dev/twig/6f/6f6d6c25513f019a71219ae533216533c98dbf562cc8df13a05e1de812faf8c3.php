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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/LastInsertId.php */
class __TwigTemplate_686d914cd79437243bacd9ad0a8457fdbb2babdc8cd6b95de63cbb0fbd5580f5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/LastInsertId.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\SQLSrv;

/**
 * Last Id Data Container.
 */
class LastInsertId
{
    /** @var int */
    private \$id;

    /**
     * @param int \$id
     */
    public function setId(\$id)
    {
        \$this->id = \$id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/LastInsertId.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\SQLSrv;

/**
 * Last Id Data Container.
 */
class LastInsertId
{
    /** @var int */
    private \$id;

    /**
     * @param int \$id
     */
    public function setId(\$id)
    {
        \$this->id = \$id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/LastInsertId.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\SQLSrv\\LastInsertId.php");
    }
}
