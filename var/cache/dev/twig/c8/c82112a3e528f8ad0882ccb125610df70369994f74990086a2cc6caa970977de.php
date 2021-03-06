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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/AnnotationExporter.php */
class __TwigTemplate_d1d8ddef56484605e71537b604706033f28cc794bdc8db6bdcb7340f35748e81 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/AnnotationExporter.php"));

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

namespace Doctrine\\ORM\\Tools\\Export\\Driver;

use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use Doctrine\\ORM\\Tools\\EntityGenerator;

/**
 * ClassMetadata exporter for PHP classes with annotations.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Jonathan Wage <jonwage@gmail.com>
 *
 * @deprecated 2.7 This class is being removed from the ORM and won't have any replacement
 */
class AnnotationExporter extends AbstractExporter
{
    /**
     * @var string
     */
    protected \$_extension = '.php';

    /**
     * @var EntityGenerator|null
     */
    private \$_entityGenerator;

    /**
     * {@inheritdoc}
     */
    public function exportClassMetadata(ClassMetadataInfo \$metadata)
    {
        if ( ! \$this->_entityGenerator) {
            throw new \\RuntimeException('For the AnnotationExporter you must set an EntityGenerator instance with the setEntityGenerator() method.');
        }

        \$this->_entityGenerator->setGenerateAnnotations(true);
        \$this->_entityGenerator->setGenerateStubMethods(false);
        \$this->_entityGenerator->setRegenerateEntityIfExists(false);
        \$this->_entityGenerator->setUpdateEntityIfExists(false);

        return \$this->_entityGenerator->generateEntityClass(\$metadata);
    }

    /**
     * @param ClassMetadataInfo \$metadata
     *
     * @return string
     */
    protected function _generateOutputPath(ClassMetadataInfo \$metadata)
    {
        return \$this->_outputDir . '/' . str_replace('\\\\', '/', \$metadata->name) . \$this->_extension;
    }

    /**
     * @param EntityGenerator \$entityGenerator
     *
     * @return void
     */
    public function setEntityGenerator(EntityGenerator \$entityGenerator)
    {
        \$this->_entityGenerator = \$entityGenerator;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/AnnotationExporter.php";
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

namespace Doctrine\\ORM\\Tools\\Export\\Driver;

use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use Doctrine\\ORM\\Tools\\EntityGenerator;

/**
 * ClassMetadata exporter for PHP classes with annotations.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Jonathan Wage <jonwage@gmail.com>
 *
 * @deprecated 2.7 This class is being removed from the ORM and won't have any replacement
 */
class AnnotationExporter extends AbstractExporter
{
    /**
     * @var string
     */
    protected \$_extension = '.php';

    /**
     * @var EntityGenerator|null
     */
    private \$_entityGenerator;

    /**
     * {@inheritdoc}
     */
    public function exportClassMetadata(ClassMetadataInfo \$metadata)
    {
        if ( ! \$this->_entityGenerator) {
            throw new \\RuntimeException('For the AnnotationExporter you must set an EntityGenerator instance with the setEntityGenerator() method.');
        }

        \$this->_entityGenerator->setGenerateAnnotations(true);
        \$this->_entityGenerator->setGenerateStubMethods(false);
        \$this->_entityGenerator->setRegenerateEntityIfExists(false);
        \$this->_entityGenerator->setUpdateEntityIfExists(false);

        return \$this->_entityGenerator->generateEntityClass(\$metadata);
    }

    /**
     * @param ClassMetadataInfo \$metadata
     *
     * @return string
     */
    protected function _generateOutputPath(ClassMetadataInfo \$metadata)
    {
        return \$this->_outputDir . '/' . str_replace('\\\\', '/', \$metadata->name) . \$this->_extension;
    }

    /**
     * @param EntityGenerator \$entityGenerator
     *
     * @return void
     */
    public function setEntityGenerator(EntityGenerator \$entityGenerator)
    {
        \$this->_entityGenerator = \$entityGenerator;
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/AnnotationExporter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Export\\Driver\\AnnotationExporter.php");
    }
}
