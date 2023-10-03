<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veritabanı Tablosu</title>
    <!-- DataTables CSS ve JavaScript Kütüphaneleri -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="padding-top: 3%;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0 text-dark">Planlanan Eğitim Bilgileri</h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
        <div class="row">
                <div class="col-md-12">
                    <a href="#"></a>
                </div>
                <div class="col-md-12"><br></div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                       <div ><a href=""  ><img src="stbpdf.jpg" alt="" style="width: 100%;"></a>
                       </div>
                        <thead>
                        
                            <tr>
                                <th style="text-align: center;" colspan="2"></th>
                                <th style="text-align: center;" colspan="4">Yapılması Planlanan Eğitim Programının</th>
                                <th style="text-align: center;" colspan="3">Eğitime Katılması Öngörülen Personelin</th>
                            </tr>
                            <tr>
                                <th>Sıra</th>
                                <th>Eğitimi Uygulayacak Birim</th>
                                <th>Konusu</th>
                                <th>Tarihi (AY/HAFTA)</th>
                                <th>Süresi (GÜN/SAAT)</th>
                                <th>Uygulama Şekli</th>
                                <th>Unvanı</th>
                                <th>Sayısı</th>
                                <th>Birimi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                                <td>Konu 1</td>
                                <td>Şubat 3.Hafta</td>
                                <td>1 Gün</td>
                                <td>Yüzyüze</td>
                                <td>Tüm Unvanlar</td>
                                <td>180</td>
                                <td>Merkez Teşkilatı</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Milli Teknoloji Genel Müdürlüğü</td>
                                <td>Konu 2</td>
                                <td>Mart 1.Hafta</td>
                                <td>4 Saat</td>
                                <td>Çevrimİçi Platformlar</td>
                                <td>Mühendis/Şube Müdürü/ Diğer Personel</td>
                                <td>60</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Milli Teknoloji Genel Müdürlüğü</td>
                                <td>Konu 3</td>
                                <td>Ocak 2.Hafta</td>
                                <td>2 Gün</td>
                                <td>Yüzyüze</td>
                                <td>Personel Unvanı</td>
                                <td>40</td>
                                <td>İl Müdürlükleri</td>
                            </tr>
                            <!-- Diğer örnek eğitim verileri -->
                            <!-- 4. örnek -->
                            <tr>
                                <td>4</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                                <td>Konu 4</td>
                                <td>Mayıs 2.Hafta</td>
                                <td>3 Gün</td>
                                <td>Yüzyüze</td>
                                <td>Personel Unvanı</td>
                                <td>25</td>
                                <td>Merkez Teşkilatı</td>
                            </tr>
                            <!-- 5. örnek -->
                            <tr>
                                <td>5</td>
                                <td>Milli Teknoloji Genel Müdürlüğü</td>
                                <td>Konu 5</td>
                                <td>Ağustos 3.Hafta</td>
                                <td>1 Gün</td>
                                <td>Çevrimİçi Platformlar</td>
                                <td>Diğer Personel</td>
                                <td>75</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                            </tr>
                            <!-- 6. örnek -->
                            <tr>
                                <td>6</td>
                                <td>Milli Teknoloji Genel Müdürlüğü</td>
                                <td>Konu 6</td>
                                <td>Eylül 1.Hafta</td>
                                <td>2 Gün</td>
                                <td>Yüzyüze</td>
                                <td>Mühendis/Personel</td>
                                <td>50</td>
                                <td>İl Müdürlükleri</td>
                            </tr>
                            <!-- 7. örnek -->
                            <tr>
                                <td>7</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                                <td>Konu 7</td>
                                <td>Ekim 2.Hafta</td>
                                <td>1 Gün</td>
                                <td>Çevrimİçi Platformlar</td>
                                <td>Diğer Personel</td>
                                <td>90</td>
                                <td>Merkez Teşkilatı</td>
                            </tr>
                            <!-- 8. örnek -->
                            <tr>
                                <td>8</td>
                                <td>Milli Teknoloji Genel Müdürlüğü</td>
                                <td>Konu 8</td>
                                <td>Kasım 1.Hafta</td>
                                <td>3 Gün</td>
                                <td>Yüzyüze</td>
                                <td>Personel Unvanı</td>
                                <td>120</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                            </tr>
                            <!-- 9. örnek -->
                            <tr>
                                <td>9</td>
                                <td>Milli Teknoloji Genel Müdürlüğü</td>
                                <td>Konu 9</td>
                                <td>Şubat 2.Hafta</td>
                                <td>1 Gün</td>
                                <td>Yüzyüze</td>
                                <td>Mühendis/Personel</td>
                                <td>60</td>
                                <td>İl Müdürlükleri</td>
                            </tr>
                            <!-- 10. örnek -->
                            <tr>
                                <td>10</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                                <td>Konu 10</td>
                                <td>Temmuz 3.Hafta</td>
                                <td>2 Gün</td>
                                <td>Çevrimİçi Platformlar</td>
                                <td>Diğer Personel</td>
                                <td>100</td>
                                <td>İl Müdürlükleri</td>
                            </tr>
                            <!-- 11. örnek -->
                            <tr>
                                <td>11</td>
                                <td>Milli Teknoloji Genel Müdürlüğü</td>
                                <td>Konu 11</td>
                                <td>Aralık 1.Hafta</td>
                                <td>3 Gün</td>
                                <td>Yüzyüze</td>
                                
                                <td>Mühendis/Personel</td>
                                <td>80</td>
                                <td>Sanayi Genel Müdürlüğü</td>
                            </tr>
                        </tbody>


                    </table>
                </div>
                <!-- /.card-body -->
            </div>


            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>