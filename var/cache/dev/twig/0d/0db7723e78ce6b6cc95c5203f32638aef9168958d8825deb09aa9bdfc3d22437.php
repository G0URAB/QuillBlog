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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Identifier.php */
class __TwigTemplate_8e48cbb0f86d23848d549be70b9f8386f2854c1e3ad6cca341f44724256fc8e3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Identifier.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema;

/**
 * An abstraction class for an asset identifier.
 *
 * Wraps identifier names like column names in indexes / foreign keys
 * in an abstract class for proper quotation capabilities.
 */
class Identifier extends AbstractAsset
{
    /**
     * @param string \$identifier Identifier name to wrap.
     * @param bool   \$quote      Whether to force quoting the given identifier.
     */
    public function __construct(\$identifier, \$quote = false)
    {
        \$this->_setName(\$identifier);

        if (! \$quote || \$this->_quoted) {
            return;
        }

        \$this->_setName('\"' . \$this->getName() . '\"');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Identifier.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema;

/**
 * An abstraction class for an asset identifier.
 *
 * Wraps identifier names like column names in indexes / foreign keys
 * in an abstract class for proper quotation capabilities.
 */
class Identifier extends AbstractAsset
{
    /**
     * @param string \$identifier Identifier name to wrap.
     * @param bool   \$quote      Whether to force quoting the given identifier.
     */
    public function __construct(\$identifier, \$quote = false)
    {
        \$this->_setName(\$identifier);

        if (! \$quote || \$this->_quoted) {
            return;
        }

        \$this->_setName('\"' . \$this->getName() . '\"');
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Identifier.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Schema\\Identifier.php");
    }
}
