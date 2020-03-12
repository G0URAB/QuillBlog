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

/* @app/vendor/twig/twig/src/Profiler/Dumper/BaseDumper.php */
class __TwigTemplate_1f12095bd559ed53aee65b943f723764542fbf19f7d9f45c68480d46deb8a2ff extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Profiler/Dumper/BaseDumper.php"));

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
abstract class BaseDumper
{
    private \$root;

    public function dump(Profile \$profile): string
    {
        return \$this->dumpProfile(\$profile);
    }

    abstract protected function formatTemplate(Profile \$profile, \$prefix): string;

    abstract protected function formatNonTemplate(Profile \$profile, \$prefix): string;

    abstract protected function formatTime(Profile \$profile, \$percent): string;

    private function dumpProfile(Profile \$profile, \$prefix = '', \$sibling = false): string
    {
        if (\$profile->isRoot()) {
            \$this->root = \$profile->getDuration();
            \$start = \$profile->getName();
        } else {
            if (\$profile->isTemplate()) {
                \$start = \$this->formatTemplate(\$profile, \$prefix);
            } else {
                \$start = \$this->formatNonTemplate(\$profile, \$prefix);
            }
            \$prefix .= \$sibling ? '│ ' : '  ';
        }

        \$percent = \$this->root ? \$profile->getDuration() / \$this->root * 100 : 0;

        if (\$profile->getDuration() * 1000 < 1) {
            \$str = \$start.\"\\n\";
        } else {
            \$str = sprintf(\"%s %s\\n\", \$start, \$this->formatTime(\$profile, \$percent));
        }

        \$nCount = \\count(\$profile->getProfiles());
        foreach (\$profile as \$i => \$p) {
            \$str .= \$this->dumpProfile(\$p, \$prefix, \$i + 1 !== \$nCount);
        }

        return \$str;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Profiler/Dumper/BaseDumper.php";
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
abstract class BaseDumper
{
    private \$root;

    public function dump(Profile \$profile): string
    {
        return \$this->dumpProfile(\$profile);
    }

    abstract protected function formatTemplate(Profile \$profile, \$prefix): string;

    abstract protected function formatNonTemplate(Profile \$profile, \$prefix): string;

    abstract protected function formatTime(Profile \$profile, \$percent): string;

    private function dumpProfile(Profile \$profile, \$prefix = '', \$sibling = false): string
    {
        if (\$profile->isRoot()) {
            \$this->root = \$profile->getDuration();
            \$start = \$profile->getName();
        } else {
            if (\$profile->isTemplate()) {
                \$start = \$this->formatTemplate(\$profile, \$prefix);
            } else {
                \$start = \$this->formatNonTemplate(\$profile, \$prefix);
            }
            \$prefix .= \$sibling ? '│ ' : '  ';
        }

        \$percent = \$this->root ? \$profile->getDuration() / \$this->root * 100 : 0;

        if (\$profile->getDuration() * 1000 < 1) {
            \$str = \$start.\"\\n\";
        } else {
            \$str = sprintf(\"%s %s\\n\", \$start, \$this->formatTime(\$profile, \$percent));
        }

        \$nCount = \\count(\$profile->getProfiles());
        foreach (\$profile as \$i => \$p) {
            \$str .= \$this->dumpProfile(\$p, \$prefix, \$i + 1 !== \$nCount);
        }

        return \$str;
    }
}
", "@app/vendor/twig/twig/src/Profiler/Dumper/BaseDumper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Profiler\\Dumper\\BaseDumper.php");
    }
}
