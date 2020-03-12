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

/* @app/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php */
class __TwigTemplate_348f4b46cc2078654de678f735cffd785d7ea113537761c6484fc0443a4959dd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php"));

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

namespace Symfony\\Component\\HttpKernel\\CacheClearer;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Psr6CacheClearer implements CacheClearerInterface
{
    private \$pools = [];

    public function __construct(array \$pools = [])
    {
        \$this->pools = \$pools;
    }

    public function hasPool(string \$name)
    {
        return isset(\$this->pools[\$name]);
    }

    public function getPool(string \$name)
    {
        if (!\$this->hasPool(\$name)) {
            throw new \\InvalidArgumentException(sprintf('Cache pool not found: %s.', \$name));
        }

        return \$this->pools[\$name];
    }

    public function clearPool(string \$name)
    {
        if (!isset(\$this->pools[\$name])) {
            throw new \\InvalidArgumentException(sprintf('Cache pool not found: %s.', \$name));
        }

        return \$this->pools[\$name]->clear();
    }

    /**
     * {@inheritdoc}
     */
    public function clear(string \$cacheDir)
    {
        foreach (\$this->pools as \$pool) {
            \$pool->clear();
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php";
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

namespace Symfony\\Component\\HttpKernel\\CacheClearer;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Psr6CacheClearer implements CacheClearerInterface
{
    private \$pools = [];

    public function __construct(array \$pools = [])
    {
        \$this->pools = \$pools;
    }

    public function hasPool(string \$name)
    {
        return isset(\$this->pools[\$name]);
    }

    public function getPool(string \$name)
    {
        if (!\$this->hasPool(\$name)) {
            throw new \\InvalidArgumentException(sprintf('Cache pool not found: %s.', \$name));
        }

        return \$this->pools[\$name];
    }

    public function clearPool(string \$name)
    {
        if (!isset(\$this->pools[\$name])) {
            throw new \\InvalidArgumentException(sprintf('Cache pool not found: %s.', \$name));
        }

        return \$this->pools[\$name]->clear();
    }

    /**
     * {@inheritdoc}
     */
    public function clear(string \$cacheDir)
    {
        foreach (\$this->pools as \$pool) {
            \$pool->clear();
        }
    }
}
", "@app/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php");
    }
}
