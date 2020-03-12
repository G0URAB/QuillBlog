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

/* @app/vendor/bin/var-dump-server */
class __TwigTemplate_fe82ac77b5cde68d2a0bcb3b716378868061698bb68b87081460194b94b94340 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/bin/var-dump-server"));

        // line 1
        echo "#!/usr/bin/env sh

dir=\$(cd \"\${0%[/\\\\]*}\" > /dev/null; cd \"../symfony/var-dumper/Resources/bin\" && pwd)

if [ -d /proc/cygdrive ]; then
    case \$(which php) in
        \$(readlink -n /proc/cygdrive)/*)
            # We are in Cygwin using Windows php, so the path must be translated
            dir=\$(cygpath -m \"\$dir\");
            ;;
    esac
fi

\"\${dir}/var-dump-server\" \"\$@\"
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/bin/var-dump-server";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#!/usr/bin/env sh

dir=\$(cd \"\${0%[/\\\\]*}\" > /dev/null; cd \"../symfony/var-dumper/Resources/bin\" && pwd)

if [ -d /proc/cygdrive ]; then
    case \$(which php) in
        \$(readlink -n /proc/cygdrive)/*)
            # We are in Cygwin using Windows php, so the path must be translated
            dir=\$(cygpath -m \"\$dir\");
            ;;
    esac
fi

\"\${dir}/var-dump-server\" \"\$@\"
", "@app/vendor/bin/var-dump-server", "C:\\wamp64\\www\\QuillBlog\\vendor\\bin\\var-dump-server");
    }
}
