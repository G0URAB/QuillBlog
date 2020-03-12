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

/* @app/vendor/symfony/cache/Marshaller/MarshallerInterface.php */
class __TwigTemplate_4162e32296c8d310c2613b3d281748331668f7238e8628c06a2ff611a3843feb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/Marshaller/MarshallerInterface.php"));

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

/**
 * Serializes/unserializes PHP values.
 *
 * Implementations of this interface MUST deal with errors carefully. They MUST
 * also deal with forward and backward compatibility at the storage format level.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface MarshallerInterface
{
    /**
     * Serializes a list of values.
     *
     * When serialization fails for a specific value, no exception should be
     * thrown. Instead, its key should be listed in \$failed.
     */
    public function marshall(array \$values, ?array &\$failed): array;

    /**
     * Unserializes a single value and throws an exception if anything goes wrong.
     *
     * @return mixed
     *
     * @throws \\Exception Whenever unserialization fails
     */
    public function unmarshall(string \$value);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/cache/Marshaller/MarshallerInterface.php";
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

/**
 * Serializes/unserializes PHP values.
 *
 * Implementations of this interface MUST deal with errors carefully. They MUST
 * also deal with forward and backward compatibility at the storage format level.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface MarshallerInterface
{
    /**
     * Serializes a list of values.
     *
     * When serialization fails for a specific value, no exception should be
     * thrown. Instead, its key should be listed in \$failed.
     */
    public function marshall(array \$values, ?array &\$failed): array;

    /**
     * Unserializes a single value and throws an exception if anything goes wrong.
     *
     * @return mixed
     *
     * @throws \\Exception Whenever unserialization fails
     */
    public function unmarshall(string \$value);
}
", "@app/vendor/symfony/cache/Marshaller/MarshallerInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\Marshaller\\MarshallerInterface.php");
    }
}
