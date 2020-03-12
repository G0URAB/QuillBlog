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

/* @app/vendor/twig/twig/src/Extension/ProfilerExtension.php */
class __TwigTemplate_bd9351cf19199fad2ff7b27dbc43057a83ea8f0dc5d3cb365ddee32312565894 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Extension/ProfilerExtension.php"));

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

namespace Twig\\Extension;

use Twig\\Profiler\\NodeVisitor\\ProfilerNodeVisitor;
use Twig\\Profiler\\Profile;

class ProfilerExtension extends AbstractExtension
{
    private \$actives = [];

    public function __construct(Profile \$profile)
    {
        \$this->actives[] = \$profile;
    }

    /**
     * @return void
     */
    public function enter(Profile \$profile)
    {
        \$this->actives[0]->addProfile(\$profile);
        array_unshift(\$this->actives, \$profile);
    }

    /**
     * @return void
     */
    public function leave(Profile \$profile)
    {
        \$profile->leave();
        array_shift(\$this->actives);

        if (1 === \\count(\$this->actives)) {
            \$this->actives[0]->leave();
        }
    }

    public function getNodeVisitors(): array
    {
        return [new ProfilerNodeVisitor(\\get_class(\$this))];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Extension/ProfilerExtension.php";
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

namespace Twig\\Extension;

use Twig\\Profiler\\NodeVisitor\\ProfilerNodeVisitor;
use Twig\\Profiler\\Profile;

class ProfilerExtension extends AbstractExtension
{
    private \$actives = [];

    public function __construct(Profile \$profile)
    {
        \$this->actives[] = \$profile;
    }

    /**
     * @return void
     */
    public function enter(Profile \$profile)
    {
        \$this->actives[0]->addProfile(\$profile);
        array_unshift(\$this->actives, \$profile);
    }

    /**
     * @return void
     */
    public function leave(Profile \$profile)
    {
        \$profile->leave();
        array_shift(\$this->actives);

        if (1 === \\count(\$this->actives)) {
            \$this->actives[0]->leave();
        }
    }

    public function getNodeVisitors(): array
    {
        return [new ProfilerNodeVisitor(\\get_class(\$this))];
    }
}
", "@app/vendor/twig/twig/src/Extension/ProfilerExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Extension\\ProfilerExtension.php");
    }
}
