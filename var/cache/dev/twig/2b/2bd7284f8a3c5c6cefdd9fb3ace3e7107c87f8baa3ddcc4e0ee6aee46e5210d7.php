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

/* @includes/quill.php */
class __TwigTemplate_65422aa954652cd7d57bc56a7a17c7c4d7fe89c1e37eeb2945d77f448b8a596a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@includes/quill.php"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\">
  </script>
  <!-- Include stylesheet -->
  <link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\">

  <!-- Include the Quill library -->
  <script src=\"https://cdn.quilljs.com/1.3.6/quill.js\"></script>
  <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/quill-image-resize.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/quill.js"), "html", null, true);
        echo "\"></script>
</head>

<body>

  <div id=\"delta-container\" style=\"width:100%; height:auto; padding:5% 5%;\">
    <!-- Create the editor container -->
    <div id=\"editor\">
      <p>Hello World!</p>
      <p>Some initial <strong>bold</strong> text</p>
    </div>
    <div id=\"edit_div\" class=\"float-right mt-3 mb-4\">
       <button class=\"btn btn-primary\" id=\"edit_delta\">Bearbeiten</button>
    </div>
    
    <div id=\"save_cancel_buttons\" class=\"mt-3 mb-4\">
      <button class=\"btn btn-success\" id=\"save_delta\">Speichern</button>
      <button class=\"btn btn-info\" id=\"cancel_delta\">Cancel</button>
    </div>
    
  </div>

  <!-- Initialize Quill editor -->
  <script>
    
    var image_files = [];
    
    function imageHandler() {
      var image_input = document.createElement('input');
      image_input.setAttribute('type', 'file');
      image_input.click();
      image_input.onchange = function() {
        var file = image_input.files[0];
        image_files.push(file.name);
        var fd = new FormData();
        fd.append('image', file);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/blog/ajax', true);
        xhr.onload = () => {
          if (xhr.status === 200) {
            var obj = JSON.parse(xhr.response);
            console.log(file.name);
            var range = quill.getSelection();
            quill.insertEmbed(range.index, 'image', obj.url);
            
          }
        };
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.send(fd);
      }

    }
//benny
    var toolbarOptions = [
      ['bold', 'italic', 'underline', 'strike'], // toggled buttons
      ['blockquote', 'code-block'],
      ['image', 'video'],
      [{
        'header': 1
      }, {
        'header': 2
      }], // custom button values

      [{
        'list': 'ordered'
      }, {
        'list': 'bullet'
      }],
      [{
        'script': 'sub'
      }, {
        'script': 'super'
      }], // superscript/subscript
      [{
        'indent': '-1'
      }, {
        'indent': '+1'
      }], // outdent/indent
      [{
        'direction': 'rtl'
      }], // text direction

      [{
        'size': ['small', false, 'large', 'huge']
      }], // custom dropdown
      [{
        'header': [1, 2, 3, 4, 5, 6, false]
      }],

      [{
        'color': []
      }, {
        'background': []
      }], // dropdown with defaults from theme
      [{
        'font': []
      }],
      [{
        'align': []
      }],

      ['clean'] // remove formatting button
    ];

    var BaseImageFormat = Quill.import('formats/image');
    const ImageFormatAttributesList = [
      'alt',
      'height',
      'width',
      'style'
    ];

    class ImageFormat extends BaseImageFormat {
      static formats(domNode) {
        return ImageFormatAttributesList.reduce(function(formats, attribute) {
          if (domNode.hasAttribute(attribute)) {
            formats[attribute] = domNode.getAttribute(attribute);
          }
          return formats;
        }, {});
      }
      format(name, value) {
        if (ImageFormatAttributesList.indexOf(name) > -1) {
          if (value) {
            this.domNode.setAttribute(name, value);
          } else {
            this.domNode.removeAttribute(name);
          }
        } else {
          super.format(name, value);
        }
      }
    }

    Quill.register(ImageFormat, true);
    
    var quill = new Quill('#editor', {
      theme: 'snow',
      modules: {
        toolbar: toolbarOptions,
        imageResize: true,
      },
    });

  </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@includes/quill.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  56 => 15,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\">
  </script>
  <!-- Include stylesheet -->
  <link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\">

  <!-- Include the Quill library -->
  <script src=\"https://cdn.quilljs.com/1.3.6/quill.js\"></script>
  <script src=\"{{ asset('js/quill-image-resize.min.js') }}\"></script>
  <script src=\"{{ asset('js/quill.js') }}\"></script>
