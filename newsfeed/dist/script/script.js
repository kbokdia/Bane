var pageNewsFeed = {
    openCommentModal : function(){
        $('#commentModal').openModal();
    },
    showHideComment : function(id){
        $(id).closest(".card").find(".comment").toggle();
    }
};

$(document).ready(function(){
    $(".dropdown-button").dropdown();
});