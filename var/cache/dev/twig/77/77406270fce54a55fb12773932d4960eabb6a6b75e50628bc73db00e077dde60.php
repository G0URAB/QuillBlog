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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CollectionHydrator.php */
class __TwigTemplate_9f3840e37a6fe7ced88ae58c6d239b1d29ee223f18c8a2417a7c8987300fc19c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CollectionHydrator.php"));

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

use Doctrine\\ORM\\PersistentCollection;
use Doctrine\\ORM\\Mapping\\ClassMetadata;

/**
 * Hydrator cache entry for collections
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface CollectionHydrator
{
    /**
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata           \$metadata   The entity metadata.
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheKey        \$key        The cached collection key.
     * @param array|\\Doctrine\\Common\\Collections\\Collection \$collection The collection.
     *
     * @return \\Doctrine\\ORM\\Cache\\CollectionCacheEntry
     */
    public function buildCacheEntry(ClassMetadata \$metadata, CollectionCacheKey \$key, \$collection);

    /**
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata      \$metadata   The owning entity metadata.
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheKey   \$key        The cached collection key.
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheEntry \$entry      The cached collection entry.
     * @param \\Doctrine\\ORM\\PersistentCollection       \$collection The collection to load the cache into.
     *
     * @return array
     */
    public function loadCacheEntry(ClassMetadata \$metadata, CollectionCacheKey \$key, CollectionCacheEntry \$entry, PersistentCollection \$collection);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CollectionHydrator.php";
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

use Doctrine\\ORM\\PersistentCollection;
use Doctrine\\ORM\\Mapping\\ClassMetadata;

/**
 * Hydrator cache entry for collections
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface CollectionHydrator
{
    /**
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata           \$metadata   The entity metadata.
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheKey        \$key        The cached collection key.
     * @param array|\\Doctrine\\Common\\Collections\\Collection \$collection The collection.
     *
     * @return \\Doctrine\\ORM\\Cache\\CollectionCacheEntry
     */
    public function buildCacheEntry(ClassMetadata \$metadata, CollectionCacheKey \$key, \$collection);

    /**
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata      \$metadata   The owning entity metadata.
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheKey   \$key        The cached collection key.
     * @param \\Doctrine\\ORM\\Cache\\CollectionCacheEntry \$entry      The cached collection entry.
     * @param \\Doctrine\\ORM\\PersistentCollection       \$collection The collection to load the cache into.
     *
     * @return array
     */
    public function loadCacheEntry(ClassMetadata \$metadata, CollectionCacheKey \$key, CollectionCacheEntry \$entry, PersistentCollection \$collection);
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CollectionHydrator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Cache\\CollectionHydrator.php");
    }
}
