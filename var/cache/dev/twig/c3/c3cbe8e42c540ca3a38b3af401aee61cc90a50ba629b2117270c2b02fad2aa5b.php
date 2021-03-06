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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/NonStrictReadWriteCachedCollectionPersister.php */
class __TwigTemplate_1f08d519b3d8f17a89c902188703e96ebb32adac6f52c60dc96b698f5d32c448 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/NonStrictReadWriteCachedCollectionPersister.php"));

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

namespace Doctrine\\ORM\\Cache\\Persister\\Collection;

use Doctrine\\ORM\\Cache\\CollectionCacheKey;
use Doctrine\\ORM\\PersistentCollection;

/**
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 * @since 2.5
 */
class NonStrictReadWriteCachedCollectionPersister extends AbstractCollectionPersister
{
    /**
     * {@inheritdoc}
     */
    public function afterTransactionComplete()
    {
        if (isset(\$this->queuedCache['update'])) {
            foreach (\$this->queuedCache['update'] as \$item) {
                \$this->storeCollectionCache(\$item['key'], \$item['list']);
            }
        }

        if (isset(\$this->queuedCache['delete'])) {
            foreach (\$this->queuedCache['delete'] as \$key) {
                \$this->region->evict(\$key);
            }
        }

        \$this->queuedCache = [];
    }

    /**
     * {@inheritdoc}
     */
    public function afterTransactionRolledBack()
    {
        \$this->queuedCache = [];
    }

    /**
     * {@inheritdoc}
     */
    public function delete(PersistentCollection \$collection)
    {
        \$ownerId = \$this->uow->getEntityIdentifier(\$collection->getOwner());
        \$key     = new CollectionCacheKey(\$this->sourceEntity->rootEntityName, \$this->association['fieldName'], \$ownerId);

        \$this->persister->delete(\$collection);

        \$this->queuedCache['delete'][spl_object_hash(\$collection)] = \$key;
    }

    /**
     * {@inheritdoc}
     */
    public function update(PersistentCollection \$collection)
    {
        \$isInitialized = \$collection->isInitialized();
        \$isDirty       = \$collection->isDirty();

        if ( ! \$isInitialized && ! \$isDirty) {
            return;
        }

        \$ownerId = \$this->uow->getEntityIdentifier(\$collection->getOwner());
        \$key     = new CollectionCacheKey(\$this->sourceEntity->rootEntityName, \$this->association['fieldName'], \$ownerId);

       // Invalidate non initialized collections OR ordered collection
        if (\$isDirty && ! \$isInitialized || isset(\$this->association['orderBy'])) {
            \$this->persister->update(\$collection);

            \$this->queuedCache['delete'][spl_object_hash(\$collection)] = \$key;

            return;
        }

        \$this->persister->update(\$collection);

        \$this->queuedCache['update'][spl_object_hash(\$collection)] = [
            'key'   => \$key,
            'list'  => \$collection
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/NonStrictReadWriteCachedCollectionPersister.php";
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

namespace Doctrine\\ORM\\Cache\\Persister\\Collection;

use Doctrine\\ORM\\Cache\\CollectionCacheKey;
use Doctrine\\ORM\\PersistentCollection;

/**
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 * @since 2.5
 */
class NonStrictReadWriteCachedCollectionPersister extends AbstractCollectionPersister
{
    /**
     * {@inheritdoc}
     */
    public function afterTransactionComplete()
    {
        if (isset(\$this->queuedCache['update'])) {
            foreach (\$this->queuedCache['update'] as \$item) {
                \$this->storeCollectionCache(\$item['key'], \$item['list']);
            }
        }

        if (isset(\$this->queuedCache['delete'])) {
            foreach (\$this->queuedCache['delete'] as \$key) {
                \$this->region->evict(\$key);
            }
        }

        \$this->queuedCache = [];
    }

    /**
     * {@inheritdoc}
     */
    public function afterTransactionRolledBack()
    {
        \$this->queuedCache = [];
    }

    /**
     * {@inheritdoc}
     */
    public function delete(PersistentCollection \$collection)
    {
        \$ownerId = \$this->uow->getEntityIdentifier(\$collection->getOwner());
        \$key     = new CollectionCacheKey(\$this->sourceEntity->rootEntityName, \$this->association['fieldName'], \$ownerId);

        \$this->persister->delete(\$collection);

        \$this->queuedCache['delete'][spl_object_hash(\$collection)] = \$key;
    }

    /**
     * {@inheritdoc}
     */
    public function update(PersistentCollection \$collection)
    {
        \$isInitialized = \$collection->isInitialized();
        \$isDirty       = \$collection->isDirty();

        if ( ! \$isInitialized && ! \$isDirty) {
            return;
        }

        \$ownerId = \$this->uow->getEntityIdentifier(\$collection->getOwner());
        \$key     = new CollectionCacheKey(\$this->sourceEntity->rootEntityName, \$this->association['fieldName'], \$ownerId);

       // Invalidate non initialized collections OR ordered collection
        if (\$isDirty && ! \$isInitialized || isset(\$this->association['orderBy'])) {
            \$this->persister->update(\$collection);

            \$this->queuedCache['delete'][spl_object_hash(\$collection)] = \$key;

            return;
        }

        \$this->persister->update(\$collection);

        \$this->queuedCache['update'][spl_object_hash(\$collection)] = [
            'key'   => \$key,
            'list'  => \$collection
        ];
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/NonStrictReadWriteCachedCollectionPersister.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Cache\\Persister\\Collection\\NonStrictReadWriteCachedCollectionPersister.php");
    }
}
