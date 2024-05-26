export function profileDropdown() {
    $("#profile-dropdown-toggle").on("click", function (){
        
        if ($(this).attr("dropdown-opened") == "false"){
            //open dropdown
            $("#profile-dropdown").removeClass("hidden");
            $(this).attr("dropdown-opened", "true")
        } else{
            //close dropdown
            $("#profile-dropdown").addClass("hidden");
            $(this).attr("dropdown-opened", "false")
        }
    });

    //click anywhere on the page to close profile dropdown
    $(document).on("click", function (event){
        if (
            ! $(event.target).closest("#profile-dropdown").length &&
            ! $(event.target).closest("#profile-dropdown-toggle").length)
            {
                $("#profile-dropdown").addClass("hidden");
                $("#profile-dropdown-toggle").attr("dropdown-opened", "false");
            }
    });
}