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

/* @app/vendor/symfony/maker-bundle/src/Resources/skeleton/forgottenPassword/ForgottenPasswordController.tpl.php */
class __TwigTemplate_18a716f756e961473d1172d049b7ce2bc550ea5b53696ddce5518dd9ec8dcaff extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/forgottenPassword/ForgottenPasswordController.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use <?= \$token_full_class_name ?>;
use <?= \$user_full_class_name ?>;
use <?= \$request_form_full_class_name ?>;
use <?= \$resetting_form_full_class_name ?>;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\<?= \$parent_class_name; ?>;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface;

/**
 * @Route(\"/forgotten-password\")
 */
class <?= \$class_name; ?> extends <?= \$parent_class_name; ?><?= \"\\n\" ?>
{
    private const SESSION_TOKEN_KEY = 'forgotten_password_token';
    private const SESSION_CAN_CHECK_EMAIL = 'forgotten_password_check_email';

    /**
     * @Route(\"/request\", name=\"app_forgotten_password_request\")
     */
    public function request(Request \$request, \\Swift_Mailer \$mailer): Response
    {
        \$form = \$this->createForm(<?= \$request_form_class_name ?>::class);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$user = \$this->getDoctrine()->getRepository(<?= \$user_class_name ?>::class)->findOneBy([
                '<?= \$email_field ?>' => \$form->get('<?= \$email_field ?>')->getData(),
            ]);

            // Needed to be able to access next page, app_check_email
            \$request->getSession()->set(self::SESSION_CAN_CHECK_EMAIL, true);

            // Do not reveal whether an user account was found or not.
            if (!\$user) {
                return \$this->redirectToRoute('app_check_email');
            }

            // If User already has a valid Token, we don't want to generate a new one.
            // We fail silently.
            \$oldTokens = \$this->getDoctrine()->getRepository(<?= \$token_class_name ?>::class)->findNonExpiredForUser(\$user);
            if (count(\$oldTokens)) {
                return \$this->redirectToRoute('app_check_email');
            }

            // Generate a reset password token, that the user could use to change their password.
            \$resetPasswordToken = new <?= \$token_class_name ?>(\$user);
            \$this->getDoctrine()->getManager()->persist(\$resetPasswordToken);
            \$this->getDoctrine()->getManager()->flush();

            \$message = (new \\Swift_Message('Your password reset request'))
                ->setFrom(['noreply@mydomain.com' => 'Noreply'])
                ->setTo(\$user-><?= \$email_getter ?>())
                ->setBody(\$this->renderView('forgotten_password/email.txt.twig', [
                    'token' => \$resetPasswordToken,
                ]))
            ;
            \$mailer->send(\$message);

            return \$this->redirectToRoute('app_check_email');
        }

        return \$this->render('forgotten_password/request.html.twig', [
            'requestForm' => \$form->createView(),
        ]);
    }

    /**
     * @Route(\"/check-email\", name=\"app_check_email\")
     */
    public function checkEmail(SessionInterface \$session)
    {
        // We prevent users from directly accessing this page
        if (!\$session->get(self::SESSION_CAN_CHECK_EMAIL)) {
            return \$this->redirectToRoute('app_forgotten_password_request');
        }

        \$session->remove(self::SESSION_CAN_CHECK_EMAIL);

        return \$this->render('forgotten_password/check_email.html.twig', [
            'tokenLifetime' => <?= \$token_class_name ?>::LIFETIME_HOURS,
        ]);
    }

    /**
     * @Route(\"/reset/{tokenAndSelector}\", name=\"app_reset_password\")
     */
    public function reset(Request \$request, UserPasswordEncoderInterface \$passwordEncoder, \$tokenAndSelector = null): Response
    {
        if (\$tokenAndSelector) {
            // We store token in session and remove it from the URL,
            // to avoid any leak if someone get to know the URL (AJAX requests, Analytics...).
            \$request->getSession()->set(self::SESSION_TOKEN_KEY, \$tokenAndSelector);

            return \$this->redirectToRoute('app_reset_password');
        }

        \$tokenAndSelector = \$request->getSession()->get(self::SESSION_TOKEN_KEY);
        if (!\$tokenAndSelector) {
            throw \$this->createNotFoundException();
        }

        \$passwordResetToken = \$this->getDoctrine()->getRepository(<?= \$token_class_name ?>::class)->findOneBy([
            'selector' => substr(\$tokenAndSelector, 0, <?= \$token_class_name ?>::SELECTOR_LENGTH),
        ]);

        if (!\$passwordResetToken) {
            throw \$this->createNotFoundException();
        }

        if (\$passwordResetToken->isExpired() || !\$passwordResetToken->isTokenEquals(substr(\$tokenAndSelector, <?= \$token_class_name ?>::SELECTOR_LENGTH))) {
            \$this->getDoctrine()->getManager()->remove(\$passwordResetToken);
            \$this->getDoctrine()->getManager()->flush();

            throw \$this->createNotFoundException();
        }

        \$form = \$this->createForm(<?= \$resetting_form_class_name ?>::class);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            // A <?= \$token_class_name ?> should be used only once, remove it.
            \$this->getDoctrine()->getManager()->remove(\$passwordResetToken);

            // Encode the plain password, and set it.
            \$passwordResetToken->getUser()-><?= \$password_setter ?>(
                \$passwordEncoder->encodePassword(
                    \$passwordResetToken->getUser(),
                    \$form->get('plainPassword')->getData()
                )
            );

            \$this->getDoctrine()->getManager()->flush();

            // TODO: please check the login route
            return \$this->redirectToRoute('<?= \$login_route ?>');
        }

        return \$this->render('forgotten_password/reset.html.twig', [
            'resetForm' => \$form->createView(),
        ]);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/forgottenPassword/ForgottenPasswordController.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use <?= \$token_full_class_name ?>;
