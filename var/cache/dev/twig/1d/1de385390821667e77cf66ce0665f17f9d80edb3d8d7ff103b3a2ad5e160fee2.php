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

/* @app/vendor/symfony/http-kernel/HttpCache/Ssi.php */
class __TwigTemplate_67131884c4c660a7be48b586eb892f87e113e78f3adaf746552216452d6ac3d2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/HttpCache/Ssi.php"));

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

namespace Symfony\\Component\\HttpKernel\\HttpCache;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * Ssi implements the SSI capabilities to Request and Response instances.
 *
 * @author Sebastian Krebs <krebs.seb@gmail.com>
 */
class Ssi extends AbstractSurrogate
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ssi';
    }

    /**
     * {@inheritdoc}
     */
    public function addSurrogateControl(Response \$response)
    {
        if (false !== strpos(\$response->getContent(), '<!--#include')) {
            \$response->headers->set('Surrogate-Control', 'content=\"SSI/1.0\"');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renderIncludeTag(string \$uri, string \$alt = null, bool \$ignoreErrors = true, string \$comment = '')
    {
        return sprintf('<!--#include virtual=\"%s\" -->', \$uri);
    }

    /**
     * {@inheritdoc}
     */
    public function process(Request \$request, Response \$response)
    {
        \$type = \$response->headers->get('Content-Type');
        if (empty(\$type)) {
            \$type = 'text/html';
        }

        \$parts = explode(';', \$type);
        if (!\\in_array(\$parts[0], \$this->contentTypes)) {
            return \$response;
        }

        // we don't use a proper XML parser here as we can have SSI tags in a plain text response
        \$content = \$response->getContent();

        \$chunks = preg_split('#<!--\\#include\\s+(.*?)\\s*-->#', \$content, -1, PREG_SPLIT_DELIM_CAPTURE);
        \$chunks[0] = str_replace(\$this->phpEscapeMap[0], \$this->phpEscapeMap[1], \$chunks[0]);

        \$i = 1;
        while (isset(\$chunks[\$i])) {
            \$options = [];
            preg_match_all('/(virtual)=\"([^\"]*?)\"/', \$chunks[\$i], \$matches, PREG_SET_ORDER);
            foreach (\$matches as \$set) {
                \$options[\$set[1]] = \$set[2];
            }

            if (!isset(\$options['virtual'])) {
                throw new \\RuntimeException('Unable to process an SSI tag without a \"virtual\" attribute.');
            }

            \$chunks[\$i] = sprintf('<?php echo \$this->surrogate->handle(\$this, %s, \\'\\', false) ?>'.\"\\n\",
                var_export(\$options['virtual'], true)
            );
            ++\$i;
            \$chunks[\$i] = str_replace(\$this->phpEscapeMap[0], \$this->phpEscapeMap[1], \$chunks[\$i]);
            ++\$i;
        }
        \$content = implode('', \$chunks);

        \$response->setContent(\$content);
        \$response->headers->set('X-Body-Eval', 'SSI');

        // remove SSI/1.0 from the Surrogate-Control header
        \$this->removeFromControl(\$response);

        return \$response;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/HttpCache/Ssi.php";
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

namespace Symfony\\Component\\HttpKernel\\HttpCache;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * Ssi implements the SSI capabilities to Request and Response instances.
 *
 * @author Sebastian Krebs <krebs.seb@gmail.com>
 */
class Ssi extends AbstractSurrogate
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ssi';
    }

    /**
     * {@inheritdoc}
     */
    public function addSurrogateControl(Response \$response)
    {
        if (false !== strpos(\$response->getContent(), '<!--#include')) {
            \$response->headers->set('Surrogate-Control', 'content=\"SSI/1.0\"');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function renderIncludeTag(string \$uri, string \$alt = null, bool \$ignoreErrors = true, string \$comment = '')
    {
        return sprintf('<!--#include virtual=\"%s\" -->', \$uri);
    }

    /**
     * {@inheritdoc}
     */
    public function process(Request \$request, Response \$response)
    {
        \$type = \$response->headers->get('Content-Type');
        if (empty(\$type)) {
            \$type = 'text/html';
        }

        \$parts = explode(';', \$type);
        if (!\\in_array(\$parts[0], \$this->contentTypes)) {
            return \$response;
        }

        // we don't use a proper XML parser here as we can have SSI tags in a plain text response
        \$content = \$response->getContent();

        \$chunks = preg_split('#<!--\\#include\\s+(.*?)\\s*-->#', \$content, -1, PREG_SPLIT_DELIM_CAPTURE);
        \$chunks[0] = str_replace(\$this->phpEscapeMap[0], \$this->phpEscapeMap[1], \$chunks[0]);

        \$i = 1;
        while (isset(\$chunks[\$i])) {
            \$options = [];
            preg_match_all('/(virtual)=\"([^\"]*?)\"/', \$chunks[\$i], \$matches, PREG_SET_ORDER);
            foreach (\$matches as \$set) {
                \$options[\$set[1]] = \$set[2];
            }

            if (!isset(\$options['virtual'])) {
                throw new \\RuntimeException('Unable to process an SSI tag without a \"virtual\" attribute.');
            }

            \$chunks[\$i] = sprintf('<?php echo \$this->surrogate->handle(\$this, %s, \\'\\', false) ?>'.\"\\n\",
                var_export(\$options['virtual'], true)
            );
            ++\$i;
            \$chunks[\$i] = str_replace(\$this->phpEscapeMap[0], \$this->phpEscapeMap[1], \$chunks[\$i]);
            ++\$i;
        }
        \$content = implode('', \$chunks);

        \$response->setContent(\$content);
        \$response->headers->set('X-Body-Eval', 'SSI');

        // remove SSI/1.0 from the Surrogate-Control header
        \$this->removeFromControl(\$response);

        return \$response;
    }
}
", "@app/vendor/symfony/http-kernel/HttpCache/Ssi.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\HttpCache\\Ssi.php");
    }
}
