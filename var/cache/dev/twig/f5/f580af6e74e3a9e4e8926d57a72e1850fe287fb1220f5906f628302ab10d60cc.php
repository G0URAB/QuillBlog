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

/* @app/vendor/twig/twig/src/RuntimeLoader/FactoryRuntimeLoader.php */
class __TwigTemplate_c52604ff39d3bbdb8af81536e98d03a9279dcdef06e32b80f777a19cd0f917dc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/RuntimeLoader/FactoryRuntimeLoader.php"));

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

namespace Twig\\RuntimeLoader;

/**
 * Lazy loads the runtime implementations for a Twig element.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class FactoryRuntimeLoader implements RuntimeLoaderInterface
{
    private \$map;

    /**
     * @param array \$map An array where keys are class names and values factory callables
     */
    public function __construct(array \$map = [])
    {
        \$this->map = \$map;
    }

    public function load(string \$class)
    {
        if (!isset(\$this->map[\$class])) {
            return null;
        }

        \$runtimeFactory = \$this->map[\$class];

        return \$runtimeFactory();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/RuntimeLoader/FactoryRuntimeLoader.php";
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

namespace Twig\\RuntimeLoader;

/**
 * Lazy loads the runtime implementations for a Twig element.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class FactoryRuntimeLoader implements RuntimeLoaderInterface
{
    private \$map;

    /**
     * @param array \$map An array where keys are class names and values factory callables
     */
    public function __construct(array \$map = [])
    {
        \$this->map = \$map;
    }

    public function load(string \$class)
    {
        if (!isset(\$this->map[\$class])) {
            return null;
        }

        \$runtimeFactory = \$this->map[\$class];

        return \$runtimeFactory();
    }
}
", "@app/vendor/twig/twig/src/RuntimeLoader/FactoryRuntimeLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\RuntimeLoader\\FactoryRuntimeLoader.php");
    }
}
