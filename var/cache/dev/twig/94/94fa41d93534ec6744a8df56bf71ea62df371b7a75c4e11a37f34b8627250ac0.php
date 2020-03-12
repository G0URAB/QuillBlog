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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/NonStrictReadWriteCachedEntityPersister.php */
class __TwigTemplate_b90831ae7f568d58b1829ad3366753de343d84b308cdbcf6e494547993790841 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/NonStrictReadWriteCachedEntityPersister.php"));

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

namespace Doctrine\\ORM\\Cache\\Persister\\Entity;

use Doctrine\\ORM\\Cache\\EntityCacheKey;

/**
 * Specific non-strict read/write cached entity persister
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @since  2.5
 */
class NonStrictReadWriteCachedEntityPersister extends AbstractEntityPersister
{
    /**
     * {@inheritdoc}
     */
    public function afterTransactionComplete()
    {
        \$isChanged = false;

        if (isset(\$this->queuedCache['insert'])) {
            foreach (\$this->queuedCache['insert'] as \$entity) {
                \$isChanged = \$this->updateCache(\$entity, \$isChanged);
            }
        }

        if (isset(\$this->queuedCache['update'])) {
            foreach (\$this->queuedCache['update'] as \$entity) {
                \$isChanged = \$this->updateCache(\$entity, \$isChanged);
            }
        }

        if (isset(\$this->queuedCache['delete'])) {
            foreach (\$this->queuedCache['delete'] as \$key) {
                \$this->region->evict(\$key);

                \$isChanged = true;
            }
        }

        if (\$isChanged) {
            \$this->timestampRegion->update(\$this->timestampKey);
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
    public function delete(\$entity)
    {
        \$key     = new EntityCacheKey(\$this->class->rootEntityName, \$this->uow->getEntityIdentifier(\$entity));
        \$deleted = \$this->persister->delete(\$entity);

        if (\$deleted) {
            \$this->region->evict(\$key);
        }

        \$this->queuedCache['delete'][] = \$key;

        return \$deleted;
    }

    /**
     * {@inheritdoc}
     */
    public function update(\$entity)
    {
        \$this->persister->update(\$entity);

        \$this->queuedCache['update'][] = \$entity;
    }

    private function updateCache(\$entity, \$isChanged)
    {
        \$class      = \$this->metadataFactory->getMetadataFor(get_class(\$entity));
        \$key        = new EntityCacheKey(\$class->rootEntityName, \$this->uow->getEntityIdentifier(\$entity));
        \$entry      = \$this->hydrator->buildCacheEntry(\$class, \$key, \$entity);
        \$cached     = \$this->region->put(\$key, \$entry);
        \$isChanged  = \$isChanged ?: \$cached;

        if (\$this->cacheLogger && \$cached) {
            \$this->cacheLogger->entityCachePut(\$this->regionName, \$key);
        }

        return \$isChanged;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/NonStrictReadWriteCachedEntityPersister.php";
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

namespace Doctrine\\ORM\\Cache\\Persister\\Entity;

use Doctrine\\ORM\\Cache\\EntityCacheKey;

/**
 * Specific non-strict read/write cached entity persister
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @since  2.5
 */
class NonStrictReadWriteCachedEntityPersister extends AbstractEntityPersister
{
    /**
     * {@inheritdoc}
     */
    public function afterTransactionComplete()
    {
        \$isChanged = false;

        if (isset(\$this->queuedCache['insert'])) {
            foreach (\$this->queuedCache['insert'] as \$entity) {
                \$isChanged = \$this->updateCache(\$entity, \$isChanged);
            }
        }

        if (isset(\$this->queuedCache['update'])) {
            foreach (\$this->queuedCache['update'] as \$entity) {
                \$isChanged = \$this->updateCache(\$entity, \$isChanged);
            }
        }

        if (isset(\$this->queuedCache['delete'])) {
            foreach (\$this->queuedCache['delete'] as \$key) {
                \$this->region->evict(\$key);

                \$isChanged = true;
            }
        }

        if (\$isChanged) {
            \$this->timestampRegion->update(\$this->timestampKey);
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
    public function delete(\$entity)
    {
        \$key     = new EntityCacheKey(\$this->class->rootEntityName, \$this->uow->getEntityIdentifier(\$entity));
        \$deleted = \$this->persister->delete(\$entity);

        if (\$deleted) {
            \$this->region->evict(\$key);
        }

        \$this->queuedCache['delete'][] = \$key;

        return \$deleted;
    }

    /**
     * {@inheritdoc}
     */
    public function update(\$entity)
    {
        \$this->persister->update(\$entity);

        \$this->queuedCache['update'][] = \$entity;
    }

    private function updateCache(\$entity, \$isChanged)
    {
        \$class      = \$this->metadataFactory->getMetadataFor(get_class(\$entity));
        \$key        = new EntityCacheKey(\$class->rootEntityName, \$this->uow->getEntityIdentifier(\$entity));
        \$entry      = \$this->hydrator->buildCacheEntry(\$class, \$key, \$entity);
        \$cached     = \$this->region->put(\$key, \$entry);
        \$isChanged  = \$isChanged ?: \$cached;

        if (\$this->cacheLogger && \$cached) {
            \$this->cacheLogger->entityCachePut(\$this->regionName, \$key);
        }

        return \$isChanged;
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/NonStrictReadWriteCachedEntityPersister.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Cache\\Persister\\Entity\\NonStrictReadWriteCachedEntityPersister.php");
    }
}
