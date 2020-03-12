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

/* @app/src/Repository/BlogControllerRepository.php */
class __TwigTemplate_bf21a466ce1700767d81f74c922d071ecf05eb9fa93225a76f3545e1d75b1029 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/src/Repository/BlogControllerRepository.php"));

        // line 1
        echo "<?php

namespace App\\Repository;

use App\\Entity\\BlogController;
use Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository;
use Doctrine\\Common\\Persistence\\ManagerRegistry;

/**
 * @method BlogController|null find(\$id, \$lockMode = null, \$lockVersion = null)
 * @method BlogController|null findOneBy(array \$criteria, array \$orderBy = null)
 * @method BlogController[]    findAll()
 * @method BlogController[]    findBy(array \$criteria, array \$orderBy = null, \$limit = null, \$offset = null)
 */
class BlogControllerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, BlogController::class);
    }

    // /**
    //  * @return BlogController[] Returns an array of BlogController objects
    //  */
    /*
    public function findByExampleField(\$value)
    {
        return \$this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', \$value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField(\$value): ?BlogController
    {
        return \$this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', \$value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/src/Repository/BlogControllerRepository.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App\\Repository;

use App\\Entity\\BlogController;
use Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository;
use Doctrine\\Common\\Persistence\\ManagerRegistry;

/**
 * @method BlogController|null find(\$id, \$lockMode = null, \$lockVersion = null)
 * @method BlogController|null findOneBy(array \$criteria, array \$orderBy = null)
 * @method BlogController[]    findAll()
 * @method BlogController[]    findBy(array \$criteria, array \$orderBy = null, \$limit = null, \$offset = null)
 */
class BlogControllerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, BlogController::class);
    }

    // /**
    //  * @return BlogController[] Returns an array of BlogController objects
    //  */
    /*
    public function findByExampleField(\$value)
    {
        return \$this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', \$value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField(\$value): ?BlogController
    {
        return \$this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', \$value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
", "@app/src/Repository/BlogControllerRepository.php", "C:\\wamp64\\www\\QuillBlog\\src\\Repository\\BlogControllerRepository.php");
    }
}
