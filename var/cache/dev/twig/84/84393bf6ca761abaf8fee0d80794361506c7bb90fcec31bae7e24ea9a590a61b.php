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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/ManyToManyAssociationBuilder.php */
class __TwigTemplate_1861500fc788f0e4cf23f1afd085eea4b4a93cd3f03912ba80ccf1ba209900b2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/ManyToManyAssociationBuilder.php"));

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

namespace Doctrine\\ORM\\Mapping\\Builder;

/**
 * ManyToMany Association Builder
 *
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        www.doctrine-project.com
 * @since       2.0
 * @author      Benjamin Eberlei <kontakt@beberlei.de>
 */
class ManyToManyAssociationBuilder extends OneToManyAssociationBuilder
{
    /**
     * @var string|null
     */
    private \$joinTableName;

    /**
     * @var array
     */
    private \$inverseJoinColumns = [];

    /**
     * @param string \$name
     *
     * @return ManyToManyAssociationBuilder
     */
    public function setJoinTable(\$name)
    {
        \$this->joinTableName = \$name;

        return \$this;
    }

    /**
     * Adds Inverse Join Columns.
     *
     * @param string      \$columnName
     * @param string      \$referencedColumnName
     * @param bool        \$nullable
     * @param bool        \$unique
     * @param string|null \$onDelete
     * @param string|null \$columnDef
     *
     * @return ManyToManyAssociationBuilder
     */
    public function addInverseJoinColumn(\$columnName, \$referencedColumnName, \$nullable = true, \$unique = false, \$onDelete = null, \$columnDef = null)
    {
        \$this->inverseJoinColumns[] = [
            'name' => \$columnName,
            'referencedColumnName' => \$referencedColumnName,
            'nullable' => \$nullable,
            'unique' => \$unique,
            'onDelete' => \$onDelete,
            'columnDefinition' => \$columnDef,
        ];

        return \$this;
    }

    /**
     * @return ClassMetadataBuilder
     */
    public function build()
    {
        \$mapping = \$this->mapping;
        \$mapping['joinTable'] = [];
        if (\$this->joinColumns) {
            \$mapping['joinTable']['joinColumns'] = \$this->joinColumns;
        }
        if (\$this->inverseJoinColumns) {
            \$mapping['joinTable']['inverseJoinColumns'] = \$this->inverseJoinColumns;
        }
        if (\$this->joinTableName) {
            \$mapping['joinTable']['name'] = \$this->joinTableName;
        }
        \$cm = \$this->builder->getClassMetadata();
        \$cm->mapManyToMany(\$mapping);

        return \$this->builder;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/ManyToManyAssociationBuilder.php";
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

namespace Doctrine\\ORM\\Mapping\\Builder;

/**
 * ManyToMany Association Builder
 *
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        www.doctrine-project.com
 * @since       2.0
 * @author      Benjamin Eberlei <kontakt@beberlei.de>
 */
class ManyToManyAssociationBuilder extends OneToManyAssociationBuilder
{
    /**
     * @var string|null
     */
    private \$joinTableName;

    /**
     * @var array
     */
    private \$inverseJoinColumns = [];

    /**
     * @param string \$name
     *
     * @return ManyToManyAssociationBuilder
     */
    public function setJoinTable(\$name)
    {
        \$this->joinTableName = \$name;

        return \$this;
    }

    /**
     * Adds Inverse Join Columns.
     *
     * @param string      \$columnName
     * @param string      \$referencedColumnName
     * @param bool        \$nullable
     * @param bool        \$unique
     * @param string|null \$onDelete
     * @param string|null \$columnDef
     *
     * @return ManyToManyAssociationBuilder
     */
    public function addInverseJoinColumn(\$columnName, \$referencedColumnName, \$nullable = true, \$unique = false, \$onDelete = null, \$columnDef = null)
    {
        \$this->inverseJoinColumns[] = [
            'name' => \$columnName,
            'referencedColumnName' => \$referencedColumnName,
            'nullable' => \$nullable,
            'unique' => \$unique,
            'onDelete' => \$onDelete,
            'columnDefinition' => \$columnDef,
        ];

        return \$this;
    }

    /**
     * @return ClassMetadataBuilder
     */
    public function build()
    {
        \$mapping = \$this->mapping;
        \$mapping['joinTable'] = [];
        if (\$this->joinColumns) {
            \$mapping['joinTable']['joinColumns'] = \$this->joinColumns;
        }
        if (\$this->inverseJoinColumns) {
            \$mapping['joinTable']['inverseJoinColumns'] = \$this->inverseJoinColumns;
        }
        if (\$this->joinTableName) {
            \$mapping['joinTable']['name'] = \$this->joinTableName;
        }
        \$cm = \$this->builder->getClassMetadata();
        \$cm->mapManyToMany(\$mapping);

        return \$this->builder;
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/ManyToManyAssociationBuilder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\Builder\\ManyToManyAssociationBuilder.php");
    }
}
