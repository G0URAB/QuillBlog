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

/* @app/vendor/symfony/maker-bundle/src/Resources/skeleton/forgottenPassword/PasswordResetTokenRepository.tpl.php */
class __TwigTemplate_7d78740a8bec3fbfb56f21ad5eec214fa58277dded5fda83c26beb181d0083bb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/forgottenPassword/PasswordResetTokenRepository.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace App\\Repository;

use <?= \$token_full_class_name ?>;
use <?= \$user_full_class_name ?>;
use Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository;
use Doctrine\\Common\\Persistence\\ManagerRegistry;

/**
 * @method <?= \$token_class_name ?>|null find(\$id, \$lockMode = null, \$lockVersion = null)
 * @method <?= \$token_class_name ?>|null findOneBy(array \$criteria, array \$orderBy = null)
 * @method <?= \$token_class_name ?>[]    findAll()
 * @method <?= \$token_class_name ?>[]    findBy(array \$criteria, array \$orderBy = null, \$limit = null, \$offset = null)
 */
class <?= \$class_name ?> extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, <?= \$token_class_name ?>::class);
    }

    public function findNonExpiredForUser(<?= \$user_class_name ?> \$user): array
    {
        // We calculate the oldest datetime a valid token could have generated at
        \$tokenLifetime = new \\DateInterval(sprintf('PT%sH', <?= \$token_class_name ?>::LIFETIME_HOURS));
        \$minDateTime = (new \\DateTimeImmutable('now'))->sub(\$tokenLifetime);

        return \$this->createQueryBuilder('t')
            ->where('t.user = :user')
            ->andWhere('t.requestedAt >= :minDateTime')
            ->setParameters([
                'minDateTime' => \$minDateTime,
                'user' => \$user,
            ])
            ->getQuery()
            ->getResult()
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/forgottenPassword/PasswordResetTokenRepository.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace App\\Repository;

use <?= \$token_full_class_name ?>;
use <?= \$user_full_class_name ?>;
use Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository;
use Doctrine\\Common\\Persistence\\ManagerRegistry;

/**
 * @method <?= \$token_class_name ?>|null find(\$id, \$lockMode = null, \$lockVersion = null)
 * @method <?= \$token_class_name ?>|null findOneBy(array \$criteria, array \$orderBy = null)
 * @method <?= \$token_class_name ?>[]    findAll()
 * @method <?= \$token_class_name ?>[]    findBy(array \$criteria, array \$orderBy = null, \$limit = null, \$offset = null)
 */
class <?= \$class_name ?> extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, <?= \$token_class_name ?>::class);
    }

    public function findNonExpiredForUser(<?= \$user_class_name ?> \$user): array
    {
        // We calculate the oldest datetime a valid token could have generated at
        \$tokenLifetime = new \\DateInterval(sprintf('PT%sH', <?= \$token_class_name ?>::LIFETIME_HOURS));
        \$minDateTime = (new \\DateTimeImmutable('now'))->sub(\$tokenLifetime);

        return \$this->createQueryBuilder('t')
            ->where('t.user = :user')
            ->andWhere('t.requestedAt >= :minDateTime')
            ->setParameters([
                'minDateTime' => \$minDateTime,
                'user' => \$user,
            ])
            ->getQuery()
            ->getResult()
        ;
    }
}
", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/forgottenPassword/PasswordResetTokenRepository.tpl.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\skeleton\\forgottenPassword\\PasswordResetTokenRepository.tpl.php");
    }
}
