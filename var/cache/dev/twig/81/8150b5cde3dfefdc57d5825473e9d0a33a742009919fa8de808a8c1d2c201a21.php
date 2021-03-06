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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Connection.php */
class __TwigTemplate_20d13261ffc5e05a0f3c83c6a20aedb67189c7dc58e61805fc9ef290c340f307 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Connection.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\DrizzlePDOMySql;

use Doctrine\\DBAL\\Driver\\PDOConnection;
use Doctrine\\DBAL\\ParameterType;

class Connection extends PDOConnection
{
    /**
     * {@inheritdoc}
     */
    public function quote(\$value, \$type = ParameterType::STRING)
    {
        if (\$type === ParameterType::BOOLEAN) {
            return \$value ? 'true' : 'false';
        }

        return parent::quote(\$value, \$type);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Connection.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\DrizzlePDOMySql;

use Doctrine\\DBAL\\Driver\\PDOConnection;
use Doctrine\\DBAL\\ParameterType;

class Connection extends PDOConnection
{
    /**
     * {@inheritdoc}
     */
    public function quote(\$value, \$type = ParameterType::STRING)
    {
        if (\$type === ParameterType::BOOLEAN) {
            return \$value ? 'true' : 'false';
        }

        return parent::quote(\$value, \$type);
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Connection.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\DrizzlePDOMySql\\Connection.php");
    }
}
