(function($){
    $(function(){

            $('.ajax-form', document).submit(function(){

                var data = $(this).serializeArray();

                axios.post(this.action, data)
                    .then( res => {
                        console.log(res.data);
                    })
                    .catch( err => {
                        console.log(err.response);
                    });
            });
    });
})(jQuery);
