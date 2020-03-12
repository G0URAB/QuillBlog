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

/* @app/vendor/symfony/maker-bundle/src/Security/SecurityControllerBuilder.php */
class __TwigTemplate_8ffa124b84e3ed36f0b939d778d7d86916fea2f2934437e680852443c3f43ff6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Security/SecurityControllerBuilder.php"));

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

use Symfony\\Bundle\\MakerBundle\\Util\\ClassSourceManipulator;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils;

/**
 * @internal
 */
final class SecurityControllerBuilder
{
    public function addLoginMethod(ClassSourceManipulator \$manipulator)
    {
        \$loginMethodBuilder = \$manipulator->createMethodBuilder('login', 'Response', false, ['@Route(\"/login\", name=\"app_login\")']);

        \$manipulator->addUseStatementIfNecessary(Response::class);
        \$manipulator->addUseStatementIfNecessary(Route::class);
        \$manipulator->addUseStatementIfNecessary(AuthenticationUtils::class);

        \$loginMethodBuilder->addParam(
            (new \\PhpParser\\Builder\\Param('authenticationUtils'))->setTypeHint('AuthenticationUtils')
        );

        \$manipulator->addMethodBody(\$loginMethodBuilder, <<<'CODE'
<?php
// if (\$this->getUser()) {
//     return \$this->redirectToRoute('target_path');
// }
CODE
        );
        \$loginMethodBuilder->addStmt(\$manipulator->createMethodLevelBlankLine());
        \$manipulator->addMethodBody(\$loginMethodBuilder, <<<'CODE'
<?php
// get the login error if there is one
\$error = \$authenticationUtils->getLastAuthenticationError();
// last username entered by the user
\$lastUsername = \$authenticationUtils->getLastUsername();
CODE
        );
        \$loginMethodBuilder->addStmt(\$manipulator->createMethodLevelBlankLine());
        \$manipulator->addMethodBody(\$loginMethodBuilder, <<<'CODE'
<?php
return \$this->render(
    'security/login.html.twig',
    [
        'last_username' => \$lastUsername,
        'error' => \$error,
    ]
);
CODE
        );
        \$manipulator->addMethodBuilder(\$loginMethodBuilder);
    }

    public function addLogoutMethod(ClassSourceManipulator \$manipulator)
    {
        \$logoutMethodBuilder = \$manipulator->createMethodBuilder('logout', null, false, ['@Route(\"/logout\", name=\"app_logout\")']);

        \$manipulator->addUseStatementIfNecessary(Route::class);
        \$manipulator->addMethodBody(\$logoutMethodBuilder, <<<'CODE'
<?php
throw new \\LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
CODE
        );
        \$manipulator->addMethodBuilder(\$logoutMethodBuilder);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Security/SecurityControllerBuilder.php";
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

use Symfony\\Bundle\\MakerBundle\\Util\\ClassSourceManipulator;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils;

/**
 * @internal
 */
final class SecurityControllerBuilder
{
    public function addLoginMethod(ClassSourceManipulator \$manipulator)
    {
        \$loginMethodBuilder = \$manipulator->createMethodBuilder('login', 'Response', false, ['@Route(\"/login\", name=\"app_login\")']);

        \$manipulator->addUseStatementIfNecessary(Response::class);
        \$manipulator->addUseStatementIfNecessary(Route::class);
        \$manipulator->addUseStatementIfNecessary(AuthenticationUtils::class);

        \$loginMethodBuilder->addParam(
            (new \\PhpParser\\Builder\\Param('authenticationUtils'))->setTypeHint('AuthenticationUtils')
        );

        \$manipulator->addMethodBody(\$loginMethodBuilder, <<<'CODE'
<?php
// if (\$this->getUser()) {
//     return \$this->redirectToRoute('target_path');
// }
CODE
        );
        \$loginMethodBuilder->addStmt(\$manipulator->createMethodLevelBlankLine());
        \$manipulator->addMethodBody(\$loginMethodBuilder, <<<'CODE'
<?php
// get the login error if there is one
\$error = \$authenticationUtils->getLastAuthenticationError();
// last username entered by the user
\$lastUsername = \$authenticationUtils->getLastUsername();
CODE
        );
        \$loginMethodBuilder->addStmt(\$manipulator->createMethodLevelBlankLine());
        \$manipulator->addMethodBody(\$loginMethodBuilder, <<<'CODE'
<?php
return \$this->render(
    'security/login.html.twig',
    [
        'last_username' => \$lastUsername,
        'error' => \$error,
    ]
);
CODE
        );
        \$manipulator->addMethodBuilder(\$loginMethodBuilder);
    }

    public function addLogoutMethod(ClassSourceManipulator \$manipulator)
    {
        \$logoutMethodBuilder = \$manipulator->createMethodBuilder('logout', null, false, ['@Route(\"/logout\", name=\"app_logout\")']);

        \$manipulator->addUseStatementIfNecessary(Route::class);
        \$manipulator->addMethodBody(\$logoutMethodBuilder, <<<'CODE'
<?php
throw new \\LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
CODE
        );
        \$manipulator->addMethodBuilder(\$logoutMethodBuilder);
    }
}
", "@app/vendor/symfony/maker-bundle/src/Security/SecurityControllerBuilder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Security\\SecurityControllerBuilder.php");
    }
}
