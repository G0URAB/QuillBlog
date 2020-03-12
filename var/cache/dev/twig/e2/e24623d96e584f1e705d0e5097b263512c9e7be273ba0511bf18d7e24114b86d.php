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

/* @app/vendor/symfony/config/Resource/FileResource.php */
class __TwigTemplate_286b0a1d7c5b59aedc87149ad5b3f650543436abd862d74efa7c1851013c0f24 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Resource/FileResource.php"));

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

namespace Symfony\\Component\\Config\\Resource;

/**
 * FileResource represents a resource stored on the filesystem.
 *
 * The resource can be a file or a directory.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class FileResource implements SelfCheckingResourceInterface
{
    /**
     * @var string|false
     */
    private \$resource;

    /**
     * @param string \$resource The file path to the resource
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(string \$resource)
    {
        \$this->resource = realpath(\$resource) ?: (file_exists(\$resource) ? \$resource : false);

        if (false === \$this->resource) {
            throw new \\InvalidArgumentException(sprintf('The file \"%s\" does not exist.', \$resource));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return \$this->resource;
    }

    /**
     * @return string The canonicalized, absolute path to the resource
     */
    public function getResource(): string
    {
        return \$this->resource;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(int \$timestamp): bool
    {
        return false !== (\$filemtime = @filemtime(\$this->resource)) && \$filemtime <= \$timestamp;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Resource/FileResource.php";
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

namespace Symfony\\Component\\Config\\Resource;

/**
 * FileResource represents a resource stored on the filesystem.
 *
 * The resource can be a file or a directory.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class FileResource implements SelfCheckingResourceInterface
{
    /**
     * @var string|false
     */
    private \$resource;

    /**
     * @param string \$resource The file path to the resource
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(string \$resource)
    {
        \$this->resource = realpath(\$resource) ?: (file_exists(\$resource) ? \$resource : false);

        if (false === \$this->resource) {
            throw new \\InvalidArgumentException(sprintf('The file \"%s\" does not exist.', \$resource));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return \$this->resource;
    }

    /**
     * @return string The canonicalized, absolute path to the resource
     */
    public function getResource(): string
    {
        return \$this->resource;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(int \$timestamp): bool
    {
        return false !== (\$filemtime = @filemtime(\$this->resource)) && \$filemtime <= \$timestamp;
    }
}
", "@app/vendor/symfony/config/Resource/FileResource.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Resource\\FileResource.php");
    }
}
