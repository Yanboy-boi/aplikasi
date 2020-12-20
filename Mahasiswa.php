<?php include 'index.php'; ?>


<form method="POST">
    <table id="mahasiswa">
        <tr>
            <td> <h1> Form Input Data Mahasiswa </h1> </td>
        </tr>
        <tr>
         <td> NIM </td>
         <td> : </td> 
         <td> <input type="text" name="nim"/> </td> 
        </tr>
        <tr> 
         <td> Nama </td>
         <td> : </td> 
         <td> <input type="text" name="nama"/> </td>
        </tr>
        <tr>
         <td> Program Studi </td> 
         <td> : </td> 
         <td><select> 
                <option> Sistem Informasi D-III </option>
                <option> Sistem Informasi S1 </option>
                <option> Teknologi Informasi S1 </option>
                <option> Informatika S1 </option> 
             </select> 
         </td>      
        </tr>
         <tr> 
         <td> Tempat Lahir </td>
         <td> : </td> 
         <td> <input type="text" name="tempatlahir"/> </td>
        </tr>
         <tr> 
         <td> Tanggal Lahir </td>
         <td> : </td> 
         <td> <input type="date" name="tanggallahir"/> </td>
        </tr>
        <tr>
        <td> Jenis Kelamin </td> 
        <td> : </td>
        <td> <input type="radio" name="L"/> Laki Laki
             <input type="radio" name="P"/> Perempuan 
        </td>
        </tr>
        <tr>
        <td> Agama </td> 
        <td> : </td> 
        <td>  <input type="text" name="agama"/> </td>
        </tr>
        <tr>
        <td> Alamat </td> 
        <td> : </td> 
        <td>  <input type="text" name="alamat"/> </td>
        </tr>
        <tr>
        <td> Kota </td> 
        <td> : </td> 
        <td>  <input type="text" name="kota"/> </td>
        </tr>
        <tr>
        <td> Provinsi </td> 
        <td> : </td> 
        <td>  <input type="text" name="provinsi"/> </td>
        <td>  <input type="submit" name="submit" value="Simpan"/> </td>
        </tr>
    </table>
</form> 
<div class="footer">
    Copyright @ Alibaba Group
</div>
