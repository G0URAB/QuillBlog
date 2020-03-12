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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/OCI8Exception.php */
class __TwigTemplate_bab0755e819ecfc803c5c665275b01f27abda1f8511cdd8c60e6ab43823e5a68 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/OCI8Exception.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\OCI8;

use Doctrine\\DBAL\\Driver\\AbstractDriverException;

class OCI8Exception extends AbstractDriverException
{
    /**
     * @param mixed[]|false \$error
     *
     * @return \\Doctrine\\DBAL\\Driver\\OCI8\\OCI8Exception
     */
    public static function fromErrorInfo(\$error)
    {
        if (\$error === false) {
            return new self('Database error occurred but no error information was retrieved from the driver.');
        }

        return new self(\$error['message'], null, \$error['code']);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/OCI8Exception.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\OCI8;

use Doctrine\\DBAL\\Driver\\AbstractDriverException;

class OCI8Exception extends AbstractDriverException
{
    /**
     * @param mixed[]|false \$error
     *
     * @return \\Doctrine\\DBAL\\Driver\\OCI8\\OCI8Exception
     */
    public static function fromErrorInfo(\$error)
    {
        if (\$error === false) {
            return new self('Database error occurred but no error information was retrieved from the driver.');
        }

        return new self(\$error['message'], null, \$error['code']);
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/OCI8Exception.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\OCI8\\OCI8Exception.php");
    }
}
