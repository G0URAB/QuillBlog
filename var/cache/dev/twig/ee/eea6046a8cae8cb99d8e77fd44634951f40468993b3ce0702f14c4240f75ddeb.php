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

/* @app/vendor/symfony/http-foundation/Session/SessionBagProxy.php */
class __TwigTemplate_ebf4435171b7606a9503d6c14dbcfab859ba6c93f67a4f825655b773606f7511 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Session/SessionBagProxy.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class SessionBagProxy implements SessionBagInterface
{
    private \$bag;
    private \$data;
    private \$usageIndex;

    public function __construct(SessionBagInterface \$bag, array &\$data, ?int &\$usageIndex)
    {
        \$this->bag = \$bag;
        \$this->data = &\$data;
        \$this->usageIndex = &\$usageIndex;
    }

    public function getBag(): SessionBagInterface
    {
        ++\$this->usageIndex;

        return \$this->bag;
    }

    public function isEmpty(): bool
    {
        if (!isset(\$this->data[\$this->bag->getStorageKey()])) {
            return true;
        }
        ++\$this->usageIndex;

        return empty(\$this->data[\$this->bag->getStorageKey()]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return \$this->bag->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array &\$array): void
    {
        ++\$this->usageIndex;
        \$this->data[\$this->bag->getStorageKey()] = &\$array;

        \$this->bag->initialize(\$array);
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageKey(): string
    {
        return \$this->bag->getStorageKey();
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return \$this->bag->clear();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Session/SessionBagProxy.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class SessionBagProxy implements SessionBagInterface
{
    private \$bag;
    private \$data;
    private \$usageIndex;

    public function __construct(SessionBagInterface \$bag, array &\$data, ?int &\$usageIndex)
    {
        \$this->bag = \$bag;
        \$this->data = &\$data;
        \$this->usageIndex = &\$usageIndex;
    }

    public function getBag(): SessionBagInterface
    {
        ++\$this->usageIndex;

        return \$this->bag;
    }

    public function isEmpty(): bool
    {
        if (!isset(\$this->data[\$this->bag->getStorageKey()])) {
            return true;
        }
        ++\$this->usageIndex;

        return empty(\$this->data[\$this->bag->getStorageKey()]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return \$this->bag->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array &\$array): void
    {
        ++\$this->usageIndex;
        \$this->data[\$this->bag->getStorageKey()] = &\$array;

        \$this->bag->initialize(\$array);
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageKey(): string
    {
        return \$this->bag->getStorageKey();
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return \$this->bag->clear();
    }
}
", "@app/vendor/symfony/http-foundation/Session/SessionBagProxy.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Session\\SessionBagProxy.php");
    }
}
