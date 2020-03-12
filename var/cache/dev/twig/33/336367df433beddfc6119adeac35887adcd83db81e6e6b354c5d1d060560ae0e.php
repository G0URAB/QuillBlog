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

/* @app/vendor/symfony/config/Resource/ResourceInterface.php */
class __TwigTemplate_a54ddcbfb1079022efb7140e6b3df42f61e3382c9d867352c04207165141734c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Resource/ResourceInterface.php"));

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

namespace Symfony\\Component\\Config\\Resource;

/**
 * ResourceInterface is the interface that must be implemented by all Resource classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface ResourceInterface
{
    /**
     * Returns a string representation of the Resource.
     *
     * This method is necessary to allow for resource de-duplication, for example by means
     * of array_unique(). The string returned need not have a particular meaning, but has
     * to be identical for different ResourceInterface instances referring to the same
     * resource; and it should be unlikely to collide with that of other, unrelated
     * resource instances.
     *
     * @return string A string representation unique to the underlying Resource
     */
    public function __toString();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Resource/ResourceInterface.php";
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

namespace Symfony\\Component\\Config\\Resource;

/**
 * ResourceInterface is the interface that must be implemented by all Resource classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface ResourceInterface
{
    /**
     * Returns a string representation of the Resource.
     *
     * This method is necessary to allow for resource de-duplication, for example by means
     * of array_unique(). The string returned need not have a particular meaning, but has
     * to be identical for different ResourceInterface instances referring to the same
     * resource; and it should be unlikely to collide with that of other, unrelated
     * resource instances.
     *
     * @return string A string representation unique to the underlying Resource
     */
    public function __toString();
}
", "@app/vendor/symfony/config/Resource/ResourceInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Resource\\ResourceInterface.php");
    }
}
