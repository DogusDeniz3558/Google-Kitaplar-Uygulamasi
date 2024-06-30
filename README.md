# Google Kitaplar Uygulaması

Bu proje, Google Kitaplar API'sini kullanarak basit bir kitap arama ve listeleme uygulaması geliştirmek için temel bir şablondur. Bu uygulama, kullanıcıların kitapları arayabileceği, kitap detaylarını görüntüleyebileceği ve favori kitaplarını listeleyebileceği bir arayüz sunmaktadır.

## Başlarken

Bu adımlar, projeyi yerel bir makinede çalıştırmanızı sağlayacaktır.

## Gereksinimler

Bu projenin çalışması için aşağıdaki yazılımların sisteminizde yüklü olması gerekmektedir:
- Bir metin düzenleyici (Notepad++, Sublime Text, VS Code, vb.)
- Bir web tarayıcısı (Google Chrome, Mozilla Firefox, vb.)
- Bir web sunucusu (XAMPP, WAMP, vb.)
- Google API Key

## Kurulum

1. Bu projeyi yerel bir klasöre klonlayın ya da zip olarak indirin:
    ```bash
    git clone https://github.com/DogusDeniz3558/Google-Kitaplar-Uygulamasi.git
    ```

2. Web sunucusu yazılımınızı kullanarak, projeyi sunucunuzun kök dizinine yerleştirin.

3. Google API Key'inizi `config.js` dosyasına ekleyin:
    ```javascript
    const apiKey = 'YOUR_GOOGLE_API_KEY';
    ```

4. Web tarayıcınızda aşağıdaki URL'yi açın:
    ```url
    localhost/Google-Kitaplar-Uygulamasi/
    ```

5. Artık kitap arama ve listeleme uygulamasını kullanmaya başlayabilirsiniz.

## Kullanım

Google Kitaplar Uygulaması, ana sayfada bir arama çubuğu, kitap listesi ve favori kitaplarınızı görüntüleyebileceğiniz basit bir arayüz sunar. Kullanıcılar kitap ismini girip "Ara" düğmesine tıklayarak kitap arayabilirler. Arama sonuçları listelenir ve kullanıcılar kitap detaylarını görüntüleyebilir veya favorilerine ekleyebilirler.

## Katkıda Bulunma

Bu projeye katkıda bulunmak isterseniz, aşağıdaki adımları takip edebilirsiniz:
1. Bu projeyi fork edin.
2. Kendi yerel makinenizde fork edilen projeyi klonlayın.
3. Değişikliklerinizi yapın ve commit'leyin.
4. Yeni bir branch oluşturun:
    ```bash
    git branch yeni-ozellik
    ```
5. Branch'inize geçin:
    ```bash
    git checkout yeni-ozellik
    ```
6. Değişikliklerinizi push edin:
    ```bash
    git push origin yeni-ozellik
    ```
7. Pull isteği (Pull Request) gönderin.

## Lisans

Bu proje MIT Lisansı altında lisanslanmıştır. Daha fazla bilgi için LICENSE dosyasını inceleyebilirsiniz.

Teşekkürler
