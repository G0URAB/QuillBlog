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

/* @app/vendor/symfony/cache/Marshaller/DeflateMarshaller.php */
class __TwigTemplate_675435e88fc77c8e590f6a960564044de8e53e10bda67d63ac5d0cab9bcc7bed extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/Marshaller/DeflateMarshaller.php"));

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

namespace Symfony\\Component\\Cache\\Marshaller;

use Symfony\\Component\\Cache\\Exception\\CacheException;

/**
 * Compresses values using gzdeflate().
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DeflateMarshaller implements MarshallerInterface
{
    private \$marshaller;

    public function __construct(MarshallerInterface \$marshaller)
    {
        if (!\\function_exists('gzdeflate')) {
            throw new CacheException('The \"zlib\" PHP extension is not loaded.');
        }

        \$this->marshaller = \$marshaller;
    }

    /**
     * {@inheritdoc}
     */
    public function marshall(array \$values, ?array &\$failed): array
    {
        return array_map('gzdeflate', \$this->marshaller->marshall(\$values, \$failed));
    }

    /**
     * {@inheritdoc}
     */
    public function unmarshall(string \$value)
    {
        if (false !== \$inflatedValue = @gzinflate(\$value)) {
            \$value = \$inflatedValue;
        }

        return \$this->marshaller->unmarshall(\$value);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/cache/Marshaller/DeflateMarshaller.php";
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

namespace Symfony\\Component\\Cache\\Marshaller;

use Symfony\\Component\\Cache\\Exception\\CacheException;

/**
 * Compresses values using gzdeflate().
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DeflateMarshaller implements MarshallerInterface
{
    private \$marshaller;

    public function __construct(MarshallerInterface \$marshaller)
    {
        if (!\\function_exists('gzdeflate')) {
            throw new CacheException('The \"zlib\" PHP extension is not loaded.');
        }

        \$this->marshaller = \$marshaller;
    }

    /**
     * {@inheritdoc}
     */
    public function marshall(array \$values, ?array &\$failed): array
    {
        return array_map('gzdeflate', \$this->marshaller->marshall(\$values, \$failed));
    }

    /**
     * {@inheritdoc}
     */
    public function unmarshall(string \$value)
    {
        if (false !== \$inflatedValue = @gzinflate(\$value)) {
            \$value = \$inflatedValue;
        }

        return \$this->marshaller->unmarshall(\$value);
    }
}
", "@app/vendor/symfony/cache/Marshaller/DeflateMarshaller.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\Marshaller\\DeflateMarshaller.php");
    }
}
