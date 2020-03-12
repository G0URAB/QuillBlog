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

/* @app/vendor/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php */
class __TwigTemplate_6830ebfba84d6a6265ac26898e8bce6556914fd54414f2f0319ff780ca184020 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Attribute;

use Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface;

/**
 * Attributes store.
 *
 * @author Drak <drak@zikula.org>
 */
interface AttributeBagInterface extends SessionBagInterface
{
    /**
     * Checks if an attribute is defined.
     *
     * @return bool true if the attribute is defined, false otherwise
     */
    public function has(string \$name);

    /**
     * Returns an attribute.
     *
     * @param mixed \$default The default value if not found
     *
     * @return mixed
     */
    public function get(string \$name, \$default = null);

    /**
     * Sets an attribute.
     *
     * @param mixed \$value
     */
    public function set(string \$name, \$value);

    /**
     * Returns attributes.
     *
     * @return array
     */
    public function all();

    public function replace(array \$attributes);

    /**
     * Removes an attribute.
     *
     * @return mixed The removed value or null when it does not exist
     */
    public function remove(string \$name);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Attribute;

use Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface;

/**
 * Attributes store.
 *
 * @author Drak <drak@zikula.org>
 */
interface AttributeBagInterface extends SessionBagInterface
{
    /**
     * Checks if an attribute is defined.
     *
     * @return bool true if the attribute is defined, false otherwise
     */
    public function has(string \$name);

    /**
     * Returns an attribute.
     *
     * @param mixed \$default The default value if not found
     *
     * @return mixed
     */
    public function get(string \$name, \$default = null);

    /**
     * Sets an attribute.
     *
     * @param mixed \$value
     */
    public function set(string \$name, \$value);

    /**
     * Returns attributes.
     *
     * @return array
     */
    public function all();

    public function replace(array \$attributes);

    /**
     * Removes an attribute.
     *
     * @return mixed The removed value or null when it does not exist
     */
    public function remove(string \$name);
}
", "@app/vendor/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Session\\Attribute\\AttributeBagInterface.php");
    }
}
