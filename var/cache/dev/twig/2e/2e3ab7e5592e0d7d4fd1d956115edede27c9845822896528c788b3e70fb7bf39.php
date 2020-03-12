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

/* @app/src/Entity/Blog.php */
class __TwigTemplate_dabe903ce84483fbfbce2465b9817648812f589cb2d9070554427bddd3fef1ed extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/src/Entity/Blog.php"));

        // line 1
        echo "<?php

namespace App\\Entity;

use Doctrine\\ORM\\Mapping as ORM;

/**
 * @ORM\\Entity(repositoryClass=\"App\\Repository\\BlogControllerRepository\")
 */
class BlogController
{
    /**
     * @ORM\\Id()
     * @ORM\\GeneratedValue()
     * @ORM\\Column(type=\"integer\")
     */
    private \$id;

    /**
     * @ORM\\Column(type=\"string\", length=255, nullable=true)
     */
    private \$title;

    /**
     * @ORM\\Column(type=\"string\", length=255, nullable=true)
     */
    private \$date;

    /**
     * @ORM\\Column(type=\"string\", length=255, nullable=true)
     */
    private \$picture;

    /**
     * @ORM\\Column(type=\"text\", nullable=true)
     */
    private \$delta;

    /**
     * @ORM\\Column(type=\"string\", length=100, nullable=true)
     */
    private \$reading_time;

    public function getId(): ?int
    {
        return \$this->id;
    }

    public function getTitle(): ?string
    {
        return \$this->title;
    }

    public function setTitle(?string \$title): self
    {
        \$this->title = \$title;

        return \$this;
    }

    public function getDate(): ?string
    {
        return \$this->date;
    }

    public function setDate(?string \$date): self
    {
        \$this->date = \$date;

        return \$this;
    }

    public function getPicture(): ?string
    {
        return \$this->picture;
    }

    public function setPicture(?string \$picture): self
    {
        \$this->picture = \$picture;

        return \$this;
    }

    public function getDelta(): ?string
    {
        return \$this->delta;
    }

    public function setDelta(?string \$delta): self
    {
        \$this->delta = \$delta;

        return \$this;
    }

    public function getReadingTime(): ?string
    {
        return \$this->reading_time;
    }

    public function setReadingTime(?string \$reading_time): self
    {
        \$this->reading_time = \$reading_time;

        return \$this;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/src/Entity/Blog.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App\\Entity;

use Doctrine\\ORM\\Mapping as ORM;

/**
 * @ORM\\Entity(repositoryClass=\"App\\Repository\\BlogControllerRepository\")
 */
class BlogController
{
    /**
     * @ORM\\Id()
     * @ORM\\GeneratedValue()
     * @ORM\\Column(type=\"integer\")
     */
    private \$id;

    /**
     * @ORM\\Column(type=\"string\", length=255, nullable=true)
     */
    private \$title;

    /**
     * @ORM\\Column(type=\"string\", length=255, nullable=true)
     */
    private \$date;

    /**
     * @ORM\\Column(type=\"string\", length=255, nullable=true)
     */
    private \$picture;

    /**
     * @ORM\\Column(type=\"text\", nullable=true)
     */
    private \$delta;

    /**
     * @ORM\\Column(type=\"string\", length=100, nullable=true)
     */
    private \$reading_time;

    public function getId(): ?int
    {
        return \$this->id;
    }

    public function getTitle(): ?string
    {
        return \$this->title;
    }

    public function setTitle(?string \$title): self
    {
        \$this->title = \$title;

        return \$this;
    }

    public function getDate(): ?string
    {
        return \$this->date;
    }

    public function setDate(?string \$date): self
    {
        \$this->date = \$date;

        return \$this;
    }

    public function getPicture(): ?string
    {
        return \$this->picture;
    }

    public function setPicture(?string \$picture): self
    {
        \$this->picture = \$picture;

        return \$this;
    }

    public function getDelta(): ?string
    {
        return \$this->delta;
    }

    public function setDelta(?string \$delta): self
    {
        \$this->delta = \$delta;

        return \$this;
    }

    public function getReadingTime(): ?string
    {
        return \$this->reading_time;
    }

    public function setReadingTime(?string \$reading_time): self
    {
        \$this->reading_time = \$reading_time;

        return \$this;
    }
}
", "@app/src/Entity/Blog.php", "C:\\wamp64\\www\\QuillBlog\\src\\Entity\\Blog.php");
    }
}
