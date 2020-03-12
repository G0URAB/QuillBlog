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

/* @app/vendor/symfony/http-foundation/Session/SessionInterface.php */
class __TwigTemplate_ea6ae9d9957efbf30a5c43ed8ece97a12107f63ce89c867f24df5fadc904b52a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Session/SessionInterface.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session;

use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag;

/**
 * Interface for the session.
 *
 * @author Drak <drak@zikula.org>
 */
interface SessionInterface
{
    /**
     * Starts the session storage.
     *
     * @return bool
     *
     * @throws \\RuntimeException if session fails to start
     */
    public function start();

    /**
     * Returns the session ID.
     *
     * @return string
     */
    public function getId();

    /**
     * Sets the session ID.
     */
    public function setId(string \$id);

    /**
     * Returns the session name.
     *
     * @return string
     */
    public function getName();

    /**
     * Sets the session name.
     */
    public function setName(string \$name);

    /**
     * Invalidates the current session.
     *
     * Clears all session attributes and flashes and regenerates the
     * session and deletes the old session from persistence.
     *
     * @param int \$lifetime Sets the cookie lifetime for the session cookie. A null value
     *                      will leave the system settings unchanged, 0 sets the cookie
     *                      to expire with browser session. Time is in seconds, and is
     *                      not a Unix timestamp.
     *
     * @return bool
     */
    public function invalidate(int \$lifetime = null);

    /**
     * Migrates the current session to a new session id while maintaining all
     * session attributes.
     *
     * @param bool \$destroy  Whether to delete the old session or leave it to garbage collection
     * @param int  \$lifetime Sets the cookie lifetime for the session cookie. A null value
     *                       will leave the system settings unchanged, 0 sets the cookie
     *                       to expire with browser session. Time is in seconds, and is
     *                       not a Unix timestamp.
     *
     * @return bool
     */
    public function migrate(bool \$destroy = false, int \$lifetime = null);

    /**
     * Force the session to be saved and closed.
     *
     * This method is generally not required for real sessions as
     * the session will be automatically saved at the end of
     * code execution.
     */
    public function save();

    /**
     * Checks if an attribute is defined.
     *
     * @return bool
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

    /**
     * Sets attributes.
     */
    public function replace(array \$attributes);

    /**
     * Removes an attribute.
     *
     * @return mixed The removed value or null when it does not exist
     */
    public function remove(string \$name);

    /**
     * Clears all attributes.
     */
    public function clear();

    /**
     * Checks if the session was started.
     *
     * @return bool
     */
    public function isStarted();

    /**
     * Registers a SessionBagInterface with the session.
     */
    public function registerBag(SessionBagInterface \$bag);

    /**
     * Gets a bag instance by name.
     *
     * @return SessionBagInterface
     */
    public function getBag(string \$name);

    /**
     * Gets session meta.
     *
     * @return MetadataBag
     */
    public function getMetadataBag();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Session/SessionInterface.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session;

use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag;

/**
 * Interface for the session.
 *
 * @author Drak <drak@zikula.org>
 */
interface SessionInterface
{
    /**
     * Starts the session storage.
     *
     * @return bool
     *
     * @throws \\RuntimeException if session fails to start
     */
    public function start();

    /**
     * Returns the session ID.
     *
     * @return string
     */
    public function getId();

    /**
     * Sets the session ID.
     */
    public function setId(string \$id);

    /**
     * Returns the session name.
     *
     * @return string
     */
    public function getName();

    /**
     * Sets the session name.
     */
    public function setName(string \$name);

    /**
     * Invalidates the current session.
     *
     * Clears all session attributes and flashes and regenerates the
     * session and deletes the old session from persistence.
     *
     * @param int \$lifetime Sets the cookie lifetime for the session cookie. A null value
     *                      will leave the system settings unchanged, 0 sets the cookie
     *                      to expire with browser session. Time is in seconds, and is
     *                      not a Unix timestamp.
     *
     * @return bool
     */
    public function invalidate(int \$lifetime = null);

    /**
     * Migrates the current session to a new session id while maintaining all
     * session attributes.
     *
     * @param bool \$destroy  Whether to delete the old session or leave it to garbage collection
     * @param int  \$lifetime Sets the cookie lifetime for the session cookie. A null value
     *                       will leave the system settings unchanged, 0 sets the cookie
     *                       to expire with browser session. Time is in seconds, and is
     *                       not a Unix timestamp.
     *
     * @return bool
     */
    public function migrate(bool \$destroy = false, int \$lifetime = null);

    /**
     * Force the session to be saved and closed.
     *
     * This method is generally not required for real sessions as
     * the session will be automatically saved at the end of
     * code execution.
     */
    public function save();

    /**
     * Checks if an attribute is defined.
     *
     * @return bool
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

    /**
     * Sets attributes.
     */
    public function replace(array \$attributes);

    /**
     * Removes an attribute.
     *
     * @return mixed The removed value or null when it does not exist
     */
    public function remove(string \$name);

    /**
     * Clears all attributes.
     */
    public function clear();

    /**
     * Checks if the session was started.
     *
     * @return bool
     */
    public function isStarted();

    /**
     * Registers a SessionBagInterface with the session.
     */
    public function registerBag(SessionBagInterface \$bag);

    /**
     * Gets a bag instance by name.
     *
     * @return SessionBagInterface
     */
    public function getBag(string \$name);

    /**
     * Gets session meta.
     *
     * @return MetadataBag
     */
    public function getMetadataBag();
}
", "@app/vendor/symfony/http-foundation/Session/SessionInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Session\\SessionInterface.php");
    }
}
