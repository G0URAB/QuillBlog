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

/* @app/vendor/symfony/console/Helper/DescriptorHelper.php */
class __TwigTemplate_d49129930e6666d55e23d39b4e77ffeb0d0a0d5adefbaeb66c5c5264a25ce2ad extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Helper/DescriptorHelper.php"));

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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Descriptor\\DescriptorInterface;
use Symfony\\Component\\Console\\Descriptor\\JsonDescriptor;
use Symfony\\Component\\Console\\Descriptor\\MarkdownDescriptor;
use Symfony\\Component\\Console\\Descriptor\\TextDescriptor;
use Symfony\\Component\\Console\\Descriptor\\XmlDescriptor;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * This class adds helper method to describe objects in various formats.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class DescriptorHelper extends Helper
{
    /**
     * @var DescriptorInterface[]
     */
    private \$descriptors = [];

    public function __construct()
    {
        \$this
            ->register('txt', new TextDescriptor())
            ->register('xml', new XmlDescriptor())
            ->register('json', new JsonDescriptor())
            ->register('md', new MarkdownDescriptor())
        ;
    }

    /**
     * Describes an object if supported.
     *
     * Available options are:
     * * format: string, the output format name
     * * raw_text: boolean, sets output type as raw
     *
     * @throws InvalidArgumentException when the given format is not supported
     */
    public function describe(OutputInterface \$output, ?object \$object, array \$options = [])
    {
        \$options = array_merge([
            'raw_text' => false,
            'format' => 'txt',
        ], \$options);

        if (!isset(\$this->descriptors[\$options['format']])) {
            throw new InvalidArgumentException(sprintf('Unsupported format \"%s\".', \$options['format']));
        }

        \$descriptor = \$this->descriptors[\$options['format']];
        \$descriptor->describe(\$output, \$object, \$options);
    }

    /**
     * Registers a descriptor.
     *
     * @return \$this
     */
    public function register(string \$format, DescriptorInterface \$descriptor)
    {
        \$this->descriptors[\$format] = \$descriptor;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'descriptor';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Helper/DescriptorHelper.php";
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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Descriptor\\DescriptorInterface;
use Symfony\\Component\\Console\\Descriptor\\JsonDescriptor;
use Symfony\\Component\\Console\\Descriptor\\MarkdownDescriptor;
use Symfony\\Component\\Console\\Descriptor\\TextDescriptor;
use Symfony\\Component\\Console\\Descriptor\\XmlDescriptor;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * This class adds helper method to describe objects in various formats.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class DescriptorHelper extends Helper
{
    /**
     * @var DescriptorInterface[]
     */
    private \$descriptors = [];

    public function __construct()
    {
        \$this
            ->register('txt', new TextDescriptor())
            ->register('xml', new XmlDescriptor())
            ->register('json', new JsonDescriptor())
            ->register('md', new MarkdownDescriptor())
        ;
    }

    /**
     * Describes an object if supported.
     *
     * Available options are:
     * * format: string, the output format name
     * * raw_text: boolean, sets output type as raw
     *
     * @throws InvalidArgumentException when the given format is not supported
     */
    public function describe(OutputInterface \$output, ?object \$object, array \$options = [])
    {
        \$options = array_merge([
            'raw_text' => false,
            'format' => 'txt',
        ], \$options);

        if (!isset(\$this->descriptors[\$options['format']])) {
            throw new InvalidArgumentException(sprintf('Unsupported format \"%s\".', \$options['format']));
        }

        \$descriptor = \$this->descriptors[\$options['format']];
        \$descriptor->describe(\$output, \$object, \$options);
    }

    /**
     * Registers a descriptor.
     *
     * @return \$this
     */
    public function register(string \$format, DescriptorInterface \$descriptor)
    {
        \$this->descriptors[\$format] = \$descriptor;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'descriptor';
    }
}
", "@app/vendor/symfony/console/Helper/DescriptorHelper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Helper\\DescriptorHelper.php");
    }
}
