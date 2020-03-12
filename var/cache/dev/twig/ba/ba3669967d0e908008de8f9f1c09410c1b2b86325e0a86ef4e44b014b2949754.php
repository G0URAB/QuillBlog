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

/* @app/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php */
class __TwigTemplate_6705d7a3c746f1a465a1fc2541ef1deb58c72634f7b09459973fa77929750131 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Sharding\\PoolingShardConnection;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Tools\\EntityGenerator;
use Doctrine\\Persistence\\ManagerRegistry;
use LogicException;
use Symfony\\Component\\Console\\Command\\Command;

/**
 * Base class for Doctrine console commands to extend from.
 *
 * @internal
 */
abstract class DoctrineCommand extends Command
{
    /** @var ManagerRegistry */
    private \$doctrine;

    public function __construct(ManagerRegistry \$doctrine)
    {
        parent::__construct();

        \$this->doctrine = \$doctrine;
    }

    /**
     * get a doctrine entity generator
     *
     * @return EntityGenerator
     */
    protected function getEntityGenerator()
    {
        \$entityGenerator = new EntityGenerator();
        \$entityGenerator->setGenerateAnnotations(false);
        \$entityGenerator->setGenerateStubMethods(true);
        \$entityGenerator->setRegenerateEntityIfExists(false);
        \$entityGenerator->setUpdateEntityIfExists(true);
        \$entityGenerator->setNumSpaces(4);
        \$entityGenerator->setAnnotationPrefix('ORM\\\\');

        return \$entityGenerator;
    }

    /**
     * Get a doctrine entity manager by symfony name.
     *
     * @param string   \$name
     * @param int|null \$shardId
     *
     * @return EntityManager
     */
    protected function getEntityManager(\$name, \$shardId = null)
    {
        \$manager = \$this->getDoctrine()->getManager(\$name);

        if (\$shardId) {
            if (! \$manager->getConnection() instanceof PoolingShardConnection) {
                throw new LogicException(sprintf(\"Connection of EntityManager '%s' must implement shards configuration.\", \$name));
            }

            \$manager->getConnection()->connect(\$shardId);
        }

        return \$manager;
    }

    /**
     * Get a doctrine dbal connection by symfony name.
     *
     * @param string \$name
     *
     * @return Connection
     */
    protected function getDoctrineConnection(\$name)
    {
        return \$this->getDoctrine()->getConnection(\$name);
    }

    /**
     * @return ManagerRegistry
     */
    protected function getDoctrine()
    {
        return \$this->doctrine;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Sharding\\PoolingShardConnection;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Tools\\EntityGenerator;
use Doctrine\\Persistence\\ManagerRegistry;
use LogicException;
use Symfony\\Component\\Console\\Command\\Command;

/**
 * Base class for Doctrine console commands to extend from.
 *
 * @internal
 */
abstract class DoctrineCommand extends Command
{
    /** @var ManagerRegistry */
    private \$doctrine;

    public function __construct(ManagerRegistry \$doctrine)
    {
        parent::__construct();

        \$this->doctrine = \$doctrine;
    }

    /**
     * get a doctrine entity generator
     *
     * @return EntityGenerator
     */
    protected function getEntityGenerator()
    {
        \$entityGenerator = new EntityGenerator();
        \$entityGenerator->setGenerateAnnotations(false);
        \$entityGenerator->setGenerateStubMethods(true);
        \$entityGenerator->setRegenerateEntityIfExists(false);
        \$entityGenerator->setUpdateEntityIfExists(true);
        \$entityGenerator->setNumSpaces(4);
        \$entityGenerator->setAnnotationPrefix('ORM\\\\');

        return \$entityGenerator;
    }

    /**
     * Get a doctrine entity manager by symfony name.
     *
     * @param string   \$name
     * @param int|null \$shardId
     *
     * @return EntityManager
     */
    protected function getEntityManager(\$name, \$shardId = null)
    {
        \$manager = \$this->getDoctrine()->getManager(\$name);

        if (\$shardId) {
            if (! \$manager->getConnection() instanceof PoolingShardConnection) {
                throw new LogicException(sprintf(\"Connection of EntityManager '%s' must implement shards configuration.\", \$name));
            }

            \$manager->getConnection()->connect(\$shardId);
        }

        return \$manager;
    }

    /**
     * Get a doctrine dbal connection by symfony name.
     *
     * @param string \$name
     *
     * @return Connection
     */
    protected function getDoctrineConnection(\$name)
    {
        return \$this->getDoctrine()->getConnection(\$name);
    }

    /**
     * @return ManagerRegistry
     */
    protected function getDoctrine()
    {
        return \$this->doctrine;
    }
}
", "@app/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php");
    }
}
