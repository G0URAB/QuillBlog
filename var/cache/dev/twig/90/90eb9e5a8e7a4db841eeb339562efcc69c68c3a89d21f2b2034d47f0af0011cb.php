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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php */
class __TwigTemplate_8e38954941978f1c01a737d4bba13879f5b1ac9862cedca1aa218234dd4bda99 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php"));

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

/**
 * A set of rules for determining the physical column and table names
 *
 * 
 * @link    www.doctrine-project.org
 * @since   2.3
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface NamingStrategy
{
    /**
     * Returns a table name for an entity class.
     *
     * @param string \$className The fully-qualified class name.
     *
     * @return string A table name.
     */
    function classToTableName(\$className);

    /**
     * Returns a column name for a property.
     *
     * @param string      \$propertyName A property name.
     * @param string|null \$className    The fully-qualified class name.
     *
     * @return string A column name.
     */
    function propertyToColumnName(\$propertyName, \$className = null);

    /**
     * Returns a column name for an embedded property.
     *
     * @param string    \$propertyName
     * @param string    \$embeddedColumnName
     * @param string    \$className
     * @param string    \$embeddedClassName
     *
     * @return string
     */
    function embeddedFieldToColumnName(\$propertyName, \$embeddedColumnName, \$className = null, \$embeddedClassName = null);

    /**
     * Returns the default reference column name.
     *
     * @return string A column name.
     */
    function referenceColumnName();

    /**
     * Returns a join column name for a property.
     *
     * @param string \$propertyName A property name.
     *
     * @return string A join column name.
     */
    function joinColumnName(\$propertyName);

    /**
     * Returns a join table name.
     *
     * @param string      \$sourceEntity The source entity.
     * @param string      \$targetEntity The target entity.
     * @param string|null \$propertyName A property name.
     *
     * @return string A join table name.
     */
    function joinTableName(\$sourceEntity, \$targetEntity, \$propertyName = null);

    /**
     * Returns the foreign key column name for the given parameters.
     *
     * @param string      \$entityName           An entity.
     * @param string|null \$referencedColumnName A property.
     *
     * @return string A join column name.
     */
    function joinKeyColumnName(\$entityName, \$referencedColumnName = null);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php";
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

/**
 * A set of rules for determining the physical column and table names
 *
 * 
 * @link    www.doctrine-project.org
 * @since   2.3
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface NamingStrategy
{
    /**
     * Returns a table name for an entity class.
     *
     * @param string \$className The fully-qualified class name.
     *
     * @return string A table name.
     */
    function classToTableName(\$className);

    /**
     * Returns a column name for a property.
     *
     * @param string      \$propertyName A property name.
     * @param string|null \$className    The fully-qualified class name.
     *
     * @return string A column name.
     */
    function propertyToColumnName(\$propertyName, \$className = null);

    /**
     * Returns a column name for an embedded property.
     *
     * @param string    \$propertyName
     * @param string    \$embeddedColumnName
     * @param string    \$className
     * @param string    \$embeddedClassName
     *
     * @return string
     */
    function embeddedFieldToColumnName(\$propertyName, \$embeddedColumnName, \$className = null, \$embeddedClassName = null);

    /**
     * Returns the default reference column name.
     *
     * @return string A column name.
     */
    function referenceColumnName();

    /**
     * Returns a join column name for a property.
     *
     * @param string \$propertyName A property name.
     *
     * @return string A join column name.
     */
    function joinColumnName(\$propertyName);

    /**
     * Returns a join table name.
     *
     * @param string      \$sourceEntity The source entity.
     * @param string      \$targetEntity The target entity.
     * @param string|null \$propertyName A property name.
     *
     * @return string A join table name.
     */
    function joinTableName(\$sourceEntity, \$targetEntity, \$propertyName = null);

    /**
     * Returns the foreign key column name for the given parameters.
     *
     * @param string      \$entityName           An entity.
     * @param string|null \$referencedColumnName A property.
     *
     * @return string A join column name.
     */
    function joinKeyColumnName(\$entityName, \$referencedColumnName = null);
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\NamingStrategy.php");
    }
}
