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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultNamingStrategy.php */
class __TwigTemplate_86d3f8b3999344a690b892bd62401ead69f8459ccbd75be7e062a40719b4efbe extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultNamingStrategy.php"));

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
 * The default NamingStrategy
 *
 *
 * @link    www.doctrine-project.org
 * @since   2.3
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class DefaultNamingStrategy implements NamingStrategy
{
    /**
     * {@inheritdoc}
     */
    public function classToTableName(\$className)
    {
        if (strpos(\$className, '\\\\') !== false) {
            return substr(\$className, strrpos(\$className, '\\\\') + 1);
        }

        return \$className;
    }

    /**
     * {@inheritdoc}
     */
    public function propertyToColumnName(\$propertyName, \$className = null)
    {
        return \$propertyName;
    }

    /**
     * {@inheritdoc}
     */
    public function embeddedFieldToColumnName(\$propertyName, \$embeddedColumnName, \$className = null, \$embeddedClassName = null)
    {
        return \$propertyName.'_'.\$embeddedColumnName;
    }

    /**
     * {@inheritdoc}
     */
    public function referenceColumnName()
    {
        return 'id';
    }

    /**
     * {@inheritdoc}
     */
    public function joinColumnName(\$propertyName, \$className = null)
    {
        return \$propertyName . '_' . \$this->referenceColumnName();
    }

    /**
     * {@inheritdoc}
     */
    public function joinTableName(\$sourceEntity, \$targetEntity, \$propertyName = null)
    {
        return strtolower(\$this->classToTableName(\$sourceEntity) . '_' .
            \$this->classToTableName(\$targetEntity));
    }

    /**
     * {@inheritdoc}
     */
    public function joinKeyColumnName(\$entityName, \$referencedColumnName = null)
    {
        return strtolower(\$this->classToTableName(\$entityName) . '_' .
            (\$referencedColumnName ?: \$this->referenceColumnName()));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultNamingStrategy.php";
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
 * The default NamingStrategy
 *
 *
 * @link    www.doctrine-project.org
 * @since   2.3
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class DefaultNamingStrategy implements NamingStrategy
{
    /**
     * {@inheritdoc}
     */
    public function classToTableName(\$className)
    {
        if (strpos(\$className, '\\\\') !== false) {
            return substr(\$className, strrpos(\$className, '\\\\') + 1);
        }

        return \$className;
    }

    /**
     * {@inheritdoc}
     */
    public function propertyToColumnName(\$propertyName, \$className = null)
    {
        return \$propertyName;
    }

    /**
     * {@inheritdoc}
     */
    public function embeddedFieldToColumnName(\$propertyName, \$embeddedColumnName, \$className = null, \$embeddedClassName = null)
    {
        return \$propertyName.'_'.\$embeddedColumnName;
    }

    /**
     * {@inheritdoc}
     */
    public function referenceColumnName()
    {
        return 'id';
    }

    /**
     * {@inheritdoc}
     */
    public function joinColumnName(\$propertyName, \$className = null)
    {
        return \$propertyName . '_' . \$this->referenceColumnName();
    }

    /**
     * {@inheritdoc}
     */
    public function joinTableName(\$sourceEntity, \$targetEntity, \$propertyName = null)
    {
        return strtolower(\$this->classToTableName(\$sourceEntity) . '_' .
            \$this->classToTableName(\$targetEntity));
    }

    /**
     * {@inheritdoc}
     */
    public function joinKeyColumnName(\$entityName, \$referencedColumnName = null)
    {
        return strtolower(\$this->classToTableName(\$entityName) . '_' .
            (\$referencedColumnName ?: \$this->referenceColumnName()));
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultNamingStrategy.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\DefaultNamingStrategy.php");
    }
}
