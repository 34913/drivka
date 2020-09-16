
<html>
    <head>
        <title>Dřívka</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

    </head>

    <body>
        <center>
            <div style="width: 400px; height: auto">
                <span id="jmenoTrida"></span>
                <br />
                <span id="prepisTrida"></span>
                <br />
                <br />
                <button class="vynulovat" type="button" style="float:right; margin-left: 25px">Resetovat</button>
                <button class="obejitLos" type="button" style="float:right; margin-left: 25px">Obejít losování</button>
                <button class="losovani" type="button" style="float:right; margin-left: 25px">Losovat</button>
                <br />
                <br />
                <p id="vylosovaneJmeno"></p>


            </div>
        </center>

    </body>

</html>

<script>
    $(document).ready(function () {
        var trida = 1;

        function TiskTrida() {
            $.ajax({
                url: "TiskTrida.php",
                method: "POST",
                data: { trida: trida},
                dataType: "text",
                success: function (data) {
                    $("#jmenoTrida").html(data);
                }
            });
        };
        function VybratTrida() {
            $.ajax({
                url: "VybratTridu.php",
                method: "POST",
                data: { trida: trida},
                dataType: "text",
                success: function (data) {
                    $('#prepisTrida').html(data);
                }
            });
        }

        TiskTrida();
        VybratTrida();

        $(document).on('click', '.btnTrida', function () {
            var selector = document.getElementById('tridaName');
            trida = selector[selector.selectedIndex].value;

            TiskTrida();
        });

        $(document).on('click', '.losovani', function () {
            $.ajax({
                url: "losovani.php",
                method: "POST",
                data: { hodnota: 0, trida: trida },
                dataType: "text",
                success: function (data) {
                    if (data == 0)
                        $('#vylosovaneJmeno').html("Všichni byli vyvoláni");
                    else
                        $('#vylosovaneJmeno').html(data);
                }
            });
        });

        $(document).on('click', '.vynulovat', function () {
            if (confirm("Potvrďte vynulování vyvolaných žáků")) {
                $.ajax({
                    url: "vynulovani.php",
                    method: "POST",
                    data: { trida: trida },
                    dataType: "text",
                    success: function (data) {
                        $('#vylosovaneJmeno').html(data);
                    }
                });
            }
        });

        $(document).on('click', '.obejitLos', function () {
            $.ajax({
                url: "losovani.php",
                method: "POST",
                data: { hodnota: 1, trida: trida },
                dataType: "text",
                success: function (data) {
                    if (data == 0)
                        $('#vylosovaneJmeno').html("Všichni byli vyvoláni");
                    else
                        $('#vylosovaneJmeno').html(data);
                }
            });
        });

    });
</script>