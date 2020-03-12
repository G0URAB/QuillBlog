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

/* @app/vendor/symfony/framework-bundle/Resources/bin/check-unused-tags-whitelist.php */
class __TwigTemplate_d330d4aa292be847266acf51b1b35d715411707d508f7641268d2b3abcc21562 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/bin/check-unused-tags-whitelist.php"));

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

require dirname(__DIR__, 6).'/vendor/autoload.php';

use Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler\\UnusedTagsPassUtils;

\$target = dirname(__DIR__, 2).'/DependencyInjection/Compiler/UnusedTagsPass.php';
\$contents = file_get_contents(\$target);
\$contents = preg_replace('{private \\\$whitelist = \\[(.+?)\\];}sm', \"private \\\$whitelist = [\\n        '\".implode(\"',\\n        '\", UnusedTagsPassUtils::getDefinedTags()).\"',\\n    ];\", \$contents);
file_put_contents(\$target, \$contents);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/bin/check-unused-tags-whitelist.php";
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

require dirname(__DIR__, 6).'/vendor/autoload.php';

use Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\Compiler\\UnusedTagsPassUtils;

\$target = dirname(__DIR__, 2).'/DependencyInjection/Compiler/UnusedTagsPass.php';
\$contents = file_get_contents(\$target);
\$contents = preg_replace('{private \\\$whitelist = \\[(.+?)\\];}sm', \"private \\\$whitelist = [\\n        '\".implode(\"',\\n        '\", UnusedTagsPassUtils::getDefinedTags()).\"',\\n    ];\", \$contents);
file_put_contents(\$target, \$contents);
", "@app/vendor/symfony/framework-bundle/Resources/bin/check-unused-tags-whitelist.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\bin\\check-unused-tags-whitelist.php");
    }
}
