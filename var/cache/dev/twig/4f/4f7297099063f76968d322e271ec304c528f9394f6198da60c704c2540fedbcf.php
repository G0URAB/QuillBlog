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

/* @app/vendor/symfony/http-foundation/Session/Flash/AutoExpireFlashBag.php */
class __TwigTemplate_6f7f92855a643a201906ee0bcc37304841095e73658993c1a03f02a96af2b0ed extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Session/Flash/AutoExpireFlashBag.php"));

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

/**
 * AutoExpireFlashBag flash message container.
 *
 * @author Drak <drak@zikula.org>
 */
class AutoExpireFlashBag implements FlashBagInterface
{
    private \$name = 'flashes';
    private \$flashes = ['display' => [], 'new' => []];
    private \$storageKey;

    /**
     * @param string \$storageKey The key used to store flashes in the session
     */
    public function __construct(string \$storageKey = '_symfony_flashes')
    {
        \$this->storageKey = \$storageKey;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    public function setName(string \$name)
    {
        \$this->name = \$name;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array &\$flashes)
    {
        \$this->flashes = &\$flashes;

        // The logic: messages from the last request will be stored in new, so we move them to previous
        // This request we will show what is in 'display'.  What is placed into 'new' this time round will
        // be moved to display next time round.
        \$this->flashes['display'] = \\array_key_exists('new', \$this->flashes) ? \$this->flashes['new'] : [];
        \$this->flashes['new'] = [];
    }

    /**
     * {@inheritdoc}
     */
    public function add(string \$type, \$message)
    {
        \$this->flashes['new'][\$type][] = \$message;
    }

    /**
     * {@inheritdoc}
     */
    public function peek(string \$type, array \$default = [])
    {
        return \$this->has(\$type) ? \$this->flashes['display'][\$type] : \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function peekAll()
    {
        return \\array_key_exists('display', \$this->flashes) ? (array) \$this->flashes['display'] : [];
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$type, array \$default = [])
    {
        \$return = \$default;

        if (!\$this->has(\$type)) {
            return \$return;
        }

        if (isset(\$this->flashes['display'][\$type])) {
            \$return = \$this->flashes['display'][\$type];
            unset(\$this->flashes['display'][\$type]);
        }

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        \$return = \$this->flashes['display'];
        \$this->flashes['display'] = [];

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    public function setAll(array \$messages)
    {
        \$this->flashes['new'] = \$messages;
    }

    /**
     * {@inheritdoc}
     */
    public function set(string \$type, \$messages)
    {
        \$this->flashes['new'][\$type] = (array) \$messages;
    }

    /**
     * {@inheritdoc}
     */
    public function has(string \$type)
    {
        return \\array_key_exists(\$type, \$this->flashes['display']) && \$this->flashes['display'][\$type];
    }

    /**
     * {@inheritdoc}
     */
    public function keys()
    {
        return array_keys(\$this->flashes['display']);
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageKey()
    {
        return \$this->storageKey;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return \$this->all();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Session/Flash/AutoExpireFlashBag.php";
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

/**
 * AutoExpireFlashBag flash message container.
 *
 * @author Drak <drak@zikula.org>
 */
class AutoExpireFlashBag implements FlashBagInterface
{
    private \$name = 'flashes';
    private \$flashes = ['display' => [], 'new' => []];
    private \$storageKey;

    /**
     * @param string \$storageKey The key used to store flashes in the session
     */
    public function __construct(string \$storageKey = '_symfony_flashes')
    {
        \$this->storageKey = \$storageKey;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    public function setName(string \$name)
    {
        \$this->name = \$name;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array &\$flashes)
    {
        \$this->flashes = &\$flashes;

        // The logic: messages from the last request will be stored in new, so we move them to previous
        // This request we will show what is in 'display'.  What is placed into 'new' this time round will
        // be moved to display next time round.
        \$this->flashes['display'] = \\array_key_exists('new', \$this->flashes) ? \$this->flashes['new'] : [];
        \$this->flashes['new'] = [];
    }

    /**
     * {@inheritdoc}
     */
    public function add(string \$type, \$message)
    {
        \$this->flashes['new'][\$type][] = \$message;
    }

    /**
     * {@inheritdoc}
     */
    public function peek(string \$type, array \$default = [])
    {
        return \$this->has(\$type) ? \$this->flashes['display'][\$type] : \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function peekAll()
    {
        return \\array_key_exists('display', \$this->flashes) ? (array) \$this->flashes['display'] : [];
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$type, array \$default = [])
    {
        \$return = \$default;

        if (!\$this->has(\$type)) {
            return \$return;
        }

        if (isset(\$this->flashes['display'][\$type])) {
            \$return = \$this->flashes['display'][\$type];
            unset(\$this->flashes['display'][\$type]);
        }

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        \$return = \$this->flashes['display'];
        \$this->flashes['display'] = [];

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    public function setAll(array \$messages)
    {
        \$this->flashes['new'] = \$messages;
    }

    /**
     * {@inheritdoc}
     */
    public function set(string \$type, \$messages)
    {
        \$this->flashes['new'][\$type] = (array) \$messages;
    }

    /**
     * {@inheritdoc}
     */
    public function has(string \$type)
    {
        return \\array_key_exists(\$type, \$this->flashes['display']) && \$this->flashes['display'][\$type];
    }

    /**
     * {@inheritdoc}
     */
    public function keys()
    {
        return array_keys(\$this->flashes['display']);
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageKey()
    {
        return \$this->storageKey;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return \$this->all();
    }
}
", "@app/vendor/symfony/http-foundation/Session/Flash/AutoExpireFlashBag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Session\\Flash\\AutoExpireFlashBag.php");
    }
}
