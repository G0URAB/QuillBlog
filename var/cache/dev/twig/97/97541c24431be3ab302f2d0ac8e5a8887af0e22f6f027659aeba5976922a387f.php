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

/* @app/vendor/symfony/doctrine-bridge/Test/TestRepositoryFactory.php */
class __TwigTemplate_8759aa43e999f2514a00c4625511743d598fdc6b18db776216052a029569590b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Test/TestRepositoryFactory.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Doctrine\\Test;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Repository\\RepositoryFactory;
use Doctrine\\Persistence\\ObjectRepository;

/**
 * @author Andreas Braun <alcaeus@alcaeus.org>
 */
final class TestRepositoryFactory implements RepositoryFactory
{
    /**
     * @var ObjectRepository[]
     */
    private \$repositoryList = [];

    /**
     * {@inheritdoc}
     *
     * @return ObjectRepository
     */
    public function getRepository(EntityManagerInterface \$entityManager, \$entityName)
    {
        \$repositoryHash = \$this->getRepositoryHash(\$entityManager, \$entityName);

        if (isset(\$this->repositoryList[\$repositoryHash])) {
            return \$this->repositoryList[\$repositoryHash];
        }

        return \$this->repositoryList[\$repositoryHash] = \$this->createRepository(\$entityManager, \$entityName);
    }

    public function setRepository(EntityManagerInterface \$entityManager, string \$entityName, ObjectRepository \$repository)
    {
        \$repositoryHash = \$this->getRepositoryHash(\$entityManager, \$entityName);

        \$this->repositoryList[\$repositoryHash] = \$repository;
    }

    private function createRepository(EntityManagerInterface \$entityManager, string \$entityName): ObjectRepository
    {
        /* @var \$metadata ClassMetadata */
        \$metadata = \$entityManager->getClassMetadata(\$entityName);
        \$repositoryClassName = \$metadata->customRepositoryClassName ?: \$entityManager->getConfiguration()->getDefaultRepositoryClassName();

        return new \$repositoryClassName(\$entityManager, \$metadata);
    }

    private function getRepositoryHash(EntityManagerInterface \$entityManager, string \$entityName): string
    {
        return \$entityManager->getClassMetadata(\$entityName)->getName().spl_object_hash(\$entityManager);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Test/TestRepositoryFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Doctrine\\Test;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Repository\\RepositoryFactory;
use Doctrine\\Persistence\\ObjectRepository;

/**
 * @author Andreas Braun <alcaeus@alcaeus.org>
 */
final class TestRepositoryFactory implements RepositoryFactory
{
    /**
     * @var ObjectRepository[]
     */
    private \$repositoryList = [];

    /**
     * {@inheritdoc}
     *
     * @return ObjectRepository
     */
    public function getRepository(EntityManagerInterface \$entityManager, \$entityName)
    {
        \$repositoryHash = \$this->getRepositoryHash(\$entityManager, \$entityName);

        if (isset(\$this->repositoryList[\$repositoryHash])) {
            return \$this->repositoryList[\$repositoryHash];
        }

        return \$this->repositoryList[\$repositoryHash] = \$this->createRepository(\$entityManager, \$entityName);
    }

    public function setRepository(EntityManagerInterface \$entityManager, string \$entityName, ObjectRepository \$repository)
    {
        \$repositoryHash = \$this->getRepositoryHash(\$entityManager, \$entityName);

        \$this->repositoryList[\$repositoryHash] = \$repository;
    }

    private function createRepository(EntityManagerInterface \$entityManager, string \$entityName): ObjectRepository
    {
        /* @var \$metadata ClassMetadata */
        \$metadata = \$entityManager->getClassMetadata(\$entityName);
        \$repositoryClassName = \$metadata->customRepositoryClassName ?: \$entityManager->getConfiguration()->getDefaultRepositoryClassName();

        return new \$repositoryClassName(\$entityManager, \$metadata);
    }

    private function getRepositoryHash(EntityManagerInterface \$entityManager, string \$entityName): string
    {
        return \$entityManager->getClassMetadata(\$entityName)->getName().spl_object_hash(\$entityManager);
    }
}
", "@app/vendor/symfony/doctrine-bridge/Test/TestRepositoryFactory.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Test\\TestRepositoryFactory.php");
    }
}
