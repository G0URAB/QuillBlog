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

/* @app/vendor/symfony/maker-bundle/src/Resources/skeleton/registration/RegistrationController.tpl.php */
class __TwigTemplate_6e0012d6854ff0abb9ab4ab0c97f7b4443b1c9baf5f486e80a15bee986af0ca2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/registration/RegistrationController.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use <?= \$user_full_class_name ?>;
use <?= \$form_full_class_name ?>;
<?php if (\$authenticator_full_class_name): ?>
use <?= \$authenticator_full_class_name; ?>;
<?php endif; ?>
use Symfony\\Bundle\\FrameworkBundle\\Controller\\<?= \$parent_class_name; ?>;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface;
<?php if (\$authenticator_full_class_name): ?>
use Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler;
<?php endif; ?>

class <?= \$class_name; ?> extends <?= \$parent_class_name; ?><?= \"\\n\" ?>
{
    /**
     * @Route(\"<?= \$route_path ?>\", name=\"<?= \$route_name ?>\")
     */
    public function register(Request \$request, UserPasswordEncoderInterface \$passwordEncoder<?= \$authenticator_full_class_name ? sprintf(', GuardAuthenticatorHandler \$guardHandler, %s \$authenticator', \$authenticator_class_name) : '' ?>): Response
    {
        \$user = new <?= \$user_class_name ?>();
        \$form = \$this->createForm(<?= \$form_class_name ?>::class, \$user);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            // encode the plain password
            \$user->set<?= ucfirst(\$password_field) ?>(
                \$passwordEncoder->encodePassword(
                    \$user,
                    \$form->get('plainPassword')->getData()
                )
            );

            \$entityManager = \$this->getDoctrine()->getManager();
            \$entityManager->persist(\$user);
            \$entityManager->flush();

            // do anything else you need here, like send an email

<?php if (\$authenticator_full_class_name): ?>
            return \$guardHandler->authenticateUserAndHandleSuccess(
                \$user,
                \$request,
                \$authenticator,
                '<?= \$firewall_name; ?>' // firewall name in security.yaml
            );
<?php else: ?>
            return \$this->redirectToRoute('<?= \$redirect_route_name ?>');
<?php endif; ?>
        }

        return \$this->render('registration/register.html.twig', [
            'registrationForm' => \$form->createView(),
        ]);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/registration/RegistrationController.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use <?= \$user_full_class_name ?>;
use <?= \$form_full_class_name ?>;
<?php if (\$authenticator_full_class_name): ?>
use <?= \$authenticator_full_class_name; ?>;
<?php endif; ?>
use Symfony\\Bundle\\FrameworkBundle\\Controller\\<?= \$parent_class_name; ?>;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface;
<?php if (\$authenticator_full_class_name): ?>
use Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler;
<?php endif; ?>

class <?= \$class_name; ?> extends <?= \$parent_class_name; ?><?= \"\\n\" ?>
{
    /**
     * @Route(\"<?= \$route_path ?>\", name=\"<?= \$route_name ?>\")
     */
    public function register(Request \$request, UserPasswordEncoderInterface \$passwordEncoder<?= \$authenticator_full_class_name ? sprintf(', GuardAuthenticatorHandler \$guardHandler, %s \$authenticator', \$authenticator_class_name) : '' ?>): Response
    {
        \$user = new <?= \$user_class_name ?>();
        \$form = \$this->createForm(<?= \$form_class_name ?>::class, \$user);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            // encode the plain password
            \$user->set<?= ucfirst(\$password_field) ?>(
                \$passwordEncoder->encodePassword(
                    \$user,
                    \$form->get('plainPassword')->getData()
                )
            );

            \$entityManager = \$this->getDoctrine()->getManager();
            \$entityManager->persist(\$user);
            \$entityManager->flush();

            // do anything else you need here, like send an email

<?php if (\$authenticator_full_class_name): ?>
            return \$guardHandler->authenticateUserAndHandleSuccess(
                \$user,
                \$request,
                \$authenticator,
                '<?= \$firewall_name; ?>' // firewall name in security.yaml
            );
<?php else: ?>
            return \$this->redirectToRoute('<?= \$redirect_route_name ?>');
<?php endif; ?>
        }

        return \$this->render('registration/register.html.twig', [
            'registrationForm' => \$form->createView(),
        ]);
    }
}
", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/registration/RegistrationController.tpl.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\skeleton\\registration\\RegistrationController.tpl.php");
    }
}
