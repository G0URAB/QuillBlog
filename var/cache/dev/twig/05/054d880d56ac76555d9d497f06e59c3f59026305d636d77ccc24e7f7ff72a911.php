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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/CachedCollectionPersister.php */
class __TwigTemplate_38e052ab927cc24463658e9351e51508f7739c25c5a2f515646c53dbd808d27a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/CachedCollectionPersister.php"));

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
use Doctrine\\ORM\\Cache\\Persister\\CachedPersister;
use Doctrine\\ORM\\Persisters\\Collection\\CollectionPersister;
use Doctrine\\ORM\\PersistentCollection;

/**
 * Interface for second level cache collection persisters.
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 * @since 2.5
 */
interface CachedCollectionPersister extends CachedPersister, CollectionPersister
{
    /**
     * @return \\Doctrine\\ORM\\Mapping\\ClassMetadata
     */
    public function getSourceEntityMetadata();

    /**
     * @return \\Doctrine\\ORM\\Mapping\\ClassMetadata
     */
    public function getTargetEntityMetadata();

    /**
     * Loads a collection from cache
     *
     * @param \\Doctrine\\ORM\\PersistentCollection     \$collection
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheKey \$key
     *
     * @return \\Doctrine\\ORM\\PersistentCollection|null
     */
    public function loadCollectionCache(PersistentCollection \$collection, CollectionCacheKey \$key);

    /**
     * Stores a collection into cache
     *
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheKey        \$key
     * @param array|\\Doctrine\\Common\\Collections\\Collection \$elements
     *
     * @return void
     */
    public function storeCollectionCache(CollectionCacheKey \$key, \$elements);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/CachedCollectionPersister.php";
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
use Doctrine\\ORM\\Cache\\Persister\\CachedPersister;
use Doctrine\\ORM\\Persisters\\Collection\\CollectionPersister;
use Doctrine\\ORM\\PersistentCollection;

/**
 * Interface for second level cache collection persisters.
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 * @since 2.5
 */
interface CachedCollectionPersister extends CachedPersister, CollectionPersister
{
    /**
     * @return \\Doctrine\\ORM\\Mapping\\ClassMetadata
     */
    public function getSourceEntityMetadata();

    /**
     * @return \\Doctrine\\ORM\\Mapping\\ClassMetadata
     */
    public function getTargetEntityMetadata();

    /**
     * Loads a collection from cache
     *
     * @param \\Doctrine\\ORM\\PersistentCollection     \$collection
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheKey \$key
     *
     * @return \\Doctrine\\ORM\\PersistentCollection|null
     */
    public function loadCollectionCache(PersistentCollection \$collection, CollectionCacheKey \$key);

    /**
     * Stores a collection into cache
     *
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheKey        \$key
     * @param array|\\Doctrine\\Common\\Collections\\Collection \$elements
     *
     * @return void
     */
    public function storeCollectionCache(CollectionCacheKey \$key, \$elements);
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/CachedCollectionPersister.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Cache\\Persister\\Collection\\CachedCollectionPersister.php");
    }
}