use <?= \$user_full_class_name ?>;
use <?= \$request_form_full_class_name ?>;
use <?= \$resetting_form_full_class_name ?>;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\<?= \$parent_class_name; ?>;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface;

/**
 * @Route(\"/forgotten-password\")
 */
class <?= \$class_name; ?> extends <?= \$parent_class_name; ?><?= \"\\n\" ?>
{
    private const SESSION_TOKEN_KEY = 'forgotten_password_token';
    private const SESSION_CAN_CHECK_EMAIL = 'forgotten_password_check_email';

    /**
     * @Route(\"/request\", name=\"app_forgotten_password_request\")
     */
    public function request(Request \$request, \\Swift_Mailer \$mailer): Response
    {
        \$form = \$this->createForm(<?= \$request_form_class_name ?>::class);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$user = \$this->getDoctrine()->getRepository(<?= \$user_class_name ?>::class)->findOneBy([
                '<?= \$email_field ?>' => \$form->get('<?= \$email_field ?>')->getData(),
            ]);

            // Needed to be able to access next page, app_check_email
            \$request->getSession()->set(self::SESSION_CAN_CHECK_EMAIL, true);

            // Do not reveal whether an user account was found or not.
            if (!\$user) {
                return \$this->redirectToRoute('app_check_email');
            }

            // If User already has a valid Token, we don't want to generate a new one.
            // We fail silently.
            \$oldTokens = \$this->getDoctrine()->getRepository(<?= \$token_class_name ?>::class)->findNonExpiredForUser(\$user);
            if (count(\$oldTokens)) {
                return \$this->redirectToRoute('app_check_email');
            }

            // Generate a reset password token, that the user could use to change their password.
            \$resetPasswordToken = new <?= \$token_class_name ?>(\$user);
            \$this->getDoctrine()->getManager()->persist(\$resetPasswordToken);
            \$this->getDoctrine()->getManager()->flush();

            \$message = (new \\Swift_Message('Your password reset request'))
                ->setFrom(['noreply@mydomain.com' => 'Noreply'])
                ->setTo(\$user-><?= \$email_getter ?>())
                ->setBody(\$this->renderView('forgotten_password/email.txt.twig', [
                    'token' => \$resetPasswordToken,
                ]))
            ;
            \$mailer->send(\$message);

            return \$this->redirectToRoute('app_check_email');
        }

        return \$this->render('forgotten_password/request.html.twig', [
            'requestForm' => \$form->createView(),
        ]);
    }

    /**
     * @Route(\"/check-email\", name=\"app_check_email\")
     */
    public function checkEmail(SessionInterface \$session)
    {
        // We prevent users from directly accessing this page
        if (!\$session->get(self::SESSION_CAN_CHECK_EMAIL)) {
            return \$this->redirectToRoute('app_forgotten_password_request');
        }

        \$session->remove(self::SESSION_CAN_CHECK_EMAIL);

        return \$this->render('forgotten_password/check_email.html.twig', [
            'tokenLifetime' => <?= \$token_class_name ?>::LIFETIME_HOURS,
        ]);
    }

    /**
     * @Route(\"/reset/{tokenAndSelector}\", name=\"app_reset_password\")
     */
    public function reset(Request \$request, UserPasswordEncoderInterface \$passwordEncoder, \$tokenAndSelector = null): Response
    {
        if (\$tokenAndSelector) {
            // We store token in session and remove it from the URL,
            // to avoid any leak if someone get to know the URL (AJAX requests, Analytics...).
            \$request->getSession()->set(self::SESSION_TOKEN_KEY, \$tokenAndSelector);

            return \$this->redirectToRoute('app_reset_password');
        }

        \$tokenAndSelector = \$request->getSession()->get(self::SESSION_TOKEN_KEY);
        if (!\$tokenAndSelector) {
            throw \$this->createNotFoundException();
        }

        \$passwordResetToken = \$this->getDoctrine()->getRepository(<?= \$token_class_name ?>::class)->findOneBy([
            'selector' => substr(\$tokenAndSelector, 0, <?= \$token_class_name ?>::SELECTOR_LENGTH),
        ]);

        if (!\$passwordResetToken) {
            throw \$this->createNotFoundException();
        }

        if (\$passwordResetToken->isExpired() || !\$passwordResetToken->isTokenEquals(substr(\$tokenAndSelector, <?= \$token_class_name ?>::SELECTOR_LENGTH))) {
            \$this->getDoctrine()->getManager()->remove(\$passwordResetToken);
            \$this->getDoctrine()->getManager()->flush();

            throw \$this->createNotFoundException();
        }

        \$form = \$this->createForm(<?= \$resetting_form_class_name ?>::class);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            // A <?= \$token_class_name ?> should be used only once, remove it.
            \$this->getDoctrine()->getManager()->remove(\$passwordResetToken);

            // Encode the plain password, and set it.
            \$passwordResetToken->getUser()-><?= \$password_setter ?>(
                \$passwordEncoder->encodePassword(
                    \$passwordResetToken->getUser(),
                    \$form->get('plainPassword')->getData()
                )
            );

            \$this->getDoctrine()->getManager()->flush();

            // TODO: please check the login route
            return \$this->redirectToRoute('<?= \$login_route ?>');
        }

        return \$this->render('forgotten_password/reset.html.twig', [
            'resetForm' => \$form->createView(),
        ]);
    }
}
", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/forgottenPassword/ForgottenPasswordController.tpl.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\skeleton\\forgottenPassword\\ForgottenPasswordController.tpl.php");
    }
}
