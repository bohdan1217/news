function hbm_delete_element($item){
    $.ajax({
        url:'news/delete/' + $item,
        type: 'POST',
        async : true,
        data: {
            item:$item
        },
        success: function(data){
            $("#news_" + $item).remove();
        }
    });
}

$(".news-note .delete").click(function(e) {
    var item = $(this).data('item');
    hbm_delete_element(item);
    e.preventDefault();
});


$(".btn_add").on("click", function(){
    var th = $(this),
        text = $("textarea#text_area").val();

        textfild = $(".text-a");
        textfild.find('input[name="text"]').val(text);
});

if($('.add-book-form').length>0){
    $('.add-book-form').validate({
        errorClass:'error-input',
        validClass:'success-input',
        highlight: function (element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
        },
        rules: {
            name: {
                required: true
            },
            author: {
                required: true
            },
            text: {
                required: true
            }
        },
        submitHandler:function(form){
            var form_node = $(form)
            $.ajax({
                url: form_node.attr('action'),
                type: form_node.attr('method'),
                async : true,
                data: new FormData(form),
                processData: false,
                contentType: false,
                success: function(){
                    form_node.html('');
                    form_node.trigger('reset');
                    window.location.href = "/";
                }
            });
            return false;
        }
    });
}


if($('.edit-book-form').length>0){
    $('.edit-book-form').validate({
        errorClass:'error-input',
        validClass:'success-input',
        highlight: function (element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
        },
        rules: {
            name: {
                required: true
            },
            author: {
                required: true
            },
            text: {
                required: true
            }
        },
        submitHandler:function(form){
            var form_node = $(form)
            $.ajax({
                url: form_node.attr('action'),
                type: form_node.attr('method'),
                async : true,
                data: new FormData(form),
                processData: false,
                contentType: false,
                success: function(){
                    form_node.html('');
                    form_node.trigger('reset');
                    window.location.href = "/";
                }
            });
            return false;
        }
    });
}