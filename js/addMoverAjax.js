//noinspection JSUnresolvedFunction
/**
 * Created by rajan on 6/3/2016.
 * Ajax POST request to Add new Mover
 */
$(document).ready(function(){

    $("#addMoverForm").on("submit",function(){

        event.preventDefault()
               
        $.ajax({
            type:"POST",
            url: "addMover.php",//$("#addMoverForm").attr("action"),
            data: $("#addMoverForm").serialize(),
			success: function(result){
				$("#result").html(result);
                //alert("succsfull");
            }
        });

	});
});
