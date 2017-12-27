/**
 * Created by Dread Pirate Roberts on 06-Aug-17.
 */
var base_url="http://169.254.249.20/kucsa";
// var base_url="http://localhost/kucsa";
$(
    function () {

        getData(base_url+"/v1/api/");

    }
);

function getData( url ) {
    $.get(url, function ( data, status ) {
        /*check if status =200

        if true display data
       */
        if (status === "success" && data !== "") {
            var members = JSON.parse(data); //parse to object
            var output = "", i = 1, holder;

            for (member in members) {
                holder = members[member];

                output += "<tr><td>" + i + "</td><td>" + holder.name +
                    "</td><td>" + holder.reg + "</td>" +
                    " <td>" + holder.year + "</td>" +
                    " <td>" +
                    " <button type='submit' class='btn btn-success btn-sm btn-report' " +
                    "id='" + holder.reg + "'>Report</button>" +
                    "</td></tr>";

                i++;
            }
            $(output).appendTo('#datalist');
            report(base_url+"/v1/api/report");

        }
        //if it was not successfull or no data
        else {
            $("<h3 class='text-center'> Sorry no data at current moment</h3>").appendTo('#datalist');
        }


    })
}

function report( post_url ) {
    $(".btn-report").click(function () {
        var user = $(this).attr('id');

        $.post(post_url,
            {"user": user},
            function ( data, status ) {

                if (status === "success" && data==="success") {
                    window.location.assign(base_url+"/success");
                } else {
                    window.location.assign(base_url+"/error");

                }
            });
    });


}