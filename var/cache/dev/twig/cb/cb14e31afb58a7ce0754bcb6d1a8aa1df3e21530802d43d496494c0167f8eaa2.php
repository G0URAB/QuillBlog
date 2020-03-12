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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/ExecutionResult.php */
class __TwigTemplate_7a1ae9bd5fbb791c7e4e739fd7662c1f33a6219e71de7587bbdd548a177a978f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/ExecutionResult.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Version;

use Doctrine\\DBAL\\Schema\\Schema;
use RuntimeException;
use Throwable;
use function count;

/**
 * The ExecutionResult class is responsible for storing the result of a migration version after it executes.
 *
 * @internal
 */
class ExecutionResult
{
    /** @var string[] */
    private \$sql = [];

    /** @var mixed[] */
    private \$params = [];

    /** @var mixed[] */
    private \$types = [];

    /** @var float|null */
    private \$time;

    /** @var float|null */
    private \$memory;

    /** @var bool */
    private \$skipped = false;

    /** @var bool */
    private \$error = false;

    /** @var Throwable|null */
    private \$exception;

    /** @var Schema|null */
    private \$toSchema;

    /**
     * @param string[] \$sql
     * @param mixed[]  \$params
     * @param mixed[]  \$types
     */
    public function __construct(array \$sql = [], array \$params = [], array \$types = [])
    {
        \$this->sql    = \$sql;
        \$this->params = \$params;
        \$this->types  = \$types;
    }

    public function hasSql() : bool
    {
        return count(\$this->sql) !== 0;
    }

    /**
     * @return string[]
     */
    public function getSql() : array
    {
        return \$this->sql;
    }

    /**
     * @param string[] \$sql
     */
    public function setSql(array \$sql) : void
    {
        \$this->sql = \$sql;
    }

    /**
     * @return mixed[]
     */
    public function getParams() : array
    {
        return \$this->params;
    }

    /**
     * @param mixed[] \$params
     */
    public function setParams(array \$params) : void
    {
        \$this->params = \$params;
    }

    /**
     * @return mixed[]
     */
    public function getTypes() : array
    {
        return \$this->types;
    }

    /**
     * @param mixed[] \$types
     */
    public function setTypes(array \$types) : void
    {
        \$this->types = \$types;
    }

    public function getTime() : ?float
    {
        return \$this->time;
    }

    public function setTime(float \$time) : void
    {
        \$this->time = \$time;
    }

    public function getMemory() : ?float
    {
        return \$this->memory;
    }

    public function setMemory(float \$memory) : void
    {
        \$this->memory = \$memory;
    }

    public function setSkipped(bool \$skipped) : void
    {
        \$this->skipped = \$skipped;
    }

    public function isSkipped() : bool
    {
        return \$this->skipped;
    }

    public function setError(bool \$error) : void
    {
        \$this->error = \$error;
    }

    public function hasError() : bool
    {
        return \$this->error;
    }

    public function setException(Throwable \$exception) : void
    {
        \$this->exception = \$exception;
    }

    public function getException() : ?Throwable
    {
        return \$this->exception;
    }

    public function setToSchema(Schema \$toSchema) : void
    {
        \$this->toSchema = \$toSchema;
    }

    public function getToSchema() : Schema
    {
        if (\$this->toSchema === null) {
            throw new RuntimeException('Cannot call getToSchema() when toSchema is null.');
        }

        return \$this->toSchema;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/ExecutionResult.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Version;

use Doctrine\\DBAL\\Schema\\Schema;
use RuntimeException;
use Throwable;
use function count;

/**
 * The ExecutionResult class is responsible for storing the result of a migration version after it executes.
 *
 * @internal
 */
class ExecutionResult
{
    /** @var string[] */
    private \$sql = [];

    /** @var mixed[] */
    private \$params = [];

    /** @var mixed[] */
    private \$types = [];

    /** @var float|null */
    private \$time;

    /** @var float|null */
    private \$memory;

    /** @var bool */
    private \$skipped = false;

    /** @var bool */
    private \$error = false;

    /** @var Throwable|null */
    private \$exception;

    /** @var Schema|null */
    private \$toSchema;

    /**
     * @param string[] \$sql
     * @param mixed[]  \$params
     * @param mixed[]  \$types
     */
    public function __construct(array \$sql = [], array \$params = [], array \$types = [])
    {
        \$this->sql    = \$sql;
        \$this->params = \$params;
        \$this->types  = \$types;
    }

    public function hasSql() : bool
    {
        return count(\$this->sql) !== 0;
    }

    /**
     * @return string[]
     */
    public function getSql() : array
    {
        return \$this->sql;
    }

    /**
     * @param string[] \$sql
     */
    public function setSql(array \$sql) : void
    {
        \$this->sql = \$sql;
    }

    /**
     * @return mixed[]
     */
    public function getParams() : array
    {
        return \$this->params;
    }

    /**
     * @param mixed[] \$params
     */
    public function setParams(array \$params) : void
    {
        \$this->params = \$params;
    }

    /**
     * @return mixed[]
     */
    public function getTypes() : array
    {
        return \$this->types;
    }

    /**
     * @param mixed[] \$types
     */
    public function setTypes(array \$types) : void
    {
        \$this->types = \$types;
    }

    public function getTime() : ?float
    {
        return \$this->time;
    }

    public function setTime(float \$time) : void
    {
        \$this->time = \$time;
    }

    public function getMemory() : ?float
    {
        return \$this->memory;
    }

    public function setMemory(float \$memory) : void
    {
        \$this->memory = \$memory;
    }

    public function setSkipped(bool \$skipped) : void
    {
        \$this->skipped = \$skipped;
    }

    public function isSkipped() : bool
    {
        return \$this->skipped;
    }

    public function setError(bool \$error) : void
    {
        \$this->error = \$error;
    }

    public function hasError() : bool
    {
        return \$this->error;
    }

    public function setException(Throwable \$exception) : void
    {
        \$this->exception = \$exception;
    }

    public function getException() : ?Throwable
    {
        return \$this->exception;
    }

    public function setToSchema(Schema \$toSchema) : void
    {
        \$this->toSchema = \$toSchema;
    }

    public function getToSchema() : Schema
    {
        if (\$this->toSchema === null) {
            throw new RuntimeException('Cannot call getToSchema() when toSchema is null.');
        }

        return \$this->toSchema;
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/ExecutionResult.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Version\\ExecutionResult.php");
    }
}
