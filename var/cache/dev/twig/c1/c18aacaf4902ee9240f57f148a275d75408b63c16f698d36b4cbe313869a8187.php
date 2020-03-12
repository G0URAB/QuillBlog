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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/OptimisticLockException.php */
class __TwigTemplate_c3f6e53edc1ce6270361e1d6d67dc0f4b44fa8176c61d9c8eccc0a05b8ddfc9a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/OptimisticLockException.php"));

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

namespace Doctrine\\ORM;

/**
 * An OptimisticLockException is thrown when a version check on an object
 * that uses optimistic locking through a version field fails.
 *
 * @author Roman Borschel <roman@code-factory.org>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @since 2.0
 */
class OptimisticLockException extends ORMException
{
    /**
     * @var object|null
     */
    private \$entity;

    /**
     * @param string \$msg
     * @param object \$entity
     */
    public function __construct(\$msg, \$entity)
    {
        parent::__construct(\$msg);
        \$this->entity = \$entity;
    }

    /**
     * Gets the entity that caused the exception.
     *
     * @return object|null
     */
    public function getEntity()
    {
        return \$this->entity;
    }

    /**
     * @param object \$entity
     *
     * @return OptimisticLockException
     */
    public static function lockFailed(\$entity)
    {
        return new self(\"The optimistic lock on an entity failed.\", \$entity);
    }

    /**
     * @param object \$entity
     * @param int    \$expectedLockVersion
     * @param int    \$actualLockVersion
     *
     * @return OptimisticLockException
     */
    public static function lockFailedVersionMismatch(\$entity, \$expectedLockVersion, \$actualLockVersion)
    {
        \$expectedLockVersion = (\$expectedLockVersion instanceof \\DateTime) ? \$expectedLockVersion->getTimestamp() : \$expectedLockVersion;
        \$actualLockVersion = (\$actualLockVersion instanceof \\DateTime) ? \$actualLockVersion->getTimestamp() : \$actualLockVersion;

        return new self(\"The optimistic lock failed, version \" . \$expectedLockVersion . \" was expected, but is actually \".\$actualLockVersion, \$entity);
    }

    /**
     * @param string \$entityName
     *
     * @return OptimisticLockException
     */
    public static function notVersioned(\$entityName)
    {
        return new self(\"Cannot obtain optimistic lock on unversioned entity \" . \$entityName, null);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/OptimisticLockException.php";
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

namespace Doctrine\\ORM;

/**
 * An OptimisticLockException is thrown when a version check on an object
 * that uses optimistic locking through a version field fails.
 *
 * @author Roman Borschel <roman@code-factory.org>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @since 2.0
 */
class OptimisticLockException extends ORMException
{
    /**
     * @var object|null
     */
    private \$entity;

    /**
     * @param string \$msg
     * @param object \$entity
     */
    public function __construct(\$msg, \$entity)
    {
        parent::__construct(\$msg);
        \$this->entity = \$entity;
    }

    /**
     * Gets the entity that caused the exception.
     *
     * @return object|null
     */
    public function getEntity()
    {
        return \$this->entity;
    }

    /**
     * @param object \$entity
     *
     * @return OptimisticLockException
     */
    public static function lockFailed(\$entity)
    {
        return new self(\"The optimistic lock on an entity failed.\", \$entity);
    }

    /**
     * @param object \$entity
     * @param int    \$expectedLockVersion
     * @param int    \$actualLockVersion
     *
     * @return OptimisticLockException
     */
    public static function lockFailedVersionMismatch(\$entity, \$expectedLockVersion, \$actualLockVersion)
    {
        \$expectedLockVersion = (\$expectedLockVersion instanceof \\DateTime) ? \$expectedLockVersion->getTimestamp() : \$expectedLockVersion;
        \$actualLockVersion = (\$actualLockVersion instanceof \\DateTime) ? \$actualLockVersion->getTimestamp() : \$actualLockVersion;

        return new self(\"The optimistic lock failed, version \" . \$expectedLockVersion . \" was expected, but is actually \".\$actualLockVersion, \$entity);
    }

    /**
     * @param string \$entityName
     *
     * @return OptimisticLockException
     */
    public static function notVersioned(\$entityName)
    {
        return new self(\"Cannot obtain optimistic lock on unversioned entity \" . \$entityName, null);
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/OptimisticLockException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\OptimisticLockException.php");
    }
}
