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

/* @app/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php */
class __TwigTemplate_e797b6e1dc3435c802c8fe41c679fd8aa3e0bac0742c26775eab106f2767cc81 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php"));

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

namespace Symfony\\Bridge\\Twig\\DataCollector;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector;
use Symfony\\Component\\HttpKernel\\DataCollector\\LateDataCollectorInterface;
use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Markup;
use Twig\\Profiler\\Dumper\\HtmlDumper;
use Twig\\Profiler\\Profile;

/**
 * TwigDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class TwigDataCollector extends DataCollector implements LateDataCollectorInterface
{
    private \$profile;
    private \$twig;
    private \$computed;

    public function __construct(Profile \$profile, Environment \$twig = null)
    {
        \$this->profile = \$profile;
        \$this->twig = \$twig;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Throwable \$exception = null)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->profile->reset();
        \$this->computed = null;
        \$this->data = [];
    }

    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        \$this->data['profile'] = serialize(\$this->profile);
        \$this->data['template_paths'] = [];

        if (null === \$this->twig) {
            return;
        }

        \$templateFinder = function (Profile \$profile) use (&\$templateFinder) {
            if (\$profile->isTemplate()) {
                try {
                    \$template = \$this->twig->load(\$name = \$profile->getName());
                } catch (LoaderError \$e) {
                    \$template = null;
                }

                if (null !== \$template && '' !== \$path = \$template->getSourceContext()->getPath()) {
                    \$this->data['template_paths'][\$name] = \$path;
                }
            }

            foreach (\$profile as \$p) {
                \$templateFinder(\$p);
            }
        };
        \$templateFinder(\$this->profile);
    }

    public function getTime()
    {
        return \$this->getProfile()->getDuration() * 1000;
    }

    public function getTemplateCount()
    {
        return \$this->getComputedData('template_count');
    }

    public function getTemplatePaths()
    {
        return \$this->data['template_paths'];
    }

    public function getTemplates()
    {
        return \$this->getComputedData('templates');
    }

    public function getBlockCount()
    {
        return \$this->getComputedData('block_count');
    }

    public function getMacroCount()
    {
        return \$this->getComputedData('macro_count');
    }

    public function getHtmlCallGraph()
    {
        \$dumper = new HtmlDumper();
        \$dump = \$dumper->dump(\$this->getProfile());

        // needed to remove the hardcoded CSS styles
        \$dump = str_replace([
            '<span style=\"background-color: #ffd\">',
            '<span style=\"color: #d44\">',
            '<span style=\"background-color: #dfd\">',
            '<span style=\"background-color: #ddf\">',
        ], [
            '<span class=\"status-warning\">',
            '<span class=\"status-error\">',
            '<span class=\"status-success\">',
            '<span class=\"status-info\">',
        ], \$dump);

        return new Markup(\$dump, 'UTF-8');
    }

    public function getProfile()
    {
        if (null === \$this->profile) {
            \$this->profile = unserialize(\$this->data['profile'], ['allowed_classes' => ['Twig_Profiler_Profile', 'Twig\\Profiler\\Profile']]);
        }

        return \$this->profile;
    }

    private function getComputedData(string \$index)
    {
        if (null === \$this->computed) {
            \$this->computed = \$this->computeData(\$this->getProfile());
        }

        return \$this->computed[\$index];
    }

    private function computeData(Profile \$profile)
    {
        \$data = [
            'template_count' => 0,
            'block_count' => 0,
            'macro_count' => 0,
        ];

        \$templates = [];
        foreach (\$profile as \$p) {
            \$d = \$this->computeData(\$p);

            \$data['template_count'] += (\$p->isTemplate() ? 1 : 0) + \$d['template_count'];
            \$data['block_count'] += (\$p->isBlock() ? 1 : 0) + \$d['block_count'];
            \$data['macro_count'] += (\$p->isMacro() ? 1 : 0) + \$d['macro_count'];

            if (\$p->isTemplate()) {
                if (!isset(\$templates[\$p->getTemplate()])) {
                    \$templates[\$p->getTemplate()] = 1;
                } else {
                    ++\$templates[\$p->getTemplate()];
                }
            }

            foreach (\$d['templates'] as \$template => \$count) {
                if (!isset(\$templates[\$template])) {
                    \$templates[\$template] = \$count;
                } else {
                    \$templates[\$template] += \$count;
                }
            }
        }
        \$data['templates'] = \$templates;

        return \$data;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'twig';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php";
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

namespace Symfony\\Bridge\\Twig\\DataCollector;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector;
use Symfony\\Component\\HttpKernel\\DataCollector\\LateDataCollectorInterface;
use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Markup;
use Twig\\Profiler\\Dumper\\HtmlDumper;
use Twig\\Profiler\\Profile;

/**
 * TwigDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class TwigDataCollector extends DataCollector implements LateDataCollectorInterface
{
    private \$profile;
    private \$twig;
    private \$computed;

    public function __construct(Profile \$profile, Environment \$twig = null)
    {
        \$this->profile = \$profile;
        \$this->twig = \$twig;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Throwable \$exception = null)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->profile->reset();
        \$this->computed = null;
        \$this->data = [];
    }

    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        \$this->data['profile'] = serialize(\$this->profile);
        \$this->data['template_paths'] = [];

        if (null === \$this->twig) {
            return;
        }

        \$templateFinder = function (Profile \$profile) use (&\$templateFinder) {
            if (\$profile->isTemplate()) {
                try {
                    \$template = \$this->twig->load(\$name = \$profile->getName());
                } catch (LoaderError \$e) {
                    \$template = null;
                }

                if (null !== \$template && '' !== \$path = \$template->getSourceContext()->getPath()) {
                    \$this->data['template_paths'][\$name] = \$path;
                }
            }

            foreach (\$profile as \$p) {
                \$templateFinder(\$p);
            }
        };
        \$templateFinder(\$this->profile);
    }

    public function getTime()
    {
        return \$this->getProfile()->getDuration() * 1000;
    }

    public function getTemplateCount()
    {
        return \$this->getComputedData('template_count');
    }

    public function getTemplatePaths()
    {
        return \$this->data['template_paths'];
    }

    public function getTemplates()
    {
        return \$this->getComputedData('templates');
    }

    public function getBlockCount()
    {
        return \$this->getComputedData('block_count');
    }

    public function getMacroCount()
    {
        return \$this->getComputedData('macro_count');
    }

    public function getHtmlCallGraph()
    {
        \$dumper = new HtmlDumper();
        \$dump = \$dumper->dump(\$this->getProfile());

        // needed to remove the hardcoded CSS styles
        \$dump = str_replace([
            '<span style=\"background-color: #ffd\">',
            '<span style=\"color: #d44\">',
            '<span style=\"background-color: #dfd\">',
            '<span style=\"background-color: #ddf\">',
        ], [
            '<span class=\"status-warning\">',
            '<span class=\"status-error\">',
            '<span class=\"status-success\">',
            '<span class=\"status-info\">',
        ], \$dump);

        return new Markup(\$dump, 'UTF-8');
    }

    public function getProfile()
    {
        if (null === \$this->profile) {
            \$this->profile = unserialize(\$this->data['profile'], ['allowed_classes' => ['Twig_Profiler_Profile', 'Twig\\Profiler\\Profile']]);
        }

        return \$this->profile;
    }

    private function getComputedData(string \$index)
    {
        if (null === \$this->computed) {
            \$this->computed = \$this->computeData(\$this->getProfile());
        }

        return \$this->computed[\$index];
    }

    private function computeData(Profile \$profile)
    {
        \$data = [
            'template_count' => 0,
            'block_count' => 0,
            'macro_count' => 0,
        ];

        \$templates = [];
        foreach (\$profile as \$p) {
            \$d = \$this->computeData(\$p);

            \$data['template_count'] += (\$p->isTemplate() ? 1 : 0) + \$d['template_count'];
            \$data['block_count'] += (\$p->isBlock() ? 1 : 0) + \$d['block_count'];
            \$data['macro_count'] += (\$p->isMacro() ? 1 : 0) + \$d['macro_count'];

            if (\$p->isTemplate()) {
                if (!isset(\$templates[\$p->getTemplate()])) {
                    \$templates[\$p->getTemplate()] = 1;
                } else {
                    ++\$templates[\$p->getTemplate()];
                }
            }

            foreach (\$d['templates'] as \$template => \$count) {
                if (!isset(\$templates[\$template])) {
                    \$templates[\$template] = \$count;
                } else {
                    \$templates[\$template] += \$count;
                }
            }
        }
        \$data['templates'] = \$templates;

        return \$data;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'twig';
    }
}
", "@app/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\DataCollector\\TwigDataCollector.php");
    }
}
