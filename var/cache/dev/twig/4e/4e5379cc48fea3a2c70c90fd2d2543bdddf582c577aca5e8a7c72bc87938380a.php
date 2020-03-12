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

/* @app/vendor/symfony/maker-bundle/src/Resources/skeleton/doctrine/Fixtures.tpl.php */
class __TwigTemplate_5be1ce2f825087ec8e296f861b595ec7196cc6e0123fda1e36aaa7116813280b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/doctrine/Fixtures.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use Doctrine\\Bundle\\FixturesBundle\\Fixture;
use Doctrine\\Common\\Persistence\\ObjectManager;

class <?= \$class_name ?> extends Fixture
{
    public function load(ObjectManager \$manager)
    {
        // \$product = new Product();
        // \$manager->persist(\$product);

        \$manager->flush();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/doctrine/Fixtures.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use Doctrine\\Bundle\\FixturesBundle\\Fixture;
use Doctrine\\Common\\Persistence\\ObjectManager;

class <?= \$class_name ?> extends Fixture
{
    public function load(ObjectManager \$manager)
    {
        // \$product = new Product();
        // \$manager->persist(\$product);

        \$manager->flush();
    }
}
", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/doctrine/Fixtures.tpl.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\skeleton\\doctrine\\Fixtures.tpl.php");
    }
}
