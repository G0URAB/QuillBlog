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

/* @app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php */
class __TwigTemplate_4e50bdcb42ebc825c2717469be61050680ebc03f43c74a1f9ad06f698a410661 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Persistence;

use UnexpectedValueException;
use function interface_exists;

/**
 * Contract for a Doctrine persistence layer ObjectRepository class to implement.
 */
interface ObjectRepository
{
    /**
     * Finds an object by its primary key / identifier.
     *
     * @param mixed \$id The identifier.
     *
     * @return object|null The object.
     */
    public function find(\$id);

    /**
     * Finds all objects in the repository.
     *
     * @return object[] The objects.
     */
    public function findAll();

    /**
     * Finds objects by a set of criteria.
     *
     * Optionally sorting and limiting details can be passed. An implementation may throw
     * an UnexpectedValueException if certain values of the sorting or limiting details are
     * not supported.
     *
     * @param mixed[]       \$criteria
     * @param string[]|null \$orderBy
     * @param int|null      \$limit
     * @param int|null      \$offset
     *
     * @return object[] The objects.
     *
     * @throws UnexpectedValueException
     */
    public function findBy(array \$criteria, ?array \$orderBy = null, \$limit = null, \$offset = null);

    /**
     * Finds a single object by a set of criteria.
     *
     * @param mixed[] \$criteria The criteria.
     *
     * @return object|null The object.
     */
    public function findOneBy(array \$criteria);

    /**
     * Returns the class name of the object managed by the repository.
     *
     * @return string
     */
    public function getClassName();
}

interface_exists(\\Doctrine\\Common\\Persistence\\ObjectRepository::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Persistence;

use UnexpectedValueException;
use function interface_exists;

/**
 * Contract for a Doctrine persistence layer ObjectRepository class to implement.
 */
interface ObjectRepository
{
    /**
     * Finds an object by its primary key / identifier.
     *
     * @param mixed \$id The identifier.
     *
     * @return object|null The object.
     */
    public function find(\$id);

    /**
     * Finds all objects in the repository.
     *
     * @return object[] The objects.
     */
    public function findAll();

    /**
     * Finds objects by a set of criteria.
     *
     * Optionally sorting and limiting details can be passed. An implementation may throw
     * an UnexpectedValueException if certain values of the sorting or limiting details are
     * not supported.
     *
     * @param mixed[]       \$criteria
     * @param string[]|null \$orderBy
     * @param int|null      \$limit
     * @param int|null      \$offset
     *
     * @return object[] The objects.
     *
     * @throws UnexpectedValueException
     */
    public function findBy(array \$criteria, ?array \$orderBy = null, \$limit = null, \$offset = null);

    /**
     * Finds a single object by a set of criteria.
     *
     * @param mixed[] \$criteria The criteria.
     *
     * @return object|null The object.
     */
    public function findOneBy(array \$criteria);

    /**
     * Returns the class name of the object managed by the repository.
     *
     * @return string
     */
    public function getClassName();
}

interface_exists(\\Doctrine\\Common\\Persistence\\ObjectRepository::class);
", "@app/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php");
    }
}
