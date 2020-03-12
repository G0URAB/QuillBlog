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

/* @app/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php */
class __TwigTemplate_417f87047ce5a61047d337c6f5b35a6e51634bd3f64cb192ee146c03eae66f39 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Repository;

use Doctrine\\ORM\\EntityRepository;
use Doctrine\\Persistence\\ManagerRegistry;
use LogicException;

/**
 * Optional EntityRepository base class with a simplified constructor (for autowiring).
 *
 * To use in your class, inject the \"registry\" service and call
 * the parent constructor. For example:
 *
 * class YourEntityRepository extends ServiceEntityRepository
 * {
 *     public function __construct(ManagerRegistry \$registry)
 *     {
 *         parent::__construct(\$registry, YourEntity::class);
 *     }
 * }
 */
class ServiceEntityRepository extends EntityRepository implements ServiceEntityRepositoryInterface
{
    /**
     * @param string \$entityClass The class name of the entity this repository manages
     */
    public function __construct(ManagerRegistry \$registry, \$entityClass)
    {
        \$manager = \$registry->getManagerForClass(\$entityClass);

        if (\$manager === null) {
            throw new LogicException(sprintf(
                'Could not find the entity manager for class \"%s\". Check your Doctrine configuration to make sure it is configured to load this entity’s metadata.',
                \$entityClass
            ));
        }

        parent::__construct(\$manager, \$manager->getClassMetadata(\$entityClass));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Repository;

use Doctrine\\ORM\\EntityRepository;
use Doctrine\\Persistence\\ManagerRegistry;
use LogicException;

/**
 * Optional EntityRepository base class with a simplified constructor (for autowiring).
 *
 * To use in your class, inject the \"registry\" service and call
 * the parent constructor. For example:
 *
 * class YourEntityRepository extends ServiceEntityRepository
 * {
 *     public function __construct(ManagerRegistry \$registry)
 *     {
 *         parent::__construct(\$registry, YourEntity::class);
 *     }
 * }
 */
class ServiceEntityRepository extends EntityRepository implements ServiceEntityRepositoryInterface
{
    /**
     * @param string \$entityClass The class name of the entity this repository manages
     */
    public function __construct(ManagerRegistry \$registry, \$entityClass)
    {
        \$manager = \$registry->getManagerForClass(\$entityClass);

        if (\$manager === null) {
            throw new LogicException(sprintf(
                'Could not find the entity manager for class \"%s\". Check your Doctrine configuration to make sure it is configured to load this entity’s metadata.',
                \$entityClass
            ));
        }

        parent::__construct(\$manager, \$manager->getClassMetadata(\$entityClass));
    }
}
", "@app/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php");
    }
}
