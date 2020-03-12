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

/* @app/vendor/symfony/flex/src/ComposerRepository.php */
class __TwigTemplate_25746f8b7be49318e5a5001273e3f3b00bbd987166766512b65400f6b04ad857 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/ComposerRepository.php"));

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

namespace Symfony\\Flex;

use Composer\\Repository\\ComposerRepository as BaseComposerRepository;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ComposerRepository extends BaseComposerRepository
{
    private \$providerFiles;

    protected function loadProviderListings(\$data)
    {
        if (null !== \$this->providerFiles) {
            parent::loadProviderListings(\$data);

            return;
        }

        \$data = [\$data];

        while (\$data) {
            \$this->providerFiles = [];
            foreach (\$data as \$data) {
                \$this->loadProviderListings(\$data);
            }

            \$loadingFiles = \$this->providerFiles;
            \$this->providerFiles = null;
            \$data = [];
            \$this->rfs->download(\$loadingFiles, function (...\$args) use (&\$data) {
                \$data[] = \$this->fetchFile(...\$args);
            });
        }
    }

    protected function fetchFile(\$filename, \$cacheKey = null, \$sha256 = null, \$storeLastModifiedTime = false)
    {
        if (null !== \$this->providerFiles) {
            \$this->providerFiles[] = [\$filename, \$cacheKey, \$sha256, \$storeLastModifiedTime];

            return [];
        }

        return parent::fetchFile(\$filename, \$cacheKey, \$sha256, \$storeLastModifiedTime);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/ComposerRepository.php";
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

namespace Symfony\\Flex;

use Composer\\Repository\\ComposerRepository as BaseComposerRepository;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ComposerRepository extends BaseComposerRepository
{
    private \$providerFiles;

    protected function loadProviderListings(\$data)
    {
        if (null !== \$this->providerFiles) {
            parent::loadProviderListings(\$data);

            return;
        }

        \$data = [\$data];

        while (\$data) {
            \$this->providerFiles = [];
            foreach (\$data as \$data) {
                \$this->loadProviderListings(\$data);
            }

            \$loadingFiles = \$this->providerFiles;
            \$this->providerFiles = null;
            \$data = [];
            \$this->rfs->download(\$loadingFiles, function (...\$args) use (&\$data) {
                \$data[] = \$this->fetchFile(...\$args);
            });
        }
    }

    protected function fetchFile(\$filename, \$cacheKey = null, \$sha256 = null, \$storeLastModifiedTime = false)
    {
        if (null !== \$this->providerFiles) {
            \$this->providerFiles[] = [\$filename, \$cacheKey, \$sha256, \$storeLastModifiedTime];

            return [];
        }

        return parent::fetchFile(\$filename, \$cacheKey, \$sha256, \$storeLastModifiedTime);
    }
}
", "@app/vendor/symfony/flex/src/ComposerRepository.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\ComposerRepository.php");
    }
}
