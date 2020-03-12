$(document).ready(function () {
    $('#blog_form').trigger("reset");

    //Anmelde button
    $("#add_blog_btn").on("click", () => {
        $(".blog-create-sidebar").css({
            "transition": ".5s ease-out",
            "z-index": "1000",
            "display": "block",
            "position": "absolute",
            // "background": "url(/images/miscellaneous/background-pattern.jpg)",
            "background-color": "#3333ff",
            "width": "60vw",
            "right": "0%",
            "justify-content": "center",
            "flex-direction": "column",
            "align-items": "center",
            "visibility": "visible",
            "height": "auto",
        });
        $(".box").css({
            "transition": ".5s ease-out",
            "margin": "10%",
            "padding": "5%",
            "display": "block",
            "width": "90%",
            "height": "80%",
            "background-color": "#9999ff",
            "border": "1px solid black",
            "width": "auto"
        });
    });
    $("#cancel-upload-blog-button").on("click", () => {
        $(".blog-create-sidebar").css({
            "transition": ".5s ease-out",
            "width": "0%",
            "background-color": "#ffcccc",
        });
        $(".box").css({
            "transition": ".5s ease-out",
            "height": "50%",
            "width": "0%",
            "display": "flex",
            "border": "1px solid red"
        });
    });

    $("#upload-blog-button").on("click", () => {
        // $("#blog_form").submit((e) => {

        var form = $("#blog_form")[0];
        var data = new FormData(form);
        var publish = $("#publish_blog option:selected" ).text();
        data.append("type","upload_blog");
        data.append("isPublished",publish);
        $.ajax({
            type: 'POST',
            url: 'blog/ajax',
            data: data,
            enctype: 'multipart/form-data',
            processData: false,  // Important!
            contentType: false,
            cache: false,

            success: function (response) {
                var obj = JSON.parse(JSON.stringify(response));
                if (obj.status==true) {
                    alert(obj.msg);
                    window.location.reload();
                } else {
                    alert(obj.msg);
                }
            }
        });
    });

});
