# web-sql-projesi
## url: http://benimhavaalanim.epizy.com/
## PROJE TANIMI
İki adet tablodan oluşan havalimanı veritabanına erişebilmek için öncelikle kayıt panelinden kayıt oluşturup ardından sisteme giriş yapmanız gerekir.
(Her ne kadar herkes bu veritabanına erişebilecek gibi görünüyor olsa da sistem aslında profesyonel bir şekilde yönetilirse havaalanı yetkililerine verilen özel şifreler ile girişi kabul edecektir.Ben sadece alelade bir şekilde php ve mySQL mantığını oturtmak adına kolay erişilebilecek bir sistem geliştirdim.Gizlilik açısından bir güvenilirliği yoktur şu durumda.İsteyen herkes dilediği işlemleri sadece sisteme kayıt oluşturarak ve giriş yaparak gerçekleştirebilir. )
## VERİTABANI İLE İLGİLİ
Havalimanı veritabanımızda iki adet tablo bulunmaktadır. ->authorities ->passenger
Sisteme kayıt yaptığınızda verileriniz 'authorities' tablosuna gönderilecektir.Kayıt oluşturduktan sonra sisteme giriş yapmalısınız.Bundan sonra veritabanında yolcularla ilgili kayıt ekleme, kayıt silme, kayıt güncelleme ve kayıt listeleme işlemlerinizi gerçekleştirebilirsiniz.Burada yapılan işlemler sonucu veriler 'passenger' tablosuna gönderilecektir.
