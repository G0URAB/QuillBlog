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

/* @app/vendor/symfony/var-dumper/Caster/LinkStub.php */
class __TwigTemplate_8f8329f4254afee37b405bd82bee1171d56b11fa116a93547b76c2a5a7b948b6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Caster/LinkStub.php"));

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

namespace Symfony\\Component\\VarDumper\\Caster;

/**
 * Represents a file or a URL.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class LinkStub extends ConstStub
{
    public \$inVendor = false;

    private static \$vendorRoots;
    private static \$composerRoots;

    public function __construct(\$label, int \$line = 0, \$href = null)
    {
        \$this->value = \$label;

        if (null === \$href) {
            \$href = \$label;
        }
        if (!\\is_string(\$href)) {
            return;
        }
        if (0 === strpos(\$href, 'file://')) {
            if (\$href === \$label) {
                \$label = substr(\$label, 7);
            }
            \$href = substr(\$href, 7);
        } elseif (false !== strpos(\$href, '://')) {
            \$this->attr['href'] = \$href;

            return;
        }
        if (!file_exists(\$href)) {
            return;
        }
        if (\$line) {
            \$this->attr['line'] = \$line;
        }
        if (\$label !== \$this->attr['file'] = realpath(\$href) ?: \$href) {
            return;
        }
        if (\$composerRoot = \$this->getComposerRoot(\$href, \$this->inVendor)) {
            \$this->attr['ellipsis'] = \\strlen(\$href) - \\strlen(\$composerRoot) + 1;
            \$this->attr['ellipsis-type'] = 'path';
            \$this->attr['ellipsis-tail'] = 1 + (\$this->inVendor ? 2 + \\strlen(implode('', \\array_slice(explode(\\DIRECTORY_SEPARATOR, substr(\$href, 1 - \$this->attr['ellipsis'])), 0, 2))) : 0);
        } elseif (3 < \\count(\$ellipsis = explode(\\DIRECTORY_SEPARATOR, \$href))) {
            \$this->attr['ellipsis'] = 2 + \\strlen(implode('', \\array_slice(\$ellipsis, -2)));
            \$this->attr['ellipsis-type'] = 'path';
            \$this->attr['ellipsis-tail'] = 1;
        }
    }

    private function getComposerRoot(string \$file, bool &\$inVendor)
    {
        if (null === self::\$vendorRoots) {
            self::\$vendorRoots = [];

            foreach (get_declared_classes() as \$class) {
                if ('C' === \$class[0] && 0 === strpos(\$class, 'ComposerAutoloaderInit')) {
                    \$r = new \\ReflectionClass(\$class);
                    \$v = \\dirname(\$r->getFileName(), 2);
                    if (file_exists(\$v.'/composer/installed.json')) {
                        self::\$vendorRoots[] = \$v.\\DIRECTORY_SEPARATOR;
                    }
                }
            }
        }
        \$inVendor = false;

        if (isset(self::\$composerRoots[\$dir = \\dirname(\$file)])) {
            return self::\$composerRoots[\$dir];
        }

        foreach (self::\$vendorRoots as \$root) {
            if (\$inVendor = 0 === strpos(\$file, \$root)) {
                return \$root;
            }
        }

        \$parent = \$dir;
        while (!@file_exists(\$parent.'/composer.json')) {
            if (!@file_exists(\$parent)) {
                // open_basedir restriction in effect
                break;
            }
            if (\$parent === \\dirname(\$parent)) {
                return self::\$composerRoots[\$dir] = false;
            }

            \$parent = \\dirname(\$parent);
        }

        return self::\$composerRoots[\$dir] = \$parent.\\DIRECTORY_SEPARATOR;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Caster/LinkStub.php";
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

namespace Symfony\\Component\\VarDumper\\Caster;

/**
 * Represents a file or a URL.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class LinkStub extends ConstStub
{
    public \$inVendor = false;

    private static \$vendorRoots;
    private static \$composerRoots;

    public function __construct(\$label, int \$line = 0, \$href = null)
    {
        \$this->value = \$label;

        if (null === \$href) {
            \$href = \$label;
        }
        if (!\\is_string(\$href)) {
            return;
        }
        if (0 === strpos(\$href, 'file://')) {
            if (\$href === \$label) {
                \$label = substr(\$label, 7);
            }
            \$href = substr(\$href, 7);
        } elseif (false !== strpos(\$href, '://')) {
            \$this->attr['href'] = \$href;

            return;
        }
        if (!file_exists(\$href)) {
            return;
        }
        if (\$line) {
            \$this->attr['line'] = \$line;
        }
        if (\$label !== \$this->attr['file'] = realpath(\$href) ?: \$href) {
            return;
        }
        if (\$composerRoot = \$this->getComposerRoot(\$href, \$this->inVendor)) {
            \$this->attr['ellipsis'] = \\strlen(\$href) - \\strlen(\$composerRoot) + 1;
            \$this->attr['ellipsis-type'] = 'path';
            \$this->attr['ellipsis-tail'] = 1 + (\$this->inVendor ? 2 + \\strlen(implode('', \\array_slice(explode(\\DIRECTORY_SEPARATOR, substr(\$href, 1 - \$this->attr['ellipsis'])), 0, 2))) : 0);
        } elseif (3 < \\count(\$ellipsis = explode(\\DIRECTORY_SEPARATOR, \$href))) {
            \$this->attr['ellipsis'] = 2 + \\strlen(implode('', \\array_slice(\$ellipsis, -2)));
            \$this->attr['ellipsis-type'] = 'path';
            \$this->attr['ellipsis-tail'] = 1;
        }
    }

    private function getComposerRoot(string \$file, bool &\$inVendor)
    {
        if (null === self::\$vendorRoots) {
            self::\$vendorRoots = [];

            foreach (get_declared_classes() as \$class) {
                if ('C' === \$class[0] && 0 === strpos(\$class, 'ComposerAutoloaderInit')) {
                    \$r = new \\ReflectionClass(\$class);
                    \$v = \\dirname(\$r->getFileName(), 2);
                    if (file_exists(\$v.'/composer/installed.json')) {
                        self::\$vendorRoots[] = \$v.\\DIRECTORY_SEPARATOR;
                    }
                }
            }
        }
        \$inVendor = false;

        if (isset(self::\$composerRoots[\$dir = \\dirname(\$file)])) {
            return self::\$composerRoots[\$dir];
        }

        foreach (self::\$vendorRoots as \$root) {
            if (\$inVendor = 0 === strpos(\$file, \$root)) {
                return \$root;
            }
        }

        \$parent = \$dir;
        while (!@file_exists(\$parent.'/composer.json')) {
            if (!@file_exists(\$parent)) {
                // open_basedir restriction in effect
                break;
            }
            if (\$parent === \\dirname(\$parent)) {
                return self::\$composerRoots[\$dir] = false;
            }

            \$parent = \\dirname(\$parent);
        }

        return self::\$composerRoots[\$dir] = \$parent.\\DIRECTORY_SEPARATOR;
    }
}
", "@app/vendor/symfony/var-dumper/Caster/LinkStub.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Caster\\LinkStub.php");
    }
}
