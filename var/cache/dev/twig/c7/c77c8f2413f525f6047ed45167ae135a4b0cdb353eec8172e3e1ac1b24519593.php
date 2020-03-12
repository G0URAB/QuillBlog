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

/* @app/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php */
class __TwigTemplate_1863737bcb122881613cb5379846d1c25a7124d2eb568bc268759cccd275a1ae extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Repository;

use Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\ServiceRepositoryCompilerPass;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Repository\\RepositoryFactory;
use Doctrine\\Persistence\\ObjectRepository;
use InvalidArgumentException;
use Psr\\Container\\ContainerInterface;
use RuntimeException;

/**
 * Fetches repositories from the container or falls back to normal creation.
 */
final class ContainerRepositoryFactory implements RepositoryFactory
{
    /** @var ObjectRepository[] */
    private \$managedRepositories = [];

    /** @var ContainerInterface|null */
    private \$container;

    /**
     * @param ContainerInterface \$container A service locator containing the repositories
     */
    public function __construct(ContainerInterface \$container = null)
    {
        // When DoctrineBundle requires Symfony 3.3+, this can be removed
        // and the \$container argument can become required.
        if (\$container === null) {
            throw new InvalidArgumentException(sprintf('The first argument of %s::__construct() is required on Symfony 3.3 or higher.', self::class));
        }

        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository(EntityManagerInterface \$entityManager, \$entityName) : ObjectRepository
    {
        \$metadata            = \$entityManager->getClassMetadata(\$entityName);
        \$repositoryServiceId = \$metadata->customRepositoryClassName;

        \$customRepositoryName = \$metadata->customRepositoryClassName;
        if (\$customRepositoryName !== null) {
            // fetch from the container
            if (\$this->container && \$this->container->has(\$customRepositoryName)) {
                \$repository = \$this->container->get(\$customRepositoryName);

                if (! \$repository instanceof ObjectRepository) {
                    throw new RuntimeException(sprintf('The service \"%s\" must implement ObjectRepository (or extend a base class, like ServiceEntityRepository).', \$repositoryServiceId));
                }

                return \$repository;
            }

            // if not in the container but the class/id implements the interface, throw an error
            if (is_a(\$customRepositoryName, ServiceEntityRepositoryInterface::class, true)) {
                throw new RuntimeException(sprintf('The \"%s\" entity repository implements \"%s\", but its service could not be found. Make sure the service exists and is tagged with \"%s\".', \$customRepositoryName, ServiceEntityRepositoryInterface::class, ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG));
            }

            if (! class_exists(\$customRepositoryName)) {
                throw new RuntimeException(sprintf('The \"%s\" entity has a repositoryClass set to \"%s\", but this is not a valid class. Check your class naming. If this is meant to be a service id, make sure this service exists and is tagged with \"%s\".', \$metadata->name, \$customRepositoryName, ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG));
            }

            // allow the repository to be created below
        }

        return \$this->getOrCreateRepository(\$entityManager, \$metadata);
    }

    private function getOrCreateRepository(
        EntityManagerInterface \$entityManager,
        ClassMetadata \$metadata
    ) : ObjectRepository {
        \$repositoryHash = \$metadata->getName() . spl_object_hash(\$entityManager);
        if (isset(\$this->managedRepositories[\$repositoryHash])) {
            return \$this->managedRepositories[\$repositoryHash];
        }

        \$repositoryClassName = \$metadata->customRepositoryClassName ?: \$entityManager->getConfiguration()->getDefaultRepositoryClassName();

        return \$this->managedRepositories[\$repositoryHash] = new \$repositoryClassName(\$entityManager, \$metadata);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Repository;

use Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\ServiceRepositoryCompilerPass;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Repository\\RepositoryFactory;
use Doctrine\\Persistence\\ObjectRepository;
use InvalidArgumentException;
use Psr\\Container\\ContainerInterface;
use RuntimeException;

/**
 * Fetches repositories from the container or falls back to normal creation.
 */
final class ContainerRepositoryFactory implements RepositoryFactory
{
    /** @var ObjectRepository[] */
    private \$managedRepositories = [];

    /** @var ContainerInterface|null */
    private \$container;

    /**
     * @param ContainerInterface \$container A service locator containing the repositories
     */
    public function __construct(ContainerInterface \$container = null)
    {
        // When DoctrineBundle requires Symfony 3.3+, this can be removed
        // and the \$container argument can become required.
        if (\$container === null) {
            throw new InvalidArgumentException(sprintf('The first argument of %s::__construct() is required on Symfony 3.3 or higher.', self::class));
        }

        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository(EntityManagerInterface \$entityManager, \$entityName) : ObjectRepository
    {
        \$metadata            = \$entityManager->getClassMetadata(\$entityName);
        \$repositoryServiceId = \$metadata->customRepositoryClassName;

        \$customRepositoryName = \$metadata->customRepositoryClassName;
        if (\$customRepositoryName !== null) {
            // fetch from the container
            if (\$this->container && \$this->container->has(\$customRepositoryName)) {
                \$repository = \$this->container->get(\$customRepositoryName);

                if (! \$repository instanceof ObjectRepository) {
                    throw new RuntimeException(sprintf('The service \"%s\" must implement ObjectRepository (or extend a base class, like ServiceEntityRepository).', \$repositoryServiceId));
                }

                return \$repository;
            }

            // if not in the container but the class/id implements the interface, throw an error
            if (is_a(\$customRepositoryName, ServiceEntityRepositoryInterface::class, true)) {
                throw new RuntimeException(sprintf('The \"%s\" entity repository implements \"%s\", but its service could not be found. Make sure the service exists and is tagged with \"%s\".', \$customRepositoryName, ServiceEntityRepositoryInterface::class, ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG));
            }

            if (! class_exists(\$customRepositoryName)) {
                throw new RuntimeException(sprintf('The \"%s\" entity has a repositoryClass set to \"%s\", but this is not a valid class. Check your class naming. If this is meant to be a service id, make sure this service exists and is tagged with \"%s\".', \$metadata->name, \$customRepositoryName, ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG));
            }

            // allow the repository to be created below
        }

        return \$this->getOrCreateRepository(\$entityManager, \$metadata);
    }

    private function getOrCreateRepository(
        EntityManagerInterface \$entityManager,
        ClassMetadata \$metadata
    ) : ObjectRepository {
        \$repositoryHash = \$metadata->getName() . spl_object_hash(\$entityManager);
        if (isset(\$this->managedRepositories[\$repositoryHash])) {
            return \$this->managedRepositories[\$repositoryHash];
        }

        \$repositoryClassName = \$metadata->customRepositoryClassName ?: \$entityManager->getConfiguration()->getDefaultRepositoryClassName();

        return \$this->managedRepositories[\$repositoryHash] = new \$repositoryClassName(\$entityManager, \$metadata);
    }
}
", "@app/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\Repository\\ContainerRepositoryFactory.php");
    }
}
