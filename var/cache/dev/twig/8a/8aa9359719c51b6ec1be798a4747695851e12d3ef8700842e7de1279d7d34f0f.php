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

/* @app/vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Encoder.tpl.php */
class __TwigTemplate_dac0fb97ec572a37d002e02e20353c01105d581e6c65b1920396602d6f88b2dd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Encoder.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use Symfony\\Component\\Serializer\\Encoder\\DecoderInterface;
use Symfony\\Component\\Serializer\\Encoder\\EncoderInterface;

class <?= \$class_name ?> implements EncoderInterface, DecoderInterface
{
    const FORMAT = '<?= \$format ?>';

    public function encode(\$data, \$format, array \$context = [])
    {
        // TODO: return your encoded data
        return '';
    }

    public function supportsEncoding(\$format): bool
    {
        return self::FORMAT === \$format;
    }

    public function decode(\$data, \$format, array \$context = [])
    {
        // TODO: return your decoded data
        return '';
    }

    public function supportsDecoding(\$format): bool
    {
        return self::FORMAT === \$format;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Encoder.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use Symfony\\Component\\Serializer\\Encoder\\DecoderInterface;
use Symfony\\Component\\Serializer\\Encoder\\EncoderInterface;

class <?= \$class_name ?> implements EncoderInterface, DecoderInterface
{
    const FORMAT = '<?= \$format ?>';

    public function encode(\$data, \$format, array \$context = [])
    {
        // TODO: return your encoded data
        return '';
    }

    public function supportsEncoding(\$format): bool
    {
        return self::FORMAT === \$format;
    }

    public function decode(\$data, \$format, array \$context = [])
    {
        // TODO: return your decoded data
        return '';
    }

    public function supportsDecoding(\$format): bool
    {
        return self::FORMAT === \$format;
    }
}
", "@app/vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Encoder.tpl.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\skeleton\\serializer\\Encoder.tpl.php");
    }
}
