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

/* @app/vendor/symfony/framework-bundle/Console/Helper/DescriptorHelper.php */
class __TwigTemplate_c3558bccb8d29690064dc0d773b19f24ab74c7d47a1acf6616edbc5a78f2282f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Console/Helper/DescriptorHelper.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Console\\Helper;

use Symfony\\Bundle\\FrameworkBundle\\Console\\Descriptor\\JsonDescriptor;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Descriptor\\MarkdownDescriptor;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Descriptor\\TextDescriptor;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Descriptor\\XmlDescriptor;
use Symfony\\Component\\Console\\Helper\\DescriptorHelper as BaseDescriptorHelper;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class DescriptorHelper extends BaseDescriptorHelper
{
    public function __construct(FileLinkFormatter \$fileLinkFormatter = null)
    {
        \$this
            ->register('txt', new TextDescriptor(\$fileLinkFormatter))
            ->register('xml', new XmlDescriptor())
            ->register('json', new JsonDescriptor())
            ->register('md', new MarkdownDescriptor())
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Console/Helper/DescriptorHelper.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Console\\Helper;

use Symfony\\Bundle\\FrameworkBundle\\Console\\Descriptor\\JsonDescriptor;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Descriptor\\MarkdownDescriptor;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Descriptor\\TextDescriptor;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Descriptor\\XmlDescriptor;
use Symfony\\Component\\Console\\Helper\\DescriptorHelper as BaseDescriptorHelper;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class DescriptorHelper extends BaseDescriptorHelper
{
    public function __construct(FileLinkFormatter \$fileLinkFormatter = null)
    {
        \$this
            ->register('txt', new TextDescriptor(\$fileLinkFormatter))
            ->register('xml', new XmlDescriptor())
            ->register('json', new JsonDescriptor())
            ->register('md', new MarkdownDescriptor())
        ;
    }
}
", "@app/vendor/symfony/framework-bundle/Console/Helper/DescriptorHelper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Console\\Helper\\DescriptorHelper.php");
    }
}
