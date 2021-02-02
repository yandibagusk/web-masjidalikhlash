<?php
session_start();
error_reporting(0);
$con = new mysqli("localhost","root","","masjidalikhlash");

class user {
	public $koneksi;

	function __construct($con){
		$this->koneksi = $con;
	}

	function login($usr,$pass){
		$u=$this->koneksi->real_escape_string($usr);
		$p=$this->koneksi->real_escape_string($pass);

		$select=$this->koneksi->query("SELECT * FROM user WHERE username='$u' AND password='$p' AND status='Aktif' limit 1");
		$cek=$select->num_rows;
		$row=$select->fetch_assoc();
		$_SESSION['id'] = $row['username'];
		$_SESSION['hak_akses'] = $row['hak_akses'];
		$_SESSION['cek'] = "login";
		if ($cek>0) {
			if($row['hak_akses']=='Superadmin'){
				echo "<script>setTimeout(function () {
					swal({
						title: 'Login Berhasil',
						type: 'success',
						showConfirmButton: false,
						timer: 1200,
						});
						},10);
						</script>";
						echo "<script>
						setTimeout(function () {
							window.location.href= 'superadmin/index.php';
							},1230);
							</script>";
						} else if($row['hak_akses']=='Admin') {
							echo "<script>setTimeout(function () {
								swal({
									title: 'Login Berhasil',
									type: 'success',
									showConfirmButton: false,
									timer: 1200,
									});
									},10);
									</script>";
									echo "<script>
									setTimeout(function () {
										window.location.href= 'admin/index.php';
										},1230);
										</script>";
									} else if($row['hak_akses']=='Pemateri'){
										echo "<script>setTimeout(function () {
											swal({
												title: 'Login Berhasil',
												type: 'success',
												showConfirmButton: false,
												timer: 1200,
												});
												},10);
												</script>";
												echo "<script>
												setTimeout(function () {
													window.location.href= '#';
													},1230);
													</script>";
												} 
											} else {
												echo "<script>setTimeout(function () {
													swal({
														title: 'Login Gagal',
														type: 'error',
														showConfirmButton: false,
														timer: 1200,
														});
														},10);
														</script>";
														echo "<script>
														setTimeout(function () {
															window.location.href= 'index.php?page=login';
															},1230);
															</script>";
														}
													}



													/*PENOMORAN OTOMATIS*/
													function create_iduser(){
														$cariid = $this->koneksi->query("SELECT MAX(id_user) FROM user") or die (mysql_error());
														$dataid = mysqli_fetch_array($cariid);
														if($dataid) {
															$nilaiid = substr($dataid[0], 2);
															$id = (int) $nilaiid;
															$id = $id + 1;
															$id_otomatis = "U".str_pad($id, 3, "0", STR_PAD_LEFT);
															return $id_otomatis;
														} else {
															$id_otomatis = "";
														}
													}

													function create_idposting(){
														$cariid = $this->koneksi->query("SELECT MAX(id_posting) FROM posting") or die (mysql_error());
														$dataid = mysqli_fetch_array($cariid);
														if($dataid) {
															$nilaiid = substr($dataid[0], 2);
															$id = (int) $nilaiid;
															$id = $id + 1;
															$id_otomatis = "P".str_pad($id, 3, "0", STR_PAD_LEFT);
															return $id_otomatis;
														} else {
															$id_otomatis = "";
														}
													}

													function create_idsaran(){
														$cariid = $this->koneksi->query("SELECT MAX(id_saran) FROM saran") or die (mysql_error());
														$dataid = mysqli_fetch_array($cariid);
														if($dataid) {
															$nilaiid = substr($dataid[0], 2);
															$id = (int) $nilaiid;
															$id = $id + 1;
															$id_otomatis = "SRN".str_pad($id, 3, "0", STR_PAD_LEFT);
															return $id_otomatis;
														} else {
															$id_otomatis = "";
														}
													}
													
													function create_idkegiatan(){
														$cariid = $this->koneksi->query("SELECT MAX(id_kegiatan) FROM kegiatan") or die (mysql_error());
														$dataid = mysqli_fetch_array($cariid);
														if($dataid) {
															$nilaiid = substr($dataid[0], 2);
															$id = (int) $nilaiid;
															$id = $id + 1;
															$id_otomatis = "KG".str_pad($id, 3, "0", STR_PAD_LEFT);
															return $id_otomatis;
														} else {
															$id_otomatis = "";
														}
													}



													/*USER ACCESS*/
													function jum_user(){
														$select = $this->koneksi->query("SELECT COUNT(*) AS jumlah FROM user");
														while ($fetch = $select->fetch_assoc()) {
															$data[] = $fetch;
														}
														return $data;
													}

													function max_user(){
														$select = $this->koneksi->query("SELECT COUNT(*) AS jumlah FROM user WHERE status='Aktif'");
														while ($fetch = $select->fetch_assoc()) {
															$data[] = $fetch;
														}
														return $data;
													}

													function min_user(){
														$select = $this->koneksi->query("SELECT COUNT(*) AS jumlah FROM user WHERE status='Tidak Aktif'");
														while ($fetch = $select->fetch_assoc()) {
															$data[] = $fetch;
														}
														return $data;
													}

													function add_user($id_user, $username, $password, $hak_akses, $status){
														$cek = $this->koneksi->query("SELECT * FROM user WHERE username='$username'");
														if($cek->num_rows>0){
															echo "<script>setTimeout(function () { 
																swal({
																	title: 'Username Sudah Ada',
																	type: 'error',
																	showConfirmButton: false,
																	timer: 1800,
																	});  
																	},10);
																	window.setTimeout(function(){ 
																		window.location.replace('index.php?page=useraccess');
																	} ,1800); </script>";
																} else {
																	$this->koneksi->query("INSERT INTO user (id_user, username, password, hak_akses, status) VALUES('$id_user','$username','$password','$hak_akses','$status')");
																	echo "<script>setTimeout(function () {
																		swal({
																			title: 'User Berhasil Ditambahkan',
																			type: 'success',
																			showConfirmButton: false,
																			timer: 1800,
																			});  
																			},10);
																			window.setTimeout(function(){ 
																				window.location.replace('index.php?page=useraccess');
																			} ,1800); </script>";
																		}
																	}

																	function select_user() {
																		$select = $this->koneksi->query("SELECT * FROM user");
																		while ($fetch = $select->fetch_assoc()) {
																			$data[] = $fetch;
																		}
																		return $data;
																	}

																	function update_user($id_user, $username, $password, $hak_akses, $status){
																		$this->koneksi->query("UPDATE user SET username='$username', password='$password', hak_akses='$hak_akses', status='$status' WHERE id_user='$id_user'") or die(mysqli_error($this->koneksi));
																		echo "<script>setTimeout(function () { 
																			swal({
																				title: 'Data Berhasil Diupdate',
																				type: 'success',
																				showConfirmButton: false,
																				timer: 1800,
																				});  
																				},10); 
																				window.setTimeout(function(){
																					window.location.replace('index.php?page=useraccess');
																				} ,1800); </script>";
																			}

																			function del_user($id_user){
																				$this->koneksi->query("DELETE FROM user WHERE id_user='$id_user'");
																				echo "<script>setTimeout(function () {
																					swal({
																						title: 'Data Berhasil Dihapus',
																						type: 'success',
																						showConfirmButton: false,
																						timer: 1800,
																						});  
																						},10); 
																						window.setTimeout(function(){ 
																							window.location.replace('index.php?page=useraccess');
																						} ,1800); </script>";
																					}


																					/*BERITA*/
																					function jum_posting(){
																						$select = $this->koneksi->query("SELECT COUNT(*) AS jumlah FROM posting");
																						while ($fetch = $select->fetch_assoc()) {
																							$data[] = $fetch;
																						}
																						return $data;
																					}

																					function add_posting($id_posting, $judul, $isi, $foto, $kategori){
																						$cek = $this->koneksi->query("SELECT * FROM berita WHERE judul='$judul'");
																						if($cek->num_rows>0){
																							echo "<script>setTimeout(function () {
																								swal({
																									title: 'Sudah Pernah Diposting',
																									type: 'error',
																									showConfirmButton: false,
																									timer: 1800,
																									});
																									},15); 
																									window.setTimeout(function(){ 
																										window.location.replace('index.php?page=posting');
																									} ,1800); </script>";
																								} else {
																									$nama_foto=$foto['name'];
																									$lokasi_foto=$foto['tmp_name'];
																									if (!empty($lokasi_foto)) {
																										move_uploaded_file($lokasi_foto, "../assets/img/$nama_foto");
																									}
																									$this->koneksi->query("INSERT INTO posting(id_posting, judul, isi, foto, kategori) VALUES ('$id_posting','$judul','$isi','$nama_foto','$kategori')") or die(mysqli_error($this->koneksi));
																									echo "<script>setTimeout(function () { 
																										swal({
																											title: 'Berhasil Diposting',
																											type: 'success',
																											showConfirmButton: false,
																											timer: 1800,
																											});  
																											},15); 
																											window.setTimeout(function(){ 
																												window.location.replace('index.php?page=posting');
																											} ,1800); </script>";
																										}
																									}		

																									function select_posting() {
																										$select = $this->koneksi->query("SELECT * FROM posting");
																										while ($fetch = $select->fetch_assoc()) {
																											$data[] = $fetch;
																										}
																										return $data;
																									}

																									function one_select_posting($id_posting){
																										$select=$this->koneksi->query("SELECT * FROM posting WHERE id_posting='$id_posting';");
																										$fetch = $select->fetch_assoc();
																										return $fetch;
																									}

																									function update_posting($id_posting, $judul, $isi, $foto, $kategori){
																										$nama_foto=$foto['name'];
																										$lokasi_foto=$foto['tmp_name'];
																										if(!empty($lokasi_foto)){
																											$data_lama = $this->one_select_posting(id_posting);
																											$foto_lama = $data_lama['foto'];
																											if(file_exists("../assets/img/$foto_lama"))
																											{
																												unlink("../assets/img/$foto_lama");
																											}
																											move_uploaded_file($lokasi_foto,"../assets/img/$nama_foto");
																											$this->koneksi->query("UPDATE posting SET judul='$judul', isi='$isi', foto='$nama_foto', kategori='$kategori' WHERE id_posting='$id_posting'") or die(mysqli_error($this->koneksi));
																											echo "<script>setTimeout(function () { 
																												swal({
																													title: 'Berhasil Diupdate',
																													type: 'success',
																													showConfirmButton: false,
																													timer: 1800,
																													});  
																													},15);
																													window.setTimeout(function(){ 
																														window.location.replace('index.php?page=posting');
																													} ,1800); </script>";
																												}
																												else
																												{
																													$this->koneksi->query("UPDATE posting SET judul='$judul', isi='$isi', kategori='$kategori' WHERE id_posting='$id_posting'") or die(mysqli_error($this->koneksi));
																													echo "<script>setTimeout(function () {
																														swal({
																															title: 'Berhasil Diupdate',
																															type: 'success',
																															showConfirmButton: false,
																															timer: 1800,
																															});  
																															},15); 
																															window.setTimeout(function(){ 
																																window.location.replace('index.php?page=posting');
																															} ,1800); </script>";
																														}
																													}

																													function del_posting($id_posting){
																														$data_lama = $this->one_select_posting($id_posting);
																														$foto_lama = $data_lama['foto'];
																														if(file_exists("../assets/img/$foto_lama")) {
																															if($foto_lama != "default.png") {
																																unlink("../assets/img/$foto_lama");
																															}
																															$this->koneksi->query("DELETE FROM posting WHERE id_posting='$id_posting'") or die(mysqli_error($this->koneksi));
																															echo "<script>setTimeout(function () {
																																swal({
																																	title: 'Berhasil Dihapus',
																																	type: 'success',
																																	showConfirmButton: false,
																																	timer: 1800,
																																	});
																																	},10);
																																	window.setTimeout(function(){
																																		window.location.replace('index.php?page=posting');
																																	} ,1800); </script>";
																																} else {
																																	$this->koneksi->query("DELETE FROM posting WHERE id_posting='$id_posting'") or die(mysqli_error($this->koneksi));
																																	echo "<script>setTimeout(function () {
																																		swal({
																																			title: 'Berhasil Dihapus',
																																			type: 'success',
																																			showConfirmButton: false,
																																			timer: 1800,
																																			});
																																			},10);
																																			window.setTimeout(function(){
																																				window.location.replace('index.php?page=posting');
																																			} ,1800); </script>";
																																		}
																																	}

																																	/*KRITIK DAN SARAN*/
																																	function jum_kritik(){
																																		$select = $this->koneksi->query("SELECT COUNT(*) AS jumlah FROM saran");
																																		while ($fetch = $select->fetch_assoc()) {
																																			$data[] = $fetch;
																																		}
																																		return $data;
																																	}
																																	function add_saran($id_saran, $nama, $email, $saran){
																																		$cek = $this->koneksi->query("SELECT * FROM saran WHERE id_saran='$id_saran'");
																																		if($cek->num_rows>0){
																																			echo "<script>setTimeout(function () { 
																																				swal({
																																					title: 'Data Sudah Ada',
																																					type: 'error',
																																					showConfirmButton: false,
																																					timer: 800,
																																					});  
																																					},10);
																																					window.setTimeout(function(){ 
																																						window.location.replace('index.php?page=kritikdansaran');
																																					} ,800); </script>";
																																				} else {
																																					$this->koneksi->query("INSERT INTO saran (id_saran, nama, email, saran) VALUES('$id_saran','$nama','$email','$saran')");
																																					echo "<script>setTimeout(function () {
																																						swal({
																																							title: 'Berhasil Disimpan',
																																							type: 'success',
																																							showConfirmButton: false,
																																							timer: 800,
																																							});  
																																							},10);
																																							window.setTimeout(function(){ 
																																								window.location.replace('index.php?page=kritikdansaran');
																																							} ,800); </script>";
																																						}
																																					}

																																					function select_saran() {
																																						$select = $this->koneksi->query("SELECT * FROM saran");
																																						while ($fetch = $select->fetch_assoc()) {
																																							$data[] = $fetch;
																																						}
																																						return $data;
																																					}

																																					function update_saran($id_saran, $nama, $email, $saran){
																																						$this->koneksi->query("UPDATE saran SET id_saran='$id_saran', nama='$nama', email='$email', saran='$saran' WHERE id_saran='$id_saran'") or die(mysqli_error($this->koneksi));
																																						echo "<script>setTimeout(function () { 
																																							swal({
																																								title: 'Berhasil Diupdate',
																																								type: 'success',
																																								showConfirmButton: false,
																																								timer: 1800,
																																								});  
																																								},10); 
																																								window.setTimeout(function(){
																																									window.location.replace('index.php?page=kritikdansaran');
																																								} ,1800); </script>";
																																							}

																																							function del_saran($id_saran){
																																								$this->koneksi->query("DELETE FROM saran WHERE id_saran='$id_saran'");
																																								echo "<script>setTimeout(function () {
																																									swal({
																																										title: 'Berhasil Dihapus',
																																										type: 'success',
																																										showConfirmButton: false,
																																										timer: 1800,
																																										});  
																																										},10); 
																																										window.setTimeout(function(){ 
																																											window.location.replace('index.php?page=kritikdansaran');
																																										} ,1800); </script>";
																																									}
																																									
																																									
																																									/*KEGIATAN*/
																																									function jum_kegiatan(){
																																										$select = $this->koneksi->query("SELECT COUNT(*) AS jumlah FROM kegiatan");
																																										while ($fetch = $select->fetch_assoc()) {
																																											$data[] = $fetch;
																																										}
																																										return $data;
																																									}

																																									function add_kegiatan($id_kegiatan, $nama, $tempat, $waktu, $deskripsi, $foto){
																																										$cek = $this->koneksi->query("SELECT * FROM kegiatan WHERE nama='$nama'");
																																										if($cek->num_rows>0){
																																											echo "<script>setTimeout(function () {
																																												swal({
																																													title: 'Sudah Pernah Diposting',
																																													type: 'error',
																																													showConfirmButton: false,
																																													timer: 1800,
																																													});
																																													},15); 
																																													window.setTimeout(function(){ 
																																														window.location.replace('index.php?page=kegiatan');
																																													} ,1800); </script>";
																																												} else {
																																													$nama_foto=$foto['name'];
																																													$lokasi_foto=$foto['tmp_name'];
																																													if (!empty($lokasi_foto)) {
																																														move_uploaded_file($lokasi_foto, "../assets/img/$nama_foto");
																																													}
																																													$this->koneksi->query("INSERT INTO kegiatan(id_kegiatan, nama, tempat, waktu, deskripsi, foto) VALUES ('$id_kegiatan','$nama','$tempat','$waktu','$deskripsi','$nama_foto')") or die(mysqli_error($this->koneksi));
																																													echo "<script>setTimeout(function () { 
																																														swal({
																																															title: 'Berhasil Diposting',
																																															type: 'success',
																																															showConfirmButton: false,
																																															timer: 1800,
																																															});  
																																															},15); 
																																															window.setTimeout(function(){ 
																																																window.location.replace('index.php?page=kegiatan');
																																															} ,1800); </script>";
																																														}
																																													}		

																																													function select_kegiatan() {
																																														$select = $this->koneksi->query("SELECT * FROM kegiatan");
																																														while ($fetch = $select->fetch_assoc()) {
																																															$data[] = $fetch;
																																														}
																																														return $data;
																																													}

																																													function one_select_kegiatan($id_kegiatan){
																																														$select=$this->koneksi->query("SELECT * FROM kegiatan WHERE id_kegiatan='$id_kegiatan';");
																																														$fetch = $select->fetch_assoc();
																																														return $fetch;
																																													}

																																													function update_kegiatan($id_kegiatan, $nama, $tempat, $waktu, $deskripsi, $foto){
																																														$nama_foto=$foto['name'];
																																														$lokasi_foto=$foto['tmp_name'];
																																														if(!empty($lokasi_foto)){
																																															$data_lama = $this->one_select_kegiatan(id_kegiatan);
																																															$foto_lama = $data_lama['foto'];
																																															if(file_exists("../assets/img/$foto_lama"))
																																															{
																																																unlink("../assets/img/$foto_lama");
																																															}
																																															move_uploaded_file($lokasi_foto,"../assets/img/$nama_foto");
																																															$this->koneksi->query("UPDATE kegiatan SET nama='$nama', tempat='$tempat', waktu='$waktu', deskripsi='$deskripsi', foto='$nama_foto' WHERE id_kegiatan='$id_kegiatan'") or die(mysqli_error($this->koneksi));
																																															echo "<script>setTimeout(function () { 
																																																swal({
																																																	title: 'Berhasil Diupdate',
																																																	type: 'success',
																																																	showConfirmButton: false,
																																																	timer: 1800,
																																																	});  
																																																	},15);
																																																	window.setTimeout(function(){ 
																																																		window.location.replace('index.php?page=kegiatan');
																																																	} ,1800); </script>";
																																																}
																																																else
																																																{
																																																	$this->koneksi->query("UPDATE kegiatan SET nama='$nama', tempat='$tempat', waktu='$waktu', deskripsi='$deskripsi' WHERE id_kegiatan='$id_kegiatan'") or die(mysqli_error($this->koneksi));
																																																	echo "<script>setTimeout(function () {
																																																		swal({
																																																			title: 'Berhasil Diupdate',
																																																			type: 'success',
																																																			showConfirmButton: false,
																																																			timer: 1800,
																																																			});  
																																																			},15); 
																																																			window.setTimeout(function(){ 
																																																				window.location.replace('index.php?page=kegiatan');
																																																			} ,1800); </script>";
																																																		}
																																																	}

																																																	function del_kegiatan($id_kegiatan){
																																																		$data_lama = $this->one_select_kegiatan($id_kegiatan);
																																																		$foto_lama = $data_lama['foto'];
																																																		if(file_exists("../assets/img/$foto_lama")) {
																																																			if($foto_lama != "default.png") {
																																																				unlink("../assets/img/$foto_lama");
																																																			}
																																																			$this->koneksi->query("DELETE FROM kegiatan WHERE id_kegiatan='$id_kegiatan'") or die(mysqli_error($this->koneksi));
																																																			echo "<script>setTimeout(function () {
																																																				swal({
																																																					title: 'Berhasil Dihapus',
																																																					type: 'success',
																																																					showConfirmButton: false,
																																																					timer: 1800,
																																																					});
																																																					},10);
																																																					window.setTimeout(function(){
																																																						window.location.replace('index.php?page=kegiatan');
																																																					} ,1800); </script>";
																																																				} else {
																																																					$this->koneksi->query("DELETE FROM kegiatan WHERE id_kegiatan='$id_kegiatan'") or die(mysqli_error($this->koneksi));
																																																					echo "<script>setTimeout(function () {
																																																						swal({
																																																							title: 'Berhasil Dihapus',
																																																							type: 'success',
																																																							showConfirmButton: false,
																																																							timer: 1800,
																																																							});
																																																							},10);
																																																							window.setTimeout(function(){
																																																								window.location.replace('index.php?page=kegiatan');
																																																							} ,1800); </script>";
																																																						}
																																																					}

																																																					/*USER USING*/																																		
																																																					function select_postingan_terkini() {
																																																						$select = $this->koneksi->query("SELECT * FROM posting ORDER BY id_posting DESC LIMIT 6");
																																																						while ($fetch = $select->fetch_assoc()) {
																																																							$data[] = $fetch;
																																																						}
																																																						return $data;
																																																					}
																																																					
																																																					function select_berita_terkini() {
																																																						$select = $this->koneksi->query("SELECT * FROM posting WHERE kategori='Berita' ORDER BY id_posting DESC LIMIT 6");
																																																						while ($fetch = $select->fetch_assoc()) {
																																																							$data[] = $fetch;
																																																						}
																																																						return $data;
																																																					}
																																																					
																																																					function select_artikel_terkini() {
																																																						$select = $this->koneksi->query("SELECT * FROM posting WHERE kategori='Artikel' ORDER BY id_posting DESC LIMIT 6");
																																																						while ($fetch = $select->fetch_assoc()) {
																																																							$data[] = $fetch;
																																																						}
																																																						return $data;
																																																					}

																																																					function select_berita_all() {
																																																						$select = $this->koneksi->query("SELECT * FROM posting WHERE kategori='Berita' ORDER BY id_posting DESC");
																																																						while ($fetch = $select->fetch_assoc()) {
																																																							$data[] = $fetch;
																																																						}
																																																						return $data;
																																																					}

																																																					function select_detail_berita($id) {
																																																						$select = $this->koneksi->query("SELECT * FROM posting WHERE kategori='Berita' AND id_posting='$id'");
																																																						while ($fetch = $select->fetch_assoc()) {
																																																							$data[] = $fetch;
																																																						}
																																																						return $data;
																																																					}
																																																					
																																																					function select_kegiatan_all() {
																																																						$select = $this->koneksi->query("SELECT * FROM kegiatan ORDER BY id_kegiatan DESC");
																																																						while ($fetch = $select->fetch_assoc()) {
																																																							$data[] = $fetch;
																																																						}
																																																						return $data;
																																																					}

																																																					function select_detail_kegiatan($id) {
																																																						$select = $this->koneksi->query("SELECT * FROM kegiatan WHERE id_kegiatan='$id'");
																																																						while ($fetch = $select->fetch_assoc()) {
																																																							$data[] = $fetch;
																																																						}
																																																						return $data;
																																																					}
																																																					
																																																					function select_artikel_all() {
																																																						$select = $this->koneksi->query("SELECT * FROM posting WHERE kategori='Artikel' ORDER BY id_posting DESC");
																																																						while ($fetch = $select->fetch_assoc()) {
																																																							$data[] = $fetch;
																																																						}
																																																						return $data;
																																																					}

																																																					function select_detail_artikel($id) {
																																																						$select = $this->koneksi->query("SELECT * FROM posting WHERE kategori='Artikel' AND id_posting='$id'");
																																																						while ($fetch = $select->fetch_assoc()) {
																																																							$data[] = $fetch;
																																																						}
																																																						return $data;
																																																					}

																																																					function add_saran_user($id_saran, $nama ,$email, $saran){
																																																						$cek = $this->koneksi->query("SELECT * FROM saran WHERE id_saran='$id_saran'");
																																																						if($cek->num_rows>0){
																																																							echo "<script>setTimeout(function () { 
																																																								swal({
																																																									title: 'Data Sudah Ada',
																																																									type: 'error',
																																																									showConfirmButton: false,
																																																									timer: 1800,
																																																									});  
																																																									},10);
																																																									window.setTimeout(function(){ 
																																																										window.location.replace('index.php?page=kritikdansaran');
																																																									} ,1800); </script>";
																																																								} else {
																																																									$this->koneksi->query("INSERT INTO saran (id_saran, nama, email, saran) VALUES('$id_saran','$nama','$email','$saran')");
																																																									echo "<script>setTimeout(function () {
																																																										swal({
																																																											title: 'Kritik & Saran Disampaikan!',
																																																											text: 'Terimakasih sudah memberikan Kritik & Saran kepada kami!',
																																																											type: 'success',
																																																											showConfirmButton: false,
																																																											timer: 1800,
																																																											});  
																																																											},15);
																																																											window.setTimeout(function(){ 
																																																												window.location.replace('index.php?page=kritikdansaran');
																																																											} ,1800); </script>";
																																																										}
																																																									}



																																																								}
																																																								$data = new user($con);
																																																								?>