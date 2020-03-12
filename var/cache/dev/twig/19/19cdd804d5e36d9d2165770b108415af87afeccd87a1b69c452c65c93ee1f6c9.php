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

/* @app/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php */
class __TwigTemplate_b62217bec64e46665c58ad7669eebb15896640f9ef81ab4de0d2c89f11ffdd0c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php"));

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

use Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * LogoutUrlHelper provides generator functions for the logout URL to Twig.
 *
 * @author Jeremy Mikola <jmikola@gmail.com>
 */
final class LogoutUrlExtension extends AbstractExtension
{
    private \$generator;

    public function __construct(LogoutUrlGenerator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('logout_url', [\$this, 'getLogoutUrl']),
            new TwigFunction('logout_path', [\$this, 'getLogoutPath']),
        ];
    }

    /**
     * Generates the relative logout URL for the firewall.
     *
     * @param string|null \$key The firewall key or null to use the current firewall key
     */
    public function getLogoutPath(string \$key = null): string
    {
        return \$this->generator->getLogoutPath(\$key);
    }

    /**
     * Generates the absolute logout URL for the firewall.
     *
     * @param string|null \$key The firewall key or null to use the current firewall key
     */
    public function getLogoutUrl(string \$key = null): string
    {
        return \$this->generator->getLogoutUrl(\$key);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php";
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

use Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * LogoutUrlHelper provides generator functions for the logout URL to Twig.
 *
 * @author Jeremy Mikola <jmikola@gmail.com>
 */
final class LogoutUrlExtension extends AbstractExtension
{
    private \$generator;

    public function __construct(LogoutUrlGenerator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('logout_url', [\$this, 'getLogoutUrl']),
            new TwigFunction('logout_path', [\$this, 'getLogoutPath']),
        ];
    }

    /**
     * Generates the relative logout URL for the firewall.
     *
     * @param string|null \$key The firewall key or null to use the current firewall key
     */
    public function getLogoutPath(string \$key = null): string
    {
        return \$this->generator->getLogoutPath(\$key);
    }

    /**
     * Generates the absolute logout URL for the firewall.
     *
     * @param string|null \$key The firewall key or null to use the current firewall key
     */
    public function getLogoutUrl(string \$key = null): string
    {
        return \$this->generator->getLogoutUrl(\$key);
    }
}
", "@app/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Extension\\LogoutUrlExtension.php");
    }
}
