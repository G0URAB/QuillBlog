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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/YamlConfiguration.php */
class __TwigTemplate_3af5d15ae9f42e036cb6d1c4633ce8bc473a6376418a87b07aff28388cdbfc50 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/YamlConfiguration.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration;

use Doctrine\\Migrations\\Configuration\\Exception\\YamlNotAvailable;
use Doctrine\\Migrations\\Configuration\\Exception\\YamlNotValid;
use Symfony\\Component\\Yaml\\Exception\\ParseException;
use Symfony\\Component\\Yaml\\Yaml;
use function assert;
use function class_exists;
use function file_get_contents;
use function is_array;

/**
 * The YamlConfiguration class is responsible for loading migration configuration information from a YAML file.
 *
 * @internal
 */
class YamlConfiguration extends AbstractFileConfiguration
{
    /**
     * @inheritdoc
     */
    protected function doLoad(string \$file) : void
    {
        if (! class_exists(Yaml::class)) {
            throw YamlNotAvailable::new();
        }

        \$content = file_get_contents(\$file);

        assert(\$content !== false);

        try {
            \$config = Yaml::parse(\$content);
        } catch (ParseException \$e) {
            throw YamlNotValid::malformed();
        }

        if (! is_array(\$config)) {
            throw YamlNotValid::invalid();
        }

        if (isset(\$config['migrations_directory'])) {
            \$config['migrations_directory'] = \$this->getDirectoryRelativeToFile(
                \$file,
                \$config['migrations_directory']
            );
        }

        \$this->setConfiguration(\$config);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/YamlConfiguration.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration;

use Doctrine\\Migrations\\Configuration\\Exception\\YamlNotAvailable;
use Doctrine\\Migrations\\Configuration\\Exception\\YamlNotValid;
use Symfony\\Component\\Yaml\\Exception\\ParseException;
use Symfony\\Component\\Yaml\\Yaml;
use function assert;
use function class_exists;
use function file_get_contents;
use function is_array;

/**
 * The YamlConfiguration class is responsible for loading migration configuration information from a YAML file.
 *
 * @internal
 */
class YamlConfiguration extends AbstractFileConfiguration
{
    /**
     * @inheritdoc
     */
    protected function doLoad(string \$file) : void
    {
        if (! class_exists(Yaml::class)) {
            throw YamlNotAvailable::new();
        }

        \$content = file_get_contents(\$file);

        assert(\$content !== false);

        try {
            \$config = Yaml::parse(\$content);
        } catch (ParseException \$e) {
            throw YamlNotValid::malformed();
        }

        if (! is_array(\$config)) {
            throw YamlNotValid::invalid();
        }

        if (isset(\$config['migrations_directory'])) {
            \$config['migrations_directory'] = \$this->getDirectoryRelativeToFile(
                \$file,
                \$config['migrations_directory']
            );
        }

        \$this->setConfiguration(\$config);
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/YamlConfiguration.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\YamlConfiguration.php");
    }
}
