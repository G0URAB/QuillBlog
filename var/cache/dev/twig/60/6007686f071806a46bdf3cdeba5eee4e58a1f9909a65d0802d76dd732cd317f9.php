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

/* @app/vendor/symfony/twig-bridge/Mime/TemplatedEmail.php */
class __TwigTemplate_94c9d9a9792a260376749ebb1cce559a6dae4375f08a1854fd58ab829b2bf667 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Mime/TemplatedEmail.php"));

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

namespace Symfony\\Bridge\\Twig\\Mime;

use Symfony\\Component\\Mime\\Email;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TemplatedEmail extends Email
{
    private \$htmlTemplate;
    private \$textTemplate;
    private \$context = [];

    /**
     * @return \$this
     */
    public function textTemplate(?string \$template)
    {
        \$this->textTemplate = \$template;

        return \$this;
    }

    /**
     * @return \$this
     */
    public function htmlTemplate(?string \$template)
    {
        \$this->htmlTemplate = \$template;

        return \$this;
    }

    public function getTextTemplate(): ?string
    {
        return \$this->textTemplate;
    }

    public function getHtmlTemplate(): ?string
    {
        return \$this->htmlTemplate;
    }

    /**
     * @return \$this
     */
    public function context(array \$context)
    {
        \$this->context = \$context;

        return \$this;
    }

    public function getContext(): array
    {
        return \$this->context;
    }

    /**
     * @internal
     */
    public function __serialize(): array
    {
        return [\$this->htmlTemplate, \$this->textTemplate, \$this->context, parent::__serialize()];
    }

    /**
     * @internal
     */
    public function __unserialize(array \$data): void
    {
        [\$this->htmlTemplate, \$this->textTemplate, \$this->context, \$parentData] = \$data;

        parent::__unserialize(\$parentData);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Mime/TemplatedEmail.php";
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

namespace Symfony\\Bridge\\Twig\\Mime;

use Symfony\\Component\\Mime\\Email;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TemplatedEmail extends Email
{
    private \$htmlTemplate;
    private \$textTemplate;
    private \$context = [];

    /**
     * @return \$this
     */
    public function textTemplate(?string \$template)
    {
        \$this->textTemplate = \$template;

        return \$this;
    }

    /**
     * @return \$this
     */
    public function htmlTemplate(?string \$template)
    {
        \$this->htmlTemplate = \$template;

        return \$this;
    }

    public function getTextTemplate(): ?string
    {
        return \$this->textTemplate;
    }

    public function getHtmlTemplate(): ?string
    {
        return \$this->htmlTemplate;
    }

    /**
     * @return \$this
     */
    public function context(array \$context)
    {
        \$this->context = \$context;

        return \$this;
    }

    public function getContext(): array
    {
        return \$this->context;
    }

    /**
     * @internal
     */
    public function __serialize(): array
    {
        return [\$this->htmlTemplate, \$this->textTemplate, \$this->context, parent::__serialize()];
    }

    /**
     * @internal
     */
    public function __unserialize(array \$data): void
    {
        [\$this->htmlTemplate, \$this->textTemplate, \$this->context, \$parentData] = \$data;

        parent::__unserialize(\$parentData);
    }
}
", "@app/vendor/symfony/twig-bridge/Mime/TemplatedEmail.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Mime\\TemplatedEmail.php");
    }
}
