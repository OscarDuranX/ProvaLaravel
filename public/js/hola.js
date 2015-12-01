/**
 * Created by oscar on 20/10/15.
 */

function hello() {
    console.info("hello mon!");
}

function bye(){
    console.info("bye");
}
$(function(){
    $('#sayhello ').click( function(){
            console.debug("prova");
            alert("Holas!");
        $('#helloworld').show();
    });

    //$('#helloworld').show

});
