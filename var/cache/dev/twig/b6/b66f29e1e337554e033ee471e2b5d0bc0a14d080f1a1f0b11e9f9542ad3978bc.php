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

/* @app/vendor/symfony/mime/Header/UnstructuredHeader.php */
class __TwigTemplate_0e81c7fe1f3e39ce602111b6323254dea6c4d1a1ca8a7ffa9047772d5383955c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Header/UnstructuredHeader.php"));

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

namespace Symfony\\Component\\Mime\\Header;

/**
 * A Simple MIME Header.
 *
 * @author Chris Corbyn
 */
class UnstructuredHeader extends AbstractHeader
{
    private \$value;

    public function __construct(string \$name, string \$value)
    {
        parent::__construct(\$name);

        \$this->setValue(\$value);
    }

    /**
     * @param string \$body
     */
    public function setBody(\$body)
    {
        \$this->setValue(\$body);
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return \$this->getValue();
    }

    /**
     * Get the (unencoded) value of this header.
     */
    public function getValue(): string
    {
        return \$this->value;
    }

    /**
     * Set the (unencoded) value of this header.
     */
    public function setValue(string \$value)
    {
        \$this->value = \$value;
    }

    /**
     * Get the value of this header prepared for rendering.
     */
    public function getBodyAsString(): string
    {
        return \$this->encodeWords(\$this, \$this->value);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Header/UnstructuredHeader.php";
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

namespace Symfony\\Component\\Mime\\Header;

/**
 * A Simple MIME Header.
 *
 * @author Chris Corbyn
 */
class UnstructuredHeader extends AbstractHeader
{
    private \$value;

    public function __construct(string \$name, string \$value)
    {
        parent::__construct(\$name);

        \$this->setValue(\$value);
    }

    /**
     * @param string \$body
     */
    public function setBody(\$body)
    {
        \$this->setValue(\$body);
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return \$this->getValue();
    }

    /**
     * Get the (unencoded) value of this header.
     */
    public function getValue(): string
    {
        return \$this->value;
    }

    /**
     * Set the (unencoded) value of this header.
     */
    public function setValue(string \$value)
    {
        \$this->value = \$value;
    }

    /**
     * Get the value of this header prepared for rendering.
     */
    public function getBodyAsString(): string
    {
        return \$this->encodeWords(\$this, \$this->value);
    }
}
", "@app/vendor/symfony/mime/Header/UnstructuredHeader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Header\\UnstructuredHeader.php");
    }
}
