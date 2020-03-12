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

/* @app/vendor/symfony/http-foundation/StreamedResponse.php */
class __TwigTemplate_8da299d8b1003faba29582639ca976a402860a3d6c7f011a8fea230baedbae7d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/StreamedResponse.php"));

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

namespace Symfony\\Component\\HttpFoundation;

/**
 * StreamedResponse represents a streamed HTTP response.
 *
 * A StreamedResponse uses a callback for its content.
 *
 * The callback should use the standard PHP functions like echo
 * to stream the response back to the client. The flush() function
 * can also be used if needed.
 *
 * @see flush()
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StreamedResponse extends Response
{
    protected \$callback;
    protected \$streamed;
    private \$headersSent;

    public function __construct(callable \$callback = null, int \$status = 200, array \$headers = [])
    {
        parent::__construct(null, \$status, \$headers);

        if (null !== \$callback) {
            \$this->setCallback(\$callback);
        }
        \$this->streamed = false;
        \$this->headersSent = false;
    }

    /**
     * Factory method for chainability.
     *
     * @param callable|null \$callback A valid PHP callback or null to set it later
     *
     * @return static
     */
    public static function create(\$callback = null, int \$status = 200, array \$headers = [])
    {
        return new static(\$callback, \$status, \$headers);
    }

    /**
     * Sets the PHP callback associated with this Response.
     *
     * @return \$this
     */
    public function setCallback(callable \$callback)
    {
        \$this->callback = \$callback;

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * This method only sends the headers once.
     *
     * @return \$this
     */
    public function sendHeaders()
    {
        if (\$this->headersSent) {
            return \$this;
        }

        \$this->headersSent = true;

        return parent::sendHeaders();
    }

    /**
     * {@inheritdoc}
     *
     * This method only sends the content once.
     *
     * @return \$this
     */
    public function sendContent()
    {
        if (\$this->streamed) {
            return \$this;
        }

        \$this->streamed = true;

        if (null === \$this->callback) {
            throw new \\LogicException('The Response callback must not be null.');
        }

        (\$this->callback)();

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \\LogicException when the content is not null
     *
     * @return \$this
     */
    public function setContent(?string \$content)
    {
        if (null !== \$content) {
            throw new \\LogicException('The content cannot be set on a StreamedResponse instance.');
        }

        \$this->streamed = true;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return false;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/StreamedResponse.php";
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

namespace Symfony\\Component\\HttpFoundation;

/**
 * StreamedResponse represents a streamed HTTP response.
 *
 * A StreamedResponse uses a callback for its content.
 *
 * The callback should use the standard PHP functions like echo
 * to stream the response back to the client. The flush() function
 * can also be used if needed.
 *
 * @see flush()
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StreamedResponse extends Response
{
    protected \$callback;
    protected \$streamed;
    private \$headersSent;

    public function __construct(callable \$callback = null, int \$status = 200, array \$headers = [])
    {
        parent::__construct(null, \$status, \$headers);

        if (null !== \$callback) {
            \$this->setCallback(\$callback);
        }
        \$this->streamed = false;
        \$this->headersSent = false;
    }

    /**
     * Factory method for chainability.
     *
     * @param callable|null \$callback A valid PHP callback or null to set it later
     *
     * @return static
     */
    public static function create(\$callback = null, int \$status = 200, array \$headers = [])
    {
        return new static(\$callback, \$status, \$headers);
    }

    /**
     * Sets the PHP callback associated with this Response.
     *
     * @return \$this
     */
    public function setCallback(callable \$callback)
    {
        \$this->callback = \$callback;

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * This method only sends the headers once.
     *
     * @return \$this
     */
    public function sendHeaders()
    {
        if (\$this->headersSent) {
            return \$this;
        }

        \$this->headersSent = true;

        return parent::sendHeaders();
    }

    /**
     * {@inheritdoc}
     *
     * This method only sends the content once.
     *
     * @return \$this
     */
    public function sendContent()
    {
        if (\$this->streamed) {
            return \$this;
        }

        \$this->streamed = true;

        if (null === \$this->callback) {
            throw new \\LogicException('The Response callback must not be null.');
        }

        (\$this->callback)();

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \\LogicException when the content is not null
     *
     * @return \$this
     */
    public function setContent(?string \$content)
    {
        if (null !== \$content) {
            throw new \\LogicException('The content cannot be set on a StreamedResponse instance.');
        }

        \$this->streamed = true;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return false;
    }
}
", "@app/vendor/symfony/http-foundation/StreamedResponse.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\StreamedResponse.php");
    }
}
