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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/KeywordList.php */
class __TwigTemplate_fe9d1c91b69b476e8c9a8d145f8b887fdd566043a99d85c6d633f393f4d89936 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/KeywordList.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use function array_flip;
use function array_map;
use function strtoupper;

/**
 * Abstract interface for a SQL reserved keyword dictionary.
 */
abstract class KeywordList
{
    /** @var string[]|null */
    private \$keywords = null;

    /**
     * Checks if the given word is a keyword of this dialect/vendor platform.
     *
     * @param string \$word
     *
     * @return bool
     */
    public function isKeyword(\$word)
    {
        if (\$this->keywords === null) {
            \$this->initializeKeywords();
        }

        return isset(\$this->keywords[strtoupper(\$word)]);
    }

    /**
     * @return void
     */
    protected function initializeKeywords()
    {
        \$this->keywords = array_flip(array_map('strtoupper', \$this->getKeywords()));
    }

    /**
     * Returns the list of keywords.
     *
     * @return string[]
     */
    abstract protected function getKeywords();

    /**
     * Returns the name of this keyword list.
     *
     * @return string
     */
    abstract public function getName();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/KeywordList.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use function array_flip;
use function array_map;
use function strtoupper;

/**
 * Abstract interface for a SQL reserved keyword dictionary.
 */
abstract class KeywordList
{
    /** @var string[]|null */
    private \$keywords = null;

    /**
     * Checks if the given word is a keyword of this dialect/vendor platform.
     *
     * @param string \$word
     *
     * @return bool
     */
    public function isKeyword(\$word)
    {
        if (\$this->keywords === null) {
            \$this->initializeKeywords();
        }

        return isset(\$this->keywords[strtoupper(\$word)]);
    }

    /**
     * @return void
     */
    protected function initializeKeywords()
    {
        \$this->keywords = array_flip(array_map('strtoupper', \$this->getKeywords()));
    }

    /**
     * Returns the list of keywords.
     *
     * @return string[]
     */
    abstract protected function getKeywords();

    /**
     * Returns the name of this keyword list.
     *
     * @return string
     */
    abstract public function getName();
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/KeywordList.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Platforms\\Keywords\\KeywordList.php");
    }
}
