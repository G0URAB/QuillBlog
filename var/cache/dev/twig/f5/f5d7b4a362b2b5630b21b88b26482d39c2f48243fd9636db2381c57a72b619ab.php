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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Proxy/ProxyFactory.php */
class __TwigTemplate_ce58b62ce1cfe90788e6632d20c93c01c6de3f94454c1941fefc27151097d834 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Proxy/ProxyFactory.php"));

        // line 1
        echo "<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Proxy;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Proxy\\AbstractProxyFactory;
use Doctrine\\Common\\Proxy\\Proxy as BaseProxy;
use Doctrine\\Common\\Proxy\\ProxyDefinition;
use Doctrine\\Common\\Proxy\\ProxyGenerator;
use Doctrine\\Common\\Util\\ClassUtils;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Persisters\\Entity\\EntityPersister;
use Doctrine\\ORM\\EntityNotFoundException;
use Doctrine\\ORM\\Utility\\IdentifierFlattener;

/**
 * This factory is used to create proxy objects for entities at runtime.
 *
 * @author Roman Borschel <roman@code-factory.org>
 * @author Giorgio Sironi <piccoloprincipeazzurro@gmail.com>
 * @author Marco Pivetta  <ocramius@gmail.com>
 * @since 2.0
 *
 * @deprecated 2.7 This class is being removed from the ORM and won't have any replacement
 */
class ProxyFactory extends AbstractProxyFactory
{
    /**
     * @var EntityManagerInterface The EntityManager this factory is bound to.
     */
    private \$em;

    /**
     * @var \\Doctrine\\ORM\\UnitOfWork The UnitOfWork this factory uses to retrieve persisters
     */
    private \$uow;

    /**
     * @var string
     */
    private \$proxyNs;

    /**
     * The IdentifierFlattener used for manipulating identifiers
     *
     * @var \\Doctrine\\ORM\\Utility\\IdentifierFlattener
     */
    private \$identifierFlattener;

    /**
     * Initializes a new instance of the <tt>ProxyFactory</tt> class that is
     * connected to the given <tt>EntityManager</tt>.
     *
     * @param EntityManagerInterface \$em           The EntityManager the new factory works for.
     * @param string                 \$proxyDir     The directory to use for the proxy classes. It must exist.
     * @param string                 \$proxyNs      The namespace to use for the proxy classes.
     * @param boolean|int            \$autoGenerate The strategy for automatically generating proxy classes. Possible
     *                                             values are constants of Doctrine\\Common\\Proxy\\AbstractProxyFactory.
     */
    public function __construct(EntityManagerInterface \$em, \$proxyDir, \$proxyNs, \$autoGenerate = AbstractProxyFactory::AUTOGENERATE_NEVER)
    {
        \$proxyGenerator = new ProxyGenerator(\$proxyDir, \$proxyNs);

        \$proxyGenerator->setPlaceholder('baseProxyInterface', Proxy::class);
        parent::__construct(\$proxyGenerator, \$em->getMetadataFactory(), \$autoGenerate);

        \$this->em                  = \$em;
        \$this->uow                 = \$em->getUnitOfWork();
        \$this->proxyNs             = \$proxyNs;
        \$this->identifierFlattener = new IdentifierFlattener(\$this->uow, \$em->getMetadataFactory());
    }

    /**
     * {@inheritDoc}
     */
    protected function skipClass(ClassMetadata \$metadata)
    {
        /* @var \$metadata \\Doctrine\\ORM\\Mapping\\ClassMetadataInfo */
        return \$metadata->isMappedSuperclass
            || \$metadata->isEmbeddedClass
            || \$metadata->getReflectionClass()->isAbstract();
    }

    /**
     * {@inheritDoc}
     */
    protected function createProxyDefinition(\$className)
    {
        \$classMetadata   = \$this->em->getClassMetadata(\$className);
        \$entityPersister = \$this->uow->getEntityPersister(\$className);

        return new ProxyDefinition(
            ClassUtils::generateProxyClassName(\$className, \$this->proxyNs),
            \$classMetadata->getIdentifierFieldNames(),
            \$classMetadata->getReflectionProperties(),
            \$this->createInitializer(\$classMetadata, \$entityPersister),
            \$this->createCloner(\$classMetadata, \$entityPersister)
        );
    }

