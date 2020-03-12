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

/* @app/vendor/symfony/mime/Part/Multipart/DigestPart.php */
class __TwigTemplate_2ff8795bae21b9852c65164686d75b1286f3d52310a9be1d8e7ac003f38f14b4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/Part/Multipart/DigestPart.php"));

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

namespace Symfony\\Component\\Mime\\Part\\Multipart;

use Symfony\\Component\\Mime\\Part\\AbstractMultipartPart;
use Symfony\\Component\\Mime\\Part\\MessagePart;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class DigestPart extends AbstractMultipartPart
{
    public function __construct(MessagePart ...\$parts)
    {
        parent::__construct(...\$parts);
    }

    public function getMediaSubtype(): string
    {
        return 'digest';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/Part/Multipart/DigestPart.php";
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

namespace Symfony\\Component\\Mime\\Part\\Multipart;

use Symfony\\Component\\Mime\\Part\\AbstractMultipartPart;
use Symfony\\Component\\Mime\\Part\\MessagePart;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class DigestPart extends AbstractMultipartPart
{
    public function __construct(MessagePart ...\$parts)
    {
        parent::__construct(...\$parts);
    }

    public function getMediaSubtype(): string
    {
        return 'digest';
    }
}
", "@app/vendor/symfony/mime/Part/Multipart/DigestPart.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\Part\\Multipart\\DigestPart.php");
    }
}
