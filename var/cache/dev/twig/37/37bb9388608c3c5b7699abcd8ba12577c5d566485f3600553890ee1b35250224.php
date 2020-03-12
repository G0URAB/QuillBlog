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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/StatementIterator.php */
class __TwigTemplate_5a7e74d47d74f7bc40d1d86e4d3804a1fd53365cb4923f614446485e5a895dd2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/StatementIterator.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

use IteratorAggregate;

class StatementIterator implements IteratorAggregate
{
    /** @var ResultStatement */
    private \$statement;

    public function __construct(ResultStatement \$statement)
    {
        \$this->statement = \$statement;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        while ((\$result = \$this->statement->fetch()) !== false) {
            yield \$result;
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/StatementIterator.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver;

use IteratorAggregate;

class StatementIterator implements IteratorAggregate
{
    /** @var ResultStatement */
    private \$statement;

    public function __construct(ResultStatement \$statement)
    {
        \$this->statement = \$statement;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        while ((\$result = \$this->statement->fetch()) !== false) {
            yield \$result;
        }
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/StatementIterator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\StatementIterator.php");
    }
}