    /**
     * Creates a closure capable of initializing a proxy
     *
     * @param \\Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata \$classMetadata
     * @param \\Doctrine\\ORM\\Persisters\\Entity\\EntityPersister    \$entityPersister
     *
     * @return \\Closure
     *
     * @throws \\Doctrine\\ORM\\EntityNotFoundException
     */
    private function createInitializer(ClassMetadata \$classMetadata, EntityPersister \$entityPersister)
    {
        \$wakeupProxy = \$classMetadata->getReflectionClass()->hasMethod('__wakeup');

        return function (BaseProxy \$proxy) use (\$entityPersister, \$classMetadata, \$wakeupProxy) {
            \$initializer = \$proxy->__getInitializer();
            \$cloner      = \$proxy->__getCloner();

            \$proxy->__setInitializer(null);
            \$proxy->__setCloner(null);

            if (\$proxy->__isInitialized()) {
                return;
            }

            \$properties = \$proxy->__getLazyProperties();

            foreach (\$properties as \$propertyName => \$property) {
                if ( ! isset(\$proxy->\$propertyName)) {
                    \$proxy->\$propertyName = \$properties[\$propertyName];
                }
            }

            \$proxy->__setInitialized(true);

            if (\$wakeupProxy) {
                \$proxy->__wakeup();
            }

            \$identifier = \$classMetadata->getIdentifierValues(\$proxy);

            if (null === \$entityPersister->loadById(\$identifier, \$proxy)) {
                \$proxy->__setInitializer(\$initializer);
                \$proxy->__setCloner(\$cloner);
                \$proxy->__setInitialized(false);

                throw EntityNotFoundException::fromClassNameAndIdentifier(
                    \$classMetadata->getName(),
                    \$this->identifierFlattener->flattenIdentifier(\$classMetadata, \$identifier)
                );
            }
        };
    }

