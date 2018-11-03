(function($){
    $(function(){

            $('.form-validate', document).submit(function(e){
                e.preventDefault();

                let self = this;
                let data = $(this).serialize();
                let action = $(this).find('[type="submit"]');
                let actionTxt = action.val();

                action.val('<i class="fa fa-spin fa-spinner"></i> Sending...');

                axios.post(self.action, data)
                    .then( res => {
                        window.location.reload();
                    })
                    .catch( err => {
                        let errors = err.response.data.errors;
                        _.forOwn(errors, function(error, name) {
                            error = _.isArray(error) ? error.join('<br/>'): error;

                            let input = $(self).find('[name="'+name+'"]');
                            let feedback = input.parent().find('.invalid-feedback');

                            if (feedback.length === 0){
                                input.parent().append('<div class="invalid-feedback" />');
                            }

                            input.removeClass('is-valid').addClass('is-invalid');
                            input.parent().find('.invalid-feedback').show().html(error);
                        });
                    })
                    .then( data => {
                        console.log(data);
                        setTimeout(() => {
                            action.val(actionTxt);
                        }, 3000);
                    });
            });
    });
})(jQuery);
