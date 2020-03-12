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

/* @app/vendor/symfony/var-dumper/Caster/ImagineCaster.php */
class __TwigTemplate_dfc31b51221452cfcdf44112dd485a05910672b88bafc942e4dee4f12cdfde9e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Caster/ImagineCaster.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\VarDumper\\Caster;

use Imagine\\Image\\ImageInterface;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
final class ImagineCaster
{
    public static function castImage(ImageInterface \$c, array \$a, Stub \$stub, bool \$isNested): array
    {
        \$imgData = \$c->get('png');
        if (\\strlen(\$imgData) > 1 * 1000 * 1000) {
            \$a += [
                Caster::PREFIX_VIRTUAL.'image' => new ConstStub(\$c->getSize()),
            ];
        } else {
            \$a += [
                Caster::PREFIX_VIRTUAL.'image' => new ImgStub(\$imgData, 'image/png', \$c->getSize()),
            ];
        }

        return \$a;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Caster/ImagineCaster.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\VarDumper\\Caster;

use Imagine\\Image\\ImageInterface;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
final class ImagineCaster
{
    public static function castImage(ImageInterface \$c, array \$a, Stub \$stub, bool \$isNested): array
    {
        \$imgData = \$c->get('png');
        if (\\strlen(\$imgData) > 1 * 1000 * 1000) {
            \$a += [
                Caster::PREFIX_VIRTUAL.'image' => new ConstStub(\$c->getSize()),
            ];
        } else {
            \$a += [
                Caster::PREFIX_VIRTUAL.'image' => new ImgStub(\$imgData, 'image/png', \$c->getSize()),
            ];
        }

        return \$a;
    }
}
", "@app/vendor/symfony/var-dumper/Caster/ImagineCaster.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Caster\\ImagineCaster.php");
    }
}
