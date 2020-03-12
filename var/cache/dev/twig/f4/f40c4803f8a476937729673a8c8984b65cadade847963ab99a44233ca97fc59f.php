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

/* @app/vendor/symfony/cache/Adapter/TraceableTagAwareAdapter.php */
class __TwigTemplate_663bf8ac4f17a4a27198929376ffac0d39af7b194d73604d4fb2c03631c87ae9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/Adapter/TraceableTagAwareAdapter.php"));

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

namespace Symfony\\Component\\Cache\\Adapter;

use Symfony\\Contracts\\Cache\\TagAwareCacheInterface;

/**
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class TraceableTagAwareAdapter extends TraceableAdapter implements TagAwareAdapterInterface, TagAwareCacheInterface
{
    public function __construct(TagAwareAdapterInterface \$pool)
    {
        parent::__construct(\$pool);
    }

    /**
     * {@inheritdoc}
     */
    public function invalidateTags(array \$tags)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result = \$this->pool->invalidateTags(\$tags);
        } finally {
            \$event->end = microtime(true);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/cache/Adapter/TraceableTagAwareAdapter.php";
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

namespace Symfony\\Component\\Cache\\Adapter;

use Symfony\\Contracts\\Cache\\TagAwareCacheInterface;

/**
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class TraceableTagAwareAdapter extends TraceableAdapter implements TagAwareAdapterInterface, TagAwareCacheInterface
{
    public function __construct(TagAwareAdapterInterface \$pool)
    {
        parent::__construct(\$pool);
    }

    /**
     * {@inheritdoc}
     */
    public function invalidateTags(array \$tags)
    {
        \$event = \$this->start(__FUNCTION__);
        try {
            return \$event->result = \$this->pool->invalidateTags(\$tags);
        } finally {
            \$event->end = microtime(true);
        }
    }
}
", "@app/vendor/symfony/cache/Adapter/TraceableTagAwareAdapter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\Adapter\\TraceableTagAwareAdapter.php");
    }
}
