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

/* @app/vendor/symfony/asset/Context/NullContext.php */
class __TwigTemplate_4307b3f617f49a342adb64082ddf700c88819f2be57670888029d75fbf7f7b0e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/asset/Context/NullContext.php"));

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

namespace Symfony\\Component\\Asset\\Context;

/**
 * A context that does nothing.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class NullContext implements ContextInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBasePath()
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function isSecure()
    {
        return false;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/asset/Context/NullContext.php";
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

namespace Symfony\\Component\\Asset\\Context;

/**
 * A context that does nothing.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class NullContext implements ContextInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBasePath()
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function isSecure()
    {
        return false;
    }
}
", "@app/vendor/symfony/asset/Context/NullContext.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\asset\\Context\\NullContext.php");
    }
}
