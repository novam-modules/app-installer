(function($){
    $(function(){

            $('.ajax-form', document).submit(function(e){
                e.preventDefault();

                let post = {}, form = $(this);
                var data = form.serializeArray();
                data.forEach( inp => post[inp.name] = inp.value);

                axios.post(this.action, post)
                    .then( res => {
                        window.reload();
                    })
                    .catch( err => {
                        let errors = err.response.data.errors;
                        _.forOwn(errors, function (value, key) {
                            let input = form.find('[name="'+name+'"]');
                            input.addClass('is-invalid');
                            input.next('.invalid-feedback').text(value.join('<br/>'));
                            console.log(value, key);
                        });
                    });
            });
    });
})(jQuery);
