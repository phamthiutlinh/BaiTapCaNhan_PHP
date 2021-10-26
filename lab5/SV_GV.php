<html>
    <head>
        <title>Thông tin sinh viên, giảng viên</title>
        <style>
		fieldset {
			background-color: #eeeeee;
		}

		legend {
			background-color: gray;
			color: white;
			padding: 5px 10px;
		}

		input {
			margin: 5px;
		}
	</style>
    </head>
    <body>
        <?php
            abstract class Nguoi
            {
                    protected $ten, $diachi,$gioitinh;
                    public function setTen($ten)
                    {
                            $this->ten = $ten;
                    }
                    public function getTen()
                    {
                            return $this->ten;
                    }
                    public function setDiaChi($diaChi)
                    {
                            $this->diachi = $diaChi;
                    }
                    public function getDiaChi()
                    {
                            return $this->diachi;
                    }
                    public function setGioiTinh($gioiTinh)
                    {
                            $this->gioitinh = $gioiTinh;
                    }
                    public function getGioiTinh()
                    {
                            return $this->gioitinh;
                    }
                    abstract public function in_Thong_Tin();
                    
            }
            
            class SinhVien extends Nguoi
            {
                protected $lophoc,$nganhhoc,$diemthuong;
                public function setLopHoc($lopHoc)
                    {
                            $this->lophoc = $lopHoc;
                    }
                    public function getLopHoc()
                    {
                            return $this->lophoc;
                    }
                    public function setNganhHoc($nganhHoc)
                    {
                            $this->nganhhoc = $nganhHoc;
                    }
                    public function getNganhHoc()
                    {
                            return $this->nganhhoc;
                    }
                    
                    
                    function in_Thong_Tin() {
                        if($this->nganhhoc=="Công nghệ thông tin")
                            return $this->diemthuong=1.5;
                        if($this->nganhhoc=="Kinh tế")
                            return $this->diemthuong=1;
                        if($this->nganhhoc=="Khác")
                            return $this->diemthuong=0;


                    }
                
            }
            class GiangVien extends Nguoi
            {
                const luong = 1500000;
                protected $trinhdo,$tongluong;
                public function setTrinhDo($trinhDo)
                    {
                            $this->trinhdo = $trinhDo;
                    }
                    public function getTrinhDo()
                    {
                            return $this->trinhdo;
                    }
                    function in_Thong_Tin() {
                        if($this->trinhdo=="Cữ nhân"){
                            $this->tongluong= self::luong * 2.56;
                            return $this->tongluong;
                        }
                        if($this->trinhdo=="Thạc sĩ"){
                            $this->tongluong= self::luong * 3.57;
                            return $this->tongluong;
                        }
                            
                        if($this->trinhdo=="Tiến sĩ"){
                            $this->tongluong= self::luong * 5.66;
                            return $this->tongluong;
                        }
                            
                    }
                }
            
                
                
            $str=null;
            if(isset($_POST['kq']))
            {
                if(isset($_POST['nguoi']) && ($_POST['nguoi'])=="sv"){
                    $sv= new SinhVien();
                    $sv->setTen($_POST['ten']);
                    $sv->setDiaChi($_POST['diachi']);
                    if(isset($_POST['gioitinh']) && ($_POST['gioitinh'])=="nữ")
                        $sv->setGioiTinh ($_POST['gioitinh']);
                    if(isset($_POST['gioitinh']) && ($_POST['gioitinh'])=="nam")
                        $sv->setGioiTinh ($_POST['gioitinh']);
                    $sv->setLopHoc($_POST['lophoc']);
                    if(isset($_POST['nganhhoc']) && ($_POST['nganhhoc'])=="Công nghệ thông tin")
                        $sv->setNganhHoc ($_POST['nganhhoc']);
                    if(isset($_POST['nganhhoc']) && ($_POST['nganhhoc'])=="Kinh tế")
                        $sv->setNganhHoc ($_POST['nganhhoc']);
                    if(isset($_POST['nganhhoc']) && ($_POST['nganhhoc'])=="Khác")
                        $sv->setNganhHoc ($_POST['nganhhoc']);
                    $str="Thông tin sinh viên tên:".$sv->getTen()."\n"
                            ."Địa chỉ:".$sv->getDiaChi()."\n"
                            ."Giới tính:".$sv->getGioiTinh()."\n"
                            ."Lớp học:".$sv->getLopHoc()."\n"
                            ."Ngành học:".$sv->getNganhHoc()."\n"
                            ."Điểm thưởng là:".$sv->in_Thong_Tin();
                }
                if(isset($_POST['nguoi']) && ($_POST['nguoi'])=="gv"){
                    $gv = new GiangVien();
                    $gv->setTen($_POST['ten']);
                    $gv->setDiaChi($_POST['diachi']);
                    if(isset($_POST['gioitinh']) && ($_POST['gioitinh'])=="nữ")
                        $gv->setGioiTinh ($_POST['gioitinh']);
                    if(isset($_POST['gioitinh']) && ($_POST['gioitinh'])=="nam")
                        $gv->setGioiTinh ($_POST['gioitinh']);
                    if(isset($_POST['trinhdo']) && ($_POST['trinhdo'])=="Cữ nhân")
                        $gv->setTrinhDo ($_POST['trinhdo']);
                    if(isset($_POST['trinhdo']) && ($_POST['trinhdo'])=="Tiến sĩ")
                        $gv->setTrinhDo ($_POST['trinhdo']);
                    if(isset($_POST['trinhdo']) && ($_POST['trinhdo'])=="Thạc sĩ")
                        $gv->setTrinhDo ($_POST['trinhdo']);
                    $str="Thông tin giang viên tên:".$gv->getTen()."\n"
                            ."Địa chỉ:".$gv->getDiaChi()."\n"
                            ."Giới tính:".$gv->getGioiTinh()."\n"
                            ."Trình độ:".$gv->getTrinhDo()."\n"
                            ."Lương:".$gv->in_Thong_Tin();
                }
            }
        ?>
        <form action="" method="POST">
            <fieldset>
			<legend>Thông tin sinh viên, giảng viên</legend>
			<table border='0'>
				<tr>
					<td>Chọn người</td>
					<td><input type="radio" name="nguoi" value="sv" <?php if (isset($_POST['nguoi']) && ($_POST['nguoi']) == "sv") echo 'checked' ?> />Sinh viên
						<input type="radio" name="nguoi" value="gv" <?php if (isset($_POST['nguoi']) && ($_POST['nguoi']) == "gv") echo 'checked' ?> />Giảng viên
					</td>
				</tr>
                                <tr>
					<td>Tên:</td>
					<td>
                                            <input type="text" name="ten" value="<?php if (isset($_POST['ten'])) echo $_POST['ten']; ?>"/>
                                        </td>
				</tr>
                                <tr>
					<td>Địa chỉ:</td>
					<td>
                                            <input type="text" name="diachi" value="<?php if (isset($_POST['diachi'])) echo $_POST['diachi']; ?>"/>
                                        </td>
				</tr>
				<tr>
					<td>Giới tính:</td>
                                        <td>
                                            <input type="radio" name="gioitinh" value="nam" <?php if (isset($_POST['gioitinh']) && ($_POST['gioitinh']) == "nam") echo 'checked' ?> />Nam
                                            <input type="radio" name="gioitinh" value="nữ" <?php if (isset($_POST['gioitinh']) && ($_POST['gioitinh']) == "nữ") echo 'checked' ?> />Nữ
                                        </td>
				</tr>
                                <tr>
					<td>Lớp học:</td>
					<td>
                                            <input type="text" name="lophoc" value="<?php if (isset($_POST['lophoc'])) echo $_POST['lophoc']; ?>"/>
                                        </td>
				</tr>
				<tr>
					<td>Ngành học:</td>
                                        <td>
                                            <input type="radio" name="nganhhoc" value="Công nghệ thông tin" <?php if (isset($_POST['nganhhoc']) && ($_POST['nganhhoc']) == "Công nghệ thông tin") echo 'checked' ?> />Công nghệ thông tin
                                            <input type="radio" name="nganhhoc" value="Kinh tế" <?php if (isset($_POST['nganhhoc']) && ($_POST['nganhhoc']) == "Kinh tế") echo 'checked' ?> />Kinh tế
                                            <input type="radio" name="nganhhoc" value="Khác" <?php if (isset($_POST['nganhhoc']) && ($_POST['nganhhoc']) == "Khác") echo 'checked' ?> />Khác
                                        </td>
				</tr>
                                <tr>
					<td>Trình độ:</td>
                                        <td>
                                            <input type="radio" name="trinhdo" value="Cữ nhân" <?php if (isset($_POST['trinhdo']) && ($_POST['trinhdo']) == "Cữ nhân") echo 'checked' ?> />Cữ nhân
                                            <input type="radio" name="trinhdo" value="Thạc sĩ" <?php if (isset($_POST['trinhdo']) && ($_POST['trinhdo']) == "Thạc sĩ") echo 'checked' ?> />Thạc sĩ
                                            <input type="radio" name="trinhdo" value="Tiến sĩ" <?php if (isset($_POST['trinhdo']) && ($_POST['trinhdo']) == "Tiến sĩ") echo 'checked' ?> />Tiến sĩ
                                        </td>
				</tr>
				<tr>
					<td>Kết quả:</td>
					<td><textarea name="ketqua" cols="70" rows="10" disabled="disabled"><?php echo $str; ?></textarea></td>
				</tr>
				<tr>
                                    <td  colspan="2" align="center"><input type="submit" name="kq" value="Hiển thị" /></td>
                                        
				</tr>
				
			</table>
		</fieldset>
        </form>

    </body>
</html>


