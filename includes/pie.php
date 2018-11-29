<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
      
{
    "use strict";
    let start_page = 0;
    const scope = $("#aqui");
    this.load = function(start) {
        $.get("api/?get", { start: start }, function(response) {
            scope.append(response);
            start_page += 5;
        });
    };
    const win = $(window);
    win.scroll(() => {
        if ($(document).height() - win.height() == win.scrollTop()) {
            this.load(start_page);
        }
    });
    this.load();
}

</script>

<script type="text/javascript">
  $(function(){
    $(".heading-compose").click(function() {
      $(".side-two").css({
        "left": "0"
      });
    });

    $(".newMessage-back").click(function() {
      $(".side-two").css({
        "left": "-100%"
      });
    });
})
</script>