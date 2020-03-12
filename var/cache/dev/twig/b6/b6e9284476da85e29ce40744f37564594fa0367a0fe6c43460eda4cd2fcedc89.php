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

/* @app/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php */
class __TwigTemplate_2fa3723a4d8ffca7810661ca0b3a902028bfb5d4eb8792b6429f446574e348e3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage;

use Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface;

/**
 * Metadata container.
 *
 * Adds metadata to the session.
 *
 * @author Drak <drak@zikula.org>
 */
class MetadataBag implements SessionBagInterface
{
    const CREATED = 'c';
    const UPDATED = 'u';
    const LIFETIME = 'l';

    /**
     * @var string
     */
    private \$name = '__metadata';

    /**
     * @var string
     */
    private \$storageKey;

    /**
     * @var array
     */
    protected \$meta = [self::CREATED => 0, self::UPDATED => 0, self::LIFETIME => 0];

    /**
     * Unix timestamp.
     *
     * @var int
     */
    private \$lastUsed;

    /**
     * @var int
     */
    private \$updateThreshold;

    /**
     * @param string \$storageKey      The key used to store bag in the session
     * @param int    \$updateThreshold The time to wait between two UPDATED updates
     */
    public function __construct(string \$storageKey = '_sf2_meta', int \$updateThreshold = 0)
    {
        \$this->storageKey = \$storageKey;
        \$this->updateThreshold = \$updateThreshold;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array &\$array)
    {
        \$this->meta = &\$array;

        if (isset(\$array[self::CREATED])) {
            \$this->lastUsed = \$this->meta[self::UPDATED];

            \$timeStamp = time();
            if (\$timeStamp - \$array[self::UPDATED] >= \$this->updateThreshold) {
                \$this->meta[self::UPDATED] = \$timeStamp;
            }
        } else {
            \$this->stampCreated();
        }
    }

    /**
     * Gets the lifetime that the session cookie was set with.
     *
     * @return int
     */
    public function getLifetime()
    {
        return \$this->meta[self::LIFETIME];
    }

    /**
     * Stamps a new session's metadata.
     *
     * @param int \$lifetime Sets the cookie lifetime for the session cookie. A null value
     *                      will leave the system settings unchanged, 0 sets the cookie
     *                      to expire with browser session. Time is in seconds, and is
     *                      not a Unix timestamp.
     */
    public function stampNew(int \$lifetime = null)
    {
        \$this->stampCreated(\$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageKey()
    {
        return \$this->storageKey;
    }

    /**
     * Gets the created timestamp metadata.
     *
     * @return int Unix timestamp
     */
    public function getCreated()
    {
        return \$this->meta[self::CREATED];
    }

    /**
     * Gets the last used metadata.
     *
     * @return int Unix timestamp
     */
    public function getLastUsed()
    {
        return \$this->lastUsed;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        // nothing to do
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Sets name.
     */
    public function setName(string \$name)
    {
        \$this->name = \$name;
    }

    private function stampCreated(int \$lifetime = null): void
    {
        \$timeStamp = time();
        \$this->meta[self::CREATED] = \$this->meta[self::UPDATED] = \$this->lastUsed = \$timeStamp;
        \$this->meta[self::LIFETIME] = (null === \$lifetime) ? ini_get('session.cookie_lifetime') : \$lifetime;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage;

use Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface;

/**
 * Metadata container.
 *
 * Adds metadata to the session.
 *
 * @author Drak <drak@zikula.org>
 */
class MetadataBag implements SessionBagInterface
{
    const CREATED = 'c';
    const UPDATED = 'u';
    const LIFETIME = 'l';

    /**
     * @var string
     */
    private \$name = '__metadata';

    /**
     * @var string
     */
    private \$storageKey;

    /**
     * @var array
     */
    protected \$meta = [self::CREATED => 0, self::UPDATED => 0, self::LIFETIME => 0];

    /**
     * Unix timestamp.
     *
     * @var int
     */
    private \$lastUsed;

    /**
     * @var int
     */
    private \$updateThreshold;

    /**
     * @param string \$storageKey      The key used to store bag in the session
     * @param int    \$updateThreshold The time to wait between two UPDATED updates
     */
    public function __construct(string \$storageKey = '_sf2_meta', int \$updateThreshold = 0)
    {
        \$this->storageKey = \$storageKey;
        \$this->updateThreshold = \$updateThreshold;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array &\$array)
    {
        \$this->meta = &\$array;

        if (isset(\$array[self::CREATED])) {
            \$this->lastUsed = \$this->meta[self::UPDATED];

            \$timeStamp = time();
            if (\$timeStamp - \$array[self::UPDATED] >= \$this->updateThreshold) {
                \$this->meta[self::UPDATED] = \$timeStamp;
            }
        } else {
            \$this->stampCreated();
        }
    }

    /**
     * Gets the lifetime that the session cookie was set with.
     *
     * @return int
     */
    public function getLifetime()
    {
        return \$this->meta[self::LIFETIME];
    }

    /**
     * Stamps a new session's metadata.
     *
     * @param int \$lifetime Sets the cookie lifetime for the session cookie. A null value
     *                      will leave the system settings unchanged, 0 sets the cookie
     *                      to expire with browser session. Time is in seconds, and is
     *                      not a Unix timestamp.
     */
    public function stampNew(int \$lifetime = null)
    {
        \$this->stampCreated(\$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageKey()
    {
        return \$this->storageKey;
    }

    /**
     * Gets the created timestamp metadata.
     *
     * @return int Unix timestamp
     */
    public function getCreated()
    {
        return \$this->meta[self::CREATED];
    }

    /**
     * Gets the last used metadata.
     *
     * @return int Unix timestamp
     */
    public function getLastUsed()
    {
        return \$this->lastUsed;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        // nothing to do
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Sets name.
     */
    public function setName(string \$name)
    {
        \$this->name = \$name;
    }

    private function stampCreated(int \$lifetime = null): void
    {
        \$timeStamp = time();
        \$this->meta[self::CREATED] = \$this->meta[self::UPDATED] = \$this->lastUsed = \$timeStamp;
        \$this->meta[self::LIFETIME] = (null === \$lifetime) ? ini_get('session.cookie_lifetime') : \$lifetime;
    }
}
", "@app/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Session\\Storage\\MetadataBag.php");
    }
}
