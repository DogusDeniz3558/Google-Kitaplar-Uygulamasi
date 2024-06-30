<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kitap Arama Uygulaması</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <style>
      .card-img-top {
        height: 200px;
        object-fit: cover;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand link-light" href="#">Kitap Bilgi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="mb-3">
            <label for="validationDefault01" class="form-label">Kitap Adı:</label>
            <input type="text" class="form-control" placeholder="Kitap Adı" value="Sherlock Holmes" id="Kitap" required>
          </div>
          <div class="d-grid">
            <button class="btn btn-success" type="submit" id="ara">Arama Yap</button>
          </div>
          <div id="result" class="row mt-5"></div>
        </div>
      </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="bookModalLabel">Kitap Detayı</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="modalContent">
            <!-- Modal içeriği buraya gelecek -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      $('#ara').on('click', function() {
        let bookName = $('#Kitap').val();
        $.ajax({
          url: "api.php",
          type: "post",
          data: { "bookName": bookName },
          success: function(response) {
            $('#result').html(response);
          }
        });
      });

      function showPreview(title, description, thumbnail) {
        let content = `
          <h5>${title}</h5>
          <img src="${thumbnail}" class="img-fluid mb-3" alt="${title}">
          <p>${description}</p>
        `;
        $('#modalContent').html(content);
        $('#bookModal').modal('show');
      }
    </script>
  </body>
</html>
