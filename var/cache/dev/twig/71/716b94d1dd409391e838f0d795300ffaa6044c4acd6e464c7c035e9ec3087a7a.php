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

/* @app/vendor/symfony/finder/Iterator/FilecontentFilterIterator.php */
class __TwigTemplate_f19050786891bfe0abf7e94b13738e4327b16fd8ce9fb6582566f768a7b3854d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/finder/Iterator/FilecontentFilterIterator.php"));

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

namespace Symfony\\Component\\Finder\\Iterator;

/**
 * FilecontentFilterIterator filters files by their contents using patterns (regexps or strings).
 *
 * @author Fabien Potencier  <fabien@symfony.com>
 * @author Włodzimierz Gajda <gajdaw@gajdaw.pl>
 */
class FilecontentFilterIterator extends MultiplePcreFilterIterator
{
    /**
     * Filters the iterator values.
     *
     * @return bool true if the value should be kept, false otherwise
     */
    public function accept()
    {
        if (!\$this->matchRegexps && !\$this->noMatchRegexps) {
            return true;
        }

        \$fileinfo = \$this->current();

        if (\$fileinfo->isDir() || !\$fileinfo->isReadable()) {
            return false;
        }

        \$content = \$fileinfo->getContents();
        if (!\$content) {
            return false;
        }

        return \$this->isAccepted(\$content);
    }

    /**
     * Converts string to regexp if necessary.
     *
     * @param string \$str Pattern: string or regexp
     *
     * @return string regexp corresponding to a given string or regexp
     */
    protected function toRegex(string \$str)
    {
        return \$this->isRegex(\$str) ? \$str : '/'.preg_quote(\$str, '/').'/';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/finder/Iterator/FilecontentFilterIterator.php";
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

namespace Symfony\\Component\\Finder\\Iterator;

/**
 * FilecontentFilterIterator filters files by their contents using patterns (regexps or strings).
 *
 * @author Fabien Potencier  <fabien@symfony.com>
 * @author Włodzimierz Gajda <gajdaw@gajdaw.pl>
 */
class FilecontentFilterIterator extends MultiplePcreFilterIterator
{
    /**
     * Filters the iterator values.
     *
     * @return bool true if the value should be kept, false otherwise
     */
    public function accept()
    {
        if (!\$this->matchRegexps && !\$this->noMatchRegexps) {
            return true;
        }

        \$fileinfo = \$this->current();

        if (\$fileinfo->isDir() || !\$fileinfo->isReadable()) {
            return false;
        }

        \$content = \$fileinfo->getContents();
        if (!\$content) {
            return false;
        }

        return \$this->isAccepted(\$content);
    }

    /**
     * Converts string to regexp if necessary.
     *
     * @param string \$str Pattern: string or regexp
     *
     * @return string regexp corresponding to a given string or regexp
     */
    protected function toRegex(string \$str)
    {
        return \$this->isRegex(\$str) ? \$str : '/'.preg_quote(\$str, '/').'/';
    }
}
", "@app/vendor/symfony/finder/Iterator/FilecontentFilterIterator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\finder\\Iterator\\FilecontentFilterIterator.php");
    }
}
