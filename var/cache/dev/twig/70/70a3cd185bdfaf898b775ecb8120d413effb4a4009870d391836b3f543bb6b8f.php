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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCollectionHydrator.php */
class __TwigTemplate_6aa1783ed5815ea9bb8c02410f13460bd021729916da34c4ba91420172409f9b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCollectionHydrator.php"));

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

namespace Doctrine\\ORM\\Cache;

use Doctrine\\ORM\\Query;
use Doctrine\\ORM\\PersistentCollection;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\EntityManagerInterface;

/**
 * Default hydrator cache for collections
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class DefaultCollectionHydrator implements CollectionHydrator
{
    /**
     * @var \\Doctrine\\ORM\\EntityManagerInterface
     */
    private \$em;

    /**
     * @var \\Doctrine\\ORM\\UnitOfWork
     */
    private \$uow;

    /**
     * @var array
     */
    private static \$hints = [Query::HINT_CACHE_ENABLED => true];

    /**
     * @param \\Doctrine\\ORM\\EntityManagerInterface \$em The entity manager.
     */
    public function __construct(EntityManagerInterface \$em)
    {
        \$this->em  = \$em;
        \$this->uow = \$em->getUnitOfWork();
    }

    /**
     * {@inheritdoc}
     */
    public function buildCacheEntry(ClassMetadata \$metadata, CollectionCacheKey \$key, \$collection)
    {
        \$data = [];

        foreach (\$collection as \$index => \$entity) {
            \$data[\$index] = new EntityCacheKey(\$metadata->rootEntityName, \$this->uow->getEntityIdentifier(\$entity));
        }

        return new CollectionCacheEntry(\$data);
    }

    /**
     * {@inheritdoc}
     */
    public function loadCacheEntry(ClassMetadata \$metadata, CollectionCacheKey \$key, CollectionCacheEntry \$entry, PersistentCollection \$collection)
    {
        \$assoc           = \$metadata->associationMappings[\$key->association];
        /* @var \$targetPersister \\Doctrine\\ORM\\Cache\\Persister\\CachedPersister */
        \$targetPersister = \$this->uow->getEntityPersister(\$assoc['targetEntity']);
        \$targetRegion    = \$targetPersister->getCacheRegion();
        \$list            = [];

        \$entityEntries = \$targetRegion->getMultiple(\$entry);

        if (\$entityEntries === null) {
            return null;
        }

        /* @var \$entityEntries \\Doctrine\\ORM\\Cache\\EntityCacheEntry[] */
        foreach (\$entityEntries as \$index => \$entityEntry) {
            \$list[\$index] = \$this->uow->createEntity(\$entityEntry->class, \$entityEntry->resolveAssociationEntries(\$this->em), self::\$hints);
        }

        array_walk(\$list, function(\$entity, \$index) use (\$collection) {
            \$collection->hydrateSet(\$index, \$entity);
        });

        \$this->uow->hydrationComplete();

        return \$list;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCollectionHydrator.php";
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

namespace Doctrine\\ORM\\Cache;

use Doctrine\\ORM\\Query;
use Doctrine\\ORM\\PersistentCollection;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\EntityManagerInterface;

/**
 * Default hydrator cache for collections
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class DefaultCollectionHydrator implements CollectionHydrator
{
    /**
     * @var \\Doctrine\\ORM\\EntityManagerInterface
     */
    private \$em;

    /**
     * @var \\Doctrine\\ORM\\UnitOfWork
     */
    private \$uow;

    /**
     * @var array
     */
    private static \$hints = [Query::HINT_CACHE_ENABLED => true];

    /**
     * @param \\Doctrine\\ORM\\EntityManagerInterface \$em The entity manager.
     */
    public function __construct(EntityManagerInterface \$em)
    {
        \$this->em  = \$em;
        \$this->uow = \$em->getUnitOfWork();
    }

    /**
     * {@inheritdoc}
     */
    public function buildCacheEntry(ClassMetadata \$metadata, CollectionCacheKey \$key, \$collection)
    {
        \$data = [];

        foreach (\$collection as \$index => \$entity) {
            \$data[\$index] = new EntityCacheKey(\$metadata->rootEntityName, \$this->uow->getEntityIdentifier(\$entity));
        }

        return new CollectionCacheEntry(\$data);
    }

    /**
     * {@inheritdoc}
     */
    public function loadCacheEntry(ClassMetadata \$metadata, CollectionCacheKey \$key, CollectionCacheEntry \$entry, PersistentCollection \$collection)
    {
        \$assoc           = \$metadata->associationMappings[\$key->association];
        /* @var \$targetPersister \\Doctrine\\ORM\\Cache\\Persister\\CachedPersister */
        \$targetPersister = \$this->uow->getEntityPersister(\$assoc['targetEntity']);
        \$targetRegion    = \$targetPersister->getCacheRegion();
        \$list            = [];

        \$entityEntries = \$targetRegion->getMultiple(\$entry);

        if (\$entityEntries === null) {
            return null;
        }

        /* @var \$entityEntries \\Doctrine\\ORM\\Cache\\EntityCacheEntry[] */
        foreach (\$entityEntries as \$index => \$entityEntry) {
            \$list[\$index] = \$this->uow->createEntity(\$entityEntry->class, \$entityEntry->resolveAssociationEntries(\$this->em), self::\$hints);
        }

        array_walk(\$list, function(\$entity, \$index) use (\$collection) {
            \$collection->hydrateSet(\$index, \$entity);
        });

        \$this->uow->hydrationComplete();

        return \$list;
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCollectionHydrator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Cache\\DefaultCollectionHydrator.php");
    }
}
