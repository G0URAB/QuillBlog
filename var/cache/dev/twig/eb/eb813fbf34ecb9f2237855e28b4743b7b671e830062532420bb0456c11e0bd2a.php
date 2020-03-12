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

/* @app/vendor/symfony/http-foundation/Session/Flash/FlashBag.php */
class __TwigTemplate_08cf907241f84803472eebebe9de0c9d8dc967fb933a74d6e364fb5790dee484 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Session/Flash/FlashBag.php"));

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
 * FlashBag flash message container.
 *
 * @author Drak <drak@zikula.org>
 */
class FlashBag implements FlashBagInterface
{
    private \$name = 'flashes';
    private \$flashes = [];
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
    }

    /**
     * {@inheritdoc}
     */
    public function add(string \$type, \$message)
    {
        \$this->flashes[\$type][] = \$message;
    }

    /**
     * {@inheritdoc}
     */
    public function peek(string \$type, array \$default = [])
    {
        return \$this->has(\$type) ? \$this->flashes[\$type] : \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function peekAll()
    {
        return \$this->flashes;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$type, array \$default = [])
    {
        if (!\$this->has(\$type)) {
            return \$default;
        }

        \$return = \$this->flashes[\$type];

        unset(\$this->flashes[\$type]);

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        \$return = \$this->peekAll();
        \$this->flashes = [];

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    public function set(string \$type, \$messages)
    {
        \$this->flashes[\$type] = (array) \$messages;
    }

    /**
     * {@inheritdoc}
     */
    public function setAll(array \$messages)
    {
        \$this->flashes = \$messages;
    }

    /**
     * {@inheritdoc}
     */
    public function has(string \$type)
    {
        return \\array_key_exists(\$type, \$this->flashes) && \$this->flashes[\$type];
    }

    /**
     * {@inheritdoc}
     */
    public function keys()
    {
        return array_keys(\$this->flashes);
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
        return "@app/vendor/symfony/http-foundation/Session/Flash/FlashBag.php";
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
 * FlashBag flash message container.
 *
 * @author Drak <drak@zikula.org>
 */
class FlashBag implements FlashBagInterface
{
    private \$name = 'flashes';
    private \$flashes = [];
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
    }

    /**
     * {@inheritdoc}
     */
    public function add(string \$type, \$message)
    {
        \$this->flashes[\$type][] = \$message;
    }

    /**
     * {@inheritdoc}
     */
    public function peek(string \$type, array \$default = [])
    {
        return \$this->has(\$type) ? \$this->flashes[\$type] : \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function peekAll()
    {
        return \$this->flashes;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$type, array \$default = [])
    {
        if (!\$this->has(\$type)) {
            return \$default;
        }

        \$return = \$this->flashes[\$type];

        unset(\$this->flashes[\$type]);

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        \$return = \$this->peekAll();
        \$this->flashes = [];

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    public function set(string \$type, \$messages)
    {
        \$this->flashes[\$type] = (array) \$messages;
    }

    /**
     * {@inheritdoc}
     */
    public function setAll(array \$messages)
    {
        \$this->flashes = \$messages;
    }

    /**
     * {@inheritdoc}
     */
    public function has(string \$type)
    {
        return \\array_key_exists(\$type, \$this->flashes) && \$this->flashes[\$type];
    }

    /**
     * {@inheritdoc}
     */
    public function keys()
    {
        return array_keys(\$this->flashes);
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
", "@app/vendor/symfony/http-foundation/Session/Flash/FlashBag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBag.php");
    }
}
