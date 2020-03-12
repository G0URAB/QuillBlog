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

/* @app/vendor/symfony/maker-bundle/src/Doctrine/DoctrineHelper.php */
class __TwigTemplate_d3d5037e35dec6667d842307b9a8e34e04c87a91f8020c3b51f3bb042058cbe6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Doctrine/DoctrineHelper.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Doctrine;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Doctrine\\Common\\Persistence\\Mapping\\AbstractClassMetadataFactory;
use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Persistence\\Mapping\\Driver\\AnnotationDriver;
use Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriver;
use Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain;
use Doctrine\\Common\\Persistence\\Mapping\\MappingException as PersistenceMappingException;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\MappingException as ORMMappingException;
use Doctrine\\ORM\\Tools\\DisconnectedClassMetadataFactory;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassNameDetails;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Ryan Weaver <ryan@knpuniversity.com>
 * @author Sadicov Vladimir <sadikoff@gmail.com>
 *
 * @internal
 */
final class DoctrineHelper
{
    /**
     * @var string
     */
    private \$entityNamespace;

    /**
     * @var ManagerRegistry
     */
    private \$registry;

    public function __construct(string \$entityNamespace, ManagerRegistry \$registry = null)
    {
        \$this->entityNamespace = trim(\$entityNamespace, '\\\\');
        \$this->registry = \$registry;
    }

    public function getRegistry(): ManagerRegistry
    {
        // this should never happen: we will have checked for the
        // DoctrineBundle dependency before calling this
        if (null === \$this->registry) {
            throw new \\Exception('Somehow the doctrine service is missing. Is DoctrineBundle installed?');
        }

        return \$this->registry;
    }

    private function isDoctrineInstalled(): bool
    {
        return null !== \$this->registry;
    }

    public function getEntityNamespace(): string
    {
        return \$this->entityNamespace;
    }

    /**
     * @return MappingDriver|null
     *
     * @throws \\Exception
     */
    public function getMappingDriverForClass(string \$className)
    {
        /** @var EntityManagerInterface \$em */
        \$em = \$this->getRegistry()->getManagerForClass(\$className);

        if (null === \$em) {
            throw new \\InvalidArgumentException(sprintf('Cannot find the entity manager for class \"%s\"', \$className));
        }

        \$metadataDriver = \$em->getConfiguration()->getMetadataDriverImpl();

        if (!\$metadataDriver instanceof MappingDriverChain) {
            return \$metadataDriver;
        }

        foreach (\$metadataDriver->getDrivers() as \$namespace => \$driver) {
            if (0 === strpos(\$className, \$namespace)) {
                return \$driver;
            }
        }

        return \$metadataDriver->getDefaultDriver();
    }

    public function getEntitiesForAutocomplete(): array
    {
        \$entities = [];

        if (\$this->isDoctrineInstalled()) {
            \$allMetadata = \$this->getMetadata();

            /* @var ClassMetadata \$metadata */
            foreach (array_keys(\$allMetadata) as \$classname) {
                \$entityClassDetails = new ClassNameDetails(\$classname, \$this->entityNamespace);
                \$entities[] = \$entityClassDetails->getRelativeName();
            }
        }

        return \$entities;
    }

    /**
     * @return array|ClassMetadata
     */
    public function getMetadata(string \$classOrNamespace = null, bool \$disconnected = false)
    {
        \$metadata = [];

        /** @var EntityManagerInterface \$em */
        foreach (\$this->getRegistry()->getManagers() as \$em) {
            \$cmf = \$em->getMetadataFactory();

            if (\$disconnected) {
                try {
                    \$loaded = \$cmf->getAllMetadata();
                } catch (ORMMappingException \$e) {
                    \$loaded = \$cmf instanceof AbstractClassMetadataFactory ? \$cmf->getLoadedMetadata() : [];
                } catch (PersistenceMappingException \$e) {
                    \$loaded = \$cmf instanceof AbstractClassMetadataFactory ? \$cmf->getLoadedMetadata() : [];
                }

                \$cmf = new DisconnectedClassMetadataFactory();
                \$cmf->setEntityManager(\$em);

                foreach (\$loaded as \$m) {
                    \$cmf->setMetadataFor(\$m->getName(), \$m);
                }

                // Invalidating the cached AnnotationDriver::\$classNames to find new Entity classes
                \$metadataDriver = \$em->getConfiguration()->getMetadataDriverImpl();
                if (\$metadataDriver instanceof MappingDriverChain) {
                    foreach (\$metadataDriver->getDrivers() as \$driver) {
                        if (\$driver instanceof AnnotationDriver) {
                            \$classNames = (new \\ReflectionObject(\$driver))->getProperty('classNames');
                            \$classNames->setAccessible(true);
                            \$classNames->setValue(\$driver, null);
                            \$classNames->setAccessible(false);
                        }
                    }
                }
            }

            foreach (\$cmf->getAllMetadata() as \$m) {
                if (null === \$classOrNamespace) {
                    \$metadata[\$m->getName()] = \$m;
                } else {
                    if (\$m->getName() === \$classOrNamespace) {
                        return \$m;
                    }

                    if (0 === strpos(\$m->getName(), \$classOrNamespace)) {
                        \$metadata[\$m->getName()] = \$m;
                    }
                }
            }
        }

        return \$metadata;
    }

    /**
     * @return EntityDetails|null
     */
    public function createDoctrineDetails(string \$entityClassName)
    {
        \$metadata = \$this->getMetadata(\$entityClassName);

        if (\$metadata instanceof ClassMetadata) {
            return new EntityDetails(\$metadata);
        }

        return null;
    }

