$(document).ready(function () {

  $(".ql-toolbar.ql-snow").css("display", "none");
  $(".ql-container.ql-snow").css("border", "0px solid white");
  $("#save_cancel_buttons").css("display", "none");
  window.quill.enable(false);

  $("#edit_delta").click(function () {

    // var quill_options = {
    //   theme: 'snow',
    //   modules: {
    //     toolbar: toolbarOptions,
    //     imageResize: true,
    //   },
    // };
    // window.quill = new Quill('#editor', quill_options);

    $("#save_cancel_buttons").css("display", "block");
    $(".ql-toolbar.ql-snow").css("display", "block");
    $(".ql-container.ql-snow").css("border", "1px solid white");
    $(this).css("display","none");
    // var toolbar = quill.getModule('toolbar');
    // toolbar.addHandler('image', imageHandler);
    window.quill.enable(true);
  });

  $("#save_delta").click(function () {
    $(".ql-toolbar.ql-snow").css("display", "none");
    $(".ql-container.ql-snow").css("border", "0px solid white");
    $("#save_cancel_buttons").css("display", "none");
    quill.enable(false);
    var new_delta = JSON.stringify(quill.getContents());
    $.ajax({
      type: 'POST',
      url: '/blog/ajax',
      dataType: "json",
      async: true,
      data: {
        content: new_delta,
        files: image_files,
        type: 'insert_delta',
        id: window.blog_id
      },
      success: function (response) {
        location.reload();
      }
    });

  });

  $("#cancel_delta").click(function () {

    window.location.reload();

  });

});
