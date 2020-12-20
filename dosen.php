<?php include 'index.php'; ?>


<form method="POST">
    <table id="dosen">
        <tr>
            <td> <h1> Form Input Data Dosen </h1> </td>
        </tr>
        <tr>
         <td> Nama </td>
         <td> : </td> 
         <td> <input type="text" name="nama"/> </td> 
        </tr>
        <tr> 
         <td> Tanggal Lahir </td>
         <td> : </td> 
         <td> <input type="date" name="tgllahir"/> </td>
        </tr>
        <tr>
         <td> Tempat Lahir </td>
         <td> : </td> 
         <td> <input type="text" name="tempatlahir"/> </td>
        </tr>
        <tr>
         <td> Program Studi </td> 
         <td> : </td> 
         <td> <select> 
                <option> Sistem Informasi D-III </option>
                <option> Sistem Informasi S1 </option>
            </select> 
         </td>
        </tr>
        <tr>
        <td> Fakultas </td> 
        <td> : </td>
        <td> <input type="text" name="fakultas"/> </td>
        </tr>
        <tr>
        <td> Alamat Rumah </td> 
        <td> : </td> 
        <td>  <input type="text" name="alamat"/> </td>
        <td> <input type="submit" name="submit" value="Simpan"/> </td>
        </tr>
        
    </table>
</form> 
<div class="footer">
    Copyright @ Alibaba Group
</div>