    public function isClassAMappedEntity(string \$className): bool
    {
        if (!\$this->isDoctrineInstalled()) {
            return false;
        }

        return (bool) \$this->getMetadata(\$className);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Doctrine/DoctrineHelper.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Doctrine;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Doctrine\\Common\\Persistence\\Mapping\\AbstractClassMetadataFactory;
use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Persistence\\Mapping\\Driver\\AnnotationDriver;
use Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriver;
use Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain;
use Doctrine\\Common\\Persistence\\Mapping\\MappingException as PersistenceMappingException;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\MappingException as ORMMappingException;
use Doctrine\\ORM\\Tools\\DisconnectedClassMetadataFactory;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassNameDetails;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Ryan Weaver <ryan@knpuniversity.com>
 * @author Sadicov Vladimir <sadikoff@gmail.com>
 *
 * @internal
 */
final class DoctrineHelper
{
    /**
     * @var string
     */
    private \$entityNamespace;

    /**
     * @var ManagerRegistry
     */
    private \$registry;

    public function __construct(string \$entityNamespace, ManagerRegistry \$registry = null)
    {
        \$this->entityNamespace = trim(\$entityNamespace, '\\\\');
        \$this->registry = \$registry;
    }

    public function getRegistry(): ManagerRegistry
    {
        // this should never happen: we will have checked for the
        // DoctrineBundle dependency before calling this
        if (null === \$this->registry) {
            throw new \\Exception('Somehow the doctrine service is missing. Is DoctrineBundle installed?');
        }

        return \$this->registry;
    }

    private function isDoctrineInstalled(): bool
    {
        return null !== \$this->registry;
    }

    public function getEntityNamespace(): string
    {
        return \$this->entityNamespace;
    }

    /**
     * @return MappingDriver|null
     *
     * @throws \\Exception
     */
    public function getMappingDriverForClass(string \$className)
    {
        /** @var EntityManagerInterface \$em */
        \$em = \$this->getRegistry()->getManagerForClass(\$className);

        if (null === \$em) {
            throw new \\InvalidArgumentException(sprintf('Cannot find the entity manager for class \"%s\"', \$className));
        }

        \$metadataDriver = \$em->getConfiguration()->getMetadataDriverImpl();

        if (!\$metadataDriver instanceof MappingDriverChain) {
            return \$metadataDriver;
        }

        foreach (\$metadataDriver->getDrivers() as \$namespace => \$driver) {
            if (0 === strpos(\$className, \$namespace)) {
                return \$driver;
            }
        }

        return \$metadataDriver->getDefaultDriver();
    }

    public function getEntitiesForAutocomplete(): array
    {
        \$entities = [];

        if (\$this->isDoctrineInstalled()) {
            \$allMetadata = \$this->getMetadata();

            /* @var ClassMetadata \$metadata */
            foreach (array_keys(\$allMetadata) as \$classname) {
                \$entityClassDetails = new ClassNameDetails(\$classname, \$this->entityNamespace);
                \$entities[] = \$entityClassDetails->getRelativeName();
            }
        }

        return \$entities;
    }

    /**
     * @return array|ClassMetadata
     */
    public function getMetadata(string \$classOrNamespace = null, bool \$disconnected = false)
    {
        \$metadata = [];

        /** @var EntityManagerInterface \$em */
        foreach (\$this->getRegistry()->getManagers() as \$em) {
            \$cmf = \$em->getMetadataFactory();

            if (\$disconnected) {
                try {
                    \$loaded = \$cmf->getAllMetadata();
                } catch (ORMMappingException \$e) {
                    \$loaded = \$cmf instanceof AbstractClassMetadataFactory ? \$cmf->getLoadedMetadata() : [];
                } catch (PersistenceMappingException \$e) {
                    \$loaded = \$cmf instanceof AbstractClassMetadataFactory ? \$cmf->getLoadedMetadata() : [];
                }

                \$cmf = new DisconnectedClassMetadataFactory();
                \$cmf->setEntityManager(\$em);

                foreach (\$loaded as \$m) {
                    \$cmf->setMetadataFor(\$m->getName(), \$m);
                }

                // Invalidating the cached AnnotationDriver::\$classNames to find new Entity classes
                \$metadataDriver = \$em->getConfiguration()->getMetadataDriverImpl();
                if (\$metadataDriver instanceof MappingDriverChain) {
                    foreach (\$metadataDriver->getDrivers() as \$driver) {
                        if (\$driver instanceof AnnotationDriver) {
                            \$classNames = (new \\ReflectionObject(\$driver))->getProperty('classNames');
                            \$classNames->setAccessible(true);
                            \$classNames->setValue(\$driver, null);
                            \$classNames->setAccessible(false);
                        }
                    }
                }
            }

            foreach (\$cmf->getAllMetadata() as \$m) {
                if (null === \$classOrNamespace) {
                    \$metadata[\$m->getName()] = \$m;
                } else {
                    if (\$m->getName() === \$classOrNamespace) {
                        return \$m;
                    }

                    if (0 === strpos(\$m->getName(), \$classOrNamespace)) {
                        \$metadata[\$m->getName()] = \$m;
                    }
                }
            }
        }

        return \$metadata;
    }

    /**
     * @return EntityDetails|null
     */
    public function createDoctrineDetails(string \$entityClassName)
    {
        \$metadata = \$this->getMetadata(\$entityClassName);

        if (\$metadata instanceof ClassMetadata) {
            return new EntityDetails(\$metadata);
        }

        return null;
    }

    public function isClassAMappedEntity(string \$className): bool
    {
        if (!\$this->isDoctrineInstalled()) {
            return false;
        }

        return (bool) \$this->getMetadata(\$className);
    }
}
", "@app/vendor/symfony/maker-bundle/src/Doctrine/DoctrineHelper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Doctrine\\DoctrineHelper.php");
    }
}
