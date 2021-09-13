<html>
    <body>
    <script>
    function myFunction() {
        var x;
        var r = confirm("Are You Sure?");
        if (r == true) {
            x = "You pressed OK!";
    }
        else {
            x = "You pressed Cancel!";
    }
        document.getElementById("demo").innerHTML = x;
}
</script>
        <?php
            
            echo "<a onclick='myFunction()' href='comment-delete?id=1' class='red-text'>Delete</a>";
        ?>