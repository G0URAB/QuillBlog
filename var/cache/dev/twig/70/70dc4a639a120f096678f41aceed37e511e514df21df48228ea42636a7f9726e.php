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

/* @app/vendor/symfony/maker-bundle/src/Security/UserClassConfiguration.php */
class __TwigTemplate_9948b22256d2ed8b5170e1aa75d804f060ac464d70c54cb1f1fd68208ca61f0c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Security/UserClassConfiguration.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Security;

/**
 * Configuration about the user's new User class.
 *
 * @internal
 */
final class UserClassConfiguration
{
    private \$isEntity;

    private \$identityPropertyName;

    private \$hasPassword;

    private \$useArgon2 = false;

    private \$userProviderClass;

    public function __construct(bool \$isEntity, string \$identityPropertyName, bool \$hasPassword)
    {
        \$this->isEntity = \$isEntity;
        \$this->identityPropertyName = \$identityPropertyName;
        \$this->hasPassword = \$hasPassword;
    }

    public function isEntity(): bool
    {
        return \$this->isEntity;
    }

    public function getIdentityPropertyName(): string
    {
        return \$this->identityPropertyName;
    }

    public function hasPassword(): bool
    {
        return \$this->hasPassword;
    }

    /**
     * @deprecated since MakerBundle 1.12
     */
    public function useArgon2(bool \$shouldUse)
    {
        \$this->useArgon2 = \$shouldUse;
    }

    /**
     * @deprecated since MakerBundle 1.12
     */
    public function shouldUseArgon2(): bool
    {
        return \$this->useArgon2;
    }

    public function getUserProviderClass()
    {
        return \$this->userProviderClass;
    }

    public function setUserProviderClass(string \$userProviderClass)
    {
        if (\$this->isEntity()) {
            throw new \\LogicException('No custom user class allowed for entity user.');
        }

        \$this->userProviderClass = \$userProviderClass;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Security/UserClassConfiguration.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Security;

/**
 * Configuration about the user's new User class.
 *
 * @internal
 */
final class UserClassConfiguration
{
    private \$isEntity;

    private \$identityPropertyName;

    private \$hasPassword;

    private \$useArgon2 = false;

    private \$userProviderClass;

    public function __construct(bool \$isEntity, string \$identityPropertyName, bool \$hasPassword)
    {
        \$this->isEntity = \$isEntity;
        \$this->identityPropertyName = \$identityPropertyName;
        \$this->hasPassword = \$hasPassword;
    }

    public function isEntity(): bool
    {
        return \$this->isEntity;
    }

    public function getIdentityPropertyName(): string
    {
        return \$this->identityPropertyName;
    }

    public function hasPassword(): bool
    {
        return \$this->hasPassword;
    }

    /**
     * @deprecated since MakerBundle 1.12
     */
    public function useArgon2(bool \$shouldUse)
    {
        \$this->useArgon2 = \$shouldUse;
    }

    /**
     * @deprecated since MakerBundle 1.12
     */
    public function shouldUseArgon2(): bool
    {
        return \$this->useArgon2;
    }

    public function getUserProviderClass()
    {
        return \$this->userProviderClass;
    }

    public function setUserProviderClass(string \$userProviderClass)
    {
        if (\$this->isEntity()) {
            throw new \\LogicException('No custom user class allowed for entity user.');
        }

        \$this->userProviderClass = \$userProviderClass;
    }
}
", "@app/vendor/symfony/maker-bundle/src/Security/UserClassConfiguration.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Security\\UserClassConfiguration.php");
    }
}
