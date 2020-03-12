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

/* @app/vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Normalizer.tpl.php */
class __TwigTemplate_bdca5b08de8c7456e0f6acd3d56c45f10066df3cc76167f625f6ba7b133fc9f2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Normalizer.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

<?= (\$cacheable_interface = interface_exists('Symfony\\Component\\Serializer\\Normalizer\\CacheableSupportsMethodInterface')) ? \"use Symfony\\Component\\Serializer\\Normalizer\\CacheableSupportsMethodInterface;\\n\" : '' ?>
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;
use Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer;

class <?= \$class_name ?> implements NormalizerInterface<?= \$cacheable_interface ? ', CacheableSupportsMethodInterface' : '' ?><?= \"\\n\" ?>
{
    private \$normalizer;

    public function __construct(ObjectNormalizer \$normalizer)
    {
        \$this->normalizer = \$normalizer;
    }

    public function normalize(\$object, \$format = null, array \$context = array()): array
    {
        \$data = \$this->normalizer->normalize(\$object, \$format, \$context);

        // Here: add, edit, or delete some data

        return \$data;
    }

    public function supportsNormalization(\$data, \$format = null): bool
    {
        return \$data instanceof \\App\\Entity\\BlogPost;
    }
<?php if (\$cacheable_interface): ?>

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
<?php endif; ?>
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Normalizer.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

<?= (\$cacheable_interface = interface_exists('Symfony\\Component\\Serializer\\Normalizer\\CacheableSupportsMethodInterface')) ? \"use Symfony\\Component\\Serializer\\Normalizer\\CacheableSupportsMethodInterface;\\n\" : '' ?>
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;
use Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer;

class <?= \$class_name ?> implements NormalizerInterface<?= \$cacheable_interface ? ', CacheableSupportsMethodInterface' : '' ?><?= \"\\n\" ?>
{
    private \$normalizer;

    public function __construct(ObjectNormalizer \$normalizer)
    {
        \$this->normalizer = \$normalizer;
    }

    public function normalize(\$object, \$format = null, array \$context = array()): array
    {
        \$data = \$this->normalizer->normalize(\$object, \$format, \$context);

        // Here: add, edit, or delete some data

        return \$data;
    }

    public function supportsNormalization(\$data, \$format = null): bool
    {
        return \$data instanceof \\App\\Entity\\BlogPost;
    }
<?php if (\$cacheable_interface): ?>

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
<?php endif; ?>
}
", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Normalizer.tpl.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\skeleton\\serializer\\Normalizer.tpl.php");
    }
}
