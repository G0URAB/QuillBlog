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

/* @app/vendor/symfony/maker-bundle/src/Resources/skeleton/event/Subscriber.tpl.php */
class __TwigTemplate_3d0b4bba445a99e8c35696be5ce188e0151d3f6d52e68c6c84837851f36adea3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/event/Subscriber.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
<?= \$event_full_class_name ? \"use \$event_full_class_name;\\n\" : '' ?>

class <?= \$class_name ?> implements EventSubscriberInterface
{
    public function <?= \$method_name ?>(<?= \$event_arg ?>)
    {
        // ...
    }

    public static function getSubscribedEvents()
    {
        return [
            <?= \$event ?> => '<?= \$method_name ?>',
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/event/Subscriber.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
<?= \$event_full_class_name ? \"use \$event_full_class_name;\\n\" : '' ?>

class <?= \$class_name ?> implements EventSubscriberInterface
{
    public function <?= \$method_name ?>(<?= \$event_arg ?>)
    {
        // ...
    }

    public static function getSubscribedEvents()
    {
        return [
            <?= \$event ?> => '<?= \$method_name ?>',
        ];
    }
}
", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/event/Subscriber.tpl.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\skeleton\\event\\Subscriber.tpl.php");
    }
}
