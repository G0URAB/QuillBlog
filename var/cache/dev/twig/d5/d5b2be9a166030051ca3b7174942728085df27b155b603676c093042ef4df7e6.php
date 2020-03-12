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

/* @app/vendor/symfony/http-foundation/Session/Flash/FlashBagInterface.php */
class __TwigTemplate_f277a591d9db65be74e0749cc9c01a9226629dbd9a6f3534fe218be1873a2417 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Session/Flash/FlashBagInterface.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Flash;

use Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface;

/**
 * FlashBagInterface.
 *
 * @author Drak <drak@zikula.org>
 */
interface FlashBagInterface extends SessionBagInterface
{
    /**
     * Adds a flash message for the given type.
     *
     * @param mixed \$message
     */
    public function add(string \$type, \$message);

    /**
     * Registers one or more messages for a given type.
     *
     * @param string|array \$messages
     */
    public function set(string \$type, \$messages);

    /**
     * Gets flash messages for a given type.
     *
     * @param string \$type    Message category type
     * @param array  \$default Default value if \$type does not exist
     *
     * @return array
     */
    public function peek(string \$type, array \$default = []);

    /**
     * Gets all flash messages.
     *
     * @return array
     */
    public function peekAll();

    /**
     * Gets and clears flash from the stack.
     *
     * @param array \$default Default value if \$type does not exist
     *
     * @return array
     */
    public function get(string \$type, array \$default = []);

    /**
     * Gets and clears flashes from the stack.
     *
     * @return array
     */
    public function all();

    /**
     * Sets all flash messages.
     */
    public function setAll(array \$messages);

    /**
     * Has flash messages for a given type?
     *
     * @return bool
     */
    public function has(string \$type);

    /**
     * Returns a list of all defined types.
     *
     * @return array
     */
    public function keys();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Session/Flash/FlashBagInterface.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Flash;

use Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface;

/**
 * FlashBagInterface.
 *
 * @author Drak <drak@zikula.org>
 */
interface FlashBagInterface extends SessionBagInterface
{
    /**
     * Adds a flash message for the given type.
     *
     * @param mixed \$message
     */
    public function add(string \$type, \$message);

    /**
     * Registers one or more messages for a given type.
     *
     * @param string|array \$messages
     */
    public function set(string \$type, \$messages);

    /**
     * Gets flash messages for a given type.
     *
     * @param string \$type    Message category type
     * @param array  \$default Default value if \$type does not exist
     *
     * @return array
     */
    public function peek(string \$type, array \$default = []);

    /**
     * Gets all flash messages.
     *
     * @return array
     */
    public function peekAll();

    /**
     * Gets and clears flash from the stack.
     *
     * @param array \$default Default value if \$type does not exist
     *
     * @return array
     */
    public function get(string \$type, array \$default = []);

    /**
     * Gets and clears flashes from the stack.
     *
     * @return array
     */
    public function all();

    /**
     * Sets all flash messages.
     */
    public function setAll(array \$messages);

    /**
     * Has flash messages for a given type?
     *
     * @return bool
     */
    public function has(string \$type);

    /**
     * Returns a list of all defined types.
     *
     * @return array
     */
    public function keys();
}
", "@app/vendor/symfony/http-foundation/Session/Flash/FlashBagInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBagInterface.php");
    }
}
