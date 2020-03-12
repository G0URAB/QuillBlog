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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php */
class __TwigTemplate_ed4cbeddc312c6afbb15336e5e154c8b6524382d85f7183049184e5c114213f8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php"));

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

namespace Doctrine\\ORM\\Mapping;

use const CASE_LOWER;
use const CASE_UPPER;
use const E_USER_DEPRECATED;
use function preg_replace;
use function strpos;
use function strrpos;
use function strtolower;
use function strtoupper;
use function substr;
use function trigger_error;

/**
 * Naming strategy implementing the underscore naming convention.
 * Converts 'MyEntity' to 'my_entity' or 'MY_ENTITY'.
 *
 *
 * @link    www.doctrine-project.org
 * @since   2.3
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class UnderscoreNamingStrategy implements NamingStrategy
{
    private const DEFAULT_PATTERN      = '/(?<=[a-z])([A-Z])/';
    private const NUMBER_AWARE_PATTERN = '/(?<=[a-z0-9])([A-Z])/';

    /**
     * @var integer
     */
    private \$case;

    /** @var string */
    private \$pattern;

    /**
     * Underscore naming strategy construct.
     *
     * @param int \$case CASE_LOWER | CASE_UPPER
     */
    public function __construct(\$case = CASE_LOWER, bool \$numberAware = false)
    {
        if (! \$numberAware) {
            @trigger_error(
                'Creating ' . self::class . ' without making it number aware is deprecated and will be removed in Doctrine ORM 3.0.',
                E_USER_DEPRECATED
            );
        }

        \$this->case    = \$case;
        \$this->pattern = \$numberAware ? self::NUMBER_AWARE_PATTERN : self::DEFAULT_PATTERN;
    }

    /**
     * @return integer CASE_LOWER | CASE_UPPER
     */
    public function getCase()
    {
        return \$this->case;
    }

    /**
     * Sets string case CASE_LOWER | CASE_UPPER.
     * Alphabetic characters converted to lowercase or uppercase.
     *
     * @param integer \$case
     *
     * @return void
     */
    public function setCase(\$case)
    {
        \$this->case = \$case;
    }

    /**
     * {@inheritdoc}
     */
    public function classToTableName(\$className)
    {
        if (strpos(\$className, '\\\\') !== false) {
            \$className = substr(\$className, strrpos(\$className, '\\\\') + 1);
        }

        return \$this->underscore(\$className);
    }

    /**
     * {@inheritdoc}
     */
    public function propertyToColumnName(\$propertyName, \$className = null)
    {
        return \$this->underscore(\$propertyName);
    }

    /**
     * {@inheritdoc}
     */
    public function embeddedFieldToColumnName(\$propertyName, \$embeddedColumnName, \$className = null, \$embeddedClassName = null)
    {
        return \$this->underscore(\$propertyName).'_'.\$embeddedColumnName;
    }

    /**
     * {@inheritdoc}
     */
    public function referenceColumnName()
    {
        return \$this->case === CASE_UPPER ?  'ID' : 'id';
    }

    /**
     * {@inheritdoc}
     */
    public function joinColumnName(\$propertyName, \$className = null)
    {
        return \$this->underscore(\$propertyName) . '_' . \$this->referenceColumnName();
    }

    /**
     * {@inheritdoc}
     */
    public function joinTableName(\$sourceEntity, \$targetEntity, \$propertyName = null)
    {
        return \$this->classToTableName(\$sourceEntity) . '_' . \$this->classToTableName(\$targetEntity);
    }

    /**
     * {@inheritdoc}
     */
    public function joinKeyColumnName(\$entityName, \$referencedColumnName = null)
    {
        return \$this->classToTableName(\$entityName) . '_' .
                (\$referencedColumnName ?: \$this->referenceColumnName());
    }

    private function underscore(string \$string) : string
    {
        \$string = preg_replace(\$this->pattern, '_\$1', \$string);

        if (\$this->case === CASE_UPPER) {
            return strtoupper(\$string);
        }

        return strtolower(\$string);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php";
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

namespace Doctrine\\ORM\\Mapping;

use const CASE_LOWER;
use const CASE_UPPER;
use const E_USER_DEPRECATED;
use function preg_replace;
use function strpos;
use function strrpos;
use function strtolower;
use function strtoupper;
use function substr;
use function trigger_error;

/**
 * Naming strategy implementing the underscore naming convention.
 * Converts 'MyEntity' to 'my_entity' or 'MY_ENTITY'.
 *
 *
 * @link    www.doctrine-project.org
 * @since   2.3
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class UnderscoreNamingStrategy implements NamingStrategy
{
    private const DEFAULT_PATTERN      = '/(?<=[a-z])([A-Z])/';
    private const NUMBER_AWARE_PATTERN = '/(?<=[a-z0-9])([A-Z])/';

    /**
     * @var integer
     */
    private \$case;

    /** @var string */
    private \$pattern;

    /**
     * Underscore naming strategy construct.
     *
     * @param int \$case CASE_LOWER | CASE_UPPER
     */
    public function __construct(\$case = CASE_LOWER, bool \$numberAware = false)
    {
        if (! \$numberAware) {
            @trigger_error(
                'Creating ' . self::class . ' without making it number aware is deprecated and will be removed in Doctrine ORM 3.0.',
                E_USER_DEPRECATED
            );
        }

        \$this->case    = \$case;
        \$this->pattern = \$numberAware ? self::NUMBER_AWARE_PATTERN : self::DEFAULT_PATTERN;
    }

    /**
     * @return integer CASE_LOWER | CASE_UPPER
     */
    public function getCase()
    {
        return \$this->case;
    }

    /**
     * Sets string case CASE_LOWER | CASE_UPPER.
     * Alphabetic characters converted to lowercase or uppercase.
     *
     * @param integer \$case
     *
     * @return void
     */
    public function setCase(\$case)
    {
        \$this->case = \$case;
    }

    /**
     * {@inheritdoc}
     */
    public function classToTableName(\$className)
    {
        if (strpos(\$className, '\\\\') !== false) {
            \$className = substr(\$className, strrpos(\$className, '\\\\') + 1);
        }

        return \$this->underscore(\$className);
    }

    /**
     * {@inheritdoc}
     */
    public function propertyToColumnName(\$propertyName, \$className = null)
    {
        return \$this->underscore(\$propertyName);
    }

    /**
     * {@inheritdoc}
     */
    public function embeddedFieldToColumnName(\$propertyName, \$embeddedColumnName, \$className = null, \$embeddedClassName = null)
    {
        return \$this->underscore(\$propertyName).'_'.\$embeddedColumnName;
    }

    /**
     * {@inheritdoc}
     */
    public function referenceColumnName()
    {
        return \$this->case === CASE_UPPER ?  'ID' : 'id';
    }

    /**
     * {@inheritdoc}
     */
    public function joinColumnName(\$propertyName, \$className = null)
    {
        return \$this->underscore(\$propertyName) . '_' . \$this->referenceColumnName();
    }

    /**
     * {@inheritdoc}
     */
    public function joinTableName(\$sourceEntity, \$targetEntity, \$propertyName = null)
    {
        return \$this->classToTableName(\$sourceEntity) . '_' . \$this->classToTableName(\$targetEntity);
    }

    /**
     * {@inheritdoc}
     */
    public function joinKeyColumnName(\$entityName, \$referencedColumnName = null)
    {
        return \$this->classToTableName(\$entityName) . '_' .
                (\$referencedColumnName ?: \$this->referenceColumnName());
    }

    private function underscore(string \$string) : string
    {
        \$string = preg_replace(\$this->pattern, '_\$1', \$string);

        if (\$this->case === CASE_UPPER) {
            return strtoupper(\$string);
        }

        return strtolower(\$string);
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy.php");
    }
}
