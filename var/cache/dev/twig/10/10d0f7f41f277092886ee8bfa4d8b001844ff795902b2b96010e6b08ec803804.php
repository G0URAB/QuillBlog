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

/* @app/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php */
class __TwigTemplate_aace80be2392fb6fb2283c32f8ecada058decbc4845b53c76989f8135261a9a0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php"));

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

use Symfony\\Component\\Stopwatch\\Stopwatch;
use Twig\\Extension\\ProfilerExtension as BaseProfilerExtension;
use Twig\\Profiler\\Profile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class ProfilerExtension extends BaseProfilerExtension
{
    private \$stopwatch;
    private \$events;

    public function __construct(Profile \$profile, Stopwatch \$stopwatch = null)
    {
        parent::__construct(\$profile);

        \$this->stopwatch = \$stopwatch;
        \$this->events = new \\SplObjectStorage();
    }

    public function enter(Profile \$profile): void
    {
        if (\$this->stopwatch && \$profile->isTemplate()) {
            \$this->events[\$profile] = \$this->stopwatch->start(\$profile->getName(), 'template');
        }

        parent::enter(\$profile);
    }

    public function leave(Profile \$profile): void
    {
        parent::leave(\$profile);

        if (\$this->stopwatch && \$profile->isTemplate()) {
            \$this->events[\$profile]->stop();
            unset(\$this->events[\$profile]);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php";
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

use Symfony\\Component\\Stopwatch\\Stopwatch;
use Twig\\Extension\\ProfilerExtension as BaseProfilerExtension;
use Twig\\Profiler\\Profile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class ProfilerExtension extends BaseProfilerExtension
{
    private \$stopwatch;
    private \$events;

    public function __construct(Profile \$profile, Stopwatch \$stopwatch = null)
    {
        parent::__construct(\$profile);

        \$this->stopwatch = \$stopwatch;
        \$this->events = new \\SplObjectStorage();
    }

    public function enter(Profile \$profile): void
    {
        if (\$this->stopwatch && \$profile->isTemplate()) {
            \$this->events[\$profile] = \$this->stopwatch->start(\$profile->getName(), 'template');
        }

        parent::enter(\$profile);
    }

    public function leave(Profile \$profile): void
    {
        parent::leave(\$profile);

        if (\$this->stopwatch && \$profile->isTemplate()) {
            \$this->events[\$profile]->stop();
            unset(\$this->events[\$profile]);
        }
    }
}
", "@app/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Extension\\ProfilerExtension.php");
    }
}
