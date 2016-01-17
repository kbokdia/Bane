var pageMembers = {
    maritalStatusValue : 0,
    validation : function(){
          if($(this).val() == "" && $(this).prop("required")){
              $(this).closest(".input-field").find(".error").html("Required");
          }
        else{
              $(this).closest(".input-field").find(".error").html("");
          }
    },
    openPasswordModal : function(){
        $("#passwordModal").openModal();
    },
    openAddModal : function(){
        //$("#memberModalForm")[0].reset();
        var i = 1;
        for(i = 1 ; i < 7 ; i++){
            $("#div-" + i).find("input").each(function(){
                $(this).closest(".input-field").removeClass("valid").removeClass("invalid").find(".error").html("");
            });
            $("#div-" + i).find("select").each(function(){
                $(this).val("0");
            });
            if(i === 1){
                $("#div-" + i).addClass("display-block").removeClass("display-none");
            } else{
                $("#div-" + i).addClass("display-none").removeClass("display-block");
            }
        }
        $("#memberDetailsModal").openModal();

        //Reset the footer buttons
        $("#prevBtn").removeClass("display-block").addClass("display-none");
        $("#nextBtn").removeClass("display-none").addClass("display-block");
        $("#submitBtn").removeClass("display-block").addClass("display-none");
    },
    openEditModal : function(){
        $("#memberDetailsModal").openModal();
        $("#div-1").addClass("display-block").removeClass("display-none");
        for(var i = 2 ; i < 7 ; i++)
        {
            $("#div-" + i).addClass("display-none").removeClass("display-block");
        }
        //Reset the footer buttons
        $("#prevBtn").removeClass("display-block").addClass("display-none");
        $("#nextBtn").removeClass("display-none").addClass("display-block");
        $("#submitBtn").removeClass("display-block").addClass("display-none");
    },
    maritalStatus : function(elem){

        //If Single Clear Data in the Spouse & Kids Div
        if(parseInt($(elem).val()) === 1)
        {
            $("#div-2").find("input").each(function () {
                $(this).val("").removeClass("valid").removeClass("invalid");
            });
            $("#div-3").find("input").each(function () {
                $(this).val("").removeClass("valid").removeClass("invalid");
            });
        }

        //If Engaged Clear Data in Kids Div
        if(parseInt($(elem).val()) == 3)
        {
            $("#div-3").find("input").each(function () {
                $(this).val("").removeClass("valid").removeClass("invalid");
            });
        }

        pageMembers.maritalStatusValue = $(elem).val();
        $("#memberMaritalStatus").closest(".input-field").find(".error").html("");

    },
    next : function () {
        var i = 0,
            isValid = true,
            relationshipStatus = parseInt(pageMembers.maritalStatusValue);

        for(i = 1 ; i < 7 ; i++)
        {
            if ($("#div-" + i).hasClass("display-block"))
            {
                //Check if Member Name is Added
                if($("#memberName").val() == ""){
                    $("#memberName").closest(".input-field").find(".error").html("Required");
                }

                //Check if Marital Status is not selected
                if(relationshipStatus === 0){
                    console.log("Marital Status not selected");
                    $("#memberMaritalStatus").closest(".input-field").find(".error").html("Required");
                }

                //If Marital Status is selected as Single
                if(relationshipStatus === 1)
                {
                    console.log("In 1");
                    if($("#div-1").hasClass("display-block")){
                        $("#div-" + i).addClass("display-none").removeClass("display-block");
                        $("#div-" + (i + 3)).addClass("display-block").removeClass("display-none");
                    }
                    else{
                        $("#div-" + i).addClass("display-none").removeClass("display-block");
                        $("#div-" + (i + 1)).addClass("display-block").removeClass("display-none");
                    }
                }

                //If Marital Status is selected as Married
                if(relationshipStatus === 2)
                {
                    console.log("In 2");
                    $("#div-" + i).addClass("display-none").removeClass("display-block");
                    $("#div-" + (i + 1)).addClass("display-block").removeClass("display-none");
                }

                //If Marital Status is selected as Engaged
                if(relationshipStatus === 3)
                {
                    console.log("In 3");
                    if($("#div-2").hasClass("display-block")){
                        $("#div-" + i).addClass("display-none").removeClass("display-block");
                        $("#div-" + (i + 2)).addClass("display-block").removeClass("display-none");
                    }
                    else{
                        $("#div-" + i).addClass("display-none").removeClass("display-block");
                        $("#div-" + (i + 1)).addClass("display-block").removeClass("display-none");
                    }
                }
                break;
            }
        }
        if($("#div-1").hasClass("display-block")){
            $("#prevBtn").addClass("display-none").removeClass("display-block");
        } else{
            $("#prevBtn").removeClass("display-none").addClass("display-block");
        }
        if($("#div-6").hasClass("display-block")){
            $("#nextBtn").addClass("display-none").removeClass("display-block");
            $("#submitBtn").addClass("display-block").removeClass("display-none");
        } else{
            $("#nextBtn").removeClass("display-none").addClass("display-block");
            $("#submitBtn").removeClass("display-block").addClass("display-none");
        }

    },
    previous : function(){
        var i = 0,
            isValid = true,
            relationshipStatus = parseInt(pageMembers.maritalStatusValue);

        for(i = 1 ; i < 7 ; i++)
        {
            if ($("#div-" + i).hasClass("display-block"))
            {
                //Check if Marital Status is not selected
                if(relationshipStatus === 0){
                    console.log("Marital Status not selected");
                    $("#memberMaritalStatus").closest(".input-field").find(".error").html("Required");
                }

                //If Marital Status is selected as Single
                if(relationshipStatus === 1)
                {
                    console.log("In 1");
                    if($("#div-4").hasClass("display-block")){
                        $("#div-" + i).addClass("display-none").removeClass("display-block");
                        $("#div-" + (i - 3)).addClass("display-block").removeClass("display-none");
                    }
                    else{
                        $("#div-" + i).addClass("display-none").removeClass("display-block");
                        $("#div-" + (i - 1)).addClass("display-block").removeClass("display-none");
                    }
                }

                //If Marital Status is selected as Married
                if(relationshipStatus === 2)
                {
                    console.log("In 2");
                    $("#div-" + i).addClass("display-none").removeClass("display-block");
                    $("#div-" + (i - 1)).addClass("display-block").removeClass("display-none");
                }

                //If Marital Status is selected as Engaged
                if(relationshipStatus === 3)
                {
                    console.log("In 3");
                    if($("#div-4").hasClass("display-block")){
                        $("#div-" + i).addClass("display-none").removeClass("display-block");
                        $("#div-" + (i - 2)).addClass("display-block").removeClass("display-none");
                    }
                    else{
                        $("#div-" + i).addClass("display-none").removeClass("display-block");
                        $("#div-" + (i - 1)).addClass("display-block").removeClass("display-none");
                    }
                }
                break;
            }
        }

        //Remove the Previous Button in 1st Block & Add in Other blocks
        if($("#div-1").hasClass("display-block")){
            $("#prevBtn").addClass("display-none").removeClass("display-block");
        } else{
            $("#prevBtn").removeClass("display-none").addClass("display-block");
        }

        //Remove the Next Button in Last Block & Add in Other blocks
        if($("#div-6").hasClass("display-block")){
            $("#nextBtn").addClass("display-none").removeClass("display-block");
            $("#submitBtn").addClass("display-block").removeClass("display-none");
        } else{
            $("#nextBtn").removeClass("display-none").addClass("display-block");
            $("#submitBtn").removeClass("display-block").addClass("display-none");
        }
    }
};

$(document).ready(function(){
    $('.datepicker').pickadate({
        min: new Date(1950,1,1),
        max: new Date(),
        selectMonths: true,
        selectYears: 100,
        closeOnSelect: true,
        closeOnClear: false
    });

    $('select').material_select();
});