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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/Parameter.php */
class __TwigTemplate_4aaf52ae73a8b63e5baf238d5094844ad11420a77bdaccb6d5cd45e33a131671 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/Parameter.php"));

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

namespace Doctrine\\ORM\\Query;

use function trim;

/**
 * Defines a Query Parameter.
 *
 * @link    www.doctrine-project.org
 * @since   2.3
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 */
class Parameter
{
    /**
     * The parameter name.
     *
     * @var string
     */
    private \$name;

    /**
     * The parameter value.
     *
     * @var mixed
     */
    private \$value;

    /**
     * The parameter type.
     *
     * @var mixed
     */
    private \$type;

    /**
     * Whether the parameter type was explicitly specified or not
     *
     * @var bool
     */
    private \$typeSpecified;

    /**
     * Constructor.
     *
     * @param string \$name  Parameter name
     * @param mixed  \$value Parameter value
     * @param mixed  \$type  Parameter type
     */
    public function __construct(\$name, \$value, \$type = null)
    {
        \$this->name          = trim(\$name, ':');
        \$this->typeSpecified = \$type !== null;

        \$this->setValue(\$value, \$type);
    }

    /**
     * Retrieves the Parameter name.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Retrieves the Parameter value.
     *
     * @return mixed
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Retrieves the Parameter type.
     *
     * @return mixed
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Defines the Parameter value.
     *
     * @param mixed \$value Parameter value.
     * @param mixed \$type  Parameter type.
     */
    public function setValue(\$value, \$type = null)
    {
        \$this->value = \$value;
        \$this->type  = \$type ?: ParameterTypeInferer::inferType(\$value);
    }

    public function typeWasSpecified() : bool
    {
        return \$this->typeSpecified;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/Parameter.php";
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

namespace Doctrine\\ORM\\Query;

use function trim;

/**
 * Defines a Query Parameter.
 *
 * @link    www.doctrine-project.org
 * @since   2.3
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 */
class Parameter
{
    /**
     * The parameter name.
     *
     * @var string
     */
    private \$name;

    /**
     * The parameter value.
     *
     * @var mixed
     */
    private \$value;

    /**
     * The parameter type.
     *
     * @var mixed
     */
    private \$type;

    /**
     * Whether the parameter type was explicitly specified or not
     *
     * @var bool
     */
    private \$typeSpecified;

    /**
     * Constructor.
     *
     * @param string \$name  Parameter name
     * @param mixed  \$value Parameter value
     * @param mixed  \$type  Parameter type
     */
    public function __construct(\$name, \$value, \$type = null)
    {
        \$this->name          = trim(\$name, ':');
        \$this->typeSpecified = \$type !== null;

        \$this->setValue(\$value, \$type);
    }

    /**
     * Retrieves the Parameter name.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Retrieves the Parameter value.
     *
     * @return mixed
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Retrieves the Parameter type.
     *
     * @return mixed
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Defines the Parameter value.
     *
     * @param mixed \$value Parameter value.
     * @param mixed \$type  Parameter type.
     */
    public function setValue(\$value, \$type = null)
    {
        \$this->value = \$value;
        \$this->type  = \$type ?: ParameterTypeInferer::inferType(\$value);
    }

    public function typeWasSpecified() : bool
    {
        return \$this->typeSpecified;
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Query/Parameter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Query\\Parameter.php");
    }
}
