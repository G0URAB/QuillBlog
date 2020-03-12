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

/* @app/vendor/symfony/maker-bundle/src/Resources/skeleton/forgottenPassword/PasswordResetToken.tpl.php */
class __TwigTemplate_a2f0af81b2b21bdfc8d009b9a70c251ae53c34747ca5e30d0bfe48147045bc6c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/forgottenPassword/PasswordResetToken.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

use Doctrine\\ORM\\Mapping as ORM;

/**
 * @ORM\\Entity(repositoryClass=\"<?= \$repository_class_name ?>\")
 */
class <?= \$class_name ?>

{
    const LIFETIME_HOURS = 24;
    const SELECTOR_LENGTH = 20; // in chars

    /**
     * @ORM\\Id()
     * @ORM\\GeneratedValue()
     * @ORM\\Column(type=\"integer\")
     */
    private \$id;

    /**
     * @ORM\\Column(type=\"string\")
     */
    private \$selector;

    /**
     * @ORM\\Column(type=\"string\")
     */
    private \$token;

    /**
     * @ORM\\Column(type=\"datetime_immutable\")
     */
    private \$requestedAt;

    /**
     * @ORM\\ManyToOne(targetEntity=\"<?= \$user_full_class_name ?>\")
     */
    private \$user;

    private \$plainToken;

    public function __construct(User \$user)
    {
        \$this->requestedAt = new \\DateTimeImmutable('now');
        \$this->selector = strtr(base64_encode(random_bytes(self::SELECTOR_LENGTH * 3 / 4)), '+/', '-_');
        \$this->plainToken = strtr(base64_encode(random_bytes(18)), '+/', '-_');
        \$this->token = password_hash(\$this->plainToken, PASSWORD_DEFAULT);
        \$this->user = \$user;
    }

    public function getId()
    {
        return \$this->id;
    }

    public function getAsString(): string
    {
        if (!\$this->selector || !\$this->plainToken) {
            throw new \\Exception('You can get PasswordResetToken as a string only immediately after creation.');
        }

        return \$this->selector.\$this->plainToken;
    }

    public function getUser(): <?= \$user_class_name ?>

    {
        return \$this->user;
    }

    public function isTokenEquals(string \$token): bool
    {
        return password_verify(\$token, \$this->token);
    }

    public function isExpired(): bool
    {
        if ((\$this->requestedAt->getTimestamp() + self::LIFETIME_HOURS * 3600) <= time()) {
            return true;
        }

        return false;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/forgottenPassword/PasswordResetToken.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

use Doctrine\\ORM\\Mapping as ORM;

/**
 * @ORM\\Entity(repositoryClass=\"<?= \$repository_class_name ?>\")
 */
class <?= \$class_name ?>

{
    const LIFETIME_HOURS = 24;
    const SELECTOR_LENGTH = 20; // in chars

    /**
     * @ORM\\Id()
     * @ORM\\GeneratedValue()
     * @ORM\\Column(type=\"integer\")
     */
    private \$id;

    /**
     * @ORM\\Column(type=\"string\")
     */
    private \$selector;

    /**
     * @ORM\\Column(type=\"string\")
     */
    private \$token;

    /**
     * @ORM\\Column(type=\"datetime_immutable\")
     */
    private \$requestedAt;

    /**
     * @ORM\\ManyToOne(targetEntity=\"<?= \$user_full_class_name ?>\")
     */
    private \$user;

    private \$plainToken;

    public function __construct(User \$user)
    {
        \$this->requestedAt = new \\DateTimeImmutable('now');
        \$this->selector = strtr(base64_encode(random_bytes(self::SELECTOR_LENGTH * 3 / 4)), '+/', '-_');
        \$this->plainToken = strtr(base64_encode(random_bytes(18)), '+/', '-_');
        \$this->token = password_hash(\$this->plainToken, PASSWORD_DEFAULT);
        \$this->user = \$user;
    }

    public function getId()
    {
        return \$this->id;
    }

    public function getAsString(): string
    {
        if (!\$this->selector || !\$this->plainToken) {
            throw new \\Exception('You can get PasswordResetToken as a string only immediately after creation.');
        }

        return \$this->selector.\$this->plainToken;
    }

    public function getUser(): <?= \$user_class_name ?>

    {
        return \$this->user;
    }

    public function isTokenEquals(string \$token): bool
    {
        return password_verify(\$token, \$this->token);
    }

    public function isExpired(): bool
    {
        if ((\$this->requestedAt->getTimestamp() + self::LIFETIME_HOURS * 3600) <= time()) {
            return true;
        }

        return false;
    }
}
", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/forgottenPassword/PasswordResetToken.tpl.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\skeleton\\forgottenPassword\\PasswordResetToken.tpl.php");
    }
}
