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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Collection/AbstractCollectionPersister.php */
class __TwigTemplate_9631a4d4f02a6da025b6889a4ed022eceb446e26654970b320aa9af27186da6d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Collection/AbstractCollectionPersister.php"));

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

namespace Doctrine\\ORM\\Persisters\\Collection;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\UnitOfWork;

/**
 * Base class for all collection persisters.
 *
 * @since 2.0
 * @author Roman Borschel <roman@code-factory.org>
 */
abstract class AbstractCollectionPersister implements CollectionPersister
{
    /**
     * @var EntityManagerInterface
     */
    protected \$em;

    /**
     * @var \\Doctrine\\DBAL\\Connection
     */
    protected \$conn;

    /**
     * @var UnitOfWork
     */
    protected \$uow;

    /**
     * The database platform.
     *
     * @var \\Doctrine\\DBAL\\Platforms\\AbstractPlatform
     */
    protected \$platform;

    /**
     * The quote strategy.
     *
     * @var \\Doctrine\\ORM\\Mapping\\QuoteStrategy
     */
    protected \$quoteStrategy;

    /**
     * Initializes a new instance of a class derived from AbstractCollectionPersister.
     *
     * @param EntityManagerInterface \$em
     */
    public function __construct(EntityManagerInterface \$em)
    {
        \$this->em               = \$em;
        \$this->uow              = \$em->getUnitOfWork();
        \$this->conn             = \$em->getConnection();
        \$this->platform         = \$this->conn->getDatabasePlatform();
        \$this->quoteStrategy    = \$em->getConfiguration()->getQuoteStrategy();
    }

    /**
     * Check if entity is in a valid state for operations.
     *
     * @param object \$entity
     *
     * @return bool
     */
    protected function isValidEntityState(\$entity)
    {
        \$entityState = \$this->uow->getEntityState(\$entity, UnitOfWork::STATE_NEW);

        if (\$entityState === UnitOfWork::STATE_NEW) {
            return false;
        }

        // If Entity is scheduled for inclusion, it is not in this collection.
        // We can assure that because it would have return true before on array check
        return ! (\$entityState === UnitOfWork::STATE_MANAGED && \$this->uow->isScheduledForInsert(\$entity));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Collection/AbstractCollectionPersister.php";
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

namespace Doctrine\\ORM\\Persisters\\Collection;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\UnitOfWork;

/**
 * Base class for all collection persisters.
 *
 * @since 2.0
 * @author Roman Borschel <roman@code-factory.org>
 */
abstract class AbstractCollectionPersister implements CollectionPersister
{
    /**
     * @var EntityManagerInterface
     */
    protected \$em;

    /**
     * @var \\Doctrine\\DBAL\\Connection
     */
    protected \$conn;

    /**
     * @var UnitOfWork
     */
    protected \$uow;

    /**
     * The database platform.
     *
     * @var \\Doctrine\\DBAL\\Platforms\\AbstractPlatform
     */
    protected \$platform;

    /**
     * The quote strategy.
     *
     * @var \\Doctrine\\ORM\\Mapping\\QuoteStrategy
     */
    protected \$quoteStrategy;

    /**
     * Initializes a new instance of a class derived from AbstractCollectionPersister.
     *
     * @param EntityManagerInterface \$em
     */
    public function __construct(EntityManagerInterface \$em)
    {
        \$this->em               = \$em;
        \$this->uow              = \$em->getUnitOfWork();
        \$this->conn             = \$em->getConnection();
        \$this->platform         = \$this->conn->getDatabasePlatform();
        \$this->quoteStrategy    = \$em->getConfiguration()->getQuoteStrategy();
    }

    /**
     * Check if entity is in a valid state for operations.
     *
     * @param object \$entity
     *
     * @return bool
     */
    protected function isValidEntityState(\$entity)
    {
        \$entityState = \$this->uow->getEntityState(\$entity, UnitOfWork::STATE_NEW);

        if (\$entityState === UnitOfWork::STATE_NEW) {
            return false;
        }

        // If Entity is scheduled for inclusion, it is not in this collection.
        // We can assure that because it would have return true before on array check
        return ! (\$entityState === UnitOfWork::STATE_MANAGED && \$this->uow->isScheduledForInsert(\$entity));
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Collection/AbstractCollectionPersister.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Persisters\\Collection\\AbstractCollectionPersister.php");
    }
}
