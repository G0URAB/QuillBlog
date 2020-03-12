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

/* @app/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php */
class __TwigTemplate_2724bbe424cbf02c532e9c9f398869332068e6c86516a22900eca13f349575ca extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php"));

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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * MemoryDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class MemoryDataCollector extends DataCollector implements LateDataCollectorInterface
{
    public function __construct()
    {
        \$this->reset();
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Throwable \$exception = null)
    {
        \$this->updateMemoryUsage();
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->data = [
            'memory' => 0,
            'memory_limit' => \$this->convertToBytes(ini_get('memory_limit')),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        \$this->updateMemoryUsage();
    }

    /**
     * Gets the memory.
     *
     * @return int The memory
     */
    public function getMemory()
    {
        return \$this->data['memory'];
    }

    /**
     * Gets the PHP memory limit.
     *
     * @return int The memory limit
     */
    public function getMemoryLimit()
    {
        return \$this->data['memory_limit'];
    }

    /**
     * Updates the memory usage data.
     */
    public function updateMemoryUsage()
    {
        \$this->data['memory'] = memory_get_peak_usage(true);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'memory';
    }

    /**
     * @return int|float
     */
    private function convertToBytes(string \$memoryLimit)
    {
        if ('-1' === \$memoryLimit) {
            return -1;
        }

        \$memoryLimit = strtolower(\$memoryLimit);
        \$max = strtolower(ltrim(\$memoryLimit, '+'));
        if (0 === strpos(\$max, '0x')) {
            \$max = \\intval(\$max, 16);
        } elseif (0 === strpos(\$max, '0')) {
            \$max = \\intval(\$max, 8);
        } else {
            \$max = (int) \$max;
        }

        switch (substr(\$memoryLimit, -1)) {
            case 't': \$max *= 1024;
            // no break
            case 'g': \$max *= 1024;
            // no break
            case 'm': \$max *= 1024;
            // no break
            case 'k': \$max *= 1024;
        }

        return \$max;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php";
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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * MemoryDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class MemoryDataCollector extends DataCollector implements LateDataCollectorInterface
{
    public function __construct()
    {
        \$this->reset();
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Throwable \$exception = null)
    {
        \$this->updateMemoryUsage();
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->data = [
            'memory' => 0,
            'memory_limit' => \$this->convertToBytes(ini_get('memory_limit')),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        \$this->updateMemoryUsage();
    }

    /**
     * Gets the memory.
     *
     * @return int The memory
     */
    public function getMemory()
    {
        return \$this->data['memory'];
    }

    /**
     * Gets the PHP memory limit.
     *
     * @return int The memory limit
     */
    public function getMemoryLimit()
    {
        return \$this->data['memory_limit'];
    }

    /**
     * Updates the memory usage data.
     */
    public function updateMemoryUsage()
    {
        \$this->data['memory'] = memory_get_peak_usage(true);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'memory';
    }

    /**
     * @return int|float
     */
    private function convertToBytes(string \$memoryLimit)
    {
        if ('-1' === \$memoryLimit) {
            return -1;
        }

        \$memoryLimit = strtolower(\$memoryLimit);
        \$max = strtolower(ltrim(\$memoryLimit, '+'));
        if (0 === strpos(\$max, '0x')) {
            \$max = \\intval(\$max, 16);
        } elseif (0 === strpos(\$max, '0')) {
            \$max = \\intval(\$max, 8);
        } else {
            \$max = (int) \$max;
        }

        switch (substr(\$memoryLimit, -1)) {
            case 't': \$max *= 1024;
            // no break
            case 'g': \$max *= 1024;
            // no break
            case 'm': \$max *= 1024;
            // no break
            case 'k': \$max *= 1024;
        }

        return \$max;
    }
}
", "@app/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\DataCollector\\MemoryDataCollector.php");
    }
}
