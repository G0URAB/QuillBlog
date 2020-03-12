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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Logging/CacheLogger.php */
class __TwigTemplate_9af6812a0def3bc003c1e35c6faacc4dfecb9942d6dd9fb03105aff0217f9066 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Logging/CacheLogger.php"));

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

namespace Doctrine\\ORM\\Cache\\Logging;

use Doctrine\\ORM\\Cache\\CollectionCacheKey;
use Doctrine\\ORM\\Cache\\EntityCacheKey;
use Doctrine\\ORM\\Cache\\QueryCacheKey;

/**
 * Interface for logging.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface CacheLogger
{
    /**
     * Log an entity put into second level cache.
     *
     * @param string                             \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\EntityCacheKey \$key        The cache key of the entity.
     */
    public function entityCachePut(\$regionName, EntityCacheKey \$key);

    /**
     * Log an entity get from second level cache resulted in a hit.
     *
     * @param string                             \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\EntityCacheKey \$key        The cache key of the entity.
     */
    public function entityCacheHit(\$regionName, EntityCacheKey \$key);

    /**
     * Log an entity get from second level cache resulted in a miss.
     *
     * @param string                             \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\EntityCacheKey \$key        The cache key of the entity.
     */
    public function entityCacheMiss(\$regionName, EntityCacheKey \$key);

     /**
     * Log an entity put into second level cache.
     *
     * @param string                                 \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheKey \$key        The cache key of the collection.
     */
    public function collectionCachePut(\$regionName, CollectionCacheKey \$key);

    /**
     * Log an entity get from second level cache resulted in a hit.
     *
     * @param string                                 \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheKey \$key        The cache key of the collection.
     */
    public function collectionCacheHit(\$regionName, CollectionCacheKey \$key);

    /**
     * Log an entity get from second level cache resulted in a miss.
     *
     * @param string                                 \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheKey \$key        The cache key of the collection.
     */
    public function collectionCacheMiss(\$regionName, CollectionCacheKey \$key);

    /**
     * Log a query put into the query cache.
     *
     * @param string                            \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\QueryCacheKey \$key        The cache key of the query.
     */
    public function queryCachePut(\$regionName, QueryCacheKey \$key);

    /**
     * Log a query get from the query cache resulted in a hit.
     *
     * @param string                            \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\QueryCacheKey \$key        The cache key of the query.
     */
    public function queryCacheHit(\$regionName, QueryCacheKey \$key);

    /**
     * Log a query get from the query cache resulted in a miss.
     *
     * @param string                            \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\QueryCacheKey \$key        The cache key of the query.
     */
    public function queryCacheMiss(\$regionName, QueryCacheKey \$key);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Logging/CacheLogger.php";
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

namespace Doctrine\\ORM\\Cache\\Logging;

use Doctrine\\ORM\\Cache\\CollectionCacheKey;
use Doctrine\\ORM\\Cache\\EntityCacheKey;
use Doctrine\\ORM\\Cache\\QueryCacheKey;

/**
 * Interface for logging.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface CacheLogger
{
    /**
     * Log an entity put into second level cache.
     *
     * @param string                             \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\EntityCacheKey \$key        The cache key of the entity.
     */
    public function entityCachePut(\$regionName, EntityCacheKey \$key);

    /**
     * Log an entity get from second level cache resulted in a hit.
     *
     * @param string                             \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\EntityCacheKey \$key        The cache key of the entity.
     */
    public function entityCacheHit(\$regionName, EntityCacheKey \$key);

    /**
     * Log an entity get from second level cache resulted in a miss.
     *
     * @param string                             \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\EntityCacheKey \$key        The cache key of the entity.
     */
    public function entityCacheMiss(\$regionName, EntityCacheKey \$key);

     /**
     * Log an entity put into second level cache.
     *
     * @param string                                 \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheKey \$key        The cache key of the collection.
     */
    public function collectionCachePut(\$regionName, CollectionCacheKey \$key);

    /**
     * Log an entity get from second level cache resulted in a hit.
     *
     * @param string                                 \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheKey \$key        The cache key of the collection.
     */
    public function collectionCacheHit(\$regionName, CollectionCacheKey \$key);

    /**
     * Log an entity get from second level cache resulted in a miss.
     *
     * @param string                                 \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheKey \$key        The cache key of the collection.
     */
    public function collectionCacheMiss(\$regionName, CollectionCacheKey \$key);

    /**
     * Log a query put into the query cache.
     *
     * @param string                            \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\QueryCacheKey \$key        The cache key of the query.
     */
    public function queryCachePut(\$regionName, QueryCacheKey \$key);

    /**
     * Log a query get from the query cache resulted in a hit.
     *
     * @param string                            \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\QueryCacheKey \$key        The cache key of the query.
     */
    public function queryCacheHit(\$regionName, QueryCacheKey \$key);

    /**
     * Log a query get from the query cache resulted in a miss.
     *
     * @param string                            \$regionName The name of the cache region.
     * @param \\Doctrine\\ORM\\Cache\\QueryCacheKey \$key        The cache key of the query.
     */
    public function queryCacheMiss(\$regionName, QueryCacheKey \$key);
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Logging/CacheLogger.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Cache\\Logging\\CacheLogger.php");
    }
}
