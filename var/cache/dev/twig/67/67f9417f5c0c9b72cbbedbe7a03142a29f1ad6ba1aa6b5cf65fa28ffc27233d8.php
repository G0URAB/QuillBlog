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

/* @app/vendor/symfony/maker-bundle/src/Resources/skeleton/authenticator/EmptyAuthenticator.tpl.php */
class __TwigTemplate_19c40f37c21f7765c98b2b6f4d20f35c90d03dd849db74334dae365541b9fec9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/authenticator/EmptyAuthenticator.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;
use Symfony\\Component\\Security\\Guard\\AbstractGuardAuthenticator;

class <?= \$class_name ?> extends AbstractGuardAuthenticator
{
    public function supports(Request \$request)
    {
        // todo
    }

    public function getCredentials(Request \$request)
    {
        // todo
    }

    public function getUser(\$credentials, UserProviderInterface \$userProvider)
    {
        // todo
    }

    public function checkCredentials(\$credentials, UserInterface \$user)
    {
        // todo
    }

    public function onAuthenticationFailure(Request \$request, AuthenticationException \$exception)
    {
        // todo
    }

    public function onAuthenticationSuccess(Request \$request, TokenInterface \$token, \$providerKey)
    {
        // todo
    }

    public function start(Request \$request, AuthenticationException \$authException = null)
    {
        // todo
    }

    public function supportsRememberMe()
    {
        // todo
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/authenticator/EmptyAuthenticator.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;
use Symfony\\Component\\Security\\Guard\\AbstractGuardAuthenticator;

class <?= \$class_name ?> extends AbstractGuardAuthenticator
{
    public function supports(Request \$request)
    {
        // todo
    }

    public function getCredentials(Request \$request)
    {
        // todo
    }

    public function getUser(\$credentials, UserProviderInterface \$userProvider)
    {
        // todo
    }

    public function checkCredentials(\$credentials, UserInterface \$user)
    {
        // todo
    }

    public function onAuthenticationFailure(Request \$request, AuthenticationException \$exception)
    {
        // todo
    }

    public function onAuthenticationSuccess(Request \$request, TokenInterface \$token, \$providerKey)
    {
        // todo
    }

    public function start(Request \$request, AuthenticationException \$authException = null)
    {
        // todo
    }

    public function supportsRememberMe()
    {
        // todo
    }
}
", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/authenticator/EmptyAuthenticator.tpl.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\skeleton\\authenticator\\EmptyAuthenticator.tpl.php");
    }
}
