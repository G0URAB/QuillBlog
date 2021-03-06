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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Event/GenerateSchemaTableEventArgs.php */
class __TwigTemplate_ec3d5b9940d2df03ef281267cad55d06f10af61717b808ccfa239a42978d6138 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Event/GenerateSchemaTableEventArgs.php"));

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
namespace Doctrine\\ORM\\Tools\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Table;

/**
 * Event Args used for the Events::postGenerateSchemaTable event.
 *
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        www.doctrine-project.com
 * @since       1.0
 * @author      Benjamin Eberlei <kontakt@beberlei.de>
 */
class GenerateSchemaTableEventArgs extends EventArgs
{
    /**
     * @var \\Doctrine\\ORM\\Mapping\\ClassMetadata
     */
    private \$classMetadata;

    /**
     * @var \\Doctrine\\DBAL\\Schema\\Schema
     */
    private \$schema;

    /**
     * @var \\Doctrine\\DBAL\\Schema\\Table
     */
    private \$classTable;

    /**
     * @param ClassMetadata \$classMetadata
     * @param Schema        \$schema
     * @param Table         \$classTable
     */
    public function __construct(ClassMetadata \$classMetadata, Schema \$schema, Table \$classTable)
    {
        \$this->classMetadata = \$classMetadata;
        \$this->schema = \$schema;
        \$this->classTable = \$classTable;
    }

    /**
     * @return ClassMetadata
     */
    public function getClassMetadata()
    {
        return \$this->classMetadata;
    }

    /**
     * @return Schema
     */
    public function getSchema()
    {
        return \$this->schema;
    }

    /**
     * @return Table
     */
    public function getClassTable()
    {
        return \$this->classTable;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Event/GenerateSchemaTableEventArgs.php";
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
namespace Doctrine\\ORM\\Tools\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Table;

/**
 * Event Args used for the Events::postGenerateSchemaTable event.
 *
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        www.doctrine-project.com
 * @since       1.0
 * @author      Benjamin Eberlei <kontakt@beberlei.de>
 */
class GenerateSchemaTableEventArgs extends EventArgs
{
    /**
     * @var \\Doctrine\\ORM\\Mapping\\ClassMetadata
     */
    private \$classMetadata;

    /**
     * @var \\Doctrine\\DBAL\\Schema\\Schema
     */
    private \$schema;

    /**
     * @var \\Doctrine\\DBAL\\Schema\\Table
     */
    private \$classTable;

    /**
     * @param ClassMetadata \$classMetadata
     * @param Schema        \$schema
     * @param Table         \$classTable
     */
    public function __construct(ClassMetadata \$classMetadata, Schema \$schema, Table \$classTable)
    {
        \$this->classMetadata = \$classMetadata;
        \$this->schema = \$schema;
        \$this->classTable = \$classTable;
    }

    /**
     * @return ClassMetadata
     */
    public function getClassMetadata()
    {
        return \$this->classMetadata;
    }

    /**
     * @return Schema
     */
    public function getSchema()
    {
        return \$this->schema;
    }

    /**
     * @return Table
     */
    public function getClassTable()
    {
        return \$this->classTable;
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Event/GenerateSchemaTableEventArgs.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Event\\GenerateSchemaTableEventArgs.php");
    }
}
