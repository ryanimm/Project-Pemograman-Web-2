<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jabary - Website Budaya Jabar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f8535c9b97.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Navbar  -->
    <?php include 'include/navbar.php'; ?>





    <div class="container">
        <div class="pt-5">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="allgaleri.php">Galeri</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tradisi</li>
                </ol>
            </nav>

            <div class="kategoricaption mb-5">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center fw-bold judulkategori">Tradisi</h1>
                        <hr class="mx-auto" style="width:10%; background-color: #f49f16;">

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5 class="text-center px-3 isicaptionkategori">Sebagai salah satu provinsi yang memiliki masyarakat terbanyak di Indonesia. Sudah pastinya Jawa Barat kaya akan sebuah tradisi atau kebiasaan adat yang merupakan warisan dari para nenek moyang pada zaman dahulu.</h5>
                    </div>
                </div>
            </div>



        </div>

        <div class="mb-3">
            <form class="d-flex">
                <input class="form-control" type="text" id="search" name="search" placeholder="Search" aria-label="Search">
            </form>
        </div>


        <section id="main">

            <div class="row row-cols-1 row-cols-md-3 g-4 mb-5" id="hasil">

            </div>
            
            <div class="mb-5 text-center">
                <input type="hidden" id="result_no" value="6">
                <button type="button" id="load" class="btn btn-success">Tampilkan Lainnya</button>
            </div>
    </div>
    </section>

    <!-- footer -->
    <?php include 'include/footer.php'; ?>





    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="js/tradisi.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        load_data();
        function load_data(search){
          $.ajax({
            url:"_php/searchGaleri.php",
            method:"POST",
            data: {
              search: search,
              reqz:'searchtrds'
            },
            success:function(data){
              $('#hasil').html(data);
            }
          });
        }
        $('#search').keyup(function(){
          var search = $("#search").val();
          load_data(search);
        });
      });
  </script>

<script type="text/javascript">
$(document).ready(function(){
 $("#load").click(function(){
  loadmore();
 });
});

function loadmore()
{
 var val = document.getElementById("result_no").value;
 $.ajax({
 type: 'post',
 url: '_php/loadMoreGaleri.php',
 data: {
  getresult:val,
  req:'loadmoretradisi'
 },
 success: function (response) {
  var content = document.getElementById("hasil");
  content.innerHTML = content.innerHTML+response;

  document.getElementById("result_no").value = Number(val)+6;
 }
 });
}
</script>

</body>

</html>