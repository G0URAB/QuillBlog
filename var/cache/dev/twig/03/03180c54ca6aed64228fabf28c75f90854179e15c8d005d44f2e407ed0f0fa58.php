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

/* @app/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/IndexedReader.php */
class __TwigTemplate_1af67ced545775e6b63a1e3f1dd299a9398d69203947870513dd751a8648a0f8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/IndexedReader.php"));

        // line 1
        echo "<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\Common\\Annotations;

/**
 * Allows the reader to be used in-place of Doctrine's reader.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class IndexedReader implements Reader
{
    /**
     * @var Reader
     */
    private \$delegate;

    /**
     * Constructor.
     *
     * @param Reader \$reader
     */
    public function __construct(Reader \$reader)
    {
        \$this->delegate = \$reader;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotations(\\ReflectionClass \$class)
    {
        \$annotations = [];
        foreach (\$this->delegate->getClassAnnotations(\$class) as \$annot) {
            \$annotations[get_class(\$annot)] = \$annot;
        }

        return \$annotations;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotation(\\ReflectionClass \$class, \$annotation)
    {
        return \$this->delegate->getClassAnnotation(\$class, \$annotation);
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotations(\\ReflectionMethod \$method)
    {
        \$annotations = [];
        foreach (\$this->delegate->getMethodAnnotations(\$method) as \$annot) {
            \$annotations[get_class(\$annot)] = \$annot;
        }

        return \$annotations;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotation(\\ReflectionMethod \$method, \$annotation)
    {
        return \$this->delegate->getMethodAnnotation(\$method, \$annotation);
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotations(\\ReflectionProperty \$property)
    {
        \$annotations = [];
        foreach (\$this->delegate->getPropertyAnnotations(\$property) as \$annot) {
            \$annotations[get_class(\$annot)] = \$annot;
        }

        return \$annotations;
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotation(\\ReflectionProperty \$property, \$annotation)
    {
        return \$this->delegate->getPropertyAnnotation(\$property, \$annotation);
    }

    /**
     * Proxies all methods to the delegate.
     *
     * @param string \$method
     * @param array  \$args
     *
     * @return mixed
     */
    public function __call(\$method, \$args)
    {
        return call_user_func_array([\$this->delegate, \$method], \$args);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/IndexedReader.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\Common\\Annotations;

/**
 * Allows the reader to be used in-place of Doctrine's reader.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class IndexedReader implements Reader
{
    /**
     * @var Reader
     */
    private \$delegate;

    /**
     * Constructor.
     *
     * @param Reader \$reader
     */
    public function __construct(Reader \$reader)
    {
        \$this->delegate = \$reader;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotations(\\ReflectionClass \$class)
    {
        \$annotations = [];
        foreach (\$this->delegate->getClassAnnotations(\$class) as \$annot) {
            \$annotations[get_class(\$annot)] = \$annot;
        }

        return \$annotations;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotation(\\ReflectionClass \$class, \$annotation)
    {
        return \$this->delegate->getClassAnnotation(\$class, \$annotation);
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotations(\\ReflectionMethod \$method)
    {
        \$annotations = [];
        foreach (\$this->delegate->getMethodAnnotations(\$method) as \$annot) {
            \$annotations[get_class(\$annot)] = \$annot;
        }

        return \$annotations;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotation(\\ReflectionMethod \$method, \$annotation)
    {
        return \$this->delegate->getMethodAnnotation(\$method, \$annotation);
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotations(\\ReflectionProperty \$property)
    {
        \$annotations = [];
        foreach (\$this->delegate->getPropertyAnnotations(\$property) as \$annot) {
            \$annotations[get_class(\$annot)] = \$annot;
        }

        return \$annotations;
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotation(\\ReflectionProperty \$property, \$annotation)
    {
        return \$this->delegate->getPropertyAnnotation(\$property, \$annotation);
    }

    /**
     * Proxies all methods to the delegate.
     *
     * @param string \$method
     * @param array  \$args
     *
     * @return mixed
     */
    public function __call(\$method, \$args)
    {
        return call_user_func_array([\$this->delegate, \$method], \$args);
    }
}
", "@app/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/IndexedReader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\IndexedReader.php");
    }
}
