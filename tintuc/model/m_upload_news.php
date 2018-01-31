<?php
	/**
	 * summary
	 */
	class M_upload_news extends database
	{
	    /**
	     * summary
	     */
	    public function upload_news($tieude,$tenkhongdau,$tomtat,$noidung,$hinh,$noibat,$soluotxem,$idloaitin,$create_at,$updated_at)
	    {
	        $sql = "INSERT INTO `tintuc` (`id`, `TieuDe`, `TieuDeKhongDau`, `TomTat`, `NoiDung`, `Hinh`, `NoiBat`, `SoLuotXem`, `idLoaiTin`, `created_at`, `updated_at`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
	        $this = setQery($sql);
	        $result = $this->execute(array($tieude,$tenkhongdau,$tomtat,$noidung,$h0inh,$noibat,$soluotxem,$idloaitin,$create_at,$updated_at));
	    }
	}
?>