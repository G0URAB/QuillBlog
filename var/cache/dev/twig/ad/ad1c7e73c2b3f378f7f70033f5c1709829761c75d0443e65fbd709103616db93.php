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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/HydrationException.php */
class __TwigTemplate_52b96db22cec8a977e09772df8b08d944cff741c1a2ee7a9e7e86bd48cfe0954 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/HydrationException.php"));

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

namespace Doctrine\\ORM\\Internal\\Hydration;

class HydrationException extends \\Doctrine\\ORM\\ORMException
{
    /**
     * @return HydrationException
     */
    public static function nonUniqueResult()
    {
        return new self(\"The result returned by the query was not unique.\");
    }

    /**
     * @param string \$alias
     * @param string \$parentAlias
     *
     * @return HydrationException
     */
    public static function parentObjectOfRelationNotFound(\$alias, \$parentAlias)
    {
        return new self(\"The parent object of entity result with alias '\$alias' was not found.\"
            . \" The parent alias is '\$parentAlias'.\");
    }

    /**
     * @param string \$dqlAlias
     *
     * @return HydrationException
     */
    public static function emptyDiscriminatorValue(\$dqlAlias)
    {
        return new self(\"The DQL alias '\" . \$dqlAlias . \"' contains an entity \".
            \"of an inheritance hierarchy with an empty discriminator value. This means \" .
            \"that the database contains inconsistent data with an empty \" .
            \"discriminator value in a table row.\"
        );
    }

    /**
     * @since 2.3
     *
     * @param string \$entityName
     * @param string \$discrColumnName
     * @param string \$dqlAlias
     *
     * @return HydrationException
     */
    public static function missingDiscriminatorColumn(\$entityName, \$discrColumnName, \$dqlAlias)
    {
        return new self(sprintf(
            'The discriminator column \"%s\" is missing for \"%s\" using the DQL alias \"%s\".',
            \$discrColumnName, \$entityName, \$dqlAlias
        ));
    }

    /**
     * @since 2.3
     *
     * @param string \$entityName
     * @param string \$discrColumnName
     * @param string \$dqlAlias
     *
     * @return HydrationException
     */
    public static function missingDiscriminatorMetaMappingColumn(\$entityName, \$discrColumnName, \$dqlAlias)
    {
        return new self(sprintf(
            'The meta mapping for the discriminator column \"%s\" is missing for \"%s\" using the DQL alias \"%s\".',
            \$discrColumnName, \$entityName, \$dqlAlias
        ));
    }

    /**
     * @param string \$discrValue
     * @param array  \$discrMap
     *
     * @return HydrationException
     */
    public static function invalidDiscriminatorValue(\$discrValue, \$discrMap)
    {
        return new self(sprintf(
            'The discriminator value \"%s\" is invalid. It must be one of \"%s\".',
            \$discrValue, implode('\", \"', \$discrMap)
        ));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/HydrationException.php";
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

namespace Doctrine\\ORM\\Internal\\Hydration;

class HydrationException extends \\Doctrine\\ORM\\ORMException
{
    /**
     * @return HydrationException
     */
    public static function nonUniqueResult()
    {
        return new self(\"The result returned by the query was not unique.\");
    }

    /**
     * @param string \$alias
     * @param string \$parentAlias
     *
     * @return HydrationException
     */
    public static function parentObjectOfRelationNotFound(\$alias, \$parentAlias)
    {
        return new self(\"The parent object of entity result with alias '\$alias' was not found.\"
            . \" The parent alias is '\$parentAlias'.\");
    }

    /**
     * @param string \$dqlAlias
     *
     * @return HydrationException
     */
    public static function emptyDiscriminatorValue(\$dqlAlias)
    {
        return new self(\"The DQL alias '\" . \$dqlAlias . \"' contains an entity \".
            \"of an inheritance hierarchy with an empty discriminator value. This means \" .
            \"that the database contains inconsistent data with an empty \" .
            \"discriminator value in a table row.\"
        );
    }

    /**
     * @since 2.3
     *
     * @param string \$entityName
     * @param string \$discrColumnName
     * @param string \$dqlAlias
     *
     * @return HydrationException
     */
    public static function missingDiscriminatorColumn(\$entityName, \$discrColumnName, \$dqlAlias)
    {
        return new self(sprintf(
            'The discriminator column \"%s\" is missing for \"%s\" using the DQL alias \"%s\".',
            \$discrColumnName, \$entityName, \$dqlAlias
        ));
    }

    /**
     * @since 2.3
     *
     * @param string \$entityName
     * @param string \$discrColumnName
     * @param string \$dqlAlias
     *
     * @return HydrationException
     */
    public static function missingDiscriminatorMetaMappingColumn(\$entityName, \$discrColumnName, \$dqlAlias)
    {
        return new self(sprintf(
            'The meta mapping for the discriminator column \"%s\" is missing for \"%s\" using the DQL alias \"%s\".',
            \$discrColumnName, \$entityName, \$dqlAlias
        ));
    }

    /**
     * @param string \$discrValue
     * @param array  \$discrMap
     *
     * @return HydrationException
     */
    public static function invalidDiscriminatorValue(\$discrValue, \$discrMap)
    {
        return new self(sprintf(
            'The discriminator value \"%s\" is invalid. It must be one of \"%s\".',
            \$discrValue, implode('\", \"', \$discrMap)
        ));
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/HydrationException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Internal\\Hydration\\HydrationException.php");
    }
}
