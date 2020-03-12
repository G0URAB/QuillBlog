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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/LazyCriteriaCollection.php */
class __TwigTemplate_774051409536f1dff8ba11e80bf6b45159dfaa414caf88fd01db4f670d182134 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/LazyCriteriaCollection.php"));

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

use Doctrine\\Common\\Collections\\AbstractLazyCollection;
use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Criteria;
use Doctrine\\Common\\Collections\\Selectable;
use Doctrine\\ORM\\Persisters\\Entity\\BasicEntityPersister;
use Doctrine\\ORM\\Persisters\\Entity\\EntityPersister;

/**
 * A lazy collection that allow a fast count when using criteria object
 * Once count gets executed once without collection being initialized, result
 * is cached and returned on subsequent calls until collection gets loaded,
 * then returning the number of loaded results.
 *
 * @since   2.5
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Michaël Gallego <mic.gallego@gmail.com>
 */
class LazyCriteriaCollection extends AbstractLazyCollection implements Selectable
{
    /**
     * @var BasicEntityPersister
     */
    protected \$entityPersister;

    /**
     * @var Criteria
     */
    protected \$criteria;

    /**
     * @var integer|null
     */
    private \$count;

    /**
     * @param EntityPersister \$entityPersister
     * @param Criteria        \$criteria
     */
    public function __construct(EntityPersister \$entityPersister, Criteria \$criteria)
    {
        \$this->entityPersister = \$entityPersister;
        \$this->criteria        = \$criteria;
    }

    /**
     * Do an efficient count on the collection
     *
     * @return integer
     */
    public function count()
    {
        if (\$this->isInitialized()) {
            return \$this->collection->count();
        }

        // Return cached result in case count query was already executed
        if (\$this->count !== null) {
            return \$this->count;
        }

        return \$this->count = \$this->entityPersister->count(\$this->criteria);
    }

    /**
     * check if collection is empty without loading it
     *
     * @return boolean TRUE if the collection is empty, FALSE otherwise.
     */
    public function isEmpty()
    {
        if (\$this->isInitialized()) {
            return \$this->collection->isEmpty();
        }

        return !\$this->count();
    }

    /**
     * Do an optimized search of an element
     *
     * @param object \$element
     *
     * @return bool
     */
    public function contains(\$element)
    {
        if (\$this->isInitialized()) {
            return \$this->collection->contains(\$element);
        }

        return \$this->entityPersister->exists(\$element, \$this->criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function matching(Criteria \$criteria)
    {
        \$this->initialize();

        return \$this->collection->matching(\$criteria);
    }

    /**
     * {@inheritDoc}
     */
    protected function doInitialize()
    {
        \$elements         = \$this->entityPersister->loadCriteria(\$this->criteria);
        \$this->collection = new ArrayCollection(\$elements);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/LazyCriteriaCollection.php";
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

use Doctrine\\Common\\Collections\\AbstractLazyCollection;
use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Criteria;
use Doctrine\\Common\\Collections\\Selectable;
use Doctrine\\ORM\\Persisters\\Entity\\BasicEntityPersister;
use Doctrine\\ORM\\Persisters\\Entity\\EntityPersister;

/**
 * A lazy collection that allow a fast count when using criteria object
 * Once count gets executed once without collection being initialized, result
 * is cached and returned on subsequent calls until collection gets loaded,
 * then returning the number of loaded results.
 *
 * @since   2.5
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Michaël Gallego <mic.gallego@gmail.com>
 */
class LazyCriteriaCollection extends AbstractLazyCollection implements Selectable
{
    /**
     * @var BasicEntityPersister
     */
    protected \$entityPersister;

    /**
     * @var Criteria
     */
    protected \$criteria;

    /**
     * @var integer|null
     */
    private \$count;

    /**
     * @param EntityPersister \$entityPersister
     * @param Criteria        \$criteria
     */
    public function __construct(EntityPersister \$entityPersister, Criteria \$criteria)
    {
        \$this->entityPersister = \$entityPersister;
        \$this->criteria        = \$criteria;
    }

    /**
     * Do an efficient count on the collection
     *
     * @return integer
     */
    public function count()
    {
        if (\$this->isInitialized()) {
            return \$this->collection->count();
        }

        // Return cached result in case count query was already executed
        if (\$this->count !== null) {
            return \$this->count;
        }

        return \$this->count = \$this->entityPersister->count(\$this->criteria);
    }

    /**
     * check if collection is empty without loading it
     *
     * @return boolean TRUE if the collection is empty, FALSE otherwise.
     */
    public function isEmpty()
    {
        if (\$this->isInitialized()) {
            return \$this->collection->isEmpty();
        }

        return !\$this->count();
    }

    /**
     * Do an optimized search of an element
     *
     * @param object \$element
     *
     * @return bool
     */
    public function contains(\$element)
    {
        if (\$this->isInitialized()) {
            return \$this->collection->contains(\$element);
        }

        return \$this->entityPersister->exists(\$element, \$this->criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function matching(Criteria \$criteria)
    {
        \$this->initialize();

        return \$this->collection->matching(\$criteria);
    }

    /**
     * {@inheritDoc}
     */
    protected function doInitialize()
    {
        \$elements         = \$this->entityPersister->loadCriteria(\$this->criteria);
        \$this->collection = new ArrayCollection(\$elements);
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/LazyCriteriaCollection.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\LazyCriteriaCollection.php");
    }
}
