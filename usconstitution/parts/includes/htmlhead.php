<meta charset="utf-8" />
<meta name=viewport content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
<link rel="stylesheet" href="css/constitution.css" />

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        console.log("Ready!");
        var mybodyid = $('body').attr('id');
        var mynavid = '#nav' + mybodyid;
        console.log("mybodyid is " + mybodyid);
        console.log("mynavid is " + mynavid);
        $(mynavid).attr('id','iamhere');
    });
</script>