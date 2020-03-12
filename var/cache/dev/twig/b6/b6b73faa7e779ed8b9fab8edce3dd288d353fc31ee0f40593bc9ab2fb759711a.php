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

/* @app/vendor/symfony/twig-bridge/Extension/SecurityExtension.php */
class __TwigTemplate_0eb159b81956ded4c3d7e79f24ee3cbaf46bb54e2cbc04af492c44ef25eb7dab extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Extension/SecurityExtension.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Security\\Acl\\Voter\\FieldVote;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationCredentialsNotFoundException;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * SecurityExtension exposes security context features.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class SecurityExtension extends AbstractExtension
{
    private \$securityChecker;

    public function __construct(AuthorizationCheckerInterface \$securityChecker = null)
    {
        \$this->securityChecker = \$securityChecker;
    }

    /**
     * @param mixed \$object
     */
    public function isGranted(\$role, \$object = null, string \$field = null): bool
    {
        if (null === \$this->securityChecker) {
            return false;
        }

        if (null !== \$field) {
            \$object = new FieldVote(\$object, \$field);
        }

        try {
            return \$this->securityChecker->isGranted(\$role, \$object);
        } catch (AuthenticationCredentialsNotFoundException \$e) {
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('is_granted', [\$this, 'isGranted']),
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Extension/SecurityExtension.php";
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Security\\Acl\\Voter\\FieldVote;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationCredentialsNotFoundException;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * SecurityExtension exposes security context features.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class SecurityExtension extends AbstractExtension
{
    private \$securityChecker;

    public function __construct(AuthorizationCheckerInterface \$securityChecker = null)
    {
        \$this->securityChecker = \$securityChecker;
    }

    /**
     * @param mixed \$object
     */
    public function isGranted(\$role, \$object = null, string \$field = null): bool
    {
        if (null === \$this->securityChecker) {
            return false;
        }

        if (null !== \$field) {
            \$object = new FieldVote(\$object, \$field);
        }

        try {
            return \$this->securityChecker->isGranted(\$role, \$object);
        } catch (AuthenticationCredentialsNotFoundException \$e) {
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('is_granted', [\$this, 'isGranted']),
        ];
    }
}
", "@app/vendor/symfony/twig-bridge/Extension/SecurityExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Extension\\SecurityExtension.php");
    }
}