    /**
     * Creates a closure capable of finalizing state a cloned proxy
     *
     * @param \\Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata \$classMetadata
     * @param \\Doctrine\\ORM\\Persisters\\Entity\\EntityPersister    \$entityPersister
     *
     * @return \\Closure
     *
     * @throws \\Doctrine\\ORM\\EntityNotFoundException
     */
    private function createCloner(ClassMetadata \$classMetadata, EntityPersister \$entityPersister)
    {
        return function (BaseProxy \$proxy) use (\$entityPersister, \$classMetadata) {
            if (\$proxy->__isInitialized()) {
                return;
            }

            \$proxy->__setInitialized(true);
            \$proxy->__setInitializer(null);

            \$class      = \$entityPersister->getClassMetadata();
            \$identifier = \$classMetadata->getIdentifierValues(\$proxy);
            \$original   = \$entityPersister->loadById(\$identifier);

            if (null === \$original) {
                throw EntityNotFoundException::fromClassNameAndIdentifier(
                    \$classMetadata->getName(),
                    \$this->identifierFlattener->flattenIdentifier(\$classMetadata, \$identifier)
                );
            }

            foreach (\$class->getReflectionProperties() as \$property) {
                if ( ! \$class->hasField(\$property->name) && ! \$class->hasAssociation(\$property->name)) {
                    continue;
                }

                \$property->setAccessible(true);
                \$property->setValue(\$proxy, \$property->getValue(\$original));
            }
        };
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Proxy/ProxyFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Proxy;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Proxy\\AbstractProxyFactory;
use Doctrine\\Common\\Proxy\\Proxy as BaseProxy;
use Doctrine\\Common\\Proxy\\ProxyDefinition;
use Doctrine\\Common\\Proxy\\ProxyGenerator;
use Doctrine\\Common\\Util\\ClassUtils;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Persisters\\Entity\\EntityPersister;
use Doctrine\\ORM\\EntityNotFoundException;
use Doctrine\\ORM\\Utility\\IdentifierFlattener;

/**
 * This factory is used to create proxy objects for entities at runtime.
 *
 * @author Roman Borschel <roman@code-factory.org>
 * @author Giorgio Sironi <piccoloprincipeazzurro@gmail.com>
 * @author Marco Pivetta  <ocramius@gmail.com>
 * @since 2.0
 *
 * @deprecated 2.7 This class is being removed from the ORM and won't have any replacement
 */
class ProxyFactory extends AbstractProxyFactory
{
    /**
     * @var EntityManagerInterface The EntityManager this factory is bound to.
     */
    private \$em;

    /**
     * @var \\Doctrine\\ORM\\UnitOfWork The UnitOfWork this factory uses to retrieve persisters
     */
    private \$uow;

    /**
     * @var string
     */
    private \$proxyNs;

    /**
     * The IdentifierFlattener used for manipulating identifiers
     *
     * @var \\Doctrine\\ORM\\Utility\\IdentifierFlattener
     */
    private \$identifierFlattener;

    /**
     * Initializes a new instance of the <tt>ProxyFactory</tt> class that is
     * connected to the given <tt>EntityManager</tt>.
     *
     * @param EntityManagerInterface \$em           The EntityManager the new factory works for.
     * @param string                 \$proxyDir     The directory to use for the proxy classes. It must exist.
     * @param string                 \$proxyNs      The namespace to use for the proxy classes.
     * @param boolean|int            \$autoGenerate The strategy for automatically generating proxy classes. Possible
     *                                             values are constants of Doctrine\\Common\\Proxy\\AbstractProxyFactory.
     */
    public function __construct(EntityManagerInterface \$em, \$proxyDir, \$proxyNs, \$autoGenerate = AbstractProxyFactory::AUTOGENERATE_NEVER)
    {
        \$proxyGenerator = new ProxyGenerator(\$proxyDir, \$proxyNs);

        \$proxyGenerator->setPlaceholder('baseProxyInterface', Proxy::class);
        parent::__construct(\$proxyGenerator, \$em->getMetadataFactory(), \$autoGenerate);

        \$this->em                  = \$em;
        \$this->uow                 = \$em->getUnitOfWork();
        \$this->proxyNs             = \$proxyNs;
        \$this->identifierFlattener = new IdentifierFlattener(\$this->uow, \$em->getMetadataFactory());
    }

    /**
     * {@inheritDoc}
     */
    protected function skipClass(ClassMetadata \$metadata)
    {
        /* @var \$metadata \\Doctrine\\ORM\\Mapping\\ClassMetadataInfo */
        return \$metadata->isMappedSuperclass
            || \$metadata->isEmbeddedClass
            || \$metadata->getReflectionClass()->isAbstract();
    }

    /**
     * {@inheritDoc}
     */
    protected function createProxyDefinition(\$className)
    {
        \$classMetadata   = \$this->em->getClassMetadata(\$className);
        \$entityPersister = \$this->uow->getEntityPersister(\$className);

        return new ProxyDefinition(
            ClassUtils::generateProxyClassName(\$className, \$this->proxyNs),
            \$classMetadata->getIdentifierFieldNames(),
            \$classMetadata->getReflectionProperties(),
            \$this->createInitializer(\$classMetadata, \$entityPersister),
            \$this->createCloner(\$classMetadata, \$entityPersister)
        );
    }

    /**
     * Creates a closure capable of initializing a proxy
     *
     * @param \\Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata \$classMetadata
     * @param \\Doctrine\\ORM\\Persisters\\Entity\\EntityPersister    \$entityPersister
     *
     * @return \\Closure
     *
     * @throws \\Doctrine\\ORM\\EntityNotFoundException
     */
    private function createInitializer(ClassMetadata \$classMetadata, EntityPersister \$entityPersister)
    {
        \$wakeupProxy = \$classMetadata->getReflectionClass()->hasMethod('__wakeup');

        return function (BaseProxy \$proxy) use (\$entityPersister, \$classMetadata, \$wakeupProxy) {
            \$initializer = \$proxy->__getInitializer();
            \$cloner      = \$proxy->__getCloner();

            \$proxy->__setInitializer(null);
            \$proxy->__setCloner(null);

            if (\$proxy->__isInitialized()) {
                return;
            }

            \$properties = \$proxy->__getLazyProperties();

            foreach (\$properties as \$propertyName => \$property) {
                if ( ! isset(\$proxy->\$propertyName)) {
                    \$proxy->\$propertyName = \$properties[\$propertyName];
                }
            }

            \$proxy->__setInitialized(true);

            if (\$wakeupProxy) {
                \$proxy->__wakeup();
            }

            \$identifier = \$classMetadata->getIdentifierValues(\$proxy);

            if (null === \$entityPersister->loadById(\$identifier, \$proxy)) {
                \$proxy->__setInitializer(\$initializer);
                \$proxy->__setCloner(\$cloner);
                \$proxy->__setInitialized(false);

                throw EntityNotFoundException::fromClassNameAndIdentifier(
                    \$classMetadata->getName(),
                    \$this->identifierFlattener->flattenIdentifier(\$classMetadata, \$identifier)
                );
            }
        };
    }

    /**
     * Creates a closure capable of finalizing state a cloned proxy
     *
     * @param \\Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata \$classMetadata
     * @param \\Doctrine\\ORM\\Persisters\\Entity\\EntityPersister    \$entityPersister
     *
     * @return \\Closure
     *
     * @throws \\Doctrine\\ORM\\EntityNotFoundException
     */
    private function createCloner(ClassMetadata \$classMetadata, EntityPersister \$entityPersister)
    {
        return function (BaseProxy \$proxy) use (\$entityPersister, \$classMetadata) {
            if (\$proxy->__isInitialized()) {
                return;
            }

            \$proxy->__setInitialized(true);
            \$proxy->__setInitializer(null);

            \$class      = \$entityPersister->getClassMetadata();
            \$identifier = \$classMetadata->getIdentifierValues(\$proxy);
            \$original   = \$entityPersister->loadById(\$identifier);

            if (null === \$original) {
                throw EntityNotFoundException::fromClassNameAndIdentifier(
                    \$classMetadata->getName(),
                    \$this->identifierFlattener->flattenIdentifier(\$classMetadata, \$identifier)
                );
            }

            foreach (\$class->getReflectionProperties() as \$property) {
                if ( ! \$class->hasField(\$property->name) && ! \$class->hasAssociation(\$property->name)) {
                    continue;
                }

                \$property->setAccessible(true);
                \$property->setValue(\$proxy, \$property->getValue(\$original));
            }
        };
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Proxy/ProxyFactory.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Proxy\\ProxyFactory.php");
    }
}
