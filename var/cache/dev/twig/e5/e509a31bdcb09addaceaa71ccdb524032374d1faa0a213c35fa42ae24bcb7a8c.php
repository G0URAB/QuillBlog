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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/QueryCache.php */
class __TwigTemplate_a4dfeccdbd198fe6fc8f6084b41abdcdc564b6ce7f9471d475e1e9c3267ed316 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/QueryCache.php"));

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

use Doctrine\\ORM\\Query\\ResultSetMapping;

/**
 * Defines the contract for caches capable of storing query results.
 * These caches should only concern themselves with storing the matching result ids.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface QueryCache
{
    /**
     * @return boolean
     */
    public function clear();

    /**
     * @param \\Doctrine\\ORM\\Cache\\QueryCacheKey    \$key
     * @param \\Doctrine\\ORM\\Query\\ResultSetMapping \$rsm
     * @param mixed                                \$result
     * @param array                                \$hints
     *
     * @return boolean
     */
    public function put(QueryCacheKey \$key, ResultSetMapping \$rsm, \$result, array \$hints = []);

    /**
     * @param \\Doctrine\\ORM\\Cache\\QueryCacheKey     \$key
     * @param \\Doctrine\\ORM\\Query\\ResultSetMapping  \$rsm
     * @param array                                 \$hints
     *
     * @return array|null
     */
    public function get(QueryCacheKey \$key, ResultSetMapping \$rsm, array \$hints = []);

    /**
     * @return \\Doctrine\\ORM\\Cache\\Region
     */
    public function getRegion();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/QueryCache.php";
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

use Doctrine\\ORM\\Query\\ResultSetMapping;

/**
 * Defines the contract for caches capable of storing query results.
 * These caches should only concern themselves with storing the matching result ids.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface QueryCache
{
    /**
     * @return boolean
     */
    public function clear();

    /**
     * @param \\Doctrine\\ORM\\Cache\\QueryCacheKey    \$key
     * @param \\Doctrine\\ORM\\Query\\ResultSetMapping \$rsm
     * @param mixed                                \$result
     * @param array                                \$hints
     *
     * @return boolean
     */
    public function put(QueryCacheKey \$key, ResultSetMapping \$rsm, \$result, array \$hints = []);

    /**
     * @param \\Doctrine\\ORM\\Cache\\QueryCacheKey     \$key
     * @param \\Doctrine\\ORM\\Query\\ResultSetMapping  \$rsm
     * @param array                                 \$hints
     *
     * @return array|null
     */
    public function get(QueryCacheKey \$key, ResultSetMapping \$rsm, array \$hints = []);

    /**
     * @return \\Doctrine\\ORM\\Cache\\Region
     */
    public function getRegion();
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/QueryCache.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Cache\\QueryCache.php");
    }
}
