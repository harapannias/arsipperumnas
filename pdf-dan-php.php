<?php include "header.php"; ?>

<title>PDF? Pakai PHP saja!</title>


<h1>PDF? Pakai PHP saja!</h1>
<p><hr>
    Oleh: Ivan Irawan &lt;ivan@smg.linux.or.id&gt;
</p>
<p>
    Saya yakin jika Anda cukup bergaul dan <i>melek</i> internet, pasti pernah
    mendengar, membaca, juga barangkali membuat dokumen dalam bentuk format
    <b>PDF</b> (Portable Document Format). Ketika Anda membaca artikel ini secara
    <i>online</i>, saya semakin yakin bahwa tidak mungkin Anda tidak pernah
    mendengar mengenai PDF. Paling tidak Anda telah mendengar mengenai PDF judul
    dari judul artikel ini :)
</p>
<h2>Bisa beli PDF-nya, Pak?</h2>
<p>
    Format dokumen PDF pertama kali dikenalkan oleh Adobe System
    (<a href="http://www.adobe.com">http://www.adobe.com</a>), hasil dari
    pengembangan Dr. John Warnock di awal tahun 90-an. Proyek PDF dimaksudkan
    membuat format file untuk distribusi dokumen di dalam perusahaan yang dapat
    ditampilkan di berbagai platform komputasi.
</p>
<p>
    PDF akhirnya menjadi format dokumen yang universal dan lintas platform, karena
    tersedia di berbagai platform komputasi. Program untuk membaca dokumen PDF dalam
    berbagai platform disediakan secara gratis untuk didownload oleh Adobe System.
    <i>Plug-in</i> program pembaca untuk <i>browser</i> populer juga tersedia,
    sehingga dokumen PDF dapat dibaca langsung secara <i>online</i> dari situs
    internet tanpa perlu mendownload dokumen dan membacanya denga program yang
    terpisah dari <i>browser</i> web.
</p>
<p>
    PDF memiliki beberapa fitur keunggulan antara lain: <ul>
    <li><b>Universal</b> dan <b>Lintas Platform</b>. <br>
        Dokumen PDF dapat dibaca di berbagai platform, bahkan dapat dibaca secara
        <i>online</i> melalui <i>browser</i> yang telah dilengkapi dengan
        <i>plug-in</i> pembaca PDF. <i>Tools</i> dan <i>printer driver</i> untuk
        membuat dokumen PDF pun banyak tersedia. Keunggulan ini menyebabkan dokumen
        PDF dapat digunakan secara luas di seluruh dunia.</li>
        <li><b>Yang Anda Lihat, Yang Anda Dapatkan</b>. <br>
            Berbeda dengan format HTML/SGML, PDF lebih dapat menjamin apa yang
            ditampilkan pada monitor, maka serupa itu pula yang akan kita dapatkan
            jika dokumen dicetak. Dengan format HTML/SGML, maka hasil cetakan bisa jadi
            akan berbeda dengan yang tampak di monitor, bahkan dokumen yang tampak di
            monitor pun bisa jadi berbeda-beda tergantung dari <i>browser</i> yang
            digunakan. Hasilnya, PDF sangat sesuai digunakan untuk menampilkan informasi
            kritis yang tidak memperbolehkan variasi dalam presentasinya, misalnya
            invoice, tanda terima, dan laporan-laporan baku lainnya.</li>
            <li><b>Hemat Ukurannya</b>.<br>
                Secara <i>native</i> file PDF telah dikompresi sedemikian rupa, sehingga
                ukuran filenya akan lebih kecil daripada jika file tersebut dalam format
                HTML, misalnya. Kecilnya ukuran file PDF ini menyebabkan PDF populer
                digunakan untuk tukar-menukar dokumen lewat internet karena tidak
                memboroskan <i>bandwidth</i> data.</li>
                <li><b>Pengamanan Dokumen Dapat Diandalkan</b>.<br>
                    PDF juga memiliki fitur pengamanan dokumen dari kemungkinan pencurian isi,
                    duplikasi, dan pencetakan dokumen oleh yang tidak berhak. Sebuah dokumen PDF
                    dapat pula diberikan tanda tangan digital (<i>digital signature</i>)
                    sehingga penyebaran dokumen dapat lebih dikendalikan. Fitur ini tidak
                    dimiliki oleh format dokumen universal seperti HTML/SGML.</li>
                </ul>
            </p>

            <h2>Benarkah Perlu PDF?</h2>
            <p>
                Kecuali jika Anda hanya ingin bekerja dengan dokumen-dokumen non presisi dan
                tidak menginginkan kemudahan bertukar dokumen, maka Anda kemungkinan besar
                membutuhkan format dokumen PDF.
            </p>
            <p>
                Jika Anda ingin:
                <ul>
                    <li>membuat invoice, order pembelian, surat pengangkutan, tanda terima,
                        dan dokumen komersial untuk situs e-commerce atau aplikasi berbasis web</li>
                        <li>membuat laporan dari aplikasi berbasis web dengan format yang presisi
                            yang tidak memperkenankan variasi hasil cetakan</li>
                            <li>membuat cetakan form isian dari web dengan hasil yang seragam</li>
                            <li>membuat dokumen lain yang membutuhkan pengendalian baik terhadap distribusi
                                dokumen maupun presisi dan kualitas cetakan, serta dapat dipertukarkan
                                secara mudah,</li>
                            </ul>
                            Saya berani memberi saran kepada Anda untuk menghindari kerja keras
                            memformat dokumen dalam bentuk HTML dengan menggunakan format dokumen PDF.
                        </p>
                        <p>
                            Sebagai pecinta PHP, Anda benar-benar dimanjakan karena PHP memiliki kemampuan
                            untuk membuat dokumen PDF. Pada artikel ini kita akan coba mempelajarinya.
                        </p>

                        <h2>Pilih Yang Mana...</h2>
                        <p>
                            Cukup banyak ekstensi PHP tersedia yang memungkinkan Anda membuat dokumen PDF
                            melalui PHP. Beberapa yang dapat Anda pilih:
                            <ul>
                                <li><b>PDFLib</b>. Aladdin Free Public License memperkenankan penggunaan PDFLib
                                    untuk penggunaan non komersial. Untuk lisensi komersial, termasuk penggunaan
                                    dalam layanan web komersial, dikenakan harga lisensi yang dapat dilihat pada
                                    <a href="http://pdflib.com">http://pdflib.com</a>.
                                </li>
                                <li><b>FreePDFlib</b> oleh Thomas Szadel (<i>open source</i>).</li>
                                <li><b>ClibPDF</b> menggunakan model lisensi yang sama dengan PDFLib.</li>
                            </ul>
                        </p>
                        <p>
                            Dalam tulisan ini, kita akan menggunakan fungsi-fungsi yang ada pada PDFLib.
                            Sebelum memulai semuanya, sebaiknya Anda pastikan dulu ekstensi PDFLib telah
                            terpasang pada sistem PHP Anda. Jangan lupa juga, Anda juga harus memastikan
                            <i>browser</i> Anda telah terinstalasi <i>plug-in</i> untuk membaca dokumen
                            PDF.
                        </p>
                        <p>
                            Untuk lebih memudahkan Anda, maka telah tersedia <i>source code</i> dan hasilnya
                            (dalam dokumen PDF) dalam bentuk file <tt>.zip</tt>. Anda tinggal download saja
                            file <a href="artpdf.zip">artpdf.zip</a> ini.
                        </p>
                        <p>
                            Jika Anda telah siap, mari kita lanjutkan dengan membuat dokumen PDF paling
                            sederhana.
                        </p>
                        <h2>PDF Pertamaku, Tak Terlupakan...</h2>
                        <p>
                            Sesungguhnya saya tidak menyukai memulai sesuatu dengan rutinitas. Ketika Anda
                            belajar bahasa pemrograman apa pun, selalu kita dipaksa untuk mengucapkan,
                            "Hello, World!" dalam bahasa pemrograman baru. Saya juga akan mengajak Anda
                            untuk melakukannya lagi saat ini, namun untuk sedikit mengurangi kejenuhan,
                            mari kita ubah program ini menjadi program "PDF Pertamaku".
                        </p>
                        <p>
                            Coba Anda buat skrip seperti di bawah ini, dan coba jalankan di PHP melalui
                            <i>browser</i> favorit Anda.
                        </p>
                        <p><dir><tt><font color="#000080">
                            &lt;?php<br><dir>
                            $halaman = pdf_new();<br>
                            pdf_open_file($halaman);<br>
                            pdf_set_info($halaman,"Creator","pdf-ku.php");<br>
                            pdf_set_info($halaman,"Author","Mr. Dodol");<br>
                            pdf_set_info($halaman,"Title","PDF Pertamaku");<br>
                            pdf_begin_page($halaman,595,842);<br>
                            $huruf = pdf_findfont($halaman,"Helvetica-Bold","host",0);<br>
                            pdf_setfont($halaman,$huruf,38.0);<br>
                            pdf_show_xy($halaman,"Inilah PDF Pertamaku!",50,700);<br>
                            pdf_end_page($halaman);<br>
                            pdf_close($halaman);<br>
                            $buf = pdf_get_buffer($halaman);<br>
                            $panjangbuffer = strlen($buf);<br>
                            Header("Content-type: application/pdf");<br>
                            Header("Content-Length: $panjangbuffer");<br>
                            Header("Content-Disposition: inline; filename=pdf-ku.pdf");<br>
                            echo $buf;<br>
                            pdf_delete($halaman);<br></dir>
                            ?&gt;
                        </font></tt></dir></p>
                        <h2>Tentukan Letak Bintang di Langit</h2>
                        <p>
                            Membuat dokumen PDF, sebenarnya mirip dengan proses menggambar pada kanvas.
                            Agar Anda mampu menempatkan gambar maupun tulisan di tempat yang sesuai dengan
                            keinginan Anda, maka Anda perlu mengetahui cara penentuan letak pada dokumen
                            PDF.
                        </p>
                        <p>
                            Pada dokumen PHP berlaku sistem koordinat dua dimensi (x,y), dimana titik asal
                            atau koordinat (0,0) ada di pojok kiri bawah dokumen. Arah koordinat x adalah
                            arah horisontal (dari kiri ke kanan) dan arah koordinat y adalah arah vertikal
                            (dari bawah ke atas). Sistem ukuran dasar/skala yang digunakan adalah
                            <b>point</b> atau disingkat <b>pt</b>, dengan konversinya:
                            <br><dir>
                            1 pt = 1/72 inch = 0.35277777778 mm, atau dengan kata lain<br>
                            1 inch = 72 pt.
                        </dir>
                    </p>
                    <p>
                        Pembuatan dokumen PHP, dikerjakan per halaman. Pada saat awal membuat halaman,
                        Anda harus menentukan terlebih dahulu lebar dan panjang kertas yang akan
                        digunakan dalam satuan pt. Tabel berikut ini akan memberikan informasi ukuran
                        jenis kertas dalam satuan pt.
                    </p>
                    <p align="center">
                        <table cellspacing="1" cellpadding="5" bgcolor="#a0e0ff">
                            <tr bgcolor="#a0e0ff">
                                <td><font color="#000080"><b>Jenis Ukuran Kertas</b></font></td>
                                <td><font color="#000080"><b>Horisontal</b></font></td>
                                <td><font color="#000080"><b>Vertikal</b></font></td>
                            </tr>
                            <tr bgcolor="#ffffef">
                                <td>US Letter</td>
                                <td align="right">612</td>
                                <td align="right">792</td>
                            </tr>
                            <tr bgcolor="#ffffef">
                                <td>US Legal</td>
                                <td align="right">612</td>
                                <td align="right">1008</td>
                            </tr>
                            <tr bgcolor="#ffffef">
                                <td>US Ledger</td>
                                <td align="right">1224</td>
                                <td align="right">792</td>
                            </tr>
                            <tr bgcolor="#ffffef">
                                <td>11x17</td>
                                <td align="right">792</td>
                                <td align="right">1224</td>
                            </tr>
                            <tr bgcolor="#ffffef">
                                <td>A0</td>
                                <td align="right">2380</td>
                                <td align="right">3368</td>
                            </tr>
                            <tr bgcolor="#ffffef">
                                <td>A1</td>
                                <td align="right">1684</td>
                                <td align="right">2380</td>
                            </tr>
                            <tr bgcolor="#ffffef">
                                <td>A2</td>
                                <td align="right">1190</td>
                                <td align="right">1648</td>
                            </tr>
                            <tr bgcolor="#ffffef">
                                <td>A3</td>
                                <td align="right">842</td>
                                <td align="right">1190</td>
                            </tr>
                            <tr bgcolor="#ffffef">
                                <td>A4</td>
                                <td align="right">595</td>
                                <td align="right">842</td>
                            </tr>
                            <tr bgcolor="#ffffef">
                                <td>A5</td>
                                <td align="right">421</td>
                                <td align="right">595</td>
                            </tr>
                            <tr bgcolor="#ffffef">
                                <td>A6</td>
                                <td align="right">297</td>
                                <td align="right">421</td>
                            </tr>
                            <tr bgcolor="#ffffef">
                                <td>B5</td>
                                <td align="right">501</td>
                                <td align="right">709</td>
                            </tr>
                        </table>
                    </p>
                    <p>
                        Mari Anda coba skrip di bawah ini untuk belajar bermain dalam koordinat halaman
                        berukuran A4.
                    </p>
                    <p><dir><tt><font color="#000080">
                        &lt;?php<br><dir>
                        $halaman = pdf_new();<br>
                        pdf_open_file($halaman);<br>
                        pdf_set_info($halaman,"Creator","koord.php");<br>
                        pdf_set_info($halaman,"Author","Mr. Dodol");<br>
                        pdf_set_info($halaman,"Title","Test Koordinat PDF");<br>
                        pdf_begin_page($halaman,595,842); <font color="#800000">//ukuran kertas A4</font><br><br>
                        <font color="#800000">//membuat tulisan pada halaman</font><br>
                        $huruf = pdf_findfont($halaman,"Helvetica-Bold","host",0);<br>
                        pdf_setfont($halaman,$huruf,38.0);<br>
                        pdf_show_xy($halaman, "Kiri Bawah", 10, 10);<br>
                        pdf_show_xy($halaman, "Kanan Bawah", 335, 10);<br>
                        pdf_show_xy($halaman, "Kiri Atas", 10, 802);<br>
                        pdf_show_xy($halaman, "Kanan Atas", 375, 802);<br>
                        pdf_show_xy($halaman, "Tengah",595/2-60,842/2-20);<br><br>
                        <font color="#800000">// membuat garis di pinggir halaman</font><br>
                        pdf_setrgbcolor_stroke($halaman,1,0,0);<br>
                        pdf_moveto($halaman,10,10);<br>
                        pdf_lineto($halaman,10,832);<br>
                        pdf_lineto($halaman,585,832);<br>
                        pdf_lineto($halaman,585,10);<br>
                        pdf_lineto($halaman,10,10);<br>
                        pdf_stroke($halaman);<br>
                        pdf_setrgbcolor_stroke($halaman,0,0,0);<br><br>
                        pdf_end_page($halaman);<br>
                        pdf_set_parameter($halaman, "openaction", "fitpage");<br>
                        pdf_close($halaman);<br>
                        $buf = pdf_get_buffer($halaman);<br>
                        $panjangbuffer = strlen($buf);<br>
                        Header("Content-type:application/pdf");<br>
                        Header("Content-Length:$panjangbuffer");<br>
                        Header("Content-Disposition:inline; filename=koord.pdf");<br>
                        echo $buf;<br>
                        pdf_delete($halaman);<br></dir>
                        ?&gt;
                    </font></tt></dir></p>
                    <p>
                        Skrip di atas akan menghasilkan dokumen PDF serupa ini.
                    </p>
                    <p>
                        <center><img src="image/pdf2.gif"></center>
                    </p>
                    <p>
                        Anda memiliki kemungkinan untuk mengubah titik asal (0,0) dan membalik arah
                        koordinat, sebagai contoh, Anda dapat membuat pojok kiri atas sebagai titik
                        asal koordinat dan memiliki nilai positif untuk arah dari atas ke bawah dan
                        dari kiri ke kanan. Anda dapat mencoba skrip berikut ini.
                    </p>
                    <p><dir><tt><font color="#000080">
                        &lt;?php<br><dir>
                        $halaman = pdf_new();<br>
                        pdf_open_file($halaman);<br>
                        pdf_set_info($halaman,"Creator","koordbalik.php");<br>
                        pdf_set_info($halaman,"Author","Mr. Dodol");<br>
                        pdf_set_info($halaman,"Title","Mengubah Titik Asal dan Arah Koordinat (PHP)");
                        <br>
                        pdf_begin_page($halaman,595,842);<br><br>
                        <font color="#800000">// Mengubah Titik Asal</font><br>
                        pdf_translate($halaman,0,842);<br><br>
                        <font color="#800000">// Membalik Arah Sumbu Mendatar</font><br>
                        pdf_scale($halaman, 1, -1);<br><br>
                        <font color="#800000">// Mencerminkan skala horisontal</font><br>
                        pdf_set_value($halaman,"horizscaling",-100);<br><br>
                        $huruf = pdf_findfont($halaman,"Helvetica-Bold","host",0);<br>
                        pdf_setfont($halaman,$huruf,-38.0);<br>
                        pdf_show_xy($halaman, "Top Left", 10, 40);<br><br>
                        pdf_end_page($halaman);<br>
                        pdf_set_parameter($halaman, "openaction", "fitpage");<br>
                        pdf_close($halaman);<br>
                        $buf = pdf_get_buffer($halaman);<br>
                        $panjangbuffer = strlen($buf);<br>
                        Header("Content-type:application/pdf");<br>
                        Header("Content-Length:$panjangbuffer");<br>
                        Header("Content-Disposition:inline; filename=koordbalik.pdf");<br>
                        echo $buf;<br>
                        pdf_delete($halaman);<br></dir>
                        ?&gt;
                    </font></tt></dir></p>

                    <h2>Bicara dengan Tulisan</h2>
                    <p>
                        Dalam contoh-contoh skrip di atas, Anda telah mencoba menulis pada halaman PDF.
                        Kali ini Anda akan mendapatkan penjelasan mengenai fungsi-fungsi dasar yang
                        digunakan untuk membuat tulisan pada dokumen PDF. Sebagian dari fungsi-fungsi
                        ini telah pernah Anda gunakan.
                    </p>

                    <h3><tt>pdf_show_xy()</tt></h3>
                    <p>
                        Fungsi ini digunakan untuk menuliskan <i>text</i> pada posisi tertentu yang
                        diberikan. Contoh:
                    </p>
                    <p><dir><tt><font color="#000080">
                        &lt;? pdf_show_xy($halaman,"Tulisan Saya",50,100); ?&gt;
                    </font></tt></dir></p>
                    <p>
                        Contoh di atas akan menuliskan text "Tulisan Saya" mulai pada koordinat (50,100)
                        pada halaman PDF yang didefinisikan oleh variabel <tt>$halaman</tt>.
                    </p>
                    <h3><tt>pdf_show()</tt></h3>
                    <p>
                        Fungsi ini digunakan untuk menuliskan <i>text</i> pada posisi tertentu yang
                        telah diset terlebih dahulu dengan fungsi <tt>pdf_set_text_pos()</tt>. Contoh:
                    </p>
                    <p><dir><tt><font color="#000080">
                        &lt;? pdf_set_text_pos($halaman, 50,100);<br>
                        &nbsp;&nbsp;&nbsp;pdf_show($halaman,"Text"); ?&gt;
                    </font></tt></dir></p>
                    <h3><tt>pdf_continue_text()</tt></h3>
                    <p>
                        Fungsi ini digunakan untuk menuliskan <i>text</i> pada posisi baris berikutnya.
                    </p>
                    <h3><tt>pdf_show_boxed()</tt></h3>
                    <p>
                        Fungsi ini digunakan untuk memformat <i>text</i> dalam suatu box/kotak tertentu.
                        Contoh skrip berikut ini akan memberi kesempatan bagi Anda untuk mengerti maksud
                        penggunaan fungsi <tt>pdf_show_boxed()</tt>.
                    </p>
                    <p><dir><tt><font color="#000080">
                        &lt;?php<br><dir>
                        $halaman = pdf_new();<br>
                        pdf_open_file($halaman);<br>
                        pdf_begin_page($halaman,595,842);<br>
                        $font = pdf_findfont($halaman,"Helvetica-Bold","host",0);<br>
                        pdf_setfont($halaman,$font,24.0);<br><br>
                        $text = &lt;&lt;&lt;TEKS<br>
                        Contoh beberapa text di dalam kotak text pada dokumen PDF.<br>
                        TEKS;<br><br>
                        pdf_show_boxed($halaman, $text, 50, 630, 300, 200, "left");<br>
                        pdf_rect($halaman,50,630,300,200); pdf_stroke($halaman);<br>
                        pdf_show_boxed($halaman, $text, 50, 420, 300, 200, "right");<br>
                        pdf_rect($halaman,50,420,300,200); pdf_stroke($halaman);<br>
                        pdf_show_boxed($halaman, $text, 50, 210, 300, 200, "justify");<br>
                        pdf_rect($halaman,50,210,300,200);<br>
                        pdf_stroke($halaman);<br>
                        pdf_show_boxed($halaman, $text, 50, 0, 300, 200, "fulljustify");<br>
                        pdf_rect($halaman,50,0,300,200);<br>
                        pdf_stroke($halaman);<br>
                        pdf_show_boxed($halaman, $text, 375, 250, 200, 300, "center");<br>
                        pdf_rect($halaman,375,250,200,300);<br>
                        pdf_stroke($halaman);<br><br>
                        pdf_end_page($halaman);<br>
                        pdf_set_parameter($halaman, "openaction", "fitpage");<br>
                        pdf_close($halaman);<br>
                        $buf = pdf_get_buffer($halaman);<br>
                        $panjangbuffer = strlen($buf);<br>
                        Header("Content-type:application/pdf");<br>
                        Header("Content-Length:$panjangbuffer");<br>
                        Header("Content-Disposition:inline; filename=kotakteks.pdf");<br>
                        echo $buf;<br>
                        pdf_delete($halaman);<br></dir>
                        ?&gt;<br>
                    </font></tt></dir></p>
                    <p>
                        Skrip di atas jika dijalankan, akan menghasilkan dokumen PDF seperti gambar
                        berikut ini.
                    </p>
                    <p>
                        <center><img src="image/pdf3.gif"></center>
                    </p>
                    <h2>Kusuka Bentuknya</h2>
                    <p>
                        PDFLib yang Anda gunakan menyediakan 14 pilihan huruf <i>built-in</i>, yaitu:
                        <ul>
                            <li>Courier</li>
                            <li>Courier-Bold</li>
                            <li>Courier-Oblique</li>
                            <li>Courier-BoldOblique</li>
                            <li>Helvetica</li>
                            <li>Helvetica-Bold</li>
                            <li>Helvetica-Oblique</li>
                            <li>Helvetica-BoldOblique</li>
                            <li>Times-Roman</li>
                            <li>Times-Bold</li>
                            <li>Times-Italic</li>
                            <li>Times-BoldItalic</li>
                            <li>Symbol</li>
                            <li>ZapfDingbats.</li>
                        </ul>
                    </p>
                    <p>
                        Berikut beberapa contoh dari jenis huruf standar tersebut di atas.
                    </p>
                    <p>
                        <center><img src="image/pdf4.gif"></center>
                    </p>
                    <p>
                        Anda juga dapat menggunakan jenis huruf AFM, Postscript Type-1, dan TTF. Mari
                        kita coba lihat cara menggunakan jenis huruf TTF atau <i>True Type Font</i>.
                    </p>
                    <p><dir><tt><font color="#000080">
                        &lt;?php<br><dir>
                        pdf_set_parameter($halaman,"FontOutline",<br>
                        <dir><dir><dir>"Arial==/usr/fonts/arial.ttf");<br>
                        </dir></dir></dir>
                        $font = pdf_findfont($halaman,"Arial","host",1);<br></dir>
                        ?&gt;
                    </font></tt></dir></p>
                    <p>
                        Jenis huruf (<i>font</i>) dapat pula didefinisikan pada file
                        <tt>pdflib.upr</tt>. Contoh berikut ini menunjukkan caranya.
                    </p>
                    <p><dir><tt><font color="#000080">
                        &lt;?php<br><dir>
                        <font color="#800000">// Ubah nilai variabel ini sesuai dengan path file pdflib.upr<br>
                            // di sistem PHP Anda.</font><br>
                            $file_upr = "/usr/share/fonts/pdflib/pdflib.upr";<br><br>

                            $halaman = pdf_new();<br>
                            pdf_open_file($halaman);<br>
                            pdf_set_info($halaman,"Creator","hurufttf.php");<br>
                            pdf_set_info($halaman,"Author","Mr. Dodol");<br>
                            pdf_set_info($halaman,"Title","Test Jenis Huruf (PHP)");<br>
                            pdf_set_parameter($halaman, "resourcefile", $file_upr);<br>
                            pdf_begin_page($halaman,595,842);<br>
                            pdf_set_text_pos($halaman,25,800);<br><br>
                            <font color="#800000">// Buat Array Nama Font dan jenisnya</font><br>
                            $fonts = array('Arial'=>1,'Comic Sans MS'=>1,'Impact'=>1);<br><br>
                            <font color="#800000">// Cetak Font ke Dokumen PDF</font><br>
                            foreach($fonts as $f=>$embed) {<br><dir>
                            $font = pdf_findfont($halaman,$f,"host",$embed);<br>
                            pdf_setfont($halaman,$font,25.0);<br>
                            pdf_continue_text($halaman,"$f (".chr(128)." Ç à á â ã ç è é ê)");<br>
                        }<br><br></dir>
                        pdf_end_page($halaman);<br>
                        pdf_close($halaman);<br>
                        $buf = pdf_get_buffer($halaman);<br>
                        $len = strlen($buf);<br>
                        Header("Content-type:application/pdf");<br>
                        Header("Content-Length:$len");<br>
                        Header("Content-Disposition:inline; filename=hurufttf.pdf");<br>
                        echo $buf;<br>
                        pdf_delete($halaman);<br></dir>
                        ?&gt;
                    </font></tt></dir></p>
                    <p>
                        File <tt>pdflib.upr</tt> harus terisi dengan entri sebagai berikut.
                    </p>
                    <p><dir><tt><font color="#000080">
                        FontOutline<br>
                        Arial=arial.ttf<br>
                        Comic Sans MS=comic.ttf<br>
                        Impact=IMPACT.ttf<br>
                        .
                    </font></tt></dir></p>

                    <p>
                        Jika muncul pesan kesalahan, kemungkinan Anda harus mengisikan entri nama file
                        pada <tt>FontOutline</tt> lengkap dengan path dari file <tt>.ttf</tt>.
                        Jika berhasil, Anda akan memperoleh hasil sebagai berikut.
                    </p>

                    <p>
                        <center><img src="image/pdf5.gif"></center>
                    </p>
                    <p>
                        Enkonding karakter yang tersedia pada PDFLib yaitu<ul>
                        <li><b>winansi</b> (superset dari ISO 8859-1)</li>
                        <li><b>macroman</b> (Enkoding standar Macintosh)</li>
                        <li><b>ebcdic</b> (Digunakan pada IBM AS/400 dan S/390)</li>
                        <li><b>biltin</b> (Enkoding asli yang digunakan oleh huruf teks non latin)</li>
                        <li><b>host</b> (macroman di Mac, ebcdic di sistem EBCDIC, dan winasi di
                            windows)</li>
                        </ul>
                    </p>

                    <h2>Gambar Bermakna Seribu Kata...</h2>
                    <p>
                        Anda telah mendapatkan dasar yang cukup mengenai cara menulis teks pada halaman
                        dokumen PDF. Kali ini kita akan mempelajari cara penempatan gambar pada dokumen
                        PHP. PDFLib mampu menangani beberapa format gambar untuk dijadikan dokumen PDF,
                        antara lain:<ul>
                        <li><b>PNG</b> (tanpa <i>alpha-channel</i>)</li>
                        <li><b>JPEG</b> (Progressive jpegs didukung mulai versi Acrobat 4)</li>
                        <li><b>GIF</b> (non-interlacing diperbolehkan, untuk animasi GIF hanya gambar
                            pertama yang ditampilkan)</li>
                            <li><b>TIFF</b></li>
                            <li><b>CCITT compressed image data</b></li>
                            <li><b>Raw image data</b></li>
                        </ul>
                    </p>
                    <p>
                        Anda dapat menyisipkan gambar pada dokumen PDF dengan perintah
                        <tt>pdf_open_jpeg()</tt> untuk membuka file gambar dan diikuti dengan perintah
                        <tt>pdf_place_image()</tt> untuk meletakkan gambarnya pada dokumen PDF.
                        Untuk menutup file gambar, digunakan perintah
                        <tt>pdf_close_image()</tt>. Kode berikut ini adalah contohnya.
                    </p>

                    <p><dir><tt><font color="#000080">
                        &lt;?php<br><dir>
                        $halaman = pdf_new();<br>
                        pdf_open_file($halaman);<br>
                        pdf_begin_page($halaman,595,842);<br><br>
                        <font color="#800000">// Load file gambar php-big.jpg</font><br>
                        $im = pdf_open_jpeg($halaman, "php-big.jpg");<br>
                        pdf_place_image($halaman, $im, 200, 700, 1.0);<br>
                        pdf_place_image($halaman, $im, 200, 600, 0.75);<br>
                        pdf_place_image($halaman, $im, 200, 535, 0.50);<br>
                        pdf_place_image($halaman, $im, 200, 501, 0.25);<br>
                        pdf_place_image($halaman, $im, 200, 486, 0.10);<br>
                        $x = pdf_get_value($halaman, "imagewidth", $im);<br>
                        $y = pdf_get_value($halaman, "imageheight", $im);<br>
                        pdf_close_image ($halaman,$im);<br><br>
                        $huruf = pdf_findfont($halaman,"Helvetica-Bold","host",0);<br>
                        pdf_setfont($halaman,$huruf,14.0);<br>
                        pdf_show_xy($halaman,"$x X $y"." (100%)",25,750);<br>
                        pdf_show_xy($halaman, $x*0.75 . " X " . $y*0.75 . " (75%)",25,650);<br>
                        pdf_show_xy($halaman, $x*0.50 . " X " . $y*0.50 . " (50%)",25,570);<br>
                        pdf_show_xy($halaman, $x*0.25 . " X " . $y*0.25 . " (25%)",25,525);<br>
                        pdf_show_xy($halaman, $x*0.10 . " X " . $y*0.10 . " (10%)",25,490);<br><br>
                        pdf_end_page($halaman);<br>
                        pdf_set_parameter($halaman, "openaction", "fitpage");<br>
                        pdf_close($halaman);<br>
                        $buf = pdf_get_buffer($halaman);<br>
                        $panjangbuffer = strlen($buf);<br>
                        Header("Content-type:application/pdf");<br>
                        Header("Content-Length:$panjangbuffer");<br>
                        Header("Content-Disposition:inline; filename=sisipgambar.pdf");<br>
                        echo $buf;<br>
                        pdf_delete($halaman);<br></dir>
                        ?&gt;<br>
                    </font></tt></dir></p>
                    <p>
                        Hasil tampilan program di atas kurang lebih seperti gambar berikut.
                    </p>
                    <p>
                        <center><img src="image/pdf6.gif"></center>
                    </p>
                    <p>
                        Kita dapat pula menerapkan skala non linier kepada gambar yang akan kita
                        sisipkan pada dokumen PDF. Untuk melakukan itu, kita harus mengatur
                        skala koordinat.
                    </p>

                    <p><dir><tt><font color="#000080">
                        &lt;?php<br><dir>
                        $halaman = pdf_new();<br>
                        pdf_open_file($halaman);<br>
                        pdf_begin_page($halaman,595,842);<br><br>
                        $im = pdf_open_jpeg($halaman, "php-big.jpg");<br>
                        pdf_place_image($halaman, $im, 200, 700, 1.0);<br>
                        pdf_save($halaman);  <font color="#800000">
                        // Simpan Setting Sistem Koordinat yang ada</font><br>
                        $nx = 50/pdf_get_value($halaman,"imagewidth",$im);<br>
                        $ny = 100/pdf_get_value($halaman,"imageheight",$im);<br>
                        pdf_scale($halaman, $nx, $ny);<br>
                        pdf_place_image($halaman, $im, 200/$nx, 600/$ny, 1.0);<br>
                        pdf_restore($halaman);  <font color="#800000">// Kembalikan ke sebelumnya</font><br>
                        pdf_close_image ($halaman,$im);<br><br>
                        pdf_end_page($halaman);<br>
                        pdf_set_parameter($halaman, "openaction", "fitpage");<br>
                        pdf_close($halaman);<br>
                        $buf = pdf_get_buffer($halaman);<br>
                        $panjangbuffer = strlen($buf);<br>
                        Header("Content-type:application/pdf");<br>
                        Header("Content-Length:$panjangbuffer");<br>
                        Header("Content-Disposition:inline; filename=sisipgambar2.pdf");<br>
                        echo $buf;<br>
                        pdf_delete($halaman);<br></dir>
                        ?&gt;<br>
                    </font></tt></dir></p>
                    <p>
                        Program di atas akan memberikan hasil kurang lebih seperti gambar berikut.
                    </p>
                    <p>
                        <center><img src="image/pdf7.gif"></center>
                    </p>

                    <h2>Mari Menggambar Bersama</h2>
                    <p>
                        Selain menggunakan gambar yang telah ada untuk disisipkan ke dokumen PDF, Anda
                        dapat juga langsung menggambar pada dokumen PDF dengan beberapa perintah gambar
                        sederhana. Pada dasarnya, menggambar di dokumen PDF adalah menentukan atau
                        mendefinisikan <i>path</i> untuk kemudian ditampilkan pada dokumen PDF.
                        Sebuah path terdiri dari bentuk-bentuk dasar grafis sepeti garis, kurva, persegi
                        panjang, lingkaran, elips, dan lain-lain. Sebagai contoh:

                        <p><dir><tt><font color="#000080">
                            &lt;?php<br><dir>
                            $halaman = pdf_new();<br>
                            pdf_open_file($halaman);<br>
                            pdf_begin_page($halaman,595,342);<br><br>
                            <font color="#800000">
                                // Menggambar path garis diikuti kurva
                            </font>
                            <br>
                            pdf_moveto($halaman,150,250);<br>
                            pdf_lineto($halaman,450,250);<br>
                            pdf_lineto($halaman,100,300);<br>
                            pdf_curveto($halaman,80,50,70,50,250,150);<br><br>

                            <font color="#800000">
                                // Menggambar lingkaran
                            </font>
                            <br>
                            pdf_circle($halaman,450,100,50);<br><br>

                            <font color="#800000">
                                // Menggambar persegi panjang
                            </font>
                            <br>
                            pdf_rect($halaman,350,25,200,150);<br><br>

                            <font color="#800000">
                                // Memplot semua path/kurva yang telah dibuat<br>
                                // pada dokumen PDF
                            </font>
                            <br>
                            pdf_stroke($halaman);<br><br>

                            pdf_end_page($halaman);<br>
                            pdf_close($halaman);<br>
                            $buf = pdf_get_buffer($halaman);<br>
                            $panjangbuffer = strlen($buf);<br>
                            Header("Content-type:application/pdf");<br>
                            Header("Content-Length:$panjangbuffer");<br>
                            Header("Content-Disposition:inline; filename=menggambar1.pdf");<br>
                            echo $buf;<br>
                            pdf_delete($halaman);<br></dir>
                            ?&gt;<br>
                        </font></tt></dir></p>

                        <p>
                            Jika skrip di atas dijalankan, maka akan terlihat hasil sebagai berikut.
                            <p>
                                <center><img src="image/pdf8.gif"></center>

                                <p>
                                    Anda dapat menggunakan perintah <tt>pdf_closepath()</tt> untuk menutup <i>path</i>
                                    secara otomatis dan <tt>pdf_fill_stroke()</tt> untuk mengisi kurva tertutup
                                    tersebut dengan warna isian.

                                    <p><dir><tt><font color="#000080">
                                        &lt;?php<br><dir>
                                        $halaman = pdf_new();<br>
                                        pdf_open_file($halaman);<br>
                                        pdf_begin_page($halaman,595,342);<br><br>
                                        <font color="#800000">
                                            // Set warna isian
                                        </font><br>
                                        pdf_setcolor($halaman,"fill","rgb", 1.0, 0.8, 0.1);<br><br>

                                        <font color="#800000">
                                            // Menggambar path garis diikuti kurva
                                        </font><br>
                                        pdf_moveto($halaman,150,250);<br>
                                        pdf_lineto($halaman,450,250);<br>
                                        pdf_lineto($halaman,100,300);<br>
                                        pdf_curveto($halaman,80,50,70,50,250,150);<br><br>

                                        <font color="#800000">
                                            // Menutup kurva/path
                                        </font><br>
                                        pdf_closepath($halaman);<br><br>

                                        <font color="#800000">
                                            // Memplot dengan isian warna
                                        </font><br>
                                        pdf_fill_stroke($halaman);<br><br>

                                        <font color="#800000">
                                            // Set warna isian
                                        </font><br>
                                        pdf_setcolor($halaman,"fill","rgb", 1.0, 0.0, 0.0);<br><br>

                                        <font color="#800000">
                                            // Menggambar lingkaran
                                        </font><br>
                                        pdf_circle($halaman,450,100,50);<br><br>

                                        <font color="#800000">
                                            // Memplot dengan isian warna
                                        </font><br>
                                        pdf_fill_stroke($halaman);<br><br>

                                        <font color="#800000">
                                            // Menggambar persegi panjang
                                        </font><br>
                                        pdf_rect($halaman,350,25,200,150);<br><br>

                                        <font color="#800000">
                                            // Memplot tanpa isian warna
                                        </font><br>
                                        pdf_stroke($halaman);<br><br>

                                        pdf_end_page($halaman);<br>
                                        pdf_close($halaman);<br>
                                        $buf = pdf_get_buffer($halaman);<br>
                                        $panjangbuffer = strlen($buf);<br>
                                        Header("Content-type:application/pdf");<br>
                                        Header("Content-Length:$panjangbuffer");<br>
                                        Header("Content-Disposition:inline; filename=menggambar2.pdf");<br>
                                        echo $buf;<br>
                                        pdf_delete($halaman);<br></dir>
                                        ?&gt;<br>
                                    </font></tt></dir></p>

                                    <p>
                                        Hasil dari skrip di atas adalah dokumen PDF seperti berikut ini.

                                        <p>
                                            <center><img src="image/pdf9.gif"></center>

                                            <p>
                                                Mari kita coba contoh menggambar berikutnya. Anda dapat membuat garis
                                                putus-putus dengan perintah <tt>pdf_setdash()</tt>.

                                                <p><dir><tt><font color="#000080">
                                                    &lt;?php<br><dir>
                                                    $halaman = pdf_new();<br>
                                                    pdf_open_file($halaman);<br>
                                                    pdf_begin_page($halaman,595,342);<br><br>

                                                    <font color="#800000">
                                                        // Lingkaran
                                                    </font><br>
                                                    pdf_setcolor($halaman,"fill","rgb", 0.8, 0.5, 0.8);<br>
                                                    pdf_circle($halaman,400,150,75);<br>
                                                    pdf_fill_stroke($halaman);<br><br>

                                                    <font color="#800000">
                                                        // Funky Arc
                                                    </font><br>
                                                    pdf_setcolor($halaman,"fill","rgb", 0.8, 0.5, 0.5);<br>
                                                    pdf_moveto($halaman,200,150);<br>
                                                    pdf_arc($halaman,300,150,50,0,120);<br>
                                                    pdf_closepath($halaman);<br>
                                                    pdf_fill_stroke($halaman);<br><br>

                                                    <font color="#800000">
                                                        // kotak dengan garis putus-putus
                                                    </font><br>
                                                    pdf_setcolor($halaman,"stroke","rgb", 0.3, 0.8, 0.3);<br>
                                                    pdf_setdash($halaman,4,6);<br>
                                                    pdf_rect($halaman,50,50,500,250);<br>
                                                    pdf_stroke($halaman);<br><br>

                                                    pdf_end_page($halaman);<br>
                                                    pdf_close($halaman);<br>
                                                    $buf = pdf_get_buffer($halaman);<br>
                                                    $panjangbuffer = strlen($buf);<br>
                                                    Header("Content-type:application/pdf");<br>
                                                    Header("Content-Length:$panjangbuffer");<br>
                                                    Header("Content-Disposition:inline; filename=menggambar3.pdf");<br>
                                                    echo $buf;<br>
                                                    pdf_delete($halaman);<br></dir>
                                                    ?&gt;<br>
                                                </font></tt></dir></p>

                                                <p>
                                                    Inilah hasil gambar dari skrip di atas.

                                                    <p>
                                                        <center><img src="image/pdf10.gif"></center>

                                                        <h2>Satu Untuk Semua, Semuanya Dari Satu</h2>
                                                        <p>
                                                            Adakalanya kita ingin mencetak bentuk, gambar atau tulisan secara berulang
                                                            pada beberapa halaman PDF yang kita akan buat. Naluri kepemalasan kita akan
                                                            berontak. Bisa tidak semua perulangan ini dibuat lebih ringkas dan mudah?
                                                            <p>
                                                                Pada kondisi ini maka kita membutuhkan pola baku alias <i>template</i>. Dalam
                                                                dunia PDF, <i>template</i> dikenal sebagai <b>form XObjects</b>. Dokumen PDF
                                                                yang dibuat akan menjadi lebih kecil ukurannya dengan memanfaatkan <i>template</i>.

                                                                Contoh skrip berikut ini dapat coba Anda pahami.

                                                                <p><dir><tt><font color="#000080">
                                                                    &lt;?php<br><dir>
                                                                    $halaman = pdf_new();<br>
                                                                    pdf_open_file($halaman);<br><br>
                                                                    <font color="#800000">
                                                                        // Muat Gambar/Logo PHP
                                                                    </font><br>
                                                                    $gambar = pdf_open_jpeg($halaman, "php-big.jpg");<br><br>
                                                                    <font color="#800000">
                                                                        // Memulai Template
                                                                    </font><br>
                                                                    $template = pdf_begin_template($halaman,595,442);<br>
                                                                    pdf_save($halaman);<br><br>

                                                                    pdf_place_image($halaman, $gambar, 4, 403, 0.25);<br>
                                                                    pdf_place_image($halaman, $gambar, 525, 403, 0.25);<br><br>

                                                                    pdf_moveto($halaman,10,395);<br>
                                                                    pdf_lineto($halaman,585,395);<br>
                                                                    pdf_lineto($halaman,585,10);<br>
                                                                    pdf_lineto($halaman,10,10);<br>
                                                                    pdf_closepath($halaman);<br>
                                                                    pdf_stroke($halaman);<br>
                                                                    pdf_moveto($halaman,10,375);<br>
                                                                    pdf_lineto($halaman,585,375);<br>
                                                                    pdf_stroke($halaman);<br><br>

                                                                    $font = pdf_findfont($halaman,"Times-Bold","host",0);<br>
                                                                    pdf_setfont($halaman,$font,38.0);<br>
                                                                    pdf_show_xy($halaman,"Contoh Template PDF",100,407);<br>
                                                                    pdf_restore($halaman);<br>
                                                                    pdf_end_template($halaman);<br><br>

                                                                    <font color="#800000">
                                                                        // Tutup Gambar/Logo PHP
                                                                    </font><br>
                                                                    pdf_close_image ($halaman,$gambar);<br><br>

                                                                    <font color="#800000">
                                                                        // Halaman Pertama
                                                                    </font><br>
                                                                    pdf_begin_page($halaman,595,442);<br>
                                                                    pdf_place_image($halaman, $template, 0, 0, 1.0);<br>
                                                                    pdf_setfont($halaman,$font,14.0);<br>
                                                                    pdf_show_xy($halaman,"Contoh Template PDF Halaman 1",15,380);<br>
                                                                    pdf_end_page($halaman);<br><br>

                                                                    <font color="#800000">
                                                                        // Halaman Kedua
                                                                    </font><br>
                                                                    pdf_begin_page($halaman,595,442);<br>
                                                                    pdf_place_image($halaman, $template, 0, 0, 1.0);<br>
                                                                    pdf_setfont($halaman,$font,14.0);<br>
                                                                    pdf_show_xy($halaman,"Contoh Template PDF Halaman 2",15,380);<br>
                                                                    pdf_end_page($halaman);<br><br>

                                                                    pdf_close($halaman);<br>
                                                                    $buf = pdf_get_buffer($halaman);<br>
                                                                    $panjangbuffer = strlen($buf);<br>
                                                                    Header("Content-type:application/pdf");<br>
                                                                    Header("Content-Length:$panjangbuffer");<br>
                                                                    Header("Content-Disposition:inline; filename=template.pdf");<br>
                                                                    echo $buf;<br>
                                                                    pdf_delete($halaman);<br></dir>
                                                                    ?&gt;<br>
                                                                </font></tt></dir></p>

                                                                <p>
                                                                    Dokumen PDF dua halaman akan terbentuk sebagai berikut.

                                                                    <p>
                                                                        <center><img src="image/pdf11.gif"></center>

                                                                        <p>
                                                                            Contoh aplikasi dalam dunia nyata adalah untuk dokumen atau pencetakan
                                                                            <i>invoice</i>, kuitansi, <i>packing list</i>, dan dokumen-dokumen lain yang
                                                                            berbentuk form baku.

                                                                            <h2>Mewarnai dengan Pola</h2>
                                                                            <p>
                                                                                Pola isian mirip dengan pola baku/<i>templates</i>, hanya saja pola isian
                                                                                digunakan untuk pengganti warna isian. Anda dapat menggambar kurva/path, garis
                                                                                atau bentuk primitif kurva lainnya (<i>stroke</i>), dan mengisi warna kurva/path
                                                                                tersebut dengan sebuah pola isian. Contoh berikut ini akan mengobarkan kembali
                                                                                semangat PHP kita.

                                                                                <p><dir><tt><font color="#000080">
                                                                                    &lt;?php<br><dir>
                                                                                    $halaman = pdf_new();<br>
                                                                                    pdf_open_file($halaman);<br><br>
                                                                                    <font color="#800000">
                                                                                        // Muat gambar untuk pola isian<br>
                                                                                    </font><br>
                                                                                    $gambar = pdf_open_jpeg($halaman, "php-big.jpg");<br><br>
                                                                                    <font color="#800000">
                                                                                        // Membuat pola
                                                                                    </font><br>
                                                                                    $pola = pdf_begin_pattern($halaman,21,14,25,18,1);<br>
                                                                                    pdf_save($halaman);<br>
                                                                                    pdf_place_image($halaman, $gambar, 0,0,0.08);<br>
                                                                                    pdf_restore($halaman);<br>
                                                                                    pdf_end_pattern($halaman);<br><br>
                                                                                    <font color="#800000">
                                                                                        // Tutup gambar
                                                                                    </font><br>
                                                                                    pdf_close_image ($halaman,$gambar);<br><br>

                                                                                    pdf_begin_page($halaman,595,842);<br><br>
                                                                                    <font color="#800000">
                                                                                        // Gunakan pola untuk isian dan garis gambar
                                                                                    </font><br>
                                                                                    pdf_setcolor($halaman, "fill", "pattern", $pola);<br>
                                                                                    pdf_setcolor($halaman, "stroke", "pattern", $pola);<br><br>
                                                                                    pdf_setlinewidth($halaman, 60.0);<br>
                                                                                    pdf_circle($halaman,200,680,100);<br>
                                                                                    pdf_stroke($halaman);<br><br>
                                                                                    pdf_end_page($halaman);<br><br>
                                                                                    pdf_close($halaman);<br>
                                                                                    $buf = pdf_get_buffer($halaman);<br>
                                                                                    $panjangbuffer = strlen($buf);<br>
                                                                                    Header("Content-type:application/pdf");<br>
                                                                                    Header("Content-Length:$panjangbuffer");<br>
                                                                                    Header("Content-Disposition:inline; filename=polaisian.pdf");<br>
                                                                                    echo $buf;<br>
                                                                                    pdf_delete($halaman);<br></dir>
                                                                                    ?&gt;<br>
                                                                                </font></tt></dir></p>


                                                                                <h2>Tandai Yang Penting</h2>
                                                                                <p>
                                                                                    Anda dapat menandai bagian-bagian yang penting dalam dokumen PDF dengan
                                                                                    <i>bookmark</i>, sehingga navigasi dokumen menjadi lebih mudah. <i>Bookmark</i>
                                                                                    ini bisa berbentuk struktur pohon (<i>tree structure</i>) menyerupai daftar isi.
                                                                                    Selain berupa <i>bookmark</i>, Anda dapat juga mempermudah navigasi dokumen
                                                                                    dengan membuat daftar <i>thumbnail</i> halaman-halaman yang ada pada dokumen
                                                                                    PDF. Contoh berikut ini akan membantu untuk mempelajari caranya.

                                                                                    <p><dir><tt><font color="#000080">
                                                                                        &lt;?php<br><dir>
                                                                                        $halaman = pdf_new();<br>
                                                                                        pdf_open_file($halaman);<br><br>
                                                                                        <font color="#800000">
                                                                                            // Halaman Pertama
                                                                                        </font><br>
                                                                                        pdf_begin_page($halaman,595,842);<br><br>
                                                                                        <font color="#800000">
                                                                                            // Set Bookmark Awal dan Jenis Huruf
                                                                                        </font><br>
                                                                                        $top = pdf_add_bookmark($halaman, "Sistem Operasi");<br>
                                                                                        $font = pdf_findfont($halaman,"Helvetica-Bold","host",0);<br><br>
                                                                                        $gambar = pdf_open_jpeg($halaman, "freebsd.jpg");<br>
                                                                                        pdf_add_thumbnail($halaman, $gambar);<br>
                                                                                        pdf_setfont($halaman, $font, 20);<br>
                                                                                        pdf_add_bookmark($halaman, "FreeBSD", $top);<br>
                                                                                        pdf_show_xy($halaman, "Ini adalah halaman tentang FreeBSD", 50, 670);<br>
                                                                                        pdf_place_image($halaman, $gambar, 50, 700, 1);<br>
                                                                                        pdf_close_image($halaman,$gambar);<br>
                                                                                        pdf_end_page($halaman);<br><br>
                                                                                        <font color="#800000">
                                                                                            // Halaman Kedua
                                                                                        </font><br>
                                                                                        pdf_begin_page($halaman,595,842);<br>
                                                                                        $gambar = pdf_open_jpeg($halaman, "linux.jpg");<br>
                                                                                        pdf_add_thumbnail($halaman, $gambar);<br>
                                                                                        pdf_setfont($halaman, $font, 20);<br>
                                                                                        pdf_add_bookmark($halaman, "Linux", $top);<br>
                                                                                        pdf_show_xy($halaman, "Ini adalah halaman tentang Linux", 50, 670);<br>
                                                                                        pdf_place_image($halaman, $gambar, 50, 700, 1);<br>
                                                                                        pdf_close_image($halaman,$gambar);<br>
                                                                                        pdf_end_page($halaman);<br><br>
                                                                                        <font color="#800000">
                                                                                            // Halaman Ketiga
                                                                                        </font><br>
                                                                                        pdf_begin_page($halaman,595,842);<br>
                                                                                        $gambar = pdf_open_jpeg($halaman, "mac.jpg");<br>
                                                                                        pdf_add_thumbnail($halaman, $gambar);<br>
                                                                                        pdf_setfont($halaman, $font, 20);<br>
                                                                                        pdf_add_bookmark($halaman, "Mac", $top);<br>
                                                                                        pdf_show_xy($halaman, "Ini adalah halaman tentang Mac", 50, 670);<br>
                                                                                        pdf_place_image($halaman, $gambar, 50, 700, 1);<br>
                                                                                        pdf_close_image($halaman,$gambar);<br>
                                                                                        pdf_end_page($halaman);<br><br>

                                                                                        pdf_close($halaman);<br>
                                                                                        $buf = pdf_get_buffer($halaman);<br>
                                                                                        $panjangbuffer = strlen($buf);<br>
                                                                                        Header("Content-type:application/pdf");<br>
                                                                                        Header("Content-Length:$panjangbuffer");<br>
                                                                                        Header("Content-Disposition:inline; filename=tandabuku.pdf");<br>
                                                                                        echo $buf;<br>
                                                                                        pdf_delete($halaman);<br></dir>
                                                                                        ?&gt;<br>
                                                                                    </font></tt></dir></p>

                                                                                    <h2>Habis Ini, Terus...</h2>
                                                                                    <p>
                                                                                        Jika Anda telah mempelajari artikel ini sampai pada tahap ini, maka Anda telah
                                                                                        memiliki dasar yang cukup untuk membuat dokumen PDF dengan PHP dan PDFLib.
                                                                                        Keterangan mengenai fungsi-fungsi PDF yang digunakan dalam skrip contoh di
                                                                                        artikel ini dapat Anda pelajari lebih detil pada Manual PHP yang tersedia di
                                                                                        <a href="http://www.php.net">http://www.php.net</a>. Selamat menjadi PDF Maker!

                                                                                        <?php include "footer.php"; ?>