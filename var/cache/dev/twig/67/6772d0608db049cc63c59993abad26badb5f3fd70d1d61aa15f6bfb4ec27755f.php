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

/* @app/vendor/symfony/maker-bundle/src/Resources/skeleton/test/Functional.tpl.php */
class __TwigTemplate_a94da441f6e774a123499cea2b1e187a56ed1017c75d04d283c1baa398732673 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/test/Functional.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

<?php if (\$panther_is_available): ?>
use Symfony\\Component\\Panther\\PantherTestCase;
<?php else: ?>
use Symfony\\Bundle\\FrameworkBundle\\Test\\WebTestCase;
<?php endif ?>

class <?= \$class_name ?> extends <?= \$panther_is_available ? 'PantherTestCase' : 'WebTestCase' ?><?= \"\\n\" ?>
{
    public function testSomething()
    {
        \$client = static::createClient();
        \$crawler = \$client->request('GET', '/');

<?php if (\$web_assertions_are_available): ?>
        \$this->assertResponseIsSuccessful();
        \$this->assertSelectorTextContains('h1', 'Hello World');
<?php else: ?>
        \$this->assertSame(200, \$client->getResponse()->getStatusCode());
        \$this->assertStringContainsString('Hello World', \$crawler->filter('h1')->text());
<?php endif ?>
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/test/Functional.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

<?php if (\$panther_is_available): ?>
use Symfony\\Component\\Panther\\PantherTestCase;
<?php else: ?>
use Symfony\\Bundle\\FrameworkBundle\\Test\\WebTestCase;
<?php endif ?>

class <?= \$class_name ?> extends <?= \$panther_is_available ? 'PantherTestCase' : 'WebTestCase' ?><?= \"\\n\" ?>
{
    public function testSomething()
    {
        \$client = static::createClient();
        \$crawler = \$client->request('GET', '/');

<?php if (\$web_assertions_are_available): ?>
        \$this->assertResponseIsSuccessful();
        \$this->assertSelectorTextContains('h1', 'Hello World');
<?php else: ?>
        \$this->assertSame(200, \$client->getResponse()->getStatusCode());
        \$this->assertStringContainsString('Hello World', \$crawler->filter('h1')->text());
<?php endif ?>
    }
}
", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/test/Functional.tpl.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\skeleton\\test\\Functional.tpl.php");
    }
}
