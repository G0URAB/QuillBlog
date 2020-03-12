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

/* @app/vendor/symfony/console/Command/LockableTrait.php */
class __TwigTemplate_e6356b813bc1fee03e980b9f47695140f459901a08c9a53e23d9504479f36172 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Command/LockableTrait.php"));

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

namespace Symfony\\Component\\Console\\Command;

use Symfony\\Component\\Console\\Exception\\LogicException;
use Symfony\\Component\\Lock\\Lock;
use Symfony\\Component\\Lock\\LockFactory;
use Symfony\\Component\\Lock\\Store\\FlockStore;
use Symfony\\Component\\Lock\\Store\\SemaphoreStore;

/**
 * Basic lock feature for commands.
 *
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
trait LockableTrait
{
    /** @var Lock */
    private \$lock;

    /**
     * Locks a command.
     */
    private function lock(string \$name = null, bool \$blocking = false): bool
    {
        if (!class_exists(SemaphoreStore::class)) {
            throw new LogicException('To enable the locking feature you must install the symfony/lock component.');
        }

        if (null !== \$this->lock) {
            throw new LogicException('A lock is already in place.');
        }

        if (SemaphoreStore::isSupported()) {
            \$store = new SemaphoreStore();
        } else {
            \$store = new FlockStore();
        }

        \$this->lock = (new LockFactory(\$store))->createLock(\$name ?: \$this->getName());
        if (!\$this->lock->acquire(\$blocking)) {
            \$this->lock = null;

            return false;
        }

        return true;
    }

    /**
     * Releases the command lock if there is one.
     */
    private function release()
    {
        if (\$this->lock) {
            \$this->lock->release();
            \$this->lock = null;
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Command/LockableTrait.php";
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

namespace Symfony\\Component\\Console\\Command;

use Symfony\\Component\\Console\\Exception\\LogicException;
use Symfony\\Component\\Lock\\Lock;
use Symfony\\Component\\Lock\\LockFactory;
use Symfony\\Component\\Lock\\Store\\FlockStore;
use Symfony\\Component\\Lock\\Store\\SemaphoreStore;

/**
 * Basic lock feature for commands.
 *
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
trait LockableTrait
{
    /** @var Lock */
    private \$lock;

    /**
     * Locks a command.
     */
    private function lock(string \$name = null, bool \$blocking = false): bool
    {
        if (!class_exists(SemaphoreStore::class)) {
            throw new LogicException('To enable the locking feature you must install the symfony/lock component.');
        }

        if (null !== \$this->lock) {
            throw new LogicException('A lock is already in place.');
        }

        if (SemaphoreStore::isSupported()) {
            \$store = new SemaphoreStore();
        } else {
            \$store = new FlockStore();
        }

        \$this->lock = (new LockFactory(\$store))->createLock(\$name ?: \$this->getName());
        if (!\$this->lock->acquire(\$blocking)) {
            \$this->lock = null;

            return false;
        }

        return true;
    }

    /**
     * Releases the command lock if there is one.
     */
    private function release()
    {
        if (\$this->lock) {
            \$this->lock->release();
            \$this->lock = null;
        }
    }
}
", "@app/vendor/symfony/console/Command/LockableTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Command\\LockableTrait.php");
    }
}
