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

/* @app/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php */
class __TwigTemplate_e5a89f78997cdb5dd2bfee04a2258b56d7a47cfe7a58058ad862f6f7a2837e00 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php"));

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

namespace Symfony\\Component\\HttpKernel\\Debug;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

/**
 * Formats debug file links.
 *
 * @author Jérémy Romey <jeremy@free-agent.fr>
 *
 * @final
 */
class FileLinkFormatter
{
    private \$fileLinkFormat;
    private \$requestStack;
    private \$baseDir;
    private \$urlFormat;

    /**
     * @param string|\\Closure \$urlFormat the URL format, or a closure that returns it on-demand
     */
    public function __construct(\$fileLinkFormat = null, RequestStack \$requestStack = null, string \$baseDir = null, \$urlFormat = null)
    {
        \$fileLinkFormat = \$fileLinkFormat ?: ini_get('xdebug.file_link_format') ?: get_cfg_var('xdebug.file_link_format');
        if (\$fileLinkFormat && !\\is_array(\$fileLinkFormat)) {
            \$i = strpos(\$f = \$fileLinkFormat, '&', max(strrpos(\$f, '%f'), strrpos(\$f, '%l'))) ?: \\strlen(\$f);
            \$fileLinkFormat = [substr(\$f, 0, \$i)] + preg_split('/&([^>]++)>/', substr(\$f, \$i), -1, PREG_SPLIT_DELIM_CAPTURE);
        }

        \$this->fileLinkFormat = \$fileLinkFormat;
        \$this->requestStack = \$requestStack;
        \$this->baseDir = \$baseDir;
        \$this->urlFormat = \$urlFormat;
    }

    public function format(string \$file, int \$line)
    {
        if (\$fmt = \$this->getFileLinkFormat()) {
            for (\$i = 1; isset(\$fmt[\$i]); ++\$i) {
                if (0 === strpos(\$file, \$k = \$fmt[\$i++])) {
                    \$file = substr_replace(\$file, \$fmt[\$i], 0, \\strlen(\$k));
                    break;
                }
            }

            return strtr(\$fmt[0], ['%f' => \$file, '%l' => \$line]);
        }

        return false;
    }

    /**
     * @internal
     */
    public function __sleep(): array
    {
        \$this->fileLinkFormat = \$this->getFileLinkFormat();

        return ['fileLinkFormat'];
    }

    /**
     * @internal
     */
    public static function generateUrlFormat(UrlGeneratorInterface \$router, string \$routeName, string \$queryString): ?string
    {
        try {
            return \$router->generate(\$routeName).\$queryString;
        } catch (\\Throwable \$e) {
            return null;
        }
    }

    private function getFileLinkFormat()
    {
        if (\$this->fileLinkFormat) {
            return \$this->fileLinkFormat;
        }

        if (\$this->requestStack && \$this->baseDir && \$this->urlFormat) {
            \$request = \$this->requestStack->getMasterRequest();

            if (\$request instanceof Request && (!\$this->urlFormat instanceof \\Closure || \$this->urlFormat = (\$this->urlFormat)())) {
                return [
                    \$request->getSchemeAndHttpHost().\$this->urlFormat,
                    \$this->baseDir.\\DIRECTORY_SEPARATOR, '',
                ];
            }
        }

        return null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php";
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

namespace Symfony\\Component\\HttpKernel\\Debug;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

/**
 * Formats debug file links.
 *
 * @author Jérémy Romey <jeremy@free-agent.fr>
 *
 * @final
 */
class FileLinkFormatter
{
    private \$fileLinkFormat;
    private \$requestStack;
    private \$baseDir;
    private \$urlFormat;

    /**
     * @param string|\\Closure \$urlFormat the URL format, or a closure that returns it on-demand
     */
    public function __construct(\$fileLinkFormat = null, RequestStack \$requestStack = null, string \$baseDir = null, \$urlFormat = null)
    {
        \$fileLinkFormat = \$fileLinkFormat ?: ini_get('xdebug.file_link_format') ?: get_cfg_var('xdebug.file_link_format');
        if (\$fileLinkFormat && !\\is_array(\$fileLinkFormat)) {
            \$i = strpos(\$f = \$fileLinkFormat, '&', max(strrpos(\$f, '%f'), strrpos(\$f, '%l'))) ?: \\strlen(\$f);
            \$fileLinkFormat = [substr(\$f, 0, \$i)] + preg_split('/&([^>]++)>/', substr(\$f, \$i), -1, PREG_SPLIT_DELIM_CAPTURE);
        }

        \$this->fileLinkFormat = \$fileLinkFormat;
        \$this->requestStack = \$requestStack;
        \$this->baseDir = \$baseDir;
        \$this->urlFormat = \$urlFormat;
    }

    public function format(string \$file, int \$line)
    {
        if (\$fmt = \$this->getFileLinkFormat()) {
            for (\$i = 1; isset(\$fmt[\$i]); ++\$i) {
                if (0 === strpos(\$file, \$k = \$fmt[\$i++])) {
                    \$file = substr_replace(\$file, \$fmt[\$i], 0, \\strlen(\$k));
                    break;
                }
            }

            return strtr(\$fmt[0], ['%f' => \$file, '%l' => \$line]);
        }

        return false;
    }

    /**
     * @internal
     */
    public function __sleep(): array
    {
        \$this->fileLinkFormat = \$this->getFileLinkFormat();

        return ['fileLinkFormat'];
    }

    /**
     * @internal
     */
    public static function generateUrlFormat(UrlGeneratorInterface \$router, string \$routeName, string \$queryString): ?string
    {
        try {
            return \$router->generate(\$routeName).\$queryString;
        } catch (\\Throwable \$e) {
            return null;
        }
    }

    private function getFileLinkFormat()
    {
        if (\$this->fileLinkFormat) {
            return \$this->fileLinkFormat;
        }

        if (\$this->requestStack && \$this->baseDir && \$this->urlFormat) {
            \$request = \$this->requestStack->getMasterRequest();

            if (\$request instanceof Request && (!\$this->urlFormat instanceof \\Closure || \$this->urlFormat = (\$this->urlFormat)())) {
                return [
                    \$request->getSchemeAndHttpHost().\$this->urlFormat,
                    \$this->baseDir.\\DIRECTORY_SEPARATOR, '',
                ];
            }
        }

        return null;
    }
}
", "@app/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Debug\\FileLinkFormatter.php");
    }
}
