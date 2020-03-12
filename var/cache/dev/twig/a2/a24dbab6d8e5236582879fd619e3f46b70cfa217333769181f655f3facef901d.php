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

/* @app/vendor/symfony/http-kernel/CacheWarmer/CacheWarmer.php */
class __TwigTemplate_3337bc3f0a935d4985de5c0e295f7e63a0597b018a6310af2737cfedc85a16d1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/CacheWarmer/CacheWarmer.php"));

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

namespace Symfony\\Component\\HttpKernel\\CacheWarmer;

/**
 * Abstract cache warmer that knows how to write a file to the cache.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class CacheWarmer implements CacheWarmerInterface
{
    protected function writeCacheFile(string \$file, \$content)
    {
        \$tmpFile = @tempnam(\\dirname(\$file), basename(\$file));
        if (false !== @file_put_contents(\$tmpFile, \$content) && @rename(\$tmpFile, \$file)) {
            @chmod(\$file, 0666 & ~umask());

            return;
        }

        throw new \\RuntimeException(sprintf('Failed to write cache file \"%s\".', \$file));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/CacheWarmer/CacheWarmer.php";
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

namespace Symfony\\Component\\HttpKernel\\CacheWarmer;

/**
 * Abstract cache warmer that knows how to write a file to the cache.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class CacheWarmer implements CacheWarmerInterface
{
    protected function writeCacheFile(string \$file, \$content)
    {
        \$tmpFile = @tempnam(\\dirname(\$file), basename(\$file));
        if (false !== @file_put_contents(\$tmpFile, \$content) && @rename(\$tmpFile, \$file)) {
            @chmod(\$file, 0666 & ~umask());

            return;
        }

        throw new \\RuntimeException(sprintf('Failed to write cache file \"%s\".', \$file));
    }
}
", "@app/vendor/symfony/http-kernel/CacheWarmer/CacheWarmer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmer.php");
    }
}
