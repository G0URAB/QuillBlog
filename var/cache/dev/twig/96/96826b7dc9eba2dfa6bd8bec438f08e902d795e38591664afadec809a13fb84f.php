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

/* @app/vendor/symfony/http-foundation/AcceptHeaderItem.php */
class __TwigTemplate_9c39641a7c83c171aaa7afb808731211c51e9acfaa44bae6c7a7ae2f03c1cccb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/AcceptHeaderItem.php"));

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

namespace Symfony\\Component\\HttpFoundation;

/**
 * Represents an Accept-* header item.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class AcceptHeaderItem
{
    private \$value;
    private \$quality = 1.0;
    private \$index = 0;
    private \$attributes = [];

    public function __construct(string \$value, array \$attributes = [])
    {
        \$this->value = \$value;
        foreach (\$attributes as \$name => \$value) {
            \$this->setAttribute(\$name, \$value);
        }
    }

    /**
     * Builds an AcceptHeaderInstance instance from a string.
     *
     * @return self
     */
    public static function fromString(?string \$itemValue)
    {
        \$parts = HeaderUtils::split(\$itemValue ?? '', ';=');

        \$part = array_shift(\$parts);
        \$attributes = HeaderUtils::combine(\$parts);

        return new self(\$part[0], \$attributes);
    }

    /**
     * Returns header value's string representation.
     *
     * @return string
     */
    public function __toString()
    {
        \$string = \$this->value.(\$this->quality < 1 ? ';q='.\$this->quality : '');
        if (\\count(\$this->attributes) > 0) {
            \$string .= '; '.HeaderUtils::toString(\$this->attributes, ';');
        }

        return \$string;
    }

    /**
     * Set the item value.
     *
     * @return \$this
     */
    public function setValue(string \$value)
    {
        \$this->value = \$value;

        return \$this;
    }

    /**
     * Returns the item value.
     *
     * @return string
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Set the item quality.
     *
     * @return \$this
     */
    public function setQuality(float \$quality)
    {
        \$this->quality = \$quality;

        return \$this;
    }

    /**
     * Returns the item quality.
     *
     * @return float
     */
    public function getQuality()
    {
        return \$this->quality;
    }

    /**
     * Set the item index.
     *
     * @return \$this
     */
    public function setIndex(int \$index)
    {
        \$this->index = \$index;

        return \$this;
    }

    /**
     * Returns the item index.
     *
     * @return int
     */
    public function getIndex()
    {
        return \$this->index;
    }

    /**
     * Tests if an attribute exists.
     *
     * @return bool
     */
    public function hasAttribute(string \$name)
    {
        return isset(\$this->attributes[\$name]);
    }

    /**
     * Returns an attribute by its name.
     *
     * @param mixed \$default
     *
     * @return mixed
     */
    public function getAttribute(string \$name, \$default = null)
    {
        return isset(\$this->attributes[\$name]) ? \$this->attributes[\$name] : \$default;
    }

    /**
     * Returns all attributes.
     *
     * @return array
     */
    public function getAttributes()
    {
        return \$this->attributes;
    }

    /**
     * Set an attribute.
     *
     * @return \$this
     */
    public function setAttribute(string \$name, string \$value)
    {
        if ('q' === \$name) {
            \$this->quality = (float) \$value;
        } else {
            \$this->attributes[\$name] = \$value;
        }

        return \$this;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/AcceptHeaderItem.php";
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

namespace Symfony\\Component\\HttpFoundation;

/**
 * Represents an Accept-* header item.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class AcceptHeaderItem
{
    private \$value;
    private \$quality = 1.0;
    private \$index = 0;
    private \$attributes = [];

    public function __construct(string \$value, array \$attributes = [])
    {
        \$this->value = \$value;
        foreach (\$attributes as \$name => \$value) {
            \$this->setAttribute(\$name, \$value);
        }
    }

    /**
     * Builds an AcceptHeaderInstance instance from a string.
     *
     * @return self
     */
    public static function fromString(?string \$itemValue)
    {
        \$parts = HeaderUtils::split(\$itemValue ?? '', ';=');

        \$part = array_shift(\$parts);
        \$attributes = HeaderUtils::combine(\$parts);

        return new self(\$part[0], \$attributes);
    }

    /**
     * Returns header value's string representation.
     *
     * @return string
     */
    public function __toString()
    {
        \$string = \$this->value.(\$this->quality < 1 ? ';q='.\$this->quality : '');
        if (\\count(\$this->attributes) > 0) {
            \$string .= '; '.HeaderUtils::toString(\$this->attributes, ';');
        }

        return \$string;
    }

    /**
     * Set the item value.
     *
     * @return \$this
     */
    public function setValue(string \$value)
    {
        \$this->value = \$value;

        return \$this;
    }

    /**
     * Returns the item value.
     *
     * @return string
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Set the item quality.
     *
     * @return \$this
     */
    public function setQuality(float \$quality)
    {
        \$this->quality = \$quality;

        return \$this;
    }

    /**
     * Returns the item quality.
     *
     * @return float
     */
    public function getQuality()
    {
        return \$this->quality;
    }

    /**
     * Set the item index.
     *
     * @return \$this
     */
    public function setIndex(int \$index)
    {
        \$this->index = \$index;

        return \$this;
    }

    /**
     * Returns the item index.
     *
     * @return int
     */
    public function getIndex()
    {
        return \$this->index;
    }

    /**
     * Tests if an attribute exists.
     *
     * @return bool
     */
    public function hasAttribute(string \$name)
    {
        return isset(\$this->attributes[\$name]);
    }

    /**
     * Returns an attribute by its name.
     *
     * @param mixed \$default
     *
     * @return mixed
     */
    public function getAttribute(string \$name, \$default = null)
    {
        return isset(\$this->attributes[\$name]) ? \$this->attributes[\$name] : \$default;
    }

    /**
     * Returns all attributes.
     *
     * @return array
     */
    public function getAttributes()
    {
        return \$this->attributes;
    }

    /**
     * Set an attribute.
     *
     * @return \$this
     */
    public function setAttribute(string \$name, string \$value)
    {
        if ('q' === \$name) {
            \$this->quality = (float) \$value;
        } else {
            \$this->attributes[\$name] = \$value;
        }

        return \$this;
    }
}
", "@app/vendor/symfony/http-foundation/AcceptHeaderItem.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\AcceptHeaderItem.php");
    }
}
