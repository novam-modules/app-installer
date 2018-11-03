(function($){
    $(function(){

            $('.form-validate', document).submit(function(e){
                e.preventDefault();

                let self = this;
                let data = $(this).serialize();
                let action = $(this).find('[type="submit"]');
                let actionTxt = action.html();

                action.html('<i class="fa fa-spin fa-spinner"></i> Sending...');

                axios.post(self.action, data)
                    .then( res => {
                        let respURL = res.request.responseURL;
                        let currURL = window.location.href;

                        if(respURL != currURL){
                            window.location.href =  respURL;
                        }
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
                        setTimeout(() => {
                            action.html(actionTxt);
                        }, 1000);
                    });
            });
    });
})(jQuery);
