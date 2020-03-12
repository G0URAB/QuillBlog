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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheConfiguration.php */
class __TwigTemplate_ba4d4d01112eb68345c62b7ac9b5a9ef22912dfbe8414f5c67ce14f6d9faf1a7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheConfiguration.php"));

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

use Doctrine\\ORM\\Cache\\Logging\\CacheLogger;

/**
 * Configuration container for second-level cache.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class CacheConfiguration
{
    /**
     * @var \\Doctrine\\ORM\\Cache\\CacheFactory|null
     */
    private \$cacheFactory;

    /**
     * @var \\Doctrine\\ORM\\Cache\\RegionsConfiguration|null
     */
    private \$regionsConfig;

    /**
     * @var \\Doctrine\\ORM\\Cache\\Logging\\CacheLogger|null
     */
    private \$cacheLogger;

    /**
     * @var \\Doctrine\\ORM\\Cache\\QueryCacheValidator|null
     */
    private \$queryValidator;

    /**
     * @return \\Doctrine\\ORM\\Cache\\CacheFactory|null
     */
    public function getCacheFactory()
    {
        return \$this->cacheFactory;
    }

    /**
     * @param \\Doctrine\\ORM\\Cache\\CacheFactory \$factory
     *
     * @return void
     */
    public function setCacheFactory(CacheFactory \$factory)
    {
        \$this->cacheFactory = \$factory;
    }

    /**
     * @return \\Doctrine\\ORM\\Cache\\Logging\\CacheLogger|null
     */
    public function getCacheLogger()
    {
         return \$this->cacheLogger;
    }

    /**
     * @param \\Doctrine\\ORM\\Cache\\Logging\\CacheLogger \$logger
     */
    public function setCacheLogger(CacheLogger \$logger)
    {
        \$this->cacheLogger = \$logger;
    }

    /**
     * @return \\Doctrine\\ORM\\Cache\\RegionsConfiguration
     */
    public function getRegionsConfiguration()
    {
        if (\$this->regionsConfig === null) {
            \$this->regionsConfig = new RegionsConfiguration();
        }

        return \$this->regionsConfig;
    }

    /**
     * @param \\Doctrine\\ORM\\Cache\\RegionsConfiguration \$regionsConfig
     */
    public function setRegionsConfiguration(RegionsConfiguration \$regionsConfig)
    {
        \$this->regionsConfig = \$regionsConfig;
    }

    /**
     * @return \\Doctrine\\ORM\\Cache\\QueryCacheValidator
     */
    public function getQueryValidator()
    {
        if (\$this->queryValidator === null) {
            \$this->queryValidator = new TimestampQueryCacheValidator(
                \$this->cacheFactory->getTimestampRegion()
            );
        }

         return \$this->queryValidator;
    }

    /**
     * @param \\Doctrine\\ORM\\Cache\\QueryCacheValidator \$validator
     */
    public function setQueryValidator(QueryCacheValidator \$validator)
    {
        \$this->queryValidator = \$validator;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheConfiguration.php";
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

use Doctrine\\ORM\\Cache\\Logging\\CacheLogger;

/**
 * Configuration container for second-level cache.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class CacheConfiguration
{
    /**
     * @var \\Doctrine\\ORM\\Cache\\CacheFactory|null
     */
    private \$cacheFactory;

    /**
     * @var \\Doctrine\\ORM\\Cache\\RegionsConfiguration|null
     */
    private \$regionsConfig;

    /**
     * @var \\Doctrine\\ORM\\Cache\\Logging\\CacheLogger|null
     */
    private \$cacheLogger;

    /**
     * @var \\Doctrine\\ORM\\Cache\\QueryCacheValidator|null
     */
    private \$queryValidator;

    /**
     * @return \\Doctrine\\ORM\\Cache\\CacheFactory|null
     */
    public function getCacheFactory()
    {
        return \$this->cacheFactory;
    }

    /**
     * @param \\Doctrine\\ORM\\Cache\\CacheFactory \$factory
     *
     * @return void
     */
    public function setCacheFactory(CacheFactory \$factory)
    {
        \$this->cacheFactory = \$factory;
    }

    /**
     * @return \\Doctrine\\ORM\\Cache\\Logging\\CacheLogger|null
     */
    public function getCacheLogger()
    {
         return \$this->cacheLogger;
    }

    /**
     * @param \\Doctrine\\ORM\\Cache\\Logging\\CacheLogger \$logger
     */
    public function setCacheLogger(CacheLogger \$logger)
    {
        \$this->cacheLogger = \$logger;
    }

    /**
     * @return \\Doctrine\\ORM\\Cache\\RegionsConfiguration
     */
    public function getRegionsConfiguration()
    {
        if (\$this->regionsConfig === null) {
            \$this->regionsConfig = new RegionsConfiguration();
        }

        return \$this->regionsConfig;
    }

    /**
     * @param \\Doctrine\\ORM\\Cache\\RegionsConfiguration \$regionsConfig
     */
    public function setRegionsConfiguration(RegionsConfiguration \$regionsConfig)
    {
        \$this->regionsConfig = \$regionsConfig;
    }

    /**
     * @return \\Doctrine\\ORM\\Cache\\QueryCacheValidator
     */
    public function getQueryValidator()
    {
        if (\$this->queryValidator === null) {
            \$this->queryValidator = new TimestampQueryCacheValidator(
                \$this->cacheFactory->getTimestampRegion()
            );
        }

         return \$this->queryValidator;
    }

    /**
     * @param \\Doctrine\\ORM\\Cache\\QueryCacheValidator \$validator
     */
    public function setQueryValidator(QueryCacheValidator \$validator)
    {
        \$this->queryValidator = \$validator;
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheConfiguration.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Cache\\CacheConfiguration.php");
    }
}
