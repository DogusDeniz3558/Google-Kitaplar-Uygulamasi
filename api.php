<head><meta charset="utf-8"></head>
<?php
function truncate($text, $chars = 50) {
    if (strlen($text) <= $chars) {
        return $text;
    }
    $text = substr($text, 0, $chars) . "...";
    return $text;
}

@$bookName = htmlspecialchars(trim($_POST['bookName']), ENT_QUOTES, 'UTF-8');
if (empty($bookName)) {
    echo "<div class='alert alert-danger' role='alert'>Lütfen Bir Kitap Adı Giriniz!</div>";
    exit();
}

if ($bookName) {
    $apiKey = "Your_Api_Key";
    $apiUrl = "https://www.googleapis.com/books/v1/volumes?q=" . urlencode($bookName) . "&key=" . $apiKey;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    $response = curl_exec($ch);
    curl_close($ch);
    
    $data = json_decode($response, true);

    if (isset($data['items']) && count($data['items']) > 0) {
        foreach ($data['items'] as $item) {
            $title = $item['volumeInfo']['title'] ?? 'Başlık Yok';
            $thumbnail = $item['volumeInfo']['imageLinks']['thumbnail'] ?? 'https://via.placeholder.com/128x200?text=No+Image';
            $description = truncate($item['volumeInfo']['description'] ?? 'Açıklama Yok');
            $fullDescription = $item['volumeInfo']['description'] ?? 'Açıklama Yok';
            $price = isset($item['saleInfo']['retailPrice']) ? $item['saleInfo']['retailPrice']['amount'] . ' ' . $item['saleInfo']['retailPrice']['currencyCode'] : 'Fiyat Bilgisi Yok';

            // Google Books API'sinde daha yüksek çözünürlüklü resim elde etme
            $thumbnail = str_replace('&zoom=1', '&zoom=2', $thumbnail);

            $escapedTitle = addslashes($title);
            $escapedDescription = addslashes($fullDescription);
            $escapedThumbnail = addslashes($thumbnail);

            echo "
            <div class='col-md-4 mb-3'>
                <div class='card h-100 d-flex flex-column'>
                    <img src='" . str_replace('http:', 'https:', $thumbnail) . "' class='card-img-top' alt='$title'>
                    <div class='card-body d-flex flex-column'>
                        <h5 class='card-title'>$title</h5>
                        <p class='card-text flex-grow-1'>$description</p>
                        <p class='card-text'><strong>Fiyat: </strong>$price</p>
                        <button class='btn btn-primary mt-auto' onclick=\"showPreview('$escapedTitle', '$escapedDescription', '$escapedThumbnail')\">Önizleme</button>
                    </div>
                </div>
            </div>";
        }
    } else {
        echo "<div class='alert alert-warning' role='alert'>Kitap bulunamadı.</div>";
    }
}
?>
