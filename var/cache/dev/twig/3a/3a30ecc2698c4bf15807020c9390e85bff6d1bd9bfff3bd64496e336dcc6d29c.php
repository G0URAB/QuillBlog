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

/* @app/vendor/symfony/console/Helper/FormatterHelper.php */
class __TwigTemplate_f7bb64435f6d4ae6c490a3a120e20308cc05d761ae7889d4fb9d946d619272c2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Helper/FormatterHelper.php"));

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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Formatter\\OutputFormatter;

/**
 * The Formatter class provides helpers to format messages.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FormatterHelper extends Helper
{
    /**
     * Formats a message within a section.
     *
     * @return string The format section
     */
    public function formatSection(string \$section, string \$message, string \$style = 'info')
    {
        return sprintf('<%s>[%s]</%s> %s', \$style, \$section, \$style, \$message);
    }

    /**
     * Formats a message as a block of text.
     *
     * @param string|array \$messages The message to write in the block
     *
     * @return string The formatter message
     */
    public function formatBlock(\$messages, string \$style, bool \$large = false)
    {
        if (!\\is_array(\$messages)) {
            \$messages = [\$messages];
        }

        \$len = 0;
        \$lines = [];
        foreach (\$messages as \$message) {
            \$message = OutputFormatter::escape(\$message);
            \$lines[] = sprintf(\$large ? '  %s  ' : ' %s ', \$message);
            \$len = max(self::strlen(\$message) + (\$large ? 4 : 2), \$len);
        }

        \$messages = \$large ? [str_repeat(' ', \$len)] : [];
        for (\$i = 0; isset(\$lines[\$i]); ++\$i) {
            \$messages[] = \$lines[\$i].str_repeat(' ', \$len - self::strlen(\$lines[\$i]));
        }
        if (\$large) {
            \$messages[] = str_repeat(' ', \$len);
        }

        for (\$i = 0; isset(\$messages[\$i]); ++\$i) {
            \$messages[\$i] = sprintf('<%s>%s</%s>', \$style, \$messages[\$i], \$style);
        }

        return implode(\"\\n\", \$messages);
    }

    /**
     * Truncates a message to the given length.
     *
     * @return string
     */
    public function truncate(string \$message, int \$length, string \$suffix = '...')
    {
        \$computedLength = \$length - self::strlen(\$suffix);

        if (\$computedLength > self::strlen(\$message)) {
            return \$message;
        }

        return self::substr(\$message, 0, \$length).\$suffix;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'formatter';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Helper/FormatterHelper.php";
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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Formatter\\OutputFormatter;

/**
 * The Formatter class provides helpers to format messages.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FormatterHelper extends Helper
{
    /**
     * Formats a message within a section.
     *
     * @return string The format section
     */
    public function formatSection(string \$section, string \$message, string \$style = 'info')
    {
        return sprintf('<%s>[%s]</%s> %s', \$style, \$section, \$style, \$message);
    }

    /**
     * Formats a message as a block of text.
     *
     * @param string|array \$messages The message to write in the block
     *
     * @return string The formatter message
     */
    public function formatBlock(\$messages, string \$style, bool \$large = false)
    {
        if (!\\is_array(\$messages)) {
            \$messages = [\$messages];
        }

        \$len = 0;
        \$lines = [];
        foreach (\$messages as \$message) {
            \$message = OutputFormatter::escape(\$message);
            \$lines[] = sprintf(\$large ? '  %s  ' : ' %s ', \$message);
            \$len = max(self::strlen(\$message) + (\$large ? 4 : 2), \$len);
        }

        \$messages = \$large ? [str_repeat(' ', \$len)] : [];
        for (\$i = 0; isset(\$lines[\$i]); ++\$i) {
            \$messages[] = \$lines[\$i].str_repeat(' ', \$len - self::strlen(\$lines[\$i]));
        }
        if (\$large) {
            \$messages[] = str_repeat(' ', \$len);
        }

        for (\$i = 0; isset(\$messages[\$i]); ++\$i) {
            \$messages[\$i] = sprintf('<%s>%s</%s>', \$style, \$messages[\$i], \$style);
        }

        return implode(\"\\n\", \$messages);
    }

    /**
     * Truncates a message to the given length.
     *
     * @return string
     */
    public function truncate(string \$message, int \$length, string \$suffix = '...')
    {
        \$computedLength = \$length - self::strlen(\$suffix);

        if (\$computedLength > self::strlen(\$message)) {
            return \$message;
        }

        return self::substr(\$message, 0, \$length).\$suffix;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'formatter';
    }
}
", "@app/vendor/symfony/console/Helper/FormatterHelper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Helper\\FormatterHelper.php");
    }
}
