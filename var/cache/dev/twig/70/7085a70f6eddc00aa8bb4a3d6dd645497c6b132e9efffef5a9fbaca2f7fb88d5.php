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

/* @app/vendor/symfony/console/Formatter/OutputFormatterStyleInterface.php */
class __TwigTemplate_256100bb2e3155abcf70586a2f42543494fbc85e7474d7c6971dbe573ed46896 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Formatter/OutputFormatterStyleInterface.php"));

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

namespace Symfony\\Component\\Console\\Formatter;

/**
 * Formatter style interface for defining styles.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface OutputFormatterStyleInterface
{
    /**
     * Sets style foreground color.
     */
    public function setForeground(string \$color = null);

    /**
     * Sets style background color.
     */
    public function setBackground(string \$color = null);

    /**
     * Sets some specific style option.
     */
    public function setOption(string \$option);

    /**
     * Unsets some specific style option.
     */
    public function unsetOption(string \$option);

    /**
     * Sets multiple style options at once.
     */
    public function setOptions(array \$options);

    /**
     * Applies the style to a given text.
     *
     * @return string
     */
    public function apply(string \$text);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Formatter/OutputFormatterStyleInterface.php";
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

namespace Symfony\\Component\\Console\\Formatter;

/**
 * Formatter style interface for defining styles.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface OutputFormatterStyleInterface
{
    /**
     * Sets style foreground color.
     */
    public function setForeground(string \$color = null);

    /**
     * Sets style background color.
     */
    public function setBackground(string \$color = null);

    /**
     * Sets some specific style option.
     */
    public function setOption(string \$option);

    /**
     * Unsets some specific style option.
     */
    public function unsetOption(string \$option);

    /**
     * Sets multiple style options at once.
     */
    public function setOptions(array \$options);

    /**
     * Applies the style to a given text.
     *
     * @return string
     */
    public function apply(string \$text);
}
", "@app/vendor/symfony/console/Formatter/OutputFormatterStyleInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Formatter\\OutputFormatterStyleInterface.php");
    }
}
