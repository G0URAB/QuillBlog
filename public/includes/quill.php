<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
  </script>
  <!-- Include stylesheet -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

  <!-- Include the Quill library -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="{{ asset('js/quill-image-resize.min.js') }}"></script>
  <script src="{{ asset('js/quill.js') }}"></script>
</head>

<body>

  <div id="delta-container" style="width:100%; height:auto; padding:5% 5%;">
    <!-- Create the editor container -->
    <div id="editor">
      <p>Hello World!</p>
      <p>Some initial <strong>bold</strong> text</p>
    </div>
    <div id="edit_div" class="float-right mt-3 mb-4">
       <button class="btn btn-primary" id="edit_delta">Bearbeiten</button>
    </div>
    
    <div id="save_cancel_buttons" class="mt-3 mb-4">
      <button class="btn btn-success" id="save_delta">Speichern</button>
      <button class="btn btn-info" id="cancel_delta">Cancel</button>
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
        imageResize: false,
      },
    });

  </script>

