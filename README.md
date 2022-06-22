# web-sql-projesi
## url: http://benimhavaalanim.epizy.com/
## PROJE TANIMI
İki adet tablodan oluşan havalimanı veritabanına erişebilmek için öncelikle kayıt panelinden kayıt oluşturup ardından sisteme giriş yapmanız gerekir.
(Her ne kadar herkes bu veritabanına erişebilecek gibi görünüyor olsa da sistem aslında profesyonel bir şekilde yönetilirse havaalanı yetkililerine verilen özel şifreler ile girişi kabul edecektir.Ben sadece alelade bir şekilde php ve mySQL mantığını oturtmak adına kolay erişilebilecek bir sistem geliştirdim.Gizlilik açısından bir güvenilirliği yoktur şu durumda.İsteyen herkes dilediği işlemleri sadece sisteme kayıt oluşturarak ve giriş yaparak gerçekleştirebilir. )
## VERİTABANI İLE İLGİLİ
Havalimanı veritabanımızda iki adet tablo bulunmaktadır. ->authorities ->passenger tabloları. 'authorities' tablosunda veritabanından sorumlu havalimanı yetkililerin kullanıcı adları, şifreleri ve son olarak id'leri bulunmaktadır. 'passenger' tablosunda ise daha fazla öznitelik bulunmaktadır.Bu tabloda yolcu ismi, yolcu soyismi, bilet numarası, cinsiyeti, telefon numarası ve son olarak adresi gibi alanlar bulunmaktadır.
## NASIL ÇALIŞTIRIRIM?
Yukarıdaki linke tıklayınız.Karşınıza çıkacak giriş panelinde önceden bir kaydınız yoksa 'KAYIT OL'a tıklayınız.Burada istenen bilgileri eksiksiz ve doğru yazdığınızdan emin olunuz aksi takdirde bir yetkili kaydınız oluşmayacaktır. Sisteme kayıt yaptığınızda verileriniz 'authorities' tablosuna gönderilecektir. Daha sonra sizi giriş paneline yönlendirecektir.Buradan kayıtlı bilgilerinizi giriniz ve tebrikler veritabanına ulaştınız. Bundan sonra veritabanında yolcularla ilgili kayıt ekleme, kayıt silme, kayıt güncelleme ve kayıt listeleme işlemlerinizi gerçekleştirebilirsiniz.Burada yapılan işlemler sonucu veriler 'passenger' tablosuna gönderilecektir.
## .SQL DOSYASI İLE İLGİLİ
Yüklemiş olduğum .sql uzantılı dosya veritabanın şimdilik en sonki halidir.Tasarladığım veritabanın koda dökülmüş halidir.İçerisinde 'authorities ve passenger' tablolarına INSERT edilen veriler bulunmaktadır.Bu veriler sistemden gelmiştir, Web uygulamamı denerken ve geliştirirken kayıt edilmiş yetkili ve yolculara aittir.

