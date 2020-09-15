$(document).ready(function(){

    $.getJSON("/api", function(data) {
        var main = document.createElement("div");
        main.className='main';

        var done = document.createElement("div");
        done.className='done';
        main.appendChild(done);

        $.each(data.done, function(i, field){
            var li = document.createElement('li');
            var title = document.createElement("span");

            var ul = document.createElement("ul");


            title.append(field.pipeline_ORG);
            li.className='class';
            li.appendChild(title);
            ul.appendChild(li);
            done.appendChild(ul);

        });

        window.document.body.appendChild(main);
    });



});
