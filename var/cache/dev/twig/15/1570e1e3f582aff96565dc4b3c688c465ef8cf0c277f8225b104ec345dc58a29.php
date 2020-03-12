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

/* @app/vendor/twig/twig/src/Markup.php */
class __TwigTemplate_9a2321b4196e0906547929b76b7935914b8e96b62fda6176d841297a3d084d9c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Markup.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

/**
 * Marks a content as safe.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Markup implements \\Countable, \\JsonSerializable
{
    private \$content;
    private \$charset;

    public function __construct(\$content, \$charset)
    {
        \$this->content = (string) \$content;
        \$this->charset = \$charset;
    }

    public function __toString()
    {
        return \$this->content;
    }

    public function count()
    {
        return mb_strlen(\$this->content, \$this->charset);
    }

    public function jsonSerialize()
    {
        return \$this->content;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Markup.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

/**
 * Marks a content as safe.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Markup implements \\Countable, \\JsonSerializable
{
    private \$content;
    private \$charset;

    public function __construct(\$content, \$charset)
    {
        \$this->content = (string) \$content;
        \$this->charset = \$charset;
    }

    public function __toString()
    {
        return \$this->content;
    }

    public function count()
    {
        return mb_strlen(\$this->content, \$this->charset);
    }

    public function jsonSerialize()
    {
        return \$this->content;
    }
}
", "@app/vendor/twig/twig/src/Markup.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Markup.php");
    }
}
