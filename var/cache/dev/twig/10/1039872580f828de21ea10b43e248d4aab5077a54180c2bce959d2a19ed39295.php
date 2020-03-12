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

/* @app/vendor/symfony/twig-bridge/Extension/YamlExtension.php */
class __TwigTemplate_c83645777550d3ed03c5135e1c4947963f1fd6d1fb22b7a05344eee2c3952630 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Extension/YamlExtension.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Yaml\\Dumper as YamlDumper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFilter;

/**
 * Provides integration of the Yaml component with Twig.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class YamlExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('yaml_encode', [\$this, 'encode']),
            new TwigFilter('yaml_dump', [\$this, 'dump']),
        ];
    }

    public function encode(\$input, int \$inline = 0, int \$dumpObjects = 0): string
    {
        static \$dumper;

        if (null === \$dumper) {
            \$dumper = new YamlDumper();
        }

        if (\\defined('Symfony\\Component\\Yaml\\Yaml::DUMP_OBJECT')) {
            return \$dumper->dump(\$input, \$inline, 0, \$dumpObjects);
        }

        return \$dumper->dump(\$input, \$inline, 0, false, \$dumpObjects);
    }

    public function dump(\$value, int \$inline = 0, int \$dumpObjects = 0): string
    {
        if (\\is_resource(\$value)) {
            return '%Resource%';
        }

        if (\\is_array(\$value) || \\is_object(\$value)) {
            return '%'.\\gettype(\$value).'% '.\$this->encode(\$value, \$inline, \$dumpObjects);
        }

        return \$this->encode(\$value, \$inline, \$dumpObjects);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Extension/YamlExtension.php";
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Yaml\\Dumper as YamlDumper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFilter;

/**
 * Provides integration of the Yaml component with Twig.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class YamlExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('yaml_encode', [\$this, 'encode']),
            new TwigFilter('yaml_dump', [\$this, 'dump']),
        ];
    }

    public function encode(\$input, int \$inline = 0, int \$dumpObjects = 0): string
    {
        static \$dumper;

        if (null === \$dumper) {
            \$dumper = new YamlDumper();
        }

        if (\\defined('Symfony\\Component\\Yaml\\Yaml::DUMP_OBJECT')) {
            return \$dumper->dump(\$input, \$inline, 0, \$dumpObjects);
        }

        return \$dumper->dump(\$input, \$inline, 0, false, \$dumpObjects);
    }

    public function dump(\$value, int \$inline = 0, int \$dumpObjects = 0): string
    {
        if (\\is_resource(\$value)) {
            return '%Resource%';
        }

        if (\\is_array(\$value) || \\is_object(\$value)) {
            return '%'.\\gettype(\$value).'% '.\$this->encode(\$value, \$inline, \$dumpObjects);
        }

        return \$this->encode(\$value, \$inline, \$dumpObjects);
    }
}
", "@app/vendor/symfony/twig-bridge/Extension/YamlExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Extension\\YamlExtension.php");
    }
}
