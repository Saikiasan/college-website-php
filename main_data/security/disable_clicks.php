<!-- disable developer script -->
<!-- <script async>
    // preventing right click in the browser 
    $(document).ready(function(){
        // preventing right click
        $(document).bind("contextmenu",function(e){
                return false;
            });

        // preventing f12 key to open the developer tools
        document.onkeydown = function(e) {
            if(event.keyCode == 123) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
                return false;
            }
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
                return false;
            }
        }

        // preventing ctrl + s to save the page
        $(document).keydown(function (e) {
            if (e.ctrlKey && e.keyCode == 83) {
                return false;
            }
        });

        // preventing ctrl + u to view the page source
        $(document).keydown(function (e) {
            if (e.ctrlKey && e.keyCode == 85) {
                return false;
            }
        });

        // preventing ctrl + c to copy the page
        $(document).keydown(function (e) {
            if (e.ctrlKey && e.keyCode == 67) {
                return false;
            }
        });

        // preventing ctrl + v to paste the page
        $(document).keydown(function (e) {
            if (e.ctrlKey && e.keyCode == 86) {
                return false;
            }
        });

        // preventing ctrl + x to cut the page
        $(document).keydown(function (e) {
            if (e.ctrlKey && e.keyCode == 88) {
                return false;
            }
        });

        // preventing ctrl + a to select all the page
        $(document).keydown(function (e) {
            if (e.ctrlKey && e.keyCode == 65) {
                return false;
            }
        });

        // preventing f5
        $(document).keydown(function (e) {
            if (e.keyCode == 116) {
                return false;
            }
        });

        // preventing ctrl + p
        $(document).keydown(function (e) {
            if (e.ctrlKey && e.keyCode == 80) {
                return false;
            }
        });
    });
</script> -->