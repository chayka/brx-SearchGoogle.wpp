(function($, _){
    _.declare('brx.SearchGoogle.Dummy', $.brx.View, {
        
        nlsNamespace: 'brx.SearchGoogle.Dummy',
        
        options:{
            name: 'John Smith'
        },
        
        postCreate: function(){
            console.log('widget warm-up');
        },
        
        buttonHelloClicked: function(){
            var name = this.get('myInput').val() || this.get('name');
            $.brx.Modals.alert('Hello '+name+'!');
        }
    });
}(jQuery, _));


