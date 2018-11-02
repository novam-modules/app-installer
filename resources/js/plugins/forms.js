(function($){
    $(function(){

            $('.ajax-form', document).submit(function(e){
                e.preventDefault();

                let self = this, postData = {}, formData = $(this).serializeArray();
                formData.forEach( input => postData[input.name] = input.value );

                axios.post(this.action, postData)
                    .then( res => {
                        $(window).html(result);
                    })
                    .catch( err => {
                        console.log(err);
                        let data = err.response.data;
                        let message = data.message;

                        _.forOwn(data.errors, (value, name) => {

                            let input = $(self).find('[name="'+name+'"]');
                            let error = _.isArray(value)? value.join('<br />'): value;
                            input.removeClass('is-valid').addClass('is-invalid');
                            if(input.parent().find('.invalid-feedback').length == 0){
                                input.parent().append('<div class="invalid-feedback"/>');
                            }
                            input.parent().find('.invalid-feedback').last().html(error).show();

                        });
                    });
            });
    });
})(jQuery);
