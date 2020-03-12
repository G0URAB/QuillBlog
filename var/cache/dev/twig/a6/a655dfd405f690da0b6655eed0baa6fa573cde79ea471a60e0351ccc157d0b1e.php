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

/* @app/vendor/symfony/maker-bundle/src/Resources/skeleton/doctrine/Repository.tpl.php */
class __TwigTemplate_0e70f298c17db73bafa43d741685e5366c25081703b3ad6aecd7941dc8e434e5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/doctrine/Repository.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\"; ?>

namespace <?= \$namespace; ?>;

use <?= \$entity_full_class_name; ?>;
use Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository;
use Doctrine\\Common\\Persistence\\ManagerRegistry;
<?= \$with_password_upgrade ? \"use Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException;\\n\" : '' ?>
<?= \$with_password_upgrade ? \"use Symfony\\Component\\Security\\Core\\User\\PasswordUpgraderInterface;\\n\" : '' ?>
<?= \$with_password_upgrade ? \"use Symfony\\Component\\Security\\Core\\User\\UserInterface;\\n\" : '' ?>

/**
 * @method <?= \$entity_class_name; ?>|null find(\$id, \$lockMode = null, \$lockVersion = null)
 * @method <?= \$entity_class_name; ?>|null findOneBy(array \$criteria, array \$orderBy = null)
 * @method <?= \$entity_class_name; ?>[]    findAll()
 * @method <?= \$entity_class_name; ?>[]    findBy(array \$criteria, array \$orderBy = null, \$limit = null, \$offset = null)
 */
class <?= \$class_name; ?> extends ServiceEntityRepository<?= \$with_password_upgrade ? \" implements PasswordUpgraderInterface\\n\" : \"\\n\" ?>
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, <?= \$entity_class_name; ?>::class);
    }

<?php if (\$with_password_upgrade): ?>
    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(UserInterface \$user, string \$newEncodedPassword): void
    {
        if (!\$user instanceof <?= \$entity_class_name ?>) {
            throw new UnsupportedUserException(sprintf('Instances of \"%s\" are not supported.', \\get_class(\$user)));
        }

        \$user->setPassword(\$newEncodedPassword);
        \$this->_em->persist(\$user);
        \$this->_em->flush();
    }

<?php endif ?>
    // /**
    //  * @return <?= \$entity_class_name ?>[] Returns an array of <?= \$entity_class_name ?> objects
    //  */
    /*
    public function findByExampleField(\$value)
    {
        return \$this->createQueryBuilder('<?= \$entity_alias; ?>')
            ->andWhere('<?= \$entity_alias; ?>.exampleField = :val')
            ->setParameter('val', \$value)
            ->orderBy('<?= \$entity_alias; ?>.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField(\$value): ?<?= \$entity_class_name.\"\\n\" ?>
    {
        return \$this->createQueryBuilder('<?= \$entity_alias ?>')
            ->andWhere('<?= \$entity_alias ?>.exampleField = :val')
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
        return "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/doctrine/Repository.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\"; ?>

namespace <?= \$namespace; ?>;

use <?= \$entity_full_class_name; ?>;
use Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository;
use Doctrine\\Common\\Persistence\\ManagerRegistry;
<?= \$with_password_upgrade ? \"use Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException;\\n\" : '' ?>
<?= \$with_password_upgrade ? \"use Symfony\\Component\\Security\\Core\\User\\PasswordUpgraderInterface;\\n\" : '' ?>
<?= \$with_password_upgrade ? \"use Symfony\\Component\\Security\\Core\\User\\UserInterface;\\n\" : '' ?>

/**
 * @method <?= \$entity_class_name; ?>|null find(\$id, \$lockMode = null, \$lockVersion = null)
 * @method <?= \$entity_class_name; ?>|null findOneBy(array \$criteria, array \$orderBy = null)
 * @method <?= \$entity_class_name; ?>[]    findAll()
 * @method <?= \$entity_class_name; ?>[]    findBy(array \$criteria, array \$orderBy = null, \$limit = null, \$offset = null)
 */
class <?= \$class_name; ?> extends ServiceEntityRepository<?= \$with_password_upgrade ? \" implements PasswordUpgraderInterface\\n\" : \"\\n\" ?>
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, <?= \$entity_class_name; ?>::class);
    }

<?php if (\$with_password_upgrade): ?>
    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(UserInterface \$user, string \$newEncodedPassword): void
    {
        if (!\$user instanceof <?= \$entity_class_name ?>) {
            throw new UnsupportedUserException(sprintf('Instances of \"%s\" are not supported.', \\get_class(\$user)));
        }

        \$user->setPassword(\$newEncodedPassword);
        \$this->_em->persist(\$user);
        \$this->_em->flush();
    }

<?php endif ?>
    // /**
    //  * @return <?= \$entity_class_name ?>[] Returns an array of <?= \$entity_class_name ?> objects
    //  */
    /*
    public function findByExampleField(\$value)
    {
        return \$this->createQueryBuilder('<?= \$entity_alias; ?>')
            ->andWhere('<?= \$entity_alias; ?>.exampleField = :val')
            ->setParameter('val', \$value)
            ->orderBy('<?= \$entity_alias; ?>.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField(\$value): ?<?= \$entity_class_name.\"\\n\" ?>
    {
        return \$this->createQueryBuilder('<?= \$entity_alias ?>')
            ->andWhere('<?= \$entity_alias ?>.exampleField = :val')
            ->setParameter('val', \$value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/doctrine/Repository.tpl.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\skeleton\\doctrine\\Repository.tpl.php");
    }
}
