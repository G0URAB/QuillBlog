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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/DefaultRepositoryFactory.php */
class __TwigTemplate_3467ddbd85eb21eb0789eb1e4711505eb6776f75f45eb0ec42c44db6c0230f9d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/DefaultRepositoryFactory.php"));

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

namespace Doctrine\\ORM\\Repository;

use Doctrine\\ORM\\EntityManagerInterface;

/**
 * This factory is used to create default repository objects for entities at runtime.
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @since 2.4
 */
final class DefaultRepositoryFactory implements RepositoryFactory
{
    /**
     * The list of EntityRepository instances.
     *
     * @var \\Doctrine\\Common\\Persistence\\ObjectRepository[]
     */
    private \$repositoryList = [];

    /**
     * {@inheritdoc}
     */
    public function getRepository(EntityManagerInterface \$entityManager, \$entityName)
    {
        \$repositoryHash = \$entityManager->getClassMetadata(\$entityName)->getName() . spl_object_hash(\$entityManager);

        if (isset(\$this->repositoryList[\$repositoryHash])) {
            return \$this->repositoryList[\$repositoryHash];
        }

        return \$this->repositoryList[\$repositoryHash] = \$this->createRepository(\$entityManager, \$entityName);
    }

    /**
     * Create a new repository instance for an entity class.
     *
     * @param \\Doctrine\\ORM\\EntityManagerInterface \$entityManager The EntityManager instance.
     * @param string                               \$entityName    The name of the entity.
     *
     * @return \\Doctrine\\Common\\Persistence\\ObjectRepository
     */
    private function createRepository(EntityManagerInterface \$entityManager, \$entityName)
    {
        /* @var \$metadata \\Doctrine\\ORM\\Mapping\\ClassMetadata */
        \$metadata            = \$entityManager->getClassMetadata(\$entityName);
        \$repositoryClassName = \$metadata->customRepositoryClassName
            ?: \$entityManager->getConfiguration()->getDefaultRepositoryClassName();

        return new \$repositoryClassName(\$entityManager, \$metadata);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/DefaultRepositoryFactory.php";
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

namespace Doctrine\\ORM\\Repository;

use Doctrine\\ORM\\EntityManagerInterface;

/**
 * This factory is used to create default repository objects for entities at runtime.
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @since 2.4
 */
final class DefaultRepositoryFactory implements RepositoryFactory
{
    /**
     * The list of EntityRepository instances.
     *
     * @var \\Doctrine\\Common\\Persistence\\ObjectRepository[]
     */
    private \$repositoryList = [];

    /**
     * {@inheritdoc}
     */
    public function getRepository(EntityManagerInterface \$entityManager, \$entityName)
    {
        \$repositoryHash = \$entityManager->getClassMetadata(\$entityName)->getName() . spl_object_hash(\$entityManager);

        if (isset(\$this->repositoryList[\$repositoryHash])) {
            return \$this->repositoryList[\$repositoryHash];
        }

        return \$this->repositoryList[\$repositoryHash] = \$this->createRepository(\$entityManager, \$entityName);
    }

    /**
     * Create a new repository instance for an entity class.
     *
     * @param \\Doctrine\\ORM\\EntityManagerInterface \$entityManager The EntityManager instance.
     * @param string                               \$entityName    The name of the entity.
     *
     * @return \\Doctrine\\Common\\Persistence\\ObjectRepository
     */
    private function createRepository(EntityManagerInterface \$entityManager, \$entityName)
    {
        /* @var \$metadata \\Doctrine\\ORM\\Mapping\\ClassMetadata */
        \$metadata            = \$entityManager->getClassMetadata(\$entityName);
        \$repositoryClassName = \$metadata->customRepositoryClassName
            ?: \$entityManager->getConfiguration()->getDefaultRepositoryClassName();

        return new \$repositoryClassName(\$entityManager, \$metadata);
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/DefaultRepositoryFactory.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Repository\\DefaultRepositoryFactory.php");
    }
}