</head>

<body>

  <div id=\"delta-container\" style=\"width:100%; height:auto; padding:5% 5%;\">
    <!-- Create the editor container -->
    <div id=\"editor\">
      <p>Hello World!</p>
      <p>Some initial <strong>bold</strong> text</p>
    </div>
    <div id=\"edit_div\" class=\"float-right mt-3 mb-4\">
       <button class=\"btn btn-primary\" id=\"edit_delta\">Bearbeiten</button>
    </div>
    
    <div id=\"save_cancel_buttons\" class=\"mt-3 mb-4\">
      <button class=\"btn btn-success\" id=\"save_delta\">Speichern</button>
      <button class=\"btn btn-info\" id=\"cancel_delta\">Cancel</button>
    </div>
    
  </div>

  <!-- Initialize Quill editor -->
  <script>
    
    var image_files = [];
    
    function imageHandler() {
      var image_input = document.createElement('input');
      image_input.setAttribute('type', 'file');
      image_input.click();
      image_input.onchange = function() {
        var file = image_input.files[0];
        image_files.push(file.name);
        var fd = new FormData();
        fd.append('image', file);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/blog/ajax', true);
        xhr.onload = () => {
          if (xhr.status === 200) {
            var obj = JSON.parse(xhr.response);
            console.log(file.name);
            var range = quill.getSelection();
            quill.insertEmbed(range.index, 'image', obj.url);
            
          }
        };
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.send(fd);
      }

    }
//benny
    var toolbarOptions = [
      ['bold', 'italic', 'underline', 'strike'], // toggled buttons
      ['blockquote', 'code-block'],
      ['image', 'video'],
      [{
        'header': 1
      }, {
        'header': 2
      }], // custom button values

      [{
        'list': 'ordered'
      }, {
        'list': 'bullet'
      }],
      [{
        'script': 'sub'
      }, {
        'script': 'super'
      }], // superscript/subscript
      [{
        'indent': '-1'
      }, {
        'indent': '+1'
      }], // outdent/indent
      [{
        'direction': 'rtl'
      }], // text direction

      [{
        'size': ['small', false, 'large', 'huge']
      }], // custom dropdown
      [{
        'header': [1, 2, 3, 4, 5, 6, false]
      }],

      [{
        'color': []
      }, {
        'background': []
      }], // dropdown with defaults from theme
      [{
        'font': []
      }],
      [{
        'align': []
      }],

      ['clean'] // remove formatting button
    ];

    var BaseImageFormat = Quill.import('formats/image');
    const ImageFormatAttributesList = [
      'alt',
      'height',
      'width',
      'style'
    ];

    class ImageFormat extends BaseImageFormat {
      static formats(domNode) {
        return ImageFormatAttributesList.reduce(function(formats, attribute) {
          if (domNode.hasAttribute(attribute)) {
            formats[attribute] = domNode.getAttribute(attribute);
          }
          return formats;
        }, {});
      }
      format(name, value) {
        if (ImageFormatAttributesList.indexOf(name) > -1) {
          if (value) {
            this.domNode.setAttribute(name, value);
          } else {
            this.domNode.removeAttribute(name);
          }
        } else {
          super.format(name, value);
        }
      }
    }

    Quill.register(ImageFormat, true);
    
    var quill = new Quill('#editor', {
      theme: 'snow',
      modules: {
        toolbar: toolbarOptions,
        imageResize: true,
      },
    });

  </script>

", "@includes/quill.php", "C:\\wamp64\\www\\QuillBlog\\public\\includes\\quill.php");
    }
}
