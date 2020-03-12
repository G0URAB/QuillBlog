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

/* @app/vendor/twig/twig/src/Profiler/Dumper/TextDumper.php */
class __TwigTemplate_bfbb1b20a46731d7e5a51e162669e213be976d2b64b50150e575d9ac7a472340 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Profiler/Dumper/TextDumper.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Profiler\\Dumper;

use Twig\\Profiler\\Profile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class TextDumper extends BaseDumper
{
    protected function formatTemplate(Profile \$profile, \$prefix): string
    {
        return sprintf('%s└ %s', \$prefix, \$profile->getTemplate());
    }

    protected function formatNonTemplate(Profile \$profile, \$prefix): string
    {
        return sprintf('%s└ %s::%s(%s)', \$prefix, \$profile->getTemplate(), \$profile->getType(), \$profile->getName());
    }

    protected function formatTime(Profile \$profile, \$percent): string
    {
        return sprintf('%.2fms/%.0f%%', \$profile->getDuration() * 1000, \$percent);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Profiler/Dumper/TextDumper.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Profiler\\Dumper;

use Twig\\Profiler\\Profile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class TextDumper extends BaseDumper
{
    protected function formatTemplate(Profile \$profile, \$prefix): string
    {
        return sprintf('%s└ %s', \$prefix, \$profile->getTemplate());
    }

    protected function formatNonTemplate(Profile \$profile, \$prefix): string
    {
        return sprintf('%s└ %s::%s(%s)', \$prefix, \$profile->getTemplate(), \$profile->getType(), \$profile->getName());
    }

    protected function formatTime(Profile \$profile, \$percent): string
    {
        return sprintf('%.2fms/%.0f%%', \$profile->getDuration() * 1000, \$percent);
    }
}
", "@app/vendor/twig/twig/src/Profiler/Dumper/TextDumper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Profiler\\Dumper\\TextDumper.php");
    }
}
