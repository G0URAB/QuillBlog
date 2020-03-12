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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/QueryException.php */
class __TwigTemplate_c992c58e6d5e2deb3befb52aea884aac6ada35a4b4b16f9c8351f9bb9f5edc7b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/QueryException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Query;

use Doctrine\\DBAL\\DBALException;
use function implode;

class QueryException extends DBALException
{
    /**
     * @param string   \$alias
     * @param string[] \$registeredAliases
     *
     * @return \\Doctrine\\DBAL\\Query\\QueryException
     */
    public static function unknownAlias(\$alias, \$registeredAliases)
    {
        return new self(\"The given alias '\" . \$alias . \"' is not part of \" .
            'any FROM or JOIN clause table. The currently registered ' .
            'aliases are: ' . implode(', ', \$registeredAliases) . '.');
    }

    /**
     * @param string   \$alias
     * @param string[] \$registeredAliases
     *
     * @return \\Doctrine\\DBAL\\Query\\QueryException
     */
    public static function nonUniqueAlias(\$alias, \$registeredAliases)
    {
        return new self(\"The given alias '\" . \$alias . \"' is not unique \" .
            'in FROM and JOIN clause table. The currently registered ' .
            'aliases are: ' . implode(', ', \$registeredAliases) . '.');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/QueryException.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Query;

use Doctrine\\DBAL\\DBALException;
use function implode;

class QueryException extends DBALException
{
    /**
     * @param string   \$alias
     * @param string[] \$registeredAliases
     *
     * @return \\Doctrine\\DBAL\\Query\\QueryException
     */
    public static function unknownAlias(\$alias, \$registeredAliases)
    {
        return new self(\"The given alias '\" . \$alias . \"' is not part of \" .
            'any FROM or JOIN clause table. The currently registered ' .
            'aliases are: ' . implode(', ', \$registeredAliases) . '.');
    }

    /**
     * @param string   \$alias
     * @param string[] \$registeredAliases
     *
     * @return \\Doctrine\\DBAL\\Query\\QueryException
     */
    public static function nonUniqueAlias(\$alias, \$registeredAliases)
    {
        return new self(\"The given alias '\" . \$alias . \"' is not unique \" .
            'in FROM and JOIN clause table. The currently registered ' .
            'aliases are: ' . implode(', ', \$registeredAliases) . '.');
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/QueryException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Query\\QueryException.php");
    }
}
